<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<header>
        <nav>
            <?php
            if(isset($nav)){
                echo $nav;
            }
            ?>
        </nav>
    </header>
    <h1><?php echo $_SESSION['ranges'][$rangeID - 1]['RangeName']  ?></h1>
    <?php
    if(isset($peakList)){
        echo $peakList;
        echo '<p>'.$_SESSION['ranges'][$rangeID - 1]['History'].'</p>';
    }
    ?>
</body>
</html>