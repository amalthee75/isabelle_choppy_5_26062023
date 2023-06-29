<?php
//Routeur
require_once("controllers/pages_controller.php");
require_once("controllers/controller_commentaires.php");
require_once("controllers/controller_romans.php");
require_once("models/connexion.php");

if (isset($_GET["action"]) && ($_GET["action"]) !== '') {
    if ($_GET["action"] === "accueil") {
        pagesController_homepage();
    } elseif ($_GET["action"] === "showComments") {
        showComments();
    } elseif ($_GET["action"] === "showBooks") {
        showBooks();
    }
};
