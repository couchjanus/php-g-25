<?php

define("ROOT", dirname(__DIR__));
const VIEWS = ROOT.'/app/Views';
const CONTROLLERS = ROOT.'/app/Controllers';
const CONFIG = ROOT.'/config';

function conf($mix) {
    $url = CONFIG."/${mix}.json";
    $json = file_get_contents($url);
    return json_decode($json, True);
}


function render($view, $params=null) {

    function view($view, $params) {
        ob_start();
        if ($params) {
            extract($params);
            // var_dump($messages);
        }     
        include_once VIEWS."/$view.php";
        return ob_get_clean();
    }
    ob_start();
    $content = view($view, $params);
    // var_dump($content);
    require_once VIEWS.'/layouts/app.php';
    echo str_replace("{{ content }}", $content, ob_get_clean());
}

require_once ROOT.'/core/Router.php';
$routesPath = ROOT.'/config/routes.php';

$router = new Router($routesPath);

// var_dump($router);
$router->run();

// echo $controller->var1;
// echo $controller->var3;
// $controller->index();
