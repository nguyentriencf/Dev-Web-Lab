<?php
class Employee{
    private $conn;
    public $id;
    public $name;
    public $surName;
    public $email;
    public $phone;
    public function __construct($connection)
    {
        $this->conn = $connection;
    }
    public function getAll(){
        $sql = "select * from employees";
        $cmd = $this->conn->prepare($sql);
        $cmd->execute();
        $result = $cmd->fetchAll();
        $this-> conn = null;
        return $result;
    }
    public function getById($id) {
        $sql = "select * from employeeViews where idEmployee=(?)";
        $cmd = $this->conn->prepare($sql);
        $cmd->execute(array($id));
        $result = $cmd->fetchObject();
        $this->conn = null;
        return $result;
    }
    public function insert($name, $surname, $email, $phone,$idDep){
        $sql = "call addEmployee_Proc(?,?,?,?,?)";
        $cmd = $this->conn->prepare($sql);
        $cmd->execute(array($name, $surname, $email, $phone, $idDep));
        $this->conn = null;
    }
    public function update($id,$name,$surname,$email,$phone,$idD) {
        $sql = "call updateEmployee_Proc(?,?,?,?,?,?)";
        $cmd = $this->conn->prepare($sql);
        $cmd->execute(array($id, $name, $surname, $email, $phone, $idD));
        $this->conn = null;
    }
    public function delete($id){
        $sql = "delete from employees where idEmployee = (?)";
        $cmd = $this->conn->prepare($sql);
        $cmd->execute(array($id));
        $this->conn = null;
        
    }

}
?>