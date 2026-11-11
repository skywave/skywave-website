<?php
/**
 * Shared footer and scripts for the Malawi site.
 * Included at the end of every page, after the page content.
 */
if (!isset($page) || !isset($b)) {
    http_response_code(404);
    exit;
}
?>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer-grid">
            <div class="footer-brand">
                <img src="<?= $b ?>/public/images/logo/skywave-tech-logo.webp" alt="Skywave Technologies">
                <p>Business communication solutions.</p>
            </div>

            <div class="footer-links">
                <a href="<?= $b ?>/about">About</a>
                <a href="<?= $b ?>/products">Products</a>
                <a href="<?= $b ?>/services">Services</a>
                <a href="<?= $b ?>/solutions">Solutions</a>
                <a href="<?= $b ?>/fishafrica">Fish Africa</a>
                <a href="<?= $b ?>/resources">Resources</a>
                <a href="<?= $b ?>/#contact">Contact</a>
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

    <script src="<?= $b ?>/public/js/malawi.js" type="text/javascript"></script>
    <script src="<?= $b ?>/public/js/nav.js" type="text/javascript"></script>
</body>
</html>
