<?php
require "./model/connect.php";
require "./model/taikhoan.php";
require "./model/sanpham.php";
require "./model/danhmuc.php";
include "global.php";
$listdm = loadall_categories();
$productnew = loadall_product_home();
$product_old = loadall_product_home_noibat();
require "view/home/header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            $listdm = loadall_categories();
            $productnew = loadall_product_home();
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['idct_dm']) && ($_GET['idct_dm'] > 0)) {
                $iddm = $_GET['idct_dm'];
                $listdm = loadall_product($iddm, 0);
            } else {
                $iddm = 0;
            }
            $category_name = load_category_name($iddm);
            $listproduct = loadall_product($kyw = "", $iddm);
            include "view/sanpham/sanpham.php";
            break;
        case 'chitietsp':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $oneproduct = loadone_product($_GET['idsp']);
                extract($oneproduct);
                $same_product = load_product_cungloai($product_id, $category_id);
                include "view/sanpham/chitietsp.php";
            } else {
                include "view/home/home.php";
            }
            break;
        case 'account':
            include "view/account/account.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user_name = $_POST['user_name'];
                $pass = $_POST['password'];
                insert_taikhoan($email, $user_name, $pass);
                $thongbao = "Đăng ký thành công. <br> Vui lòng đăng nhập để thực hiện thêm chức năng !";
            }
            include "view/account/creat_account.php";
            break;
        case 'log-in':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user_name = $_POST['user_name'];
                $pass = $_POST['password'];
                $checkuser = checkuser($user_name, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user_name'] = $checkuser;
                    $thongbao = "Bạn đã đăng nhập thành công!";
                    header('location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc tiến hành đăng ký! ";
                }
            }
            include "view/account/creat_account.php";
            break;
        case 'giohang':
            include "view/giohang/cart.php";
            break;
        case 'checkout':
            include "view/giohang/checkout.php";
            break;
        case 'confirm':
            include "view/xacnhan/confirm.php";
            break;
        case 'binhluan':
            include "view/binhluan/binhluan.php";
            break;
        case 'trackorder':
            include "view/kiemtradh/trackorder.php";
            break;
        case 'help':
            include "view/hotro/help.php";
            break;
        default:
            include "view/home/home.php";
            break;
    }
} else {
    include "view/home/home.php";
}
include "view/home/footer.php";
