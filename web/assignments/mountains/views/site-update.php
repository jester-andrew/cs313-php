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
    <title>Welcome Page</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['user']['UserName'] ?></h1>

    
</body>
</html>