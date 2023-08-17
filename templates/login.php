<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div id="general">
        <?php include "components/header_log.php"; ?>

        <h1>Connexion</h1>

        <div id="div_form">
            <form action="http://localhost/isabelle_choppy_5_26062023/index.php?action=login" method="post">
                <input type="email" name="email" id="email" placeholder="email">
                <input type="password" name="password" id="password" placeholder="password">
                <input type="submit" id="connect" value="Connexion">

            </form>
            <img id="img_page_login" src="images/pigeons_romantiques" alt="pigeons">
        </div>

        <?php include("components/message.php") ?>
        <?php include("components/footer.php") ?>
    </div>


</body>

</html>