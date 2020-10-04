<?php
    session_start();

    include('../config/db.php');

    $optionCmd = "";
    $lieuCmd = "";
    $idElt = "";
    if (isset($_POST['lvr_radio'])) {
        # code...
        $optionCmd =  $_POST['lvr_radio'];
        $lieuCmd = $_POST['livraison'];

    } else if (isset($_POST['pv_radio'])) {

        $optionCmd =  $_POST['pv_radio'];
    }

    $idClient = $_SESSION['id'];
    $numCmd =  generateCodeCmd();
    $qte = "";
    $test = $_SESSION['panier'];
    $test_id_produit = array_keys($test);

    for ($i=0; $i < count($test_id_produit); $i++) { 
        # code...        
        echo $test_id_produit[$i];
        echo "<br>";
        echo $_SESSION['panier'][$test_id_produit[$i]];
        echo "<br>";
        $qte = $_SESSION['panier'][$test_id_produit[$i]];
        $query0 = "SELECT prix FROM produits WHERE id = $test_id_produit[$i]";
        $product = $connexion->prepare($query0);
        $product->execute();
        $products = $product->fetchAll();
        //print_r($products[0]["prix"]);
        $prix = $products[0]["prix"];
        $query1 = $connexion->prepare("INSERT INTO commander(numCmd,idProduit,qte,prix) VALUES('$numCmd','$test_id_produit[$i]','$qte','$prix')");
        $query1->execute();
    }
    /*
    foreach($test_id_produit as $value) {
        $idElt .= $value . ",";
    }

    foreach($test_id_produit as $value) {     
       $qte .= $_SESSION["panier"][$value] . ",";       
    }*/
    //echo $qte;

  
    $query = "INSERT INTO commandes(numCmd,idClient,optionCmd,lieuCmd,niveau,created_at) VALUES('$numCmd','$idClient','$optionCmd','$lieuCmd',0,NULL)";
    $req = $connexion->prepare($query);
    $req->execute();
    echo "insertion de commandes reussis !";
    $_SESSION['panier'] = array();
    header("Location: ../../success.php?numcmd=".$numCmd);
    


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

?>