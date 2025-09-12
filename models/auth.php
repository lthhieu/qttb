<?php
require_once('models/DBModel.php');
class AuthModel extends DBModel{
    public function login($username, $password){
        
        require_once('models/users.php');
        $userModel = new UserModel();

        $user = $userModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) 
            return $user;
        else 
            return null;

    }
}

?>