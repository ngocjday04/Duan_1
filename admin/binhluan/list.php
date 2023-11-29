<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản</title>
    <!-- Thêm thư viện Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Tùy chỉnh các kiểu CSS của bạn ở đây */

    .mt-5 {
        margin-top: 5rem;
    }

    .mb-3 {
        margin-bottom: 1rem;
    }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="row frmtitle">
                    <h1>DANH SÁCH TÀI KHOẢN</h1>
                </div>
                <div class="row frmcontent">
                    <div class="col-md-12">
                        <div class="mb-3 frmdsloai">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nội dung bình luận</th>
                                        <th scope="col">Iduser</th>
                                        <th scope="col">Idpro</th>
                                        <th scope="col">Ngày bình luận</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listcmt as $cmt) {
                                        extract($cmt);
                                        $xoabl = "index.php?act=xoabl&comment_id=" . $comment_id;
                                        echo '<tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>' . $comment_id . '</td>
                                            <td>' . $content . '</td>
                                            <td>' . $user_id . '</td>
                                            <td>' . $product_id . '</td>
                                            <td>' . $date_comment . '</td>
                                            <td> <a href ="' . $xoabl . '" ><input type="button" class="btn btn-danger" value="Xóa"> </a> </td>
                                            </tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- <div class="mb-3">
                            <input type="button" class="btn btn-secondary" value="Chọn tất cả">
                            <input type="button" class="btn btn-secondary" value="Bỏ chọn tất cả">
                            <input type="button" class="btn btn-danger" value="Xóa các mục đã chọn">
                            <a href="index.php?act=adddm"><input type="button" class="btn btn-primary"
                                    value="Nhập thêm"></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Thêm thư viện Bootstrap JavaScript (tùy chọn) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>