<?php
require_once 'repositories/post.php';
require_once 'views/posts.php';

class PostController{
    private $postRepo;
    private $postView;
    public function __construct() {
        $this->postRepo = new PostRepository();
        $this->postView = new PostView();
    }
    public function getPost(){
        $posts = $this->postRepo->getAll();
        $this->postView->showAllPosts($posts);
        // require_once('models/posts.php');
        // $postModel = new PostModel();
        // $result = $postModel->getPost();
        // require_once('views/posts.php');
        // $postView = new PostView();
        // $postView->showAllPosts($result);
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

        require_once('models/posts.php');
        $postModel = new PostModel();
        $result = $postModel->addPost($title, $content, $thumbnail, $createAt);
        
        require_once('views/posts.php');
        $postView = new PostView();
        $postView->notifyAddPost($result);
    }
}

?>