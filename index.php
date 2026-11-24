<?php
/**
 * Mihir Raval - Personal Developer Portfolio
 * Main Entry Point
 */

require_once __DIR__ . '/includes/functions.php';

// Send security headers
send_security_headers();

// Load structured portfolio data
$data = require __DIR__ . '/includes/data.php';
$profile = $data['profile'];
$projects = $data['projects'];
$skills = $data['skills'];
$experience = $data['experience'];
$education = $data['education'];
$principles = $data['principles'];

// Include Site Header
require_once __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     HERO SECTION
     ========================================================================== -->
<section id="hero" class="hero-section" aria-label="Introduction and Overview">
  <div class="container">
    <div class="hero-grid">
      <!-- Left Content Column -->
      <div class="hero-content reveal">
        <div class="hero-availability">
          <div class="status-pill">
            <span class="status-dot"></span>
            <span><?= e($profile['badge']) ?></span>
          </div>
        </div>

        <h1 class="hero-title">
          Building practical web applications with <span class="accent-text">clarity</span> &amp; purpose.
        </h1>

        <div class="hero-role-tag">
          <?= e($profile['role']) ?> &bull; Computer Engineering Student
        </div>

        <p class="hero-description">
          I build database-driven web applications using PHP, MySQL, JavaScript, and modern frontend tools. I focus on practical CRUD workflows, relational database logic, and clean code that solves real problems.
        </p>

        <!-- CTA Buttons -->
        <div class="hero-actions">
          <a href="#projects" class="btn btn-primary">
            <span>View Projects</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#contact" class="btn btn-secondary">
            <span>Contact Me</span>
          </a>
          <a href="<?= e($profile['resume']) ?>" download="Mihir_Raval_Resume.pdf" class="btn btn-ghost">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
            <span>Resume</span>
          </a>
        </div>

        <!-- Social Icons Row -->
        <div class="hero-social">
          <a href="<?= e($profile['social']['github']) ?>" target="_blank" rel="noopener noreferrer" class="hero-social-link" aria-label="Visit Mihir's GitHub Profile">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/></svg>
          </a>
          <a href="<?= e($profile['social']['linkedin']) ?>" target="_blank" rel="noopener noreferrer" class="hero-social-link" aria-label="Visit Mihir's LinkedIn Profile">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
          <button type="button" onclick="copyEmailToClipboard('<?= e($profile['social']['email']) ?>')" class="hero-social-link" aria-label="Copy Mihir's Email Address" title="Copy email address">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </button>
        </div>
      </div>

      <!-- Right Column: Editorial Profile & Tech Overview Card -->
      <div class="hero-visual reveal reveal-delay-1">
        <div class="editorial-card">
          <div class="card-top-bar">
            <span class="card-tag">// DEVELOPER PROFILE</span>
            <span class="card-location"><?= e($profile['location']) ?></span>
          </div>

          <div class="card-profile-header">
            <div class="card-avatar">
              <img src="assets/images/profile/avatar-placeholder.svg" alt="Mihir Raval Monogram Avatar" width="68" height="68">
            </div>
            <div>
              <div class="card-id-name"><?= e($profile['name']) ?></div>
              <div class="card-id-title"><?= e($profile['role']) ?></div>
            </div>
          </div>

          <!-- Academic & System Metrics -->
          <div class="card-metric-list">
            <div class="metric-box">
              <div class="metric-label">ACADEMIC STATUS</div>
              <div class="metric-val">B.E. Computer Eng.</div>
            </div>
            <div class="metric-box">
              <div class="metric-label">CURRENT CGPA</div>
              <div class="metric-val"><?= e($education['cgpa']) ?> / 10.0</div>
            </div>
            <div class="metric-box">
              <div class="metric-label">GRADUATION</div>
              <div class="metric-val">Class of 2027</div>
            </div>
            <div class="metric-box">
              <div class="metric-label">PRIMARY STACK</div>
              <div class="metric-val" style="color: var(--accent);">PHP &bull; MySQL &bull; JS</div>
            </div>
          </div>

          <!-- Terminal-style Focus Snapshot -->
          <div class="card-terminal-snippet">
            <span class="snippet-prompt">&gt;</span>current_focus: <span style="color: var(--accent);">CRUD systems, backend validation, API integration</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     ABOUT SECTION
     ========================================================================== -->
