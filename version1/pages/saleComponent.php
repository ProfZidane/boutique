<?php session_start() ?>

<?php if (!empty($_SESSION)) { ?>
    
    <?php  require_once('../pages/includes/top.php') ?>

    <!-- main code -->

    
        <!-- ============ Body content start ============= -->
<div class="main-content">
    <div class="breadcrumb">
        <h1>Listes Des Ventes en ligne</h1>
            <ul>
                <li><a href="#">Ventes</a></li>
                <li>Vente en ligne</li>
            </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="col-md-12 mb-4">
                <?php include('../traitment/getSales.php'); ?>
                        <div class="card text-left">
                            <div class="card-body">
                               
                                <div class="table-responsive">
                                    <table class="display table  table-bordered" id="deafult_ordering_table" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                                <th>Numéro Commande</th>
                                                <th>Nom Client</th>
                                                <th>Option</th>
                                                <th>Date Commande</th>                                                
                                                <th>Date Vente</th>    
                                                <th></th>                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data as $value) { ?>
                                            <tr>
                                                <td><?= $value['0'] ?></td>
                                                <td><?= $value['1'] ?></td>
                                                <td><?= $value['2'] ?></td>
                                                <td><?= $value['3'] ?></td>
                                                <td><?= $value['4'] ?></td>
                                                <td><?= $value['5'] ?></td> 
                                                <td><a class="btn btn-warning AboutButton" data-toggle="modal" data-target="#exampleModalDetail" data-num="<?=$value['1']?>">Détails</a></td>                                                                                
                                            </tr>
                                            <?php } ?>                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>#</th>
                                                <th>Numéro Commande</th>
                                                <th>Nom Client</th>
                                                <th>Option</th>
                                                <th>Date Commande</th>                                                
                                                <th>Date Vente</th>    
                                                <th></th>                                            
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>  
        </div>
    </div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->
</div>


<?php include('modals/detailProductModal2.php') ?>                                            

<script src="../public/ajax/detailProduct2.js"></script>                                           



    <!-- end of main -->
    <?php require_once('../pages/includes/bottom.php') ?>

<?php } else { ?>

    <?php require_once('404.php') ?>

<?php } ?>