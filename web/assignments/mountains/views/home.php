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
    <main id="home">
    <img src="/assignments/mountains/img/mt.-sneffles.jpg" alt="Sneffles" id="homeimg">
    <p>Welcome to colorado's 14ers. We strive to give you simple facts about the 14ers
     in Colorado and point you where to go if you want to learn more or go for a hike! Enjoy
    this picture of Mt. Sneffles.</p>
    </main>
    <footer>
        <p>Last Ppdated 5/22/2019</p>
    </footer>
    <div id="wrapper">
</body>
</html>