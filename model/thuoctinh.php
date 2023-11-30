<?php
function insert_thuoctinh($product_id, $size, $quantity)
{
    $product_id = (int) $product_id;

    // Kiểm tra xem product_id có tồn tại trong bảng product không
    $product_check_sql = "SELECT * FROM product WHERE product_id = $product_id";
    $product_exists = pdo_query($product_check_sql);

    if (!$product_exists) {
        // Nếu không tồn tại product, xử lý trường hợp này hoặc chèn nó trước
        // Bạn có thể ném một exception hoặc xử lý nó một cách phù hợp với ứng dụng của bạn
        return;
    }

    $sql = "INSERT INTO variants(product_id,size, quantity) VALUES ('$product_id', '$size', '$quantity')";
    pdo_execute($sql);
}


function loadone_variant($variant_id)
{
    $variant_id = $_GET['idvr'];
    $sql = "SELECT * FROM variants WHERE variant_id = $variant_id";
    $variants = pdo_query_one($sql);
    return $variants;
}
function select_variant($product_id)
{
    $sql = "SELECT size,quantity from variants where product_id = $product_id";
    return pdo_query($sql);
}
function loadall_thuoctinh()
{
    $sql = "SELECT*FROM variants ORDER BY variant_id DESC ";
    $listvariant = pdo_query($sql);
    return $listvariant;
}
function update_thuoctinh($variant_id, $product_id, $size, $quantity)
{
    $sql = "UPDATE variants SET product_id = '" . $product_id . "',size='" . $size . "',quantity='" . $quantity . "' WHERE variant_id=" . $variant_id;
    pdo_execute($sql);
}
function loadall_thuoctinh_admin($variant_id)
{
    if ($variant_id > 0) {
        $sql = "SELECT*FROM variants where product_id = $variant_id";
    } else {
        $sql = "SELECT*FROM variants where 1";
    }
    $listvariant = pdo_query($sql);
    return $listvariant;
}
function delete_thuoctinh($variant_id)
{
    $sql = "DELETE FROM  variants WHERE variant_id=" . $variant_id;
    pdo_execute($sql);
}
function load_variant_product($product_id)
{
    $sql = "SELECT*FROM variants where product_id = $product_id";
    $list_variant = pdo_query($sql);
    return $list_variant;
}
