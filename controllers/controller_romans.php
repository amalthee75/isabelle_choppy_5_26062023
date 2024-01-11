<?php

function showBooks()
{
    $title = $_POST["title"];
    $content = $_POST["content"];

    if (isset($title) && isset($content)) {

        $_SESSION["success"] = "Roman ajouté";

        header('Location:http://localhost/isabelle_choppy_5_26062023/index.php?action=showBook&id' . $_POST["idBook"]);
        return;
    }
    require "templates/roman_edite.php";
}

function edit_roman_controller()
{
    $editRoman = new RomanClass();
    $roman = $editRoman->roman_edit_model();

    if (isset($_POST) && !empty($_POST)) {
        $_SESSION["success"] = "Roman ajouté";
        header("Location: http://localhost/isabelle_choppy_5_26062023/index.php?action=editBook");
        return;
    } else {
        $_SESSION["error"] = "Roman non rajouté";
    }

    if ($roman) {
        $_SESSION["success"] = "Roman ajouté";
        //Direction vers la fiche de l'auteur
        var_dump('Roman ajouté');
        header("Location: index.php?action=showOneAuthor&id=" . $_POST['id_auteur']);
    } else {
        $_SESSION["error"] = "Erreur ajout de livre";
    }
    require 'templates/editer_roman.php';
}
