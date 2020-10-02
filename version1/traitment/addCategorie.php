<?php

include('../config/db.php');

$categorie = $_POST['categorie'];

$query = "INSERT INTO categorie(categorie) VALUES('$categorie')";

$req = $connexion->prepare($query);

$req->execute();

header("Location: ../pages/createCategoryComponent.php?insertion=good");


?>