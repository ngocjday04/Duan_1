<main>
    <div class="container margin_30">
        <div class="countdown_inner">-20% This offer ends in <div data-countdown="2020/05/15" class="countdown"></div>
        </div>
        <div class="row">
            <?php
            extract($oneproduct);
            ?>
            <div class="col-lg-6 magnific-gallery">
                <p>
                    <img src=" upload/<?= $image ?>" alt="" class="img-fluid">
                </p>

            </div>

            <div class="col-lg-6" id="sidebar_fixed">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Category</a></li>
                        <li>Page active</li>
                    </ul>
                </div>
                <!-- /page_header -->

                <div class="prod_info">
                    <h1><?= $product_name ?></h1>
                    <p></p>

                    <div class="prod_options">
                        <form action="index.php?act=addtocart" method="post">
                            <div class="row">
                                <label class="col-xl-5 col-lg-5 col-md-6 col-6"><strong>Kích cỡ</strong></a></label>
                                <?php
                                foreach ($list_variant as $value) : ?>
                                    <div style="width:10%;" class="col-xl-4 col-lg-5 col-md-6 col-6">
                                        <div class="custom-select-form">
                                            <label for="size<?= $value['size'] ?>"> <input type="radio" name="size" id="<?= $value['size'] ?>" value="<?= $value['size'] ?>">
                                                <?php
                                                echo $value['size'];
                                                ?>
                                            </label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="row">
                                <label class="col-xl-5 col-lg-5  col-md-6 col-6"><strong>Số lượng</strong></label>
                                <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                    <div class="numbers-row">
                                        <input type="text" value="1" id="quantity_1" max=50 class="qty2" name="quantity">
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="price_main"><span class="new_price"><?= $price ?></span><span class="percentage">-20%</span> <span class="old_price">$60</span></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="btn_add_to_cart">
                                <input type="hidden" name="product_id" value="<?= $product_id ?>">
                                <input type="hidden" name="product_name" value="<?= $product_name ?>">
                                <input type="hidden" name="image" value="<?= $image ?>">
                                <input type="hidden" name="price" value="<?= $price ?>">
                                <input type="submit" class="btn_1" value=" Đặt hàng " name=" addtocart">
                                <!-- <a href="index.php?act=addtocart" name="addtocart" class="btn_1">Đặt hàng</a> -->
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /prod_info -->
                <!-- /product_actions -->
            </div>
        </div>

        <!-- /row -->
    </div>
    <!-- /container -->

    <div class="tabs_product">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Mô tả</a>
                </li>
                <li class="nav-item">
                    <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Bình luận</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /tabs_product -->
    <div class="tab_content_wrapper">
        <div class="container">
            <div class="tab-content" role="tablist">
                <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                    <div class="card-header" role="tab" id="heading-A">
                        <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
                                Mô tả
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                        <div class="card-body">
                            <div class="row">
                                <div class=" col-lg-12 col-sm-6 col-md-4">
                                    <p> <?= $description ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                    <div class="card-header" role="tab" id="heading-B">
                        <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                Reviews
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                        <main>
                            <div class="container margin_60_35">
                                <form action="index.php?act=chitietsp" method="post">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <table class="table table-responsive	">
                                                <tr>
                                                    <th>Tên người dùng</th>
                                                    <th>Nội dung</th>
                                                    <th>Ngày bình luận</th>
                                                </tr>
                                                <?php
                                                foreach ($load_all_bl as $binhluan) {
                                                    extract($binhluan);
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?= $user_name ?>
                                                        </td>
                                                        <td>
                                                            <?= $content ?>
                                                        </td>
                                                        <td>
                                                            <?= $date_comment ?>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </table>
                                            <div class="write_review">

                                                <?php
                                                if ($user_id) {
                                                ?>
                                                    <div class="form-group">
                                                        <label>Đánh giá của bạn</label>
                                                        <input type="hidden" name="product_id" value="<?= $product_id ?>">
                                                        <textarea class="form-control" name="noidung" cols="30" rows="3" placeholder="Viết đánh giá để mọi người có thể hiểu hơn về sản phẩm"></textarea>
                                                    </div>

                                                    <button class="btn_1" name="guibinhluan">Gửi bình luận</button>
                                                <?php
                                                } else {
                                                ?>
                                                    <div class="form-group">
                                                        Vui lòng đăng nhập để bình luận!
                                                    </div>
                                                <?php
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- /row -->
                            </div>
                        </main>
                        <!-- /card-body -->
                    </div>
                </div>
            </div>
            <!-- /tab-content -->
        </div>
    </div>

    <div class="container margin_60_35">
        <div class="main_title">
            <h2><strong> SẢN PHẨM CÙNG LOẠI</strong></h2>
            <span>Products</span>
            <p>Hãy sống đúng cá tính mặc theo phong cách mà bạn muốn </p>
        </div>

        <div class="owl-carousel owl-theme products_carousel">
            <?php
            foreach ($same_product as $product) : ?>

                <div class="item">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="index.php?act=chitietsp&idsp=<?= $product['product_id'] ?>">
                                <img class="owl-lazy" src="upload/<?= $product['image'] ?>" data-src="upload/<?= $product['image'] ?>" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <h3>
                            <?= $product['product_name'] ?>
                        </h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">
                                $<?= $product['price'] ?>
                            </span>
                        </div>
                        <ul>
                            <li><a href="index.php?act=addtocart" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add
                                        to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
            <?php endforeach; ?>

            <!-- /item -->

        </div>
        <!-- /products_carousel -->
    </div>
    <!-- /container -->

    <div class="feat">
        <div class="container">
            <ul>
                <li>
                    <div class="box">
                        <i class="ti-gift"></i>
                        <div class="justify-content-center">
                            <h3>Free Shipping</h3>
                            <p>For all oders over $99</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-wallet"></i>
                        <div class="justify-content-center">
                            <h3>Secure Payment</h3>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-headphone-alt"></i>
                        <div class="justify-content-center">
                            <h3>24/7 Support</h3>
                            <p>Online top support</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--/feat-->

</main>
<!-- /main -->