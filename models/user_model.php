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

    // public function usermodel_deconnexion()
    // {
    //     if (isset($_POST['email']) && ($_POST["password"])) {
    //         $_POST["email"] = "";
    //         $_POST["password"] = "";
    //         // Finalement, on détruit la session.
    //         session_destroy();
    //         return true;
    //     }
    // }
}



// function userModel_sign()
// {
//     if (isset($_POST["pseudo"]) && ($_POST["email"]) && ($_POST["password"])) {
//         $_POST["password"] = password_hash($_POST["password"], PASSWORD_BCRYPT);
//     }
// }
