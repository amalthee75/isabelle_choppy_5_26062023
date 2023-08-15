<?php

// function connect_Authors_controller()
// {
//     var_dump($_POST);

//     if ($_POST) {
//         var_dump($_POST["ajouter"]);
//         $author = new Authors();
//         $author->connexion_authors_model($data);

//         // $_SESSION["success"] = "Ca marche ;)";

//         header("Location:http://localhost/isabelle_choppy_5_26062023/index.php?action=dashboard");

//         require "templates/dahsboard.php";
//     }
// }

function show_Authors_controller()
{

    $author = new AuthorClass();
    $authors = $author->authors();
    var_dump($authors);

    // $_SESSION["success"] = "Liste des romans";

    require "templates/romans_liste.php";
}
