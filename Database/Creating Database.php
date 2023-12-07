<?php

    $conn = mysqli_connect("localhost","root","");

    if(!$conn){
        die("<b>Connection Failed: </b>" .mysqli_connect_error());
    }
    else{
        echo "Connected Successfully!";
    }

    $sql = "CREATE DATABASE Employee";

    if(mysqli_query($conn,$sql)){
        echo "<br/>Database Created Successfully!";
    }
    else
    {
        echo "Error";
    }
?>