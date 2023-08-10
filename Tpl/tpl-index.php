<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-body-tertiary fw-bolder">
<nav class="navbar  bg-dark-subtle mx-3 rounded-bottom-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= $_SERVER['PHP_SELF']?>">
            <img src="https://www.svgrepo.com/download/528260/folder-2.svg" alt="Logo" width="30" height="24"
                 class="d-inline-block align-text-top">
            Task Manager
        </a>
    </div>
</nav>
<div class="container-fluid px-1 py-5 mx-auto ">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <div class="card rounded-4">
                <div class="mt-sm-3 fs-3 ">
                    Add Folder
                </div>
                <form class="form-control-dark m-5" method="post" action="<?= $_SERVER['PHP_SELF'] ?>?add_folder">
                <div class="row g-2">
                    <div class="col-sm-8">
                        <input type="text" name="folderName" class="form-control" placeholder="Folder name" aria-label="City">
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" name="addFolder" class="btn btn-secondary px-5">Add</button>
                    </div>
                </div>
                </form>
                <?php if (!empty($message) And $message->for=='folder'):?>
                <div class="alert alert-<?= $message->type ?>" role="alert">
                  <?= $message->text ?>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>


<div class="mx-5 card p-4 rounded-4">
    <div class="mt-sm-2 fs-3 mb-2">
        Folders List
    </div>
    <br>
<div class="list-group">
    <a class="link-underline-light" href="?all_tasks">
    <button type="button" class="list-group-item list-group-item-action bg-success-subtle mt-2" >
        <b>All Tasks</b>

    </button>
    </a>
    <br>
 <hr>
    <br>
    <?php foreach ($folders as $folder):?>
            <a class="link-underline-light" href="?folder_id=<?=$folder->id?>">
    <button type="button"  class="list-group-item list-group-item-action"><?= $folder->name ?></button>
            </a>
        <br>
       <a href="?delete_folder=<?=$folder->id?>">
        <button type="submit" class="btn btn-danger mx-auto">Delete</button>
       </a>
        <hr>
    <?php endforeach; ?>
</div>
</div>
<?php if ($_GET['folder_id']){?>
<div class="m-5">

    <div class="container-fluid px-1 py-5 mx-auto ">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="card rounded-4">
                    <div class="mt-sm-3 fs-3 ">
                        Add Task
                    </div>
                    <form class="form-control-dark m-5" action="" method="post">
                    <div class="row g-2">
                        <div class="col-sm-8">
                            <input type="text" name="taskTitle" class="form-control" placeholder="Task Title" aria-label="City">
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" name="addTask" class="btn btn-secondary px-5">Add</button>
                        </div>

                    </div>
                    </form>
                    <?php if (!empty($message) And $message->for=='Task'):?>
                        <div class="alert alert-<?= $message->type ?>" role="alert">
                            <?= $message->text ?>
                        </div>
                    <?php endif?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php if (isset($_GET['folder_id']) or isset($_GET['all_tasks'])):?>

<table class="table rounded-4">
    <thead>
    <tr>
        <th scope="col">Task</th>
        <th scope="col">Folder</th>
        <th scope="col">Created At </th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    <?php foreach ($tasks as $task): ?>
    <tr>
        <th scope="row"><?=$task->title?></th scope="row">
        <td><?=$task->folder_id ?></td>
        <td><?=$task->created_at?></td>
        <td>
        <?php if ($task->is_done=='0'):?>
            <a href="?Done=<?=$task->id?>">
                <button type="submit"  class="btn btn-success mx-auto">Done</button>
            </a>
            <?php else:?>
            <a href="?NotDone=<?=$task->id?>">
                <button type="submit"  class="btn btn-warning mx-auto">Not Done</button>
            </a>
            <?php endif;?>
            <a>
                <button type="submit" class="btn btn-danger mx-auto">Delete</button>
            </a>
        </td>
    </tr>
    <?php endforeach;?>

    </tbody>
</table>
    </div>

<?php endif;?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
