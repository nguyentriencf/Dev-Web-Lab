<?php 
class connection{
    private $diver;
    private $host,$user,$pass,$database,$charset;
    public function __construct()
    {
        $db_cfg = require_once 'database.php';
        $this->driver = DB_DRIVER;
        $this->user = DB_USER;
        $this->host = DB_HOST;
        $this->pass = DB_PASS;
        $this->database = DB_DATABASE;
        $this->charset = DB_CHARSET;
    }
    public function Connection(){
        $bbdb =$this->driver .':host='. $this->host . ';dbname=' . $this->database . ';charset=' . 
        $this->charset;
        try{
            $connection = new PDO($bbdb, $this->user, $this->pass);
            $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $connection;

        } catch(PDOException $e){
            throw new Exception('Problem establising the connection.');
        }
    }
}

?>