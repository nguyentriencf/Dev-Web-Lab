<?php
$scoreStandart = 20;
$toan = $_POST['toan'];
$ly = $_POST['ly'];
$hoa = $_POST['hoa'];
$total = $toan + $ly + $hoa;
$result = $total >= $scoreStandart ? "Đậu" : "Rớt";
echo $result;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <h5 class="card-header text-center">Kết quả thi đại học</h5>
                    <div class="card-body">
                        <form action="result.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Toán</label>
                                <input type="text" class="form-control" disabled id="exampleInputEmail1" value="<?php echo $toan;  ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Lý</label>
                                <input type="text" class="form-control" disabled id="exampleInputEmail1" value="<?php echo $ly; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hoá</label>
                                <input type="text" class="form-control" disabled id="exampleInputEmail1" value="<?php echo $hoa; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Điểm chuẩn</label>
                                <input type="text" class="form-control" disabled id="exampleInputEmail1" value="<?php echo $scoreStandart ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tổng điểm</label>
                                <input type="text" class="form-control" disabled id="exampleInputEmail1" value="<?php echo $total ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kết quả</label>
                                <input type="text" class="form-control" disabled id="exampleInputEmail1" value="<?php echo $result ?>">
                            </div>
                            <hr>
                            <div class="form-group">
                                <a href="index.php">quay về trang chủ</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>