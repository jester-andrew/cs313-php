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
        sign-up
        <?php 
            if(isset($message)){
                echo $message;
            }
        ?>
        <form action="/assignments/mountains/" method="post">
        <input type="text" name="username" id="username" placeholder="Enter email"><br>
        <input type="password" name="password" id="password" placeholder="Enter password"><br>
        <input type="submit" value="Sign up"><br>
        <input type="hidden" name="action" value="sign-up-process">
    </form>
    </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/footer.php'; ?>
    </footer>
    </div>
</body>
</html>