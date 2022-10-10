<div class="listprod d-block">
    <?php foreach($products as $product): ?>
        <div class="card00">
            <div class="descprod">
                <span class="textprod text-primary" style="font-size:13px"><a href="javascript:void(0)" value="<?php echo $product['idproduit'];?>" class="showmyproduct02 myproductlink text-warning"><?php echo $product['nom']; ?></a></span><br>
                <span class="textprod" style="font-size:13px">Boutique vendeur</span><br>
                <span class="textprod" style="font-size:13px"><?php echo $product['prix']; ?> Ar </span>
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





<!-- <div class="photoprod float-left"> -->
    <!-- <div class="produits02 showmyproduct02" value="<?php echo $product['idproduit'];?>">
        <span class="">
            <img 
                src="<?php echo base_url('uploads/image/'.$product['photo01']);  ?>" 
                alt="image" class="testimg myproductimage img-fluid showmyproduct02" 
                value="<?php echo $product['idproduit'];?>"
            >
        </span>
    </div>  -->
<!-- </div> -->
