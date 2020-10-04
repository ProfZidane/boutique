<?php  

session_start();

include('../config/db.php');

$num_cmd = $_GET['num'];
//echo $num_cmd;
$query = "SELECT * FROM commander WHERE numCmd ='$num_cmd'";

$request = $connexion->prepare($query);
$request->execute();

$detail = $request->fetchAll();

$data = [];

//print_r($detail);
foreach($detail as $value) {    
    print_r($value);
    echo '<br>';
    $id_produit = $value['idProduit'];
    //echo $id_produit;
    $query2 = "SELECT name,catg,sous_catg,img FROM produits WHERE id='$id_produit'";
    $produit = $connexion->prepare($query2);
    $produit->execute();
    $produits = $produit->fetchAll();
    print_r($produits);
    $prix = $value['prix'];
    $quantite = $value['qte'];
    array_push($data, [$produits['name'],$produits['catg'],$produits['sous_catg'],$produits['img'],$prix,$quantite]);
}

print_r($data);
?>