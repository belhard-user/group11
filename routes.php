<?php


$router->get('todo', 'TodoController@index');
$router->post('todo', 'TodoController@addTodo');
