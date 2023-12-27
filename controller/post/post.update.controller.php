<?php
require_once dirname(dirname(__DIR__)) . '/model/post.model.php';

    $id = $_GET['id'] ? $_GET['id'] : '';
    $title = $_POST['title'];
    $description = $_POST['description'];
    echo $title;
    if (!empty($title)  && !empty($description)) {
        $post = updatePost($id, $title, $description);
         header('Location: /start-code/post');
        require dirname(dirname(__DIR__)) . "/views/post/post.view.php";
    }
