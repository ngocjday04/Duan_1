<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/css/taikhoan.css">
    <title>Danh sách tài khoản</title>
    <style>

    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="row header-2">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Mã tài khoản</th>
                                <th>Tên tài khoản</th>
                                <th>Email</th>
                                <th>Mật khẩu</th>
                                <th>Địa chỉ</th>
                                <th>Điện thoại</th>
                                <th>Vai trò</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listtaikhoan as $user) {
                                extract($user);
                                $suatk = "index.php?act=suatk&id=$user_id";
                                $xoatk = "index.php?act=xoatk&id=$user_id";
                                echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $user_id . '</td>
                                    <td>' . $user_name . '</td>
                                    <td>' . $email . '</td>
                                    <td>' . $password . '</td>
                                    <td>' . $address . '</td>
                                    <td>' . $tel . '</td>
                                    <td>' . $role . '</td>
                                    <td><a href="' . $suatk . '"><input type="button" class="btn btn-primary" value="Sửa"></a> <a href="' . $xoatk . '"><input type="button" class="btn btn-danger" value="Xóa"></a></td>
                                </tr>';
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="row mb custom-margin">
                    <a href="index.php?act=addtk"><input type="button" class="btn btn-primary" value="Nhập thêm"></a>
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