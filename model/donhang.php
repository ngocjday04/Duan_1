<?php
function viewcart(){


    $tong = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $tong += $cart[7];
        $thanhtien = $price * $quantity;
        $image = $image_path . $cart[2];
        $delcart = ' <a href="index.php?act=delete_cart&idcart=' . $i . '"><i class="ti-trash"></i></a>';
        echo '<tr>
                    <td>
                    <span class="item_cart">' . $cart[1] . '</span>
                    </td>
                    <td>
                        <div class="thumb_cart">
                            <img src="' . $image . '" data-src="' . $image . '" class="lazy" alt="Image">
                        </div>
                    </td>
                    <td>
                    $ ' . $cart[3] . '
                    </td>
                    <td>
                       ' . $cart[5] . '
                    </td>
                    <td>
                      
                            <input type="number" value="' . $cart[6] . '" id="quantity_1" class="qty2" name="quantity_1">
                       
                    </td>
                    <td>
                       ' . $cart[4] . '
                    </td>
                    <td>
                       $' . $cart[7] . '
                    </td>

                    <td class="options">
                    ' . $delcart . '
                    </td>
                </tr>';
        $i += 1;
    
    echo '
                <tr>
                <td colspan ="6"><strong> Tổng tiền : </strong> </td>
                <td><strong>$' . $tong . '</strong></td>
                <td></td>
                
                </tr> ';
}