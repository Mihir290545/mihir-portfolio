<?php
/**
 * Site Header Template
 */
require_once __DIR__ . '/functions.php';
$profile = $data['profile'] ?? [];
$app = config('app');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- Primary Meta Tags -->
  <title>Mihir Raval | PHP Full Stack Developer &amp; Computer Engineering Student</title>
  <meta name="title" content="Mihir Raval | PHP Full Stack Developer &amp; Computer Engineering Student">
  <meta name="description" content="Personal portfolio of Mihir Raval, an early-career PHP Full Stack Developer and Computer Engineering student from Palanpur, Gujarat. Building practical web applications with PHP, MySQL, and JavaScript.">
  <meta name="author" content="Mihir Raval">
  <meta name="keywords" content="Mihir Raval, PHP Developer, Full Stack Developer, Web Developer, MySQL, Computer Engineering, GEC Palanpur, TaskSphere, DevDock, FinanceFlow">
  <meta name="robots" content="index, follow">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://mihirraval.dev/">
  <meta property="og:title" content="Mihir Raval | PHP Full Stack Developer">
  <meta property="og:description" content="Early-career developer focused on practical, database-driven web applications using PHP, MySQL, and JavaScript.">
  <meta property="og:image" content="assets/images/profile/avatar-placeholder.svg">

  <!-- Twitter Card -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Mihir Raval | PHP Full Stack Developer">
  <meta property="twitter:description" content="Early-career developer focused on practical, database-driven web applications using PHP, MySQL, and JavaScript.">
  <meta property="twitter:image" content="assets/images/profile/avatar-placeholder.svg">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/variables.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/css/animations.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <script>
    // Prevent theme flash by reading localStorage immediately
    (function() {
      var saved = localStorage.getItem('theme');
      if (saved === 'light') {
        document.documentElement.setAttribute('data-theme', 'light');
      }
    })();
  </script>
</head>
<body>
  <!-- Skip to Content Accessibility Link -->
  <a href="#main-content" class="skip-link">Skip to main content</a>

  <!-- Header Navigation -->
  <header class="site-header" role="banner">
    <div class="container header-container">
      <!-- Logo / Monogram -->
      <a href="#hero" class="brand-logo" aria-label="Mihir Raval Portfolio Home">
        <span class="brand-monogram" aria-hidden="true">MR</span>
        <div class="brand-name">
          <span>MIHIR RAVAL</span>
          <span class="brand-title">PHP FULL STACK DEV</span>
        </div>
      </a>

      <!-- Desktop Navigation Menu -->
      <nav id="site-navigation" role="navigation" aria-label="Primary Navigation">
        <ul class="nav-menu" id="nav-menu">
          <li><a href="#hero" class="nav-link active">Home</a></li>
          <li><a href="#about" class="nav-link">About</a></li>
          <li><a href="#skills" class="nav-link">Skills</a></li>
          <li><a href="#projects" class="nav-link">Projects</a></li>
          <li><a href="#experience" class="nav-link">Experience</a></li>
          <li><a href="#principles" class="nav-link">Principles</a></li>
          <li><a href="#contact" class="nav-link">Contact</a></li>
          
          <!-- Mobile Only Status Badge -->
          <li class="nav-mobile-status" style="display: none;">
            <div class="status-pill">
              <span class="status-dot"></span>
              <span><?= e($profile['badge'] ?? 'OPEN TO ENTRY-LEVEL OPPORTUNITIES') ?></span>
            </div>
          </li>
          
          <!-- Mobile Only Resume Button -->
          <li class="nav-mobile-resume" style="display: none;">
            <a href="<?= e($profile['resume'] ?? 'assets/resume/Mihir_Raval_Resume.pdf') ?>" download="Mihir_Raval_Resume.pdf" class="btn btn-secondary btn-sm" style="width: 100%;">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
              <span>Download Resume</span>
            </a>
          </li>
        </ul>
      </nav>

      <!-- Right Header Actions -->
      <div class="header-actions">
        <!-- Desktop Availability Status -->
        <div class="status-pill">
          <span class="status-dot"></span>
          <span><?= e($profile['badge'] ?? 'OPEN TO OPPORTUNITIES') ?></span>
        </div>

        <!-- Download Resume Button (Desktop) -->
        <a href="<?= e($profile['resume'] ?? 'assets/resume/Mihir_Raval_Resume.pdf') ?>" download="Mihir_Raval_Resume.pdf" class="btn btn-secondary btn-sm" style="display: none; @media(min-width: 900px){display: inline-flex;}">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
          <span>Resume</span>
        </a>

        <!-- Theme Toggle -->
        <button type="button" class="theme-toggle-btn" id="theme-toggle" aria-label="Toggle light/dark theme">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor">
            <circle cx="12" cy="12" r="5" stroke-width="2"/>
            <path stroke-linecap="round" stroke-width="2" d="M12 1v2m0 18v2M4.22 4.22l1.42 1.42m12.72 12.72l1.42 1.42M1 12h2m18 0h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/>
          </svg>
        </button>

        <!-- Mobile Menu Toggle Button -->
        <button type="button" class="mobile-toggle-btn" id="mobile-toggle" aria-label="Open mobile navigation menu" aria-expanded="false" aria-controls="nav-menu">
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Main Content Anchor -->
  <main id="main-content">
