-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 04, 2021 lúc 07:11 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanligaubong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(2) NOT NULL,
  `tendangnhap` varchar(100) NOT NULL,
  `matkhau` varchar(20) NOT NULL,
  `hoten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `tendangnhap`, `matkhau`, `hoten`) VALUES
(1, 'phucbui', '123', 'bui cong phuc'),
(2, 'ngocyen', '123', 'le ngoc yen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `hinhanh` varchar(150) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `giasanpham` int(10) DEFAULT NULL,
  `kichthuoc` int(4) DEFAULT NULL,
  `likes` int(5) DEFAULT NULL,
  `dislikes` int(5) DEFAULT NULL,
  `views` int(10) DEFAULT NULL,
  `ghichu` varchar(250) NOT NULL,
  `id_nhasanxuat` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `hinhanh`, `tensanpham`, `giasanpham`, `kichthuoc`, `likes`, `dislikes`, `views`, `ghichu`, `id_nhasanxuat`) VALUES
(4, '860309939d876ed937961.png', 'gaaus3', 11111111, 11, NULL, NULL, NULL, '', 2),
(5, '106151088_278019243279084_2809959568919322917_o.jpg', 'Đây là gấu Phúc', 2147483647, 111, NULL, NULL, NULL, '3', 0),
(10, '860309939d876ed937961.png', 'sads', 1111111111, 11, NULL, NULL, NULL, '', 0),
(11, '860309939d876ed937961.png', 'gaus', 10000, 1, NULL, NULL, NULL, '', 0),
(12, '106151088_278019243279084_2809959568919322917_o.jpg', 'gasus', 111111, 11, NULL, NULL, NULL, '', 1),
(13, 'anhnen.png', 'gấu 4', 11111, 11, NULL, NULL, NULL, '', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tennhasanxuat`
--

CREATE TABLE `tennhasanxuat` (
  `id` int(4) NOT NULL,
  `tennhasanxuat` varchar(200) NOT NULL,
  `ghichu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tennhasanxuat`
--

INSERT INTO `tennhasanxuat` (`id`, `tennhasanxuat`, `ghichu`) VALUES
(1, 'Viet Nam', ''),
(2, 'Nhat', ''),
(3, 'Trung QUoc', ''),
(4, 'Han Quoc', ''),
(5, 'Thai Lan', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tennhasanxuat`
--
ALTER TABLE `tennhasanxuat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tennhasanxuat`
--
ALTER TABLE `tennhasanxuat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
