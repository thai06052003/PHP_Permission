<?php

namespace System\Core;

use PDO;
use Requtize\QueryBuilder\Connection;
use Requtize\QueryBuilder\ConnectionAdapters\PdoBridge;
use Requtize\QueryBuilder\QueryBuilder\QueryBuilderFactory;


class Model
{
    protected $db;
    function __construct()
    {
        $host = env('DB_HOST');
        $dbName = env('DB_DATABASE');
        $dbPort = env('DB_PORT');
        $dbUser = env('DB_USERNAME');
        $dbPassword = env('DB_PASSWORD');
        $dbDriver = env('DB_DRIVER');

        /* $host = $_ENV['DB_HOST'];
        $dbName = $_ENV['DB_DATABASE'];
        $dbPort = $_ENV['DB_PORT'];
        $dbUser = $_ENV['DB_USERNAME'];
        $dbPassword = $_ENV['DB_PASSWORD'];
        $dbDriver = $_ENV['DB_DRIVER']; */

        $dsn = "$dbDriver:dbname=$dbName;host=$host;port=$dbPort";

        // Somewhere in our application we have created PDO instance
        $pdo = new PDO($dsn, $dbUser, $dbPassword);
        // Build Connection object with PdoBridge ad Adapter
        $conn = new Connection(new PdoBridge($pdo));
        // Pass this connection to Factory
        $this->db = new QueryBuilderFactory($conn);
    }
}
