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

    <p>Nom <?= htmlspecialchars($authors[0]["nom"]); ?></p>
    <p>Prenom <?= htmlspecialchars($authors[0]["prenom"]); ?></p>

    <p></p>

    <?php include("components/footer.php") ?>
</body>

</html>