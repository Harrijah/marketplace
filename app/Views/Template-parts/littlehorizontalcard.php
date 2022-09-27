<div class="row mx-auto">
    <div id="produits" class="col-10 content active">
        <div class="row">
            <div class="col-6 sliderimages" id="mycarousel2">
                <?php echo (\App\Controllers\Assets::carouselcommand()); ?>
            </div>
            <div class="col-6">
                <div class="listprod04 bg-light"  id="homeselectedproduct">
                    <?php  echo (\App\Controllers\Assets::selectedproducts()); ?> 
                </div>
            </div>
        </div>
    </div>
    <div class='col-2'>
        <img src="<?php echo base_url('uploads/images/pub.jpg'); ?>" alt="pub" class="img-fluid">
    </div>
</div>