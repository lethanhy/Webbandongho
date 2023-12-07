-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2023 lúc 12:16 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbandongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(5) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Samsung'),
(2, 'Iphone'),
(3, 'Oppo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(20) NOT NULL,
  `id` int(11) NOT NULL,
  `id_khach` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(50) NOT NULL,
  `ten` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sanpham` varchar(50) NOT NULL,
  `tinnhan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `ten`, `phone`, `email`, `sanpham`, `tinnhan`) VALUES
(3, 'Lê Thành Y', '0939834780', 'lethanhy780@gmail.com', 'apple watch 2', 'giá cả bao nhiêu'),
(4, 'Lê Thành Y', '0939834780', 'lethanhy780@gmail.com', 'apple watch 2', 'giá cả bao nhiêu'),
(5, 'Lê Thành Y', '0123456789', 'me@example.com', 'apple watch 5', 'Bảo hành bao lâu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user',
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`, `phone`, `email`, `address`) VALUES
(5, 'user', '123', 'user', '', '', ''),
(6, 'admin', '123', 'admin', '', '', ''),
(9, 'Thành', '123', 'user', '0939834780', 'lethanhy780@gmail.com', ''),
(10, 'Nguyễn Minh Trung', '123', 'user', '12345678', 'minhtrung@gmail.com', ''),
(11, 'Đỗ Thành Đạt', '123', 'user', '0123456789', 'thanhdat@gmail', ''),
(14, 'Nguyễn Thị Bé Tư', '123', 'user', '12345678', 'tu@gmail.com', ' Số 8 Cần Thơ'),
(15, 'Nguyễn Văn Tám', '123', 'user', '0939887780', 'tam@gmail.com', 'Vĩnh Long'),
(16, 'Nguyễn Mi', '123', 'user', '12345678', 'lethanhy780@gmail.com', 'an giang'),
(17, 'Lê Thành Y', '123', 'user', '0939834780', 'lethanhy780@gmail.com', '475/18 Cần Thơ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `id_khach` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `total` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `total_product` varchar(255) NOT NULL,
  `status` enum('Đã hủy','Đã giao','Đang xử lý') NOT NULL DEFAULT 'Đang xử lý'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `id_khach`, `name`, `address`, `email`, `date`, `total`, `phone`, `total_product`, `status`) VALUES
(1, 0, 'Lê Thành Y', '456/7', 'lethanhy780@gmail.com', '2023-11-22 00:00:00', '132000000', '0123456789', 'Apple Watch Series (2), Apple Watch SE 2022 (1), Apple Watch SE 2(1), Apple Watch (1), Apple Watch (1)', 'Đã giao'),
(7, 0, 'Lê Thành Y', 'Cần Thơ', 'lethanhy780@gmail.com', '2023-11-22 00:00:00', '53000000', '0939834780', 'Apple Watch Series 9(1), Apple Watch SE 2(1), Apple Watch SE 2022 (1)', 'Đã giao'),
(8, 0, 'Lê Thành Y', '456/7', 'lethanhy780@gmail.com', '2023-11-23 00:00:00', '63000000', '0123456789', 'Apple Watch SE 2022 (6), Apple Watch Series 9(6), Apple Watch SE 2022 (5)', 'Đã giao'),
(12, 12, 'Phạm Trần Sơn Lam', 'Sóc Trăng', 'lam123@gmail.com', '2023-11-23 00:00:00', '10040000', '0939834780', 'Apple Watch SE 2022 (2), Apple Watch Series 9(2)', 'Đã giao'),
(13, 11, 'Đỗ Thành Đạt', 'An giang', 'thanhdat@gmail', '2023-11-23 00:00:00', '48000000', '0123456789', 'Apple Watch (1), Apple Watch SE 2022 (1), Apple Watch Series 9(1)', 'Đã giao'),
(14, 3, 'Lê Thành Y', 'Cần Thơ', 'lethanhy780@gmail.com', '2023-11-24 00:00:00', '50000000', '0939834780', 'Apple Watch Series 9(1), Apple Watch SE 2(1)', 'Đã hủy'),
(15, 3, 'Lê Thành Y', 'Cần Thơ', 'lethanhy780@gmail.com', '2023-11-24 00:00:00', '48000000', '0939834780', 'Apple Watch SE 2(1), Apple Watch SE 2022 (1)', 'Đã giao'),
(17, 3, 'Lê Thành Y', 'Cần Thơ', 'lethanhy780@gmail.com', '2023-11-24 00:00:00', '93000000', '0939834780', 'Apple Watch (1), Apple Watch AB(2), Apple Watch SE 2024(1)', 'Đã giao'),
(19, 13, 'Lê Văn Thành', 'Cần Thơ', 'lethanhy780@gmail.com', '2023-11-25 08:50:47', '43000000', '0123456789', 'Apple Watch (1), Apple Watch SE 2024(1)', 'Đã giao'),
(21, 17, 'Lê Thành Y', '475/18 Cần Thơ', 'lethanhy780@gmail.com', '2023-11-25 20:41:20', '48000000', '0939834780', 'Apple Watch (1), Apple Watch Series 9(1), Apple Watch SE 2024(1)', 'Đang xử lý'),
(22, 17, 'Lê Thành Y', '475/18 Cần Thơ', 'lethanhy780@gmail.com', '2023-11-25 20:42:01', '63000000', '0939834780', 'Apple Watch AB(1), Apple Watch G9(1), Apple Watch SE 2024(1)', 'Đã giao'),
(23, 17, 'Lê Thành Y', '475/18 Cần Thơ', 'lethanhy780@gmail.com', '2023-11-25 21:11:26', '78000000', '0939834780', 'Apple Watch (1), Apple Watch G9(1), Apple Watch SE 2024(1)', 'Đã hủy'),
(24, 17, 'Lê Thành Y', '475/18 Cần Thơ', 'lethanhy780@gmail.com', '2023-11-26 19:43:51', '138020000', '0939834780', 'Apple Watch (1), Apple Watch G9(2), Apple Watch SE 2022 (1), Apple Watch AB(1), Apple Watch SE 2024(1)', 'Đang xử lý'),
(28, 17, 'Lê Thành Y', '475/18 Cần Thơ', 'lethanhy780@gmail.com', '2023-11-27 11:13:39', '38000000', '0939834780', 'Apple Watch G9(1), Apple Watch SE 2024(1)', 'Đang xử lý'),
(29, 11, 'Đỗ Thành Đạt', '', 'thanhdat@gmail', '2023-11-27 11:19:00', '40000000', '0123456789', 'Apple Watch (1)', 'Đã hủy'),
(30, 17, 'Lê Thành Y', '475/18 Cần Thơ', 'lethanhy780@gmail.com', '2023-11-27 16:05:10', '110000000', '0939834780', 'Apple Watch (1), Apple Watch G9(2)', 'Đã hủy'),
(31, 17, 'Lê Thành Y', '475/18 Cần Thơ', 'lethanhy780@gmail.com', '2023-12-01 18:14:19', '80000000', '0939834780', 'Apple Watch (1), Apple Watch (1)', 'Đang xử lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `prd_id` int(5) NOT NULL,
  `prd_name` varchar(225) NOT NULL,
  `image` char(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `brand_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`prd_id`, `prd_name`, `image`, `price`, `quantity`, `description`, `brand_id`) VALUES
