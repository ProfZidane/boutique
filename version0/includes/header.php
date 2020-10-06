<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<?php session_start() ?>
<body>

<!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LOCO-BOUTIQUE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse offset-md-4" id="navbarSupportedContent">
    
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catégories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Décodeurs</a>
          <a class="dropdown-item" href="#">équipements réseaux</a>          
        </div>
      </li> 
               
      <?php if (isset($_SESSION['nom'])) { ?>        
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $_SESSION['nom'] ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
          <a class="dropdown-item" href="#">Déconnexion</a>         
          <a class="dropdown-item" href="#">Déconnexion</a>         
        </div>
      </li>   
      <li class="nav-item dropdown">
        <form action="back/account/logout.php" method="post">
          <button class="nav-link btn btn-light" type="submit">
              Déconnexion
          </button>        
        </form>
      </li>       
      <?php } else { ?>        
      <li class="nav-item dropdown">
            <a class="nav-link" href="register.php">
                Inscription
            </a>        
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="signIn.php">
                Connexion
            </a>        
        </li>
      <?php } ?>
      
      <li class="nav-item">
        <a href="" class="nav-item">
          <i class="material-icons">shopping_cart</i>(<span id="count_cart">0</span>)
        </a>
      </li>
      
    </ul>
    
  </div>
</nav>
<!-- // end nav bar -->



