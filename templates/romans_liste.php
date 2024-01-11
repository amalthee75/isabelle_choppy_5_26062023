<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des romans</title>
    <link rel="stylesheet" href="style/style.css">

<body>
    <div id="general">

        <?php include('components/header_admin.php') ?>
        <h1>Liste des romans</h1>
        <div id="liste_romans">
            <?php foreach ($authors as $author) { ?>

                <p><a href="index.php?action=showOneAuthor&id=<?= $author['id']; ?>"><?= htmlspecialchars($author["nom"]); ?> <?= htmlspecialchars($author["prenom"]); ?></a> <?= htmlspecialchars($author["date_naissance"]); ?> <?= htmlspecialchars($author["date_mort"]); ?></p>

            <?php } ?>
        </div>
        <?php include("components/message.php") ?>;
        <?php include("components/footer.php") ?>
    </div>
</body>

</html>