<div class="container">
    <div class="row">
        <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3>S'inscrire</h3>
                <hr>
                <form action="/register" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" name="nom" id="nom" value="<?= set_value('nom') ?>">
                            </div>
                        </div>  
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="prenoms">Prenoms</label>
                                <input type="text" class="form-control" name="prenoms" id="prenoms" value="<?= set_value('prenoms') ?>">
                            </div>                            
                        </div>  
                        <div class="col-12">
                            <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="text" class="form-control" value="<?= set_value('email') ?>" name="email" id="email">
                            </div>
                        </div>                 
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                            <label for="motdepasse">Mot de Passe</label>
                            <input type="password" class="form-control mb-3" name="motdepasse" id="motdepasse">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                            <label for="motdepasse_confirm">Confirmer Mot de Passe</label>
                            <input type="password" class="form-control mb-3" name="motdepasse_confirm" id="motdepasse_confirm">
                            </div>
                        </div>
                        <?php if (isset($validation)) { ?>
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php } ?>
                     
                    </div>   

                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="/" style="float:right">J'ai deja un compte</a>
                        </div>
                    </div>             
                </form>
            </div>
        </div>
    </div>
</div>