-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 02:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_funtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin', NULL, '2023-03-27 18:26:03', 0),
(2, '::1', '25000', NULL, '2023-03-27 18:27:44', 0),
(3, '::1', 'ganiramadhan', 1, '2023-03-27 18:28:19', 0),
(4, '::1', 'herlinda', NULL, '2023-03-27 18:41:32', 0),
(5, '::1', 'herlinda', 4, '2023-03-27 18:41:39', 0),
(6, '::1', 'herlinda', NULL, '2023-03-27 18:44:45', 0),
(7, '::1', 'ganiramadhan', NULL, '2023-03-27 18:53:02', 0),
(8, '::1', 'ganiramadhan', NULL, '2023-03-27 18:53:19', 0),
(9, '::1', 'ganiramadhan', NULL, '2023-03-27 18:54:23', 0),
(10, '::1', 'zulfa22', NULL, '2023-03-27 19:08:49', 0),
(11, '::1', 'herlinda', NULL, '2023-03-27 19:43:33', 0),
(12, '::1', 'zulfa', NULL, '2023-03-27 19:43:40', 0),
(13, '::1', 'Ganiraa', NULL, '2023-03-27 20:08:08', 0),
(14, '::1', 'bisa@gmail.com', 23, '2023-03-27 20:17:01', 1),
(15, '::1', 'ganiramadhan@gmail.com', 24, '2023-03-27 20:20:26', 1),
(16, '::1', 'ganiramadhan@gmail.com', 24, '2023-03-27 20:39:03', 1),
(17, '::1', 'ganiramadhan@gmail.com', 24, '2023-03-27 20:40:47', 1),
(18, '::1', 'ganiramadhan@gmail.com', 24, '2023-03-27 20:43:53', 1),
(19, '::1', 'ganiramadhan@gmail.com', 24, '2023-03-27 20:44:52', 1),
(20, '::1', 'Ganiramadhan', NULL, '2023-03-27 21:21:35', 0),
(21, '::1', 'Ganiiramadhan', NULL, '2023-03-27 23:43:31', 0),
(22, '::1', 'Ganiiramadhan', NULL, '2023-03-27 23:44:00', 0),
(23, '::1', 'ganiiramadhan@gmail.com', 30, '2023-03-27 23:44:04', 1),
(24, '::1', 'ganiiramadhan@gmail.com', 30, '2023-03-27 23:52:45', 1),
(25, '::1', 'ganiiramadhan@gmail.com', 30, '2023-03-28 00:03:06', 1),
(26, '::1', 'ganiiramadhan@gmail.com', 30, '2023-03-28 00:10:35', 1),
(27, '::1', 'ganiiramadhan@gmail.com', 30, '2023-03-28 00:11:24', 1),
(28, '::1', 'ganiiramadhan@gmail.com', 30, '2023-03-28 00:11:34', 1),
(29, '::1', 'ganiiramadhan@gmail.com', 30, '2023-03-28 00:12:06', 1),
(30, '::1', 'ganiiramadhan@gmail.com', 30, '2023-03-28 01:08:48', 1),
(31, '::1', 'ganiiramadhan@gmail.com', 30, '2023-03-28 01:10:21', 1),
(32, '::1', 'ganiramadhan100@gmail.com', 31, '2023-03-28 01:11:40', 1),
(33, '::1', 'ganiramadhan100@gmail.com', 31, '2023-03-28 01:13:00', 1),
(34, '::1', 'ganiramadhan100@gmail.com', 31, '2023-03-28 01:15:37', 1),
(35, '::1', 'ganiramadhan100@gmail.com', 31, '2023-03-28 01:20:11', 1),
(36, '::1', 'gani', NULL, '2023-04-03 23:30:31', 0),
(37, '::1', 'admin', NULL, '2023-04-03 23:31:10', 0),
(38, '::1', 'admin', NULL, '2023-04-03 23:31:14', 0),
(39, '::1', 'admin', NULL, '2023-04-03 23:33:17', 0),
(40, '::1', 'admin', NULL, '2023-04-03 23:33:24', 0),
(41, '::1', 'admin', NULL, '2023-04-03 23:33:29', 0),
(42, '::1', 'admin', NULL, '2023-04-03 23:33:34', 0),
(43, '::1', 'ganiramadhan013@gmail.com', 32, '2023-04-03 23:35:05', 1),
(44, '::1', 'ganiramadhan013@gmail.com', 32, '2023-04-03 23:44:56', 1),
(45, '::1', 'ganiramadhan013@gmail.com', 32, '2023-04-04 01:48:38', 1),
(46, '::1', 'jordi@gmail.com', 33, '2023-04-04 02:20:46', 1),
(47, '::1', 'admin', NULL, '2023-04-05 23:13:53', 0),
(48, '::1', 'admin', NULL, '2023-04-05 23:15:00', 0),
(49, '::1', 'herlindaa@gmail.com', 34, '2023-04-05 23:15:08', 1),
(50, '::1', 'herlindaa@gmail.com', 34, '2023-04-06 10:40:16', 1),
(51, '::1', 'herlindaa@gmail.com', 34, '2023-04-07 08:15:18', 1),
(52, '::1', 'herlindaa@gmail.com', 34, '2023-04-08 05:29:31', 1),
(53, '::1', 'herlindaa@gmail.com', 34, '2023-04-08 05:30:19', 1),
(54, '::1', 'herlindaa@gmail.com', 34, '2023-04-08 07:12:55', 1),
(55, '::1', 'herlindaa@gmail.com', 34, '2023-04-08 09:01:39', 1),
(56, '::1', 'herlindaa@gmail.com', 34, '2023-04-08 13:57:45', 1),
(57, '::1', 'herlindaa@gmail.com', 34, '2023-04-08 15:29:31', 1),
(58, '::1', 'herlindaa@gmail.com', 34, '2023-04-09 00:04:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `slug`, `jenis`, `harga_beli`, `harga_jual`, `stok`, `sampul`, `created_at`, `updated_at`) VALUES
(2, 'Ban Tubles - Updatte', 'ban-tubles-updatte', 'Aksesoris', 52000, 55000, 15, '1680939651_3ad465b0bcff3cb64c62.jpeg', '2023-03-28 00:05:53', '2023-04-08 14:33:10'),
(4, 'Spion Motor', 'spion-motor', 'Aksesoris', 30000, 32000, 12, '1680939729_775a514808822e58137d.jpg', '2023-03-28 00:06:24', '2023-04-08 07:42:09'),
(5, 'Body Motor Aerox', 'body-motor-aerox', 'Aksesoris', 2500000, 3000000, 2, '1680939787_414f7efbb24e421e7bdf.jpg', '2023-03-28 00:06:47', '2023-04-08 07:43:07'),
(6, 'Shockbeaker', 'shockbeaker', 'Aksesoris', 300000, 350000, 8, '1680939838_f781e8ab8e2a3ae54165.jpg', '2023-03-28 00:07:05', '2023-04-08 07:43:58'),
(7, 'Kampas Rem - Update', 'kampas-rem-update', 'Aksesoris', 20000, 25000, 20, '1680939872_0ac28b6026ab4afd1fc4.jpeg', '2023-03-28 00:07:26', '2023-04-08 09:57:24'),
(17, 'Testing', 'testing', 'Test', 20000, 200000, 12, '1680951029_4d8efd1a69cad8cbcc66.jpg', '2023-04-08 10:50:29', '2023-04-08 10:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_telp` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cust`, `nama`, `slug`, `alamat`, `nomor_telp`, `created_at`, `updated_at`) VALUES
(5, 'Hardy - Update', 'hardy-update', 'Jl Soekarno Hatta, Bandung', '083878728182', '2023-03-27 23:57:49', '2023-04-04 03:49:34'),
(6, 'Nindi', 'nindi', 'Balongan, Indramayu', '089883728771', '2023-03-27 23:57:49', '2023-04-09 00:06:27'),
(7, 'Zulfa', 'zulfa', 'Jl Cikutra, Bandung', '082887362712', '2023-03-27 23:57:49', '2023-03-27 23:57:49'),
(8, 'Nindi Intan', 'nindi-intan', 'Jl Soekarno Hatta No.45, Indramayu', '0883878662771', '2023-04-04 02:46:39', '2023-04-09 00:06:06'),
(9, 'Zulfa', 'zulfa', 'Jl.Cigadung No.21, Cikutra, Bandunng', '085883920811', '2023-04-04 02:53:48', '2023-04-09 00:07:10'),
(10, 'Agung', 'agung', 'Jl.Kebayoran, Jakarta', '083788271662', '2023-04-04 03:14:37', '2023-04-04 03:14:37'),
(11, 'Esan', 'esan', 'Jl.Cikutra No.45, Bandung', '087672881992', '2023-04-08 10:05:11', '2023-04-09 00:08:01'),
(12, 'Riski', 'riski', 'Jl.Dadap Baru No.45', '08988277162', '2023-04-08 10:09:33', '2023-04-08 10:09:33'),
(13, 'Siska', 'siska', 'Jl.Raya Balongan, Indramayu', '089892883721', '2023-04-08 10:09:57', '2023-04-08 10:09:57'),
(14, 'Herlinda', 'herlinda', 'Jl.Dadap Lama No.21, Indramayu', '08988277182', '2023-04-08 10:10:13', '2023-04-08 10:10:13'),
(15, 'Nayla', 'nayla', 'Jl.Dadap Lama No.21, Indramayu', '089882773812', '2023-04-08 15:08:32', '2023-04-08 15:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-03-27-095105', 'App\\Database\\Migrations\\Customer', 'default', 'App', 1679911296, 1),
(2, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1679941177, 2);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_telp` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `slug`, `alamat`, `nomor_telp`, `created_at`, `updated_at`) VALUES
(12, 'Gani', 'gani', 'Jl.Dadap Baru, Indramayu', '083878624771', '2023-04-08 10:04:47', '2023-04-08 10:04:47'),
(14, 'Ramadhan', 'ramadhan', 'Jl.Dadap Baru No.21, Indramayu', '083878772881', NULL, NULL),
(15, 'Noval', 'noval', 'Jl.Dadap Baru No.21, Indramayu', '082887182881', NULL, NULL),
(16, 'Febry', 'febry', 'Jl.Dadap Baru No.21, Indramayu', '083887281882', NULL, NULL),
(17, 'Amel', 'amel', 'Jl.Dadap Baru No.21, Indramayu', '083887281992', NULL, NULL),
(18, 'Zulfa', 'zulfa', 'Jl.Cigadung Timur No.21, Cikutra, Bandung', '083878772881', '2023-04-09 00:14:53', '2023-04-09 00:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_cust` int(11) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `no_pembeli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `slug`, `id_barang`, `id_cust`, `nama_pembeli`, `nama_barang`, `harga`, `total`, `no_pembeli`) VALUES
(2, '2', 2, 2, 'Herlinda', 'Ban Motor', 20000, 2, '083878281');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(28, 'ganiramadhan012@gmail.com', 'Nayla22', '$2y$10$/qzv1/3HyvHC020t5YuTP.GJD2.m1OuBmxsp5I0jjINdRzLEfGN0e', NULL, NULL, NULL, '5cb2fc9aa669cac3458e4178a207c428', NULL, NULL, 0, 0, '2023-03-27 21:20:38', '2023-03-27 21:20:38', NULL),
(29, 'ganiramadhan13@gmail.com', 'Ganiiramadhan', '$2y$10$QzEsfq9Ily6Kewb3goJDfOcrUGWHHQHJRvwuGMt/tAM8YfICA6b/i', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-03-27 21:22:43', '2023-03-27 21:22:43', NULL),
(30, 'ganiiramadhan@gmail.com', 'Gan', '$2y$10$idyOpO81EFJi/6jeGQD50OmKW3FNZZOR9S6buXlE2vh46Bl/wxcg6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-03-27 23:43:58', '2023-03-27 23:43:58', NULL),
(31, 'ganiramadhan100@gmail.com', 'admin', '$2y$10$CnRoV7JTYBYjCEaTN12lLeP/ovjJk/5toM8j8/PwQavsuVbf.aDly', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-03-28 01:11:36', '2023-03-28 01:11:36', NULL),
(32, 'ganiramadhan013@gmail.com', 'user', '$2y$10$gzsP4YP1B/gwKg.i78cA8.RsE6KRDSuvKBNjzFkfq1MW959PmsWXu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-04-03 23:34:57', '2023-04-03 23:34:57', NULL),
(33, 'jordi@gmail.com', 'myfather', '$2y$10$RMix6jP/dtyL03JcT5xZ1.EgzjTVUZ3kznLUPhsz3NWBBk4fIsQem', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-04-04 02:19:54', '2023-04-04 02:19:54', NULL),
(34, 'herlindaa@gmail.com', 'Nayla', '$2y$10$7kRUB5oOy7slMkqrlYSuhOqI5FaH.Jmy8.VZklyPl88vxAso6qGIa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-04-05 23:14:57', '2023-04-05 23:14:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_cust` (`id_cust`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
