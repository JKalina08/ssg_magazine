<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container-fluid p-2">
    <a class="btn btn-success" href="home.php"><b>SSG Magazín</b></a>&nbsp;&nbsp;
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php if ($_SESSION['role'] == "redaktor" or $_SESSION['role'] == "šéfredaktor" or $_SESSION['role'] == "recenzent"  or $_SESSION['role'] == "autor"){ ?>
      <form class="d-flex me-auto" action="newArticle_a.php" method="post">
        <input class="btn btn-outline-success btn" type="submit" title="Přidat nový článek" name="newArticle" value="Přidat nový článek">&nbsp;
      </form>
<!-- 
      <form class="d-flex me-auto" action="searchCorpse_a.php" method="post">
        <input class="btn btn-outline-success btn" type="submit" title="Vyhledej" name="search" value="Vyhledej článek">
      </form>
-->
    <?php }?>
    
    <?php if ($_SESSION['role'] == "redaktor" or $_SESSION['role'] == "šéfredaktor"){ ?>
<!-- 
      <form action="d-flex me-auto" method="post">
        <input class="btn btn-outline-danger btn" type="submit" title="Něco pouze pro redaktora 1 TBD" name="newGrave" value="Něco pouze pro redaktora 1 TBD">&nbsp;
      </form>
-->

      <div>
        <b>Administrace: </b>&nbsp;&nbsp;
      </div>
      <form class="d-flex me-auto" action="newUser_a.php" method="post">
        <input class="btn btn-outline-danger" type="submit" title="Přidat nového autora" name="newUser" value="Přidat nového autora">
      </form>

<!-- 
    <b >Administrace: </b>
      <form class="d-flex me-auto" action="newUser_a.php" method="post">
        <input class="btn btn-outline-danger btn" type="submit" title="Přidat nového autora" name="newUser" value="Přidat nového autora">
      </form>
-->
    <?php }?>

    <?php if ($_SESSION['role'] == "redaktor" or $_SESSION['role'] == "šéfredaktor" or $_SESSION['role'] == "recenzent"  or $_SESSION['role'] == "autor"){ ?>
      <div>
        <i class="fa fa-user-o"></i> <b><?php echo $titleName;?></b>&nbsp;&nbsp;<a class="btn btn-primary btn-sm" href="logout.php" title="Log Out">odhlásit</a>
      </div>
    <?php }?>

    <?php if ($_SESSION['role'] == "guest"){ ?>
      <div>
        <a class="btn btn-outline-success btn" href="logout.php" title="Log Out">Zpět na přihlášení</a>
      </div>
    <?php }?>


    </div>
  </div>
</nav>