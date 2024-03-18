<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Đăng ký</li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area pt-95 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <h4>Đăng ký</h4>
                <form action="index.php?act=dangky" method="post">
                    <input type="text" name="user" placeholder="Username">
                    <input type="password" name="pass" placeholder="Password" style="margin-top: 20px;">
                    <input type="email" name="email" placeholder="Email" style="margin-top: 20px;">
                    <input type="submit" name="dangky" value="Đăng ký" class="btn-submit mt20">
                </form>
                <div class="thongbao">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
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