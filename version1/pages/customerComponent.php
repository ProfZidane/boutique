<?php session_start() ?>

<?php if (!empty($_SESSION)) { ?>
    
    <?php  require_once('../pages/includes/top.php') ?>

    <!-- main code -->

    
      <!-- ============ Body content start ============= -->
<div class="main-content">
    <div class="breadcrumb">
        <h1>Listes Des Clients</h1>
            <ul>
                <li><a href="#">Client</a></li>
                <!--<li></li>-->
            </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="col-md-12 mb-4">
                <?php include('../traitment/getCustomers.php'); ?>
                        <div class="card text-left">
                            <div class="card-body">
                               
                                <div class="table-responsive">
                                    <table class="display table  table-bordered" id="deafult_ordering_table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom & Prénoms</th>
                                                <th>Ville</th>
                                                <th>Commune ou Quartier</th>
                                                <th>Numéro Téléphone</th>
                                                <th>Adresse Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($datas as $value) { ?>
                                            <tr>
                                                <td><?= $value['id'] ?></td>
                                                <td><?= $value['nom'] ?></td>
                                                <td><?= $value['ville'] ?></td>
                                                <td><?= $value['location'] ?></td>
                                                <td><?= $value['numero'] ?></td>
                                                <td><?= $value['email'] ?></td>
                                            </tr>                    
                                            <?php } ?>                        
                                        </tbody>
                                        <tfoot>
                                                <th></th>
                                                <th>Nom & Prénoms</th>
                                                <th>Ville</th>
                                                <th>Commune ou Quartier</th>
                                                <th>Numéro Téléphone</th>
                                                <th>Adresse Email</th>
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







    <!-- end of main -->
    <?php require_once('../pages/includes/bottom.php') ?>

<?php } else { ?>

    <?php require_once('404.php') ?>

<?php } ?>