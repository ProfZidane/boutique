<?php session_start() ?>

<?php if (!empty($_SESSION)) { ?>
    
    <?php  require_once('../pages/includes/top.php') ?>

    <!-- main code -->

    <?php include('../traitment/getHomeValue.php'); ?>
        <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1 class="mr-2">Tableau de bord </h1>
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li>Version 1</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <!-- ICON BG-->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Membres</p>
                                    <p class=" text-24 line-height-1 mb-2" style="color: #FF6833"><?= $count_datas ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Financial"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Ventes</p>
                                    <p class="text-24 line-height-1 mb-2" style="width:200%;color: #FF6833"><?= $price ?> <span style="font-size: small;">FCFA</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Checkout-Basket"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Commandes</p>
                                    <p class="text-24 line-height-1 mb-2" style="color: #FF6833"><?= $count_datas1 ?></p>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
                
                <div>
                   
                    
                </div><!-- end of main-content -->
            </div><!-- Footer Start -->





    <!-- end of main -->
    <?php require_once('../pages/includes/bottom.php') ?>

<?php } else { ?>

    <?php require_once('404.php') ?>

<?php } ?>