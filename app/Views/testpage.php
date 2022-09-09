<div class="grandebarre">
    <div class="menulava ">
        <div class="tranony">
            <div class="chambre">                
                <div class="menukely1"></div>
                <div class="menukely2"></div>
                <div class="menukely3">
                </div>
            </div>
        </div>
    </div>
    <div class="colonnegauche"></div>
    <div class="colonnedroite">
        <div class="bouton">
            <button type="button" onclick="myfunction('testme');" class="btn btn-outline-warning myprettybutton" id="myprettybutton">Push me</button>
        </div>
        <div>
            <div id="sectiontest">Test</div>
            <p>Nom du produit : <span id="nom"><?php if(isset($variable)){echo $variable;} ?>csqc</span></p>
            <p>Rayon concerné : <span id="rayon"><?php if(isset($variable)){echo $rayon;} ?></span></p>
            <p>Catégorie concerné : <span id="catégorie"></span></p>
        </div>
        <script>
            function myfunction(url){
                // alert(myprettybutton);
                var sectiontest = document.getElementById('sectiontest');
                var ajax = new XMLHttpRequest();
                ajax.onreadystatechange = function(){
                    if(this.readyState==4 && this.status==200){
                        sectiontest.innerHTML = this.responseText;
                    };
                } 
                ajax.open('GET', url, true);
                ajax.send();
                var nom = document.getElementById('nom'); 
                nom.style = 'color: red;';
                $(sectiontest).on('change', function(e){
                    e.preventDefault();
                    alert('change OK');
                });
            }
        </script>
    </div>
</div>
