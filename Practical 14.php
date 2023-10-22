<?php

    session_start();

    $_SESSION['username'] = "Rohit";
    $_SESSION['food'] = "Pav Bhaji";

    echo "Session Created";
    echo "<br>";
?>

<html>
    <body>
        <?php
            echo "The ".$_SESSION['username']."'s Favourite food is ".$_SESSION['food'];
        ?>
    </body>
</html>