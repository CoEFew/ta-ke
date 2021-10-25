<?php

require __DIR__ . "/../../../public/config.php";

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Main</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->


    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <style>
        body {
            /*background-image: url('img/ไผ่2.png');*/
            background-size: cover;
            background-repeat: no-repeat;

        }

        #modal_box4 .requiredmenu label {
            display: block;
        }
    </style>
</head>

<body>
    <div class="off_canvars_overlay">

    </div>
    <!-- Header ================================================== -->
    <header style="padding-bottom:5px !important;">
        <div class="header_bottom sticky-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                        <img src="img-take/Logo-Harajuku.png" width="50" alt="" data-retina="true" class="hidden-xs">

                        <a href="{{url('index')}}" id="logo">
                            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close hidden-lg hidden-md hidden-sm" href="javascript:void(0);"><span>Menu mobile</span></a>

                        </a>
                    </div>
                    <nav class="col-lg-8 col-md-8 col-sm-6 col-xs-5">

                        <img src="img-take/Logo-Harajuku.png" width="45" height="23" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm" style="float: right;">

                        <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close hidden-xs" href="javascript:void(0);"><span>Menu mobile</span></a>
                        <div class="main-menu main-menu2">
                            <div id="header_menu">
                                <img src="img/Logo-Harajuku.png" width="45" height="23" alt="" data-retina="true">
                                <a href="#" class="open_close" id="close_in"><i class="icon_close hidden-lg"></i></a>

                            </div>
                            <ul>

                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">สั่งอาหาร<i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="{{url('delivery')}}">รวมร้านอาหารทั้งหมด</a></li>
                                        <li><a href="{{url('allfoods')}}">รวมอาหารทั้งหมด</a></li>
                                        <li><a href="{{url('promotion_food')}}">โปรโมชั่นอาหาร</a></li>


                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">ช้อปปิ้ง<i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="{{url('menu-list2')}}">รวมสินค้าทั้งหมด</a></li>
                                        <li><a href="{{url('promotion_item')}}">โปรโมชั่น</a></li>


                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">โปรโมชั่น<i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="{{url('promotion_food')}}">โปรโมชันอาหาร</a></li>
                                        <li><a href="{{url('promotion_item')}}">โปรโมชันสินค้า</a></li>


                                    </ul>
                                </li>

                                <li><a href="{{url('event')}}">กิจกรรม</a></li>
                                <li><a href="{{url('contact')}}">ติดต่อเรา</a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">ร่วมเป็นส่วนหนึ่งกับเรา<i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="{{url('regis_vendor')}}">สมัครเปิดร้านอาหาร</a></li>
                                        <li><a href="{{url('register_index_rider')}}">สมัครไรเดอร์</a></li>


                                    </ul>
                                </li>

                            </ul>
                        </div><!-- End main-menu -->
                    </nav>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5">

                        <div class="row align-items-center" id="vendor_icon">


                            <span class="header_account_list homecart  mini_cart_wrapper" style="float:right;">
                                <a href="javascript:void(0)"><span class="lnr lnr-cart"></span><span class="item_count">2</span></a>
                                <!--mini cart-->

                                <!--mini cart end-->
                            </span>
                            <span>

                                <span class="categories_menu " style="width: 25px;">
                                    <div class="categories_title home ">
                                        <h2 class="categori_toggle"><i class="icon ion-ios-contact-outline"></i></h2>
                                    </div>

                                </span>
                            </span>
                            <span class="categories_menu_toggle">
                                <ul>

                                    <li><a href="#">Profile</a></li>
                                    <li><a href="{{url('login')}}">Login/Register</a></li>
                                    <li><a href="#">Login vendor</a></li>
                                    <li><a href="{{url('tracking')}}">ติดตามสถานะ</a></li>


                                </ul>
                            </span>
                            <ul>
                                <li><a href="#"><i class="fas fa-store" style="color: #D01F44; font-size: 18px; display: flex;"></i></a></li>
                            </ul>
                            <span>
                                <span class="language_currency ml-5 mr-5" style="width: 25px;">
                                    <ul>
                                        <li class="language"><a href="#"> <i class="fa fa-globe"></i> <i class="fa fa-sort-down" style="margin-top: -5px;"></i></a>
                                            <ul class="dropdown_language">
                                                <li><a href="#">THAI</a></li>
                                                <li><a href="#">ENGLISH</a></li>
                                                <li><a href="#">CHINESE</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </span>

                            </span>







                        </div>


                    </div>

                </div><!-- End row -->
            </div>

        </div>

    </header>
    <div class="mini_cart">
        <div class="cart_gallery">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>ตะกร้าสินค้า</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="icon-cancel-2"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="img-take/ss1-ยำหมูยอไข่แดงเค็ม.jpg" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">ยำหมูยอไข่เค็ม</a>
                    <p>1 x <span> ฿200 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="icon-cancel-2"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="img-take/ss2-ผัดไท.jpg" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">ผัดไท</a>
                    <p>1 x <span> ฿100 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="icon-cancel-2"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="img-take/sss1-เสื้อเชิ้ต-Linen-blend-Shirt-Slim-Fit.jpg" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">เสื้อเชื้ต</a>
                    <p>1 x <span> ฿600 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="icon-cancel-2"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="img-take/sss2--MARILYN-HANDBAGS.jpg" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">กระเป๋า</a>
                    <p>1 x <span> ฿900 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="icon-cancel-2"></i></a>
                </div>
            </div>
        </div>
        <div class="mini_cart_table">
            <div class="cart_table_border">
                <div class="cart_total">
                    <span>ยอดรวม</span>
                    <span class="price">฿2150</span>
                </div>
                <div class="cart_total mt-10">
                    <span>ยอดรวมทั้งหมด</span>
                    <span class="price">฿2150</span>
                </div>
            </div>
        </div>
        <div class="mini_cart_footer">
            <div class="cart_button">
                <a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i> ดูตะกร้าสินค้า</a>
            </div>
            <div class="cart_button">
                <a href="{{url('checkout_1')}}"><i class="fa fa-sign-in"></i> ชำระเงิน</a>
            </div>

        </div>
    </div>

    <!-- End Header =============================================== -->

    <!-- SubHeader =============================================== -->
    <section class="slider_section color_two mb-lg-50 ">
        <div class="owl-carousel" style="display: block;">
            <!-- slider_area -->
            <div class="single_slider d-flex align-items-center" style="background-image: url(img-take/hero-banner2.jpg);">
                <div id="subheader">
                    <div id="sub_content">
                        <h1 style="display: none;">Order Takeaway or Delivery Food</h1>
                        <p style="display: none;">
                            Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
                        </p>
                        <form method="post" action="list_page')}}">
                            <div id="custom-search-input">
                                <div class="input-group ">
                                    <input id="pac-input" type="text" class=" search-query" placeholder="ระบุชื่อคอนโด บริษัทหรือบ้านเลขที่ ถนน">
                                    <div id="map" style="display:none;"></div>

                                    <span class="input-group-btn">
                                        <input type="submit" class="btn_search" value="submit">
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div><!-- End sub_content -->
                </div><!-- End subheader -->
                <div id="count" class="hidden-xs" style="display: none;">
                    <ul>
                        <li><span class="number">2650</span> Restaurant</li>
                        <li><span class="number">5350</span> People Served</li>
                        <li><span class="number">12350</span> Registered Users</li>
                    </ul>
                </div>
            </div>

        </div>

    </section>
    <!-- End SubHeader ============================================ -->
    <!--slider area end-->
    <div class="product_area product_deals mb-lg-50 mb-xs-5 mt-xs-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">

                        <h2>Top Deal!</h2>
                    </div>
                </div>
            </div>
            <div class="product_container productbg_right_side productbg_right_side ">
                <div class="row">
                    <div class="col-lg-12 col-xs-12">
                        <div class="product_carousel product_column8 owl-carousel">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('topdeal-details')}}"><img src="img-take/t1.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('topdeal-detail')}}"><img src="img-take/t2.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('topdeal-details')}}"><img src="img-take/t3.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('topdeal-details')}}"><img src="img-take/t4.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('topdeal-details')}}"><img src="img-take/t5.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('topdeal-details')}}"><img src="img-take/t6.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('topdeal-details')}}"><img src="img-take/t7.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('topdeal-details')}}"><img src="img-take/t8.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('topdeal-details')}}"><img src="img-take/t9.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('topdeal-details')}}"><img src="img-take/t10.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product_area product_deals">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">

                        <h2>Promotion</h2>
                    </div>
                </div>
            </div>
            <div class="product_container productbg_right_side prohome">
                <div class="row">
                    <div class="col-lg-12 col-xs-12">
                        <div class="product_carousel product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb product_thumb2">
                                        <a class="primary_img" href="{{url('promotion_detail')}}"><img src="img-take/p1.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb product_thumb2">
                                        <a class="primary_img" href="{{url('promotion_detail')}}"><img src="img-take/p6.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb product_thumb2">
                                        <a class="primary_img" href="{{url('promotion_detail')}}"><img src="img-take/p3.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb product_thumb2">
                                        <a class="primary_img" href="{{url('promotion_detail')}}"><img src="img-take/p8.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb product_thumb2">
                                        <a class="primary_img" href="{{url('promotion_detail')}}"><img src="img-take/p5.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb product_thumb2">
                                        <a class="primary_img" href="{{url('promotion_detail')}}"><img src="img-take/p7.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb product_thumb2">
                                        <a class="primary_img" href="{{url('promotion_detail')}}"><img src="img-take/p2.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb product_thumb2">
                                        <a class="primary_img" href="{{url('promotion_detail')}}"><img src="img-take/p4.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb product_thumb2">
                                        <a class="primary_img" href="{{url('promotion_detail')}}"><img src="img-take/p9.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb product_thumb2">
                                        <a class="primary_img" href="{{url('promotion_detail')}}"><img src="img-take/p10.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area start-->
    <div class="shipping_area mb-lg-30 mt-lg-2" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">

                        <h2>How it work</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="single_shipping col_2">

                        <div class="shipping_icone">
                            <img src="img-take/hh1.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>Choose Your Favorite</h3>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="single_shipping col_3">
                        <div class="shipping_icone">
                            <img src="img-take/hh2.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>We Deliver Your Meals</h3>
                            <p>Simply return it within 30 days for an exchange</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="single_shipping col_4">
                        <div class="shipping_icone">
                            <img src="img-take/hh3.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>Eat and Enjoy</h3>
                            <p>We ensure secure payment with PEV</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end-->
    <div class="services_gallery" style="margin-top: 80px; margin-bottom: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">
                        <h2>Let's Shopping</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-4">
                    <article class="single_blog single_blog2 event-take">
                        <figure>
                            <div class="blog_thumb event-take">
                                <a href="{{url('allfoods')}}"> <img src="img-take/iconfood1.png" alt=""></a>
                            </div>
                            <figcaption class="blog_content" style="border-radius: 20px;">
                                <strong>
                                    <h4 class="mb-0">FOODS DELIVERY</h4>
                                </strong>
                                <h4 class="post_title">อาหารอร่อย เลือกได้หลากหลาย
                                    สะดวก ง่าย ปลอดภัย ส่งถึงไว ส่งถึงมือ</h4>

                            </figcaption>
                        </figure>
                    </article>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-4">
                    <article class="single_blog single_blog2 event-take">
                        <figure>
                            <div class="blog_thumb">
                                <a href="{{url('menu-list2')}}"><img src="img-take/iconshop1.png" alt=""></a>
                            </div>
                            <figcaption class="blog_content" style="border-radius: 20px;">
                                <strong>
                                    <h4 class="mb-0">SHOPPING</h4>
                                </strong>
                                <h4 class="post_title">อาหารอร่อย เลือกได้หลากหลาย
                                    สะดวก ง่าย ปลอดภัย ส่งถึงไว ส่งถึงมือ</h4>

                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-4">
                    <article class="single_blog single_blog2 event-take">
                        <figure>
                            <div class="blog_thumb">
                                <a href="{{url('voucher')}}"><img src="img-take/iconvoucher.png" alt=""></a>
                            </div>
                            <figcaption class="blog_content" style="border-radius: 20px;">
                                <strong>
                                    <h4 class="mb-0">VOUCHER</h4>
                                </strong>
                                <h4 class="post_title">สิทธิพิเศษต่าง ๆ ส่วนลดมากมาย ยิ่งซื้อ ยิ่งคุ้ม</h4>

                            </figcaption>
                        </figure>
                    </article>
                </div>

            </div>

        </div>
    </div>
    <!--product area start-->

    <!--product area end-->
    <div class="product_area product_deals mb-40 mt-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">

                        <h2>ร้านอาหารแนะนำ</h2>
                    </div>
                </div>
            </div>
            <div class="product_container productbg_right_side">
                <div class="row">
                    <div class="col-lg-12 col-xs-12">
                        <div class="product_carousel product_column5 owl-carousel">
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('restaurant')}}"><img src="img-take/s1-ก๋วยเตี๋ยวไก่สูตรพิเศษ.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('restaurant')}}"><img src="img-take/s1-ก๋วยเตี๋ยวไก่สูตรพิเศษ.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box6" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7 col-xs-12">
                                                    <span class="product_name"><a href="{{url('product-details')}}">เเม่ศรีเรือน</a></span>

                                                </div>
                                                <div class="col-lg-5 col-xs-12">
                                                    <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7 col-xs-7">
                                                    <span class="placelist">
                                                        <a href="#">TAKE TOWN</a>
                                                    </span>
                                                </div>
                                                <div class="col-lg-5 col-xs-5">
                                                    <i class="icon_star voted pull-right"></i>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="price_box">
                                                        <span>฿55 ~ </span>
                                                        <span>฿100</span>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('restaurant')}}"><img src="img-take/s2-บอนชอน_0.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('restaurant')}}"><img src="img-take/s2-บอนชอน_0.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box5" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">Bonchon</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7 col-xs-7">
                                                    <span class="placelist">
                                                        <a href="#">TAKE TOWN</a>
                                                    </span>
                                                </div>
                                                <div class="col-lg-5 col-xs-5">
                                                    <i class="icon_star voted pull-right"></i>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="price_box">
                                                        <span>฿30 ~ </span>
                                                        <span>฿600</span>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('restaurant')}}"><img src="img-take/s3-pizza-company.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('restaurant')}}"><img src="img-take/s3-pizza-company.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box7" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">The Pizza</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7 col-xs-7">
                                                    <span class="placelist">
                                                        <a href="#">TAKE TOWN</a>
                                                    </span>
                                                </div>
                                                <div class="col-lg-5 col-xs-5">
                                                    <i class="icon_star voted pull-right"></i>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="price_box">
                                                        <span>฿299 ~ </span>
                                                        <span>฿400</span>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('restaurant')}}"><img src="img-take/s-9-โอชายะ.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('restaurant')}}"><img src="img-take/s-9-โอชายะ.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box8" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">Ochaya</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7 col-xs-7">
                                                    <span class="placelist">
                                                        <a href="#">TAKE TOWN</a>
                                                    </span>
                                                </div>
                                                <div class="col-lg-5 col-xs-5">
                                                    <i class="icon_star voted pull-right"></i>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="price_box">
                                                        <span>฿30 ~ </span>
                                                        <span>฿60</span>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('restaurant')}}"><img src="img-take/s-8-ข้าวมันไก่.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('restaurant')}}"><img src="img-take/s-8-ข้าวมันไก่.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">ข้าวมันไก่ ประตูน้ำ</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7 col-xs-7">
                                                    <span class="placelist">
                                                        <a href="#">TAKE TOWN</a>
                                                    </span>
                                                </div>
                                                <div class="col-lg-5 col-xs-5">
                                                    <i class="icon_star voted pull-right"></i>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="price_box">
                                                        <span>฿30 ~ </span>
                                                        <span>฿60</span>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('restaurant')}}"><img src="img-take/s-7-กูโรตีชาชัก.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('restaurant')}}"><img src="img-take/s-7-กูโรตีชาชัก.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">กูโรตีชาชัก </a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7 col-xs-7">
                                                    <span class="placelist">
                                                        <a href="#">TAKE TOWN</a>
                                                    </span>
                                                </div>
                                                <div class="col-lg-5 col-xs-5">
                                                    <i class="icon_star voted pull-right"></i>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="price_box">
                                                        <span>฿35 ~ </span>
                                                        <span>฿69</span>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('restaurant')}}"><img src="img-take/s-10-ยาโยอิ.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('restaurant')}}"><img src="img-take/s-10-ยาโยอิ.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box7" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">Yaoi</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7 col-xs-7">
                                                    <span class="placelist">
                                                        <a href="#">TAKE TOWN</a>
                                                    </span>
                                                </div>
                                                <div class="col-lg-5 col-xs-5">
                                                    <i class="icon_star voted pull-right"></i>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="price_box">
                                                        <span>฿99 ~ </span>
                                                        <span>฿400</span>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('restaurant')}}"><img src="img-take/s4-ไข่หวานบ้านซูชิ.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('restaurant')}}"><img src="img-take/s4-ไข่หวานบ้านซูชิ.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">ไข่หวานบ้านซูชิ </a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7 col-xs-7">
                                                    <span class="placelist">
                                                        <a href="#">TAKE TOWN</a>
                                                    </span>
                                                </div>
                                                <div class="col-lg-5 col-xs-5">
                                                    <i class="icon_star voted pull-right"></i>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="price_box">
                                                        <span>฿20 ~ </span>
                                                        <span>฿100</span>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('restaurant')}}"><img src="img-take/s5-shabushi.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('restaurant')}}"><img src="img-take/s5-shabushi.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box8" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">Shabushi</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7 col-xs-7">
                                                    <span class="placelist">
                                                        <a href="#">TAKE TOWN</a>
                                                    </span>
                                                </div>
                                                <div class="col-lg-5 col-xs-5">
                                                    <i class="icon_star voted pull-right"></i>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="price_box">
                                                        <span>฿299 ~ </span>
                                                        <span>฿499</span>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('restaurant')}}"><img src="img-take/s6-ก๋วยเตี๋ยวเรือปประทีบ.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('restaurant')}}"><img src="img-take/s6-ก๋วยเตี๋ยวเรือปประทีบ.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">ก๋วยเตี๋ยวเรือ ป.ประทีป</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7 col-xs-7">
                                                    <span class="placelist">
                                                        <a href="#">TAKE TOWN</a>
                                                    </span>
                                                </div>
                                                <div class="col-lg-5 col-xs-5">
                                                    <i class="icon_star voted pull-right"></i>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="price_box">
                                                        <span>฿40 ~ </span>
                                                        <span>฿100 </span>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <br> <br>
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title iconview-menu">

                        <a href="{{url('delivery')}}" class="btn-take">ดูทั้งหมด</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product_area product_deals mb-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">

                        <h2>เมนูแนะนำ</h2>
                    </div>
                </div>
            </div>
            <div class="product_container productbg_right_side">
                <div class="row">
                    <div class="col-lg-12 col-xs-12">
                        <div class="product_carousel product_column5 owl-carousel">
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss7-ทาโก้เนื้อ.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss7-ทาโก้เนื้อ.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box9" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                </ul>
                                            </div>
                                        </div>

                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">ทาโก้เนื้อ</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">ทาโก้ Hola</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿250</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>

                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[1]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[1]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss4-แกงเขียวหวาน.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss4-แกงเขียวหวาน.jpg.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">เเกงเขียวหวาน</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">แม่ประนอม</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿40</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[2]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[2]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[2]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>

                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('productrecom_detail2')}}"><img src="img-take/ss2-ผัดไท.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('productrecom_detail2')}}"><img src="img-take/ss2-ผัดไท.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box4" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}"> ผัดไท</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">ผัดไทยประตูผี</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿100</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[3]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[3]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box4" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[3]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss9-ตำข้าวโพดกุ้ง.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss9-ตำข้าวโพดกุ้ง.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box10" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">ตำข้าวโพดกุ้ง </a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">ร้านตำระเบิด</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿60</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[4]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[4]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[4]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>

                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss1-ยำหมูยอไข่แดงเค็ม.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss1-ยำหมูยอไข่แดงเค็ม.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">ยำหมูยอไข่เเดงเค็ม</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">YUM SABB</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿200</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[5]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[5]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[5]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss10-ข้าวคลุกกะปิ.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss10-ข้าวคลุกกะปิ.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">ข้าวคลุกกะปิ</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">อาหารสั่งได้ </a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">
                                                        <span>฿40</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[6]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[6]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[6]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss3-ซูขิ.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss3-ซูขิ.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">ซูชิ</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">ซูชิ อะริกาโตะ</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿20</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[5]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[5]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[5]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss5-บัวลอยไข่หวาน.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss5-บัวลอยไข่หวาน.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">บัวลอยไข่หวาน</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">เจริญศรี </a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿30</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[6]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[6]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[6]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss8-สาคูไส้หมู.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss8-สาคูไส้หมู.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">สาคูไส้หมู</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">ขนมสาคู</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿20</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[5]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[5]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[5]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss6-กุ้งแม่น้ำย่างเกลือ.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('productrecom_detail')}}"><img src="img-take/ss6-กุ้งแม่น้ำย่างเกลือ.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">กุ้งแม่น้ำย่างเกลือ</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">ทะเลเผา </a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿200</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[6]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[6]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[6]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <br> <br>
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">

                        <a href="{{url('allfoods')}}" class="btn-take">ดูทั้งหมด</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product_area product_deals mb-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">

                        <h2>สินค้าแนะนำ</h2>
                    </div>
                </div>
            </div>
            <div class="product_container productbg_right_side">
                <div class="row">
                    <div class="col-lg-12 col-xs-12">
                        <div class="product_carousel product_column5 owl-carousel">
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('product-detail2')}}"><img src="img-take/sss1-เสื้อเชิ้ต-Linen-blend-Shirt-Slim-Fit.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('product-detail2')}}"><img src="img-take/sss1-เสื้อเชิ้ต-Linen-blend-Shirt-Slim-Fit.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box2" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                </ul>
                                            </div>
                                        </div>

                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">เสื้อเชิ้ตผ้าลินิน</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">H&M</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿450</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[6]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[6]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box2" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[6]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('product-detail2')}}"><img src="img-take/sss2--MARILYN-HANDBAGS.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('product-detail2')}}"><img src="img-take/sss2--MARILYN-HANDBAGS.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box11" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">MARILYN</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">LYN</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿599</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[7]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[7]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box11" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[7]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>

                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('product-detail2')}}"><img src="img-take/sss3-Nike-Air-Max-90.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('product-detail2')}}"><img src="img-take/sss3-Nike-Air-Max-90.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box2" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">Nike Air</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">Nike Air</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿2050</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>

                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[8]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[8]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box2" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[8]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('product-detail2')}}"><img src="img-take/sss5-กางเกงยีนส์-LEE.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('product-detail2')}}"><img src="img-take/sss5-กางเกงยีนส์-LEE.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box2" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">Jeans LEE</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">LEE</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿3050</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>

                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[9]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[9]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box2" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[9]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>

                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('product-detail2')}}"><img src="img-take/sss4-นาฬิกา-GUESS.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('product-detail2')}}"><img src="img-take/sss4-นาฬิกา-GUESS.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box2" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">TAKE TOWN</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿1099</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[10]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[10]" class=" input-number" value="1" min="1" max="10">

                                                            <button type="button" data-toggle="modal" data-target="#modal_box2" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[10]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('product-detail2')}}"><img src="img-take/sss6-หมวก-U.S.-POLO-ASSN..jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('product-detail2')}}"><img src="img-take/sss6-หมวก-U.S.-POLO-ASSN..jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box2" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">TAKE TOWN</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿2999</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>

                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[11]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[11]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box2" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[11]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('product-detail2')}}"><img src="img-take/sss10-ต่างหู-Marks-&-Spencer.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('product-detail2')}}"><img src="img-take/sss10-ต่างหู-Marks-&-Spencer.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box2" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">ต่างหู</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">Marks&Spencer</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿1790</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[10]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[10]" class=" input-number" value="1" min="1" max="10">

                                                            <button type="button" data-toggle="modal" data-target="#modal_box2" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[10]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('product-detail2')}}"><img src="img-take/sss9-รองเท้าส้นสูง-ECLIPSE.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('product-detail2')}}"><img src="img-take/sss9-รองเท้าส้นสูง-ECLIPSE.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box2" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">รองเท้าส้นสูง</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">Eclipse</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿999</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>

                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[11]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[11]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box2" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[11]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>

                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('product-detail2')}}"><img src="img-take/sss8-แว่นตา-RAY-BAN.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('product-detail2')}}"><img src="img-take/sss8-แว่นตา-RAY-BAN.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box2" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">แว่นตา</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">Ray-Ban</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿1299</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>
                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[10]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[10]" class=" input-number" value="1" min="1" max="10">

                                                            <button type="button" data-toggle="modal" data-target="#modal_box2" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[10]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('product-detail2')}}"><img src="img-take/sss7-กระเป๋าสะพายหลัง-MLB.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{url('product-detail2')}}"><img src="img-take/sss7-กระเป๋าสะพายหลัง-MLB.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>

                                            <div class="action_links">
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box2" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <span class="product_name"><a href="{{url('product-details')}}">กระเป๋าสะพายหลัง</a></span>

                                                </div>
                                                <div class="col-lg-5">
                                                    <span class="placelist pull-right">
                                                        <a href="#">MLB</a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <div class="price_box">

                                                        <span>฿1899</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product_quantity1">
                                                        <form id='myform2' method='POST' action='#'>

                                                            <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[11]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                            <input type="text" name="quant[11]" class=" input-number" value="1" min="1" max="10">
                                                            <button type="button" data-toggle="modal" data-target="#modal_box2" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[11]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>



                                        </figcaption>
                                    </figure>
                                </article>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br> <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">

                        <a href="{{url('menu-list')}}" class="btn-take">ดูทั้งหมด</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="container-fluid mt-70">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="section_title">

                    <h2>Event</h2>
                </div>
            </div>
        </div>
    </div>
    <section class="productbg_right_side color_two eventhome">
        <div class="container-fluid">


            <div class="row">
                <div class="product_carousel product_column3 owl-carousel">
                    <div class="col-lg-12 col-xs-12">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="{{url('event-detail')}}"> <img src="img-take/1 Take-pet-festival.jpg" alt=""></a>
                                </div>

                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="{{url('event-detail')}}"><img src="img-take/2 Take-japan-food.jpg" alt=""></a>
                                </div>

                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="{{url('event-detail')}}"><img src="img-take/3 Tanabata-by-take.jpg" alt=""></a>
                                </div>

                            </figure>
                        </article>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <div class="container-fluid mt-70">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="section_title">

                    <h2>สมัครร้านค้า</h2>
                </div>
            </div>
        </div>

    </div><!-- End container-fluid  -->
    <div class="single_slider d-flex align-items-center mb-40" data-bgimg="img-take/ร้านค้า.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-6">

                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="text-reg">
                        <h3 class="text-reg1">เปิดร้านของคุณ</h3>
                        <h3 class="text-reg1"> ในบริการของ TA-KE MORE</h3>
                        <h3 class="text-reg1"> ผู้เห็นร้านค้ากว่า 300,000 คน</h3>
                        <p>
                            ร่วมเป็นส่วนหนึ่งกับเรา เพื่อเพิ่มยอดขายให้กับร้านของคุณ
                            เพียงเเค่คุณทำอาหาร เเล้วให้เราส่ง ชีวิตดีดีที่ลงตัว
                        </p>
                        <a href="" class="btn-take">สมัครเลย</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div><!-- End container-fluid  -->
    <div class="single_slider d-flex align-items-center mb-40 " data-bgimg="img-take/Rider.jpg">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-xs-12">
                    <div class="text-reg">
                        <h3 class="text-reg1">สมัคร Rider กับเรา</h3>
                        <h3 class="text-reg1">ค่าคอมมิชชันสูง สวัสดิการดีที่สุด</h3>
                        <p>
                            รายได้ดี เพิ่มทิป เพิ่มโบนัส สมัครง่าย เป็นนายตัวเอง
                            พร้อมมีทีมงานคอยซัพพอร์ต ตลอด 24 ชั่วโมง
                        </p>
                        <a href="" class="btn-take">สมัครเลย</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single_slider d-flex align-items-center " data-bgimg="img-take/dowloadiosand.jpg" style="background-position:unset;">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-xs-12">
                    <div class="slider_content pull-right" style="color: #000;">
                        <h3 style="color: #000;">Download TA-KE app</h3>
                        <h3 style="color: #000;">Natural Farm Products</h3>
                        <p>
                            ดาวน์โหลด TA-KE App ได้เเล้ววันนี้ฟรี
                            ทั้ง IOS เเละ Android
                        </p>
                        <a href=""><img src="assets/img/icon/appstore.png" width="150" height="60" alt=""></a>
                        <a href=""><img src="assets/img/icon/googleplay.png" width="150" height="60" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--banner area start-->
    <div class="shipping_area" style="background-image: url(img-take/0104.png);  background-size: cover;
    background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title mt-xs-2">

                        <h2>FOLLOW US</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#0"><i class="icon-facebook"></i></a></li>
                            <li><a href="#0"><i class="icon-twitter"></i></a></li>
                            <li><a href="#0"><i class="icon-instagram"></i></a></li>
                           
                            <li><a href="#0"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">

                        <h2>TEL : 02-333-4564</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product_area product_deals mb-5 footimg">
        <div class="container-fluid">

            <div class="product_container">
                <div class="row">
                    <div class="col-lg-12 col-xs-12">
                        <div class="product_carousel product_column8 owl-carousel">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/y1.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/y2.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/y3.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/y4.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/y5.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/y6.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/y7.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/y8.jpg" alt=""></a>



                                    </div>

                                </figure>
                            </article>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer area start-->
    <?php

    require_once "footer.php";
    ?>
    <!--footer area end-->
    <!-- ร้านอาหารเเนะนำ -->
    <div class="modal fade" id="modal_box5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <div class="modal_body" id="optionsmenu">
                    <div class="row">
                        <div class="col-lg-5 col-xs-12">
                            <div class="modal_tab">
                                <img src="img-take/บอนชอน_1.jpg" alt="">

                            </div>
                        </div>
                        <div class="col-lg-7 col-xs-12">
                            <div class="widget_list widget_post">
                                <div class="widget_title">
                                    <h3>BONCHON</h3>
                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="img-take/บอนชอน_2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">Lorem ipsum dolor </a></h4>
                                                <span>฿194</span>
                                            </div>
                                        </div>
                                    </div>

