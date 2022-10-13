<div class="row mx-auto pt-5 pb-5 bandeau">
    <div class="row">    
        <div class="col-5 pt-4 pb-4 pl-5">
            <h3 class="text-warning">Rechercher un magasin</h3>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptate accusantium ab commodi adipisci, eos corrupti nihil? Commodi, dolore aut maxime vero ducimus assumenda et voluptas error harum corrupti aliquid!</p>
        </div>
        <div class="col-3 pt-4 part2">
            <form action="" method="post">
                <select name="rayon" id="changeMyRayon" url2="<?php echo base_url('filtre/getResultat'); ?>" url3="<?php echo base_url('filtre/getSlider')?>" class="text-center form-control mb-2 myrayonList">
                    <?php echo App\Controllers\Assets::productrayons(); ?>
                </select>  
                <select class="text-center form-control mb-2 myrayonList">
                    <option value="" class="form-control">Magasin 01</option>
                    <option value="" class="form-control">Magasin 02</option>
                    <option value="" class="form-control">Magasin 03</option>
                </select>
                <input type="submit" value="Voir le magasin" class="form-control btn btn-outline-warning mb-2">
            </form>
        </div>
    </div>
    <!-- <div class="col-4 part3"></div> -->
</div>