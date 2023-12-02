<?php
$nameerr = "";
$imageerr = "";
$priceerr = "";
$loaierrr = "";
$tenloaierr = "";
$kichcoerr = "";
$soluongerr = "";

if (strlen($product_name) == 0) {
    $nameerr = "Hãy nhập tên sản phẩm";
}
if (strlen($price) == 0) {
    $priceerr = "Hãy nhập giá sản phẩm";
}
if (strlen($_FILES['image']['name']) == 0) {
    $imageerr = "Hãy chọn ảnh sản phẩm";
}
if (strlen($loaisp) == 0) {
    $loaierr = "Hãy nhập loại sản phẩmm";
}
if (strlen($category_id) == 0) {
    $tenloaierr = "Hãy nhập tên loại sản phẩmm";
}
if (strlen($size) == 0) {
    $kichcoerr = "Hãy nhập kích cỡ sản phẩmm";
}
if (strlen($quantity) == 0) {
    $soluongerr = "Hãy nhập số lượng sản phẩmm";
}
