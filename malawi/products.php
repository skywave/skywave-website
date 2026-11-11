<?php
/**
 * Skywave Technologies Malawi — products page.
 */
$page = 'products';
require __DIR__ . '/app/partials/header.php';
?>

        <section class="page-hero">
            <div class="page-hero-inner">
                <span class="section-label">Products</span>
                <h1>Hardware that powers your communication.</h1>
                <p>
                    Communication platforms and endpoints, supplied, installed and supported by
                    our local team.
                </p>
            </div>
        </section>

        <section class="section bg-light">
            <div class="card-grid">
                <article class="card">
                    <h3>VoIP PBX</h3>
                    <p>
                        A modern, internet-based phone system built for efficiency and cost savings.
                        Call routing, IVR, voicemail-to-email and seamless remote connectivity let
                        your organisation communicate smarter, scale easily and reduce reliance on
                        traditional phone lines.
                    </p>
                    <a href="<?= $b ?>/#contact">Enquire about VoIP PBX →</a>
                </article>

                <article class="card">
                    <h3>Call Centre Systems</h3>
                    <p>
                        Powerful call centre systems that streamline customer interactions and boost
                        service delivery — automatic call distribution, real-time reporting, call
                        monitoring and CRM integration for teams handling high call volumes.
                    </p>
                    <a href="<?= $b ?>/#contact">Enquire about call centres →</a>
                </article>

                <article class="card">
                    <h3>Analog / GSM / ISDN Gateways</h3>
                    <p>
                        Gateways that bridge traditional telephony and modern IP communication —
                        integrating legacy telephone lines, mobile networks or ISDN circuits into
                        your VoIP system for cost-effective routing, reliability and backup routes.
                    </p>
                    <a href="<?= $b ?>/#contact">Enquire about gateways →</a>
                </article>

                <article class="card">
                    <h3>Video &amp; Audio Conferencing</h3>
                    <p>
                        High-quality conferencing systems for productive remote collaboration —
                        crystal-clear communication, secure connectivity and user-friendly meeting
                        tools for virtual meetings, presentations and training from any location.
                    </p>
                    <a href="<?= $b ?>/#contact">Enquire about conferencing →</a>
                </article>

                <article class="card">
                    <h3>IP Phones</h3>
                    <p>
                        IP phones that combine modern design with powerful functionality —
                        programmable keys, multi-line support and seamless integration with VoIP PBX
                        systems for reliable, high-definition voice at every workstation.
                    </p>
                    <a href="<?= $b ?>/#contact">Enquire about IP phones →</a>
                </article>
            </div>

            <div class="section-cta">
                <p class="section-cta-text">Not sure what your office needs? We will recommend a setup.</p>
                <a class="btn primary" href="<?= $b ?>/#contact">Request a recommendation</a>
            </div>
        </section>

<?php require __DIR__ . '/app/partials/footer.php'; ?>
