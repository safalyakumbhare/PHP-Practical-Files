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
echo "<br>";
while($prnt = mysqli_fetch_assoc($num)){
    echo "ID ",$prnt['id']," Name ",$prnt['Name']," On Post of ",$prnt['Post']," With Salary of ",$prnt['salary'];
    echo "<br>";
}
?>