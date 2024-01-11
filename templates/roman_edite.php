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

        <div id="roman_id">
            <h1><?php echo $roman['title'] ?> </h1>

            <p><?php echo $roman['content'] ?></p>
        </div>


    </div>

    <?php include("components/footer.php") ?>
    </div>

</body>

</html>