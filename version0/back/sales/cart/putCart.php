<?php
session_start();

include('../../config/db.php');

$id = $_POST['id'];

if (!isset($_SESSION['panier'])) {
    # code...
    $_SESSION['panier'] = array();
}

$request = $connexion->prepare("SELECT * FROM produits WHERE id = '$id'");
$request->execute();
$product = $request->fetchAll();

if(!empty($product)) {    
    if (isset($_SESSION['panier'][$product[0]['id']])) {
        $_SESSION['panier'][$product[0]['id']]++;
    } else {
        $_SESSION['panier'][$product[0]['id']] = 1;        
    }
    
}

$count = count($_SESSION['panier']);
echo json_encode($count);






