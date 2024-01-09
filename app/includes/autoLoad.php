<?php


spl_autoload_register('myAutoLoaderModel');
spl_autoload_register('myAutoLoaderController');

function myAutoLoaderModel($className){
    $path = "../app/models/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    if(!file_exists($fullPath)){
        return false;
    }
    include_once $fullPath;
}

function myAutoLoaderController($className){
    $path = "../app/controllers/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    if(!file_exists($fullPath)){
        return false;
    }
    include_once $fullPath;
}