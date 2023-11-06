<?php
$_COOKIE_name = "User";
$_COOKIE_value = "Dhananjay";

setcookie($_COOKIE_name, $_COOKIE_value, time() + 86400, "/");
echo "Cookie Created";
echo "<hr>";
?>
<html>

<body>
    <?php
    echo "Reading Cookie :- ";
    echo "<br>";
    echo "The Cookie Name is " . $_COOKIE_name;
    echo "<br>";
    echo "The Cookie Value is " . $_COOKIE_value;

    ?>
</body>

</html>