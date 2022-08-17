<?php

define("ROOT", dirname(__DIR__));
const VIEWS = ROOT.'/app/Views';
const CONTROLLERS = ROOT.'/app/Controllers';
const CONFIG = ROOT.'/config';
const DB_CONFIG_FILE = ROOT.'/config/db.php';

function conf($mix) {
    $url = CONFIG."/${mix}.json";
    $json = file_get_contents($url);
    return json_decode($json, True);
}




require_once ROOT.'/core/Router.php';
require_once ROOT.'/core/Request.php';
$routesPath = ROOT.'/config/routes.php';

$router = new Router(new Request(), $routesPath);
$router->run();
