<?php
echo "Making connection....", "<bR>";


$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Sorry connection failed:" . mysqli_connect_error());
} else {
    echo "Connected Sucessfully";
}
echo "<hr>";
mysqli_close($conn);
echo "Connection Closed";
?>