<?php

require_once('controllers/posts.php');
require_once('controllers/auth.php');
require_once('controllers/users.php');
$postController = new PostController();
$authController = new AuthController();
$userController = new UserController();
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/bootstrap.php';

// Include routes
$routes = include('routes.php');

// Lấy route từ query string
$page = isset($_GET['page']) ? $_GET['page'] : 'news';
$method = $_SERVER['REQUEST_METHOD'];

if ($page !== 'login') {
    include('templates/layouts/header.php');
}

// Điều hướng route
if (isset($routes[$page][$method])) {
    call_user_func($routes[$page][$method]);
} else {
    echo '404 - Không tìm thấy trang!';
}

if ($page !== 'login') {
include('templates/layouts/footer.php');
}
?>