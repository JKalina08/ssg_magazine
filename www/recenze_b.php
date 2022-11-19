<?php
require 'protection.php';
require("db_conn.php");

  $id = $_POST["id"];
  $newrec1 = $_POST["new_rec1"];
  $newrec2 = $_POST["new_rec2"];

//  echo "id: " . $id;
//  echo "<br>";
//  echo "rec1: " . $newrec1;
//  echo "<br>";
//  echo "rec2: " . $newrec2;
//  echo "<br>";

 $sql = "UPDATE ssg_article SET recenze1='$newrec1', recenze2='$newrec2' WHERE '$id' = id_art";
            
//echo $sql;

if (mysqli_query($conn, $sql)) {

//  echo '<script language="javascript">';
//  echo 'alert("Success INSERT")';
//  echo '</script>';

} else {

//  echo '<script language="javascript">';
//  echo 'alert("Error INSERT")';
//  echo '</script>';
}

mysqli_close($conn);
header("Location: home.php");
exit();           
?>   
