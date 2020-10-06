<?php

include('../config/db.php');

$query = "SELECT * FROM commandes WHERE niveau=2 AND statue='valider'";

$req = $connexion->prepare($query);

$req->execute();

$datas = $req->fetchAll();

//var_dump($datas);

echo "<br><br>";
$data = []; 

foreach ($datas as $value) {
    # code...    
    $id_client = $value['idClient'];
    $request = $connexion->prepare("SELECT name FROM client WHERE id=$id_client");  
    $request->execute();
    $client = $request->fetchAll();
    //print_r($value['id']);
    array_push($data, [$value['id'],$value["numCmd"],$client[0]['name'],$value['optionCmd'],$value['created_at'],$value['updated_at'] ]);
}



?>