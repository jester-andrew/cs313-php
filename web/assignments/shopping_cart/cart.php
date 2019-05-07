<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping cart</title>
</head>
<body>
    <?php  
    $table = "<table><tr><th>Item Name</th><th>Qty.</th><th>Price</th></tr>";
    $items = $_SESSION['cart'];
    $total = 0;
    foreach($items as $item){
        $obj = json_decode($item, true);
        $total = $total + $obj['Price'];
        $table .= '<tr><td>'. $obj['name'] .'</td><td>'. $obj['quantity'] .'</td><td>'. $obj['Price'] .'</td></tr>';
      }
    $table .= "<tr><th>Total Price</th><td>".$total."</td></tr>";
    $table .= "</table>";

    echo $table;
    ?>
    

</body>
</html>