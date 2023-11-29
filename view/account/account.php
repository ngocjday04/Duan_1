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
            <!-- <h1>Đănh nhập or Đăng ký</h1> -->
        </div>
        <!-- /page_header -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="box_account">
                    <h3 class="client">Xin chào</h3>
                    <?php
                    if (isset($_SESSION['user_name'])) {
                        extract($_SESSION['user_name']);
                    ?>
                        <strong><?= $user_name ?></strong>
                        <div class="row mb10">
                            <li><a href="index.php?act=lost_pass">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=update_acc">Cập nhật tài khoản</a></li>
                            <?php if ($role == 1) { ?>
                                <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                            <?php } ?>
                            <li><a href="index.php?act=thoat">Thoát</a></li>
                        </div>
                    <?php
                    } else {
                    ?>
                        <form action="index.php?act=log-in" method="post">
                            <div class="form_container">

                                <div class="divider"><span>Đăng nhập</span></div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user_name" placeholder="Tên đăng nhập*">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Mật khẩu*">
                                </div>
                                <div class="clearfix add_bottom_15">
                                    <div class="checkboxes float-start">
                                        <label class="container_check">Ghi nhớ đăng nhập
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="float-end"><a href="index.php?act=lost_pass">Quên mật khẩu</a>
                                    </div>
                                    <li><a href="index.php?act=creat_acc">Đăng kí thành viên</a></li>

                                </div>
                                <div class="text-center">
                                    <input type="submit" name="dangnhap" value="Đăng nhập" class="btn_1 full-width">
                                </div>
                                <div id="forgot_pw">
                                    <form action="index.php?act=lost_pass" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="guiemail" placeholder="Nhập email">
                                        </div>
                                        <p>Mật khẩu mới sẽ sớm được cung cấp cho bạn</p>
                                        <div class="text-center"><input type="submit" name="guiemail" id="guiemail" value="Gửi" class="btn_1"></div>
                                        <input type="reset" value="Nhâp lại">
                                    </form>
                                    <?php
                                    if (isset($thongbao) && ($thongbao != "")) {
                                        echo $thongbao;
                                    }

                                    ?>
                                </div>
                            </div>
                        </form>
                    <?php } ?>


                </div>

            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>