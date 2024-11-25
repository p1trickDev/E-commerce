<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YarnCraft Emporium</title>

    <link rel="stylesheet" href="/YARNCRAFT/assets/styles/navBarStyles.css">
    <!-- <link rel="stylesheet" href="/YARNCRAFT/assets/styles/productCardStyles.css"> -->
</head>

<body>
    <nav>
        <?php include 'app/views/public/navBarViews.php'; ?>
    </nav>

    <section class="product-grid">
        <?php include 'app/views/public/productCardViews.php'; ?>
        <?php include 'app/views/public/productCardViews.php'; ?>
        <?php include 'app/views/public/productCardViews.php'; ?>
        <?php include 'app/views/public/productCardViews.php'; ?>
    </section>

    <script src="/E-commerce/assets/scripts/navBar.js"></script>
</body>

<footer>
    <!-- <?php include 'app/views/public/footerViews.php'; ?> -->
</footer>

<?php include '/YARNCRAFT/core/routes.php'; ?>

</html>
