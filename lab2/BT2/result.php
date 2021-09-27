<?php

if(!isset($_POST['submit'])){
    header(header:'location:index.php');
}

$pheptinh = $_POST['pheptinh'];
$num_1 = $_POST['so_1'];
$num_2 = $_POST['so_2'];
$lable = '';
$result=0;
switch ($pheptinh) {
    case 'cong':
        
        $lable =  "Cộng";
        $result = $num_1 + $num_2;
            break;
    case 'tru':
        $lable = "Trừ";
        $result = $num_1 - $num_2;
        break;
    case 'nhan':
        $lable = "Nhân";
        $result = $num_1 * $num_2;
        break;
    case 'chia':
        $lable = "Chia";
        $result = $num_1 / $num_2;
        break;
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

    <title>Nguyen Dinh Phat Trien</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <h1>Phép tính hai số</h1>
                <div>
                    <div class="form-group">
                        <label class="d-inline-block mr-3">Phép tính đã chọn: <?php echo $lable; ?></label>
                    </div>
                    <div class="form-group">
                        <label>số thứ nhât</label>
                        <input type="text" class="form-control" value="<?php echo $num_1; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>số thứ hai</label>
                        <input type="text" class="form-control" value="<?php echo $num_2; ?>" disabled>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>Kết quả là: </label>
                        <input type="text" class="form-control" value="<?php echo $result; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <a href="index.php">Quay lại trang trước</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
