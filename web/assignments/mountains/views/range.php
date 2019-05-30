<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assignments/mountains/css/style.css">
    <title>
    <?php 
        if($_SESSION['ranges']){
            echo $_SESSION['ranges'][$rangeID - 1]['RangeName'] . "| Colorado's 14ers";
        }
        ?>
    </title>
</head>
<body>
<div id="wrapper">
<header>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/header.php'; ?>
    </header>
    <main id="range">
    <h1><?php echo $_SESSION['ranges'][$rangeID - 1]['RangeName']  ?></h1>
    <?php
    if(isset($peakList)){
        
        echo '<p id="history">'.$_SESSION['ranges'][$rangeID - 1]['History'].'(Info from WikiPedia)</p>';
        echo $peakList;
    }
    ?>
    </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/footer.php'; ?>
    </footer>
    </div>
</body>
</html>