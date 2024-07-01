@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hozei PCs</title>
    <link href="css/main.css" rel="stylesheet" >
</head>
<body>
    <header>
        <img src="./images/logo-removebg-preview.png" alt="Hozei PCs Online" class="logo">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#product">Products</a></li>
                <li><a href="{{('cart')}}">Cart <span id="cart-count">0</span></a></li>
                <li><a href="#">Account</a></li>
            </ul>
        </nav>
    </header>
    <section class="heading">
        <h1>Our Products</h1>
    </section>
    <main>
        <section class="product-list">
            <div class="product" id="product-1">
                <h2>Gaming Laptop</h2>
                <p>High-performance gaming laptop</p>
                <p>$1200.00</p>
                <button onclick="addToCart()">Add to Cart</button>
            </div>
            <div class="product" id="product-2">
                <h2>Office Desktop</h2>
                <p>Reliable desktop for office work</p>
                <p>$800.00</p>
                <button onclick="addToCart()">Add to Cart</button>
            </div>
            <div class="product" id="product-3">
                <h2>Wireless Mouse</h2>
                <p>Ergonomic wireless mouse</p>
                <p>$25.00</p>
                <button onclick="addToCart()">Add to Cart</button>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Hozei PCs. All rights reserved.</p>
    </footer>
    <script>
        let cartCount = 0;
        function addToCart() {
            cartCount++;
            document.getElementById('cart-count').textContent = cartCount;
        }
    </script>
    <script src="./scripts.js"></script>
</body>
</html>
