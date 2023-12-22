<?php

require_once '../src/Autoloader.php';
App\Autoloader::register();

function root($page): void
{

    $request = explode("/", $page);

    $pageContentInc = "../src/Controller/" . ucfirst($request[0]) . "Controller.php";

    if ( ! file_exists($pageContentInc)) {
        $pageContentInc = "../src/Controller/ErrorController.php";
    }

    require_once(realpath($pageContentInc));

    if (isset($request[1]) && function_exists($request[1])){
        $request[1]();
    } else {
        $class = new $pageContentInc;
        $class->index();
    }
}

if (isset($_GET['page'])) {
    root($_GET['page']);

} else {
    root("Main");
}