<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? null ?> | My website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favi.ico">
</head>
<body>

<div class="row">
    <header class="siteheader">
    <?php if ($headersite ?? null) : ?>
            <?= $headersite ?? null ?>
    <?php else : ?>
            <h1>About me</h1>
    <?php endif; ?>
    </header>
</div>

<div class="navbar">
    <?php require __DIR__ . "/../navbar.php" ?>
</div>

<div class="row row-main">
    <main class="main">
        <?php if ($main ?? null) : ?>
            <?= $main ?? null ?>
        <?php else : ?>
            <h1>Page</h1>
            <p>This is default text for the page.</p>
        <?php endif; ?>
    </main>
    <aside class="aside">
        <?php if ($aside ?? null) : ?>
            <?= $aside ?? null ?>
        <?php else : ?>
            <div class=toof><img style="width: 400px;" src="img/ahmd.jpeg" alt="En bild"> </div>

        <?php endif; ?>
    </aside>
</div>

<div class="row">
    <footer class="sitefooter">
    <?php if ($footer1 ?? null) : ?>
        <?= $footer1 ?? null ?>
    <?php else : ?>
            <p>Site footer</p>
    <?php endif; ?>
        
    </footer>
</div>

<?php if ($measure ?? null) : ?>
<div class="row">
    <?php require __DIR__ . "/../measure.php" ?>
</div>
<?php endif; ?>

<script src="js/main.js"></script>
</body>
</html>
