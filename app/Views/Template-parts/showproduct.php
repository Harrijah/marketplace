<div class="card-header">
    <img src="<?php echo base_url('uploads/image/'.$product[0]['photo01']) ; ?>" alt="" class="img-fluid">
    <h2><?php echo $product[0]['nom']; ?></h2>
</div>

<div class="card-body">
    <?php 
        if($product[0]['descriptifcourt'] == '')
        {
            echo "Pas de description fournie pour le moment";
        }
        else
        {
            echo $product[0]['descriptifcourt']; 
        }
    ?>
</div>

<div class="card-footer">
    <div class="row">
        <div class="col-5">
            <span style="font-weight:800">Ar <?php echo $product[0]['prix']; ?> </span>
        </div>
        <div class="col-7">
            <div class="">
                <button class="btn btn-outline-warning idproduit" value="<?php echo $product[0]['idproduit']; ?> ">Ajouter au panier <span><i class="fa fa-cart-plus"></i></span></button>
                <button class="btn btn-outline-warning idproduit" value="<?php echo $product[0]['idproduit']; ?> ">Voir les détails</button>
                <span class="btn sortir" id="sortir" val="close">Retour</span>
            </div>
        </div>
    </div>
</div>


