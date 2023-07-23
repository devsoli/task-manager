<?php
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
include 'Bootstrap/config.php';
try {
    $conn = new PDO("mysql:host={$db_config->host};dbname=$db_config->name", $db_config->user, $db_config->pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error Connection to Database : " . $e->getMessage();
}

include 'Libs/lib-tasks.php';
include 'Libs/lib-folders.php';
