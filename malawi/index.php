<?php
/**
 * Skywave Technologies Malawi — one-page landing site (test build).
 *
 * This page is intentionally self-contained under /malawi so it can be served
 * either from the main site at /malawi/ or from its own subdomain document root.
 */

$mainSite      = 'https://skywavetech.co.zm';
$mainAbout     = $mainSite . '/about';
$mainProducts  = $mainSite . '/products';
$mainServices  = $mainSite . '/services';
$mainSolutions = $mainSite . '/solutions';
$mainContact   = 'https://www.skywavetech.cloud/';
$fishAfrica    = $mainSite . '/fishafrica';
?><!doctype html>
<html lang="en-MW">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Skywave Technologies Malawi | Business Communication Solutions</title>
    <meta name="description" content="Skywave Technologies provides secure, scalable business communication solutions in Malawi — VoIP, contact centres, gateways, IP telephony and customer messaging.">

    <link rel="canonical" href="https://mw.skywavetech.co.zm/">
    <link rel="alternate" hreflang="en-ZM" href="https://skywavetech.co.zm/">
    <link rel="alternate" hreflang="en-MW" href="https://mw.skywavetech.co.zm/">
    <link rel="alternate" hreflang="x-default" href="https://skywavetech.co.zm/">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Skywave Technologies Malawi">
    <meta property="og:description" content="Secure, scalable business communication solutions for organisations in Malawi.">
    <meta property="og:url" content="https://mw.skywavetech.co.zm/">
    <meta property="og:image" content="https://mw.skywavetech.co.zm/public/images/logo/skywave-tech-logo.webp">

    <link rel="icon" type="image/png" href="public/images/logo/favicon.png">
    <link rel="apple-touch-icon" href="public/images/logo/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/malawi.css" type="text/css" media="all">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Skywave Technologies Malawi",
        "url": "https://mw.skywavetech.co.zm/",
        "logo": "https://mw.skywavetech.co.zm/public/images/logo/skywave-tech-logo.webp",
        "parentOrganization": {
            "@type": "Organization",
            "name": "Skywave Technologies",
            "url": "https://skywavetech.co.zm/"
        },
        "areaServed": {
            "@type": "Country",
            "name": "Malawi"
        }
    }
    </script>
</head>

<body>
    <!-- NAVBAR -->
    <header id="navbar">
        <a class="logo" href="https://mw.skywavetech.co.zm/" aria-label="Skywave Technologies Malawi home">
            <img src="public/images/logo/skywave-tech-logo.webp" alt="Skywave Technologies">
        </a>

        <nav id="navMenu">
            <a href="#about">About</a>
            <a href="#fish-africa">Fish Africa</a>
            <a href="#contact">Contact</a>
            <a href="<?= htmlspecialchars($mainSite) ?>" class="zambia-btn">Skywave Zambia</a>
        </nav>

        <button class="hamburger" id="menuBtn" aria-label="Open menu" aria-expanded="false" aria-controls="navMenu">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </header>

    <main>
        <!-- HERO -->
        <section class="hero" id="home">
            <div class="hero-overlay" aria-hidden="true"></div>
            <div class="hero-content">
                <span class="eyebrow">Skywave Technologies · Malawi</span>
                <h1>Reliable business communication for Malawi.</h1>
                <p>
                    Skywave Technologies designs, deploys and supports secure communication
                    systems for organisations in Malawi — from VoIP and contact centres to
                    complete business telephony.
                </p>
                <div class="hero-actions">
                    <a class="btn primary" href="<?= htmlspecialchars($mainContact) ?>">Contact our team</a>
                    <a class="btn ghost" href="#about">About Skywave</a>
                </div>
                <p class="hero-note">
                    Part of the Skywave group.
                    <a href="<?= htmlspecialchars($mainSite) ?>">Visit our Zambia website →</a>
                </p>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="section intro" id="about">
            <div class="section-head">
                <span class="section-label">About Skywave</span>
                <h2>Communication systems built for business.</h2>
            </div>
            <div class="intro-copy">
                <p>
                    Skywave Technologies provides secure, scalable communication solutions to
                    organisations across Zambia, Malawi and the wider region. Our team manages
                    the full lifecycle — from design and deployment to ongoing support.
                </p>
                <p>
                    We work with established technology partners to deliver VoIP, contact centre,
                    gateway and IP telephony solutions that improve reliability and reduce
                    communication costs.
                </p>
                <a class="btn alt" href="<?= htmlspecialchars($mainAbout) ?>">More about Skywave</a>
            </div>
        </section>

        <!-- SOLUTIONS -->
        <section class="section solutions" id="services">
            <div class="section-head center">
                <span class="section-label">What we do</span>
                <h2>Solutions and services</h2>
                <p class="section-sub">Core communication capabilities delivered by the Skywave team.</p>
            </div>

            <div class="card-grid">
                <article class="card">
                    <h3>Business telephony</h3>
                    <p>IP PBX, VoIP, gateways and IP phones from established technology partners.</p>
                    <a href="<?= htmlspecialchars($mainProducts) ?>">View products →</a>
                </article>

                <article class="card">
                    <h3>Contact centres</h3>
                    <p>Call routing, reporting and unified communication systems for customer-facing teams.</p>
                    <a href="<?= htmlspecialchars($mainSolutions) ?>">View solutions →</a>
                </article>

                <article class="card">
                    <h3>Deployment and support</h3>
                    <p>Installation, integration and managed services for long-term operational reliability.</p>
                    <a href="<?= htmlspecialchars($mainServices) ?>">View services →</a>
                </article>
            </div>
        </section>

        <!-- FISH AFRICA -->
        <section class="section fish" id="fish-africa">
            <div class="fish-card">
                <div class="fish-copy">
                    <span class="section-label">Also from Skywave</span>
                    <h2>Fish Africa customer messaging</h2>
                    <p>
                        Fish Africa provides bulk SMS and voice messaging for customer communication
                        at scale. It is available alongside our business communication solutions.
                    </p>
                    <a class="text-link" href="<?= htmlspecialchars($fishAfrica) ?>">Learn more about Fish Africa →</a>
                </div>

                <div class="fish-media">
                    <img src="public/images/fishafrica/hero.jpg" alt="Fish Africa customer messaging">
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="section contact" id="contact">
            <div class="contact-box">
                <div>
                    <span class="section-label light">Contact</span>
                    <h2>Discuss your communication requirements.</h2>
                    <p>Speak with the Skywave team about your project, infrastructure or support needs.</p>
                </div>
                <div class="contact-actions">
                    <a class="btn light-btn" href="<?= htmlspecialchars($mainContact) ?>">Contact us</a>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer-grid">
            <div class="footer-brand">
                <img src="public/images/logo/skywave-tech-logo.webp" alt="Skywave Technologies">
                <p>Business communication solutions for Malawi.</p>
            </div>

            <div class="footer-links">
                <a href="<?= htmlspecialchars($mainAbout) ?>">About</a>
                <a href="<?= htmlspecialchars($fishAfrica) ?>">Fish Africa</a>
                <a href="<?= htmlspecialchars($mainContact) ?>">Contact</a>
            </div>

            <div class="footer-switch">
                <span>Skywave Zambia</span>
                <a href="<?= htmlspecialchars($mainSite) ?>">skywavetech.co.zm →</a>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© <?= date('Y') ?> Skywave Technologies. All rights reserved.</span>
            <span>Malawi · <a href="https://mw.skywavetech.co.zm/">mw.skywavetech.co.zm</a></span>
        </div>
    </footer>

    <script src="public/js/malawi.js" type="text/javascript"></script>
</body>
</html>
