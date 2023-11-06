<?php

    session_start();

    $_SESSION['name'] = "Dhanajay";
    $_SESSION['food'] = "Samosa";

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