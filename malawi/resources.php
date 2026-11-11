<?php
/**
 * Skywave Technologies Malawi — resources page.
 */
$page = 'resources';
require __DIR__ . '/app/partials/header.php';
?>

        <section class="page-hero">
            <div class="page-hero-inner">
                <span class="section-label">Resources</span>
                <h1>Tools to help you decide.</h1>
                <p>
                    A short profile of the company, quick links to what we do, and answers to the
                    questions we are asked most often.
                </p>
            </div>
        </section>

        <section class="section bg-light">
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
                    combine proven international platforms with local installation and support, so
                    systems are dependable long after go-live.
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
                        <dt>How we work</dt>
                        <dd>Assessment, design, deployment and ongoing support under one team</dd>
                    </div>
                    <div>
                        <dt>Customer messaging</dt>
                        <dd>Fish Africa text messaging and voice messaging, including Chichewa and Tumbuka</dd>
                    </div>
                </dl>
            </div>

            <div class="resource-grid">
                <a class="resource-card" href="<?= $b ?>/products">
                    <h3>Products &amp; solutions guide</h3>
                    <p>Browse the platforms, endpoints and systems we supply and support.</p>
                    <span>View products →</span>
                </a>
                <a class="resource-card" href="<?= $b ?>/fishafrica">
                    <h3>Fish Africa overview</h3>
                    <p>How text messaging and voice messaging work, and who they are built for.</p>
                    <span>Explore Fish Africa →</span>
                </a>
                <a class="resource-card" href="<?= $b ?>/services">
                    <h3>Support &amp; maintenance</h3>
                    <p>What our service and maintenance plans cover for your infrastructure.</p>
                    <span>See services →</span>
                </a>
                <a class="resource-card" href="<?= $b ?>/#contact">
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
                        Send us a short description of what you need using the contact form on the
                        homepage. We will ask a few questions, then provide a written proposal with
                        the recommended equipment, licences and support.
                    </p>
                </details>
            </div>
        </section>

<?php require __DIR__ . '/app/partials/footer.php'; ?>
