<?php namespace App\Controllers;
    use App\Controllers\Addons; 
    use App\Models\RayonModel;
    
class Accueil extends BaseController
{
    public function accueil()
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
        . $assets->littlehorizontalcard() 
        . $assets->homebanner()
        . $assets->allcategories()
        . $assets->productfilter()
        . $assets->allproducts()
        . $assets->threenews()
        . view('Template-parts/footer');
    }

}