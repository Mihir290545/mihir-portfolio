<?php
/**
 * Core Helper Functions
 */

// Configure resilient session path before session_start()
if (session_status() === PHP_SESSION_NONE) {
    $customSessionPath = __DIR__ . '/../data/sessions';
    if (!is_dir($customSessionPath)) {
        @mkdir($customSessionPath, 0750, true);
    }
    if (is_dir($customSessionPath) && is_writable($customSessionPath)) {
        session_save_path($customSessionPath);
    }
    @session_start();
}

/**
 * Escape HTML output for XSS prevention
 */
function e(?string $value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Retrieve configuration value
 */
function config(string $key, $default = null) {
    static $config = null;
    if ($config === null) {
        $file = __DIR__ . '/../config/config.php';
        if (file_exists($file)) {
            $config = require $file;
        } else {
            $config = require __DIR__ . '/../config/config.example.php';
        }
    }

    $keys = explode('.', $key);
    $target = $config;
    foreach ($keys as $part) {
        if (!is_array($target) || !array_key_exists($part, $target)) {
            return $default;
        }
        $target = $target[$part];
    }
    return $target;
}

/**
 * Generate or get existing CSRF token
 */
function csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Validate CSRF token
 */
function verify_csrf(?string $token): bool {
    if (empty($_SESSION['csrf_token']) || empty($token)) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Send standard security headers
 */
function send_security_headers(): void {
    if (!headers_sent()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
    }
}
