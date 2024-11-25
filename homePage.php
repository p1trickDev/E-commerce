<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YarnCraft - Home</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .shop-now-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .shop-now-btn:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }

        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-content p {
            margin: 0.5rem 0;
        }

        .footer-content .socials {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 1rem;
        }

        .footer-content .socials li {
            display: inline;
        }

        .footer-content .socials li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.5rem;
        }

        .footer-bottom {
            margin-top: 1rem;
        }

        .footer-bottom a {
            color: #ffd426;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav>
        <ul class="navbar">
            <li><a href="/yarnCraft/app/views/public/contactViews.php">Contact Us</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
    </nav>


    <style>
        nav {
            background-color: #333;
            padding: 1rem;
        }

        .navbar {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        .navbar li {
            margin: 0 1rem;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .navbar a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            display: block;
            margin-top: 5px;
            right: 0;
            background: white;
            transition: width 0.3s ease;
            -webkit-transition: width 0.3s ease;
        }

        .navbar a:hover::after {
            width: 100%;
            left: 0;
            background: white;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }

            .navbar li {
                margin: 0.5rem 0;
            }
        }
    </style>

    <div class="container">
        <h1>Welcome to YarnCraft</h1>
        <p>Your one-stop shop for all your yarn needs.</p>
        <a href="index.php" class="shop-now-btn">Shop Now</a>
    </div>
    <footer>
        <?php include 'app/views/public/footerViews.php'; ?>
    </footer>
</body>



</html>
