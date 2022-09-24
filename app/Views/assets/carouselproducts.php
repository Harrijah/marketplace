<?php for($i=0; $i<count($products); $i++): ?>
    <div class="item montre-moi-0<?php echo $i; ?>">
        <img src="<?php echo base_url('uploads/image/'.$products[$i]['photo01']); ?>" alt="" class="slider-image img-fluid"> 
        <div class="carousel-caption custom-caption-background">
            <h3><?php echo $products[$i]['nom']; ?></h3>
            <p><?php echo $products[$i]['prix']; ?> Ar</p>
        </div>
    </div>
<?php endfor; ?>