<?php

include('../config/db.php');

$query = "SELECT * FROM produit";

$req = $connexion->prepare($query);

$req->execute();

$datas = $req->fetchAll();



?>