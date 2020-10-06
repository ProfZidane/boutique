<?php

include('back/config/db.php');

$catg = $_GET['catg'];

if (isset($_GET["submit2"])) {
    # code...
    echo $catg;

    $query = "SELECT * FROM produits WHERE catg = '$catg'";
$request = $connexion->prepare($query);
$request->execute();
$data = $request->fetchAll();

print_r($data);



}