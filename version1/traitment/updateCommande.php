<?php

session_start();

include('../config/db.php');

$id = $_GET['id'];
$init = $_SESSION['id'];

$query = "UPDATE commande SET initiator='$init',niveau=1,statue='en attente' WHERE id = $id";

$req = $connexion->prepare($query);

$req->execute();

header('Location: ../pages/newCommandeComponent.php?modify=success');


?>