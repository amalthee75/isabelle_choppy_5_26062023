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


        <?php include("components/footer.php") ?>
    </div>

    <!-- <form action="ajoutCom">
        <input type="text" id="pseudo" value="pseudo">
        <input type="password" id="password" value="password">
        <input type="submit" value="Envoyer">
    </form> -->
</body>

</html>