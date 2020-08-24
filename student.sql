-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 12:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_19_041952_create_students_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `gender`, `status`, `created_at`, `updated_at`) VALUES
(1, 'shuvo', 'shuvo@gmail.com', 'male', 1, '2020-08-21 10:38:44', '2020-08-21 10:38:44'),
(2, 'tarikul', 'tarikul@gmail.com', 'male', 1, '2020-08-21 10:53:29', '2020-08-21 18:47:21'),
(4, 'shuvo', 'shuvo3@gmail.com', 'other', 0, '2020-08-21 18:53:12', '2020-08-21 18:53:12'),
(5, 'Moon', 'moon@gmail.com', 'female', 1, '2020-08-21 19:00:55', '2020-08-21 19:00:55'),
(6, 'Ankon', 'ankon@gmail.com', 'female', 1, '2020-08-24 10:03:57', '2020-08-24 10:03:57'),
(7, 'Mithun', 'mithun@gmail.com', 'male', 0, '2020-08-24 10:04:36', '2020-08-24 10:04:36'),
(8, 'Ashik', 'ashiq@gmail.com', 'male', 1, '2020-08-24 10:05:06', '2020-08-24 10:05:06'),
(9, 'Zarin', 'zarin@gmail.com', 'female', 1, '2020-08-24 10:05:43', '2020-08-24 10:05:43'),
(10, 'Soscho', 'soscho@gmail.com', 'female', 0, '2020-08-24 10:06:19', '2020-08-24 10:06:19'),
(11, 'Salek', 'salek@gmail.com', 'other', 1, '2020-08-24 10:06:54', '2020-08-24 10:06:54'),
(12, 'Hasan', 'hasan@gmail.com', 'other', 0, '2020-08-24 10:07:50', '2020-08-24 10:07:50'),
(13, 'Rekha', 'rekha@yahoo.com', 'female', 1, '2020-08-24 10:08:24', '2020-08-24 10:08:24'),
(14, 'rubel', 'rubel@gmail.com', 'male', 1, '2020-08-24 10:08:59', '2020-08-24 10:08:59'),
(15, 'tonmoy', 'tonmoy@outlook.com', 'other', 1, '2020-08-24 10:09:38', '2020-08-24 10:09:38'),
(16, 'Rakib', 'rakib@gmail.com', 'male', 1, '2020-08-24 10:17:01', '2020-08-24 10:17:01'),
(17, 'Tunisha', 'tunisha@gmail.com', 'male', 1, '2020-08-24 10:18:40', '2020-08-24 10:18:40'),
(18, 'Soumik', 'shoumik@gmail.com', 'other', 1, '2020-08-24 10:21:41', '2020-08-24 10:21:41'),
(20, 'Mithun', 'moon@gmail.com', 'other', 1, '2020-08-24 10:56:22', '2020-08-24 10:56:22'),
(21, 'shuvo', 'mithun@gmail.com', 'male', 1, '2020-08-24 11:09:04', '2020-08-24 11:09:04'),
(22, 'Moon', 'shuvo@gmail.com', 'other', 1, '2020-08-24 11:11:49', '2020-08-24 11:11:49'),
(23, 'Mithun', 'mithun@gmail.com', 'female', 1, '2020-08-24 15:05:31', '2020-08-24 15:05:31'),
(24, 'Mithun', 'mithun@gmail.com', 'female', 1, '2020-08-24 15:06:21', '2020-08-24 15:06:21'),
(25, 'Moon', 'shuvo@gmail.com', 'female', 1, '2020-08-24 16:34:02', '2020-08-24 16:34:02'),
(26, 'Zarin', 'zarin2@gmail.com', 'female', 1, '2020-08-24 17:02:49', '2020-08-24 17:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shuvo', 'shuvo@gmail.com', NULL, '$2y$10$5d.ofhlsd7og3sU2XKOHo.BpjwqU5FA45GRUU9adAcZRviZxLTBZy', NULL, '2020-08-21 17:31:19', '2020-08-21 17:31:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
