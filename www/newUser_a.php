<?php
require 'protection.php';
include "db_conn.php";
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>SSG Magazín - Přidání nového uživatele</title>
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

    <form action="newUser_b.php" method=POST>
        <H3>Přidání nového uživatele</H3>
        <br />
        <!--  Jméno: -->
        <div class="form-item">
            <b>Jméno:</b> <br />
            <input type="text" name="name" required="required" placeholder="Jméno">
        </div>

        <!--Příjmení:-->
        <div class="form-item">
            <b>Příjmení:</b> <br />
            <input type="text" name="surname" required="required" placeholder="Příjmení">
        </div>

        <!--Login:-->
        <div class="form-item">
            <b>Přihlašovací jméno:</b> <br />
            <input type="text" name="login" required="required" placeholder="login">
        </div>

        <!--Heslo:-->
        <div class="form-item">
            <b>Heslo:</b> <br />
            <input type="password" required="required" name="pass" placeholder="heslo">
        </div>
        
        <!--Mail:-->
        <div class="form-item">
            <b>E-mail:</b> <br />
            <input type="text" name="mail" required="required" placeholder="e-mail">
        </div>

        <div class="box">
            <b>Role:</b> <br />
            <select name="role">
                <option disabled selected>Role:</option>
                <option value="autor">Autor/ka</option>
                <option value="redaktor">Redaktor/ka</option>
                <option value="recenzent">Recenzent/ka</option>
            </select>
        </div>
        <br />
        <div class="button-panel">
            <input type="submit" class="btn btn-success btn" value="Přidej nového uživatele">
        </div>
    </form>
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
