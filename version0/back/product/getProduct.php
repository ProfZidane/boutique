<?php

include('back/config/db.php');

$query = "SELECT * FROM produits";

$req = $connexion->prepare($query);

$req->execute();


$data = $req->fetchAll();

