<?php
/**
 * Shared <head>, header and navigation for the Malawi site.
 *
 * Every page sets $page to one of the keys in $PAGE_META below, then includes
 * this file. $base is detected from SCRIPT_NAME so the same code works at
 * /malawi/ and at a subdomain document root.
 */
if (!isset($page)) {
    http_response_code(404);
    exit;
}

$base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
$b = htmlspecialchars($base);
$mainSite = 'https://skywavetech.co.zm';
$siteUrl = 'https://mw.skywavetech.co.zm';

$PAGE_META = [
    'index' => [
        'title' => 'Skywave Technologies | Business Communication Solutions — Malawi',
        'description' => 'Skywave Technologies Malawi provides secure, scalable business communication — VoIP, contact centres, gateways, IP telephony, conferencing and customer messaging.',
        'path' => '/',
    ],
    'about' => [
        'title' => 'About Skywave Technologies — Malawi',
        'description' => 'Skywave Technologies designs, deploys and supports secure voice and data communication systems for organisations across Malawi.',
        'path' => '/about',
    ],
    'products' => [
        'title' => 'Products — VoIP PBX, Call Centres & Gateways | Skywave Malawi',
        'description' => 'VoIP PBX, call centre systems, analog / GSM / ISDN gateways, conferencing and IP phones — supplied, installed and supported in Malawi.',
        'path' => '/products',
    ],
    'services' => [
        'title' => 'Services — Unified Communications & Cloud Telephony | Skywave Malawi',
        'description' => 'Unified communication systems, hosted and cloud telephony, and equipment and network maintenance for organisations in Malawi.',
        'path' => '/services',
    ],
    'solutions' => [
        'title' => 'Solutions — VoIP, Networks & Cloud Migration | Skywave Malawi',
        'description' => 'End-to-end communication solutions: VoIP infrastructure, data and voice network maintenance, cloud migration, service aggregation, IT outsourcing and consultancy.',
        'path' => '/solutions',
    ],
    'fishafrica' => [
        'title' => 'Fish Africa — Text Messaging (SMS) & Voice Messaging | Skywave Malawi',
        'description' => 'Fish Africa combines text messaging (SMS) and voice messaging in one platform, with campaign management, reporting and API integration.',
        'path' => '/fishafrica',
    ],
    'resources' => [
        'title' => 'Resources — Company Profile & FAQ | Skywave Malawi',
        'description' => 'A short profile of Skywave Technologies, quick links to what we do, and answers to the questions we are asked most often.',
        'path' => '/resources',
    ],
];

$meta = $PAGE_META[$page] ?? $PAGE_META['index'];
$canonical = $siteUrl . $meta['path'];
?><!doctype html>
<html lang="en-MW">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= htmlspecialchars($meta['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta['description']) ?>">

    <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
<?php if ($page === 'index'): ?>
    <link rel="alternate" hreflang="en-ZM" href="https://skywavetech.co.zm/">
    <link rel="alternate" hreflang="en-MW" href="https://mw.skywavetech.co.zm/">
    <link rel="alternate" hreflang="x-default" href="https://skywavetech.co.zm/">
<?php endif; ?>

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($meta['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($meta['description']) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($siteUrl) ?>/public/images/logo/skywave-tech-logo.webp">

    <link rel="icon" type="image/png" href="<?= $b ?>/public/images/logo/favicon.png">
    <link rel="apple-touch-icon" href="<?= $b ?>/public/images/logo/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $b ?>/public/css/malawi.css" type="text/css" media="all">

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
        <a class="logo" href="<?= $b ?>/" aria-label="Skywave Technologies Malawi home">
            <img src="<?= $b ?>/public/images/logo/skywave-tech-logo.webp" alt="Skywave Technologies">
        </a>

        <nav id="navMenu">
            <a href="<?= $b ?>/">Home</a>
            <a href="<?= $b ?>/about">About</a>
            <a href="<?= $b ?>/products">Products</a>
            <a href="<?= $b ?>/services">Services</a>
            <a href="<?= $b ?>/solutions">Solutions</a>
            <a href="<?= $b ?>/fishafrica">Fish Africa</a>
            <a href="<?= $b ?>/resources">Resources</a>
            <a href="<?= $b ?>/#contact" class="contact-btn">Contact</a>
        </nav>

        <button class="hamburger" id="menuBtn" aria-label="Open menu" aria-expanded="false" aria-controls="navMenu">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </header>

    <main>
