<?php include('includes/header.php') ?>

<?php include('includes/banner.php') ?>

<?php include("back/product/getCatg.php") ?>
<?php 
    if (isset($_GET['submit2'])) {
        # code...
        $c = $_GET["catg"];
        $query2 = $connexion->prepare("SELECT * FROM produits WHERE catg = '$c' ");
        $query2->execute();
        $data = $query2->fetchAll();

    } else if (isset($_GET["submit3"])) {
        $p = $_GET["price"];
        $p = intval($p);
        $query3 = $connexion->prepare("SELECT * FROM produits WHERE prix BETWEEN 0 AND $p");
        $query3->execute();
        $data = $query3->fetchAll();

    } else {
?>
    <?php include('back/product/getProduct.php') ?>

<?php } ?>
<link rel="stylesheet" href="css/range.css">
<div class="container-fluid bord">
    <div class="row" style="padding: 2rem;">
        <div class="col-md-3 bord">
            <div class="row " style="padding:2rem">   
                  
            <form action="" method="get">
            <h3>MARQUE</h3> 
                <?php foreach($categories as $ctg) { ?>
                    <div class="form-check">
                        <input class="form-check-input" name="catg" type="checkbox" value="<?= $ctg["categorie"] ?>" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            <?= $ctg['categorie'] ?>
                        </label>
                    </div>
                <?php } ?>
                <br>
                        <button class="btn btn-info" type="submit" name="submit2">OK</button>
                    </form>
            </div>
            <div class="row bord" style="padding:2rem">
            <form action="" method="get">
            <h3>PRIX</h3> 
            <div class="slidecontainer">
            <input type="range" min="1" max="1000000" value="50" class="slider" id="myRange" name="price">
            <p>Value: <span id="demo"></span></p>
            </div>
                <br>
                        <button class="btn btn-info" type="submit" name="submit3">OK</button>
                    </form>
            </div>
            
        </div>
        <div class="col-md-9 bord">
            
            <div class="row">
        <?php if (count($data) != 0) { ?>
            <?php foreach($data as $value) { ?>
                <div class="col-md-4">
                    <div class="card " style="width: 18rem;">
                        <img src="../version1/public/storage/<?=$value['img']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$value['name']?></h5>
                            <p class="card-text"><?=$value['description']?>.</p>
                            <a class="btn btn-primary putInCart" id="<?= $value['id']?>">Acheter</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
        <?php } else { ?>
                <p>aucune donnée trouvée </p>
        <?php } ?>
            </div>            
        </div>
    </div>
</div>

<script src="back/js/range.js"></script>


<?php include('includes/footer.php') ?>