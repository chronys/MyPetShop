<?php require_once "../inc/header.inc.php"; ?>

<h1>Nous contacter</h1>

<form action="../model/traitement.php" method="post">
    <small>Champs obligatoires : <span class="asterisque">*</span></small>
    <label for="nom">Nom <span class="asterisque">*</span>:</label>
    <input type="text" id="nom" name="last_name" required placeholder="ex : Eni">

    <label for="prenom">Prénom <span class="asterisque">*</span>:</label>
    <input type="text" id="prenom" name="first_name" required placeholder="ex : Ripsa">

    <label for="courriel">Courriel <span class="asterisque">*</span>:</label>
    <input type="email" id="courriel" name="email" required placeholder="ex : jaime.soigner@bonta.fr">

    <label for="commentaire">Détaillez votre requête <span class="asterisque">*</span>:</label>
    <textarea name="commentary" id="commentaire" required></textarea>

    <input type="submit" id="btn_formulaire" value="Envoyez votre message">
</form>



<?php require_once "../inc/footer.inc.php"; ?>