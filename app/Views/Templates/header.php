<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('font-awesome4/css/font-awesome.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('font-awesome4/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('font-awesome5/css/fontawesome.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('font-awesome5/css/fontawesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('ckeditor/contents.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/docs.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/test.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style03.css'); ?>">
    <title><?= esc($pagetitle) ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container  navbar-collapse">
            <div class="">
              <ul class="navbar-nav mr-auto">
                <li class="nav-link text-white">Bonjour<a href=""></a>,</li>
                <li class="text-white nav-item nav-link ">Votre visite N° <span class="text-warning">0 </span></li>
                <li class="text-white nav-item nav-link ">Vos points de fidelité : <span class="text-warning">0 Pts</span></li>
              </ul>
            </div>
            <div id="navbar" class="">
                <ul class="navbar-nav">
                  <li class=""><a class="nav-link text-warning" href=""><i style="font-size:20px" class="fa fa-cart-plus"></i></a></li>
                  <li><a href="<?php echo base_url('connexion/moncompte'); ?>" class="nav-link text-warning">Mon compte</a></li>
                  <li class="dropdown">
                    <a class="nav-link text-warning" href="javascript:void(0)" class="dropbtn">Connexion</a>
                      <div class="dropdown-content">
                        <a href="#" class="connexbutton nav-link text-warning bg-dark" value="<?php echo base_url('connexion/connectmodal'); ?>">Se connecter</a>
                        <a href="#" class="createbutton nav-link text-warning bg-dark" value="<?php echo base_url('connexion/createmodal'); ?>">Créer un compte</a>
                        <a href="#" class="disconnectbutton nav-link text-warning bg-dark">Se déconnecter</a>
                      </div>
                  </li>
                </ul>
            </div>
        </div>
    </nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">Destock.mg <i class="text-warning fa fa-shopping-bag"></i></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url('connexion/test'); ?>">Boutiques</a></li>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item"><a class="nav-link" href="#">Actus</a></li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Faites une recherche" aria-label="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Recherche</button>
    </form>
  </div>
</nav>

<!-- -------------------------------------- modal creation compte --------------------------------------------------------->
<div id="connexmodal" class="modal"><div id="modalcontent" class="modal-content shadow bg-dark pr-3 pl-3"></div></div>