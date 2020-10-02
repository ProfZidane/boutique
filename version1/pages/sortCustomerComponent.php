<?php session_start() ?>

<?php if (!empty($_SESSION)) { ?>
    
    <?php  require_once('../pages/includes/top.php') ?>

    <!-- main code -->
    
    <!-- ============ Body content start ============= -->
<div class="main-content">
    <div class="breadcrumb">
        <h1>Statistiques Des Clients</h1>
            <ul>
                <li><a href="#">Statistiques</a></li>
                <li>Statistiques Clients</li>
            </ul>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="card-title">Six Month Sales</div>
            <canvas id="DynamicsChart"></canvas>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                        <div class="card-title mb-1">Choisir le type de graphe</div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios"  id="bar" value="bar">
                            <label class="form-check-label" for="exampleRadios1">
                                En batôn
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="line" value="bar">
                            <label class="form-check-label" for="exampleRadios2">
                                En ligne
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="donut" value="bar">
                            <label class="form-check-label" for="exampleRadios2">
                                Circulaire
                            </label>
                        </div>                      
                        <br>
                        <div class="card-title mb-1">Choisir donnée en ordonnée</div>
                        <div class="ul-widget-app__header mb-4">
                            <select class="form-control">
                                <option></option>
                                <option>Canal</option>                                                                                        
                                <option>EasyTv</option>                                                                                        
                            </select>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                                <label for="credit1">Prix</label>
                                <input class="form-control" id="credit1" placeholder="Entrer le prix du produit" />
                        </div>
                        <div class="col-md-12 form-group mb-3">
                                <label for="credit1">Prix</label>
                                <input class="form-control" id="credit1" placeholder="Entrer le prix du produit" />
                        </div>
                        <!--<label class="radio radio-primary">
                            <input type="radio" name="radio" value="0" /><span class="font-weight-700">C 1 Hour</span><span class="checkmark" checked="checked"></span>
                        </label>-->
                        <div class="mt-5">
                            <button class="btn btn-primary m-1" id="ValidationButton" type="button">Valider</button>
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