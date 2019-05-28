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
    <main id="range">
        sign-up
        <form action="/assignments/mountains/?action=sign-up-process" method="post">
        <input type="text" name="username" id="username" placeholder="Enter email"><br>
        <input type="text" name="password" id="password" placeholder="Enter password"><br>
        <input type="submit" value="Sign up"><br>
    </form>
    </main>
    <footer>
        <p>Last Ppdated 5/22/2019</p>
    </footer>
    </div>
</body>
</html>