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
        var_dump($this->db);
        $sql = "SELECT * FROM auteurs";
        $request = $this->db->prepare($sql);
        $request->execute();
        $reponse = $request->fetchAll();

        return $reponse;
    }
    public function add_Author_model($data)
    {

        $sql = 'INSERT INTO auteurs(nom, prenom, date_naissance, date_mort) VALUES(?, ?, ?, ?)';
        $request = $this->db->prepare($sql);
        $request->execute($data["nom"], $data["prenom"], $data["date_naissance"], $data["date_mort"]);

        var_dump($request);
    }
}
