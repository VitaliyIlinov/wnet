<?php

namespace components\classes;

class Db {

    private static $instance = null;
    public $connection;
    public $error;

    public function __construct() {
        $params= require_once(ROOT . '/config/db_params.php');
        $mysqli = new \mysqli($params['host'],$params['user'],$params['password'], $params['dbname'], $params['port']);
        if ($mysqli->connect_errno) {
            $this->error=$mysqli->connect_errno;
        }
        $this->connection= $mysqli;
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}