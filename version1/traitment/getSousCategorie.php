<?php

include('../config/db.php');

$query = "SELECT * FROM sous_categorie";

$req = $connexion->prepare($query);

$req->execute();

$datas = $req->fetchAll();




?>