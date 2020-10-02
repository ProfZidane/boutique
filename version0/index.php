<?php include('includes/header.php') ?>

<?php include('includes/banner.php') ?>


<div class="container-fluid bord">
    <div class="row" style="padding: 2rem;">
        <div class="col-md-3 bord">
            <div class="row bord">                           
                <div class="row">                
                    <ul>
                        <li>DECODEURS</li>
                        <li>EasyTv</li>
                    </ul>
                </div>
            </div>
            <div class="row bord">
                <h2>EQUIPEMENTS RESEAUX</h2>
                <br>
                <ul>
                    <li>Pylône</li>
                </ul>
            </div>
        </div>
<?php include('back/product/getProduct.php') ?>
        <div class="col-md-9 bord">
            
            <div class="row">
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
            </div>            
        </div>
    </div>
</div>




<?php include('includes/footer.php') ?>