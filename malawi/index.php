<?php
/**
 * Skywave Technologies Malawi — homepage.
 *
 * Short marketing page: each section links to a dedicated page so the
 * homepage stays readable. The contact form lives here, and every page
 * links back to it via #contact.
 */
$page = 'index';
require __DIR__ . '/app/partials/header.php';
?>

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
                    <a class="btn ghost" href="<?= $b ?>/products">Explore products</a>
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
                <a class="btn alt" href="<?= $b ?>/about">Know more about us</a>
            </div>
        </section>

        <!-- WHAT WE DO -->
        <section class="section bg-light" id="offerings">
            <div class="section-head center">
                <span class="section-label">What We Do Best</span>
                <h2>Products, services and solutions.</h2>
                <p class="section-sub">
                    Communication platforms and endpoints, the services that keep them running,
                    and end-to-end solutions built around how your organisation works.
                </p>
            </div>

            <div class="card-grid">
                <article class="card">
                    <h3>Products</h3>
                    <p>
                        VoIP PBX, call centre systems, gateways, conferencing and IP phones,
                        supplied and supported by our local team.
                    </p>
                    <a href="<?= $b ?>/products">View products →</a>
                </article>

                <article class="card">
                    <h3>Services</h3>
                    <p>
                        Unified communications, hosted and cloud telephony, plus equipment and
                        network maintenance.
                    </p>
                    <a href="<?= $b ?>/services">Explore services →</a>
                </article>

                <article class="card">
                    <h3>Solutions</h3>
                    <p>
                        VoIP infrastructure, network support, cloud migration and consultancy —
                        designed around your goals.
                    </p>
                    <a href="<?= $b ?>/solutions">See solutions →</a>
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
                        <a class="btn primary" href="<?= $b ?>/fishafrica">Explore Fish Africa</a>
                        <a class="btn alt" href="https://skywave.letsfish.africa/login" target="_blank" rel="noopener">Sign in</a>
                    </div>
                </div>

                <div class="fish-media">
                    <img src="<?= $b ?>/public/images/fishafrica/hero.jpg" alt="Fish Africa customer messaging">
                </div>
            </div>
        </section>

        <!-- RESOURCES -->
        <section class="section bg-light" id="resources">
            <div class="section-head center">
                <span class="section-label">Resources</span>
                <h2>Tools to help you decide.</h2>
                <p class="section-sub">
                    A short profile of the company and answers to the questions we are asked
                    most often.
                </p>
            </div>

            <div class="card-grid">
                <article class="card">
                    <h3>Company profile</h3>
                    <p>Who we are, what we deliver and how we support you after go-live.</p>
                    <a href="<?= $b ?>/resources#profile">View the profile →</a>
                </article>

                <article class="card">
                    <h3>Frequently asked questions</h3>
                    <p>VoIP, number porting, deployment times and how Fish Africa fits in.</p>
                    <a href="<?= $b ?>/resources#faq">Read the FAQs →</a>
                </article>

                <article class="card">
                    <h3>Talk to an engineer</h3>
                    <p>Describe your project or current setup and we will come back to you.</p>
                    <a href="#contact">Contact us →</a>
                </article>
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
                      action="<?= $b ?>/app/processes/contact_process.php">
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

<?php require __DIR__ . '/app/partials/footer.php'; ?>
