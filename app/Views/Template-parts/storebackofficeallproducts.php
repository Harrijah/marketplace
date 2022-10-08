<?php for($i=0; $i<count($products); $i++): ?>
    <div class="storeproductbar">
        <div class="infoproductcontainer">
            <div class="productsname">
                <span style="font-weight:bold" class="text-dark"><i class='fa fa-cart-plus'></i></span>
                <span style="color:white; font-weight:bold"><?php echo $products[$i]['nom']; ?>&nbsp;</span>
            </div>
            <div class="productcategories">
                <span style="font-weight:bold" class="text-dark"><i class='fa fa-folder-open'></i></span>
                <span><?php echo $products[$i]['rayon']; ?>&nbsp; </span>
                <span style="font-weight:bold" class="text-dark"><i class='fa fa-folder-open'></i></span>
                <span><?php echo $products[$i]['categorie']; ?>&nbsp;</span>
                <span style="font-weight:bold" class="text-dark"><i class='fa fa-folder-open'></i></span>
                <span><?php echo $products[$i]['souscategorie']; ?>&nbsp;</span>
                <span style="font-weight:bold" class="text-dark"><i class='fa fa-hashtag'></i></span>
                <span><?php echo $products[$i]['reference']; ?>&nbsp;</span>
                <span style="font-weight:bold" class="text-dark"><a href="javascript:void(0)"><i class='fa fa-eye showmyproduct02' value="<?php echo $products[$i]['idproduit']; ?>"></i></a></span>
                <span><?php //echo $products[$i]['reference']; ?>1 &nbsp;</span>

            </div> 
            <div class='editproducts'>
                <span style="font-weight:bold" class="text-warning">
                    <a  class="modifyproduct" 
                        href='#' 
                        value='<?php echo base_url('storebackoffice/modifyproduct')."/".$products[$i]['idproduit'] ;?>' 
                        name="<?php echo $products[$i]['nom'].' | Référence : '.$products[$i]['reference'];  ?>">
                            <i class='fa fa-file-signature text-dark mr-2'></i>
                    </a>
            </span>
            </div>
        </div>

    </div>
<?php endfor; 
    if(count($products) < 10)
    {
        echo "<span class='productcounter'>".count($products)." produits trouvé(s). </span><br> " ;
    }
?>