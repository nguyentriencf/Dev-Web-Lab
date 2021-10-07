<?php
if (!isset($_GET['ban_kinh'])) {
    header(header: ('location:index.php'));
}

$ban_kinh = $_GET['ban_kinh'];
$chu_vi = $ban_kinh * 3.14 * 2;
$dien_tich = 3.14 * $ban_kinh ** 2;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Lab03 Practical 1 GET method</title>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col12 col-md-6 col-lg-8 col-xl-5">
                <form method="GET" action="action.php">
                    <h1>Tính diện tích và chu vi hình tròn</h1>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bán kinh hình tròn là</label>
                        <input type="number" class="form-control" disabled value="<?php echo $ban_kinh ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">chu vi của hình tròn</label>
                        <input type="number" class="form-control" disabled value="<?php echo $chu_vi ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">diện tích hình tròn</label>
                        <input type="number" class="form-control" disabled value="<?php echo $dien_tich ?>">
                    </div>
                    <a class="btn btn-primary" type="button" href="./index.php">Quay về</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>