-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 12, 2023 at 07:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `papyrus`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `hoten` varchar(300) DEFAULT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `gioitinh` varchar(30) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `mota` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `hoten`, `sdt`, `gioitinh`, `ngaysinh`, `email`, `diachi`, `status`, `created_at`, `mota`) VALUES
(30, 'Do Minh Quan', '0908402245', NULL, NULL, 'doquan23032003@gmail.com', 'Tân Bình gần sân bay', 1, '2023-03-02 21:19:31', NULL),
(31, 'Bin', '0908402245', NULL, NULL, 'hieu@gmail.com', '21 Lo A Bui Minh Truc P6 Q8', 1, '2023-03-02 21:30:07', NULL),
(32, 'Do Minh Quan', '0908402245', NULL, NULL, 'doquan23032003@gmail.com', 'Tân Bình gần sân bay', 1, '2023-03-02 23:10:59', NULL),
(33, 'Do Minh Quan', '0908402245', NULL, NULL, 'dsdsd2@123', 'Tân Bình gần sân bay', 1, '2023-03-02 23:24:24', NULL),
(34, 'Do Minh Quan', '0908402245', NULL, NULL, '521H0489@12', 'Tân Bình gần sân bay', 1, '2023-03-02 23:25:24', NULL),
(35, 'Do Minh Quan', '1234567889', NULL, NULL, 'doquan23032003@gmail.com', 'vo van kiet', 1, '2023-03-08 17:01:36', NULL),
(36, 'Do Minh Quan', '1234567889', NULL, NULL, 'Doquan23032003@gmail.com', 'vo van kiet', 1, '2023-03-08 17:02:26', NULL),
(37, 'Do Minh Quan', '1234567889', NULL, NULL, 'Doquan23032003@gmail.com', 'vo van kiet', 1, '2023-03-08 17:02:49', NULL),
(38, 'Do Minh Quan', '1234567889', NULL, NULL, 'Doquan23032003@gmail.com', 'vo van kiet', 1, '2023-03-08 17:03:07', NULL),
(39, 'test', '0195236236', NULL, NULL, 'test3123@gmail.com', 'test', 1, '2023-03-08 17:22:37', 'test'),
(40, 'TEST ABC', '0123652369', NULL, NULL, 'TESTABC@GMAIL.COM', 'test', 1, '2023-03-08 17:24:31', 'test123123'),
(41, 'test', '0123652369', NULL, NULL, 'test123123123@GMAIL.COM', 'vo van kiet', 1, '2023-03-08 17:25:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `hoten` varchar(300) DEFAULT NULL,
  `chucvu` varchar(15) DEFAULT 'Nhan vien',
  `gioitinh` int(11) DEFAULT NULL,
  `ngaysinh` datetime DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listproduct`
--

CREATE TABLE `listproduct` (
  `id` int(11) NOT NULL,
  `tendm` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listproduct`
--

INSERT INTO `listproduct` (`id`, `tendm`, `status`, `created_date`) VALUES
(1, 'Card', 1, '2023-02-09'),
(2, 'Birthday', 1, '2023-02-18'),
(3, 'Wedding', 1, '2023-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `phone`) VALUES
(1, 'Admin@gmail.com', '$2y$10$zrshvznMNsjEbOTmMjgnIelwX93.8J1llJIr9pfwlFxba4g5naCWS', ''),
(28, 'doquan@gmail.com', '$2y$10$NU/ewMfWPHUbKnKJXeYwv.zgD9dmD67.zQ0YFoNL.J1C1Dxt3/WpW', '0938365034');

-- --------------------------------------------------------

--
-- Table structure for table `orderform`
--

CREATE TABLE `orderform` (
  `id` int(11) NOT NULL,
  `khachhang_id` int(11) DEFAULT NULL,
  `diachi` varchar(60) DEFAULT NULL,
  `thanhtoan` decimal(10,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderform`
--

INSERT INTO `orderform` (`id`, `khachhang_id`, `diachi`, `thanhtoan`, `status`, `created_at`) VALUES
(40, 30, 'Tân Bình gần sân bay', '800000.00', 1, '2023-03-02 21:19:31'),
(41, 31, '21 Lo A Bui Minh Truc P6 Q8', '800000.00', 1, '2023-03-02 21:30:07'),
(42, 32, 'Tân Bình gần sân bay', '800000.00', 1, '2023-03-02 23:10:59'),
(43, 33, 'Tân Bình gần sân bay', '500000.00', 1, '2023-03-02 23:24:24'),
(44, 34, 'Tân Bình gần sân bay', '500000.00', 1, '2023-03-02 23:25:24'),
(45, 35, 'vo van kiet', '500000.00', 1, '2023-03-08 17:01:36'),
(46, 38, 'vo van kiet', '500000.00', 1, '2023-03-08 17:03:07'),
(47, 41, 'vo van kiet', '500000.00', 1, '2023-03-08 17:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `orderformdetail`
--

CREATE TABLE `orderformdetail` (
  `id` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `id_SP` int(11) NOT NULL,
  `soluongmua` int(11) DEFAULT NULL,
  `giaban` decimal(10,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `link` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderformdetail`
--

INSERT INTO `orderformdetail` (`id`, `id_donhang`, `id_SP`, `soluongmua`, `giaban`, `status`, `created_at`, `link`) VALUES
(1, 40, 1, 2, '400000.00', 1, '2023-03-02 21:19:31', 'modern-business-card-template-with-geometric-shapes_23-2147965214.jpg'),
(2, 40, 3, 1, '500000.00', 1, '2023-03-02 21:19:31', 'abstract-business-card-template_23-2148274267.jpg'),
(3, 40, 2, 1, '500000.00', 1, '2023-03-02 21:19:31', 'abstract-business-card-template_23-2148272064.jpg'),
(4, 41, 1, 2, '400000.00', 1, '2023-03-02 21:30:07', 'modern-business-card-template-with-geometric-shapes_23-2147965214.jpg'),
(5, 41, 3, 1, '500000.00', 1, '2023-03-02 21:30:07', 'abstract-business-card-template_23-2148274267.jpg'),
(6, 41, 2, 1, '500000.00', 1, '2023-03-02 21:30:07', 'abstract-business-card-template_23-2148272064.jpg'),
(7, 42, 1, 2, '400000.00', 1, '2023-03-02 23:10:59', 'modern-business-card-template-with-geometric-shapes_23-2147965214.jpg'),
(8, 42, 3, 1, '500000.00', 1, '2023-03-02 23:10:59', 'abstract-business-card-template_23-2148274267.jpg'),
(9, 42, 2, 1, '500000.00', 1, '2023-03-02 23:10:59', 'abstract-business-card-template_23-2148272064.jpg'),
(10, 43, 3, 1, '500000.00', 1, '2023-03-02 23:24:24', 'abstract-business-card-template_23-2148274267.jpg'),
(11, 43, 2, 2, '500000.00', 1, '2023-03-02 23:24:24', 'abstract-business-card-template_23-2148272064.jpg'),
(12, 43, 32, 1, '500000.00', 1, '2023-03-02 23:24:24', 'modern-professional-business-card_1043-560.jpg'),
(13, 44, 3, 1, '500000.00', 1, '2023-03-02 23:25:24', 'abstract-business-card-template_23-2148274267.jpg'),
(14, 44, 4, 1, '500000.00', 1, '2023-03-02 23:25:24', 'abstract-business-card-template_23-2148292840.jpg'),
(15, 45, 11, 1, '500000.00', 1, '2023-03-08 17:01:36', 'birthday-card-collection_23-2147766281.jpg'),
(16, 46, 4, 1, '500000.00', 1, '2023-03-08 17:03:07', 'abstract-business-card-template_23-2148292840.jpg'),
(17, 47, 3, 1, '500000.00', 1, '2023-03-08 17:25:23', 'abstract-business-card-template_23-2148274267.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `tensp` varchar(200) DEFAULT NULL,
  `giasp` int(11) DEFAULT NULL,
  `mota` varchar(1000) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `ID_DMSP` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `tensp`, `giasp`, `mota`, `soluong`, `ID_DMSP`, `link`, `status`, `created_date`) VALUES
(1, 'Business-Card-1', 400000, NULL, 500, 1, 'modern-business-card-template-with-geometric-shapes_23-2147965214.jpg', 1, '2023-02-25'),
(2, 'Business-Card-2', 500000, NULL, 10, 1, 'abstract-business-card-template_23-2148272064.jpg', 1, '2023-02-25'),
(3, 'Business-Card-3', 500000, NULL, 10, 1, 'abstract-business-card-template_23-2148274267.jpg', 1, '2023-02-25'),
(4, 'Business-Card-4', 500000, NULL, 10, 1, 'abstract-business-card-template_23-2148292840.jpg', 1, '2023-02-25'),
(5, 'Business-Card-5', 500000, NULL, 10, 1, 'blue-corporate-business-card_1051-1590.jpg', 1, '2023-02-25'),
(6, 'Business-Card-6', 500000, NULL, 7, 1, 'blue-elegant-corporate-card_1435-1077.jpg', 1, '2023-02-25'),
(7, 'Business-Card-7', 500000, NULL, 10, 1, 'blue-elegant-corporate-card_1435-1149.jpg', 1, '2023-02-25'),
(8, 'Business-Card-8', 500000, NULL, 10, 1, 'blue-grey-wavy-business-card-template_1055-3099.jpg', 1, '2023-02-25'),
(9, 'Business-Card-9', 500000, NULL, 10, 1, 'blue-minimal-wavy-business-card_1409-1209.jpg', 1, '2023-02-25'),
(10, 'Birthday-Card-1', 500000, NULL, 10, 2, 'birthday-background-with-presents_23-2147563223.jpg', 1, '2023-02-25'),
(11, 'Birthday-Card-2', 500000, NULL, 10, 2, 'birthday-card-collection_23-2147766281.jpg', 1, '2023-02-25'),
(12, 'Birthday-Card-3', 500000, NULL, 10, 2, 'birthday-card-collection_23-2148044754.jpg', 1, '2023-02-25'),
(13, 'Birthday-Card-4', 500000, NULL, 10, 2, 'birthday-card-with-gift-boxes-cartoon-style-vector-illustration_71599-3622.jpg', 1, '2023-02-25'),
(14, 'Birthday-Card-5', 500000, NULL, 10, 2, 'birthday-card-with-gifts-box-flat-style_23-2147774480.jpg', 1, '2023-02-25'),
(15, 'Birthday-Card-6', 500000, NULL, 10, 2, 'birthday-card-with-gifts_23-2147558037.jpg', 1, '2023-02-25'),
(16, 'Birthday-Card-7', 500000, NULL, 10, 2, 'birthday-card-with-gifts_23-2147558037.jpg', 1, '2023-02-25'),
(17, 'Birthday-Card-8', 500000, NULL, 10, 2, 'birthday-card-with-girl-holding-presents_23-2147767166.jpg', 1, '2023-02-25'),
(18, 'Birthday-Card-9', 500000, NULL, 10, 2, 'birthday-card-with-presents_23-2147553286.jpg', 1, '2023-02-25'),
(19, 'Birthday-Card-10', 500000, NULL, 10, 2, 'birthday-cards-collection-flat-style_23-2147762563.jpg', 1, '2023-02-25'),
(20, 'Birthday-Card-11', 500000, NULL, 10, 2, 'birthday-cards-set_23-2147664718.jpg', 1, '2023-02-25'),
(21, 'Birthday-Card-12', 500000, NULL, 10, 2, 'birthday-gift-voucher-template-design_23-2149583120.jpg', 1, '2023-02-25'),
(22, 'Wedding-Card-1', 500000, NULL, 10, 3, 'beautiful-hand-drawn-roses-wedding-invitation-card-set_21799-7578.jpg', 1, '2023-02-25'),
(23, 'Wedding-Card-2', 500000, NULL, 10, 3, 'beautiful-roses-flower-invitation-card-template-designs_44538-1878.jpg', 1, '2023-02-25'),
(24, 'Wedding-Card-3', 500000, NULL, 10, 3, 'blue-floral-wedding-card-set_21799-5003.jpg', 1, '2023-02-25'),
(25, 'Wedding-Card-4', 500000, NULL, 10, 3, 'dusty-blue-wedding-invitation-template-with-beautiful-flower_658266-19.jpg', 1, '2023-02-25'),
(26, 'Wedding-Card-5', 500000, NULL, 10, 3, 'elegant-engagement-invitation-template_52683-45150.jpg', 1, '2023-02-25'),
(27, 'Wedding-Card-6', 500000, NULL, 10, 3, 'elegant-engagement-invitation-template_52683-45152.jpg', 1, '2023-02-25'),
(28, 'Wedding-Card-7', 500000, NULL, 10, 3, 'elegant-engagement-wedding-invitation-template_24972-1209.jpg', 1, '2023-02-25'),
(29, 'Wedding-Card-8', 500000, NULL, 10, 3, 'elegant-greenery-wedding-invitation-theme_119048-480.jpg', 1, '2023-02-25'),
(30, 'Wedding-Card-9', 500000, NULL, 10, 3, 'elegant-watercolor-green-bamboo-wedding-invitation-card_44538-10831.jpg', 1, '2023-02-25'),
(31, 'Wedding-Card-10', 500000, NULL, 10, 3, 'elegant-wedding-invitation-template-with-cherry-blossom_456063-833.jpg', 1, '2023-02-25'),
(32, 'Business-card-10', 500000, 'too good', 2, 1, 'modern-professional-business-card_1043-560.jpg', 1, '2023-02-27'),
(33, 'Wedding card 11', 500000, 'no tooo bad', 3, 3, 'green-wedding-invitation-pack-with-rsvp-thank-you-instagram-story_456063-244.jpg', 1, '2023-02-27'),
(34, 'Do Minh Quan', 123, NULL, 5, 1, 'modern-professional-business-card_1043-560.jpg', 0, '2023-03-08'),
(35, 'abcd123123', 123123, NULL, 6, 2, 'red-white-business-card_1389-158.jpg', 0, '2023-03-08'),
(36, 'Do Minh Quan', 123, NULL, 12, 1, 'template-business-card-abstract_23-2148377075.jpg', 0, '2023-03-10'),
(37, 'Bussiness-Card-11', 500000, NULL, 6, 1, 'white-business-card-with-red-details_1435-29.jpg', 1, '2023-03-11'),
(39, 'Bussiness-Card-12', 450000, NULL, 6, 1, 'red-white-modern-business-card-template_1017-23367.jpg', 1, '2023-03-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listproduct`
--
ALTER TABLE `listproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `orderform`
--
ALTER TABLE `orderform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderformdetail`
--
ALTER TABLE `orderformdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_id` (`id_SP`),
  ADD KEY `ID_Orderform` (`id_donhang`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ID_DMSP` (`ID_DMSP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listproduct`
--
ALTER TABLE `listproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orderform`
--
ALTER TABLE `orderform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `orderformdetail`
--
ALTER TABLE `orderformdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderform`
--
ALTER TABLE `orderform`
  ADD CONSTRAINT `KH_ID_donhang` FOREIGN KEY (`khachhang_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `orderformdetail`
--
ALTER TABLE `orderformdetail`
  ADD CONSTRAINT `ID_Orderform` FOREIGN KEY (`id_donhang`) REFERENCES `orderform` (`id`),
  ADD CONSTRAINT `sanpham_id` FOREIGN KEY (`id_SP`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_ID_DMSP` FOREIGN KEY (`ID_DMSP`) REFERENCES `listproduct` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
