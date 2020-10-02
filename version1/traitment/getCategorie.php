<?php

include('../config/db.php');

$query = "SELECT * FROM categorie";

$req = $connexion->prepare($query);

$req->execute();

$datas = $req->fetchAll();




?>