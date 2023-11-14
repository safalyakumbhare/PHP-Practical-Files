<?php

$conn = mysqli_connect("localhost","root","","employee");

if($conn){
    echo "Connected to Database Successfully";
}
else{
    echo "Error To Connect";
}
echo "<br>";

$sql = "SELECT * FROM `emp01`";
$num = mysqli_query($conn,$sql);

echo "There are ",mysqli_num_rows($num)," Number of Rows in the Table ";
?>