-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2022 at 04:01 PM
-- Server version: 10.3.35-MariaDB-log-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `savmkpgd_mainss`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first-name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last-name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `male_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `female_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `email_verified_at`, `phone_number`, `id_number`, `passport_number`, `agent_name`, `agent_phone_number`, `guardian_name`, `guardian_phone_number`, `country`, `city`, `postal_code`, `male_occupation`, `female_occupation`, `gender`, `file_upload`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, 'briann', 'grgt', 'fads', 'admin@gmail.com', NULL, '23434', '34535777889888', '4523454', 'gfdf', '534534', 'dsfsd', '4354', 'Bahrain', '35erte', 'erte', 'male', 'female', 'female', NULL, NULL, '2022-06-06 01:01:13', '2022-06-06 01:01:13'),
(22, 'briann', 'kinuthia', 'wqerqw', 'chenanebrian@gmail.com', NULL, '6546456', '546464', '5646456', '56656', '56465', 'fggsdgf', '656345', 'Qatar', 'fdgdf', '564645fg', 'male', 'female', 'female', NULL, NULL, '2022-06-07 12:39:28', '2022-06-07 12:39:28'),
(23, 'ryan', 'dsfsd', 'wqerqw', 'mukhongobrian@gmail.com', NULL, '767657', '90789', '7667456', '567yth', '64565', 'dfgdfg', '546', 'Bahrain', 'fghg', '56546', 'other', 'other', 'male', NULL, NULL, '2022-06-07 12:41:08', '2022-06-07 12:41:08'),
(24, 'briann', 'dsfsd', 'wqerqw', 'adminn@gmail.com', NULL, '56757', '567567', '576567', 'tuyutyu', '675675', 'tuyt', '56567', 'Bahrain', 'jghfjg', '56765', 'female', 'none', 'female', NULL, NULL, '2022-06-07 12:56:36', '2022-06-07 12:56:36'),
(25, 'briann', 'fdgdfg', 'fads', 'adminn@gmail.com', NULL, '34534', '45643', '44534', 'retegtdf', '5654645', '6546', '5654', 'Bahrain', 'vgbcv', 'tyrtyrt', 'none', 'none', 'none', NULL, NULL, '2022-06-07 13:03:37', '2022-06-07 13:03:37'),
(26, 'briann', 'grgt', 'wqerqw', 'chenanebrian@gmail.com', NULL, '5345', '34534', '5434', '34543', '5345', 'q453', '534543', 'Bahrain', '543543', '43543', 'none', 'none', 'none', NULL, NULL, '2022-06-07 13:05:33', '2022-06-07 13:05:33'),
(27, 'briann', 'ytytr', 'rtytry', 'kigorwe@live.comrt', NULL, '56456', '456456', '4565', '54645', '56546', '546456', '5645', 'Bahrain', 'ytryt', 'yrtyt', 'none', 'none', 'none', NULL, NULL, '2022-06-07 13:20:03', '2022-06-07 13:20:03'),
(28, 'briann', 'sa', 'sda', 'kigorwe@live.comrta', NULL, '23432', '2343', '34535', '45fgg', '34545', 't45t', '6576574', 'Bahrain', 'ret', 'ert', 'none', 'none', 'none', NULL, NULL, '2022-06-07 13:40:54', '2022-06-07 13:40:54'),
(29, 'briann', 'sa', 'sda', 'kigorwe@live.comrta', NULL, '23432', '234344', '34535', '45fgg', '34545', 't45t', '6576574', 'Bahrain', 'ret', 'ert', 'none', 'none', 'none', NULL, NULL, '2022-06-07 14:27:09', '2022-06-07 14:27:09'),
(30, 'briann', 'kinuthia', 'kiogora', 'adminn@gmail.com', NULL, '44356464', '645654', '54656', '546546', '65645', '65456', '56436', 'Bahrain', '565464', '56456', 'none', 'none', 'none', NULL, NULL, '2022-06-07 18:24:40', '2022-06-07 18:24:40'),
(32, 'briann', 'kinuthia', 'kiogora', 'adminn@gmail.com', NULL, '44356464', '645654988090', '54656', '546546', '65645', '65456', '56436', 'Bahrain', '565464', '56456', 'none', 'none', 'none', NULL, NULL, '2022-06-07 18:27:16', '2022-06-07 18:27:16'),
(34, 'briann', 'kinuthia', 'kiogora', 'adminn@gmail.com', NULL, '44356464', '64565498809', '54656', '546546', '65645', '65456', '56436', 'Bahrain', '565464', '56456', 'none', 'none', 'none', NULL, NULL, '2022-06-07 18:28:55', '2022-06-07 18:28:55'),
(36, 'briann', 'kinuthia', 'kiogora', 'adminn@gmail.com', NULL, '44356464', '6456549880', '54656', '546546', '65645', '65456', '56436', 'Bahrain', '565464', '56456', 'none', 'none', 'none', NULL, NULL, '2022-06-07 18:33:45', '2022-06-07 18:33:45'),
(37, 'briann', 'dsfsd', 'mukhongo', 'mukhongobrian@gmail.com', NULL, '75675675', '54', '74', '7654', '674', '7465', '7644', 'Bahrain', '44444444444444675', '65747', 'none', 'none', 'none', NULL, NULL, '2022-06-07 18:44:31', '2022-06-07 18:44:31'),
(38, 'briann', 'dsfsd', 'mukhongo', 'mukhongobrian@gmail.com', NULL, '75675675', '54988', '74', '7654', '674', '7465', '7644', 'Bahrain', '44444444444444675', '65747', 'none', 'none', 'none', NULL, NULL, '2022-06-07 18:47:53', '2022-06-07 18:47:53'),
(53, 'moses', 'HH', 'kioif', 'kogor@GMAIL.COM', NULL, '0756432190', '31896432', '0756321786', 'DAN', '0724678900', 'GET', '0745217908', 'Qatar', 'NAIROBI', '200', 'female', 'female', 'other', NULL, NULL, '2022-06-11 12:37:55', '2022-06-11 12:37:55'),
(54, 'briann', 'FGF', 'HGFH', 'GFH@FGFDG', NULL, '54656', '543643', '63455436', '34645FGHF', '7675', 'TRYRT', '7567567', 'Bahrain', 'TR', '4765754', 'other', 'none', 'none', NULL, NULL, '2022-06-16 19:30:41', '2022-06-16 19:30:41');

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
(1, '2014_10_12_000000_create_employees_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_02_26_065824_create_tasks_table', 1),
(6, '2022_05_31_213049_drop_employees', 1),
(7, '2022_06_04_125149_create_clients_table', 1);

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
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Brian', 'chenanebrian@gmail.com', NULL, '$2y$10$9J.5xNxmSfl1FU2yiSFHc.x5EpvpjllW5wOZffTIp54SahvdYS4vG', NULL, '2022-06-05 02:35:54', '2022-06-05 02:35:54'),
(2, 'Brian', 'admin@gmail.com', NULL, '$2y$10$H1CKi8SpcQXS2px75usCBeWy3KKVlguBx4NPMDsZ.JociaRUG48eC', NULL, '2022-06-06 00:54:47', '2022-06-18 18:13:33'),
(3, 'brian', 'adminn@gmail.com', NULL, '$2y$10$nqyG5rEtKKu1Q8IfpFIjeubLG1gp8yAzqVsp52AvRGjz4VhigWz0S', NULL, '2022-06-09 22:53:30', '2022-06-09 22:53:30'),
(4, 'moses', 'moses@gmail.com', NULL, '$2y$10$84QeMlgHPnc0wiAfx6XOo.u02RcHeTcM4Ud1SEO99z4jcP3j1Prh6', '0XHOyRPIWqvrscDW7iAKCHBCMbea36fRvKfnxaxfyi30uid10pnHtiXvfyBn', '2022-06-09 22:56:20', '2022-06-09 22:56:20'),
(5, 'brian', 'admin7@gmail.com', NULL, '$2y$10$axe2FzzXy3zoRpZVJu8prujp5mYxhS5RpERsf7I7gPT/Nf5ZEV.di', NULL, '2022-06-10 09:51:31', '2022-06-10 09:51:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_id_number_unique` (`id_number`);

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
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
