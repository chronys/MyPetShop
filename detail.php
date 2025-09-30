<?php require_once "../inc/header.inc.php"; 

$resultat = executeRequete ("SELECT * FROM produits WHERE id= :id", ['id' => $_GET['id']]);

$produit = $resultat -> fetch();

// Accessoires

if (isset($produit['categorie']) && $produit['categorie']== 'accessoires') {

?>
    <div class="detail d-flex gap-5">
    <div class="image-produit">
        <img src="../assets/img/imgaccessoires/<?php echo $produit['image_produit'];?>" alt="">
    </div>
    <div class="card-body mt-2">
        <h5 class="card-title"><?= $produit['nom_produit'];?></h5>
        <p class="card-text">Prix : <?=$produit['prix'];?> €</p>
        <p class="card-text"><?=$produit['description'];?></p>

        <label for="quantite">Quantité</label>

        <select class="form-select mb-3" aria-label="Default select example">
            <option selected>Choissisez la quantité souhaitée</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3 ou plus</option>
        </select>

        <a href="#" class="btn text-white" style="background-color: #385245;">Ajouter au panier</a>

    </div>
</div>
<?php 
}?>

<!-- Jouets -->
<?php if (isset($produit['categorie']) && $produit['categorie']== 'jouets') {

?>
    <div class="detail d-flex gap-5">
    <div class="image-produit">
        <img src="../assets/img/imgjouets/<?php echo $produit['image_produit'];?>" alt="">
    </div>
    <div class="card-body mt-2">
        <h5 class="card-title"><?= $produit['nom_produit'];?></h5>
        <p class="card-text">Prix : <?=$produit['prix'];?> €</p>
        <p class="card-text"><?=$produit['description'];?></p>

        <label for="quantite">Quantité</label>

        <select class="form-select mb-3" aria-label="Default select example">
            <option selected>Choissisez la quantité souhaitée</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3 ou plus</option>
        </select>

        <a href="#" class="btn text-white" style="background-color: #385245;">Ajouter au panier</a>

    </div>
</div>
<?php 
}?>

<!-- Nourriture -->
<?php if (isset($produit['categorie']) && $produit['categorie']== 'alimentation') {

?>
    <div class="detail d-flex gap-5">
    <div class="image-produit">
        <img src="../assets/img/imgalimentation/<?php echo $produit['image_produit'];?>" alt="">
    </div>
    <div class="card-body mt-2">
        <h5 class="card-title"><?= $produit['nom_produit'];?></h5>
        <p class="card-text">Prix : <?=$produit['prix'];?> €</p>
        <p class="card-text"><?=$produit['description'];?></p>

        <label for="quantite">Quantité</label>

        <select class="form-select mb-3" aria-label="Default select example">
            <option selected>Choissisez la quantité souhaitée</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3 ou plus</option>
        </select>

        <a href="#" class="btn text-white" style="background-color: #385245;">Ajouter au panier</a>

    </div>
</div>
<?php 
}?>









<style>
    .image-produit{
        width : 500px;
        height : 500px
    }

    .image-produit img {
        width : 100%;
    }


</style>



<?php require_once "../inc/footer.inc.php"; ?>