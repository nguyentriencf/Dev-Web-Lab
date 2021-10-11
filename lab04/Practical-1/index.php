<?php
include 'student.php';
$student = new students('trien','nguyen','29 Ngo Gia Tu');
echo $student->geeting()."</br>";
echo $student->getAdress();
?>