<?php
include "../model/connect.php";
include "../model/danhmuc.php";
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
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_danhmuc = $_POST['category_id'];
                $tensp = $_POST['tensp'];
                $file = $_FILES['image'];
                $giasp = $_POST['giasp'];
                $motasp = $_POST['motasp'];
                $image = $file["name"];
                move_uploaded_file($file['tmp_name'], "../upload/" . $image);

                // Thêm code xử lý biến category_id ở đây
                if (isset($_POST['category_id'])) {
                    $category_id = $_POST['category_id'];
                } else {
                    $category_id = 0; // Hoặc giá trị mặc định khác tùy theo logic của bạn
                }

                insert_product($tensp, $giasp, $image, $motasp, $category_id);
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
            $danhmuc = loadall_categories();
            $sanpham = loadall_product($kyw, $category_id);
            include "../admin/sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_product($_GET['iddm']);
            }
            $sanpham = loadall_product("", 0);
            include "../admin/sanpham/list.php";
            break;
        case "suasp":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_product($_GET['iddm']);
            }
            $danhmuc = loadall_categories();
            include ".../admin/sanpham/update.php";
        case "updatesp":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id_sanpham'];
                $danhmuctest = $_POST['danhmuctest'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $motasp = $_POST['motasp'];
                $file = $_FILES['image'];
                $image = $file["name"];
                move_uploaded_file($file['tmp_name'], "../upload/" . $image);
                update_product($id, $tensp, $giasp, $image, $motasp, $danhmuctest);
            }
            $danhmuc = loadall_categories();
            $sanpham = loadall_product("", 0);
            include "../admin/sanpham/list.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
