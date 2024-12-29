<?php

namespace app\Model\Entity;

class BDConnexion
{
    private static ?BDConnexion $instance = null;
    private \PDO $pdo;

    private function __construct()
    {
        $infoBdd = self::infoBdd();
        $dsn = self::dsnPDOconnection($infoBdd);

        try {
            $this->pdo = new \PDO($dsn, $infoBdd['user'], $infoBdd['pass']);
        } catch (\PDOException $e) {
            throw new \RuntimeException("Database connection error: " . $e->getMessage());
        }
    }
    public function getPdo(): \PDO
    {
        return $this->pdo;
    }
    public static function infoBdd():array
    {
        $infoBdd = array(
            'interface' => 'pdo',        // "pdo" ou "mysqli"
            'type' => 'mysql',        //  mysql ou pgsql
            'host' => 'localhost',             // adresse du serveur, en cas de travail en local localhost
            'port' => 3306,        // Par défaut: 5432 pour postgreSQL, 3306 pour MySQL
            'charset' => 'UTF8',
            'dbname' => 'tp2_election',
            'user' => 'root',
            'pass' => '',
        );
        return $infoBdd;

    }
    public static function dsnPDOconnection(array $infoBdd): string{

        $myport = ($infoBdd['port']);
        $mycharset =($infoBdd['charset']);
        $hostname =($infoBdd['host']);
        $mydbname = ($infoBdd['dbname']);
        $myusername =($infoBdd['user']);
        $mypassword =($infoBdd['pass']);

        return "mysql:dbname=$mydbname;host=$hostname;port=$myport;charset=$mycharset";
    }
    public static function getOrCreateInstance():BDConnexion
    {

        if (!isset(static::$instance)){
            static::$instance = new BDConnexion();
        }
        return static::$instance;
    }
}