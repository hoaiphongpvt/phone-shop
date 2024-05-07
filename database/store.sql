-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 01:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `HOTEN` varchar(255) NOT NULL,
  `TENTAIKHOAN` varchar(255) NOT NULL,
  `MATKHAU` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `HOTEN`, `TENTAIKHOAN`, `MATKHAU`) VALUES
(1, 'Nguyễn Hoài Phong', 'hoaiphongpvt', '21032002'),
(2, 'Giang Chấn Phong', 'chanphong', 'chanphong'),
(3, 'Nguyễn Võ Anh Pha', 'anhpha', 'anhpha'),
(4, 'Nguyễn Hoàng Phúc', 'hoangphuc', 'hoangphuc');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `ID_CTHOADON` int(11) NOT NULL,
  `ID_HOADON` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `DONGIA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`ID_CTHOADON`, `ID_HOADON`, `ID_SP`, `SOLUONG`, `DONGIA`) VALUES
(6, 19, 2, 2, 19000000),
(7, 19, 1, 1, 15000000),
(8, 19, 8, 1, 17990000),
(9, 19, 10, 1, 11490000),
(10, 19, 9, 1, 11990000),
(15, 21, 5, 1, 22000000),
(16, 22, 5, 1, 22000000),
(17, 23, 7, 1, 27490000),
(18, 23, 10, 1, 11490000),
(19, 25, 7, 1, 27490000),
(20, 25, 5, 1, 22000000),
(21, 25, 8, 1, 17990000),
(22, 26, 3, 2, 20000000),
(23, 26, 6, 1, 7999000),
(24, 27, 3, 1, 20000000),
(25, 27, 7, 1, 27490000),
(26, 28, 2, 1, 19000000),
(27, 28, 5, 1, 22000000),
(28, 28, 10, 1, 11490000),
(29, 29, 6, 1, 7999000),
(30, 29, 7, 1, 27490000),
(31, 30, 1, 1, 15000000),
(32, 30, 7, 1, 27490000),
(33, 31, 8, 1, 17990000),
(34, 31, 10, 1, 11490000),
(35, 32, 7, 1, 27490000),
(36, 33, 2, 1, 19000000),
(37, 34, 4, 1, 18500000);

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `ID` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `ANHTHONGSO` varchar(255) NOT NULL,
  `TS_MANHINH` varchar(255) NOT NULL,
  `TS_BONHO` varchar(255) NOT NULL,
  `TS_CAMERA` varchar(255) NOT NULL,
  `TS_PIN` varchar(255) NOT NULL,
  `HDH` varchar(255) NOT NULL,
  `CHIP` varchar(255) NOT NULL,
  `SIM` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`ID`, `ID_SP`, `ANHTHONGSO`, `TS_MANHINH`, `TS_BONHO`, `TS_CAMERA`, `TS_PIN`, `HDH`, `CHIP`, `SIM`) VALUES
(1, 1, './assets/img/products/iphone-11-detail.jpg', 'IPS LCD6.1\" Liquid Retina', '4GB 128GB', 'Sau 2 camera 12 MP, Trước 12 MP', '3110 mAh 18W', 'iOS 15', 'Apple A13 Bionic', '1 Nano SIM & 1 eSIM, Hỗ trợ 4G'),
(2, 2, './assets/img/products/iphone-12-mini-detail.jpg', 'OLED5.4\"Super Retina XDR', '4GB 128GB', 'Sau: 2 camera 12 MP, Trước: 12 MP', '2227mAh, 20W', 'iOS 16', 'Apple A14 Bionic', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G'),
(3, 3, './assets/img/products/iphone-12-pro-max-detail.jpg', 'OLED 6.7\" Super Retina XDR', '6GB 512GB', 'Sau: 3 camera 12 MP, Trước: 12 MP', '3687mAh 20W', 'iOS 16', 'Apple A14 Bionic', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G'),
(4, 4, './assets/img/products/iphone-13-mini-detail.jpg', 'OLED 5.4\" Super Retina XDR', '4GB 256GB', 'Sau: 2 camera 12 MP, Trước: 12 MP', '2438mAh 20W', 'iOS 16', 'Apple A15 Bionic', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G'),
(5, 5, './assets/img/products/iphone-13-pro-max-detail.jpg', 'OLED 6.7\" Super Retina XDR', '6GB 1TB', 'Sau: 3 camera 12 MP, Trước: 12 MP', '4352mAh 20W', 'iOS 16', 'Apple A15 Bionic', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G'),
(6, 6, './assets/img/products/samsung-galaxy-a52-detail.jpg', 'Super AMOLED 6.5\" Full HD+', '8GB 128GB', 'Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP Trước: 32 MP', '4500mAh, 25W', 'Android 11', 'Snapdragon 778G 5G', '2 Nano SIM, Hỗ trợ 5G'),
(7, 7, './assets/img/products/iphone-14-pro-max-detail.jpg', 'OLED 6.7\" Super Retina XDR', '6GB 128GB', 'Sau: 48 MP & Phụ 12 MP, 12 MP, Trước: 12MP', '4323mAh, 20W', 'iOS 16', 'Apple A16 Bionic', '1 Nano SIM & 1 eSIM Hỗ trợ 5G'),
(8, 8, './assets/img/products/oppo-reno8-pro-note.jpg', 'AMOLED 6.7\" Full HD+', '12GB 512GB', 'Sau: Chính 50MP & Phụ 8MP, 2MP, Trước: 32MP', '4500mAh 80W', 'Android 12', 'MediaTek Dimensity 8100 Max 8 nhân', '2 Nano SIM, Hỗ trợ 5G'),
(9, 9, './assets/img/products/vivo-v25-pro-5g-note.jpg', 'AMOLED 6.56\" Full HD+', '8GB 128GB', 'Chính 64 MP & Phụ 8 MP, 2 MP', '4830mAh, 66 W', 'Android 12', 'MediaTek Dimensity 1300', '2 Nano SIM, Hỗ trợ 5G'),
(10, 10, './assets/img/products/xiaomi-11t-note.jpg', 'AMOLED 6.67\" Full HD+', '8GB 256GB', 'Chính 108 MP & Phụ 8 MP, 5 MP Phụ: 16 MP', '5000mAh, 67W', 'Android 11', 'MediaTek Dimensity 1200', '2 Nano SIM, Hỗ trợ 5G'),
(11, 11, './assets/img/products/samsung-galaxy-s23-note.jpg', 'Dynamic AMOLED 2X6.1\" Full HD+', '8 GB 128GB', 'Chính 50 MP & Phụ 12 MP, 10 MP', '3900 mAh, 25 W', 'Android 13', 'Snapdragon 8 Gen 2 8 nhân', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM Hỗ trợ 5G'),
(13, 13, './assets/img/products/samsung-galaxy-s23-ultra-note.jpg', 'Dynamic AMOLED 2X6.1\" Full HD+', '8 GB 128GB', 'Chính 50 MP & Phụ 12 MP, 10 MP', '5000 mAh, 45 W', 'Android 13', 'Snapdragon 8 Gen 2 8 nhân', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM Hỗ trợ 5G');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `ID` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `ID_NGUOIDUNG` int(11) NOT NULL,
  `SOLUONG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `ID_HOADON` int(11) NOT NULL,
  `ID_NGUOIDUNG` int(11) NOT NULL,
  `NGAYLAP` date DEFAULT NULL,
  `NGAYGIAO` date DEFAULT NULL,
  `NGUOINHAN` varchar(255) NOT NULL,
  `SDT` varchar(255) NOT NULL,
  `DIACHI` varchar(255) NOT NULL,
  `PHUONGTHUCTT` varchar(255) NOT NULL,
  `TONGTIEN` int(11) NOT NULL,
  `TRANGTHAI` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`ID_HOADON`, `ID_NGUOIDUNG`, `NGAYLAP`, `NGAYGIAO`, `NGUOINHAN`, `SDT`, `DIACHI`, `PHUONGTHUCTT`, `TONGTIEN`, `TRANGTHAI`) VALUES
