<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <h1>Range Page</h1>
    <?php
    if(isset($peakList)){
        echo $peakList;
        var_dump($_SESSION['ranges'][$id - 1]);
    }
    ?>
</body>
</html>