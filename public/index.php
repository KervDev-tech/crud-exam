<?php 

include_once '../app/includes/autoLoad.php';

$user = new userController;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <?php include_once '../app/views/header.php'; ?>
</head>
<body>
    <div class="main">
        <?php include_once '../app/views/nav.php'; ?>
        <?php foreach ($user->getSong() as $key => $value): ?>
            <div class="card mb-3">
                <div class="card-header">
                    <div class="card-title">
                        <div class="lead">
                            <?= $value->s_title?> - <?= $value->s_artist?>
                        </div>
                    </div>
                    <a href="edit.php?id=<?= $value->id?>" class="btn btn-secondary btn-sm">Edit</a>
                    <a href="delete.php?id=<?= $value->id?>" class="btn btn-danger btn-sm">Delete</a>
                </div>
                <div class="card-body">
                    <div class="mb-1">
                        <small>[ Lyrics ]</small>
                        <br>
                        <?= $value->s_lyrics?>
                    </div>
                </div>
                <div class="card-footer">
                    <small>[ Date Created ]</small> <?= $value->datecreated?>
                    <br>
                    <small>[ Date Updated ]</small> <?= $value->dateupdated?>
                </div>
            </div>
            <div class="lead">
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>