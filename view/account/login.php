<div class="container margin_30">
    <div class="page_header">
        <div class="breadcrumbs">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Category</a></li>
                <li>Page active</li>
            </ul>
        </div>
        <h1>Đăng Nhập</h1>
    </div>
    <!-- /page_header -->
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-8">
            <div class="box_account">
                <h3 class="client">Already Client</h3>
                <form action="index.php?act=login" method="post">
                    <div class="form_container">
                        <div class="divider"><span>Hoặc</span></div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email*">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" placeholder="Password*">
                        </div>
                        <div class="clearfix add_bottom_15">
                            <div class="checkboxes float-start">
                                <label class="container_check">Ghi nhớ đăng nhập
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="float-end"><a id="forgot" href="index.php?act=creat_account">Create Account</a>
                            </div>
                            <br>
                            <div class="float-end"><a id="forgot" href="index.php?act=lotspass">Lost Password?</a></div>
                        </div>
                        <div class="text-center">
                            <input type="submit" name="dangnhap" value="Log In" class="btn_1 full-width">
                        </div>
                    </div>

                </form>
                <h2 class="thongbao">
                    <?php

                    if (isset($thongbao) && ($thongbao != ""))
                        echo $thongbao;
                    ?>
                </h2>
                <!-- /form_container -->
            </div>
            <!-- /box_account -->
            <!-- /row -->
        </div>



    </div>
    <!-- /row -->
</div>