<?php

class User extends Model
{
    public function usermodel_signup($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        $sql = "INSERT INTO users(email, password) VALUES(?,?)";
        $request = $this->db->prepare($sql);
        $request->execute(array($data['email'], $data['password']));
        var_dump($request);
        $reponse = $this->db->lastInsterId();
        return $reponse;
    }
    public function usermodel_login($data)
    {
        $sql = "SELECT * FROM `users` WHERE `email` = ?";
        $request = $this->db->prepare($sql);
        $request->execute(array($data['email']));
        $User = $request->fetch();

        if ($User) {
            if (password_verify($data['password'], $User['password'])) {
                //Si oui, return true
                return true;
            }
        }
        return false;
    }
}
