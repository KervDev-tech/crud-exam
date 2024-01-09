<?php
include_once '../app/includes/autoLoad.php';
$user = new userController;
$data = $user->editSong($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <?php include_once '../app/views/header.php'; ?>
</head>

<body>
    <div class="main">
        <?php include_once '../app/views/nav.php'; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?id='.$_GET['id']; ?>" method="post">
            <div class="mb-3">
                <label for="s_title" class="form-label">Title</label>
                <input type="text" class="form-control" name="s_title" id="s_title" value="<?= $data->s_title ?>" placeholder="enter title..."
                    required>
            </div>
            <div class="mb-3">
                <label for="s_artist" class="form-label">Artist</label>
                <input type="text" class="form-control" name="s_artist" id="s_artist" value="<?= $data->s_artist ?>" placeholder="enter artist..."
                    required>
            </div>
            <div class="mb-3">
                <label for="s_lyrics" class="form-label">Lyrics</label>
                <textarea class="form-control" name="s_lyrics" id="s_lyrics" rows="3" placeholder="enter lyrics..."
                    required><?= $data->s_lyrics ?></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" name="submit_btn" id="submit_btn" value="submit" class="btn btn-primary">
            </div>
        </form>
        <?php if($user->editSong($_GET['id'])[1]): ?>
        <div class="toast-container position-static">
            <div id="liveToast" class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Message</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Song added!
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</body>

</html>