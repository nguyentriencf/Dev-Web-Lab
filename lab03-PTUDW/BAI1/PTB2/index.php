<?php
// khai báo các biến toàn cầu
$heso_a = "";
$heso_b = "";
$heso_c = "";
// đọc các hệ số từ FORM
if (isset($_POST['heso_a'])) {
    $heso_a = $_POST['heso_a'];
}
if (isset($_POST['heso_b'])) {
    $heso_b = $_POST['heso_b'];
}
if (isset($_POST['heso_c'])) {
    $heso_c = $_POST['heso_c'];
}
/**
 * giải phương trình bậc 2 trong PHP
 *
 * @author: viettuts.vn
 * @param
 *            he so bac 2 $a
 * @param
 *            he so bac 1 $b
 * @param
 *            he so tu do $c
 */
function giaiPTB2($a, $b, $c)
{
    // kiểm tra biến đầu vào
    if ($a == "")
        $a = 0;
    if ($b == "")
        $b = 0;
    if ($c == "")
        $c = 0;
    // in phương trình ra màn hình
    echo "Phương trình: " . $a . "x2 + " . $b . "x + " . $c . " = 0";
    echo "<br>";
    // kiểm tra các hệ số
    if ($a == 0) {
        if ($b == 0) {
            echo ("Phương trình vô nghiệm!");
        } else {
            echo ("Phương trình có một nghiệm: " . "x = " . (-$c / $b));
        }
        return;
    }
    // tính delta
    $delta = $b * $b - 4 * $a * $c;
    $x1 = "";
    $x2 = "";
    // tính nghiệm
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
    } else if ($delta == 0) {
        $x1 = (-$b / (2 * $a));
        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
    } else {
        echo ("Phương trình vô nghiệm!");
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Phương Trình Bậc Nhất</title>
</head>

<body>


    <h1 class="text-center">Phương Trình Bậc Nhất</h1>
    <div class="container">
        <div class="row justify-content-center">
            <form action="#" method="post">
                <table>
                    <tr>
                        <td>Hệ số bậc 2, a</td>
                        <td><input type="text" name="heso_a" value="" /></td>
                    </tr>
                    <tr>
                        <td>Hệ số bậc 1, b</td>
                        <td><input type="text" name="heso_b" value="" /></td>
                    </tr>
                    <tr>
                        <td>Hệ số tự do, c</td>
                        <td><input type="text" name="heso_c" value="" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Kết quả"></td>
                    </tr>
                </table>
            </form>
            <?php
            // gọi hàm giải phương trình bậc 2
            // Sử dụng từ kháo $GLOBALS để đọc các biến toàn cầu và truyền vào hàm
            if (
                is_numeric($GLOBALS['heso_a']) && is_numeric($GLOBALS['heso_b'])
                && is_numeric($GLOBALS['heso_c'])
            ) {
                giaiPTB2($GLOBALS['heso_a'], $GLOBALS['heso_b'], $GLOBALS['heso_c']);
            } else {
                echo ("Giá trị input không hợp lệ!");
            }
            ?>
        </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>