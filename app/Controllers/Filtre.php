<?php namespace App\Controllers;
    use App\Models\Productmodel;
    use App\Models\RayonModel;
    use App\Models\CategorieModel;
    use App\Models\SouscategorieModel;

    class Filtre extends BaseController
    {
    // ---------------  CHANGER LA LISTE DE RAYON 
        public function changeMyRayon()
        {
            $rayon = model(RayonModel::class);
            $data = [
                'rayons' => $rayon->getRayon(),
            ];
            return view('filtre/productrayons', $data);
        }

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
        // $products = model(Produit::class); 
        $model = model(Productmodel::class); 
        if($params2 == '0') // Si il n'y a pas de rayon sélectionné, alors redirection par défaut vers "Tous les rayons"
        {
            $params2 = null;
            $data = [
                'products' => $model->$params1($params2, $params3, $params5)->paginate(10), //$params1 = nom de la fonction
                'pager' => $model->pager,
            ];
        }
        else // Si il y a un rayon sélectionné
        {
            if(!$params5) // Si pas de thématique spécifique de produits dans la requête
            {
                $params5 = 'allprod'; // Alors "Thématique par défaut" = "Tous les produits"
                $data = [
                    'products' => $model->$params1($params2, $params3, $params5)->paginate(10), //$params1 = nom de la fonction
                    'pager' => $model->pager,
                ];  
            }
            else // Si il y a un rayon et une thématique dans la requête
            {
                $data = [
                    'products' => $model->$params1($params2, $params3, $params5)->paginate(10), //$params1 = nom de la fonction
                    'pager' => $model->pager,
                ];  
            }
            
        }
        return view('Template-parts/'.$params4, $data); //$params4 = la Template-parts qui contient la boucle foreach($products as $product) et la mise en forme des produits
    }

    public static function modalproduct($idproduit)
    {
        $product = model(Produit::class);
        $data = [
            'product' => $product->getOneProduct($idproduit),
        ];
        return view('Template-parts/showproduct', $data);
    }

/*  ************************************** BACK OFFICE   ***************************************/







    }

