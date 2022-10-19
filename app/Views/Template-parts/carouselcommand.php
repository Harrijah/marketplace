<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- List of products -->
    <div class="carousel-inner" id="changeCarousel">
        <?php echo(\App\Controllers\Filtre::getResultat('getSelectedProduct', null, 100, 'carouselproducts', null)); ?>
    </div>
    
    <!-- Carousel commands -->
    <a class="left carousel-control carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="right carousel-control carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
