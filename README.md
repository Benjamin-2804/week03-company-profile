# TechCore — Company Profile Website

A responsive multi-page company profile website built with **Laravel 13** and **Tailwind CSS v4**, designed for the Philippine market.

---

## About the Project

This project is a static-content company profile website that presents TechCore's identity, services, and contact information across four public pages. All routing is handled through a single `CompanyController`. Every page shares a consistent layout with a reusable Navbar and Footer built as Blade components.

---

## Pages

| Page     | URL        | Description                                              |
|----------|------------|----------------------------------------------------------|
| Home     | `/`        | Hero banner, company intro, featured services, CTA       |
| About    | `/about`   | Company history, mission, vision, core values, team      |
| Services | `/services`| Full grid of 6 service cards driven by controller data   |
| Contact  | `/contact` | Contact form, address, map embed, social links           |

---

## Features

- ✅ Single `CompanyController` handling all four routes
- ✅ Shared Blade layout with reusable `<x-navbar />` and `<x-footer />` components
- ✅ Active link detection in navbar using `request()->routeIs()`
- ✅ Responsive hamburger menu for mobile (pure JS, no framework)
- ✅ Services data passed from controller to view
- ✅ Responsive grid — 1 col (mobile) → 2 col (tablet) → 3 col (desktop)
- ✅ Contact form with all required fields and CSRF protection
- ✅ Google Maps embed on Contact page
- ✅ Social media links with `target="_blank" rel="noopener noreferrer"`
- ✅ Custom 404 error page
- ✅ Tailwind CSS v4 with custom brand color tokens

---

## Tech Stack

- **Backend:** Laravel 13 (PHP)
- **Frontend:** Blade templates, Tailwind CSS v4
- **Build tool:** Vite
- **Database:** None (static content only)

---

## Setup Instructions

### Requirements

- PHP 8.2+
- Composer
- Node.js 18+ and npm

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/Benjamin-2804/week03-company-profile.git
cd week03-company-profile

# 2. Install PHP dependencies
composer install

# 3. Install Node dependencies
npm install

# 4. Copy environment file
cp .env.example .env

# 5. Generate application key
php artisan key:generate
```

### Running Locally

Open two terminals and run both commands at the same time:

**Terminal 1 — Compile assets:**
```bash
npm run dev
```

**Terminal 2 — Start server:**
```bash
php artisan serve
```

Then visit: **http://127.0.0.1:8000**

### Production Build

```bash
npm run build
php artisan serve
```

---

## Project Structure

```
app/Http/Controllers/
└── CompanyController.php       # All four page routes

resources/views/
├── layouts/
│   └── app.blade.php           # Master layout
├── components/
│   ├── navbar.blade.php        # Reusable navbar
│   └── footer.blade.php        # Reusable footer
├── pages/
│   ├── home.blade.php
│   ├── about.blade.php
│   ├── services.blade.php
│   └── contact.blade.php
└── errors/
    └── 404.blade.php

routes/
└── web.php                     # Four named GET routes

resources/css/app.css           # Tailwind v4 + brand tokens
resources/js/app.js             # Hamburger menu toggle
```

---

## Git Commit History

| Commit | Description |
|--------|-------------|
| 1 | create Laravel project |
| 2 | build shared layout and components |
| 3 | build Home page |
| 4 | build About page |
| 5 | build Services page |
| 6 | build Contact page |
| 7 | add 404 error page and project directories |
| 8 | update README |

---

## Screenshots

Screenshots are stored in the `/screenshots` directory.

---

## License

This project is built for educational purposes as part of a web development course.
