<?php
include 'Bootstrap/init.php';

$folders=getFolders();

if (isset($_POST['addFolder'])){
    $folderName=$_POST['folderName'];
    if (!empty($folderName)){
        addFolder($folderName);
        header("location:$_SERVER[PHP_SELF]");
        $message=(object)[
            'type'=>'success',
            'for'=>'folder',
            'text'=>"Done, $folderName Add."
        ];
    }else{
        $message=(object)[
            'type'=>'danger',
            'for'=>'folder',
            'text'=>"Not Done, Please Enter Folder Name."
        ];
    }

}
if (isset($_GET['delete_folder'])){
    deleteFolder($_GET['delete_folder']);
    header("location:$_SERVER[PHP_SELF]");
}


if (isset($_POST['addTask'])){
    $taskTitle=$_POST['taskTitle'];
    if (!empty($taskTitle)){
        addTask($taskTitle,$_GET['folder_id']);
        $message=(object)[
            'type'=>'success',
            'for'=>'Task',
            'text'=>"Done, $taskTitle Add."
        ];
    }else{
        $message=(object)[
            'type'=>'danger',
            'for'=>'Task',
            'text'=>"Not Done, Please Enter Task Name."
        ];
    }

}
if (isset($_GET['folder_id'])){
    $tasks=getTasks($_GET['folder_id']);
}

if (isset($_GET['all_tasks'])){
    $tasks=getAllTasks();
}


if (isset($_GET['Done'])){
    doneTask($_GET['Done']);
}

if (isset($_GET['NotDone'])){
    notDoneTask($_GET['NotDone']);
}

if (isset($_GET['delete_task'])){
    deleteTask($_GET['delete_task']);
}
include 'Tpl/tpl-index.php';