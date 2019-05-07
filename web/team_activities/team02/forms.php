<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="process.php" method="get">

    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <br>
    Computer Science<input type="radio" name="major" value="Computer Science"><br>
    WDD<input type="radio" name="major" value="WDD"><br>
    CIT<input type="radio" name="major" value="CIT"><br>
    Software Engineering<input type="radio" name="major" value="Software Engineering"><br>

    <label for="comments">Comment</label>
    <textarea name="comments" id="comments" cols="30" rows="10"></textarea><br>


    <input type="submit" value="Submit">
</form>
    
</body>
</html>