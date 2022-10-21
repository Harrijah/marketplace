<div class="littleCat">
    <div class="mytitle">
        <h3 class="catheading">Produits à thème</h3>
        <div class="divider"></div>
    </div>
    <div class="row mt-3 mx-auto pb-3">
        <div id="produits" class="col-9 active">
            <!-- Menu : Produits de la semaine, Nouveautés, Promo -->
            <?php echo (App\Controllers\Assets::homenavmenu()); ?>

            <!-- Les produits mis en avant -->
            <div class="row">
                <!-- Slider -->
                <div class="col-8 sliderimages mt-3" id="mycarousel2">
                    <?php echo (\App\Controllers\Assets::carouselcommand()); ?>
                </div>
                <!-- Liste déroulante -->
                <div class="col-4 mt-3"> 
                    <div class="">
                        <select name="rayon" id="changeMyRayon" url2="<?php echo base_url('filtre/getResultat'); ?>" url3="<?php echo base_url('filtre/getSlider')?>" class="selectrayon2 mybutton mytext myrayonList form-control">
                            <?php echo App\Controllers\Assets::productrayons(); ?>
                        </select>
                    </div>
                    <!-- <div> -->
                        <button  id="buttonUp" class="form-control btn btn-outline-warning"><i class="fa fa-angle-up text-warning" style=""></i></button>
                        <div class="listprod">
                            <div class="listprod04" id="homeselectedproduct">
                                <?php  //echo (\App\Controllers\Assets::selectedproducts()); ?> 
                                <?php echo(\App\Controllers\Filtre::getResultat('getSelectedProduct', null, 100, 'selectedproducts', 'selection')); ?> 
                            </div>
                        </div>
                        <button  id="buttonDown" class="form-control btn btn-outline-warning"><i class="fa fa-angle-down text-warning" style=""></i></button>
                    <!-- </div> -->
                </div>
            </div>
        </div>

        <!-- Encart publicitaire -->
        <div class='col-3'>
            <div class="mapub">
                <div class="animtext content">
                    <div class="">
                        <span>Bienvenue sur</span><br>
                        <span>Destock.mg</span>
                    </div>
                    <div class="">
                        <span>
                            Bons plans? Nouveautés ? Promos? 
                            Naviguez facilement, et trouvez ce dont vous avez besoins sur la marketplace.
                        </span>
                    </div>
                    <div class="">
                        <span>
                            Créez un compte et bénéficiez de remises supplémentaires. Accumulez utilisez 
                            vos points de fidélité à votre avantage sur le site 
                        </span>
                        <span>
                            Créez votre compte, en 2mn, ici :
                        </span>
                        <span><button>Créer mon compte</button></span>
                    </div>
                </div>
                <img src="<?php echo base_url('uploads/images/pub.jpg'); ?>" alt="pub" class="img-fluid">
            </div>
        </div>
    </div>
</div>