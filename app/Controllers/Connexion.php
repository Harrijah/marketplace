<?php 
    namespace App\Controllers;
    use App\Models\RayonModel;
    use App\Models\CategorieModel;
    use App\Models\SouscategorieModel;
    $rayon = model(RayonModel::class);  

    class Connexion extends BaseController
    {
        
// ------------------------------------------------------ page creators -----------------------------------------------------
        public function testpage()
        {
            $rayon  = model(RayonModel::class);
            $idrayon = "1";
            $globaldata = [
                'pagetitle' => 'Ma page de test', 
                'rayons' => $rayon->linkrayoncategorie($idrayon),
            ];
            return view('Templates/header', $globaldata)
            . view('testpage', $globaldata)
            . view('Templates/footer');
        } 
        public function testme()
        {
            $data = model(RayonModel::class);
            $puredata = [
                'mesrayons'  => $data->getRayon()];
            return view('testhtml', $puredata);
        }
// --------------------------------------------- Se connecter --------------------------------------------------------


// --------------------------------------------- Regarder mon compte -------------------------------------------------
        
        public function moncompte()
        {
            $rayon = model(RayonModel::class); 
            $category = model(CategorieModel::class);
            $souscategory = model(SouscategorieModel::class);
            $data = [
                'rayons' => $rayon->getRayon(),
                'categories' => $category->getCategory(),
                'souscategories' => $souscategory->getSouscategory(),
                'pagetitle' => 'Mon compte'
            ];
            return view('Templates/header', $data)
            . view('connexion/moncompte', $data)
            . view('Templates/footer');
        }
// --------------------------------------------- create rayon / categorie / sous-categorie -----------------------------
        public function createrayon()
        {
            $data['pagetitle'] = 'Mon compte';
            $model = model(RayonModel::class);
            if($this->request->getMethod() === 'post' && $this->validate([
                'rayon' => 'required',
            ])) 
            {
                $model->save([
                    'rayon' => $this->request->getPost('rayon'),
                ]);
            }
            return redirect()->to('/connexion/moncompte');
        }
        public function createcategory()
        {
            $data['pagetitle'] = 'Mon compte';
            $model = model(CategorieModel::class);
            if($this->request->getMethod() === 'post' && $this->validate([
                'rayon' => 'required',
                'categorie' => 'required',
            ])) {
                $model->save([
                    'rayon' => $this->request->getPost('rayon'),
                    'categorie' => $this->request->getPost('categorie'),
                ]);
            }
            return redirect()->to('/connexion/moncompte');
        }
        public function souscategorie()
        {
            $data['pagetitle'] = 'Mon compte';
            $model = model(SousCategorieModel::class);
            if($this->request->getMethod() === 'post' && $this->validate([
                'categorie' => 'required',
                'souscategorie' => 'required',
            ])) {
                $model->save([
                    'categorie' => $this->request->getPost('categorie'),
                    'souscategorie' => $this->request->getPost('souscategorie'),
                ]);
            }
            return redirect()->to('/connexion/moncompte');
        }    



































































































        public function createmodal()
        {
            $modalcontent="";
            $modalcontent .="<div class='modal-header text-center bg-dark mt-1 mr-1 mb-1 ml-1 pt-1 pr-1 pb-1 pl-1'>  ";          
                $modalcontent .="<h4 class='text-warning mb-4 float-left' style=''>Créez votre compte</h4>";
                $modalcontent .="<span class='close float-left'>&times;</span>";
            $modalcontent .="</div>";
            $modalcontent .="<div id='modalbody' class='modal-body bg-light mb-1'>";
                $modalcontent .="<form action='' method='post' class='form-group pt-3 pr-3 pb-3 pl-3'>";
                    $modalcontent .="<label for='nom' class='mb-0 text-dark'>Nom</label>";
                    $modalcontent .="<input type='text' name='nom' class='form-control mb-2'>";
                    $modalcontent .="<label for='prenom' class='mb-0 text-dark'>Prenom</label>";
                    $modalcontent .="<input type='text' name='prenom' class='form-control mb-2'>";
                    $modalcontent .="<label for='mail' class='mb-0 text-dark'>Adresse mail</label>";
                    $modalcontent .="<input type='email' name='mail' placeholder='Entrer votre adresse email' class='form-control mb-2'>";
                    $modalcontent .="<label for='mdp' class='mb-0 text-dark'>Mot de passe</label>";
                    $modalcontent .="<input type='password' name='mdp' placeholder='Entrer votre mot de passe' class='form-control mb-1'>";
                    $modalcontent .="<input type='password' name='mdp' placeholder='Confirmer votre mot de passe' class='form-control mb-3'>";
                    $modalcontent .="<input type='submit' value='Enregistrer' class='form-control btn btn-outline-warning'>";
                $modalcontent .="</form>";
            $modalcontent .="</div>";
            $modalcontent .="<div class='modal-footer'>";
                $modalcontent .="<span class='text-light'>Créez votre compte afin de se connecter sur le site. </span>";
                // $modalcontent .="<a href='#' class='text-warning'>ici</a>";
            $modalcontent .="</div>";
            echo $modalcontent;            
        }
        public function connectmodal()
        {
            $modalcontent ="";
            $modalcontent .="<div class='modal-header text-center bg-dark mt-1 mr-1 mb-1 ml-1 pt-1 pr-1 pb-1 pl-1'>  ";          
                $modalcontent .="<h4 class='text-warning mb-4 float-left' style=''>Connectez-vous, ici</h4>";
                $modalcontent .="<span class='close float-left'>&times;</span>";
            $modalcontent .="</div>";
            $modalcontent .="<div id='modalbody' class='modal-body bg-light mb-1'>";
                $modalcontent .="<form action='' method='post' class='form-group pt-3 pr-3 pb-3 pl-3'>";
                    $modalcontent .="<input type='email' name='mail' placeholder='Entrer votre adresse email' class='form-control mb-2'>";
                    $modalcontent .="<input type='password' name='password' placeholder='Entrer votre mot de passe' class='form-control mb-4'>";
                    $modalcontent .="<input type='submit' value='Se connecter' class='form-control btn btn-outline-warning'>";
                $modalcontent .="</form>";
            $modalcontent .="</div>";
            $modalcontent .="<div class='modal-footer'>";
                $modalcontent .="<span class='text-light'>Pas encore inscrit? </span><br><span class='text-light'>Créez votre compte en 1 minute</span>";
                // $modalcontent .="<a href='#' class='createbutton text-warning'>ici</a>";
            $modalcontent .="</div>";
            echo $modalcontent;
        }

        
    }