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
    //var_dump($_SESSION['cart']); 
    $table = "<table><tr><th>Item Name</th><th>Qty.</th><th>Price</th></tr>";
    $items = $_SESSION['cart'];

    foreach($items as $item){
        $obj = json_decode($item, true);
    
        var_dump($obj);
        $table .= '<tr><td>'. print $obj->name .'</td><td>'. print $obj->quantity .'</td><td>'. print $obj->Price .'</td></tr>';
      }

    $table .= "</table>";

    echo $table;
    ?>
    

</body>
</html>