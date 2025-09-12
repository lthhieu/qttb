<?php
return [
    'news' => [
        'GET' => [$postController, 'getPost']
    ],
    'add-news' => [
        'GET' => [$postController, 'showFormAddPost']
    ],
    'adding' => [
        'POST' => [$postController, 'addPost']
    ],
    'login' => [
        'GET' => [$authController, 'showFormLogin'],
        'POST' => [$authController, 'doLogin']
    ],
    'logout' => [
        'GET' => [$authController, 'logout']
    ],
    'users' => [
        'GET' => [$userController, 'getUsers']
    ],
];
