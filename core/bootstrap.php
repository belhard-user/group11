<?php
session_start();

$app = [1, 2, 3, 4];

require_once "core/Request.php";
require_once "core/Route.php";
require_once "core/DB.php";
require_once "core/App.php";

function __autoload($class)
{
    require_once "controllers/{$class}.php";
}



App::set('config', require_once "config.php");
$db = new DB(App::get('config')['database']);
App::set('db', $db);