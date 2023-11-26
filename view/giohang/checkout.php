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
            <!-- <h1>Sign In or Create an Account</h1> -->

        </div>
        <!-- /page_header -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="step first">
                    <h3> THÔNG TIN ĐƠN HÀNG </h3>
                    <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['name'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <div class="row no-gutters">
                            <div class="col-6 form-group pr-1">
                                <label for="">Người đặt : </label>

                                <input type="text" class="form-control" value="<?= $name?>" name="name"
                                    placeholder="Name">
                            </div>

                        </div>
                        <!-- /row -->
                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" class="form-control" name="address" value="<?= $address?>"
                                placeholder="Full Address">
                        </div>

                        <div class="form-group">
                            <label for="">Email :</label>
                            <input type="text" class="form-control" name="email" value="<?= $email?>"
                                placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="">SĐT</label>
                            <input type="text" class="form-control" value="<?= $tel?>" name="tel" placeholder="SĐT">
                        </div>
                        <hr>


                        <!-- /other_addr_c -->
                        <hr>

                    </div>



                </div>
                <!-- /step -->
            </div>
            <div class="col-lg-4 col-md-6">

                <div class="step middle payments">
                    <h3>PHƯƠNG THỨC THANH TOÁN</h3>
                    <table>
                        <tr>
                            <td>
                                <input type="radio" name="pttt" checked id=""> Thanh toán khi nhận hàng
                            </td>


                        </tr>
                        <tr>
                            <td>
                                <input type="radio" name="pttt" id=""> Thanh toán qua thẻ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" name="pttt" id=""> Trả trước
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="col-lg-4 col-md-6">

                <!-- /step -->
            </div>
        </div>
        <!-- /row -->
    </div>
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