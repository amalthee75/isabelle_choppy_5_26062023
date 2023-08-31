<?php

function userController_signupUser()
{
    //Je vérifie si la variable $_POST existe et n'est pas vide
    if (isset($_POST) && !empty($_POST)) {
        $userModel = new User();
        $userModel->usermodel_signup($_POST);
    }
    //[Ce que je lis] : Initialisation de la variable $title avec comme valeur "Signup" -- "A quoi ça sert : Correspond au titre h1 de la page user_form.php"
    $title = "Signup";
    //création de l'url automatique pour poster le formulaire
    $formAction = "http://localhost/isabelle_choppy_4_24122021/index.php?action=signup";

    // var_dump($title, $formAction);

    require 'templates/login.php';
}

function loginConnexion_log()
{
    if (isset($_SESSION['login']) && $_SESSION['login']) {
        header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=dashboard");
        return true;

        include "templates/dahsboard.php";
    }

    if (
        isset($_POST) && !empty($_POST)
    ) {
        var_dump('test');
        $userModel = new User();
        $userIsLogin = $userModel->usermodel_login($_POST);
        var_dump($userIsLogin);
        // $user
        if ($userIsLogin) {
            //Je suis un user connecté
            echo "User connecté";

            //Enregistre l'utilisateur en session(lire sur la session en php)(email utilisateur)
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['login'] = true;
            var_dump($_SESSION);

            echo $_SESSION["success"] = "Utilisateur connecté";
            header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=dashboard");
        } else {
            //Si non -> Message d'erreur sur le HTML "Le mot de passe ou(et) l'email est incorrect)
            $_SESSION["error"] = "Le mot de passe et/ou l'email est incorrect";
        }
    }

    require 'templates/login.php';
}

function deconnection_controller()
{
    // $userModel = new User();
    // $userModel->usermodel_deconnexion();
    session_destroy();
    $_SESSION["success"] = "déconnexion de l'utilisateur";

    header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=login");
}

// function userController_TableauDeBord()
// {
//     $userModel = new Post();
//     // if(isset($_SESSION) && isset($_SESSION['login']) && $_SESSION['login'] == true && $_SESSION['email']){

//     $database = connexion_db();
//     $posts = $userModel->postModel_getAllPosts($database);
//     // var_dump($posts);

//     require 'templates/tableau_de_bord.php';
//     return;
// }