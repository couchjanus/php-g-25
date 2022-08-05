<?php

function uri() {
    return trim($_SERVER['REQUEST_URI'], '/') ?? '';
}

define("ROOT", __DIR__);

function render($view) {
    ob_start();
    $content = file_get_contents(realpath(ROOT."/app/Views/$view.php"));
    require_once realpath(ROOT.'/app/Views/layouts/app.php');
    echo str_replace("{{ content }}", $content, ob_get_clean());
}

switch (uri()) {
    case '':
        require_once realpath(__DIR__.'/app/Controllers/HomeController.php');
        break;
    case 'about':
        require_once realpath(__DIR__.'/app/Controllers/AboutController.php');
        break;
    case 'contact':
        require_once realpath(__DIR__.'/app/Controllers/ContactController.php');
        break;
    default:
        echo "<h1>404 Error Page</h1>";    
}
