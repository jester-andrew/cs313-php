<?php
if($_SESSION['loggedin'] != true){
    header('Location: /assignments/mountains/');
}
?>
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
    <h2>Welcome <?php echo $_SESSION['user']['UserName'] ?></h2>
        <?php 
            if(isset($message)){
                echo $message;
            }
        ?>
    </form>
    </main>
    <footer>
        <p>Last Ppdated 5/28/2019</p>
    </footer>
    </div>

</body>
</html>