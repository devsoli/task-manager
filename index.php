<?php
include 'Bootstrap/init.php';

$folders=getFolders();

if (isset($_POST['addFolder'])){
    $folderName=$_POST['folderName'];
    if (!empty($folderName)){
        addFolder($folderName);
        $message=(object)[
            'type'=>'success',
            'text'=>"Done, $folderName Add."
        ];
    }else{
        $message=(object)[
            'type'=>'danger',
            'text'=>"Not Done, Please Enter Folder Name."
        ];
    }

}
if (isset($_GET['delete_folder'])){
    deleteFolder($_GET['delete_folder']);
    header("location:$_SERVER[PHP_SELF]");
}

include 'Tpl/tpl-index.php';