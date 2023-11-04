<html>

<body>
    <?php

    $open = fopen("newfile.txt", "w");
    echo "File Created And Values Written :";
    echo fwrite($open, "Created a File named newfile and written this statement");

    fclose($open);
    ?>
</body>

</html>