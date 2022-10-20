<div class="row bigfiltercontainer">
    <div class="col-8 filtercontainer">
        <div class="row">
            <div class="mysearchcol">
                <select 
                    name="rayon" 
                    id="" 
                    url="<?php echo base_url('filtre/changerayon')?>" 
                    url2="<?php echo base_url('filtre/getResultat'); ?>" 
                    url3="<?php echo base_url('filtre/getSlider')?>" 
                    class="selectrayon form-control myselection"> 
                    <?php echo (\App\Controllers\Assets::productrayons()); ?>
                </select>
            </div>
            <div class="mysearchcol">
                <select 
                    name="categorie" 
                    id="" 
                    url="<?php echo base_url('filtre/changecategorie'); ?>" 
                    url2="<?php echo base_url('filtre/getResultat'); ?>" 
                    class="selectcategory form-control myselection">
                </select>
            </div>
            <div class="mysearchcol">
                <select 
                    name="souscategorie" 
                    id="" 
                    url="<?php echo base_url('filtre/getResultat'); ?>" 
                    class="selectsouscategorie form-control myselection">
                </select>
            </div>
        </div>
    </div>
    <div class="col-4">
        <form action="">
            <div class="row mx-auto">
                <div class="col-8"><input type="text" class="form-control" placeholder="Tapez un nom de produit"></div>
                <div class="col-4"><input type="submit" class="form-control btn-outline-warning" value="Recherche"></div>
            </div>
        </form>
    </div>
</div>