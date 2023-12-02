<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Thêm mới sản phẩm</title>
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
                        <h1 class="mb-0">THÊM MỚI SẢN PHẨM</h1>
                    </div>
                    <div class="card-body">
                        <form action="index.php?act=createsp" method="post" enctype="multipart/form-data">
                            <div class="form-group row mb">
                                <label for="category_id" class="col-md-2 col-form-label">Danh mục:</label>
                                <div class="col-md-10">
                                    <select name="category_id" id="" class="form-control">
                                        <?php foreach ($danhmuc as $category) { ?>
                                            <?php extract($category) ?>
                                            <option value="<?= $category_id ?>">
                                                <?= $category_name ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php if (isset($_GET['loaierrr'])) : ?>
                                        <span style="color: red"><?= $_GET['loaierrr'] ?></span>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <label for="product_id" class="col-md-2 col-form-label">Mã sản phẩm:</label>
                                <div class="col-md-10">
                                    <input type="text" name="product_id" readonly class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb">
                                <label for="product_name" class="col-md-2 col-form-label">Tên sản phẩm:</label>
                                <div class="col-md-10">
                                    <input type="text" name="product_name" class="form-control">
                                </div>
                                <?php if (isset($_GET['nameerr'])) : ?>
                                    <span style="color: red"><?= $_GET['nameerr'] ?></span>
                                <?php endif ?>
                            </div>
                            <div class="form-group row mb">
                                <label for="price" class="col-md-2 col-form-label">Giá sản phẩm:</label>
                                <div class="col-md-10">
                                    <input type="number" name="price" class="form-control">
                                </div>
                                <?php if (isset($_GET['priceerr'])) : ?>
                                    <span style="color: red"><?= $_GET['priceerr'] ?></span>
                                <?php endif ?>
                            </div>
                            <div class="form-group row mb">
                                <label for="image" class="col-md-2 col-form-label">Hình sản phẩm:</label>
                                <div class="col-md-10">
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <?php if (isset($_GET['imageerr'])) : ?>
                                    <span style="color: red"><?= $_GET['imageerr'] ?></span>
                                <?php endif ?>
                            </div>
                            <div class="form-group row mb">
                                <label for="description" class="col-md-2 col-form-label">Mô tả sản phẩm:</label>
                                <div class="col-md-10">
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb">
                                <div class="col-md-12">
                                    <input type="submit" name="submitsp" value="Thêm mới" class="btn btn-primary">
                                    <input type="reset" name="nhaplai" value="Nhập lại" class="btn btn-secondary">
                                    <a href="index.php?act=listsp" class="btn btn-info">Danh sách</a>
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