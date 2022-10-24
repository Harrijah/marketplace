$(document).ready(function() { 
    const tabs = document.querySelector(".wrapper");
    const selectButton = document.querySelector('.thema');
    const tabButton = document.querySelectorAll(".mybutton"); 
    const contents = document.querySelectorAll(".content"); 
    const mybaseurl = $(document.querySelector('#myurl')).attr('value'); // base URL pour le filtre (dans le header)
    const buttonLeft = document.getElementById('buttonLeft')
    const buttonRight = document.getElementById('buttonRight');
    const buttonUp = document.getElementById('buttonUp');
    const buttonDown = document.getElementById('buttonDown');
    const categories02 = document.querySelector('.categories02');
    const categorycontainer = document.querySelector('.categorycontainer');
    const listprod = document.querySelector('.listprod');
    const listprod04 = document.querySelector('.listprod04');

    let categoryWidth = categories02.clientWidth;
    let containerWidth = categorycontainer.clientWidth;
    let listprodHeight = listprod.clientHeight;
    let listprod04Height = listprod04.clientHeight;
    let distance01 = containerWidth - categoryWidth;
    let distance02 = listprod04Height - listprodHeight;
    let scrollAmount = 0;
    let showselected = document.querySelector('#showselected');
    let myProductModal = document.getElementById('thisismymodal'); // Sélectionner le modal sur la page d'accueil 
    let newContainer01 = document.querySelector('#homeselectedproduct'); // Sélectionner le container pour le modal
    let newContainer02 = document.querySelector('#allproductshome'); // Sélectionner le container pour le modal
    let newContainer03 = document.querySelector('#backofficestoreproductlist'); // Sélectionner le container pour le modal
    let thematique = 'selection';

    const firsttitle = document.getElementById('firsttitle');
    const welcometitle = document.querySelector('.welcometitle');
    const welcomelogo = document.querySelector('.welcomelogo');
    const mytestaccount = document.querySelector('.mytestaccount');
    const mytestbutton = document.querySelector('.mytestbutton');
    const myshowimage = document.querySelector('.myshowimage');
    const myshowimage2 = document.querySelector('.myshowimage2');
    let wordIndex = 0;
    let wordIndex02 = 0;
    let imageIndex = 0;
    let letterIndex = 0;
    let compteur01 = 0;
    
    let myword = [welcometitle, welcomelogo];
    let myword2 = [mytestaccount, mytestbutton];
    let myimage = [myshowimage, myshowimage2]; 

    
    let itemDuration;
    let itemTimeBeforeEntry;
    let wordLength = myword.length;
    let wordLength2 = myword2.length;
    let wordDuration;
    let wordTimeBeforeEntry;
    let wordLoopTotalDuration;
    let imageLength = myimage.length;
    let imageDuration;
    let imageTimeFadeOut;
    let imageTimeBeforeEntry;
    let imageLoopTotalDuration;
    let itemLoopTotalDuration; 
    let itemCounter = 0;
    let loopCounter = 0; 
    itemTimeBeforeEntry = 1500;
    let itemTotalTime = itemTimeBeforeEntry * length;
    
    
    
    function loopDuration(duration, latency){
        itemDuration = duration;
        itemTimeBeforeEntry = latency;
    };
    
    function initialLoop(myloop){        
        setTimeout(() => {
            myloop();
        }, itemTimeBeforeEntry);
    }
    function reInitializeLoop(myloop){ 
        setTimeout(()=>{
            myloop();
        }, itemDuration - itemTimeBeforeEntry);
    }
    
    const createView = (index, myarray, timeout)=>{
            myarray[index].classList.remove('content');
            setTimeout(() => {
                    myarray[index].classList.add('content');            
                }, timeout);
            }
    // createView(wordIndex, myword, itemDuration-300);
            
    // const loop01 = ()=>{
    //     loopDuration(5000, 5000);
    //     setTimeout(()=>{
    //         if(imageIndex >= imageLength){
    //             imageIndex = 0;
    //             reInitializeLoop(loop01);
    //         } 
    //         else 
    //         if(imageIndex < imageLength)
    //         {
    //             createView(imageIndex, myimage, itemDuration-300);
    //             imageIndex ++;
    //             initialLoop(loop01);
    //         }
    //     }, 0);
    // }

    const itemForLoop = (index, length, myarray, itemTimeBeforeEntry) => {
            if(index < length)
                {
                    if(itemCounter == 0)
                        {
                            console.log(myarray[index].textContent +" || test ajout || Index = "+ index + " || Compteur = "+ itemCounter);
                            myarray[index].classList.remove('content');
                            index++;                            
                            setTimeout(() => {
                                itemForLoop(index, length, myarray, itemTimeBeforeEntry);
                            }, itemTimeBeforeEntry);                           
                        }
                    else if(itemCounter == 1)
                        {
                            setTimeout(() => {
                                console.log(myarray[index].textContent +" || test enlevement || Index = "+ index + " || Compteur = "+ itemCounter);
                                myarray[index].classList.add('content');  
                                index++;
                                itemForLoop(index, length, myarray, itemTimeBeforeEntry); 
                            }, itemTimeBeforeEntry);
                        }
                    else 
                        {
                            index = 0;
                            itemCounter = 0;
                        }
                } 
            else 
                {  
                    index = 0;
                    itemCounter++;
                    itemForLoop(index, length, myarray, itemTimeBeforeEntry);
                }
    }
    const loop = ()=>{
        setTimeout(() => {
            itemForLoop(wordIndex, wordLength, myword, itemTimeBeforeEntry);
        }, 0);
        setTimeout(() => {
            itemForLoop(wordIndex02, wordLength2, myword2, itemTimeBeforeEntry);
        }, 8000);
        setTimeout(() => {
            loop();
        }, 16000);
    }
    loop();
    
    pagination(newContainer01, '#homeselectedproduct', 'selectedproducts');
    pagination(newContainer02, '#allproductshome', 'allproductshome');
    scrollMyList(buttonUp, 'up', listprod, 50, distance02, 375);
    scrollMyList(buttonDown, 'down', listprod, 50, distance02, 375);
    scrollMyList(buttonLeft, 'left', categories02, 125, distance01, 800); // Homepage : scroller de gauche à droite la liste des catégories
    scrollMyList(buttonRight, 'right', categories02, 125, distance01, 800); // Homepage : scroller de droite à gauche la liste des catégories
    newmodal02(newContainer01); // Activer le modal des produits || Slider principal
    newmodal02(newContainer02); // Activer le modal des produits || Page d'accueil
    newmodal02(newContainer03); // Activer le modal des produits || BackOffice
    buttonToggle(); // Toogle des boutons et contents : "active" ou non 
    changecategory(); // Changer la catégorie dans le menu déroulant
    changesouscategorie(); // Changer la sous-catégorie dans le menu déroulant
    toggleCreaBoutique(); // Page création nouvelle boutique : toggle des formulaires

    /*  ****************     UTILISER LE FILTRE PAR RAYON/CATEGORIE/SOUSCATEGORIE    ************ */    
    // Page d'accueil
    filtre('.selectrayon', 'url2', 'getSelectedProduct', '100', 'allproductshome', '#allproductshome', 'allprod');   
    filtre('.selectcategory', 'url2', 'getProductByCategory', '100', 'allproductshome', '#allproductshome', 'allprod');
    filtre('.selectsouscategorie', 'url', 'getProductBySousCategory', '100', 'allproductshome', '#allproductshome', 'allprod');
    // Backoffice
    filtre('.selectrayon', 'url2', 'getSelectedProduct', '100', 'storebackofficeallproducts', '#backofficestoreproductlist', 'allprod');
    filtre('.selectcategory', 'url2', 'getProductByCategory', '100', 'storebackofficeallproducts', '#backofficestoreproductlist', 'allprod');
    filtre('.selectsouscategorie', 'url', 'getProductBySousCategory', '100', 'storebackofficeallproducts', '#backofficestoreproductlist', 'allprod');
    
    // Page d'accueil / Slider prncipal / Choisir les thématiques : produit de la semaine, nouveauté, ou promo
    $(selectButton).on('click', (e)=>{
        thematique = $(e.target).attr('val'); // Obtenir la thématique
        var urlx2 = mybaseurl+'/filtre/getResultat/getSelectedProduct/0/6000/carouselproducts/'+thematique;
        var urlx1 = mybaseurl+'/filtre/getResultat/getSelectedProduct/0/6000/selectedproducts/'+thematique; 
        var urlx3 = mybaseurl+'/filtre/changeMyRayon'; 
        lancerAjax(urlx2, '#changeCarousel'); // Montrer la séclection de produits sur le carousel du slider
        lancerAjax(urlx1, '#homeselectedproduct'); // Montrer la sélection de produits sur la liste de produits sur le slider principal
        lancerAjax(urlx3, '#changeMyRayon'); // Réinitialiser la liste des rayons dans la balise "SELECT"
        newmodal02(newContainer01); // Montrer le modal pour les produits filtrés
        // Page d'accueil/ Slider principal / Sélectionner les produits par rayon en fonction de la thématique ci-dessus
       
    });

    // Page d'accueil/ Slider principal / Sélectionner les produits par rayon en fonction de la thématique ci-dessus
    $('.selectrayon2').on('input', (e)=>{
        // var optionselect = this.options[this.selectedIndex];
        let optionselect = e.target.options.selectedIndex;
        var urlx1 = e.target.attributes[2].value+'/getSelectedProduct/'+optionselect+'/6/selectedproducts/'+thematique;
        var urlx2 = e.target.attributes[2].value+'/getSelectedProduct/'+optionselect+'/6/carouselproducts/'+thematique;
        lancerAjax(urlx1, '#homeselectedproduct');
        lancerAjax(urlx2, '#changeCarousel');
        newmodal02(newContainer01);
        addactive();
    });

    /*  **************************     PAGINATION DES RESULTATS     ******************************* */
    function pagination(container, destination, content){
        container.addEventListener('click', function(e){
            let paginationButton = e.target;
            if(paginationButton.classList.contains('mylist') == true){
                paginationUrl = $(paginationButton).attr('uri');
                let buttonSplit = paginationUrl.split('/');
                if(buttonSplit.length>=5){
                    lancerAjax(paginationUrl, destination);
                }
                else{
                    if(destination == '#allproductshome'){
                        lancerAjax(mybaseurl+'/filtre/getResultat/getSelectedProduct/0/6000/'+content+'/allprod/'+buttonSplit[4], container);
                    } else {
                        lancerAjax(mybaseurl+'/filtre/getResultat/getSelectedProduct/0/6000/'+content+'/'+thematique+'/'+buttonSplit[4], container);
                    }
                }
            }
        });
    }
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
        .done((data)=>{
            if(ajaxDestination == '#changeCarousel'){
                $(ajaxDestination).html(data);
                addactive();
            } else {
                $(ajaxDestination).html(data);
            }
        })
        .fail((errorMessage)=>{
            alert(errorMessage);
        });
    }
    
    /*  ****************     Utiliser le filtre de produits  ************ */ 
    function filtre(bouton, url, fonction, limit, destination, contenu, themaValue)
    {
        $(bouton).on('change', function(){
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
            // takefunction();
        });
    }
      
    // Une fois que les produits sont affichés, on va sortir un modal pour chacun des produits listés par le filtre
    function newmodal02(container){
        $(container).on('click', (e)=>{ // lorsqu'on clique sur les éléments du container
            let monlien = e.target; // créer un variable pour l'élément cliqué
            if(monlien.classList.contains("showmyproduct02") == true){ // Condition montrant si l'élément cliqué est bien un produit
                myproductvalue = $(monlien).attr('value'); // Créer une variable pour l'ID du produit
                url = mybaseurl+'/filtre/modalproduct/'+myproductvalue; // Créer un lien pour le Controller qui va gérer la requête
                lancerAjax(url, showselected); // lancer la requête à l'aide d'Ajax

                /* ----------- Montrer le modal ------------ */
                myProductModal.style.display = "block"; //montrer le modal avec les résultats obtenus par l'Ajax
                window.onclick = (event)=>{ // fermer le modal
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

    /*  ************************     SCROLLER LA LISTE DES RESULTATS    ************************** */
    function scrollMyList(button, direction, container, step, distance, speed){
        $(button).on('click', ()=>{
            let deplacement = setInterval(()=>{
                if(direction == 'up'){
                    container.scrollTop -= step; 
                } else if (direction == 'down'){
                    container.scrollTop += step;
                } else if (direction == 'left'){
                    container.scrollLeft -= step;
                } else if (direction == 'right'){
                    container.scrollLeft += step;
                }
                scrollAmount += step;
                if(scrollAmount >= distance){
                    clearInterval(deplacement);
                }
            }, speed);            
        });
    }

    /*  **************************     TOGGLE MENU / BOUTONS    ******************************* */
    function buttonToggle(){         
        $(tabs).on('click', (e)=>{
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
    let tabs02 = document.querySelector('.brefwrapper');
    let myButton02 = document.querySelectorAll('.myButton02');
    $(tabs02).on('click', (e)=>{
        let id03 = e.target.dataset.id;
       if (id03) {
        myButton02.forEach(btn => 
            {
                btn.classList.remove("active");
            }
            );
            e.target.classList.add("active");
            e.target.classList.add("myButton02");
       }
    });
    
    /*  ****************     Activer le filtre de produits   ************ */
    function changecategory()
    {
        $('.selectrayon').on('change', (e)=>{
            var optionselect = e.target.options.selectedIndex;
            var myurl03 = e.target.attributes[2].value+'/'+optionselect;
            lancerAjax(myurl03, '.selectcategory');
            $('.selectsouscategorie').html("<option></option>"); 
        });
    }
    function changesouscategorie()
    {
        $('.selectcategory').on('change', (e)=>{
            var optionselect = e.target.options[e.target.options.selectedIndex];

            if(optionselect.classList == 'retourrayon')
            {
                var myurl02 = mybaseurl+'/filtre/changecategorie/0';
            }
            else
            {
                var myurl02 = mybaseurl+'/filtre/changecategorie/'+optionselect.value;
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
    
        $(previous).on('click', ()=>{if(coeff > 1){coeff--;}});
        $(next).on('click', ()=>{if(coeff < 3){coeff++;}}); 
        $(tabs2).on('click', ()=>{
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
    $(document.body).on('click', '.createbutton', (e)=>{
        e.preventDefault();
        var myurl =$(this).attr('value');
        var connexmodal = document.getElementById('connexmodal');
        connexmodal.style.display = 'block';
        window.onclick = (event)=>{
            if(event.target == connexmodal){
                connexmodal.style.display = "none";
            }
        }
        lancerAjax(myurl, '#modalcontent');        
        var span = document.getElementsByClassName("close")[0];
        span.onclick = ()=> {
            connexmodal.style.display = "none";
            };
    });

    /*  **************************     TOGGLE CONNEXION MEMBRE    ******************************* */
    $(document.body).on('click', '.connexbutton', (e)=>{
        e.preventDefault();
        var myurl = $(this).attr('value');
        var connexmodal = document.getElementById('connexmodal');
        connexmodal.style.display = 'block';
        window.onclick = (event)=>{
                if(event.target == connexmodal)
                    {
                        connexmodal.style.display = 'none';
                    }
            }
        lancerAjax(myurl, '#modalcontent');        
        var span = document.getElementsByClassName("close")[0];
        span.onclick = () => {
            connexmodal.style.display = "none";
            };
    });

    
    /*  **************************     MODAL CREATION PRODUITS   ******************************* */
    $(document.body).on('click', '.ajouterproduit', (e)=>{
        e.preventDefault();
        var productmodal = document.getElementById('productmodal');
        productmodal.style.display = 'block';
        window.onclick = (event)=>{
                if(event.target == productmodal)
                    {
                        productmodal.style.display = 'none';
                    }
            }
        var span = document.getElementsByClassName('close')[0];
        span.onclick = ()=>{
            productmodal.style.display = 'none';
        };
    })
    /*  **************************     MODAL MODIFICATION PRODUITS   ******************************* */
    $(document.body).on('click', '.modifyproduct', (e)=>{
        e.preventDefault();
        var myurl = $(this).attr('value');
        var name = $(this).attr('name');
        var popupmodal = document.getElementById('popupmodal');
        // Stuff the popup ----------------------------------------------
        popupmodal.style.display = "block"; 
        $('.productname').text(name);
        window.onclick = (event)=>{
            if(event.target == popupmodal){
                popupmodal.style.display = "none";
            }
        }
        var span = document.getElementsByClassName('close')[0];
        span.onclick = ()=>{
            popupmodal.style.display = "none";
        }
        $('.ajouterproduit').on('click', ()=>{
            popupmodal.style.display = "none";
        });
        // Launch AJAX ----------------------------------------------------
        lancerAjax(myurl, '#testmodal');
    })
    
    /*  **************************     MODAL CREATION PRODUITS   ******************************* */
    var testmodal = document.getElementById('testmodal');

    $(document.body).on('click', '.showmodal', ()=>{
        testmodal.style.display = "block";
        
        window.onclick = (event)=>{
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
        let url = mybaseurl+'/filtre/modalproduct/'+myproductvalue;
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






