<?php
require 'protection.php';
require("db_conn.php");
?>

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
$full_name = $_POST["name"] . " " . $_POST["surname"];
$passwd = md5($_POST["pass"]);
//echo $_POST["login"] . "<br>";
//echo $_POST["pass"] . "<br>";
//echo $passwd . "<br>";
//echo $full_name . "<br>";
//echo $_POST["role"] . "<br>";
//echo $_POST["mail"] . "<br>";

$sql = "INSERT INTO ssg_users (id_staff, user_name, password, user_full_name, tag, mail) values(NULL,'$_POST[login]','$passwd','$full_name','$_POST[role]', '$_POST[mail]')";
//echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "Uživatel byl úspěšně přidán!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

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
</BODY>
</HTML>
