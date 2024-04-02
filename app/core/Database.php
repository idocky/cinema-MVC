<?php

namespace app\core;

use PDO;

class Database
{
    private static $link;


    //подключение к БД, все настройки меняеются в config.php
    public static function connect()
    {
        if (!isset(self::$link)) {
            $config = require_once './app/config.php';
            $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['db_name'] . ';charset=' . $config['charset'];
            self::$link = new PDO($dsn, $config['username'], $config['password']);
        }
    }

    public static function getLink()
    {
        return self::$link;
    }

}