<div class="row mx-auto pt-3 pb-3">
    <div id="produits" class="col-9 active">
        
        <?php echo (App\Controllers\Assets::homenavmenu()); ?>

        <div class="row">
            <div class="col-8 sliderimages mt-3" id="mycarousel2">
                <?php echo (\App\Controllers\Assets::carouselcommand()); ?>
            </div>
            <div class="col-4 mt-3"> 
        
                <div class="">
                    <select name="rayon" id="changeMyRayon" url2="<?php echo base_url('filtre/getResultat'); ?>" url3="<?php echo base_url('filtre/getSlider')?>" class="selectrayon2 mybutton mytext  myrayonList form-control">
                        <?php echo App\Controllers\Assets::productrayons(); ?>
                    </select>
                </div>
                <div class="listprod04"  id="homeselectedproduct">
                    <?php  echo (\App\Controllers\Assets::selectedproducts()); ?> 
                </div>
            </div>
        </div>
    </div>
    <div class='col-3'>
        <img src="<?php echo base_url('uploads/images/pub.jpg'); ?>" alt="pub" class="img-fluid">
    </div>
</div>