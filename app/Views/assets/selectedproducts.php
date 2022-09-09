<div class="listprod d-block">
    <?php foreach($products as $product): ?>
        <div class="card00">
            <div class="photoprod float-left">
                <div class="produits02">
                    <img src="<?php echo base_url('writable/uploads/images/').$product['photo01'];  ?>" alt="image" class="testimg img-fluid">
                </div> 
            </div>
            <div class="descprod float-left">
                <span class="textprod text-primary" style="font-size:13px"><?php echo $product['nom']; ?></span><br>
                <span class="textprod" style="font-size:13px"><?php echo $product['prix']; ?> Ar</span><br>
                <span class="textprod" style="font-size:13px">Boutique vendeur</span><br>
                <span class="textprod" style="font-size:13px"><?php echo $product['rayon']; ?></span>
            </div>
        </div>
    <?php endforeach; ?>
</div>
