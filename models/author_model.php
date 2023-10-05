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
        var_dump($data["nom"], $data["prenom"], $data["date_naissance"], $data["date_mort"], $data['biographie']);
        $sql = 'INSERT INTO auteurs(nom, prenom, date_naissance, date_mort, biographie) VALUES(?, ?, ?, ?, ?)';
        $request = $this->db->prepare($sql);
        $request->execute(array($data["nom"], $data["prenom"], $data["date_naissance"], $data["date_mort"], $data['biographie']));

        $reponse = $this->db->lastInsertId();
        return $reponse;
        var_dump($reponse);
    }
}
