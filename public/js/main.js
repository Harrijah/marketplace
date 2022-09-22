$(document).ready(function() {
    changecategory();
    changesouscategorie();
    /*  ****************     Activer le filtre de produits   ************ */
    function changecategory()
    {
        $('.selectrayon').on('change', function(e){
            e.preventDefault();
            var optionselect = this.options[this.selectedIndex].value;
            var myurl03 = $(this).attr('url')+'/'+optionselect;
            $.ajax({
                url: myurl03,
                type: 'post',
                data: {}
            })
            .done(function(data){
                $('.selectcategory').html(data);
                $('.selectsouscategorie').html("<option></option>"); 
                // $('.selectsouscategorie').html($data2); 
            })
            .fail(function(errorMessage){
                alert(errorMessage);
            });
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
            $.ajax({
                'url': myurl02,
                'type': 'post',
                'data': {}
            })
            .done(function(data){
                $('.selectsouscategorie').html(data);
            })
            .fail(function(errorMessage){
                alert(errorMessage);
            });
        });
    }
    
    /*  ****************     Utiliser le filtre par rayon à côté du slider principal dans la page d'accueil    ************ */
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
            $.ajax({
                url: urlx,
                type: 'post',
                data: {}
            })
            .done(function(data){
                $(contenu).html(data);
            })
            .fail(function(errorMessage){
                alert(errorMessage);
            });
        });
    }
    /*  ****************     UTILISER LE FILTRE PAR RAYON/CATEGORIE/SOUSCATEGORIE    ************ */
    // Rayon à côté slider principal page d'accueil
    filtre('.selectrayon2', 'url2', 'getSelectedProduct', '6', 'selectedproducts', '#homeselectedproduct');    
    // Page d'accueil
    filtre('.selectrayon', 'url2', 'getSelectedProduct', '10', 'allproductshome', '#allproductshome');   
    filtre('.selectcategory', 'url2', 'getProductByCategory', '10', 'allproductshome', '#allproductshome');
    filtre('.selectsouscategorie', 'url', 'getProductBySousCategory', '10', 'allproductshome', '#allproductshome');
    // Backoffice
    filtre('.selectrayon', 'url2', 'getSelectedProduct', '10', 'storebackofficeallproducts', '#backofficestoreproductlist');
    filtre('.selectcategory', 'url2', 'getProductByCategory', '10', 'storebackofficeallproducts', '#backofficestoreproductlist');
    filtre('.selectsouscategorie', 'url', 'getProductBySousCategory', '10', 'storebackofficeallproducts', '#backofficestoreproductlist');
    

    
    /*  **************************     TOGGLE MENU     ******************************* */
    const tabs = document.querySelector(".wrapper");
    const tabButton = document.querySelectorAll(".mybutton");
    const contents = document.querySelectorAll(".content");

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
        $.ajax({
            url: myurl ,
            type: "post" ,
            data: {}
        })
        .done(function(data){
            $('#modalcontent').html(data);        
            var span = document.getElementsByClassName("close")[0];
            span.onclick = function() {
                connexmodal.style.display = "none";
                }
        })
        .fail(function(errorMessage){
            alert(errorMessage);
        })
    });

    /*  **************************     TOGGLE CONNEXION MEMBRE    ******************************* */
    $(document.body).on('click', '.connexbutton', function(e){
        e.preventDefault();
        var myurl = $(this).attr('value');
        var connexmodal = document.getElementById('connexmodal');
        connexmodal.style.display = 'block';
        window.onclick = function(event){
            if(event.target == connexmodal){
                connexmodal.style.display = 'none';
            }
        }
        $.ajax({
            url: myurl ,
            type: "post" ,
            data: {}
        })
        .done(function(data){
            $('#modalcontent').html(data);
            var span = document.getElementsByClassName("close")[0];
            span.onclick = function(){
                connexmodal.style.display = "none";
            }
        })
        .fail(function(errorMessage){
            console.log(errorMessage);
        })
    });

    
    /*  **************************     MODAL CREATION PRODUITS   ******************************* */
    $(document.body).on('click', '.ajouterproduit', function(e){
        e.preventDefault();
        var productmodal = document.getElementById('productmodal');
        productmodal.style.display = 'block';
        window.onclick = function(event){
            if(event.target == productmodal){
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
        $.ajax({
            url: myurl,
            type: 'post',
            data: {},
        })
        .done(function(data){
            $('#testmodal').html(data); 
        })
        .fail(function(errorMessage){
            console.log(errorMessage);
        })
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
    

    
});








