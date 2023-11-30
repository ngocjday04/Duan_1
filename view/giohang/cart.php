<main class="bg_gray">
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <!-- <li><a href="#">Category</a></li> -->
                    <li>Giỏ hàng</li>
                </ul>
            </div>
            <h1>Cart page</h1>
        </div>
        <!-- /page_header -->
        <?php
        if (isset($_SESSION['mycart']) && (count($_SESSION['mycart']) > 0)) {
            echo '
                <table class="table table-striped cart-list">
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Kích cỡ </th>
                    <th>Tổng tiền</th>
                    <th>

                    </th>
                </tr>
            </thead>';
            // var_dump($_SESSION['mycart']);
            $tong = 0;
            $i = 0;
            foreach ($_SESSION['mycart'] as $cart) {
                $tong += $thanhtien;
                $thanhtien = (int)($cart[3]) * (int)$cart[5];
                $image = $image_path . $cart[2];
                $delcart = ' <a href="index.php?act=deletecart&i=' . $i . '"><i class="ti-trash"></i></a>';
                echo '<tr>
                    <td>
                    <span class="item_cart">' . $cart[1] . '</span>
                    </td>
                    <td>
                        <div class="thumb_cart">
                            <img src="' . $image . '" data-src="' . $image . '" class="lazy" alt="Image">
                        </div>
                    </td>
                    <td>
                    $ ' . $cart[3] . '
                    </td>
                    <td>
                            <input type="number" value="' . $cart[5] . '" id="quantity_1" class="qty2" name="quantity_1">
                    </td>
                    <td>
                       ' . $cart[4] . '
                    </td>
                    <td>
                       $' . $thanhtien . '
                    </td>

                    <td class="options">
                    ' . $delcart . '
                    </td>
                </tr>';
                $i += 1;
            }

            echo '
                <tr>
                <td colspan ="5"><h5> Tổng tiền : </h5> </td>
                <td><h5>$' . $tong . '</h5></td>
                <td></td>
                
                </tr> ';
        }
        ?>
        </tbody>
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

                    <a href="index.php" class="btn_1 full-width cart">Tiếp tục mua hàng</a>
                    <a href="index.php?act=deletecart" class="btn_1 full-width cart">Xóa giỏ hàng</a>
                    <a href="index.php?act=checkout" class="btn_1 full-width cart">Tiến hành thanh toán</a>

                </div>
            </div>
        </div>
    </div>

    <!-- /box_cart -->

</main>