-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 04:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlybanhangltw`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SoDonDH` varchar(5) NOT NULL,
  `MSHH` varchar(5) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaDatHang` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietdathang`
--

INSERT INTO `chitietdathang` (`SoDonDH`, `MSHH`, `SoLuong`, `GiaDatHang`) VALUES
('DH001', 'HH001', 9, 60.8),
('DH002', 'HH001', 5, 60.8),
('DH003', 'HH002', 90, 90.8),
('DH004', 'HH002', 95, 90.8),
('DH005', 'HH003', 66, 44.8),
('DH006', 'HH004', 10, 110.8);

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` varchar(5) NOT NULL,
  `MSKH` varchar(5) NOT NULL,
  `MSNV` varchar(5) NOT NULL,
  `NgayDH` datetime NOT NULL,
  `TrangThai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dathang`
--

INSERT INTO `dathang` (`SoDonDH`, `MSKH`, `MSNV`, `NgayDH`, `TrangThai`) VALUES
('DH001', 'K0003', 'B0004', '2019-06-01 00:00:00', '0'),
('DH002', 'K0006', 'B0004', '2019-07-01 00:00:00', '0'),
('DH003', 'K0005', 'B0006', '2019-06-07 00:00:00', '1'),
('DH004', 'K0004', 'B0007', '2020-06-08 00:00:00', '1'),
('DH005', 'K0008', 'B0005', '2020-10-01 00:00:00', '1'),
('DH006', 'K0007', 'B0003', '2019-08-01 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` varchar(5) NOT NULL,
  `TenHH` varchar(50) NOT NULL,
  `Gia` float NOT NULL,
  `SoLuongHang` int(11) NOT NULL,
  `MaNhom` varchar(5) NOT NULL,
  `Hinh` varchar(255) NOT NULL,
  `MoTaHH` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `Gia`, `SoLuongHang`, `MaNhom`, `Hinh`, `MoTaHH`) VALUES
('HH001', 'Hoa Hong Do', 60.8, 100, 'NDH01', 'https://cdn.pixabay.com/photo/2014/04/10/11/24/rose-320868__340.jpg', 'Hoa hồng đỏ là loài hoa mang nhiều ý nghĩa hơn so với các loại hoa khác, là đại diện cho mọi loài hoa'),
('HH002', 'Hoa Hong Tim', 90.8, 160, 'NDH01', 'https://cdn.pixabay.com/photo/2013/07/21/13/00/rose-165819_1280.jpg', 'Loài hoa này là sự lai tạo tuyệt vời giữa giống hoa hồng Châu Âu lai với hoa hồng Trung Quốc. '),
('HH003', 'Sen Hong', 44.8, 600, 'NDH04', 'https://cdn.pixabay.com/photo/2015/10/09/00/55/lotus-978659_1280.jpg', 'Sen (tên khoa học: Nelumbo nucifera), còn gọi là sen hồng, là một loài thực vật thuỷ sinh thân thảo sống lâu năm thuộc chi sen'),
('HH004', 'Ly Ly Trang', 110.8, 100, 'NDH02', 'https://cdn.pixabay.com/photo/2015/04/19/08/33/flower-729514_1280.jpg', 'Hoa ly hay còn được gọi là hoa lily có nhiều màu sắc rực rỡ khác nhau như hồng, cam, vàng, mỗi bông hoa có 6 cánh và có mùi hương nồng nàn đặc trưng.');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` varchar(5) NOT NULL,
  `HoTenKH` varchar(50) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `SoDienThoai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MSKH`, `HoTenKH`, `DiaChi`, `SoDienThoai`) VALUES
('K0001', 'Ha Van Linh1', 'Phus Binh, Phu Tan, An Giang', '342878799'),
('K0002', 'La Phi Pham1', 'Phus Binh, Phu Tan, An Giang', '342878607'),
('K0003', 'Vo Van Thanh1', 'Phus Binh, Phu Tan, An Giang', '342870907'),
('K0004', 'Le Ngoc Boi1', 'Binh Thuy, Can Tho ', '3428705651'),
('K0005', 'Vo Van Linh1', 'Phus Binh, Chau Phu, An Giang', '302876467'),
('K0006', 'Le Tinh Ngo1', 'Phu Thanh, Phu Tan, An Giang', '340438767'),
('K0007', 'Ha Van Nhanh1', 'Phus Binh, Phu Tan, Ca Mau', '349908767'),
('K0008', 'Nguyen Van Anh1', 'Chau Phu, Chau Phu, An Giang', '342088767'),
('K0009', 'La Thanh Khang1', 'Phus Binh, Chau Thanh, An Giang', '348878727'),
('K0010', 'Ngo Van Luom1', 'Phu Tho, Phu Tan, An Giang', '342068767');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` varchar(5) NOT NULL,
  `HoTenNV` varchar(50) NOT NULL,
  `ChucVu` varchar(50) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `SoDienThoai` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `HoTenNV`, `ChucVu`, `DiaChi`, `SoDienThoai`) VALUES
