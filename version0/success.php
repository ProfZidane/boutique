<?php session_start() ?>
<h1>Félicitation !</h1>
<p><?= $_SESSION['nom'] ?></p>
<p>Votre commande n° <?= $_GET['numcmd'] ?> est bien receptionner et vous sera livrez dans les prochaines 48heures !</p>
<p><a href="index.php">Accueil </a></p>