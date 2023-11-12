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
    }
} else {
    include "home.php";
}

include "footer.php";
