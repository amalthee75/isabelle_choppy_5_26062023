<?php

function add_book_controller(): void
{
    if (isset($_POST) && !empty($_POST)) {
        $bookModel = new BooksClass();
        $book = $bookModel->add_books_model($_POST);
        var_dump($book);

        if ($book) {
            $_SESSION["success"] = "Livre ajouté";
            //Direction vers la fiche de l'auteur
            var_dump('Livre ajouté');
            header("Location: index.php?action=showOneAuthor&id=" . $_POST['id_auteur']);
        } else {
            $_SESSION["error"] = "Erreur ajout de livre";
        }
    }
    // Récuperer les auteurs pour les afficher dans le select <option>
    $author = new AuthorClass();
    $authors = $author->authors();

    require "templates/form_books.php";
}

function delete_book_controller($book_id): void
{
    var_dump($book_id, is_numeric($book_id));

    if (!isset($book_id) || (isset($book_id) && !is_numeric($book_id))) {
        $_SESSION["error"] = "Erreur: Veuilleur donner un Id de livre a supprimer";
        header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=showAuthors");
        return;
    }
    // exit;

    // Retrouver le livre avec l'id
    $bookModel = new BooksClass();
    $book_delete = $bookModel->book_delete_model($book_id);

    if ($book_delete) {
        $_SESSION["success"] = "Livre supprimé";
    } else {
        $_SESSION["error"] = "Erreur: Livre non supprimé";
    }

    header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=showAuthors");
}

function edit_book_controller($book_id): void
{
    // Pour comprendre quoi faire s'inpirer du AddBook, c'est similaire

    if (!isset($book_id) || (isset($book_id) && !is_numeric($book_id))) {
        $_SESSION["error"] = "Erreur: Le livre n'existe pas";
        header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=showAuthors");
        return;
    }
    $bookModel = new BooksClass();
    $book = $bookModel->find_book_by_id_model($book_id);
    var_dump($book);
    if ($book) {
        if (isset($_POST) && !empty($_POST)) {
            // Traite les données envoyer par le formulaire édition book
            $bookEdite = $bookModel->book_edit_model($_POST, $book_id);
            //  +Redirection 
            if ($bookEdite) {
                $_SESSION["success"] = "Livre modifié";
            } else {
                $_SESSION["error"] = "Livre non modifié";
            }
            header("http://http://localhost/isabelle_choppy_5_26062023/index.php?action=editBook&idBook=$book_id");

            return;
        }
        // Afficher le formulaire d'édition
        include "templates/edit_book.php";
        return;
    }
    //    Redirection vers
    $_SESSION["error"] = "Erreur: Le livre n'existe pas";
    header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=showAuthors");
    return;
}
function show_book_controller($book_id)
{
    if (!isset($book_id) || (isset($book_id) && !is_numeric($book_id))) {
        $_SESSION["error"] = "Erreur: Le livre n'existe pas";
        header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=showAuthors");
        return;
    }
    $bookModel = new BooksClass();
    $book_findId = $bookModel->find_book_by_id_model($book_id);
    var_dump($book_findId);
    // Retrouver le livre avec l'id
    if (!$book_findId) {
        $_SESSION["error"] = "Erreur: Le livre n'existe pas";
        header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=showAuthors");
        return;
    }

    // SINON redirection vers la page des auteurs
    header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=showAuthors");
}

function modify_book_controller($data, $book_id)
{
    $bookModel = new BooksClass();
    $book_modify = $bookModel->modify_book_model($data, $book_id);

    if ($book_modify) {
        $_SESSION["success"] = "Success: le livre a été modifié";
        header('http://localhost/isabelle_choppy_5_26062023/index.php?action=showOneAuthor&id=' . $book_id);
    }
}
