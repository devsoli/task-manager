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
                <?php if (!empty($message)){?>
                <div class="alert alert-<?= $message->type ?>" role="alert">
                  <?= $message->text ?>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>


<div class="mx-5 card p-4 rounded-4">
    <div class="mt-sm-2 fs-3 mb-2">
        Folders List
    </div>
<div class="list-group">
    <button type="button" class="list-group-item list-group-item-action active mt-2" >
        All Tasks
        <button type="submit" class="btn btn-danger mx-auto">
            Delete
        </button>
    </button>
    <button type="button" class="list-group-item list-group-item-action">A second button item
        <button type="submit" class="btn btn-danger mx-auto">
            Delete
        </button>
    </button>
</div>
</div>

<div class="m-5">

    <div class="container-fluid px-1 py-5 mx-auto ">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="card rounded-4">
                    <div class="mt-sm-3 fs-3 ">
                        Add Task
                    </div>
                    <form class="form-control-dark m-5"">
                    <div class="row g-2">
                        <div class="col-sm-8">
                            <input type="text" name="taskTitle" class="form-control" placeholder="Task Title" aria-label="City">
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" name="addFolder" class="btn btn-secondary px-5">Add</button>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Task</th>
        <th scope="col">Folder</th>
        <th scope="col">Created At </th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
