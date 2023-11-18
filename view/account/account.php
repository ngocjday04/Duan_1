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
            <h1>Sign In or Create an Account</h1>
        </div>
        <!-- /page_header -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="box_account">
                    <h3 class="client">Already Client</h3>
                    <?php
                    if (isset($_SESSION['user_name'])) {
                        extract($_SESSION['user_name']);
                    ?>
                        Xin chào<br>
                        <?= $user ?>
                        <div class="row mb10">
                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
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
                                        <label class="container_check">Remember me
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="float-end"><a id="forgot" href="javascript:void(0);">Quên mật khẩu</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="dangnhap" value="Đăng nhập" class="btn_1 full-width">
                                </div>
                                <div id="forgot_pw">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Type your email">
                                    </div>
                                    <p>A new password will be sent shortly.</p>
                                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1">
                                    </div>
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