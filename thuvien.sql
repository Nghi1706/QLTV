-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2021 lúc 12:44 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_login`
--

CREATE TABLE `admin_login` (
  `phone` int(10) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` int(1) NOT NULL DEFAULT 1,
  `password` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_login`
--

INSERT INTO `admin_login` (`phone`, `name`, `address`, `sex`, `password`) VALUES
(966862071, 'Nguyễn Văn Nghị', '3/34 , thới tứ 1, thới tam thôn, hóc môn', 1, 17062000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_user` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_user`, `id_sp`, `date`, `id`) VALUES
(123456789, 3, '2021-11-17', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee_login`
--

CREATE TABLE `employee_login` (
  `phone` int(10) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `employee_login`
--

INSERT INTO `employee_login` (`phone`, `name`, `address`, `password`) VALUES
(123456789, 'Tường', 'TTT', 12456),
(966862071, 'Tú', 'TTT', 987654321);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `guest_login`
--

CREATE TABLE `guest_login` (
  `phone` int(10) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `guest_login`
--

INSERT INTO `guest_login` (`phone`, `name`, `address`, `password`) VALUES
(123343553, 'answer', '18 HHC', 123445),
(123456789, 'Tường', '4', 12345),
(234567891, 'SHoin', 'ABC', 12454),
(966862072, 'Nguyen Van A', 'ABC D', 17062000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ncc`
--

CREATE TABLE `ncc` (
  `id` int(11) NOT NULL,
  `tên nhà cung cấp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ncc`
--

INSERT INTO `ncc` (`id`, `tên nhà cung cấp`) VALUES
(1, 'Nhà xuất bản kim đồng'),
(2, 'Nhà xuất bản văn thắng'),
(3, 'Nhà phân phối OTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_ncc` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `link_image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `soluong`, `id_ncc`, `cost`, `link_image`) VALUES
(3, 'khéo ăn nói sẽ có được thiên hạ', 10, 3, 65000, 'https://salt.tikicdn.com/cache/w1200/ts/product/22/a9/48/c55f8c043e5ff5842aa15dc1f3b6c20f.jpg'),
(7, 'nóng giận là bản năng tĩnh lặng là bản lĩn', 3, 2, 80000, 'https://salt.tikicdn.com/cache/w1200/ts/product/70/9a/98/e6d54019a2079b9565114bce93b245b7.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wislist`
--

CREATE TABLE `wislist` (
  `id_user` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`phone`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `employee_login`
--
ALTER TABLE `employee_login`
  ADD PRIMARY KEY (`phone`);

--
-- Chỉ mục cho bảng `guest_login`
--
ALTER TABLE `guest_login`
  ADD PRIMARY KEY (`phone`);

--
-- Chỉ mục cho bảng `ncc`
--
ALTER TABLE `ncc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `wislist`
--
ALTER TABLE `wislist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `ncc`
--
ALTER TABLE `ncc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `wislist`
--
ALTER TABLE `wislist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
