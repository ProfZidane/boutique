<?php

include('../config/db.php');

$id = $_GET['id'];


$query = "DELETE FROM produits WHERE id=$id ";

$req = $connexion->prepare($query);

$req->execute();

header('Location: ../pages/modifyProductComponent.php?delete=success');

?>