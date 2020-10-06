<?php session_start() ?>

<?php if (!empty($_SESSION)) { ?>
    
    <?php  require_once('../pages/includes/top.php') ?>

    <!-- main code -->

    
    <!-- ============ Body content start ============= -->
<div class="main-content">
    <div class="breadcrumb">
        <h1>Créer Des Catégories / Sous-catégories</h1>
            <ul>
                <li><a href="#">Produits</a></li>
                <li>Produits Créer Catégories/Sous-Catégories</li>
            </ul>
    </div>
    <div class="row">
    <div class="col-md-6">
    <?php if (isset($_GET['insertion'])) { ?>
            <?php if ($_GET['insertion'] == "good") { ?>
                <div class="alert alert-success">
                    Création de catégorie réussi !
                </div>
            <?php } else { ?>
                <div class="alert alert-danger">
                    Une erreur s'est produite lors de l'enregistrement !
                </div>
            <?php } ?>
        <?php } ?>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Catégories</div>
                                <form action="../traitment/addCategorie.php" method="POST">
                                    <div class="row">
                                   
                                        <div class="col-md-6 form-group mb-3">
                                            <input class="form-control" name="categorie" id="name" placeholder="Entrer la catégorie" />                                                                                      
                                            </select>
                                        </div>                                                                                                                                                 
                                        <div class="col-md-12">
                                            <button class="btn" type="submit" style="background-color: #FF6833">Valider</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            <div class="col-md-6">

            <?php if (isset($_GET['insertion2'])) { ?>
            <?php if ($_GET['insertion2'] == "good") { ?>
                <div class="alert alert-success">
                    Création de sous-catégorie réussi !
                </div>
            <?php } else { ?>
                <div class="alert alert-danger">
                    Une erreur s'est produite lors de l'enregistrement !
                </div>
            <?php } ?>
        <?php } ?>

            <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Sous-catégories</div>
                                <form action="../traitment/addSousCategorie.php" method="POST">
                                    <div class="row">                                   
                                        <div class="col-md-6 form-group mb-3">
                                            <input class="form-control" name="sous_ctg" id="name" placeholder="Entrer la sous-catégorie" />                                                                                      
                                            </select>
                                        </div>                                                                                                                                                   
                                        <div class="col-md-12">
                                            <button class="btn" type="submit" style="background-color: #FF6833">Valider</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
            </div>
    </div>

    <div class="row">
        <div class="col-md-6">
        <div class="table-responsive">
        <?php if (isset($_GET['delete'])) { ?>
            <?php if ($_GET['delete'] == "success") { ?>
                <div class="alert alert-success">
                    Suppression catégorie réussi !
                </div>
            <?php } else { ?>
                <div class="alert alert-danger">
                    Une erreur s'est produite lors de la suppression !
                </div>
            <?php } ?>
        <?php } ?>
            <h3>Listes des catégories</h3>
                <?php include('../traitment/getCategorie.php');  ?>
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Categorie</th>
                                                <!--<th scope="col">Avatar</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Status</th>-->
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($datas as $value) { ?>
                                            <tr>
                                                <th scope="row"><?= $value['id'] ?></th>
                                                <td><?= $value['categorie'] ?></td>                                                
                                                <td><a class="btn btn-danger mr-2" href="../traitment/deleteCategorie.php?id=<?= $value['id'] ?>"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                            </tr>
                                            <?php }  ?>                                  
                                        </tbody>
                                    </table>
                                </div>
        </div>
        <div class="col-md-6">
        <div class="table-responsive">
        <?php if (isset($_GET['delete2'])) { ?>
            <?php if ($_GET['delete2'] == "success") { ?>
                <div class="alert alert-success">
                    Suppression sous-catégorie réussi !
                </div>
            <?php } else { ?>
                <div class="alert alert-danger">
                    Une erreur s'est produite lors de la suppression !
                </div>
            <?php } ?>
        <?php } ?>
            <h3>Listes des sous-catégories</h3>
            <?php include('../traitment/getSousCategorie.php');  ?>

                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Sous-catégorie</th>                                                
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($datas as $value) { ?>
                                            <tr>
                                                <th scope="row"><?= $value['id'] ?></th>
                                                <td><?= $value['sous_categorie']?></td>                                                
                                                <td><a class="btn btn-danger mr-2" href="../traitment/deleteSousCategorie.php?id=<?= $value['id']; ?>"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                            </tr>
                                            <?php } ?>                                            
                                        </tbody>
                                    </table>
                                </div>
        </div>
    </div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->
</div>








    <!-- end of main -->
    <?php require_once('../pages/includes/bottom.php') ?>

<?php } else { ?>

    <?php require_once('404.php') ?>

<?php } ?>