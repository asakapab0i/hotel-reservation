<?php

$user = 'root';
$pass = '';
$dsn = 'mysql:host=localhost;dbname=hotel3';

class PDOExtension {

    private static $instance;
    public $dbh;
//db info
    public $user = 'root';
    public $pass = '';
    public $dsn = 'mysql:host=localhost;dbname=hotel3';

    function __construct() {
        try {
            $this->dbh = new PDO($this->dsn, $this->user, $this->pass, array(PDO::ATTR_PERSISTENT => true));
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }

}
?>

