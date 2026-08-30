<?php

$config = require __DIR__ . '/../app/config/app.php';

$language = $_GET['lang'] ?? $config['default_language'];

if (!in_array($language, $config['supported_languages'], true)) {
    $language = $config['default_language'];
}

$translationFile = __DIR__ . '/../app/lang/' . $language . '.php';

if (!file_exists($translationFile)) {
    $language = $config['default_language'];
    $translationFile = __DIR__ . '/../app/lang/' . $language . '.php';
}

$translations = require $translationFile;

require_once __DIR__ . '/../app/helpers/i18n.php';
?>

<?php require __DIR__ . '/../app/includes/header.php'; ?>

<main>

    <section class="hero">

        <div class="hero-background-mark" aria-hidden="true">
            GT
        </div>

        <div class="container hero-container">

            <div class="hero-main">

                <div class="hero-content">

                    <div class="hero-eyebrow">
                        <span></span>

                        <?= htmlspecialchars(t('hero.eyebrow')) ?>
                    </div>

                    <h1 class="hero-title">
                        <?= htmlspecialchars(t('hero.title_before')) ?>
                        <em>
                            <?= htmlspecialchars(t('hero.title_emphasis')) ?>
                        </em>
                    </h1>

                </div>

                <div class="hero-side">

                    <p class="hero-description">
                        <?= htmlspecialchars(t('hero.subtitle')) ?>
                    </p>

                    <div class="hero-actions">

                        <a href="#products" class="button button-primary">
                            <?= htmlspecialchars(t('hero.cta_products')) ?>
                            <span>↘</span>
                        </a>

                        <a href="#company" class="button button-text">
                            <?= htmlspecialchars(t('hero.cta_company')) ?>
                            <span>→</span>
                        </a>

                    </div>

                </div>

            </div>

            <div class="hero-bottom">

                <div class="hero-index">
                    <span>01</span>
                    <span>GASTRONOMIA TECH</span>
                </div>

                <a href="#intro" class="hero-scroll">
                    <?= htmlspecialchars(t('hero.scroll')) ?>
                    <span class="scroll-line"></span>
                </a>

            </div>

        </div>

    </section>

<section id="intro" class="intro-section">

    <div class="container intro-grid">

        <div class="intro-meta">
            <span>02</span>
            <span><?= htmlspecialchars(t('intro.eyebrow')) ?></span>
        </div>

        <div class="intro-content">

            <h2>
                <?= htmlspecialchars(t('intro.title_before')) ?>
                <em><?= htmlspecialchars(t('intro.title_emphasis')) ?></em>
            </h2>

            <p>
                <?= htmlspecialchars(t('intro.text')) ?>
            </p>

        </div>

    </div>

</section>

