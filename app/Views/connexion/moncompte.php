<div>
    <?php echo session()->getFlashdata('error'); ?>
    <?= service('validation')->listErrors() ?> 

    <div class="wrapper">
        <div class="buttonWrapper">
            <div class="btn-group">
                <div class="mybutton btn btn-outline-warning active" data-id="monpanier">Mon panier</div>
                <div class="mybutton btn btn-outline-warning" data-id="mesfactures">Mes factures</div>
                <div class="mybutton btn btn-outline-warning" data-id="mesmessages">Catégories</div>
                <button type="button" onclick="location.href='<?php echo base_url('storebackoffice/mystore'); ?>'" class="btn btn-outline-warning">Mon magasin</button>
            </div>
        </div>
        <div class="contentWrapper formcontainer03">
            <div class="content active" id="monpanier">
                <div class="rowforms">
                    <div class="parentcategorie rayon">
                        <div class="formcontainer01 pr-3 pl-3">
                            <form action="/connexion/createrayon" method="post" class="form-group">                            
                                <?php //echo csrf_field(); ?>
                                <h3>Création Rayon</h3>
                                <label for="rayon" class="form-control">Root</label>
                                <input type="text" name="rayon"  class="form-control" placeholder="Nom de la catégorie">
                                <input type="submit" name="submit" value="Valider" class="form-control btn-outline-primary mt-2">
                            </form>
                        </div>
                    </div>
                    <div class="categorie rayon">
                        <div class="formcontainer02 pr-3 pl-3">
                            <form action="/connexion/createcategory" method="post" class="form-group">
                                <h3>Création catégorie</h3>
                                    <select name="rayon" class="form-control">
                                        <?php foreach($rayons as $ray): ?>
                                            <label for="" class="form-control">Catégorie</label>
                                            <option value="<?php echo $ray['id']; ?>">Rayon <?php echo $ray['rayon']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                <input type="text" name="categorie"  class="form-control mt-2" placeholder="Nom de la catégorie">
                                <input type="submit" name="submit" value="Valider" class="form-control btn-outline-primary mt-2">
                            </form>
                        </div>
                    </div>
                    <div class="souscategorie rayon">
                        <div class="formcontainer03 pr-3 pl-3">
                            <form action="/connexion/souscategorie" method="post" class="form-group">
                                <h3>Création sous-catégorie</h3>
                                <select name="categorie" id=""  class="form-control">
                                    <?php foreach($categories as $category): ?>
                                        <option value="<?php echo $category['id']; ?>"><?php echo $category['categorie']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <input type="text" name="souscategorie"  class="form-control mt-2" placeholder="Nom de la sous-catégorie">
                                <input type="submit" name="submit" value="Valider" class="form-control btn-outline-primary mt-2">
                            </form>
                        </div>
                    </div>
                </div>
                <h3>Les catégories disponibles</h3>
                <div class="rowforms2 mt-2">
                    <div class="parentcategorie rayon mt-2">
                        <div class="formcontainer01 pr-3 pl-3">
                            <select name="rayon" id="testidselect" class="form-control">
                                <?php foreach($rayons as $ray): ?>
                                    <label for="" class="form-control">Catégorie</label>
                                    <option value="<?php echo $ray['id']; ?>">Rayon <?php echo $ray['rayon']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="parentcategorie rayon mt-2">
                        <div class="formcontainer01 pr-3 pl-3">
                            <select name="rayon" class="form-control">
                                <?php foreach($categories as $category): ?>
                                    <option value="<?php echo $category['id']; ?>">Catégorie <?php echo $category['categorie']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="parentcategorie rayon mt-2">
                        <div class="formcontainer01 pr-3 pl-3">
                            <select name="rayon" class="form-control">
                                <?php foreach($souscategories as $souscategorie): ?>
                                    <label for="" class="form-control">Catégorie</label>
                                    <option value="<?php echo $souscategorie['id']; ?>">Sous-catégorie <?php echo $souscategorie['souscategorie']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content" id="mesfactures">2</div>
            <div class="content" id="mesmessages">
                
            </div>
        </div>
    </div>
</div>