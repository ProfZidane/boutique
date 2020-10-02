<?php session_start() ?>

<?php if (!empty($_SESSION)) { ?>
    
    <?php  require_once('../pages/includes/top.php') ?>

    <!-- main code -->

     <!-- ============ Body content start ============= -->
 <div class="main-content">
                <div class="breadcrumb">
                    <h1>Ajouter les produits</h1>
                    <ul>
                        <li><a href="#">Produits</a></li>
                        <li>Ajouter Produits</li>
                    </ul>
                </div>                
                <div class="separator-breadcrumb border-top"></div><!-- end of main-content -->


                <div class="row">
                <div class="col-md-12">
                <?php if (isset($_GET['insertion'])) { ?>
                    <?php if ($_GET['insertion'] == "good") { ?>
                        <div class="alert alert-success">
                            Produit enregistré avec succès !
                        </div>
                    <?php } else { ?>
                        <div class="alert alert-danger">
                            Une erreur s'est produite lors de l'enregistrement !
                        </div>
                    <?php } ?>
                <?php } else if (isset($_GET['image'])) { ?>
                    <?php if ($_GET['image'] == "existe") { ?>
                        <div class="alert alert-warning">
                            Votre image existe déjà dans notre base ! (Veuillez la changer)
                        </div>
                    <?php } ?>
                <?php } ?>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Formulaire d'ajout</div>
                                <form action="../traitment/addProduct.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                            <label for="exampleInputName">Nom du produit</label>
                                            <input class="form-control" name="nom_produit" id="exampleInputName" type="text" placeholder="Entrer le nom du produit" />
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <?php include('../traitment/getCategorie.php');  ?>
                                            <label for="picker1">Catégorie</label>
                                            <select class="form-control" name="categorie">
                                                <option value=""></option>
                                                <?php foreach($datas as $valu) { ?>
                                                <option value="<?= $valu['categorie'] ?>"><?= $valu['categorie'] ?></option>                                                                                        
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                        <?php include('../traitment/getSousCategorie.php');  ?>
                                            <label for="picker1">Sous-Catégorie</label>
                                            <select class="form-control" name="sous_categorie">
                                                <option></option>
                                                <?php foreach($datas as $value) { ?>
                                                <option value="<?= $value['sous_categorie'] ?>"><?= $value['sous_categorie'] ?></option> 
                                                <?php } ?>                                                                                       
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="exampleInputQt">Quantité</label>
                                            <input class="form-control" id="exampleInputQt" type="number" name="quantite" min="0" placeholder="Entrer la quantité du produit" />
                                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="exampleInputQt">Description</label>
                                            <textarea class="form-control" id="exampleInputQt" type="text" name="description" placeholder="Entrer la description du produit"></textarea>
                                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="Image">Image</label>
                                            <input class="form-control" type="file" name="image" id="image" placeholder="Entrer l'image du produit" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="credit1">Prix</label>
                                            <input class="form-control" name="prix" id="credit1" placeholder="Entrer le prix du produit" />
                                        </div>
                                        <!--<div class="col-md-6 form-group mb-3">
                                            <label for="website">Website</label>
                                            <input class="form-control" id="website" placeholder="Web address" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker2">Birth date</label>
                                            <input class="form-control" id="picker2" placeholder="yyyy-mm-dd" name="dp" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Select</label>
                                            <select class="form-control">
                                                <option>Option 1</option>
                                                <option>Option 1</option>
                                                <option>Option 1</option>
                                            </select>
                                        </div>-->
                                        <div class="col-md-12">
                                            <button class="btn btn-primary" type="submit" name="submit">Valider</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Footer Start -->


    <!-- end of main -->
    <?php require_once('../pages/includes/bottom.php') ?>

<?php } else { ?>

    <?php require_once('404.php') ?>

<?php } ?>