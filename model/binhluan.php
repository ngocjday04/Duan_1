<?php
function insert_comment($content, $user_id, $product_id, $date_comment)
{
    $sql = "INSERT INTO comments(content,user_id,product_id,date_comment) VALUES('$content','$user_id','$product_id','$date_comment')";
    pdo_execute($sql);
}
function loadall_comment($product_id)
{
    $sql = " SELECT * FROM comments WHERE 1";
    if ($product_id > 0) $sql .= " AND product_id='" . $product_id . "'";
    $sql .= " ORDER BY product_id desc";
    $listcmt = pdo_query($sql);
    return $listcmt;
}
function delete_comment($user_id)
{
    $sql = " DELETE FROM comments WHERE user_id=" . $user_id;
    pdo_execute($sql);
}
function comment_selectall($sql = '')
{
    $sql = "SELECT * FROM comments " . $sql;
    $sql .= " order by user_id desc";
    return pdo_query($sql);
}
