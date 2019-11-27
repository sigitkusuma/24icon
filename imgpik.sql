-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 04:16 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imgpik`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Cinema', 'cinema', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(2, 'Clothes', 'clothes', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(3, 'Commerce', 'commerce', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(4, 'Controls', 'controls', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(5, 'Education', 'education', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(6, 'Fashion', 'fashion', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(7, 'Food', 'food', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(8, 'Gestures', 'gestures', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(9, 'Interface', 'interface', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(10, 'Logo', 'logo', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(11, 'Medical', 'medical', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(12, 'Monuments', 'monuments', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(13, 'Multimedia', 'multimedia', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(14, 'Nature', 'nature', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(15, 'Networking', 'networking', '2019-09-22 13:52:14', '2019-09-22 13:52:14'),
(16, 'People', 'people', '2019-09-22 13:52:14', '2019-09-22 13:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE `icon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `illustration`
--

CREATE TABLE `illustration` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `categories_id`, `file`, `created_at`, `updated_at`) VALUES
(17, 'lo', 2, 'img-2472jpg', '2019-11-17 07:59:45', '2019-11-17 07:59:45'),
(18, 'kl', 3, 'img-2476jpg', '2019-11-17 08:00:30', '2019-11-17 08:00:30'),
(19, 'asd', 1, 'img-2485jpg', '2019-11-17 08:40:42', '2019-11-17 08:40:42'),
(20, 'de', 1, 'img-2473jpg', '2019-11-17 08:40:56', '2019-11-17 08:40:56'),
(21, 'adaasd', 1, 'img-2474jpg', '2019-11-19 04:44:33', '2019-11-19 04:44:33'),
(22, 'kjjk', 1, 'img-2476jpg', '2019-11-19 04:44:47', '2019-11-19 04:44:47'),
(23, 'asdq', 1, 'img-2475jpg', '2019-11-19 04:46:52', '2019-11-19 04:46:52'),
(24, 'lop', 1, 'img-2472jpg', '2019-11-19 04:47:06', '2019-11-19 04:47:06'),
(25, 'lp', 1, 'cpusvg.svg', '2019-11-19 08:49:41', '2019-11-19 08:49:41'),
(26, 'cvv', 1, 'game-controllerpng', '2019-11-19 08:49:54', '2019-11-19 08:49:54'),
(27, 'mn', 1, 'notebooksvg.svg', '2019-11-19 08:50:09', '2019-11-19 08:50:09'),
(28, 'xx', 1, 'programmingpng', '2019-11-19 08:50:24', '2019-11-19 08:50:24'),
(29, 'dasd', 1, 'game-controllerpng', '2019-11-19 09:24:40', '2019-11-19 09:24:40'),
(30, 'aa', 1, 'action-planpng', '2019-11-19 09:45:08', '2019-11-19 09:45:08'),
(31, 'dw', 1, 'attendeespng', '2019-11-19 09:45:19', '2019-11-19 09:45:19'),
(32, 'cc', 1, 'conversationpng', '2019-11-19 09:45:30', '2019-11-19 09:45:30'),
(33, 'df', 1, 'decision-makingpng', '2019-11-19 09:45:41', '2019-11-19 09:45:41'),
(34, 'ml', 1, 'durationpng', '2019-11-19 09:45:54', '2019-11-19 09:45:54'),
(35, 'mn', 1, 'trophypng', '2019-11-19 09:46:07', '2019-11-19 09:46:07'),
(36, 'adsad', 1, 'decision-makingpng', '2019-11-21 08:03:00', '2019-11-21 08:03:00'),
(37, 'dw', 1, 'durationpng', '2019-11-21 08:03:12', '2019-11-21 08:03:12'),
(38, 'dade', 1, 'game-controllerpng', '2019-11-21 08:03:25', '2019-11-21 08:03:25'),
(39, 'mnb', 1, 'programmingpng', '2019-11-21 08:03:37', '2019-11-21 08:03:37'),
(40, 'dee', 1, 'trophypng', '2019-11-21 08:03:49', '2019-11-21 08:03:49'),
(41, 'ade', 1, 'action-planpng', '2019-11-21 08:04:01', '2019-11-21 08:04:01'),
(42, 'dqwd', 1, 'attendeespng', '2019-11-21 08:04:13', '2019-11-21 08:04:13'),
(43, 'dedw', 1, 'conversationpng', '2019-11-21 08:04:25', '2019-11-21 08:04:25'),
(44, 'dqwda', 1, 'decision-makingpng', '2019-11-21 08:04:35', '2019-11-21 08:04:35'),
(45, 'ddddde', 1, 'durationpng', '2019-11-21 08:04:52', '2019-11-21 08:04:52'),
(46, 'mee', 1, 'programmingpng', '2019-11-21 08:05:21', '2019-11-21 08:05:21'),
(47, 'cd', 1, 'programmingpng', '2019-11-21 08:05:55', '2019-11-21 08:05:55'),
(48, 'erq', 1, 'decision-makingpng', '2019-11-21 08:06:07', '2019-11-21 08:06:07'),
(49, 'uyt', 1, 'conversationpng', '2019-11-21 08:06:19', '2019-11-21 08:06:19'),
(50, 'dqd', 1, 'durationpng', '2019-11-21 08:06:49', '2019-11-21 08:06:49'),
(51, 'defe', 1, 'game-controllerpng', '2019-11-21 08:07:04', '2019-11-21 08:07:04'),
(52, 'dqdqw', 1, 'programmingpng', '2019-11-21 08:07:17', '2019-11-21 08:07:17'),
(53, 'lpo', 1, 'decision-makingpng', '2019-11-21 08:07:30', '2019-11-21 08:07:30');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_16_120540_create_categories_table', 1),
(4, '2019_09_16_120638_create_icon_table', 1),
(5, '2019_09_16_120839_create_image_table', 1),
(6, '2019_09_16_120859_create_illustration_table', 1),
(7, '2019_09_16_122601_create_tag_table', 1);

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
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cbt', 'img@img.com', NULL, '$2y$10$tAg49oKkRWPYGXKkTEea9.E9V5QMA.mgkprwavV4wZlzR4.4XGDRW', 1, NULL, '2019-09-22 18:45:18', '2019-09-22 18:45:18'),
(2, 'admin', 'admin1@admin.com', NULL, '$2y$10$7Cnm5Lv/f.kXyp2TfuIeCen12807Czkuix6YhSpaFf.V7gbji4p5y', 1, NULL, '2019-11-03 18:54:04', '2019-11-03 18:54:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `icon_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `illustration`
--
ALTER TABLE `illustration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `illustration_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `icon`
--
ALTER TABLE `icon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `illustration`
--
ALTER TABLE `illustration`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `icon`
--
ALTER TABLE `icon`
  ADD CONSTRAINT `icon_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `illustration`
--
ALTER TABLE `illustration`
  ADD CONSTRAINT `illustration_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
