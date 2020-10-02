<?php

include('../config/db.php');

$id = $_GET['id'];

$query = "DELETE FROM sous_categorie WHERE id='$id' ";

$req = $connexion->prepare($query);

$req->execute();

header('Location: ../pages/createCategoryComponent.php?delete2=success');


?>