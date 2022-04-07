<?php
spl_autoload_register('autoload');

function  autoload($class_name)
{
    $array_paths = array(
        'Model/',
        'Controller'
    );

    foreach ($array_paths as $path) {
        $file = "app/$path/$class_name.php";
        if (file_exists($file)) {
            require_once $file;
            break;
        }
    }
}