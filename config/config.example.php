<?php
/**
 * Application Configuration Template
 * Rename this file to config.php or copy it to customize for production.
 */

return [
    'app' => [
        'name' => 'Mihir Raval - Personal Developer Portfolio',
        'author' => 'Mihir Raval',
        'role' => 'PHP Full Stack Developer',
        'status' => 'OPEN TO ENTRY-LEVEL OPPORTUNITIES',
        'location' => 'Palanpur, Gujarat, India',
        'email' => 'mihiryogirajubhai@gmail.com',
        'education' => [
            'degree' => 'Bachelor of Engineering in Computer Engineering',
            'institution' => 'Government Engineering College, Palanpur',
            'graduation' => '2027',
            'cgpa' => '7.50',
        ],
        'social' => [
            'github' => 'https://github.com/Mihir290545',
            'linkedin' => 'https://www.linkedin.com/in/mihir-raval-2aa82b377/',
            'email' => 'mailto:mihiryogirajubhai@gmail.com',
        ],
        'resume_path' => 'assets/resume/Mihir_Raval_Resume.pdf',
    ],
    'mail' => [
        // Mode: 'file' (stores in data/messages.json securely) or 'mail' (PHP mail()) or 'smtp'
        'mode' => 'file',
        'storage_file' => __DIR__ . '/../data/messages.json',
        'smtp' => [
            'host' => 'smtp.example.com',
            'port' => 587,
            'username' => '',
            'password' => '',
            'encryption' => 'tls',
        ],
    ],
    'security' => [
        'csrf_secret' => 'change-this-to-a-random-string-in-production',
        'rate_limit_seconds' => 30, // seconds between contact form submissions per IP
    ]
];
