<?php
class Department{
    private $conn;
    public $id;
    public $name;
    public function __construct($connection)
    {
        $this->conn = $connection;
    }
    public function getAll(){
        $sql = "select * from departments";
        $cmd = $this->conn->prepare($sql);
        $cmd->execute();
        $result = $cmd->fetchAll();
        $this-> conn = null;
        return $result;
    }
    public function getById($id) {
        $sql = "select * from departments where idDepartment=(?)";
        $cmd = $this->conn->prepare($sql);
        $cmd->execute(array($id));
        $result = $cmd->fetchObject();
        $this->conn = null;
        return $result;
    }
    public function insert($name){
        $sql = "call insert_Department_Proc(?)";
        $cmd = $this->conn->prepare($sql);
        $cmd->execute(array($name));
        $this->conn = null;
    }
    public function update($id,$name) {
        $sql = "call update_Department_Proc(?,?)";
        $cmd = $this->conn->prepare($sql);
        $cmd->execute(array($id,$name));
        $this->conn = null;
    }
    public function delete($id){
        $sql = "delete from departments where idDepartment = (?)";
        $cmd = $this->conn->prepare($sql);
        $cmd->execute(array($id));
        $this->conn = null;
        
    }

}
