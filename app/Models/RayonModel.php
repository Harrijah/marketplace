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



        public function getSelectedRayon()
        {
            $this->where('id !=', 0);
            return $this->findAll(); 
        }

        
        public function linkrayoncategorie($idrayon)
        {
            $this->join('categorie', 'categorie.rayon=rayon.id');
            $this->where('rayon.id', $idrayon);
            return $this->findAll();
        }
    }
