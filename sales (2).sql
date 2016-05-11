-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mei 2016 pada 20.15
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
  `id` int(11) NOT NULL,
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

INSERT INTO `cd_code` (`id`, `hcode`, `code`, `code_name`, `desc1`, `desc2`, `created_at`, `updated_at`) VALUES
(1, 'CA01', '*', 'COMPANY', '', '', '2016-05-09 08:44:17', '2016-05-09 08:44:17'),
(2, 'CA02', '*', 'PLANT', '', '', '2016-05-09 08:44:42', '2016-05-09 08:44:42'),
(3, 'CA03', '*', 'ITEM CATEGORY', '', '', '2016-05-09 08:45:14', '2016-05-09 08:45:14'),
(4, 'PB01', '*', 'PABRIK', '', '', '2016-05-09 08:45:49', '2016-05-09 08:46:36'),
(5, 'GD01', '*', 'GUDANG', '', '', '2016-05-09 08:46:26', '2016-05-09 08:46:26'),
(6, 'CA01', '10', 'PT. CHEIL JEDANG INDONESIA', '', '', '2016-05-09 08:47:31', '2016-05-09 08:47:31'),
(7, 'CA01', '20', 'PT. SUPER FEED', '', '', '2016-05-09 08:47:53', '2016-05-09 08:47:53'),
(8, 'CA01', '30', 'PT. SUPER UNGGAS JAYA', '', '', '2016-05-09 08:48:38', '2016-05-09 08:48:38'),
(9, 'CA02', '1010', 'PT. CHEIL JEDANG INDONESIA JAKARTA', 'CJI JAKARTA', 'RHQ', '2016-05-09 08:50:14', '2016-05-09 08:50:14'),
(10, 'CA02', '1020', 'PT. CHEIL JEDANG INDONESIA PASURUAN', 'CJI PASURUAN', 'PABRIK', '2016-05-09 08:50:50', '2016-05-09 08:50:50'),
(11, 'CA02', '1030', 'PT. CHEIL JEDANG INDONESIA JOMBANG', 'CJI JOMBANG', 'PABRIK', '2016-05-09 08:51:25', '2016-05-09 08:51:25'),
(12, 'CA03', 'B2B', 'LOCAL SALES B2B', 'LOCAL SALES B2B', '', '2016-05-09 08:52:49', '2016-05-10 02:35:07'),
(15, 'CA03', 'B2C', 'LOCAL SALES B2C', 'LOCAL SALES B2C', '', '2016-05-09 08:56:27', '2016-05-10 02:35:17'),
(17, 'PB01', '7001', 'JOMBANG', 'PABRIK JOMBANG', '', '2016-05-09 09:00:36', '2016-05-09 09:03:46'),
(18, 'PB01', '7002', 'PASURUAN', 'PABRIK PASURUAN', '', '2016-05-09 09:04:08', '2016-05-09 09:04:08'),
(19, 'GD01', '8001', 'CIKARANG', 'GUDANG CIKARANG', '', '2016-05-09 09:04:36', '2016-05-09 09:04:36'),
(20, 'GD01', '8002', 'CAKUNG', 'GUDANG SURABAYA', '', '2016-05-09 09:05:23', '2016-05-09 09:06:00'),
(21, 'GD01', '8003', 'SURABAYA', 'GUDANG SURABAYA', '', '2016-05-09 09:05:52', '2016-05-09 09:07:23'),
(22, 'ITP', '*', 'ITEM TYPE', '', '', '2016-05-10 02:36:02', '2016-05-10 02:36:02'),
(23, 'ITP', 'B2B01', 'B2B FEED', '', '', '2016-05-10 02:37:24', '2016-05-10 02:37:24'),
(24, 'ITP', 'B2B02', 'B2B FOOD', '', '', '2016-05-10 02:37:44', '2016-05-10 02:37:44'),
(25, 'ITP', 'B2C01', 'B2C FOOD', '', '', '2016-05-10 02:38:29', '2016-05-10 02:38:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cd_material`
--

CREATE TABLE `cd_material` (
  `company` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plant` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `material_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `material_ktg` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `material_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `cd_material` (`company`, `plant`, `material_code`, `material_ktg`, `material_name`, `material_pack`, `material_size`, `material_unit`, `material_item`, `material_type`, `nicklot`, `created_at`, `updated_at`) VALUES
('10', '1010', '100001', 'B2C01', 'MANGKOK', 'EA', '1', 'EA', '', '', '', '2016-05-10 07:14:10', '2016-05-10 07:14:10'),
('10', '1010', '100002', 'B2C01', 'PIRING', 'EA', '1', 'EA', '', '', '', '2016-05-10 07:14:44', '2016-05-10 07:14:44'),
('10', '1010', '100003', 'B2C01', 'GELAS', 'EA', '1', 'EA', '', '', '', '2016-05-10 07:15:11', '2016-05-10 07:15:11'),
('10', '1010', '100004', 'B2C01', 'SENDOK', 'EA', '1', 'EA', '', '', '', '2016-05-10 07:15:41', '2016-05-10 07:15:41'),
('10', '1010', '100005', 'B2C01', 'TOPLES', 'EA', '1', 'EA', '', '', '', '2016-05-10 07:16:04', '2016-05-10 07:16:04'),
('10', '1010', '100006', 'B2C01', 'HANGER PLASTIK', 'EA', '1', 'EA', '', '', '', '2016-05-10 07:16:23', '2016-05-10 07:16:23'),
('10', '1010', '100007', 'B2C01', 'HANGER KERTAS', 'EA', '1', 'EA', '', '', '', '2016-05-10 07:16:51', '2016-05-10 07:16:51'),
('10', '1010', '100008', 'B2C01', 'SALES KIT', 'EA', '1', 'EA', '', '', '', '2016-05-10 07:17:24', '2016-05-10 07:17:24'),
('10', '1010', '107609', 'B2B01', 'Lysine HCl Powder (25 kg)', 'BAG', '25', 'KG', '', 'LIQUID LYSINE', 'AAAF', '2016-05-10 03:35:46', '2016-05-10 03:35:46'),
('10', '1010', '110221', 'B2B01', 'Prosin Powder (25kg)', 'BAG', '25', 'KG', '', 'PROSIN', 'AKAF', '2016-05-10 03:40:12', '2016-05-10 03:40:12'),
('10', '1010', '110225', 'B2B02', 'ID_JB  IMP 10Kg (Red, PE)', 'BAG', '10', 'KG', 'IMP', 'NUCLEOTIDE', 'BNIC', '2016-05-10 03:25:36', '2016-05-10 03:25:36'),
('10', '1010', '110990', 'B2B02', 'GMP (10kg)', 'BAG', '10', 'KG', 'GMP', 'NUCLEOTIDE', 'BNGC', '2016-05-10 03:28:03', '2016-05-10 03:28:03'),
('10', '1010', '119898', 'B2B01', 'Tryptophan Powder (10kg)', 'BAG', '10', 'KG', '', 'TRYPTOPHAN', 'ACAC', '2016-05-10 03:38:50', '2016-05-10 03:38:50'),
('10', '1010', '134178', 'B2B01', 'Protide Powder_JB (25kg)', 'BAG', '25', 'KG', '', 'PROTIDE', 'BKBF', '2016-05-10 03:39:32', '2016-05-10 03:39:32'),
('10', '1010', '150057', 'B2B02', 'MSG Regular Crystal Jombang (25kg)', 'BAG', '25', 'KG', 'RC', 'MSG', 'BMRF', '2016-05-10 02:51:31', '2016-05-10 02:51:31'),
('10', '1010', '150058', 'B2B02', 'MSG Fine Crystal Jombang (25kg) MI-POONG', 'BAG', '25', 'KG', 'FC', 'MSG', 'BMFF', '2016-05-10 03:01:11', '2016-05-10 03:01:11'),
('10', '1010', '150059', 'B2B02', 'MSG Small Crystal Jombang (25kg) MI-POONG', 'BAG', '25', 'KG', 'SC', 'MSG', 'BMSF', '2016-05-10 03:02:08', '2016-05-10 03:02:08'),
('10', '1010', '150060', 'B2B02', 'MSG Powder Jombang (25kg) MI-POONG', 'BAG', '25', 'KG', 'PD', 'MSG', 'BMPF', '2016-05-10 03:08:11', '2016-05-10 03:08:11'),
('10', '1010', '150065', 'B2B01', 'Promate Powder (25kg)_Jb', 'BAG', '25', 'KG', '', 'PROMATE', 'BKCF', '2016-05-10 03:42:07', '2016-05-10 03:42:07'),
('10', '1010', '150066', 'B2B01', 'Threonine Powder (25 kg)', 'BAG', '25', 'KG', '', 'THREONINE', 'DBAF', '2016-05-10 03:37:21', '2016-05-10 03:37:21'),
('10', '1010', '150739', 'B2B02', 'MSG-RC 25Kg W/V (MI-POONG)', 'BAG', '25', 'KG', 'RC', 'MSG', 'BMRF', '2016-05-10 02:57:20', '2016-05-10 02:57:20'),
('10', '1010', '154245', 'B2B02', 'INGREDIENT M 205900 (ID_JB MSG-SC 25KG)', 'BAG', '25', 'KG', 'SC', 'MSG', 'BMSF', '2016-05-10 03:07:21', '2016-05-10 03:07:21'),
('10', '1010', '156830', 'B2C01', 'ID_JB  MSG-RC 1KG*20 BOX (MASITA)', 'BOX', '1', 'KG', 'RC', 'MSG', '', '2016-05-10 04:02:15', '2016-05-10 04:02:15'),
('10', '1010', '157145', 'B2B02', 'MSG Medium Crystal Jombang (25kg) WOVEN', 'BAG', '25', 'KG', 'MC', 'MSG', 'BMMF', '2016-05-10 03:10:42', '2016-05-10 03:10:42'),
('10', '1010', '157162', 'B2B02', 'MSG Medium Crystal Jombang (25kg) KP (MI-POONG KOREA', 'BAG', '25', 'KG', 'MC', 'MSG', 'BMMF', '2016-05-10 03:12:42', '2016-05-10 03:12:42'),
('10', '1010', '157167', 'B2B02', 'MSG Medium Crystal Jombang (25kg) KP', 'BAG', '25', 'KG', 'MC', 'MSG', 'BMMF', '2016-05-10 03:13:44', '2016-05-10 03:13:44'),
('10', '1010', '157646', 'B2B01', 'Arginine (25 kg)', 'BAG', '25', 'KG', '', 'ARGININE', 'BHAF', '2016-05-10 03:51:41', '2016-05-10 03:51:41'),
('10', '1010', '158962', 'B2C01', 'ID_JB  MSG-RC 27GR*400 BOX (MASITA)', 'BOX', '27', 'GR', 'RC', 'MSG', '', '2016-05-10 04:02:50', '2016-05-10 04:02:50'),
('10', '1010', '158963', 'B2C01', 'ID_JB  MSG-RC 12GR*800 BOX (MASITA)', 'BOX', '12', 'GR', 'RC', 'MSG', '', '2016-05-10 04:03:22', '2016-05-10 04:03:22'),
('10', '1010', '158964', 'B2C01', 'ID_JB  MSG-RC 100GR*100 BOX (MASITA)', 'BOX', '100', 'GR', 'RC', 'MSG', '', '2016-05-10 04:04:06', '2016-05-10 04:04:06'),
('10', '1010', '159617', 'B2B01', 'Lysine Granule 70 (25kg)', 'BAG', '25', 'KG', '', 'GRANULE LYSINE', 'AACF', '2016-05-10 03:44:11', '2016-05-10 03:44:11'),
('10', '1010', '159798', 'B2C01', 'ID_JB  MSG-MC 250GR * 40EA(BOX MASITA)', 'BOX', '250', 'GR', 'MC', 'MSG', '', '2016-05-10 04:04:34', '2016-05-10 04:04:34'),
('10', '1010', '159944', 'B2B02', 'MSG-MC, 25KG W/V NETRAL PPJ', 'BAG', '25', 'KG', 'MC', 'MSG', 'BMMF', '2016-05-10 03:18:03', '2016-05-10 03:18:03'),
('10', '1010', '162417', 'B2B02', 'MSG-MC 25KG W/V (MI PUNG)', 'BAG', '25', 'KG', 'MC', 'MSG', 'BMMF', '2016-05-10 03:19:27', '2016-05-10 03:19:27'),
('10', '1010', '162704', 'B2B02', 'ID_JB I+G 10KG (WF ID, PE)', 'BAG', '10', 'KG', 'I+G', 'NUCLEOTIDE', 'BNSC', '2016-05-10 03:22:12', '2016-05-10 03:22:12'),
('10', '1010', '162705', 'B2B02', 'ID_JB I+G 10KG (UL ID GREEN,PE)', 'BAG', '10', 'KG', 'I+G', 'NUCLEOTIDE', 'BNSC', '2016-05-10 03:23:01', '2016-05-10 03:23:01'),
('10', '1010', '164154', 'B2B01', 'Methionine (25 kg)', 'BAG', '25', 'KG', '', 'METHIONINE', 'GDAF', '2016-05-10 03:48:03', '2016-05-10 03:48:03'),
('10', '1010', '164155', 'B2B01', 'Methionine (800 kg)', 'BAG', '800', 'KG', '', 'METHIONINE', 'GDAH', '2016-05-10 03:49:50', '2016-05-10 03:49:50'),
('10', '1010', '167497', 'B2B01', 'Methionine (850 kg)', 'BAG', '850', 'KG', '', 'METHIONINE', 'GDAJ', '2016-05-10 03:50:25', '2016-05-10 03:50:25'),
('10', '1010', '168006', 'B2C01', 'ID_JB MSG-MC 50GR*200EA (BOX MASITA)', 'BOX', '50', 'GR', 'MC', 'MSG', '', '2016-05-10 04:05:09', '2016-05-10 04:05:09'),
('10', '1010', '169703', 'B2B02', 'ID_JB  MSG-SC 1000KG TYCON BAG (UL)', 'BAG', '1000', 'KG', 'SC', 'MSG', 'BMSF', '2016-05-10 03:05:57', '2016-05-10 03:05:57'),
('10', '1010', '170273', 'B2B02', 'INGREDIENT M 276012 (ID_JB MSG-PD 25KG)', 'BAG', '25', 'KG', 'PD', 'MSG', 'BMPF', '2016-05-10 03:09:13', '2016-05-10 03:09:13'),
('10', '1010', '300067', 'B2B02', 'IMP (20kg) POLOS (M 201100)', 'BAG', '20', 'KG', 'IMP', 'NUCLEOTIDE', 'BNID', '2016-05-10 03:26:26', '2016-05-10 03:26:26'),
('10', '1010', '300068', 'B2B02', 'GMP (20kg) POLOS', 'BAG', '20', 'KG', 'GMP', 'NUCLEOTIDE', 'BNGD', '2016-05-10 03:28:58', '2016-05-10 03:28:58'),
('10', '1010', '300069', 'B2B02', 'I + G (20kg) POLOS (M 201800)', 'BAG', '20', 'KG', 'I+G', 'NUCLEOTIDE', 'BNSD', '2016-05-10 03:23:58', '2016-05-10 03:23:58');

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
  `customer_ktg` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `customer_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `desc1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desc2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
('DO20160503A002', '150060 ', 'BMPF171025', '0', '250', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('DO20160504A001', '150060 ', 'BMPF171025', '0', '250', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('DO20160504A002', '107609 ', 'AAAF160410', '0', '233', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Trigger `ss_dodetail`
--
DELIMITER $$
CREATE TRIGGER `TG_DO` AFTER INSERT ON `ss_dodetail` FOR EACH ROW BEGIN

 UPDATE ss_inventory
     SET good_qty_bag = good_qty_bag - NEW.qty_bag ,result_bag = good_qty_bag
   WHERE lot_number = NEW.lot_number;
END
$$
DELIMITER ;

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
('8888', '8888', 'DO20160503A002', '', '', '0000-00-00', 'bla bla', '2016-05-03 08:22:07', '2016-05-03 08:22:07'),
('8888', '8888', 'DO20160504A001', '', '', '0000-00-00', '', '2016-05-04 02:28:23', '2016-05-04 02:28:23'),
('8888', '8888', 'DO20160504A002', '', '', '0000-00-00', '', '2016-05-04 03:40:26', '2016-05-04 03:40:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ss_invdaily`
--

CREATE TABLE `ss_invdaily` (
  `id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plant` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `material_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lot_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `in_daily_qty` decimal(25,0) NOT NULL,
  `out_daily_qty` decimal(25,0) NOT NULL,
  `storage` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date_ym` date NOT NULL,
  `status` enum('G','B') COLLATE utf8_unicode_ci NOT NULL,
  `remark` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `ss_invdaily`
--

INSERT INTO `ss_invdaily` (`id`, `company`, `plant`, `material_code`, `lot_number`, `in_daily_qty`, `out_daily_qty`, `storage`, `date_ym`, `status`, `remark`, `created_at`, `updated_at`) VALUES
('STO20160500001', '10', '1010', '154245', 'BMSF160511', '123', '0', '', '2016-05-11', 'G', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('STO20160500001', '10', '1010', '154245', 'BMSF160511', '2', '0', '', '2016-05-11', 'B', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('STO20160500002', '10', '1010', '162705', 'BNSC160513', '124', '0', '', '2016-05-11', 'G', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('STO20160500002', '10', '1010', '162705', 'BNSC160513', '1', '0', '', '2016-05-11', 'B', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('STO20160500003', '10', '1010', '162705', 'BNSC160513', '255', '0', '', '2016-05-11', 'G', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('STO20160500003', '10', '1010', '162705', 'BNSC160513', '5', '0', '', '2016-05-11', 'B', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Trigger `ss_invdaily`
--
DELIMITER $$
CREATE TRIGGER `TG_INV_MONTHLY` AFTER INSERT ON `ss_invdaily` FOR EACH ROW BEGIN
SET @INVENT=(SELECT COUNT(*) FROM SS_INVMONTHLY WHERE (LOT_NUMBER=NEW.LOT_NUMBER) AND (MATERIAL_CODE=NEW.MATERIAL_CODE));
IF @INVENT=0 THEN
INSERT INTO SS_INVMONTHLY (COMPANY,PLANT,MATERIAL_CODE,LOT_NUMBER,BEGIN_QTY,IN_QTY,OUT_QTY,END_QTY) VALUES (NEW.COMPANY,NEW.PLANT,NEW.MATERIAL_CODE,NEW.LOT_NUMBER,0,NEW.IN_DAILY_QTY,NEW.OUT_DAILY_QTY,(BEGIN_QTY+IN_QTY)-OUT_QTY);
ELSE
UPDATE SS_INVMONTHLY SET IN_QTY = IN_QTY + NEW.in_daily_qty, OUT_QTY = OUT_QTY + NEW.out_daily_qty, END_QTY = (IN_QTY+BEGIN_QTY) - OUT_QTY
WHERE LOT_NUMBER = NEW.lot_number AND MATERIAL_CODE = NEW.material_code;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ss_invmonthly`
--

CREATE TABLE `ss_invmonthly` (
  `company` varchar(8) DEFAULT NULL,
  `plant` varchar(8) DEFAULT NULL,
  `material_code` varchar(20) DEFAULT NULL,
  `lot_number` varchar(20) DEFAULT NULL,
  `begin_qty` decimal(25,0) DEFAULT NULL,
  `in_qty` decimal(25,0) DEFAULT NULL,
  `out_qty` decimal(25,0) DEFAULT NULL,
  `end_qty` decimal(25,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ss_invmonthly`
--

INSERT INTO `ss_invmonthly` (`company`, `plant`, `material_code`, `lot_number`, `begin_qty`, `in_qty`, `out_qty`, `end_qty`) VALUES
('10', '1010', '154245', 'BMSF160511', '0', '127', '0', '127'),
('10', '1010', '162705', 'BNSC160513', '0', '385', '0', '385');

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
(14, '8888', '8888', '2016-05-25', '2016-05-25', 'Jombang', '2016-05-25', '5211212112', '2016-05-25', '500002', 'Indofood Cikampek-BP', '150060', 'MSG Powder Jombang (25kg) MI-POONG', '1000', '12000.00', '12000000.00', '13200000.00', '', '0000-00-00', '', '', '0.00', '2016-05-03 11:26:09', '2016-05-02 19:51:09'),
(16, '8888', '8888', '2016-05-09', '0000-00-00', 'CJ-KX-JKT', '2016-05-09', '4502679618', '2016-04-19', '500015', 'Essence', '150060', 'MSG Powder Jombang (25kg) MI-POONG', '4000', '18500.00', '74000000.00', '81400000.00', '', '0000-00-00', '', '', '0.00', '2016-05-03 19:22:17', '2016-05-03 19:22:17'),
(17, '8888', '8888', '2016-05-19', '2016-05-20', 'CJ-KX-JKT', '2016-05-19', '3456789067', '2016-04-09', '500015', 'Essence', '150060', 'MSG Powder Jombang (25kg) MI-POONG', '4000', '18500.00', '74000000.00', '81400000.00', '', '0000-00-00', '', '', '0.00', '2016-05-03 20:32:27', '2016-05-03 20:32:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tx_itemin`
--

CREATE TABLE `tx_itemin` (
  `company` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plant` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_transaksi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `storage` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date_ym` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_create` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_update` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tx_itemin`
--

INSERT INTO `tx_itemin` (`company`, `plant`, `id_transaksi`, `storage`, `date_ym`, `remark`, `created_at`, `user_create`, `updated_at`, `user_update`) VALUES
('10', '1010', 'STO20160500001', '8003', '201605', '', '2016-05-11 09:18:30', '', '2016-05-11 09:18:30', ''),
('10', '1010', 'STO20160500002', '8001', '201605', '', '2016-05-11 09:19:56', '', '2016-05-11 09:19:56', ''),
('10', '1010', 'STO20160500003', '8003', '201605', '', '2016-05-11 09:23:37', '', '2016-05-11 09:23:37', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tx_itemindetail`
--

CREATE TABLE `tx_itemindetail` (
  `id_transaksi` varchar(20) NOT NULL,
  `material_code` varchar(15) NOT NULL,
  `lot_number` varchar(15) NOT NULL,
  `qty` decimal(25,0) NOT NULL,
  `status` enum('G','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tx_itemindetail`
--

INSERT INTO `tx_itemindetail` (`id_transaksi`, `material_code`, `lot_number`, `qty`, `status`) VALUES
('STO20160500001', '154245', 'BMSF160511', '123', 'G'),
('STO20160500001', '154245', 'BMSF160511', '2', 'B'),
('STO20160500002', '162705', 'BNSC160513', '124', 'G'),
('STO20160500002', '162705', 'BNSC160513', '1', 'B'),
('STO20160500003', '162705', 'BNSC160513', '255', 'G'),
('STO20160500003', '162705', 'BNSC160513', '5', 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `company` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plant` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `emp_ktg` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `employee_code` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `employee_name` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `viewer` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`company`, `plant`, `emp_ktg`, `employee_code`, `employee_name`, `email`, `password`, `viewer`, `remember_token`, `created_at`, `updated_at`) VALUES
('10', '1010', 'B2B01', '123456', 'SUPER ADMIN', 'superadmin@cj.co.id', '$2y$10$4Q8DK43mNbhpuA/OPGY.febnhm1aNS54S0CdD967nBweNEKE6nnKm', 'A', NULL, '2016-05-10 01:23:50', '2016-05-10 01:23:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cd_code`
--
ALTER TABLE `cd_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd_material`
--
ALTER TABLE `cd_material`
  ADD PRIMARY KEY (`material_code`);

--
-- Indexes for table `ss_customers`
--
ALTER TABLE `ss_customers`
  ADD PRIMARY KEY (`customer_code`);

--
-- Indexes for table `ss_domaster`
--
ALTER TABLE `ss_domaster`
  ADD PRIMARY KEY (`do_no`);

--
-- Indexes for table `ss_po`
--
ALTER TABLE `ss_po`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tx_itemin`
--
ALTER TABLE `tx_itemin`
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
-- AUTO_INCREMENT for table `cd_code`
--
ALTER TABLE `cd_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `ss_po`
--
ALTER TABLE `ss_po`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
