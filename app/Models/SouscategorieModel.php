<?php namespace App\Models;
    use CodeIgniter\Model;

    class SouscategorieModel extends Model
    {
        protected $table = ['souscategorie'];
        protected $allowedFields =['categorie', 'souscategorie'];

        public function getSouscategory()
        {
            return $this->findAll();
        }
        public function linkcategorysouscategories($idrayon)
        {
            $this->join('categorie', 'souscategorie.categorie=categorie.id');
            $this->join('rayon', 'categorie.rayon=rayon.id');
            $this->where('rayon.id', $idrayon);
            return $this->findAll();
        }
    }