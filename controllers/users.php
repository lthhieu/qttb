<?php

class UserController{
    public function getUsers(){
        // echo 'Get all posts by controller';
        require_once('models/users.php');
        $userModel = new UserModel();
        $result = $userModel->getUsers();
        // print_r($result);
        require_once('views/users.php');
        $userView = new UserView();
        $userView->showAllUsers($result);
    }
}

?>