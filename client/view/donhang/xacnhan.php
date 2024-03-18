<?php
if (isset($bill) && (is_array($bill))) {
    extract($bill);
}
?>
<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Đặt hàng thành công</li>
            </ul>
        </div>
    </div>
</div>
<!-- my account start -->
<div class="myaccount-area pb-80 pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="ml-auto mr-auto col-lg-9">
                <div class="checkout-wrapper">
                    <div id="faq" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-1"
                                        class="text-danger fw-bold">Đặt hàng thành công</a></h5>
                            </div>
                            <div id="my-account-1" class="panel-collapse collapse show" data-bs-parent="#faq">
                                <div class="panel-body">
                                    <div class="billing-information-wrapper">
                                        <div class="account-info-wrapper">
                                            <h5>Thông tin đơn hàng</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Mã đơn hàng</label>
                                                    <input type="text" value="DH-<?= $bill['id']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Ngày đặt hàng</label>
                                                    <input type="text" value="<?= $bill['ngaydathang']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="billing-info">
                                                    <label>Giá trị đơn hàng</label>
                                                    <input type="text" value="<?= number_format($bill['tong'], 0, ",", "."); ?> đ" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-2">Thông tin đặt
                                        hàng</a></h5>
                            </div>
                            <div id="my-account-2" class="panel-collapse collapse show" data-bs-parent="#faq">
                                <div class="panel-body">
                                    <div class="billing-information-wrapper">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Người đặt hàng</label>
                                                    <input type="text" value="<?= $bill['tenkh']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Địa chỉ</label>
                                                    <input type="text" value="<?= $bill['dc_dh']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Email</label>
                                                    <input type="email" value="<?= $bill['email_dh']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Số điện thoại</label>
                                                    <input type="text" value="<?= $bill['sdt_dh']; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><a data-bs-toggle="collapse" data-bs-target="#payment-2">Thông
                                        tin giỏ hàng</a></h5>
                            </div>
                            <div id="payment-2" class="panel-collapse collapse show" data-bs-parent="#faq">
                                <div class="panel-body">
                                    <div class="order-review-wrapper">
                                        <div class="order-review">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="width-1">Tên sản phẩm</th>
                                                            <th class="width-2">Đơn giá</th>
                                                            <th class="width-3">Số lượng</th>
                                                            <th class="width-4">Thành tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <?php
                                                    global $img_path;
                                                    $tong = 0;
                                                    foreach ($_SESSION['mycart'] as $cart) {
                                                        $hinh = $img_path . $cart[2];
                                                        $ttien = $cart[3] * $cart[4];
                                                        $tong += $ttien; //Tổng tiền và đơn hàng
                                                        echo '<tbody>
                                                                <tr>
                                                                <td>
                                                                    <div class="o-pro-dec">
                                                                        <p>' . $cart[1] . '</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="o-pro-price">
                                                                        <p>' . number_format($cart[3], 0, ",", ".") . ' <u>đ</u></p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="o-pro-qty">
                                                                        <p>' . $cart[4] . '</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="o-pro-subtotal">
                                                                        <p>' . number_format($ttien, 0, ",", ".") . ' <u>đ</u></p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                            ';
                                                    }
                                                    ?>
                                                    <?php
                                                    echo '<tfoot>
                                                            <!-- <tr>
                                                                <td colspan="3">Subtotal </td>
                                                                <td colspan="1">$4,001.00</td>
                                                            </tr>
                                                            <tr class="tr-f">
                                                                <td colspan="3">Shipping & Handling (Flat Rate - Fixed</td>
                                                                <td colspan="1">$45.00</td>
                                                            </tr>
                                                            <tr> -->
                                                                <td colspan="3">Tổng tiền</td>
                                                                <td colspan="1">' . number_format($tong, 0, ",", ".") . ' <u>đ</u></td>
                                                            </tr>
                                                        </tfoot>';
                                                    ?>
                                                </table>
                                            </div>
                                            <div class="billing-back-btn">
                                                <span>
                                                    <?php
                                                    //Xóa session cart sau khi đặt hàng
                                                    $_SESSION['mycart'] = [];
                                                    ?>
                                                    <a href="index.php">Trở về trang chủ</a>
                                                </span>
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