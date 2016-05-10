-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mei 2016 pada 22.10
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cd_code`
--

CREATE TABLE `cd_code` (
  `hcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `code_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `desc1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desc2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `cd_code`
--

INSERT INTO `cd_code` (`hcode`, `code`, `code_name`, `desc1`, `desc2`, `created_at`, `updated_at`) VALUES
('10', '0', 'PT CHEILJEDANG INDONESIA', '', '', '2016-04-24 20:20:32', '2016-04-24 20:20:32'),
('10', '40', 'B2B', '', '', '2016-04-24 20:21:26', '2016-04-24 20:21:26'),
('10', '50', 'B2C', '', '', '2016-04-24 20:21:52', '2016-04-24 20:21:52'),
('10', '4010', 'FEED', '', '', '2016-04-24 20:22:13', '2016-04-24 20:22:13'),
('10', '4020', 'FOOD', '', '', '2016-04-24 20:22:27', '2016-04-24 20:22:27'),
('70', '0', 'Region', 'Customer Region', '', '2016-04-24 20:23:16', '2016-04-24 20:23:16'),
('70', '701', 'CENTRAL JAVA', 'C', '', '2016-04-24 20:25:02', '2016-04-24 20:25:02'),
('70', '702', 'EAST JAVA', 'E', '', '2016-04-24 20:25:52', '2016-04-24 20:25:52'),
('70', '703', 'JABODETABEK', 'J', '', '2016-04-24 20:26:26', '2016-04-24 20:26:26'),
('70', '704', 'WEST JAVA', 'W', '', '2016-04-24 20:26:46', '2016-04-24 20:26:46'),
('70', '703001', 'CIKARANG ', 'WH CIKARANG', '', '2016-04-24 20:30:39', '2016-04-24 20:30:39'),
('70', '703002', 'Cakung', 'WH Cakung', '', '2016-04-24 20:33:22', '2016-04-24 20:33:22'),
('70', '702001', 'Surabaya', 'WH SBY', '', '2016-04-24 20:34:17', '2016-04-24 20:34:17'),
('70', '702002', 'Jombang', 'Pabrik JBG', '', '2016-04-24 20:35:59', '2016-04-24 20:35:59'),
('70', '702003', 'Pasuruan', 'PB PSR', '', '2016-04-24 20:36:29', '2016-04-24 20:36:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cd_material`
--

CREATE TABLE `cd_material` (
  `company` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plant` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `material_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `material_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `material_nickname` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `material_pack` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `material_size` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `material_unit` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `material_item` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `material_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nicklot` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `cd_material`
--

INSERT INTO `cd_material` (`company`, `plant`, `material_code`, `material_name`, `material_nickname`, `material_pack`, `material_size`, `material_unit`, `material_item`, `material_type`, `nicklot`, `created_at`, `updated_at`) VALUES
('10', '4010', '107609', 'Lysine HCl Powder (25 kg)', 'Lysine HCl Powder (25 kg)', 'BAG', '25', 'KG', '', 'LYSINE', 'AAAF', '2016-04-22 01:24:05', '2016-04-22 01:24:05'),
('10', '4020', '150060', 'MSG Powder Jombang (25kg) MI-POONG', 'MSG Powder Jombang', 'BAG', '25', 'KG', 'PD', 'MSG', 'BMPF', '2016-04-22 01:26:14', '2016-04-22 01:26:14'),
('10', '4010', '150066', 'Threonine Powder (25 kg)', 'Threonine Powder (25 kg)', 'BAG', '25', 'KG', '', 'CN_THREO', 'DBAF', '2016-04-22 01:27:29', '2016-04-22 01:27:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_04_22_072843_create_users_table', 1),
('2016_04_22_073022_create_cd_code_table', 2),
('2016_04_22_073121_create_cd_material_table', 3),
('2016_04_22_073219_create_ss_inventory_table', 4),
('2016_04_22_073306_create_ss_po_table', 5),
('2016_04_22_073416_create_ss_domaster_table', 6),
('2016_04_22_073519_create_ss_dodetail_table', 7),
('2016_04_22_073629_create_ss_transaksi_table', 8),
('2016_04_22_073818_add_nicklot_to_cd_material_table', 9),
('2016_04_22_074030_create_cd_material_table', 10),
('2016_04_27_070513_create_ss_customers_table', 11),
('2016_04_27_121314_create_ss_po_detail_table', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ss_customers`
--

CREATE TABLE `ss_customers` (
  `company` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plant` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `customer_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `customer_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `desc1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desc2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `ss_customers`
--

INSERT INTO `ss_customers` (`company`, `plant`, `customer_code`, `customer_name`, `desc1`, `desc2`, `created_at`, `updated_at`) VALUES
('10', '4020', '500001', 'Unilever', '', '', '2016-04-29 01:34:59', '2016-04-29 01:34:59'),
('10', '4020', '500002', 'Indofood Cikampek-BP', '', '', '2016-04-29 03:09:24', '2016-04-29 03:09:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ss_dodetail`
--

CREATE TABLE `ss_dodetail` (
  `do_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `material_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lot_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `qty_kgs` decimal(25,0) NOT NULL,
  `qty_bag` decimal(25,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `ss_dodetail`
--

INSERT INTO `ss_dodetail` (`do_no`, `material_code`, `lot_number`, `qty_kgs`, `qty_bag`, `created_at`, `updated_at`) VALUES
('DO20160503A001', '107609 ', 'AAAF160410', '0', '233', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('DO20160503A001', '107609 ', 'AAAF160425', '0', '150', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('DO20160503A002', '150060 ', 'BMPF171025', '0', '250', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ss_domaster`
--

CREATE TABLE `ss_domaster` (
  `company` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plant` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `do_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `po_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `customer_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `po_date` date NOT NULL,
  `remark` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `ss_domaster`
--

INSERT INTO `ss_domaster` (`company`, `plant`, `do_no`, `po_no`, `customer_code`, `po_date`, `remark`, `created_at`, `updated_at`) VALUES
('8888', '8888', 'DO20160503A001', '', '', '0000-00-00', 'bla bla', '2016-05-03 08:19:25', '2016-05-03 08:19:25'),
('8888', '8888', 'DO20160503A002', '', '', '0000-00-00', 'bla bla', '2016-05-03 08:22:07', '2016-05-03 08:22:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ss_inventory`
--

CREATE TABLE `ss_inventory` (
  `company` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plant` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `material_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `material_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `lot_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `good_qty_bag` decimal(25,0) NOT NULL,
  `good_qty_kgs` decimal(25,0) NOT NULL,
  `bad_qty_bag` decimal(25,0) NOT NULL,
  `bad_qty_kgs` decimal(25,0) NOT NULL,
  `result_bag` decimal(25,0) NOT NULL,
  `result_kgs` decimal(25,0) NOT NULL,
  `storage` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date_ym` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('G','B') COLLATE utf8_unicode_ci NOT NULL,
  `remark` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `ss_inventory`
--

INSERT INTO `ss_inventory` (`company`, `plant`, `material_code`, `material_name`, `lot_number`, `good_qty_bag`, `good_qty_kgs`, `bad_qty_bag`, `bad_qty_kgs`, `result_bag`, `result_kgs`, `storage`, `date_ym`, `status`, `remark`, `created_at`, `updated_at`) VALUES
('8888', '8888', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160410', '233', '5825', '-1', '-25', '232', '5800', 'Pasuruan', '201604', 'G', '-', '2016-04-27 03:23:11', '2016-04-27 03:23:11'),
('8888', '8888', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160425', '150', '3750', '0', '0', '150', '3750', 'Jombang', '201604', 'G', 'aaa', '2016-04-27 03:35:28', '2016-04-27 03:35:28'),
('8888', '8888', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160428', '155', '3875', '1', '25', '156', '3900', 'Pasuruan', '201604', 'G', '-', '2016-04-27 06:13:40', '2016-04-27 06:13:40'),
('8888', '8888', '150060', 'MSG Powder Jombang (25kg) MI-POONG', 'BMPF171025', '250', '6250', '0', '0', '250', '6250', 'Jombang', '201605', 'G', 'aaaaa', '2016-05-02 01:19:34', '2016-05-02 01:19:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ss_po`
--

CREATE TABLE `ss_po` (
  `id` int(11) NOT NULL,
  `company` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plant` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `so_date` date NOT NULL,
  `etd` date NOT NULL,
  `source` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `eta_po` date NOT NULL,
  `po_no` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `po_date` date NOT NULL,
  `customer_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `customer_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `material_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `material_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `order_qty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unit_price` decimal(25,2) NOT NULL,
  `include` decimal(25,2) NOT NULL,
  `exclude` decimal(25,2) NOT NULL,
  `so_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gi_date` date NOT NULL,
  `billing_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `surat_jalan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kurs` decimal(25,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `ss_po`
--

INSERT INTO `ss_po` (`id`, `company`, `plant`, `so_date`, `etd`, `source`, `eta_po`, `po_no`, `po_date`, `customer_code`, `customer_name`, `material_code`, `material_name`, `order_qty`, `unit_price`, `include`, `exclude`, `so_no`, `gi_date`, `billing_no`, `surat_jalan`, `kurs`, `created_at`, `updated_at`) VALUES
(12, '8888', '8888', '2016-05-05', '2016-05-05', 'Pasuruan', '2016-05-05', '7100002634', '2016-05-04', '500001', 'Unilever', '107609', 'Lysine HCl Powder (25 kg)', '1000', '10000.00', '10000000.00', '11000000.00', '', '0000-00-00', '', '', '0.00', '2016-05-02 19:37:32', '2016-05-02 19:37:32'),
(13, '8888', '8888', '2016-05-06', '2016-05-06', 'Surabaya', '2016-05-06', '7100002634', '2016-05-04', '500001', 'Unilever', '150060', 'MSG Powder Jombang (25kg) MI-POONG', '2000', '11000.00', '22000000.00', '24200000.00', '', '0000-00-00', '', '', '0.00', '2016-05-02 19:37:33', '2016-05-02 19:37:33'),
(14, '8888', '8888', '2016-05-25', '2016-05-25', 'Jombang', '2016-05-25', '5211212112', '2016-05-25', '500002', 'Indofood Cikampek-BP', '150060', 'MSG Powder Jombang (25kg) MI-POONG', '1000', '12000.00', '12000000.00', '13200000.00', '', '0000-00-00', '', '', '0.00', '2016-05-03 11:26:09', '2016-05-02 19:51:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ss_transaksi`
--

CREATE TABLE `ss_transaksi` (
  `company` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plant` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_transaksi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `material_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `material_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `lot_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `good_qty_bag` decimal(25,0) NOT NULL,
  `good_qty_kgs` decimal(25,0) NOT NULL,
  `bad_qty_bag` decimal(25,0) NOT NULL,
  `bad_qty_kgs` decimal(25,0) NOT NULL,
  `result_bag` decimal(25,0) NOT NULL,
  `result_kgs` decimal(25,0) NOT NULL,
  `storage` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date_ym` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('G','B') COLLATE utf8_unicode_ci NOT NULL,
  `status2` enum('R','I') COLLATE utf8_unicode_ci NOT NULL,
  `remark` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `ss_transaksi`
--

INSERT INTO `ss_transaksi` (`company`, `plant`, `id_transaksi`, `material_code`, `material_name`, `lot_number`, `good_qty_bag`, `good_qty_kgs`, `bad_qty_bag`, `bad_qty_kgs`, `result_bag`, `result_kgs`, `storage`, `date_ym`, `status`, `status2`, `remark`, `created_at`, `updated_at`) VALUES
('8888', '8888', 'RTN20160427002', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160410', '160', '4000', '10', '250', '0', '0', 'Pasuruan', '201604', 'B', 'R', '', '2016-04-27 03:24:25', '2016-04-27 03:24:25'),
('8888', '8888', 'RTN20160427535', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160428', '155', '3875', '4', '100', '159', '3975', 'Pasuruan', '201604', 'B', 'R', '', '2016-04-27 06:15:16', '2016-04-27 06:15:16'),
('8888', '8888', 'RTN20160427538', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160425', '150', '3750', '5', '125', '155', '3875', 'Jombang', '201604', 'B', 'R', '', '2016-04-27 03:48:33', '2016-04-27 03:48:33'),
('8888', '8888', 'RTN20160427545', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160410', '233', '5825', '4', '100', '237', '5925', 'Pasuruan', '201604', 'B', 'R', '', '2016-04-27 03:46:19', '2016-04-27 03:46:19'),
('8888', '8888', 'RTN20160427559', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160425', '125', '3125', '25', '625', '150', '3750', 'Jombang', '201604', 'B', 'R', '', '2016-04-27 03:39:07', '2016-04-27 03:39:07'),
('8888', '8888', 'RTN20160427629', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160410', '221', '5525', '2', '50', '223', '5575', 'Pasuruan', '201604', 'B', 'R', '', '2016-04-27 03:38:43', '2016-04-27 03:38:43'),
('8888', '8888', 'RTN20160427714', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160410', '221', '5525', '2', '50', '223', '5575', 'Pasuruan', '201604', 'B', 'R', '', '2016-04-27 03:37:45', '2016-04-27 03:37:45'),
('8888', '8888', 'RTN20160427752', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160410', '185', '4625', '5', '125', '0', '0', 'Pasuruan', '201604', 'B', 'R', '', '2016-04-27 03:26:25', '2016-04-27 03:26:25'),
('8888', '8888', 'STO20160427001', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160410', '105', '2625', '5', '125', '110', '2750', 'Pasuruan', '201604', 'G', 'I', '-', '2016-04-27 03:23:11', '2016-04-27 03:23:11'),
('8888', '8888', 'STO20160427002', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160410', '55', '1375', '5', '125', '60', '1500', 'Pasuruan', '201604', 'G', 'I', '-', '2016-04-27 03:23:44', '2016-04-27 03:23:44'),
('8888', '8888', 'STO20160427003', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160410', '25', '625', '5', '125', '30', '750', 'Jombang', '201604', 'G', 'I', '-', '2016-04-27 03:24:54', '2016-04-27 03:24:54'),
('8888', '8888', 'STO20160427004', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160425', '125', '3125', '25', '625', '150', '3750', 'Jombang', '201604', 'G', 'I', 'aaa', '2016-04-27 03:35:28', '2016-04-27 03:35:28'),
('8888', '8888', 'STO20160427005', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160410', '36', '900', '4', '100', '40', '1000', 'Pasuruan', '201604', 'G', 'I', '-', '2016-04-27 03:36:19', '2016-04-27 03:36:19'),
('8888', '8888', 'STO20160427006', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160410', '12', '300', '3', '75', '15', '375', 'Pasuruan', '201604', 'G', 'I', '-', '2016-04-27 03:45:45', '2016-04-27 03:45:45'),
('8888', '8888', 'STO20160427007', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160425', '25', '625', '5', '125', '30', '750', 'Jombang', '201604', 'G', 'I', '-', '2016-04-27 03:48:11', '2016-04-27 03:48:11'),
('8888', '8888', 'STO20160427008', '107609', 'Lysine HCl Powder (25 kg)', 'AAAF160428', '155', '3875', '5', '125', '160', '4000', 'Pasuruan', '201604', 'G', 'I', '-', '2016-04-27 06:13:40', '2016-04-27 06:13:40'),
('8888', '8888', 'STO20160502007', '150060', 'MSG Powder Jombang (25kg) MI-POONG', 'BMPF171025', '250', '6250', '0', '0', '250', '6250', 'Jombang', '201605', 'G', 'I', 'aaaaa', '2016-05-02 01:19:34', '2016-05-02 01:19:34');

--
-- Trigger `ss_transaksi`
--
DELIMITER $$
CREATE TRIGGER `TG_INVENTORY_INBOUND` AFTER INSERT ON `ss_transaksi` FOR EACH ROW BEGIN

SET @INVENT=(SELECT COUNT(*) FROM SS_INVENTORY WHERE (LOT_NUMBER=NEW.LOT_NUMBER));
IF NEW.STATUS2 = 'R' THEN
	UPDATE ss_inventory
     SET bad_qty_bag = bad_qty_bag - NEW.bad_qty_bag , bad_qty_kgs = bad_qty_kgs - NEW.bad_qty_kgs, result_bag = good_qty_bag + bad_qty_bag, result_kgs = good_qty_kgs + bad_qty_kgs
   WHERE lot_number = NEW.lot_number;
ELSE
	IF @INVENT=0 THEN
INSERT INTO SS_INVENTORY (COMPANY,PLANT,MATERIAL_CODE,MATERIAL_NAME,LOT_NUMBER,GOOD_QTY_BAG,GOOD_QTY_KGS,BAD_QTY_BAG,BAD_QTY_KGS,RESULT_BAG,RESULT_KGS,STORAGE,DATE_YM,STATUS,REMARK,CREATED_AT,UPDATED_AT) VALUES (NEW.COMPANY,NEW.PLANT,NEW.MATERIAL_CODE,NEW.MATERIAL_NAME,NEW.LOT_NUMBER,NEW.GOOD_QTY_BAG,NEW.GOOD_QTY_KGS,NEW.BAD_QTY_BAG,NEW.BAD_QTY_KGS,NEW.RESULT_BAG,NEW.RESULT_KGS,NEW.STORAGE,NEW.DATE_YM,NEW.STATUS,NEW.REMARK,NEW.CREATED_AT,NEW.UPDATED_AT);	 
ELSE
 UPDATE ss_inventory
     SET good_qty_bag = good_qty_bag + NEW.good_qty_bag , good_qty_kgs = good_qty_kgs + NEW.good_qty_kgs, bad_qty_bag = NEW.bad_qty_bag + bad_qty_bag, bad_qty_kgs = NEW.bad_qty_kgs + bad_qty_kgs,result_bag = result_bag + NEW.result_bag, result_kgs = result_kgs + NEW.result_kgs
   WHERE lot_number = NEW.lot_number;
END IF;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `company` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plant` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `employee_code` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `employee_name` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `viewer` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`company`, `plant`, `employee_code`, `employee_name`, `email`, `password`, `viewer`, `remember_token`, `created_at`, `updated_at`) VALUES
('10', '0', '8888', 'SUPER ADMIN', 'superadmin@cj.co.id', '$2y$10$w9zFi8yXoxizYFjou7ukWOETIRe93hFBhGWDRx8Y2DFoFLiZz50EW', 'A', NULL, '2016-04-22 01:14:30', '2016-04-22 01:14:30');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_inventory_sum`
--
CREATE TABLE `vw_inventory_sum` (
`material_code` varchar(20)
,`material_name` varchar(80)
,`qty` decimal(48,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_transaksi_sum`
--
CREATE TABLE `vw_transaksi_sum` (
`material_name` varchar(80)
,`qty` decimal(47,0)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_inventory_sum`
--
DROP TABLE IF EXISTS `vw_inventory_sum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_inventory_sum`  AS  select `t`.`material_code` AS `material_code`,`t`.`material_name` AS `material_name`,(`t`.`good_qty_bag` - coalesce(`v`.`qty`,0)) AS `qty` from (`ss_inventory` `t` left join `vw_transaksi_sum` `v` on((`t`.`material_name` = `v`.`material_name`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_transaksi_sum`
--
DROP TABLE IF EXISTS `vw_transaksi_sum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_transaksi_sum`  AS  select `ss_transaksi`.`material_name` AS `material_name`,sum(`ss_transaksi`.`good_qty_bag`) AS `qty` from `ss_transaksi` group by `ss_transaksi`.`material_name` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cd_material`
--
ALTER TABLE `cd_material`
  ADD PRIMARY KEY (`material_code`);

--
-- Indexes for table `ss_domaster`
--
ALTER TABLE `ss_domaster`
  ADD PRIMARY KEY (`do_no`);

--
-- Indexes for table `ss_inventory`
--
ALTER TABLE `ss_inventory`
  ADD PRIMARY KEY (`material_code`,`lot_number`);

--
-- Indexes for table `ss_po`
--
ALTER TABLE `ss_po`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss_transaksi`
--
ALTER TABLE `ss_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ss_po`
--
ALTER TABLE `ss_po`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
