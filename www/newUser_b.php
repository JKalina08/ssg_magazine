<HTML>
<HEAD>
<TITLE>Nový uživatel</TITLE>
    <link rel="stylesheet" type="text/css" href="style-form.css">
</HEAD>

<BODY>
<div class="complet">
    <div class="form-wrapper">
        <H3>

<?php

require 'protection.php';
require("db_conn.php");

$full_name = $_GET[name] . " " . $_GET[surname];
$passwd = md5($_GET[pass]);
$sql = "INSERT INTO ZP_users (id, user_name, password, user_full_name, role)
values(NULL,'$_GET[login]','$passwd','$full_name','$_GET[role]')";

     

if (mysqli_query($conn, $sql)) {
    echo "Uživatel byl úspěšně přidán!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($spojeni);
}
mysqli_close($conn);

?>


</h3>
  <div class="form-guest">
    <form action="home.php" method=get>
        <div class="button-panel">
            <input type=submit class="button" value="Zpět na hřbitov">
         </div>
     </form>
  </div>
  </div>
  </div>