(19, 1, '2023-04-11', '2024-05-07', 'Nguyễn Hoài Phong', '0855559851', 'Ấp 3 Xã Phước Vĩnh Tây - Cần Giuộc - Long An', 'Online', 94470000, 'Đã giao'),
(21, 1, '2023-04-11', NULL, 'Nguyễn Hoài Phong', '0855559851', 'Ấp 3 Xã Phước Vĩnh Tây - Cần Giuộc - Long An', 'Online', 22000000, 'Đang giao'),
(22, 1, '2023-04-11', '2023-04-26', 'Nguyễn Hoài Phong', '0855559851', 'Ấp 3 Xã Phước Vĩnh Tây - Cần Giuộc - Long An', 'COD', 22000000, 'Đã giao'),
(23, 1, '2023-04-11', '2023-04-22', 'Nguyễn Hoài Phong', '0855559851', 'Ấp 3 Xã Phước Vĩnh Tây - Cần Giuộc - Long An', 'COD', 38980000, 'Đã giao'),
(25, 1, '2023-04-12', '2023-04-22', 'Nguyễn Hoài Phong', '0855559851', 'Ấp 3 Xã Phước Vĩnh Tây - Cần Giuộc - Long An', 'Online', 67480000, 'Đã giao'),
(26, 1, '2023-04-12', NULL, 'Nguyễn Hoài Phong', '0855559851', 'Ấp 3 Xã Phước Vĩnh Tây - Cần Giuộc - Long An', 'Online', 47999000, 'Đang xử lý'),
(27, 4, '2023-04-14', '2023-04-23', 'Nguyễn Hoàng Phúc', '0962531469', '21 Hậu Giang Phường 5 Quận 6 Thành phố Hồ Chí Minh', 'Online', 47490000, 'Đã giao'),
(28, 1, '2023-04-15', NULL, 'Nguyễn Hoài Phong', '0855559851', 'Tổ 9 Ấp 3 Xã Phước Vĩnh Tây - Cần Giuộc - Long An', 'COD', 52490000, 'Đang xử lý'),
(29, 4, '2023-04-15', NULL, 'Nguyễn Hoàng Phúc', '0962531469', '21 Hậu Giang Phường 5 Quận 6 Thành phố Hồ Chí Minh', 'Online', 35489000, 'Đang xử lý'),
(30, 5, '2023-04-19', '2023-04-23', 'Giang Chấn Phong', '086478692', '58 Trần Phú Phường 5 Quận 5 Thành phố Hồ Chí Minh', 'Online', 42490000, 'Đã giao'),
(31, 6, '2023-04-19', '2023-04-23', 'Nguyễn Võ Anh Pha', '0456879654', '21 Hậu Giang Phường 5 Quận 6 Thành phố Hồ Chí Minh', 'COD', 29480000, 'Đã giao'),
(32, 1, '2024-05-07', NULL, 'Nguyễn Hoài Phong', '0855559851', 'Ấp 3 Xã Phước Vĩnh Tây - Cần Giuộc - Long An', 'Online', 27490000, 'Đang xử lý'),
(33, 1, '2024-05-07', NULL, 'Nguyễn Hoài Phong', '0855559851', 'Ấp 3 Xã Phước Vĩnh Tây - Cần Giuộc - Long An', 'COD', 19000000, 'Đang xử lý'),
(34, 1, '2024-05-07', NULL, 'Nguyễn Hoài Phong', '0855559851', 'Ấp 3 Xã Phước Vĩnh Tây - Cần Giuộc - Long An', 'COD', 18500000, 'Đang xử lý');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ID` int(11) NOT NULL,
  `HOTEN` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `DIENTHOAI` varchar(11) NOT NULL,
  `DIACHI` varchar(255) NOT NULL,
  `NGAYSINH` date NOT NULL,
  `HINHANH` varchar(255) NOT NULL,
  `TENDANGNHAP` varchar(255) NOT NULL,
  `MATKHAU` varchar(255) NOT NULL,
  `TRANGTHAI` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`ID`, `HOTEN`, `EMAIL`, `DIENTHOAI`, `DIACHI`, `NGAYSINH`, `HINHANH`, `TENDANGNHAP`, `MATKHAU`, `TRANGTHAI`) VALUES
(1, 'Nguyễn Hoài Phong', 'hoaiphongpvt@gmail.com', '0855559851', 'Ấp 3 Xã Phước Vĩnh Tây - Cần Giuộc - Long An', '2002-03-21', './assets/img/users/z5415106286053_6c979cc7c01b0e3c0aad0fff8d26db0b.jpg', 'phongnon123', '21032002', b'1'),
(4, 'Nguyễn Hoàng Phúc', 'hoangphuc@gmail.com', '0962531469', '21 Hậu Giang Phường 5 Quận 6 Thành phố Hồ Chí Minh', '2002-04-07', './assets/img/users/cart.png', 'hoangphuc', '123456', b'1'),
(5, 'Giang Chấn Phong', 'chanphong@gmail.com', '0864786925', '58 Trần Phú Phường 5 Quận 5 Thành phố Hồ Chí Minh', '2002-03-06', './assets/img/users/avatar.jpg', 'chanphong', '123456', b'1'),
(6, 'Nguyễn Võ Anh Pha', 'anhpha@gmail.com', '0456879654', '21 Hậu Giang Phường 5 Quận 6 Thành phố Hồ Chí Minh', '2002-01-07', './assets/img/users/caiquan.jpg', 'anhpha', '123456', b'1'),
(10, 'tester', 'test@gmail.com', '0962531469', 'Cần Giuộc - Long An', '2023-04-07', './assets/img/users/avatar.jpg', 'test', '123456', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `nsx`
--

CREATE TABLE `nsx` (
  `ID` int(11) NOT NULL,
  `TENNSX` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nsx`
