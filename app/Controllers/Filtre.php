<?php namespace App\Controllers;
    use App\Models\RayonModel;
    use App\Models\CategorieModel;
    use App\Models\SouscategorieModel;

    class Filtre extends BaseController
    {
    // ---------------  CHANGER LE NOM DE LA CATEGORIE DANS LE FILTRE, SELON LE RAYON
        public function changerayon($idrayons) 
        {
            $assets  = model(Assets::class);
            $rayon = model(RayonModel::class);
            $data1 = [
                'categories' => $rayon->linkrayoncategorie($idrayons)
            ];
            return $assets->productcategories($data1);
        }
    // ---------------  CHANGER LE NOM DE LA SOUS CATEGORIE DANS LE FILTRE, SELON LA CATEGORIE
        public function changecategorie($idcategorie)
        {
            $assets  = model(Assets::class);
            $category = model(CategorieModel::class);
                $data = [
                    'souscategories' => $category->linkcategorysouscategories($idcategorie)
                ];
            return $assets->productsouscategories($data);
        }
    
    
    // ------------  SELECTIONNER LES PRODUITS PAR RAYON / CATEGORIE / SOUSCATEGORIE AVEC LE FILTRE  /////////// OK
    public static function getResultat($params1, $params2, $params3, $params4, $params5) //unNomEnParticulier
    {
        $products = model(Produit::class);
        if($params2 == '0')
        {
            $params2 = null;
            $data = [
                'products' => $products->$params1($params2, $params3), //$params1 = nom de la fonction qui change
            ];
        }
        else
        {
            $data = [
                'products' => $products->$params1($params2, $params3), //$params1 = nom de la fonction qui change
            ];  
        }        
        return view('Template-parts/'.$params4, $data); //$params4 = nom de la destination qui change
        // var_dump($data); //$params4 = nom de la destination qui change
    }

/*  ************************************** BACK OFFICE   ***************************************/







    }

