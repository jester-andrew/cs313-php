<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assignments/mountains/css/style.css">
    <title>
    <?php 
        if(isset($peak)){
            echo $peak['PeakName'] . " | Colorado's 14ers";
        }
        ?>
    </title>
</head>
<body>
<div id="wrapper">
<header>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/header.php'; ?>
    </header>
    <main id="peak">
    <h1>
    <?php 
        if(isset($peak)){
            echo $peak['PeakName'];
        }
        ?>
    </h1>
    <?php
        if(isset($page)){
            echo $page;
        }
    ?>
    
    <?php 
         if(isset($commentDsiplay) && $commentDsiplay != "<div></div>"){
            echo "<h2>Comments</h2>";
            echo $commentDsiplay;
        }

        if($_SESSION['loggedin'] == true){
    ?>
            <?php 
                if(isset($message)){
                    echo $message;
                }
            ?>
            <h2>Add a Comment</h2>
            <form action="/assignments/mountains/" method="post">
                <textarea name="comment" id="comment-text" cols="30" rows="10"></textarea><br>
                <input type="submit" value="Add Comment">
                <input type="hidden" name="peak-id" value="<?php echo $peak['ID'] ?>">
                <input type="hidden" name="user-id" value="<?php echo $_SESSION['user']['ID'] ?>">
                <input type="hidden" name="action" value="add-comment">
            </form>
    <?php 
        }
    ?>
    </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/footer.php'; ?>
    </footer>
    <div id="wrapper">
</body>
</html>