<?php
require "./model/connect.php";
require "view/home/header.php";
include "global.php";
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
        default:
            include "view/home/home.php";
            break;
    }
} else {
    include "view/home/home.php";
}
include "view/home/footer.php";
