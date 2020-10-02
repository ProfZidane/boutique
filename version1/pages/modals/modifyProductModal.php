<!--  Modal -->
<div class="modal fade" id="exampleModalModify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modification</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">                              
                                <div class="col-md-12">
                                    <form action="../traitment/modifyProduct.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                                <label for="exampleInputQt">Nom Produit</label>
                                                <input class="form-control" id="product_nameModal" type="text" name="nom_produit" />
                                                <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <?php include('../traitment/getCategorie.php');  ?>
                                                <label for="picker1">Catégorie</label>
                                                <select class="form-control" id="ctgModal" name="categorie">
                                                    <option value=""></option>
                                                    <?php foreach($datas as $valu) { ?>
                                                    <option value="<?= $valu['categorie'] ?>"><?= $valu['categorie'] ?></option>                                                                                        
                                                    <?php } ?>                                                                          
                                                </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <?php include('../traitment/getSousCategorie.php');  ?>
                                                <label for="picker1">Sous-Catégorie</label>
                                                <select class="form-control" id="s_ctgModal" name="sous_categorie">
                                                    <option></option>
                                                    <?php foreach($datas as $value) { ?>
                                                    <option value="<?= $value['sous_categorie'] ?>"><?= $value['sous_categorie'] ?></option> 
                                                    <?php } ?>                                                                                        
                                                </select>
                                        </div>                   
                                        <div class="col-md-6 mb-3">
                                                <label for="credit1">Image</label>
                                                <input class="form-control" id="imgModal" placeholder="" type="file" name="image" />
                                            </div>  
                                            
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="exampleInputQt">Quantité</label>
                                                <input class="form-control" id="qteModal" name="quantite" type="number" min="0" placeholder="Entrer la quantité du produit" />
                                                <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="credit1">Prix</label>
                                                <input class="form-control" name="prix" id="priceModal" placeholder="Entrer le prix du produit" />
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="credit1">Description</label>
                                                <textarea class="form-control" id="descModal" placeholder="Entrez la description du produit" name="description"></textarea>
                                            </div> 
                                            <input type="hidden" name="id" value="" id="hidId">                                                                                  
                                        </div>                                   
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Fermer</button>
                                <button class="btn btn-primary ml-2" type="submit" name="submit">Valider</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>