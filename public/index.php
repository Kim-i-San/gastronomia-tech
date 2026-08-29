<?php

$config = require __DIR__ . '/../app/config/app.php';

$language = $config['default_language'];

$translations = require __DIR__ . '/../app/lang/' . $language . '.php';

require_once __DIR__ . '/../app/helpers/i18n.php';
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($language) ?>">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= htmlspecialchars(t('meta.title')) ?></title>

    <meta
        name="description"
        content="<?= htmlspecialchars(t('meta.description')) ?>"
    >

    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <main>
        <h1><?= htmlspecialchars(t('hero.title')) ?></h1>

        <p>
            <?= htmlspecialchars(t('hero.subtitle')) ?>
        </p>
    </main>

    <script src="assets/js/main.js"></script>

</body>
</html>