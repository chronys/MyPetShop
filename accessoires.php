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
      color: #ab7f33;
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

      /* medias queries */
    @media (min-width: 320px) and (max-width: 1199px) {
      h1 {
        width: 80%;
        text-align: center;
        padding-bottom: 25px;
        margin: auto;
      }
 
      .monh2 {
        width: 80%;
        text-align: center;
        margin: auto;
      }
 
      .produit {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        align-items: center;
        width: auto;
        height: 500px;
        overflow: auto;
      }
 
      img {
        margin: 0 !important;
      }
    }
 
    @media (min-width: 768px) and (max-width: 1199px) {
      h1 {
        /* width: 80%; */
        text-align: center;
        padding-bottom: 25px;
        margin: auto;
      }
 
      .monh2 {
        /* width: 80%; */
        text-align: center;
        margin: auto;
      }
 
      .produit {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        align-items: center;
        width: 500px;
        height: 500px;
        overflow: auto;
      }
 
      img {
        margin: 0 !important;
      }
    }

  </style>

  <?php require_once "../inc/header.inc.php"; ?>

  <?php

  $donnee = $pdo -> query("SELECT * FROM produits");

  $donnees = $donnee -> fetchAll(PDO:: FETCH_ASSOC);

  ?>

  <h1>Accessoires pour chiens</h1>
  <div class="monh2">
    <h2>Assurez style , confort et sécurité à votre compagnon <img width="80" height="80" src="https://img.icons8.com/dotty/80/dog.png" alt="dog" /></h2>
  </div>



  <?php
  //  boucle foreach pour mettre chaque produit du tableau dans la variable produit
  foreach ($donnees as $value) { ?>

    <div class="produit">
      <img src="../assets/img/imgaccessoires/<?php echo $value['image_produit']?>" alt="<?php echo $value['nom_produit']?>">
      <?= '<h2>' . $value['nom_produit'] . '</h2>' ?>
      <p>Prix : <?=$value['prix'] ?> €</p>
      <a href="detail.php?id=<?= $value['id'] ?>" class="boutton">Voir l'article en détail</a>
    </div>
    
    <?php }?>




  <?php require_once "../inc/footer.inc.php"; ?>