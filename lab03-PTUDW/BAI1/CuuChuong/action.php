<?php
if(isset($_GET['n'])){
    $n = $_GET['n'];
    echo "<h1>Bảng cưu chương: ".$n."</h1>";
    for($i = 1; $i <=10 ;$i++ ){
        echo $n." * ".$i." = ".$n*$i."</br>";
    }
}
?>