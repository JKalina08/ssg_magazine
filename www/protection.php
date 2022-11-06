<?php
if(!isset($_SESSION)){  
         session_set_cookie_params(0);
     //    session_regenerate_id(true);    
         session_start();
         } 

//session_set_cookie_params(0);
//session_start();
 
if($_SESSION['user_is_logged'] != 1) {
   header("Location: login.php");
   exit;
 }
 ?>
