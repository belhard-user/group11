<?php
session_start();
$app = [];

require_once "core/Request.php";
require_once "core/Route.php";
require_once "core/DB.php";

$app['config'] = require_once "config.php";
$app['db'] = new DB($app['config']['database']);