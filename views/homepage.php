<?php
error_reporting(0);
session_start();
if($_SESSION['username'])
{
    $_SESSION['username'] = $_SESSION['username'];
    echo '
        <!DOCTYPE html>
<html>

<head>
    <title>Tecido Fabrics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/Logos/White-Logo.png" type="image/png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>

<body>

    <!-- Start Loader  -->

    <!-- <div class="loader-con">
        <div class="loader"></div>
    </div> -->

    <link rel="stylesheet" href="css/vendor/plugins.min.css">
    <link rel="stylesheet" href="css/style.min.css">

    </head>

    <body>

        <!--====== Header Start ======-->

        <header class="header-area">

            <div class="header-navbar header-navbar-2 d-lg-none">
                <div class="container-fluid custom-container">
                    <div class="header-wrapper d-flex justify-content-between align-items-center">
                        <div class="header-logo">
                            <a href="index.html">
                                <img src="img/Logos/color-logo.png" alt="Logo">
                            </a>
                        </div>


                    </div>
                </div>

                <div id="dl-menu" class="dl-menuwrapper d-lg-none">
                    <button class="dl-trigger"></button>
                   
                    <ul class="dl-menu">
                        <li class="login">
                            <a href="cart.html"><i class="fas fa-Shopping-cart"></i> Cart</a>
                        </li>
                        <li class="#"><a href="registration-form.html"><i class="far fa-Shopping-bag"></i> Sales</a>
                        </li>

                        <li>
                            <a href="index.html">Home</a>
                            <ul class="dl-submenu">
                                <li>
                                    <a href="#">Column #1</a>
                                    <ul class="dl-submenu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                        <li><a href="index-4.html">Home 04</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Column #2</a>
                                    <ul class="dl-submenu">
                                        <li><a href="index-5.html">Home 05</a></li>
                                        <li><a href="index.html">Home 06</a></li>
                                        <li><a href="index-7.html">Home 07</a></li>
                                        <li><a href="index-8.html">Home 08</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Column #3</a>
                                    <ul class="dl-submenu">
                                        <li><a href="index-9.html">Home 09</a></li>
                                        <li><a href="index-10.html">Home 10</a></li>
                                        <li><a href="index-11.html">Home 11</a></li>
                                        <li><a href="index-12.html">Home 12</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Column #4</a>
                                    <ul class="dl-submenu">
                                        <li><a href="index-13.html">Home 13</a></li>
                                        <li><a href="index-14.html">Home 14</a></li>
                                        <li><a href="index-15.html">Home 15</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop.html">Fabrics</a>
                            <ul class="dl-submenu">
                                <li>
                                    <a href="shop.html">Plain Fabric</a>
                                    <ul class="dl-submenu">
                                        <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                        <li><a href="shop-metro.html">Shop Metro</a></li>
                                        <li><a href="shop-masonry.html">Shop Masonry</a></li>
                                        <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                        <li><a href="lookbook.html">Look Book</a></li>
                                        <li><a href="collections.html">Collections</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.html">Worked Fabric</a>
                                    <ul class="dl-submenu">
                                        <li><a href="product-simple-01.html">Product Simple 01</a></li>
                                        <li><a href="product-simple-02.html">Product Simple 02</a></li>
                                        <li><a href="product-simple-03.html">Product Simple 03</a></li>
                                        <li><a href="product-simple-04.html">Product Simple 04</a></li>
                                        <li><a href="product-grouped.html">Product Grouped</a></li>
                                        <li><a href="product-affiliate.html">Product Affiliate</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>

                        </li>

                        <li>
                            <a href="blog.html">Blog</a>
                            <ul class="dl-submenu">
                                <li>
                                    <a href="blog.html">Blog Layout</a>
                                    <ul class="dl-submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                        <li><a href="blog-grid-01.html">Blog Grid 01</a></li>
                                        <li><a href="blog-grid-02.html">Blog Grid 02</a></li>
                                        <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>

        </header>

        <!--====== Header Ends ======-->

        <!--====== Off Canvas Sidebar Start ======-->

        <div class="off-canvas-sidebar">
            <div class="off-canvas-sidebar-wrapper">
                <a class="sidebar-close" href="javascript:void(0)"><i class="fal fa-times"></i></a>
                <div class="off-canvas-sidebar-box">
                    <a class="logo" href="index.html">
                        <img src="img/Logos/color-logo.png" alt="Logo">
                    </a>
                    <p class="text">Curabitur placerat urna augue, id luctus sem imperdiet id. Nunc congue ac libero ut
                        lacinia. In ultrices elementum ipsum, in tempus enim accumsan..</p>
                    <ul class="sidebar-social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                    <div class="sidebar-image">
                        <img src="img/bg-about.jpg" alt="">
                    </div>
                    <ul class="sidebar-info">
                        <li>
                            <div class="single-info">
                                <div class="info-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info-content">
                                    <p><a href="tel:61292515600">+612 9251 5600</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-info">
                                <div class="info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <p><a href="mailto://info@hasthemes.com">info@hasthemes.com</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-info">
                                <div class="info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-content">
                                    <p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <p class="copyright">&copy; Copyright 2020 Created <a href="https://stickmanservices.com/">Stickman
                            Services</a></p>
                </div>
            </div>
        </div>

        <!--====== Off Canvas Sidebar Ends ======-->

        <!--====== Search Start ======-->


        <!--====== Off Canvas Cart Ends ======-->

        <main class="site-main">

            <!--====== Menu Sidebar Start ======-->

            <div class="menu-sidebar1 text-center d-none d-lg-block">
                <div class="menu-sidebar-wrapper">

                    <div class="sidebar-logo">
                        <a href="index.html">
                            <img src="img/Logos/color-logo.png" width="50%" alt="Logo">
                        </a>
                    </div>

                    <div class="sidebar-meta">
                        <ul class="meta">
                            <li>
                                <a href="cart.html"><i class="fas fa-Shopping-cart"></i> Cart</a>
                            </li>/
                            <li><a href="#"><i class="far fa-Shopping-bag"></i> Sales</a></li>

                        </ul>
                    </div>

                    <div class="sidebar-menu-wrapper">
                        <ul class="main-menu">
                            <li class="active">
                                <a href="index.html">Home</a>
                                <!-- <ul class="sub-menu sub-mega-menu flex-wrap">
                                <li>
                                    <a class="menu-title" href="#">Column #1</a>
                                    <ul class="sub-mega-item">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                        <li><a href="index-4.html">Home 04</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu-title" href="#">Column #2</a>
                                    <ul class="sub-mega-item">
                                        <li><a href="index-5.html">Home 05</a></li>
                                        <li><a href="index.html">Home 06</a></li>
                                        <li><a href="index-7.html">Home 07</a></li>
                                        <li><a href="index-8.html">Home 08</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu-title" href="#">Column #3</a>
                                    <ul class="sub-mega-item">
                                        <li><a href="index-9.html">Home 09</a></li>
                                        <li><a href="index-10.html">Home 10</a></li>
                                        <li><a href="index-11.html">Home 11</a></li>
                                        <li><a href="index-12.html">Home 12</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu-title" href="#">Column #4</a>
                                    <ul class="sub-mega-item">
                                        <li><a href="index-13.html">Home 13</a></li>
                                        <li><a href="index-14.html">Home 14</a></li>
                                        <li><a href="index-15.html">Home 15</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                            </li>
                            <li>
                                <a href="">Fabrics <i class="fal fa-chevron-right"></i></a>
                                <ul class="sub-menu sub-mega-menu align-items-center" style="height: 300px; width: 800px;top:-100px;padding: 10px">
                                    <li style="width: 25%;">
                                        <ul class="sub-mega-item">
                                            <li style="margin: 10px 10px;">
                                                <a class="menu-image" href="product.html">
                                                    <img src="img/product-1.jpg" alt="Menu" height="50%">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li style="width: 25%;">
                                        <ul class="sub-mega-item">
                                            <li style="margin: 10px 10px;">
                                                <a class="menu-image" href="product.html">
                                                    <img src="img/product-2.jpg" alt="Menu" height="50%">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li style="width: 25%;">
                                        <ul class="sub-mega-item">
                                            <li style="margin: 10px 10px;">
                                                <a class="menu-image" href="product.html">
                                                    <img src="img/product-4.jpg" alt="Menu" height="50%">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li style="width: 25%;">
                                        <ul class="sub-mega-item">
                                            <li style="margin: 10px 10px;">
                                                <a class="menu-image" href="product.html">
                                                    <img src="img/product-8.jpg" alt="Menu" height="50%">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>

                            <li>
                                <a href="account.html">My Account</a>
                            </li>

                            <li>
                                <a href="about.html">Enquiry</a>
                            </li>

                            <li>
                                <a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">Blog Layout <i class="fal fa-chevron-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                            <li><a href="blog-grid-01.html">Blog Grid 01</a></li>
                                            <li><a href="blog-grid-02.html">Blog Grid 02</a></li>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>

                        </ul>
                    </div>

                    <div class="sidebar-social">
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>


                </div>
            </div>

            <!--====== Menu Sidebar Ends ======-->

            <div class="site-content">

                <!--====== Slider Start ======-->

                <div class="slider-area slider-06 d-flex align-items-center bg_cover"
                    style="background-image: url(img/1542.jpg);">
                    <div class="container-fluid">
                        <div class="slider-content-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="slider-text">
                                        <p class="text">Sale</p>
                                        <p class="text text-2">50%</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="slider-text text-sm-right">
                                        <p class="text">new</p>
                                        <p class="text text-2">now</p>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="slider-btn">
                                <a href="#" class="main-btn">Shop Now</a>
                            </div> -->
                        </div>
                    </div>
                </div>

                <!--====== Slider Ends ======-->

                <!--====== Features Start ======-->

                <section class="features-area features-2 pt-30">
                    <div class="container-fluid custom-container-2">
                        <div class="features-wrapper flex-wrap">
                            <div class="feature-col">
                                <div class="single-feature text-center mt-30">
                                    <i class="fal fa-truck-container"></i>
                                    <h5 class="title">Free Delivery</h5>
                                    <p>In convallis nulla et magna congue</p>
                                </div>
                            </div>
                            <div class="feature-col">
                                <div class="single-feature text-center mt-30">
                                    <i class="fal fa-life-ring"></i>
                                    <h5 class="title">Expert Support</h5>
                                    <p>In convallis nulla et magna congue</p>
                                </div>
                            </div>
                            <div class="feature-col">
                                <div class="single-feature text-center mt-30">
                                    <i class="fal fa-gift"></i>
                                    <h5 class="title">10% Discount</h5>
                                    <p>In convallis nulla et magna congue</p>
                                </div>
                            </div>
                            <div class="feature-col">
                                <div class="single-feature text-center mt-30">
                                    <i class="fal fa-user-friends"></i>
                                    <h5 class="title">Buyer Protection</h5>
                                    <p>In convallis nulla et magna congue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--====== Features Ends ======-->

                <!--====== Product Start ======-->

                <section class="product-area pt-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="section-title section-title-2 text-center pb-30">
                                    <h2 class="title">NEW ARRIVAL</h2>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="container-fluid custom-container-2">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="all">
                                <div class="row">';

        
    require("../php/database.php");

    $query = $db->prepare("SELECT * FROM dayeble_fabric ORDER BY id DESC LIMIT 4");
    $query->execute();
    $response = $query->get_result();
    if($response ->num_rows != 0)
    {
    while($data = $response->fetch_assoc())
        {
            $fabric_type = $data['fabric_type'];
            $fabric_name = $data['fabric_name'];
            $design_no = $data['design_no'];
            $price = $data['price'];

             $img_path = scandir(getcwd()."/../new-admin/php/uploadFiles/".$fabric_type."/".$fabric_name."/".$design_no."/");
$img = "";
    for($i=0; $i<count($img_path); $i++)
    {
        if(filetype("../new-admin/php/uploadFiles/".$fabric_type."/".$fabric_name."/".$design_no."/".$img_path[$i]) == "file")
        {
            $img = $img_path[$i];
        }
    }
    //echo '<img src="../new-admin/php/uploadFiles/'.$fabric_type.'/'.$fabric_name.'/'.$design_no.'/'.$img.'" width="300" height="300">';
    echo '                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="single-product mt-50">
                                            <div class="product-image">
                                                <div class="image" design-no="'.$design_no.'">
                                                    <img class="product-1" src="../new-admin/php/uploadFiles/'.$fabric_type.'/'.$fabric_name.'/'.$design_no.'/'.$img.'" width="230" height="280" alt="product" class="product-img">
                                                   
                                                    <a class="link" href="php/product-sample.php?design_no='.$design_no.'&img='.$img.'"></a>
                                                </div>
                                                <ul class="product-meta text-center">
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Cart" href="#"><i
                                                                class="fal fa-Shopping-cart"></i></a></li>
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Quick Shop" data-toggle="modal"
                                                            data-target="#productQuick" href="#"><i
                                                                class="fal fa-search-plus"></i></a></li>
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Wishlist" href="#"><i
                                                                class="fal fa-heart"></i></a></li>
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Compare" href="#"><i
                                                                class="fal fa-repeat-alt"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content d-flex justify-content-between">
                                                <div class="product-title">
                                                    <h4 class="title"><a href="product-simple-01.html">'.$fabric_name.'</a>
                                                    </h4>
                                                </div>
                                                <div class="product-price">
                                                    <!-- <span class="regular-price">£250.00</span> -->
                                                    <span class="sale-price"><i class="fa fa-rupee"></i> '.$price.'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
   
        }
        
    }


   $query = $db->prepare("SELECT * FROM emb_fabric ORDER BY id DESC LIMIT 4");
    $query->execute();
    $response = $query->get_result();
    if($response ->num_rows != 0)
    {
    while($data = $response->fetch_assoc())
         {
            $fabric_type = $data['fabric_type'];
            $fabric_name = $data['fabric_name'];
            $design_no = $data['design_no'];
            $price = $data['price'];

             $img_path = scandir(getcwd()."/../new-admin/php/uploadFiles/".$fabric_type."/".$fabric_name."/".$design_no."/");
$img = "";
    for($i=0; $i<count($img_path); $i++)
    {
        if(filetype("../new-admin/php/uploadFiles/".$fabric_type."/".$fabric_name."/".$design_no."/".$img_path[$i]) == "file")
        {
            $img = $img_path[$i];
        }
    }
    //echo '<img src="../new-admin/php/uploadFiles/'.$fabric_type.'/'.$fabric_name.'/'.$design_no.'/'.$img.'" width="300" height="300">';
    echo '                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="single-product mt-50">
                                            <div class="product-image">
                                                <div class="image">
                                                    <img class="product-1" src="../new-admin/php/uploadFiles/'.$fabric_type.'/'.$fabric_name.'/'.$design_no.'/'.$img.'" width="230" height="280" alt="product" class="product-img">
                                                   
                                                    <a class="link" href="php/product-sample.php?design_no='.$design_no.'&img='.$img.'"></a>
                                                </div>
                                                <ul class="product-meta text-center">
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Cart" href="#"><i
                                                                class="fal fa-Shopping-cart"></i></a></li>
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Quick Shop" data-toggle="modal"
                                                            data-target="#productQuick" href="#"><i
                                                                class="fal fa-search-plus"></i></a></li>
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Wishlist" href="#"><i
                                                                class="fal fa-heart"></i></a></li>
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Compare" href="#"><i
                                                                class="fal fa-repeat-alt"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content d-flex justify-content-between">
                                                <div class="product-title">
                                                    <h4 class="title"><a href="product-simple-01.html">'.$fabric_name.'</a>
                                                    </h4>
                                                </div>
                                                <div class="product-price">
                                                    <span class="regular-price">£250.00</span>
                                                    <span class="sale-price"><i class="fa fa-rupee"></i> '.$price.'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
   
        }
        }
    


   $query = $db->prepare("SELECT * FROM imp_fabric ORDER BY id DESC LIMIT 4");
    $query->execute();
    $response = $query->get_result();
    if($response ->num_rows != 0)
    {
    while($data = $response->fetch_assoc())
         {
            $fabric_type = $data['fabric_type'];
            $fabric_name = $data['fabric_name'];
            $design_no = $data['design_no'];
            $price = $data['price'];

             $img_path = scandir(getcwd()."/../new-admin/php/uploadFiles/".$fabric_type."/".$fabric_name."/".$design_no."/");
$img = "";
    for($i=0; $i<count($img_path); $i++)
    {
        if(filetype("../new-admin/php/uploadFiles/".$fabric_type."/".$fabric_name."/".$design_no."/".$img_path[$i]) == "file")
        {
            $img = $img_path[$i];
        }
    }
    //echo '<img src="../new-admin/php/uploadFiles/'.$fabric_type.'/'.$fabric_name.'/'.$design_no.'/'.$img.'" width="300" height="300">';
    echo '                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="single-product mt-50">
                                            <div class="product-image">
                                                <div class="image">
                                                    <img class="product-1" src="../new-admin/php/uploadFiles/'.$fabric_type.'/'.$fabric_name.'/'.$design_no.'/'.$img.'" width="230" height="280" alt="product" class="product-img">
                                                   
                                                   <a class="link" href="php/product-sample.php?design_no='.$design_no.'&img='.$img.'"></a>
                                                </div>
                                                <ul class="product-meta text-center">
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Cart" href="#"><i
                                                                class="fal fa-Shopping-cart"></i></a></li>
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Quick Shop" data-toggle="modal"
                                                            data-target="#productQuick" href="#"><i
                                                                class="fal fa-search-plus"></i></a></li>
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Wishlist" href="#"><i
                                                                class="fal fa-heart"></i></a></li>
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Compare" href="#"><i
                                                                class="fal fa-repeat-alt"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content d-flex justify-content-between">
                                                <div class="product-title">
                                                    <h4 class="title"><a href="product-simple-01.html">'.$fabric_name.'</a>
                                                    </h4>
                                                </div>
                                                <div class="product-price">
                                                    <span class="regular-price">£250.00</span>
                                                    <span class="sale-price">£200.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
   
        }
        }
    

   $query = $db->prepare("SELECT * FROM vel_fabric ORDER BY id DESC LIMIT 4");
    $query->execute();
    $response = $query->get_result();
    if($response ->num_rows != 0)
    {
    while($data = $response->fetch_assoc())
         {
            $fabric_type = $data['fabric_type'];
            $fabric_name = $data['fabric_name'];
            $design_no = $data['design_no'];
            $price = $data['price'];

             $img_path = scandir(getcwd()."/../new-admin/php/uploadFiles/".$fabric_type."/".$fabric_name."/".$design_no."/");
$img = "";
    for($i=0; $i<count($img_path); $i++)
    {
        if(filetype("../new-admin/php/uploadFiles/".$fabric_type."/".$fabric_name."/".$design_no."/".$img_path[$i]) == "file")
        {
            $img = $img_path[$i];
        }
    }
    //echo '<img src="../new-admin/php/uploadFiles/'.$fabric_type.'/'.$fabric_name.'/'.$design_no.'/'.$img.'" width="300" height="300">';
    echo '                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="single-product mt-50">
                                            <div class="product-image">
                                                <div class="image">
                                                    <img class="product-1" src="../new-admin/php/uploadFiles/'.$fabric_type.'/'.$fabric_name.'/'.$design_no.'/'.$img.'" width="230" height="280" alt="product" class="product-img">
                                                   
                                                    <a class="link" href="php/product-sample.php?design_no='.$design_no.'&img='.$img.'"></a>
                                                </div>
                                                <ul class="product-meta text-center">
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Cart" href="#"><i
                                                                class="fal fa-Shopping-cart"></i></a></li>
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Quick Shop" data-toggle="modal"
                                                            data-target="#productQuick" href="#"><i
                                                                class="fal fa-search-plus"></i></a></li>
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Wishlist" href="#"><i
                                                                class="fal fa-heart"></i></a></li>
                                                    <li><a data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Compare" href="#"><i
                                                                class="fal fa-repeat-alt"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-content d-flex justify-content-between">
                                                <div class="product-title">
                                                    <h4 class="title"><a href="product-simple-01.html">'.$fabric_name.'</a>
                                                    </h4>
                                                </div>
                                                <div class="product-price">
                                                    <span class="regular-price">£250.00</span>
                                                    <span class="sale-price">£200.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
   
        }
        }
    

echo '
                            </div>
                        </div>
                        <div class=" tab-pane fade " id=" woman ">
                            <div class=" row ">
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-1.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-2.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Basic Contrasting T-Shirt</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-25.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-26.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Biker Jacket</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£250.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-31.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Oversized Check Dress</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-7.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Polyamide Dress With Long Sleeves</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-32.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Ribbed High Neck Sweater</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-28.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                            <span class=" discount ">40%</span>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Shirt Dress With Pockets</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" regular-price ">£250.00</span>
                                                <span class=" sale-price ">£200.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-19.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-20.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">The Skinny Jeans n Dusty Grey</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-5.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-6.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">The Skinny Sioux Shaper Jeans</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" tab-pane fade " id=" man ">
                            <div class=" row ">
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-3.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-4.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                            <span class=" discount ">40%</span>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Basic Contrasting T-Shirt</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" regular-price ">£250.00</span>
                                                <span class=" sale-price ">£200.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-9.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-10.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Biker Jacket</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£250.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-23.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Oversized Check Dress</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-24.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Polyamide Dress With Long Sleeves</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-17.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-18.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Ribbed High Neck Sweater</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-29.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-30.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Shirt Dress With Pockets</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-4.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-4.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">The Skinny Jeans n Dusty Grey</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-9.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-10.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">The Skinny Sioux Shaper Jeans</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" tab-pane fade " id=" kids ">
                            <div class=" row ">
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-7.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-8.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                            <span class=" discount ">40%</span>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Basic Contrasting T-Shirt</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" regular-price ">£250.00</span>
                                                <span class=" sale-price ">£200.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-9.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-10.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Biker Jacket</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£250.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-21.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-22.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Oversized Check Dress</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-md-4 col-sm-6 ">
                                    <div class=" single-product mt-50 ">
                                        <div class=" product-image ">
                                            <div class=" image ">
                                                <img class=" product-1 " src=" images/product/product-23.jpg " alt="
                                                        product ">
                                                <img class=" product-2 " src=" images/product/product-24.jpg " alt="
                                                        product ">
                                                <a class=" link " href=" product-simple-01.html "></a>
                                            </div>
                                            <ul class=" product-meta text-center ">
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Cart " href=" # "><i class=" fal fa-Shopping-cart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Quick
                                                        Shop " data-toggle=" modal " data-target="
                                                        #productQuick " href=" # "><i class=" fal fa-search-plus "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " href=" # "><i class=" fal fa-heart "></i></a></li>
                                                <li><a data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " href=" # "><i class=" fal fa-repeat-alt "></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product-content d-flex justify-content-between ">
                                            <div class=" product-title ">
                                                <h4 class=" title "><a href=" product-simple-01.html ">Polyamide Dress With Long Sleeves</a></h4>
                                            </div>
                                            <div class=" product-price ">
                                                <span class=" price ">£150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--====== Product Ends ======-->

            <!--====== Top Collections Start ======-->

            <section class=" top-collections pt-130 pb-125 ">
                <div class=" container ">
                    <div class=" row justify-content-center ">
                        <div class=" col-lg-8 ">
                            <div class=" section-title section-title-2 text-center pb-55 ">
                                <h2 class=" title ">TOP COLLECTIONS</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" container-fluid custom-container-2 ">
                    <div class=" top-collections-wrapper flex-wrap ">
                        <div class=" collections-col-1 ">
                            <div class=" single-collections mt-10 ">
                                <a href=" shop-sidebar.html ">
                                    <img src=" img/6.jpg " alt=" ">

                                    <div class=" collections-content ">
                                        <h6 class=" title ">THE SKINNY JEAN</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class=" collections-col-1 ">
                            <div class=" single-collections mt-10 ">
                                <a href=" shop-sidebar.html ">
                                    <img src=" img/5.jpg " alt=" ">

                                    <div class=" collections-content ">
                                        <h6 class=" title ">THE SKINNY JEAN</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class=" collections-col-1 ">
                            <div class=" single-collections mt-10 ">
                                <a href=" # ">
                                    <img src=" img/4.jpg " alt=" ">

                                    <div class=" collections-content ">
                                        <h6 class=" title ">THE SKINNY JEAN</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=" top-collections-wrapper flex-wrap ">
                        <div class=" collections-col-2 ">
                            <div class=" single-collections mt-10 ">
                                <a href=" shop-sidebar.html ">
                                    <img src=" img/3.jpg " alt=" ">

                                    <div class=" collections-content ">
                                        <h6 class=" title ">THE SKINNY JEAN</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class=" collections-col-1 ">
                            <div class=" single-collections mt-10 ">
                                <a href=" shop-sidebar.html ">
                                    <img src=" img/2.jpg " alt=" ">

                                    <div class=" collections-content ">
                                        <h6 class=" title ">THE SKINNY JEAN</h6>
                                    </div>
                                </a>
                            </div>
                            <div class=" single-collections mt-10 ">
                                <a href=" shop-sidebar.html ">
                                    <img src=" img/1.jpg " alt=" ">

                                    <div class=" collections-content ">
                                        <h6 class=" title ">THE SKINNY JEAN</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--====== Top Collections Ends ======-->

            <!--====== Testimonial Start ======-->

            <div class=" testimonial-area bg_cover " style=" background-image: url(img/bg-main-1\ \(1\).jpg); ">
                <!-- <div class=" container ">
                    <div class=" row testimonial-active ">
                        <div class=" col-lg-12 ">
                            <div class=" single-testimonial text-center ">
                                <p>" Sed auctor eros eu metus dignissim porta. Praesent pulvinar nisi at egestas "</p>
                                <div class=" testimonial-name ">
                                    <span class=" name ">Jon Snow</span>
                                    <span class=" designation ">CEO LADA</span>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-12 ">
                            <div class=" single-testimonial text-center ">
                                <p>" Praesent pulvinar nisi at egestas. Sed auctor eros eu metus dignissim porta "</p>
                                <div class=" testimonial-name ">
                                    <span class=" name ">Jon Snow</span>
                                    <span class=" designation ">CEO LADA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            <!--====== Testimonial Ends ======-->

            <!--====== Blog Start ======-->

            <section class=" blog-area pt-75 pb-60 ">
                <div class=" container ">
                    <div class=" row justify-content-center ">
                        <div class=" col-lg-8 ">
                            <div class=" section-title section-title-2 text-center pb-30 ">
                                <h2 class=" title ">LATEST BLOG</h2>
                            </div>
                        </div>
                    </div>
                    <div class=" row blog-active ">
                        <div class=" col-lg-4 col-md-6 ">
                            <div class=" single-blog mt-30 ">
                                <div class=" blog-image ">
                                    <a href=" blog-details.html ">
                                        <img src=" img/1.jpg " alt=" blog ">
                                        <i class=" fal fa-search-plus "></i>
                                    </a>
                                </div>
                                <div class=" blog-content ">
                                    <ul class=" blog-category ">
                                        <li><a href=" # ">Style</a></li>
                                    </ul>
                                    <h4 class=" title "><a href=" blog-details.html ">Nicholas K Spring 2020 Runway</a></h4>
                                    <ul class=" blog-meta ">
                                        <li><a href=" # ">By <span> Jon Smith</span></a></li>
                                        <li><a href=" # "><i class=" fal fa-clock "></i> June 15, 2020</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-4 col-md-6 ">
                            <div class=" single-blog mt-30 ">
                                <div class=" blog-image ">
                                    <a href=" blog-details.html ">
                                        <img src=" img/4.jpeg " alt=" blog ">
                                        <i class=" fal fa-search-plus "></i>
                                    </a>
                                </div>
                                <div class=" blog-content ">
                                    <ul class=" blog-category ">
                                        <li><a href=" # ">Style</a></li>
                                    </ul>
                                    <h4 class=" title "><a href=" blog-details.html ">Nicholas K Spring 2020 Runway</a></h4>
                                    <ul class=" blog-meta ">
                                        <li><a href=" # ">By <span> Jon Smith</span></a></li>
                                        <li><a href=" # "><i class=" fal fa-clock "></i> June 15, 2020</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-4 col-md-6 ">
                            <div class=" single-blog mt-30 ">
                                <div class=" blog-image ">
                                    <a href=" blog-details.html ">
                                        <img src=" img/1.jpg " alt=" blog ">
                                        <i class=" fal fa-search-plus "></i>
                                    </a>
                                </div>
                                <div class=" blog-content ">
                                    <ul class=" blog-category ">
                                        <li><a href=" # ">Style</a></li>
                                    </ul>
                                    <h4 class=" title "><a href=" blog-details.html ">Nicholas K Spring 2020 Runway</a></h4>
                                    <ul class=" blog-meta ">
                                        <li><a href=" # ">By <span> Jon Smith</span></a></li>
                                        <li><a href=" # "><i class=" fal fa-clock "></i> June 15, 2020</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--====== Blog Ends ======-->

            <!--====== Newsletter Start ======-->

            <!-- <section class=" newsletter-area-2 ">
                <div class=" newsletter-wrapper bg_cover pt-85 pb-90 " style=" background-image:
                                                        url(img/bg-main-5.jpg); ">
                    <div class=" newsletter-row ">
                        <div class=" newsletter-content-2 text-center ">
                            <h3 class=" title ">Join our newsletter save 10% off</h3>
                            <p>Cras imperdiet mi ac varius facilisis. Maecenas pellentesque quam et quam <br> blandit, vitae laoreet nunc euismod.</p>
                        </div>
                        <div class=" newsletter-form-2 ">
                            <form action=" # ">
                                <input type=" text " placeholder=" Email ">
                                <button class=" main-btn ">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section> -->

            <!--====== Newsletter Ends ======-->


            <!--====== Brand Logo Ends ======-->

            <!--====== Footer Start ======-->

            <footer class=" footer-area bg_cover pt-20 pb-35 ">
                <div class=" footer-widget ">
                    <div class=" container-fluid custom-container ">
                        <div class=" row justify-content-center ">
                            <div class=" col-lg-12 ">
                                <div class=" footer-logo-copyright logo-1 text-center mt-30 ">
                                    <a href=" index.html ">
                                        <img src=" img/Logos/White-Logo.png " alt=" Logo ">
                                    </a>
                                </div>
                                <div class=" footer-menu text-center mt-30 ">
                                    <ul class=" menu ">
                                        <li><a href=" index.html ">Home</a></li>
                                        <li><a href=" shop-sidebar.html ">Fabrics</a></li>
                                        <li><a href=" lookbook.html ">About Us</a></li>
                                        <li><a href=" blog-sidebar.html ">Blog</a></li>
                                        <li><a href=" contact.html ">Contact</a></li>
                                    </ul>
                                </div>
                                <div class=" footer-logo-copyright text-center ">
                                    <p>&copy; Copyright 2020 <a href=" https://stickmanservices.com/ ">Stickman Services</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!--====== Footer Ends ======-->

        </div>

    </main>

    <!--====== BACK TOP TOP PART START ======-->

    <a href=" # " class=" back-to-top "><i class=" fal fa-chevron-up "></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Product Quick View Start ======-->

    <div class=" modal fade " id=" productQuick ">
        <div class=" modal-dialog modal-dialog-centered ">
            <div class=" modal-content ">
                <div class=" modal-header ">
                    <button type=" button " class=" close " data-dismiss=" modal " aria-label=" Close "><i class=" fal
                                                        fa-times "></i></button>
                </div>

                <div class=" product-quick-view ">
                    <div class=" row ">
                        <div class=" col-md-6 ">
                            <div class=" quick-view-image ">
                                <div class=" quick-view-thumb ">
                                    <div class=" quick-thumb-active ">
                                        <div class=" single-quick-thumb ">
                                            <img src=" images/product/product-37.jpg " alt=" ">
                                        </div>
                                        <div class=" single-quick-thumb ">
                                            <img src=" images/product/product-38.jpg " alt=" ">
                                        </div>
                                        <div class=" single-quick-thumb ">
                                            <img src=" images/product/product-27.jpg " alt=" ">
                                        </div>
                                        <div class=" single-quick-thumb ">
                                            <img src=" images/product/product-28.jpg " alt=" ">
                                        </div>
                                    </div>
                                </div>
                                <div class=" quick-view-preview ">
                                    <div class=" quick-preview-active ">
                                        <div class=" single-quick-preview ">
                                            <img src=" images/product/product-37.jpg " alt=" ">
                                        </div>
                                        <div class=" single-quick-preview ">
                                            <img src=" images/product/product-38.jpg " alt=" ">
                                        </div>
                                        <div class=" single-quick-preview ">
                                            <img src=" images/product/product-27.jpg " alt=" ">
                                        </div>
                                        <div class=" single-quick-preview ">
                                            <img src=" images/product/product-28.jpg " alt=" ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-6 ">
                            <div class=" quick-view-content ">
                                <h4 class=" title ">Oversized Check Dress</h4>
                                <span class=" sku-id ">REF. 1104693 - TOMY</span>

                                <div class=" quick-price ">
                                    <span class=" regular-price ">£250.00</span>
                                    <span class=" sale-price ">£200.00</span>
                                </div>
                                <div class=" quick-quantity-cart-wishlist-compare flex-wrap ">
                                    <form action=" # ">
                                        <div class=" quick-quantity d-flex ">
                                            <button type=" button " class=" sub "><i class=" fal fa-minus "></i></button>
                                            <input type=" text " value=" 1 " />
                                            <button type=" button " class=" add "><i class=" fal fa-plus "></i></button>
                                        </div>
                                        <div class=" quick-cart ">
                                            <button class=" main-btn ">Add to Cart</button>
                                        </div>
                                    </form>
                                    <a href=" # " data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Wishlist " class=" quick-wishlist "><i class=" fal fa-heart "></i></a>
                                    <a href=" # " data-tooltip=" tooltip " data-placement=" top " title=" Add to
                                                        Compare " class=" quick-compare "><i class=" fal fa-repeat-alt "></i></a>
                                </div>
                                <div class=" quick-description ">
                                    <p>Sed vitae eros a quam malesuada porttitor nec nec orci. Ut lacus augue, bibendum at tristique at, ornare eget quam. Donec volutpat ut nibh id sagittis. Morbi fringilla ac libero in consequat.</p>
                                </div>
                                <div class=" quick-share ">
                                    <ul class=" social ">
                                        <li><a href=" # "><i class=" fab fa-facebook-f "></i></a></li>
                                        <li><a href=" # "><i class=" fab fa-twitter "></i></a></li>
                                        <li><a href=" # "><i class=" fab fa-linkedin "></i></a></li>
                                        <li><a href=" # "><i class=" fab fa-pinterest-p "></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== Product Quick View Ends ======-->

    <!--====== Overlay Start ======-->

    <div class=" overlay "></div>

    <!--====== Overlay Ends ======-->




    <!--====== Jquery js ======-->
    <script src=" js/vendor/jquery-3.5.1.min.js "></script>
    <script src=" js/vendor/modernizr-3.7.1.min.js "></script>

    <!--====== All Plugins js ======-->
    <!-- <script src=" js/plugins/jquery-ui.min.js "></script>
    <script src=" js/plugins/popper.min.js "></script>
    <script src=" js/plugins/bootstrap.min.js "></script>
    <script src=" js/plugins/slick.min.js "></script>
    <script src=" js/plugins/modernizr.custom.js "></script>
    <script src=" js/plugins/jquery.dlmenu.js "></script>
    <script src=" js/plugins/jquery.paroller.min.js "></script>
    <script src=" js/plugins/jquery.magnific-popup.min.js "></script>
    <script src=" js/plugins/jquery.countdown.min.js "></script>
    <script src=" js/plugins/select2.min.js "></script>
    <script src=" js/plugins/photoswipe.min.js "></script>
    <script src=" js/plugins/photoswipe-ui-default.min.js "></script>
    <script src=" js/plugins/jquery.elevateZoom.min.js "></script>
    <script src=" js/plugins/masonry.pkgd.min.js "></script>
    <script src=" js/plugins/jquery.appear.min.js "></script>
    <script src=" js/plugins/jquery.sticky-sidebar.min.js "></script>
    <script src=" js/plugins/imagesloaded.pkgd.min.js "></script>
    <script src=" js/plugins/ajax-contact.js "></script> -->


    <!-- <script src=" js/plugins/parallax.min.js "></script> -->

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <script src=" js/plugins.min.js "></script>


    <!--====== Main Activation  js ======-->
    <script src=" js/main.js "></script>

    <!--====== Google Map js ======-->
    <script src=" https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54 "></script>
    <script src=" js/map-script.js "></script>

<script src="../js/product_sample.js"></script>

<script type=" text/javascript" src="js/script.js"></script>
    </body>

</html>
    ';
}
else{
    echo '<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from live.hasthemes.com/html/13/zyra-preview/zyra/product-simple-04.html by HTTrack Website Copier/3.x [XR&CO"2014], Mon, 20 Jul 2020 20:21:01 GMT -->

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Tecido</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->


<!--   

    <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="shortcut icon" href="img/Logos/White-Logo.png" type="image/png" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>

    <!-- Start Loader  -->

    <div class="loader-con">
        <div class="loader"></div>
    </div>

    <!-- End Loader -->

    <!--====== Header Start ======-->

    <header class="header-area">

        <div class="header-navbar">
            <div class="container-fluid custom-container">
                <div class="header-wrapper d-flex justify-content-between align-items-center">

                    <div class="header-logo">
                        <a href="index.html">
                            <img src="assets/img/Logos/color-logo.png" alt="Logo">
                        </a>
                    </div>

                    <div class="header-menu site-nav d-none d-lg-block">
                        <ul class="main-menu">
                            <li class="static active">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="static">
                                <a href="#">Fabric</a>
                                <!-- <ul class="sub-menu sub-mega-menu flex-wrap"> -->
                                    <ul class="sub-menu sub-mega-menu" style="width: 800px;top:110px;left: 25%;padding: 10px">
                                        <li style="width: 25%;">
                                            <ul class="sub-mega-item">
                                                <li style="margin: 10px 10px;">
                                                    <a class="menu-image" href="product.html">
                                                        <img src="img/product-1.jpg" alt="Menu" height="50%">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li style="width: 25%;">
                                            <ul class="sub-mega-item">
                                                <li style="margin: 10px 10px;">
                                                    <a class="menu-image" href="product.html">
                                                        <img src="img/product-2.jpg" alt="Menu" height="50%">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li style="width: 25%;">
                                            <ul class="sub-mega-item">
                                                <li style="margin: 10px 10px;">
                                                    <a class="menu-image" href="product.html">
                                                        <img src="img/product-4.jpg" alt="Menu" height="50%">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li style="width: 25%;">
                                            <ul class="sub-mega-item">
                                                <li style="margin: 10px 10px;">
                                                    <a class="menu-image" href="product.html">
                                                        <img src="img/product-8.jpg" alt="Menu" height="50%">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                <!-- </ul> -->
                            </li>
                            <li>
                                <a href="about.html">About Us</a>

                            </li>

                            <li>
                                <a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">Blog Layout <i class="fal fa-chevron-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                            <li><a href="blog-grid-01.html">Blog Grid 01</a></li>
                                            <li><a href="blog-grid-02.html">Blog Grid 02</a></li>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>

                    <div class="header-meta">
                        <ul class="meta">
                            <li>
                                <a href="login.html"><i class="fas fa-Shopping-cart"></i> Cart</a>
                            </li>/
                            <li><a href="register.html"><i class="far fa-Shopping-bag"></i> Sales</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div id="dl-menu" class="dl-menuwrapper d-lg-none">
                <button class="dl-trigger"></button>

                <ul class="dl-menu">
                    <li>
                        <a href="login.html"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                    <li><a href="register.html"><i class="far fa-user-circle"></i> Register</a></li>

                    <li>
                        <a href="index.html">Home</a>
                        <ul class="dl-submenu">
                            <li>
                                <a href="#">Column #1</a>
                                <ul class="dl-submenu">
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                    <li><a href="index-3.html">Home 03</a></li>
                                    <li><a href="index-4.html">Home 04</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Column #2</a>
                                <ul class="dl-submenu">
                                    <li><a href="index-5.html">Home 05</a></li>
                                    <li><a href="index.html">Home 06</a></li>
                                    <li><a href="index-7.html">Home 07</a></li>
                                    <li><a href="index-8.html">Home 08</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Column #3</a>
                                <ul class="dl-submenu">
                                    <li><a href="index-9.html">Home 09</a></li>
                                    <li><a href="index-10.html">Home 10</a></li>
                                    <li><a href="index-11.html">Home 11</a></li>
                                    <li><a href="index-12.html">Home 12</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Column #4</a>
                                <ul class="dl-submenu">
                                    <li><a href="index-13.html">Home 13</a></li>
                                    <li><a href="index-14.html">Home 14</a></li>
                                    <li><a href="index-15.html">Home 15</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="shop.html">Fabrics</a>
                        <ul class="dl-submenu">
                            <li>
                                <a href="shop.html">Plain Fabric</a>
                                <ul class="dl-submenu">
                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                    <li><a href="shop-metro.html">Shop Metro</a></li>
                                    <li><a href="shop-masonry.html">Shop Masonry</a></li>
                                    <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                    <li><a href="lookbook.html">Look Book</a></li>
                                    <li><a href="collections.html">Collections</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="product.html">Worked Fabric</a>
                                <ul class="dl-submenu">
                                    <li><a href="product-simple-01.html">Product Simple 01</a></li>
                                    <li><a href="product-simple-02.html">Product Simple 02</a></li>
                                    <li><a href="product-simple-03.html">Product Simple 03</a></li>
                                    <li><a href="product-simple-04.html">Product Simple 04</a></li>
                                    <li><a href="product-grouped.html">Product Grouped</a></li>
                                    <li><a href="product-affiliate.html">Product Affiliate</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="about.html">About Us</a>

                    </li>

                    <li>
                        <a href="blog.html">Blog</a>
                        <ul class="dl-submenu">
                            <li>
                                <a href="blog.html">Blog Layout</a>
                                <ul class="dl-submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-grid-01.html">Blog Grid 01</a></li>
                                    <li><a href="blog-grid-02.html">Blog Grid 02</a></li>
                                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                </ul>
                            </li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>

    </header>

    <!--====== Header Ends ======-->

    <!--====== Search Start ======-->


    <!--====== Search Ends ======-->

    <!--====== Off Canvas Cart Start ======-->


    <!--====== Off Canvas Cart Ends ======-->

    <!--====== Off Canvas Sidebar Start ======-->

    
    <!--====== Page Banner Start ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-4.jpg);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">404</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item active">The page you are trying is not found. Go BACK ...</li>
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                </ol>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Related Products Start ======-->


    <!--====== Related Products Ends ======-->

    <!--====== Footer Start ======-->

    <footer class="footer-area pt-50 pb-55">
        <div class="footer-widget">
            <div class="container footer-container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-logo-copyright mt-30">
                            <a href="index.html">
                                <img src="assets/img/Logos/White-Logo.png" width="40%" alt="Logo">
                            </a>
                            <p>&copy; Copyright 2020 <a href="https://stickmanservices.com/">Stickman Services</a></p>
                        </div>
                        <div class="footer-social mt-30">
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-link-wrapper flex-wrap">
                            <div class="footer-link mt-30">
                                <h5 class="footer-title">Useful Link</h5>
                                <ul class="link">
                                    <li><a href="#">Help & Contact</a></li>
                                    <li><a href="#">Returns & Refunds</a></li>
                                    <li><a href="#">Online Stores</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                            <div class="footer-link mt-30">
                                <h5 class="footer-title">Company</h5>
                                <ul class="link">
                                    <li><a href="about-01.html">About Us</a></li>
                                    <li><a href="our-services.html">Our Service</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                            <div class="footer-link mt-30">
                                <h5 class="footer-title">Profile</h5>
                                <ul class="link">
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="order-tracking.html">order Tracking</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-map mt-30">
                            <div id="contact-map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--====== Footer Ends ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Product Quick View Start ======-->

    <div class="modal fade" id="productQuick">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fal fa-times"></i></button>
                </div>

                <div class="product-quick-view">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="quick-view-image">
                                <div class="quick-view-thumb">
                                    <div class="quick-thumb-active">
                                        <div class="single-quick-thumb">
                                            <img src="assets/images/product/product-37.jpg" alt="">
                                        </div>
                                        <div class="single-quick-thumb">
                                            <img src="assets/images/product/product-38.jpg" alt="">
                                        </div>
                                        <div class="single-quick-thumb">
                                            <img src="assets/images/product/product-27.jpg" alt="">
                                        </div>
                                        <div class="single-quick-thumb">
                                            <img src="assets/images/product/product-28.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-preview">
                                    <div class="quick-preview-active">
                                        <div class="single-quick-preview">
                                            <img src="assets/images/product/product-37.jpg" alt="">
                                        </div>
                                        <div class="single-quick-preview">
                                            <img src="assets/images/product/product-38.jpg" alt="">
                                        </div>
                                        <div class="single-quick-preview">
                                            <img src="assets/images/product/product-27.jpg" alt="">
                                        </div>
                                        <div class="single-quick-preview">
                                            <img src="assets/images/product/product-28.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="quick-view-content">
                                <h4 class="title">Oversized Check Dress</h4>
                                <span class="sku-id">REF. 1104693 - TOMY</span>

                                <div class="quick-price">
                                    <span class="regular-price">£250.00</span>
                                    <span class="sale-price">£200.00</span>
                                </div>
                                <div class="quick-quantity-cart-wishlist-compare flex-wrap">
                                    <form action="#">
                                        <div class="quick-quantity d-flex">
                                            <button type="button" class="sub"><i class="fal fa-minus"></i></button>
                                            <input type="text" value="1" />
                                            <button type="button" class="add"><i class="fal fa-plus"></i></button>
                                        </div>
                                        <div class="quick-cart">
                                            <button class="main-btn">Add to Cart</button>
                                        </div>
                                    </form>
                                    <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" class="quick-wishlist"><i class="fal fa-heart"></i></a>
                                    <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Compare" class="quick-compare"><i class="fal fa-repeat-alt"></i></a>
                                </div>
                                <div class="quick-description">
                                    <p>Sed vitae eros a quam malesuada porttitor nec nec orci. Ut lacus augue, bibendum at tristique at, ornare eget quam. Donec volutpat ut nibh id sagittis. Morbi fringilla ac libero in consequat.</p>
                                </div>
                                <div class="quick-share">
                                    <ul class="social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== Product Quick View Ends ======-->

    <!--====== Photo Swipe Start ======-->

    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="pswp__bg"></div>

        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>
        </div>
    </div>

    <!--====== Photo Swipe Ends ======-->

    <!--====== Overlay Start ======-->

    <div class="overlay"></div>

    <!--====== Overlay Ends ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== All Plugins js ======-->
    <!-- <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/modernizr.custom.js"></script>
    <script src="assets/js/plugins/jquery.dlmenu.js"></script>
    <script src="assets/js/plugins/jquery.paroller.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/photoswipe.min.js"></script>
    <script src="assets/js/plugins/photoswipe-ui-default.min.js"></script>
    <script src="assets/js/plugins/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/plugins/masonry.pkgd.min.js"></script>
    <script src="assets/js/plugins/jquery.appear.min.js"></script>
    <script src="assets/js/plugins/jquery.sticky-sidebar.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script> -->

    <!-- <script src="assets/js/plugins/parallax.min.js"></script> -->

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <script src="assets/js/plugins.min.js"></script>


    <!--====== Main Activation  js ======-->
    <script src="assets/js/main.js"></script>

    <!--====== Google Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>
    <script src="assets/js/map-script.js"></script>

</body>


<!-- Mirrored from live.hasthemes.com/html/13/zyra-preview/zyra/product-affiliate.html by HTTrack Website Copier/3.x [XR&CO"2014], Mon, 20 Jul 2020 20:21:01 GMT -->

</html>';
}

?>