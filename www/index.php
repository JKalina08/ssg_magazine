<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
<head>
    <meta charset="utf-8">
    <title>recenzní magazín SSG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body, html {
        height: 100%;
        margin: 0;
      }
      
      .bg {
        /* The image used */
        background-image: url("img/bg.jpg");
      
        /* Full height */
        height: 100%; 
      
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
</head>


<body> 
<div class="bg"></div>
<div class="container">
<div class="position-absolute top-50 start-50 translate-middle">
   <h2>&nbsp;SSG MAGAZÍN</h2><br />

    <div>

     <form action="login.php" method="post">
        
        <?php if (isset($_GET['error'])) { ?>
            <p class="text-danger"><?php echo $_GET['error']; ?></p>
        <?php } ?>

           <table>
            <tr><td>Jméno: &nbsp;</td><td><input type="text" name="uname" required="required" placeholder="Login" autofocus required></input></td></tr>
            <tr><td>Heslo:&nbsp;</td><td><input type="password" name="password" required="required" placeholder="Heslo" required></input></td></tr>
            <tr><td colspan="2"><br><input class="btn btn-outline-success" type="submit" title="Log In" name="login" value="Přihlásit"></input>
            <input class="btn btn-outline-success" type="reset" value="Storno" /></td></tr>
           </table>
        
     </form>
     
     <div>
    <form action="login-guest.php" method="post">

        <table>
            <tr><td><input type="hidden" name="uname" value="guest" autofocus required></input></td></tr>
            <tr><td><input type="hidden" name="password" value="guest" required></input></td></tr>
            <tr><td colspan="2"><br><input class="btn btn-success btn-lg" type="submit" title="Log In" name="login" value="Vstoupit jako návštěvník"></input></td></tr>        
        </table>
        
     </form>
     </div>
    </div>

  </div></div>
 </body>
</html>