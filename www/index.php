<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="logo">   
   SSG<br><br><br><br><br>
   MAGAZÍN
</div>

<div class="form-wrapper">

     <form action="login.php" method="post">
        <h3>PŘIHLÁŠENÍ</h3>
        
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        
        <div class="form-item">
		  <input type="text" name="uname" required="required" placeholder="Login" autofocus required></input>
        </div>
        
        <div class="form-item">
		  <input type="password" name="password" required="required" placeholder="Heslo" required></input>
        </div>
        
        <div class="button-panel">
		  <input type="submit" class="button" title="Log In" name="login" value="Přihlásit"></input>
        </div>
        
     </form>
     
     <div class="form-guest">
    <form action="login-guest.php" method="post">

        <div class="form-item">
		  <input type="hidden" name="uname" value="guest" autofocus required></input>
        </div>

        <div class="form-item">
		  <input type="hidden" name="password" value="guest" required></input>
        </div>
        
        <div class="button-panel">
		  <input type="submit" class="button" title="Log In" name="login" value="Vstoupit jako návštěvník"></input>
        </div>
        
     </form>
     </div>
</div>

</body>

</html>