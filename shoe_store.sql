-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 16, 2020 lúc 11:07 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoe_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `idbanner` int(11) NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`idbanner`, `anh`) VALUES
(1, 'banner1.jpg'),
(2, 'banner2.jpg'),
(3, 'logo.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `idcolor` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`idcolor`, `color`) VALUES
(1, 'đỏ'),
(2, 'vàng'),
(3, 'đen'),
(4, 'xám'),
(5, 'xanh'),
(6, 'nâu'),
(7, 'cam'),
(8, 'trắng'),
(9, 'hồng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gopy`
--

CREATE TABLE `gopy` (
  `idgopy` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gopy`
--

INSERT INTO `gopy` (`idgopy`, `idSP`, `email`, `noidung`) VALUES
(1, 2, 'ngophitin2001@gmal.com', 'giày công sở 2 đẹp'),
(2, 3, 'abc@gmail.com', 're');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idhoadon` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `idKM` int(11) NOT NULL,
  `loaiKM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatriKM` float NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`idKM`, `loaiKM`, `giatriKM`, `ngaybatdau`, `ngayketthuc`) VALUES
(1, 'Không', 0, '0000-00-00', '0000-00-00'),
(2, 'Sản phẩm mới', 30, '0000-00-00', '0000-00-00'),
(3, 'Khuyến mãi đầu năm', 30, '0000-00-00', '0000-00-00'),
(4, 'Khuyến mãi cuối năm', 30, '0000-00-00', '0000-00-00'),
(5, 'Khuyến mãi theo dịch vu', 30, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `layout`
--

CREATE TABLE `layout` (
  `id` int(11) NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mail_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `donvi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_1` double NOT NULL,
  `phone_2` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `layout`
--

INSERT INTO `layout` (`id`, `time`, `mail_1`, `mail_2`, `diachi`, `donvi`, `phone_1`, `phone_2`) VALUES
(1, '24/7', '19it4@gmail.com', 'vku@vku.udn.vn', 'Làng Đại học, Đà Nẵng', 'Khoa Công Nghệ Thông Tin & Truyền Thông - Đại Học Đà Nẵng', 933495282, 21229115774);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `idLoaiSP` int(11) NOT NULL,
  `tenLSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`idLoaiSP`, `tenLSP`, `hinhanh`) VALUES
(1, 'Giày công sở', 'giaycongso.jpg'),
(2, 'Giày học sinh', 'giayhocsinh.jpg'),
(3, 'Giày da bò', 'giaydabo.jpg'),
(4, 'Giày thời trang nam', 'giaythoitrangnam.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `idQuyen` int(11) NOT NULL,
  `tenquyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chitietquyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`idQuyen`, `tenquyen`, `chitietquyen`) VALUES
(1, 'admin', 'quản lý trang web'),
(0, 'customer', 'khách hàng quen'),
(2, 'banhang', 'Nhân viên bán hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(11) NOT NULL,
  `idKM` int(11) NOT NULL,
  `idLoaiSP` int(11) NOT NULL,
  `idcolor` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `tenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Dongia` int(11) NOT NULL,
  `anh1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhap` date NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `idKM`, `idLoaiSP`, `idcolor`, `idsize`, `tenSP`, `Dongia`, `anh1`, `anh2`, `anh3`, `ngaynhap`, `mota`, `soluong`) VALUES
(1, 5, 1, 3, 5, 'Giày công sở 1', 500, 'giayConverse.jpg', 'giayConverse.jpg', 'giayConverse.jpg', '2020-12-20', '', 100),
(2, 5, 1, 3, 6, 'Giày công sở 2', 500, 'giaycongso2.jpg', 'giaycongso1.jpg', 'giaycongso2.jpg', '2020-12-11', '<p>Gi&agrave;y nam đẹp nhất, gi&agrave;y c&ocirc;ng sở 1 d&agrave;nh cho người l&agrave;m việc tại c&ocirc;ng sở, phong c&aacute;ch lịch sự</p>', 100),
(3, 5, 1, 6, 7, 'Giày công sở 3', 580, 'giaycongso4.jpg', 'giaycongso4.jpg', 'giaycongso4.jpg', '2020-11-26', 'Giày công sở 3 dành cho nam đẹp', 0),
(4, 5, 1, 4, 8, 'Giày công sở 4', 700, 'giaycongso5.jpg', 'giaycongso5.jpg', 'giaycongso5.jpg', '2020-11-20', 'Giày công sở 4 dành cho nam đẹp', 0),
(5, 5, 2, 3, 5, 'Giày học sinh nam đẹp', 500, 'giayhocsinh1.jpg', 'giayhocsinh1.jpg', 'giayhocsinh1.jpg', '2020-11-10', 'Giày học sinh nam đẹp 1', 0),
(6, 1, 2, 6, 5, 'Giày học sinh nam 2', 500, 'giayhs2.jpg', 'giayhs2.jpg', 'giayhs2.jpg', '2020-11-20', 'Giày học sinh nam đẹp 2', 0),
(7, 1, 2, 3, 5, 'Giày học sinh nam 3', 500, 'giayhs3.jpg', 'giayhs3.jpg', 'giayhs3.jpg', '2020-12-04', 'Giày học sinh nam 3 đẹp', 0),
(8, 1, 3, 3, 10, 'Giày da bò nam1', 1500, 'giaydabo1.jpg', 'giaydabo1.jpg', 'giaydabo1.jpg', '2020-11-17', 'Giày da bò nam1', 0),
(9, 1, 3, 3, 6, 'Giày da bò nam2', 2000, 'giaydabo2.jpg', 'giaydabo2.jpg', 'giaydabo2.jpg', '2020-12-02', 'Giày da bò nam 3 đẹp', 0),
(10, 1, 3, 5, 7, 'Giày da bò nam 4', 3000, 'giaydabo3.jpg', 'giaydabo3.jpg', 'giaydabo3.jpg', '2020-11-26', 'Giày da bò nam 4 đẹp', 0),
(11, 1, 4, 3, 12, 'giày thời trang 1', 580, 'giaythethao1.jpg', 'giaythethao1.jpg', 'giaythethao1.jpg', '2020-11-26', 'giày thời trang 1', 0),
(12, 1, 4, 3, 15, 'giày thời trang 2', 2000, 'giaythoitrang2.jpg', 'giaythoitrang2.jpg', 'giaythoitrang2.jpg', '2020-11-12', 'giày thời trang 2 dành cho nam đẹp', 0),
(14, 1, 1, 1, 1, 'giày nam đẹp', 100, 'giaythoitrang3.jpg', '', '', '0000-00-00', 'Giày công sở simple monk strap CS22 – Bí mật hoàng tử quạ', 0),
(15, 1, 1, 1, 1, 'giày nam đẹp', 700, 'Jellyfish.jpg', '', '', '0000-00-00', '', 0),
(16, 1, 4, 1, 1, 'Giày thử nghiệm', 500, '1111a.png', '1111a.png', '1111a.png', '2020-11-30', '<p>M&ocirc; tả</p><p><em>in nghi&ecirc;ng</em></p><p>in đậm</p><p>Gi&agrave;y nam đẹp</p><p>&nbsp;</p>', 0),
(17, 1, 4, 1, 1, 'Giày thử nghiệm', 500, '1111a.png', '1111a.png', '1111a.png', '2020-11-30', '<p>M&ocirc; tả</p><p><em>in nghi&ecirc;ng</em></p><p>in đậm</p><p>Gi&agrave;y nam đẹp</p><p>&nbsp;</p>', 0),
(18, 5, 1, 3, 5, 'giày nam đẹp', 700, 'loaisanphamgiaycongso.jpg', 'giaythethao1.jpg', 'giayConverse.jpg', '2021-01-02', '<p><strong>in đậm</strong></p><p><em>in nghi&ecirc;ng</em></p><p><strong><em>đậm, nghi&ecirc;ng</em></strong></p>', 50);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `idsize` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`idsize`, `size`) VALUES
(1, 25),
(2, 26),
(3, 27),
(4, 28),
(5, 29),
(6, 30),
(7, 31),
(8, 32),
(9, 33),
(10, 34),
(11, 35),
(12, 36),
(13, 37),
(14, 38),
(15, 39),
(16, 40),
(17, 41),
(18, 42),
(19, 43),
(20, 44),
(21, 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `ho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tendangnhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idQuyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `ho`, `ten`, `email`, `diachi`, `gioitinh`, `sodienthoai`, `tendangnhap`, `matkhau`, `idQuyen`) VALUES
(1, 'Quản', 'Trị', 'admin@gmail.com', 'đà nẵng', 'nam', '0987654321', 'admin', '12345', 1),
(2, 'bán', 'hàng', 'banhang@gmail.com', 'quảng nam', 'Nữ', '0123456789', 'banhang', '12345', 2),
(3, 'ngo', 'tin', 'ngotin@gmail.com', 'đà nẵng', 'nam', '0787700624', 'ngotin', '12345', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`idbanner`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`idcolor`);

--
-- Chỉ mục cho bảng `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`idgopy`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhoadon`),
  ADD KEY `sanpham` (`idSP`),
  ADD KEY `idUser` (`idUser`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`idKM`);

--
-- Chỉ mục cho bảng `layout`
--
ALTER TABLE `layout`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`idLoaiSP`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`idQuyen`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`),
  ADD KEY `idLoaiSP` (`idLoaiSP`),
  ADD KEY `idKM` (`idKM`),
  ADD KEY `idcolor` (`idcolor`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`idsize`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idQuyen` (`idQuyen`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `idbanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `idcolor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `gopy`
--
ALTER TABLE `gopy`
  MODIFY `idgopy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `idKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `layout`
--
ALTER TABLE `layout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `idLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `idQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=909092311;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `idsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idLoaiSP`) REFERENCES `loaisanpham` (`idLoaiSP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
