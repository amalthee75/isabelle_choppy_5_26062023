<?php

function show_Authors_controller()
{
    $author = new AuthorClass();
    $authors = $author->authors();

    $_SESSION["success"] = "Connexion";

    require "templates/romans_liste.php";
}

function show_One_Author_controller($id)
{
    $authorModel = new AuthorClass();
    //Lancer la fiche de l'auteur et son oeuvre
    $author = $authorModel->author($id);

    if (!$author) {
        $_SESSION["error"] = "Cet auteur n'existe pas";

        header('Location:http://localhost/isabelle_choppy_5_26062023/index.php?action=showAuthors');
        return;
    }

    //Récupères ses livres ?
    $bookModel = new BooksClass();
    $books = $bookModel->get_all_books_of_author_model($id);

    // var_dump($books);

    require "templates/fiche.php";
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
    require "templates/form_authors.php";
}

function delete_author_controller($id)
{
    $author = new AuthorClass();
    $authorDelete = $author->delete_author_model($id);

    if ($authorDelete) {
        $_SESSION["success"] = "Auteur supprimé";
        //    Redirection vers tous les auteurs
        header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=showAuthors");
    } else {
        $_SESSION["error"] = "Auteur non supprimé";
    }
}
