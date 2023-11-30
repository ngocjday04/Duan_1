<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/css/listsp.css">
    <title>Danh sách sản phẩm</title>
    <style>
        body {
            padding-top: 50px;
        }

        .header-2 {
            margin-bottom: 20px;
        }

        .formcontent {
            padding: 20px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #dee2e6;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tbody tr:hover {
            background-color: #f0f0f0;
        }

        .btn-margin {
            margin-right: 5px;
        }

        .custom-margin {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 header-2 mb-3">
                <h1>DS THUỘC TÍNH</h1>
            </div>
            <div class="col-12 formcontent">
                <div class="row mb-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Mã Loại</th>
                                <th>Mã sản phẩm</th>
                                <th>Kích cỡ</th>
                                <th>Số lượng</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listvariant as $variant) {
                                extract($variant);
                                $suatt = "index.php?act=suatt&idvr=" . $variant_id;
                                $xoatt = "index.php?act=xoatt&idvr=" . $variant_id;
                                echo '
                            <tr>
                                <td>' . $variant_id . '</td>
                                <td>' . $product_id . '</td>
                                <td>' . $size . '</td>
                                <td>' . $quantity . '</td>
                                <td><a href="' . $suatt . '" class="btn btn-primary">Sửa</a></td>
                                <td><a href="' . $xoatt . '" class="btn btn-danger">Xóa</a></td>
                                
                            </tr>';
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 custom-margin">
                <input type="button" value="Chọn tất cả" class="btn btn-secondary btn-margin">
                <input type="button" value="Bỏ chọn tất cả" class="btn btn-secondary btn-margin">
                <input type="button" value="Xóa các mục đã chọn" class="btn btn-danger btn-margin">
                <a href="index.php?act=add-thuoctinh" class="btn btn-primary btn-margin">Nhập thêm</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS và Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>