(17, 'Apple Watch Series 9', 'apple-watch-5.jpg', 5000000, 4, 'Kế thừa phong cách đặc trưng đến từ nhà Apple, đồng hồ thông minh Apple Watch SE 2022 GPS xuất hiện với diện mạo trẻ trung, sang trọng qua thiết kế bo tròn ở các góc tạo cảm giác bắt mắt ngay từ cái nhìn đầu tiên. Gắn liền khung viền nhôm là chiếc dây đeo silicone có độ đàn hồi cao, mang đến sự êm ái và thoải mái khi đeo trên tay. Đồng thời, Apple đã bổ sung thêm một số màu sắc độc đáo, giúp người dùng dễ dàng lựa chọn theo sở thích.', 1),
(22, 'Apple Watch ', 'apple-watch-1.jpg', 40000000, 7, 'tiếp tục đánh bại mọi kỳ vọng của người dùng khi sở hữu thiết kế hiện đại, tinh tế cùng hàng loạt các tính năng luyện tập, theo dõi sức khỏe thế hệ mới. Cùng với đó là màn hình hiển thị AMOLED sắc nét cùng khả năng xử lý mượt mà mọi tác vụ nhờ được tích hợp chipset S9 SiP mạnh mẽ. Với những điểm nhấn ấn tượng trên này, Apple Watch 9 bản 41mm sẽ là lựa chọn đồng hồ thông minh hấp dẫn mà bạn không nên bỏ qua nhé!', 1),
(24, 'Apple Watch SE 2022 ', 'apple-watch-3.png', 20000, 5, 'Kế thừa phong cách đặc trưng đến từ nhà Apple, đồng hồ thông minh Apple Watch SE 2022 GPS xuất hiện với diện mạo trẻ trung, sang trọng qua thiết kế bo tròn ở các góc tạo cảm giác bắt mắt ngay từ cái nhìn đầu tiên. Gắn liền khung viền nhôm là chiếc dây đeo silicone có độ đàn hồi cao, mang đến sự êm ái và thoải mái khi đeo trên tay. Đồng thời, Apple đã bổ sung thêm một số màu sắc độc đáo, giúp người dùng dễ dàng lựa chọn theo sở thích.', 1),
(25, 'Apple Watch G9', 'apple-watch-2.jpg', 35000000, 5, 'Kế thừa phong cách đặc trưng đến từ nhà Apple, đồng hồ thông minh Apple Watch SE 2022 GPS xuất hiện với diện mạo trẻ trung, sang trọng qua thiết kế bo tròn ở các góc tạo cảm giác bắt mắt ngay từ cái nhìn đầu tiên. Gắn liền khung viền nhôm là chiếc dây đeo silicone có độ đàn hồi cao, mang đến sự êm ái và thoải mái khi đeo trên tay. Đồng thời, Apple đã bổ sung thêm một số màu sắc độc đáo, giúp người dùng dễ dàng lựa chọn theo sở thích.', 2),
(26, 'Apple Watch AB', 'apple-watch-5.jpg', 25000000, 5, 'Kế thừa phong cách đặc trưng đến từ nhà Apple, đồng hồ thông minh Apple Watch SE 2022 GPS xuất hiện với diện mạo trẻ trung, sang trọng qua thiết kế bo tròn ở các góc tạo cảm giác bắt mắt ngay từ cái nhìn đầu tiên. Gắn liền khung viền nhôm là chiếc dây đeo silicone có độ đàn hồi cao, mang đến sự êm ái và thoải mái khi đeo trên tay. Đồng thời, Apple đã bổ sung thêm một số màu sắc độc đáo, giúp người dùng dễ dàng lựa chọn theo sở thích.', 1),
(27, 'Apple Watch SE 2024', 'apple-watch-4.jpg', 3000000, 6, 'Kế thừa phong cách đặc trưng đến từ nhà Apple, đồng hồ thông minh Apple Watch SE 2022 GPS xuất hiện với diện mạo trẻ trung, sang trọng qua thiết kế bo tròn ở các góc tạo cảm giác bắt mắt ngay từ cái nhìn đầu tiên. Gắn liền khung viền nhôm là chiếc dây đeo silicone có độ đàn hồi cao, mang đến sự êm ái và thoải mái khi đeo trên tay. Đồng thời, Apple đã bổ sung thêm một số màu sắc độc đáo, giúp người dùng dễ dàng lựa chọn theo sở thích.', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `prd_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
