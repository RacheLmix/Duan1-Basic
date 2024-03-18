<?php
if (empty($_SESSION['user'])) {
    echo '<script>alert("Vui lòng đăng nhập để tiếp tục !");</script>';
    echo "<script>window.location.href = 'index.php?act=dangnhap';</script>";
}
?>
<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active"> Đơn hàng </li>
            </ul>
        </div>
    </div>
</div>
<!-- checkout-area start -->
<div class="checkout-area pb-80 pt-100">
    <form action="index.php?act=xacnhan" method="post">
        <div class="container">
            <div class="row">
                <?php
                if (isset($_SESSION['user'])) {
                    $user = $_SESSION['user']['tendn'];
                    $address = $_SESSION['user']['dc'];
                    $email = $_SESSION['user']['email'];
                    $tel = $_SESSION['user']['sdt'];
                } else {
                    $user = "";
                    $address = "";
                    $email = "";
                    $tel = "";
                }
                ?>
                <div class="col-lg-9">
                    <div class="checkout-wrapper">
                        <div id="faq" class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title"><span>1.</span> <a data-bs-toggle="collapse"
                                            data-bs-target="#payment-1">Thông tin khách hàng</a></h5>
                                </div>
                                <div id="payment-1" class="panel-collapse collapse show" data-bs-parent="#faq">
                                    <div class="panel-body">
                                        <div class="billing-information-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>Người đặt hàng</label>
                                                        <input type="text" name="tendn" value="<?= $tendn ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>Email</label>
                                                        <input type="email" name="email" value="<?= $email ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Địa chỉ</label>
                                                        <input type="text" name="dc" value="<?= $dc ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Số điện thoại</label>
                                                        <input type="text" name="sdt" value="<?= $sdt ?>">
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="billing-back-btn">
                                                <div class="billing-back">
                                                    <a href="#"><i class="ion-arrow-up-c"></i> Trở lại</a>
                                                </div>
                                                <!-- <div class="billing-btn">
                                                <button type="submit">Get a Quote</button>
                                            </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title"><span>2.</span> <a data-bs-toggle="collapse"
                                            data-bs-target="#payment-2">Thông tin giỏ hàng</a></h5>
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
                                                                        <p>$' . number_format($ttien, 0, ",", ".") . ' <u>đ</u></p>
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
                                                        <a href="index.php?act=giohang"> Chỉnh sửa giỏ hàng.</a>
                                                    </span>
                                                    <div class="billing-btn">
                                                        <div>
                                                            <input type="submit" value="XÁC NHẬN ĐẶT HÀNG"
                                                                name="dongydathang" class="button">
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
                <div class="col-lg-3">
                    <div class="checkout-progress">
                        <h4>Tiến độ thanh toán</h4>
                        <ul>
                            <li>Thông tin khách hàng</li>
                            <li>Thông tin giỏ hàng</li>
                            <li>Xác nhận đơn hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>

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