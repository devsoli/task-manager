<?php

function addFolder($folderName) {
    global $pdo;
    $sql="INSERT INTO folders (name) VALUES (?)";
    $pdo->prepare($sql)->execute([$folderName]);
    return $pdo->lastInsertId();
};

