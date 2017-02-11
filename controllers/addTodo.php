<?php

$app['db']->insert('todo', [
    'title' => $_POST['title'],
    'complete' => 0
]);

Request::back();