<?php
if (isset($bill) && is_array($bill)) {
    extract($bill);
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Cập nhật sản phẩm</title>
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
                        <h1 class="mb-0">CẬP NHẬT ĐƠN HÀNG</h1>
                    </div>
                    <div class="card-body">
                        <form action="index.php?act=updatedh" method="post">
                            <div class="form-group row mb">
                                <label for="id" class="col-md-2 col-form-label">Mã đơn hàng:</label>
                                <div class="col-md-10">
                                    <input type="text" name="id" class="form-control" value="<?= $id ?>" placeholder="" disabled>
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <label for="trangthai" class="col-md-2 col-form-label">Tình trạng đơn hàng:</label>
                                <div class="col-md-10">
                                    <input type="text" name="trangthai" value="<?= $bill['trangthai'] ?>" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <div class="col-md-12 custom-margin">
                                    <input type="submit" name="capnhatdh" value="Cập nhật" class="btn btn-primary">
                                    <a href="index.php?act=listdh" class="btn btn-info">Danh sách</a>
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