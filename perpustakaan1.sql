-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 06:54 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `name`, `sex`, `telp`, `alamat`, `email`, `created_at`, `updated_at`) VALUES
(1000001, 'deni', 'l', '08997531796', 'Anyer', 'deni22seiawan@gmail.com', NULL, NULL),
(1000002, 'jordan', 'l', '08777654321', 'Cilegon', 'jordanaj1@gmail.com', NULL, NULL),
(1000006, 'dina', 'P', '098776678', 'njbjbjb', 'jbjbjbjb', '2021-09-05 22:25:42', '2021-09-05 22:25:42'),
(1000007, 'Mrs.', '5', '+1-601-819-8196', 'Dinaland', 'ortiz.vivian@yahoo.com', '2021-09-06 09:51:30', '2021-09-06 09:51:30'),
(1000008, 'Dr.', '7', '+12366133269', 'East Noemieshire', 'cristian.leuschke@larson.info', '2021-09-06 09:51:30', '2021-09-06 09:51:30'),
(1000009, 'Prof.', '1', '736-574-4281', 'Port Audra', 'terrance.goyette@gmail.com', '2021-09-06 09:51:30', '2021-09-06 09:51:30'),
(1000010, 'Ms.', '9', '(800) 651-5132', 'East Blancheshire', 'weldon.stehr@gmail.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000011, 'Ms.', '2', '1-866-845-7703', 'New Lonzo', 'jsmitham@hotmail.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000012, 'Prof.', '8', '800-583-0061', 'Labadiehaven', 'kuhn.kelsi@davis.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000013, 'Dr.', '6', '844.586.8033', 'East Teresamouth', 'lemke.rosario@hotmail.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000014, 'Ms.', '9', '855.347.2778', 'Lake Kristoffer', 'mercedes.turcotte@murazik.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000015, 'Dr.', '4', '800-988-6662', 'Dietrichburgh', 'tmoore@hotmail.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000016, 'Mrs.', '7', '855.481.1392', 'Starkburgh', 'cara39@walsh.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000017, 'Ms.', '1', '1-888-827-0488', 'Zackarytown', 'brook.lang@gmail.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000018, 'Mrs.', '10', '(855) 666-6418', 'South Dejon', 'cummerata.isaiah@hotmail.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000019, 'Miss', '3', '866.345.5124', 'North Demetris', 'cstracke@leuschke.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000020, 'Miss', '10', '888-449-7859', 'Lake Andres', 'judah37@bogan.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000021, 'Dr.', '6', '888-639-1562', 'East Jana', 'tanya43@yahoo.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000022, 'Dr.', '6', '1-888-506-4968', 'Lake Cruz', 'kevin03@gmail.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000023, 'Ms.', '10', '1-844-862-3378', 'Mullerburgh', 'spurdy@hotmail.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000024, 'Prof.', '4', '(844) 257-3910', 'North Humberto', 'chet.turner@cassin.org', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000025, 'Miss', '4', '(855) 250-8059', 'Wilhelmineville', 'aanderson@hotmail.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000026, 'Dr.', '8', '800.471.6853', 'Martinafort', 'durgan.anahi@gislason.biz', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000027, 'Ms.', '3', '1-866-374-9328', 'Kelliemouth', 'destini89@olson.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000028, 'Mrs.', '1', '1-866-892-6864', 'South Clarabelleburgh', 'kathleen.hayes@gmail.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000029, 'Miss', '6', '888.319.8572', 'North Chandler', 'ankunding.mina@pollich.com', '2021-09-06 09:52:35', '2021-09-06 09:52:35'),
(1000030, 'Josephine Green', '3', '877-384-9119', 'North Madgefurt', 'pwillms@gmail.com', '2021-09-06 09:53:39', '2021-09-06 09:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isbn` int(11) NOT NULL,
  `judul` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `id_penerbit` bigint(20) UNSIGNED NOT NULL,
  `id_pengarang` bigint(20) UNSIGNED NOT NULL,
  `id_katalog` bigint(20) UNSIGNED NOT NULL,
  `qty_stok` int(11) NOT NULL,
  `harga_pinjam` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`, `created_at`, `updated_at`) VALUES
(10000001, 291234500, 'Latihan Javascript', 2018, 10001, 111001, 1001, 10, 10000, NULL, NULL),
(10000002, 292391000, 'Belajar php', 2019, 10002, 111002, 1002, 20, 20000, NULL, NULL),
(10000003, 292391600, 'Basic Php', 2020, 10001, 111002, 1001, 50, 15000, NULL, NULL),
(10000004, 292391800, 'Mysql Dasar', 2021, 10002, 111001, 1002, 17, 30000, NULL, NULL),
(10000005, 295955456, 'Braden Wolf', 2020, 10002, 111002, 1001, 38, 12916, '2021-09-06 04:10:47', '2021-09-06 04:10:47'),
(10000006, 353076531, 'Jamel Collier Jr.', 2020, 10001, 111002, 1002, 43, 10955, '2021-09-06 04:10:47', '2021-09-06 04:10:47'),
(10000007, 435273213, 'Dr. Favian Hilpert II', 2020, 10002, 111001, 1002, 16, 14960, '2021-09-06 04:10:47', '2021-09-06 04:10:47'),
(10000008, 953223829, 'Bernita McKenzie', 2021, 10001, 111002, 1001, 17, 19705, '2021-09-06 04:10:47', '2021-09-06 04:10:47'),
(10000009, 131610166, 'Elissa Altenwerth PhD', 2018, 10002, 111001, 1001, 30, 11373, '2021-09-06 04:10:47', '2021-09-06 04:10:47'),
(10000010, 232722743, 'Elwin Ledner', 2021, 10002, 111002, 1001, 30, 10896, '2021-09-06 04:10:47', '2021-09-06 04:10:47'),
(10000011, 214681596, 'Carol Mills', 2019, 10002, 111001, 1001, 14, 13090, '2021-09-06 04:10:47', '2021-09-06 04:10:47'),
(10000012, 992563809, 'Litzy Heller', 2021, 10002, 111002, 1001, 30, 14339, '2021-09-06 04:10:47', '2021-09-06 04:10:47'),
(10000013, 650181051, 'Ardella Pollich', 2021, 10002, 111001, 1002, 44, 16614, '2021-09-06 04:10:47', '2021-09-06 04:10:47'),
(10000014, 549000362, 'Glenna Stoltenberg', 2021, 10001, 111002, 1001, 21, 18762, '2021-09-06 04:10:47', '2021-09-06 04:10:47'),
(10000015, 524889850, 'Heidi Stroman', 2020, 10001, 111001, 1002, 22, 10526, '2021-09-06 09:16:38', '2021-09-06 09:16:38'),
(10000016, 559538245, 'Anibal Johns', 2020, 10001, 111001, 1002, 38, 13164, '2021-09-06 09:16:38', '2021-09-06 09:16:38'),
(10000017, 574764389, 'Prof. Mandy King', 2019, 10001, 111001, 1002, 49, 13352, '2021-09-06 09:16:38', '2021-09-06 09:16:38'),
(10000018, 398090983, 'Julian Hackett', 2019, 10001, 111001, 1001, 26, 11532, '2021-09-06 09:16:38', '2021-09-06 09:16:38'),
(10000019, 932140159, 'Karina Hettinger', 2021, 10002, 111001, 1001, 38, 15860, '2021-09-06 09:16:38', '2021-09-06 09:16:38'),
(10000020, 798951398, 'Mr. Gavin Satterfield II', 2021, 10001, 111002, 1002, 44, 13710, '2021-09-06 09:16:38', '2021-09-06 09:16:38'),
(10000021, 118716228, 'Oma Toy', 2019, 10001, 111001, 1002, 27, 12179, '2021-09-06 09:16:38', '2021-09-06 09:16:38'),
(10000022, 531886519, 'Mr. Benjamin Herman MD', 2021, 10001, 111001, 1002, 50, 13947, '2021-09-06 09:16:38', '2021-09-06 09:16:38'),
(10000023, 790716764, 'Cooper Abshire', 2018, 10001, 111001, 1001, 33, 14956, '2021-09-06 09:16:38', '2021-09-06 09:16:38'),
(10000024, 952937967, 'Mr. Ulises Cremin', 2018, 10001, 111001, 1002, 41, 13675, '2021-09-06 09:16:38', '2021-09-06 09:16:38'),
(10000025, 367088815, 'Devan Bruen PhD', 2020, 10002, 111001, 1001, 19, 12236, '2021-09-06 09:17:51', '2021-09-06 09:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjamen`
--

CREATE TABLE `detail_peminjamen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_peminjaman` bigint(20) UNSIGNED NOT NULL,
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_peminjamen`
--

INSERT INTO `detail_peminjamen` (`id`, `id_peminjaman`, `id_buku`, `qty`, `created_at`, `updated_at`) VALUES
(50001, 10011, 10000001, 1, NULL, NULL),
(50002, 10012, 10000003, 1, NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `katalogs`
--

CREATE TABLE `katalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `katalogs`
--

INSERT INTO `katalogs` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1001, 'Buku dewasa', NULL, NULL),
(1002, 'Buku dewasa', NULL, NULL),
(1004, 'Buku dewasa 3', '2021-08-28 21:28:22', '2021-08-29 06:36:56');

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
(1, '2010_08_20_073944_create_anggotas_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_08_20_073422_create_penerbits_table', 1),
(6, '2021_08_20_073648_create_pengarangs_table', 1),
(7, '2021_08_20_073721_create_katalogs_table', 1),
(8, '2021_08_20_073748_create_bukus_table', 1),
(9, '2021_08_20_073819_create_peminjamen_table', 1),
(10, '2021_08_20_073820_create_detail_peminjamen_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjamen`
--

CREATE TABLE `peminjamen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjamen`
--

INSERT INTO `peminjamen` (`id`, `id_anggota`, `tgl_pinjam`, `tgl_kembali`, `created_at`, `updated_at`) VALUES
(10011, 1000001, '2021-08-03', '2021-08-24', NULL, NULL),
(10012, 1000001, '2021-08-04', '2021-08-12', NULL, NULL),
(10013, 1000002, '2021-08-04', '2021-08-10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penerbits`
--

CREATE TABLE `penerbits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_penerbit` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penerbits`
--

INSERT INTO `penerbits` (`id`, `nama_penerbit`, `email`, `telp`, `alamat`, `created_at`, `updated_at`) VALUES
(10001, 'penerbit01', 'penerbit01@gmail.com', '087774300276', 'jakarta', NULL, '2021-09-05 19:39:05'),
(10002, 'penerbit02', 'penerbit02@gmail.com', '087876512340', 'jogja', NULL, NULL),
(10006, 'dedi', 'dedi22seufh@gmail.com', '08775566444', 'bandung', '2021-09-05 21:36:34', '2021-09-05 21:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `pengarangs`
--

CREATE TABLE `pengarangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pengarang` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengarangs`
--

INSERT INTO `pengarangs` (`id`, `nama_pengarang`, `email`, `telp`, `alamat`, `created_at`, `updated_at`) VALUES
(111001, 'Pengarang01', 'pengarang012@gmail.com', '087871611950', 'Tangerang', NULL, NULL),
(111002, 'Pengarang02', 'pengarang02@gmail.com', '087871521950', 'bogor', NULL, NULL),
(111005, 'a', 'a', 'a', 'a', '2021-08-31 04:19:48', '2021-08-31 04:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_anggota` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `id_anggota`, `remember_token`, `created_at`, `updated_at`) VALUES
(1112, 'jordan', 'jordanaj1@gmail.com', NULL, '$2y$10$B6rvj18r7Tt0/dx.y1YJhu/XbnUhY//P9OFDW8TNER2HSyL7Fsp5q', NULL, NULL, '2021-08-25 01:29:15', '2021-08-25 01:29:15'),
(1000001, 'deni', 'deni22setiawan@gmail.com', NULL, '12345678', 1000001, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bukus_id_penerbit_foreign` (`id_penerbit`),
  ADD KEY `bukus_id_pengarang_foreign` (`id_pengarang`),
  ADD KEY `bukus_id_katalog_foreign` (`id_katalog`);

--
-- Indexes for table `detail_peminjamen`
--
ALTER TABLE `detail_peminjamen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_peminjamen_id_peminjaman_foreign` (`id_peminjaman`),
  ADD KEY `detail_peminjamen_id_buku_foreign` (`id_buku`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katalogs`
--
ALTER TABLE `katalogs`
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
-- Indexes for table `peminjamen`
--
ALTER TABLE `peminjamen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjamen_id_anggota_foreign` (`id_anggota`);

--
-- Indexes for table `penerbits`
--
ALTER TABLE `penerbits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengarangs`
--
ALTER TABLE `pengarangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_anggota_foreign` (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000031;

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000026;

--
-- AUTO_INCREMENT for table `detail_peminjamen`
--
ALTER TABLE `detail_peminjamen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50003;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `katalogs`
--
ALTER TABLE `katalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `peminjamen`
--
ALTER TABLE `peminjamen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10014;

--
-- AUTO_INCREMENT for table `penerbits`
--
ALTER TABLE `penerbits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10007;

--
-- AUTO_INCREMENT for table `pengarangs`
--
ALTER TABLE `pengarangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111006;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000002;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukus`
--
ALTER TABLE `bukus`
  ADD CONSTRAINT `bukus_id_katalog_foreign` FOREIGN KEY (`id_katalog`) REFERENCES `katalogs` (`id`),
  ADD CONSTRAINT `bukus_id_penerbit_foreign` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbits` (`id`),
  ADD CONSTRAINT `bukus_id_pengarang_foreign` FOREIGN KEY (`id_pengarang`) REFERENCES `pengarangs` (`id`);

--
-- Constraints for table `detail_peminjamen`
--
ALTER TABLE `detail_peminjamen`
  ADD CONSTRAINT `detail_peminjamen_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `bukus` (`id`),
  ADD CONSTRAINT `detail_peminjamen_id_peminjaman_foreign` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjamen` (`id`);

--
-- Constraints for table `peminjamen`
--
ALTER TABLE `peminjamen`
  ADD CONSTRAINT `peminjamen_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `anggotas` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `anggotas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
