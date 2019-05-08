<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles.css">
    <title>Light Bulbs</title>
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
<h2>Featured Products</h2>

<form>
    <div class="flex">
    <div>
    <h3>L.E.D Bulbs</h3>
    <img src="./img/led.png" alt="led">
    Quanity
    <input type="text" name="value" id="val1" value="1">
    <input type="button" value="Add to Cart" id="btn1" onclick="addToCart('led');" >
    <p id="ledmessage" class="success" ></p>
</div>
<div>
    <h3>Incandescent Bulbs</h3>
    <img src="./img/inc.png" alt="Incandescent" id="inc">
    Quanity
    <input type="text" name="value" id="val2" value="1">
    <input type="button" value="Add to Cart" id="btn2" onclick="addToCart('inc');">
    <p id="incmessage" class="success" ></p>
</div>
</div>
<div class="flex">
    <div>
    <h3>Fluorescent Bulbs</h3>
    <img src="./img/flo.png" alt="Fluorescent">
    Quanity
    <input type="text" name="value" id="val3" value="1">
    <input type="button" value="Add to Cart" id="btn3" onclick="addToCart('flo');">
    <p id="flomessage" class="success" ></p>
</div>
<div>
    <h3>Halogen Bulbs</h3>
    <img src="./img/hal.png" alt="Incandescent" id="hal">
    Quanity
    <input type="text" name="value" id="val4" value="1">
    <input type="button" value="Add to Cart" id="btn4" onclick="addToCart('hal');">
    <p id="halmessage" class="success" ></p>
</div>
</div>
<div class="flex">
<div>
    <h3>Neon Bulbs</h3>
    <img src="./img/neon.png" alt="neon">
    Quanity
    <input type="text" name="value" id="val5" value="1">
    <input type="button" value="Add to Cart" id="btn5" onclick="addToCart('neo');">
    <p id="neomessage" class="success" ></p>
</div>
<div>
    <h3>Black lights</h3>
    <img src="./img/black.png" alt="Black">
    Quanity
    <input type="text" name="value" id="val6" value="1">
    <input type="button" value="Add to Cart" id="btn6" onclick="addToCart('blk');">
    <p id="blkmessage" class="success" ></p>
</div>
</div>
</form>
</main>
    <script src="./scripts.js"></script>
</body>
</html>