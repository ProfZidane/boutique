<?php
session_start();

include('../config/db.php');

$mail = $_POST['email'];
$password = $_POST['password'];

$query0 = "SELECT * FROM client WHERE email = '$mail'";
$request0 = $connexion->prepare($query0);
$request0->execute();
$user_with_email = $request0->fetchAll();

if (count($user_with_email) == 1) {
    # code...
    //echo $user_with_email[0]["mdp"];
    //echo $password;
    
    if (password_verify($password,$user_with_email[0]["mdp"])) {
        # code...
        $_SESSION['id'] = $user_with_email[0]['id'];
        $_SESSION['nom'] = $user_with_email[0]['name'];
        $_SESSION['email'] = $user_with_email[0]['email'];

        header('Location: ../../index.php?connexion=success');
    } else {

        header('Location: ../../signIn.php?statue=mdp_false');
    }
} else {

    header('Location: ../../signIn.php?statue=mail_false');
    
}

