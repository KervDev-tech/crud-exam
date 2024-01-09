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
</head>
<body>
    <?php var_dump($user->getSong()); $user->insertSong(); ?>
</body>
</html>