<?php
require 'protection.php';
require("db_conn.php");

// TODO - aktualizace pdf / docx ====================================================================
//$allowedExts = array("doc", "docx", "pdf");
//$extension = end(explode(".", $_FILES["file"]["name"]));
//if (($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") && ($_FILES["file"]["size"] < 2000000) && in_array($extension, $allowedExts))
//{
//  if ($_FILES["file"]["error"] > 0)
//  {
//      echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
//  }
//  else{
//      //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
//      //echo "Type: " . $_FILES["file"]["type"] . "<br>";
//      //echo "Size: " . ($_FILES["file"]["size"] / 200000) . " kB<br>";
//      //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

//$_FILES["file"]["name"] = str_replace(' ', '_', $_FILES["file"]["name"]);


//if (file_exists("res/" . $_FILES["file"]["name"]))
//  {
//  echo $_FILES["file"]["name"] . " already exists. ";
//  echo '<script language="javascript">';
//  echo 'alert("Already exists - aborted")';
//  echo '</script>';
//  }
//else
// {
//  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
//  move_uploaded_file($_FILES["file"]["tmp_name"], "res/" . $_FILES["file"]["name"]);
//$name = $_FILES["file"]["name"];

  $id = $_POST["id"];
  $recenzent1 = $_POST["rec1"];
  if($_POST["new_akt1"]=='') $akt1 = 0; else $akt1 = $_POST["new_akt1"];
  if($_POST["new_orig1"]=='') $orig1 = 0; else $orig1 = $_POST["new_orig1"];
  if($_POST["new_lang1"]=='') $lang1 = 0; else $lang1 = $_POST["new_lang1"];

  $recenzent2 = $_POST["rec2"];
  if($_POST["new_akt2"]=='') $akt2 = 0; else $akt2 = $_POST["new_akt2"];
  if($_POST["new_orig2"]=='') $orig2 = 0; else $orig2 = $_POST["new_orig2"];
  if($_POST["new_lang2"]=='') $lang2 = 0; else $lang2 = $_POST["new_lang2"];

  $status = $_POST["status"];

 //echo "id: " . $id;
 //echo "<br>";
 //echo "rec1: " . $recenzent1;
 //echo "<br>";
 //echo "akt1: " . $akt1;
 //echo "<br>";
 //echo "orig1: " . $orig1;
 //echo "<br>";
 //echo "lang1: " . $lang1;
 //echo "<br>";
 //echo "rec2: " . $recenzent2;
 //echo "<br>";
 //echo "akt2: " . $akt2;
 //echo "<br>";
 //echo "orig2: " . $orig2;
 //echo "<br>";
 //echo "lang2: " . $lang2;
 //echo "<br>";
 //echo "status: " . $status;
 //echo "<br>"; 

 $sql = "UPDATE ssg_article SET status='$status', recenzent1='$recenzent1', akt1='$akt1', orig1='$orig1', lang1='$lang1', recenzent2='$recenzent2', akt2='$akt2', orig2='$orig2', lang2='$lang2' 
            WHERE '$id' = id_art";
            
//echo $sql;

if (mysqli_query($conn, $sql)) {
  echo '<script language="javascript">';
  echo 'alert("Success INSERT")';
  echo '</script>';
} else {
  echo '<script language="javascript">';
  echo 'alert("Error INSERT")';
  echo '</script>';
}
mysqli_close($conn);          

//  $msg = "Stored in: " . "res/" . $_FILES["file"]["name"];
//  echo '<script language="javascript">';
//  echo 'alert("Success")';
//  echo '</script>';
  
?>   


<HTML>
<HEAD>
<TITLE>Aktializace článku</TITLE>
    <link rel="stylesheet" type="text/css" href="style-form.css">
</HEAD>
<BODY>
<div class="complet">
    <div class="form-wrapper">
        <H3>
</h3>
  <div class="form-guest">
    <form action="home.php" method=get>
        <div class="button-panel">
            <input type=submit class="button" value="Zpět na přehled">
         </div>
     </form>
  </div>
  </div>
  </div>
</BODY>  
