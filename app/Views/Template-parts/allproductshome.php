<?php foreach($products as $product): ?>
    <div class="photoprod02 text-center">
        <div class="produits03">
            <a href="javascript:void(0)" value="<?php echo $product['idproduit'];?>" class="showmyproduct"><img src="<?php echo base_url('uploads/image/'.$product['photo01']); ?>" alt="" class="testimg img-fluid"></a>
        </div>
        <div class="textprod03 text-left text-white">
            <span class="textprod"><a href="javascript:void(0)" value="<?php echo $product['idproduit'];?>" class="showmyproduct"><?php echo $product['nom']; ?></a></span><br>
            <span class="textprod"><span class="text-warning">Ar </span><?= $product['prix']; ?></span><br>
        </div>
    </div>
<?php endforeach; ?>
