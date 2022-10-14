<?php

namespace App\Controllers;
use App\Controllers\Addons; 
use App\Models\RayonModel;

class Home extends BaseController
{
    public function index()
    {
        $assets = model(Assets::class);
        $rayon = model(RayonModel::class); 
        $products = model(Produit::class);
        $data = 
        [
            'pagetitle' => 'Marketplace',
            'rayons' => $rayon->getRayon(),
            'rayon' => $rayon->getSelectedRayon(),
            'products' => $products->getSelectedProduct(null, 6, 'selection')
        ];
        return view('Template-parts/header', $data)
        .view('welcome_message')
        .view('Template-parts/footer');
    }
}
