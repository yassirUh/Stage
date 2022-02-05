<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#">Stage-A2021-46XC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="Accueil.php">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Accueil.php">Messagerie</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mon profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <p class="dropdown-item" href="AjoutProche.php">Nom d'utilisateur</p>
          <img class="dropdown-item" href="AjoutVisit.php">Photo de profile</img>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="AjoutEmploi.php">Modifier profile</a>
          <a class="dropdown-item" href="AjoutEmploi2.php">Deconnexion</a>
        </div>
      </li>
    </ul>

    <form class="form-group mt-4" action="index.php" method="POST">
    <input name="chercher3" id="Quiter" type="submit" value="Quiter" class="btn btn-danger"/>
    </form>
  
    </form>
  </div>
</nav>
