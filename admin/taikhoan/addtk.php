<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Thêm loại sản phẩm</title>
    <style>
    /* Thêm CSS tùy chỉnh nếu cần */
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h1 class="mb-0">THÊM TÀI KHOẢN</h1>
                    </div>
                    <div class="card-body">
                        <form action="index.php?act=addtk" method="post">
                            <div class="form-group row mb">
                                <label for="tenloai" class="col-md-2 col-form-label">Tên đăng nhập:</label>
                                <div class="col-md-10">
                                    <input type="text" name="user_name" id="user_name" class="form-control"
                                        placeholder="Nhập tên đăng nhập">
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <label for="tenloai" class="col-md-2 col-form-label">Email:</label>
                                <div class="col-md-10">
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Nhập email">
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <label for="tenloai" class="col-md-2 col-form-label">Mật khẩu:</label>
                                <div class="col-md-10">
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Nhập mật khẩu">
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <label for="tenloai" class="col-md-2 col-form-label">Số điện thoại:</label>
                                <div class="col-md-10">
                                    <input type="text" name="tel" id="tel" class="form-control"
                                        placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <label for="tenloai" class="col-md-2 col-form-label">Địa chỉ:</label>
                                <div class="col-md-10">
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="Nhập địa chỉ">
                                </div>
                            </div>


                            <div class="form-group row mb">
                                <div class="col-md-12">
                                    <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-primary">
                                    <input type="reset" name="nhaplai" value="Nhập lại" class="btn btn-secondary">
                                    <a href="index.php?act=dstk" class="btn btn-info">Danh sách</a>
                                </div>
                            </div>
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS và Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>