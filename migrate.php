<?php

use app\core\Database as Database;

require_once 'app/core/Database.php';

$Database = new Database();

$Database::connect();

function migrate($pdo)
{
    $appliedMigrations = [];

    $files = glob('migrations/*.php');
    foreach ($files as $file) {
        require_once $file;
        $className = pathinfo($file, PATHINFO_FILENAME);
        $migration = new $className();
        $migration->up($pdo);
        $appliedMigrations[] = $className;
    }

    return $appliedMigrations;
}

try {
    $appliedMigrations = migrate($Database::getLink());
    echo "Migrations applied successfully: " . implode(', ', $appliedMigrations);
} catch (PDOException $e) {
    echo "Migration failed: " . $e->getMessage();
}