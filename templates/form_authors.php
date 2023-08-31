<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire auteurs</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div id="general">
        <?php include("components/header.php") ?>

        <form id="add_authors" action="http://localhost/isabelle_choppy_5_26062023/index.php?action=addAuthor" method="POST">
            <input class="name" type="text" name="nom">
            <input class="firstname" type="text" name="prenom">
            <input type="date" name="date_naissance">
            <input type="date" name="date_mort">
            <input id="add" type="submit" value="Ajouter">
        </form>
    </div>
</body>

</html>