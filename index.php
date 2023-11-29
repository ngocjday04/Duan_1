<?php
ob_start();
session_start();
require "./model/connect.php";
require "./model/donhang.php";
require "./model/taikhoan.php";
require "./model/thuoctinh.php";
require "./model/sanpham.php";
require "./model/danhmuc.php";
require "./model/binhluan.php";
include "global.php";
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
$user_id = $_SESSION['user_name']['user_id'] ?? 0;
$user = loadone_taikhoan($user_id);
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
                $list_variant = load_variant_product($product_id);
                $same_product = load_product_cungloai($product_id, $category_id);
                $thuoctinh = select_variant($product_id);
                $load_all_bl = loadall__comment__Byid($product_id);
                include "view/sanpham/chitietsp.php";
            } else {
                $product_id = "";
            }
            if (isset($_POST['guibinhluan'])) {
                $product_id = $_POST["product_id"];
                $content = $_POST['noidung'];
                insert__comment($user_id, $product_id, $content);
                header('Location:' . $_SERVER['HTTP_REFERER']);
            }


            break;
        case 'account':
            include "view/account/account.php";
            break;
        case 'creat_acc':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $user_name = $_POST['user_name'];
                $pass = $_POST['password'];
                $email = $_POST['email'];
                insert_taikhoan($user_name,  $email, $pass);
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
                    $thongbao = "Tài khoản không tồn tại.";
                }
            }
            include "view/account/login.php";
            break;
            // update account
        case 'showtt':
            include "view/profile/thongtintk.php";
            break;
        case 'update_acc':
            if (isset($_POST['updateacc']) && ($_POST['updateacc'])) {
                $user_id = $_POST['user_id'];
                $user_name = $_POST['user_name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                update_taikhoan($user_id, $user_name, $password, $email, $address, $tel);
                $_SESSION['user_name'] = checkuser($user, $pass);

                // update account
                // updateuser();

                header("location:index.php");
            }
            include "view/account/update_acc.php";
            break;
        case 'lost_pass':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là : " . $checkemail['password'];
                } else {
                    $thongbao = "Email không tồn tại";
                }
            }
            include "view/account/lost_pass.php";
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
                if (isset($_POST['size']) && ($_POST['size'] > 0)) {
                    $size = $_POST['size'];
                } else {
                    $size = "L";
                }
                if (isset($_POST['quantity']) && ($_POST['quantity'] > 0)) {
                    $quantity = $_POST['quantity'];
                } else {
                    $quantity = 1;
                }
                $flag = 0;
                $thanhtien = (int)$quantity * $price;
                $i = 0;
                foreach ($_SESSION['mycart'] as $cart) {
                    if ($cart[1] === $name) {
                        $newquantity = (int)$quantity + (int)$cart[5];
                        $_SESSION['mycart'][$i][5] = $newquantity;
                        $flag = 1;
                        break;
                    }
                    $i++;
                }

                if ($flag == 0) {
                    $cart = [$id, $name, $image, $price, $size,  $quantity, $thanhtien];
                    $_SESSION['mycart'][] = $cart;
                }
                // header("Location: index.php?act=cart");
            }
            include "view/giohang/cart.php";
            break;
        case 'deletecart':
            if (isset($_GET['i']) && ($_GET['i'] > 0)) {
                if (isset($_SESSION['mycart']))
                    array_splice($_SESSION['mycart'], $_GET['i'], 1);
            } else {
                if (isset($_SESSION['mycart'])) unset($_SESSION['mycart']);
            }
            if (isset($_SESSION['mycart']) && (count($_SESSION['mycart']) > 0)) {
                header('Location: index.php?act=addtocart');
            } else {
                include "view/home/home.php";
            }

            break;

        case 'thanhtoan':
            if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
                //Lấy dữ liệu
                $tongdonhang = $_POST['tongdonhang'];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $madh = "FASHION" . rand(0, 999999);
                //Tạo đơn hàng và trả về 1 id đơn hàng
                $iddh = creat_donhang($madh, $tongdonhang, $pttt, $name, $address, $email, $tel);
            }
            include "view/xacnhan/confirm.php";
            break;
        case 'checkout':
            include "view/giohang/checkout.php";
            break;
        case 'confirm':
            include "view/xacnhan/confirm.php";
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
