<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Nhân viên</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Phòng ban <span class="sr-only">(current)</span></a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="container">
        <h2>Employee List</h2>
        <p>Danh sách các User hiện có | Thêm mới</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Detail</th>
                    <th>function</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data["ListEmp"] as $List) {
                ?>
                    <tr>
                        <td><?php echo $List["id"] ?></td>
                        <td><?php echo $List["name"] ?></td>
                        <td><?php echo $List["surName"] ?></td>
                        <td><?php echo $List["email"] ?></td>
                        <td><?php echo $List["phone"] ?></td>
                        <td>
                            <a href="index.php?action=detail&id=<?php echo $List["id"] ?>">Detail</a>
                        </td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inSertMedal">
                                Thêm
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="inSertMedal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Thêm nhân viên</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group" action="index.php" method="post">
                                                    <label for="surname">Họ</label>
                                                    <input type="text" class="form-control" id="surname" placeholder="Nhập họ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Tên</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Nhập tên">
                                                </div>
                                                <div class="form-group">
                                                    <label for="mail">Email</label>
                                                    <input type="gmail" class="form-control" id="mail" placeholder="Nhập gmail">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Số điện thoại</label>
                                                    <input type="number" class="form-control" id="phone" placeholder="Nhập số điện thoại...">
                                                </div>
                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            <button type="submit" class="btn btn-primary">Thêm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type=" button" class="btn btn-info">SỬa</button>
                            <button type="button" class="btn btn-danger">Xoá</button>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
    <div id=" myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
</script>