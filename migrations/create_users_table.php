<?php

class create_users_table
{
    public function up(PDO $pdo)
    {
        $pdo->exec("CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL UNIQUE ,
            password VARCHAR(255) NOT NULL
            );
        ");
    }

    public function down(PDO $pdo)
    {
        $pdo->exec("DROP TABLE IF EXISTS movies");
    }
}