-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2023 at 04:08 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_binhluan`
--

CREATE TABLE `tb_binhluan` (
  `id` int NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tendn` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `idsp` int NOT NULL,
  `tensp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngaybinhluan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_binhluan`
--

INSERT INTO `tb_binhluan` (`id`, `noidung`, `tendn`, `idsp`, `tensp`, `ngaybinhluan`) VALUES
(121, 'Giao hàng nhanh đóng gói kỹ, giá hợp lý', 'user5', 15, 'Cà phê đen Birdy Stay awake', '04/12/2023'),
(122, 'Cafe thơm ngon, đậm đà dễ uống', 'user5', 16, 'Cà phê sữa The Coffee House', '04/12/2023'),
(123, 'vị coffee đậm vị, ngon đúng chuẩn nha.', 'user1', 17, 'Cà phê sữa Birdy Stay awake', '04/12/2023'),
(124, 'giao hàng nhanh, nước ngon thơm', 'user1', 30, 'Yooh - Nước Trái Cây Tươi Me', '04/12/2023'),
(125, 'Nước trái cây siu ngon, rất thơm, dễ uống, 1 phần có hỗ trợ giảm cân, rẻ phù hợp với túi tiền', 'user1', 31, 'Yooh - Nước Trái Cây Tươi Ổi', '04/12/2023'),
(126, 'Giao hàng nhanh, đóng gói cẩn thận', 'user1', 36, 'Coca Light', '04/12/2023'),
(127, 'Pepsi ngon, chọn giao hỏa tốc 15 phút là nhận được, số lượng đủ.', 'user2', 61, 'Pepsi Cola lon 320ml', '04/12/2023'),
(128, 'nước ngọt này nhiều ga hơn những loại khác nên uống thích hơn nhiều', 'user2', 60, 'Coca‑Cola Truyền Thống', '04/12/2023'),
(129, ' nước ngon , mùi giống vs vị nước hoa quả thật , nên mua ạ', 'user2', 59, 'Yooh - Nước Trái Cây Tươi Xoài', '04/12/2023');

-- --------------------------------------------------------

--
-- Table structure for table `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `id` int NOT NULL,
  `tendm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `hinhdm` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`id`, `tendm`, `hinhdm`) VALUES
