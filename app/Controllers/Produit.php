<?php namespace App\Controllers;
    use App\Models\Productmodel;

    class Produit extends BaseController
    {
    // --------------------------- ADD PRODUCTS ------------------------------------------
        public function addproduct()
        {
            $model = model(Productmodel::class);
            helper(['form', 'url']);
            if($this->request->getMethod() === 'post' && $this->validate([ 
                'boutique' => 'required', 
                'rayon' => 'required',
                'categorie' => 'required',
                'nomproduit' => 'required',
                'prixproduit' => 'required',
                'file' => [
                    'uploaded[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[file,4096]',
                ],
                // 'photo02' => 'uploaded[file]',        
                // 'photo03' => 'uploaded[file]',        
                // 'photo04' => 'uploaded[file]',        
                // 'photo05' => 'uploaded[file]',        
            ]))
            {
                if($files = $this->request->getFiles(['file', 'photo02']))
                {
                    $files['file']->move(WRITEPATH . '../public/uploads/image');
                    // $files['photo02']->move(WRITEPATH . '../public/uploads/image');
                    // $files['photo03']->move(WRITEPATH . 'uploads/image');
                    // $files['photo04']->move(WRITEPATH . 'uploads/image');
                    // $files['photo05']->move(WRITEPATH . 'uploads/image');
                }
                $model->addProduct();
            }
            return redirect()->to('/storebackoffice/mystore');
        }
    // --------------------------- MODIFY PRODUCTS ------------------------------------------
        public function modifyproduct($idproduit)
        {
            $produit = model(Productmodel::class);
            return $produit->modifyoneproduct($idproduit);
        }
    // --------------------------- GET PRODUCTS ------------------------------------------
        public function getProduct()
        {
            $product = model(Productmodel::class);
            return $product->getProduct();
        }

        public static function getSelectedProduct($idrayon, $limit)
        {
            $product = model(Productmodel::class);
            return $product->getSelectedProduct($idrayon, $limit);
        }

        public function getProductByCategory($idcategory, $limit)
        {
            $product = model(Productmodel::class);
            return $product->getProductByCategory($idcategory, $limit);
        }

        public function getProductBySousCategory($idsouscategory, $limit)
        {
            $product = model(Productmodel::class);
            return $product->getProductBySousCategory($idsouscategory, $limit);
        }

    }