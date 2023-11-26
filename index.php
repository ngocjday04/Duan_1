<?php
session_start();
require "./model/connect.php";
require "./model/taikhoan.php";
require "./model/thuoctinh.php";
require "./model/sanpham.php";
require "./model/danhmuc.php";
include "global.php";
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
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
            } else {
                $iddm = 0;
            }
            $limit = 3;
            $page = $_GET['page'] ?? 1;
            $countsp = count(loadall_product($kyw, $iddm, 0, 999999999));
            $start = ($page - 1) * $limit;
            $category_name = load_category_name($iddm);
            $listproduct = loadall_product($kyw, $iddm, $start, $limit);
            include "view/sanpham/sanpham.php";
            break;
        case 'chitietsp':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $oneproduct = loadone_product($_GET['idsp']);
                $product_id = $_GET['idsp'];
                extract($oneproduct);
                $same_product = load_product_cungloai($product_id, $category_id);
                $thuoctinh = select_variant($product_id);
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
                if (is_array($checkuser) && ($checkuser) > 0) {
                    $_SESSION['user_name'] = $checkuser;
                    $thongbao = "Bạn đã đăng nhập thành công!";
                    header("location:index.php");
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc tiến hành đăng ký! ";
                    include "view/account/login.php";
                }
            }
            include "view/account/login.php";
            break;
            // update account
        case 'update_acc':
            if (isset($_POST['updateacc']) && ($_POST['updateacc'])) {
                $user_id = $_POST['user_id'];
                $user_name = $_POST['user_name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];

                // update account
                // updateuser();

                header("location:index.php");
            }
            include "view/account/update_acc.php";
            break;
        case 'lostpass':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là :" . $checkemail['pass'];
                } else {
                    $thongbao = "Email không tồn tại";
                }
            }
            include "view/account/lostpass.php";
            break;
        case 'thoat':
            session_unset();
            header("location:index.php");
            break;
        case 'giohang':
            include "view/giohang/cart.php";
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['product_id'];
                $name = $_POST['product_name'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $size = 'XL';
                $color = 'Đen';
                $quantity = 1;
                $thanhtien = $quantity * $price;
                $spadd = [$id, $name, $image, $price, $size, $color, $quantity, $thanhtien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/giohang/cart.php";
            break;
        case 'delete_cart':
            if (isset($_GET['idcart'])) {
                array_slice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            include "view/giohang/cart.php";
            // header('Location: index.php?act=cart');
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
