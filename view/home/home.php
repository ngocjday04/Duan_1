<main>
    <div id="carousel-home">
        <div class="owl-carousel owl-theme">
            <div class="owl-slide cover" style="background-image: url(view/img/slides/slide_home_2.jpg)">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-end">
                            <div class="col-lg-6 static">
                                <div class="slide-text text-end white">
                                    <h2 class="owl-slide-animated owl-slide-title">
                                        Attack Air<br />Max 720 Sage Low
                                    </h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                        Limited items available at this price
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta">
                                        <a class="btn_1" href="index.php?act=chitietsp&idsp=<?= $product_id ?>" role="button">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/owl-slide-->
            <div class="owl-slide cover" style="background-image: url(view/img/slides/slide_home_1.jpg)">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-lg-6 static">
                                <div class="slide-text white">
                                    <h2 class="owl-slide-animated owl-slide-title">
                                        Attack Air<br />VaporMax Flyknit 3
                                    </h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                        Limited items available at this price
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta">
                                        <a class="btn_1" href="index.php?act=chitietsp" role="button">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/owl-slide-->
            <div class="owl-slide cover" style="background-image: url(view/img/slides/slide_home_3.jpg)">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-lg-12 static">
                                <div class="slide-text text-center black">
                                    <h2 class="owl-slide-animated owl-slide-title">
                                        Attack Air<br />Monarch IV SE
                                    </h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                        Lightweight cushioning and durable support with a
                                        Phylon midsole
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta">
                                        <a class="btn_1" href="index.php?act=chitietsp" role="button">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
            </div>
        </div>
        <div id="icon_drag_mobile"></div>
    </div>
    <!--/carousel-->

    <ul id="banners_grid" class="clearfix">
        <li>
            <a href="index.php?act=chitietsp" class="img_container">
                <img src="view/img/banners_cat_placeholder.jpg" data-src="view/img/mauanh1.jpg" alt="" class="lazy" />
                <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <h3>Men's Collection</h3>
                    <div><span class="btn_1">Shop Now</span></div>
                </div>
            </a>
        </li>
        <li>
            <a href="index.php?act=chitietsp" class="img_container">
                <img src="view/img/banners_cat_placeholder.jpg" data-src="view/img/mauanh2.jpg" alt="" class="lazy" />
                <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <h3>Womens's Collection</h3>
                    <div><span class="btn_1">Shop Now</span></div>
                </div>
            </a>
        </li>
        <li>
            <a href="index.php?act=chitietsp" class="img_container">
                <img src="view/img/banners_cat_placeholder.jpg" data-src="view/img/mauanh3.jpg" alt="" class="lazy" />
                <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <h3>Kids's Collection</h3>
                    <div><span class="btn_1">Shop Now</span></div>
                </div>
            </a>
        </li>
    </ul>
    <!--/banners_grid -->

    <div class="container margin_60_35">
        <div class="main_title">
            <h2>Top Selling</h2>
            <span>Products</span>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
        </div>
        <div class="row small-gutters">
            <?php
            foreach ($productnew as $key => $value) : ?>
                <?php extract($value); ?>
                <div class="col-6 col-md-4 col-xl-3">


                    <div class="grid_item">
                        <span class="ribbon new">Hot</span>
                        <figure>
                            <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                                <img class="img-fluid lazy" src="upload/<?= $image ?>" data-src="upload/<?= $image ?>" alt="lỗi" />
                                <img class="img-fluid lazy" src="upload/<?= $image ?>" data-src="upload/<?= $image ?>" alt="lỗi" />
                            </a>
                        </figure>
                        <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                            <h3><?= $product_name ?></h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$<?= $price  ?></span>
                        </div>
                        <ul>
                            <li>
                                <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li>
                                <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li>
                                <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /grid_item -->

                </div>
            <?php endforeach; ?>
            <!-- /col -->
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    <div class="container margin_60_35">
        <div class="main_title">
            <h2>Featured</h2>
            <span>Products</span>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
        </div>
        <div class="owl-carousel owl-theme products_carousel">
            <div class="item">
                <div class="grid_item">
                    <span class="ribbon new">New</span>
                    <figure>
                        <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                            <img class="owl-lazy" src="view/img/products/product_placeholder_square_medium.jpg" data-src="view/img/products/shoes/4.jpg" alt="" />
                        </a>
                    </figure>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                    </div>
                    <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                        <h3>ACG React Terra</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">$110.00</span>
                    </div>
                    <ul>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                        </li>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                        </li>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                        </li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <div class="item">
                <div class="grid_item">
                    <span class="ribbon new">New</span>
                    <figure>
                        <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                            <img class="owl-lazy" src="view/img/products/product_placeholder_square_medium.jpg" data-src="view/img/products/shoes/4.jpg" alt="" />
                        </a>
                    </figure>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                    </div>
                    <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                        <h3>ACG React Terra</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">$110.00</span>
                    </div>
                    <ul>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                        </li>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                        </li>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                        </li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <div class="item">
                <div class="grid_item">
                    <span class="ribbon new">New</span>
                    <figure>
                        <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                            <img class="owl-lazy" src="view/img/products/product_placeholder_square_medium.jpg" data-src="view/img/products/shoes/4.jpg" alt="" />
                        </a>
                    </figure>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                    </div>
                    <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                        <h3>ACG React Terra</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">$110.00</span>
                    </div>
                    <ul>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                        </li>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                        </li>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                        </li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <div class="item">
                <div class="grid_item">
                    <span class="ribbon new">New</span>
                    <figure>
                        <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                            <img class="owl-lazy" src="view/img/products/product_placeholder_square_medium.jpg" data-src="view/img/products/shoes/4.jpg" alt="" />
                        </a>
                    </figure>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                    </div>
                    <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                        <h3>ACG React Terra</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">$110.00</span>
                    </div>
                    <ul>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                        </li>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                        </li>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                        </li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <div class="item">
                <div class="grid_item">
                    <span class="ribbon new">New</span>
                    <figure>
                        <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                            <img class="owl-lazy" src="view/img/products/product_placeholder_square_medium.jpg" data-src="view/img/products/shoes/4.jpg" alt="" />
                        </a>
                    </figure>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                    </div>
                    <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                        <h3>ACG React Terra</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">$110.00</span>
                    </div>
                    <ul>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                        </li>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                        </li>
                        <li>
                            <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                        </li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /item -->
            <!-- /item -->
        </div>
        <!-- /products_carousel -->
    </div>
    <!-- /container -->

</main>