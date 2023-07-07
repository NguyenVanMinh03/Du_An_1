-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 07, 2023 lúc 06:38 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `blog_noidung` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `blog_name`, `hinhanh`, `blog_noidung`, `date`) VALUES
(6, 'Điểm danh top các thực phẩm bổ sung sắt cho bé', '7.webp', 'Sắt là khoáng chất rất quan trọng có liên quan đến các chức năng khác nhau của cơ thể. Trẻ sơ sinh, trẻ mới biết đi, trẻ mẫu giáo có nguy cơ thiếu sắt cao hơn. Bởi, nhu cầu sắt tăng lên trong thời kỳ tăng trưởng nhanh. Để giúp ba mẹ có thể bổ sung đầy đủ ', '2023-07-04 13:16:31'),
(7, 'Mẹ có nên cho trẻ sơ sinh uống sữa nguội không?', '4.webp', 'Rất nhiều mẹ, đặc biệt là những ai lần đầu làm mẹ thường thắc mắc liệu trẻ sơ sinh uống sữa nguội có được không? Sữa nguội có khiến con bị đau bụng hay tiêu chảy không? Nếu đây cũng là những băn khoăn của mẹ, thì mời mẹ tham khảo ngay những thông tin mà C', '2023-07-04 13:16:31'),
(8, 'Tiêu chí chọn mua máy hâm sữa tốt mẹ nên biết - Máy hâm sữa nào tốt?', '3.webp', '1.1 Nguồn gốc và xuất xứ Đây là tiêu chí đảm bảo độ an toàn và chất lượng của sản phẩm. Máy hâm sữa tốt nhất định phải có xuất xứ rõ ràng. Và khi mua máy hâm sữa, mẹ nên ưu tiên chọn loại có thương hiệu uy tín như: Philips Avent, Gluck, Tommee Tippee,... ', '2023-07-04 13:16:31'),
(9, 'Men vi sinh cho trẻ sơ sinh: Dùng sao cho đúng?', '2.webp', 'Hội bác sĩ gia đình Hoa Kỳ (American Family Physician) cho rằng, men vi sinh giúp điều trị bệnh lý viêm ruột. Sử dụng men vi sinh làm giảm thời gian tiêu chảy do viêm dạ dày - ruột. Sử dụng men vi sinh cho phụ nữ mang thai và cho con bú còn có thể làm giả', '2023-07-04 13:16:31'),
(10, 'Review top 5 men vi sinh cho trẻ sơ sinh được nhiều mẹ bỉm tin dùng', '1.webp', 'Ở giai đoạn sơ sinh, hệ tiêu hóa và hệ miễn dịch của trẻ chưa được hoàn thiện và rất nhạy cảm. Mặc dù men vi sinh có khả năng giúp cải thiện hệ tiêu hóa và sức khỏe của trẻ, nhưng ba mẹ cần tham khảo ý kiến của bác sĩ trước khi cho con sử dụng, đồng thời ', '2023-07-04 13:16:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `hinhanh`) VALUES
(3, 'Bé Uống', 'icon_megamenu_1.webp'),
(4, 'Bé Ăn Dặm', 'icon_megamenu_2.webp'),
(5, 'Bé Vệ Sinh', 'icon_megamenu_3.webp'),
(6, 'Bé Mặc', 'icon_megamenu_4.webp'),
(7, 'Bé Khỏe &#38; An Toàn', 'icon_megamenu_5.webp'),
(8, 'Bé Chơi &#38; Học', 'icon_megamenu_6.webp'),
(9, 'Bé Ngủ', 'icon_megamenu_7.webp'),
(10, 'Bé Đi Ra Ngoài ', 'icon_megamenu_8.webp'),
(11, 'Đồ Dùng Cho Mẹ', 'icon_megamenu_9.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment_noidung` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `comment_noidung`, `hoten`, `email`, `product_id`, `date`, `user_id`) VALUES
(64, 'sản phẩm đẹp', 'nguyễn văn minh', 'minh12335678899@gmail.com', 3, '2023-07-05 14:28:03', 38),
(83, 'sản phẩm rất tốt&#13;&#10;', 'nguyễn văn minh', 'hn4343116@gmail.com', 10, '2023-07-05 16:07:01', 35),
(108, 'sản phẩm rất tốt&#13;&#10;', 'nguyễn văn minh', 'hn4343116@gmail.com', 8, '2023-07-06 05:07:32', 38);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `price_km` double(10,2) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `thuonghieu` varchar(255) NOT NULL,
  `masp` int(11) NOT NULL,
  `tinhtrang` varchar(255) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `price_km`, `hinhanh`, `thuonghieu`, `masp`, `tinhtrang`, `cate_id`, `detail`) VALUES
(2, 'Máy hâm sữa cổ rộng Fatzbaby FB3027SL', 340000.00, 400000.00, '101.webp', 'Fatzbaby', 1, 'Còn Hàng', 3, 'Nhiệt độ phù hợp cho thức ăn của bé là yếu tố quan trọng ảnh hưởng đến cảm giác ngon miệng và độ dinh dưỡng trong mỗi bữa ăn. Đến từ thương hiệu Hàn Quốc nổi tiếng, máy hâm sữa cổ rộng Fatzbaby FB3027SL sẽ mang đến giải pháp đảm bảo yếu tố quan trọng ấy cho những bữa ăn của bé. Sản phẩm mang thiết kế cải tiến, kiểu dáng độc đáo, phù hợp cho bình sữa cổ siêu rộng. Fatzbaby mang đến 3 chế độ sử dụng: hâm nóng, giữ nóng và tiệt trùng bình sữa, hứa hẹn sẽ là người trợ thủ đắc lực hỗ trợ mẹ chăm sóc bé trong những năm tháng đầu đời.'),
(3, 'Bộ bát tập ăn Farlin PER-246', 215000.00, 0.00, '191.webp', ' Farlin', 2, 'Còn Hàng', 4, 'Bộ bát tập ăn Farlin PER-246 đến từ thương hiệu Farlin mang đến một bộ dụng cụ phục vụ ăn uống cho bé bao gồm đầy đủ các dụng cụ cơ bản để tập ăn như: bát, cốc, thìa, dĩa. Bộ bát tập ăn còn có khay đựng giúp mẹ dễ dàng trong việc bưng bê cũng như thuận tiện cho bé khi ăn. Sản phẩm được làm bằng chất liệu an toàn sẽ là lựa chọn hoàn hảo của mẹ cho bé trong giai đoạn ăn dặm của bé.'),
(4, 'Nước tắm gội thảo dược Dr. Papie 230ml', 135000.00, 0.00, '305.webp', 'Dr. Papie', 3, 'Còn Hàng', 5, 'Đề kháng trên da trẻ sơ sinh và trẻ nhỏ chưa hoàn thiện, lại vô cùng nhạy cảm với những tác nhân hóa học, vật lý và vi khuẩn, do đó, đối với việc vệ sinh cần một sự chăm sóc đặc biệt. Nước tắm gội thảo dược Dr. Papie 230ml dưới đây bao gồm các thành phần thảo dược hữu cơ như Trà Shan Tuyết, mần trầu, khổ qua, kinh giới,... mang đến cho bé một dòng sản phẩm an toàn và vô cùng nhẹ dịu, thích hợp ngay cả với làn da nhạy cảm của trẻ sơ sinh. Các thành phần thảo dược trong Dr. Papie tăng cường cơ chế tự bảo vệ da cho bé, giúp diệt khuẩn, làm sạch, ngăn ngừa rôm sảy, mụn nhọt, nhiễm trùng, đồng thời giữ da luôn mềm mại, thơm mát. Đặc biệt nước tắm gội Dr. Papie còn hỗ trợ phòng chống muỗi, côn trùng cắn, chống cảm mạo, ho, sổ mũi cho bé. Sản phẩm sẽ là người trợ thủ đắc lực cho mẹ trong công việc chăm sóc sức khỏe cho con từ lúc sơ sinh đến 3 tuổi.'),
(5, 'Bộ quần áo len Cool Baby 5118 sóc cam', 299000.00, 350000.00, '402.webp', 'Cool Baby', 4, 'Còn Hàng', 6, 'Bộ quần áo len Cool Baby 5118 sóc cam là lựa chọn hoàn hảo để mẹ bổ sung thêm vào tủ đồ mùa đông của bé. Sản phẩm được thiết kế với chất liệu len dày dặn, ấm áp cùng họa tiết xinh xắn, giúp bảo vệ bé tránh khỏi những cơn gió lạnh của mùa đông đồng thời mang đến vẻ ngoài xinh xắn, đáng yêu mỗi khi bé ra ngoài cùng gia đình.'),
(6, 'Siro ăn ngon Doppelherz Multi 100ml', 305000.00, 350000.00, '455.webp', 'Doppelherz Multi', 5, 'Còn Hàng', 7, 'Siro ăn ngon Doppelherz Multi 100ml dưới đây sẽ là giải pháp hiệu quả cho chứng lười ăn, chậm lớn thường gặp ở trẻ nhỏ. Với thành phần chứa các dưỡng chất quan trọng cho sự phát triển của bé như vitamin A, vitamin B1, B2, B6, B12, Biotin, Folic Acid,... siro giúp kích thích hệ tiêu hóa, cho trẻ ăn ngon miệng hơn, từ đó giúp nâng cao sức đề kháng, hỗ trợ hệ miễn dịch để bé yêu có thể phát triển toàn diện. Với siro Doppelherz, bố mẹ giảm đi nỗi lo về chứng biếng ăn của trẻ.'),
(7, 'Đàn Xylophone 8 âm sắc cho bé ZY-014', 39000.00, 50000.00, '404.webp\r\n\r\n', 'Đang cập nhật', 6, 'Còn Hàng', 8, 'Đàn Xylophone 8 âm sắc cho bé ZY-014 sẽ giúp cho tuổi thơ của bé trở nên vui nhộn hơn. Chất liệu khung gỗ, kết hợp phím đàn kim loại chắc chắn, được làm mịn an toàn tuyệt đối cho bé. Màu sắc bắt mắt của các phím đàn cùng những âm thanh sinh động mà đàn phát ra không chỉ khiến bé vui vẻ, thích thú mà còn có tác dụng kích thích giác quan của bé phát triển hiệu quả. '),
(8, 'Nôi tự động Autoru Eco 18 hồng đậm', 1450000.00, 0.00, '551.webp', 'Autoru Eco', 7, 'Còn Hàng', 9, 'Giấc ngủ đóng vai trò rất quan trọng đối với sự phát triển của bé, đặc biệt là trong những tháng đầu tiên sau sinh. Một không gian ngủ an toàn, một chỗ nằm êm ái và một chế độ &#34;rung&#34; phù hợp sẽ mang đến cho bé giấc ngủ ngon, sâu và ít bị giật mình. Với nôi tự động Autoru Eco 18 màu hồng đậm, việc chăm sóc giấc ngủ cho bé trở nên nhẹ nhàng hơn bao giờ hết. Chế độ đung đưa tự động không chỉ giúp mẹ có thêm thời gian rảnh tay mà còn nâng cao chất lượng giấc ngủ, để bé ngủ ngoan, ba mẹ yên tâm.'),
(9, 'Xe chòi chân RETRO màu hồng JH-616', 1030000.00, 0.00, '561.webp', 'RETRO', 8, 'Còn Hàng', 10, 'Chiếc xe 3 bánh màu hồng 601 sẽ mang đến cho bé yêu trải nghiệm hoàn toàn thú vị và mới lạ. Với chiếc xe 3 bánh này, thử thách đã được nâng cấp và có phần khó nhằn hơn, để xe di chuyển thì bé phải đạp thay vì đẩy như khi điều khiển những chiếc xe lắc. Điều này không chỉ khiến bé thích thú bởi được học thêm một bộ môn mới, mà việc đạp xe thường xuyên còn giúp bé rèn luyện sự khéo léo của đôi tay cũng như khả năng kiểm soát, vận động linh hoạt của đôi chân.'),
(10, 'Viên uống lợi sữa Mabio', 345000.00, 370000.00, '626.webp', 'Mabio', 9, 'Còn Hàng', 11, 'Viên uống lợi sữa Mabio dưới đây mang đến một sản phẩm dinh dưỡng thích hợp cho mẹ sau khi sinh, không chỉ bảo vệ sức khỏe mà còn đảm bảo dòng sữa mẹ luôn chất lượng và đủ đầy cho bé yêu khỏe mạnh, lớn nhanh. Được chiết xuất từ các nguyên liệu trân quý từ thiên nhiên như chao chè vằng, cao bạch biển súc, cao ích mẫu,... sản phẩm giúp mẹ cải thiện cả về chất lượng và số lượng sữa, giúp thông tuyến sữa hiệu quả, phục hồi sức khỏe của mẹ sau sinh. Sản phẩm dưới dạng viên nén dễ uống, được bảo quản trong hộp có nắp đậy chắc chắn, tiện lợi và dễ dàng cho mẹ trong mỗi lần sử dụng.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `hinhanh`, `password`, `user_address`, `user_phone`, `role`) VALUES
(35, 'nguyễn văn minh', 'minh@gamil.com', 'roi-loan-tieu-hoa-o-tre-01.png', 'admin', 'wqf', '035322353', 0),
(38, 'admin1', 'admin@gamil.com', '4.webp', 'admin', '252523', '436346751', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
