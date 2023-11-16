<?php

$conn = mysqli_connect("localhost","root","","employee");

if($conn){
    echo "Connected to Database Successfully";
}
else{
    echo "Error To Connect";
}
echo "<br>";
$sql = "INSERT INTO `emp01` (`id`,`Name`,`Post`,`salary`) VALUES (3,'Kartik','Python Developer',600000) ";

if(mysqli_query($conn,$sql)){
    echo "Inserted Successfully";
}else{
    echo "Can't Insert Error Occurs ";
}
 
?>