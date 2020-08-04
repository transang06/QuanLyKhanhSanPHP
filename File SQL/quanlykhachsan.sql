-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 31, 2020 lúc 01:24 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlykhachsan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdv`
--

CREATE TABLE `ctdv` (
  `MaCI` int(11) NOT NULL,
  `MaDV` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ctdv`
--

INSERT INTO `ctdv` (`MaCI`, `MaDV`, `SoLuong`, `ThanhTien`) VALUES
(1, 1, 1, 100000),
(1, 4, 1, 30000),
(1, 5, 1, 100000),
(3, 4, 4, 120000),
(4, 3, 2, 300000),
(5, 1, 4, 400000),
(5, 3, 1, 150000),
(6, 4, 1, 30000),
(7, 6, 1, 200000),
(7, 8, 1, 45000),
(8, 4, 1, 30000),
(8, 5, 1, 30000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `MaDV` int(11) NOT NULL,
  `TenDV` varchar(250) NOT NULL,
  `GiaDV` int(11) NOT NULL,
  `Note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`MaDV`, `TenDV`, `GiaDV`, `Note`) VALUES
(1, 'Đưa đón sân bay', 100000, 'Sử dụng dịch vụ bên thứ 3'),
(2, 'Đưa đón tận nơi', 100000, 'Sử dụng dịch vụ bên thứ 3'),
(3, 'Buffet bữa sáng', 150000, 'Đi kèm khi thuê phòng qua đêm'),
(4, 'Fitness center', 30000, 'Sử dụng phòng GYM khách sạn trong quá trình lưu trú'),
(5, 'Giặt ủi quần áo', 30000, 'Áp dụng cho khách khi thuê phòng không giới hạn số lượng( 1 lần / ngày)'),
(6, 'Spa', 200000, 'Xong hơi, Massage, Chăm sóc da'),
(7, 'Gối Ga Đệm', 300000, 'Thêm vào khi khách làm hỏng'),
(8, 'Cơm trưa khách sạn', 45000, 'Không Ghi Chú'),
(9, 'Hướng dẫn Viên', 500000, '1 ngày');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(20) NOT NULL,
  `SCMT` int(20) NOT NULL,
  `Ho` varchar(50) NOT NULL,
  `Ten` varchar(50) NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(250) DEFAULT NULL,
  `SDT` text NOT NULL,
  `GioiTinh` varchar(20) DEFAULT NULL,
  `NgayGN` datetime NOT NULL,
  `CNLanCuoi` datetime NOT NULL,
  `Note` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `SCMT`, `Ho`, `Ten`, `NgaySinh`, `DiaChi`, `SDT`, `GioiTinh`, `NgayGN`, `CNLanCuoi`, `Note`) VALUES
(1, 197441239, 'Trần', 'Văn Sáng', '2000-10-06', '235 Tôn Đản - Đà Nẵng-', '0349923955', 'Nam', '2020-06-24 01:41:23', '2020-07-29 15:38:49', 'Không Ghi Chú'),
(2, 197441238, 'Trần', 'Sáng', '2000-10-06', 'Quảng trị', '0349923954', 'Nam', '2020-07-24 01:42:56', '2020-07-24 01:42:56', 'Không Ghi Chú'),
(3, 197441237, 'Trần', 'Ngọc Sáng', '2000-10-06', 'Quảng trị', '0349923955', 'Nam', '2020-07-24 01:43:30', '2020-07-28 16:51:20', 'Không Ghi Chú'),
(4, 1974412396, 'Trần ', 'Lượng', '2000-10-06', 'Tôn đản', '0349923955', 'Nam', '2020-07-24 01:49:40', '2020-07-28 16:51:07', 'Không Ghi Chú'),
(6, 197441236, 'Trần Văn ', 'Tiến Đạt', '2004-11-11', 'Thị xã Quảng Trị', '0164778155', 'Nam', '2020-07-28 16:44:58', '2020-07-28 16:53:29', 'Không Ghi Chú'),
(7, 197456820, 'Đặng ', 'Bá Lộc', '2000-03-23', 'Quảng Nam', '0349923944', 'Nam', '2020-07-28 16:45:57', '2020-07-28 16:45:57', 'Không Ghi Chú'),
(8, 197568423, 'Trương Lê', 'Minh Hải', '1999-08-20', 'Quảng Ninh - Quảng Bình', '0349922456', 'Nam', '2020-07-28 16:46:39', '2020-07-28 16:47:31', 'Không Ghi Chú'),
(9, 197568423, 'Trần', 'Thị Thạch Trâm', '1990-08-15', 'Tôn Đản Đà Nẵng', '0364822384', 'Nữ', '2020-07-28 16:47:43', '2020-07-28 16:47:43', 'Không Ghi Chú'),
(10, 197456992, 'Trần Văn', 'Tiến Sỹ', '1992-02-06', 'Đông Hà - Quảng Trị', '0349548228', 'Nam', '2020-07-28 16:48:26', '2020-07-28 16:48:53', 'Không Ghi Chú'),
(11, 197568122, 'Võ ', 'Thị Nghiễu', '1965-06-05', 'Lao Bảo - Quảng Trị', '0975391326', 'Nữ', '2020-07-28 16:49:16', '2020-07-28 16:49:16', 'Không Ghi Chú'),
(12, 1975682233, 'Võ ', 'Thị Khiểu', '1965-12-05', 'Hải Lăng - Quảng trị', '0971351171', 'Nữ', '2020-07-28 16:50:08', '2020-07-28 16:50:08', 'Không Ghi Chú'),
(13, 1975642512, 'Trần', 'Hoài Thanh', '2000-04-26', 'Hải Phòng- Đà Nẵng', '0349923551', 'Nữ', '2020-07-28 16:51:40', '2020-07-28 16:51:40', 'Không Ghi Chú'),
(14, 1975122555, 'Vỡ', 'Thị Bảo Yến', '1999-12-15', 'Liên Chiểu Đà Nẵng', '0349939466', 'Nữ', '2020-07-28 16:52:39', '2020-07-28 16:52:39', 'Không Ghi Chú'),
(15, 197456548, 'Trần', 'Văn Sang tối', '2000-10-06', 'Đà Nẵng', '0349923955', 'Nam', '2020-07-28 21:04:40', '2020-07-28 21:04:40', 'Không Ghi Chú'),
(16, 197441230, 'Trần', 'Đoàn Đự', '1995-10-06', 'Quảng trị', '0349953612', 'Nam', '2020-07-29 15:30:39', '2020-07-29 15:30:39', 'Không Ghi Chú');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `TenNV` text NOT NULL,
  `SDT` int(20) NOT NULL,
  `ChucVu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `SDT`, `ChucVu`) VALUES
