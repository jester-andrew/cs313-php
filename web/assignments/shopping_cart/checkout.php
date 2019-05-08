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
    <li><a href="./browse.php">Browse</a></li>
    <li><a href="./cart.php">Shopping Cart</a></li>
</ul>
</nav>
</header>
    <h2>checkout</h2>
<form action="confirmation.php">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="address" placeholder="Address">
    <input type="text" name="apt" placeholder="Apt #">
    <input type="text" name="city" placeholder="City">
    <input type="text" name="state" placeholder="State">
    <input type="text" name="zip" placeholder="Zip Code">
    <input type="submit" value="Finish Purchase">
</form>
    
<script src="./scripts.js"></script>
</body>
</html>