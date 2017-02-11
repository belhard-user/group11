<?php 

$tasks = $app['db']->select('todo');

include_once "views/todo.view.php";