<section id="about" class="section section-alt" aria-label="About Mihir Raval">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-label">BACKGROUND</div>
      <h2 class="section-title">About Me</h2>
      <p class="section-subtitle">
        An early-career developer committed to building functional, database-driven applications.
      </p>
    </div>

    <div class="about-grid">
      <!-- Left: Narrative -->
      <div class="about-narrative reveal">
        <p class="about-lead">
          I am currently pursuing my Bachelor of Engineering in Computer Engineering at Government Engineering College, Palanpur (expected graduation in 2027, current CGPA: 7.50).
        </p>
        <p>
          My interest lies in backend programming, relational database systems, and full-stack web development. I enjoy understanding how user input moves from a browser form, through backend validation and business logic, down into relational MySQL tables.
        </p>
        <p>
          I have hands-on experience building personal and academic applications, including full CRUD platforms, API testing tools, and financial tracking software. Recently, I completed an internship as a Junior MERN Stack Developer Intern at <strong>Depple Sorf Pvt. Ltd.</strong>, where I worked with responsive components, client-side state, form handling, and RESTful API integrations.
        </p>
        <p>
          Rather than relying on abstract claims, I prefer learning by building real projects, systematically debugging edge cases, and continuously refining code quality.
        </p>
      </div>

      <!-- Right: Credentials Card -->
      <div class="about-credentials reveal reveal-delay-1">
        <div class="about-credentials-card">
          <div class="credential-item">
            <span class="cred-title">CURRENT EDUCATION</span>
            <span class="cred-name"><?= e($education['degree']) ?></span>
            <span class="cred-detail"><?= e($education['institution']) ?> (Expected 2027)</span>
            <span class="cred-detail" style="color: var(--accent); font-weight: 600;">Current CGPA: <?= e($education['cgpa']) ?></span>
          </div>

          <div class="credential-item">
            <span class="cred-title">PRACTICAL EXPERIENCE</span>
            <span class="cred-name">Junior MERN Stack Developer Intern</span>
            <span class="cred-detail">Depple Sorf Pvt. Ltd.</span>
            <span class="cred-detail">Frontend layouts, form validation, and REST API consumption.</span>
          </div>

          <div class="credential-item">
            <span class="cred-title">TARGET OPPORTUNITIES</span>
            <span class="cred-name">Entry-Level Engineering Roles</span>
            <span class="cred-detail">PHP Developer &bull; Junior Full Stack Developer &bull; Backend Developer &bull; Junior Software Developer</span>
          </div>

          <div class="credential-item">
            <span class="cred-title">GEOGRAPHIC LOCATION</span>
            <span class="cred-name"><?= e($profile['location']) ?></span>
            <span class="cred-detail">Open to on-site, hybrid, or remote positions.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     TECHNICAL SKILLS SECTION
     ========================================================================== -->
<section id="skills" class="section" aria-label="Technical Skills">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-label">CAPABILITIES</div>
      <h2 class="section-title">Technical Skills</h2>
      <p class="section-subtitle">
        A transparent breakdown of the technologies, databases, tools, and engineering fundamentals I work with.
      </p>
    </div>

    <div class="skills-grid">
      <?php foreach ($skills as $key => $cat): ?>
        <div class="skill-category-card reveal">
          <div class="skill-cat-header">
            <span class="skill-cat-title"><?= e($cat['category']) ?></span>
            <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--accent);">[<?= count($cat['items']) ?>]</span>
          </div>
          <ul class="skill-items-list">
            <?php foreach ($cat['items'] as $item): ?>
              <li class="skill-item <?= $item['highlight'] ? 'highlight' : '' ?>">
                <div class="skill-name-row">
                  <span class="skill-name"><?= e($item['name']) ?></span>
                  <?php if ($item['highlight']): ?>
                    <span class="skill-badge">CORE</span>
                  <?php endif; ?>
                </div>
                <span class="skill-desc"><?= e($item['desc']) ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     PROJECT SHOWCASE SECTION
     ========================================================================== -->
