<?php

    include('../config/db.php');

    $nom = $_POST["name"];

    $pseudo = $_POST['pseudo'];

    $email = $_POST["email"];

    $tel = $_POST['tel'];

    $role = $_POST['role'];

    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

    $query = "INSERT INTO user(nom,pseudo,email,tel,role,passwordU) VALUES ('$nom','$pseudo','$email','$tel','$role','$password')";

    $req = $connexion->prepare($query);

    $req->execute();

    header('Location: ../pages/addUserComponent.php?insertion=good');



?>