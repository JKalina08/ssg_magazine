<?php
require 'protection.php';
require("db_conn.php");

//verze B
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

//--
// echo "Upload: " . $_FILES["file"]["name"] . "<br>";
// echo "Type: " . $_FILES["file"]["type"] . "<br>";
// echo "Size: " . ($_FILES["file"]["size"] / 200000) . " kB<br>";
// echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
//--

$_FILES["file"]["name"] = str_replace(' ', '_', $_FILES["file"]["name"]);


if (file_exists("res/" . $_FILES["file"]["name"]))  // kvuli timestampu v nazvu by nikdy nemelo nastat
  {
  echo $_FILES["file"]["name"] . " already exists. ";
  echo '<script language="javascript">';
  echo 'alert("Already exists - aborted")';
  echo '</script>';
  }
else
  {

//-- 
  // $newname = $_FILES["file"]["name"] . time();
  // echo "Upload: " . $_FILES["file"]["name"] . "<br>";
//-- 

$path_parts = pathinfo($_FILES["file"]["name"]);
$image_path = $path_parts['filename'].'_'.time().'.'.$path_parts['extension'];

  move_uploaded_file($_FILES["file"]["tmp_name"], "res/" . $image_path);  //$_FILES["file"]["name"]
  
  
  //$name = $_FILES["file"]["name"];
  $theme = $_POST["theme"];
  $title = $_POST["title"];
 //--
  // echo $name;
  // echo "<br>";
  // echo $theme;
  // echo "<br>";
  // echo $title;
  // echo "<br>";
 //--
  
 $autor_id = $_SESSION['id'];
  $sql = "INSERT INTO ssg_article (id_art, title, file, status, theme, autor) 
            VALUES (NULL, '$_POST[title]', '$image_path', '1', '$theme', '$autor_id')";
            
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

$sql = "select id_art from ssg_article where title='$_POST[title]' and autor = '$autor_id'";

//$sql = "select id_staff, user_full_name from ssg_users where tag='autor'";
$articles = mysqli_query($conn, $sql);
while ($article = mysqli_fetch_array($articles)) {
  $article_id = $article['id_art'];
}


if($_POST['coautor3'] != 0){
  $sql = "INSERT INTO ssg_autors (id_art, id_staff, main) VALUES ('$article_id', '$_POST[coautor1]', 0)";
  mysqli_query($conn, $sql);
}
if($_POST['coautor3'] != 0){
  $sql = "INSERT INTO ssg_autors (id_art, id_staff, main) VALUES ('$article_id', '$_POST[coautor2]', 0)";
  mysqli_query($conn, $sql);
}
if($_POST['coautor3'] != 0){
  $sql = "INSERT INTO ssg_autors (id_art, id_staff, main) VALUES ('$article_id', '$_POST[coautor3]', 0)";
  mysqli_query($conn, $sql);
}

mysqli_close($conn);          

  //$msg = "Stored in: " . "res/" . $_FILES["file"]["name"];
  //echo '<script language="javascript">';
  //echo 'alert("Success")';
  //echo '</script>';
  
  }
 }
 }
else
{
echo "Invalid file";
}
 
header("Location: home.php");
exit(); 
?>   


<!-- <HTML>
<HEAD>
<TITLE>Nový článek</TITLE>
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
</BODY>   -->