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
        <h2>Employee List</h2>
        <p>Danh sách các Nhân viên hiện có</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inSertMedal">
            Thêm mới
        </button>

        <!-- Modal -->
        <div class="modal fade" id="inSertMedal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Thêm phòng ban</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" action="index.php">
                        <form method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên phòng ban">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <input id="insertDe" type="submit" name="addDep" value="Thêm" class="btn btn-primary" />
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Bộ phận</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data["ListEmp"] as $List) {
                ?>
                    <tr>
                        <td><?php echo $List["idDepartment"] ?></td>
                        <td><?php echo $List["name"] ?></td>
                        <td>
                            <a class="btn btn-info" href="index.php?action=updatepageDepartment&id=<?php echo $List["idDepartment"] ?>">Sửa</a>
                            <a href="index.php?action=deleteDepartment&id=<?php echo $List["idDepartment"] ?>" class="btn btn-danger">Xoá</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>

<script>
    $(document).ready(() => {
        $("#insertDe").on('click', (id) => {
            console.log(id);
            var name = $('#name').val();
            $.ajax({
                url: "index.php",
                type: "POST",
                data: {
                    name: name
                },
                cache: false,
                success: (data) => {
                    alert('thêm thành công');
                }
            })
        })

    })
</script>