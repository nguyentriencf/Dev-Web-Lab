<?php
require_once 'controllers/employeeController.php';
$controller = new EmployeeController();
$action= $_GET['action'];
if (!isset($action)) {
    $controller->run("index");
    } 
else if($action == "detail") {
    $controller->run("detail");
} elseif($action == "insert")
?>