<html>
    <body>
        <?php
            $file = fopen("newfile.txt","r");
            echo fread($file,filesize("newfile.txt"));
        ?>
    </body>
</html>