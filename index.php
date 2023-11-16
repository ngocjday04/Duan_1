<?php
require "./model/connect.php";
require "./model/taikhoan.php";
require "./model/sanpham.php";
require "./model/danhmuc.php";
include "global.php";
$listdm = loadall_categories();
$productnew = loadall_product_home();
require "view/home/header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_GET['idct_dm']) && ($_GET['idct_dm'] > 0)) {
                $iddm = $_GET['idct_dm'];
            } else {
                $iddm = 0;
            }
            $category_name = load_category_name($iddm);
            $listproduct = loadall_product("", $iddm);
            include "view/sanpham/sanpham.php";
            break;
        case 'chitietsp':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $oneproduct = loadone_product($_GET['idsp']);
                extract($oneproduct);
                $same_product = load_sanpham_cungloai($product_id, $category_id);
                include "view/sanpham/chitietsp.php";
            } else {
                include "view/home/home.php";
            }
            break;
        case 'account':
            include "view/account/account.php";
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
