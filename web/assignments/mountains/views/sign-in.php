<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assignments/mountains/css/style.css">
    <title>Document</title>
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
    <main>
    Sign-in
    <?php 
            if(isset($message)){
                echo $message;
            }
        ?>
    <form action="/assignments/mountains/" method="post">
    <input type="text" name="username" id="username" placeholder="Enter email"><br>
    <input type="password" name="password" id="password" placeholder="Enter password"><br>
    <input type="hidden" name="action" value="sign-in-process">
    <input type="submit" value="Sign in"><br>
    </form>
    <a href="/assignments/mountains/index.php?action=sign-up">Sign-up</a>
    </main>
    <footer>
        <p>Last Ppdated 5/22/2019</p>
    </footer>
    <div id="wrapper">
</body>
</html>