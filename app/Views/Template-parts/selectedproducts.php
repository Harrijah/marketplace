<div class="listprod d-block">
    <?php foreach($products as $product): ?>
        <div class="card00">
            <div class="photoprod float-left">
                <div class="produits02 showmyproduct02" value="<?php echo $product['idproduit'];?>">
                    <span class="">
                        <img 
                            src="<?php echo base_url('uploads/image/'.$product['photo01']);  ?>" 
                            alt="image" class="testimg myproductimage img-fluid showmyproduct02" 
                            value="<?php echo $product['idproduit'];?>"
                        >
                    </span>
                </div> 
            </div>
            <div class="descprod float-left">
                <span class="textprod text-primary" style="font-size:13px"><a href="javascript:void(0)" value="<?php echo $product['idproduit'];?>" class="showmyproduct02 myproductlink"><?php echo $product['nom']; ?></a></span><br>
                <!-- <span class="textprod" style="font-size:13px">Boutique vendeur</span><br> -->
                <!-- <span class="textprod" style="font-size:13px"><?php //echo $product['rayon']; ?></span><br> -->
                <span class="textprod" style="font-size:13px"><?php echo $product['prix']; ?> Ar </span>
                <div>
                    <span class="textprod" style="font-size:13px"><a href="javascript:void(0)" value="<?php echo $product['idproduit'];?>" class="showmyproduct02 myproductlink"><i class="fa fa-cart-plus showmyproduct02 myproductlink" value="<?php echo $product['idproduit'];?>"></i></a></span>
                    <span class="textprod" style="font-size:13px"><a href="javascript:void(0)" value="<?php echo $product['idproduit'];?>" class="showmyproduct02 myproductlink"><i class="fa fa-eye"></i></a></span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="dblock">
        <?php 
            if(count($products) < 6)
            {
                echo "<p class='productcounter'>".count($products)." produits trouvé(s). </p><br> " ;
            }
            else
            {
                
            }
        ?>
    </div>
</div>
