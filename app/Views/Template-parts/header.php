<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/all2.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap2.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('font-awesome4/css/font-awesome.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('font-awesome4/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('font-awesome5/css/fontawesome.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('font-awesome5/css/fontawesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('ckeditor/contents.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/docs.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style2.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/test.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style03.css'); ?>">
    <title><?= esc($pagetitle) ?></title>
</head>
<body>

<!-- From Login   -->
<?php 
    $uri = service('uri') ;
?>

<!-- Second Menu -->
    <nav class="navbar-expand-lg navbar-light bg-dark">
        <div class="collapse navbar-collapse">
          <div class="navbar-nav mr-auto">
            <a class="text-white" href="<?php echo base_url(); ?>">Destock.mg  <i class="nav-item d-inline text-warning fa fa-shopping-bag"></i> </a>
          </div>
          <?php if(session()->get('connecté')): ?> 
            <ul class="navbar-nav mr-auto">
              <li class="text-white nav-item nav-link ">Bonjour <a href="<?= base_url('users/profile'); ?>" class="d-inline"><?= session()->get('nom') ?></a>,</li> 
              <li class="text-white nav-item nav-link <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">Votre visite N° <span class="text-warning">0 </span></li> 
              <li class="text-white nav-item nav-link ">Vos points de fidelité : <span class="text-warning">0 Pts</span></li>
            </ul>
            <!-- <ul class="navbar-nav mr-auto">
              <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>" >
                <a class="nav-link" href="/dashboard">Dashboard</a>
              </li>
              <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>" >
                <a class="nav-link" href="/profile">Profile</a>
              </li>
            </ul> -->

            <ul class="navbar-nav">
              <li><a class="nav-link text-warning" href=""><i style="font-size:20px" class="fa fa-cart-plus"></i></a></li>
              <li><a href="" class="nav-link text-warning"></a></li>
              <li class="dropdown">
                <a class="nav-link text-warning" href="javascript:void(0)" class="dropbtn">Mon compte</a>
                  <div class="dropdown-content">
                    <a href="<?php echo base_url('connexion/moncompte'); ?>" class="nav-link text-warning bg-dark">Tableau de bord</a>
                    <a href="/logout" class="nav-link text-warning bg-dark">Se déconnecter</a>
                  </div>
                  <!-- <div class="dropdown-content">
                    <a href="<?php //echo base_url('connexion/moncompte'); ?>" class="connexbutton nav-link text-warning bg-dark" value="<?php //echo base_url('connexion/connectmodal'); ?>">Se connecter</a>
                    <a href="#" class="createbutton nav-link text-warning bg-dark" value="<?php //echo base_url('connexion/createmodal'); ?>">Créer un compte</a>
                    <a href="#" class="disconnectbutton nav-link text-warning bg-dark">Se déconnecter</a>
                  </div> -->
              </li>
            </ul>
          <?php else: ?>
            <ul class="navbar-nav">
              <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?> ">
              <a class="nav-link text-white" href="<?php echo base_url('users/index'); ?>">Se connecter</a>
              </li>
              <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?> ">
              <a class="nav-link text-white" href="register">S'inscrire</a>
              </li>
            </ul>
          <?php endif; ?>
        </div>
    </nav>

<nav class="navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos rayons</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php foreach($rayon as $ray) :?>
            <a class="dropdown-item" href="#"><?php echo $ray['rayon'] ?></a>
          <?php endforeach; ?>
        </div>
      </li>
      <li class="nav-item"><a class="nav-link" href="#">Boutiques</a></li>
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