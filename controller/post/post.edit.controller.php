<?php
require_once dirname(dirname(__DIR__)) . '/model/post.model.php';
$id = $_GET['id'] ? $_GET['id'] : '';
if (isset($id)) {
    $post = getOnePost($id);

    require dirname(dirname(__DIR__)) . "/views/post/post.edit.view.php";
}
