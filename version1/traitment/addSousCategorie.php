<?php

include('../config/db.php');

$sous_categorie = $_POST['sous_ctg'];

$query = "INSERT INTO sous_categorie(sous_categorie) VALUES('$sous_categorie')";

$req = $connexion->prepare($query);

$req->execute();

header("Location: ../pages/createCategoryComponent.php?insertion2=good");


?>