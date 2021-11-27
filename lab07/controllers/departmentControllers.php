<?php 
require_once 'libs/connection.php';
require_once 'models/department.php';
class DepartmentController{
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
            case "insert":
                $this->insert();
                break;
            case "detail":
                $this->detail();
                break;
            case "update":
                $this->update();
                break;
            case 'delete':
                $this->detele();
                break;
        }
    }
    public function index(){
        $dep = new Department($this->connection);
        $departmentList =  $dep->getAll();
        $this->view('department',"index",array(
            "ListEmp" => $departmentList,
            "title" =>"MVC List"
        ));
    }
    public function insert()
    {
        
        $name= $_POST['name'];
    
        $dep = new Department($this->connection);
        $dep->insert($name);
        
    }
    public function detail(){
        $id  = $_GET['id'];
        $dep = new Department($this->connection);
        $objDep= $dep->getById($id);
        $this->view('department', 'update',array(
            'dep' => $objDep
        ));
    }
    public function update()
    {
        $id = $_POST['id'];
        $name = $_POST['namedepartment'];
        $dep = new Department($this->connection);
        $dep->update($id,$name);
        header('location:index.php?action=department');
    }
    public function detele(){
        $id = $_GET['id'];
        $dep = new Department($this->connection);
        $dep->delete($id);
        header('location:index.php?action=department');
    }
    public function view($folder,$path,$dt)
    {
        $data = $dt;
        require_once 'views/'. $folder.'/'.$path.'.php';
        // $result = json_encode($dt,0);
        // return $result;
    }
    
}
