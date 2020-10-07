

<?php include_once("includes/header1.php") ?>

<div class="container-fluid" align="center">
    <div class="container bord" style="width: 30%;padding:3rem;border-color:#000;border-radius:20%;border-width:1px;transform:translateY(30%)">
        <h2 style="color: orange">Félicitation !</h2>
        <br>
        <p><strong><?= strtoupper($_GET['client']) ?></strong>, votre commande n° <strong><?= $_GET['numcmd'] ?></strong> est bien receptionner et vous sera livrez dans les prochaines 48heures !</p>
        <br><br>
        <p><a class="btn btn-lg" style="background-color: orangered;color:white" href="index.php">Accueil </a></p>        
    </div>
</div>
