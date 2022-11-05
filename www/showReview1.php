<?php
require 'protection.php';
require("db_conn.php");

  $new_id = $_POST["id"];
  $autor = $_POST["autor"];
  //$recenzent1 = $_POST["rec1"];
  //if($_POST["new_akt1"]=='') $akt1 = 0; else $akt1 = $_POST["new_akt1"];
  //if($_POST["new_orig1"]=='') $orig1 = 0; else $orig1 = $_POST["new_orig1"];
  //if($_POST["new_lang1"]=='') $lang1 = 0; else $lang1 = $_POST["new_lang1"];

  //$recenzent2 = $_POST["rec2"];
  //if($_POST["new_akt2"]=='') $akt2 = 0; else $akt2 = $_POST["new_akt2"];
  //if($_POST["new_orig2"]=='') $orig2 = 0; else $orig2 = $_POST["new_orig2"];
  //if($_POST["new_lang2"]=='') $lang2 = 0; else $lang2 = $_POST["new_lang2"];

  //$status = $_POST["status"];

 echo "id: " . $new_id;
 echo "<br>";
 echo "autor: " . $autor;
 echo "<br>";
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

 //$sql = "select autor from ssg_article where id_art='".$id."'";
 //echo $sql;
 //$autors = mysqli_query($conn, $sql);

 //$autor_row = mysqli_fetch_array($autor_row);
 //$autor_id = $autor_row['autor'];

 //$sql = "select user_full_name from ssg_users where id_staff='".$autor_id."'";
 //$autor_row = mysqli_query($conn, $sql);
 //$autor_name = mysqli_fetch_array($autor_row);
 //echo "Autor: " . $autor_name;
 //echo "<br>";

 //$sql = "select recenze1 from ssg_article where id_art='".$id."'";
 //$reviews = mysqli_query($conn, $sql);
 //$review_row = mysqli_fetch_array($reviews);
 //$review1 = $review_row['recenze1'];
 //echo $recenze1;

// $sql = "UPDATE ssg_article SET status='$status', recenzent1='$recenzent1', akt1='$akt1', orig1='$orig1', lang1='$lang1', recenzent2='$recenzent2', akt2='$akt2', orig2='$orig2', lang2='$lang2' 
//            WHERE '$id' = id_art";
            
//echo $sql;

//if (mysqli_query($conn, $sql)) {
//  echo '<script language="javascript">';
//  echo 'alert("Success INSERT")';
//  echo '</script>';
//} else {
//  echo '<script language="javascript">';
//  echo 'alert("Error INSERT")';
//  echo '</script>';
//}
mysqli_close($conn);          
  
?>  

<!--
<HTML>
<HEAD>
<TITLE>Recenze 1</TITLE>
    <link rel="stylesheet" type="text/css" href="style-form.css">
</HEAD>

<BODY>
<div class="complet">
    <div class="form-wrapper">
        <H3>Text recenze 1</h3>

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
-->