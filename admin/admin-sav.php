<?php require_once "../inc/header.inc.php";


$resultat = $pdo->query("SELECT * FROM formulaire_client");

$donnees = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>

<h1 class="h1_table">Requêtes clientèle</h1>

<table class="table subtable">
    <thead>
        <tr class="subtable">
            <th class="subtable th" style="text-align: center;">Nom</th>
            <th class="subtable th" style="text-align: center;">Prénom</th>
            <th class="subtable th" style="text-align: center;">Email</th>
            <th class="subtable th" style="text-align: center;" width="50%">Message</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($donnees as $value) { ?>
        <tr class="subtable">
            <td class="subtable td"><?php echo $value['nom']; ?></td>
            <td class="subtable td"><?php echo $value['prenom']; ?></td>
            <td class="subtable td"><?php echo $value['email']; ?></td>
            <td class="subtable td"><?php echo $value['message']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php require_once "../inc/footer.inc.php" ?>