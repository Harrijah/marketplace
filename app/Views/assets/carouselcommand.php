<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- List of products -->
    <div class="carousel-inner" id="changeCarousel">
        
        <?php for($i=0; $i<count($products); $i++): ?>
            <div class="item montre-moi-0<?php echo $i; ?>">
                <img src="<?php echo base_url('uploads/image/'.$products[$i]['photo01']); ?>" alt="" class=""> 
                <div class="carousel-caption custom-caption-background">
                    <h3><?php echo $products[$i]['nom']; ?></h3>
                    <p><?php echo $products[$i]['prix']; ?> Ar</p>
                </div>
            </div>
        <?php endfor; ?>
         
    </div>
    
    <!-- Carousel commands -->
    <a class="left carousel-control carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="right carousel-control carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    </a>
</div>