('B0001', 'Ha Van Linh', 'Quan ly', 'Phus Binh, Phu Tan, An Giang', '342878767'),
('B0002', 'La Phi Pham', 'Thu Ngan', 'Phus Binh, Phu Tan, An Giang', '342878687'),
('B0003', 'Vo Van Thanh', 'Nhan Vien', 'Phus Binh, Phu Tan, An Giang', '342870987'),
('B0004', 'Le Ngoc Boi', 'Nhan Vien', 'Binh Thuy, Can Tho ', '3428775651'),
('B0005', 'Vo Van Linh', 'Nhan Vien', 'Phus Binh, Chau Phu, An Giang', '342876467'),
('B0006', 'Le Tinh Ngo', 'Nhan Vien', 'Phu Thanh, Phu Tan, An Giang', '345438767'),
('B0007', 'Ha Van Nhanh', 'Nhan Vien', 'Phus Binh, Phu Tan, Ca Mau', '349998767'),
('B0008', 'Nguyen Van Anh', 'Nhan Vien', 'Chau Phu, Chau Phu, An Giang', '342888767'),
('B0009', 'La Thanh Khang', 'Nhan Vien', 'Phus Binh, Chau Thanh, An Giang', '342878727'),
('B0010', 'Ngo Van Luom', 'Nhan Vien', 'Phu Tho, Phu Tan, An Giang', '342078767');

-- --------------------------------------------------------

--
-- Table structure for table `nhomhanghoa`
--

