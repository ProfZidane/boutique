<?php

session_start();

include('../config/db.php');

$id = $_GET['id'];

$init = $_SESSION['id'];

$today = date("Y-m-d H:i:s");

$query = "UPDATE commandes SET finalizer='$init',niveau=2,statue='valider',updated_at='$today' WHERE id = $id";

$req = $connexion->prepare($query);

$req->execute();

header('Location: ../pages/waitingOrderComponent.php?modify=success');

?>