<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
<!-- Mirrored from shreethemes.in/cartzio/layouts/index-fashion-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2024 16:46:16 GMT -->

<head>
    <meta charset="UTF-8" />
    <title>
        Cartzio - Fashion Store eCommerce Tailwind CSS Landing Template
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Fashion Store eCommerce Tailwind CSS Landing Template" name="description" />
    <meta content="Shop, Fashion, eCommerce, Cart, Shop Cart, tailwind css, Admin, Landing" name="keywords" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in/" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="1.0.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="../../img/category_id-Photoroom.png" />

    <!-- Css -->
    <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet" />
    <link href="assets/libs/swiper/css/swiper.min.css" rel="stylesheet" />
    <!-- Main Css -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="assets/css/tailwind.min.css" rel="stylesheet" type="text/css" />
    <style>
    .has-submenu {
        position: relative;
        display: inline-block;
    }

    .submenu img {
        width: 150px;
        height: 80px;
        margin-left: 20px;
    }

    .submenu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 200px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .has-submenu:hover .submenu {
        display: block;
    }

    .submenu ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .submenu li {
        padding: 10px;
    }

    .submenu .megamenu-head {
        font-weight: bold;
        padding: 10px;
        background-color: #f4f4f4;
    }

    .menu-arrow {
        display: inline-block;
        width: 0;
        height: 0;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: 6px solid #000;
        margin-left: 5px;
        vertical-align: middle;
    }

    .logo img {
        height: 40px;
        width: auto;
        display: block;

    }
    </style>

</head>

