# Skywave Website

Official web application and platform for **Skywave**, providing enterprise telecommunications, Cloud PBX, VoIP solutions, and business communication hardware.

## Features

- **Responsive Multi-page Interface:** Home, Products, Solutions, Services, and About pages.
- **Dynamic Partner Marquee:** Smooth infinite scrolling showcase of authorized partner brands including **Dell**, **HP**, **Yeastar**, **Grandstream**, **Sangoma**, **Yealink**, and **Fanvil**.
- **Interactive Booking System:** Dedicated booking process backend (`app/processes/booking_process.php`).
- **Modern UI/UX:** Built with clean CSS and JavaScript, optimized for modern business clients.

## Local Development Setup

To run the website locally for development and testing:

1. Ensure PHP is installed on your system.
2. Start the built-in PHP development server in the project root:
   ```bash
   php -S localhost:8000
   ```
3. Open your web browser and navigate to:
   `http://localhost:8000`

## Database

The MySQL database schema and initial data dump are located at:
`app/database/skywave_db.sql`

## Security

Requires a patched PHP release (8.2.35+, 8.3.36+, 8.4.27+, or 8.5.12+) due to
CVE-2026-109618 and CVE-2026-109619. See [SECURITY.md](SECURITY.md) for the
upgrade runbook and interim mitigation.

---
© Skywave. All rights reserved.
