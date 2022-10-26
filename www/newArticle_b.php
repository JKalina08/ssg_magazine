<?php
require 'protection.php';
require("db_conn.php");

//echo $_POST[id_graveB];

$allowedExts = array("doc", "docx", "pdf");
$extension = end(explode(".", $_FILES["file"]["name"]));
if (($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
{
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
}
else
{
//echo "Upload: " . $_FILES["file"]["name"] . "<br>";
//echo "Type: " . $_FILES["file"]["type"] . "<br>";
//echo "Size: " . ($_FILES["file"]["size"] / 200000) . " kB<br>";
//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

$_FILES["file"]["name"] = str_replace(' ', '_', $_FILES["file"]["name"]);


if (file_exists("res/" . $_FILES["file"]["name"]))
  {
  echo $_FILES["file"]["name"] . " already exists. ";
  echo '<script language="javascript">';
  echo 'alert("Already exists - aborted")';
  echo '</script>';
  }
else
  {
//  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  move_uploaded_file($_FILES["file"]["tmp_name"], "res/" . $_FILES["file"]["name"]);
  
  
  $name = $_FILES["file"]["name"];
  $theme = $_POST["theme"];
  $title = $_POST["title"];
//  echo $name;
//  echo "<br>";
//  echo $theme;
//  echo "<br>";
//  echo $title;
  
  $sql = "INSERT INTO ssg_article (id_art, title, file, status, theme, autor) 
            VALUES (NULL, '$_POST[title]', '$name', '1', '$theme', '3')";  
  if (mysqli_query($conn, $sql)) {
//  echo '<script language="javascript">';
//  echo 'alert("Success INSERT")';
//  echo '</script>';
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
  
  }
 }
 }
else
{
echo "Invalid file";
 }
   
?>

<HTML>
<HEAD>
<TITLE>Nový nebožtík</TITLE>
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