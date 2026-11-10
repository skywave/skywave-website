<?php
/**
 * Skywave Technologies Malawi — one-page site.
 *
 * This page is intentionally self-contained under /malawi so it can be served
 * either from the main site at /malawi/ or from its own subdomain document root.
 * $base is detected from SCRIPT_NAME so asset and form URLs work in both cases.
 */

$base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
$mainSite = 'https://skywavetech.co.zm';
?><!doctype html>
<html lang="en-MW">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Skywave Technologies | Business Communication Solutions — Malawi</title>
    <meta name="description" content="Skywave Technologies Malawi provides secure, scalable business communication — VoIP, contact centres, gateways, IP telephony, conferencing and customer messaging.">

    <link rel="canonical" href="https://mw.skywavetech.co.zm/">
    <link rel="alternate" hreflang="en-ZM" href="https://skywavetech.co.zm/">
    <link rel="alternate" hreflang="en-MW" href="https://mw.skywavetech.co.zm/">
    <link rel="alternate" hreflang="x-default" href="https://skywavetech.co.zm/">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Skywave Technologies | Business Communication Solutions — Malawi">
    <meta property="og:description" content="Secure, scalable business communication — VoIP, contact centres, gateways, IP telephony, conferencing and customer messaging.">
    <meta property="og:url" content="https://mw.skywavetech.co.zm/">
    <meta property="og:image" content="https://mw.skywavetech.co.zm/public/images/logo/skywave-tech-logo.webp">

    <link rel="icon" type="image/png" href="<?= htmlspecialchars($base) ?>/public/images/logo/favicon.png">
    <link rel="apple-touch-icon" href="<?= htmlspecialchars($base) ?>/public/images/logo/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= htmlspecialchars($base) ?>/public/css/malawi.css" type="text/css" media="all">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Skywave Technologies",
        "url": "https://mw.skywavetech.co.zm/",
        "logo": "https://mw.skywavetech.co.zm/public/images/logo/skywave-tech-logo.webp",
        "description": "Business communication solutions for organisations in Malawi — VoIP, contact centres, gateways, IP telephony and customer messaging.",
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
        <a class="logo" href="<?= htmlspecialchars($base) ?>/" aria-label="Skywave Technologies Malawi home">
            <img src="<?= htmlspecialchars($base) ?>/public/images/logo/skywave-tech-logo.webp" alt="Skywave Technologies">
        </a>

        <nav id="navMenu">
            <a href="#about">About</a>
            <a href="#products">Products</a>
            <a href="#services">Services</a>
            <a href="#solutions">Solutions</a>
            <a href="#why">Why Us</a>
            <a href="#fish-africa">Fish Africa</a>
            <a href="#resources">Resources</a>
            <a href="#contact">Contact</a>
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
                <span class="eyebrow">Skywave Technologies Malawi</span>
                <h1>Reliable business communication.</h1>
                <p>
                    We design, deploy and support secure communication systems for organisations
                    in Malawi — from VoIP and contact centres to complete business telephony.
                </p>
                <div class="hero-actions">
                    <a class="btn primary" href="#contact">Contact our team</a>
                    <a class="btn ghost" href="#products">Explore products</a>
                </div>
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
                    organisations across Malawi. Our team manages the full lifecycle — from
                    design and deployment to ongoing support.
                </p>
                <p>
                    We work with established technology partners to deliver VoIP, contact centre,
                    gateway and IP telephony solutions that improve reliability and reduce
                    communication costs for businesses of every size.
                </p>
                <a class="btn alt" href="#contact">Talk to our team</a>
            </div>
        </section>

        <!-- PRODUCTS -->
        <section class="section bg-light" id="products">
            <div class="section-head center">
                <span class="section-label">Products</span>
                <h2>Hardware that powers your communication.</h2>
                <p class="section-sub">
                    Communication platforms and endpoints from established technology partners,
                    supplied, installed and supported by our local team.
                </p>
            </div>

            <div class="card-grid">
                <article class="card">
                    <h3>VoIP PBX</h3>
                    <p>
                        A modern, internet-based phone system built for efficiency and cost savings.
                        Call routing, IVR, voicemail-to-email and seamless remote connectivity let
                        your organisation communicate smarter, scale easily and reduce reliance on
                        traditional phone lines.
                    </p>
                    <a href="#contact">Enquire about VoIP PBX →</a>
                </article>

                <article class="card">
                    <h3>Call Centre Systems</h3>
                    <p>
                        Powerful call centre systems that streamline customer interactions and boost
                        service delivery — automatic call distribution, real-time reporting, call
                        monitoring and CRM integration for teams handling high call volumes.
                    </p>
                    <a href="#contact">Enquire about call centres →</a>
                </article>

                <article class="card">
                    <h3>Analog / GSM / ISDN Gateways</h3>
                    <p>
                        Gateways that bridge traditional telephony and modern IP communication —
                        integrating legacy telephone lines, mobile networks or ISDN circuits into
                        your VoIP system for cost-effective routing, reliability and backup routes.
                    </p>
                    <a href="#contact">Enquire about gateways →</a>
                </article>

                <article class="card">
                    <h3>Video &amp; Audio Conferencing</h3>
                    <p>
                        High-quality conferencing systems for productive remote collaboration —
                        crystal-clear communication, secure connectivity and user-friendly meeting
                        tools for virtual meetings, presentations and training from any location.
                    </p>
                    <a href="#contact">Enquire about conferencing →</a>
                </article>

                <article class="card">
                    <h3>IP Phones</h3>
                    <p>
                        IP phones that combine modern design with powerful functionality —
                        programmable keys, multi-line support and seamless integration with VoIP PBX
                        systems for reliable, high-definition voice at every workstation.
                    </p>
                    <a href="#contact">Enquire about IP phones →</a>
                </article>
            </div>
        </section>

        <!-- SERVICES -->
        <section class="section bg-white" id="services">
            <div class="section-head center">
                <span class="section-label">Services</span>
                <h2>Expert services you can trust.</h2>
                <p class="section-sub">
                    Professional services that help your business get the most out of its
                    communication technology.
                </p>
            </div>

            <div class="card-grid">
                <article class="card">
                    <h3>Unified Communication Systems</h3>
                    <p>
                        Voice calling, video conferencing, messaging, email and file sharing in one
                        seamless platform. Streamline communication, improve collaboration and boost
                        productivity from any device.
                    </p>
                    <a href="#contact">Discuss unified communications →</a>
                </article>

                <article class="card">
                    <h3>Hosted &amp; Cloud Telephony</h3>
                    <p>
                        Phone system functionality delivered over the internet instead of on-site
                        hardware — advanced call features, easy scaling, reduced upfront costs and
                        dependable support for remote and hybrid teams.
                    </p>
                    <a href="#contact">Discuss cloud telephony →</a>
                </article>

                <article class="card">
                    <h3>Equipment &amp; Network Maintenance</h3>
                    <p>
                        Installation, monitoring, troubleshooting and repair of your communication
                        and network infrastructure — routers, switches, servers and telephony
                        systems — to minimise downtime and extend the life of critical systems.
                    </p>
                    <a href="#contact">Ask about support plans →</a>
                </article>
            </div>
        </section>

        <!-- SOLUTIONS -->
        <section class="section bg-light" id="solutions">
            <div class="section-head center">
                <span class="section-label">Solutions</span>
                <h2>End-to-end communication solutions.</h2>
                <p class="section-sub">
                    Designed around how your organisation actually works — not a one-size-fits-all
                    package.
                </p>
            </div>

            <div class="card-grid">
                <article class="card">
                    <h3>VoIP Infrastructure Design &amp; Support</h3>
                    <p>
                        Complete VoIP infrastructure — network assessment, design, deployment and
                        ongoing support — with reliable performance, clear voice quality and an
                        architecture that grows with your organisation.
                    </p>
                    <a href="#contact">Plan your VoIP rollout →</a>
                </article>

                <article class="card">
                    <h3>Data &amp; Voice Network Maintenance</h3>
                    <p>
                        End-to-end maintenance and support for your data and voice networks. We
                        monitor, troubleshoot, optimise and secure your infrastructure to minimise
                        downtime and keep connectivity consistent.
                    </p>
                    <a href="#contact">Request a support review →</a>
                </article>

                <article class="card">
                    <h3>Migration to Cloud Platforms</h3>
                    <p>
                        Move from traditional systems to robust cloud-based communication with
                        minimal disruption — improved flexibility, enhanced mobility and reduced
                        operational costs for your teams.
                    </p>
                    <a href="#contact">Plan your migration →</a>
                </article>

                <article class="card">
                    <h3>Service Aggregation</h3>
                    <p>
                        Voice, data, cloud and collaboration services integrated into one unified
                        solution — less management complexity, better efficiency and a single
                        provider to deal with.
                    </p>
                    <a href="#contact">Simplify your services →</a>
                </article>

                <article class="card">
                    <h3>IT Outsourcing &amp; Technical Support</h3>
                    <p>
                        Skilled technicians, remote and on-site support, proactive monitoring and
                        fast issue resolution — so your technology stays secure, updated and fully
                        optimised.
                    </p>
                    <a href="#contact">Explore managed support →</a>
                </article>

                <article class="card">
                    <h3>Business Communication Consultancy</h3>
                    <p>
                        Specialist guidance on system upgrades, cost optimisation, technology
                        roadmaps and custom communication solutions — tailored to your business
                        goals.
                    </p>
                    <a href="#contact">Book a consultation →</a>
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
            <div class="section-head center">
                <span class="section-label">Also from Skywave</span>
                <h2>Fish Africa customer messaging.</h2>
                <p class="section-sub">
                    Text messaging and voice messaging that help your organisation reach
                    customers, share information and automate communication at scale.
                </p>
            </div>

            <div class="fish-card">
                <div class="fish-copy">
                    <h2>Every customer conversation, in one place.</h2>
                    <p>
                        Fish Africa gives your business two powerful ways to connect with your
                        audience: <strong>Text Messaging (SMS) and Voice Messaging</strong>, all
                        managed from one easy-to-use platform.
                    </p>
                    <div class="fish-actions">
                        <a class="btn primary" href="https://skywave.letsfish.africa/register" target="_blank" rel="noopener">Start for free</a>
                        <a class="btn alt" href="https://skywave.letsfish.africa/login" target="_blank" rel="noopener">Sign in</a>
                    </div>
                </div>

                <div class="fish-media">
                    <img src="<?= htmlspecialchars($base) ?>/public/images/fishafrica/hero.jpg" alt="Fish Africa customer messaging">
                </div>
            </div>

            <div class="fish-intro">
                <p>Create and manage messaging campaigns, organise your contacts and keep your customer lists up to date, all in one place.</p>
                <p>Track message delivery, monitor campaign performance and access clear reports to understand how your campaigns are performing and make informed decisions.</p>
                <p>With API integration, you can also connect Fish Africa to your existing business systems, allowing you to automate messages and make customer communication part of your everyday operations.</p>
                <p class="fish-intro-closing">One platform. Two powerful ways to connect. More opportunities to reach your customers.</p>
            </div>

            <div class="fish-grid">
                <article class="fish-product">
                    <h3>Text Messaging (SMS)</h3>
                    <p>Reach thousands of customers in seconds — from marketing campaigns to reminders and important announcements.</p>
                    <ul>
                        <li>Text Messaging (SMS) across supported networks</li>
                        <li>Marketing &amp; promotional campaigns</li>
                        <li>Appointment reminders &amp; notifications</li>
                        <li>Business updates &amp; announcements</li>
                        <li>Contact &amp; campaign management</li>
                        <li>Delivery &amp; performance monitoring</li>
                    </ul>
                </article>

                <article class="fish-product">
                    <h3>Voice Messaging</h3>
                    <p>Let your message be heard — pre-recorded voice messages delivered directly to mobile phones.</p>
                    <ul>
                        <li>Recorded voice broadcasts</li>
                        <li>Announcements &amp; important alerts</li>
                        <li>Promotional voice messages</li>
                        <li>Local languages: Chichewa, Tumbuka, Yao &amp; English</li>
                        <li>Reach across supported networks</li>
                        <li>Campaign performance monitoring</li>
                    </ul>
                </article>
            </div>

            <div class="fish-features">
                <div class="fish-feature">
                    <h3>Simple to use</h3>
                    <p>Manage your messaging campaigns from one platform.</p>
                </div>
                <div class="fish-feature">
                    <h3>Wider reach</h3>
                    <p>Connect with audiences across supported mobile networks.</p>
                </div>
                <div class="fish-feature">
                    <h3>Local languages</h3>
                    <p>Communicate through voice messaging in familiar local languages.</p>
                </div>
                <div class="fish-feature">
                    <h3>Time saving</h3>
                    <p>Reach large audiences without contacting people individually.</p>
                </div>
                <div class="fish-feature">
                    <h3>Campaign insights</h3>
                    <p>Monitor delivery and measure campaign performance.</p>
                </div>
                <div class="fish-feature">
                    <h3>Business integration</h3>
                    <p>Connect messaging to your existing systems through APIs.</p>
                </div>
            </div>

            <div class="fish-audience">
                <h3>Who can benefit?</h3>
                <ul>
                    <li>Banks and financial institutions</li>
                    <li>Betting and gaming companies</li>
                    <li>Schools and educational institutions</li>
                    <li>NGOs and development organisations</li>
                    <li>Healthcare providers</li>
                    <li>Retailers and businesses</li>
                    <li>Government institutions</li>
                    <li>Agriculture and farming organisations</li>
                </ul>
            </div>
        </section>

        <!-- RESOURCES -->
        <section class="section bg-light" id="resources">
            <div class="section-head center">
                <span class="section-label">Resources</span>
                <h2>Tools to help you decide.</h2>
                <p class="section-sub">
                    A short profile of the company, quick links to what we do, and answers to the
                    questions we are asked most often.
                </p>
            </div>

            <div class="profile-sheet" id="profile">
                <div class="profile-head">
                    <div>
                        <span class="section-label">Company profile</span>
                        <h3>Skywave Technologies — Malawi</h3>
                    </div>
                    <button class="btn alt print-btn" type="button" data-print>Print / Save as PDF</button>
                </div>

                <p>
                    Skywave Technologies is a business communication company that designs, deploys
                    and supports secure voice and data communication systems for organisations. We
                    combine established international technology partners with local installation
                    and support, so systems are dependable long after go-live.
                </p>

                <dl class="profile-facts">
                    <div>
                        <dt>What we deliver</dt>
                        <dd>VoIP PBX, contact centres, gateways, IP telephony, conferencing and managed support</dd>
                    </div>
                    <div>
                        <dt>Where we work</dt>
                        <dd>Organisations across Malawi, with remote and on-site support</dd>
                    </div>
                    <div>
                        <dt>Technology partners</dt>
                        <dd>Yeastar, Grandstream, Sangoma, Yealink, Fanvil, Dell and HP</dd>
                    </div>
                    <div>
                        <dt>Customer messaging</dt>
                        <dd>Fish Africa text messaging and voice messaging, including Chichewa and Tumbuka</dd>
                    </div>
                </dl>
            </div>

            <div class="resource-grid">
                <a class="resource-card" href="#products">
                    <h3>Products &amp; solutions guide</h3>
                    <p>Browse the platforms, endpoints and systems we supply and support.</p>
                    <span>View products →</span>
                </a>
                <a class="resource-card" href="#fish-africa">
                    <h3>Fish Africa overview</h3>
                    <p>How text messaging and voice messaging work, and who they are built for.</p>
                    <span>Explore Fish Africa →</span>
                </a>
                <a class="resource-card" href="#services">
                    <h3>Support &amp; maintenance</h3>
                    <p>What our service and maintenance plans cover for your infrastructure.</p>
                    <span>See services →</span>
                </a>
                <a class="resource-card" href="#contact">
                    <h3>Talk to an engineer</h3>
                    <p>Describe your project or current setup and we will come back to you.</p>
                    <span>Contact us →</span>
                </a>
            </div>

            <div class="faq" id="faq">
                <h3>Frequently asked questions</h3>

                <details>
                    <summary>What is VoIP and do we need to replace our cabling?</summary>
                    <p>
                        VoIP carries calls over your data network instead of traditional phone
                        lines. In most offices the existing network cabling is sufficient — we
                        assess your network before deployment and only recommend changes where
                        they are needed.
                    </p>
                </details>

                <details>
                    <summary>Can we keep our existing phone numbers?</summary>
                    <p>
                        In most cases yes. Numbers can usually be ported or routed into the new
                        system. We confirm what is possible with your operator during the design
                        stage, before anything is switched over.
                    </p>
                </details>

                <details>
                    <summary>How long does a typical deployment take?</summary>
                    <p>
                        A single-site office is usually up and running within days of the design
                        being agreed. Multi-site rollouts are phased so each location can keep
                        working while it is migrated.
                    </p>
                </details>

                <details>
                    <summary>Do you support remote and hybrid teams?</summary>
                    <p>
                        Yes. Softphones, mobile apps and IP phones let staff make and receive calls
                        on the same system whether they are in the office, at home or travelling.
                    </p>
                </details>

                <details>
                    <summary>What does Fish Africa do?</summary>
                    <p>
                        Fish Africa is our customer messaging platform. It sends text messages and
                        pre-recorded voice messages to large audiences, tracks delivery, and can be
                        connected to your existing systems through APIs.
                    </p>
                </details>

                <details>
                    <summary>How do we get a quote?</summary>
                    <p>
                        Send us a short description of what you need using the form below. We will
                        ask a few questions, then provide a written proposal with the recommended
                        equipment, licences and support.
                    </p>
                </details>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="section contact" id="contact">
            <div class="contact-wrap">
                <div class="contact-panel">
                    <span class="section-label light">Contact</span>
                    <h2>Discuss your communication requirements.</h2>
                    <p>
                        Speak with the Skywave team about your project, infrastructure or support
                        needs. We reply to every enquiry.
                    </p>
                    <div class="contact-details">
                        <div>
                            <span>Email</span>
                            <a href="mailto:info@skywavetech.co.zm">info@skywavetech.co.zm</a>
                        </div>
                        <div>
                            <span>Customer messaging</span>
                            <a href="https://skywave.letsfish.africa/" target="_blank" rel="noopener">Fish Africa portal →</a>
                        </div>
                    </div>
                </div>

                <form id="contactForm" class="contact-form" method="post"
                      action="<?= htmlspecialchars($base) ?>/app/processes/contact_process.php">
                    <div class="field">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" autocomplete="name" required>
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" autocomplete="email" required>
                    </div>
                    <div class="field">
                        <label for="phone">Phone <span>(optional)</span></label>
                        <input id="phone" name="phone" type="tel" autocomplete="tel">
                    </div>
                    <div class="field">
                        <label for="message">How can we help?</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>

                    <div class="hp-field" aria-hidden="true">
                        <label for="website">Website</label>
                        <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
                    </div>

                    <button class="btn primary" type="submit">Send enquiry</button>
                    <p class="form-message" id="form-message" role="status" aria-live="polite"></p>
                </form>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer-grid">
            <div class="footer-brand">
                <img src="<?= htmlspecialchars($base) ?>/public/images/logo/skywave-tech-logo.webp" alt="Skywave Technologies">
                <p>Business communication solutions.</p>
            </div>

            <div class="footer-links">
                <a href="#about">About</a>
                <a href="#products">Products</a>
                <a href="#solutions">Solutions</a>
                <a href="#why">Why Us</a>
                <a href="#fish-africa">Fish Africa</a>
                <a href="#resources">Resources</a>
                <a href="#contact">Contact</a>
            </div>

            <div class="footer-switch">
                <span>Skywave Zambia</span>
                <a href="<?= htmlspecialchars($mainSite) ?>" rel="noopener">skywavetech.co.zm →</a>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© <?= date('Y') ?> Skywave Technologies. All rights reserved.</span>
            <span><a href="https://mw.skywavetech.co.zm/">mw.skywavetech.co.zm</a></span>
        </div>
    </footer>

    <script src="<?= htmlspecialchars($base) ?>/public/js/malawi.js" type="text/javascript"></script>
    <script src="<?= htmlspecialchars($base) ?>/public/js/nav.js" type="text/javascript"></script>
</body>
</html>
