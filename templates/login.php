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
        <form action="<?php echo $loginForm; ?>" method="POST">
            <input type="text" id="pseudo" placeholder="pseudo">
            <input type="email" id="email" placeholder="email">
            <input type="password" id="password" placeholder="password">
            <input type="submit" id="connect" value="Connexion">
    </div>


    </form>

</body>

</html>