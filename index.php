<?php include('admin/config.php'); ?>
<?php
// $user_id = $_SESSION["user_id"];
$products_qry = "SELECT * FROM products";
$products_result = mysqli_query($db, $products_qry);
// $row = mysqli_fetch_assoc($districts_result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dave Furniturs</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Dave Furnitures">
    <meta name="author" content="DAVE Furnitures (Pvt) Ltd">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">


    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Oswald:400,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <!-- End .header-top -->
            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                        <a href="index-2.html" class="logo">
                            <img src="assets/images/Dave-Furnitures-logo.svg" alt="Dave Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="I'm searching for..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="12">- Women</option>
                                            <option value="13">- Men</option>
                                            <option value="66">- Jewellery</option>
                                            <option value="67">- Kids Fashion</option>
                                            <option value="5">Electronics</option>
                                            <option value="21">- Smart TVs</option>
                                            <option value="22">- Cameras</option>
                                            <option value="63">- Games</option>
                                            <option value="7">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="31">- Cars and Trucks</option>
                                            <option value="32">- Motorcycles &amp; Powersports</option>
                                            <option value="33">- Parts &amp; Accessories</option>
                                            <option value="34">- Boats</option>
                                            <option value="57">- Auto Tools &amp; Supplies</option>
                                        </select>
                                    </div>
                                    <!-- End .select-custom -->
                                    <button class="btn" type="submit"><i class="icon-magnifier"></i></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->
                    </div>
                    <!-- End .headeer-center -->
                    <div class="contact-widget phone">
                        <div style="display: inline-block;">
                            <h4 class="widget-title">call us now</h4>
                            <a href="#"> 011 2414201</a>
                        </div>
                    </div>

                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="">
                                <a href="#" class="sf-with-ul">All Furnitures</a>

                                <ul style="display: none;">
                                    <li><a href="cart.html">Chiars</a>
                                        <ul style="display: none;">
                                            <li><a href="#">Chiar Design 01</a></li>
                                            <li><a href="#">Chiar Design 02</a></li>
                                            <li><a href="#">Chiar Design 03</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>

                            <li class="megamenu-container">
                                <a href="product.html" class="sf-with-ul">Office</a>
                                <div class="megamenu">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="menu-title">
                                                        <a href="#">Variations</a>
                                                    </div>
                                                    <ul>
                                                        <li><a href="product.html">Horizontal Thumbnails</a></li>
                                                        <li><a href="product-full-width.html">Vertical Thumbnails<span
                                                                    class="tip tip-hot">Hot!</span></a></li>
                                                        <li><a href="product.html">Inner Zoom</a></li>
                                                        <li><a href="product-addcart-sticky.html">Addtocart Sticky</a>
                                                        </li>
                                                        <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                                    </ul>
                                                </div>
                                                <!-- End .col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="menu-title">
                                                        <a href="#">Variations</a>
                                                    </div>
                                                    <ul>
                                                        <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                                        <li><a href="product-simple.html">Simple Product</a></li>
                                                        <li><a href="product-sidebar-left.html">With Left Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- End .col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="menu-title">
                                                        <a href="#">Product Layout Types</a>
                                                    </div>
                                                    <ul>
                                                        <li><a href="product.html">Default Layout</a></li>
                                                        <li><a href="product-extended-layout.html">Extended Layout</a>
                                                        </li>
                                                        <li><a href="product-full-width.html">Full Width Layout</a></li>
                                                        <li><a href="product-grid-layout.html">Grid Images Layout</a>
                                                        </li>
                                                        <li><a href="product-sticky-both.html">Sticky Both Side
                                                                Info<span class="tip tip-hot">Hot!</span></a></li>
                                                        <li><a href="product-sticky-info.html">Sticky Right Side
                                                                Info</a></li>
                                                    </ul>
                                                </div>
                                                <!-- End .col-lg-4 -->
                                            </div>
                                            <!-- End .row -->
                                        </div>
                                        <!-- End .col-lg-8 -->
                                        <div class="col-lg-4">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="assets/images/menu-banner.jpg" alt="Menu banner" class="product-promo">
                                                </a>
                                            </div>
                                            <!-- End .banner -->
                                        </div>
                                        <!-- End .col-lg-4 -->
                                    </div>
                                    <!-- End .row -->
                                </div>
                                <!-- End .megamenu -->
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Gallary</a>

                                <ul>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="#">Checkout</a>
                                        <ul>
                                            <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                            <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                            <li><a href="checkout-review.html">Checkout Review</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dashboard</a>
                                        <ul>
                                            <li><a href="dashboard.html">Dashboard</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single.html">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#" class="login-link">Login</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li>
                            <li class="megamenu-container">
                                <a href="product.html">Our Interior Solutions</a></li>
                            <li class="float-right "><a href="https://1.envato.market/DdLk5" target="_blank"><span>Contact Us</span></a></li>
                            <li class="float-right"><a href="#">About Us</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End .header-bottom -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->

        <main class="main home">
            <div class="home-top-container">
                <div class="home-slider owl-carousel owl-theme owl-carousel-lazy">
                    <div class="home-slide" style="background-size: cover; background-image: url('assets/images/slider/slide1.png');">
                        <img class="owl-lazy" src="assets/images/lazy.png" alt="slider image">
                        <div class="home-slide-content container">
                            <div>
                                <h2 class="home-slide-subtitle">start the revolution</h2>
                                <h1 class="home-slide-title">
                                    drone pro 4
                                </h1>
                                <h2 class="home-slide-foot">from <span>Rs. 499</span></h2>
                                <button class="btn btn-dark btn-buy">BUY NOW</button>
                            </div>
                        </div>
                        <!-- End .home-slide-content -->
                    </div>
                    <!-- End .home-slide -->

                    <div class="home-slide" style="background-image: url('assets/images/slider/slide2.jpg');">
                        <img class="owl-lazy" src="assets/images/lazy.png" alt="slider image">
                        <div class="home-slide-content container">
                            <div>
                                <h2 class="home-slide-subtitle">amazing deals</h2>
                                <h1 class="home-slide-title">
                                    smartphone
                                </h1>
                                <h2 class="home-slide-foot">from <span>Rs. 199</span></h2>
                                <button class="btn btn-dark btn-buy">BUY NOW</button>
                            </div>
                        </div>
                        <!-- End .home-slide-content -->
                    </div>
                    <!-- End .home-slide -->

                    <div class="home-slide" style="background-image: url('assets/images/slider/slide3.jpg');">
                        <img class="owl-lazy" src="assets/images/lazy.png" alt="slider image">
                        <div class="home-slide-content container">
                            <div>
                                <h2 class="home-slide-subtitle">best price of the year</h2>
                                <h1 class="home-slide-title">
                                    top accessories
                                </h1>
                                <h2 class="home-slide-foot">from <span>Rs. 19</span></h2>
                                <button class="btn btn-dark btn-buy">BUY NOW</button>
                            </div>
                        </div>
                        <!-- End .home-slide-content -->
                    </div>
                    <!-- End .home-slide -->
                </div>
            </div>
            <!-- End .home-slider -->

            <section class="home-products-intro mt-3 mb-1">
                <div class="container">
                    <div class="row row-sm">
                        <div class="col-xl-6">
                            <div class="banner-product bg-grey" style="background-image: url('assets/images/products/product-banner1.jpg');background-position : 54%;">
                                <h2>ACTION <br>CAMERAS</h2>
                                <div class="mr-5">
                                    <h4>Starting From<span class="price">Rs. 399</span></h4>
                                    <button class="btn btn-primary">SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="banner-product bg-grey" style="background-image: url('assets/images/products/product-banner2.jpg');
                                background-position : 48% 10%;">
                                <div class="ml-5" style="text-align: right">
                                    <h4>Starting From<span class="price">Rs. 199</span></h4>
                                    <button class="btn btn-primary">SHOP NOW</button>
                                </div>
                                <h2>FOR ALL <br>STYLES</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-products-intro" id="specialOffer" style="padding: 1rem 0 2rem;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="home-product-tabs">
                                <div class="tab-content">
                                    <!-- End .tab-pane -->
                                    <div class="tab-pane fade" id="audio-speakers" role="tabpanel" aria-labelledby="laudio-speakers-tab">
                                        <div class="row row-sm">
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-2.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-5.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-8.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-11.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .tab-pane -->

                                    <div class="tab-pane fade" id="cameras" role="tabpanel" aria-labelledby="cameras-tab">
                                        <div class="row row-sm">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="assets/images/products/product-3.jpg">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="category-wrap">
                                                        <div class="category-list">
                                                            <a href="category.html" class="product-category">category</a>
                                                        </div>
                                                    </div>
                                                    <h2 class="product-title">
                                                        <a href="product.html">Product Short Name</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">Rs. 49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-6.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-9.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-12.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .tab-pane -->

                                    <div class="tab-pane fade" id="lamps" role="tabpanel" aria-labelledby="lamps-tab">
                                        <div class="row row-sm">
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-1.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-2.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-3.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-4.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .tab-pane -->

                                    <div class="tab-pane fade" id="computer" role="tabpanel" aria-labelledby="computer-tab">
                                        <div class="row row-sm">
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-5.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-6.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-7.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-8.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .tab-pane -->

                                    <div class="tab-pane fade" id="mobile-phones" role="tabpanel" aria-labelledby="mobile-phones-tab">
                                        <div class="row row-sm">
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-9.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-10.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-11.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                            <div class="col-6 col-md-3">
                                                <div class="product-default inner-quickview inner-icon">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/product-12.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <div class="category-wrap">
                                                            <div class="category-list">
                                                                <a href="category.html" class="product-category">category</a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <span class="product-price">Rs. 49.00</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                            </div>
                                            <!-- End .col-md-4 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .tab-pane -->
                                </div>
                                <!-- End .tab-content -->
                            </div>
                            <!-- End .home-product-tabs -->
                        </div>
                    </div>
                </div>
            </section>

            <section class="product-panel mt-5">
                <div class="container">
                    <div class="section-title">
                        <h2>Featured Products</h2>
                    </div>
                    <div class="product-intro divide-line mt-2 mb-8">
                        <div class="col-6 col-lg-2 col-md-3 col-sm-4 product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/mp4.png">
                                </a>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">Melamine</a>
                                    </div>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Office Table</a>
                                </h2>
                                <div class="ratings-container">
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">Rs. 1490.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="col-6 col-lg-2 col-md-3 col-sm-4 product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/sp-5.png">
                                </a>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">steel</a>
                                    </div>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Office Table</a>
                                </h2>
                                <div class="ratings-container">
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">Rs. 4900.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="col-6 col-lg-2 col-md-3 col-sm-4 product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/mp3.png">
                                </a>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">Melamine</a>
                                    </div>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Steel & Melamine Table</a>
                                </h2>
                                <div class="ratings-container">
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">Rs. 15000.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="col-6 col-lg-2 col-md-3 col-sm-4 product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/cp-4.png">
                                </a>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">Plastic</a>
                                    </div>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Green Garden Chair</a>
                                </h2>
                                <div class="ratings-container">
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">Rs. 2800.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="col-6 col-lg-2 col-md-3 col-sm-4 product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/sp-4.png">
                                </a>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">Steel
                                    </div>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">Rs. 3500.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="col-6 col-lg-2 col-md-3 col-sm-4 product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/cp-3.png">
                                </a>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">Plastic</a>
                                    </div>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Nepon Chiar</a>
                                </h2>
                                <div class="ratings-container">
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">Rs. 1800.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                </div>
            </section>

            <section class="categories-container">
                <h2 class="text-center">Our Products</h2>
                <div class="container categories-carousel owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                    'loop' : false,
                    'margin': 30,
                    'nav': false,
                    'dots': true,
                    'autoHeight': true,
                    'responsive': {
                      '0': {
                        'items': 2,
                        'margin': 0
                      },
                      '576': {
                        'items': 3
                      },
                      '768': {
                        'items': 4
                      },
                      '992': {
                        'items': 5
                      },
                      '1200': {
                        'items': 6
                      }
                    }
                }">
                    <div class="category">
                        <img src="assets/images/office.svg" alt="office items">
                        <span>OFFICE</span>
                    </div>
                    <div class="category">
                        <img src="assets/images/living.svg" alt="living room items">
                        <span>DINING ROOM</span>
                    </div>
                    <div class="category">
                        <img src="assets/images/dining.svg" alt="dining room items">
                        <span>LIVING ROOM</span>
                    </div>
                    <div class="category">
                        <img src="assets/images/bed.svg" alt="bed room items">
                        <span>BEDROOM</span>
                    </div>
                    <div class="category">
                        <img src="assets/images/outdoor.svg" alt="Outdoor items">
                        <span>OUTDOOR</span>
                    </div>
                    <div class="category">
                        <img src="assets/images/accessories.svg" alt="accessories items">
                        <span>ACCESSORIES</span>
                    </div>
                </div>
                <!-- End .categories-carousel -->
            </section>
            <!-- End .categories-container -->

            <section class="product-panel mt-5">
                <div class="container">
                    <div class="section-title">
                        <h2>MELAMINE</h2>
                    </div>
                    <div class="product-intro divide-line mt-2 mb-8">
                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/mp1.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/mp2.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/mp3.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/mp4.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/mp1.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>


                    </div>
                </div>
            </section>

            <section class="product-panel mt-5">
                <div class="container">
                    <div class="section-title">
                        <h2>STEEL</h2>
                    </div>
                    <div class="product-intro divide-line mt-2 mb-8">
                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/sp-1.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/sp-2.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/sp-3.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/sp-4.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/sp-5.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <section class="product-panel mt-5">
                <div class="container">
                    <div class="section-title">
                        <h2>PLASTIC</h2>
                    </div>
                    <div class="product-intro divide-line mt-2 mb-8">
                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/cp-1.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/cp-2.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/cp-3.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/cp-4.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="product-card-size">
                            <div class="m-3 product-default inner-quickview inner-icon" style="background: #F4F4F4;">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/cp-5.png">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>

                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Rs. 49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>


                    </div>
                </div>
            </section>
        </main>
        <!-- End .main -->

        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="#" class="widget-newsletter-title">Sign Up to Newsletter</a>
                        </div>
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-5">
                            <form action="#">
                                <div class="footer-submit-wrapper">
                                    <input type="email" class="form-control" placeholder="Enter your Email address" required>
                                    <button type="submit" class="btn">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="footer-middle   ">
                    <div class="row">
                        <a href="index-2.html">
                            <img src="assets/images/Dave-Furnitures-logo.svg" alt="Dave Logo" class="mt-2">
                        </a>
                        <div class="row">
                            <div class="col-sm-6 col-xl-4">
                                <div class="contact-widget phone">
                                    <div style="display: inline-block;">
                                        <h4 class="widget-title">call us now</h4>
                                        <a href="#"> 0112 414201</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="contact-widget email">
                                    <h4 class="widget-title" style="margin-bottom : .5rem;">e-mail address</h4>
                                    <a href="mailto:mail@example.com">mail@domain.com</a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="contact-widget email">
                                    <h4 class="widget-title" style="margin-bottom : .5rem;">Address</h4>
                                    <a href="">Address: 80/B, Avissawella Road, Welivita, Kaduwela, Sri Lanka.</a>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="contact-widget follow">
                                    <h4 class="widget-title">follow us</h4>
                                    <div class="social-icons">
                                        <a href="#" class="social-icon" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="social-icon" target="_blank"><i
                                                class="fab fa-twitter"></i></a>
                                        <a href="#" class="social-icon" target="_blank"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <!-- End .social-icons -->
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .footer-middle -->
                <div class="footer-bottom">
                    <p class="footer-copyright">Dave eCommerce. &copy; 2020. All Rights Reserved</p>
                    <img src="assets/images/payments_long.png" width="180px" style="max-height: 24px">
                </div>
                <!-- End .footer-bottom -->
            </div>
        </footer>
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-retweet"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="index-2.html">Home</a></li>
                    <li>
                        <a href="category.html">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="category.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">Product List Item Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                        class="tip tip-new">New</span></a></li>
                            <li><a href="category-3col.html">3 Columns Products</a></li>
                            <li><a href="category.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product.html">Horizontal Thumbnails</a></li>
                                    <li><a href="product-full-width.html">Vertical Thumbnails<span
                                                class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product.html">Inner Zoom</a></li>
                                    <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                    <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                    <li><a href="product-simple.html">Simple Product</a></li>
                                    <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Layout Types</a>
                                <ul>
                                    <li><a href="product.html">Default Layout</a></li>
                                    <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                    <li><a href="product-full-width.html">Full Width Layout</a></li>
                                    <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                    <li><a href="product-sticky-both.html">Sticky Both Side Info<span
                                                class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li>
                                <a href="#">Checkout</a>
                                <ul>
                                    <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                    <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                    <li><a href="checkout-review.html">Checkout Review</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="#" class="login-link">Login</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="single.html">Blog Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Special Offer!<span class="tip tip-hot">About Us</span></a></li>
                    <li><a href="https://1.envato.market/DdLk5" target="_blank">Contact Us</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
            </div>
            <!-- End .social-icons -->
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    <!-- newsletter-popup-form -->
    <!-- <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background-image: url(assets/images/newsletter_popup_bg.jpg)">
        <div class="newsletter-popup-content">
            <img src="assets/images/logo-black.png" alt="Logo" class="logo-newsletter">
            <h2>BE THE FIRST TO KNOW</h2>
            <p>Subscribe to the Dave eCommerce newsletter to receive timely updates from your favorite products.</p>
            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                    <input type="submit" class="btn" value="Go!">
                </div>
                
            </form>
            <div class="newsletter-subscribe">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div> -->
    <!-- End .newsletter-popup-content -->
    </div>
    <!-- End .newsletter-popup -->

    <!-- Add Cart Modal -->
    <div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body add-cart-box text-center">
                    <p>You've just added this product to the<br>cart:</p>
                    <h4 id="productTitle"></h4>
                    <img src="#" id="productImage" width="100" height="100" alt="adding cart image">
                    <div class="btn-actions">
                        <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                        <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/jquery.countdown/jquery.countdown.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main_init.min.js"></script>
    <script src="assets/js/main.min.js"></script>
</body>


</html>