<?php
include "../model/connect.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "header.php";
session_start();
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            /* danh mục*/
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_categories($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "../admin/danhmuc/add.php";
            break;

        case 'listdm':
            $danhmuc = loadall_categories();
            include "../admin/danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                delete_categories($_GET['iddm']);
            }
            $danhmuc = loadall_categories();
            include "../admin/danhmuc/list.php";

            break;
        case "suadm":
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $capnhat = loadone_categories($_GET['iddm']);
            }
            include "../admin/danhmuc/update.php";
        case "updatedm":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $category_name = $_POST['tenloai'];
                $category_id = $_POST['id'];
                update_categories($category_id, $category_name);
            }
            $danhmuc = loadall_categories();
            include "../admin/danhmuc/list.php";
            break;

            // sản phẩm
        case 'createsp':
            if (isset($_POST['submitsp']) && ($_POST['submitsp'])) {
                $product_id = $_POST['product_id'];
                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $image = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // File uploaded successfully.
                } else {
                    // Error uploading the file.
                }
                $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : 0;

                insert_product($product_id, $product_name, $image, $price, $description, $category_id);
                $thongbao = "Thêm thành công";
            }
            $danhmuc = loadall_categories();
            include "../admin/sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $id_danhmuc = $_POST['category_id'];
            } else {
                $kyw = "";
                $category_id = 0;
            }
            $product = loadall_product($kyw, $category_id = 0);
            $danhmuc = loadall_categories();
            include "../admin/sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                delete_product($_GET['idsp']);
            }
            $product = loadall_product("", 0);
            include "../admin/sanpham/list.php";
            break;

        case "suasp":
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $product = loadone_product($_GET['idsp']);
            }
            $danhmuc = loadall_categories();
            include "../admin/sanpham/update.php";
            break;

        case "updatesp":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $category_id = $_POST['category_id'];
                $product_id = $_POST['product_id'];
                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $file = $_FILES['image'];
                $image = $file["name"];
                move_uploaded_file($file['tmp_name'], "../upload/" . $image);
                update_product($product_id, $product_name, $category_id, $price, $description, $image);
            }
            $danhmuc = loadall_categories();
            $product = loadall_product("", 0);
            include "../admin/sanpham/list.php";
            break;

            // tài khoản

        case 'dstk':
            $listtaikhoan = loadall_taikhoan();
            include "../admin/taikhoan/list.php";
            break;
        case 'xoatk':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "../admin/taikhoan/list.php";
            break;
            // Thuộc tính


            break;

        case 'thuoctinh':
            $listproduct = loadall_product();
            if (isset($_POST['variant_id']) && ($_POST['variant_id'])) {
                $variant_id = $_POST['variant_id'];
                $color = $_POST['color'];
                $size = $_POST['size'];
                $quantity = $_POST['quantity'];
                $product_id = $_POST['product_id'];
                insert_variants($variant_id, $product_id, $color, $size, $quantity);
                $thongbao = "Thêm thành công";
            }
            include "../admin/thuoctinh/add.php";
    }
} else {
    include "home.php";
}

include "footer.php";
