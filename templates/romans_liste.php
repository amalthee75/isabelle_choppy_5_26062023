<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des romans</title>
    <link rel="stylesheet" href="style/style.css">

<body>
    <?php include('components/header.php') ?>
    <h1>Liste des romans</h1>

    <?php foreach ($authors as $author) { ?>

        <p>Nom <?= htmlspecialchars($author["nom"]); ?> - Prenom <?= htmlspecialchars($author["prenom"]); ?> </p>
        <p>Naissance <?= htmlspecialchars($author["date_naissance"]); ?> - Mort: <?= htmlspecialchars($author["date_mort"]); ?> </p>

    <?php } ?>

    <?php include("components/footer.php") ?>
</body>

</html>