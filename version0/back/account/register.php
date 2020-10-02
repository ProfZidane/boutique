<?php

include('../config/db.php');

$full_name = $_POST['nom'];
$mail = $_POST['email'];
$tel = $_POST['tel'];
$password = password_hash($_POST['password'],PASSWORD_BCRYPT);


$req = $connexion->prepare("SELECT * FROM client WHERE email='$mail'");
$req->execute();
$verify_mail = $req->fetchAll();

if (count($verify_mail) == 0) {
    # code...
    $query = "INSERT INTO client(name,email,number,mdp) VALUES ('$full_name','$mail','$tel','$password')";

    $request = $connexion->prepare($query);

    $request->execute();



    header("Location: ../../signIn.php?statue=new");

} else {

    header("Location: ../../register.php?statue=mail_existe");
}




