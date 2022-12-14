<?php namespace App\Models; 
    use CodeIgniter\Model;

    class Productmodel extends Model
    {
        protected $table = ['produit'];
        protected $allowedFields = ['boutique', 'rayon', 'categorie', 'souscategorie', 'nom', 'reference', 'marque', 'prix', 'photo01', 'photo02', 'photo03', 'photo04', 'photo05', 'descriptifcourt', 'descriptiflong'];

        public function addProduct()
        {
            $data = [
                'boutique' => ($_POST['boutique']),
                'rayon' => ($_POST['rayon']),
                'categorie' => ($_POST['categorie']),
                'souscategorie' => ($_POST['souscategorie']),
                'nom' => ($_POST['nomproduit']),
                'slug' => ($_POST['nomproduit']),
                'reference' => ($_POST['reference']),
                'marque' => ($_POST['marque']),
                'prix' => ($_POST['prixproduit']),
                'descriptifcourt' => ($_POST['shortdescprod']),
                'descriptiflong' => ($_POST['longdescprod']),
                'photo01' => ($_FILES['file']['name']),
                // 'photo02' => ($_FILES['photo02']['name']), 
                // 'photo03' => ($_FILES['photo03']['name']),
                // 'photo04' => ($_FILES['photo04']['name']),
                // 'photo05' => ($_FILES['photo05']['name']), 

            ];
                return $this->insert($data);
        }
        
        public function getOneProduct($idproduit)
        {
            $this->where('idproduit', $idproduit);
            return $this->find();
        }

        public function getProduct()
        {
            $this->join('souscategorie', 'produit.souscategorie=souscategorie.id', 'left');
            $this->join('categorie', 'produit.categorie=categorie.id', 'left');
            $this->join('rayon', 'produit.rayon=rayon.id', 'left');
            return $this->findAll();
        }

        public function getSelectedProduct($idrayon, $limit, $thema)
        {
            $this->join('souscategorie', 'produit.souscategorie=souscategorie.id', 'left');
            $this->join('categorie', 'produit.categorie=categorie.id', 'left');
            $this->join('rayon', 'produit.rayon=rayon.id', 'left');
            $this->limit($limit);
            if(!$idrayon && $thema)
            {
                $this->where($thema, 1);
                return $this;
            } 
            elseif($idrayon && !$thema)
            {
                $this->where('rayon.id', $idrayon);
                return $this;
            }
            else
            {
                $this->where('rayon.id', $idrayon);
                $this->where($thema, 1);
                return $this;
            }
        }

        public function getProductByCategory($idcategory=null, $limit)
        {
            $this->join('souscategorie', 'produit.souscategorie=souscategorie.id', 'left');
            $this->join('categorie', 'produit.categorie=categorie.id', 'left');
            $this->join('rayon', 'produit.rayon=rayon.id', 'left');
            $this->limit($limit);
            $this->where('categorie.id', $idcategory);
            return $this;
        }

        public function getProductBySousCategory($idsouscategory, $limit)
        {
            $this->join('souscategorie', 'produit.souscategorie=souscategorie.id', 'left');
            $this->join('categorie', 'produit.categorie=categorie.id', 'left');
            $this->join('rayon', 'produit.rayon=rayon.id', 'left');
            $this->limit($limit);
            $this->where('souscategorie.id', $idsouscategory);
            return $this;
        }
    }
