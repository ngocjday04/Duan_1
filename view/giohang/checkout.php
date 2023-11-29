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
        <form action="index.php?act=thanhtoan" method="post">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="step first">
                        <input type="hidden" name="tongdonhang" value="<?=$tong?>">
                        <h3> THÔNG TIN ĐƠN HÀNG </h3>
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">

                            <div class="form-group">
                                <label for="">Họ và tên</label>
                                <input type="text" class="form-control" name="name" value="" placeholder="Nhập họ tên">
                            </div>
                            <!-- /row -->
                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" value="" placeholder="Địa chỉ">
                            </div>

                            <div class="form-group">
                                <label for="">Email :</label>
                                <input type="text" class="form-control" name="email" value="" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="">SĐT</label>
                                <input type="text" class="form-control" value="" name="tel" placeholder="SĐT">
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
                    <input type="submit" name="thanhtoan" value="Đặt hàng">

                </div>
                <div class="col-lg-4 col-md-6">


                </div>
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