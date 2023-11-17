<?php

if (is_array($product)) {
    extract($product);
}
$image_path = '../upload/' . $image;

if (is_file($image_path)) {
    $img = '<img src="' . $image_path . '" width="100px" height="100px>';
} else {
    $img = '';
}

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/css/listupdate.css">
    <title>Cập nhật sản phẩm</title>
    <style>

    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="row header-2">
                <h1>CẬP NHẬT SẢN PHẨM</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="product_id" value="<?= $product_id ?>">
                    <div class="row mb">
                        <label for="product_name" class="col-sm-2 col-form-label">Tên sản phẩm:</label>
                        <div class="col-sm-10">
                            <input type="text" name="product_name" value="<?= $product_name ?>" class="form-control">
                        </div>
                    </div>
                    <div class="row mb">
                        <label for="image" class="col-sm-2 col-form-label">Hình sản phẩm:</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control">
                            <br>
                            <?= $img ?>
                        </div>
                    </div>
                    <div class="row mb">
                        <label for="price" class="col-sm-2 col-form-label">Giá sản phẩm:</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" value="<?= $price ?>" class="form-control">
                        </div>
                    </div>
                    <div class="row mb">
                        <label for="description" class="col-sm-2 col-form-label">Mô tả sản phẩm:</label>
                        <div class="col-sm-10">
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"><?= $description ?></textarea>
                        </div>
                    </div>

                    <div class="row mb">
                        <label for="category_id" class="col-sm-2 col-form-label">Danh mục:</label>
                        <div class="col-sm-10">
                            <select name="category_id" id="" class="form-control">
                                <?php
                                foreach ($danhmuc as $category) {
                                    $id_cate = $category['category_id'];
                                    $name_cate = $category['category_name'];
                                    if ($id_cate == $category_id) {
                                        echo '<option value="' . $id_cate . '" selected>' . $name_cate . '</option>';
                                    } else {
                                        echo '<option value="' . $id_cate . '">' . $name_cate . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb">
                        <div class="col-sm-10 offset-sm-2">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-primary">
                            <input type="reset" name="nhaplai" value="Nhập lại" class="btn btn-secondary">
                            <a href="index.php?act=listsp"><input type="button" name="them" value="Danh sách" class="btn btn-primary"></a>
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

    <!-- Bootstrap JS và Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>