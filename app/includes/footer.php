<footer class="site-footer">

    <div class="container footer-container">

        <div class="footer-top">

            <div class="footer-brand">

                <a href="/" class="footer-logo" aria-label="Gastronomia Tech">

                    <span class="gt-mark footer-gt">
                        <span class="gt-g">G</span>
                        <span class="gt-t">T</span>
                    </span>

                    <span class="footer-brand-name">
                        Gastronomia
                        <span>Tech</span>
                    </span>

                </a>

                <p>
                    <?= htmlspecialchars(t('footer.tagline')) ?>
                </p>

            </div>


            <div class="footer-nav">

                <div class="footer-column">

                    <span class="footer-column-title">
                        <?= htmlspecialchars(t('footer.products')) ?>
                    </span>

                    <a
                        href="https://gastronomia.ai"
                        target="_blank"
                        rel="noopener"
                    >
                        <?= htmlspecialchars(t('footer.gastronomia')) ?>
                        <span>↗</span>
                    </a>

                    <a
                        href="https://qaldo.io"
                        target="_blank"
                        rel="noopener"
                    >
                        <?= htmlspecialchars(t('footer.qaldo')) ?>
                        <span>↗</span>
                    </a>

                </div>


                <div class="footer-column">

                    <span class="footer-column-title">
                        <?= htmlspecialchars(t('footer.company')) ?>
                    </span>

                    <a href="#company">
                        <?= htmlspecialchars(t('footer.about')) ?>
                    </a>

                    <a href="#vision">
                        <?= htmlspecialchars(t('footer.vision')) ?>
                    </a>

                    <a href="#contact">
                        <?= htmlspecialchars(t('footer.contact')) ?>
                    </a>

                </div>


                <div class="footer-column">

                    <span class="footer-column-title">
                        <?= htmlspecialchars(t('footer.connect')) ?>
                    </span>

                    <a
    href="https://www.instagram.com/gastronomia.ai"
    target="_blank"
    rel="noopener"
>
    <?= htmlspecialchars(t('footer.instagram')) ?>
    <span>↗</span>
</a>

                    <a
                        href="https://www.linkedin.com/company/gastronomia-ai"
                        target="_blank"
                        rel="noopener"
                    >
                        <?= htmlspecialchars(t('footer.linkedin')) ?>
                        <span>↗</span>
                    </a>

                    <a href="mailto:info@gastronomia.ai">
                        info@gastronomia.ai
                    </a>

                </div>

            </div>

        </div>


        <div class="footer-bottom">

            <span>
                <?= htmlspecialchars(t('footer.location')) ?>
            </span>

            <span>
                <?= htmlspecialchars(t('footer.copyright')) ?>
            </span>

            <span>
    <?= strtoupper(htmlspecialchars($language)) ?>
</span

        </div>

    </div>

</footer>


<script src="assets/js/main.js"></script>

</body>
</html>