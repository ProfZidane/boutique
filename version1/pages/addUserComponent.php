<?php session_start() ?>

<?php if (!empty($_SESSION)) { ?>
    
    <?php  require_once('../pages/includes/top.php') ?>

    <!-- main code -->

    
       <!-- ============ Body content start ============= -->
<div class="main-content">
    <div class="breadcrumb">
        <h1>Ajout Des Utilisateurs</h1>
            <ul>
                <li><a href="#">Utilisateurs</a></li>
                <!--<li>Utilisateurs Clients</li>-->
            </ul>
    </div>
    <div class="row">
    <div class="col-md-12">
        <?php if (isset($_GET['insertion'])) { ?>
            <?php if ($_GET['insertion'] == "good") { ?>
                <div class="alert alert-success">
                    Création de compte réussi !
                </div>
            <?php } else if ($_GET['insertion' == "bad"]) { ?>
                <div class="alert alert-danger">
                    Une erreur s'est produite lors de l'enregistrement !
                </div>
            <?php } ?>
        <?php } ?>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Formulaire d'ajout</div>
                                <form action="../traitment/register.php" method="POST">
                                    <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Rôle</label>
                                            <select class="form-control" name="role">
                                                <option></option>
                                                <option value="admin">Administrateur</option>                                                                                        
                                                <option value="vendeur">Vendeur</option>                                                                                        
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="credit1">Nom & Prénoms</label>
                                            <input class="form-control" name="name" id="name" placeholder="Entrer votre nom et prénoms" />                                                                                      
                                            </select>
                                        </div>  
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="credit1">Pseudo</label>
                                            <input class="form-control" name="pseudo" id="name" placeholder="Entrer votre pseudo" />                                                                                      
                                            </select>
                                        </div>                            
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="exampleInputQt">Email</label>
                                            <input class="form-control" name="email" id="exampleInputQt" type="text" min="0" placeholder="Entrer votre adresse email" />
                                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="credit1">Password</label>
                                            <input type="password" class="form-control" name="password" id="name" placeholder="Entrer votre password" />                                                                                      
                                            </select>
                                        </div>  
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="Image">Numéro De Téléphone</label>
                                            <input class="form-control" name="tel" id="image" placeholder="Entrer l'image du produit" />
                                        </div>                                                                               
                                        <div class="col-md-12">
                                            <button class="btn btn-primary" type="submit" name="submit">Valider</button>
                                        </div>
                                    </div>
                                </form>
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