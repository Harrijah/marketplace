<?php 
    if($products)
    {
        for($i=0; $i<count($products); $i++): ?>
            <div class="item montre-moi-0<?php echo $i; ?> mysliderimage">
                <img src="<?php echo base_url('uploads/image/'.$products[$i]['photo01']); ?>" alt="" class="slider-image img-fluid mysliderimage"> 
                <div class="carousel-caption custom-caption-background">
                    <h3 class=""><?php echo $products[$i]['nom']; ?></h3>
                    <p class=""><?php echo $products[$i]['prix']; ?> Ar</p>
                </div>
            </div>
        <?php endfor; 
    }
    else
    { ?>
        <div class="item montre-moi-00 mysliderimage">
            <img src="<?php echo base_url('uploads/image/banniere.jpg'); ?>" alt="" class="slider-image img-fluid mysliderimage"> 
            <div class="carousel-caption custom-caption-background">
                <h3><?php echo "Pas de résultats à afficher pour le moment"; ?></h3>
            </div>
        </div>
    <?php };
?>