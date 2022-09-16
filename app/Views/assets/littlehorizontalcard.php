<div id="produits" class="col-10 content active">
    <div class="row">
        <div class="col-6">
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
   

                <div class="carousel-inner">
                    <div class="item active">
                        <?php //for($i=0; $i<count($products); $i++): ?><img src="<?php //echo base_url('uploads/image/'.$products[$i]['photo01']); ?>" alt=""><?php //endfor; ?>
                        <img src="<?php echo base_url('uploads/image/'.$products[2]['photo01']); ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('uploads/image/'.$products[4]['photo01']); ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('uploads/image/'.$products[5]['photo01']); ?>" alt="">
                    </div>
                </div>

                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
                </a>

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