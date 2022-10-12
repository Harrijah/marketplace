<?php 
    if($products)
    {
        foreach($products as $product): ?>
            <div class="photoprod02 text-center">
                <div class="produits03 showmyproduct02" value="<?php echo $product['idproduit'];?>" >
                    <span>
                        <img 
                            src="<?php echo base_url('uploads/image/'.$product['photo01']); ?>" 
                            alt="" 
                            class="testimg img-fluid showmyproduct02" value="<?php echo $product['idproduit'];?>"
                        >
                    </span>
                </div>
                <div class="textprod03 text-left bg-dark">
                    <span class="textprod"><a href="javascript:void(0)" value="<?php echo $product['idproduit'];?>" class="myproductlink text-warning showmyproduct02"><?php echo $product['nom']; ?></a></span><br>
                    <span class="textprod text-white"><span class="text-warning">Ar </span><?= $product['prix']; ?></span><br>
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
