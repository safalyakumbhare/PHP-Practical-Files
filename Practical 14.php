<?php

    session_start();

    $_SESSION['username'] = "Rohit";
    $_SESSION['food'] = "Pav Bhaji";

    echo "Session Created";
?>

<html>
    <body>
        <?php
            echo "The ".$_SESSION['username'].""
        ?>
    </body>
</html>