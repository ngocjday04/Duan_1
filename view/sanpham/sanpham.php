<main>
    <div class="top_banner">
        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
            <div class="container">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?act=sanpham">Category</a></li>
                        <li>Page active</li>
                    </ul>
                </div>
                <h1>Quần-Áo</h1>
            </div>
        </div>
        <img src="view/img/mauanh1.jpg" data-src="view/img/mauanh1.jpg" alt="" class="img-fluid" />
    </div>
    <!-- /top_banner -->
    <div id="stick_here"></div>
    <div class="toolbox elemento_stick">
        <div class="container">
            <ul class="clearfix">
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
        <form action="index.php?act=addtocart" method="post">

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
                                            title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to
                                                cart</span></a>
                                    </li>
                                </ul>

                            </div>
                            <!-- /grid_item -->
                        </div>
                        <!-- /col -->
                        <?php endforeach; ?>
        </form>
        <!-- /col -->

        <!-- /col -->
    </div>
    <!-- /row -->
    <div class="pagination__wrapper">
        <ul class="pagination">
            <li><a href="index.php?act=sanpham&page=<?= $page > 1 ? $page - 1 : 1 ?>" class="prev"
                    title="previous page">&#10094;</a></li>
            <?php
            $Pagepagination = ceil($countsp / $limit);
            for ($i = 1; $i < $Pagepagination; $i++) :
            ?>
            <li>
                <a href="index.php?act=sanpham&page=<?= $i ?>" class="<?= $i == $page ? 'active' : '' ?>">
                    <?= $i ?>
                </a>
                <?php endfor; ?>
            </li>
            <li><a href="index.php?act=sanpham&page<?= $page < $Pagepagination ? $page + 1 : $page ?>" class="next"
                    title="next page">&#10095;</a></li>
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
                <h4><a href="#filter_4" data-bs-toggle="collapse" class="closed">Giá</a></h4>
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
                <a href="index.php?act=sanpham&idct_dm=" .$category_id class="btn_1">Lọc</a> <a
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