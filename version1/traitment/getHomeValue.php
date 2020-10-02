<?php

include('../config/db.php');

$query = "SELECT * FROM user";
$query1 = "SELECT * FROM commande WHERE niveau=0 OR niveau=1";
$query2 = "SELECT * FROM commande WHERE niveau=2 AND statue='valider'";

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

foreach ($datas2 as $value) {
    # code...
    $id_produit = $value['idProduit'];
    $request2 = $connexion->prepare("SELECT prix FROM produit WHERE id=$id_produit");
    $request2->execute();
    $prix_produit = $request2->fetchAll();

    $price = $price + (intval($prix_produit[0][0]) * intval($value['qte']));
}



?>