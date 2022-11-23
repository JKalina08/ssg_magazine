<?php 
session_start();
require 'protection.php';
include "db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {

// Jirka Bukovsky napsal comment
// Tohle zobrazí roli jen u REDAKTORA, ale asi je lepší roli zobrazit i u autora a recenzenta    
//if($_SESSION['role']=='redaktor'){
//$titleName = $_SESSION['name'] . " - redaktor";
//}else{
//$titleName = $_SESSION['name'];
//}
$role = $_SESSION['role'];
$titleName = $_SESSION['name'] . " - " . $role . " - id:" . $_SESSION['id']; // všechno za $role smazat, je to jen debugging

?>
<!---------------------------------------------------------------->

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>SSG Magazín</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style> /* Bohumile, "kurva" se nerika :) */
        .modal {
            display: none;
            position: fixed;
            z-index:1;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            overflow: auto;
            background-color:rgba(0,0,0,0.5);
        }

        .modal-content {
            background-color:#f4f4f4;
            margin: 20% auto;
            padding: 20px;
            width: 70%;
            box-shadow: 0 5px 8px 0 rgba(0,0,0,0.2), 0 7px 20px 0 rgba(0,0,0,0.17);
        }
        
         table td {
             font-size: 14px;
        }
        </style>
</head>
<body>

    <!-- ================ JAVA SCRIPT =============================== -->
    <script>
        function hideInfo($f_coaut_id) {
            let text1 = "coautors";
            let num = $f_coaut_id;
            let text2 = num.toString();
            $f_coaut_id = text1.concat(text2);
            var x = document.getElementById($f_coaut_id);
           if (x.style.display === "none") {
               x.style.display = "block";
           } else {
               x.style.display = "none";
          }
      }

        function hideRec1($f_rec1_id) {
            let text1 = "rec1-";
            let num = $f_rec1_id;
            let text2 = num.toString();
            $f_rec1_id = text1.concat(text2);
            var x = document.getElementById($f_rec1_id);
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function hideRec2($f_rec2_id) {
            let text1 = "rec2-";
            let num = $f_rec2_id;
            let text2 = num.toString();
            $f_rec2_id = text1.concat(text2);
            var x = document.getElementById($f_rec2_id);
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

    <!-- ================ HORNI LISTA, PANEL S TLACITKY =============================== -->
    <?php
    include 'zahlavi.php';
    ?>

    <div class="container-fluid">
  
    <h2 align="center">SSG Magazín</h2>
    <hr><br />     
     
    <!-- ======================== TABULKA "IN PROGRESS" ==================================  -->
    <?php 
    if($_SESSION['id']!=-1){  // rozpracovane clanky vypisuji jen pro neguesta 
    ?>
    <h3>Přehled rozpracovaných článků v systému:</h3>
 
    <?php
    // ====== Selekce článků podle relevance k aktuálnímu uživateli ===========================================================================-->

    // REDAKTOR + ŠÉFREDAKTOR - kompletní tabulka článků
    if($role == "redaktor" or $role == "šéfredaktor") $sql = "SELECT * FROM ssg_article WHERE status <> 8";
    // AUTOR - pouze články od daného autora
    if($role == "autor") $sql = "SELECT * FROM ssg_article WHERE status <> 8 AND " . $_SESSION['id'] . " = autor";
    // RECENZENT - pouze články k recenzi danému recenzentovi
    if($role == "recenzent") $sql = "SELECT * FROM ssg_article WHERE status <> 8 AND (" . $_SESSION['id'] . " = recenzent1 OR " . $_SESSION['id'] . " = recenzent2)";
    // GUEST - pouze články se statusem příspěvěk je přijat k vydání
    //if($role == "guest") $sql = "SELECT * FROM ssg_article WHERE status = 8";    // toto nikdz nenastane, je to osetreny podminkou o 14 radku driv

    $result = mysqli_query($conn, $sql);
    ?>
    <table border="0" class="table table-striped table-hover table-bordered table-responsive table-sm">
        <tr> <!--Vypíšu hlavičku, která je zatím natvrdo pro všechny stejná - TODO: oříznout slopupce podle uživatele------------> 
            <?php if($role == "redaktor" or $role == "šéfredaktor") echo "<th>ID</th>"; ?>          
            <th>Název</th>
            <th>Náhled</th>
            <?php if($role != "autor") echo "<th>Autor</th>"; ?>                                     
            <th>Autorský tým</th>
            <th>Téma</th>
            <th>Recenze 1</th>
            <th>Recenze 2</th>
            <th>Recenzent 1</th>
            <th>Aktuálnost</th>
            <th>Originalita</th>
            <th>Jazyková úroveň</th>
            <th>Recenzent 2</th>
            <th>Aktuálnost</th>
            <th>Originalita</th>
            <th>Jazyková úroveň</th>
            <?php if($role != "guest") echo "<th>Status</th>"; ?>
            <th></th>       
        </tr> 
    <?php
    while ($article = mysqli_fetch_array($result)) {
        echo "<tr>";                    // - - -  Začátek řádku s článkem - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
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
            ?>

            <!-- ====== ID článku =======================================================================================================================  -->      
            <?php  
            if($role == "redaktor" or $role == "šéfredaktor") {
                echo "<td>".$id."</td>";
            }
            ?>

            <!-- ====== Název článku ==================================================================================================================== -->
            <?php
            echo "<td>".$title."</td>";
            ?>

            <!-- ====== Náhled ========================================================================================================================-->
            <td> 
                <form action="showFile.php" method=post>
                    <input type="hidden" name="file" value= <?php echo $file; ?>>
                    <input type="submit" class="btn btn-outline-success btn-sm" value="ZOBRAZ PDF">
                </form> 
            </td> 

            <!-- ====== Autor =========================================================================================================================-->
            <?php            
            $sql = "select user_full_name from ssg_users where id_staff='".$autor."'";
            $autor_row = mysqli_query($conn, $sql);
            $autor_name = mysqli_fetch_array($autor_row);
            if($role != "autor") 
                echo "<td>".$autor_name['user_full_name']."</td>";
            ?>            

            <!-- ====== Autorský tým ==================================================================================================================-->
            <td>
                <button class="btn btn-outline-success btn-sm" onclick="hideInfo(<?php echo $id; ?>)">Zobraz tým</button>
                <div <?php echo "id=\"coautors" . $id ."\""; ?> class="modal">
                    <div class="modal-content">
                        <button class="btn btn-success btn-sm" onclick="hideInfo(<?php echo $id; ?>)">zavřít</button>
                        <p> <?php 
                        // Tady vytvářím soupis spoluautorů
                            echo "id článku= " . $id;
                            echo "<h1>Spoluautoři:</h1>";
                            echo "<br>";

                            $sql = "select ssg_users.user_full_name from ssg_users inner join ssg_autors on ssg_autors.id_staff inner join ssg_article on ssg_autors.id_art where ssg_autors.id_staff = ssg_users.id_staff and ssg_autors.id_art = ssg_article.id_art and ssg_article.id_art =".$id;
                            $autor_row = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($autor_row)>0){
                                while ($autor_name = mysqli_fetch_array($autor_row)) {
                                    echo $autor_name['user_full_name']."<br>";
                                }
                            }else{
                                echo "Žádný spoluautor.";
                            }
                  
                        ?></p>
                    </div>
                </div>
            </td>

            <!-- ====== Téma ==========================================================================================================================-->                  
            <?php
                switch ($theme) {
                    case "NAT":
                        echo "<td>Vědy o přírodě</td>"; break;
                    case "HUM":
                        echo "<td>Vědy o člověku</td>"; break;
                    case "TEC":
                        echo "<td>Technické vědy</td>"; break;
                    case "ECO":
                        echo "<td>Ekologické vědy</td>"; break;
                    case "SOC":
                        echo "<td>Společenské vědy</td>"; break;
                }
            ?>


            <!-- ====== Text Recenze 1 ================================================================================================================-->               
            <?php 
                if($recenzent1 == 0) {
                    echo "<td></td>";
                } else {
                    if($recenzent1 == $_SESSION['id']){ //zobrazim modal s moznosti editu pro odpovidajiciho recenzenta
            ?>
                        <td>
                        <button class="btn btn-outline-success btn-sm" onclick="hideRec1(<?php echo $id; ?>)">Uprav text</button>
                        <div <?php echo "id=\"rec1-" . $id ."\""; ?> class="modal">
                            <div class="modal-content">
                                <button class="btn btn-success btn-sm" onclick="hideRec1(<?php echo $id; ?>)">zavřít</button>
                                <p>
                                    (debugg:) id článku= <?php echo $id; ?>
                                    <h1>Recenze:</h1>
                                    <br>
                                    <form action="recenze_b.php" method=post id="textrec1_form">
                                        <textarea rows="10" cols="80" name="new_rec1" form="textrec1_form"><?php echo $article['recenze1']; ?></textarea>
                                        <br>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>"></input>
                                        <input type="hidden" name="new_rec2" value="<?php echo $recenze2; ?>"></input>
                                        <input type="submit" value="Ulož změny"></input>
                                    </form>                  
                                </p>
                            </div>
                        </div>
                    </td>
            <?php
                    } else { // Zobrazim modal jen na vypsani recenze bez uprav:
            ?>
                        <td>
                        <button class="btn btn-outline-success btn-sm" onclick="hideRec1(<?php echo $id; ?>)">Zobraz text</button>
                        <div <?php echo "id=\"rec1-" . $id ."\""; ?> class="modal">
                            <div class="modal-content">
                                <button class="btn btn-success btn-sm" onclick="hideRec1(<?php echo $id; ?>)">zavřít</button>
                                <p> <?php 
                                    // Tady vypisu text recenze
                                    echo "(debugg:) id článku= " . $id;
                                    echo "<h1>Recenze:</h1>";
                                    echo "<br>";
                                    echo $article['recenze1'];                  
                                ?></p>
                            </div>
                        </div>
                    </td>
            <?php        
                    }

            }

            // ====== Text Recenze 2 ================================================================================================================-->     
            if($recenzent2 == 0) {
                echo "<td></td>";
            } else {
                if($recenzent2 == $_SESSION['id']){ //zobrazim modal s moznosti editu pro odpovidajiciho recenzenta
        ?>
                    <td>
                    <button class="btn btn-outline-success btn-sm" onclick="hideRec2(<?php echo $id; ?>)">Uprav text</button>
                    <div <?php echo "id=\"rec2-" . $id ."\""; ?> class="modal">
                        <div class="modal-content">
                            <button class="btn btn-success btn-sm" onclick="hideRec2(<?php echo $id; ?>)">zavřít</button>
                            <p>
                                (debugg:) id článku= <?php echo $id; ?>
                                <h1>Recenze:</h1>
                                <br>
                                <form action="recenze_b.php" method=post id="textrec2_form">
                                    <textarea rows="10" cols="80" name="new_rec2" form="textrec2_form"><?php echo $article['recenze2']; ?></textarea>
                                    <br>
                                    <input type="hidden" name="id" value="<?php echo $id; ?>"></input>
                                    <input type="hidden" name="new_rec1" value="<?php echo $recenze1; ?>"></input>
                                    <input type="submit" value="Ulož změny"></input>
                                </form>                  
                            </p>
                        </div>
                    </div>
                </td>
        <?php
                } else { // Zobrazim modal jen na vypsani recenze bez uprav:
        ?>
                    <td>
                    <button class="btn btn-outline-success btn-sm" onclick="hideRec2(<?php echo $id; ?>)">Zobraz text</button>
                    <div <?php echo "id=\"rec2-" . $id ."\""; ?> class="modal">
                        <div class="modal-content">
                            <button class="btn btn-success btn-sm" onclick="hideRec2(<?php echo $id; ?>)">zavřít</button>
                            <p> <?php 
                                // Tady vypisu text recenze
                                echo "(debugg:) id článku= " . $id;
                                echo "<h1>Recenze:</h1>";
                                echo "<br>";
                                echo $article['recenze2'];                  
                            ?></p>
                        </div>
                    </div>
                </td>
        <?php        
                }

        }
            ?>

            <!-- ====== Recenzent 1 ===================================================================================================================-->
            <form action="home_b.php" method=post>
    
                <?php  
                if($role == "redaktor" or $role == "šéfredaktor"){
                    echo "<td><select name=\"rec1\" id=\"rec1\">";
                    if($recenzent1 == 0) {
                        echo "<option selected value=\"0\">VYBER</option>";
                    } else {
                        echo "<option value=\"0\">VYBER</option>";
                    }
                    $sql = "select id_staff, user_full_name from ssg_users where tag='recenzent'";
                    $recenzents = mysqli_query($conn, $sql);
                    while ($recenzent = mysqli_fetch_array($recenzents)) {
                        $rec_name = $recenzent['user_full_name'];
                        $rec_id = $recenzent['id_staff'];
                        if($recenzent1 == $rec_id){
                            echo "<option selected value=".$rec_id.">".$rec_name."</option>";
                        } else {
                            echo "<option value=".$rec_id.">".$rec_name."</option>";
                        }
                    }
                    echo "</select></td>";
                } else {
                    $sql = "select user_full_name from ssg_users where id_staff='" . $recenzent1 . "'";
                    $recenzents = mysqli_query($conn, $sql);
                    $recenzent = mysqli_fetch_array($recenzents);
                    echo "<td><input type=\"hidden\" name=\"rec1\" id=\"rec1\" value=\"". $recenzent1 ."\"></input>" . $recenzent['user_full_name'] . "</td>";
            
                }        
                
            // ====== Hodnocení 1 =====================================================================================================================-->
            if ($recenzent1 == $_SESSION['id']){
                echo "<td><input type=\"text\" size=\"1\" id=\"new_akt1\" name=\"new_akt1\" value=\"" . $akt1 ."\">/5</td>";
                echo "<td><input type=\"text\" size=\"1\" id=\"new_orig1\" name=\"new_orig1\" value=\"" . $orig1 ."\">/5</td>";
                echo "<td><input type=\"text\" size=\"1\" id=\"new_lang1\" name=\"new_lang1\" value=\"" . $lang1 ."\">/5</td>";
            } else {
                if ($akt1 != 0) {echo "<td><input type=\"hidden\" name=\"new_akt1\" id=\"new_akt1\" value=\"". $akt1 ."\"></input>".$akt1."/5</td>";} else { echo "<td></td>";}
                if ($orig1 != 0) {echo "<td><input type=\"hidden\" name=\"new_orig1\" id=\"new_orig1\" value=\"". $orig1 ."\"></input>".$orig1."/5</td>";} else { echo "<td></td>";}
                if ($lang1 != 0) {echo "<td><input type=\"hidden\" name=\"new_lang1\" id=\"new_lang1\" value=\"". $lang1 ."\"></input>".$lang1."/5</td>";} else { echo "<td></td>";}
            }

            // ====== Recenzent 2 ===================================================================================================================-->
            if ($role == "redaktor" or $role == "šéfredaktor"){
                echo "<td><select name=\"rec2\" id=\"rec2\">";
                if($recenzent2 == 0) {
                    echo "<option selected value=\"0\">VYBER</option>";
                } else {
                    echo "<option value=\"0\">VYBER</option>";
                }
                $sql = "select id_staff, user_full_name from ssg_users where tag='recenzent'";
                $recenzents = mysqli_query($conn, $sql);
                while ($recenzent = mysqli_fetch_array($recenzents)) {
                    $rec_name = $recenzent['user_full_name'];
                    $rec_id = $recenzent['id_staff'];
                    if($recenzent2 == $rec_id){ 
                        echo "<option selected value=".$rec_id.">".$rec_name."</option>";
                    } else {
                        echo "<option value=".$rec_id.">".$rec_name."</option>";
                    }
                }
                echo "</select></td>";
            } else {
                $sql = "select user_full_name from ssg_users where id_staff='" . $recenzent2 . "'";
                $recenzents = mysqli_query($conn, $sql);
                $recenzent = mysqli_fetch_array($recenzents);
                echo "<td><input type=\"hidden\" name=\"rec2\" id=\"rec2\" value=\"". $recenzent2 ."\"></input>" . $recenzent['user_full_name'] . "</td>";
            }        
      
            // ====== Hodnocení 2 =====================================================================================================================-->                
            if ($recenzent2 == $_SESSION['id']){
                echo "<td><input type=\"text\" size=\"1\" id=\"new_akt2\" name=\"new_akt2\" value=\"" . $akt2 ."\">/5</td>";
                echo "<td><input type=\"text\" size=\"1\" id=\"new_orig2\" name=\"new_orig2\" value=\"" . $orig2 ."\">/5</td>";
                echo "<td><input type=\"text\" size=\"1\" id=\"new_lang2\" name=\"new_lang2\" value=\"" . $lang2 ."\">/5</td>";
            } else {
                if ($akt2 != 0) {echo "<td><input type=\"hidden\" name=\"new_akt2\" id=\"new_akt2\" value=\"". $akt2 ."\"></input>".$akt2."/5</td>";} else { echo "<td></td>";}
                if ($orig2 != 0) {echo "<td><input type=\"hidden\" name=\"new_orig2\" id=\"new_orig2\" value=\"". $orig2 ."\"></input>".$orig2."/5</td>";} else { echo "<td></td>";}
                if ($lang2 != 0) {echo "<td><input type=\"hidden\" name=\"new_lang2\" id=\"new_lang2\" value=\"". $lang2 ."\"></input>".$lang2."/5</td>";} else { echo "<td></td>";}
            }
            ?>

            <!-- ====== Status ========================================================================================================================-->            
            <td><select name="status" id="status" >
                    <option <?php if($status == 1) echo "selected" ?> value="1">Nově podaný</option>
                    <option <?php if($status == 2) echo "selected" ?> value="2">Čeká na stanovení recenzentů</option>
                    <option <?php if($status == 3) echo "selected" ?> value="3">Recenzní řízení probíhá</option>
                    <option <?php if($status == 4) echo "selected" ?> value="4">Posudek 1 doručen</option>
                    <option <?php if($status == 5) echo "selected" ?> value="5">Posudek 2 doručen</option>
                    <option <?php if($status == 6) echo "selected" ?> value="6">Posudky odeslány autorovi</option>
                    <option <?php if($status == 7) echo "selected" ?> value="7">Probíhá úprava textu autorem</option>
                    <option <?php if($status == 8) echo "selected" ?> value="8">Příspěvěk je přijat k vydání</option>
                    <option <?php if($status == 9) echo "selected" ?> value="9">Příspěvěk je zamítnut</option>
                </select>
            </td>

            <!-- ====== Submit tlačítko ===============================================================================================================-->
            <?php
            if($role != "guest") echo "<td><input type=\"hidden\" name=\"id\" value=\"". $id ."\"></input><input type=\"submit\" value=\"Potvrď\"></td>";
            
            echo "</form>";
        echo "</tr>";   //- - - -  Konec řádku s článkem - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    } // ====== Konec while s vysledkem z sql query
    }    
    ?>
    </table>

<br>

<!-- ==================================================================================================================================================================== -->
<!-- ======== TABULKA S ARCHIVOVANYMI CLANKY ============================================================================================================================ -->
<!-- ==================================================================================================================================================================== -->
    <h3>Přehled již vydaných článků:</h3>
 
    <?php
    // ====== Selekce článků podle relevance k aktuálnímu uživateli ===========================================================================-->

    // REDAKTOR + ŠÉFREDAKTOR - kompletní tabulka článků
    if($role == "redaktor" or $role == "šéfredaktor") $sql = "SELECT * FROM ssg_article WHERE status = 8";
    // AUTOR - pouze články od daného autora
    if($role == "autor") $sql = "SELECT * FROM ssg_article WHERE status = 8 AND " . $_SESSION['id'] . " = autor";
    // RECENZENT - pouze články k recenzi danému recenzentovi
    if($role == "recenzent") $sql = "SELECT * FROM ssg_article WHERE status = 8 AND (" . $_SESSION['id'] . " = recenzent1 OR " . $_SESSION['id'] . " = recenzent2)";
    // GUEST - pouze články se statusem příspěvěk je přijat k vydání
    if($role == "guest") $sql = "SELECT * FROM ssg_article WHERE status = 8";

    $result = mysqli_query($conn, $sql);
    ?>
    <table border="0" class="table table-striped table-hover table-bordered table-responsive table-sm">
        <tr> <!--Vypíšu hlavičku, která je zatím natvrdo pro všechny stejná - TODO: oříznout slopupce podle uživatele------------> 
            <?php if($role == "redaktor" or $role == "šéfredaktor") echo "<th>ID</th>"; ?>          
            <th>Název</th>
            <th>Náhled</th>
            <?php if($role != "autor") echo "<th>Autor</th>"; ?>                                     
            <th>Autorský tým</th>
            <th>Téma</th>
            <th>Recenze 1</th>
            <th>Recenze 2</th>
            <th>Recenzent 1</th>
            <th>Aktuálnost</th>
            <th>Originalita</th>
            <th>Jazyková úroveň</th>
            <th>Recenzent 2</th>
            <th>Aktuálnost</th>
            <th>Originalita</th>
            <th>Jazyková úroveň</th>
            <?php if($role != "guest") echo "<th>Status</th>"; ?>                                    
        </tr> 
    <?php
    while ($article = mysqli_fetch_array($result)) {
        echo "<tr>";                    // - - -  Začátek řádku s článkem - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
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
            ?>
            <!-- ====== ID článku ======================================================================================================================= -->        
            <?php    
            if($role == "redaktor" or $role == "šéfredaktor") echo "<td>".$id."</td>";
            ?>

            <!-- ====== Název článku ====================================================================================================================-->
            <?php
            echo "<td>".$title."</td>";
            ?>

            <!-- ====== Náhled ========================================================================================================================-->
            <td> 
                <form action="showFile.php" method=post>
                    <input type="hidden" name="file" value= <?php echo $file; ?>>
                    <input type="submit" class="btn btn-outline-success btn-sm" value="ZOBRAZ PDF">
                </form> 
            </td> 

            <!-- ====== Autor =========================================================================================================================-->
            <?php            
            $sql = "select user_full_name from ssg_users where id_staff='".$autor."'";
            $autor_row = mysqli_query($conn, $sql);
            $autor_name = mysqli_fetch_array($autor_row);
            if($role != "autor") 
                echo "<td>".$autor_name['user_full_name']."</td>";
            ?>            

            <!-- ====== Autorský tým ==================================================================================================================-->
            <td>
                <button class="btn btn-outline-success btn-sm" onclick="hideInfo(<?php echo $id; ?>)">Zobraz tým</button>
                <div <?php echo "id=\"coautors" . $id ."\""; ?> class="modal">
                    <div class="modal-content">
                        <button class="btn btn-success btn-sm" onclick="hideInfo(<?php echo $id; ?>)">zavřít</button>
                        <p> <?php 
                        // Tady vytvářím soupis spoluautorů
                            echo "id článku= " . $id;
                            echo "<h1>Spoluautoři:</h1>";
                            echo "<br>";

                            $sql = "select ssg_users.user_full_name from ssg_users inner join ssg_autors on ssg_autors.id_staff inner join ssg_article on ssg_autors.id_art where ssg_autors.id_staff = ssg_users.id_staff and ssg_autors.id_art = ssg_article.id_art and ssg_article.id_art =".$id;
                            $autor_row = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($autor_row)>0){
                                while ($autor_name = mysqli_fetch_array($autor_row)) {
                                    echo $autor_name['user_full_name']."<br>";
                                }
                            }else{
                                echo "Žádný spoluautor.";
                            }
               
                        ?></p>
                    </div>
                </div>
            </td>

            <!-- ====== Téma ==========================================================================================================================-->                  
            <?php
                switch ($theme) {
                    case "NAT":
                        echo "<td>Vědy o přírodě</td>"; break;
                    case "HUM":
                        echo "<td>Vědy o člověku</td>"; break;
                    case "TEC":
                        echo "<td>Technické vědy</td>"; break;
                    case "ECO":
                        echo "<td>Ekologické vědy</td>"; break;
                    case "SOC":
                        echo "<td>Společenské vědy</td>"; break;
                }
            ?>


            <!-- ====== Text Recenze 1 ================================================================================================================-->               
            <?php 
                if($recenzent1 == 0) {
                    echo "<td></td>";
                } else {
            ?>
                    <td>
                        <button class="btn btn-outline-success btn-sm" onclick="hideRec1(<?php echo $id; ?>)">Zobraz text</button>
                        <div <?php echo "id=\"rec1-" . $id ."\""; ?> class="modal">
                            <div class="modal-content">
                                <button class="btn btn-success btn-sm" onclick="hideRec1(<?php echo $id; ?>)">zavřít</button>
                                <p> <?php 
                                    // Tady vytvářím soupis spoluautorů
                                    echo "id článku= " . $id;
                                    echo "<h1>Recenze:</h1>";
                                    echo "<br>";
                                    echo $article['recenze1'];                  
                                ?></p>
                            </div>
                        </div>
                    </td>

            <?php
                }

            // ====== Text Recenze 2 ================================================================================================================-->     
            if($recenzent2 == 0) {
                echo "<td></td>";
            } else {
            ?>
                <td>
                    <button class="btn btn-outline-success btn-sm" onclick="hideRec2(<?php echo $id; ?>)">Zobraz text</button>
                    <div <?php echo "id=\"rec2-" . $id ."\""; ?> class="modal">
                        <div class="modal-content">
                            <button class="btn btn-success btn-sm" onclick="hideRec2(<?php echo $id; ?>)">zavřít</button>
                            <p> <?php 
                                // Tady vytvářím soupis spoluautorů
                                echo "id článku= " . $id;
                                echo "<h1>Recenze:</h1>";
                                echo "<br>";
                                echo $article['recenze2'];                  
                            ?></p>
                        </div>
                    </div>
                </td>

            <?php
            }
            ?>

            <!-- ====== Recenzent 1 ===================================================================================================================-->
                <?php  
                $sql = "select user_full_name from ssg_users where id_staff='" . $recenzent1 . "'";
                $recenzents = mysqli_query($conn, $sql);
                $recenzent = mysqli_fetch_array($recenzents);
                echo "<td>" . $recenzent['user_full_name'] . "</td>";
                 
             
            // ====== Hodnocení 1 =====================================================================================================================-->
                if ($akt1 != 0) {echo "<td>".$akt1."/5</td>";} else { echo "<td></td>";}
                if ($orig1 != 0) {echo "<td>".$orig1."/5</td>";} else { echo "<td></td>";}
                if ($lang1 != 0) {echo "<td>".$lang1."/5</td>";} else { echo "<td></td>";}


            // ====== Recenzent 2 ===================================================================================================================-->
                $sql = "select user_full_name from ssg_users where id_staff='" . $recenzent2 . "'";
                $recenzents = mysqli_query($conn, $sql);
                $recenzent = mysqli_fetch_array($recenzents);
                echo "<td><input type=\"hidden\" name=\"rec2\" id=\"rec2\" value=\"". $recenzent2 ."\"></input>" . $recenzent['user_full_name'] . "</td>";
       
   
            // ====== Hodnocení 2 =====================================================================================================================-->                
                if ($akt2 != 0) {echo "<td>".$akt2."/5</td>";} else { echo "<td></td>";}
                if ($orig2 != 0) {echo "<td>".$orig2."/5</td>";} else { echo "<td></td>";}
                if ($lang2 != 0) {echo "<td>".$lang2."/5</td>";} else { echo "<td></td>";}
            ?>

            <!-- ====== Status ========================================================================================================================-->            
            <td>
                Příspěvěk byl vydán.
            </td>
        </tr>   <!--- - - -  Konec řádku s článkem - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <?php
    }     // ====== Konec while s vysledkem z sql query
    ?>
    </table>

    <br /><small>školní projekt do předmětu <a href="https://isz.vspj.cz/studijni-plany/detail-predmetu/plan/34/predmet/1609" target="_blank">Řízení softwarových projektů</a> @ <a href="http://www.vspj.cz/" target="_blank">vspj.cz</a> | podzim 2022</small>
    <br /><br />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php 
mysqli_close($conn);
} else{ // ===== ukonceni podminky uplne nahore - nejsem ve svy sessione!
     header("Location: index.php");
     exit();
}
?>