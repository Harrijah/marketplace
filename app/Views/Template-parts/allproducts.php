<div class="container-fluid mx-auto mt-4">
    <div class="row ">
        <div class="col-1 text-center"><i class="fa fa-angle-left text-warning inner-div" style="font-size:76px"></i></div>
        <div class="col-10 bg-light">
            <div class="blocrandomprod mt-2 mr-2 mb-2 ml-2" id="allproductshome">
                <!-- 
                    Ceci est la liste affichée par défaut sur la page d'accueil. Elle utilise la méthode getResultat() dans la classe Filtre, avec comme paramètres :'getSelectedProduct', null, 10, 'allproductshome' 
                -->
                <?php echo(\App\Controllers\Filtre::getResultat('getSelectedProduct', null, 10, 'allproductshome')); ?>
                <!-- 
                    Quand le filtre sur la page d'accueil est utilisé, les résultats sont gérés par Javascript et Ajax.
                -->
            </div>
        </div>
        <div class="col-1 text-center"><i class="fa fa-angle-right text-warning inner-div" style="font-size:76px"></i></div>
    </div>
</div>