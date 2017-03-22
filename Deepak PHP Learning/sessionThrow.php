
<?php
    setcookie("username","joe",time()+60);
    session_start();
   
    $_SESSION['authuser'] = 1;
?>
<html>
    <head>
        <TITLE>Find my Favorite Movie!</TITLE>
    </head>
    <body>
        <?php
            $myfavmovie = urlencode("Life of Brian");
            echo "<a href='sessionAccepter.php?favmovie=$myfavmovie'>";
            echo "Click here to see information about my favorite movie!";
            echo "</a>";
        ?>
    </body>
</html>