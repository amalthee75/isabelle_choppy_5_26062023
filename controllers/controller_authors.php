<?php


function show_Authors_controller()
{

    $author = new AuthorClass();
    $authors = $author->authors();
    // var_dump($authors);

    // $_SESSION["success"] = "Liste des romans";

    require "templates/romans_liste.php";
}

function add_Author_controller()
{

    // Si il y a un post ()
    $author = new AuthorClass();
    $author = $author->add_Author_model($_POST);

    // Afficher le template HTML du formulaire
}
