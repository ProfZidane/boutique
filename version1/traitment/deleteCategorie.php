<?php

include('../config/db.php');

$id = $_GET['id'];


$query = "DELETE FROM categorie WHERE id=$id ";

$req = $connexion->prepare($query);

$req->execute();

header('Location: ../pages/createCategoryComponent.php?delete=success');

?>