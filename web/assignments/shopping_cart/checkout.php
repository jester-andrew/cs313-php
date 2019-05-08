<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Shopping cart</title>
</head>
<body>
<header>
<h1>Light Bulb City</h1>
<nav>
    <ul>
    <li><a href="./browse.php">Browse |</a></li>
    <li><a href="./cart.php">Shopping Cart</a></li>
</ul>
</nav>
</header>
<main>
    <h2>checkout</h2>
<form action="confirmation.php" method="post">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="address" placeholder="Address"><br>
    <input type="text" name="apt" placeholder="Apt #"><br>
    <input type="text" name="city" placeholder="City"><br>
    <input type="text" name="state" placeholder="State"><br>
    <input type="text" name="zip" placeholder="Zip Code"><br>
    <input type="submit" value="Finish Purchase">
</form>
</main>  
<script src="./scripts.js"></script>
</body>
</html>