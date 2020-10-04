<?php session_start() ?>

<?php if (!empty($_SESSION)) { ?>
    
    <?php  require_once('../pages/includes/top.php') ?>

    <!-- main code -->

    
        <!-- ============ Body content start ============= -->
<div class="main-content">
    <div class="breadcrumb">
        <h1>Modifier les produits</h1>
            <ul>
                <li><a href="#">Produits</a></li>
                <li>Modifier Produits</li>
            </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
        <?php if (isset($_GET['modify'])) { ?>
            <?php if ($_GET['modify'] == "success") { ?>
                <div class="alert alert-success">
                   Modification réussi !
                </div>
            <?php } else { ?>
                <div class="alert alert-danger">
                    Une erreur s'est produite lors de la modification !
                </div>
            <?php } ?>
        <?php } ?>
        <?php if (isset($_GET['delete'])) { ?>
            <?php if ($_GET['delete'] == "success") { ?>
                <div class="alert alert-success">
                    Suppression produit réussi !
                </div>
            <?php } else { ?>
                <div class="alert alert-danger">
                    Une erreur s'est produite lors de la suppression !
                </div>
            <?php } ?>
        <?php } ?>
        <div class="card-body">
                               <?php include('../traitment/getProduct.php') ?>
                                <div class="table-responsive">
                                    <table class="display table  table-bordered" id="deafult_ordering_table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom</th>
                                                <th>Catégorie</th>
                                                <th>Sous-Catégorie</th>
                                                <th>Prix</th>
                                                <th>Description</th>
                                                <th>Quantité</th>
                                                <th>Image</th>
                                                <th>Date d'Ajout</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($datas as $value ) { ?>
                                            <tr>
                                                <td><?= $value['id']?></td>
                                                <td><?= $value['name']?></td>
                                                <td><?= $value['catg']?></td>
                                                <td><?= $value['sous_catg']?></td>
                                                <td><?= $value['prix']?></td>
                                                <td><?= $value['description']?></td>
                                                <td><?= $value['qte']?></td>
                                                <td><img src="" width="100%" alt=""></td>
                                                <td><?= $value['created_at']?></td>
                                                <td><a  id="" data-id="<?= $value['id'] ?>" data-toggle="modal" data-target="#exampleModalModify" class="btn btn-warning modifyButton">Modifier</a></td>
                                                <td><a href="../traitment/deleteProduct.php?id=<?= $value['id'] ?>"  class="btn btn-danger">Supprimer</a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom</th>
                                                <th>Catégorie</th>
                                                <th>Sous-Catégorie</th>
                                                <th>Prix</th>
                                                <th>Description</th>
                                                <th>Quantité</th>
                                                <th>Image</th>
                                                <th>Date d'Ajout</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
        </div>
    </div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->
</div>

    <?php require_once('modals/modifyProductModal.php')?>

    <script src="../public/ajax/updateProduct.js"></script>

    <!-- end of main -->
    <?php require_once('../pages/includes/bottom.php') ?>

<?php } else { ?>

    <?php require_once('404.php') ?>

<?php } ?>