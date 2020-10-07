<?php include('includes/header.php') ?>

<?php include('includes/banner1.php') ?>

<?php include('back/config/db.php') ?>
<?php

if (!isset($_SESSION['panier'])) {
    # code...
    $_SESSION['panier'] = array();
}

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
    //var_dump($ids);
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
<div class="container-fluid">
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
<div class="container-fluid" style="margin-top: 3rem;">
    <div class="row">
        <div class="col-md-8">
            <span>**Vos choix</span>
        <table class="table">
    <thead class="thead-primary">
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
    </div>
        <div class="col-md-4">
        <div class="container " style="padding: 1rem;">
        
        <form action="back/sales/confirm.php" method="post">
            <hr>
        <div class="row">
            <div class="col-md-12" style="padding: 2rem;border:solid 1px #aaa;">
                <h3 style="margin-bottom:3rem">Informations Client</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Nom & Prénoms</label>
                    <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Entrez votre nom et prénoms">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Entrez votre e-mail">
                    </div> 
                </div><br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Numéro Téléphone</label>
                        <input type="text" class="form-control" name="number" id="inputEmail4" placeholder="Entrez votre numéro">
                    </div>                   
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Options Réception</label>

                            <select class="form-control" id="Option" name="optionCmd">
                                <option value="">Choisir une option</option>
                                <option value="Point de vente">Point de vente</option>
                                <option value="Livraison">Livraison</option>
                            </select>         
                        </div>
                </div><br>
                <div class="form-row">
                    <div class="form-group col-md-12" id="liv" style="display: none;">
                        <label for="">Lieu de livraison</label>
                        <input type="text" class="form-control" name="livraison" placeholder="entrer le lieu de livraison"  >
                    </div>
                </div><br>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                    <label class="form-check-label" for="defaultCheck1" style="font-size: small;">
                        J'approuve et valide les éléments du panier en toute conscience.
                    </label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-block" name="submit" style="background-color: orangered;color:white">Valider</button>
                </div>
                
            </div>
            
        </div>
        </div>
    </div>
</div>
    

        </form>

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