<?php

include('../config/db.php');

$query = "SELECT * FROM client";

$req = $connexion->prepare($query);

$req->execute();

$datas = $req->fetchAll();



?>