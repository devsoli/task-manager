<?php

function addFolder($folderName) {
    global $pdo;
    $sql="INSERT INTO folders (name) VALUES (?)";
    $pdo->prepare($sql)->execute([$folderName]);
    return $pdo->lastInsertId();
};

function getFolders(){
    global $pdo;
    $sql="SELECT * FROM folders";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);


}

