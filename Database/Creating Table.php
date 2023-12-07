<?php

    $con = mysqli_connect("localhost","root","","student");

    if(!$con){
        die("Connection Error!!!". mysqli_connect_error());
    }
    else{
        echo "Connected Successfully!!!";
    }
echo "<BR>";
    $sql = "CREATE TABLE BCCA(
        Stud_id int not null,
        Stud_name VARCHAR(20),
        Stud_sem VARCHAR(10),
        Stud_CGPA int
        );";

    if(mysqli_query($con,$sql)){
        echo "Table Created";
    }
    else{
        echo "Error";    
    }

    

?>
