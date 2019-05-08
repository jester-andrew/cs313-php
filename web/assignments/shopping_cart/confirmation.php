<?php 
session_start();
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$apt = filter_input(INPUT_POST, 'apt', FILTER_SANITIZE_STRING);
$city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
$state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
$zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING);
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
<main>
    <h2>Your purchase was successful!</h2>
    <h3>Ship TO:</h3>
    
    <?php
        echo "<p>";
        echo $name . "<br>";
        echo $address . " ". $apt. "<br>";
        echo $city . ", ".$state."<br>";
        echo $zip;
        echo "</p>";
    ?>

    <h3>Items Purchased</h3>
    <?php  
    $table = "<table><tr><th>Item Name</th><th>Qty.</th><th>Price</th></tr>";
    $items = $_SESSION['cart'];
    $total = 0;
    $i = 0;
    foreach($items as $item){
        $obj = json_decode($item, true);
        $total = $total + $obj['Price'];
        $table .= '<tr><td>'. $obj['name'] .'</td><td>'. $obj['quantity'] .'</td><td>$'. $obj['Price'] .'</td></tr>';
        $i++;
      }
    $table .= "<tr><th>Total Price</th><td></td><td>$".number_format($total, 2, '.', '')."</td></tr>";
    $table .= "</table>";

    echo $table;
    ?>

   </main> 
<script src="./scripts.js"></script>
</body>
</html>
<?php 
unset($_SESSION['cart']);