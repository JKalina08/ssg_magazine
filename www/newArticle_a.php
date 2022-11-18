<?php
require 'protection.php';
include "db_conn.php";
?>

<HTML>
<HEAD>
<TITLE>NOVÝ ČLÁNEK</TITLE>
    <link rel="stylesheet" type="text/css" href="style-form.css">
</HEAD>

<BODY>
<div class="complet">
    <div class="form-wrapper">
        <FORM ACTION="newArticle_b.php" METHOD=POST enctype="multipart/form-data">
            <H3>Vytvoření nového článku</H3>
            
            <div class="form-item">
                <input type="text" name="title" required="required" placeholder="Název článku" autofocus required>
            </div> 
            Téma:
            <div class="box">
                <select name="theme">
                    <option  disabled selected>Téma:</option>
                    <option value="NAT">Vědy o přírodě</option>
                    <option value="HUM">Vědy o člověku</option>
                    <option value="TEC">Technické vědy</option>
                    <option value="ECO">Ekologické vědy</option>
                    <option value="SOC">Společenské vědy</option>
                </select>
            </div>
            Spoluautoři:
            <div class="box">
           
<?php
// vypsani roletky se jmeny autoru ====================================================================

    echo "<div class=\"box\">";
    echo "<td><select name=\"coautor1\" id=\"coautor1\">";
        echo "<option selected value=\"0\">VYBER</option>";

    $sql = "select id_staff, user_full_name from ssg_users where tag='autor'";
    $autors = mysqli_query($conn, $sql);
    while ($autor = mysqli_fetch_array($autors)) {
        $aut_name = $autor['user_full_name'];
        $aut_id = $autor['id_staff'];
        if($_SESSION['id'] != $aut_id){ echo "<option value=".$aut_id.">".$aut_name."</option>";}
    }
    echo "</select></td>";
    echo "</div>";

    echo "<div class=\"box\">";
    echo "<td><select name=\"coautor2\" id=\"coautor2\">";
        echo "<option selected value=\"0\">VYBER</option>";

    $sql = "select id_staff, user_full_name from ssg_users where tag='autor'";
    $autors = mysqli_query($conn, $sql);
    while ($autor = mysqli_fetch_array($autors)) {
        $aut_name = $autor['user_full_name'];
        $aut_id = $autor['id_staff'];
        if($_SESSION['id'] != $aut_id){ echo "<option value=".$aut_id.">".$aut_name."</option>";}
    }
    echo "</select></td>";
    echo "</div>";

    echo "<div class=\"box\">";
    echo "<td><select name=\"coautor3\" id=\"coautor3\">";
        echo "<option selected value=\"0\">VYBER</option>";

    $sql = "select id_staff, user_full_name from ssg_users where tag='autor'";
    $autors = mysqli_query($conn, $sql);
    while ($autor = mysqli_fetch_array($autors)) {
        $aut_name = $autor['user_full_name'];
        $aut_id = $autor['id_staff'];
        if($_SESSION['id'] != $aut_id){ echo "<option value=".$aut_id.">".$aut_name."</option>";}
    }
    echo "</select></td>";
    echo "</div>";

    mysqli_close($conn);

//================ konec autoru ===============================================================================
?>
            <br>
            <div class="button-panel">
                <label for="file">DOKUMENT:</label>
                <input  type="file" id="file" name="file" accept="application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
            </div>
         
            <div class="button-panel">
                <INPUT TYPE=SUBMIT class="button" VALUE="Vytvoř článek">
            </div>
        </FORM>
    </div>

    <div class="form-guest">
        <form action="home.php" method=get>
            <div class="button-panel">
                <input type=submit class="button" value="Zpět na přehled">
            </div>
        </form>
    </div>
</div>
</BODY>
</HTML>