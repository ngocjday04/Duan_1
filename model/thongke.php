<?php
function thong_ke_hang_hoa()
{
    $sql = "select lo.category_id, lo.category_name,"
        . " count(*) so_luong,"
        . " min(hh.price) gia_min,"
        . " max(hh.price) gia_max,"
        . " avg(hh.price) gia_avg "
        . " from commodities hh"
        . " join categories lo on lo.id=hh.category_id"
        . " group by lo.category_id,lo.category_name";
    return pdo_query($sql);
}
function thong_ke_binh_luan()
{
    $sql = "select hh.category_name, hh.category_name,"
        . "count(*) so_luong, "
        . " min(bl.date_comment) cu_nhat,"
        . " max(bl.date_comment) moi_nhat"
        . " from comments bl "
        . " join products hh on hh.id=bl.product_id "
        . " group by hh.category_name,hh.category_name"
        . " having so_luong>0";
    return pdo_query($sql);
}
function thong_ke_doanh_thu()
{
    $sql = "SELECT MONTH(ngaydathang) AS thang, SUM(tongdonhang) AS doanhthu FROM bill WHERE YEAR(ngaydathang) = 2023 GROUP BY MONTH(ngaydathang)";
    return pdo_query($sql);
}

function thong_ke_don_hang()
{
    $sql = "SELECT COUNT(id) AS donhang FROM bill WHERE id";
    return pdo_query($sql);
}

function thong_ke_san_pham()
{
    $sql = "SELECT COUNT(product_id) AS sanpham FROM product WHERE product_id";
    return pdo_query($sql);
}
function thong_ke_yeu_cau()
{
    $sql = "SELECT COUNT(trangthai) AS yeucau FROM bill WHERE trangthai = 'Đang chờ duyệt'";
    return pdo_query($sql);
}
