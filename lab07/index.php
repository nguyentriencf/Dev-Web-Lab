<?php
require_once 'controllers/employeeController.php';
$controller = new EmployeeController();
// $action= $_GET['action'];
 if(isset($_POST['addEm'])) {
    $controller->run('insert');
}
if (!isset($_GET['action'])) {
    $controller->run("index");
    } 
else if($_GET['action'] == "detail") {
    $controller->run("detail");
}
?>