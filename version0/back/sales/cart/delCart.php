<?php


if (isset($_GET["del"])) {
    unset($_SESSION['panier'][$_GET["del"]]);
}

header('Location: ../../cart.php');