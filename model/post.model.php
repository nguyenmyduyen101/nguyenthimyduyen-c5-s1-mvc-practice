<?php
require_once dirname(__DIR__) . "/database/database.php";

function getPost()
{
    global $connection;
    $statement = $connection->prepare("select * from posts");
    $statement->execute();
    $posts = $statement->fetchAll();
    return $posts;
}


function createPost()
{
    global $connection;
    $statement = $connection->prepare("insert into posts (title, description) values (:title, :description)");
    $statement->execute([
        ':title' => $_POST['title'],
        ':description' =>  $_POST['description']
    ]);
    return $statement->rowCount();
}

function deletePost($id)
{
    global $connection;
    $statement = $connection->prepare("delete from posts where id = :id");
    $statement->execute([':id' => $id]);
    return $statement;
}

function updatePost($id, $title, $description)
{
    global $connection;
    $statement = $connection->prepare("update posts set title = :title, description = :description where id = :id");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':id' => $id
    ]);

    return $statement->rowCount();
}
function getOnePost($id)
{
    global $connection;
    $statement = $connection->prepare("select * from posts where id = :id");
    $statement->execute([
        ':id' => $id
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}
