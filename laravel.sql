-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 09:18 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nganh_id` bigint(20) UNSIGNED NOT NULL,
  `dienthoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hocky`
--

CREATE TABLE `hocky` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tungay` date NOT NULL,
  `denngay` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hocky`
--

INSERT INTO `hocky` (`id`, `ten`, `tungay`, `denngay`, `created_at`, `updated_at`) VALUES
(1, '1_2019_2020', '2019-08-01', '2020-01-01', NULL, NULL),
(2, '1_2018_2019', '2018-01-01', '2018-06-01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2019_11_07_101021_create_sinhvien_table', 1),
(33, '2019_11_07_101224_create_giangvien_table', 1),
(34, '2019_11_07_101734_create_hocky_table', 1),
(35, '2019_11_07_101928_create_khoa_table', 1),
(36, '2019_11_07_102254_create_nganh_table', 1),
(37, '2019_11_07_102429_create_monhoc_table', 1),
(38, '2019_11_07_102847_create_thihocphan_table', 1),
(39, '2019_11_07_103530_create_phieudangky_table', 1),
(40, '2019_11_07_104327_create_thongbao_table', 1),
(42, '2019_11_21_023310_add_attribute_ngaythi_into_thihocphan_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nganh_id` bigint(20) UNSIGNED NOT NULL,
  `sotinchi` int(11) NOT NULL,
  `ghichu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`id`, `ten`, `nganh_id`, `sotinchi`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'Toán A1', 1, 3, NULL, NULL, NULL),
(2, 'Lập trình trực quan', 1, 3, NULL, NULL, NULL),
(3, 'Trí tuệ nhân tạo', 1, 3, NULL, NULL, NULL),
(4, 'Toán A2', 1, 3, NULL, NULL, NULL),
(5, 'Toán A3', 1, 3, NULL, NULL, NULL),
(6, 'Vật lý đại cương', 1, 4, NULL, NULL, NULL),
(7, 'Tư tưởng Hồ Chí Minh', 1, 2, NULL, NULL, NULL),
(8, 'Xác suất thống kê', 1, 3, NULL, NULL, NULL),
(9, 'Ngôn ngữ lập trình C', 1, 4, NULL, NULL, NULL),
(10, 'Phương pháp tính', 1, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

CREATE TABLE `nganh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`id`, `ten`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'Công nghệ thông tin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phieudangky`
--

CREATE TABLE `phieudangky` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sinhvien_id` bigint(20) UNSIGNED NOT NULL,
  `lophocphan_id` bigint(20) UNSIGNED NOT NULL,
  `nguoidangky` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phieudangky`
--

INSERT INTO `phieudangky` (`id`, `sinhvien_id`, `lophocphan_id`, `nguoidangky`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 'Nguyễn Đức Bá', NULL, NULL),
(9, 1, 1, 'Nguyễn Đức Bình', '2019-11-21 05:15:16', '2019-11-21 05:15:16'),
(10, 1, 5, 'Nguyễn Đức Bình', '2019-11-22 00:11:52', '2019-11-22 00:11:52'),
(11, 1, 4, 'Nguyễn Đức Bình', '2019-11-22 00:12:17', '2019-11-22 00:12:17'),
(12, 1, 9, 'Nguyễn Đức Bình', '2019-11-22 00:55:20', '2019-11-22 00:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nganh_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `username`, `class`, `nganh_id`, `email`, `dienthoai`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'binh1', '56K4-CNTT', 1, '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thihocphan`
--

CREATE TABLE `thihocphan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `monhoc_id` bigint(20) UNSIGNED NOT NULL,
  `hocky_id` bigint(20) UNSIGNED NOT NULL,
  `nganh_id` bigint(20) UNSIGNED NOT NULL,
  `thoigianbatdau` time NOT NULL,
  `thoigianketthuc` time NOT NULL,
  `noithi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaythi` date NOT NULL,
  `ghichu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thihocphan`
--

INSERT INTO `thihocphan` (`id`, `monhoc_id`, `hocky_id`, `nganh_id`, `thoigianbatdau`, `thoigianketthuc`, `noithi`, `ngaythi`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '08:00:00', '10:00:00', 'B1 101', '2019-12-11', NULL, NULL, NULL),
(2, 3, 2, 1, '09:00:00', '12:00:00', 'B2 202', '2018-12-21', NULL, NULL, NULL),
(5, 4, 1, 1, '13:30:00', '16:30:00', 'B2 201', '2019-11-30', NULL, NULL, NULL),
(6, 5, 1, 1, '13:30:00', '16:30:00', 'B2 201', '2019-11-30', NULL, NULL, NULL),
(7, 6, 1, 1, '13:30:00', '16:30:00', 'B2 201', '2019-11-30', NULL, NULL, NULL),
(8, 7, 1, 1, '13:30:00', '16:30:00', 'B2 201', '2019-11-30', NULL, NULL, NULL),
(9, 8, 1, 1, '13:30:00', '16:30:00', 'B2 201', '2019-11-30', NULL, NULL, NULL),
(10, 9, 1, 1, '13:30:00', '16:30:00', 'B2 201', '2019-11-30', NULL, NULL, NULL),
(11, 10, 1, 1, '13:30:00', '16:30:00', 'B2 201', '2019-11-30', NULL, NULL, NULL),
(12, 2, 1, 1, '13:30:00', '16:30:00', 'B2 201', '2019-11-30', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE `thongbao` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tieude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoitao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Người quan trị', '', 'admin', '$2y$12$WOHhzelfsmNBXabYnuOTxesBd5FCb38FxXz866q79gmgjGiiSkT3u', 1, NULL, NULL),
(4, 'Nguyễn Đức Bình', 'binh1997@gmail.com', 'binh1', '$2y$12$oI8AooOznKGMzLAHIj3/3eP.XbyBOjKCQqF7oPwZRiUBOjQVZx5i2', 3, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phieudangky`
--
ALTER TABLE `phieudangky`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thihocphan`
--
ALTER TABLE `thihocphan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongbao`
--
ALTER TABLE `thongbao`
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
-- AUTO_INCREMENT for table `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hocky`
--
ALTER TABLE `hocky`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nganh`
--
ALTER TABLE `nganh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phieudangky`
--
ALTER TABLE `phieudangky`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thihocphan`
--
ALTER TABLE `thihocphan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `thongbao`
--
ALTER TABLE `thongbao`
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
