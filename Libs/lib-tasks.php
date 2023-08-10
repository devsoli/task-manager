<?php

function addTask($name,$folderId)
{
    global $pdo;
    $sql="INSERT INTO tasks (title,folder_id) VALUES (?,?)";
    $pdo->prepare($sql)->execute([$name,$folderId]);
    return $pdo->lastInsertId();
}

function getTasks($folderId){
    global $pdo;
    $sql="SELECT * FROM tasks WHERE folder_id = ?";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$folderId]);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}