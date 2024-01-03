<?php

require_once '../src/Autoloader.php';
App\Autoloader::register();

function root($page): void
{
    $request = explode("/", $page);

    $controllerName = ucfirst($request[0]) . "Controller";
    $controllerClass = "App\\Controllers\\" . $controllerName;

    if ( ! class_exists($controllerClass)) {
        $controllerClass = "App\\Controllers\\ErrorController";
    }

    if (isset($request[1]) && method_exists($controllerClass, $request[1])) {
        $method = $request[1];
        $controller = new $controllerClass;
        $controller->$method();
    } else {
        $controller = new $controllerClass;
        $controller->index();
    }
}


if (isset($_GET['page'])) {
    root($_GET['page']);
} else {
    root("Main");
}