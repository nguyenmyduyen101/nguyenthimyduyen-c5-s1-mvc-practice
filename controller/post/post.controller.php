<?php
require dirname(dirname(__DIR__)) . '/model/post.model.php';
$posts = getPost();


require dirname(dirname(__DIR__)) . "/views/post/post.view.php";
