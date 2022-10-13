<div class="listprod d-block">
    <?php 
    if($products)
    {
        foreach($products as $product): ?>
        <div class="card00 bg-light">
            <div class="descprod">
                <span class="textprod text-primary" style="font-size:13px"><a href="javascript:void(0)" value="<?php echo $product['idproduit'];?>" class="showmyproduct02 myproductlink"><?php echo $product['nom']; ?></a></span><br>
                <span class="textprod" style="font-size:13px">Boutique vendeur</span><br>
                <span class="textprod" style="font-size:13px"><?php echo $product['prix']; ?> Ar </span>
            </div>
        </div>
    <?php endforeach; 
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
</div>
