-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2016 at 02:49 PM
-- Server version: 5.7.16
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raovat`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Không xác định', NULL, '2016-11-24 06:58:36'),
(2, 'Apple', NULL, '2016-11-24 06:58:41'),
(3, 'Samsung', '2016-11-24 06:58:47', '2016-11-24 06:58:47'),
(4, 'Sony', '2016-11-24 06:58:51', '2016-11-24 06:58:51'),
(5, 'Honda', '2016-11-24 06:58:54', '2016-11-24 06:58:54'),
(6, 'Suzuki', '2016-11-24 06:59:08', '2016-11-24 06:59:08'),
(7, 'Domino', '2016-11-24 06:59:44', '2016-11-24 06:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Xe cộ', 'fa fa-car', '2016-11-19 22:08:33', '2016-11-19 22:09:38'),
(2, 'Bất động sản', 'fa fa-home', '2016-11-19 22:14:14', '2016-11-19 22:14:14'),
(3, 'Đồ điện tử', 'fa fa-desktop', '2016-11-19 22:17:21', '2016-11-19 22:17:21'),
(4, 'Thời trang, đồ dùng cá nhân', 'fa fa-female', '2016-11-19 22:21:17', '2016-11-19 22:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

CREATE TABLE `conditions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Mới', NULL, NULL),
(2, 'Đã sử dụng', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `thread_id`, `created_at`, `updated_at`) VALUES
(1, '1_583136987b3df.jpg', 1, '2016-11-19 22:37:28', '2016-11-19 22:37:28'),
(2, '1_583136987ded7.jpg', 1, '2016-11-19 22:37:28', '2016-11-19 22:37:28'),
(3, '2_583138fe544ed.jpg', 2, '2016-11-19 22:47:42', '2016-11-19 22:47:42'),
(4, '5_5836facec5c11.jpg', 5, '2016-11-24 07:35:58', '2016-11-24 07:35:58'),
(5, '6_5836fec152c6a.jpg', 6, '2016-11-24 07:52:49', '2016-11-24 07:52:49'),
(6, '7_583709fe121ad.jpg', 7, '2016-11-24 08:40:46', '2016-11-24 08:40:46'),
(7, '8_58370a4508360.jpg', 8, '2016-11-24 08:41:57', '2016-11-24 08:41:57'),
(8, '9_58370a8294a4f.jpg', 9, '2016-11-24 08:42:58', '2016-11-24 08:42:58'),
(9, '10_58370af77defd.jpg', 10, '2016-11-24 08:44:55', '2016-11-24 08:44:55'),
(10, '11_58370b360c1a7.jpg', 11, '2016-11-24 08:45:58', '2016-11-24 08:45:58'),
(11, '12_5841895b37dbf.jpg', 12, '2016-12-02 07:46:51', '2016-12-02 07:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Toàn Quốc', NULL, '2016-11-24 08:59:50'),
(2, 'An Giang', NULL, '2016-11-24 08:59:54'),
(3, 'Bình Dương', NULL, NULL),
(4, 'TP Hồ Chí Minh', '2016-11-24 09:00:16', '2016-11-24 09:00:16'),
(5, 'Hà Nội', '2016-11-24 09:00:20', '2016-11-24 09:00:20'),
(6, 'Đà Nẵng', '2016-11-24 09:00:26', '2016-11-24 09:00:26'),
(7, 'Đồng Tháp', '2016-11-24 09:00:33', '2016-11-24 09:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2016_10_08_054101_create_categories_table', 1),
(2, '2016_10_08_054102_create_subcategories_table', 1),
(3, '2016_10_08_054128_create_roles_table', 1),
(4, '2016_10_08_054209_create_types_table', 1),
(5, '2016_10_08_054309_create_brands_table', 1),
(6, '2016_10_08_055345_create_locations_table', 1),
(7, '2016_10_08_055907_create_conditions_table', 1),
(8, '2016_10_08_055908_create_users_table', 1),
(9, '2016_10_08_055909_create_password_resets_table', 1),
(10, '2016_10_08_055910_create_threads_table', 1),
(11, '2016_10_28_091404_create_settings_table', 1),
(12, '2016_11_05_041320_create_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dayladmin@gmail.com', '4d2d8757e0f3b4b0e11e725c86763c686438ea8a76c5e27e9747152e71cc8dfb', '2016-11-24 05:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Thành Viên', NULL, NULL),
(2, 'Nhân Viên', NULL, NULL),
(3, 'Quản Lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `description`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Tiêu đề website', 'title', 'Rao vặt', NULL, NULL),
(2, 'Số bài hiển thị trên 1 trang', 'pagination', '10', NULL, '2016-11-24 06:18:50'),
(3, 'Mặc định khi đăng bài (0: chờ duyệt, 1: duyệt)', 'approval', '0', NULL, NULL),
(4, 'Thông báo cho website', 'notice', 'Đây là thông báo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `category_id`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Xe máy', 1, 'fa fa-motorcycle', '2016-11-19 22:10:09', '2016-11-19 22:10:09'),
(2, 'Xe đạp', 1, 'fa fa-bicycle', '2016-11-19 22:11:57', '2016-11-19 22:11:57'),
(3, 'Xe tải', 1, 'fa fa-car', '2016-11-19 22:12:50', '2016-11-19 22:12:50'),
(4, 'Căn hộ / Chung cư', 2, 'fa fa-home', '2016-11-19 22:29:57', '2016-11-19 22:29:57'),
(5, 'Nhà ở', 2, 'fa fa-home', '2016-11-19 22:30:08', '2016-11-19 22:30:08'),
(6, 'Laptop', 3, 'fa fa-laptop', '2016-11-19 22:30:37', '2016-11-19 22:30:37'),
(7, 'Điện thoại', 3, 'fa fa-mobile', '2016-11-19 22:30:48', '2016-11-19 22:31:17'),
(8, 'Máy ảnh', 3, 'fa fa-camera', '2016-11-19 22:31:58', '2016-11-19 22:31:58'),
(9, 'Máy tính', 3, 'fa fa-television', '2016-11-19 22:32:25', '2016-11-19 22:32:25'),
(10, 'Thời trang nữ', 4, 'fa fa-female', '2016-11-24 06:38:19', '2016-11-24 06:38:19'),
(11, 'Thời trang nam', 4, 'fa fa-male', '2016-11-24 06:38:38', '2016-11-24 06:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `location` int(10) UNSIGNED NOT NULL,
  `condition` int(10) UNSIGNED NOT NULL,
  `brand` int(10) UNSIGNED NOT NULL,
  `price` decimal(18,0) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `approval` int(11) NOT NULL DEFAULT '0',
  `approver` int(10) UNSIGNED DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `title`, `type_id`, `subcategory_id`, `description`, `location`, `condition`, `brand`, `price`, `user_id`, `approval`, `approver`, `view`, `created_at`, `updated_at`) VALUES
