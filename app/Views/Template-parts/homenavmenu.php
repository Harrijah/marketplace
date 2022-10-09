<div class="wrapper mywrapper">
    <div class="buttonWrapper">
        <div class="btn-group thema">
            <button type="button" id="selection" class="mybutton btn btn-outline-warning mytext active" val="selection" data-id="selection">Produits de la semaine</button>
            <button type="button" id="nouveautes" class="mybutton btn btn-outline-warning mytext" val="allprod" data-id="nouveaute">Les nouveautés</button>
            <button type="button" id="promos" class="mybutton btn btn-outline-warning mytext" val="promo" data-id="promo">En promotion</button>
        </div>    
            <select name="rayon" id="changeMyRayon" url2="<?php echo base_url('filtre/getResultat'); ?>" url3="<?php echo base_url('filtre/getSlider')?>" class="btn selectrayon2 mybutton mytext">
                <?php echo App\Controllers\Assets::productrayons(); ?>
            </select>
        
    </div>
</div>