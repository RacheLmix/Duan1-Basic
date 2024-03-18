<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Cửa hàng</li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-page-area pt-100 pb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-topbar-wrapper">
                    <div class="shop-topbar-left">
                        <ul class="view-mode">
                            <li class="active"><a href="#product-grid" data-view="product-grid"><i
                                        class="fa fa-th"></i></a></li>
                            <li><a href="#product-list" data-view="product-list"><i class="fa fa-list-ul"></i></a></li>
                        </ul>
                        <p>Hiển thị 1 - 20 trên 30 kết quả </p>
                    </div>
                    <div class="product-sorting-wrapper">
                        <div class="product-shorting shorting-style">
                            <label>Hiển thị:</label>
                            <select>
                                <option value=""> 20</option>
                                <option value=""> 23</option>
                                <option value=""> 30</option>
                            </select>
                        </div>
                        <div class="product-show shorting-style">
                            <label>Sắp xếp:</label>
                            <select>
                                <option value="">Mặc định</option>
                                <option value=""> Tên</option>
                                <option value=""> Giá</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid-list-product-wrapper">
                    <div class="product-grid product-view pb-20">
                        <div class="row">
                            <?php
                            $i = 0;
                            foreach ($spall as $sp) {
                                extract($sp);
                                $chitietsp = "index.php?act=chitietsp&id=" . $id;
                                $hinh = $img_path . $hinh;
                                echo '<div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                        <div class="product-wrapper">
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
                        </div>
                    </div>
                    <div class="pagination-total-pages">
                        <div class="pagination-style">
                            <ul>
                                <li><a class="prev-next prev" href="#"><i class="ion-ios-arrow-left"></i> Prev</a></li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a class="prev-next next" href="#">Next<i class="ion-ios-arrow-right"></i> </a></li>
                            </ul>
                        </div>
                        <div class="total-pages">
                            <p>Hiển thị 1 - 20 trên 30 kết quả </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="shop-sidebar-wrapper gray-bg-7 shop-sidebar-mrg">
                    <div class="shop-widget">
                        <h4 class="shop-sidebar-title">Danh mục sản phẩm</h4>
                        <div class="shop-catigory">
                            <ul id="faq">
                                <?php
                                foreach ($dmnew as $dm) {
                                    extract($dm);
                                    $iddm = "index.php?act=spdm&iddm=" . $id;
                                    echo '<li> <a href="' . $iddm . '">' . $tendm . '</a> </li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="shop-price-filter mt-40 shop-sidebar-border pt-35">
                                <h4 class="shop-sidebar-title">Price Filter</h4>
                                <div class="price_filter mt-25">
                                    <span>Range:  $100.00 - 1.300.00 </span>
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        </div>
                                        <button type="button">Filter</button> 
                                    </div>
                                </div>
                            </div> -->
                    <!-- <div class="shop-widget mt-40 shop-sidebar-border pt-35">
                                <h4 class="shop-sidebar-title">By Brand</h4>
                                <div class="sidebar-list-style mt-20">
                                    <ul>
                                        <li><input type="checkbox"><a href="#">Poure </a></li>
                                        <li><input type="checkbox"><a href="#">Eveman </a></li>
                                        <li><input type="checkbox"><a href="#">Iccaso </a></li>
                                        <li><input type="checkbox"><a href="#">Annopil </a></li>
                                        <li><input type="checkbox"><a href="#">Origina </a></li>
                                        <li><input type="checkbox"><a href="#">Perini  </a></li>
                                        <li><input type="checkbox"><a href="#">Dolloz </a></li>
                                        <li><input type="checkbox"><a href="#">Spectry </a></li>
                                    </ul>
                                </div>
                            </div> -->
                    <!-- <div class="shop-widget mt-40 shop-sidebar-border pt-35">
                                <h4 class="shop-sidebar-title">By Color</h4>
                                <div class="sidebar-list-style mt-20">
                                    <ul>
                                        <li><input type="checkbox"><a href="#">Black </a></li>
                                        <li><input type="checkbox"><a href="#">Blue </a></li>
                                        <li><input type="checkbox"><a href="#">Green </a></li>
                                        <li><input type="checkbox"><a href="#">Grey </a></li>
                                        <li><input type="checkbox"><a href="#">Red</a></li>
                                        <li><input type="checkbox"><a href="#">White  </a></li>
                                        <li><input type="checkbox"><a href="#">Yellow   </a></li>
                                    </ul>
                                </div>
                            </div> -->
                    <!-- <div class="shop-widget mt-40 shop-sidebar-border pt-35">
                                <h4 class="shop-sidebar-title">Compare Products</h4>
                                <div class="compare-product">
                                    <p>You have no item to compare. </p>
                                    <div class="compare-product-btn">
                                        <span>Clear all </span>
                                        <a href="#">Compare <i class="fa fa-check"></i></a>
                                    </div>
                                </div>
                            </div> -->
                    <!-- <div class="shop-widget mt-40 shop-sidebar-border pt-35">
                                <h4 class="shop-sidebar-title">Popular Tags</h4>
                                <div class="shop-tags mt-25">
                                    <ul>
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">Cheesy</a></li>
                                        <li><a href="#">Fast Food</a></li>
                                        <li><a href="#">French Fries</a></li>
                                        <li><a href="#">Hamburger </a></li>
                                        <li><a href="#">Pizza</a></li>
                                        <li><a href="#">Red Meat</a></li>
                                    </ul>
                                </div>
                            </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
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
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
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