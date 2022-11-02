<?php
$sname= "localhost:3306";
$uname= "root";
$password = "secret";
$db_name = "ssg";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
//$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
?>