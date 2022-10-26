<?php 
session_start();
require 'protection.php';
include "db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {

if($_SESSION['role']=='redaktor'){
$titleName = $_SESSION['name'] . " - redaktor";
}else{
$titleName = $_SESSION['name'];
}

 ?>
<!---------------------------------------------------------------->

<!DOCTYPE html>
<html>

<head>
    <title>GGS Mazagín</title>
    <link rel="stylesheet" type="text/css" href="style-main.css">
    


</head>

<body>
  
<div class="logo">
SSG MAGAZÍN - <?php echo $titleName;?>
</div>     

 
 
<div class="button-panel">     
    <form action="logout.php" method="post">
		  <input type="submit" class="button" title="Log Out" name="logout" value="Odhlásit se">
     </form>

     <form action="newArticle_a.php" method="post">   
		  <input type="submit" class="button" title="Přidat nový článek" name="newArticle" value="Přidat nový článek">
     </form>
     
     <form action="searchCorpse_a.php" method="post">
		  <input type="submit" class="button" title="Vyhledej" name="search" value="Vyhledej článek">
     </form>

<?php if ($_SESSION['role'] == "redaktor"){ ?>
     <form action="home.php" method="post">
		  <input type="submit" class="button" title="Něco pouze pro redaktora 1 TBD" name="newGrave" value="Něco pouze pro redaktora 1 TBD">
     </form>
     
     <form action="newUser_a.php" method="post">   
		  <input type="submit" class="button" title="Přidat nového autora" name="newUser" value="Přidat nového autora">
     </form>
<?php }?>

     <button type="button" class="button" onclick="window.location.href='home.php'" >Zobraz všechny články</button>


</div>
<hr>    
     
<!-- ======================== TABULKA ==================================  --> 
<br>
    <h2>Přehled článků v systému - TODO: vypisuje se komplet tabulka - oříznout podle přihlášenýho uživatele</h2>
 
<table border="1">
    <tr> <!--Vypíšu hlavičku, která je zatím natvrdo pro všechny stejná - TODO: oříznout slopupce podle uživatele------------> 
        <th>ID</th>
        <th>Název</th>
        <th>Náhled</th>
        <th>Autor</th>
        <th>Autorský tým</th>
        <th>Téma</th>
        <th>Recenzent 1</th>
        <th>Recenze 1</th>
        <th>Aktuálnost</th>
        <th>Originalita</th>
        <th>Jazyková úroveň</th>
        <th>Recenzent 2</th>
        <th>Recenze 2</th>
        <th>Aktuálnost</th>
        <th>Originalita</th>
        <th>Jazyková úroveň</th>
        <th>Status</th>
    </tr> 
 
     
