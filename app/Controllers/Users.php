<?php

namespace App\Controllers ;

use App\Models\UserModel;
use App\Models\RayonModel;
use App\Controllers\Accueil;

class Users extends BaseController
{
    public function index()
    {
        $rayon = model(RayonModel::class);
        $data = [
            'pagetitle' => 'Connexion',
            'rayons' => $rayon->getSelectedRayon(),
            'rayon' => $rayon->getSelectedRayon(),
        ];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'motdepasse' => 'required|min_length[8]|max_length[255]',
            ];

            $errors = [
                'motdepasse' => [
                    'validateUser' => 'Email ou/et Mot de passe non valide'
                ]
            ];

            if (! $this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel() ;

                $user = $model->where('email', $this->request->getVar('email'))
                              ->first();
                              
                $this->setUserSession($user) ;

                return redirect()->to(base_url()) ;

            }    
        }
        echo view('Template-parts/header', $data);
        echo view('/login');
        echo view('Template-parts/footer');
    }

    private function setUserSession($user){
        $data = [
            'id' => $user['id'],
            'nom' => $user['nom'],
            'prenoms' => $user['prenoms'],
            'email' => $user['email'],
            'adresse' => $user['adresse'],
            'telephone' => $user['telephone'],
            'connecté' => true,
        ];

        session()->set($data) ;
        return true ;
    }

    public function register()
    {
        $rayon = model(RayonModel::class);
        $data = [
            'pagetitle' => 'Enregistrement',
            'rayons' => $rayon->getSelectedRayon(),
            'rayon' => $rayon->getSelectedRayon(),
        ];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            //Validation des champs
            $rules = [
                'nom' => 'required|min_length[3]|max_length[20]',
                'prenoms' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'adresse' => 'required|min_length[10]|max_length[255]',
                'telephone' => 'required|min_length[8]|max_length[255]',
                'motdepasse' => 'required|min_length[8]|max_length[255]',
                'motdepasse_confirm' => 'matches[motdepasse]',
            ];

            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                //Ajout user dans la BDD
                $model = model(UserModel::class);

                $newData = [
                    'nom' => $this->request->getVar('nom'),
                    'prenoms' => $this->request->getVar('prenoms'),
                    'email' => $this->request->getVar('email'),
                    'adresse' => $this->request->getVar('adresse'),
                    'telephone' => $this->request->getVar('telephone'),
                    'motdepasse' => $this->request->getVar('motdepasse'),
                ] ;

                $model->save($newData) ;
                $session = session() ;
                $session->setFlashdata('success', 'Enregistré avec succès!   Vous pouvez vous connecter maintenant!') ;
                return redirect()->to('/') ;
            }
        }

        echo view('Template-parts/header', $data);
        echo view('register');
        echo view('Template-parts/footer');   
    }

    public function profile()
    {
        // if (!session()->get('connecté')) {
        //     redirect()->to('/');
        // }
        $data = [];
        helper(['form']);
        $model = new UserModel() ;
        $rayon = model(RayonModel::class);

        if ($this->request->getMethod() == 'post') {
            //Validation des champs
            $rules = [
                'nom' => 'required|min_length[3]|max_length[20]',
                'prenoms' => 'required|min_length[3]|max_length[20]',
            ];

            if ($this->request->getPost('motdepasse') != '') {
                $rules['motdepasse'] = 'required|min_length[8]|max_length[255]' ;  
                $rules['motdepasse_confirm'] = 'matches[motdepasse]' ;
            }

            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {

                $newData = [
                    'id' => session()->get('id'),
                    'nom' => $this->request->getPost('nom'),
                    'prenoms' => $this->request->getPost('prenoms'),
                ] ;
                if ($this->request->getPost('motdepasse') != '') {
                    $newData['motdepasse'] = $this->request->getPost('motdepasse') ;
                }

                $model->save($newData) ;
        
                session()->setFlashdata('success', 'Successfuly Updated') ;
                return redirect()->to('/profile') ;
            }
        }
        $data = [
            'user' => $model->where('id', session()->get('id'))->first(),
            'pagetitle'  => "Mon compte",
            'rayon'  => $rayon->getSelectedRayon()

        ];
        echo view('Template-parts/header', $data);
        echo view('profile');
        echo view('Template-parts/footer');
    }

    public function logout()
    {
        session()->destroy() ;

        return redirect()->to('/') ;
    }


}