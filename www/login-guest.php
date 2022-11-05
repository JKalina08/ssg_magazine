<?php 

    session_start(); 
    $_SESSION['id'] = -1;
    $_SESSION['login'] = "guest";
    $_SESSION['name'] = "Neznámý návštěvník";
    $_SESSION['role'] = "guest";
    $_SESSION['onlyMy'] = "0";
    header("Cache-control: private");
    $_SESSION["user_is_logged"] = 1;
    header("Location: home.php");
    exit();
