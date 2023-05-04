-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 12:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_with_google`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LOCATION_ID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `NAME`, `LOCATION_ID`, `created_at`, `updated_at`) VALUES
(1, 'CV Namaga', 3, NULL, NULL),
(2, 'Fa Hassanah Tbk', 3, NULL, NULL),
(3, 'PT Nababan (Persero) Tbk', 2, NULL, NULL),
(4, 'CV Farida Rahayu', 2, NULL, NULL),
(5, 'Yayasan Lailasari Tbk', 5, NULL, NULL),
(6, 'Fa Sinaga', 3, NULL, NULL),
(7, 'PD Pratiwi Suryatmi', 3, NULL, NULL),
(8, 'Yayasan Mandala', 2, NULL, NULL),
(9, 'PT Wasita', 3, NULL, NULL),
(10, 'Fa Siregar Oktaviani (Persero) Tbk', 3, NULL, NULL),
(11, 'UD Nuraini (Persero) Tbk', 1, NULL, NULL),
(12, 'Yayasan Mandala Tbk', 2, NULL, NULL),
(13, 'PJ Maheswara', 1, NULL, NULL),
(14, 'UD Puspasari (Persero) Tbk', 4, NULL, NULL),
(15, 'UD Lestari Tbk', 4, NULL, NULL),
(16, 'UD Nasyiah (Persero) Tbk', 3, NULL, NULL),
(17, 'CV Siregar Firgantoro', 1, NULL, NULL),
(18, 'Fa Rahayu Mulyani', 3, NULL, NULL),
(19, 'Fa Rahayu', 3, NULL, NULL),
(20, 'Yayasan Hasanah Mansur (Persero) Tbk', 1, NULL, NULL);

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
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `kota`, `umur`) VALUES
(1, 'Daruna Iswahyudi S.Psi', 'Tasikmalaya', 22),
(2, 'Putri Yuliarti', 'Cimahi', 37),
(3, 'Tania Maryati', 'Palembang', 30),
(4, 'Wira Damanik', 'Tanjungbalai', 37),
(5, 'Darijan Tamba', 'Palu', 25),
(6, 'Putri Nuraini', 'Bitung', 23),
(7, 'Radit Maheswara M.TI.', 'Samarinda', 26),
(8, 'Jail Jinawi Wijaya', 'Bukittinggi', 21),
(9, 'Banawi Nababan', 'Bau-Bau', 25),
(10, 'Elma Nasyidah', 'Tanjung Pinang', 22);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `NAME`, `created_at`, `updated_at`) VALUES
(1, 'Tangerang', NULL, NULL),
(2, 'Denpasar', NULL, NULL),
(3, 'Kupang', NULL, NULL),
(4, 'Medan', NULL, NULL),
(5, 'Sukabumi', NULL, NULL);

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_04_10_042206_add_google_id_to_users_table', 1),
(11, '2023_04_18_011047_create_guru_table', 2),
(12, '2023_04_19_034938_create_locations_table', 3),
(13, '2023_04_19_035048_create_companies_table', 3),
(14, '2023_04_19_035144_create_people_table', 3);

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
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `COMPANY_ID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `NAME`, `COMPANY_ID`, `created_at`, `updated_at`) VALUES
(1, 'Violet Yolanda', 3, NULL, NULL),
(2, 'Mariadi Tamba', 10, NULL, NULL),
(3, 'Warta Permadi', 18, NULL, NULL),
(4, 'Faizah Widiastuti M.M.', 12, NULL, NULL),
(5, 'Cayadi Firgantoro', 15, NULL, NULL),
(6, 'Hasan Hidayat', 5, NULL, NULL),
(7, 'Cakrabuana Rajata', 14, NULL, NULL),
(8, 'Asirwada Balapati Haryanto S.Pt', 16, NULL, NULL),
(9, 'Kamila Qori Laksmiwati', 16, NULL, NULL),
(10, 'Mutia Lestari', 10, NULL, NULL),
(11, 'Bambang Wijaya', 17, NULL, NULL),
(12, 'Gangsa Mustofa', 15, NULL, NULL),
(13, 'Harsanto Among Wahyudin', 16, NULL, NULL),
(14, 'Anita Novitasari', 9, NULL, NULL),
(15, 'Gading Saptono S.Kom', 11, NULL, NULL),
(16, 'Paramita Nurdiyanti S.Farm', 3, NULL, NULL),
(17, 'Farhunnisa Jasmin Puspita', 11, NULL, NULL),
(18, 'Elma Handayani', 16, NULL, NULL),
(19, 'Cinthia Hassanah', 14, NULL, NULL),
(20, 'Ratna Purwanti', 1, NULL, NULL),
(21, 'Titin Mulyani', 15, NULL, NULL),
(22, 'Hafshah Fitriani Zulaika', 5, NULL, NULL),
(23, 'Zulaikha Fujiati', 8, NULL, NULL),
(24, 'Arta Wasita', 16, NULL, NULL),
(25, 'Betania Putri Agustina S.Pd', 1, NULL, NULL),
(26, 'Ibun Halim S.Farm', 6, NULL, NULL),
(27, 'Wira Nardi Pratama S.Gz', 20, NULL, NULL),
(28, 'Kamila Kusmawati', 5, NULL, NULL),
(29, 'Jamalia Wastuti', 5, NULL, NULL),
(30, 'Jelita Puspita', 2, NULL, NULL),
(31, 'Simon Samosir S.Pd', 16, NULL, NULL),
(32, 'Eka Lazuardi S.Sos', 5, NULL, NULL),
(33, 'Harimurti Megantara', 19, NULL, NULL),
(34, 'Dariati Uwais', 18, NULL, NULL),
(35, 'Titi Wulandari', 3, NULL, NULL),
(36, 'Gara Budiyanto', 17, NULL, NULL),
(37, 'Balidin Napitupulu S.Ked', 2, NULL, NULL),
(38, 'Melinda Mardhiyah', 4, NULL, NULL),
(39, 'Yance Rahayu', 9, NULL, NULL),
(40, 'Nilam Rahayu', 14, NULL, NULL),
(41, 'Cahyadi Sinaga', 18, NULL, NULL),
(42, 'Umi Rahayu Nuraini S.E.I', 12, NULL, NULL),
(43, 'Mahmud Wasita', 17, NULL, NULL),
(44, 'Cahyono Naradi Kuswoyo S.Gz', 14, NULL, NULL),
(45, 'Gilda Sudiati S.IP', 9, NULL, NULL),
(46, 'Putri Maya Usada M.Kom.', 18, NULL, NULL),
(47, 'Lintang Ulva Wijayanti', 12, NULL, NULL),
(48, 'Cakrabuana Mahendra', 15, NULL, NULL),
(49, 'Harsana Megantara S.E.I', 19, NULL, NULL),
(50, 'Eva Hariyah', 11, NULL, NULL),
(51, 'Rini Maryati S.Sos', 19, NULL, NULL),
(52, 'Nasab Mangunsong M.Farm', 2, NULL, NULL),
(53, 'Cawuk Wijaya', 4, NULL, NULL),
(54, 'Lantar Damanik', 1, NULL, NULL),
(55, 'Jinawi Suryono', 14, NULL, NULL),
(56, 'Sabrina Ciaobella Pratiwi M.Kom.', 18, NULL, NULL),
(57, 'Kani Palastri S.IP', 1, NULL, NULL),
(58, 'Jumari Maryadi', 12, NULL, NULL),
(59, 'Erik Karsa Napitupulu M.M.', 8, NULL, NULL),
(60, 'Arta Galak Kurniawan', 20, NULL, NULL),
(61, 'Cindy Safina Suryatmi', 13, NULL, NULL),
(62, 'Eli Nasyidah S.E.', 19, NULL, NULL),
(63, 'Elisa Yani Namaga S.Farm', 2, NULL, NULL),
(64, 'Victoria Pia Utami M.Kom.', 6, NULL, NULL),
(65, 'Zulfa Winarsih M.M.', 10, NULL, NULL),
(66, 'Enteng Lazuardi', 13, NULL, NULL),
(67, 'Gandi Mahendra S.Ked', 10, NULL, NULL),
(68, 'Caraka Marbun', 9, NULL, NULL),
(69, 'Eja Jasmani Thamrin S.I.Kom', 8, NULL, NULL),
(70, 'Edi Jais Nugroho', 1, NULL, NULL),
(71, 'Hardi Karja Sinaga S.E.', 20, NULL, NULL),
(72, 'Luis Nugroho', 5, NULL, NULL),
(73, 'Halima Puspasari S.Sos', 5, NULL, NULL),
(74, 'Hamima Diah Hariyah', 14, NULL, NULL),
(75, 'Gadang Saefullah S.E.I', 14, NULL, NULL),
(76, 'Yessi Rini Mulyani', 4, NULL, NULL),
(77, 'Ciaobella Pudjiastuti', 20, NULL, NULL),
(78, 'Kezia Wastuti', 5, NULL, NULL),
(79, 'Vera Padmasari', 12, NULL, NULL),
(80, 'Mila Rika Hassanah', 15, NULL, NULL);

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
  `expires_at` timestamp NULL DEFAULT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$rrJgbx6jsCI.vqw1rNlv4.AepiMyq5DlvQQXkWGZCO7r..aF9cTk6', NULL, '2023-04-09 22:57:43', '2023-04-09 22:57:43', NULL),
(2, 'DN SCH01', 'dnscholar01@gmail.com', NULL, '$2y$10$JzyKGOEA8Wgi0NBdFxFoSeP7GarTswLLrywjMSbS6exgrlzvnT0km', NULL, '2023-04-10 00:58:08', '2023-04-10 00:58:08', '117322475208034408630'),
(3, 'Daniar Nur Amin', 'daniarnax100@gmail.com', NULL, '$2y$10$u0ZMuChy5/vtQbAkzc5qyOaftuf5.f/G7Jku/cT3RMostlz5IR4/y', NULL, '2023-04-12 17:33:59', '2023-04-12 17:33:59', '103916144873169506461'),
(4, 'Daniar Nur Amin', 'daniarnuramin1@gmail.com', NULL, '$2y$10$mpfa9/P8fE4fsaoaVsGj0O6Tt.eY1uSz.wt21OgAKOlmigtXhfScu', NULL, '2023-05-03 01:37:23', '2023-05-03 01:37:23', '104432453884649434611');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
