<?php include('includes/header.php') ?>

<?php include('includes/banner.php') ?>

<?php include('back/config/db.php') ?>
<?php

if (isset($_GET["del"])) {
    unset($_SESSION['panier'][$_GET["del"]]);
}

?>
<?php  

    $ttc = 0;
    $ids = array_keys($_SESSION['panier']);
    if  (empty($ids)) {
        $products = array();
    } else {
    var_dump($ids);
    $request = $connexion->prepare("SELECT * FROM produits WHERE id IN (".implode(',',$ids).")");
    $request->execute();
    $products = $request->fetchAll();
    }
    //var_dump($products);
    foreach ($products as $value) {
        # code...
        $ttc += intval($value['prix']) * intval($_SESSION['panier'][$value['id']]);
    }
    
?>
<div class="container-fluid bord">
<?php 
   
    if (isset($_GET["moins"])) {
        if ($_SESSION['panier'][$_GET["moins"]] != 0) {
            # code...
            $_SESSION['panier'][$_GET["moins"]] = $_SESSION['panier'][$_GET["moins"]] - 1 ;
        }
        
    }
    if (isset($_GET["plus"])) {        
        $_SESSION['panier'][$_GET["plus"]] = $_SESSION['panier'][$_GET["plus"]] + 1 ;
    }
?>
<div class="container">
        <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Produit</th>
        <th scope="col">Prix</th>
        <th scope="col">Quantité</th>
        <th scope="col">Total</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($products as $value) : ?>
        <tr>
        <th scope="row"><a class="btn btn-danger" href="cart.php?del=<?=$value['id']?>">x</a></th>
        <td><?= $value['img'] ?></td>
        <td><?= $value['name'] ?></td>
        <td><?= $value['prix'] ?></td>
        <td><?= $_SESSION['panier'][$value['id']] ?> <a href="cart.php?moins=<?=$value['id']?>" class="btn btn-light">-</a><a href="cart.php?plus=<?=$value['id']?>" class="btn btn-light">+</a></td>
        <td><?= intval($value['prix']) * intval($_SESSION['panier'][$value['id']])?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
    </table>
    </div>
    <div class="container bord" style="padding: 1rem;">
        <div class="row">
            <div class="col-md-3">
                <h3>Total : </h3>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <h3><?= $ttc ?> FCFA</h3>
            </div>
        </div>
        <div class="row bord">
            <form action="back/sales/validation.php" method="post">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="lvr_radio" id="exampleRadios1" value="livraison" >
            <label class="form-check-label" for="exampleRadios1">
                Livraison
            </label>            
            <input type="text" name="livraison" placeholder="entrer le lieu de livraison" id="liv" style="display: none;">
            </div>            
            <div class="form-check">
            <input class="form-check-input" type="radio" name="pv_radio" id="exampleRadios2" value="point_relais">
            <label class="form-check-label" for="exampleRadios2">
                Point de vente
            </label>            
            </div>
            <button class="btn btn-primary btn-block" type="submit">Valider</button>
            </form>
            
        </div>
    </div>


</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php') ?>