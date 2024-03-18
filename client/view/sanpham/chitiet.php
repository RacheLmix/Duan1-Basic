<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='300'>";
} else {
    $hinh = "Không có hình ảnh";
}

$listdm = loadall_danhmuc();
?>
<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Chi tiết sản phẩm</li>
            </ul>
        </div>
    </div>
</div>
<div class="product-details pt-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="product-details-img text-center">
                    <?= $hinh ?>
                    <div id="gallery" class="mt-20 product-dec-slider owl-carousel">
                        <a data-image="assets/img/product-details/product-detalis-l1.jpg"
                            data-zoom-image="assets/img/product-details/product-detalis-bl1.jpg">
                            <img src="assets/img/product-details/product-detalis-s1.jpg" alt="">
                        </a>
                        <a data-image="assets/img/product-details/product-detalis-l2.jpg"
                            data-zoom-image="assets/img/product-details/product-detalis-bl2.jpg">
                            <img src="assets/img/product-details/product-detalis-s2.jpg" alt="">
                        </a>
                        <a data-image="assets/img/product-details/product-detalis-l3.jpg"
                            data-zoom-image="assets/img/product-details/product-detalis-bl3.jpg">
                            <img src="assets/img/product-details/product-detalis-s3.jpg" alt="">
                        </a>
                        <a data-image="assets/img/product-details/product-detalis-l4.jpg"
                            data-zoom-image="assets/img/product-details/product-detalis-bl4.jpg">
                            <img src="assets/img/product-details/product-detalis-s4.jpg" alt="">
                        </a>
                        <a data-image="assets/img/product-details/product-detalis-l5.jpg"
                            data-zoom-image="assets/img/product-details/product-detalis-bl5.jpg">
                            <img src="assets/img/product-details/product-detalis-s5.jpg" alt="">
                        </a>
                    </div>
                    <!-- <span>-29%</span> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product-details-content">
                    <h4>
                        <?= $tensp ?>
                    </h4>
                    <div class="rating-review">
                        <div class="pro-dec-rating">
                            <i class="ion-android-star-outline theme-star"></i>
                            <i class="ion-android-star-outline theme-star"></i>
                            <i class="ion-android-star-outline theme-star"></i>
                            <i class="ion-android-star-outline theme-star"></i>
                            <i class="ion-android-star-outline"></i>
                        </div>
                        <div class="pro-dec-review">
                            <ul>
                                <li>32 Đánh giá</li>
                                <li>Thêm đánh giá của bạn</li>
                            </ul>
                        </div>
                    </div>
                    <span>
                        <?= number_format($giasp, 0, ",", ".") ?> <u>đ</u>
                    </span>
                    <div class="in-stock">
                        <p>Trạng thái: <span>Còn hàng</span></p>
                    </div>
                    <!-- <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. </p> -->
                    <div class="pro-details-cart-wrap">
                        <?php
                        echo '<form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="tensp" value="' . $tensp . '">
                                <input type="hidden" name="hinh" value="'.$hinhpath.'">
                                <input type="hidden" name="giasp" value="' . $giasp . '">
                                <div class="soluong">
                                    Số lượng: <input type="number" name="soluong" class="mt20" min="1" value="1">
                                </div>
                                <div class="shop-list-cart-wishlist mr20 flex btn-addtocart">
                                    <input type="submit" class="height-40" name="addtocart" value="Thêm vào giỏ hàng">
                                </div>
                            </form>';
                        ?>

                        <!-- <div class="product-quantity">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                            </div>
                        </div> -->
                    </div>
                    <div class="pro-dec-categories">
                        <ul>
                            <li class="categories-title">Đơn vị:</li>
                            <li><a href="#">
                                    <?= $donvi ?>
                                </a></li>
                        </ul>
                    </div>
                    <div class="pro-dec-categories">
                        <ul>
                            <li class="categories-title">Danh mục: </li>
                            <li>
                                <?php
                                foreach ($listdm as $danhmuc) {
                                    extract($danhmuc);
                                    if ($iddm == $danhmuc['id'])
                                        echo '' . $danhmuc['tendm'] . '';
                                }
                                ?>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="pro-dec-social">
                                <ul>
                                    <li><a class="tweet" href="#"><i class="ion-social-twitter"></i> Tweet</a></li>
                                    <li><a class="share" href="#"><i class="ion-social-facebook"></i> Share</a></li>
                                    <li><a class="google" href="#"><i class="ion-social-googleplus-outline"></i> Google+</a></li>
                                    <li><a class="pinterest" href="#"><i class="ion-social-pinterest"></i> Pinterest</a></li>
                                </ul>
                            </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="description-review-area pb-100">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav text-center">
                <a class="active" data-bs-toggle="tab" href="#des-details1">Mô tả</a>
                <a data-bs-toggle="tab" href="#des-details3">Bình luận</a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details1" class="tab-pane active">
                    <div class="product-description-wrapper">
                        <p>
                            <?= $mota ?>
                        </p>
                    </div>
                </div>

                <!-- Bình luận -->
                <div id="des-details3" class="tab-pane">
                    <div id="binhluan" class="tab-pane">
                        <?php
                        $idsp = $_GET['id'];
                        $_SESSION['tensp'] = $tensp;
                        ?>
                        <iframe src="./view/binhluan/binhluan.php?idsp=<?= $idsp ?>" frameborder="0" width="100%" height="500px"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="product-area pb-95">
    <div class="container">
        <div class="product-top-bar section-border mb-25">
            <div class="section-title-wrap">
                <h3 class="section-title section-bg-white">Sản phẩm cùng danh mục</h3>
            </div>
        </div>
        <div class="related-product-active owl-carousel product-nav">
            <?php
            foreach ($sp_cung_loai as $sp_cung_loai) {
                extract($sp_cung_loai);
                $chitietsp = "index.php?act=chitietsp&id=" . $id;
                $hinh = $img_path . $hinh;
                echo '<div class="product-wrapper">
                <div class="product-img">
                    <a href="'.$chitietsp.'">
                        <img src="'.$hinh.'" alt="" width="20%">
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
                        <a href="'.$chitietsp.'">'.$tensp.'</a>
                    </h4>
                    <div class="product-price-wrapper">
                        <span>'.number_format($giasp, 0, ",", ".").' <u>đ</u></span>
                    </div>
                </div>
            </div>
            
            ';
            }
            ?>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <!-- Thumbnail Large Image start -->
                        <div class="tab-content">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="assets/img/product-details/product-detalis-l1.jpg" alt="">
                            </div>
                            <div id="pro-2" class="tab-pane fade">
                                <img src="assets/img/product-details/product-detalis-l2.jpg" alt="">
                            </div>
                            <div id="pro-3" class="tab-pane fade">
                                <img src="assets/img/product-details/product-detalis-l3.jpg" alt="">
                            </div>
                            <div id="pro-4" class="tab-pane fade">
                                <img src="assets/img/product-details/product-detalis-l4.jpg" alt="">
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="product-thumbnail">
                            <div class="thumb-menu owl-carousel nav nav-style" role="tablist">
                                <button class="active" id="pro-1-tab" data-bs-toggle="tab" data-bs-target="#pro-1"
                                    type="button" role="tab" aria-controls="pro-1" aria-selected="true">
                                    <img src="assets/img/product-details/product-detalis-s1.jpg"
                                        alt="product-thumbnail">
                                </button>
                                <button id="pro-2-tab" data-bs-toggle="tab" data-bs-target="#pro-2" type="button"
                                    role="tab" aria-controls="pro-2" aria-selected="true">
                                    <img src="assets/img/product-details/product-detalis-s2.jpg"
                                        alt="product-thumbnail">
                                </button>
                                <button id="pro-3-tab" data-bs-toggle="tab" data-bs-target="#pro-3" type="button"
                                    role="tab" aria-controls="pro-3" aria-selected="true">
                                    <img src="assets/img/product-details/product-detalis-s3.jpg"
                                        alt="product-thumbnail">
                                </button>
                                <button id="pro-4-tab" data-bs-toggle="tab" data-bs-target="#pro-4" type="button"
                                    role="tab" aria-controls="pro-4" aria-selected="true">
                                    <img src="assets/img/product-details/product-detalis-s4.jpg"
                                        alt="product-thumbnail">
                                </button>
                            </div>
                        </div>
                        <!-- Thumbnail image end -->
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="modal-pro-content">
                            <h3>PRODUCTS NAME HERE </h3>
                            <div class="product-price-wrapper">
                                <span>$120.00</span>
                                <span class="product-price-old">$162.00 </span>
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet.</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">L</option>
                                    </select>
                                </div>
                                <div class="quickview-color-wrap">
                                    <label>Color*</label>
                                    <div class="quickview-color">
                                        <ul>
                                            <li class="blue">b</li>
                                            <li class="red">r</li>
                                            <li class="pink">p</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-quantity">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                                <button>Add to cart</button>
                            </div>
                            <span><i class="fa fa-check"></i> In stock</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->








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