<main>
    <div class="top_banner">
        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
            <div class="container">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Category</a></li>
                        <li>Page active</li>
                    </ul>
                </div>
                <h1>Shoes - Grid listing</h1>
            </div>
        </div>
        <img src="img/bg_cat_shoes.jpg" class="img-fluid" alt="">
    </div>
    <!-- /top_banner -->
    <div id="stick_here"></div>
    <div class="toolbox elemento_stick">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <div class="sort_select">
                        <select name="sort" id="sort">
                            <option value="popularity" selected="selected">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to
                        </select>
                    </div>
                </li>
                <li>
                    <a href="#0"><i class="ti-view-grid"></i></a>
                    <a href="listing-row-1-sidebar-left.html"><i class="ti-view-list"></i></a>
                </li>
                <li>
                    <a href="#0" class="open_filters">
                        <i class="ti-filter"></i><span>Filters</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /toolbox -->


    <div class="container margin_30">

        <div class="row">
            <div class="col-lg-9">
                <div class="row small-gutters">

                    <!-- /col -->
                    <?php foreach ($listproduct as $key => $value) : ?>
                    <?php extract($value);
                        ?>
                    <div class="col-6 col-md-4">
                        <div class="grid_item">
                            <span class="ribbon new">New</span>
                            <figure>
                                <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                                    <img class="img-fluid lazy" src="upload/<?= $image ?>">
                                </a>
                            </figure>
                            <a href="index.php?act=chitietsp&idsp=<?= $product_id ?>">
                                <h3><?= $product_name ?></h3>
                            </a>
                            <div class="price_box">
                                <span class="new_price">$<?= $price ?></span>
                            </div>
                            <ul>
                                <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Add to favorites"><i class="ti-heart"></i><span>Add to
                                            favorites</span></a></li>
                                <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to
                                            compare</span></a></li>
                                <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /grid_item -->
                    </div>
                    <!-- /col -->
                    <?php endforeach; ?>
                    <!-- /col -->

                    <!-- /col -->
                </div>
                <!-- /row -->
                <div class="pagination__wrapper">
                    <ul class="pagination">
                        <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                        <li>
                            <a href="#0" class="active">1</a>
                        </li>
                        <li>
                            <a href="#0">2</a>
                        </li>
                        <li>
                            <a href="#0">3</a>
                        </li>
                        <li>
                            <a href="#0">4</a>
                        </li>
                        <li><a href="#0" class="next" title="next page">&#10095;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /col -->

            <aside class="col-lg-3" id="sidebar_fixed">
                <div class="filter_col">
                    <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
                    <div class="filter_type version_2">
                        <h4><a href="#filter_1" data-bs-toggle="collapse" class="opened">Danh Muc</a></h4>

                        <div class="collapse show" id="filter_1">
                            <ul>
                                <?php foreach ($listdm as $key => $dm) {
                                    echo '
                              
                                <li>
                                    <label class="container_check">' . $dm['category_name'] . '
                                        <input type="checkbox">
                                        <span class="checkmark"><a href="index.php?act=sanpham&idct_dm=' . $dm['category_id'] . '"></span>
                                    </label>
                                </li>';
                                } ?>


                            </ul>
                        </div>

                        <!-- /filter_type -->
                    </div>
                    <!-- /filter_type -->


                    <div class="filter_type version_2">
                        <h4><a href="#filter_4" data-bs-toggle="collapse" class="closed">Price</a></h4>
                        <div class="collapse" id="filter_4">
                            <ul>
                                <?php foreach ($productnew as $key => $product) {
                                    echo '
                              
                                <li>
                                    <label class="container_check">$' . $product['price'] . '
                                        <input type="checkbox">
                                        <span class="checkmark"><a href="index.php?act=sanpham&idsp=' . $product['product_id'] . '"></span>
                                    </label>
                                </li>';
                                } ?>

                            </ul>
                        </div>
                    </div>
                    <!-- /filter_type -->
                    <div class="buttons">
                        <a href="index.php?act=sanpham&idct_dm=" .$category_id class="btn_1">Filter</a> <a
                            href="index.php?act=sanpham&idct_dm" class="btn_1 gray">Reset</a>
                    </div>
                </div>
            </aside>
            <!-- /col -->
        </div>
        <!-- /row -->

    </div>
    <!-- /container -->
</main>