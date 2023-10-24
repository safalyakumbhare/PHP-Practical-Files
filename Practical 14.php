<?php

    session_start();

    $_SESSION['name'] = "Safalya";
    $_SESSION['food'] = "Burger";

    echo "Session Created";
    echo "<hr>";
?>

<html>
    <body>
        <?php
            echo $_SESSION['name']."'s Favourite food is ".$_SESSION['food'];
        ?>
    </body>
</html>