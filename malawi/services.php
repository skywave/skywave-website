<?php
/**
 * Skywave Technologies Malawi — services page.
 */
$page = 'services';
require __DIR__ . '/app/partials/header.php';
?>

        <section class="page-hero">
            <div class="page-hero-inner">
                <span class="section-label">Services</span>
                <h1>Expert services you can trust.</h1>
                <p>
                    Professional services that help your business get the most out of its
                    communication technology.
                </p>
            </div>
        </section>

        <section class="section bg-light">
            <div class="card-grid">
                <article class="card">
                    <h3>Unified Communication Systems</h3>
                    <p>
                        Voice calling, video conferencing, messaging, email and file sharing in one
                        seamless platform. Streamline communication, improve collaboration and boost
                        productivity from any device.
                    </p>
                    <a href="<?= $b ?>/#contact">Discuss unified communications →</a>
                </article>

                <article class="card">
                    <h3>Hosted &amp; Cloud Telephony</h3>
                    <p>
                        Phone system functionality delivered over the internet instead of on-site
                        hardware — advanced call features, easy scaling, reduced upfront costs and
                        dependable support for remote and hybrid teams.
                    </p>
                    <a href="<?= $b ?>/#contact">Discuss cloud telephony →</a>
                </article>

                <article class="card">
                    <h3>Equipment &amp; Network Maintenance</h3>
                    <p>
                        Installation, monitoring, troubleshooting and repair of your communication
                        and network infrastructure — routers, switches, servers and telephony
                        systems — to minimise downtime and extend the life of critical systems.
                    </p>
                    <a href="<?= $b ?>/#contact">Ask about support plans →</a>
                </article>
            </div>

            <div class="section-cta">
                <p class="section-cta-text">Need cover for an existing system? We support mixed environments.</p>
                <a class="btn primary" href="<?= $b ?>/#contact">Request a support review</a>
            </div>
        </section>

<?php require __DIR__ . '/app/partials/footer.php'; ?>
