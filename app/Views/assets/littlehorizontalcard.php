<div id="produits" class="col-10 content active">
    <div class="row">
        <div class="col-6">
            <?php                                  
                $produit = App\Controllers\Produit::getSelectedProduct(null, 6);
                for($i=0; $i<count($produit); $i++)
                {
                    echo$produit[$i]['nom']."<br>";
                } 
                
            ?>
            <img src="<?php echo base_url('uploads/images/1.jpg'); ?>" alt="" class="d-inline img-fluid"> 
        </div>
        
        <div class="col-6">
            <div class="row categories">
                <div class="col-6 bg-light">
                    <select name="rayon" id="" url="<?php echo base_url('filtre/changerayon')?>" url2="<?php echo base_url('filtre/getResultat'); ?>" class="selectrayon2 form-control">   
                        <?php foreach($rayons as $ray): ?>
                            <option value="<?php echo $ray['id']; ?>"><?php echo $ray['rayon']; ?></option> 
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-6"></div>
            </div>
            <div class="listprod04 bg-light"  id="homeselectedproduct">
                <?php  //echo (\App\Controllers\Assets::selectedproducts()); ?>
            </div>
        </div>
    </div>
</div>