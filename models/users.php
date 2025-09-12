<?php
require_once('models/DBModel.php');
class UserModel extends DBModel{
    public function getUserByUsername($username){
        $mysqli=$this->connect();
        
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc(); // Trả về thông tin user
        } else {
            return null; // Không tìm thấy user
        }
    }
    public function getUsers(){
        $mysqli=$this->connect();
        
        $sql = "SELECT * FROM users";
        $result = $mysqli->query($sql);

        $users = array();
        if($result->num_rows > 0){
            while ($user = $result -> fetch_assoc()){
                $users[] = $user;
            }
        }
        return $users;
    }
}

?>