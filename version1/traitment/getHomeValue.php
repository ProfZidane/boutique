<?php

include('../config/db.php');

$query = "SELECT * FROM user";
$query1 = "SELECT * FROM commandes WHERE niveau=0 OR niveau=1";
$query2 = "SELECT * FROM commandes WHERE niveau=2 AND statue='valider'";

$req = $connexion->prepare($query);
$req1 = $connexion->prepare($query1);
$req2 = $connexion->prepare($query2);

$req->execute();
$req1->execute();
$req2->execute();


$datas = $req->fetchAll();
$datas1 = $req1->fetchAll();
$datas2 = $req2->fetchAll();


$count_datas = count($datas);
$count_datas1 = count($datas1);
$price = 0;

//print_r($datas2);


foreach ($datas2 as $value) {
    # code...
    $numCmd = $value['numCmd'];
    $request2 = $connexion->prepare("SELECT prix,qte FROM commander WHERE numCmd='$numCmd'");
    $request2->execute();
    $prix_produit = $request2->fetchAll();
    foreach($prix_produit as $produit) {
        $price += intval($produit['prix'] * $produit['qte']);
    }
    //echo $prix_produit['prix'] . " " . $prix_produit['qte'];
    //$price = $price + (intval($prix_produit[0][0]) * intval($value['qte']));
}



?>