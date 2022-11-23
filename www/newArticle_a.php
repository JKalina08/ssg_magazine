<?php
require 'protection.php';
include "db_conn.php";
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>SSG Magazín - Nový článek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <?php
    include 'zahlavi.php';
    ?>

    <div class="container-fluid">
  
    <h2 align="center">SSG Magazín</h2>
    <hr><br />  

<div class="complet">
    <div class="form-wrapper">
        <FORM ACTION="newArticle_b.php" METHOD=POST enctype="multipart/form-data">
            <H3>Přidání nového článku</H3>
            <br />
            <b>Název článku:</b>            
            <div class="form-item">
                <input type="text" name="title" required="required" placeholder="Název článku" autofocus required>
            </div>
            <br />
            <b>Téma:</b>
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
            <br />
            <b>Spoluautoři:</b>
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
            <br />
            <div class="button-panel">
                <label for="file"><b>Vložte dokument:</b></label><br />
                <input type="file" class="btn btn-outline-success btn" id="file" name="file" accept="application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
            </div>
            <br />
            <div class="button-panel">
                <INPUT TYPE=SUBMIT class="btn btn-success btn" VALUE="Přidej článek">
            </div>
        </FORM>
    </div>
    <br /><br />
    <div class="form-guest">
        <form action="home.php" method=get>
            <div class="button-panel">
                <input type=submit class="btn btn-outline-success btn-sm" value="Zpět na přehled článků">
            </div>
        </form>
    </div>
</div>

    <br /><small>školní projekt do předmětu <a href="https://isz.vspj.cz/studijni-plany/detail-predmetu/plan/34/predmet/1609" target="_blank">Řízení softwarových projektů</a> @ <a href="http://www.vspj.cz/" target="_blank">vspj.cz</a> | podzim 2022</small>
    <br /><br />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>