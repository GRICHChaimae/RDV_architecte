<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Headers:*");
header('Access-Control-Allow-Methods:*');
require_once "autoload.php";
require_once "./app/Module/DatabaseModel.php";
$params = explode("/", $_GET['page']);
$params = array_slice($params, 1);
if(!empty($params[0])) {

    $route = $_GET["page"];
    $controller=ucfirst($params[0])."Controller";
    $controllerPath = "./app/Controller/$controller.php";
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
    } else{
        echo "error 404";
    }
}
else {
    include "./app/view/home.php";
}
?>
