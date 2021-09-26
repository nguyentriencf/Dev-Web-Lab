<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(^_^)</title>
</head>
<body>
    <?php  
        // Luyện tập 1
        echo "hello Would </br>";
        // Luyện Tập 2
        $a =1;
        $b=4;
        $c=3;
        if($a > $b){
            if($a> $c){
                echo "Max num a = $a" ;
            }else{
                echo "Max num c= $c";
            }
        } else {
            if($c > $b){
                echo "Max num c = $c";
            } else {
                echo "Max num b = $b </br>";
            }
        }
    // Luyện tập 3
    $a = 10;
    $b = 20;
    echo "a = $a" . "<br>" . "b = $b" . "<br>";
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo "<b>After Swapping" . "<br>" . " a = $a" . "<br>" . "b = $b<b>";

    ?>
</body>
</html>