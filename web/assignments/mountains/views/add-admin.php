<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assignments/mountains/css/style.css">
    <title>Add Admin</title>
</head>
<body>
    <div id="wrapper">
<header>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/header.php'; ?>
    </header>
    <main id="range">
    <h2>Add Admin</h2>
    <form action="/assignments/mountains/" method="POST">
    <?php 
    if(isset($selectBox)){
        echo $selectBox;
    }
    ?>
    <input type="submit" value="Add Admin">
    <input type="hidden" name="action" value="add-admin-process">
    </form>
    </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/footer.php'; ?>
    </footer>
    </div>

</body>
</html>