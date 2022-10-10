<!-- <div class="wrapper mywrapper">
    <div class="buttonWrapper">
        <div class="btn-group thema">
            <button type="button" id="selection" class="mybutton btn btn-outline-warning mytext active" val="selection" data-id="selection">Produits de la semaine</button>
            <button type="button" id="nouveautes" class="mybutton btn btn-outline-warning mytext" val="allprod" data-id="nouveaute">Les nouveautés</button>
            <button type="button" id="promos" class="mybutton btn btn-outline-warning mytext" val="promo" data-id="promo">En promotion</button>
        </div>    
            <select name="rayon" id="changeMyRayon" url2="<?php //echo base_url('filtre/getResultat'); ?>" url3="<?php echo base_url('filtre/getSlider')?>" class="btn selectrayon2 mybutton mytext">
                <?php //echo App\Controllers\Assets::productrayons(); ?>
            </select>
        
    </div>
</div> -->
<div class="">
    <ul class="nav nav-tabs">
        <li data-toggle="tab" class="active mytab" id="selection" val="selection"><a>Produits de la semaine</a></li>
        <li data-toggle="tab" class="mytab" val="allprod" id="nouveautes"><a>Les nouveautés</a></li>
        <li data-toggle="tab" class="mytab"val="promo" id="promos"><a>En promotion</a></li>
    </ul>
</div>
