<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Giỏ hàng</li>
            </ul>
        </div>
    </div>
</div>
<!-- shopping-cart-area start -->
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <h3 class="page-title">Các mặt hàng trong giỏ hàng của bạn</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <!-- <thead>
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá đơn vị</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead> -->
                            <tbody>
                                <!-- <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/img/cart/cart-3.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Tên sản phẩm</a></td>
                                    <td class="product-price-cart"><span class="amount">$260.00</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$110.00</td>
                                    <td class="product-remove">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr> -->
                                <?php
                                viewcart(1);
                                ?>


                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update"> <a href="index.php?act=donhang">Tiếp tục mua hàng</a> </div>
                                <div class="cart-clear"> 
                                    <a href="index.php?act=shop" class="mr10">Xem thêm sản phẩm</a>
                                    <a href="#">Xóa giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    
                    <form action="process_order.php" method="post">

                        <div class="col-lg-4 col-md-12">
                            <!-- <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Tổng giỏ hàng</h4>
                                </div>
                                <h5>Tổng sản phẩm <span></span></h5>
                                <div class="total-shipping">
                                    <h5>Tổng phí vận chuyển</h5>
                                    <ul>
                                        <li><input type="checkbox" id="standard"> Tiêu chuẩn <span>$20.00</span></li>
                                        <li><input type="checkbox" id="express"> Nhanh <span>$30.00</span></li>
                                    </ul>
                                </div>
                                <h4 class="grand-totall-title">Tổng cộng <span></span> </h4> <a href="#">Chuyển đến Thanh toán</a>
                            </div> -->
                            
                        </div>
                    </form>
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