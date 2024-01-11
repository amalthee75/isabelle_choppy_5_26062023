<?php

class BooksClass extends Model
{
    public function add_books_model($data)
    {
        if (
            isset($data["titre"]) &&
            !empty($data["titre"]) &&
            isset($data["date_parution"]) &&
            !empty($data["date_parution"]) &&
            isset($data["id_auteur"]) &&
            !empty($data["id_auteur"]) &&
            isset($data["content"]) &&
            !empty($data["content"])
        ) {
            $sql = 'INSERT INTO romans(titre, date_parution, id_auteur) VALUES(?, ?, ?)';
            $request = $this->db->prepare($sql);
            $request->execute(array($data["titre"], $data["date_parution"], $data['id_auteur']));

            $reponse = $this->db->lastInsertId();
            return $reponse;
        }
        return false;
    }
    public function get_all_books_of_author_model($id_auteur)
    {
        $sql = "SELECT * FROM romans WHERE id_auteur=?";
        $request = $this->db->prepare($sql);
        $request->execute(array($id_auteur));
        $reponse = $request->fetchAll();

        return $reponse;
    }
    public function find_book_by_id_model($book_id)
    {
        $sql = "SELECT * FROM romans WHERE id_auteur=?";
        $request = $this->db->prepare($sql);
        $request->execute(array($book_id));
        $reponse = $request->fetch();

        return $reponse;
    }
    public function book_edit_model($data, $book_id)
    {
        $title = htmlspecialchars($data["title"]);
        $content = htmlspecialchars($data("content"));
        $id = $book_id;

        $sql = 'UPDATE romans SET title = ?, content = ? WHERE id = ?';
        $update = $this->db->prepare($sql);
        $update->execute(array($title, $content, $id));
        var_dump($update);

        if ($update->rowCount() == 1) {
            var_dump($update->rowCount());
            return true;
        } else {
            return false;
        }
    }
    public function book_delete_model($book_id)
    {
        $sql = "DELETE FROM romans WHERE id = ? ";
        $request = $this->db->prepare($sql);
        $reponse = $request->execute(array($book_id));

        return $reponse;
    }

    // Retrouver un livre avec son ID
}
