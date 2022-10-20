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
        $model = model(Productmodel::class);
        $data = 
        [
            'pagetitle' => 'Marketplace',
            'rayons' => $rayon->getRayon(),
            'rayon' => $rayon->getSelectedRayon(),
            // 'products' => $products->getSelectedProduct(null, 100, 'selection'),
        ];
        return view('Template-parts/header', $data)
        . $assets->littlehorizontalcard() 
        . $assets->homebanner()
        . $assets->productfilter()
        . $assets->allproducts()
        . $assets->allcategories()
        . $assets->threenews()
        . view('Template-parts/footer');
    }

}