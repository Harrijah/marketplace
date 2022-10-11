<div class="card-header">
    <img src="<?php echo base_url('uploads/image/'.$product[0]['photo01']) ; ?>" alt="" class="img-fluid">
</div>

<div class="card-body">
    <div class="modalproductname">
        <h2 class="text-warning"><?php echo $product[0]['nom']; ?></h2>
        <span class="productprice"><span class="text-warning h3">Ar</span> <?php echo $product[0]['prix']; ?> </span>
    </div>
    <?php 
        if($product[0]['descriptifcourt'] == '')
        {
        ?> 
            <div class="modalproductname">
                <span>Pas de description fournie pour le moment</span>            
            </div>
        <?php 
        }
        else
        {
        ?> 
            <div class="modalproductname">
                <span class="text-left"><span style="text-decoration:underline">Caractéristiques</span><br><?php echo $product[0]['descriptifcourt'];?></span>
            </div>
        <?php 
        }
    ?>
</div>

<div class="card-footer">
    <div class="">
        <button class="btn btn-outline-warning idproduit " value="<?php echo $product[0]['idproduit']; ?> ">Ajouter au panier <span><i class="fa fa-cart-plus"></i></span></button>
        <button class="btn btn-outline-warning idproduit" value="<?php echo $product[0]['idproduit']; ?> ">Voir les détails</button>
        <span class="btn sortir text-white" id="sortir" val="close">Retour</span>
    </div>
</div>


