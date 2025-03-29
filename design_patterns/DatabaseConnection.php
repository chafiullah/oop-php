<?php
declare(strict_types=1);
namespace design_patterns;

class DatabaseConnection
{
    private static ?DatabaseConnection $instance = null;
    private function __construct()
    {
        echo "Initializing a database connection...\n";
    }
    private function __clone(){}
    private function __wakeup(){}
    public static function getInstance(): DatabaseConnection
    {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }
    public function execute(string $sql):void
    {
        echo "Executing $sql...\n";
    }
}

$db1 = DatabaseConnection::getInstance();
$db2 = DatabaseConnection::getInstance();
$db1->execute("select some queries with db1........");
$db2->execute("select some queries db2........");

echo $db1 === $db2 ?  "same instances" : "not same instances";