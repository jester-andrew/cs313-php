
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assignments/mountains/css/style.css">
    <title>Welcome Page</title>
</head>
<body>
    <div id="wrapper">
<header>
<h2>Welcome <?php echo $_SESSION['user']['UserName'] ?></h2>
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
        <p>Last Ppdated 5/28/2019</p>
    </footer>
    </div>

</body>
</html>