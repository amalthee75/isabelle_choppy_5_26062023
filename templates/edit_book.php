<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>roman_edite</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div id="general">
        <?php include("components/header_admin.php") ?>
        <div id="general">
            <div id="editer_book">
                <form id="edit_book" action=" http://localhost/isabelle_choppy_5_26062023/index.php?action=editBook&idBook<?= $book_id ?>" method="POST">
                    <input type="text" name="title" value="<?= htmlspecialchars($book["titre"]) ?>" id="title">
                    <input type="date" id="date_parution">
                    <input type="submit" value="Envoyer">
                </form>
            </div>

            <?php include("components/footer.php") ?>
        </div>
</body>

</html>