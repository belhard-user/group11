<?php


$router->get('', 'controllers/index');
$router->get('hello-page', 'controllers/hello');
$router->get('todo', 'controllers/todo');
$router->post('todo', 'controllers/addTodo');