<section id="projects" class="section section-alt" aria-label="Featured Projects">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-label">PORTFOLIO WORK</div>
      <h2 class="section-title">Featured Projects</h2>
      <p class="section-subtitle">
        Real web applications built to solve practical workflows, test developer concepts, and persist relational data.
      </p>
    </div>

    <div class="projects-container">
      <?php foreach ($projects as $index => $project): ?>
        <article class="project-card <?= ($index % 2 === 1) ? 'alternate' : '' ?> reveal" id="project-<?= e($project['id']) ?>">
          <!-- Project Info -->
          <div class="project-info">
            <div class="project-meta-row">
              <span class="project-num"><?= e($project['num']) ?></span>
              <span class="project-category-tag"><?= e($project['category']) ?></span>
            </div>

            <h3 class="project-name"><?= e($project['title']) ?></h3>
            <div class="project-subtitle"><?= e($project['subtitle']) ?></div>

            <p class="project-summary"><?= e($project['summary']) ?></p>

            <!-- Key Highlights -->
            <ul class="project-highlights-list">
              <?php foreach ($project['highlights'] as $highlight): ?>
                <li class="project-highlight-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
                  <span><?= e($highlight) ?></span>
                </li>
              <?php endforeach; ?>
            </ul>

            <!-- Tech Tags -->
            <div class="project-tags">
              <?php foreach ($project['tech_stack'] as $tech): ?>
                <span class="project-tag"><?= e($tech) ?></span>
              <?php endforeach; ?>
            </div>

            <!-- Action Buttons -->
            <div class="project-actions">
              <a href="<?= e($project['live_url']) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm">
                <span>Live Demo</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
              </a>
              <a href="<?= e($project['github_url']) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/></svg>
                <span>Source Code</span>
              </a>
              <button type="button" onclick="openProjectDetails('<?= e($project['id']) ?>')" class="btn btn-ghost btn-sm">
                <span>View Details</span>
              </button>
            </div>
          </div>

          <!-- Project Visual Preview -->
          <div class="project-preview">
            <img src="<?= e($project['image']) ?>" alt="<?= e($project['title']) ?> Application Preview" loading="lazy">
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     EXPERIENCE & EDUCATION SECTION
     ========================================================================== -->
<section id="experience" class="section" aria-label="Experience and Education">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-label">CAREER HISTORY</div>
      <h2 class="section-title">Practical Experience &amp; Education</h2>
      <p class="section-subtitle">
        Documented internship experience and university engineering curriculum.
      </p>
    </div>

    <div class="experience-timeline">
      <!-- Internship Card -->
      <?php foreach ($experience as $exp): ?>
        <div class="timeline-card reveal">
          <div class="timeline-top-row">
            <div>
              <h3 class="timeline-role"><?= e($exp['role']) ?></h3>
              <div class="timeline-company"><?= e($exp['company']) ?></div>
            </div>
            <span class="timeline-badge"><?= e($exp['type']) ?></span>
          </div>

          <p style="color: var(--text-secondary); font-size: 0.95rem;">
            <?= e($exp['description']) ?>
          </p>

          <ul class="timeline-resp-list">
            <?php foreach ($exp['responsibilities'] as $resp): ?>
              <li class="timeline-resp-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
                <span><?= e($resp) ?></span>
              </li>
            <?php endforeach; ?>
          </ul>

          <div class="project-tags" style="margin-top: 0.5rem;">
            <?php foreach ($exp['skills_used'] as $s): ?>
              <span class="project-tag"><?= e($s) ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>

      <!-- Education Card -->
      <div class="education-card reveal reveal-delay-1" id="education">
        <div class="edu-header-row">
          <div>
            <div style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--accent); margin-bottom: 0.25rem;">UNDERGRADUATE DEGREE</div>
            <h3 class="edu-degree"><?= e($education['degree']) ?></h3>
            <div class="edu-institution"><?= e($education['institution']) ?> &bull; <?= e($education['university']) ?></div>
          </div>
          <div class="edu-metrics">
            <div class="edu-pill">Graduation: <strong>2027</strong></div>
            <div class="edu-pill">CGPA: <strong><?= e($education['cgpa']) ?> / 10</strong></div>
          </div>
        </div>

        <div class="edu-courses-wrap">
          <span class="edu-courses-label">Key Core Coursework Completed:</span>
          <div class="edu-course-chips">
            <?php foreach ($education['courses'] as $course): ?>
              <span class="edu-course-chip"><?= e($course) ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     DEVELOPER PRINCIPLES SECTION
     ========================================================================== -->
