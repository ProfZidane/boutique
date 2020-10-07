<?php

session_start();

include('../config/db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$num = $_POST['number'];
$optionCmd = $_POST['optionCmd'];
$lieuCmd = $_POST['livraison'];
$numCmd =  generateCodeCmd();

// register in client table 
$query = "INSERT INTO client(name,email,number) VALUES ('$name','$email','$num')";
$request = $connexion->prepare($query);
$request->execute();


// register in commander table
$qte = "";
$panier = $_SESSION['panier'];
$key_panier = array_keys($panier);

for ($i=0; $i < count($key_panier); $i++) { 
    # code...
    $qte = $_SESSION['panier'][$key_panier[$i]];
    $query1 = "SELECT prix FROM produits WHERE id = $key_panier[$i]";
    $prod = $connexion->prepare($query1);
    $prod->execute();
    $products = $prod->fetchAll();

    $prix = $products[0]["prix"];

    $query2 = "INSERT INTO commander(numCmd,idProduit,qte,prix) VALUES ('$numCmd','$key_panier[$i]','$qte','$prix')";
    $request1 = $connexion->prepare($query2);
    $request1->execute();
}

// register in commande table
$query3 = "INSERT INTO commandes(numCmd,optionCmd,lieuCmd,niveau,created_at) VALUES ('$numCmd','$optionCmd','$lieuCmd',0,NULL)" ;
$request2 = $connexion->prepare($query3);
$request2->execute();
$_SESSION['panier'] = array();

header("Location: ../../success.php?client=".$name."&numcmd=".$numCmd);





function generateCodeCmd() {
    $tab_letter = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $tab_number = ['1','2','3','4','5','6','7','8','9'];
    $tab_caractere = ['#',"@","&","!"];
    $code = "";

    # code...
    $aleatoire0 = rand(0,count($tab_letter)-1);
    $aleatoire1 = rand(0,count($tab_number)-1);
    $aleatoire2 = rand(0,count($tab_caractere)-1);
    $code.= date("Y")."-"; 
    $code.= strtoupper($tab_letter[$aleatoire0]);
    $code.= $tab_number[$aleatoire1];
    $code.=$tab_caractere[$aleatoire2];
    
    return $code;
}