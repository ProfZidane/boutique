<?php

include('../config/db.php');

$query = "SELECT * FROM commande WHERE niveau=2 AND statue='valider'";

$req = $connexion->prepare($query);

$req->execute();

$datas = $req->fetchAll();

//var_dump($datas);

echo "<br><br>";
$data = []; 

foreach ($datas as $value) {
    # code...    
    //print_r($value);
    $id_client = $value['idClient'];
    $request = $connexion->prepare("SELECT nom FROM client WHERE id=$id_client");
    $request->execute();
    $nom_client = $request->fetchAll();

    $id_produit = $value['idProduit'];
    $request2 = $connexion->prepare("SELECT nom,prix FROM produit WHERE id=$id_produit");
    $request2->execute();
    $nom_produit = $request2->fetchAll();
    
    $price = intval($nom_produit[0][1]) * intval($value['qte']);
    array_push($data, [$value['id'],$nom_produit[0][0],$nom_client[0][0],$value['qte'],$value['optionPay'],$value['update_at'],$price ]);

}



?>