<section id="principles" class="section section-alt" aria-label="Development Approach">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-label">MINDSET</div>
      <h2 class="section-title">What I Focus On</h2>
      <p class="section-subtitle">
        The core principles that guide my approach to software development and problem solving.
      </p>
    </div>

    <div class="principles-grid">
      <?php foreach ($principles as $p): ?>
        <div class="principle-card reveal">
          <div class="principle-num"><?= e($p['number']) ?></div>
          <h3 class="principle-title"><?= e($p['title']) ?></h3>
          <p class="principle-desc"><?= e($p['description']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     CONTACT SECTION
     ========================================================================== -->
<section id="contact" class="section" aria-label="Contact Mihir Raval">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-label">GET IN TOUCH</div>
      <h2 class="section-title">Let's Build Something Useful</h2>
      <p class="section-subtitle">
        I am actively seeking entry-level opportunities as a PHP Developer, Junior Full Stack Developer, or Backend Developer. Feel free to reach out directly.
      </p>
    </div>

    <div class="contact-grid">
      <!-- Left: Direct Channels -->
      <div class="contact-channels reveal">
        <p class="contact-lead">
          Whether you have an entry-level opening, an internship opportunity, feedback on my projects, or a technical inquiry, my inbox is open.
        </p>

        <div class="contact-links-list">
          <!-- Email Channel -->
          <div class="contact-card-link">
            <div class="contact-card-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <div class="contact-card-text" style="flex: 1;">
              <span class="contact-card-label">Direct Email</span>
              <a href="mailto:<?= e($profile['social']['email']) ?>" class="contact-card-val" style="color: var(--accent);"><?= e($profile['social']['email']) ?></a>
              <div class="copy-email-box">
                <button type="button" onclick="copyEmailToClipboard('<?= e($profile['social']['email']) ?>')" class="btn btn-ghost btn-sm" style="padding: 0.2rem 0.5rem; font-size: 0.75rem;">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                  <span>Copy Address</span>
                </button>
              </div>
            </div>
          </div>

          <!-- LinkedIn Channel -->
          <a href="<?= e($profile['social']['linkedin']) ?>" target="_blank" rel="noopener noreferrer" class="contact-card-link">
            <div class="contact-card-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
            </div>
            <div class="contact-card-text">
              <span class="contact-card-label">LinkedIn Profile</span>
              <span class="contact-card-val">linkedin.com/in/mihir-raval-2aa82b377</span>
            </div>
          </a>

          <!-- GitHub Channel -->
          <a href="<?= e($profile['social']['github']) ?>" target="_blank" rel="noopener noreferrer" class="contact-card-link">
            <div class="contact-card-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/></svg>
            </div>
            <div class="contact-card-text">
              <span class="contact-card-label">GitHub Repositories</span>
              <span class="contact-card-val">github.com/Mihir290545</span>
            </div>
          </a>

          <!-- Location Badge -->
          <div class="contact-card-link" style="cursor: default;">
            <div class="contact-card-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div class="contact-card-text">
              <span class="contact-card-label">Current Base</span>
              <span class="contact-card-val"><?= e($profile['location']) ?></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Contact Form -->
      <div class="contact-form-container reveal reveal-delay-1">
        <form id="contact-form" class="contact-form" method="POST" action="api/contact.php" novalidate>
          <!-- CSRF Security Token -->
          <input type="hidden" name="csrf_token" value="<?= csrf_token() ?>">

          <!-- Honeypot field for bot spam detection -->
          <div class="form-honeypot" aria-hidden="true">
            <label for="website_hp">Leave this empty</label>
            <input type="text" id="website_hp" name="website_hp" tabindex="-1" autocomplete="off">
          </div>

          <!-- Alert Container -->
          <div id="form-alert" class="form-alert" role="alert" aria-live="polite"></div>

          <!-- Form Fields -->
          <div class="form-group">
            <label for="form-name" class="form-label">Your Name <span class="req">*</span></label>
            <input type="text" id="form-name" name="name" class="form-input" placeholder="e.g. Alex Johnson" required maxlength="100">
          </div>

          <div class="form-group">
            <label for="form-email" class="form-label">Your Email <span class="req">*</span></label>
            <input type="email" id="form-email" name="email" class="form-input" placeholder="e.g. alex@company.com" required maxlength="150">
          </div>

          <div class="form-group">
            <label for="form-subject" class="form-label">Subject <span class="req">*</span></label>
            <input type="text" id="form-subject" name="subject" class="form-input" placeholder="e.g. Junior Developer Role / Project Discussion" required maxlength="150">
          </div>

          <div class="form-group">
            <label for="form-message" class="form-label">Message <span class="req">*</span></label>
            <textarea id="form-message" name="message" class="form-textarea" placeholder="Describe the role, inquiry, or project..." required maxlength="4000"></textarea>
          </div>

          <button type="submit" id="form-submit-btn" class="btn btn-primary" style="width: 100%;">
            <span>Send Message</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
// Include Site Footer
require_once __DIR__ . '/includes/footer.php';
?>
