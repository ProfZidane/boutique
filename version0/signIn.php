<?php include('includes/header.php') ?>

<?php include('includes/banner.php') ?>


<div class="container-fluid bord">
    <div class="row">
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

        <div class="col-md-6 bord">            
            <h2>CONNEXION</h2>
            <form action="back/account/signIn.php" method="POST">               
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enteer email">
                </div>               
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>             
                <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>  
        <div class="col-md-6 bord">
            <h2>CONNEXION</h2>
        </div>
    </div>
</div>




<?php include('includes/footer.php') ?>