<?php
include 'mysqlHepper.php';
abstract class Entity{
    public $mySql;
    function __construct($db)
    {
        $this->mySql = new MySqlHepper();
        $this->mySql->openDB($db);
    }
    abstract function GetAll();
    abstract function GetById($id);
}
?>