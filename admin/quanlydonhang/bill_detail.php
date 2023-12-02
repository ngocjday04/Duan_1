<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Kích cỡ</th>
            <th scope="col">Số Lượng</th>
            <th scope="col">Giá Tiền</th>
            <th scope="col">Thành Tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // $bill = loadall_cart($id);
        foreach ($bill_detail as $key) {
        ?>
        <tr>
            <td>
                <?= $key['name'] ?>
            </td>
            <td>
                <?= $key['size'] ?>
            </td>
            <td>
                <?= $key['quantity'] ?>
            </td>
            <td>
                <?= number_format($key['price']) ?>
            </td>
            <td>
                <?php if ($key['sell'] == 0) : ?>
                <?= $key['price'] ?>
                <?php endif ?>
                <?php if ($key['sell'] > 0) : ?>
                <?= $thanhtien = ($key['price'] - ($key['price'] * $key['sell'] / 100)) * $key['quantity']; ?>
                <?php endif ?>
            </td>
            <td>
                <a href="index.php?act=quanlydonhang">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                    </svg>
                </a>
            </td>
            <?php } ?>
    </tbody>
</table>