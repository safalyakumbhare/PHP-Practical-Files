<html>
<head>
    <title>Practical 8</title>
</head>
<body>
<?php  
$series=10;
$num1=0;
$num2=1;
$sum = 0;
for($i=0;$i<=$series;$i++)
{
    echo $num1;
    $num1 = $num1 + $num2;
    $num2 = $sum;
    $sum = $num1;
    echo "<BR>";
}
?>  
</body>
</html>
