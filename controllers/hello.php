<?php

$name = isset($_GET['name']) ? $_GET['name'] : 'Guest';
$greet = 'Hello ' . strip_tags($name);
$title = 'Hello page';

include_once "views/hello-page.view.php";