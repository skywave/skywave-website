<?php
/**
 * Skywave Technologies Malawi — about page.
 */
$page = 'about';
require __DIR__ . '/app/partials/header.php';
?>

        <section class="page-hero">
            <div class="page-hero-inner">
                <span class="section-label">About Skywave</span>
                <h1>Communication systems built for business.</h1>
                <p>
                    A local team designing, deploying and supporting secure voice and data
                    communication for organisations across Malawi.
                </p>
            </div>
        </section>

        <section class="section bg-white">
            <div class="intro-copy">
                <p>
                    Skywave Technologies provides secure, scalable communication solutions to
                    organisations across Malawi. Our team manages the full lifecycle — from design
                    and deployment to ongoing support — so systems stay dependable long after
                    go-live.
                </p>
                <p>
                    We deliver VoIP, contact centre, gateway and IP telephony solutions that
                    improve reliability and reduce communication costs for businesses of every
                    size. Every deployment starts with an assessment of your network and ends with
                    a support plan you can rely on.
                </p>
                <p>
                    Our services cover unified communications, hosted and cloud telephony,
                    equipment and network maintenance, and full IT outsourcing. Alongside that,
                    our Fish Africa platform gives organisations a simple way to reach customers
                    through text messaging and voice messaging.
                </p>

                <a class="btn primary" href="<?= $b ?>/#contact">Talk to our team</a>
            </div>
        </section>

        <section class="section bg-light">
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

        <section class="section bg-white">
            <div class="section-head center">
                <span class="section-label">How we work</span>
                <h2>From assessment to ongoing support.</h2>
                <p class="section-sub">
                    Every project follows the same straightforward path, so you always know what
                    happens next.
                </p>
            </div>

            <div class="card-grid">
                <article class="card">
                    <h3>Assess</h3>
                    <p>
                        We review your current network, phone lines and ways of working before
                        recommending anything.
                    </p>
                </article>
                <article class="card">
                    <h3>Design &amp; deploy</h3>
                    <p>
                        A clear plan with the right platforms and endpoints, installed and tested
                        with minimal disruption to your team.
                    </p>
                </article>
                <article class="card">
                    <h3>Support</h3>
                    <p>
                        Local and remote support after go-live, with maintenance plans that keep
                        systems running and costs predictable.
                    </p>
                </article>
            </div>

            <div class="section-cta">
                <a class="btn primary" href="<?= $b ?>/products">See what we supply →</a>
            </div>
        </section>

<?php require __DIR__ . '/app/partials/footer.php'; ?>
