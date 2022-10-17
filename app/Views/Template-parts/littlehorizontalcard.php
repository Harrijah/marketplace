<div class="littleCat">
    <div class="row mx-auto pb-3">
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
                                <?php  echo (\App\Controllers\Assets::selectedproducts()); ?> 
                            </div>
                        </div>
                        <button  id="buttonDown" class="form-control btn btn-outline-warning"><i class="fa fa-angle-down text-warning" style=""></i></button>
                    <!-- </div> -->
                </div>
            </div>
        </div>

        <!-- Encart publicitaire -->
        <div class='col-3'>
            <img src="<?php echo base_url('uploads/images/pub.jpg'); ?>" alt="pub" class="img-fluid">
        </div>
    </div>
</div>