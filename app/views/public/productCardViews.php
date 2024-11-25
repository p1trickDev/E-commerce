<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card</title>
    <link rel="stylesheet" href="/YARNCRAFT/assets/styles/productCardStyles.css">
</head>

<body>
    <div class="card">
        <div class="image-container">
            <svg viewBox="0 0 1921 1081" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="svg">
                <!-- SVG content -->
            </svg>
            <div class="price">$49.9</div>
        </div>
        <label class="favorite">
            <input checked="" type="checkbox">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000">
                <path d="M12 20a1 1 0 0 1-.437-.1C11.214 19.73 3 15.671 3 9a5 5 0 0 1 8.535-3.536l.465.465.465-.465A5 5 0 0 1 21 9c0 6.646-8.212 10.728-8.562 10.9A1 1 0 0 1 12 20z"></path>
            </svg>
        </label>
        <div class="content">
            <div class="brand">ADIDAS</div>
            <div class="product-name">Classic oversized hoodie</div>
            <div class="color-size-container">
                <div class="colors">
                    Color
                    <ul class="colors-container">
                        <li class="color"><a href="#"></a> <span class="color-name">Collegiate Gold</span></li>
                        <li class="color active"><a href="#"></a><span class="color-name">Team Navy</span></li>
                        <li class="color"><a href="#"></a><span class="color-name">Pulse Blue</span></li>
                        <li class="color"><a href="#"></a><span class="color-name">Pink Fusion</span></li>
                        +2
                    </ul>
                </div>
                <div class="sizes">
                    Size
                    <ul class="size-container">
                        <li class="size">
                            <label class="size-radio">
                                <input name="size" value="xs" type="radio">
                                <span class="name">XS</span>
                            </label>
                        </li>
                        <li class="size">
                            <label class="size-radio">
                                <input checked="" name="size" value="s" type="radio">
                                <span class="name">S</span>
                            </label>
                        </li>
                        <li class="size">
                            <label class="size-radio">
                                <input name="size" value="m" type="radio">
                                <span class="name">M</span>
                            </label>
                        </li>
                        <li class="size">
                            <label class="size-radio">
                                <input name="size" value="l" type="radio">
                                <span class="name">L</span>
                            </label>
                        </li>
                        <li class="size">
                            <label class="size-radio">
                                <input name="size" value="xl" type="radio">
                                <span class="name">XL</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="rating">
                <svg viewBox="0 0 99.498 16.286" xmlns="http://www.w3.org/2000/svg" class="svg four-star-svg">
                    <!-- SVG content for stars -->
                </svg>
                (29,062)
            </div>
        </div>
        <div class="button-container">
            <button class="buy-button button">Buy Now</button>
            <button class="cart-button button">
                <svg viewBox="0 0 27.97 25.074" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0,1.175A1.173,1.173,0,0,1,1.175,0H3.4A2.743,2.743,0,0,1,5.882,1.567H26.01A1.958,1.958,0,0,1,27.9,4.035l-2.008,7.459a3.532,3.532,0,0,1-3.4,2.61H8.36l.264,1.4a1.18,1.18,0,0,0,1.156.955H23.9a1.175,1.175,0,0,1,0,2.351H9.78a3.522,3.522,0,0,1-3.462-2.865L3.791,2.669A.39.39,0,0,0,3.4,2.351H1.175A1.173,1.173,0,0,1,0,1.175ZM6.269,22.724a2.351,2.351,0,1,1,2.351,2.351A2.351,2.351,0,0,1,6.269,22.724Zm16.455-2.351a2.351,2.351,0,1,1-2.351,2.351A2.351,2.351,0,0,1,22.724,20.373Z" id="cart-shopping-solid"></path>
                </svg>
            </button>
        </div>
    </div>
</body>

</html>
