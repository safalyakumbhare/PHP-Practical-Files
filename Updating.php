<?php

$conn = mysqli_connect("localhost","root","","student");

if($conn){
    echo "Connected";
}
else{
    echo "Connection Error";
}
echo "<br>";
$sql = "UPDATE `bcca` SET `Stud_name` = 'Jhingur' WHERE `Stud_id` = 1 ";

if(mysqli_query($conn,$sql)){
    echo "Value Updated";
}
else{
    echo "Error";
}

?>