(1, 'Coffee', 'danhmuc2.jpg'),
(3, 'Nước uống có gas', 'danhmuc8.png'),
(6, 'Đồ uống có cồn ', 'danhmuc5.png'),
(22, 'Nước trái cây', 'danhmuc1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_donhang`
--

CREATE TABLE `tb_donhang` (
  `id` int NOT NULL,
  `makh` int DEFAULT '0',
  `tenkh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dc_dh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sdt_dh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email_dh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pttt` varchar(50) DEFAULT NULL,
  `ngaydathang` varchar(50) NOT NULL,
  `tong` int NOT NULL DEFAULT '0',
  `trangthai_dh` tinyint(1) NOT NULL DEFAULT '0',
  `ten_nguoinhan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dc_nguoinhan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `sdt_nguoinhan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_donhang`
--

INSERT INTO `tb_donhang` (`id`, `makh`, `tenkh`, `dc_dh`, `sdt_dh`, `email_dh`, `pttt`, `ngaydathang`, `tong`, `trangthai_dh`, `ten_nguoinhan`, `dc_nguoinhan`, `sdt_nguoinhan`) VALUES
(81, 12, 'user3', 'Hoài Đức - Hà Nội', '0123456789123', 'user3@gmail.com', NULL, '01/12/2023', 30000, 4, NULL, NULL, NULL),
(82, 12, 'user3', 'Hoài Đức - Hà Nội', '0123456789123', 'user3@gmail.com', NULL, '01/12/2023', 46000, 4, NULL, NULL, NULL),
(83, 12, 'user3', 'Hoài Đức - Hà Nội', '0123456789123', 'user3@gmail.com', NULL, '01/12/2023', 34000, 4, NULL, NULL, NULL),
(86, 12, 'user3', 'Hoài Đức - Hà Nội', '0123456789123', 'user3@gmail.com', NULL, '01/12/2023', 30000, 4, NULL, NULL, NULL),
(87, 12, 'user3', 'Hoài Đức - Hà Nội', '0123456789123', 'user3@gmail.com', NULL, '01/12/2023', 10000, 4, NULL, NULL, NULL),
(90, 11, 'user2', 'Hà Nội', '0123456789', 'user2@gmail.com', NULL, '01/12/2023', 34000, 4, NULL, NULL, NULL),
(93, 11, 'user2', 'Hà Nội', '0123456789', 'user2@gmail.com', NULL, '01/12/2023', 30000, 4, NULL, NULL, NULL),
(95, 11, 'user2', 'Hà Nội', '0123456789', 'user2@gmail.com', NULL, '01/12/2023', 34000, 4, NULL, NULL, NULL),
(96, 11, 'user2', 'Hà Nội', '0123456789', 'user2@gmail.com', NULL, '01/12/2023', 34000, 4, NULL, NULL, NULL),
(97, 9, 'user4', 'Vân Canh - Hà Nội', '0123456789', 'user4@gmail.com', NULL, '01/12/2023', 183000, 4, NULL, NULL, NULL),
(98, 9, 'user4', 'Vân Canh - Hà Nội', '0123456789', 'user4@gmail.com', NULL, '01/12/2023', 193000, 4, NULL, NULL, NULL),
(99, 9, 'user4', 'Vân Canh - Hà Nội', '0123456789', 'user4@gmail.com', NULL, '01/12/2023', 119000, 4, NULL, NULL, NULL),
(101, 9, 'user4', 'Vân Canh - Hà Nội', '0123456789', 'user4@gmail.com', NULL, '01/12/2023', 129000, 4, NULL, NULL, NULL),
(102, 9, 'user4', 'Vân Canh - Hà Nội', '0123456789', 'user4@gmail.com', NULL, '01/12/2023', 129000, 4, NULL, NULL, NULL),
(104, 9, 'user4', 'Vân Canh - Hà Nội', '0123456789', 'user4@gmail.com', NULL, '01/12/2023', 42000, 4, NULL, NULL, NULL),
(106, 9, 'user4', 'Vân Canh - Hà Nội', '0123456789', 'user4@gmail.com', NULL, '01/12/2023', 119000, 4, NULL, NULL, NULL),
(107, 9, 'user4', 'Vân Canh - Hà Nội', '0123456789', 'user4@gmail.com', NULL, '01/12/2023', 119000, 4, NULL, NULL, NULL),
(108, 10, 'user1', 'Hà Nội - Vân Canh', '0123456789', 'user123@gmail.com', NULL, '01/12/2023', 152000, 4, NULL, NULL, NULL),
(112, 10, 'user1', 'Hà Nội - Vân Canh', '0123456789', 'user1@gmail.com', NULL, '02/12/2023', 119000, 4, NULL, NULL, NULL),
(119, 10, 'user1', 'Hà Nội - Vân Canh', '0123456789', 'user1@gmail.com', NULL, '02/12/2023', 10000, 4, NULL, NULL, NULL),
(120, 10, 'user1', 'Hà Nội - Vân Canh', '0123456789', 'user1@gmail.com', NULL, '03/12/2023', 99000, 4, NULL, NULL, NULL),
(121, 10, 'user1', 'Hà Nội - Vân Canh', '0123456789', 'user1@gmail.com', NULL, '03/12/2023', 51000, 4, NULL, NULL, NULL),
(122, 10, 'user1', 'Hà Nội - Vân Canh', '0123456789', 'user1@gmail.com', NULL, '03/12/2023', 74000, 0, NULL, NULL, NULL),
(123, 13, 'user5', 'Hà Nội - Ba Đình', '0123456789', 'user5@gmail.com', NULL, '04/12/2023', 165000, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dshinhanh`
--

CREATE TABLE `tb_dshinhanh` (
  `id` int NOT NULL,
  `img1` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img2` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img3` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_giohang`
--

CREATE TABLE `tb_giohang` (
  `id` int NOT NULL,
  `makh` int NOT NULL,
  `masp` int NOT NULL,
  `hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `gia` int NOT NULL DEFAULT '0',
  `soluong` int NOT NULL,
  `thanhtien` int NOT NULL,
  `iddonhang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tb_giohang`
--

INSERT INTO `tb_giohang` (`id`, `makh`, `masp`, `hinh`, `ten`, `gia`, `soluong`, `thanhtien`, `iddonhang`) VALUES
(183, 12, 60, '../upload/douong9.png', 'Coca‑Cola Truyền Thống', 10000, 1, 10000, 81),
(184, 12, 61, '../upload/douong12.jpg', 'Pepsi Cola lon 320ml', 10000, 1, 10000, 81),
(185, 12, 59, '../upload/douong17.jpg', 'Yooh - Nước Trái Cây Tươi Xoài', 10000, 1, 10000, 81),
(186, 12, 59, '../upload/douong17.jpg', 'Yooh - Nước Trái Cây Tươi Xoài', 10000, 1, 10000, 82),
(187, 12, 30, '../upload/douong15.jpg', 'Yooh - Nước Trái Cây Tươi Me', 12000, 1, 12000, 82),
(188, 12, 31, '../upload/douong19.jpg', 'Yooh - Nước Trái Cây Tươi Ổi', 12000, 1, 12000, 82),
(189, 12, 48, '../upload/douong16.jpg', 'Yooh - Nước Trái Cây Tươi Mãng Cầu', 12000, 1, 12000, 82),
(190, 12, 15, '../upload/douong21.jpg', 'Cà phê đen Birdy Stay awake', 11000, 1, 11000, 83),
(191, 12, 16, '../upload/douong20.jpg', 'Cà phê sữa The Coffee House', 12000, 1, 12000, 83),
(192, 12, 17, '../upload/douong22.jpg', 'Cà phê sữa Birdy Stay awake', 11000, 1, 11000, 83),
(193, 12, 60, '../upload/douong9.png', 'Coca‑Cola Truyền Thống', 10000, 1, 10000, 86),
(194, 12, 61, '../upload/douong12.jpg', 'Pepsi Cola lon 320ml', 10000, 1, 10000, 86),
(195, 12, 60, '../upload/douong9.png', 'Coca‑Cola Truyền Thống', 10000, 1, 10000, 86),
(196, 12, 60, '../upload/douong9.png', 'Coca‑Cola Truyền Thống', 10000, 1, 10000, 87),
(197, 11, 15, '../upload/douong21.jpg', 'Cà phê đen Birdy Stay awake', 11000, 1, 11000, 90),
(198, 11, 16, '../upload/douong20.jpg', 'Cà phê sữa The Coffee House', 12000, 1, 12000, 90),
(199, 11, 17, '../upload/douong22.jpg', 'Cà phê sữa Birdy Stay awake', 11000, 1, 11000, 90),
(200, 11, 59, '../upload/douong17.jpg', 'Yooh - Nước Trái Cây Tươi Xoài', 10000, 1, 10000, 93),
(201, 11, 60, '../upload/douong9.png', 'Coca‑Cola Truyền Thống', 10000, 1, 10000, 93),
(202, 11, 61, '../upload/douong12.jpg', 'Pepsi Cola lon 320ml', 10000, 1, 10000, 93),
(203, 11, 15, '../upload/douong21.jpg', 'Cà phê đen Birdy Stay awake', 11000, 1, 11000, 95),
(204, 11, 16, '../upload/douong20.jpg', 'Cà phê sữa The Coffee House', 12000, 1, 12000, 95),
(205, 11, 17, '../upload/douong22.jpg', 'Cà phê sữa Birdy Stay awake', 11000, 1, 11000, 95),
(206, 11, 15, '../upload/douong21.jpg', 'Cà phê đen Birdy Stay awake', 11000, 1, 11000, 96),
(207, 11, 16, '../upload/douong20.jpg', 'Cà phê sữa The Coffee House', 12000, 1, 12000, 96),
(208, 11, 17, '../upload/douong22.jpg', 'Cà phê sữa Birdy Stay awake', 11000, 1, 11000, 96),
(209, 9, 54, '../upload/douong25.jpg', 'Cà phê sữa hạt Latte NesCafé vị hạt phỉ', 64000, 1, 64000, 97),
(210, 9, 54, '../upload/douong25.jpg', 'Cà phê sữa hạt Latte NesCafé vị hạt phỉ', 64000, 1, 64000, 97),
(211, 9, 53, '../upload/douong24.jpg', 'Cà phê sữa MacCoffee Café Phố Gold', 55000, 1, 55000, 97),
(212, 9, 54, '../upload/douong25.jpg', 'Cà phê sữa hạt Latte NesCafé vị hạt phỉ', 64000, 1, 64000, 98),
(213, 9, 54, '../upload/douong25.jpg', 'Cà phê sữa hạt Latte NesCafé vị hạt phỉ', 64000, 1, 64000, 98),
(214, 9, 53, '../upload/douong24.jpg', 'Cà phê sữa MacCoffee Café Phố Gold', 55000, 1, 55000, 98),
(215, 9, 45, '../upload/douong13.jpg', 'Lon Sprite 320ml', 10000, 1, 10000, 98),
(216, 9, 53, '../upload/douong24.jpg', 'Cà phê sữa MacCoffee Café Phố Gold', 55000, 1, 55000, 99),
(217, 9, 54, '../upload/douong25.jpg', 'Cà phê sữa hạt Latte NesCafé vị hạt phỉ', 64000, 1, 64000, 99),
(218, 9, 59, '../upload/douong17.jpg', 'Yooh - Nước Trái Cây Tươi Xoài', 10000, 1, 10000, 101),
(219, 9, 53, '../upload/douong24.jpg', 'Cà phê sữa MacCoffee Café Phố Gold', 55000, 1, 55000, 101),
(220, 9, 54, '../upload/douong25.jpg', 'Cà phê sữa hạt Latte NesCafé vị hạt phỉ', 64000, 1, 64000, 101),
(221, 9, 59, '../upload/douong17.jpg', 'Yooh - Nước Trái Cây Tươi Xoài', 10000, 1, 10000, 102),
(222, 9, 53, '../upload/douong24.jpg', 'Cà phê sữa MacCoffee Café Phố Gold', 55000, 1, 55000, 102),
(223, 9, 54, '../upload/douong25.jpg', 'Cà phê sữa hạt Latte NesCafé vị hạt phỉ', 64000, 1, 64000, 102),
(224, 9, 59, '../upload/douong17.jpg', 'Yooh - Nước Trái Cây Tươi Xoài', 10000, 1, 10000, 104),
(225, 9, 58, '../upload/douong29.jpg', 'Nước Uống Có Ga Bia Gừng Bickford', 32000, 1, 32000, 104),
(227, 9, 53, '../upload/douong24.jpg', 'Cà phê sữa MacCoffee Café Phố Gold', 55000, 1, 55000, 106),
(228, 9, 54, '../upload/douong25.jpg', 'Cà phê sữa hạt Latte NesCafé vị hạt phỉ', 64000, 1, 64000, 106),
(229, 9, 53, '../upload/douong24.jpg', 'Cà phê sữa MacCoffee Café Phố Gold', 55000, 1, 55000, 107),
(230, 9, 54, '../upload/douong25.jpg', 'Cà phê sữa hạt Latte NesCafé vị hạt phỉ', 64000, 1, 64000, 107),
(231, 10, 30, '../upload/douong15.jpg', 'Yooh - Nước Trái Cây Tươi Me', 12000, 1, 12000, 108),
(232, 10, 31, '../upload/douong19.jpg', 'Yooh - Nước Trái Cây Tươi Ổi', 12000, 1, 12000, 108),
(233, 10, 54, '../upload/douong25.jpg', 'Cà phê sữa hạt Latte NesCafé vị hạt phỉ', 64000, 1, 64000, 108),
(234, 10, 54, '../upload/douong25.jpg', 'Cà phê sữa hạt Latte NesCafé vị hạt phỉ', 64000, 1, 64000, 108),
(238, 10, 53, '../upload/douong24.jpg', 'Cà phê sữa MacCoffee Café Phố Gold', 55000, 1, 55000, 112),
(239, 10, 54, '../upload/douong25.jpg', 'Cà phê sữa hạt Latte NesCafé vị hạt phỉ', 64000, 1, 64000, 112),
(243, 10, 59, '../upload/douong17.jpg', 'Yooh - Nước Trái Cây Tươi Xoài', 10000, 1, 10000, 116),
(244, 10, 60, '../upload/douong9.png', 'Coca‑Cola Truyền Thống', 10000, 1, 10000, 117),
(245, 10, 59, '../upload/douong17.jpg', 'Yooh - Nước Trái Cây Tươi Xoài', 10000, 1, 10000, 118),
(246, 10, 60, '../upload/douong9.png', 'Coca‑Cola Truyền Thống', 10000, 1, 10000, 119),
(247, 10, 57, '../upload/douong28.jpg', 'Bia Tiger Crystal lon', 19000, 1, 19000, 120),
(248, 10, 59, '../upload/douong17.jpg', 'Yooh - Nước Trái Cây Tươi Xoài', 10000, 2, 10000, 120),
(249, 10, 16, '../upload/douong20.jpg', 'Cà phê sữa The Coffee House', 12000, 5, 12000, 120),
(250, 10, 59, '../upload/douong17.jpg', 'Yooh - Nước Trái Cây Tươi Xoài', 10000, 4, 10000, 121),
(251, 10, 17, '../upload/douong22.jpg', 'Cà phê sữa Birdy Stay awake', 11000, 1, 11000, 121),
(252, 10, 15, '../upload/douong21.jpg', 'Cà phê đen Birdy Stay awake', 11000, 4, 11000, 122),
(253, 10, 60, '../upload/douong9.png', 'Coca‑Cola Truyền Thống', 10000, 3, 10000, 122),
(254, 13, 53, '../upload/douong24.jpg', 'Cà phê sữa MacCoffee Café Phố Gold', 55000, 3, 165000, 123);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lienhe`
--

CREATE TABLE `tb_lienhe` (
  `id` int NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `so_dien _thoai` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `id` int NOT NULL,
  `tensp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `giasp` int DEFAULT NULL,
  `soluong` int NOT NULL DEFAULT '0',
  `hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mota` text,
  `donvi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ngaynhap` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`id`, `tensp`, `giasp`, `soluong`, `hinh`, `mota`, `donvi`, `ngaynhap`, `iddm`) VALUES
(15, 'Cà phê đen Birdy Stay awake', 11000, 1000, 'douong21.jpg', 'Dòng sản phẩm cà phê lon uống liền của Birdy được sản xuất từ 100% hạt cà phê thượng hạng, mang đến hương vị cà phê đậm đà, đậm vị, sảng khoái. Cà phê đen Birdy Stay awake 170ml thơm ngon, tiện lợi giúp bạn tập trung trong công việc và bổ sung nhiều năng lượng hơn.', 'Lon', '2023-11-16', 1),
(16, 'Cà phê sữa The Coffee House', 12000, 1000, 'douong20.jpg', 'Cà phê lon uống liền tiện lợi mang hương vị thơm ngon đến khó cưỡng của The Coffee House được nhà nhà yêu thích. 6 lon cà phê sữa The Coffee House 180ml với vị béo ngọt thanh từ sữa quyện với vị đắng của cà phê xua tan mọi cơn buồn ngủ uể oải, giúp bạn tỉnh táo làm việc.', 'Lon', '2023-11-17', 1),
(17, 'Cà phê sữa Birdy Stay awake', 11000, 1000, 'douong22.jpg', 'Dòng sản phẩm cà phê lon uống liền của Birdy được sản xuất từ 100% hạt cà phê thượng hạng, mang đến hương vị cà phê đậm đà, sảng khoái hơn. Cà phê sữa Birdy Stay awake 170ml không chỉ thơm ngon mà còn tiện lợi giúp bạn tập trung trong công việc và cảm thấy tràn đầy năng lượng hơn.', 'Lon', '2023-11-16', 1),
(30, 'Yooh - Nước Trái Cây Tươi Me', 12000, 1000, 'douong15.jpg', 'Là sản phẩm được chọn lọc từ những trái me tươi, sản xuất theo quy trình hiện đại. Nước ép hoàn toàn không chứa cholesterol, không phẩm màu, tốt cho người sử dụng. Yooh là sự lựa chọn tốt dành cho bạn và gia đình. Cam kết chính hãng, chất lượng và an toàn', 'Lon', '2023-11-25', 22),
(31, 'Yooh - Nước Trái Cây Tươi Ổi', 12000, 1000, 'douong19.jpg', 'Được đảm bảo sử dụng 100% nguyên liệu từ ổi chín, tươi ngon, được tuyển chọn kỹ càng từ những vùng trái cây lớn hàng đầu Việt Nam. Nước ép ổi Yooh 240ml có hương vị thơm ngon, ngọt tự nhiên chưa nhiều vitamin tốt cho cơ thể. Sản phẩm không cholesterol, không phẩm màu, tốt cho người sử dụng.', 'Lon', '2023-12-01', 22),
(36, 'Coca Light', 10000, 200, 'douong8.png', 'Thức uống có ga sảng khoái, với vị Cola đặc trưng và chút caffein; giúp bạn không chỉ cảm thấy thật sảng khoái mà còn làm những giây phút nghỉ ngơi, những bữa ăn thêm hứng khởi. Cho bạn thêm lựa chọn với dòng sản phẩm không đường, không calorie.', 'Lon', '2023-11-27', 3),
(38, 'Coca‑Cola Không Đường', 10000, 200, 'douong10.png', 'Thức uống có ga sảng khoái, với vị Cola đặc trưng và chút caffein; giúp bạn không chỉ cảm thấy thật sảng khoái mà còn làm những giây phút nghỉ ngơi, những bữa ăn thêm hứng khởi. Cho bạn thêm lựa chọn với dòng sản phẩm không đường, không calorie.', 'Lon', '2023-11-29', 3),
(45, 'Lon Sprite 320ml', 10000, 200, 'douong13.jpg', 'Sprite là thương hiệu nước giải khát có gas vị chanh số một thế giới hiện nay, được ưa chuộng tại hơn 200 quốc gia. Được làm từ những nguyên liệu đảm  bảo an toàn sức khoẻ, kết hợp với vị chanh tươi mát tự nhiên, Sprite giúp bạn đáp tan cơn khát một cách nhanh chóng, cung cấp vitamin C cho cơ thể khỏe khoắn và tinh thần luôn tươi vui mỗi ngày. ', 'Lon', '2023-12-01', 3),
(46, 'Fanta vị cam 330ml', 10000, 200, 'douong14.jpg', 'Sản phẩm được làm từ nước ép cam nguyên chất, có hương vị thơm ngon và hấp dẫn, tự nhiên.\r\nNước giải khát hương cam Fanta chứa nhiều vitamin C sẽ cung cấp năng lượng cho cơ thể trong một ngày dài hoạt động.\r\nNgoài ra, với công nghệ sản xuất hiện đại, sản phẩm đạt tiêu chuẩn vệ sinh an toàn thực phẩm, không gây ảnh hưởng đến sức khỏe của bạn', 'Lon', '2023-12-01', 3),
(48, 'Yooh - Nước Trái Cây Tươi Mãng Cầu', 12000, 1000, 'douong16.jpg', 'Sản phẩm nước trái cây với thành phần là mãng cầu tươi giữ nguyên hương vị tự nhiên, ngọt thanh mát lạnh thích hợp làm nước giải khát trong những ngày nóng nực. Nước mãng cầu rất giàu vitamin C, B1, ​​B2 và các khoáng chất cùng hàm lượng chất xơ cao, làm tăng tốc quá trình tiêu hóa.', 'Lon', '2023-12-01', 22),
(50, 'Yooh - Nước Trái Cây Tươi Dứa', 10000, 1000, 'douong18.jpg', 'Nước ép dứa Yooh với thành phần từ những trái cây giàu vitamin, có hương vị chua, mát hợp khẩu vị nhiều người tiêu dùng Đối với trẻ em dứa rất giàu chất xơ và các enzym vì vậy việc cho các bé uống nước ép dứa sẽ giúp kích thích tiêu hóa, giúp hệ tiêu hóa hoạt động ổn định hơn.', 'Lon', '2023-12-01', 22),
(51, 'Bia Sài Gòn Lager ', 12000, 1000, 'douong3.jpg', 'Được sản xuất tại Việt Nam từ nước, malt đại mạch, ngũ cốc và hoa bia, chính hãng thương hiệu bia Sài Gòn. Thùng 24 lon bia Sài Gòn Lager 330ml có hương vị đậm đà, thơm ngon, cùng hương thơm ngũ cốc dễ chịu giúp bạn thăng hoa hơn, sảng khoái hơn trong những cuộc vui cùng gia đình và bạn bè.', 'Lon', '2023-12-01', 6),
(52, 'Cà phê đen NesCafé Café ', 13000, 1000, 'douong23.jpg', 'Cà phê đen NesCafé Café Việt là sản phẩm cà phê lon được sản xuất từ 100% từ những hạt cà phệ Việt Nam chất lượng, được tuyển chọn và sàng lọc, rang xay theo công nghệ độc quyền của NesCafé', 'Lon', '2023-12-01', 1),
(53, 'Cà phê sữa MacCoffee Café Phố Gold', 55000, 201, 'douong24.jpg', 'Được chọn lọc từ nguồn cà phê hảo hạng với công thức phối trộn độc đáo, bổ sung thêm cà phê rang xay hương vị đậm đà. Cà phê sữa MacCoffee Café Phố Gold 3in1 290g chính hãng cà phê hòa tan Maccoffee, hương vị đúng chuẩn cà phê sữa pha phin thơm béo hấp dẫn', 'Hộp', '2023-12-01', 1),
(54, 'Cà phê sữa hạt Latte NesCafé vị hạt phỉ', 64000, 200, 'douong25.jpg', 'Là sự hòa quyện của cà phê Latte sành điệu và sữa hạt hạnh nhân sánh mịn, bổ dưỡng, không chỉ mang đến trải nghiệm cà phê thơm ngon khó cưỡng, mà còn bổ sung dinh dưỡng, bừng tỉnh năng lượng, tỉnh táo để khởi động một ngày mới hiệu quả.', 'Hộp', '2023-12-01', 1),
(55, 'Bia Heineken Lon', 20000, 1000, 'douong30.jpg', 'Bia Heineken được sản xuất từ những nguyên liệu tinh khiết nhất để luôn bảo đảm một hương vị hoàn hảo không đổi và chinh phục hơn 192 quốc gia trên toàn thế giới.', 'Lon', '2023-12-01', 6),
(56, 'Bia 333', 12000, 1000, 'douong27.jpg', 'Là thương hiệu lâu đời và nổi tiếng tại Việt Nam, giá cả phải chăng phù hợp với mọi nhà, cho bữa tiệc của bạn thêm niềm vui và ý nghĩa.', 'Lon', '2023-12-01', 6),
(57, 'Bia Tiger Crystal lon', 19000, 200, 'douong28.jpg', ' Độ cồn 4.6%. thành phần nước đại mạch. ngũ cốc và hoa bia. ngon hơn khi uống lạnh.', 'Lon', '2023-12-01', 6),
(58, 'Nước Uống Có Ga Bia Gừng Bickford', 32000, 200, 'douong29.jpg', 'Hướng dẫn sử dụng:\r\n\r\n- Dùng uống trực tiếp.\r\n\r\n- Ngon hơn khi dùng lạnh', 'Chai', '2023-12-01', 6),
(59, 'Yooh - Nước Trái Cây Tươi Xoài', 10000, 1000, 'douong17.jpg', 'Sản phẩm nước trái cây được chiết xuất từ trái xoài tươi chín mọng, có vị ngọt dịu nhẹ, hương thơm đặc trưng, cung cấp nước và các vitamin thiết yếu cho cơ thể, giúp bạn luôn tươi trẻ, tràn đầy năng lượng. Nước ép hoàn toàn không chứa cholesterol, không phẩm màu, tốt cho người sử dụng.', 'Lon', '2023-12-01', 22),
(60, 'Coca‑Cola Truyền Thống', 10000, 1000, 'douong9.png', 'Thức uống có ga sảng khoái, với vị Cola đặc trưng và chút caffein; giúp bạn không chỉ cảm thấy thật sảng khoái mà còn làm những giây phút nghỉ ngơi, những bữa ăn thêm hứng khởi.', 'Lon', '2023-11-29', 3),
(61, 'Pepsi Cola lon 320ml', 10000, 1000, 'douong12.jpg', 'Sản phẩm từ thương hiệu nước ngọt Pepsi nổi tiếng toàn cầu với mùi vị thơm ngon với hỗn hợp hương tự nhiên cùng chất tạo ngọt tổng hợp, giúp xua tan cơn khát và cảm giác mệt mỏi. Nước ngọt Pepsi Cola lon 320ml bổ sung năng lượng làm việc mỗi ngày. Cam kết nước ngọt chính hãng, chất lượng và an toàn', 'Lon', '2023-12-01', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sanpham_donhang`
--

CREATE TABLE `tb_sanpham_donhang` (
  `id_sanpham` int NOT NULL,
  `ten_sanpham` varchar(255) NOT NULL,
  `gia_sanpham` double(10,2) NOT NULL,
  `so_luong` int NOT NULL,
  `ngay_dat_hang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sanpham_img`
--

CREATE TABLE `tb_sanpham_img` (
  `id` int NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_taikhoan`
--

CREATE TABLE `tb_taikhoan` (
  `id` int NOT NULL,
  `tendn` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mk` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `dc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sdt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `vaitro` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT 'Khách hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tb_taikhoan`
--

INSERT INTO `tb_taikhoan` (`id`, `tendn`, `mk`, `hinh`, `email`, `dc`, `sdt`, `vaitro`) VALUES
(9, 'user4', '123', 'kh1.png', 'user4@gmail.com', 'Vân Canh - Hà Nội', '0123456789', 'Khách hàng'),
(10, 'user1', '123', 'kh1.png', 'user1@gmail.com', 'Hà Nội - Vân Canh', '0123456789', 'Khách hàng'),
(11, 'user2', '123', 'kh1.png', 'user2@gmail.com', 'Hà Nội', '0123456789', 'Khách hàng'),
(12, 'user3', '123', 'kh1.png', 'user3@gmail.com', 'Hoài Đức - Hà Nội', '0123456789123', 'Khách hàng'),
(13, 'user5', '123', 'kh1.png', 'user5@gmail.com', 'Hà Nội ', '0123456789', 'Khách hàng'),
(14, 'user6', '123', 'kh1.png', 'user6@gmail.com', 'Hoài Đức - Hà Nội', '0123456789', 'Khách hàng'),
(19, 'user7', '123', 'kh1.png', 'user7@gmail.com', 'Hà Nội - Ba Đình', '0123456789', 'Khách hàng');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vaitro`
--

CREATE TABLE `tb_vaitro` (
  `id` int NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_vaitro`
--

INSERT INTO `tb_vaitro` (`id`, `role`) VALUES
(1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dshinhanh`
--
ALTER TABLE `tb_dshinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_giohang`
--
ALTER TABLE `tb_giohang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `tb_sanpham_donhang`
--
ALTER TABLE `tb_sanpham_donhang`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Indexes for table `tb_sanpham_img`
--
ALTER TABLE `tb_sanpham_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_vaitro`
--
ALTER TABLE `tb_vaitro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_donhang`
--
ALTER TABLE `tb_donhang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `tb_dshinhanh`
--
ALTER TABLE `tb_dshinhanh`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_giohang`
--
ALTER TABLE `tb_giohang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tb_sanpham_donhang`
--
ALTER TABLE `tb_sanpham_donhang`
  MODIFY `id_sanpham` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sanpham_img`
--
ALTER TABLE `tb_sanpham_img`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_vaitro`
--
ALTER TABLE `tb_vaitro`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `tb_danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
