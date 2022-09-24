<?php foreach($products as $product): ?>
    <div class="photoprod02 text-center">
        <div class="produits03">
            <img src="<?php echo base_url('uploads/image/'.$product['photo01']); ?>" alt="" class="testimg img-fluid">
        </div>
        <div class="textprod03 text-left text-white">
            <span class="textprod"><?php echo $product['nom']; ?></span><br>
            <span class="textprod"><span class="text-warning">Ar </span><?= $product['prix']; ?></span><br>
        </div>
    </div>
<?php endforeach; ?>