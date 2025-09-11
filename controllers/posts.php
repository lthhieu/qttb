<?php

class PostController{
    public function getPost(){
        // echo 'Get all posts by controller';
        require_once('models/posts.php');
        $postModel = new PostModel();
        $result = $postModel->getPost();
        // print_r($result);
        require_once('views/posts.php');
        $postView = new PostView();
        $postView->showAllPosts($result);
    }
    public function showFormAddPost(){
        require_once('views/posts.php');
        $postView = new PostView();
        $postView->showFormAddPost();
    }

    public function AddPost(){
        // lấy dữ liệu từ form
        $title = $_POST['title'];
        $content = $_POST['content'];
        $thumbnail = $_POST['thumbnail'];
        $createAt = $_POST['createAt'];

        // $data = array(
        //     'title' => $title,
        //     'content' => $content,
        //     'thumbnail' => $thumbnail,
        //     'createAt' => $createAt
        // );

        require_once('models/posts.php');
        $postModel = new PostModel();
        $result = $postModel->addPost($title, $content, $thumbnail, $createAt);
        
        require_once('views/posts.php');
        $postView = new PostView();
        $postView->notifyAddPost($result);
    }
}

?>