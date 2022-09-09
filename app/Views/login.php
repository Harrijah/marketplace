<div class="container">
    <div class="row">
        <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3>Se connecter</h3>
                <hr>
                <?php if (session()->get('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->get('success') ?>
                    </div>
                <?php endif; ?>
                <form action="/" method="post"> 
                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="text" class="form-control" value="<?= set_value('email') ?>" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="motdepasse">Mot de Passe</label>
                        <input type="password" class="form-control mb-3" name="motdepasse" id="motdepasse">
                    </div>       
                    <?php if (isset($validation)) { ?>
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php } ?>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Entrer</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="/register" style="float:right">Creer un compte</a>
                        </div>
                    </div>             
                </form>
            </div>
        </div>
    </div>
</div>