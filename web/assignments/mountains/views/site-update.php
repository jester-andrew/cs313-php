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
<?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/header.php'; ?>
    </header>
    <main id="range">
    <h2>Welcome <?php echo $_SESSION['user']['UserName'] ?></h2>
        <?php 
            if($_SESSION['user']['UserLevel'] < 2){
                echo "Sorry you don't have permissions for this page yet.";
            }

            if($_SESSION['user']['UserLevel'] > 1){
        ?>
            <p><a href="/assignments/mountains/?action=add-content">Add a Mountain Peak</a></p>
            <p><a href="/assignments/mountains/?action=add-admin">Add Admin</a></p>

            <h3>Edit Peak Information</h3>
            <?php 
                if(isset($peakLinks)){
                    echo $peakLinks;
                }
            ?>

        <?php
            }
        ?> 

    </form>
    </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/footer.php'; ?>
    </footer>
    </div>

</body>
</html>