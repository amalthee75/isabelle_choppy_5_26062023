<?php

function show_Authors_controller()
{
    $author = new AuthorClass();
    $authors = $author->authors();

    $_SESSION["success"] = "Connexion";

    require "templates/romans_liste.php";
}

function add_Author_controller()
{


    // Si il y a un post (Si le formulaire d'ajout a été envoyé)
    if (
        isset($_POST) && !empty($_POST)
    ) {
        $author = new AuthorClass();
        $authorResponse = $author->add_author_model($_POST);

        if ($authorResponse) {
            $_SESSION["success"] = "Auteur ajouté";
            //    Redirection vers tous les auteurs
            header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=showAuthors");
        } else {
            $_SESSION["error"] = "Erreur, contactez l'administrateur";
        }
    }

    //Afficher le formulaire
    include "templates/form_authors.php";
}


// Afficher le template HTML du formulaire
// include "templates/form_authors.php";
