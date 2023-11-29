<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/css/listsp.css">
    <title>Danh sách sản phẩm</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="row header-2 mb-3">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <form action="index.php?act=listsp" method="post" class="mb-3">
                <div class="form-row">
                    <div class="col-md-4">
                        <input type="text" name="kyw" class="form-control" placeholder="Tìm kiếm">
                    </div>
                    <div class="col-md-4">
                        <select name="category_id" class="form-control">
                            <option value="0" selected>Tất cả</option>
                            <?php foreach ($danhmuc as $category) { ?>
                                <option value="<?= $category['category_id'] ?>">
                                    <?= $category['category_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" value="Tìm" name="listok" class="btn btn-primary">
                    </div>
                </div>
            </form>

            <div class="row formcontent">
                <div class="row mb-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>MÃ LOẠI</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>HÌNH</th>
                                <th>GÍA</th>
                                <th>MÔ Tả</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($product as $pro) {
                                extract($pro);
                                $suasp = "index.php?act=suasp&idsp=$product_id";
                                $xoasp = "index.php?act=xoasp&idsp=$product_id";
                                $image_path = '../upload/' . $image;
                                $img = '<img src="' . $image_path . '" width="100px" height="100px">';

                                if (is_file($image_path)) {
                                    $img = '<img src="' . $image_path . '" width="100px" height="100px">';
                                } else {
                                    echo "không tồn tại ảnh";
                                }

                                echo
                                '<tr>
                                       <td><input type="checkbox" name="" id=""></td>
                                       <td>' . $product_id . '</td>
                                       <td>' . $product_name . '</td>
                                       <td>' . $img . '</td>
                                       <td>' . $price . '</td>
                                       <td>' . $description . '</td>
                                      <td><a href="' . $suasp . '" class="btn btn-primary">Sửa</a></td>
                                      <td><a href="' . $xoasp . '" class="btn btn-danger">Xóa</a></td>
                                      </tr>';
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="row mb-3 custom-margin">
                    <input type="button" value="Chọn tất cả" class="btn btn-secondary">
                    <input type="button" value="Bỏ chọn tất cả" class="btn btn-secondary">
                    <input type="button" value="Xóa các mục đã chọn" class="btn btn-danger">
                    <a href="index.php?act=createsp" class="btn btn-primary">Nhập thêm</a>
                </div>
                <div class="pagination__wrapper">
                    <ul class="pagination">
                        <li><a href="index.php?act=listsp&page=<?= $page > 1 ? $page - 1 : 1 ?>" class="prev" title="previous page">&#10094;</a></li>
                        <?php
                        $Pagepagination = ceil($countsp / $limit);
                        for ($i = 1; $i < $Pagepagination; $i++) :
                        ?>
                            <li>
                                <a href="index.php?act=listsp&page=<?= $i ?>" class="<?= $i == $page ? 'active' : '' ?>">
                                    <?= $i ?>
                                </a>
                            <?php endfor; ?>
                            </li>
                            <li><a href="index.php?act=listsp&page<?= $page < $Pagepagination ? $page + 1 : $page ?>" class="next" title="next page">&#10095;</a></li>
                    </ul>
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