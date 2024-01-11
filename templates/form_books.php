<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire livres</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div id="general">
        <?php include("components/header_admin.php") ?>
        <?php include("components/message.php"); ?>

        <form id="add_books" action="index.php?action=addBooks" method="POST">
            <!--  Pouvoir selectionner un auteur pour ajouter un livre (ID_auteur) -->
            <input type="text" class="titre" name="titre">
            <input type="date" class="date_parution" name="date_parution">
            <textarea name="resume" id="resume">Résumé du livre</textarea>
            <select name="id_auteur" id="id_auteur">
                <option value="">-- Choisissez --</option>
                <?php foreach ($authors as $author) { ?>
                    <option value="<?= $author['id']; ?>"><?= htmlspecialchars($author["nom"]); ?> <?= htmlspecialchars($author["prenom"]); ?></option>
                <?php } ?>
            </select>
            <input id="add" name="add" type="submit" value="Ajouter">
        </form>
    </div>
</body>

</html>