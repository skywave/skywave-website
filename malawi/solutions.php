<?php
/**
 * Skywave Technologies Malawi — solutions page.
 */
$page = 'solutions';
require __DIR__ . '/app/partials/header.php';
?>

        <section class="page-hero">
            <div class="page-hero-inner">
                <span class="section-label">Solutions</span>
                <h1>End-to-end communication solutions.</h1>
                <p>
                    Designed around how your organisation actually works — not a one-size-fits-all
                    package.
                </p>
            </div>
        </section>

        <section class="section bg-light">
            <div class="card-grid">
                <article class="card">
                    <h3>VoIP Infrastructure Design &amp; Support</h3>
                    <p>
                        Complete VoIP infrastructure — network assessment, design, deployment and
                        ongoing support — with reliable performance, clear voice quality and an
                        architecture that grows with your organisation.
                    </p>
                    <a href="<?= $b ?>/#contact">Plan your VoIP rollout →</a>
                </article>

                <article class="card">
                    <h3>Data &amp; Voice Network Maintenance</h3>
                    <p>
                        End-to-end maintenance and support for your data and voice networks. We
                        monitor, troubleshoot, optimise and secure your infrastructure to minimise
                        downtime and keep connectivity consistent.
                    </p>
                    <a href="<?= $b ?>/#contact">Request a support review →</a>
                </article>

                <article class="card">
                    <h3>Migration to Cloud Platforms</h3>
                    <p>
                        Move from traditional systems to robust cloud-based communication with
                        minimal disruption — improved flexibility, enhanced mobility and reduced
                        operational costs for your teams.
                    </p>
                    <a href="<?= $b ?>/#contact">Plan your migration →</a>
                </article>

                <article class="card">
                    <h3>Service Aggregation</h3>
                    <p>
                        Voice, data, cloud and collaboration services integrated into one unified
                        solution — less management complexity, better efficiency and a single
                        provider to deal with.
                    </p>
                    <a href="<?= $b ?>/#contact">Simplify your services →</a>
                </article>

                <article class="card">
                    <h3>IT Outsourcing &amp; Technical Support</h3>
                    <p>
                        Skilled technicians, remote and on-site support, proactive monitoring and
                        fast issue resolution — so your technology stays secure, updated and fully
                        optimised.
                    </p>
                    <a href="<?= $b ?>/#contact">Explore managed support →</a>
                </article>

                <article class="card">
                    <h3>Business Communication Consultancy</h3>
                    <p>
                        Specialist guidance on system upgrades, cost optimisation, technology
                        roadmaps and custom communication solutions — tailored to your business
                        goals.
                    </p>
                    <a href="<?= $b ?>/#contact">Book a consultation →</a>
                </article>
            </div>

            <div class="section-cta">
                <p class="section-cta-text">Tell us what you are trying to solve and we will map the options.</p>
                <a class="btn primary" href="<?= $b ?>/#contact">Book a consultation</a>
            </div>
        </section>

<?php require __DIR__ . '/app/partials/footer.php'; ?>
