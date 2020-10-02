<?php

include('config/db.php');

$query2 = "SELECT * FROM panier";

$req2 = $connexion->prepare($query2);

$req2->execute();

$data = $req2->fetchAll();
$a = [];
//print_r($data);
foreach ($data as $value) {
    echo($value['idProduit']);
    if (strlen($value['idProduit']) != 1) {
       # code...
       array_push($a,explode(',',$value['idProduit']));
    }
    
    # code...
}

print_r($a);
//echo $a[1];
//print_r($a);
//$data = $req->fetchAll();

