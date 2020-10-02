<?php

    include('../config/db.php');

    $username = $_POST['pseudo'];

    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE pseudo='$username'";

    $req = $connexion->prepare($query);

    $req->execute();

    $datas = $req->fetchAll();

    if (!empty($datas)) {

        foreach($datas as $value) {
        
            if (password_verify($password,$value['passwordU'])) {
    
                session_start();                        
                $_SESSION['id'] = $value['id'];
                $_SESSION['nom'] = $value['nom'];
                $_SESSION['pseudo'] = $value['pseudo'];
                $_SESSION['role'] = $value['role'];
                header("Location: ../pages/home.php");
    
            } else {

                header("Location: ../index.php?err=Votre mot de passe est faux !");
            }
    
           
        }

    } else {

        header("Location: ../index.php?err=Votre pseudo est faux !");

    }
    




?>