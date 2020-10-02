<?php

include('../config/db.php');

$id = $_POST['id'];

$query = "SELECT * FROM produit WHERE id=$id";

$req = $connexion->prepare($query);

$req->execute();

$datas = $req->fetchAll();

echo json_encode($datas);

?>