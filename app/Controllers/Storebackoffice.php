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
                'products' => $products->getSelectedProduct($idrayon=null, $limit=10)
            ];
            return view('Templates/header', $data)
            . $assets->storebackofficebanner()
            . $assets->storebackofficebar()
            . view('storebackoffice/mystore')
            . view('assets/productmodal') 
            . view('Templates/footer');
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