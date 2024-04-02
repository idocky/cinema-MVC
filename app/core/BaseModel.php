<?php

namespace app\core;


use PDO;

class BaseModel
{
    public function execute($sql)
    {
        $link = Database::getLink();
        $sth = $link->prepare($sql);

        return $sth->execute();
    }

    public function query($sql){
        $link = Database::getLink();
        $sth = $link->prepare($sql);

        $sth->execute();


        $res = $sth->fetchAll();



        if($res === false){
            return[];
        }

        return $res;
    }

    public function get_data()
    {

    }
}