<?php
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $thanhtien = (int)($cart[3]) * (int)$cart[5];
        $tong += $thanhtien;
    }
    return $tong;
}
function insert_bill($iduser, $name, $tel, $email, $address, $pttt, $tongdonhang, $ngaydathang)
{
    $sql = "INSERT INTO bill (iduser,name,tel, email, address,pttt,  tongdonhang, ngaydathang) 
    VALUES ('$iduser','$name', '$tel', '$email', '$address', '$pttt',  '$tongdonhang','$ngaydathang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $id_product, $image, $name, $price, $quantity, $size, $total_price, $id_bill)
{
    $sql = "INSERT INTO cart_detail (iduser,id_product, image, name	,price,  quantity,size, total_price,id_bill) 
    VALUES ('$iduser', '$id_product', '$image', '$name', '$price',  '$quantity','$size','$total_price','$id_bill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "SELECT * FROM bill WHERE id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadall_cart($id_bill)
{
    $sql = "SELECT * FROM cart_detail WHERE id_bill=" . $id_bill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($id_bill)
{
    $sql = "SELECT * FROM cart_detail WHERE id_bill=" . $id_bill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "SELECT * FROM bill WHERE 1";
    if ($iduser > 0) $sql .= " AND iduser=" . $iduser;
    if ($kyw != "") $sql .= " AND id like '%" . $kyw . "%'";
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function update_bill($id, $trangthai)
{
    $sql = "UPDATE bill SET  trangthai='" . $trangthai . "' WHERE id=" . $id;
    pdo_execute($sql);
}
function delete_bill($id)
{
    $sql = "delete from bill where id=" . $id;
    pdo_execute($sql);
}
function loadone_bill_detail($id)
{
    $sql = "select * from cart_detail where id_bill = $id";
    $listbill = pdo_query($sql);
    return $listbill;
}
function delete_order_detail($id)
{
    $sql = "DELETE FROM  cart_detail WHERE id_bill=" . $id;
    pdo_execute($sql);
}
function loadall_bill_user($id)
{
    $sql = "select * from bill where id_user = $id";
    $listbill = pdo_query($sql);
    return $listbill;
}
function delete_order($id)
{
    $sql = "DELETE FROM  bill WHERE id=" . $id;
    pdo_execute($sql);
    // header("location:http://localhost/php-shop/?url=order");
}
function updatebill($name, $address, $tel, $id)
{
    $sql = "UPDATE `bill` SET`name`='$name',`address`='$address',`tel`='$tel' WHERE id = $id;";
    pdo_execute($sql);
    // header("location:http://localhost/php-shop/?url=order");
}
// function taodonhang($madh, $tongdonhang, $pttt, $name, $address, $email, $ngaydathang, $tel)
// {

//     $conn = pdo_get_connection();

//     $sql = "INSERT INTO bill(madh,tongdonhang,pttt,name,address,email,ngaydathang,tel)  
//     VALUES (:madh,:tongdonhang,:pttt,:name,:address,:email,:ngaydathang,:tel)";

//     $stmt = $conn->prepare($sql);
//     // $stmt->bindParam(':iduser', $iduser);
//     $stmt->bindParam(':madh', $madh);
//     $stmt->bindParam(':tongdonhang', $tongdonhang);
//     $stmt->bindParam(':pttt', $pttt);
//     $stmt->bindParam(':name', $name);
//     $stmt->bindParam(':address', $address);
//     $stmt->bindParam(':email', $email);
//     $stmt->bindParam(':ngaydathang', $ngaydathang);
//     $stmt->bindParam(':tel', $tel);
//     $stmt->execute();
//     $last_id = $conn->lastInsertId();
//     return $last_id;
// }
// function addtocard($id_bill, $productname, $image,  $id_product, $total_price, $quantity)
// {
//     $sql = "INSERT INTO cart_detail(id_bill,productname,image,id_product,total_price,quantity)  
//     values ('$id_bill','$productname','$id_product','$image','$total_price','$quantity')";
//     pdo_execute($sql);
// }
// function getshowcart($id_bill)
// {

//     $sql = "SELECT * FROM cart_detail WHERE id_bill = :id_bill";

//     $stmt = pdo_get_connection()->prepare($sql);

//     $stmt->bindParam(':id_bill', $id_bill);

//     $stmt->execute();

//     $result = $stmt->fetchAll();

//     return $result;
// }
// function getorderinfor($iddh)
// {

//     $sql = "SELECT * FROM tbl_order WHERE id = :iddh";

//     $stmt = pdo_get_connection()->prepare($sql);

//     $stmt->bindParam(':iddh', $iddh);

//     $stmt->execute();

//     $result = $stmt->fetchAll();

//     return $result;
// }
// function loadall_bill($iduser)
// {
//     $sql = "SELECT * FROM tbl_order WHERE iduser =:iduser";
//     $stmt = pdo_get_connection()->prepare($sql);

//     $stmt->bindParam(':iduser', $iduser);

//     $stmt->execute();

//     $result = $stmt->fetchAll();

//     return $result;
// }
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang chờ duyệt";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Đã hoàn thành";
            break;

        default:
            $tt = "Đơn hàng mới";

            break;
    }
    return $tt;
}
function bill_chitiet($listbill)
{
    global $image_path;
    $tong = 0;
    $i = 0;
    echo '
    <table class="table table-striped cart-list">
<thead>
    <tr>
        <th>Tên</th>
        <th>Hình</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Kích cỡ </th>
        <th>Tổng tiền</th>
        <th>

        </th>
    </tr>
</thead>';
    foreach ($listbill as $cart) {
        $tong += $cart['total_price'];
        $image = $image_path . $cart['image'];
        echo '<tr>
                    <td>
                    <span class="item_cart">' . $cart['name'] . '</span>
                    </td>
                    <td>
                        <div class="thumb_cart">
                            <img src="' . $image . '" data-src="' . $image . '" class="lazy" alt="Image">
                        </div>
                    </td>
                    <td>
                    $ ' . $cart['price'] . '
                    </td>
                    <td>
                            <input type="number" value="' . $cart['quantity'] . '" id="quantity_1" class="qty2" name="quantity_1">
                    </td>
                    <td>
                       ' . $cart['size'] . '
                    </td>
                    <td>
                       $' . $cart['total_price'] . '
                    </td>
                </tr>';
        $i += 1;
    }

    echo '
                <tr>
                <td colspan ="5"><h5> Tổng tiền : </h5> </td>
                <td><h5>$' . $tong . '</h5></td>
                <td></td>
                
                </tr> ';
}

?>
</tbody>
</table>