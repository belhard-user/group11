<?php

namespace App;

use Core\App;
use Core\Request;

class TodoController
{
    private $db;

    public function __construct()
    {
        $this->db = App::get('db');
    }
    public function index()
    {
        $tasks = $this->db->select('todo');

        include_once "views/todo.view.php";
    }

    public function addTodo()
    {
        $title = \Core\Filters\TwitterFilter::user(strip_tags($_POST['title']));

        $this->db->insert('todo', [
            'title' => $title,
            'complete' => 0
        ]);

        Request::back();
    }
}