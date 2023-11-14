<?php

$conn = mysqli_connect("localhost","root","","employee");

if($conn){
    echo "Connected to Database Successfully";
}
else{
    echo "Error To Connect";
}

$sql = "INSERT INTO `emp01` (`id`,`Name`,`Post`,`salary`) VALUES (1,'Safalya','Front-End Developer',400000) ";

if(mysqli_query($conn,$sql)){
    echo "Inserted Successfully";
}else{
    echo "Can't Insert Error Occurs ";
}
 
?>