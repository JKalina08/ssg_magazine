<?php
require 'protection.php';
require("db_conn.php");
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>SSG Magazín - Nový uživatel</title>
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
