<div class="slider-area">
    <div class="slider-active owl-dot-style owl-carousel">
        <div class="single-slider pt-210 pb-220 bg-img" style="background-image:url(assets/img/slider/slider-1.jpg);">
            <div class="container">
                <div class="slider-content slider-animated-1">
                    <h1 class="animated">Đồ uống chất lượng</h1>
                    <h3 class="animated">Đảm bảo về chất lượng và giá thành.</h3>
                    <div class="slider-btn mt-90">
                        <a class="animated" href="index.php?act=shop">Đặt hàng</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider pt-210 pb-220 bg-img" style="background-image:url(assets/img/slider/slider-2.jpg);">
            <div class="container">
                <div class="slider-content slider-animated-1">
                    <h1 class="animated">Đồ uống chất lượng</h1>
                    <h3 class="animated">Đảm bảo về chất lượng và giá thành.</h3>
                    <div class="slider-btn mt-90">
                        <a class="animated" href="index.php?act=shop">Đặt hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-area row-col-decrease pt-100 pb-75 clearfix">
    <div class="container">
        <div class="banner-left-side mb-20">
            <div class="single-banner">
                <div class="hover-style">
                    <a href="#"><img src="assets/img/banner/banner-1.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="banner-right-side mb-20">
            <div class="single-banner mb-20">
                <div class="hover-style">
                    <a href="#"><img src="assets/img/banner/banner-2.jpg" alt=""></a>
                </div>
            </div>
            <div class="single-banner">
                <div class="hover-style">
                    <a href="#"><img src="assets/img/banner/banner-3.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pb-70">
    <div class="custom-container">
        <div class="product-tab-list-wrap text-center mb-40">
            <div class="product-tab-list nav">
                <a class="active" href="#tab1" data-bs-toggle="tab">
                    <h4>Sản phẩm nổi bật</h4>
                </a>
                <!-- <a href="#tab2" data-bs-toggle="tab">
                    <h4>Danh mục</h4>
                </a> -->
            </div>
        </div>
        <div class="tab-content jump">
            <!-- <div id="tab2" class="tab-pane">
                <div class="row">
                    <?php
                    foreach ($dmnew as $dm) {
                        extract($dm);
                        $iddm = "index.php?act=spdm&iddm=" . $id;
                        $hinh = $img_path . $hinhdm;
                        echo '<div class="custom-col-5">
                                <div class="product-wrapper mb-25">
                                    <div class="product-img">
                                        <a href="' . $iddm . '">
                                            <img src="' . $hinh . '" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4 class="text-center">
                                            <a href="' . $iddm . '">' . $tendm . '</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="' . $id . '">';
                    }
                    ?>
                </div>
            </div> -->
            <div id="tab1" class="tab-pane active">
                <div class="row">
                    <?php
                    foreach ($sphome as $sp) {
                        extract($sp);
                        $chitietsp = "index.php?act=chitietsp&id=" . $id;
                        $hinh = $img_path . $hinh;
                        echo '<div class="custom-col-5">
                                <div class="product-wrapper mb-25">
                                    <div class="product-img">
                                        <a href="' . $chitietsp . '">
                                            <img src="' . $hinh . '" alt="">
                                        </a>
                                        <div class="product-action">
                                            <div class="pro-action-left w100">
                                            <form action="index.php?act=addtocart" method="post" class="form-addtocart">
                                                    <input type="hidden" name="id" value="' . $id . '">
                                                    <input type="hidden" name="tensp" value="' . $tensp . '">
                                                    <input type="hidden" name="hinh" value="' . $hinh . '">
                                                    <input type="hidden" name="giasp" value="' . $giasp . '">
                                                    <div class="addtocart-btn">
                                                    <a title="Add To Cart" href="" class="flex"><i class="ion-android-cart mt5"></i>
                                                    <input type="submit" class="btn btn-primary" name="addtocart" value="Thêm vào giỏ hàng"></a>
                                                    </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4>
                                            <a href="' . $chitietsp . '">' . $tensp . '</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span class="text-danger">' . number_format($giasp, 0, ",", ".") . ' <u>đ</u></span>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>

                    <!-- <div class="custom-col-5">
                                <div class="product-wrapper mb-25">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-9.jpg" alt="">
                                        </a>
                                        <div class="product-action">
                                            <div class="pro-action-left">
                                                <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                            </div>
                                            <div class="pro-action-right">
                                                <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                <a title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4>
                                            <a href="product-details.html">PRODUCTS NAME HERE </a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>$200.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-area">
    <div class="container">
        <div class="discount-overlay bg-img pt-130 pb-130"
            style="background-image:url(assets/img/banner/banner-4.jpg);">
            <div class="discount-content text-center">
                <h3>Thời gian tuyệt vời để bắt đầu</h3>
                <p>Cửa hàng giảm giá 10% trong tuần này</p>
                <div class="banner-btn">
                    <a href="index.php?act=shop">Đặt hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="best-food-area pt-100 pb-95">
    <div class="custom-container">
        <div class="row">
            <div class="best-food-width-1">
                <div class="single-banner">
                    <div class="hover-style">
                        <a href="#"><img src="assets/img/banner/banner-5.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="best-food-width-2">
                <div class="product-top-bar section-border mb-25">
                    <div class="section-title-wrap">
                        <h3 class="section-title section-bg-white">Danh mục sản phẩm</h3>
                    </div>
                    <div class="product-tab-list-2 nav section-bg-white">
                        <a class="active" href="#tab4" data-bs-toggle="tab">
                            <h4>Tất cả </h4>
                        </a>
                        <!-- <a href="#tab5" data-bs-toggle="tab">
                                    <h4>Food </h4>
                                </a>
                                <a href="#tab6" data-bs-toggle="tab">
                                    <h4> Drink </h4>
                                </a> -->
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="tab4" class="tab-pane active">
                        <div class="product-slider-active owl-carousel product-nav">
                            <?php
                            $i = 0;
                            foreach ($dmnew as $dm) {
                                extract($dm);
                                $iddm = "index.php?act=spdm&iddm=" . $id;
                                $hinh = $img_path . $hinhdm;
                                echo '<div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="' . $iddm . '">
                                                <img src="' . $hinh . '" alt="">
                                            </a>
                                            <div class="product-action">
                                            <div class="pro-action-left w100">
                                            <input type="hidden" name="id" value="' . $id . '">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4>
                                                <a href="' . $iddm . '">' . $tendm . '</a>
                                            </h4>
                                        </div>
                                    </div>';
                            }
                            ?>
                        </div>
                    </div>
                    <!-- <div id="tab5" class="tab-pane">
                                <div class="product-slider-active owl-carousel product-nav">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-5.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-6.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$200.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-7.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$90.00</span>
                                                <span class="product-price-old">$100.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-8.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$50.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab6" class="tab-pane">
                                <div class="product-slider-active owl-carousel product-nav">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-9.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-10.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$200.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-1.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$90.00</span>
                                                <span class="product-price-old">$100.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-2.jpg" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$50.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                </div>
            </div>
            <div class="best-food-width-1 mrg-small-35">
                <div class="single-banner">
                    <div class="hover-style">
                        <a href="#"><img src="assets/img/banner/banner-6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- all js here -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/ajax-mail.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>