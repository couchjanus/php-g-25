<?php

define("ROOT", dirname(__DIR__));
const VIEWS = ROOT.'/app/Views';
const CONTROLLERS = ROOT.'/app/Controllers';

function uri() {
    return trim($_SERVER['REQUEST_URI'], '/') ?? '';
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

switch (uri()) {
    case '':
        require_once CONTROLLERS.'/HomeController.php';
        break;
    case 'about':
        require_once CONTROLLERS.'/AboutController.php';
        break;
    case 'contact':
        require_once CONTROLLERS.'/ContactController.php';
        break;
    default:
        echo "<h1>404 Error Page</h1>";    
}
