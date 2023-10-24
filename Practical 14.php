<?php

    session_start();

    $_SESSION['username'] = "Safalya";
    $_SESSION['food'] = "Burger";

    echo "Session Created";
    echo "<hr>";
?>

<html>
    <body>
        <?php
            echo "The ".$_SESSION['username']."'s Favourite food is ".$_SESSION['food'];
        ?>
    </body>
</html>