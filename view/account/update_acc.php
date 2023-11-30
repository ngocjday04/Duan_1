<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>CẬP NHẬT TÀI KHOẢN</title>
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
                        <h1 class="mb-0">CẬP NHẬT ACCOUNT</h1>
                    </div>
                    <h5 style="text-align: center;color: red;" class="thongbao">
                        <?php

                        if (isset($thongbao) && ($thongbao != ""))
                            echo $thongbao;
                        ?>
                    </h5>
                    <div class="card-body">
                        <form action="index.php?act=update_acc" method="post">
                            <div class="form-group row mb">
                                <label for="tenloai" class="col-md-2 col-form-label">Tên đăng nhập:</label>
                                <div class="col-md-10">
                                    <input type="text" name="user_name"
                                        value="<?= $_SESSION['user_name']['user_name'] ?>" id="user_name"
                                        class="form-control" require>
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <label for="tenloai" class="col-md-2 col-form-label">Email:</label>
                                <div class="col-md-10">
                                    <input type="text" name="email" value="<?= $_SESSION['user_name']['email'] ?>"
                                        id="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <label for="tenloai" class="col-md-2 col-form-label">Mật khẩu:</label>
                                <div class="col-md-10">
                                    <input type="password" name="password"
                                        value="<?= $_SESSION['user_name']['password'] ?>" id="password"
                                        class="form-control" require>
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <label for="tenloai" class="col-md-2 col-form-label">Số điện thoại:</label>
                                <div class="col-md-10">
                                    <input type="text" name="tel" value="<?= $_SESSION['user_name']['tel'] ?>" id="tel"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <label for="tenloai" class="col-md-2 col-form-label">Địa chỉ:</label>
                                <div class="col-md-10">
                                    <input type="text" name="address" value="<?= $_SESSION['user_name']['address'] ?>"
                                        id="address" class="form-control">
                                </div>
                            </div>


                            <div class="form-group row mb">
                                <div class="col-md-12">
                                    <input type="submit" name="updateacc" value="Cập nhật" class="btn btn-primary">
                                </div>
                            </div>
                            <input type="hidden" name="user_id" value="<?= $_SESSION['user_name']['user_id'] ?>">
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