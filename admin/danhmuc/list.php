<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../view/css/listdm.css">
    <title>Danh sách loại hàng</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h1 class="mb-0">DANH SÁCH LOẠI HÀNG</h1>
                    </div>
                    <div class="card-body">
                        <div class="row mb">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Mã loại</th>
                                        <th>Tên loại</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($danhmuc as $dm) {
                                        extract($dm);
                                        $suadm = "index.php?act=suadm&iddm=$category_id";
                                        $xoadm = "index.php?act=xoadm&iddm=$category_id";
                                        echo '<tr>
                                               <td><input type="checkbox" name="" id=""></td>
                                               <td>' . $category_id . '</td>
                                               <td>' . $category_name . '</td>
                                               <td><a href="' . $suadm . '"><input type="button" class="btn btn-primary" value="Sửa"></a> <a href="' . $xoadm . '"><input type="button" class="btn btn-danger" value="Xóa"></a></td>
                                           </tr>';
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb custom-margin">
                            <input type="button" class="btn btn-secondary" value="Chọn tất cả">
                            <input type="button" class="btn btn-secondary" value="Bỏ chọn tất cả">
                            <input type="button" class="btn btn-danger" value="Xóa các mục đã chọn">
                            <a href="index.php?act=adddm"><input type="button" class="btn btn-primary" value="Nhập thêm"></a>
                        </div>
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