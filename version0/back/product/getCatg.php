<?php

include('back/config/db.php');


$query = "SELECT * FROM categorie";

$req = $connexion->prepare($query);

$req->execute();


$categories = $req->fetchAll();

