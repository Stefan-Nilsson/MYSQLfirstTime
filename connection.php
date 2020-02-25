<?php
declare(strict_types=1);
function openConnection() {
    // Try to figure out what these should be for you
    $dbhost    = "localhost";
    $dbuser    = "stefanUser";
    $dbpass    = "AllisoneandOneisall";
    $db        = "@becode";
    $charset   = "utf8mb4";

    $dsn = "mysql:host=$dbhost;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    // Try to understand what happens here
    $pdo = new PDO($dsn, $dbuser, $dbpass, $options);
 // Why we do this here
    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}