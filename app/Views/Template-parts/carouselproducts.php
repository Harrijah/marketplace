<?php for($i=0; $i<count($products); $i++): ?>
    <div class="item montre-moi-0<?php echo $i; ?> mysliderimage">
        <img src="<?php echo base_url('uploads/image/'.$products[$i]['photo01']); ?>" alt="" class="slider-image img-fluid mysliderimage"> 
        <div class="carousel-caption custom-caption-background">
            <h3><?php echo $products[$i]['nom']; ?></h3>
            <p><?php echo $products[$i]['prix']; ?> Ar</p>
        </div>
    </div>
<?php endfor; ?>
<div class="">
    <?php 
        if(count($products) < 1)
        {
            echo "<p class='mx-auto productcounter'>".count($products)." produits trouvé(s). </p><br> " ;
        }
        else
        {
            
        }
    ?>
</div>