<?php

namespace app\core;
use PDO;

class Auth
{
    private static $instance;
    private $db;

    private function __construct(PDO $db) {
        $this->db = $db;
    }

    public static function getInstance(PDO $db) {
        if (!isset(self::$instance)) {
            self::$instance = new self($db);
        }
        return self::$instance;
    }

    public function register($email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->db->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);

        // Выполняем запрос
        return $stmt->execute();
    }

    public function login($email, $password) {

        $link = Database::getLink();
        $sth = $link->prepare('select * from users where email = "'. $email . '"');

        $sth->execute();

        $user = $sth->fetchAll();
        foreach ($user as $r)
        {
            $user = $r;
        }

        if($user === false){
            return[];
        }

        if ($user && password_verify($password, $user['password'])) {
            echo 'yes';
            $_SESSION['loggedIn'] = true;
            $_SESSION['email'] = $email;
        } else {
            echo 'no';
            return false;
        }
    }
}