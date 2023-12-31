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

function getAllTasks(){
    global $pdo;
    $sql="SELECT * FROM tasks";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
function doneTask($taskId){
    global $pdo;
    $sql="UPDATE tasks SET is_done=1 WHERE id = ?";
    $stmt=$pdo->prepare($sql);
    return $stmt->execute([$taskId]);
}
function notDoneTask($taskId){
    global $pdo;
    $sql="UPDATE tasks SET is_done=0 WHERE id = ?";
    $stmt=$pdo->prepare($sql);
    return $stmt->execute([$taskId]);
}

function deleteTask($taskId){
    global $pdo;
    $sql="DELETE FROM tasks WHERE id=?";
    $stmt=$pdo->prepare($sql);
    return $stmt->execute([$taskId]);
}
