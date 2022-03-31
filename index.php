<?php

require_once "autoload.php";
const BASE_URL = "http://RDV_architecte/app";
$params = explode("/", $_GET['page']);

if(!empty($params[0])) {

    $route = $_GET["page"];
    $viewPath = "app/view/$route.php";

    $controller=ucfirst($params[0])."Controller";
    $controllerPath = "app/Controller/$controller.php";
    if(file_exists($controllerPath)){
        $obj = new $controller();
        if(!empty($params[1])) {
            $action =$params[1];
            if(method_exists($obj, $action)){
                if(!empty($params[2])){
                    $obj->$action($params);
                }else{
                    $obj->$action();
                }
            }
            else{
                echo "error 404";
            }
        }else{
            echo "error 404";
        }
    } else if (file_exists($viewPath)){
        include $viewPath;
    }else{
        echo "error 404";
    }
}
else {
    include "app/view/home.php";
}
?>
