<?php 
require_once 'libs/connection.php';
require_once 'models/employee.php';
require_once 'models/department.php';
class EmployeeController{
    private $connection;
    public function __construct()
    {
        $conn = new connection();
        $this->connection =$conn->connection();
    }
    public function run($action){
        switch($action){
            case "index":
                $this->index();
                break;
            case "detail":
                $this->detail();
                break;
            case "insert":
                $this->insert();
                break;
            case 'delete':
                $this->delete();
                break;
            case 'edit':
                $this->edit();
                break;
            case 'update':
                $this->update();
                break;
                
        }
    }
    public function index(){
        $emp = new Employee($this->connection);
        $empList = $emp->getAll();
        $dep = new Department($this->connection);
        $departmentList =  $dep->getAll();
        $this->view('employee',"index",array(
            "ListEmp" => $empList,
            "listDep" =>  $departmentList,
            "title" =>"MVC List"
        ));
    }
    public function detail()
    {
        $emp = new Employee($this->connection);
        $id = $_GET['id'];
        $empObj = $emp->getById($id);
        $this->view('employee',"detail",array(
            'emp' =>$empObj,
            'title'=>"MVC Obj"
        ));
    }
    public function insert()
    {
        $name= $_POST['name'];
        $surname= $_POST['surname'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $idDep = $_POST['idDepartment'];
        $emp = new Employee($this->connection);
        $emp->insert($name,$surname,$email,$phone, $idDep);
        
    }
    public function delete()
    {
        $id = $_GET['id'];
        $emp = new Employee($this->connection);
        $emp->delete($id);
        header('location:index.php');
        
    }
    public function edit()
    {
        $emp = new Employee($this->connection);
        $id = $_GET['id'];
        $empObj = $emp->getById($id);
        $dep = new Department($this->connection);
        $departmentList =  $dep->getAll();
        $this->view('employee', "update", array(
            'emp' => $empObj,
            'dep' => $departmentList,
        ));
    }
    public function update()
    {
        $id =$_POST['idEm'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $idDep = $_POST['idDepartment'];
        $emp = new Employee($this->connection);
        $emp->update($id, $name, $surname, $email, $phone, $idDep);
        header('location:index.php');
    }
    public function view($folder,$path,$dt)
    {
        $data = $dt;
        require_once 'views/'. $folder.'/'.$path.'.php';
        // $result = json_encode($dt,0);
        // return $result;
    }
   
}

?>