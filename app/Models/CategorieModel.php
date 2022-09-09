<?php namespace App\Models;
    use CodeIgniter\Model;

    class CategorieModel extends Model
    {
        protected $table = ['categorie'];
        protected $allowedFields = ['rayon', 'categorie'];

        public function getCategory()
        {
            return $this->findAll();
        }
        public function linkcategorysouscategories($idcategorie)
        {
            $this->join('souscategorie', 'souscategorie.categorie=categorie.id');
            $this->where('categorie.id', $idcategorie);
            return $this->findAll();
        }
    }

