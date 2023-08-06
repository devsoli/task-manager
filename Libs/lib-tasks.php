<?php

function addTask($name,$folderId)
{
    global $pdo;
    $sql="INSERT INTO tasks (title,folder_id) VALUES (?,?)";
    $pdo->prepare($sql)->execute([$name,$folderId]);
    return $pdo->lastInsertId();
}