<?php

include('back/config/db.php');

$price = $_GET['prics'];

$query = "SELECT * FROM produits WHERE prix = $price";

$req = $connexion->prepare($query);

$req->execute();


$data = $req->fetchAll();

