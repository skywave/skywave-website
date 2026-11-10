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
$fishAfrica    = $mainSite . '/fishafrica';
?><!doctype html>
<html lang="en-MW">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Skywave Technologies | Business Communication Solutions — Malawi</title>
    <meta name="description" content="Skywave Technologies provides secure, scalable business communication solutions — VoIP, contact centres, gateways, IP telephony and customer messaging.">

    <link rel="canonical" href="https://mw.skywavetech.co.zm/">
    <link rel="alternate" hreflang="en-ZM" href="https://skywavetech.co.zm/">
    <link rel="alternate" hreflang="en-MW" href="https://mw.skywavetech.co.zm/">
    <link rel="alternate" hreflang="x-default" href="https://skywavetech.co.zm/">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Skywave Technologies | Business Communication Solutions">
    <meta property="og:description" content="Secure, scalable business communication solutions — VoIP, contact centres, gateways, IP telephony and customer messaging.">
    <meta property="og:url" content="https://mw.skywavetech.co.zm/">
    <meta property="og:image" content="https://mw.skywavetech.co.zm/public/images/logo/skywave-tech-logo.webp">

    <link rel="icon" type="image/png" href="public/images/logo/favicon.png">
    <link rel="apple-touch-icon" href="public/images/logo/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/malawi/public/css/malawi.css" type="text/css" media="all">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Skywave Technologies",
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
            <a href="#offerings">Solutions</a>
            <a href="#why">Why Choose Us</a>
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
                <span class="eyebrow">Skywave Technologies</span>
                <h1>Reliable business communication.</h1>
                <p>
                    Skywave Technologies designs, deploys and supports secure communication
                    systems for organisations — from VoIP and contact centres to
                    complete business telephony.
                </p>
                <div class="hero-actions">
                    <a class="btn primary" href="#contact">Contact our team</a>
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
                    organisations across the region. Our team manages
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

        <!-- WHAT WE DO BEST / OFFERINGS -->
        <section class="section offerings" id="offerings">
            <div class="section-head center">
                <span class="section-label">What We Do Best</span>
                <h2>Products, Services & Solutions</h2>
                <p class="section-sub">Core communication capabilities delivered by the Skywave team.</p>
            </div>

            <div class="card-grid">
                <article class="card">
                    <h3>Products</h3>
                    <p>IP PBX, VoIP, Gateways and IP phones from established technology partners.</p>
                    <a href="<?= htmlspecialchars($mainProducts) ?>">View products →</a>
                </article>

                <article class="card">
                    <h3>Services</h3>
                    <p>Installation, integration and managed VoIP services tailored to your business.</p>
                    <a href="<?= htmlspecialchars($mainServices) ?>">Explore services →</a>
                </article>

                <article class="card">
                    <h3>Solutions</h3>
                    <p>Contact centre, call routing and unified communication systems for customer-focused businesses.</p>
                    <a href="<?= htmlspecialchars($mainSolutions) ?>">See solutions →</a>
                </article>
            </div>
        </section>

        <!-- WHY CHOOSE SKYWAVE -->
        <section class="section why" id="why">
            <div class="section-head center">
                <span class="section-label">Why Choose Skywave</span>
                <h2>Your trusted communication partner.</h2>
                <p class="section-sub">We deliver more than technology — we deliver outcomes.</p>
            </div>

            <div class="features">
                <div class="card">
                    <h3>Expertise</h3>
                    <p>Our team of skilled professionals is experienced in diverse business communication solutions across the region.</p>
                </div>
                <div class="card">
                    <h3>Customization</h3>
                    <p>We tailor our solutions to align with your business goals and challenges — no one-size-fits-all.</p>
                </div>
                <div class="card">
                    <h3>Reliable Support</h3>
                    <p>Ongoing local and remote support to ensure systems operate smoothly, day in, day out.</p>
                </div>
                <div class="card">
                    <h3>Proven Track Record</h3>
                    <p>Trusted by businesses across the region and beyond for mission-critical communication.</p>
                </div>
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
                    <a class="btn light-btn" href="mailto:info@skywavetech.co.zm">Contact us</a>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer-grid">
            <div class="footer-brand">
                <img src="public/images/logo/skywave-tech-logo.webp" alt="Skywave Technologies">
                <p>Business communication solutions.</p>
            </div>

            <div class="footer-links">
                <a href="<?= htmlspecialchars($mainAbout) ?>">About</a>
                <a href="#offerings">Solutions</a>
                <a href="#why">Why Choose Us</a>
                <a href="<?= htmlspecialchars($fishAfrica) ?>">Fish Africa</a>
                <a href="#contact">Contact</a>
            </div>

            <div class="footer-switch">
                <span>Skywave Zambia</span>
                <a href="<?= htmlspecialchars($mainSite) ?>">skywavetech.co.zm →</a>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© <?= date('Y') ?> Skywave Technologies. All rights reserved.</span>
            <span><a href="https://mw.skywavetech.co.zm/">mw.skywavetech.co.zm</a></span>
        </div>
    </footer>

    <script src="/malawi/public/js/malawi.js" type="text/javascript"></script>
    <script src="/malawi/public/js/nav.js" type="text/javascript"></script>
</body>
</html>