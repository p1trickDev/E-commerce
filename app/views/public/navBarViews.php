<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="icon" href="/E-commerce/assets/images/LOGO.jpg" type="image/jpg">
    <link rel="stylesheet" href="/E-commerce/assets/css/navBarStyles.css">
</head>

<body>

    <section class="header">
        <div class="logo">
            <img src="/E-commerce/assets/images/LOGO.jpg" alt="YarnCraft Emporium Logo">
            <span>YarnCraft Emporium</span>
        </div>
    </section>

    <header class="header">

        <nav class="nav-right">
            <div class="menu-icon" id="menu-icon">
                &#9776;
            </div>
            <ul id="menu-items">
                <?php
                $menuItems = [
                    'home.php' => 'Home',
                    'products.php' => 'Products',
                    'contact.php' => 'Contact',
                    'services.php' => 'Limited Sales',
                    'about.php' => 'About'
                ];

                foreach ($menuItems as $link => $label) {
                    echo "<li><a href=\"$link\">$label</a></li>";
                }
                ?>
                <?php
                // Assuming you have a function to get the cart count
                function getCartCount()
                {
                    // This is a placeholder. Replace with actual logic to get cart count.
                    return 0;
                }

                $cartCount = getCartCount();
                ?>
                <li><a href="#" id="cart-icon">Cart (<?php echo $cartCount; ?>)</a></li>
            </ul>
        </nav>
    </header>

</body>

</html>
