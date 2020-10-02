<?php

include('../config/db.php');

$id = $_POST['id'];

$product_name = $_POST['nom_produit'];
$catg = $_POST['categorie'];
$sous_catg = $_POST['sous_categorie'];
$price = $_POST['prix'];
$description = $_POST['description'];
$quantity = $_POST['quantite'];
$image = $_FILES['image']['name'];

if (empty($image)) {

    $query = "UPDATE produit SET nom='$product_name',catg='$catg',sous_catg='$sous_catg',prix='$price',description='$description',qte='$quantity' WHERE id = $id";    

} else {

    $query = "UPDATE produit SET nom='$product_name',catg='$catg',sous_catg='$sous_catg',prix='$price',description='$description',qte='$quantity',img='$image' WHERE id = $id";

}

$req = $connexion->prepare($query);

$req->execute();

header('Location: ../pages/modifyProductComponent.php?modify=success');

?>