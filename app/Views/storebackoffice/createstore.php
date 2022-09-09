<div class="formcontainer04 wrapper2">
    <div class="">
        <div class="">
            <div class="buttonWrapper d-block">
                <div class="btn-group btn-group-justified">
                    <button class="active btn mybutton btn-outline-warning pt-3 pr-3 pb-3 pl-3" id="menu1">&nbsp; &nbsp; &nbsp; Etape 1 &nbsp; &nbsp; &nbsp;</button>
                    <button class="btn mybutton btn-outline-warning pt-3 pr-3 pb-3 pl-3" id="menu2">&nbsp; &nbsp; &nbsp;Etape 2 &nbsp; &nbsp; &nbsp;</button>
                    <button class="btn mybutton btn-outline-warning pt-3 pr-3 pb-3 pl-3" id="menu3">&nbsp; &nbsp; &nbsp; Etape 3 &nbsp; &nbsp; &nbsp;</button>
                </div>
            </div>
        </div>
    </div>
    <div class="formcontainer03 bg-dark">
        <div class="infoboutique">
            <div class="card">
                <div class="card-header text-center"><h3 style="font-size:24px">Créez votre boutique en quelques minutes</h3></div>
                <div class="card-body">
                    <p>Veuillez renseigner les champs demandés, puis cliquer sur le bouton <b>Suivant</b>, ci-dessous.<br>
                    A la fin du formulaire, cliquez sur le bouton <b>Valider</b>.<br>
                    Vous pourrez modifier les informations, plus tard, depuis votre tableau de bord.
                    </p>
                </div>
                <div class="btn-group btn-group-justified">
                    <button type="button" id="buttonprevious" class="btn btn-outline-warning">Retour</button>
                    <button type="button" id="buttonnext" class="btn btn-outline-warning">Suivant</button>
                </div>
            </div>
        </div>
        <div class="formboutique01 contentWrapper bg-light">
            <form action="" method="post">
                <div class="active content bg-dark pt-0 pr-0 pb-0 pl-0" id="1">
                    <div class="card">
                        <div class="card-header text-center"><h4>Vos coordonnées </h4></div>
                        <div class="card-body pr-5 pl-5">
                            <label for="nomboutique" class="mb-0">Nom de la boutique</label>
                            <input type="text" name="nomboutique" class="form-control">
                            <label for="adresseboutique" class="mb-0">Adresse</label>
                            <input type="text" nom="adresseboutique" class="form-control">
                            <label for="adressemail" class="mb-0">Email</label>
                            <input type="email" name="adressemail" class="form-control">
                            <label for="telephone01" class="mb-0">Telephone 01</label>
                            <input type="text" name="telephone01" class="form-control">
                            <label for="telephone02" class="mb-0">Telephone 02</label>
                            <input type="text" name="telephone02" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="content bg-dark pt-0 pr-0 pb-0 pl-0" id="2">
                    <div class="card">
                        <div class="card-header text-center"><h4>A propos de votre enseigne</h4></div>
                        <div class="card-body">
                            <label for="descriptif" class="mb-0">Description : </label><br>
                            <span style="color:grey; font-size:12px"><em>Décrivez votre boutique en quelques lignes, ce qui en fait sa particularité, de façon à convaincre les internautes à visiter votre boutique.</em></span>
                            <textarea name="descriptif" id=""  rows="3" class="form-control mb-2" placeholder="Décrivez votre magasin, ici ..."></textarea>                            
                            <label for="categorie" class="mb-0">Catégorie principale : <br><span style="color:grey; font-size:12px"><em>Choisissez votre catégorie principale, vous pourrez en ajouter d'autres plus tard.</em></span></label><br>
                                <input type="radio" name="categorie" value="1" checked>&nbsp;Maison <br>
                                <input type="radio" name="categorie" value="2">&nbsp;Mode <br>
                                <input type="radio" name="categorie" value="3">&nbsp;Musique <br>
                                <input type="radio" name="categorie" value="4">&nbsp;Sport <br>
                                <input type="radio" name="categorie" value="5">&nbsp;Auto-Moto <br>
                                <input type="radio" name="categorie" value="6">&nbsp;High Tech <br>
                                <input type="radio" name="categorie" value="7">&nbsp;Bureau <br>
                                <input type="radio" name="categorie" value="8">&nbsp;Quincaillerie <br>
                                <input type="radio" name="categorie" value="9">&nbsp;Epicerie <br>
                                <input type="radio" name="categorie" value="10">&nbsp;Pets <br>
                        </div>
                    </div>
                </div>
                <div class="content bg-dark pt-0 pr-0 pb-0 pl-0" id="3">
                    <div class="card">
                        <div class="card-header text-center"><h4>Informations additionnelles</h4></div>
                        <div class="card-body">
                            <label for="cgvtext" class="mb-0">Conditions Générales de Ventes</label><br>
                            <span style="color:grey; font-size:12px"><em>Entrez vos conditions générales de vente, ici; ou importer un fichier de type PDF</em></span><br>
                            <textarea type="text" name="cgvtext" name="cgvtext" class="form-control mb-2" rows="3" placeholder="Ecrire ici ..."></textarea>
                            <input type="file" name="cgv" id="">

                            <input type="submit" class="form-control btn btn-outline-warning mt-3" value="Valider">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div>
        <div class="">
        </div>
    </div>
</div>