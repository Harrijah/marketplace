<div class="listprod d-block">
    <?php foreach($products as $product): ?>
        <div class="card00">
            <div class="photoprod float-left">
                <div class="produits02">
                    <a href="javascript:void(0)" value="<?php echo $product['idproduit'];?>" class="showmyproduct"><img src="<?php echo base_url('uploads/image/'.$product['photo01']);  ?>" alt="image" class="testimg img-fluid showmyproduct02" value="<?php echo $product['idproduit'];?>"></a>
                </div> 
            </div>
            <div class="descprod float-left">
                <span class="textprod text-primary" style="font-size:13px"><a href="javascript:void(0)" value="<?php echo $product['idproduit'];?>" class="showmyproduct showmyproduct02"><?php echo $product['nom']; ?></a></span><br>
                <span class="textprod" style="font-size:13px"><?php echo $product['prix']; ?> Ar </span><br>
                <span class="textprod" style="font-size:13px">Boutique vendeur</span><br>
                <span class="textprod" style="font-size:13px"><?php echo $product['rayon']; ?></span>
            </div>
        </div>
    <?php endforeach; ?>
</div>
