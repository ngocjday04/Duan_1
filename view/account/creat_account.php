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
                <li><a href="index.php?act=lostpass">Quên mật khẩu</a></li>
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
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email*">
                    </div>

                    <div class="text-center">
                        <input type="submit" name="dangky" value="Đăng ký" class="btn_1 full-width">
                    </div>
                    <div id="forgot_pw">

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