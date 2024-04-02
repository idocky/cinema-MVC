<?php

namespace app\core;

class BaseController
{
    public $view;

    function __construct()
    {
        $this->view = new BaseView();
    }


    public function route($views = '')
    {
        return 'http://' . $_SERVER['HTTP_HOST'] . '/' . $views;
    }

    public function index()
    {

    }
}