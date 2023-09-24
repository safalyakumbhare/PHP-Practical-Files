<html>
    <head>
        <title>Practical 9 </title>
    </head>
    <body>
        <?php
        $num = array("B","A","C","E","D");
        sort($num);
        
        $length=count($num);
        for($i=0;$i<=$length;$i++)
        {
            echo $num [$i];
            echo "<BR>";
        }
       ?>
    </body>
</html>