<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Connexion</h1>

    <div id="div_form">
        <form action="http://localhost/isabelle_choppy_5_26062023/index.php?action=login" method="post">
            <input type="email" name="email" id="email" placeholder="email">
            <input type="password" name="password" id="password" placeholder="password">
            <input type="submit" id="connect" value="Connexion">

        </form>
    </div>

    <?php include("components/message.php") ?>

</body>

</html>