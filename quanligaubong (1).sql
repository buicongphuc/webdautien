-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 04, 2021 lúc 06:53 PM
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
(3, 'phucbui', '2112', 'Bùi Công Phúc');

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
(15, 'anhnen.png', 'bán chó', 1, 11, NULL, NULL, NULL, '', 7);

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
(6, 'Nhật', ''),
(7, 'Việt Nam', ''),
(8, 'Trung Quốc\r\n', '');

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
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tennhasanxuat`
--
ALTER TABLE `tennhasanxuat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
