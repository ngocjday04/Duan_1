<main class="bg_gray">
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <!-- <li><a href="#">Category</a></li> -->
                    <li>Đơn hàng</li>
                </ul>
            </div>
            <h1>ĐƠN HÀNG CỦA TÔI</h1>
        </div>
        <h5 style="color:green;"> <?php
                                    if (isset($thongbao) && ($thongbao != "")) {
                                        echo $thongbao;
                                    }
                                    ?></h5>
        <!-- /page_header -->
        <table class="table table-striped">
            <tr>
                <th>Mã đơn hàng</th>
                <th>Ngày đặt hàng</th>
                <th>Người đặt</th>
                <th>Địa chỉ</th>
                <th>SĐT</th>
                <th>Số lượng </th>
                <th>Tổng giá trị</th>
                <th>Tình trạng đơn hàng </th>
                <th></th>
                <th></th>
            </tr>
            <?php

            if (is_array($listbill)) {
                foreach ($listbill as $bill) {
                    extract($bill);
                    $suadh = "index.php?act=edit_bill&id=$id";
                    $xoadh = "index.php?act=delete_bill&id=$id";
                    $chitiet = "index.php?act=bill_detail&id=$id";
                    $ttdh = get_ttdh($bill['trangthai']);
                    $countsp = loadall_cart_count($bill['id']);
                    echo '
                    <tr>
                <td>DA-' . $bill['id'] . '</td>
                <td>' . $bill['ngaydathang'] . '</td>
                <td>' . $bill['name'] . '</td>
                <td>' . $bill['address'] . '</td>
                <td>' . $bill['tel'] . '</td>
                <td>' . $countsp . '</td>
                <td>$' . $bill['tongdonhang'] . '</td>
                <td>' . $ttdh . '</td>
                <td><a href="' . $suadh . '" class="btn btn-primary">Sửa TT</a><a href="' . $xoadh . '" class="btn btn-danger" onclick="return confirm(\'Bạn có chắc muốn hủy?\')">Hủy</a></td>
                <td><a href="' . $chitiet . '" class="btn btn-primary">Chi tiết</a>
            </tr>
                    ';
                }
            }
            ?>


        </table>

        <div class="row add_top_30 flex-sm-row-reverse cart_actions">

        </div>
        <!-- /cart_actions -->

    </div>
    <!-- /container -->

    <div class="box_cart">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <a href="index.php" class="btn_1 full-width cart">Về trang chủ</a>

                </div>
            </div>
        </div>
    </div>

    <!-- /box_cart -->
    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</main>