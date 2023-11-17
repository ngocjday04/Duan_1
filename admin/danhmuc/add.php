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
                        <h1 class="mb-0">THÊM SẢN PHẨM</h1>
                    </div>
                    <div class="card-body">
                        <form action="index.php?act=adddm" method="post">
                            <div class="form-group row mb">
                                <label for="maloai" class="col-md-2 col-form-label">Mã loại:</label>
                                <div class="col-md-10">
                                    <input type="text" name="maloai" class="form-control" placeholder="maloai" disabled>
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <label for="tenloai" class="col-md-2 col-form-label">Tên loại:</label>
                                <div class="col-md-10">
                                    <input type="text" name="tenloai" class="form-control" placeholder="tenloai">
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <div class="col-md-12">
                                    <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-primary">
                                    <input type="reset" name="nhaplai" value="Nhập lại" class="btn btn-secondary">
                                    <a href="index.php?act=listdm" class="btn btn-info">Danh sách</a>
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