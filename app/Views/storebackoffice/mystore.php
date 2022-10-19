
<div class="containme wrapper">
    <div class="verticalmenu buttonWrapper">
        <ul class="verticalmenulist">
            <li><a href="#" class="mybutton active" data-id="listproduits">Liste des produits</a></li>
            <li><a href="#" class="mybutton" data-id="ventesboutiques">Ventes</a></li>
            <li><a href="#" class="mybutton" data-id="publicationsboutiques">Publications</a></li>
            <li><a href="#" class="mybutton" data-id="messagesboutiques">Messages</a></li>
            <li><a href="#" class="mybutton" data-id="commentairesboutiques">Commentaires</a></li>
        </ul>
    </div>
    <div class="insidecontent contentWrapper">
        <div class="myproducts content active" id="listproduits">
            <!-- Barre de filtre de produits -->
            <?php echo (\App\Controllers\Assets::filterproducts()); ?>

            <!-- Liste des produits -->
            <div id="testmodal"></div>
            <div id="backofficestoreproductlist">
                <?php echo(\App\Controllers\Filtre::getResultat('getSelectedProduct', null, 100, 'storebackofficeallproducts', null)); ?>
            </div>          
        </div>

        <div class="content" id="ventesboutiques">Content 02</div>
        <div class="content" id="publicationsboutiques">Content 03</div>
        <div class="content" id="messagesboutiques">Content 04</div>
        <div class="content" id="commentairesboutiques">Content 05</div>
    </div>
        
</div>
<!------------------------------------------ Modifier produit ---------------------------------------->
<div class="modal" id="popupmodal">
    <div class="modal-content">
            <span class="close text-right">&times;</span>
        <div class="modal-header">
            <h5 class="productname">Que voulez-vous faire ?</h5>
        </div>
        <div class="modal-body">
            <div class="storenotifs"><button class="centermytext btn btn-outline-warning ajouterproduit">Modifier le produit</button></div>
            <div class="storenotifs"><button class="centermytext btn btn-outline-warning ajouterproduit">Supprimer le produit</button></div>
            
        </div>
        <div class="modal-footer">
            Annuler
        </div>
    </div>
</div>