<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Nhân viên</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="inde">Phòng ban <span class="sr-only">(current)</span></a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="container">
        <h3>Employee - Detail</h3>
        <div class="row">
            <div class="col-lg-4">
                ID =
            </div>
            <div class="col-lg-8">
                <?php echo $data["emp"]->idEmployee ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                Name =
            </div>
            <div class="col-lg-8">
                <?php echo $data["emp"]->name ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                Surname =
            </div>
            <div class="col-lg-8">
                <?php echo $data["emp"]->surname ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                Phone =
            </div>
            <div class="col-lg-8">
                <?php echo $data["emp"]->phone ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                email =
            </div>
            <div class="col-lg-8">
                <?php echo $data["emp"]->email ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                Phòng ban =
            </div>
            <div class="col-lg-8">
                <?php echo $data["emp"]->nameDepartment ?>
            </div>
        </div>
    </div>
</body>

</html>