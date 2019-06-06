<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assignments/mountains/css/style.css">
    <title>Sign-in | Colorado's 14ers</title>
</head>
<body>
<div id="wrapper">
    <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/header.php'; ?>
    </header>
    <main>
    <h2>Sign-in</h2>
    <?php 
            if(isset($message)){
                echo $message;
            }
        ?>
    <form action="/assignments/mountains/" method="post" id="peak-add">
    <input required type="text" name="username" id="username" placeholder="Enter email"><br>
    <input required type="password" name="password" id="password" placeholder="Enter password"><br>
    <input  type="hidden" name="action" value="sign-in-process">
    <input type="submit" value="Sign in"><br>
    <a href="/assignments/mountains/index.php?action=sign-up" class="center">Sign-up</a>
    
    </form>
    
    </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/footer.php'; ?>
    </footer>
    <div id="wrapper">
</body>
</html>