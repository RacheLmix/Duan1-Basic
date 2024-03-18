<?php
if (empty($_SESSION['user'])) {
    echo '<script>alert("Vui lòng đăng nhập để tiếp tục !");</script>';
    echo "<script>window.location.href = 'index.php?act=dangnhap';</script>";
}
?>

<?php
if (is_array($donmua)) {
    extract($donmua);
}
?>

<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Đơn mua</li>
            </ul>
        </div>
    </div>
</div>
<!-- shopping-cart-area start -->
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <h3 class="page-title">Đơn hàng của bạn</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="index.php?act=danhan" method="post">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Đơn giá</th>
                                    <th>Tình trạng</th>
                                    <th>Chi tiết</th>
                                    <th>Xác nhận</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listdonmua as $donmua) {
                                    extract($donmua);
                                    $chitietdonmua = "index.php?act=chitietdonmua&id=" . $id;

                                    $ttdh = get_ttdh($trangthai_dh);
                                    if ($trangthai_dh == 2) {
                                        $da_nhan = '<input type="submit" name="xacnhan" value="Đã nhận" class="w80">';
                                    } else {
                                        $da_nhan = '';
                                    }
                                    echo '<tr>
                                            <td class="product-name"><a href="' . $chitietdonmua . '">DH-' . $id . '</a></td>
                                            <td class="product-name"><a href="' . $chitietdonmua . '">' . $sdt_dh . '</a></td>
                                            <td class="product-name"><a href="' . $chitietdonmua . '">' . $dc_dh . '</a></td>
                                            <td class="product-price-cart"><span class="amount">' . number_format($tong, 0, ",", ".") . ' <u>đ</u></span></td>
                                            <td class="product-subtotal text-danger">' . $ttdh . '</td>
                                            <td class="product-subtotal"><a href="' . $chitietdonmua . '" class="icon-eye icons"></a></td>
                                            <td>      
                                                <form action="index.php?act=danhan" method="post">
                                                    <input type="hidden" name="id" value="' . $id . '">
                                                    ' . $da_nhan . '
                                                </form>
                                            </td>
                                        </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="index.php?act=shop">Tiếp tục mua sắm</a>
                                </div>
                                <!-- <div class="cart-clear">
                                    <a href="index.php?act=danhanduochang">Đã nhận được hàng</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </form>
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