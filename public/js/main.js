$(document).ready(function() { 
    const tabs = document.querySelector(".wrapper");
    const selectButton = document.querySelector('.thema');
    const tabButton = document.querySelectorAll(".mybutton"); 
    const contents = document.querySelectorAll(".content"); 
    const mybaseurl = $(document.querySelector('#myurl')).attr('value'); // base URL pour le filtre
    let sortir = document.getElementsByClassName('sortir'); // fermer le modal
    let showselected = document.querySelector('#showselected');
    let myProductModal = document.getElementById('thisismymodal'); // Sélectionner le modal sur la page d'accueil
    let newContainer01 = document.querySelector('#homeselectedproduct'); // Sélectionner le container pour le modal
    let newContainer02 = document.querySelector('#allproductshome'); // Sélectionner le container pour le modal
    let newContainer03 = document.querySelector('#backofficestoreproductlist'); // Sélectionner le container pour le modal
    let thematique = 'selection';

    newmodal02(newContainer01); // Activer le modal des produits || Slider principal
    newmodal02(newContainer02); // Activer le modal des produits || Page d'accueil
    newmodal02(newContainer03); // Activer le modal des produits || BackOffice
    buttonToggle(); // Toogle des boutons et contents : "active" ou non 
    changecategory(); // Changer la catégorie dans le menu déroulant
    changesouscategorie(); // Changer la sous-catégorie dans le menu déroulant
    toggleCreaBoutique(); // Page création nouvelle boutique : toggle des formulaires

    /*  ****************     UTILISER LE FILTRE PAR RAYON/CATEGORIE/SOUSCATEGORIE    ************ */    
    // Page d'accueil
    filtre('.selectrayon', 'url2', 'getSelectedProduct', '10', 'allproductshome', '#allproductshome', 'allprod');   
    filtre('.selectcategory', 'url2', 'getProductByCategory', '10', 'allproductshome', '#allproductshome', 'allprod');
    filtre('.selectsouscategorie', 'url', 'getProductBySousCategory', '10', 'allproductshome', '#allproductshome', 'allprod');
    // Backoffice
    filtre('.selectrayon', 'url2', 'getSelectedProduct', '10', 'storebackofficeallproducts', '#backofficestoreproductlist', 'allprod');
    filtre('.selectcategory', 'url2', 'getProductByCategory', '10', 'storebackofficeallproducts', '#backofficestoreproductlist', 'allprod');
    filtre('.selectsouscategorie', 'url', 'getProductBySousCategory', '10', 'storebackofficeallproducts', '#backofficestoreproductlist', 'allprod');
    
    // Page d'accueil / Slider prncipal / Choisir les thématiques : produit de la semaine, nouveauté, ou promo
    $(selectButton).on('click', function(e){
        thematique = $(e.target).attr('val'); // Obtenir la thématique
        var urlx2 = mybaseurl+'/getResultat/getSelectedProduct/0/6/carouselproducts/'+thematique;
        var urlx1 = mybaseurl+'/getResultat/getSelectedProduct/0/6/selectedproducts/'+thematique; 
        var urlx3 = mybaseurl+'/changeMyRayon'; 
        lancerAjax(urlx2, '#changeCarousel'); // Montrer la séclection de produits sur le carousel du slider
        lancerAjax(urlx1, '#homeselectedproduct'); // Montrer la séclection de produits sur la liste de produits sur le slider principal
        lancerAjax(urlx3, '#changeMyRayon'); // Réinitialiser la liste des rayons dans la balise "SELECT"

        newmodal02(newContainer01); // Montrer le modal pour les produits filtrés
    });

    // Page d'accueil/ Slider principal / Sélectionner les produits par rayon en fonction thématique ci-dessus
    $('.selectrayon2').on('change', function(){
        var optionselect = this.options[this.selectedIndex];
        var urlx1 = $(this).attr('url2')+'/getSelectedProduct/'+optionselect.value+'/6/selectedproducts/'+thematique;
        var urlx2 = $(this).attr('url2')+'/getSelectedProduct/'+optionselect.value+'/6/carouselproducts/'+thematique;
        lancerAjax(urlx1, '#homeselectedproduct');
        lancerAjax(urlx2, '#changeCarousel');
        newmodal();
    });

    /*  **************************     USE CAROUSEL     ******************************* */
    function addactive(){ //Activer la première image dans le carousel de la page d'accueil
        var imagecarousel = document.querySelector('.montre-moi-00');
        imagecarousel.classList.add('active');
    }
    /*  **************************     FONCTION AJAX     ******************************* */
    function lancerAjax(ajaxUrl, ajaxDestination){ // Factoriser ici, toutes les fonctions ajax
        $.ajax({
            url: ajaxUrl,
            type: 'post',
            data: {}
        })
        .done(function(data){
            if(ajaxDestination == '#changeCarousel'){
                $(ajaxDestination).html(data);
                addactive();
            } else {
                $(ajaxDestination).html(data);
            }
        })
        .fail(function(errorMessage){
            alert(errorMessage);
        });
    }
    
    /*  ****************     Utiliser le filtre de produits  ************ */ 
    function filtre(bouton, url, fonction, limit, destination, contenu, themaValue)
    {
        $(bouton).on('change', function()
        {
            var optionselect = this.options[this.selectedIndex];
            if(optionselect.classList == 'retourrayon') 
            {
                var urlx = $(this).attr(url)+'/getSelectedProduct/'+optionselect.value+'/'+limit+'/'+destination+'/'+themaValue;
            }
            else if(optionselect.classList == 'retourcategorie')
            {
                var urlx = $(this).attr(url)+'/getProductByCategory/'+optionselect.value+'/'+limit+'/'+destination+'/'+themaValue;
            }
            else
            {
                var urlx = $(this).attr(url)+'/'+fonction+'/'+optionselect.value+'/'+limit+'/'+destination+'/'+themaValue;
            }
            lancerAjax(urlx, contenu);
            newmodal02(newContainer02); // Activer le modal des produits pour la page d'accueil
        });
    }
      
    // Une fois que les produits sont affichés, on va sortir un modal pour chacun des produits listés par le filtre
    function newmodal02(container){
        $(container).on('click', function(e){ // lorsqu'on clique sur les éléments du container
            let monlien = e.target; // créer un variable pour l'élément cliqué
            if(monlien.classList.contains("showmyproduct02") == true){ // Condition montrant si l'élément cliqué est bien un produit
                myproductvalue = $(monlien).attr('value'); // Créer une variable pour l'ID du produit
                url = mybaseurl+'/modalproduct/'+myproductvalue; // Créer un lien pour le Controller qui va gérer la requête
                lancerAjax(url, showselected); // lancer la requête à l'aide d'Ajax

                /* ----------- Montrer le modal ------------ */
                myProductModal.style.display = "block"; //montrer le modal avec les résultats obtenus par l'Ajax
                window.onclick = function(event){ // fermer le modal
                    let myClick = event.target;
                    if(myClick == myProductModal){
                        myProductModal.style.display = "none";
                    }else if(myClick.classList.contains('sortir') == true){
                            myProductModal.style.display = "none";
                    }else if (myClick.classList.contains('idproduit') == true){
                        let monidproduit = $(myClick).attr('value');
                        alert(monidproduit);
                    }
                }
            }
        });
    }
    /*  **************************     TOGGLE MENU / BOUTONS    ******************************* */
    function buttonToggle(){         
        $(tabs).on('click', function(e){
            let id = e.target.dataset.id;
            let element00 = document.getElementById(id);
            if (id) {
                tabButton.forEach(btn => 
                    {
                        btn.classList.remove("active");
                    }
                    );
                e.target.classList.add("active");
                e.target.classList.add("mybutton");

                contents.forEach(content => {content.classList.remove("active");}); 
                element00.classList.add("active");

            } 
        });
    } 
    
    /*  ****************     Activer le filtre de produits   ************ */
    function changecategory()
    {
        $('.selectrayon').on('change', function(e){
            e.preventDefault();
            var optionselect = this.options[this.selectedIndex].value;
            var myurl03 = $(this).attr('url')+'/'+optionselect;
            lancerAjax(myurl03, '.selectcategory');
            $('.selectsouscategorie').html("<option></option>"); 
        });
    }
    function changesouscategorie()
    {
        $('.selectcategory').on('change', function(e){
            e.preventDefault(e);
            var optionselect = this.options[this.selectedIndex];
            if(optionselect.classList == 'retourrayon')
            {
                var myurl02 = $(this).attr('url')+'/0';
            }
            else
            {
                var myurl02 = $(this).attr('url')+'/'+optionselect.value;
            }
            lancerAjax(myurl02, '.selectsouscategorie');
        });
    }

    /*  **************************     TOGGLE CREATION MAGASIN     ******************************* */
    function toggleCreaBoutique(){   
        var coeff=1;
        const previous = document.getElementById('buttonprevious');
        const next = document.getElementById('buttonnext');
        const tabs2 = document.querySelector(".wrapper2");
    
        $(previous).on('click', function(){if(coeff > 1){coeff--;}});
        $(next).on('click', function(){if(coeff < 3){coeff++;}}); 
        $(tabs2).on('click', function(){
            if (coeff) {
                const toactivate = 'menu'+coeff;
                const mybuttonactive = document.getElementById(toactivate);
                const element = document.getElementById(coeff);
                // hide
                tabButton.forEach(btn => {btn.classList.remove("active");});        
                contents.forEach(content => {content.classList.remove("active");});
                // show
                mybuttonactive.classList.add("active");
                element.classList.add("active");
            } 
        });
    }

    /*  **************************     TOGGLE CREATION COMPTE     ******************************* */
    $(document.body).on('click', '.createbutton', function(e){
        e.preventDefault();
        var myurl =$(this).attr('value');
        var connexmodal = document.getElementById('connexmodal');
        connexmodal.style.display = 'block';
        window.onclick = function(event){
            if(event.target == connexmodal){
                connexmodal.style.display = "none";
            }
        }
        lancerAjax(myurl, '#modalcontent');        
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            connexmodal.style.display = "none";
            };
    });

    /*  **************************     TOGGLE CONNEXION MEMBRE    ******************************* */
    $(document.body).on('click', '.connexbutton', function(e){
        e.preventDefault();
        var myurl = $(this).attr('value');
        var connexmodal = document.getElementById('connexmodal');
        connexmodal.style.display = 'block';
        window.onclick = function(event)
            {
                if(event.target == connexmodal)
                    {
                        connexmodal.style.display = 'none';
                    }
            }
        lancerAjax(myurl, '#modalcontent');        
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            connexmodal.style.display = "none";
            };
    });

    
    /*  **************************     MODAL CREATION PRODUITS   ******************************* */
    $(document.body).on('click', '.ajouterproduit', function(e){
        e.preventDefault();
        var productmodal = document.getElementById('productmodal');
        productmodal.style.display = 'block';
        window.onclick = function(event)
            {
                if(event.target == productmodal)
                    {
                        productmodal.style.display = 'none';
                    }
            }
        var span = document.getElementsByClassName('close')[0];
        span.onclick = function(){
            productmodal.style.display = 'none';
        };
    })
    /*  **************************     MODAL MODIFICATION PRODUITS   ******************************* */
    $(document.body).on('click', '.modifyproduct', function(e){
        e.preventDefault();
        var myurl = $(this).attr('value');
        var name = $(this).attr('name');
        var popupmodal = document.getElementById('popupmodal');
        // Stuff the popup ----------------------------------------------
        popupmodal.style.display = "block"; 
        $('.productname').text(name);
        window.onclick = function(event){
            if(event.target == popupmodal){
                popupmodal.style.display = "none";
            }
        }
        var span = document.getElementsByClassName('close')[0];
        span.onclick = function(){
            popupmodal.style.display = "none";
        }
        $('.ajouterproduit').on('click', function(){
            popupmodal.style.display = "none";
        });
        // Launch AJAX ----------------------------------------------------
        lancerAjax(myurl, '#testmodal');
    })
    
    /*  **************************     MODAL CREATION PRODUITS   ******************************* */
    var testmodal = document.getElementById('testmodal');

    $(document.body).on('click', '.showmodal', function(){
        testmodal.style.display = "block";
        
        window.onclick = function(event){
            if(event.target == testmodal){
                testmodal.style.display = "none";
            }
        }
    })

    /*  **************************     TEST AJAX   ******************************* */
    

    addactive();
});







// Ancien modal
let selectMyProduct = document.getElementsByClassName("showmyproduct");  
function newmodal(){
    for(i=0; i<selectMyProduct.length; i++){
        let myproductvalue = $(selectMyProduct[i]).attr('value');
        let url = mybaseurl+'/modalproduct/'+myproductvalue;
        $(selectMyProduct[i]).on('click', function(){
            lancerAjax(url, showselected); 
            myProductModal.style.display = "block";
            window.onclick = function(event){
                if(event.target == myProductModal){
                    myProductModal.style.display = "none";
                }
            }           
        });
        $(sortir).on('click', function(){
            myProductModal.style.display = "none";
        });
    }
}  






