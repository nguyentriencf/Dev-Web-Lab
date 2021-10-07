<?php   
    if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])){

     $a = $_GET['a'];
     $b = $_GET['b'];
     $c = $_GET['c'];
    $a2 = $a * $a;
    $b2 = $b * $b;
    $c2 = $c * $c;
     if(($a+ $b)> $c || ($b+$c)> $a || ($a+$c)> $b) {
         echo "Thoã mãn yêu cầu của tam giác"; 
         echo "</br>";
     } else{
         echo "Không đủ điều kiện của tam giác";
         echo "</br>";
         return;
     }
    //Loại tam giác.
     $tam_giac='';
    if (
        $a == $b && $b == $c
    ) {
        $tam_giac = 'Tam giác đều';
    } else if ($a == $b || $a == $c || $c == $b) {
        if ($a2 == $b2 + $c2 || $b2 == $a2 + $c2 || $c2 == $a2 + $b2) {
            $tam_giac = 'Tam giác vuông cân';
        } else {
            $tam_giac = 'Tâm giác cân';
        }
    } else if ($a2 == $b2 + $c2 || $b2 == $a2 + $c2 || $c2 == $a2 + $b2) {
        $tam_giac = 'Tam giác vuông';
    } else {
        $tam_giac = 'Tam giác thường';
    }
    echo $tam_giac;
    }
?>