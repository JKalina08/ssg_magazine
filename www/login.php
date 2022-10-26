<?php 

session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = md5(validate($_POST['password']));

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();

    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{

        $sql = "SELECT * FROM ssg_users WHERE user_name='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
               // echo "Logged in!";
                $_SESSION['id'] = $row['id_staff'];
                $_SESSION['login'] = $row['user_name'];
                $_SESSION['name'] = $row['user_full_name'];
                $_SESSION['role'] = $row['tag'];

                header("Cache-control: private");
                $_SESSION["user_is_logged"] = 1;
                $_SESSION['onlyMy'] = "0";
                header("Location: home.php");
                exit();

            }else{
                header("Location: index.php?error=Nesprávné jméno nebo heslo");
                exit();
            }

        }else{
            header("Location: index.php?error=Nesprávné jméno nebo heslo");
            exit();
        }
    }

}else{
    header("Location: index.php");
    exit();
}