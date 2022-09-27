<?php namespace App\Controllers;
    class Assets extends BaseController
    {
        public function homenavmenu() //Menu 
        {
            return view('Template-parts/homenavmenu');
        }
        public function littlehorizontalcard() // Box avec 1 diaporama et 6 petits cards sur la page d'accueil
        {
            return view('/Template-parts/littlehorizontalcard');
        }
        public static function carouselcommand()
        {
            return view('Template-parts/carouselcommand');
        }
        public static function carouselproducts($idrayon)
        {
            return view('Template-parts/carouselproducts', $idrayon);
        }
        public static function selectedproducts() // Boucle contenant les petits cards de 6 produits près du slider
        {
            return view('Template-parts/selectedproducts');
        }
        public function homebanner() //Bannière sur la recherche de magasin
        {
            return view('Template-parts/homebanner');
        }
        public function allcategories() //Bannière avec les pictos des rayons
        {
            return view('Template-parts/allcategories');
        }
        public function productfilter() // Grand titre pour la barre de filtrage des rayons/catégories/sous-catégories
        {
            return view('Template-parts/productfilter');
        }
        public static function filterproducts() // barre de filtrage des "Rayons" => "Catégories" => "Sous-catégories"
        {
            return view('filtre/filterproducts');
        }
        public function allproducts() // Container de tous les produits dans le milieu de la page d'accueil
        {
            return view('/Template-parts/allproducts');
        }
        public static function allproductshome() // Boucle contenant tous les produits dans le milieu de la page d'accueil
        {
            return view('Template-parts/allproductshome');
        }
        public function threenews() // Les trois articles de blog vers le bas de la page d'accueil
        {
            return view('/Template-parts/threeactus');
        }
        public function modifyproduct($idproduit) // N'est pas encore utilisé
        {
            return view('/Template-parts/productmodal', $idproduit); 
        }
        public static function storebackofficebanner() // Bannière dans le back office magasin
        {
            return view('Template-parts/storebackofficebanner');
        }
        public static function storebackofficebar() // Barre d'infos horizontale dans le back office magasin
        {
            return view('Template-parts/storebackofficebar');
        }
        public static function storebackofficeallproducts() // Liste des produits du magasin, dans le backoffice
        {
            return view('Template-parts/storebackofficeallproducts');
        }
        public static function productrayons() // Boucle : liste des rayons  avec la balise "SELECT"
        {
            return view('filtre/productrayons');
        }
        public static function productcategories($data) // Boucle : liste des catégories dans la balise "SELECT"
        {
            return view('filtre/productcategories', $data);
        }
        public static function productsouscategories($data) // Boucle : liste des souscatégories dans la balise "SELECT"
        {
            return view('filtre/productsouscategories', $data);
        }
        

        
    }