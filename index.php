<?php
include 'Bootstrap/init.php';

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

include 'Tpl/tpl-index.php';