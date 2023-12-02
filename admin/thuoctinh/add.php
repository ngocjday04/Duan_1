<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Thêm thuộc tính</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h1 class="mb-0">THUỘC TÍNH</h1>
                    </div>
                    <div class="card-body">
                        <form action="index.php?act=add-thuoctinh" method="post">
                            <div class="form-group row">
                                <label for="variant_id" class="col-md-2 col-form-label">Mã thuộc tính:</label>
                                <div class="col-md-10">
                                    <input type="text" name="variant_id" readonly class="form-control" placeholder="maloai">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="product_id" class="col-md-2 col-form-label">Mã sản phẩm:</label>
                                <div class="col-md-10">
                                    <input type="number" name="product_id" class="form-control" placeholder="masp">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="size" class="col-md-2 col-form-label">Kích cỡ:</label>
                                <div class="col-md-10">
                                    <input type="text" name="size" class="form-control">
                                </div>
                                <?php if (isset($_GET['kichcoerr'])) : ?>
                                    <span style="color: red"><?= $_GET['kichcoerr'] ?></span>
                                <?php endif ?>
                            </div>
                            <div class="form-group row">
                                <label for="quantity" class="col-md-2 col-form-label">Số lượng:</label>
                                <div class="col-md-10">
                                    <input type="number" name="quantity" class="form-control">
                                </div>
                                <?php if (isset($_GET['soluongerr'])) : ?>
                                    <span style="color: red"><?= $_GET['soluongerr'] ?></span>
                                <?php endif ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="submit" name="themmoitt" value="Thêm mới" class="btn btn-primary">
                                    <input type="reset" name="nhaplai" value="Nhập lại" class="btn btn-secondary">
                                    <a href="index.php?act=listthuoctinh" class="btn btn-info">Danh sách</a>
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