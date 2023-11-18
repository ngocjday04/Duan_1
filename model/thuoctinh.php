<?php
function insert_thuoctinh($product_id, $color, $size, $quantity)
{
    $sql = "INSERT INTO variants(product_id,size,color,quantity) VALUES ('$product_id','$color','$size','$quantity')";
    pdo_execute($sql);
}
function loadall_thuoctinh()
{
    $sql = "SELECT*FROM variants ORDER BY variant_id DESC ";
    $listvariant = pdo_query($sql);
    return $listvariant;
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
