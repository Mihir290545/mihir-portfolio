<?php
/**
 * Contact Form Processing Endpoint
 * Validates submissions, enforces CSRF & spam protections, and safely logs messages.
 */

header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/../includes/functions.php';

send_security_headers();

// Check Method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method Not Allowed'
    ]);
    exit;
}

// 1. Rate Limiting Check
$rateLimitSeconds = (int) config('security.rate_limit_seconds', 15);
$lastSubmission = $_SESSION['last_contact_time'] ?? 0;
$currentTime = time();

if (($currentTime - $lastSubmission) < $rateLimitSeconds) {
    http_response_code(429);
    echo json_encode([
        'success' => false,
        'message' => 'Please wait a few seconds before sending another message.'
    ]);
    exit;
}

// 2. Anti-Spam Honeypot Check
$honeypot = trim($_POST['website_hp'] ?? '');
if (!empty($honeypot)) {
    // Silently succeed to fool bot harvesters without recording
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your message has been received.'
    ]);
    exit;
}

// 3. CSRF Verification
$submittedToken = $_POST['csrf_token'] ?? '';
if (!verify_csrf($submittedToken)) {
    http_response_code(403);
    echo json_encode([
        'success' => false,
        'message' => 'Security token expired or invalid. Please refresh the page and try again.'
    ]);
    exit;
}

// 4. Input Sanitization & Validation
$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$subject = trim((string)($_POST['subject'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

$errors = [];

if (empty($name) || mb_strlen($name) < 2) {
    $errors[] = 'Please provide your name (at least 2 characters).';
} elseif (mb_strlen($name) > 100) {
    $errors[] = 'Name is too long (maximum 100 characters).';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please provide a valid email address.';
} elseif (mb_strlen($email) > 150) {
    $errors[] = 'Email is too long.';
}

if (empty($subject) || mb_strlen($subject) < 3) {
    $errors[] = 'Please provide a subject line.';
} elseif (mb_strlen($subject) > 150) {
    $errors[] = 'Subject is too long.';
}

if (empty($message) || mb_strlen($message) < 10) {
    $errors[] = 'Please provide a meaningful message (at least 10 characters).';
} elseif (mb_strlen($message) > 4000) {
    $errors[] = 'Message is too long (maximum 4000 characters).';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'success' => false,
        'message' => implode(' ', $errors)
    ]);
    exit;
}

// 5. Store message safely in data/messages.json
$storageFile = config('mail.storage_file', __DIR__ . '/../data/messages.json');
$storageDir = dirname($storageFile);

if (!is_dir($storageDir)) {
    @mkdir($storageDir, 0750, true);
}

$entry = [
    'id' => uniqid('msg_', true),
    'timestamp' => date('c'),
    'name' => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
    'email' => htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
    'subject' => htmlspecialchars($subject, ENT_QUOTES, 'UTF-8'),
    'message' => htmlspecialchars($message, ENT_QUOTES, 'UTF-8'),
    'ip_hash' => hash('sha256', $_SERVER['REMOTE_ADDR'] ?? 'unknown'),
    'user_agent' => substr($_SERVER['HTTP_USER_AGENT'] ?? 'unknown', 0, 200)
];

$existing = [];
if (file_exists($storageFile)) {
    $raw = @file_get_contents($storageFile);
    if (!empty($raw)) {
        $decoded = @json_decode($raw, true);
        if (is_array($decoded)) {
            $existing = $decoded;
        }
    }
}

// Prepend new message
array_unshift($existing, $entry);

// Limit file size to last 500 messages
if (count($existing) > 500) {
    $existing = array_slice($existing, 0, 500);
}

$saved = @file_put_contents($storageFile, json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

// Update rate limiting timestamp
$_SESSION['last_contact_time'] = $currentTime;

// Also attempt PHP mail() if server environment has it configured
$mailRecipient = config('mail.recipient', 'mihiryogirajubhai@gmail.com');
if (function_exists('mail') && ini_get('sendmail_path')) {
    $mailHeaders = [
        'From: ' . $email,
        'Reply-To: ' . $email,
        'X-Mailer: PHP/' . phpversion()
    ];
    @mail($mailRecipient, '[Portfolio Contact] ' . $subject, $message, implode("\r\n", $mailHeaders));
}

http_response_code(200);
echo json_encode([
    'success' => true,
    'message' => 'Thank you, ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '! Your message has been received. I will get back to you soon.'
]);
