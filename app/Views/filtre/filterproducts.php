<div class="row  bg-light mx-auto mt-1">
    <div class="col-8 pt-2 pr-2 pb-2 pl-2">
        <div class="row">
            <div class="col-4">
                <?php echo (\App\Controllers\Assets::productrayons()); ?>
            </div>
            <div class="col-4">
                <select name="categorie" id="" url="<?php echo base_url('filtre/changecategorie'); ?>" url2="<?php echo base_url('filtre/getResultat'); ?>" class="selectcategory form-control"></select>
            </div>
            <div class="col-3">
                <select name="souscategorie" id="" url="<?php echo base_url('filtre/getResultat'); ?>" class="selectsouscategorie form-control"></select>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <div class="col-4 pt-2 pr-2 pb-2 pl-2">
        <form action="">
            <div class="row mx-auto">
                <div class="col-8"><input type="text" class="form-control" placeholder="Tapez un nom de produit"></div>
                <div class="col-4"><input type="submit" class="form-control btn-outline-warning" value="Recherche"></div>
            </div>
        </form>
    </div>
</div>