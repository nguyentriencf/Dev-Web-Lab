<?php
require __DIR__.'/arrOneDimension.php';

class arrTwoDimension{
    private $matrix;
    public function __construct($array)
    {
        if(!is_integer(sqrt($array))){
            throw new Exception('Not is matrix squere');
        }
        $n = sqrt($array);
        for($i=0;$i<$n;$i++){
            $new_row=[];
            for($j=0;$j<$n;$j++) {
                $new_row[] =$array[$i*$j];
            }

        }
    }
}

$arr_num = [];
$lenght = 30;
$min = 100;
$max = 999;

for ($i = 0; $i < $lenght; $i++) {
    $rand_num = rand($min, $max);
    $arr_num[$i] = $rand_num;
}

$ArrayProcess = new ArrayProcess($arr_num);
echo $ArrayProcess->outputArr();
$ArrayProcess->search_max();
$ArrayProcess->order_Des();
$ArrayProcess->search_x(121);
$ArrayProcess->update_x(12, 123);
$ArrayProcess->del_x(121);
?>