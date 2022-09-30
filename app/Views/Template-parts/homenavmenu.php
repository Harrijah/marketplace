<div class="navbar navbar-expand-lg navbar-light wrapper">
    <div class="buttonWrapper">
        <div class="btn-group thema">
            <button type="button" class="active mybutton btn btn-outline-warning mytext" value="selection" data-id="produits">Produits de la semaine</button>
            <button type="button" class="mybutton btn btn-outline-warning mytext" value="nouveaute" data-id="nouveautes">Les nouveautés</button>
            <button type="button" class="mybutton btn btn-outline-warning mytext" value="promo" data-id="promos">En promotion</button>
            <select name="rayon" id="" url2="<?php echo base_url('filtre/getResultat'); ?>" value="Rayon" url3="<?php echo base_url('filtre/getSlider')?>" class="selectrayon2 form-control mybutton btn btn-outline-warning mytext">
                <?php echo App\Controllers\Assets::productrayons(); ?>
            </select>
        </div>
    </div>
</div>