# Mihir Raval — Personal Developer Portfolio

A personal developer portfolio for **Mihir Raval**, PHP Full Stack Developer and Computer Engineering student at Government Engineering College, Palanpur.

Designed and engineered with an editorial, dark-charcoal visual identity, high-contrast typography, electric lime accents, responsive layout architecture, and zero unnecessary framework bloat.

---

## 🌟 Key Highlights

- **Bespoke Visual Identity**: Deep charcoal palette (`#0a0d12`) with vibrant electric lime accents (`#ccff00`), architectural grids, and high-contrast typography.
- **Theme Switcher**: Fully functional Dark mode (default) and Light mode toggle with `localStorage` persistence and zero theme flashing.
- **Accurate & Honest Representation**: Strictly reflects early-career credentials without exaggeration, fake metrics, or fake testimonials.
- **Featured Projects**:
  - **TaskSphere**: Task & workflow management application built with PHP and MySQL.
  - **DevDock**: Lightweight API utility and HTTP request inspector built with JavaScript & REST APIs.
  - **FinanceFlow**: Personal financial & cash flow tracker built with JavaScript and Local Storage.
- **Working Contact System**:
  - Direct email with 1-click clipboard copy + toast feedback.
  - Functional contact form with frontend validation, CSRF protection, anti-spam honeypot, and secure backend processing saving submissions to `data/messages.json`.
- **Pre-Configured Resume**:
  - Pre-generated valid PDF file ready at `assets/resume/Mihir_Raval_Resume.pdf`.
  - Prominent "Download Resume" buttons that work out of the box.
- **Accessibility & Performance**:
  - WCAG-compliant color contrast, keyboard navigation, focus visible rings, semantic HTML5, and `prefers-reduced-motion` compliance.

---

## 📁 Project Structure

```
Portfolio/
├── .htaccess                   # Apache security headers, MIME types & compression
├── .gitignore                  # Git ignore rules for private messages and secrets
├── README.md                   # Project documentation & run guide
├── robots.txt                  # Search engine crawl directives
├── sitemap.xml                 # XML sitemap for SEO indexation
├── index.php                   # Main application entry point & sections
│
├── api/
│   └── contact.php             # Contact form backend endpoint (CSRF, validation, logging)
│
├── config/
│   ├── config.php              # Active configuration file (email, paths, secrets)
│   └── config.example.php      # Configuration template for deployments
│
├── includes/
│   ├── header.php              # Site header, metadata, theme logic & navigation
│   ├── footer.php              # Footer, scripts, and interactive modal dialog
│   ├── functions.php           # Helper functions (XSS escaping, CSRF, security headers)
│   └── data.php                # Structured data store for skills, projects & credentials
│
├── data/
│   ├── .htaccess               # Denies public browser access to stored messages
│   ├── index.php               # 403 Forbidden fallback protection
│   └── messages.json           # Secure store for incoming contact form inquiries
│
└── assets/
    ├── css/
    │   ├── variables.css       # Design tokens & dark/light theme variables
    │   ├── style.css           # Base styles, typography scale & resets
    │   ├── components.css      # Reusable components (buttons, cards, inputs, navbar)
    │   ├── animations.css      # Micro-interactions & reduced-motion queries
    │   └── responsive.css      # Fluid layouts for desktop, tablet, and mobile (360px+)
    │
    ├── js/
    │   ├── main.js             # Theme toggle, mobile drawer, scrollspy, clipboard
    │   └── interactions.js     # Scroll reveal observer, project modal, AJAX form
    │
    ├── images/
    │   ├── favicon.svg         # High-resolution vector monogram favicon
    │   ├── profile/            # Profile portrait frames & placeholders
    │   └── projects/           # High-fidelity vector previews for featured projects
    │
    └── resume/
        ├── README.md           # Instructions on how to update your resume PDF
        └── Mihir_Raval_Resume.pdf # Valid standard PDF resume document
```

---

## 🚀 How to Run Locally

### Option 1: Using PHP Built-In Server (Quickest)

1. Open PowerShell or Command Prompt in the portfolio directory:
   ```powershell
   cd "c:\Users\mihir\OneDrive\Desktop\Portfolio"
   ```
2. Start the local PHP development server:
   ```powershell
   C:\xampp\php\php.exe -S localhost:8000
   ```
   *(Or just `php -S localhost:8000` if PHP is in your system PATH).*
3. Open your browser and navigate to:
   ```
   http://localhost:8000
   ```

### Option 2: Using XAMPP Apache

1. Copy or move this `Portfolio` directory to your XAMPP `htdocs` folder:
   ```powershell
   Copy-Item -Recurse -Path "c:\Users\mihir\OneDrive\Desktop\Portfolio" -Destination "C:\xampp\htdocs\portfolio"
   ```
2. Open the **XAMPP Control Panel** and click **Start** next to **Apache**.
3. Open your browser and visit:
   ```
   http://localhost/portfolio/
   ```

---

## ✉️ Contact Form Configuration

By default, the contact form safely stores messages inside:
`data/messages.json`

To enable SMTP or direct email forwarding:
1. Open `config/config.php`
2. Change `'mode' => 'file'` to `'smtp'` or configure your server's `sendmail_path` in `php.ini`.
3. Submissions will automatically send an email to: `mihiryogirajubhai@gmail.com`.

---

## 📄 How to Update Your Resume & Profile Photo

### Replacing the Resume:
1. Place your final PDF resume at:
   `assets/resume/Mihir_Raval_Resume.pdf`
2. All "Download Resume" buttons will immediately download your new document.

### Adding your Real Photo:
1. Place your image at:
   `assets/images/profile/mihir-raval.jpg` (or `.png`)
2. In `index.php`, update the image tag in the hero visual card:
   ```html
   <img src="assets/images/profile/mihir-raval.jpg" alt="Mihir Raval Portrait">
   ```

---

## 🛡️ Security Best Practices Included

- **XSS Protection**: All dynamic data rendered via `e()` (`htmlspecialchars`).
- **CSRF Token Validation**: Enforced on every contact form POST request.
- **Honeypot Trap**: Invisible field blocks automated spam bots silently.
- **Directory Access Control**: `data/` and `config/` are blocked via `.htaccess` and `index.php` 403 fallbacks.
- **Standard Security Headers**: Sent on every request (`X-Content-Type-Options: nosniff`, `X-Frame-Options: SAMEORIGIN`, `Referrer-Policy: strict-origin-when-cross-origin`).
