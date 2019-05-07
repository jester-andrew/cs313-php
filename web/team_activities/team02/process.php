<?php
$name = $_GET['name'];
$email = $_GET['email'];
$major = $_GET['major'];
$commnt = $_GET['comments'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>
    <h1>Welcome <?php echo $name; ?></h1>
    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
    <p>Major: <?php echo $major; ?></p>
    <p>Comments: <?php echo $commnt; ?></p>
    
</body>
</html>

