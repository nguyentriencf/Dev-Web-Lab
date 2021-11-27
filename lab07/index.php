<?php
require_once 'controllers/employeeController.php';
require_once 'controllers/departmentControllers.php';
$controllerEmp = new EmployeeController();
$controllerDe =  new DepartmentController();

// $action= $_GET['action'];

 if(isset($_POST['addEm'])) {
    $controllerEmp->run('insert');
}
if (isset($_POST['addDep'])) {
    $controllerDe->run('insert');
}


if (!isset($_GET['action'])) {
    $controllerEmp->run("index");
    }

if (isset($_POST['updatedepartment'])) {
    $controllerDe->run('update');
}
if(isset($_POST['updateEmployee'])){
    $controllerEmp->run('update');
}
if ($_GET['action'] == 'updatepageDepartment') {
    $controllerDe->run('detail');
}
else if($_GET['action'] == "detail") {
    $controllerEmp->run("detail");
} elseif(isset($_POST['addEm'])) {
    $controllerEmp->run('insert');
} elseif($_GET['action'] == 'department') {
    $controllerDe->run('index');
} elseif($_GET['action']== 'deleteDepartment'){
    $controllerDe->run('delete');
} elseif($_GET['action'] == 'deleteEmployee') {
    $controllerEmp->run('delete');
} elseif($_GET['action']== 'updateEmployee') {
    $controllerEmp->run('edit');
}


?>