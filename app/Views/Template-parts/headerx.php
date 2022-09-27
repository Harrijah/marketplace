<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url("CSS/bootstrap.min.css") ; ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("CSS/style.css") ; ?>">
    <title></title>
</head>
<body>
<?php 
    $uri = service('uri') ;
?>
<nav class="navbar navbar-expand-lg bg-light d-flex justify-content-end">
  <div class="container">
    <a class="navbar-brand" href="#">Ci Login</a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <?php if(session()->get('connecté')): ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>" >
          <a class="nav-link" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>" >
          <a class="nav-link" href="/profile">Profile</a>
        </li>
      </ul>
      <ul class="navbar-nav my-2 my-lg-0" style="float: right;">
        <li class="nav-item">
          <a class="nav-link" href="/logout">Se deconnecter</a>  
        </li>
      </ul>
      <?php else: ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?> ">
        <a class="nav-link" href="/">Se connecter</a>
        </li>
        <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?> ">
        <a class="nav-link" href="/register">S'inscrire</a>
        </li>
      </ul>
    </div>
    <?php endif;?>
  </div>
</nav>

    
