<?php

/**
 * Created by PhpStorm.
 * User: Kevynashinski
 * Date: 4/27/2016
 * Time: 2:45 PM
 */
class DatabaseConnection{

    private static $dbName = 'bloodbank';
    private static $dbHost = 'localhost';
    private static $dbUsername = 'root';
    private static $dbUserPassword = 'root';

    private static $cont = null;

    public function __construct(){
    }

    public static function connect(){
        // One connection through whole application
        if (null == self::$cont) {
            try {
                self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword);
                self::$cont->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$cont;
    }

    public static function disconnect(){
        self::$cont = null;
    }
}
