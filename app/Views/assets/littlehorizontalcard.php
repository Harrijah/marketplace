<div id="produits" class="col-10 content active">
    <div class="row">
        <div class="col-6 sliderimages">
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
   

                <!-- List of products -->
                <div class="carousel-inner">
                    <?php //for($i=0; $i<count($products); $i++): ?>
                        <img src="<?php //echo base_url('uploads/image/'.$products[$i]['photo01']); ?>" alt="">
                    <?php //endfor; ?>

                    <div class="item active">
                        <img src="<?php echo base_url('uploads/image/'.$products[2]['photo01']); ?>" alt="" class="slider-image img-fluid"> 
                        <div class="carousel-caption custom-caption-background">
                            <h3><?php echo $products[2]['nom']; ?></h3>
                            <p><?php echo $products[2]['prix']; ?> Ar</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('uploads/image/'.$products[4]['photo01']); ?>" alt="" class="slider-image img-fluid"> 
                        <div class="carousel-caption custom-caption-background">
                            <h3><?php echo $products[4]['nom']; ?></h3>
                            <p><?php echo $products[4]['prix']; ?> Ar</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('uploads/image/'.$products[5]['photo01']); ?>" alt="" class="slider-image img-fluid"> 
                        <div class="carousel-caption custom-caption-background">
                            <h3><?php echo $products[5]['nom']; ?></h3>
                            <p><?php echo $products[5]['prix']; ?> Ar</p>
                        </div>
                    </div>
                </div>
                
                <!-- Carousel commands -->
                <a class="left carousel-control carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="right carousel-control carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
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