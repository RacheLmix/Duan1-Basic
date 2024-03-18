<?php
session_start();
include "../../../model/pdo.php";
include "../../../model/binhluan.php";

$idsp = $_REQUEST['idsp'];
if (isset($_SESSION['tensp'])) {
    $tensp = $_SESSION['tensp'];
} 
$tendn = $_SESSION['user']['tendn'];

$dsbl = loadall_binhluan($idsp);
?>
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
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/slick.css">
    <link rel="stylesheet" href="../../assets/css/chosen.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../assets/css/ionicons.min.css">
    <link rel="stylesheet" href="../../assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div id="des-details3" class="tab-pane">
        <div class="rattings-wrapper">
            <?php
            foreach ($dsbl as $bl) {
                extract($bl);
                echo '<div class="sin-rattings">
                <div class="star-author-all">
                    <table class="table table-hover">
                        <td>' . $tendn . ' <br>' . $ngaybinhluan . '</td>
                        <tr>
                            <td>' . $noidung . '</td>
                        </tr>
                        </table>
                </div>
            </div>';
            }
            ?>
        </div>
        <div class="ratting-form-wrapper">
            <h3>Thêm bình luận :</h3>
            <div class="ratting-form">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="rating-form-style form-submit">
                                <textarea name="noidung" placeholder="Nội dung bình luận"></textarea>
                                <input type="hidden" name="idsp" value="<?= $idsp ?>">
                                <input type="hidden" name="tensp" value="<?= $tensp ?>">
                                <input type="submit" name="guibinhluan" value="Bình luận">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <?php
            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                $noidung = $_POST['noidung'];
                $tendn = $_SESSION['user']['tendn'];
                $idsp = $_POST['idsp'];
                $tensp = $_POST['tensp'];
                $ngaybinhluan = date('d/m/Y');

                insert_binhluan($noidung, $tendn, $idsp, $tensp, $ngaybinhluan);
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
            ?>

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

</body>

</html>