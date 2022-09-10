<div class="modal" id="productmodal">
    <div class="modal-content2">
            <span class="close text-right">&times;</span>
        <div class="modal-header">
            <h3 class="text-left text-warning">Ajouter un produit</h3>
            <div id="productsinfo"></div>
        </div>
        <div class="modal-body">
            <form action="/produit/addproduct" method="post" class="form-group" enctype="multipart/form-data">
                <div><input type="hidden" name="boutique" value="1"></div>
                <div class="allformproduct pt-2 pr-2 pb-2 pl-2">
                    <div class="row01">
                        <div class="mainnotifs2">
                        <div class="tubecenter">
                            <div class="generalproductsinfo1">
                                <!-- Catégories -->
                                <div class="selectcategories displaymeblock shadow">
                                    <div class="categorieselect01">
                                        <label class="displaymeblock" for="categorie02">Rayon</label>
                                        <?php echo App\Controllers\Assets::productrayons(); ?>
                                    </div>
                                <div class="splitcategories displaymeblock">
                                    <div class="splitedcategorie01">
                                        <label class="displaymeblock" for="categorie02">Catégorie</label>
                                            <select name="categorie" id="" url="<?php echo base_url('filtre/changecategorie'); ?>" url2="<?php echo base_url('filtre/getResultat'); ?>" class="selectcategory form-control"></select>
                                    </div>
                                    <div class="splitedcategorie02">
                                        <label  class="displaymeblock" for="categorie03">Sous-catégorie</label>
                                            <select name="souscategorie" id="" url="<?php echo base_url('filtre/getResultat'); ?>" class="selectsouscategorie form-control"></select>
                                    </div>
                                </div>
                                    
                                </div>
                                <div class="selectcategories shadow">
                                    <!-- Nom produit -->
                                    <label class="displaymeblock" for="nomproduit"><h4>Nom du produit</h4></label>
                                    <div><input type="text" name="nomproduit"  class="categorytest" value="<?php if(isset($produit)){echo $produit[0]['nom']; } ?>"></div>
                                    <div class="splitcategories displaymeblock">
                                        <div class="splitedcategorie01">
                                            <!-- Référence -->
                                            <label   class="displaymeblock"for="reference">Référence</label>
                                            <div><input type="text"  name="reference"  class="categorytest" value="<?php if(isset($produit)){echo $produit[0]['reference'];} ?>"></div>
                                        </div>
                                        <div class="splitedcategorie02">
                                            <!-- Marque -->
                                            <label  class="displaymeblock" for="marque">Marque</label>
                                            <div><input type="text"  name="marque"  class="categorytest" value="<?php if(isset($produit)){echo $produit[0]['marque'];} ?>"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selectcategories shadow">
                                    <!-- Prix -->
                                    <div class="pricesplit">
                                        <div class="splitedcategorie01">
                                            <label for="prixproduit" class="displaymeblock"><h4>Prix</h4></label>
                                            <div><input type="number" name="prixproduit" id="" class="categorytest" value="<?php if(isset($produit)){echo $produit[0]['prix'];} ?>"><span>Ar</span></div>
                                        </div>
                                        <div class="splitedcategorie02">
                                            <label for="prixpromo" class="displaymeblock" ><h4>Prix promo</h4></label>
                                            <div><input type="number" name="prixpromo" id="" class="categorytest" value="<?php if(isset($produit)){echo '';} ?>"><span>Ar</span></div>
                                        </div>
                                    </div>
                                    <!-- Promotion -->
                                    <div class="pricesplit">
                                        <div class="splitedcategorie01">
                                            <label for="debutpromo" class="displaymeblock">Date début promo</label>
                                            <div><input type="date" name="debutpromo" id=""></div>
                                        </div>
                                        <div class="splitedcategorie02">
                                            <label for="finpromo" class="displaymeblock">Date début promo</label>
                                            <div><input type="date" name="finpromo" id=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="generalproductsinfo2">
                                <!-- Images -->
                                <div class="gravissime2">
                                    <div class="selectcategories shadow">
                                        <h4>Images</h4>
                                        <div class="splitedcategorie01"><img src="<?php echo base_url('uploads/images/store7.jpg'); ?>" alt="" class="testmyimage01 img-fluid" alt="image"><input type="file" name="file"></div>
                                        <div class="splitedcategorie02"><img src="<?php echo base_url('uploads/images/store7.jpg'); ?>" alt="" class="testmyimage01"><input type="file" name="photo02"></div>
                                        <div class="splitedcategorie03"><img src="<?php echo base_url('uploads/images/store7.jpg'); ?>" alt="" class="testmyimage02"><input type="file" name="photo03"></div>
                                        <div class="splitedcategorie03"><img src="<?php echo base_url('uploads/images/store7.jpg'); ?>" alt="" class="testmyimage02"><input type="file" name="photo04"></div>
                                        <div class="splitedcategorie03"><img src="<?php echo base_url('uploads/images/store7.jpg'); ?>" alt="" class="testmyimage02"><input type="file" name="photo05"></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="allproductdescriptions  mt-2">
                        <!-- Descriptions -->
                        <label for="shortdescprod">Description courte</label>
                        <textarea name="shortdescprod" rows="3" id="" placeholder="Description courte du produit" class="form-control"><?php if(isset($produit)){echo $produit[0]['descriptifcourt'];} ?></textarea>
                        <label for="longdescprod mt2">Description longue</label>
                        <textarea name="longdescprod" id="" placeholder="Description longue du produit" class="form-control"><?php if(isset($produit)){echo $produit[0]['descriptiflong'];} ?></textarea>
                        <input type="submit" class="btn btn-warning form-control mt-2" value="Enregistrer">
                    </div>
                    
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <p>Test footer</p>
        </div>
    </div>
    
</div>