<?php
/**
 * Skywave Technologies Malawi — one-page landing site (test build).
 *
 * This page is intentionally self-contained under /malawi so it can be served
 * either from the main site at /malawi/ or from its own subdomain document root.
 */

$mainSite    = 'https://skywavetech.co.zm';
$mainAbout   = $mainSite . '/about';
$mainProducts = $mainSite . '/products';
$mainServices = $mainSite . '/services';
$mainSolutions = $mainSite . '/solutions';
$mainContact = 'https://www.skywavetech.cloud/';
$fishAfrica  = $mainSite . '/fishafrica';
$fishPortal  = 'https://skywave.letsfish.africa';
$fishRegister = $fishPortal . '/register';
?><!doctype html>
<html lang="en-MW">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Skywave Technologies Malawi | Business Communication Solutions</title>
    <meta name="description" content="Skywave Technologies in Malawi. Secure, scalable business communication solutions — VoIP, contact centres, gateways and Fish Africa bulk SMS and voice messaging.">

    <link rel="canonical" href="https://mw.skywavetech.co.zm/">
    <link rel="alternate" hreflang="en-ZM" href="https://skywavetech.co.zm/">
    <link rel="alternate" hreflang="en-MW" href="https://mw.skywavetech.co.zm/">
    <link rel="alternate" hreflang="x-default" href="https://skywavetech.co.zm/">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Skywave Technologies Malawi">
    <meta property="og:description" content="Business communication that just works — VoIP, contact centres, gateways and Fish Africa messaging solutions for Malawi.">
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
            <a href="#services">Solutions</a>
            <a href="#why">Why Us</a>
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
                <h1>Business communication that just works.</h1>
                <p>
                    Secure, scalable and tailored communication solutions for organisations in Malawi —
                    from VoIP and contact centre platforms to end-to-end business telephony.
                </p>
                <div class="hero-actions">
                    <a class="btn primary" href="<?= htmlspecialchars($mainSolutions) ?>">Explore Solutions</a>
                    <a class="btn ghost" href="#fish-africa">Discover Fish Africa</a>
                </div>
                <p class="hero-note">
                    Part of the Skywave group ·
                    <a href="<?= htmlspecialchars($mainSite) ?>">Visit our Zambia website →</a>
                </p>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="section intro" id="about">
            <div class="section-head">
                <span class="section-label">Who we are</span>
                <h2>Local support. Proven communication technology.</h2>
            </div>
            <div class="intro-grid">
                <div>
                    <p>
                        Skywave Technologies helps businesses communicate reliably and reduce costs.
                        We design, deploy and support business communication systems — from cloud PBX
                        and VoIP to contact centres, gateways and IP telephony.
                    </p>
                    <p>
                        Our Malawi landing page connects you to the wider Skywave team. Whether you are
                        setting up a new phone system, upgrading a contact centre or exploring bulk
                        messaging, we can help you choose the right solution.
                    </p>
                    <a class="btn alt" href="<?= htmlspecialchars($mainAbout) ?>">Learn about Skywave</a>
                </div>
                <aside class="intro-card">
                    <h3>Why organisations choose Skywave</h3>
                    <ul>
                        <li>Authorised Yeastar distributor</li>
                        <li>End-to-end deployment and support</li>
                        <li>Solutions built around your business</li>
                        <li>Regional experience across Africa</li>
                    </ul>
                </aside>
            </div>
        </section>

        <!-- SOLUTIONS -->
        <section class="section solutions" id="services">
            <div class="section-head center">
                <span class="section-label">What we do</span>
                <h2>Communication solutions for your business</h2>
                <p class="section-sub">Explore the core solutions available from the Skywave team.</p>
            </div>

            <div class="card-grid">
                <article class="card">
                    <span class="card-number">01</span>
                    <h3>Products</h3>
                    <p>IP PBX, gateways, IP phones and endpoints from trusted brands, backed by certified support.</p>
                    <a href="<?= htmlspecialchars($mainProducts) ?>">View products →</a>
                </article>

                <article class="card">
                    <span class="card-number">02</span>
                    <h3>Services</h3>
                    <p>Installation, integration and managed VoIP services tailored to your organisation.</p>
                    <a href="<?= htmlspecialchars($mainServices) ?>">Explore services →</a>
                </article>

                <article class="card">
                    <span class="card-number">03</span>
                    <h3>Solutions</h3>
                    <p>Contact centre, call routing and unified communication systems for customer-focused teams.</p>
                    <a href="<?= htmlspecialchars($mainSolutions) ?>">See solutions →</a>
                </article>
            </div>
        </section>

        <!-- WHY US -->
        <section class="section why" id="why">
            <div class="section-head center">
                <span class="section-label">Why Skywave</span>
                <h2>Technology that is simple, easy and relevant</h2>
            </div>

            <div class="feature-grid">
                <div class="feature">
                    <h3>Expertise</h3>
                    <p>A skilled team experienced in diverse business communication solutions.</p>
                </div>
                <div class="feature">
                    <h3>Customisation</h3>
                    <p>Solutions tailored to your goals, your teams and the way you work.</p>
                </div>
                <div class="feature">
                    <h3>Reliable support</h3>
                    <p>Ongoing support to keep your systems running smoothly.</p>
                </div>
                <div class="feature">
                    <h3>Proven track record</h3>
                    <p>Trusted by businesses across Zambia, Malawi and the wider region.</p>
                </div>
            </div>
        </section>

        <!-- FISH AFRICA -->
        <section class="section fish" id="fish-africa">
            <div class="fish-grid">
                <div class="fish-copy">
                    <span class="section-label">Fish Africa</span>
                    <h2>Reach more people. Make every message count.</h2>
                    <p>
                        Fish Africa is Skywave's messaging platform for businesses that need to connect
                        with customers at scale. Send bulk SMS or deliver pre-recorded voice messages
                        across supported mobile networks — all from one platform.
                    </p>

                    <div class="fish-points">
                        <div>
                            <h3>Bulk SMS</h3>
                            <p>Marketing campaigns, reminders, notifications and important announcements.</p>
                        </div>
                        <div>
                            <h3>Voice Messaging</h3>
                            <p>Share announcements, promotions and alerts in familiar local languages.</p>
                        </div>
                    </div>

                    <div class="fish-actions">
                        <a class="btn primary" href="<?= htmlspecialchars($fishAfrica) ?>">Explore Fish Africa</a>
                        <a class="btn alt" href="<?= htmlspecialchars($fishPortal) ?>" target="_blank" rel="noopener">Visit the portal</a>
                    </div>
                </div>

                <div class="fish-media">
                    <img src="public/images/fishafrica/hero.jpg" alt="Fish Africa messaging platform">
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="section contact" id="contact">
            <div class="contact-box">
                <div>
                    <span class="section-label light">Talk to us</span>
                    <h2>Ready to improve how your business communicates?</h2>
                    <p>Tell us what you need and our team will connect you with the right solution.</p>
                </div>
                <div class="contact-actions">
                    <a class="btn light-btn" href="<?= htmlspecialchars($mainContact) ?>">Contact Skywave</a>
                    <a class="btn outline-light" href="<?= htmlspecialchars($fishRegister) ?>" target="_blank" rel="noopener">Start with Fish Africa</a>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer-grid">
            <div class="footer-brand">
                <img src="public/images/logo/skywave-tech-logo.webp" alt="Skywave Technologies">
                <p>Business communication that just works.</p>
            </div>

            <div class="footer-links">
                <a href="<?= htmlspecialchars($mainAbout) ?>">About</a>
                <a href="<?= htmlspecialchars($mainProducts) ?>">Products</a>
                <a href="<?= htmlspecialchars($mainSolutions) ?>">Solutions</a>
                <a href="<?= htmlspecialchars($fishAfrica) ?>">Fish Africa</a>
                <a href="<?= htmlspecialchars($mainContact) ?>">Contact</a>
            </div>

            <div class="footer-switch">
                <span>Looking for our Zambia site?</span>
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
