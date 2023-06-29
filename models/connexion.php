<?php

function connexion_db()
{
    // We connect to the database.
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "projet5");

    //connexion DSN
    $dsn = "mysql:dbname=" . DBNAME . ";host=" . DBHOST;

    // We connect to the database

    try {
        $database = new PDO($dsn, DBUSER, DBPASS);
        // echo "connexion !";

        //We define fetch in default
        $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $database->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);

        return $database;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

class Model
{
    protected $db;

    function __construct()
    {
        $this->connexion_db();
    }

    public function connexion_db()
    {
        //connexion DSN
        $dsn = "mysql:dbname=projet5;host=localhost";

        // We connect to the database
        try {
            $database = new PDO($dsn, "root", "");
            // echo "connexion !";

            //We define fetch in default
            $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $database->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);

            $this->db = $database;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
