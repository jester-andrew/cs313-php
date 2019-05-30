<h1>Colorado's 14ers</h1>
<nav>
    <?php
    if(isset($nav)){
        echo $nav;
    }

    if(!isset($_SESSION['loggedin'])){
    ?>
    <a href="/assignments/mountains/index.php?action=sign-in">Sign-in</a>
    <?php 
    }else if($_SESSION['loggedin']){
    ?>
    <p><a href="/assignments/mountains/?action=sign-out">Sign-out</a> | <a href="/assignments/mountains/?action=account">Account</a></p>
    <?php 
    }
    ?>
</nav>