CREATE TABLE `nhomhanghoa` (
  `MaNhom` varchar(5) NOT NULL,
  `TenNhom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhomhanghoa`
--

INSERT INTO `nhomhanghoa` (`MaNhom`, `TenNhom`) VALUES
('NDH01', 'Hoa Hong'),
('NDH02', 'Ly Ly'),
('NDH03', 'Cuc'),
('NDH04', 'Sen'),
('NDH05', 'Huong Duong'),
('NDH06', 'Hoa Khac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`SoDonDH`,`MSHH`),
  ADD KEY `SoDonDH` (`SoDonDH`),
  ADD KEY `MSHH` (`MSHH`);

--
-- Indexes for table `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`),
  ADD KEY `MSKH` (`MSKH`),
  ADD KEY `MSNV` (`MSNV`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`),
  ADD KEY `MaNhom` (`MaNhom`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- Indexes for table `nhomhanghoa`
--
ALTER TABLE `nhomhanghoa`
  ADD PRIMARY KEY (`MaNhom`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `FK1_ChiTietDatHang_HangHoa` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`),
  ADD CONSTRAINT `FK2_ChiTietDatHang_DatHang` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`);

--
-- Constraints for table `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `FK1_DatHang_NhanVien` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`),
  ADD CONSTRAINT `FK2_DatHang_KhachHang` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `FK1_NhomHang` FOREIGN KEY (`MaNhom`) REFERENCES `nhomhanghoa` (`MaNhom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
use quanlybanhangltw;
-- theem nhan vien

insert into nhanvien values('B0001','Ha Van Linh','Quan ly','Phus Binh, Phu Tan, An Giang',0342878767);
insert into nhanvien values('B0002','La Phi Pham','Thu Ngan','Phus Binh, Phu Tan, An Giang',0342878687);
insert into nhanvien values('B0003','Vo Van Thanh','Nhan Vien','Phus Binh, Phu Tan, An Giang',0342870987);
insert into nhanvien values('B0004','Le Ngoc Boi','Nhan Vien','Binh Thuy, Can Tho ',03428775651);
insert into nhanvien values('B0005','Vo Van Linh','Nhan Vien','Phus Binh, Chau Phu, An Giang',0342876467);
insert into nhanvien values('B0006','Le Tinh Ngo','Nhan Vien','Phu Thanh, Phu Tan, An Giang',0345438767);
insert into nhanvien values('B0007','Ha Van Nhanh','Nhan Vien','Phus Binh, Phu Tan, Ca Mau',0349998767);
insert into nhanvien values('B0008','Nguyen Van Anh','Nhan Vien','Chau Phu, Chau Phu, An Giang',0342888767);
insert into nhanvien values('B0009','La Thanh Khang','Nhan Vien','Phus Binh, Chau Thanh, An Giang',0342878727);
insert into nhanvien values('B0010','Ngo Van Luom','Nhan Vien','Phu Tho, Phu Tan, An Giang',0342078767);
-- them khach hang
insert into khachhang values('K0001','Ha Van Linh1','Phus Binh, Phu Tan, An Giang',0342878799);
insert into khachhang values('K0002','La Phi Pham1','Phus Binh, Phu Tan, An Giang',0342878607);
insert into khachhang values('K0003','Vo Van Thanh1','Phus Binh, Phu Tan, An Giang',0342870907);
insert into khachhang values('K0004','Le Ngoc Boi1','Binh Thuy, Can Tho ',03428705651);
insert into khachhang values('K0005','Vo Van Linh1','Phus Binh, Chau Phu, An Giang',0302876467);
insert into khachhang values('K0006','Le Tinh Ngo1','Phu Thanh, Phu Tan, An Giang',0340438767);
insert into khachhang values('K0007','Ha Van Nhanh1','Phus Binh, Phu Tan, Ca Mau',0349908767);
insert into khachhang values('K0008','Nguyen Van Anh1','Chau Phu, Chau Phu, An Giang',0342088767);
insert into khachhang values('K0009','La Thanh Khang1','Phus Binh, Chau Thanh, An Giang',0348878727);
insert into khachhang values('K0010','Ngo Van Luom1','Phu Tho, Phu Tan, An Giang',0342068767);
-- them nhom dat hang
insert into nhomhanghoa values('NDH01','Hoa Hong');
insert into nhomhanghoa values('NDH02','Ly Ly');
insert into nhomhanghoa values('NDH03','Cuc');
insert into nhomhanghoa values('NDH04','Sen');
insert into nhomhanghoa values('NDH05','Huong Duong');
insert into nhomhanghoa values('NDH06','Hoa Khac');
-- them hang hoa
insert into hanghoa values('HH001','Hoa Hong Do',60.80,100,'NDH01','https://cdn.pixabay.com/photo/2014/04/10/11/24/rose-320868__340.jpg','Hoa hồng đỏ là loài hoa mang nhiều ý nghĩa hơn so với các loại hoa khác, là đại diện cho mọi loài hoa');
insert into hanghoa values('HH002','Hoa Hong Tim',90.80,160,'NDH01','https://cdn.pixabay.com/photo/2013/07/21/13/00/rose-165819_1280.jpg','Loài hoa này là sự lai tạo tuyệt vời giữa giống hoa hồng Châu Âu lai với hoa hồng Trung Quốc. ');
insert into hanghoa values('HH003','Sen Hong',44.80,600,'NDH04','https://cdn.pixabay.com/photo/2015/10/09/00/55/lotus-978659_1280.jpg','Sen (tên khoa học: Nelumbo nucifera), còn gọi là sen hồng, là một loài thực vật thuỷ sinh thân thảo sống lâu năm thuộc chi sen');
insert into hanghoa values('HH004','Ly Ly Trang',110.80,100,'NDH02','https://cdn.pixabay.com/photo/2015/04/19/08/33/flower-729514_1280.jpg','Hoa ly hay còn được gọi là hoa lily có nhiều màu sắc rực rỡ khác nhau như hồng, cam, vàng, mỗi bông hoa có 6 cánh và có mùi hương nồng nàn đặc trưng.');
-- them don dat hang
insert into dathang values('DH001','K0003','B0004',STR_TO_DATE('06-01-2019', '%m-%d-%Y'),0);
insert into dathang values('DH002','K0006','B0004',STR_TO_DATE('07-01-2019', '%m-%d-%Y'),0);
insert into dathang values('DH003','K0005','B0006',STR_TO_DATE('06-07-2019', '%m-%d-%Y'),1);
insert into dathang values('DH004','K0004','B0007',STR_TO_DATE('06-08-2020', '%m-%d-%Y'),1);
insert into dathang values('DH005','K0008','B0005',STR_TO_DATE('10-01-2020', '%m-%d-%Y'),1);
insert into dathang values('DH006','K0007','B0003',STR_TO_DATE('08-01-2019', '%m-%d-%Y'),0);

-- them chi tiet don hang
insert into chitietdathang values('DH001','HH001',9,60.80);
insert into chitietdathang values('DH002','HH001',5,60.80);
insert into chitietdathang values('DH003','HH002',90,90.80);
insert into chitietdathang values('DH004','HH002',95,90.80);
insert into chitietdathang values('DH005','HH003',66,44.80);
insert into chitietdathang values('DH006','HH004',10,110.80);
