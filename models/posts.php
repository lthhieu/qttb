<?php

class PostModel{
    public function getPost(){
        // echo 'Get post in model';
        $mysqli = new mysqli("localhost","root","","qttb");

        // Check connection
        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

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
        $mysqli = new mysqli("localhost","root","","qttb");

        // Check connection
        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

        $sql = "INSERT INTO posts(title, content, thumbnail, createAt) VALUES('$title', '$content', '$thumbnail', '$createAt')";

        $result = $mysqli->query($sql);

        return $result;

    }
}

?>