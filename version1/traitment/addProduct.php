<?php

    include('../config/db.php');

   $product_name = $_POST['nom_produit'];
   $catg = $_POST['categorie'];
   $sous_catg = $_POST['sous_categorie'];
   $price = $_POST['prix'];
   $description = $_POST['description'];
   $quantity = $_POST['quantite'];
   $image = $_FILES['image']['name'];

   $file = '../public/storage/product/'.$_FILES['image']['name']; // way to access the file

   
   if(file_exists("../public/storage/product/" . $_FILES["image"]["name"])){
        
        header('Location: ../pages/addProductComponent.php?image=existe');   

   } else {
      
        move_uploaded_file($_FILES["image"]["tmp_name"], "../public/storage/product/" . $_FILES["image"]["name"]);
    
       $query = "INSERT INTO produits(name,catg,sous_catg,prix,description,qte,img,created_at) VALUES ('$product_name','$catg','$sous_catg','$price','$description','$quantity','$image',NULL)";

        $req = $connexion->prepare($query);

        $req->execute();

        header('Location: ../pages/addProductComponent.php?insertion=good');
   }

  

?>