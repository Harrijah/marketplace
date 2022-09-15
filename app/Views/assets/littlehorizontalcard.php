<div id="produits" class="col-10 content active">
    <div class="row">
        <div class="col-6">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php for($i=0; $i<count($products); $i++): ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class=""></li>
                    <?php endfor; ?>
                </ol>

                <div class="carousel-inner">
                    <div class="item">
                        <?php for($i=0; $i<count($products); $i++): ?>
                            <img src="<?php echo base_url('uploads/image/'.$products[$i]['photo01']); ?>" alt="">
                        <?php endfor; ?>
                    </div>
                </div>

                <div></div>


            </div>
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
                <?php  echo (\App\Controllers\Assets::selectedproducts()); ?> 
            </div>
        </div>
    </div>
</div>