<?php
    $sql = "select * from ssg_article";
    $result = mysqli_query($conn, $sql);

    while ($article = mysqli_fetch_array($result)) {
        echo "<tr>";
        $id = $article['id_art'];
        $title = $article['title'];
        $file = $article['file'];
        $file = str_replace(" ", "_", $file);
        $theme = $article['theme'];
        $autor = $article['autor'];
        $recenzent1 = $article['recenzent1'];
        $recenze1 = $article['recenze1'];
        $akt1 = $article['akt1'];
        $orig1 = $article['orig1'];
        $lang1 = $article['lang1'];
        $recenzent2 = $article['recenzent2'];
        $recenze2 = $article['recenze2'];
        $akt2 = $article['akt2'];
        $orig2 = $article['orig2'];
        $lang2 = $article['lang2'];       
        $status = $article['status'];
        
        
        echo "<td>".$id."</td>";
        echo "<td>".$title."</td>";
?>
            <td> <form action="/showFile.php" method=post>
                    <input type="hidden" name="file" value= <?php echo $file; ?>>
                    <input type="submit" value="ZOBRAZ PDF">
                </form> </td> 

<?php            
            $sql = "select user_full_name from ssg_users where id_staff='".$autor."'";
            $autor_row = mysqli_query($conn, $sql);
            $autor_name = mysqli_fetch_array($autor_row);
            echo "<td>".$autor_name['user_full_name']."</td>";
?>            

            <td><form action=""><input type="submit" value="TODO: Zobraz"></form></td>
          
            <td><select name="téma" id="téma">
                <option <?php if($theme == "NAT") echo "selected" ?> value="NAT">Vědy o přírodě</option>
                <option <?php if($theme == "HUM") echo "selected" ?> value="HUM">Vědy o člověku</option>
                <option <?php if($theme == "TEC") echo "selected" ?> value="TEC">Technické vědy</option>
                <option <?php if($theme == "ECO") echo "selected" ?> value="ECO">Ekologické vědy</option>
                <option <?php if($theme == "SOC") echo "selected" ?> value="SOC">Společenské vědy</option></select></td>
            
            <td><select name="rec1" id="rec1">
                <option <?php if($recenzent1 == 0) echo "selected" ?> value="0">VYBER</option>
<?php
                $sql = "select id_staff, user_full_name from ssg_users where tag='recenzent'";
                $recenzents = mysqli_query($conn, $sql);
                while ($recenzent = mysqli_fetch_array($recenzents)) {
                    $rec_name = $recenzent['user_full_name'];
                    $rec_id = $recenzent['id_staff'];
                    if($recenzent1 == $rec_id){ echo "<option selected value=".$rec_id.">".$rec_name."</option>";}
                        else {echo "<option value=".$rec_id.">".$rec_name."</option>";}
                } 
?>                
            </select></td>    
               
            <?php if($recenzent1 == 0) {
                echo "<td></td>";
                } else {
                echo "<td><form action=\"\"><input type=\"submit\" value=\"Zobraz text\"></form></td>";}

            if ($akt1 != 0) {echo "<td>".$akt1."/5</td>";} else { echo "<td></td>";}
            if ($orig1 != 0) {echo "<td>".$orig1."/5</td>";} else { echo "<td></td>";}
            if ($lang1 != 0) {echo "<td>".$lang1."/5</td>";} else { echo "<td></td>";}
            ?>


            <td><select name="rec2" id="rec2">
                <option <?php if($recenzent2 == 0) echo "selected" ?> value="0">VYBER</option>
<?php
                $sql = "select id_staff, user_full_name from ssg_users where tag='recenzent'";
                $recenzents = mysqli_query($conn, $sql);
                while ($recenzent = mysqli_fetch_array($recenzents)) {
                    $rec_name = $recenzent['user_full_name'];
                    $rec_id = $recenzent['id_staff'];
                    if($recenzent2 == $rec_id){ echo "<option selected value=".$rec_id.">".$rec_name."</option>";}
                        else {echo "<option value=".$rec_id.">".$rec_name."</option>";}
                } 
?>                
            </select></td> 
     
    
            <?php if($recenzent2 == 0) {
                echo "<td></td>";
                } else {
                echo "<td><form action=\"\"><input type=\"submit\" value=\"Zobraz text\"></form></td>";}

            if ($akt2 != 0) {echo "<td>".$akt2."/5</td>";} else { echo "<td></td>";}
            if ($orig2 != 0) {echo "<td>".$orig2."/5</td>";} else { echo "<td></td>";}
            if ($lang2 != 0) {echo "<td>".$lang2."/5</td>";} else { echo "<td></td>";}
            ?>
            <td><select name="status" id="status">
                <option <?php if($status == 1) echo "selected" ?> value="1">Nově podaný</option>
                <option <?php if($status == 2) echo "selected" ?> value="2">Čeká na stanovení recenzentů</option>
                <option <?php if($status == 3) echo "selected" ?> value="3">Recenzní řízení probíhá</option>
                <option <?php if($status == 4) echo "selected" ?> value="4">Posudek 1 doručen</option>
                <option <?php if($status == 5) echo "selected" ?> value="5">Posudek 2 doručen</option>
                <option <?php if($status == 6) echo "selected" ?> value="6">Posudky odeslány autorovi</option>
                <option <?php if($status == 7) echo "selected" ?> value="7">Probíhá úprava textu autorem</option>
                <option <?php if($status == 8) echo "selected" ?> value="8">Příspěvěk je přijat k vydání</option>
                <option <?php if($status == 9) echo "selected" ?> value="9">Příspěvěk je zamítnut</option></select></td>
                
            <td><form action=""><input type="submit" value="Potvrď"></form></td>        
      
<?php        
        echo "</tr>";
    }
mysqli_close($conn);
?>


</table>

</body>
</html>

<!---------------------------------------------------------------->
<?php 
}else{
     header("Location: index.php");
     exit();
}
?>