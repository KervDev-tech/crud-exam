<?php 

include_once '../app/includes/autoLoad.php';

$user = new userController;

$user->deleteSong($_GET['id']);
?>