<section id="products" class="products-section">

    <div class="container">

        <div class="products-heading">

            <div class="products-meta">
                <span>03</span>
                <span><?= htmlspecialchars(t('products.eyebrow')) ?></span>
            </div>

            <div class="products-heading-content">

                <h2>
                    <?= htmlspecialchars(t('products.title_before')) ?>

                    <em>
                        <?= htmlspecialchars(t('products.title_emphasis')) ?>
                    </em>
                </h2>

                <p>
                    <?= htmlspecialchars(t('products.intro')) ?>
                </p>

            </div>

        </div>


        <div class="products-list">


            <!-- =====================================================
                 GASTRONOMIA
                 ===================================================== -->

            <article class="product product-gastronomia">

                <div class="product-info">

                    <div class="product-topline">

                        <span>
                            <?= htmlspecialchars(t('products.gastronomia.number')) ?>
                        </span>

                        <span>
                            <?= htmlspecialchars(t('products.gastronomia.type')) ?>
                        </span>

                    </div>

                    <img
                        class="product-logo gastronomia-logo"
                        src="assets/img/products/gastronomia-logo.png"
                        alt="GastronomIA"
                    >

                    <p class="product-description">
                        <?= htmlspecialchars(t('products.gastronomia.description')) ?>
                    </p>

                    <a
                        href="https://gastronomia.ai"
                        class="product-link"
                        target="_blank"
                        rel="noopener"
                    >
                        <?= htmlspecialchars(t('products.gastronomia.cta')) ?>
                        <span>↗</span>
                    </a>

                </div>


                <div class="product-visual gastronomia-visual">

                    <div class="gastronomia-circle"></div>

                    <div class="phone phone-main">
                        <img
                            src="assets/img/products/gastronomia-app-home.jpg"
                            alt="GastronomIA mobile application"
                        >
                    </div>

                    <div class="phone phone-secondary">
                        <img
                            src="assets/img/products/gastronomia-app-planning.jpg"
                            alt="GastronomIA planning"
                        >
                    </div>

                </div>

            </article>



            <!-- =====================================================
                 QALDO
                 ===================================================== -->

            <article class="product product-qaldo">

                <div class="product-info">

                    <div class="product-topline">

                        <span>
                            <?= htmlspecialchars(t('products.qaldo.number')) ?>
                        </span>

                        <span>
                            <?= htmlspecialchars(t('products.qaldo.type')) ?>
                        </span>

                    </div>

                    <img
                        class="product-logo qaldo-logo"
                        src="assets/img/products/qaldo-logo.png"
                        alt="QALDO"
                    >

                    <p class="product-description">
                        <?= htmlspecialchars(t('products.qaldo.description')) ?>
                    </p>

                    <a
                        href="https://qaldo.io"
                        class="product-link"
                        target="_blank"
                        rel="noopener"
                    >
                        <?= htmlspecialchars(t('products.qaldo.cta')) ?>
                        <span>↗</span>
                    </a>

                </div>


                <div class="product-visual qaldo-visual">

                    <div class="desktop-frame">

                        <img
                            src="assets/img/products/qaldo-desktop-agenda.png"
                            alt="QALDO desktop workspace"
                        >

                    </div>

                    <div class="qaldo-phone">

                        <img
                            src="assets/img/products/qaldo-mobile-agenda.jpg"
                            alt="QALDO mobile application"
                        >

                    </div>

                </div>

            </article>

        </div>


        <div class="products-future">

            <span>03</span>

            <span>
                <?= htmlspecialchars(t('products.future')) ?>
            </span>

            <span>＋</span>

        </div>

    </div>

</section>

<section id="company" class="industry-section">

    <div class="container">

        <div class="industry-top">

            <div class="industry-meta">
                <span>04</span>
                <span><?= htmlspecialchars(t('industry.eyebrow')) ?></span>
            </div>

            <div class="industry-title">

                <h2>
                    <?= htmlspecialchars(t('industry.title_before')) ?>

                    <em>
                        <?= htmlspecialchars(t('industry.title_emphasis')) ?>
                    </em>
                </h2>

            </div>

        </div>


        <div class="industry-grid">

            <div class="industry-visual">

                <div class="industry-symbol" aria-hidden="true">
                    GT
                </div>

                <div class="industry-number">
                    01 — 04
                </div>

                <div class="industry-visual-copy">
    <?= htmlspecialchars(t('industry.visual_gastronomy')) ?>
    <span>×</span>
    <?= htmlspecialchars(t('industry.visual_technology')) ?>
</div>

            </div>


            <div class="industry-copy">

                <div class="industry-copy-block">
                    <span class="industry-copy-number">01</span>

                    <p>
                        <?= htmlspecialchars(t('industry.text_1')) ?>
                    </p>
                </div>

                <div class="industry-copy-block">
                    <span class="industry-copy-number">02</span>

                    <p>
                        <?= htmlspecialchars(t('industry.text_2')) ?>
                    </p>
                </div>

            </div>

        </div>


        <div class="industry-quote">

            <div class="industry-quote-line"></div>

            <blockquote>
                <?= htmlspecialchars(t('industry.quote')) ?>
            </blockquote>

        </div>

    </div>

