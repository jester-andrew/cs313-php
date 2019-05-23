<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assignments/mountains/css/style.css">
    <title>
    <?php 
        if(isset($peak)){
            echo $peak['PeakName'] . "| Colorado's 14ers";
        }
        ?>
    </title>
</head>
<body>
<div id="wrapper">
<header>
<h1>Colorado's 14ers</h1>
        <nav>
            <?php
            if(isset($nav)){
                echo $nav;
            }
            ?>
            <a href="/assignments/mountains/index.php?action=sign-in">Sign-in</a>
        </nav>
    </header>
    <main id="peak">
    <h1>
    <?php 
        if(isset($peak)){
            echo $peak['PeakName'];
        }
        ?>
    </h1>
    <?php
        if(isset($page)){
            echo $page;
        }
    ?>
    </main>
    <footer>
        <p>Last Ppdated 5/23/2019</p>
    </footer>
    <div id="wrapper">
</body>
</html>