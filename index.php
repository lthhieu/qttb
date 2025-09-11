<?php

    $action = isset($_GET['action']) ? $_GET['action'] : 'list';

    require_once('controllers/posts.php');
    $postController = new PostController();

    if($action == 'add'){
        $postController->showFormAddPost();
    }

    if($action == 'list'){
        $postController->getPost();
    }
    
    if($action == 'adding'){
        $postController->addPost();
    }

?>