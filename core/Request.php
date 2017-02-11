<?php

class Request
{
    public static function path()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function requetMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}