(1, 'Bộ máy Gigabyte G41 DDR3 4G HD 250 Led 19', 1, 9, 'Cần bán Bộ máy Gigabyte G41 sử dụng chiến games ngon lành cành đào chơi LMHT Fifa các kiểu nhé ...\r\nMain Gigabyte G41 Full onboard Zin \r\nCPU : Core2 E6600 3Ghz/3M sử dụng nhanh mạnh mát\r\nRam : DDR3 4G/1333\r\nHDD 250G Seages good 100% tha hồ lưu chứa games phim\r\nVga Onboard 1G chơi games thoải mái\r\nLCD Samsung Led 19 Inch Full HD màu sắc siêu sáng đẹp long lanh\r\nCase mới 100% nguồn 500W\r\nGiá bán 2.700.000 VNĐ có phím chuột mới\r\nLH : TM-DV-MÁY TÍNH TRẦN KHANH\r\nĐC : 158 PHAN HUY ÍCH P.12-GV-HCM\r\nĐT : Nút màu xanh tay phải\r\nHình thật dưới', 1, 2, 1, '2700000', 1, 1, 2, 19, '2016-11-19 22:37:28', '2016-12-02 07:47:42'),
(2, 'Bán xe Hyundai Grand i10 2016-phiên bản gia đình', 1, 1, 'Bán xe Hyundai Grand I10 2016 số sàn 1.0 MT, mới 100%, nhập khẩu nguyên chiếc, phiên bản cho gia đình hoàn toàn mới với chiều dài và chiều rộng xe được cải tiến. \r\nTrang bị: Thiết kế điêu khắc dòng chảy hiện đại, la zăng đúc, gương gập điện, điều chỉnh điện, chìa khóa thông minh Start/stop Engine, cảm biến lùi, đầu CD, Bluetooth, phanh đĩa ABS, túi khí,... Cùng nhiều tính năng hiện đại khác. \r\nXe mới, đủ màu trắng, bạc, đỏ, cam.\r\nGiá tốt, khuyến mại lớn, hỗ trợ trả góp tới 80% giá trị xe, thủ tục đơn giản, lãi xuất thấp nhất.\r\nLiên hệ tư vấn: Nguyễn Ngọc Tấn - Phụ trách bán hàng.\r\nĐT: 0905.976950', 1, 1, 2, '393000000', 1, 1, 1, 18, '2016-11-19 22:47:42', '2016-12-02 07:42:00'),
(3, 'Áo sơ mi caro cổ', 1, 10, 'Quẩn áo chất liệu tốt', 1, 1, 1, '500000', 4, 1, 1, 27, '2016-11-24 06:48:01', '2016-11-24 09:02:13'),
(4, 'coolpad e502 hoặc F101', 1, 7, 'Mik kân mua coolpad e502 hoạc F101 \r\n\r\nAi bán alo mik nhe', 1, 2, 1, '2000000', 5, 1, 1, 5, '2016-11-24 06:57:50', '2016-11-24 08:39:04'),
(5, 'lenovo a5166', 1, 7, 'Cần bán lenovo 2sim 2camera 3G WIFI chắc năng đầy đủ.ngoại hình hơi xấu một tí.ai mua xin liên hệ.fix chút tiền xăng.tks cho tốt', 1, 2, 1, '800000', 1, 1, 1, 3, '2016-11-24 07:35:58', '2016-12-02 04:19:49'),
(6, 'Bộ máy MSI E2200, 2.2Gh x2CPU, Ram2Gb, LCD, và Loa', 1, 6, 'Tôi là Tâm (44 tuổi, ở Gò Vấp), cần bán cả dàn máy vi tính cũ giá rẻ với cấu hình cao.\r\nTất cả gồm: thùng CPU, màn hình LCD, bàn phím, chuột, bộ loa,…Cụ thể như sau:\r\n# Thùng CPU:\r\nMainboard MSI 7267\r\nCPU Dual 2CPU E2200 - 2.2Ghz x2 (nhân 2CPU)\r\nRAM2: 2Gb\r\nỔ cứng HDD 80Gb loại SATA chạy tốc độ cao\r\nỔ DVD, tiện xem phim DVD/VCD, nghe nhạc CD/Mp3\r\nVGA onboard 256Mb, cho hình ảnh đẹp và mượt\r\nLAN, sound onbord, âm thanh nghe rất hay\r\n6 cổng USB,...\r\nThùng máy chắc chắn, còn rất đẹp\r\nMáy chạy nhanh, thoải mái để học tập, giải trí, xử lý đồ họa Acad, Photoshop,… hay chơi các game online: Thiên Long, Đột kích, Võ Lâm, Liên Minh,…\r\n\r\n# Màn hình LCD hiệu ViewSonic\r\nModel: VE510b\r\nLCD size 15inch, kiểu dáng đẹp, tiết kiệm điện\r\nĐộ phân giải cao, cho hình ảnh sắc nét và rất đẹp\r\n# Bàn phím Mitsumi và chuột quang Dell\r\n# Bộ loa Ruizu 380 âm thanh nghe rất hay để xem phim, nghe nhạc.\r\n# và tất cả các dây điện, dây VGA, dây loa,…\r\n\r\n* Mua về là dùng ngay mà không cần phải mua thêm gì nữa\r\n\r\n* Tình trạng: nhà đã sử dụng hơn 2 năm, hiện tại vẫn đang sử dụng rất tốt. \r\n\r\n* Vì tôi dư dùng nên bán tất cả chúng cho ai có nhu cầu, đặc biệt sẽ rất thích hợp cho NV văn phòng, công nhân, sinh viên, học sinh.\r\n\r\n## Máy đã cài sẵn: Win 7, Win Xp3, Office 2010, internet, các tiện ích, chat, diệt virus, game, nghe nhạc, xem phim, TV,...\r\n## Đặc biệt, có nhiều chtrình phục vụ học tập, nghiên cứu, giải trí dành cho bé mẫu giáo, học sinh cấp 1,2,3,… \r\n## Máy chạy nhanh, thoải mái để học tập, giải trí, xử lý đồ họa Acad, Photoshop,… hay chơi các game online: Thiên Long, Đột kích, Võ Lâm, Liên Minh (đã cài sẵn),…\r\n\r\n## Mời xem ảnh chụp thật đính kèm.\r\n\r\n## Giá bán hết tất cả: 1triệu700\r\n## Liên hệ: Chú Tâm (xin miễn nhắn tin)\r\n\r\n*** Còn dư bộ thu sóng Wifi USB,sẽ tặng cho ai có thiện chí và mua nhanh lẹ !', 1, 2, 1, '1700000', 4, 1, 1, 10, '2016-11-24 07:52:49', '2016-12-02 05:11:33'),
(7, 'XE ĐẨY BÁN HÀNG', 1, 3, 'Cần bán xe đẩy bán hàng cỡ lớn \r\ntình trạng : còn mới.', 1, 2, 1, '2500000', 7, 1, 1, 2, '2016-11-24 08:40:46', '2016-12-02 04:20:35'),
(8, 'Máy giặt SANYO 7,2kg', 2, 9, 'Bán máy giặt SANYO 7,2kg mới 95%, zin toàn bộ. Máy đời mới chạy êm, giặt hoàn toàn tự động, tiết kiệm điện nước, bảng điều khiển mới với nút bấm thông minh, có đủ ống nước cấp xả. Giá 2,2tr', 1, 2, 1, '2200000', 7, 1, 1, 1, '2016-11-24 08:41:57', '2016-12-02 04:20:32'),
(9, 'Giày thể thao Marcos', 1, 11, 'Giày thể thao nam chuyên dùng cho chạy bộ, siêu nhẹ, cực êm, chất lượng xuất khẩu, hàng sản xuất tại Việt Nam. Hàng lẻ size, hiện chỉ còn size 41. Thanh lý giá cực tốt.\r\nLiên hệ Trí-', 1, 1, 1, '650000', 7, 1, 1, 6, '2016-11-24 08:42:58', '2016-12-02 04:52:00'),
(10, 'Sony z1 9 hãng ram 2g bộ nhớ 32g', 1, 7, 'Máy em mới lột keo ra trước sau đẹp leng keng không tì vết, viền hơi trầy 1 xíu...con này ram 2g bộ nhớ tới 32g nhe..camera 20.7mgx bao cực kì nét đẹp,máy zin 100% chưa sữa chữa 1 lần nào, pk có củ sạc, cáp, dock sac zin 9 hãng theo máy...dock sạc mua mới ở ngoài 450k chưa chắc 9 hãng..có nhận gl các thể loại bù trừ...co fix xăng xe...quá tuyệt vời lun..\r\n', 1, 2, 4, '1950000', 4, 1, 1, 6, '2016-11-24 08:44:55', '2016-12-02 05:59:05'),
(11, 'Ipad 3 3G 16G', 1, 7, 'Ông cậu về nước chó cái máy Ipad 3 mà mình không xài nên muốn bán lại , máy đã sử dụng như hình , anh chị nào thật lòng muốn mua thì qua xem máy được thì lấy , máy và sạc', 1, 2, 2, '3100000', 4, 1, 1, 9, '2016-11-24 08:45:58', '2016-12-02 07:47:53'),
(12, 'Loa Soundmax a2727', 1, 9, '\r\nLoa nhà sài lâu rồi nhưng còn ấm, không rè không lỗi gì hết, chỉ hơi củ theo thời gian, loa cái hơi móp xíu chổ vân loa thôi nha.\r\nthông tin loa:\r\nSOUNDMAX\r\nKiểu 2.1\r\nCông suất(W) 60W\r\nLoa trầm(Subwoofer)\r\nCông suất loa trầm(W) 30\r\nDải tần - Loa vệ tinh: 110Hz ~ 20KHz - Loa siêu trầm: 25Hz~200Hz\r\nKích thước loa trầm 230 x 230 x 220 mm\r\nThông số khác\r\nNguồn điện sử dụng 220V ~ 50Hz\r\n\r\ncần mua bạn qua xem, nghe được mình bán nhé. không sài nữa nên bán thôi. mình cá nhân bán.', 1, 2, 4, '400000', 13, 1, 2, 3, '2016-12-02 07:46:51', '2016-12-02 07:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cần bán', NULL, NULL),
(2, 'Cần mua', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `birth`, `sex`, `phone`, `location`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'daylaadmin', 'dayladmin@gmail.com', '$2y$10$FljLCyPc7eYs0SQOHU4iFuue/q9Zydzm7iQx2.Lxoc4fS5RKU4nP2', 'Lê Văn Nhưng', '1995-11-22', 1, '0128997267', 1, 3, 'Z4C7vuKUYTsIeeskyhF9gNoT5Yp8w7E5L4sbbmWpxHcfbRkgTNJB7hlOVQ78', '2016-11-19 22:06:53', '2016-11-24 08:39:13'),
(2, 'daylauser', 'daylauser@gmail.com', '$2y$10$YwIatBn1q5CZ027yGj8LzuPK8QgNvPD8oiRGFoWrgCf3VwmkxF.82', NULL, NULL, NULL, NULL, NULL, 3, 'SNH0nE9uhU17hCSI30laTRUQXIPtEMC6aokGjMD8Uk7oSTAVaIofhz5jYbXl', '2016-11-20 00:33:00', '2016-12-02 07:43:25'),
(3, 'daylauser1', 'daylauser1@gmail.com', '$2y$10$KHv64HaQIU7OmaD83C1tieuAYkaVlFgKqArOSYthKGcBdsGwpjp3G', NULL, NULL, NULL, NULL, NULL, 1, '2BEai73V2kPJygcGnk7t3huSRtPDGeY5haYFi1NopN9UbIg864aabkpp6UoD', '2016-11-24 06:11:59', '2016-11-24 06:45:23'),
(4, 'daylauser2', 'daylauser2@gmail.com', '$2y$10$98reanVtL2/SvtDcS7pxVeQUJhN2JQ9Y1CIEe5nb3/EyKnPSvjgoG', NULL, NULL, NULL, NULL, NULL, 1, 'U7LHOXkpB8e2r4k5fejRP0GMabUCB6nUQaKOPpIBfsaq4ktyQypdRYcghXHr', '2016-11-24 06:12:11', '2016-12-02 07:18:26'),
(5, 'daylauser3', 'daylauser3@gmail.com', '$2y$10$zlmnOjZDmEzQY8urP8ZAKub9v35cRmS.GOdTn/UJ5wTTUq2iUe4eu', NULL, NULL, NULL, NULL, NULL, 1, '1jeApO6pGUJ0kws38xSl2An05ztgIvrMKwrGGFnkdXSi43MJb3jbc7ZQ6sW2', '2016-11-24 06:12:24', '2016-11-24 07:54:09'),
(6, 'daylauser4', 'daylauser4@gmail.com', '$2y$10$TEhUbknJ/3NuZws3UIlKQeh8t0qNyxHWmF.N6.K5ijkBp1dFx8dJ6', NULL, NULL, NULL, NULL, NULL, 1, 'nTJuBGcuBGlHGTpnnc63Wotul6VGRRcgxKOypsCYah3x51KVDOutAVVg0RZU', '2016-11-24 06:12:33', '2016-11-24 06:12:35'),
(7, 'daylauser5', 'daylauser5@gmail.com', '$2y$10$vt3QKjtZWpmOgbFOT1gZZ.XY4tCxCGTu7tnMJUSQK3vaXMwOdIbYa', NULL, NULL, NULL, NULL, NULL, 1, 'g6uMSST3SXFYsOxNZtnH2ck8BFpFlYHFwE62C4TtUyd3AAs0NKbEf28qHFbt', '2016-11-24 06:12:44', '2016-11-24 08:43:08'),
(8, 'daylauser6', 'daylauser6@gmail.com', '$2y$10$8Fk1dZPhOForpB.KDfzWSuYJzz0QiPZYp5u.AW1KfjEJg//qGzyE.', NULL, NULL, NULL, NULL, NULL, 1, 'zyCJpqRl4UZ1wZUvAUWfjTWaLvMgoqESFAos21fsx76TxfDSXn4oLguiAvGx', '2016-11-24 06:12:56', '2016-11-24 06:12:57'),
(9, 'daylauser7', 'daylauser7@gmail.com', '$2y$10$7nQn.6mzlxlpRTOeZ8u/QucuA/Q1Ld3nzYalZVCzUZFYb5sGmZ.K6', NULL, NULL, NULL, NULL, NULL, 1, '8uzlTCU0fuR0QiyuGp54LGLoO6QOqidTZri1YDVMT4zgy0r49i36hHzaY2Jm', '2016-11-24 06:13:04', '2016-11-24 06:13:06'),
(10, 'daylauser8', 'daylauser8@gmail.com', '$2y$10$kXWyVaZFA0NUQnKAWEH9FOye/dlPQcMN18cjt00RKXnySyUUSGtiG', NULL, NULL, NULL, NULL, NULL, 1, 'xNlFyUfp8ygRacQDVywTHCdh3EoSQrWn7X5dj2EbDDYoVvpO3HgoioubaXih', '2016-11-24 06:13:15', '2016-11-24 06:13:16'),
(11, 'daylauser9', 'daylauser9@gmail.com', '$2y$10$l3u4AsmXT184loxw2Z6ycOSOg68B/MyqT738c49xPRknPX2B0GbUO', NULL, NULL, NULL, NULL, NULL, 1, 'Xm55IbNh3EXJh01BoN6nnyVZb73xUm6IIfQwdbTCJgQ7DMGUWDxWSsMDTMfY', '2016-11-24 06:13:24', '2016-11-24 06:13:26'),
(12, 'daylauser2', 'daylauser2@daylauser2.com', '$2y$10$VbOswVXiZnrZiSwPQzSJNekQME84EpjMrB/o/TvLsaSgRDb3jSikG', NULL, NULL, NULL, NULL, NULL, 1, 'D7ZuZW1Ymz4z6veOrXwKPePnslU3bCooQeHKEHFZ6hPphzpHSekeRKwNBlWF', '2016-12-02 05:27:17', '2016-12-02 05:49:48'),
(13, 'akbarl', 'akbarl@live.com', '$2y$10$PDtzbvPUNYgMqTBHyqxbveoT.6jqBr/3u29pm4CnyU9kSgStCfAIK', NULL, NULL, NULL, NULL, NULL, 1, 'eGdd01hNNsFXCIM6lC1ysXA8TemhnMYGkORlfV4mC8cL0Kp3w8284IUsMDwq', '2016-12-02 06:02:09', '2016-12-02 07:47:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_thread_id_foreign` (`thread_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `threads_type_id_foreign` (`type_id`),
  ADD KEY `threads_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `threads_location_foreign` (`location`),
  ADD KEY `threads_condition_foreign` (`condition`),
  ADD KEY `threads_brand_foreign` (`brand`),
  ADD KEY `threads_user_id_foreign` (`user_id`),
  ADD KEY `threads_approver_foreign` (`approver`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_location_foreign` (`location`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `conditions`
--
ALTER TABLE `conditions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_thread_id_foreign` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_approver_foreign` FOREIGN KEY (`approver`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `threads_brand_foreign` FOREIGN KEY (`brand`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `threads_condition_foreign` FOREIGN KEY (`condition`) REFERENCES `conditions` (`id`),
  ADD CONSTRAINT `threads_location_foreign` FOREIGN KEY (`location`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `threads_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`),
  ADD CONSTRAINT `threads_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`),
  ADD CONSTRAINT `threads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_location_foreign` FOREIGN KEY (`location`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