(3, 'Trần Văn Sáng', 349923955, 'Quản Lý'),
(4, 'Trần Thị Thạch Trâm', 345663445, 'Lễ Tân'),
(5, 'Trần Nam Thư', 345998335, 'Lễ Tân'),
(6, 'Đặng Bá Lộc', 348846546, 'Tiếp Thị Khách Hàng'),
(7, 'Trương Lê Minh Hải', 348512456, 'Tiếp Thị Khách Hàng'),
(8, 'Lê Á Thi', 689456357, 'Nhân Viên Tạp Vụ'),
(9, 'Trần Lê Bảo', 675987645, 'Bảo vệ '),
(10, 'Huỳnh Trấn Thành', 678158715, 'Nhân Viên Buồng Phòng'),
(11, 'Trần Sáng', 349953678, 'Bảo vệ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `MaLP` int(11) NOT NULL,
  `TenLoaiPhong` varchar(50) NOT NULL,
  `ViTri` text DEFAULT NULL,
  `DonGia` int(50) NOT NULL,
  `Note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`MaLP`, `TenLoaiPhong`, `ViTri`, `DonGia`, `Note`) VALUES
(1, 'Phòng Đơn', '201', 100000, 'Không Ghi Chú'),
(3, 'Phòng Hướng Biển', '701', 300000, '2 giường lớn'),
(4, 'Phòng Đơn', '202', 100000, 'Không Ghi Chú'),
(5, 'Phòng hội nghị', '101', 750000, 'Không Ghi Chú'),
(6, 'Phòng  Đôi', '206', 150000, '1 giường lớn'),
(7, 'Phòng  Đôi', '207', 150000, '1 giường lớn'),
(8, 'Phòng Đơn', '202 ', 100000, 'Không Ghi Chú	'),
(9, 'Phòng  Đôi', '208', 150000, '1 giường lớn'),
(10, 'Phòng  Đôi', '209', 150000, '1 giường lớn'),
(11, 'Phòng  Đôi', '210', 150000, '1 giường lớn'),
(13, 'Phòng  Đôi', '306', 150000, '1 giường lớn'),
(14, 'Phòng  Đôi', '307', 150000, '1 giường lớn'),
(15, 'Phòng Đơn', '203', 100000, 'Không Ghi Chú'),
(17, 'Phòng  Đôi', '308', 150000, '1 giường lớn'),
(18, 'Phòng Đơn', '204', 100000, 'Không Ghi Chú'),
(19, 'Phòng  Đôi', '309', 150000, '1 giường lớn'),
(20, 'Phòng  Đôi', '310', 150000, '1 giường lớn'),
(21, 'Phòng  Đôi', '406', 150000, '1 giường lớn'),
(22, 'Phòng Đơn', '205', 100000, 'Không Ghi Chú'),
(23, 'Phòng  Đôi', '407', 150000, '1 giường lớn'),
(24, 'Phòng  Đôi', '408', 150000, '1 giường lớn'),
(25, 'Phòng  Đôi', '409', 150000, '1 giường lớn'),
(26, 'Phòng Đơn', '301', 100000, 'Không Ghi Chú'),
(27, 'Phòng  Đôi', '410', 150000, '1 giường lớn'),
(28, 'Phòng Đơn', '302', 100000, 'Không Ghi Chú'),
(29, 'Phòng  Đôi', '506', 150000, '1 giường lớn'),
(30, 'Phòng  Đôi', '507', 150000, '1 giường lớn'),
(31, 'Phòng  Đôi', '508', 150000, '1 giường lớn'),
(32, 'Phòng Đơn', '303', 100000, 'Không Ghi Chú'),
(33, 'Phòng  Đôi', '509', 150000, '1 giường lớn'),
(34, 'Phòng  Đôi', '510', 150000, '1 giường lớn'),
(35, 'Phòng Đơn', '304', 100000, 'Không Ghi Chú'),
(36, 'Phòng Đơn', '305', 100000, 'Không Ghi Chú'),
(37, 'Phòng Đơn', '401', 100000, 'Không Ghi Chú'),
(38, 'Phòng Đơn', '402', 100000, 'Không Ghi Chú'),
(39, 'Phòng Đơn', '403', 100000, 'Không Ghi Chú'),
(40, 'Phòng Đơn', '404', 100000, 'Không Ghi Chú'),
(41, 'Phòng Đơn', '405', 100000, 'Không Ghi Chú'),
(42, 'Phòng Đơn', '501', 100000, 'Không Ghi Chú'),
(43, 'Phòng Đơn', '502', 100000, 'Không Ghi Chú'),
(44, 'Phòng Đơn ', '503', 100000, 'Không Ghi Chú'),
(45, 'Phòng Đơn', '504', 100000, 'Không Ghi Chú'),
(47, 'Phòng Hướng Biển', '702', 300000, '2 giường lớn'),
(48, 'Phòng Hướng Biển', '703', 300000, '2 giường lớn'),
(49, 'Phòng hội nghị', '102', 750000, '300 Chỗ'),
(50, 'Phòng Thiền', '901', 150000, 'Cách âm tốt, tầm nhìn thông thoáng'),
(51, 'Phòng Hướng Biển', '704', 300000, '2 giường');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongcandon`
--

CREATE TABLE `phongcandon` (
  `MaLP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phongcandon`
--

INSERT INTO `phongcandon` (`MaLP`) VALUES
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongcheckin`
--

CREATE TABLE `phongcheckin` (
  `MaCI` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaLP` int(11) NOT NULL,
  `SoNguoi` int(11) NOT NULL,
  `TGBatDau` datetime NOT NULL,
  `TimeCheckOut` datetime NOT NULL,
  `TongThanhToan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phongcheckin`
--

INSERT INTO `phongcheckin` (`MaCI`, `MaKH`, `MaLP`, `SoNguoi`, `TGBatDau`, `TimeCheckOut`, `TongThanhToan`) VALUES
(1, 4, 3, 1, '2019-06-24 01:50:06', '2019-06-24 01:50:58', 530000),
(3, 4, 21, 2, '2020-07-27 23:21:57', '2020-07-27 23:22:24', 270000),
(4, 3, 20, 2, '2020-07-28 02:04:20', '2020-07-29 15:35:23', 5850000),
(5, 1, 1, 3, '2020-07-28 02:04:33', '2020-07-28 21:06:46', 2450000),
(6, 14, 50, 2, '2020-07-28 17:09:14', '2020-07-28 17:14:07', 180000),
(7, 16, 50, 2, '2020-07-29 15:31:20', '2020-07-29 15:33:33', 395000),
(8, 1, 50, 1, '2020-07-31 13:10:56', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongtrong`
--

CREATE TABLE `phongtrong` (
  `MaLP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phongtrong`
--

INSERT INTO `phongtrong` (`MaLP`) VALUES
(1),
(6),
(7),
(8),
(9),
(10),
(11),
(13),
(14),
(15),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(47),
(48),
(49),
(51);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `MaTB` int(11) NOT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`MaTB`, `NoiDung`) VALUES
(19, '1. Nhân Viên yêu cầu khách xuất trình hộ chiếu hoặc chứng minh nhân dân để làm thủ tục nhận phòng. (bắt buộc)'),
(20, '2. Khách sạn chỉ chịu trách nhiệm với những tài sản hoặc tiền được gửi tại quầy Lễ tân.'),
(23, '3. Không mang súng đạn, chất cháy nổ, chất độc hại, các chất gây nghiện, vật nuôi hoặc thực phẩm có mùi tanh hôi vào phòng nghỉ. Không nấu nướng, giặt là trong phòng nghỉ.'),
(24, '4. Không thay đổi, di chuyển đồ đạc trong phòng hoặc từ phòng này sang phòng khác. Trường hợp tài sản, đồ dùng trong phòng bị mất, hỏng do chủ quan Quý khách sẽ phải bồi thường 100% giá trị.'),
(25, '5. Xin vui lòng không thay đổi phòng hoặc đưa thêm người vào phòng khi chưa đăng ký trước với Lễ tân.'),
(26, '6. Khi ra khỏi phòng, Quý khách vui lòng rút thẻ chìa khoá ra khỏi ổ điện và gửi tại quầy lễ tân. Điện trong phòng sẽ tự động ngắt khi cửa đã được khép.'),
(27, 'Nếu có các trục trặc ngoài ý , muốn liên hệ quản lý khách sạn qua số: 0349923955 Và Bảo vệ qua số 0349923956'),
(28, 'Công An Quận Hải Châu – Thành phố Đà Nẵng Số Điện Thoại: 02363821372 '),
(29, 'Sở Y tế Đà Nẵng: Điện thoại: 0236 3821206     Fax: 0236 3826276     E-mail: syt@danang.gov.vn'),
(32, 'Hi. Các bạn lễ tân chú ý. Bên khách sạn mình đang có chương trình giảm giá 30% cho các dịch vụ sapa. Các bạn lưu ý để đề xuất với khác hàng nhé.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `created_time` datetime NOT NULL,
  `last_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `birthday`, `created_time`, `last_updated`) VALUES
(1, 'sa', 'sa', 'Trần Văn Sáng', '2000-10-06', '2020-07-24 01:38:16', '2020-07-24 01:38:16'),
(2, 'minhhai', '123', 'Trương Lê Minh Hải', '1999-08-20', '2020-07-27 16:12:23', '2020-07-27 16:12:23'),
(4, 'dangloc', '061020', 'Đặng bá lộc', '2000-10-06', '2020-07-29 15:28:46', '2020-07-29 15:28:46'),
(5, 'transang06', '0349923955a', 'Trần Văn Sáng', '2000-10-06', '2020-07-29 15:37:13', '2020-07-29 15:37:13');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ctdv`
--
ALTER TABLE `ctdv`
  ADD PRIMARY KEY (`MaCI`,`MaDV`),
  ADD KEY `MaDV` (`MaDV`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`MaDV`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`MaLP`);

--
-- Chỉ mục cho bảng `phongcandon`
--
ALTER TABLE `phongcandon`
  ADD KEY `MaLP` (`MaLP`);

--
-- Chỉ mục cho bảng `phongcheckin`
--
ALTER TABLE `phongcheckin`
  ADD PRIMARY KEY (`MaCI`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaLP` (`MaLP`);

--
-- Chỉ mục cho bảng `phongtrong`
--
ALTER TABLE `phongtrong`
  ADD KEY `MaLP` (`MaLP`);

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`MaTB`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `MaDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `MaLP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `phongcheckin`
--
ALTER TABLE `phongcheckin`
  MODIFY `MaCI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `MaTB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ctdv`
--
ALTER TABLE `ctdv`
  ADD CONSTRAINT `ctdv_ibfk_1` FOREIGN KEY (`MaCI`) REFERENCES `phongcheckin` (`MaCI`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ctdv_ibfk_2` FOREIGN KEY (`MaDV`) REFERENCES `dichvu` (`MaDV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phongcandon`
--
ALTER TABLE `phongcandon`
  ADD CONSTRAINT `phongcandon_ibfk_1` FOREIGN KEY (`MaLP`) REFERENCES `phong` (`MaLP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phongcheckin`
--
ALTER TABLE `phongcheckin`
  ADD CONSTRAINT `phongcheckin_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phongcheckin_ibfk_2` FOREIGN KEY (`MaLP`) REFERENCES `phong` (`MaLP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phongtrong`
--
ALTER TABLE `phongtrong`
  ADD CONSTRAINT `phongtrong_ibfk_1` FOREIGN KEY (`MaLP`) REFERENCES `phong` (`MaLP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
