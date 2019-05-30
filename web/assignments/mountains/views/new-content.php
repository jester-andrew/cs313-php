<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assignments/mountains/css/style.css">
    <title>Add Peak</title>
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
        Add Peak
        <?php 
            if(isset($message)){
                echo $message;
            }
        ?>
        <form action="/assignments/mountains/" method="post">
        <?php
        if(isset($selectRange)){
            echo $selectRange;
        }
        ?>
        <br>
        <input type="text" name="peak-name" id="peak" placeholder="Peak Name"><br>
        <input type="text" name="elevation" id="elevation" placeholder="Elevation ex: 14000"><br>
        <input type="text" name="class" id="class" placeholder="class: 1-5"><br>
        <input type="text" name="link" id="link" placeholder="14ers.com link"><br>
        <input type="text" name="img-path" id="path" value="/assignments/mountains/img/IMAGE-NAME-HERE.jpg"><br>
        <textarea name="info" id="info" cols="30" rows="10">Mountain peak info here</textarea><br>

        <input type="submit" value="Add Peak">
        <input type="hidden" name="action" value="add-peak">
    </form>
    </main>
    <footer>
        <p>Last Ppdated 5/28/2019</p>
    </footer>
    </div>
</body>
</html>