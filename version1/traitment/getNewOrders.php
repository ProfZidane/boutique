<?php

include('../config/db.php');

$query = "SELECT * FROM commandes WHERE niveau=0";

$req = $connexion->prepare($query);

$req->execute();

$datas = $req->fetchAll();

//var_dump($datas);

echo "<br><br>";
$data = []; 
//echo count($datas);
foreach ($datas as $value) {
    # code...    
    $id_client = $value['idClient'];
    $request = $connexion->prepare("SELECT name FROM client WHERE id=$id_client");  
    $request->execute();
    $client = $request->fetchAll();
    //print_r($value['id']);
    array_push($data, [$value['id'],$value["numCmd"],$client[0]['name'],$value['optionCmd'],$value['created_at'] ]);
  //  echo count($value);
    
   /* $id_client = $value['idClient'];
    $request = $connexion->prepare("SELECT name FROM client WHERE id=$id_client");
    $request->execute();
    $nom_client = $request->fetchAll();

    $id_produit = $value['idElt'];
    $t0 = "";
    //echo $id_produit;
    echo "<br>";
    $t = explode(",",$id_produit);
    //$t2 = implode(",",$t);
   // echo count($t);
    echo '<br>';
    if (count($t) == 2) {
        $final_prod = $t[0];
        echo $final_prod;
        $request2 = $connexion->prepare("SELECT name FROM produits WHERE id = $final_prod");
        $request2->execute();
        $nom_produit = $request2->fetchAll();
        print_r($nom_produit);
        echo "<br>";

    } else {

        for ($i =0; $i < count($t); $i++) {
            $t0 .= $t[$i];
            if (!empty($t[$i+1])) {
                # code...
                $t0 .= ",";
            }
        }
        echo "$t0";
        echo '<br>';
        $final_prod = "(".$t0.")";
        echo "final : " . $final_prod;
        $request2 = $connexion->prepare("SELECT name FROM produits WHERE id IN $final_prod");
        $request2->execute();
        $nom_produit = $request2->fetchAll();
        print_r($nom_produit);

        echo "<br>";
    }
    
    
    

   /* $request2 = $connexion->prepare("SELECT name FROM produits WHERE id IN (".implode(',',$t).")");*/
    
    
    /*print_r($nom_client);
    echo '<br>';
   print_r($nom_produit);*/
    /*array_push($data, [$value['id'],$nom_produit[0][0],$nom_client[0][0],$value['qte'],$value['optionPay'],$value['created_at'] ]);
*/
}
//print_r($data);

function separate($a) {
    foreach($a as $value) {
        echo $value;
        echo '<br>';
    }
}



?>