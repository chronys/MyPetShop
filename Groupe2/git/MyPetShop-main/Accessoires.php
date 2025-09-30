<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyPetShop</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f5f2ef;
      color: #3a3a3a;
    }

    h1 {
      font-size: 2.5rem;
      color: #3D5548;
      padding-bottom: 10px;
      margin-top: 50px;
      text-align: center;
    }

    .monh2 {
      font-size: 1.5rem;
      color: #000000ff;
      text-align: center;
      padding-bottom: 20px;
    }

    .produit {
      border: 1px solid #d0b9a2;
      border-radius: 8px;
      padding: 50px;
      margin: 35px auto;
      width: 1000px;
      height: 320px;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      box-shadow: 10px 10px 5px #3D5548(88, 87, 87, 0.1);
      transition: transform 0.2s, box-shadow 0.4s;
    }

    .produit:hover {
      transform: translateY(-4px);
      box-shadow: 0px 4px 12px 10px #6fb692ff;
    }

    .produit img {
      width: 220px;
      height: 220px;
      object-fit: cover;
      border-radius: 6px;
      margin-right: 20px;
      transition: transform 0.3s;
    }

    .produit img:hover {
      transform: scale(1.4);
    }

    .produit h2 {
      font-size: 18px;
      color: #3D5548;
      margin: 10px;
      width: 200px;
    }

    .produit p {
      font-size: 1rem;
      color: #3D5548;
      margin-bottom: 10px;
    }

    .boutton {
      background-color: #385245;
      color: white;
      text-decoration: none;
      padding: 12px 24px;
      border-radius: 5px;
      font-size: 1rem;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      transition: background-color 0.6s;
    }

    .boutton:hover {
      background-color: #6fb692ff;
    }

    .boutton:active,
    .boutton:focus {
      outline: none;
      background-color: #6fb692ff;
    }
  </style>
</head>

<body>
  <?php require_once "inc/header.inc.php"; ?>

  <?php
  // Tableau ssociatif avec mes produits
  $produits = [
    [
      "nom"   => "Collier réglable avec médaille",
      "image" => "img/imgaccessoires/C1.png",
      "prix"  => 29.99
    ],

    [
      "nom"   => "Harnais confortable",
      "image" => "img/imgaccessoires/C2.png",
      "prix"  => 19.99
    ],

    [
      "nom"   => "Laisse extensible ou classique",
      "image" => "img/imgaccessoires/C3.png",
      "prix"  => 9.99
    ],

    [
      "nom"   => "Tapis rafraîchissant ou chauffant",
      "image" => "img/imgaccessoires/C4.png",
      "prix"  => 16.50
    ],

    [
      "nom"   => "Gamelles antidérapantes",
      "image" => "img/imgaccessoires/C5.png",
      "prix"  => 4.99
    ],

    [
      "nom"   => "Brosse douce ou gant de toilettage",
      "image" => "img/imgaccessoires/C6.png",
      "prix"  => 25
    ]
  ];
  ?>

  <h1>Accessoires pour chiens</h1>
  <div class="monh2">
    <h2>Assurez style , confort et sécurité à votre compagnon <img width="80" height="80" src="https://img.icons8.com/dotty/80/dog.png" alt="dog" /></h2>
  </div>



  <?php
  //  boucle foreach pour mettre chaque produit du tableau dans la variable produit
  foreach ($produits as $produit) {
    echo "<div class='produit'>";

    echo "<img src='" . $produit['image'] . "' alt='" . $produit['nom'] . "'>";
    // affiche les images une par une

    echo "<h2>" . $produit['nom'] . "</h2>";
    // affiche un h2 pour chaque produit

    echo "<p>Prix : " . $produit['prix'] . " €</p>";
    // affiche un prix pour chaque produit

    echo "<a class='boutton' href='detail.php'>Voir l'article en détail</a>";
    // boutton pour renvoyer à la page detail

    echo "</div>";
  }
  ?>

  <?php require_once "inc/footer.inc.php"; ?>

</body>

</html>