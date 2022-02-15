-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 03:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `custom_pagination`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_14_070413_create_students_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi Hasan Shawon', 'mhshawon250@gmail.com', '2022-02-14 05:07:59', '2022-02-15 08:35:35'),
(2, 'AR Rahman', 'arrahman9@gmail.com', '2022-02-14 05:08:39', '2022-02-15 08:36:04'),
(4, 'Geoffrey Boycot', 'geoffrey365@gmail.com', '2022-02-14 07:45:33', '2022-02-15 08:06:15'),
(6, 'Colin Cowdrey', 'colincowdrey@gmail.com', '2022-02-14 07:47:05', '2022-02-15 08:07:49'),
(7, 'Basil D\'Oliveira', 'oliveira@gmail.com', '2022-02-14 10:42:28', '2022-02-15 08:08:28'),
(8, 'John Edrich', 'edrich33@admin.com', '2022-02-14 10:42:48', '2022-02-15 08:09:33'),
(9, 'Keith Fletcher', 'keithletcher@gmail.com', '2022-02-14 10:43:04', '2022-02-15 08:10:40'),
(10, 'John Hampshire', 'johnhampshire@gmail.com', '2022-02-14 10:43:27', '2022-02-15 08:11:23'),
(11, 'Ray Illingworth', 'raygworth@admin.com', '2022-02-14 10:43:40', '2022-02-15 08:12:27'),
(12, 'Alan Knott', 'alanknott5@gmail.com', '2022-02-14 10:43:52', '2022-02-15 08:13:12'),
(13, 'Peter Lever', 'peterlever@gmail.com', '2022-02-14 10:44:04', '2022-02-15 08:13:56'),
(14, 'Ken Shuttleworth', 'shuttleworthn@gmail.com', '2022-02-14 10:44:19', '2022-02-15 08:14:44'),
(15, 'John Snow', 'gotjohnsnow@gmail.com', '2022-02-14 10:44:29', '2022-02-15 08:16:07'),
(16, 'Dennis Amiss', 'amiss365@gmail.com', '2022-02-14 10:44:40', '2022-02-15 08:16:47'),
(17, 'Geoff Arnold', 'geoffrnold@gmail.com', '2022-02-14 10:44:56', '2022-02-15 08:17:35'),
(18, 'Brian Close', 'brianclose@gmail.com', '2022-02-14 21:51:48', '2022-02-15 08:18:18'),
(19, 'Tony Greig', 'ggreig2969@gmail.com', '2022-02-14 21:51:56', '2022-02-15 08:19:20'),
(20, 'Bob Woolmer', 'woolmer9@gmail.com', '2022-02-14 21:52:05', '2022-02-15 08:20:18'),
(21, 'Barry Wood', 'barrywwood5@gmail.com', '2022-02-14 21:52:13', '2022-02-15 08:21:11'),
(22, 'Frank Hayes', 'fhayes9@gmail.com', '2022-02-14 21:52:25', '2022-02-15 08:21:57'),
(23, 'Graham Roope', 'grahamroope49@gmail.com', '2022-02-14 21:52:35', '2022-02-15 08:22:51'),
(24, 'Derek Underwood', 'uderwood22@admin.com', '2022-02-14 21:52:46', '2022-02-15 08:23:36'),
(25, 'Mike Denness', 'dennessn@gmail.com', '2022-02-15 08:24:22', '2022-02-15 08:24:22'),
(26, 'Mike Hendrick', 'mikeendrick666@gmail.com', '2022-02-15 08:25:05', '2022-02-15 08:25:05'),
(27, 'Chris Old', 'coldln@gmail.com', '2022-02-15 08:25:43', '2022-02-15 08:25:43'),
(28, 'Mike Smith', 'smith67567@gmail.com', '2022-02-15 08:26:19', '2022-02-15 08:26:19'),
(29, 'Bob Taylor', 'bobttaylor967@gmail.com', '2022-02-15 08:27:09', '2022-02-15 08:27:09'),
(30, 'Bob Willis', 'bobwwillis66554@admin.com', '2022-02-15 08:27:59', '2022-02-15 08:27:59'),
(31, 'John Jameson', 'jjameson55@admin.com', '2022-02-15 08:29:31', '2022-02-15 08:29:31'),
(32, 'Robin Jackman', 'rjjjjjackman22223@gmail.com', '2022-02-15 08:30:34', '2022-02-15 08:30:34'),
(33, 'Brian Luckhurst', 'luckhurst@gmail.com', '2022-02-15 08:31:04', '2022-02-15 08:31:04'),
(34, 'Fred Titmus', 'ftitmus77@gmail.com', '2022-02-15 08:31:48', '2022-02-15 08:31:48'),
(35, 'Graham Barlow', 'gbarlow668@gmail.com', '2022-02-15 08:32:41', '2022-02-15 08:32:41');

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
(1, 'Md. Mehedi Hasan', 'admin@gmail.com', NULL, '$2y$10$2XrOmjsPU1gLS.OcUrqDIuHrrAl9SC0f1r6DFLvcYkc6XasUye3JK', NULL, '2022-02-14 01:01:13', '2022-02-14 01:01:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
