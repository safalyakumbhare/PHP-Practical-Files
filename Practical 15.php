<html>
    <body>
        <?php

            $open = fopen("newfile.txt","x");
            
            echo fwrite($open,"Created and write");
            
        fclose($open);
        ?>
    </body>
</html>