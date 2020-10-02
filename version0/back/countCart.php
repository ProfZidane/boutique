<?php

include('config/db.php');

$query2 = "SELECT * FROM panier";

$req2 = $connexion->prepare($query2);

$req2->execute();

$data = $req2->fetchAll();

$data = count($data);
 

//$data = $req->fetchAll();

