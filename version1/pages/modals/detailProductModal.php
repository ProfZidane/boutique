<!--  Modal -->
<div class="modal fade" id="exampleModalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Détails Produits</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">                              
                                <div class="col-md-12">
                                    <form action="">
                                        <div class="row">
                                        <div class="col-md-12 form-group mb-3">                                    <p id='mot'></p>

                                                <label for="exampleInputQt">Nom Produit</label>
                                                <input class="form-control" id="product_nameModal" type="text"  />
                                                <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <?php include('../traitment/getCategorie.php');  ?>
                                                <label for="picker1">Prix</label>
                                                <input class="form-control" id="categorieModal" type="text"  />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <?php include('../traitment/getSousCategorie.php');  ?>
                                                <label for="picker1">Quantité</label>
                                                <input class="form-control" id="sous_categorieModal" type="text"  />
                                        </div>                   
                                        <div class="col-md-6 mb-3">
                                                <label for="credit1">Image</label>
                                                <input class="form-control" id="imgModal" placeholder="" type="file" name="image" />
                                        </div>  
                                            
                                        <div class="col-md-12 form-group mb-3">
                                                <label for="exampleInputQt">Nom Produit</label>
                                                <input class="form-control" id="product_nameModal" type="text"  />
                                                <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <?php include('../traitment/getCategorie.php');  ?>
                                                <label for="picker1">Prix</label>
                                                <input class="form-control" id="categorieModal" type="text"  />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <?php include('../traitment/getSousCategorie.php');  ?>
                                                <label for="picker1">Quantité</label>
                                                <input class="form-control" id="sous_categorieModal" type="text"  />
                                        </div>                   
                                        <div class="col-md-6 mb-3">
                                                <label for="credit1">Image</label>
                                                <input class="form-control" id="imgModal" placeholder="" type="file" name="image" />
                                        </div>  

                                        </div>                                   
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Fermer</button>
                                <button class="btn btn-primary ml-2" type="submit" name="submit">Ok</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>