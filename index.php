<?php
require "./model/connect.php";
require "./model/taikhoan.php";
require "./model/sanpham.php";
require "./model/danhmuc.php";
require "view/home/header.php";
include "global.php";
$listdm = loadall_categories();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'chitietsp':
            include "view/sanpham/chitietsp.php";
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
        default:
            include "view/home/home.php";
            break;
    }
} else {
    include "view/home/home.php";
}
include "view/home/footer.php";
