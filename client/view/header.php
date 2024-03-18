<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from htmldemo.net/billy/billy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2023 10:36:03 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Billy - Food & Drink eCommerce Bootstrap5 Template</title>
        <meta name="description" content="">
        <meta name="robots" content="noindex, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- header start -->
        <header class="header-area">
            <div class="header-top black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 col-sm-4">
                            <div class="welcome-area">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12 col-sm-8">
                            <div class="account-curr-lang-wrap f-right">
                                <ul>
                                    <li class="top-hover"><a href="#">Ngôn ngữ: (VIE) <i class="ion-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#">Tiếng việt</a></li>
                                            <li><a href="#">English</a></li>
                                        </ul>
                                    </li>
                                    <li class="top-hover"><a href="#">Tiền tệ: (VND) <i class="ion-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#">VND</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                        echo '<li class="top-hover"><a href="#">Cài đặt<i class="ion-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="index.php?act=taikhoan">Tài khoản</a></li>
                                            <li><a href="index.php?act=doimk">Đổi mật khẩu</a></li>
                                        </ul>
                                    </li>
                                    <li class="top-hover"><a href="index.php?act=donmua">Đơn mua</a>
                                    </li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12 col-sm-4">
                            <div class="logo">
                                <a href="index.php">
                                    <img alt="" src="assets/img/logo/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12 col-sm-8">
                            <div class="header-middle-right f-right">
                                <div class="header-login">
                                <?php
                                    if (isset($_SESSION['user'])) {
                                        extract($_SESSION['user']);
                                        echo '<a href="">
                                        <div class="header-icon-style">
                                            <i class="icon-user icons"></i>
                                        </div>
                                        
                                        <div class="login-text-content">
                                            <p><a href="index.php?act=dangky">'.$tendn.'</a><br><span><a
                                            href="index.php?act=dangxuat"><span>Đăng xuất</span></a></span></p>
                                        </div>
                                    </a>';
                                    }
                                    else{
                                        echo '<a href="index.php?act=login">
                                        <div class="header-icon-style">
                                            <i class="icon-user icons"></i>
                                        </div>
                                        
                                        <div class="login-text-content">
                                            <p><a href="index.php?act=dangky">Đăng ký</a><br><span><a
                                            href="index.php?act=dangnhap"><span>Đăng nhập</span></a></span></p>
                                        </div>
                                    </a>';
                                    }
                                ?>
                                </div>
                                <!-- <div class="header-wishlist">
                                    <a href="wishlist.html">
                                        <div class="header-icon-style">
                                            <i class="icon-heart icons"></i>
                                        </div>
                                        <div class="wishlist-text">
                                            <p>Sản phẩm <br> <span>Yêu thích</span></p>
                                        </div>
                                    </a>
                                </div> -->
                                <div class="header-wishlist">
                                    <a href="index.php?act=giohang">
                                        <div class="header-icon-style">
                                            <i class="icon-handbag icons"></i>
                                            <!-- <span class="count-style">02</span> -->
                                        </div>
                                        <div class="cart-text">
                                            <span class="digit">Giỏ hàng</span>
                                            <span class="cart-digit-bold">$000.00</span>
                                        </div>
                                    </a>
                                    <!-- <div class="shopping-cart-content">
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/img/cart/cart-1.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Phantom Remote </a></h4>
                                                    <h6>Qty: 02</h6>
                                                    <span>$260.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ion ion-close"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/img/cart/cart-2.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Phantom Remote</a></h4>
                                                    <h6>Qty: 02</h6>
                                                    <span>$260.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ion ion-close"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>Shipping : <span>$20.00</span></h4>
                                            <h4>Total : <span class="shop-total">$260.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a href="cart-page.html">view cart</a>
                                            <a href="checkout.html">checkout</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom transparent-bar black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="top-hover"><a href="index.php">Trang chủ</a>
                                        </li>
                                        <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                                        <li class="mega-menu-position top-hover"><a href="index.php?act=shop">Cửa hàng</a>
                                            <!-- <ul class="mega-menu">
                                                <li>
                                                    <ul>
                                                        <li class="mega-menu-title"><a href="#">Categories 01</a></li>
                                                        <li><a href="shop.html">salad</a></li>
                                                        <li><a href="shop.html">sandwich</a></li>
                                                        <li><a href="shop.html">bread</a></li>
                                                        <li><a href="shop.html">steak</a></li>
                                                        <li><a href="shop.html">tuna steak</a></li>
                                                        <li><a href="shop.html">spaghetti </a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li class="mega-menu-title"><a href="#">Categories 02</a></li>
                                                        <li><a href="shop.html">rice</a></li>
                                                        <li><a href="shop.html">pizza</a></li>
                                                        <li><a href="shop.html">hamburger</a></li>
                                                        <li><a href="shop.html">eggs</a></li>
                                                        <li><a href="shop.html">sausages</a></li>
                                                        <li><a href="shop.html">apple juice</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li class="mega-menu-title"><a href="#">Categories 03</a></li>
                                                        <li><a href="shop.html">milk</a></li>
                                                        <li><a href="shop.html">grape juice</a></li>
                                                        <li><a href="shop.html">cookie</a></li>
                                                        <li><a href="shop.html">candy</a></li>
                                                        <li><a href="shop.html">cake</a></li>
                                                        <li><a href="shop.html">cupcake</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li class="mega-menu-title"><a href="#">Categories 04</a></li>
                                                        <li><a href="shop.html">pie</a></li>
                                                        <li><a href="shop.html">stoberry</a></li>
                                                        <li><a href="shop.html">sandwich</a></li>
                                                        <li><a href="shop.html">bread</a></li>
                                                        <li><a href="shop.html">steak</a></li>
                                                        <li><a href="shop.html">hamburger</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area-start -->
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="mobile-menu">
								<nav id="mobile-menu-active">
									<ul class="menu-overflow" id="nav">
										<li><a href="index.php?act=lienhe">Trang chủ</a>
										</li>
										<li><a href="#">Trang mẫu</a>
											<ul>
												<li><a href="about-us.html">about us </a></li>
                                                <li><a href="shop.html">shop Grid</a></li>
                                                <li><a href="shop-list.html">shop list</a></li>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="cart-page.html">cart page</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="login-register.html">login / register</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                                <li><a href="testimonial.html">Testimonials</a></li>
											</ul>
										</li>
										<li><a href="index.php?act=shop"> Cửa hàng </a>
                                            <!-- <ul>
                                                <li><a href="#">Categories 01</a>
                                                    <ul>
                                                        <li><a href="shop.html">salad</a></li>
                                                        <li><a href="shop.html">sandwich</a></li>
                                                        <li><a href="shop.html">bread</a></li>
                                                        <li><a href="shop.html">steak</a></li>
                                                        <li><a href="shop.html">tuna steak</a></li>
                                                        <li><a href="shop.html">spaghetti </a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Categories 02</a>
                                                    <ul>
                                                        <li><a href="shop.html">rice</a></li>
                                                        <li><a href="shop.html">pizza</a></li>
                                                        <li><a href="shop.html">hamburger</a></li>
                                                        <li><a href="shop.html">eggs</a></li>
                                                        <li><a href="shop.html">sausages</a></li>
                                                        <li><a href="shop.html">apple juice</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Categories 03</a>
                                                    <ul>
                                                        <li><a href="shop.html">milk</a></li>
                                                        <li><a href="shop.html">grape juice</a></li>
                                                        <li><a href="shop.html">cookie</a></li>
                                                        <li><a href="shop.html">candy</a></li>
                                                        <li><a href="shop.html">cake</a></li>
                                                        <li><a href="shop.html">cupcake</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Categories 04</a>
                                                    <ul>
                                                        <li><a href="shop.html">pie</a></li>
                                                        <li><a href="shop.html">stoberry</a></li>
                                                        <li><a href="shop.html">sandwich</a></li>
                                                        <li><a href="shop.html">bread</a></li>
                                                        <li><a href="shop.html">steak</a></li>
                                                        <li><a href="shop.html">hamburger</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
										<li><a href="index.php?act=lienhe">Liên hệ</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area-end -->
        </header>