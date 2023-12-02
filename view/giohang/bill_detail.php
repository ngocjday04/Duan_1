<main role="main">
    <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
    <div class="container mt-4">
        <form class="needs-validation" name="frmthanhtoan" method="post" action="#">
            <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

            <div class="py-5 text-center">
                <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                <h2>Hóa đơn</h2>
                <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, đơn hàng của quý khách.</p>
            </div>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">SẢN PHẨM ĐÃ ĐẶT</span>
                    </h4>
                    <?php foreach ($list_bill_detail as $bill_detail) :
                        extract($bill_detail);
                    ?>
                        <ul class="list-group mb-3">


                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0"><?= $bill_detail['name'] ?></h6>
                                    <img style="width:25%;" src="upload/<?= $image ?>" alt="">
                                    <small class="text-muted">
                                        <?= $bill_detail['quantity'] ?>
                                        $<?= $bill_detail['price'] ?>
                                    </small>
                                </div>
                            </li>

                            <?php
                            $thanhtien = $quantity * $price;
                            $tong += $thanhtien ?>
                        </ul>
                    <?php endforeach ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <h6><span>Tổng thành tiền</span></h6>
                        <strong>$<?= $tong ?></strong>
                    </li> <br>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Thông tin khách hàng</h4>
                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                        <!-- Data -->
                        <p><strong>TÊN NGƯỜI NHẬN: <?= $listbill_one['name'] ?></strong></p>
                        <p>ĐỊA CHỈ:
                            <?= $listbill_one['address'] ?>
                        </p>
                        <p>SỐ ĐIỆN THOẠI:
                            <?= $listbill_one['tel'] ?>
                        </p>
                        <p>THÀNH TIỀN:
                            <?= $listbill_one['tongdonhang'] ?>
                        </p>
                        <p>NGÀY ĐẶT:
                            <?= $listbill_one['ngaydathang'] ?>
                        </p>
                        <p>TRẠNG THÁI ĐƠN HÀNG:
                            <?= $listbill_one['trangthai'] ?>
                        </p>
                        <p>PHƯƠNG THỨC THANH TOÁN:
                            <?php if ($listbill_one['pttt'] == 1) : ?>
                                Thanh toán khi nhận hàng
                            <?php endif; ?>
                            <?php if ($listbill_one['pttt'] == 2) : ?>
                                Thanh toán qua thẻ
                            <?php endif; ?>
                            <?php if ($listbill_one['pttt'] == 3) : ?>
                                Thanh toán onile
                            <?php endif; ?>
                            <?php if ($listbill_one['pttt'] == 3) : ?>
                                Thanh toán qua ví MOMO
                            <?php endif; ?>
                        </p>
                        <!-- xác nhận -->
                    </div>
                </div>
        </form>

    </div>
    <!-- End block content -->
</main>