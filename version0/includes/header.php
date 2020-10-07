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

<div class="container">
  <!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-light " style="margin-left:4rem">
  <a class="navbar-brand" href="index.php">
    <img src="logo2.jpeg" width="50" alt="">
    <span style="color: #FF6833">LOCO-</span><span class="text-warning">BOUTIQUE</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse offset-md-5" id="navbarSupportedContent">
    
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catégories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Décodeurs</a>
          <a class="dropdown-item" href="#">équipements réseaux</a>          
        </div>
      </li> -->
               
    <?php if(isset($_SESSION['panier'])) { ?>
      
      <li class="nav-item">
        <a class="nav-item" href="cart.php" style="color:#FF6833">
          Panier <i class="material-icons" style="position:relative;top:5px;color:#FF6833">shopping_cart</i><span style="color:#FF6833" id="count_cart"><?= count($_SESSION["panier"])?></span>
        </a>
      </li>
      
    <?php } else { ?>
      <li class="nav-item" >
        Panier &nbsp;<a class="nav-item" href="cart.php">
          <i class="material-icons" style="position:relative;top:5px;color:#FF6833">shopping_cart</i><span style="color:#FF6833" id="count_cart">0</span>
        </a>
      </li>
    <?php } ?>
    </ul>
    
  </div>
</nav>
<!-- // end nav bar -->




</div>