<hr>
                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="img-take/บอนชอน_3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">Lorem ipsum dolor </a></h4>
                                                <span>฿214</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <hr>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="img-take/บอนชอน_4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">Lorem ipsum dolor </a></h4>
                                                <span>฿175</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-4">
                                    <div class="checkout_btn">
                                            <a href="{{url('restaurant')}}" class="btn btn">เพิ่มเติม</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xs-12">
                                       
                                    </div>
                                    <div class="col-lg-4">

                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>

                    <br>



                    <br>


                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_box6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <div class="modal_body" id="optionsmenu">
                    <div class="row">
                        <div class="col-lg-5 col-xs-12">
                            <div class="modal_tab">
                                <img src="img-take/ก๋วยเตี๋ยวไก่สูตรต้นตำรับ_1.jpg" alt="">

                            </div>
                        </div>
                        <div class="col-lg-7 col-xs-12">
                            <div class="widget_list widget_post">
                                <div class="widget_title">
                                    <h3>ก๋วยเตี๋ยวเรือเเม่ศรีเรือน
                                    </h3>
                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="img-take/ก๋วยเตี๋ยวไก่สูตรต้นตำรับ_2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">บะหมี่เนื้อก้ามปู (น้ำ/เเห้ง/ต้มยำ)</a></h4>
                                                <span>฿80</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="img-take/ก๋วยเตี๋ยวไก่สูตรต้นตำรับ_3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">ผัดไทยกุ้ง</a></h4>
                                                <span>฿80</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="img-take/ก๋วยเตี๋ยวไก่สูตรต้นตำรับ_4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">ส้มตำปูม้า</a></h4>
                                                <span>฿100</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-lg-4">

                                    </div>
                                    <div class="col-lg-4 col-xs-12">
                                        <div class="checkout_btn">
                                            <a href="{{url('restaurant')}}" class="btn btn">เพิ่มเติม</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">

                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>

                    <br>



                    <br>


                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_box7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <div class="modal_body" id="optionsmenu">
                    <div class="row">
                        <div class="col-lg-5 col-xs-12">
                            <div class="modal_tab">
                                <img src="img-take/พิซซ่า-1-600.jpg" alt="">

                            </div>
                        </div>
                        <div class="col-lg-7 col-xs-12">
                            <div class="widget_list widget_post">
                                <div class="widget_title">
                                    <h3>The Pizza Company</h3>
                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="img-take/พิซซ่า-2-100.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">Pizza Seafood Deluxe</a></h4>
                                                <span>฿399</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="img-take/พิซซ่า-3-100.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">Pizza Chicken Deluxe </a></h4>
                                                <span>฿339</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="img-take/พิซซ่า-4-100.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">Pizza Hawaiian</a></h4>
                                                <span>฿339</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-lg-4">

                                    </div>
                                    <div class="col-lg-4 col-xs-12">
                                        <div class="checkout_btn">
                                            <a href="{{url('restaurant')}}" class="btn btn">เพิ่มเติม</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">

                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>

                    <br>



                    <br>


                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_box8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <div class="modal_body" id="optionsmenu">
                    <div class="row">
                        <div class="col-lg-5 col-xs-12">
                            <div class="modal_tab">
                                <img src="img-take/โอชายะ--1-600.jpg" alt="">

                            </div>
                        </div>
                        <div class="col-lg-7 col-xs-12">
                            <div class="widget_list widget_post">
                                <div class="widget_title">
                                    <h3>Ochaya
                                    </h3>
                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="img-take/โอชายะ--2-100.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">Pearl Milk Tea</a></h4>
                                                <span>฿35</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="img-take/โอชายะ--3-100.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">Apple Yogurt </a></h4>
                                                <span>฿40</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="img-take/โอชายะ--4-100.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">Mango GOGO </a></h4>
                                                <span>฿60</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-lg-4">

                                    </div>
                                    <div class="col-lg-4 col-xs-12">
                                        <div class="checkout_btn">
                                            <a href="{{url('restaurant')}}" class="btn btn">เพิ่มเติม</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">

                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>

                    <br>



                    <br>


                </div>
            </div>
        </div>
    </div>

    <!-- modal area start-->
    <div class="modal fade" id="modal_box2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <div class="modal_body" style="padding: 40px 20px 20px 20px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <a href="#"><img src="img-take/sss1-เสื้อเชิ้ต-Linen-blend-Shirt-Slim-Fit.jpg" alt=""></a>

                            </div>
                            <div class="col-lg-5 col-md- col-sm-12 col-xs-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>เสื้อเชิ้ตลินิน</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">฿450</span>
                                        <span class="old_price">฿550</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="0">s</option>
                                                <option value="0">m</option>
                                                <option value="0">l</option>
                                                <option value="0">xl</option>
                                                <option value="0">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="0">purple</option>
                                                <option value="0">violet</option>
                                                <option value="0">black</option>
                                                <option value="0">pink</option>
                                                <option value="0">orange</option>
                                            </select>
                                        </div>
                                        <form action="#">
                                                <div class="product_quantity1" style="text-align: left;">
                                                    <form id='myform2' method='POST' action='#'>

                                                        <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[18]">
                                                            <span class="glyphicon glyphicon-minus"></span>
                                                        </button>
                                                        <input type="text" name="quant[1]" class=" input-number" value="1" min="1" max="10">
                                                        <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[18]">
                                                            <span class="glyphicon glyphicon-plus"></span>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="mini_cart_wrapper mt-5 mb-5">
                                                    <a href="javascript:void(0)" data-dismiss="modal" class="add_to_basket">Add to cart</a>

                                                </div>
                                            </form>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter" style="background-color: transparent;"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->
    <!-- เมนูแนะนำ -->
    <div class="modal fade" id="modal_box3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-cancel-7"></i></span>
                </button>
                <div class="modal_body">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                                <div class="modal_tab">
                                    <img src="img-take/ss1-ยำหมูยอไข่แดงเค็ม-ไซส์-600.jpg" alt="">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>ยำหมูยอไข่เเดงเค็ม</h2>
                                    </div>
                                    <hr>
                                    <div class="requiredmenu">
                                        <h5><b>ระดับความเเซ่บ</b> </h5>
                                        <label>
                                            <input type="radio" value="option1" name="options_1" checked> เผ็ดน้อย <span>฿50</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option2" name="options_1"> เผ็ดกลาง <span>+ ฿50</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option3" name="options_1"> เผ็ดมาก <span>+ ฿50</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option4" name="options_1"> ไม่เผ็ด <span>+ ฿50</span>
                                        </label>

                                    </div>
                                    <hr>
                                    <div class="requiredmenu">

                                        <h5><b>เพิ่มเติมความเเซ่บ</b> </h5>
                                        <label>
                                            <input type="radio" value=""> ไข่เเดงเค็ม <span>+ ฿50</span>
                                        </label>
                                        <label>
                                            <input type="radio" value=""> หมูยอ <span>+ ฿60</span>
                                        </label>
                                        <label>
                                            <input type="radio" value=""> กุ้ง <span>+ ฿70</span>
                                        </label>
                                        <label>
                                            <input type="radio" value=""> ปลาหมึก <span>+ ฿70</span>
                                        </label>
                                        <label>
                                            <input type="radio" value=""> หอยนางรม <span>+ ฿80</span>
                                        </label>
                                        <label>
                                            <input type="radio" value=""> หอยเเครง <span>+ ฿80</span>
                                        </label>
                                        <label>
                                            <input type="radio" value=""> ปูม้า <span>+ ฿100</span>
                                        </label>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <div class="product_quantity1 pull-left">
                                                    <form id='myform2' method='POST' action='#'>

                                                        <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[16]">
                                                            <span class="glyphicon glyphicon-minus"></span>
                                                        </button>
                                                        <input type="text" name="quant[1]" class=" input-number" value="1" min="1" max="10">
                                                        <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[16]">
                                                            <span class="glyphicon glyphicon-plus"></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <label>Notes for the restaurant</label>
                                                <textarea class="form-control" style="height:50px" placeholder="Ex. Allergies, cash change..." name="notes" id="notes"></textarea>
                                                <div class="mini_cart_wrapper mt-5 mb-30">
                                                    <a href="javascript:void(0)" data-dismiss="modal" class="add_to_basket">Add to cart</a>

                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_box4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-cancel-7"></i></span>
                </button>
                <div class="modal_body">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                                <div class="modal_tab">
                                    <img src="img-take/ss2-ผัดไท-ไซส์-600.jpg" alt="">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>ผัดไทประตูผี</h2>
                                    </div>
                                    <hr>
                                    <div class="requiredmenu">
                                        <h5><b>เลือกเส้น</b> </h5>
                                        <label>
                                            <input type="radio" value="option1" name="options_1" checked> เส้นเล็ก <span>+ ฿50</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option2" name="options_1"> วุ้นเส้น <span>+ ฿50</span>
                                        </label>


                                    </div>
                                    <hr>
                                    <div class="requiredmenu">

                                        <h5><b>เพิ่มเติม</b> </h5>
                                        <label>
                                            <input type="radio" value=""> กุ้ง <span>+ ฿50</span>
                                        </label>
                                        <label>
                                            <input type="radio" value=""> ปลาหมึก <span>+ ฿50</span>
                                        </label>
                                        <label>
                                            <input type="radio" value=""> หอยนางรม <span>+ ฿50</span>
                                        </label>
                                        <label>
                                            <input type="radio" value=""> หอยเเครง <span>+ ฿50</span>
                                        </label>
                                        <hr>
                                        
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <div class="product_quantity1 pull-left">
                                                    <form id='myform2' method='POST' action='#'>

                                                        <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[17]">
                                                            <span class="glyphicon glyphicon-minus"></span>
                                                        </button>
                                                        <input type="text" name="quant[1]" class=" input-number" value="1" min="1" max="10">
                                                        <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[17]">
                                                            <span class="glyphicon glyphicon-plus"></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <label>Notes for the restaurant</label>
                                                <textarea class="form-control" style="height:50px" placeholder="Ex. Allergies, cash change..." name="notes" id="notes"></textarea>
                                                <div class="mini_cart_wrapper mt-5 mb-30">
                                                    <a href="javascript:void(0)" data-dismiss="modal" class="add_to_basket">Add to cart</a>

                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_box9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-cancel-7"></i></span>
                </button>
                <div class="modal_body">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                                <div class="modal_tab">
                                    <img src="img-take/ss2-ผัดไท-ไซส์-600.jpg" alt="">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>ทาโก้</h2>
                                    </div>
                                    <hr>
                                    <div class="requiredmenu">
                                        <h5><b>Topping</b> </h5>
                                        <label>
                                            <input type="radio" value="option1" name="options_1" checked> เนื้อ <span>+ ฿60</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option2" name="options_1"> หมู <span>+ ฿60</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option1" name="options_1" checked> ไก่ <span>+ ฿60</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option1" name="options_1" checked> มังสวิรัติ <span>+ ฿60</span>
                                        </label>


                                    </div>
                                    <hr>
                                    <div class="requiredmenu">

                                        <h5><b>เลือกไซส์</b> </h5>
                                        <label>
                                            <input type="radio" value=""> S (1 คน)
                                        </label>
                                        <label>
                                            <input type="radio" value=""> M (1-2 คน)
                                        </label>
                                        <label>
                                            <input type="radio" value=""> L (2-3 คน)
                                        </label>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <div class="product_quantity1 pull-left">
                                                    <form id='myform2' method='POST' action='#'>

                                                        <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[18]">
                                                            <span class="glyphicon glyphicon-minus"></span>
                                                        </button>
                                                        <input type="text" name="quant[1]" class=" input-number" value="1" min="1" max="10">
                                                        <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[18]">
                                                            <span class="glyphicon glyphicon-plus"></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <label>Notes for the restaurant</label>
                                                <textarea class="form-control" style="height:150px" placeholder="Ex. Allergies, cash change..." name="notes" id="notes"></textarea>
                                                <div class="mini_cart_wrapper mt-5 mb-30">
                                                    <a href="javascript:void(0)" data-dismiss="modal" class="add_to_basket">Add to cart</a>

                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_box10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-cancel-7"></i></span>
                </button>
                <div class="modal_body">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                                <div class="modal_tab">
                                    <img src="img-take/ss2-ผัดไท-ไซส์-600.jpg" alt="">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>ผัดไทยประตูผี</h2>
                                    </div>
                                    <hr>
                                    <div class="requiredmenu">
                                        <h5><b>ระดับความเเซ่บ</b> </h5>
                                        <label>
                                            <input type="radio" value="option1" name="options_1" checked> เผ็ดน้อย <span>+ ฿80</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option2" name="options_1"> เผ็ดกลาง <span>+ ฿80</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option2" name="options_1"> เผ็ดมาก <span>+ ฿80</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option2" name="options_1"> ไม่เผ็ด <span>+ ฿80</span>
                                        </label>


                                    </div>
                                    <hr>
                                    <div class="requiredmenu">

                                        <h5><b>เพิ่มเติม</b> </h5>
                                        <label>
                                            <input type="radio" value=""> ไข่เเดงเค็ม <span>+ ฿80</span>
                                        </label>
                                        <label>
                                            <input type="radio" value=""> ปลาหมึก <span>+ ฿80</span>
                                        </label>
                                        <label>
                                            <input type="radio" value=""> หอยนางรม <span>+ ฿80</span>
                                        </label>
                                        <label>
                                            <input type="radio" value=""> หอยเเครง <span>+ ฿80</span>
                                        </label>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <div class="product_quantity1 pull-left">
                                                    <form id='myform2' method='POST' action='#'>

                                                        <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[18]">
                                                            <span class="glyphicon glyphicon-minus"></span>
                                                        </button>
                                                        <input type="text" name="quant[1]" class=" input-number" value="1" min="1" max="10">
                                                        <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[18]">
                                                            <span class="glyphicon glyphicon-plus"></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <label>Notes for the restaurant</label>
                                                <textarea class="form-control" style="height:150px" placeholder="Ex. Allergies, cash change..." name="notes" id="notes"></textarea>
                                                <div class="mini_cart_wrapper mt-5 mb-30">
                                                    <a href="javascript:void(0)" data-dismiss="modal" class="add_to_basket">Add to cart</a>

                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--news letter popup start-->
    <div class="modal fade" id="modal_box11" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <div class="modal_body" style="padding: 40px 20px 20px 20px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <a href="#"><img src="img-take/sss2--MARILYN-HANDBAGS.jpg" alt=""></a>

                            </div>
                            <div class="col-lg-5 col-md- col-sm-12 col-xs-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>กระเป๋า </h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">฿1799</span>
                                        <span class="old_price">฿1799</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="0">s</option>
                                                <option value="0">m</option>
                                                <option value="0">l</option>
                                                <option value="0">xl</option>
                                                <option value="0">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="0">purple</option>
                                                <option value="0">violet</option>
                                                <option value="0">black</option>
                                                <option value="0">pink</option>
                                                <option value="0">orange</option>
                                            </select>
                                        </div>
                                        <form action="#">
                                                <div class="product_quantity1" style="text-align:left;">
                                                    <form id='myform2' method='POST' action='#'>

                                                        <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[18]">
                                                            <span class="glyphicon glyphicon-minus"></span>
                                                        </button>
                                                        <input type="text" name="quant[1]" class=" input-number" value="1" min="1" max="10">
                                                        <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[18]">
                                                            <span class="glyphicon glyphicon-plus"></span>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="mini_cart_wrapper mt-5 mb-5">
                                                    <a href="javascript:void(0)" data-dismiss="modal" class="add_to_basket">Add to cart</a>

                                                </div>
                                            </form>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter" style="background-color: transparent;"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--news letter popup start-->



    <!-- JS
