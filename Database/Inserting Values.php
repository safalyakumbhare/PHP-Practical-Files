<?php

$con = mysqli_connect("localhost", "root", "", "student");

if (!$con) {
    die("Connection Error" . mysqli_connect_error());
} else {
    echo "Connected Successfully ";
}

echo "<br>";

$sql = "INSERT INTO `BCCA` (`Stud_id`,`Stud_name`,`Stud_sem`,`Stud_CGPA`) VALUES (4,'Adnan','5th',8);";


if (mysqli_query($con, $sql)) {
    echo "Value Inserted";
} else {
    echo "Error Occurs .." . mysqli_error($conn);
}


?>