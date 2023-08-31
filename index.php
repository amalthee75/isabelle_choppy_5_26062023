<?php
session_start();
// var_dump($_SESSION);

require_once("models/model.php");
require_once("models/user_model.php");
require_once("models/author_model.php");
//Routeur
require_once("controllers/controller_pages.php");
// require_once("controllers/controller_commentaires.php");
// require_once("controllers/controller_romans.php");
require_once("controllers/controller_authors.php");
require_once("controllers/controller_login.php");

function middlewareIsLogin($LaunchFonction)
{
    if (isset($_SESSION['login']) && $_SESSION['login']) {
        $LaunchFonction;
        return true;
    }
    $_SESSION["error"] = "Error, vous n'avez accès à cette page";
    // Redirection vers affichage des posts(URL)
    header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=login");

    return false;
}

if (isset($_GET["action"]) && ($_GET["action"]) !== '') {
    switch ($_GET["action"]) {
        case 'accueil':
            pagesController_homepage();
            break;

        case 'login':
            loginConnexion_log();
            break;

        case "signup":
            userController_signupUser();
            break;

        case "addAuthor";
            middlewareIsLogin(add_Author_controller());
            break;

        case "showAuthors";
            middlewareIsLogin(show_Authors_controller());
            break;

        case "dashboard";
            middlewareIsLogin(pagesController_dashboard());
            break;

        case "deconnexion";
            deconnection_controller();
            break;
        default:
            echo "Cette page n'existe pas";
            break;
    }
}
