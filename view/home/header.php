<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <script src="view/thuvien.js"> </script>
    <script src="./view/giohang/jquery.min.js"> </script>
    <title>Dự Án 1 _ Nhóm 12</title>

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="./view/css/bootstrap.min.css" rel="stylesheet">
    <link href="./view/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./view/css/cart.css">
    <link rel="stylesheet" href="./view/css/checkout.css">
    <link rel="stylesheet" href="./view/css/account.css">
    <link rel="stylesheet" href="./view/css/listing.css">
    <link rel="stylesheet" href="./view/css/leave_review.css">
    <link rel="stylesheet" href="./view/css/product_page.css">



    <!-- SPECIFIC CSS -->
    <link href="./view/css/home_1.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="./view/css/custom.css" rel="stylesheet">

</head>

<body>

    <div id="page">

        <header class="version_1">
            <div class="layer"></div><!-- Mobile menu overlay mask -->
            <div class="main_header">
                <div class="container">
                    <div class="row small-gutters">
                        <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                            <div id="logo">
                                <a href="index.php"><img src="view/img/logo.svg" alt="" width="100" height="35"></a>
                            </div>
                        </div>
                        <nav class="col-xl-6 col-lg-7">
                            <a class="open_close" href="javascript:void(0);">
                                <div class="hamburger hamburger--spin">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                            </a>
                            <!-- Mobile menu button -->
                            <div class="main-menu">
                                <div id="header_menu">
                                    <a href="index.html"><img src="view/img/logo_black.svg" alt="" width="100"
                                            height="35"></a>
                                    <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                                </div>
                                <ul>
                                    <li class="submenu">
                                        <a href="javascript:void(0);" class="show-submenu">Home</a>
                                        <ul>
                                            <li><a href="index.php">Slider</a></li>
                                            <li><a href="index.php">Video Background</a></li>
                                            <li><a href="index.php">Vertical Slider</a></li>
                                            <li><a href="index.php">GDPR Cookie Bar</a></li>
                                        </ul>
                                    </li>
                                    <li class="megamenu submenu">
                                        <a href="javascript:void(0);" class="show-submenu-mega">Pages</a>
                                        <div class="menu-wrapper">

                                            <!-- /row -->
                                        </div>
                                        <!-- /menu-wrapper -->
                                    </li>
                                    <li class="submenu">
                                        <a href="javascript:void(0);" class="show-submenu">Extra Pages</a>

                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#0">Buy Template</a>
                                    </li>
                                </ul>
                            </div>
                            <!--/main-menu -->
                        </nav>
                        <div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-end">
                            <a class="phone_top" href="tel://9438843343"><strong><span>Trợ giúp?</span>1900
                                    9009</strong></a>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- /main_header -->

            <div class="main_nav Sticky">
                <div class="container">
                    <div class="row small-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <nav class="categories">
                                <ul class="clearfix">
                                    <li><span>
                                            <a href="#">
                                                <span class="hamburger hamburger--spin">
                                                    <span class="hamburger-box">
                                                        <span class="hamburger-inner"></span>
                                                    </span>
                                                </span>
                                                Danh mục
                                            </a>
                                        </span>
                                        <div id="menu">
                                            <ul>
                                                <?php foreach ($listdm as $key => $dm) : ?>
                                                <?php extract($dm);
                                                    $category_dt = "index.php?act=sanpham&idct_dm=" . $category_id;
                                                    ?>
                                                <li><span><a href="<?= $category_dt ?>"><?= $category_name ?></a></span>

                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>

                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                            <div class="custom-search-input">
                                <form action="index.php?act=sanpham" method="post">
                                    <input type="text" class="form-control" name="kyw"
                                        placeholder="Tìm kiếm tại đây ..." />
                                    <button type="submit" name="timkiem"><i
                                            class="header-icon_search_custom"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-md-3">
                            <ul class="top_tools">
                                <li>
                                    <div class="dropdown dropdown-cart">
                                        <a href="index.php?act=addtocart" class="cart_bt"
                                            id="cart_bt"><strong></strong></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li>
                                                    <a href="product-detail-1.html">
                                                        <figure><img
                                                                src="view/img/products/product_placeholder_square_small.jpg"
                                                                data-src="view/img/products/shoes/thumb/1.jpg" alt=""
                                                                width="50" height="50" class="lazy"></figure>
                                                        <strong><span>1x Armor Air x Fear</span>$90.00</strong>
                                                    </a>
                                                    <a href="#0" class="action"><i class="ti-trash"></i></a>
                                                </li>
                                                <li>
                                                    <a href="product-detail-1.html">
                                                        <figure><img
                                                                src="view/img/products/product_placeholder_square_small.jpg"
                                                                data-src="view/img/products/shoes/thumb/2.jpg" alt=""
                                                                width="50" height="50" class="lazy"></figure>
                                                        <strong><span>1x Armor Okwahn II</span>$110.00</strong>
                                                    </a>
                                                    <a href="0" class="action"><i class="ti-trash"></i></a>
                                                </li>
                                            </ul>
                                            <div class="total_drop">
                                                <div class="clearfix"><strong>Total</strong><span>$200.00</span></div>
                                                <a href="index.php?act=addtocart" class="btn_1 outline">View Cart</a><a
                                                    href="index.php?act=checkout" class="btn_1">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /dropdown-cart-->
                                </li>
                                <li>
                                    <a href="#0" class="wishlist"><span>Wishlist</span></a>
                                </li>
                                <li>
                                    <?php
                                    if (isset($_SESSION['user_name']) && ($_SESSION['user_name'] != "")) {
                                        echo '<a href="index.php?act=account"> ' . $_SESSION['user_name']['user_name'] . '</a>';
                                        echo '<a href="index.php?act=thoat"> Thoát</a>';
                                    } else {
                                        echo '
                                    <a href="index.php?act=account"> ĐĂNG NHẬP </a>';
                                    }
                                    ?>
                                    <div class="dropdown dropdown-access">
                                        <?php
                                        // if (isset($_SESSION['user_name'])&&($_SESSION['user_name'])){}
                                        ?>
                                        <a href="index.php?act=account" class="access_link"><span>Tài khoản</span></a>
                                        <div class="dropdown-menu">
                                            <a href="index.php?act=account" class="btn_1">Đăng nhập or Đăng Ký</a>
                                            <ul>
                                                <li>
                                                    <a href="index.php?act=trackorder"><i class="ti-truck"></i>Theo dỗi
                                                        đơn hàng</a>
                                                </li>
                                                <li>
                                                    <a href="index.php?act=account"><i class="ti-package"></i>Đơn hàng
                                                        của tôi</a>
                                                </li>
                                                <li>
                                                    <a href="index.php?act=account"><i class="ti-user"></i>Thông tin</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /dropdown-access
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
                                </li>
                                <li>
                                    <a href="#menu" class="btn_cat_mob">
                                        <div class="hamburger hamburger--spin" id="hamburger">
                                            <div class="hamburger-box">
                                                <div class="hamburger-inner"></div>
                                            </div>
                                        </div>
                                        Categories
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                        </div>



                        <!-- /search_mobile -->
                    </div>
                    <!-- /main_nav -->
        </header>
        <!-- /header -->