============================================ -->
    <!--jquery min js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--popper min js-->
    <script src="assets/js/popper.js"></script>
    <!--bootstrap min js-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--owl carousel min js-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--slick min js-->
    <script src="assets/js/slick.min.js"></script>
    <!--magnific popup min js-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--counterup min js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--jquery countdown min js-->
    <script src="assets/js/jquery.countdown.js"></script>
    <!--jquery ui min js-->
    <script src="assets/js/jquery.ui.js"></script>
    <!--jquery elevatezoom min js-->
    <script src="assets/js/jquery.elevatezoom.js"></script>
    <!--isotope packaged min js-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--slinky menu js-->
    <script src="assets/js/slinky.menu.js"></script>
    <!--instagramfeed menu js-->
    <script src="assets/js/jquery.instagramFeed.min.js"></script>
    <!-- Plugins JS -->

    <script src="assets/js/plugins.js"></script>


    <!-- <script src="js-front/jquery-2.2.4.min.js"></script> -->
    <script src="js-front/common_scripts_min.js"></script>
    <script src="js-front/functions.js"></script>
    <script src="assets/validate.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeYttpuQHuuYdaEXltzMDJ2xXsSRRXMnA&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
    <script>
        // This example adds a search box to a map, using the Google Place Autocomplete
        // feature. People can enter geographical searches. The search box will return a
        // pick list containing a mix of places and predicted search terms.
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIwzALxUPNbatRBj3Xi1Uhp0fFzwWNBkE&libraries=places">
        function initAutocomplete() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -33.8688,
                    lng: 151.2195
                },
                zoom: 13,
                mapTypeId: "roadmap",
            });
            // Create the search box and link it to the UI element.
            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });
            let markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }
                // Clear out the old markers.
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();
                places.forEach((place) => {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    const icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    };
                    // Create a marker for each place.
                    markers.push(
                        new google.maps.Marker({
                            map,
                            icon,
                            title: place.name,
                            position: place.geometry.location,
                        })
                    );

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }
    </script>
    <script>
        $('.it1').click(function() {
            // alert('close');
            $('#modal_box3').modal('hide');
        });
    </script>
    <script>
        $('.it2').click(function() {
            // alert('close');
            $('#modal_box2').modal('hide');
        });
    </script>
    <script>
        //plugin bootstrap minus and plus
        //http://jsfiddle.net/laelitenetwork/puJ6G/
        $('.btn-number').click(function(e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').focusin(function() {
            $(this).data('oldValue', $(this).val());
        });
        $('.input-number').change(function() {

            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }


        });
        $(".input-number").keydown(function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    </script>



</body>

</html>