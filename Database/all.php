<?php
// $conn = mysqli_connect("localhost", "root", "");

// if (!$conn) {
//     die("<b>Connection Failed: </b>" . mysqli_connect_error());
// } else {
//     echo "Connected to Database Successfully!";
// }
// echo "<hr>";
// //1. Created Database
// $sql_create_database = "CREATE DATABASE student";

// if (mysqli_query($conn, $sql_create_database)) {
//     echo "<br/>Database student Created Successfully!";
// } else {
//     echo "Error";
// }
// echo "<hr>";

// //selecting database 
$db = mysqli_connect("localhost","root","","student"); 
// //2. Created Table
// $sql_create_table = "CREATE TABLE BCCA(
//         Stud_id int not null,
//         Stud_name VARCHAR(20),
//         Stud_sem VARCHAR(10),
//         Stud_CGPA int
//         );";

// if (mysqli_query($db, $sql_create_table)) {
//     echo "Table Created";
// } else {
//     echo "Error";
// }
// echo "<hr>";
// //3. Insertion 
// $sql_insert = "INSERT INTO `BCCA` (`Stud_id`,`Stud_name`,`Stud_sem`,`Stud_CGPA`) VALUES (1,'Abhay','5th',9);";


// if (mysqli_query($db, $sql_insert)) {
//     echo "Value Inserted";
// } else {
//     echo "Error Occurs .." . mysqli_error($db);
// }
// echo "<hr>";
//4. Modification (Update)
// $sql_update = "UPDATE `bcca` SET `Stud_name` = 'Jhingur' WHERE `Stud_id` = 1 ";

// if (mysqli_query($db, $sql_update)) {
//     echo "Value Updated / Modified";
// } else {
//     echo "Error";
// }
// echo "<hr>";
//5. Delete 
$sql_delete = "DELETE FROM `bcca` WHERE `Stud_name` = 'Jhingur'";

if (mysqli_query($db, $sql_delete)) {
    echo "Deleted Sucessfully";
} else {
    echo "Error";
}
// echo "<hr>";
?>