--

INSERT INTO `nsx` (`ID`, `TENNSX`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Xiaomi'),
(4, 'Oppo'),
(5, 'Vivo');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(11) NOT NULL,
  `TEN` varchar(255) NOT NULL,
  `GIA` int(11) NOT NULL,
  `HINHANH` varchar(255) NOT NULL,
  `ID_NSX` int(11) NOT NULL,
  `MOTA` text NOT NULL,
  `DANHGIA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ID`, `TEN`, `GIA`, `HINHANH`, `ID_NSX`, `MOTA`, `DANHGIA`) VALUES
(1, 'Apple iPhone 11', 15000000, './assets/img/products/iphone-11.jpg', 1, 'Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.', 4),
(2, 'Apple iPhone 12 Mini', 19000000, './assets/img/products/iphone-12-mini.jpg', 1, 'Điện thoại iPhone 12 mini 64 GB tuy là phiên bản thấp nhất trong bộ 4 iPhone 12 series, nhưng vẫn sở hữu những ưu điểm vượt trội về kích thước nhỏ gọn, tiện lợi, hiệu năng đỉnh cao, tính năng sạc nhanh cùng bộ camera chất lượng cao.', 4),
(3, 'Apple iPhone 12 Pro Max', 20000000, './assets/img/products/iphone-12-pro-max.jpg', 1, 'Điện thoại iPhone 12 Pro Max 512GB - đẳng cấp từ tên gọi đến từng chi tiết. Ngay từ khi chỉ là tin đồn thì chiếc smartphone này đã làm đứng ngồi không yên bao “fan cứng” nhà Apple, với những nâng cấp vô cùng nổi bật hứa hẹn sẽ mang đến những trải nghiệm tốt nhất về mọi mặt mà chưa một chiếc iPhone tiền nhiệm nào có được.', 4.5),
(4, 'Apple iPhone 13 Mini', 18500000, './assets/img/products/iphone-13-mini.jpg', 1, 'iPhone 13 mini được Apple ra mắt với hàng loạt nâng cấp về cấu hình và các tính năng hữu ích, lại có thiết kế vừa vặn. Chiếc điện thoại này hứa hẹn là một thiết bị hoàn hảo hướng tới những khách hàng thích sự nhỏ gọn nhưng vẫn giữ được sự mạnh mẽ bên trong. ', 3.8),
(5, 'Apple iPhone 13 Pro Max', 22000000, './assets/img/products/iphone-13-pro-max.jpg', 1, 'Điện thoại iPhone 13 Pro Max 128 GB - siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.', 5),
(6, 'Samsung Galaxy A52', 7999000, './assets/img/products/samsung-galaxy-a52.jpg', 2, 'Samsung Galaxy A52 5G ra mắt được trang bị con chip Snapdragon 750G có hỗ trợ 5G tốc độ cao, trải nghiệm đã mắt với màn hình Super AMOLED đi cùng với dung lượng pin lớn và thuộc phân khúc tầm trung rất dễ tiếp cận với mọi người dùng.', 4.1),
(7, 'Apple iPhone 14 Pro Max', 27490000, './assets/img/products/iphone-14-pro-max.jpg', 1, 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.\r\n\r\niPhone năm nay sẽ được thừa hưởng nét đặc trưng từ người anh iPhone 13 Pro Max, vẫn sẽ là khung thép không gỉ và mặt lưng kính cường lực kết hợp với tạo hình vuông vức hiện đại thông qua cách tạo hình phẳng ở các cạnh và phần mặt lưng.', 4.5),
(8, 'OPPO Reno8 Pro 5G', 17990000, './assets/img/products/oppo-reno8-pro.jpg', 4, 'OPPO Reno8 Pro 5G là chiếc điện thoại cao cấp được nhà OPPO ra mắt vào thời điểm 09/2022, máy hướng đến sự hoàn thiện cao cấp ở phần thiết kế cùng khả năng quay chụp chuyên nghiệp nhờ trang bị vi xử lý hình ảnh MariSilicon X chuyên dụng.', 4),
(9, 'Vivo V25 Pro 5G', 11990000, './assets/img/products/vivo-v25-pro-5g.jpg', 5, 'Vivo V25 Pro 5G vừa được ra mắt với một mức giá bán cực kỳ hấp dẫn, thế mạnh của máy thuộc về phần hiệu năng nhờ trang bị con chip MediaTek Dimensity 1300 và cụm camera sắc nét 64 MP, hứa hẹn mang lại cho người dùng những trải nghiệm ổn định trong suốt quá trình sử dụng.', 4),
(10, 'Xiaomi 11T 5G 256GB', 11490000, './assets/img/products/Xiaomi-11T.jpg', 3, 'Xiaomi 11T 5G sở hữu màn hình AMOLED, viên pin siêu khủng cùng camera độ phân giải 108 MP, điện thoại Xiaomi sẽ đáp ứng mọi nhu cầu sử dụng của bạn, từ giải trí đến làm việc đều vô cùng mượt mà.', 4),
(11, 'Samsung Galaxy S23 5G ', 16990000, './assets/img/products/samsung-galaxy-s23-600x600.jpg', 2, 'Samsung Galaxy S23 5G 128GB chắc hẳn không còn là cái tên quá xa lạ đối với các tín độ công nghệ hiện nay, được xem là một trong những gương mặt chủ chốt đến từ nhà Samsung với cấu hình mạnh mẽ bậc nhất, camera trứ danh hàng đầu cùng lối hoàn thiện vô cùng sang trọng và hiện đại.', 4),
(13, 'Samsung Galaxy S23 5G ', 26990000, './assets/img/products/samsung-galaxy-s23-ultra-1-600x600.jpg', 2, 'Samsung Galaxy S23 5G 128GB chắc hẳn không còn là cái tên quá xa lạ đối với các tín độ công nghệ hiện nay, được xem là một trong những gương mặt chủ chốt đến từ nhà Samsung với cấu hình mạnh mẽ bậc nhất, camera trứ danh hàng đầu cùng lối hoàn thiện vô cùng sang trọng và hiện đại.', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`ID_CTHOADON`),
  ADD KEY `ID_SP` (`ID_SP`),
  ADD KEY `ID_HOADON` (`ID_HOADON`);

--
-- Indexes for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_SP` (`ID_SP`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_SP` (`ID_SP`),
  ADD KEY `ID_NGUOIDUNG` (`ID_NGUOIDUNG`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`ID_HOADON`),
  ADD KEY `ID_NGUOIDUNG` (`ID_NGUOIDUNG`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nsx`
--
ALTER TABLE `nsx`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_NSX` (`ID_NSX`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `ID_CTHOADON` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `ID_HOADON` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nsx`
--
ALTER TABLE `nsx`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`ID_SP`) REFERENCES `sanpham` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`ID_HOADON`) REFERENCES `hoadon` (`ID_HOADON`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `chitietsanpham_ibfk_1` FOREIGN KEY (`ID_SP`) REFERENCES `sanpham` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`ID_SP`) REFERENCES `sanpham` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`ID_NGUOIDUNG`) REFERENCES `nguoidung` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`ID_NGUOIDUNG`) REFERENCES `nguoidung` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`ID_NSX`) REFERENCES `nsx` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
