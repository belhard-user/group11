<?php
use Core\App;
use Core\DB;

session_start();

require_once "vendor/autoload.php";



App::set('config', require_once "config.php");
$db = new DB(App::get('config')['database']);
App::set('db', $db);