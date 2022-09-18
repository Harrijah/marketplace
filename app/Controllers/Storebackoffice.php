<?php namespace App\Controllers; 
    use App\Models\RayonModel;
    use App\Controllers\Produit;
    use App\Controllers\Filtre;

    class Storebackoffice extends BaseController
    {
// --------------------------------------------- Creer compte & vue sur store backoffice ------------------------------
        public function createstore()
        {
            $data['pagetitle'] = 'A propos de la boutique';  
            return view('Templates/header', $data) 
            . view('storebackoffice/createstore') 
            . view('Templates/footer');
        }
        public function mystore()
        {
            $rayon = model(RayonModel::class);
            $products = model(Produit::class); 
            $assets = model(Assets::class);
            $data = [
                'pagetitle' => 'Mon magasin',
                'rayons' => $rayon->getRayon(),
                'rayon' => $rayon->getSelectedRayon(),
                'products' => $products->getSelectedProduct($idrayon=null, $limit=10)
            ];
            return view('Templates/header', $data) //Ceci est le menu
            . $assets->storebackofficebanner() // Ceci est la bannière avec photo de couverture de la boutique
            . $assets->storebackofficebar() // Ceci est la barre horizontale contenant les infos de la boutique
            . view('storebackoffice/mystore') // Ceci contient le menu toggle avec la liste des produits
            . view('assets/productmodal') // Ceci est le modal pour insérer les produits de la boutique
            . view('Templates/footer'); // Ceci est le footer
        }
        public function modifyproduct($idproduit)
        {
            $rayon = model(RayonModel::class);
            $products = model(Produit::class); 
            $produit = model(Produit::class);
            $mymodal = model(Assets::class);
            $dataproduit = [
                'rayons' => $rayon->getRayon(),
                'products' => $products->getProduct(),
                'produit' => $produit->modifyproduct($idproduit),
            ];
            return $mymodal->modifyproduct($dataproduit); 

        }
    // --------------------------------------------- Regarder mon compte -------------------------------------------------





    }