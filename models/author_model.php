<?php

class AuthorClass extends Model
{
    public function author($id)
    {
        $sql = "SELECT * FROM auteurs WHERE id=?";
        $request = $this->db->prepare($sql);
        $request->execute(array($id));
        $reponse = $request->fetch();

        return $reponse;
    }

    public function authors()
    {
        $sql = "SELECT * FROM auteurs";
        $request = $this->db->prepare($sql);
        $request->execute();
        $reponse = $request->fetchAll();

        return $reponse;
    }

    public function add_author_model($data)
    {
        var_dump($data["nom"], $data["prenom"], $data["date_naissance"], $data["date_mort"]);
        $sql = 'INSERT INTO auteurs(nom, prenom, date_naissance, date_mort) VALUES(?, ?, ?, ?)';
        $request = $this->db->prepare($sql);
        $request->execute(array($data["nom"], $data["prenom"], $data["date_naissance"], $data["date_mort"]));

        $reponse = $this->db->lastInsertId();
        return $reponse;
    }
    public function show_one_author_model($id)
    {
        //SQL
        $sql = "SELECT * FROM `auteurs` WHERE id = $id";

        //Exécuter
        $request = $this->db->query($sql);

        //Récupere les données ou renvoyer un tableau vide
        $item = $request ? $request->fetch() : [];

        //Return
        return $item;
    }
}
