<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assignments/mountains/css/style.css">
    <title>Edit <?php if(isset($peak['PeakName'])){echo $peak['PeakName'];}?></title>
</head>
<body>
<div id="wrapper">
<header>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/header.php'; ?>
    </header>
    <main id="range">
        <h2>Edit <?php if(isset($peak['PeakName'])){echo $peak['PeakName'];}?></h2>
        <?php 
            if(isset($message)){
                echo $message;
            }
        ?>
        <form action="/assignments/mountains/" method="post" id="peak-add">
        <label for="rages">Range:</label>
        <?php 
            if(isset($select)){
                echo $select; 
            }
        ?>
        <br>
        <label for="peak">Peak Name:</label>
        <input  required type="text" name="peak-name" id="peak" placeholder="Peak Name" value="<?php if(isset($peak['PeakName'])){echo $peak['PeakName'];}?>"><br>
        <label for="peak">Elevation:</label>
        <input required type="text" name="elevation" id="elevation" placeholder="Elevation ex: 14000" value="<?php if(isset($peak['Elevation'])){echo $peak['Elevation'];}?>"><br>
        <label for="peak">Class:</label>
        <input  required type="text" name="class" id="class" placeholder="class: 1-5" value="<?php if(isset($peak['Dificulty'])){echo $peak['Dificulty'];}?>"><br>
        <label for="peak">14ers.com Link:</label>
        <input required type="text" name="link" id="link" placeholder="14ers.com link" value="<?php if(isset($peak['Link'])){echo $peak['Link'];}?>" ><br>
        <label for="peak">Image Path:</label>
        <input required type="text" name="img-path" id="path" value="<?php if(isset($peak['imgpath'])){echo $peak['imgpath'];}?>"><br>
        <label for="peak">Info:</label>
        <textarea required name="info" id="info" cols="50" rows="10"><?php if(isset($peak['Info'])){echo $peak['Info'];}?></textarea><br>

        <input type="submit" value="Edit Peak">
        <input type="hidden" name="action" value="edit-peak-process">
        <input type="hidden" name="peakId" value="<?php if(isset($peak['ID'])){echo $peak['ID'];}?>">
        
    </form>
    </main>
    <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/mountains/content/footer.php'; ?>
    </footer>
    </div>
</body>
</html>