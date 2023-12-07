<?php

$con = mysqli_connect("localhost", "root", "", "student");

if (!$con) {
    echo "Connection Failed!";
} else {
    echo "Connected";
}
echo "<hr>";
$sql = "SELECT * from `BCCA`";

//Checking if the Query is Correct or Not
if (mysqli_query($con, $sql)) {
    echo "Table Selected";
} else {
    echo "Error: " . mysqli_error($con);
}
$num = mysqli_query($con, $sql);
echo "<hr>";
// Checking the number of rows
echo "There are ", mysqli_num_rows($num), " Number of Row in Table BCCA <br>";

// Access the data from rows
while ($rows = mysqli_fetch_assoc($num)) {
    echo "Id No." . $rows['Stud_id'] . " Name " . $rows['Stud_name'] . " Semester " . $rows['Stud_sem'] . " CGPA :" . $rows['Stud_CGPA'];
    echo "<hr>";
}



?>