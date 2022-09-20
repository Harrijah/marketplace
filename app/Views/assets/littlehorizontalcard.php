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
                <div class="carousel-inner" id="carouselproducts">
                    <?php echo App\Controllers\Assets::carouselproducts(); ?>                    
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
                </div>
                <div class="col-6"></div>
            </div>
            <div class="listprod04 bg-light"  id="homeselectedproduct">
                <?php  echo (\App\Controllers\Assets::selectedproducts()); ?> 
            </div>
        </div>
    </div>
</div>