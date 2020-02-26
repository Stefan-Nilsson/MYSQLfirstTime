<?php


class connectionClass
{
    public function getConnection()
    {
        // Try to figure out what these should be for you
        $dbhost = "localhost";
        $dbuser = "stefanUser";
        $dbpass = "AllisoneandOneisall";
        $db     = "student";
        $charset = "utf8mb4";

        $dsn = "mysql:host=$dbhost;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        // Try to understand what happens here
        // for later: add $options underneath
        $pdo = new PDO($dsn, $dbuser, $dbpass, $options);

        return $pdo;

    }

}