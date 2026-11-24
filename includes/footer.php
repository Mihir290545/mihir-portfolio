<?php
/**
 * Site Footer Template
 */
$profile = $data['profile'] ?? [];
$projects = $data['projects'] ?? [];

// Re-index projects by ID for client-side modal lookup
$indexedProjects = [];
foreach ($projects as $p) {
    if (isset($p['id'])) {
        $indexedProjects[$p['id']] = $p;
    }
}
?>
  </main>

  <!-- Site Footer -->
  <footer class="site-footer" role="contentinfo">
    <div class="container">
      <div class="footer-top">
        <div>
          <a href="#hero" class="brand-logo" style="margin-bottom: 0.5rem;">
            <span class="brand-monogram" aria-hidden="true">MR</span>
            <div class="brand-name">
              <span>MIHIR RAVAL</span>
              <span class="brand-title">PHP FULL STACK DEV</span>
            </div>
          </a>
          <p style="max-width: 420px; font-size: 0.95rem; margin-top: 0.5rem;">
            Computer Engineering student and developer focused on practical, database-driven web applications with PHP, MySQL, and modern web tools.
          </p>
        </div>

        <div style="display: flex; gap: 2rem; flex-wrap: wrap;">
          <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--accent); text-transform: uppercase;">NAVIGATION</span>
            <a href="#about" class="footer-link" style="color: var(--text-secondary); font-size: 0.9rem;">About</a>
            <a href="#skills" class="footer-link" style="color: var(--text-secondary); font-size: 0.9rem;">Skills</a>
            <a href="#projects" class="footer-link" style="color: var(--text-secondary); font-size: 0.9rem;">Projects</a>
            <a href="#experience" class="footer-link" style="color: var(--text-secondary); font-size: 0.9rem;">Experience</a>
            <a href="#contact" class="footer-link" style="color: var(--text-secondary); font-size: 0.9rem;">Contact</a>
          </div>

          <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--accent); text-transform: uppercase;">CONNECT</span>
            <a href="<?= e($profile['social']['github'] ?? '#') ?>" target="_blank" rel="noopener noreferrer" style="color: var(--text-secondary); font-size: 0.9rem;">GitHub</a>
            <a href="<?= e($profile['social']['linkedin'] ?? '#') ?>" target="_blank" rel="noopener noreferrer" style="color: var(--text-secondary); font-size: 0.9rem;">LinkedIn</a>
            <a href="mailto:<?= e($profile['social']['email'] ?? 'mihiryogirajubhai@gmail.com') ?>" style="color: var(--text-secondary); font-size: 0.9rem;">Direct Email</a>
            <a href="<?= e($profile['resume'] ?? 'assets/resume/Mihir_Raval_Resume.pdf') ?>" download="Mihir_Raval_Resume.pdf" style="color: var(--accent); font-size: 0.9rem; font-weight: 600;">Download Resume</a>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div>
          <span>&copy; <?= date('Y') ?> Mihir Raval. Palanpur, Gujarat, India.</span>
        </div>
        <div style="display: flex; align-items: center; gap: 1.5rem;">
          <span style="font-family: var(--font-mono); font-size: 0.75rem;">Engineered with PHP, HTML5 &amp; CSS3</span>
          <button type="button" class="back-to-top-btn" id="back-to-top" aria-label="Scroll back to the top of page">
            <span>Back to top</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M18 15l-6-6-6 6"/></svg>
          </button>
        </div>
      </div>
    </div>
  </footer>

  <!-- Project Details Modal Dialog -->
  <div class="modal-overlay" id="project-modal" role="dialog" aria-modal="true" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-box">
      <button type="button" class="modal-close-btn" id="modal-close-btn" aria-label="Close project details modal">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M18 6L6 18M6 6l12 12"/></svg>
      </button>
      <div id="modal-details-content">
        <!-- Injected via JavaScript -->
      </div>
    </div>
  </div>

  <!-- Store Project Data in JSON for Instant Interactive Modal Rendering -->
  <script>
    window.portfolioProjects = <?= json_encode($indexedProjects, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;
  </script>

  <!-- Application Scripts -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/interactions.js"></script>
</body>
</html>
