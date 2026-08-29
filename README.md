# SoftApps Digital Solutions — Website

Professional website for **SoftApps Digital Solutions (Pty) Ltd**, a South African technology company providing ICT, software development, website development, IT support and digital skills training.

**Live site (current):** [softapps.co.za](https://softapps.co.za/)

> **Note:** GIS services are intentionally excluded from this version. The site architecture supports adding GIS as a future service category.

---

## What Changed from the Old Site

| Old Site | New Site |
|----------|----------|
| Generic "digital services platform" messaging | Clear ICT + Software + Web + IT Support + Training positioning |
| LMS & eCommerce as primary services | Focus on core services from business requirements |
| Old contact number (+27 73 743 2694) | Updated: **063 160 4297** |
| Fixed pricing packages (R750 / R1500) | Quote-based enquiry (no invented pricing) |
| Single-page feel | 12 dedicated pages with clear navigation |
| No training section | Full training & digital skills page |
| No portfolio structure | Portfolio layout ready for real projects |

---

## Technologies Used

- **HTML5** — Semantic markup
- **CSS3** — Custom design system with CSS variables
- **JavaScript** — Navbar, animations, forms (vanilla JS)
- **Bootstrap 5.3** — Responsive grid, navbar, forms, accordion
- **Bootstrap Icons** — Professional iconography
- **Google Fonts** — Plus Jakarta Sans + Inter

### WordPress Theme

A WordPress theme is included in `wp-theme/softapps-digital/` for deployment to softapps.co.za when you are ready to manage content in WordPress.

---

## Folder Structure

```
softapps-website/
├── index.html                    # Home
├── about.html
├── services.html
├── software-development.html
├── website-development.html
├── it-support.html
├── training.html
├── products.html
├── projects.html
├── industries.html
├── contact.html
├── quote.html
├── README.md
├── assets/
│   ├── css/
│   │   ├── variables.css         # Brand colours & tokens
│   │   ├── base.css
│   │   ├── components.css
│   │   ├── sections.css
│   │   └── style.css             # Main import file
│   ├── js/
│   │   └── script.js
│   └── images/                   # Add project/portfolio images here
├── components/
│   ├── header.html               # Shared navbar
│   └── footer.html               # Shared footer + WhatsApp button
└── wp-theme/
    └── softapps-digital/         # WordPress theme
        ├── style.css
        ├── functions.php
        ├── header.php
        ├── footer.php
        ├── front-page.php
        ├── page.php
        ├── index.php
        └── assets/
```

---

## How to Run Locally

1. Open the `softapps-website` folder in **VS Code**
2. Install the **Live Server** extension (if not already installed)
3. Right-click `index.html` → **Open with Live Server**
4. The site opens at `http://127.0.0.1:5500` (or similar)

> **Important:** Header and footer are loaded via JavaScript `fetch()`. You must use Live Server (or any local HTTP server) — opening HTML files directly in the browser (`file://`) will not load components.

### Alternative: Python local server

```bash
cd softapps-website
python -m http.server 8080
```

Then visit `http://localhost:8080`

---

## How to Deploy

### Option A — Static hosting
Upload all files (except `wp-theme/`) to any static host (Netlify, GitHub Pages, cPanel public_html).

### Option B — WordPress (recommended for softapps.co.za)

1. Copy `wp-theme/softapps-digital/` to `wp-content/themes/softapps-digital/` on your WordPress server
2. Copy `assets/css/` contents to the theme's `assets/css/` folder
3. In WordPress Admin → **Appearance → Themes**, activate **SoftApps Digital**
4. Create pages matching the static site slugs:
   - `about-us`, `services`, `software-development`, `website-development`, `it-support`, `training`, `products`, `projects`, `industries-we-serve`, `contact`, `request-a-quote`
5. Set **Settings → Reading** → Static front page
6. Assign **Primary Menu** under **Appearance → Menus**
7. Paste HTML content from static pages into WordPress pages (or rebuild with blocks)

### Form handling in WordPress
Install a form plugin such as **WPForms**, **Contact Form 7**, or **Fluent Forms** and replace the placeholder form handlers.

---

## How to Update Contact Details

### Static site
Edit these files:
- `components/footer.html`
- `contact.html`
- `quote.html`

Search for: `063 160 4297`, `mabonazz@gmail.com`, `27631604297`

### WordPress theme
Edit contact functions in `wp-theme/softapps-digital/functions.php`:
- `softapps_contact_phone()`
- `softapps_contact_email()`
- `softapps_whatsapp_link()`

---

## How to Add Social Media Links

In `components/footer.html` and `contact.html`, replace `href="#"` on Facebook, Instagram and LinkedIn icons with your actual profile URLs.

---

## How to Add Portfolio Projects

1. Add screenshots to `assets/images/` using clear filenames (e.g. `project-business-website.jpg`)
2. Edit `projects.html` — replace placeholder cards with real project titles and descriptions
3. **Do not add client names** unless you have permission

---

## How to Change Colours

Edit `assets/css/variables.css`:

```css
--color-primary: #0c2d6b;      /* Deep blue */
--color-accent: #2563eb;       /* Modern blue */
--color-charcoal: #0f172a;     /* Dark text/footer */
```

Copy the same file to the WordPress theme if using WordPress.

---

## How to Add GIS Services Later

When ready to add GIS:

1. Create a new page: `gis-services.html` (or WordPress page `/gis-services/`)
2. Add **GIS Services** to the Services dropdown in `components/header.html`
3. Add a service card on `services.html` and the homepage
4. Add GIS training modules to `training.html`
5. Add a GIS category to `projects.html`

No redesign required — the architecture is built for this expansion.

---

## Pages & Navigation

| Page | File | Purpose |
|------|------|---------|
| Home | `index.html` | Hero, services, why us, industries, FAQ, CTA |
| About Us | `about.html` | Mission, vision, values |
| Services | `services.html` | All service categories |
| Software Development | `software-development.html` | Custom software & web apps |
| Website Development | `website-development.html` | Web design process |
| IT Support | `it-support.html` | Technical services |
| Training | `training.html` | All training categories |
| Products & Solutions | `products.html` | Hardware & digital solutions |
| Projects | `projects.html` | Portfolio (placeholder layout) |
| Industries | `industries.html` | Target customer groups |
| Contact | `contact.html` | Contact form & details |
| Request a Quote | `quote.html` | Quote request form |

---

## SEO

Each page includes:
- Unique `<title>` and `<meta description>`
- Open Graph tags (homepage)
- Semantic HTML headings (H1 → H2 → H3)
- Descriptive alt text on images

---

## Contact Information

| | |
|---|---|
| **Company** | SoftApps Digital Solutions (Pty) Ltd |
| **Phone** | 063 160 4297 |
| **Email** | mabonazz@gmail.com |
| **WhatsApp** | 063 160 4297 |
| **Location** | South Africa |

---

## Licence

© 2026 SoftApps Digital Solutions (Pty) Ltd. All Rights Reserved.
