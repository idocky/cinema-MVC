<?php

namespace app\controllers;

use app\core\Auth;
use app\core\BaseController;
use app\core\Database;
use app\core\Request;

class AuthController extends BaseController
{
    public function index()
    {

    }

    public function login()
    {
        $this->view->generate('auth/login_page.php', 'layout.php');
    }

    public function register()
    {
        $this->view->generate('auth/register_page.php', 'layout.php');
    }

    public function loginUser()
    {
        $request = Request::getPostParam();
        Auth::getInstance(Database::getLink())->login($request['email'], $request['password']);
        $this->view->redirect();
    }

    public function registerUser()
    {
        $request = Request::getPostParam();
        Auth::getInstance(Database::getLink())->register($request['email'], $request['password']);
        $this->view->redirect();
    }
}