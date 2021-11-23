<?php 
require_once 'libs/connection.php';
require_once 'models/employee.php';
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
            // case insert:
                
        }
    }
    public function index(){
        $emp = new Employee($this->connection);
        $empList = $emp->getAll();
        $this->view("index",array(
            "ListEmp" => $empList,
            "title" =>"MVC List"
        ));
    }
    public function detail()
    {
        $emp = new Employee($this->connection);
        $id = $_GET['id'];
        $empObj = $emp->getById($id);
        $this->view("detail",array(
            'emp' =>$empObj,
            'title'=>"MVC Obj"
        ));
    }
    public function insert()
    {
        
    }
    public function view($path,$dt)
    {
        $data = $dt;
        require_once 'views/'.$path.'.php';
    }
}

?>