</section>

<section class="approach-section">

    <div class="container">

        <div class="approach-heading">

            <div class="approach-meta">
                <span>05</span>
                <span><?= htmlspecialchars(t('approach.eyebrow')) ?></span>
            </div>

            <div class="approach-heading-content">

                <h2>
                    <?= htmlspecialchars(t('approach.title_before')) ?>

                    <em>
                        <?= htmlspecialchars(t('approach.title_emphasis')) ?>
                    </em>
                </h2>

                <p>
                    <?= htmlspecialchars(t('approach.intro')) ?>
                </p>

            </div>

        </div>


        <div class="approach-list">

            <?php foreach ($translations['approach']['items'] as $item): ?>

                <article class="approach-item">

                    <div class="approach-number">
                        <?= htmlspecialchars($item['number']) ?>
                    </div>

                    <h3>
                        <?= htmlspecialchars($item['title']) ?>
                    </h3>

                    <p>
                        <?= htmlspecialchars($item['text']) ?>
                    </p>

                    <div class="approach-arrow" aria-hidden="true">
                        ↗
                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>
<section class="company-section">

    <div class="container">

        <div class="company-heading">

            <div class="company-meta">
                <span>06</span>
                <span><?= htmlspecialchars(t('company.eyebrow')) ?></span>
            </div>

            <div class="company-heading-content">

                <h2>
                    <?= htmlspecialchars(t('company.title_before')) ?>

                    <em>
                        <?= htmlspecialchars(t('company.title_emphasis')) ?>
                    </em>
                </h2>

            </div>

        </div>


        <div class="company-body">

            <div class="company-intro">
                <p>
                    <?= htmlspecialchars(t('company.intro')) ?>
                </p>
            </div>

            <div class="company-copy">

                <p>
                    <?= htmlspecialchars(t('company.body')) ?>
                </p>

                <a href="#vision" class="company-link">
                    <?= htmlspecialchars(t('company.cta')) ?>
                    <span>→</span>
                </a>

            </div>

        </div>


        <div class="company-stats">

            <?php foreach ($translations['company']['stats'] as $stat): ?>

                <div class="company-stat">

                    <div class="company-stat-value">
                        <?= htmlspecialchars($stat['value']) ?>
                    </div>

                    <div class="company-stat-label">
                        <?= htmlspecialchars($stat['label']) ?>
                    </div>

                </div>

            <?php endforeach; ?>

        </div>

        <div class="company-team">

    <div class="company-team-intro">

        <span><?= htmlspecialchars(t('company.team_label')) ?></span>

        <h3>
            <?= htmlspecialchars(t('company.team_eyebrow')) ?>
        </h3>

    </div>


    <div class="company-team-members">

        <?php foreach ($translations['company']['team'] as $member): ?>

            <article class="team-member">

                <div class="team-member-image">

                    <img
                        src="assets/img/team/<?= htmlspecialchars($member['image']) ?>"
                        alt="<?= htmlspecialchars($member['name']) ?>"
                    >

                </div>


                <div class="team-member-content">

                    <h4>
                        <?= htmlspecialchars($member['name']) ?>
                    </h4>

                    <span class="team-member-role">
                        <?= htmlspecialchars($member['role']) ?>
                    </span>

                    <div class="team-member-line"></div>

                    <p>
                        <?= htmlspecialchars($member['bio']) ?>
                    </p>

                </div>

            </article>

        <?php endforeach; ?>

    </div>

</div>

    </div>

</section>

<section class="partners-section">

    <div class="container">

        <div class="partners-heading">

            <div class="partners-meta">
                <span>07</span>
                <span><?= htmlspecialchars(t('partners.eyebrow')) ?></span>
            </div>

            <div class="partners-heading-content">

                <h2>
                    <?= htmlspecialchars(t('partners.title_before')) ?>

                    <em>
                        <?= htmlspecialchars(t('partners.title_emphasis')) ?>
                    </em>
                </h2>

                <p>
                    <?= htmlspecialchars(t('partners.intro')) ?>
                </p>

            </div>

        </div>


        <div class="partners-grid">

            <?php foreach ($translations['partners']['items'] as $partner): ?>

                <div class="partner-item">

                    <img
                        src="assets/img/partners/<?= htmlspecialchars($partner['logo']) ?>"
                        alt="<?= htmlspecialchars($partner['name']) ?>"
                    >

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>

