<?php

class create_movies_table
{
    public function up(PDO $pdo)
    {
        $pdo->exec("CREATE TABLE IF NOT EXISTS movies (
            id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            slug VARCHAR(255) NOT NULL,
            release_year YEAR NOT NULL,
            format VARCHAR(50) NULL,
            actors TEXT NULL
        )");
    }

    public function down(PDO $pdo)
    {
        $pdo->exec("DROP TABLE IF EXISTS movies");
    }
}