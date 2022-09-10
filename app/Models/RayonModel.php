<?php namespace App\Models;
    use CodeIgniter\Model;

    class RayonModel extends Model
    {
        protected $table = ['rayon'];  
        protected $allowedFields = ['rayon']; 

        public function getRayon()
        {
            return $this->findAll();
        }
        public function getSelectedRayon($idrayon)
        {
            $this->where('id', $idrayon);
            // $this->where('id', 2);
            // $this->where('id', 3);
            // $this->where('id', 4);
            return $this->find(); 
        }

        
        public function linkrayoncategorie($idrayon)
        {
            $this->join('categorie', 'categorie.rayon=rayon.id');
            $this->where('rayon.id', $idrayon);
            return $this->findAll();
        }
    }
