-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2016 at 08:57 AM
-- Server version: 5.7.12
-- PHP Version: 5.6.21

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
(1, 'Apple', NULL, NULL),
(2, 'Samsung', NULL, NULL);

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
(3, '2_583138fe544ed.jpg', 2, '2016-11-19 22:47:42', '2016-11-19 22:47:42');

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
(1, 'An Giang', NULL, NULL),
(2, 'Bà Rịa Vũng Tàu', NULL, NULL),
(3, 'Bình Dương', NULL, NULL);

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
(2, 'Số bài hiển thị trên 1 trang', 'pagination', '15', NULL, NULL),
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
(9, 'Máy tính', 3, 'fa fa-television', '2016-11-19 22:32:25', '2016-11-19 22:32:25');

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
(1, 'Bộ máy Gigabyte G41 DDR3 4G HD 250 Led 19', 1, 9, '\r\nCần bán Bộ máy Gigabyte G41 sử dụng chiến games ngon lành cành đào chơi LMHT Fifa các kiểu nhé ...\r\nMain Gigabyte G41 Full onboard Zin \r\nCPU : Core2 E6600 3Ghz/3M sử dụng nhanh mạnh mát\r\nRam : DDR3 4G/1333\r\nHDD 250G Seages good 100% tha hồ lưu chứa games phim\r\nVga Onboard 1G chơi games thoải mái\r\nLCD Samsung Led 19 Inch Full HD màu sắc siêu sáng đẹp long lanh\r\nCase mới 100% nguồn 500W\r\nGiá bán 2.700.000 VNĐ có phím chuột mới\r\nLH : TM-DV-MÁY TÍNH TRẦN KHANH\r\nĐC : 158 PHAN HUY ÍCH P.12-GV-HCM\r\nĐT : Nút màu xanh tay phải\r\nHình thật dưới', 1, 2, 1, '2700000', 1, 1, 1, 1, '2016-11-19 22:37:28', '2016-11-20 01:56:21'),
(2, 'Bán xe Hyundai Grand i10 2016-phiên bản gia đình', 1, 1, 'Bán xe Hyundai Grand I10 2016 số sàn 1.0 MT, mới 100%, nhập khẩu nguyên chiếc, phiên bản cho gia đình hoàn toàn mới với chiều dài và chiều rộng xe được cải tiến. \r\nTrang bị: Thiết kế điêu khắc dòng chảy hiện đại, la zăng đúc, gương gập điện, điều chỉnh điện, chìa khóa thông minh Start/stop Engine, cảm biến lùi, đầu CD, Bluetooth, phanh đĩa ABS, túi khí,... Cùng nhiều tính năng hiện đại khác. \r\nXe mới, đủ màu trắng, bạc, đỏ, cam.\r\nGiá tốt, khuyến mại lớn, hỗ trợ trả góp tới 80% giá trị xe, thủ tục đơn giản, lãi xuất thấp nhất.\r\nLiên hệ tư vấn: Nguyễn Ngọc Tấn - Phụ trách bán hàng.\r\nĐT: 0905.976950', 1, 1, 2, '393000000', 1, 1, 1, 0, '2016-11-19 22:47:42', '2016-11-20 01:36:43');

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
(1, 'daylaadmin', 'dayladmin@gmail.com', '$2y$10$FljLCyPc7eYs0SQOHU4iFuue/q9Zydzm7iQx2.Lxoc4fS5RKU4nP2', 'Lê Văn Nhưng', '1995-11-22', 1, '0128997267', 1, 3, '0oGUYtyXLVwYnA6mgBNpoT4ZK4jhuvsFBtSCr8tX3LlQkjRdnuk4BnOqlcA1', '2016-11-19 22:06:53', '2016-11-20 01:54:25'),
(2, 'daylauser', 'daylauser@gmail.com', '$2y$10$YwIatBn1q5CZ027yGj8LzuPK8QgNvPD8oiRGFoWrgCf3VwmkxF.82', NULL, NULL, NULL, NULL, NULL, 1, '2EMO6tkHVPqCJJNQyA1DxXU0ELhew9zHbkvv8J1xVbqT08vkD71SO5f8nLQf', '2016-11-20 00:33:00', '2016-11-20 00:33:15');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
