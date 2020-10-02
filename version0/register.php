<?php include('includes/header.php') ?>

<?php include('includes/banner.php') ?>


<div class="container-fluid bord">
    <div class="row">
    <?php if (isset($_GET['statue'])) { ?>
            <?php if ($_GET['statue'] == "mail_existe") { ?>
                <div class="alert alert-warning">
                    Votre email existe chez nous !
                </div>
            <?php }?>                
        <?php } ?>
        <div class="col-md-6 bord">            
            <h2>INSCRIPTION</h2>
            <form action="back/account/register.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom & Prénoms</label>
                    <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre nom et prénom">                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enteer email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Numéro</label>
                    <input type="text" class="form-control" name="tel" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer numéro">
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