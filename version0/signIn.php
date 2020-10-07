<?php include('includes/header1.php') ?>



<div class="container-fluid myDIv">
    <div class="row bord myDIv">
        <?php if (isset($_GET['statue'])) { ?>
            <?php if ($_GET['statue'] == "new") { ?>
                <div class="alert alert-warning">
                    Veuillez vous connectez avec vos nouveaux idendifiants !
                </div>
            <?php } else if ($_GET['statue'] == "mdp_false") { ?>
                <div class="alert alert-danger">
                    Votre mot de passe est faux !
                </div>
            <?php } else if ($_GET['statue'] == "mail_false") { ?>
                <div class="alert alert-danger">
                    Votre email n'existe pas chez nous !
                </div>
            <?php } ?>
        <?php } ?>

        <div class="col-md-7 bord">
            i_mg
        </div>
        <div class="col-md-5 bord" style="padding: 4rem;">
                <h2 style="color:orangered;text-align:center;padding:1rem">
                    CONNEXION
                </h2>

                <div class="container bord" style="padding: 2rem;">
                    <form action="back/account/signIn.php" method="POST">               
                        <div class="form-group">
                            <label for="exampleInputEmail1">Adresse E-mail</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre adresse email">
                        </div>               
                        <br>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mot De Passe</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
                        </div>             
                        <button type="submit" name="submit" class="btn btn-block text-light" style="background-color: orangered;margin-top:2rem">Envoyer</button>
                    </form>
                </div>
                <!--<form action="back/account/signIn.php" method="POST">               
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adresse E-mail</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre adresse email">
                    </div>               
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot De Passe</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
                    </div>             
                    <button type="submit" name="submit" class="btn btn-block text-light" style="background-color: orangered;margin-top:2rem">Envoyer</button>
                </form>-->
        </div>
        <!--<div class="container  login-contain">            
            <h2 style="color:orangered;text-align:center;padding:1rem">CONNEXION</h2>
            <form action="back/account/signIn.php" method="POST">               
                <div class="form-group">
                    <label for="exampleInputEmail1">Adresse E-mail</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre adresse email">
                </div>               
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot De Passe</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
                </div>             
                <button type="submit" name="submit" class="btn btn-block text-light" style="background-color: orangered;margin-top:2rem">Envoyer</button>
            </form>
        </div>  -->
       
    </div>
</div>




<?php include('includes/footer.php') ?>