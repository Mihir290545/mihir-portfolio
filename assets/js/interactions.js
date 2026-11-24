/**
 * Interactions, Scroll Reveals, Modal, and Contact Form AJAX Handling
 */

(function () {
  'use strict';

  // 1. Intersection Observer for Scroll Reveals
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (!prefersReducedMotion && 'IntersectionObserver' in window) {
    const revealElements = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      root: null,
      threshold: 0.02,
      rootMargin: '50px 0px 50px 0px'
    });

    revealElements.forEach(function (el) {
      revealObserver.observe(el);
    });
  } else {
    // Reveal all immediately if reduced motion or older browser
    document.querySelectorAll('.reveal').forEach(function (el) {
      el.classList.add('is-visible');
    });
  }

  // 2. Project Detail Modal Data & Handler
  const modalOverlay = document.getElementById('project-modal');
  const modalContent = document.getElementById('modal-details-content');
  const modalCloseBtn = document.getElementById('modal-close-btn');

  window.openProjectDetails = function (projectId) {
    if (!window.portfolioProjects || !window.portfolioProjects[projectId]) {
      return;
    }
    const p = window.portfolioProjects[projectId];
    
    let highlightsHtml = '';
    if (p.highlights && p.highlights.length) {
      highlightsHtml = `
        <div style="margin-top: 1rem;">
          <h4 style="font-size: 0.95rem; font-family: var(--font-mono); color: var(--accent); margin-bottom: 0.5rem;">KEY IMPLEMENTATION DETAILS</h4>
          <ul style="list-style: none; display: flex; flex-direction: column; gap: 0.45rem;">
            ${p.highlights.map(h => `
              <li style="display: flex; gap: 0.5rem; font-size: 0.925rem; color: var(--text-secondary);">
                <span style="color: var(--accent); font-weight: bold;">›</span> ${h}
              </li>
            `).join('')}
          </ul>
        </div>
      `;
    }

    let tagsHtml = '';
    if (p.tech_stack && p.tech_stack.length) {
      tagsHtml = `
        <div style="display: flex; flex-wrap: wrap; gap: 0.4rem; margin-top: 1rem;">
          ${p.tech_stack.map(t => `<span class="project-tag">${t}</span>`).join('')}
        </div>
      `;
    }

    modalContent.innerHTML = `
      <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
        <span style="font-family: var(--font-mono); color: var(--accent); font-weight: 700;">#${p.num}</span>
        <span class="project-category-tag">${p.category}</span>
        <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--emerald); background: var(--emerald-soft); padding: 0.2rem 0.5rem; border-radius: var(--radius-sm);">${p.status}</span>
      </div>
      <h3 style="font-size: 1.75rem; font-weight: 800; margin-bottom: 0.25rem;">${p.title}</h3>
      <div style="font-family: var(--font-mono); font-size: 0.95rem; color: var(--accent); margin-bottom: 1rem;">${p.subtitle}</div>
      <p style="font-size: 1rem; color: var(--text-secondary); line-height: 1.7;">${p.description}</p>
      ${highlightsHtml}
      ${tagsHtml}
      <div style="display: flex; gap: 0.75rem; margin-top: 1.5rem; flex-wrap: wrap; padding-top: 1rem; border-top: 1px solid var(--border-subtle);">
        <a href="${p.live_url}" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm">
          <span>Open Live Application</span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
        </a>
        <a href="${p.github_url}" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm">
          <span>View Source on GitHub</span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/></svg>
        </a>
      </div>
    `;

    modalOverlay.classList.add('open');
    document.body.style.overflow = 'hidden';
    modalCloseBtn.focus();
  };

  function closeModal() {
    if (modalOverlay) {
      modalOverlay.classList.remove('open');
      document.body.style.overflow = '';
    }
  }

  if (modalCloseBtn) {
    modalCloseBtn.addEventListener('click', closeModal);
  }

  if (modalOverlay) {
    modalOverlay.addEventListener('click', function (e) {
      if (e.target === modalOverlay) {
        closeModal();
      }
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && modalOverlay.classList.contains('open')) {
        closeModal();
      }
    });
  }

  // 3. Contact Form AJAX Submission
  const contactForm = document.getElementById('contact-form');
  const formAlert = document.getElementById('form-alert');
  const submitBtn = document.getElementById('form-submit-btn');

  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const name = contactForm.elements['name'].value.trim();
      const email = contactForm.elements['email'].value.trim();
      const subject = contactForm.elements['subject'].value.trim();
      const message = contactForm.elements['message'].value.trim();
      const honeypot = contactForm.elements['website_hp'] ? contactForm.elements['website_hp'].value : '';
      const csrfToken = contactForm.elements['csrf_token'] ? contactForm.elements['csrf_token'].value : '';

      // Frontend validation
      if (!name || !email || !subject || !message) {
        showAlert('Please fill in all required fields.', 'error');
        return;
      }

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        showAlert('Please enter a valid email address.', 'error');
        return;
      }

      // Check honeypot
      if (honeypot) {
        // Silent block for bot submissions
        showAlert('Your message has been processed.', 'success');
        contactForm.reset();
        return;
      }

      // Set button to loading state
      const originalBtnText = submitBtn.innerHTML;
      submitBtn.disabled = true;
      submitBtn.innerHTML = `
        <svg class="spin" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <circle cx="12" cy="12" r="10" stroke-opacity="0.25"/>
          <path d="M12 2a10 10 0 0 1 10 10"/>
        </svg>
        <span>Sending Message...</span>
      `;

      const formData = new FormData(contactForm);

      fetch('api/contact.php', {
        method: 'POST',
        body: formData,
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        }
      })
      .then(function (res) {
        return res.json();
      })
      .then(function (data) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnText;

        if (data.success) {
          showAlert(data.message || 'Thank you! Your message has been received.', 'success');
          contactForm.reset();
        } else {
          showAlert(data.message || 'Something went wrong. Please try reaching out via direct email.', 'error');
        }
      })
      .catch(function () {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnText;
        // Fallback option
        showAlert('Network error while sending. You can reach Mihir directly at mihiryogirajubhai@gmail.com.', 'error');
      });
    });
  }

  function showAlert(msg, type) {
    if (!formAlert) return;
    formAlert.textContent = msg;
    formAlert.className = 'form-alert ' + type;
    formAlert.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

})();
