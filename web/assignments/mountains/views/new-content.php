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
<?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/header.php'; ?>
    </header>
    <main id="range">
        <h2>Add Peak</h2>
        <?php 
            if(isset($message)){
                echo $message;
            }
        ?>
        <form action="/assignments/mountains/" method="post" id="peak-add">
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
        <textarea name="info" id="info" cols="50" rows="10">Mountain peak info here</textarea><br>

        <input type="submit" value="Add Peak">
        <input type="hidden" name="action" value="add-peak">
    </form>
    </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/footer.php'; ?>
    </footer>
    </div>
</body>
</html>