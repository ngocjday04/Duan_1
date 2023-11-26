<main class="bg_gray">
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                </ul>
            </div>
            <h1>Cart page</h1>
        </div>
        <!-- /page_header -->
        <table class="table table-striped cart-list">
            <thead>
                <tr>
                    <th>
                        Tên
                    </th>
                    <th>
                        Hình
                    </th>
                    <th>
                        Giá
                    </th>
                    <th>
                        Màu
                    </th>
                    <th>
                        Số lượng
                    </th>
                    <th>
                        Kích cỡ
                    </th>

                    <th>
                        Tổng tiền
                    </th>
                    <th>

                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                // var_dump($_SESSION['mycart']);
                $tong = 0;
                $i = 0;
                foreach ($_SESSION['mycart'] as $cart) {
                    $tong += $cart[7];
                    $thanhtien = $price * $quantity;
                    $image = $image_path . $cart[2];
                    $delcart = ' <a href="index.php?act=delete_cart&idcart=' . $i . '"><i class="ti-trash"></i></a>';
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
                       ' . $cart[5] . '
                    </td>
                    <td>
                      
                            <input type="number" value="' . $cart[6] . '" id="quantity_1" class="qty2" name="quantity_1">
                       
                    </td>
                    <td>
                       ' . $cart[4] . '
                    </td>
                    <td>
                       $' . $cart[7] . '
                    </td>

                    <td class="options">
                    ' . $delcart . '
                    </td>
                </tr>';
                    $i += 1;
                
                    echo '
                <tr>
                <td colspan ="6"><strong> Tổng tiền : </strong> </td>
                <td><strong>$' . $tong . '</strong></td>
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
                    <ul>

                        <li>
                            <span><input type="text" value="<?= $tong ?>" name="tien" hidden></span>
                        </li>
                    </ul>
                    <a href="index.php?act=checkout" class="btn_1 full-width cart">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /box_cart -->

</main>