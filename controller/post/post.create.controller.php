<?php
require dirname(dirname(__DIR__)) . '/model/post.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['title']) && !empty($_POST['description'])) {
        $posts = createPost();
        header('location: /start-code/post');
    }
}

require dirname(dirname(__DIR__)) . "/views/post/post.create.view.php";