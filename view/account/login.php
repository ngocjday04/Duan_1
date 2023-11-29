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
                <form action="index.php?act=log-in" method="post">
                    <div class="form_container">
                        <div class="divider"><span>Hoặc</span></div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Tên đăng nhập*">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu*">
                        </div>
                        <div class="clearfix add_bottom_15">
                            <div class="checkboxes float-start">
                                <label class="container_check">Ghi nhớ đăng nhập
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="float-end"><a id="dangky" href="index.php?act=creat_acc">Create Account</a>
                            </div>
                            <br>
                            <div class="float-end"><a id="guiemail" name="guiemail" href="index.php?act=lost_pass">Lost
                                    Password?</a></div>
                        </div>
                        <div class="text-center">
                            <input type="submit" name="dangnhap" value="Log In" class="btn_1 full-width">
                        </div>
                    </div>

                </form>
                <h5 class="thongbao" style="color: red;">
                    <?php

                    if (isset($thongbao) && ($thongbao != ""))
                        echo $thongbao;
                    ?>
                </h5>
                <!-- /form_container -->
            </div>
            <!-- /box_account -->
            <!-- /row -->
        </div>



    </div>
    <!-- /row -->
</div>