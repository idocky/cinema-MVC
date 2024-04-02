<?php

namespace app\models;

use app\core\BaseModel;

class Auth extends BaseModel
{
    public function getUser($email)
    {
        $sql = 'select * from users where email = "'. $email . '"';
        $res = $this->query($sql);
        foreach ($res as $r)
        {
            $res = $r;
        }

        return $res;
    }
}