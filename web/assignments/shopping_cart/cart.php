<?php 
session_start();

    if(isset($_GET['index'])){
        unset($_SESSION['cart'][$_GET['index']]);
        sort($_SESSION['cart']);
    }
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
    <h2>Shopping Cart</h2>
    <form action="checkout.php">
    <?php  
    $table = "<table><tr><th>Item Name</th><th>Qty.</th><th>Price</th><th></th></tr>";
    $items = $_SESSION['cart'];
    $total = 0;
    $i = 0;
    foreach($items as $item){
        $obj = json_decode($item, true);
        $total = $total + $obj['Price'];
        $table .= '<tr><td>'. $obj['name'] .'</td><td>'. $obj['quantity'] .'</td><td>$'. $obj['Price'] .'</td><td><input type="button" value="Remove" id="'.$i.'" onclick="removeItem('.$i.')"></td></tr>';
        $i++;
      }
    $table .= "<tr><th>Total Price</th><td></td><td>$".number_format($total, 2, '.', '')."</td><td><input type='Submit' value='Checkout'></td></tr>";
    $table .= "</table>";

    echo $table;
    ?>
    </form>
    </main>
<script src="./scripts.js"></script>
</body>
</html>