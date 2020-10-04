<?php

include('../config/db.php');

$query = "SELECT * FROM produits";

$req = $connexion->prepare($query);

$req->execute();

$datas = $req->fetchAll();



?>