<section class="media-section">

    <div class="container">

        <div class="media-heading">

            <div class="media-meta">
                <span>08</span>
                <span><?= htmlspecialchars(t('media.eyebrow')) ?></span>
            </div>


            <div class="media-heading-content">

                <h2>
                    <?= htmlspecialchars(t('media.title_before')) ?>

                    <em>
                        <?= htmlspecialchars(t('media.title_emphasis')) ?>
                    </em>
                </h2>

                <p>
                    <?= htmlspecialchars(t('media.intro')) ?>
                </p>

            </div>

        </div>


        <div class="media-list">

            <?php foreach ($translations['media']['items'] as $item): ?>

                <a
                    href="<?= htmlspecialchars($item['url']) ?>"
                    class="media-item"
                >

                    <div class="media-source">

    <img
        class="media-logo"
        src="assets/img/media/<?= htmlspecialchars($item['logo']) ?>"
        alt="<?= htmlspecialchars($item['media']) ?>"
    >

    <div class="media-source-text">

        <span class="media-name">
            <?= htmlspecialchars($item['media']) ?>
        </span>

        <span class="media-date">
            <?= htmlspecialchars($item['date']) ?>
        </span>

    </div>

</div>


                    <h3>
                        <?= htmlspecialchars($item['title']) ?>
                    </h3>


                    <div class="media-arrow">
                        ↗
                    </div>

                </a>

            <?php endforeach; ?>

        </div>


        <div class="media-footer">

            <a href="#" class="media-all-link">

                <?= htmlspecialchars(t('media.all')) ?>

                <span>→</span>

            </a>

        </div>

    </div>

</section>

<section id="vision" class="vision-section">

    <div class="container vision-container">

        <div class="vision-meta">
            <span>09</span>
            <span><?= htmlspecialchars(t('vision.eyebrow')) ?></span>
        </div>

        <div class="vision-content">

            <h2>
                <?= htmlspecialchars(t('vision.title_before')) ?>

                <em>
                    <?= htmlspecialchars(t('vision.title_emphasis')) ?>
                </em>
            </h2>

            <div class="vision-bottom">

                <p>
                    <?= htmlspecialchars(t('vision.text')) ?>
                </p>

                <a href="#contact" class="vision-link">
                    <?= htmlspecialchars(t('vision.cta')) ?>
                    <span>↗</span>
                </a>

            </div>

        </div>

        <div class="vision-watermark" aria-hidden="true">
            GT
        </div>

    </div>

</section>
<section id="contact" class="final-cta-section">

    <div class="container final-cta-container">

        <div class="final-cta-meta">
            <span>10</span>
            <span><?= htmlspecialchars(t('cta.eyebrow')) ?></span>
        </div>

        <div class="final-cta-content">

            <h2>
                <?= htmlspecialchars(t('cta.title_before')) ?>

                <em>
                    <?= htmlspecialchars(t('cta.title_emphasis')) ?>
                </em>
            </h2>

            <div class="final-cta-bottom">

                <p>
                    <?= htmlspecialchars(t('cta.text')) ?>
                </p>

                <div class="final-cta-actions">

                    <a href="#products" class="button button-primary">
                        <?= htmlspecialchars(t('cta.primary')) ?>
                        <span>↗</span>
                    </a>

                    <a href="mailto:hello@gastronomia.tech" class="button button-text">
                        <?= htmlspecialchars(t('cta.secondary')) ?>
                        <span>→</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

</main>

<?php require __DIR__ . '/../app/includes/footer.php'; ?>