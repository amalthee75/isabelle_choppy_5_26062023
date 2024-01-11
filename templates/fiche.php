<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auteur</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php include("components/header_admin.php") ?>
    <div id="general">

        <?php include("components/message.php") ?>

        <div id="auteur_id">
            <h1><?php echo $author['nom'] ?> <?php echo $author['prenom'] ?></h1>
            <h5><?php echo $author['date_naissance'] ?> <?php echo $author['date_mort'] ?></h5>
            <p><?php echo $author['biographie'] ?></p>
        </div>

        <div id="livres_id">

            <?php foreach ($books as $book) {  ?>
                <h5><?php echo $book["titre"] ?> <?= $book['date_parution'] ?></h5>
                <p><?php echo $book['id_auteur'] ?></p>
                <button type="submit" class=supprimer><a href="http://localhost/isabelle_choppy_5_26062023/index.php?action=deleteBook&idBook=<?php echo $book['id'] ?>" onclick=" return confirm('Confirmer la suppression');">Supprimer</a></button>
                <button type="submit" class="modifier"><a href="http://localhost/isabelle_choppy_5_26062023/index.php?action=editBook&idBook=<?= $book["id"] ?>">Modifier</a></button>

            <?php
            }

            ?>

        </div>

        <?php include("components/footer.php") ?>
    </div>



</body>

</html>