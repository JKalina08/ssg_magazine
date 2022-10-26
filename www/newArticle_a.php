<?php
require 'protection.php';

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
            <br>
            TODO: Spoluautoři (jak?)<br>
            <br>
            <div class="button">
                <label for="file">DOKUMENT:</label>
                <input  type="file" id="file" name="file" accept="application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
            </div>

<!--            <img class="photo" src="img/default.jpg">
            <input type="hidden" name="id_graveB" value= <?//php echo $_POST['id_graveA']; ?>>
-->            
            
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