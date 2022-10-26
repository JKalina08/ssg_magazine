
<?php
require 'protection.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Přidání nového uživatele</title>
    <link rel="stylesheet" type="text/css" href="style-form.css">
<meta charset="UTF-8">
</head>
<body>

<div class="complet">
<div class="form-wrapper">

    <form action="newUser_b.php" method="GET">
        <H3>Přidání nového uživatele</H3>
        <!--  Jméno: -->
        <div class="form-item">
            <input type="text" name="name" required="required" placeholder="Jméno">
        </div>

        <!--Příjmení:-->
        <div class="form-item">
            <input type="text" name="surname" required="required" placeholder="Příjmení">
        </div>

        <!--Login:-->
        <div class="form-item">
            <input type="text" name="login" required="required" placeholder="login">
        </div>

        <!--Heslo:-->
        <div class="form-item">
            <input type="password" required="required" name="pass" placeholder="heslo">
        </div>
        
        <!--Mail:-->
        <div class="form-item">
            <input type="text" name="mail" required="required" placeholder="e-mail">
        </div>

        <div class="box">

            <select name="role">
                <option  disabled selected>Role:</option>
                <option value="autor">Autor/ka</option>
                <option value="redaktor">Redaktor/ka</option>
                <option value="recenzent">Recenzent/ka</option>
            </select>
        </div>

        <div class="button-panel">
            <input type="submit" class="button" value="Přidej">
        </div>
    </form>
</div>

<div class="form-guest">
    <form action="home.php" method=get>
        <div class="button-panel">
            <input type=submit class="button" value="Zpět na výpis článků">
        </div>
    </form>
</div>
</div>
</body>
</html>
