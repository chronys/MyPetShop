
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link active text-white active text-white rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
      <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script> -->
    <link active text-white active text-white rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>
<body>
<!-- Header -->
<header style="background-color: #a47055;">

  <!-- <btn nav class="navbar navbar-expand-lg">
    <div class="container  d-flex align-items-center justify-content-between">

      <!-- Logo -->
      <!-- <div id="logo" class="d-flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bone-icon lucide-bone">
          <path d="M17 10c.7-.7 1.69 0 2.5 0a2.5 2.5 0 1 0 0-5 .5.5 0 0 1-.5-.5 2.5 2.5 0 1 0-5 0c0 .81.7 1.8 0 2.5l-7 7c-.7.7-1.69 0-2.5 0a2.5 2.5 0 0 0 0 5c.28 0 .5.22.5.5a2.5 2.5 0 1 0 5 0c0-.81-.7-1.8 0-2.5Z" class= active"text-white"/>
        </svg>
        <h1 style="font-family: 'Irish Grover';" class= active"text-white fs-1">PetShop</h1>
      </div>

      Bouton burger
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav1" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu">
            <path d="M4 5h16"/>
            <path d="M4 12h16"/>
            <path d="M4 19h16"/>
          </svg>
        </span>
      </button> -->

      <!-- Menu
      <div class="collapse navbar-collapse" id="nav1">
        <ul class="navbar-btn nav ms-5 gap-4">
          <li class="list-unstyled active text-white">Jouets</li>
          <li class="list-unstyled active text-white">Nourriture</li>
          <li class="list-unstyled active text-white">Accessoires</li>
          <li class="list-unstyled active text-white">A propos</li>
          <li class="list-unstyled active text-white">Contact</li>
        </ul>
      </div> -->

          <!-- Icône connexion -->
    <!-- <div class="icons">
      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user">
        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
        <circle cx="12" cy="7" r="4"/>
      </svg>
    </div>

    </div>
  </btn nav> --> 

  <btn nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand d-flex" href="index.php">        
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bone-icon lucide-bone">
          <path d="M17 10c.7-.7 1.69 0 2.5 0a2.5 2.5 0 1 0 0-5 .5.5 0 0 1-.5-.5 2.5 2.5 0 1 0-5 0c0 .81.7 1.8 0 2.5l-7 7c-.7.7-1.69 0-2.5 0a2.5 2.5 0 0 0 0 5c.28 0 .5.22.5.5a2.5 2.5 0 1 0 5 0c0-.81-.7-1.8 0-2.5Z" class="text-white"/>
        </svg>
        <h1 style="font-family: 'Irish Grover';" class="text-white" style="font-size:60px;">PetShop</h1>
    </a>

    <!-- Bouton burger -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Liens -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup" style="margin-right:50px;">
      <div class="navbar-btn nav">
        <a class="btn nav-link active text-white">Jouets</a>
        <a class="btn nav-link active text-white" href="#">Nourriture</a>
        <a class="btn nav-link active text-white" href="#">Accessoires</a>
        <a class="btn nav-link active text-white" href="#">A propos</a>
        <a class="btn nav-link active text-white">Contact</a>
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
    <div class="col-12">







