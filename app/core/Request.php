<?php

namespace app\core;

class Request
{
    private static $get_params;
    private static $post_params;

    public static function constr()
    {
        self::$get_params = $_GET;
        self::$post_params = $_POST;
    }


    //возвращает GET-параметры
    public static function getGetParam()
    {
        return self::$get_params;
    }

    //возвращает POST-параметры
    public static function getPostParam()
    {
        return self::$post_params;
    }
}