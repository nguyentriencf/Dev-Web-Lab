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
                    <h1>Tính diện tích hình chữ nhật</h1>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nhập chiều dai</label>
                        <input type="number" class="form-control"  name="dai">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nhập chiều rộng</label>
                        <input type="number" class="form-control" name="rong">
                    </div>
                    <button type="submit" class="btn btn-primary">Tinh diện tích</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>