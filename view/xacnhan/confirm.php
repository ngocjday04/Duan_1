<main class="bg_gray">
    <div class="container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=addtocart">Giỏ hàng</a></li>
                <li><a href="index.php?act=checkout">Thanh toán</a></li>
                <li>Thành công</li>
            </ul>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div id="confirm">
                    <div class="icon icon--order-success svg add_bottom_15">
                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                            <g fill="none" stroke="#8EC343" stroke-width="2">
                                <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                            </g>
                        </svg>
                    </div>
                    <h2>Đặt hàng thành công!</h2>
                    <p>Cảm ơn quý khách đã tin tưởng và mua hàng!</p>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <div class="container margin_30">
        <div class="page_header">

        </div>
        <!-- /page_header -->
        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
        }
        ?>
        <h3>THÔNG TIN ĐƠN HÀNG</h3>
        <li>Đơn hàng :<?= $bill['id']; ?></li>
        <li>Ngày đặt hàng :<?= $bill['ngaydathang']; ?></li>
        <li>Tổng đơn :$ <strong><?= $bill['tongdonhang']; ?></strong></li>
        <li>Phương thức thanh toán :<?= $bill['pttt']; ?></li>


        <div>
            <h3>THÔNG TIN ĐẶT HÀNG</h3>
            <table>
                <tr>
                    <td>Khách hàng: </td>
                    <td><?= $bill['name']; ?></td>
                </tr>
                <tr>
                    <td>Địa chỉ: </td>
                    <td><?= $bill['address']; ?></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><?= $bill['email']; ?></td>
                </tr>
                <tr>
                    <td>Số điện thoại: </td>
                    <td><?= $bill['tel']; ?></td>
                </tr>
            </table>
        </div>
        <div>
            <h3>Chi tiết giỏ hàng</h3>
            <table>

                <?php
                bill_chitiet($billct);
                ?>
            </table>
        </div>

        <div class="row add_top_30 flex-sm-row-reverse cart_actions">

        </div>
        <!-- /cart_actions -->

    </div>
    <!-- /container -->

    <div class="box_cart">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-4 col-lg-4 col-md-6">


                    <a href="index.php?" class="btn_1 full-width cart">Về trang chủ</a>

                </div>
            </div>
        </div>
    </div>
    <!-- /box_cart -->
    <style>
        h3 {
            color: #333;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
        }

        ul {
            list-style-type: none;
        }

        li {
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table,
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