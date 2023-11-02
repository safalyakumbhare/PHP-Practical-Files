<html>

<body>
    <?php

    $open = fopen("newfile.txt", "w");

    echo fwrite($open, "Created and write");

    fclose($open);
    ?>
</body>

</html>