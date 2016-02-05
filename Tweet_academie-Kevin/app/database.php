<?php
namespace App\Model;

class Database
{
    private static $socket = 'destef_1';
    private static $db;
    private static $dbuser = 'root';
    private static $dbname = 'common-database';
    private static $dbpass = '';
    private static $host = 'localhost';

    private function __construct()
    {
    }

    public static function get()
    {
        if (is_null(self::$db))
        {
            try
            {
                if (!is_null(self::$socket)) {
                    $dsn = 'mysql:unix_socket=/home/' . self::$socket . '/.mysql/mysql.sock;host=' . self::$host . ';port=3306;dbname=' . self::$dbname;
                } else {
                    $dsn = 'mysql:host=' . self::$host . ';port=3306;dbname=' . self::$dbname;
                }

                self::$db = new \PDO($dsn, self::$dbuser, self::$dbpass);
                self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            } catch (\Exception $e)
            {
                die('Erreur : ' . $e->getMessage());
            }
        }

        return self::$db;
    }
}
