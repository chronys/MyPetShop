<?php if(!defined ('BASE_URL') || !defined('BASE_PATH')) {
  require_once "init.inc.php"; }?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/ms-icon-310x310.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>
<body>
<!-- Header -->
<header style="background-color: #385245;" >
  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <!-- Logo -->
     <a href="#" class="navbar-brand d-flex">
      <img src="../assets/img/logo2.png" alt="Logo Tout Pour Toutou" id="logo-img">
     </a>

    <!-- Bouton burger -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Liens -->
    <div class="collapse navbar-collapse justify-content-around" id="navbarNavAltMarkup" >
      <div class="navbar-nav gap-3">
        <a class="btn nav-link active text-white" href="../vue/jouets.php">Jouets</a>
        <a class="btn nav-link active text-white" href="../vue/nourriture.php">Nourriture</a>
        <a class="btn nav-link active text-white" href="../vue/accessoires.php">Accessoires</a>
        <a class="btn nav-link active text-white" href="../vue/qui_sommes_nous.php">A propos</a>
        <a class="btn nav-link active text-white" href="../vue/contact.php">Contact</a>
      </div>
    </div>

    <!-- Bouton connexion/inscription -->
    <div class="icon-user">    
        <a href="#" class="btn">        
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user">
        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
        <circle cx="12" cy="7" r="4"/>
      </svg>
    </a>
    </div>
  </div>
</nav>

</header>

<!-- Contenu -->
<div class="container">
  <div class="row">
    <div class="col-12 p-4">







