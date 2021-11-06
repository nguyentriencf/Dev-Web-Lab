<?php 
class MySqlHepper{
    private $server;
    private $user;
    private $pass;
    private $conn;
    function __construct($server="localhost",$user="root",$pass="")
    {
        $this->server = $server;
        $this->user = $user;
        $this->pass = $pass;
    }
    public function openDB($db){
        $this->conn = new mysqli($this->server,$this->user,$this->pass,$db);
        if($this->conn->connect_error)
            echo "Connection fall: ".$this->conn->connect_error;
    }
    public function closeDB(){
        mysqli_close($this->conn);
    }
    public function myQuery($query){
        $result = $this->conn->query($query);
        $this->closeDB();
        return $result;                                       
    }
    public function GetAll($table){
        $sql = "select * from ". $table;
        $result = $this->conn->query($sql);
        $this->closeDB();
        return $result;
    }
}
?>