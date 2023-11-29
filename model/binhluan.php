<?php
function insert__comment($userId, $productId, $content)
{
    $sql = "INSERT INTO `comments`(`user_id`, `product_id`, `content`) VALUES 
            ('$userId','$productId','$content')";
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
function loadall__comment__Byid($idproduct)
{
    $sql = "SELECT
                comments.comment_id,
                comments.user_id,
                comments.product_id,
                comments.content,
                comments.date_comment,
                users.user_id,
                users.user_name
            FROM
                comments
            INNER JOIN
                users ON comments.user_id = users.user_id
            INNER JOIN
                product ON comments.product_id = product.product_id
            WHERE
                product.product_id = $idproduct
    ";
    return pdo_query($sql);
}
function delete_comment($comment_id)
{
    $sql = " DELETE FROM comments WHERE comment_id=" . $comment_id;
    pdo_execute($sql);
}
function comment_selectall($sql = '')
{
    $sql = "SELECT * FROM comments " . $sql;
    $sql .= " order by user_id desc";
    return pdo_query($sql);
}
