<main class="bg_gray">


    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=addtocart">Giỏ hàng</a></li>
                    <li>Thanh toán</li>
                </ul>
            </div>
            <!-- <h1>Sign In or Create an Account</h1> -->
        </div>
        <!-- /page_header -->
        <form action="index.php?act=thanhtoan" method="post">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="step first">
                        <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
                        <?php
                        if (isset($_SESSION['user_name'])) {
                            $user_name = $_SESSION['user_name']['user_name'];
                            $address = $_SESSION['user_name']['address'];
                            $email = $_SESSION['user_name']['email'];
                            $tel = $_SESSION['user_name']['tel'];
                        } else {
                            $user_name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <h3> THÔNG TIN KHÁCH HÀNG </h3>
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">

                            <div class="form-group">
                                <label for="">Họ và tên</label>
                                <input type="text" class="form-control" name="name" value="<?= $user_name ?>"
                                    placeholder="Nhập họ tên">
                            </div>
                            <!-- /row -->
                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" value="<?= $address ?>"
                                    placeholder="Địa chỉ">
                            </div>

                            <div class="form-group">
                                <label for="">Email :</label>
                                <input type="text" class="form-control" name="email" value="<?= $email ?>"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="">SĐT</label>
                                <input type="text" class="form-control" value="<?= $tel ?>" name="tel"
                                    placeholder="SĐT">
                            </div>
                            <hr>


                            <!-- /other_addr_c -->
                            <hr>

                        </div>
                    </div>
                    <!-- /step -->
                </div>
                <div class="col-lg-4 col-md-6">

                    <div style="font-size:1.5rem;" class="step middle payments">
                        <h3>PHƯƠNG THỨC THANH TOÁN</h3>
                        <table>
                            <tr>
                                <td>
                                    <input type="radio" name="pttt" value="1" checked id=""> Thanh toán khi nhận hàng
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="pttt" value="2" id=""> Thanh toán qua thẻ
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="pttt" value="3" id=""> Thanh toán onile
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="pttt" value="4"> Thanh toán qua ví MOMO
                                </td>
                            </tr>

                        </table>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="step last">
                        <h3>THÔNG TIN ĐƠN HÀNG</h3>
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
                    
                </tr>
            </thead>';
                            // var_dump($_SESSION['mycart']);
                            $tong = 0;
                            $i = 0;
                            foreach ($_SESSION['mycart'] as $cart) {
                                $tong += $thanhtien;
                                $thanhtien = (int)($cart[3]) * (int)$cart[5];
                                $image = $image_path . $cart[2];
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

                    </div>
                    <input type="submit" class="btn_1" name="thanhtoan" value="Đặt hàng">

                </div>
            </div>
        </form>


        <!-- /container -->
        <script src="js/common_scripts.min.js"></script>
        <script src="js/main.js"></script>

        <script>
        // Other address Panel
        $('#other_addr input').on("change", function() {
            if (this.checked)
                $('#other_addr_c').fadeIn('fast');
            else
                $('#other_addr_c').fadeOut('fast');
        });
        </script>
</main>