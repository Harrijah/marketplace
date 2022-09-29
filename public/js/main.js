$(document).ready(function() { 
    const tabs = document.querySelector(".wrapper");
    const tabButton = document.querySelectorAll(".mybutton");
    const contents = document.querySelectorAll(".content"); 
    let thema = document.querySelector('.thema');
    let themaChild = thema.children ;
    $('.mybutton').on('click', function(e){
        e.preventDefault();
        
        for(i=0; i<themaChild.length; i++){
            if(themaChild[i].classList.contains('active') == true){
                alert(themaChild[i].value);
            }
        }
    });


    changecategory(); // Changer la catégorie dans le menu déroulant
    changesouscategorie(); // Changer la sous-catégorie dans le menu déroulant
    toggleCreaBoutique(); // Page création nouvelle boutique : toggle des formulaires
    /*  ****************     UTILISER LE FILTRE PAR RAYON/CATEGORIE/SOUSCATEGORIE    ************ */
    // Slider principal page d'accueil
    filtre('.selectrayon2', 'url2', 'getSelectedProduct', '6', 'selectedproducts', '#homeselectedproduct');    
    filtre('.selectrayon2', 'url2', 'getSelectedProduct', '6', 'carouselproducts', '#changeCarousel');    
    // Page d'accueil
    filtre('.selectrayon', 'url2', 'getSelectedProduct', '10', 'allproductshome', '#allproductshome');   
    filtre('.selectcategory', 'url2', 'getProductByCategory', '10', 'allproductshome', '#allproductshome');
    filtre('.selectsouscategorie', 'url', 'getProductBySousCategory', '10', 'allproductshome', '#allproductshome');
    // Backoffice
    filtre('.selectrayon', 'url2', 'getSelectedProduct', '10', 'storebackofficeallproducts', '#backofficestoreproductlist');
    filtre('.selectcategory', 'url2', 'getProductByCategory', '10', 'storebackofficeallproducts', '#backofficestoreproductlist');
    filtre('.selectsouscategorie', 'url', 'getProductBySousCategory', '10', 'storebackofficeallproducts', '#backofficestoreproductlist');
    
    /*  **************************     USE CAROUSEL     ******************************* */
    function addactive(){ //Activer la première image dans le carousel
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
    
    /*  ****************     Utiliser le filtre   ************ */
    function filtre(bouton, url, fonction, limit, destination, contenu)
    {
        $(bouton).on('change', function(e)
        {
            e.preventDefault();
            var optionselect = this.options[this.selectedIndex];
            if(optionselect.classList == 'retourrayon') 
            {
                var urlx = $(this).attr(url)+'/getSelectedProduct/'+optionselect.value+'/'+limit+'/'+destination;
            }
            else if(optionselect.classList == 'retourcategorie')
            {
                var urlx = $(this).attr(url)+'/getProductByCategory/'+optionselect.value+'/'+limit+'/'+destination;
            }
            else
            {
                var urlx = $(this).attr(url)+'/'+fonction+'/'+optionselect.value+'/'+limit+'/'+destination;
            }
            lancerAjax(urlx, contenu);
        });
    }
    

    
    /*  **************************     TOGGLE MENU     ******************************* */
    $(tabs).on('click', function(e){
        const id = e.target.dataset.id;
        const element00 = document.getElementById(id);
        if (id) {
            tabButton.forEach(btn => {btn.classList.remove("active");});
            e.target.classList.add("active");
            e.target.classList.add("mybutton");
            
            contents.forEach(content => {content.classList.remove("active");});
            element00.classList.add("active");
        }
    });

    
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








