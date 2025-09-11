<?php
require_once('models/DBModel.php');
class PostModel extends DBModel{
    public function getPost(){
        $mysqli=$this->connect();
        
        $sql = "SELECT * FROM posts";
        $result = $mysqli->query($sql);

        $posts = array();
        if($result->num_rows > 0){
            while ($post = $result -> fetch_assoc()){
                $posts[] = $post;
            }
        }

        return $posts;

    }

    public function addPost($title, $content, $thumbnail, $createAt){
        $mysqli=$this->connect();

        $sql = "INSERT INTO posts(title, content, thumbnail, createAt) VALUES('$title', '$content', '$thumbnail', '$createAt')";

        $result = $mysqli->query($sql);

        return $result;

    }
}

?>