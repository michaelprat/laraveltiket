-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 07:18 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesantiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'RIt8FaO1UQocrg2e6cFGIMGzJGGp3tgQ', 1, '2018-03-18 07:54:05', '2018-03-18 07:54:05', '2018-03-18 07:54:05'),
(2, 2, 'FPcCelk2cUVXeuNn2Px4u4xlsSeavBBP', 1, '2018-03-18 07:55:31', '2018-03-18 07:55:31', '2018-03-18 07:55:31'),
(3, 3, 'R43MMGUtyQ8Fb84doLiZvVxeCCDoeaFT', 1, '2018-03-19 09:11:52', '2018-03-19 09:11:51', '2018-03-19 09:11:52'),
(4, 4, 'WZuDMb8xZuWDRgiaci8H8MSdxQJfPM0W', 1, '2018-03-19 09:11:52', '2018-03-19 09:11:52', '2018-03-19 09:11:52'),
(5, 5, 'HpRATqEx91LZnT6ZkDtGYRM1yaeYE7E9', 1, '2018-03-19 09:20:55', '2018-03-19 09:20:55', '2018-03-19 09:20:55'),
(6, 8, 'ppFDoQaUti3bhy8U5crJKouwQXxnyF4U', 1, '2018-03-19 09:49:56', '2018-03-19 09:49:56', '2018-03-19 09:49:56'),
(7, 9, 'dXJ7j9WFH1FvzDTxe6xTpcHbeFmbRwAE', 1, '2018-03-19 09:49:56', '2018-03-19 09:49:56', '2018-03-19 09:49:56'),
(8, 10, 'NrQxcr0fC03FlteVLeAxTYv0N8vEIiXQ', 1, '2018-03-19 10:02:51', '2018-03-19 10:02:51', '2018-03-19 10:02:51'),
(9, 11, 'xf3UAfcKqVLoOQ6KA5cQG9i1Qivn8YE7', 1, '2018-03-19 10:17:36', '2018-03-19 10:17:36', '2018-03-19 10:17:36'),
(10, 12, 'yW5XoQYg8tDBB0pisdYe8PEt3TAfbszi', 1, '2018-03-19 10:18:42', '2018-03-19 10:18:42', '2018-03-19 10:18:42'),
(11, 13, 'CtpOMiuLT0NgZYE2xdrue6jAwWSdimLJ', 1, '2018-03-19 10:32:12', '2018-03-19 10:32:12', '2018-03-19 10:32:12'),
(12, 14, 'TuoSFucbck1yTZOJD85Rq7ccO7F7GL9Q', 1, '2018-03-19 10:32:13', '2018-03-19 10:32:13', '2018-03-19 10:32:13'),
(13, 15, '1rLsoEF43ByaXSHSQ5sV3jzYNnZHiznh', 1, '2018-03-19 11:06:07', '2018-03-19 11:06:07', '2018-03-19 11:06:07'),
(14, 16, 'KBs5n3yYNm3BB5cK9PHxF7OPYKyBUPRf', 1, '2018-03-19 11:15:15', '2018-03-19 11:15:15', '2018-03-19 11:15:15');

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
(3, '2018_03_18_133122_datatiket', 1),
(4, '2014_07_02_230147_migration_cartalyst_sentinel', 2);

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gh4TicdDb7vZEhLJJqNWHOyB5yj6zzBU', '2018-03-19 07:03:04', '2018-03-19 07:03:04'),
(5, 3, 'X4RCFZpO5wDpn2MYNGnR83b6s46ByOtP', '2018-03-19 09:27:48', '2018-03-19 09:27:48'),
(9, 11, '5QsFG17lQhnbGg7aReUY9Ayadlfk64i2', '2018-03-19 10:17:46', '2018-03-19 10:17:46'),
(10, 11, 'Ry1FmUiMddmM48wpomVpyyQakFYCHuMc', '2018-03-19 10:18:09', '2018-03-19 10:18:09'),
(11, 12, '3rWSn8GDVnHGgvJgUCVIDijqB4JR2Dxg', '2018-03-19 10:18:52', '2018-03-19 10:18:52'),
(13, 12, 'RRV1Svsc3h5pFUR5yFNXY5NzSjEfrW32', '2018-03-19 10:22:02', '2018-03-19 10:22:02'),
(14, 9, 'JB6cZw1Q3cJ59SNmGXcJ8Tvr50Y7CX2s', '2018-03-19 10:22:38', '2018-03-19 10:22:38'),
(15, 9, 'oenyescEq112JUHsG1FtU19vBTabMp2Q', '2018-03-19 10:22:39', '2018-03-19 10:22:39'),
(16, 9, '3yqcenee7Grmol7XVWPvpOshWBDwT80I', '2018-03-19 10:24:09', '2018-03-19 10:24:09'),
(17, 9, '3aEwMeP5ftuG6effqEo2P55QWhmcYJ1f', '2018-03-19 10:26:32', '2018-03-19 10:26:32'),
(18, 9, 'SvhHnLDsjouIq6Hwo7FlLLUZ89UcyWUS', '2018-03-19 10:29:24', '2018-03-19 10:29:24'),
(19, 9, 'yOACIyCcuxMQQ3pgzbyDXlcM5uRDVEtn', '2018-03-19 10:29:45', '2018-03-19 10:29:45'),
(20, 9, 'aQcaoScLDaDXA8IzV4sos7YiPeJDCKH8', '2018-03-19 10:29:55', '2018-03-19 10:29:55'),
(21, 14, 'vVTT6VtqBar7aRRiWKW6ASqEx67T9FqG', '2018-03-19 10:32:31', '2018-03-19 10:32:31'),
(22, 14, 'rK1cQ0mNesXrt5wzfgGzewrg0fGLYGDz', '2018-03-19 10:33:05', '2018-03-19 10:33:05'),
(23, 14, 'My9eaWBGqLCqzmaVmmfOEfkc7O4nwXli', '2018-03-19 10:33:05', '2018-03-19 10:33:05'),
(24, 14, 'smTogZ7kmChK2ZQIIUnxsgm00m6OUEo8', '2018-03-19 10:33:47', '2018-03-19 10:33:47'),
(25, 14, '6JE6VyrxcS0uoWJlHbdYkviQJxf7q1cz', '2018-03-19 10:35:08', '2018-03-19 10:35:08'),
(26, 14, 'elWHbB0tGNFKDTfBjFx02Nmwc8BtnGht', '2018-03-19 10:35:28', '2018-03-19 10:35:28'),
(27, 14, 'XX6f62cMxizb4svAmecCafw5MAY0nOZz', '2018-03-19 10:35:50', '2018-03-19 10:35:50'),
(28, 14, '5oGOeJ84o2r65k2GGj3oGkbA3RLqJmt8', '2018-03-19 10:38:24', '2018-03-19 10:38:24'),
(29, 14, 'Of7zzB6guTdm6saDxmwTxLn1CxMCvnsJ', '2018-03-19 10:39:55', '2018-03-19 10:39:55'),
(30, 14, 'tfZXt1Kyw1MIa5vLawnb1u0w4dqsTaeh', '2018-03-19 10:43:56', '2018-03-19 10:43:56'),
(31, 14, 'zSxzuJHWiUglp2SVAan32No1R4IokL3L', '2018-03-19 10:47:06', '2018-03-19 10:47:06'),
(32, 13, '9AJRtWRfGoR855FHF6AHANnuev0yJ89t', '2018-03-19 10:49:51', '2018-03-19 10:49:51'),
(33, 13, 'mxcSFrYR1rHFKCGdQdFNhmJL6VebxTzf', '2018-03-19 10:49:51', '2018-03-19 10:49:51'),
(36, 14, 'fCHTA9Gtel1QxddaAOjs8eSbKoVAhIDG', '2018-03-19 10:57:53', '2018-03-19 10:57:53'),
(41, 16, 'PSbj0LhPdwJPTZQaMSRWdQi3YSM8jqJY', '2018-03-19 11:17:46', '2018-03-19 11:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'SuFs9nbEC8rrWmBQ1FmlnuKZtzrltzpF', 1, '2018-03-19 02:32:15', '2018-03-19 02:28:23', '2018-03-19 02:32:15'),
(2, 16, 'chvX7e2IJiKng7uhpHpyDNuibUGr07mb', 1, '2018-03-19 11:17:37', '2018-03-19 11:17:16', '2018-03-19 11:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'Admin', '{\"Addadmin\":true,\"Viewadmin\":true,\"Viewuser\":true,\"Adduser\":true}', '2018-03-19 10:32:12', '2018-03-19 10:32:12'),
(6, 'user', 'User', '{\"Viewuser\":true,\"Adduser\":true,\"Homelog\":true}', '2018-03-19 10:32:13', '2018-03-19 10:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(13, 5, '2018-03-19 10:32:13', '2018-03-19 10:32:13'),
(14, 6, '2018-03-19 10:32:13', '2018-03-19 10:32:13'),
(15, 6, '2018-03-19 11:06:07', '2018-03-19 11:06:07'),
(16, 5, '2018-03-19 11:15:16', '2018-03-19 11:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2018-03-19 10:20:10', '2018-03-19 10:20:10'),
(2, NULL, 'ip', '127.0.0.1', '2018-03-19 10:20:10', '2018-03-19 10:20:10'),
(3, NULL, 'global', NULL, '2018-03-19 11:14:15', '2018-03-19 11:14:15'),
(4, NULL, 'ip', '127.0.0.1', '2018-03-19 11:14:15', '2018-03-19 11:14:15'),
(5, 15, 'user', NULL, '2018-03-19 11:14:15', '2018-03-19 11:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `tikets`
--

CREATE TABLE `tikets` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomorkursi` int(11) NOT NULL,
  `nama_pemesan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_ktp` int(11) NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlahtiket` int(11) NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tikets`
--

INSERT INTO `tikets` (`id`, `nomorkursi`, `nama_pemesan`, `jenis_kelamin`, `no_ktp`, `alamat`, `jumlahtiket`, `pembayaran`, `created_at`, `updated_at`) VALUES
(1, 1, 'jack', 'Laki-laki', 13131313, 'asd', 1, 300000, '2018-03-19 07:45:31', '2018-03-19 08:58:32'),
(6, 2, 'Jack Prize', 'Laki-laki', 213334411, 'asdadadad', 3, 200000, '2018-03-19 07:58:32', '2018-03-19 07:58:32'),
(8, 4, 'Jack Prize', 'Laki-laki', 213334411, 'asdadadad', 3, 200000, '2018-03-19 07:58:32', '2018-03-19 07:58:32'),
(9, 3, 'Iyez', 'Laki-laki', 13313113, 'adadadd', 1, 300000, '2018-03-19 09:01:28', '2018-03-19 09:01:28'),
(10, 5, 'Oda', 'Laki-laki', 1123113, 'asdad', 1, 900000, '2018-03-19 11:04:27', '2018-03-19 11:04:27'),
(11, 6, 'zephys', 'Laki-laki', 1122112, 'adadadadda', 1, 4000000, '2018-03-19 11:09:28', '2018-03-19 11:09:28'),
(12, 7, 'zephys', 'Laki-laki', 1122112, 'adadadadadaadaddaad', 1, 300000, '2018-03-19 11:09:57', '2018-03-19 11:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'michaelandgobaw@gmail.com', '$2y$10$Fe57bOGABT6cHHWmHPPB4O51puHzDRuWnQSMiwb9Qnydfvm9ZSq3e', NULL, '2018-03-19 08:24:07', 'michael', 'pratama', '2018-03-18 07:54:05', '2018-03-19 08:24:07'),
(2, 'michaelandsgobaw@gmail.com', '$2y$10$FFlGLutH7PxqMGuSbsn8geKQWq/1bYYKFOrh2ALwXFZevHPoY6dVa', NULL, NULL, 'michael', 'pratama', '2018-03-18 07:55:31', '2018-03-18 07:55:31'),
(13, 'madmin@mail.com', '$2y$10$c3zlHuWP6uYd/HA.3AuRU.DxCM6cyhKMQrFYc0SHH6WOmpa3DtjjK', NULL, '2018-03-19 10:51:31', 'M', 'Admin', '2018-03-19 10:32:12', '2018-03-19 10:51:31'),
(14, 'oda@e.com', '$2y$10$nodmKgkg6DMUtGoj5KHJSujQvZhYRE8Ug6kzBmJjMjzXCrczhUcE6', NULL, '2018-03-19 11:05:34', 'Oda', 'E', '2018-03-19 10:32:13', '2018-03-19 11:05:34'),
(15, 'zep@gmail.com', '$2y$10$qDeddFH/nQV4nSrGZcQ37.aUhk8ifKQadtTkuljs6SjOJJqxaRk.u', NULL, '2018-03-19 11:14:29', 'zephys', 'zep', '2018-03-19 11:06:06', '2018-03-19 11:14:29'),
(16, 'asd@gmail.com', '$2y$10$6ci1fmbGCtCHuqxQCrZSeezsze/zOZPqC3mq8H5gwXvjzhXce0BsG', NULL, '2018-03-19 11:17:46', 'asd', 'admin', '2018-03-19 11:15:15', '2018-03-19 11:17:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `tikets`
--
ALTER TABLE `tikets`
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
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tikets`
--
ALTER TABLE `tikets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