<body class="dark:bg-slate-900">
    <!-- Loader Start -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader End -->
    <!-- TAGLINE START-->


    <div class="tagline bg-slate-900">
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h6 class="text-white font-medium">
                        Ưu đãi lên tới 50% 🎉
                    </h6>
                </div>
            </div>
        </div>

    </div>


    <!--end tagline-->
    <!-- TAGLINE END-->
    <!-- Start Navbar -->
    <nav id="topnav" class="defaultscroll is-sticky tagline-height">
        <div class="container relative">
            <!-- Logo container-->
            <a class="logo" href="index.php?act=home">
                <div>
                    <img src="assets/images/category_id-Photoroom.png" class="h-[30px] inline-block dark:hidden"
                        alt="" />
                    <img src="assets/images/category_id-3-Photoroom.png" class="h-[30px] hidden dark:inline-block"
                        alt="" />
                </div>
            </a>
            <!-- End Logo container-->

            <!-- Start Mobile Toggle -->
            <div class="menu-extras">
                <div class="menu-item">
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Mobile Toggle -->

            <!--Login button Start-->
            <ul class="buy-button list-none mb-0">
                <li class="dropdown inline-block relative pe-1">
                    <button data-dropdown-toggle="dropdown" class="dropdown-toggle align-middle inline-flex"
                        type="button">
                        <i data-feather="search" class="size-5"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu absolute overflow-hidden end-0 m-0 mt-5 z-10 md:w-52 w-48 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden"
                        onclick="event.stopPropagation();">
                        <div class="relative">
                            <i data-feather="search" class="absolute size-4 top-[9px] end-3"></i>
                            <input type="text"
                                class="h-9 px-3 pe-10 w-full border-0 focus:ring-0 outline-none bg-white dark:bg-slate-900 shadow dark:shadow-gray-800"
                                name="s" id="searchItem" placeholder="Search..." />
                        </div>
                    </div>
                </li>

                <li class="dropdown inline-block relative ps-0.5">
                    <a href="index.php?act=giohang">
                        <button data-dropdown-toggle="dropdown"
                            class="dropdown-toggle size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-orange-500 border border-orange-500 text-white"
                            type="button">
                            <i data-feather="shopping-cart" class="h-4 w-4"></i>
                        </button>
                    </a>
                    <!-- Dropdown menu -->

                </li>

                <li class="inline-block ps-0.5">
                    <a href="index.php?act=yeuthich"
                        class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-orange-500 text-white">
                        <i data-feather="heart" class="h-4 w-4"></i>
                    </a>
                </li>

                <li class="dropdown inline-block relative ps-0.5">

                    <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                        <span
                            class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full border border-orange-500 bg-orange-500 text-white"><img
                                src="assets/images/client/16.jpg" class="rounded-full" alt="" /></span>
                    </button>

                    <!-- Dropdown menu -->
                    <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-48 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden"
                        onclick="event.stopPropagation();">
                        <ul class="py-2 text-start">
                            <li>
                                <p class="text-slate-400 pt-2 px-4">Xin chào</p>
                            </li>

                            <li>
                                <a href="user-account.html"
                                    class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-orange-500 dark:hover:text-white"><i
                                        data-feather="dollar-sign" class="h-4 w-4 me-2"></i></i> Lịch sử mua</a>
                            </li>
                            <li>
                                <a href="user-account.html"
                                    class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-orange-500 dark:hover:text-white"><i
                                        data-feather="user" class="h-4 w-4 me-2"></i>Tài khoản</a>
                            </li>
                            <li>
                                <a href="helpcenter.html"
                                    class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-orange-500 dark:hover:text-white"><i
                                        data-feather="help-circle" class="h-4 w-4 me-2"></i>Yêu thích</a>
                            </li>
                            <li>
                                <a href="user-setting.html"
                                    class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-orange-500 dark:hover:text-white"><i
                                        data-feather="settings" class="h-4 w-4 me-2"></i>Cài đặt</a>
                            </li>
                            <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                            <li>
                                <a href="login.html"
                                    class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-orange-500 dark:hover:text-white"><i
                                        data-feather="log-out" class="h-4 w-4 me-2"></i>Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--end dropdown-->
            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu parent-menu-item">
                        <a href="index.php?act=trangchu">Trang chủ</a>

                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="index.php?act=sanpham">Sản phẩm</a><span class="menu-arrow"></span>

                        <ul class="submenu megamenu">
                            <?php
                            $dsdm = load_all_categories();
                            foreach ($dsdm as $dm){
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$category_id;
                                echo '<li>
                                        <ul>
                                            <li class="megamenu-head"><a href="'.$linkdm.'" class="sub-menu-item">'.$category_name.'</a></li>
                                        </ul>
                                    </li>';
                            }
                            ?>
                            <!-- <li>
                                <ul>
                                    <li class="megamenu-head"><a href="#!" class="sub-menu-item">Nike</a></li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li class="megamenu-head"><a href="#!" class="sub-menu-item">Nike</a></li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li class="megamenu-head"><a href="#!" class="sub-menu-item">Nike</a></li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li class="megamenu-head"><a href="#!" class="sub-menu-item">Nike</a></li>
                                </ul>
                            </li> -->

                            <img src="./img/nike3.jpg" alt="">
                        </ul>
                    </li>

                    <!-- <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)"> Shop </a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Shop Grid </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="shop-grid.html" class="sub-menu-item">Shop Grid</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-left-sidebar.html" class="sub-menu-item">Grid Left
                                            Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right-sidebar.html" class="sub-menu-item">Grid Right
                                            Sidebar</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Shop List </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="shop-list.html" class="sub-menu-item">Shop List</a>
                                    </li>
                                    <li>
                                        <a href="shop-list-left-sidebar.html" class="sub-menu-item">List Left
                                            Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="shop-list-right-sidebar.html" class="sub-menu-item">List Right
                                            Sidebar</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Shop Detail </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="product-detail-one.html" class="sub-menu-item">Product Detail One</a>
                                    </li>
                                    <li>
                                        <a href="product-detail-two.html" class="sub-menu-item">Product Detail Two</a>
                                    </li>
                                    <li>
                                        <a href="product-detail-three.html" class="sub-menu-item">Product Detail
                                            Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="shop-cart.html" class="sub-menu-item">Shop Cart</a>
                            </li>
                            <li>
                                <a href="shop-checkout.html" class="sub-menu-item">Checkout</a>
                            </li>
                            <li>
                                <a href="our-store.html" class="sub-menu-item">Our Store</a>
                            </li>
                            <li><a href="brands.html" class="sub-menu-item">Brands</a></li>
                            <li>
                                <a href="compare-product.html" class="sub-menu-item">Compare Product</a>
                            </li>
                            <li>
                                <a href="recently-viewed-product.html" class="sub-menu-item">Recently Viewed
                                    Products</a>
                            </li>
                        </ul>
                    </li> -->

                    <!-- <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="aboutus.html" class="sub-menu-item">About Us</a>
                            </li>

                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> My Account</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="user-account.html" class="sub-menu-item">User Account</a>
                                    </li>
                                    <li>
                                        <a href="user-billing.html" class="sub-menu-item">Billing</a>
                                    </li>
                                    <li>
                                        <a href="user-payment.html" class="sub-menu-item">Payment</a>
                                    </li>
                                    <li>
                                        <a href="user-invoice.html" class="sub-menu-item">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="user-social.html" class="sub-menu-item">Social</a>
                                    </li>
                                    <li>
                                        <a href="user-notification.html" class="sub-menu-item">Notification</a>
                                    </li>
                                    <li>
                                        <a href="user-setting.html" class="sub-menu-item">Setting</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Email Template </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="email-confirmation.html" class="sub-menu-item">
                                            Confirmation</a>
                                    </li>
                                    <li>
                                        <a href="email-cart.html" class="sub-menu-item"> Cart</a>
                                    </li>
                                    <li>
                                        <a href="email-offers.html" class="sub-menu-item">
                                            Offers</a>
                                    </li>
                                    <li>
                                        <a href="email-order-success.html" class="sub-menu-item">
                                            Order Success</a>
                                    </li>
                                    <li>
                                        <a href="email-gift-voucher.html" class="sub-menu-item">
                                            Gift Voucher</a>
                                    </li>
                                    <li>
                                        <a href="email-reset-password.html" class="sub-menu-item">
                                            Reset Password</a>
                                    </li>
                                    <li>
                                        <a href="email-item-review.html" class="sub-menu-item">
                                            Item Review</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="blogs.html" class="sub-menu-item"> Blogs</a>
                                    </li>
                                    <li>
                                        <a href="blog-detail.html" class="sub-menu-item">
                                            Blog Detail</a>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="career.html" class="sub-menu-item">Career </a></li>

                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="helpcenter.html" class="sub-menu-item">Overview</a>
                                    </li>
                                    <li>
                                        <a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a>
                                    </li>
                                    <li>
                                        <a href="helpcenter-guides.html" class="sub-menu-item">Guides</a>
                                    </li>
                                    <li>
                                        <a href="helpcenter-support.html" class="sub-menu-item">Support</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="login.html" class="sub-menu-item"> Login</a>
                                    </li>
                                    <li>
                                        <a href="signup.html" class="sub-menu-item"> Signup</a>
                                    </li>
                                    <li>
                                        <a href="forgot-password.html" class="sub-menu-item">
                                            Forgot Password</a>
                                    </li>
                                    <li>
                                        <a href="lock-screen.html" class="sub-menu-item">
                                            Lock Screen</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="terms.html" class="sub-menu-item">Terms of Services</a>
                                    </li>
                                    <li>
                                        <a href="privacy.html" class="sub-menu-item">Privacy Policy</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="comingsoon.html" class="sub-menu-item">
                                            Coming Soon</a>
                                    </li>
                                    <li>
                                        <a href="maintenance.html" class="sub-menu-item">
                                            Maintenance</a>
                                    </li>
                                    <li>
                                        <a href="error.html" class="sub-menu-item"> 404!</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a>
                                    </li>
                                    <li class="has-submenu child-menu-item">
                                        <a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li>
                                                <a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->

                    <li><a href="index.php?act=sale" class="sub-menu-item">Sale</a></li>

                    <li><a href="index.php?act=gioithieu" class="sub-menu-item">Giới Thiệu</a></li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </nav>