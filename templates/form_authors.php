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
        <?php include("components/header_admin.php") ?>
        <?php include("components/message.php"); ?>
        <form id="add_authors" action="index.php?action=addAuthor" method="POST">
            <input class="name" type="text" name="nom">
            <input class="firstname" type="text" name="prenom">
            <input type="date" name="date_naissance">
            <input type="date" name="date_mort">
            <input class="biographie" type="text" name="biographie">
            <input id="add" type="submit" value="Ajouter">
        </form>

    </div>
</body>

</html>