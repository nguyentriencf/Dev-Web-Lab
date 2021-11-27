<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
                    <a class="nav-link" href="index.php?action=department">Phòng ban <span class="sr-only">(current)</span></a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="container">
        <h2>Update Employee</h2>
        <form method="POST">
            <div class="form-group">
                <input type="text" class="form-control" id="id" name="idEm" value="<?php echo $data['emp']->idEmployee; ?>" readonly=true>
            </div>
            <div class=" form-group">
                <input type="text" class="form-control" id="name" name="surname" value="<?php echo $data['emp']->surname; ?>">
            </div>
            <div class=" form-group">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['emp']->name; ?>">
            </div>
            <div class=" form-group">
                <input type="text" class="form-control" id="name" name="email" value="<?php echo $data['emp']->email; ?>">
            </div>
            <div class=" form-group">
                <input type="text" class="form-control" id="name" name="phone" value="<?php echo $data['emp']->phone; ?>">
            </div>
            <select class="form-control" name='idDepartment' id="idDepartment">
                <?php
                foreach ($data["dep"] as $List) { ?>
                    <option value="<?php echo $List["idDepartment"]; ?>"><?php echo $List["name"]; ?></option>
                <?php
                }
                ?>
            </select>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" name='updateEmployee' class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</body>

</html>