<html>
    <head>
        <title>
            Practical 11
        </title>
    </head> 
    <body>
        
        <?php

        $num = array(50,40,10,20,30);
        sort($num);
        
        for($i=0;$i<=4;$i++)
        {
            echo $num[$i];
            echo "<br>";
        }
        
        ?>
    </body>
</html>