<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div id="general">
        <?php include("components/header_admin.php") ?>
        <h1>Tableau de bord</h1>
        <div id="contenu_dashboard">
            <a href="index.php?action=addAuthor">Ajouter un auteur</a>
            <a href="index.php?action=showAuthors">Voir tous les auteurs</a>
        </div>

        <?php include("components/message.php") ?>
        <?php include("components/footer.php") ?>
    </div>



</body>

</html>