<header class="site-header">
    <div class="container nav-container">

        <a href="/" class="brand" aria-label="Gastronomia Tech">

            <span class="gt-mark" aria-hidden="true">
                <span class="gt-g">G</span>
                <span class="gt-t">T</span>
            </span>

            <span class="brand-name">
                Gastronomia
                <span>Tech</span>
            </span>

        </a>

        <nav class="main-nav" aria-label="Main navigation">

            <a href="#products">
                <?= htmlspecialchars(t('navigation.products')) ?>
            </a>

            <a href="#company">
                <?= htmlspecialchars(t('navigation.company')) ?>
            </a>

            <a href="#vision">
                <?= htmlspecialchars(t('navigation.vision')) ?>
            </a>

        </nav>

        <div class="nav-actions">

            <div class="language-switcher">

    <a
        href="?lang=en"
        class="<?= $language === 'en' ? 'active' : '' ?>"
    >
        EN
    </a>

    <span>/</span>

    <a
        href="?lang=fr"
        class="<?= $language === 'fr' ? 'active' : '' ?>"
    >
        FR
    </a>

</div>

            <a href="#contact" class="nav-contact">
                <?= htmlspecialchars(t('navigation.contact')) ?>
                <span>↗</span>
            </a>

        </div>

        <button
            class="mobile-menu-toggle"
            type="button"
            aria-label="Open menu"
            aria-expanded="false"
        >
            <span></span>
            <span></span>
        </button>

    </div>
</header>