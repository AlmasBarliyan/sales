-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 04 Mei 2016 pada 09.11
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `cj_kantin`
--
CREATE DATABASE IF NOT EXISTS `cj_kantin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cj_kantin`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `inv_daily`
--

CREATE TABLE IF NOT EXISTS `inv_daily` (
  `id` varchar(20) DEFAULT NULL,
  `daily_date` date DEFAULT NULL,
  `itm_company` varchar(8) DEFAULT NULL,
  `itm_plant` varchar(8) DEFAULT NULL,
  `itm_code` varchar(20) DEFAULT NULL,
  `shift_codedaily` varchar(8) DEFAULT NULL,
  `in_daily_qty` decimal(10,2) DEFAULT '0.00',
  `in_daily_price` decimal(10,2) DEFAULT '0.00',
  `out_daily_qty` decimal(10,2) DEFAULT '0.00',
  `out_daily_price` decimal(10,2) DEFAULT '0.00',
  `order_daily_qty` decimal(10,2) DEFAULT '0.00',
  `order_daily_price` decimal(10,2) DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inv_daily`
--

INSERT INTO `inv_daily` (`id`, `daily_date`, `itm_company`, `itm_plant`, `itm_code`, `shift_codedaily`, `in_daily_qty`, `in_daily_price`, `out_daily_qty`, `out_daily_price`, `order_daily_qty`, `order_daily_price`) VALUES
('GR20160400001', '2016-04-26', '10 ', '1020 ', 'CM200030', NULL, '5000.00', '15000.00', '0.00', '0.00', '-5000.00', '-15000.00'),
('GR20160400001', '2016-04-26', '10 ', '1020 ', 'CE200003', NULL, '5.00', '28000.00', '0.00', '0.00', '-5.00', '-28000.00'),
('GR20160400001', '2016-04-26', '10 ', '1020 ', 'CM200069', NULL, '10000.00', '5000.00', '0.00', '0.00', '-10000.00', '-5000.00'),
('PO20160400001', '2016-04-26', '10', '1020 ', 'CM200069', NULL, '0.00', '0.00', '0.00', '0.00', '10000.00', '5000.00'),
('PO20160400001', '2016-04-26', '10', '1020 ', 'CE200003', NULL, '0.00', '0.00', '0.00', '0.00', '5.00', '28000.00'),
('PO20160400001', '2016-04-26', '10', '1020 ', 'CM200030', NULL, '0.00', '0.00', '0.00', '0.00', '5000.00', '15000.00'),
('PO20160500001', '2016-05-01', '10', '1020 ', 'CM200030', NULL, '0.00', '0.00', '0.00', '0.00', '15000.00', '15000.00'),
('PO20160500001', '2016-05-01', '10', '1020 ', 'CM200001', NULL, '0.00', '0.00', '0.00', '0.00', '15000.00', '25000.00'),
('PO20160500001', '2016-05-01', '10', '1020 ', 'CE200003', NULL, '0.00', '0.00', '0.00', '0.00', '25.00', '1500.00'),
('PO20160500002', '2016-05-03', '10', '1020 ', 'CM200132', NULL, '0.00', '0.00', '0.00', '0.00', '50000.00', '900.00'),
('PO20160500002', '2016-05-03', '10', '1020 ', 'CM200069', NULL, '0.00', '0.00', '0.00', '0.00', '50000.00', '150.00'),
('PO20160500002', '2016-05-03', '10', '1020 ', 'CM200064', NULL, '0.00', '0.00', '0.00', '0.00', '500.00', '1500.00'),
('PO20160500003', '2016-05-03', '10', '1020 ', 'CE200002', NULL, '0.00', '0.00', '0.00', '0.00', '15.00', '1500000.00'),
('PO20160500004', '2016-05-04', '10', '1020 ', 'CM200010', NULL, '0.00', '0.00', '0.00', '0.00', '15000.00', '150000.00'),
('PO20160500004', '2016-05-04', '10', '1020 ', 'CM200005', NULL, '0.00', '0.00', '0.00', '0.00', '15000.00', '250000.00'),
('PO20160500004', '2016-05-04', '10', '1020 ', 'CM200008', NULL, '0.00', '0.00', '0.00', '0.00', '15000.00', '300000.00'),
('GR20160500001', '2016-05-04', '10 ', '1020 ', 'CM200064', NULL, '500.00', '1500.00', '0.00', '0.00', '-500.00', '-1500.00'),
('GR20160500001', '2016-05-04', '10 ', '1020 ', 'CM200069', NULL, '50000.00', '150.00', '0.00', '0.00', '-50000.00', '-150.00'),
('GR20160500001', '2016-05-04', '10 ', '1020 ', 'CM200132', NULL, '50000.00', '900.00', '0.00', '0.00', '-50000.00', '-900.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inv_monthly`
--

CREATE TABLE IF NOT EXISTS `inv_monthly` (
  `monthly_date` varchar(8) DEFAULT NULL COMMENT '2016-04',
  `itm_company` varchar(8) DEFAULT NULL,
  `itm_plant` varchar(8) DEFAULT NULL,
  `itm_code` varchar(8) DEFAULT NULL,
  `bgn_monthly_qty` decimal(10,2) DEFAULT '0.00',
  `bgn_monthly_amt` decimal(10,2) DEFAULT '0.00',
  `in_monthly_qty` decimal(10,2) DEFAULT '0.00',
  `in_monthly_amt` decimal(10,2) DEFAULT '0.00',
  `out_monthly_qty` decimal(10,2) DEFAULT '0.00',
  `out_monthly_amt` decimal(10,2) DEFAULT '0.00',
  `end_monthly_qty` decimal(10,2) DEFAULT '0.00',
  `end_monthly_amt` decimal(10,2) DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `inv_price`
--

CREATE TABLE IF NOT EXISTS `inv_price` (
  `month_date` varchar(8) DEFAULT NULL,
  `itm_comp` varchar(8) DEFAULT NULL,
  `itm_plant` varchar(8) DEFAULT NULL,
  `itm_code` varchar(20) DEFAULT NULL,
  `itm_priceavg` decimal(10,2) DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bankvnd`
--

CREATE TABLE IF NOT EXISTS `tb_bankvnd` (
  `id_bank` int(11) NOT NULL AUTO_INCREMENT,
  `vnd_code` varchar(10) DEFAULT NULL,
  `bank_code` varchar(8) DEFAULT NULL,
  `bank_account` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id_bank`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tb_bankvnd`
--

INSERT INTO `tb_bankvnd` (`id_bank`, `vnd_code`, `bank_code`, `bank_account`) VALUES
(7, '200001', 'CASH', '-'),
(8, '200002', 'CASH', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_code`
--

CREATE TABLE IF NOT EXISTS `tb_code` (
  `hcode` varchar(8) NOT NULL,
  `code` varchar(8) NOT NULL,
  `code_name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `use_yn` varchar(2) DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_code`
--

INSERT INTO `tb_code` (`hcode`, `code`, `code_name`, `description`, `class`, `use_yn`) VALUES
('CA01', '*', 'COMPANY CODE', '', '', 'Y'),
('CA01', '10', 'PT. CHEIL JEDANG INDONESIA', '', '', 'Y'),
('CA02', '*', 'PLANT CODE', '', '', 'Y'),
('CA02', '1010', 'CJI JAKARTA', '', '', 'Y'),
('CA02', '1020', 'CJI PASURUAN', '', '', 'Y'),
('CA02', '1030', 'CJI JOMBANG', '', '', 'Y'),
('UOM', 'UOM011', 'GLN', 'GALON', 'ML', 'Y'),
('UOM', 'UOM010', 'TBG', 'TABUNG', 'G', 'Y'),
('UOM', 'UOM009', 'JRG', 'JRIGEN', 'ML', 'Y'),
('UOM', 'UOM008', 'SCT', 'SACHET', 'EA', 'Y'),
('UOM', 'UOM007', 'BOX', 'BOX', 'ONS', 'Y'),
('UOM', 'UOM006', 'BTL', 'BOTOL', '', 'Y'),
('UOM', 'UOM005', 'ONS', 'ONS', '', 'Y'),
('UOM', 'UOM004', 'PACK', 'PACKING', '', 'Y'),
('UOM', 'UOM003', 'EA', 'EA / PCS', '', 'Y'),
('UOM', 'UOM002', 'G', 'GRAM', '', 'Y'),
('IKG', '*', 'ITEM CATEGORY', '', '', 'Y'),
('IKG', 'CM', 'CANTEEN MATERIAL', '', '', 'Y'),
('BANK', '*', 'BANK CODE', '', '', 'Y'),
('BANK', 'BCA', 'BANK CENTRAL ASIA', '', '', 'Y'),
('BANK', 'MND', 'BANK MANDIRI', '', '', 'Y'),
('BANK', 'CIMB', 'BANK CIMB NIAGA', '', '', 'Y'),
('BANK', 'BNI', 'BANK BNI', '', '', 'Y'),
('BANK', 'BRI', 'BANK BRI', '', '', 'Y'),
('BANK', 'BII', 'BANK BII', '', '', 'Y'),
('PAY', '* ', 'PAYMENT METHOD', '', '', 'Y'),
('PAY', 'CASH', 'CASH', '', '', 'Y'),
('PAY', 'TRF', 'TRANSFER', '', '', 'Y'),
('UOM', 'UOM013', 'UNIT', 'UNIT', '', 'Y'),
('IKG ', 'CE', 'CANTEEN EQUIPMENT', '', '', 'Y'),
('UOM', 'UOM012', 'BAG', 'BAG', '', 'Y'),
('IKG ', 'CN', 'CANTEEN MENU', '', '', 'Y'),
('UOM', 'UOM001', 'KG', 'KILO GRAM', '', 'Y'),
('UOM', '*', 'UNIT OFF MEASURE ', '', '', 'Y'),
('UOM', 'UOM014', 'SET', 'SET', '', 'Y'),
('SPC', '*', 'SUSPEN CATEGORY', '', '', 'Y'),
('SPC', 'SPC01', 'KANTIN', '', '', 'Y'),
('SPC', 'SPC02', 'NON KANTIN', '', '', 'Y'),
('ITP', 'CM002', 'SEMBAKO', '', '', 'Y'),
('ITP', 'CM001', 'LAUK', '', '', 'Y'),
('ITP', '*', 'ITEM TYPE', '', '', 'Y'),
('*', 'ITEM TYP', '', '', '', 'Y'),
('ITP', 'CM006', 'LAIN-LAIN', '', '', 'Y'),
('ITP', 'CE001', 'CANTEEN EQUIP', '', '', 'Y'),
('ITP', 'CM005', 'SAYUR', '', '', 'Y'),
('ITP', 'CM004', 'BUMBU', '', '', 'Y'),
('ITP', 'CM003', 'BUAH', '', '', 'Y'),
('SFT', '*', 'SHIFT CODE', '', '', 'Y'),
('SFT', 'SFT001', 'SHIFT 1', '', '', 'Y'),
('SFT', 'SFT002', 'SHIFT 2', '', '', 'Y'),
('SFT', 'SFT003', 'SHIFT 3', '', '', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_item`
--

CREATE TABLE IF NOT EXISTS `tb_item` (
  `itm_company` varchar(8) DEFAULT NULL,
  `itm_plant` varchar(8) DEFAULT NULL,
  `itm_ktg` varchar(8) DEFAULT NULL,
  `itm_type` varchar(8) DEFAULT NULL,
  `itm_code` varchar(10) NOT NULL DEFAULT '',
  `itm_name` varchar(50) DEFAULT NULL,
  `um` varchar(10) DEFAULT NULL,
  `uom` varchar(10) DEFAULT NULL,
  `size` decimal(10,2) DEFAULT '0.00',
  `blok_item` varchar(2) DEFAULT 'N',
  `itm_sapcode` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`itm_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_item`
--

INSERT INTO `tb_item` (`itm_company`, `itm_plant`, `itm_ktg`, `itm_type`, `itm_code`, `itm_name`, `um`, `uom`, `size`, `blok_item`, `itm_sapcode`) VALUES
('10', '1020', 'CM', 'CM001', 'CM200001', 'AYAM', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200002', 'DAGING SAPI', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200003', 'DAGING KAMBING', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200004', 'TELUR AYAM', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200005', 'IKAN BANDENG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200006', 'IKAN GURAMI', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200007', 'IKAN MUJAIR', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200008', 'IKAN NILA', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200009', 'IKAN KUNIRAN', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200010', 'IKAN BAWAL', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200011', 'IKAN CUMI - CUMI', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200012', 'IKAN KAKAP FILET', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200013', 'IKAN TONGKOL', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200014', 'IKAN TUNA', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200015', 'IKAN TRASAK', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200016', 'TELUR PUYUH', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200017', 'TAHU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200018', 'TEMPE', 'LEMBAR', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200019', 'BEBEK', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200020', 'UDANG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200021', 'KERANG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200022', 'TELUR ASIN', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200023', 'TAHU MALANG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200024', 'TAHU KUNING', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200025', 'SOSIS', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200026', 'BAKSO', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200027', 'MIE SPAGETY', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200028', 'CECEK', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM001', 'CM200029', 'CINGUR', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200030', 'BERAS', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200031', 'MINYAK GORENG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200032', 'MIE BURUNG DARA', 'BALL', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200033', 'SUUN', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200034', 'BIHUN JAGUNG', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200035', 'KRUPUK UDANG BESAR', 'BALL', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200036', 'KRUPUK UDANG KECIL', 'BALL', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200037', 'KRUPUK PASAR', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200038', 'KACANG TANAH', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200039', 'KACANG HIJAU', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200040', 'SUSU KALENG', 'KALENG', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200041', 'SIRUP MARJAN', 'BOTOL', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200042', 'SIRUP ABC LECI', 'BOTOL', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200043', 'SIRUP POHON PINANG', 'BOTOL', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200044', 'MISOA', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200045', 'FLORIDINA', 'BOTOL', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200046', 'ESTE', 'BOTOL', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200047', 'ROTI', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200048', 'MENTEGA', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200049', 'KULIT PANGSIT', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200050', 'CINCAU', 'BAK', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200051', 'AGAR-AGAR', 'BAK', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200052', 'DEGAN', 'BUAH', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200053', 'JELY', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200054', 'TEPUNG TERIGU', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200055', 'TEPUNG BERAS', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200056', 'TEPUNG KANJI', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200057', 'TEH CELUP', 'KOTAK', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200058', 'KOPI NESCAFE BOTOL', 'BOTOL', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200059', 'COFFE MIX', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200060', 'AIR MINUM GELAS', 'BOX', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM002', 'CM200061', 'POCARI 350 ML', 'BOTOL', 'ML', '350.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200062', 'APEL FUJI', 'BOX', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200063', 'APEL NEWZELAND', 'BOX', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200064', 'BUAH NAGA MERAH', 'BOX', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200065', 'BELIMBING', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200066', 'MELON', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200067', 'PISANG', 'SISIR', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200068', 'RAMBUTAN', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200069', 'SALAK', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200070', 'PEPAYA', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200071', 'PIER', 'BOX', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200072', 'SEMANGKA', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200073', 'PANCAKE DURIAN', 'BIJI', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200074', 'ANGGUR MERAH', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM003', 'CM200075', 'KLENGKENG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200076', ' BWG . MERAH', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200077', ' BWG . PUTIH', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200078', ' CABE KECIL HIJAU', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200079', ' CABE KECIL MERAH', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200080', ' CABE BESAR HIJAU', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200081', ' CABE BESAR MERAH', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200082', ' JAHE', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200083', ' KENCUR', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200084', ' KUNIR', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200085', ' LENGKUAS', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200086', ' ASAM', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200087', ' KUNCI', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200088', ' DAUN JERUK PURUT', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200089', ' BWG . DAUN', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200090', ' LONCANG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200091', ' DAUN SALAM', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200092', ' SERE', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200093', ' JERUK NIPIS', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200094', ' KETUMBAR', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200095', ' MRICA', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200096', ' GARAM 250 GR', 'KG', 'G', '250.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200097', ' POLO', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200098', ' MASAKO 250gr', 'SACHET', 'G', '250.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200099', ' MASITA', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200100', ' GULA PASIR', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200101', ' GULA MERAH', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200102', ' KECAP MANIS DORANG', 'BOTOL', 'ML', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200103', ' KECAP BLACK GOLD      500 ml', 'BUNGKUS', 'ML', '500.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200104', ' KECAP ASIN   620 ml', 'BOTOL', 'ML', '625.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200105', ' KECAP INGGRIS     195 ML', 'BOTOL', 'ML', '195.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200106', ' SAOS TIRAM      195 ML', 'BOTOL', 'ML', '195.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200107', '  RAJA RASA 600   ml', 'BOTOL', 'ML', '600.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200108', ' CUKA    600   ml', 'BOTOL', 'ML', '600.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200109', ' MINYAK WIJEN                 ', 'BOTOL', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200110', 'PETIS KUPANG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200111', ' KEMIRI', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200112', ' JINTEN', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200113', ' KAYU MANIS', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200114', ' TERASI', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200115', ' MRICA HITAM', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200116', ' CENGKEH', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200117', ' KLABET', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200118', ' TOMAT', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200119', ' TOMAT MENGKAL', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200120', 'SANTAN KELATU', 'KOTAK', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200121', 'SANTAN KARA kotak', 'KOTAK', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200122', 'BWG. BOMBAY', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200123', 'PETIS MANIS', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200124', 'PETIS ENAK', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200125', 'SAOS TOMAT ABC', 'JURIGEN', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM004', 'CM200126', 'SAOS SAMBAL ABC ', 'JURIGEN', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200127', 'ARCIS', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200128', 'BROKOLI', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200129', 'BAYAM', 'IKAT', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200130', 'KACANG PANAJNG', 'IKAT', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200131', 'LABU SIAM', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200132', 'JAGUNG MANIS', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200133', 'BUNCIS', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200134', 'KANGKUNG', 'IKAT', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200135', 'KENTANG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200136', 'D. SINGKONG', 'IKAT', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200137', 'KOOL', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200138', 'NANGKA MUDA', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200139', 'D .SOO', 'IKAT', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200140', 'SAWI HIJAU', 'IKAT', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200141', 'SAWI PUTIH', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200142', 'JAMUR KUPING', 'ONS', 'ONS', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200143', 'JAMUR TIRAM', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200144', 'TERONG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200145', 'WORTEL', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200146', 'TAOGE PANJANG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200147', 'TAOGE PENDEK', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200148', 'PHOKCOY', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200149', 'O Y O N G', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200150', 'KEMANGI', 'IKAT', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200151', 'KRAI', 'BUAH', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200152', 'TIMUN', 'BUAH', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200153', 'MAKARONI', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200154', 'SELADRI', 'IKAT', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200155', 'SELADA', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200156', 'SLADA AIR', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200157', 'KACANG TOLO PUTIH', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200158', 'NANAS', 'BIJI', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200159', 'ANDEWI', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM005', 'CM200160', 'LONTONG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200161', 'TISSUE ', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200162', 'TUSUK GIGI', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200163', 'TUSUK SATE', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200164', 'SARUNG TANGAN PLASTIK', 'KOTAK', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200165', 'KARET GELANG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200166', 'PLASTIK SAMPAH', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200167', 'TAS KRESEK BESAR', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200168', 'TAS KRESEK TANGGUNG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200169', 'TAS KRESEK KECIL', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200170', 'PLASTIK UKURAN 1/4 KG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200171', 'PLASTIK UKURAN 1/2 KG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200172', 'PLASTIK UKURAN 1 KG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200173', 'LEM LALAT', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200174', 'SABUN CUCI MAMA LEMON', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200175', 'SPON CUCI', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200176', 'KAWAT CUCI', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200177', 'ARANG', 'KG', 'G', '1000.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200178', 'ES BATU', 'BIJI', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200179', 'DAUN PISANG', 'LEMBAR', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200180', 'DAUN PANDAN', 'IKAT', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200181', 'PEWARNA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200182', 'BIJI SELASIH', 'ONS', 'ONS', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200183', 'KOTAK NASI', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200184', 'MIKA IKAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200185', 'SENDOK PLASTIK', 'DOSIN', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200186', 'PLASTIK CLIP 8X5 CM', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200187', 'PLASTIK 7 X 10', 'BUNGKUS', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CM', 'CM006', 'CM200188', 'KOTAK NASI FOAM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200001', 'AIR CONDITIONING', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200002', 'ALUMINIUM FOIL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200003', 'AYAKAN TEPUNG BSR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200004', 'BALLER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200005', 'BALOON WISK BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200006', 'BALOON WISK SEDANG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200007', 'BASKET SAYUR BIRU, GREENLEAF', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200008', 'BASKET SAYUR BULAT SEDANG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200009', 'BASKET SAYUR MERAH', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200010', 'BASKET SENDOK KOTOR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200011', 'BASKOM KUPING 24 LTR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200012', 'BLENDER PANASONIC', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200013', 'BLENDER PHILIP', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200014', 'BOILING PAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200015', 'BUKU,  BLUDER…….', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200016', 'BUKU,  KUE INDONESIA POPULER…..', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200017', 'BUKU,  MENU SARAPAN……..', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200018', 'BUKU, ''30 MENU U/ 1 BULAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200019', 'BUKU, CAKE DECORATING', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200020', 'BUKU, CUPCAKE FAVORIT', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200021', 'BUKU, CUPCAKE HIAS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200022', 'BUKU, EATING IN PARADISE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200023', 'BUKU, FOOD PHOTOGRAPHY', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200024', 'BUKU, HIDANGAN DAGING ALA RESTO', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200025', 'BUKU, KITAB MASAKAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200026', 'BUKU, KUE POPULER OLEH OLEH KHAS BANDUNG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200027', 'BUKU, MAJALAH SELERA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200028', 'BUKU, MASAKAN INDONESIA U/ JAMUAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200029', 'BUKU, MENU PESTA CHINESSE FOOD', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200030', 'BUKU, RAGAM KREASI TUMPENG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200031', 'BUKU, RESEP RAHASIA ALA MC.D', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200032', 'BUKU, SENI LIPAT DAUN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200033', 'BUKU, SNACK ALA JEPANG……', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200034', 'BUKU, VARIASI MASAKAN PEDAS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200035', 'BUKU, WARISAN KULINER KERATON', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200036', 'BUKU, WINDOWS 7 UNTUK PEMULA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200037', 'BUTANE FUEL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200038', 'CEMPAL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200039', 'CENTHING NASI KAYU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200040', 'CETAKAN APEM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200041', 'CETAKAN DONUT BSR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200042', 'CETAKAN ES BATU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200043', 'CETAKAN LEMPER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200044', 'CETAKAN LONTONG ALUMINIUM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200045', 'CETAKAN MARTABAK MANIS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200046', 'CETAKAN NASI KOTAK', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200047', 'CETAKAN OVAL KCL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200048', 'CETAKAN SERABI SOLO', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200049', 'CETAKAN TUMPENG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200050', 'CHILLER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200051', 'CIKRAK', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200052', 'COBEK GLUGU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200053', 'COFFE MAKER,  VOL 7LTR', 'SET', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200054', 'CONTAINER BAKSO BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200055', 'CONTAINER BAKSO SEDANG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200056', 'CONTAINER BUAH BSR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200057', 'CONTAINER DAGING KECIL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200058', 'CONTAINER DAGING MENTAH', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200059', 'COOKIE MOULD, ALM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200060', 'COOKIE MOULD, ANIMAL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200061', 'CORONG KECIL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200062', 'DANDANG ALM BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200063', 'DISPENSER PRIMA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200064', 'CUTTING BOARD/TELENAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200065', 'DRESSING POT BSR / BOTOL KECAP', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200066', 'DRESSING POT KCL / BOTOL SAUCE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200067', 'EMERGENCY LAMP SUNPRO', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200068', 'EMERGENCY LAMP YAMASTAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200069', 'FLY SWATTER, PEMUKUL LALAT', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200070', 'FREZZER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200071', 'GARPU BUAH DOLL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200072', 'GARPU DESSERT PLASTIK', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200073', 'GARPU MAKAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200074', 'GARPU MIKA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200075', 'GARPU SERVING', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200076', 'GAYUNG SS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200077', 'GELAS GAGANG 400ML', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200078', 'GELAS M-150 PANJANG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200079', 'GELAS M-150 PENDEK', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200080', 'GELAS MINUM BELIMBING 200ML', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200081', 'GELAS MINUM TUMBLER 200ML', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200082', 'GELAS MINUM TUMBLER 400ML', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200083', 'GELAS UKUR 1 LTR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200084', 'GELAS UKUR MIKA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200085', 'GRILL PAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200086', 'GUBUKAN', 'SET', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200087', 'GUCI + KAKI SET', 'SET', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200088', 'ICE CREAM SCOOP / SENDOK ES CREAM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200089', 'ICEBOX', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200090', 'INOX, CAN OPENER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200091', 'JAPANESSE LUNCH BOX / BENTO', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200092', 'JELLYFUEL KALENG 12KG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200093', 'JUICE DISPENSER 2 BOWL', 'SET', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200094', 'JUICE DISPENSER 3 BOWL', 'SET', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200095', 'JUICE DISPENSER GEA LP-12X3', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200096', 'JUICER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200097', 'KIPAS ANGIN ( FAN ) MIYAKO', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200098', 'KIPAS ANGIN BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200099', 'KOMPOR 4 MATA ', 'SET', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200100', 'KOMPOR 6 MATA', 'SET', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200101', 'KOMPOR GAS PORTABLE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200102', 'KOMPOR HIGH PRESSURE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200103', 'KOMPOR SINGLE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200104', 'KUAS KECIL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200105', 'KULKAS MEJA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200106', 'KURSI MAKAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200107', 'LAYAH + MUNTU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200108', 'LILIN BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200109', 'LOYANG 18''', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200110', 'LOYANG SQUARE 30X30', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200111', 'MAGIC COM ', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200112', 'MANGKOK BASO BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200113', 'MANGKOK KUAH KCL (VANDA MELAMIN)', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200114', 'MANGKOK PIREX BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200115', 'MANGKOK PIREX SEDANG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200116', 'MANGKOK SOUP SERVING KUNING,BULAT', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200117', 'MANGKOK SOUP SERVING ORANGE, KOTAK', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200118', 'MANGKUK SAMBAL KNG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200119', 'MANGKUK SAMBAL PUTIH', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200120', 'MANGKUK SERVING BATU / KOM BATU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200121', 'MANGKUK SERVING GLASS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200122', 'MANGKUK SOUP SQUARE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200123', 'MEASURING SPOON', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200124', 'MEATBALL MAKER, PENCETAK BAKSO', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200125', 'MEJA MAKAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200126', 'MEJA PROSES/MEJA SAJI (BESAR/KECIL)', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200127', 'MENU SEHARI2 ALA CATERING, BUKU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200128', 'MENU TAG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200129', 'MIXER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200130', 'MIXING BOWL BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200131', 'MIXING BOWL BESAR HS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200132', 'MIXING BOWL SEDANG HS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200133', 'MIXING BOWL SEDANG RM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200134', 'OVEN KOMPOR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200135', 'OVEN LISTRIK KIRIN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200136', 'PAELLA WOK', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200137', 'PAN KUE BULAT ( CETAKAN POFERTJES )', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200138', 'PANCAKE RING', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200139', 'PANCI PENANAK NASI ALM SEDANG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200140', 'PANCI PRESTO ALM NAGAMI 20L', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200141', 'PANCI PRESTO 2LTR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200142', 'PANCI SAYUR ALM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200143', 'PANCI SAYUR BESAR SS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200144', 'PANCI SAYUR KECIL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200145', 'PANGGANGAN SATE LPG, TENNO', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200146', 'PASTA MAKER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200147', 'PEELER (SERUTAN KULIT)', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200148', 'PEL LANTAI', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200149', 'PERAJANG BAWANG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200150', 'LEPEK BUAH SQUARE, PUTIH (KERAMIK)', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200151', 'PIRING LIDI', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200152', 'PIRING MAKAN PUTIH 10''', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200153', 'PIRING MAKAN SQUARE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200154', 'PISAU ', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200155', 'PISAU 6"', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200156', 'PISAU 8"', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200157', 'PISAU BUAH', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200158', 'PISAU DAGING', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200159', 'PISAU DAGING KCL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200160', 'PISAU KECIL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200161', 'PISAU TART', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200162', 'PISAU UKIR ( SET )', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200163', 'PITCHER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200164', 'PITHCER MIKA BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200165', 'PIZZA CUTTER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200166', 'PLACE MATE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200167', 'PLASTIC SEGITIGA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200168', 'PLASTIC WRAP', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200169', 'PUNCH BOWL ACRILIC', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200170', 'RAK STAINLESS STEEL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200171', 'RANTANG ', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200172', 'RICE COOKER BESAR ( SET )', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200173', 'RICE WASHER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200174', 'ROUND CHAVING DISH ( SET )', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200175', 'SAPU LANTAI', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200176', 'SARINGAN U/ GORENG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200177', 'SARINGAN UDON', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200178', 'SARUNG TANGAN OVEN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200179', 'SCOOP TEPUNG SS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200180', 'SENDOK BEBEK CERAMIC', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200181', 'SENDOK ES DOLL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200182', 'SENDOK ES PRO', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200183', 'SENDOK GARPU GG MIKA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200184', 'SENDOK GARPU SS BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200185', 'SENDOK IKAN BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200186', 'SENDOK MAKAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200187', 'SENDOK MAKAN DOLL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200188', 'SENDOK NASI', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200189', 'SENDOK SAMBAL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200190', 'SENDOK SAYUR BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200191', 'SENDOK SAYUR GG PANJANG WRNA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200192', 'SENDOK SAYUR KECIL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200193', 'SENDOK SERVING', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200194', 'SEPET SILIKON BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200195', 'SERUTAN BESAR SS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200196', 'SERUTAN KELAPA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200197', 'SERUTAN MIKA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200198', 'SERUTAN SS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200199', 'SERUTAN WORTEL HAEMAJI', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200200', 'SERVING PLATE YIN YANG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200201', 'SIKAT', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200202', 'SODET BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200203', 'SODET KECIL BIASA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200204', 'SODET MIKA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200205', 'SODET SS INOX', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200206', 'SOROK PIRING', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200207', 'SOTIL BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200208', 'SOTIL KAYU BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200209', 'SOTIL KECIL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200210', 'SPICES CONTAINER, CONTAINER BUMBU', 'SET', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200211', 'SPICES TOPLES, TOPLES BUMBU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200212', 'SQUARE CHAVING DISH SET, BESAR', 'SET', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200213', 'SQUARE CHAVING DISH SET, KCL', 'SET', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200214', 'SQUARE TRAY SS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200215', 'STAND MANGKUK BATU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200216', 'STRAINER / PENIRIS BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200217', 'SUMPIT', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200218', 'SUMPIT PLATE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200219', 'SUNNEX, ICE WATER PITCHER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200220', 'SURYA, DONUT CUTTER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200221', 'TAMPAH PLASTIC', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200222', 'TANGKI AIR STAINLESS STEEL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200223', 'TAPLAK MEJA BATIK', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200224', 'TAPLAK MEJA CREAM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200225', 'TAPLAK MEJA KOTAK BIRU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200226', 'TAPLAK MEJA PUTIH', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200227', 'TART TIP SET', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200228', 'TEA SET ROYAL HERITAGE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200229', 'TEFFLON 26''', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200230', 'TEFLON 28"', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200231', 'TEMPAT FUEL JELLY CURAH', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200232', 'TEMPAT GARAM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200233', 'TEMPAT LADA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200234', 'TEMPAT SAMPAH', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200235', 'TEMPAT SEDOTAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200236', 'TEMPAT SENDOK SERVICE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200237', 'TEMPAT TISUE GLASS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200238', 'TEMPAT TISUE R. MAKAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200239', 'TEMPAT TISUE SS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200240', 'TEMPAT TUSUK GIGI CERAMIC', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200241', 'TEMPAT TUSUK GIGI GLASS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200242', 'TERMOS AIR PANAS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200243', 'TIMBA BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200244', 'TIMBANGAN 300KG CB BESI', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200245', 'TIMBANGAN DIGITAL 100GR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200246', 'TIMBANGAN DIGITAL 5 KG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200247', 'TIMBANGAN MANUAL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200248', 'TONG / JEPITAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200249', 'TOPLES KERAMIK BSR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200250', 'TOPLES KERAMIK SEDANG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200251', 'TOPLES STRAWBERRY', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200252', 'TOWEL PLATE KAYU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200253', 'TRAY BUAH BESAR DOFE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200254', 'TRAY BUAH BESAR SS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200255', 'TRAY PEMANAS SS BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200256', 'TRAY BULAT MELAMIN, PANDA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200257', 'TRAY BULAT SS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200258', 'TRAY BULAT STAND', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200259', 'TRAY GELAS BESAR 25PCS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200260', 'TRAY GELAS KECIL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200261', 'TRAY KECIL SS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200262', 'TRAY MAKAN MELAMIN PUTIH', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200263', 'TRAY MAKAN SS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200264', 'TRAY OVAL CERAMIC PUTIH', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200265', 'TRAY OVAL SS BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200266', 'TRAY OVAL SS KECIL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200267', 'TRAY PERSEGI ANTISLIP', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200268', 'TRAY PERSEGI CERAMIC', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200269', 'TRAY PERSEGI CERAMIC HJ', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200270', 'TRAY PERSEGI KAYU BSR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200271', 'TRAY PERSEGI KAYU KCL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200272', 'TRAY PERSEGI KAYU SDG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200273', 'TRAY PERSEGI KECIL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200274', 'TRAY PLASTIK KUKUS HIJAU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200275', 'TRAY TUSUK GIGI, BASKET ROTAN SINT', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200276', 'TROLI MAKANAN', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200277', 'TUTUP GELAS MIKA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200278', 'TV', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200279', 'WAJAN ALM 48CM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200280', 'WAJAN ALM 34 CM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200281', 'WAJAN ALM BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200282', 'WAJAN ANTI LENGKET SEDANG', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200283', 'WAJAN BESI 45CM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200284', 'WAJAN BESI BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200285', 'WAJAN BESI KECIL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200286', 'WAJAN KECIL SS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200287', 'WAJAN SEDANG ALM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200288', 'WASTAFEL SET', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200289', 'WIN REGULATOR HIGHPRESSURE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200290', 'WINE GLASS, DECORATIVE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200291', 'WINE GLASS, POLOS', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200292', 'YAMAHA, WATER PURIFIER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200293', 'WAKUL JUMBO ', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200294', 'BATU ASAH', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200295', 'PISAU (CHEF) ', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200296', 'PRESTO ALM. NAGAMI 20L', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200297', 'PERAJANG BRAMBANG MANUAL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200298', 'JAM DINDING', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200299', 'BLENDER YOUNGMA', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200300', 'MAGIC BLENDER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200301', 'WISHING KETLER', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200302', 'KIPAS ANGIN CJ', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200303', 'KIPAS ANGIN ATAP', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200304', 'SENDOK SAYUR S/S BESAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200305', 'MANGKOK SUP KERAMIK PUTIH KECIL', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200306', 'CANGKIR KERAMIK PUTIH', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200307', 'LEPEK (CANGKIR) KERAMIK PUTIH', 'SET', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200308', 'TRAY PERSEGI KACA BENING', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200309', 'WAJAN TANGGUNG ', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200310', 'CETAKAN CAKE O XONE', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200311', 'STAND MIXER SHARP', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200312', 'MANGKOK BUMBU BLENDER (KECIL)', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200313', 'LOYANG PLASTIK (MERAH+BIRU)', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200314', 'PISAU + GARPU STEAK', 'SET', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200315', 'LEPEK MELAMIN BIRU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200316', 'ALAS PIRING KAIN KOTAK-KOTAKBIRU', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200317', 'WAKUL ALUMINIUM', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200318', 'PICHER NUTRISARI', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200319', 'PANGGANGAN ROTI ELECTROLUX', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200320', 'PIRING HADIAH', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200321', 'MANGKOK AJINOMOTO', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200322', 'PIRING PUTIH BESAR (KERAMIK)', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200323', 'CONTAINER BUAH (PUTIH)', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200324', 'RICE COOKER ', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200325', 'TEMPAT SENDOK', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200326', 'ANGLO TEMBIKAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200327', 'COWEK BESAR TEMBIKAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200328', 'BASKOM TEMBIKAR', 'EA', 'EA', '1.00', 'N', NULL),
('10', '1020', 'CE', 'CE001', 'CE200329', 'GALON', 'GLN', 'EA', '1.00', 'N', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE IF NOT EXISTS `tb_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `tittle` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `menu_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `parent_id`, `tittle`, `url`, `menu_order`) VALUES
(1, 0, 'Admin', '#', 1),
(5, 0, 'Material Code', 'ms_material.php', 1),
(2, 1, 'Common Code', 'ms_code.php', 1),
(3, 1, 'Data Admin', 'ms_admin.php', 2),
(4, 1, 'Suplier Code', 'ms_suplier.php', 3),
(6, 0, 'Transaction', '#', 1),
(7, 6, 'Purchase Order', 'tx_purchase.php', 3),
(10, 6, 'Suspend', 'tx_suspend.php', 2),
(11, 6, 'Consumption', 'tx_consumption', 4),
(12, 0, 'Report', '#', 1),
(13, 12, 'Rpt.Try Distribution', 'rpt_trydist.php', 1),
(14, 6, 'Try Distribution', 'list-try.php', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE IF NOT EXISTS `tb_role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `empno` varchar(8) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `use_yn` varchar(2) DEFAULT NULL,
  `delete_yn` varchar(2) DEFAULT NULL,
  `add_yn` varchar(2) DEFAULT NULL,
  `edit_yn` varchar(2) DEFAULT NULL,
  `reset_yn` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `empno`, `id_menu`, `use_yn`, `delete_yn`, `add_yn`, `edit_yn`, `reset_yn`) VALUES
(1, '430050', 1, 'Y', 'Y', 'Y', 'Y', 'Y'),
(5, '430050  ', 5, 'Y', 'Y', 'Y', 'Y', 'Y'),
(3, '430050', 3, 'Y', 'Y', 'Y', 'Y', 'Y'),
(4, '430050', 4, 'Y', 'Y', 'Y', 'Y', 'Y'),
(6, '430024 ', 5, 'Y', 'N', 'Y', 'Y', 'N'),
(7, '430024 ', 1, 'Y', 'Y', 'Y', 'Y', 'Y'),
(8, '430024  ', 4, 'Y', 'Y', 'Y', 'Y', 'Y'),
(9, '430024 ', 6, 'Y', 'Y', 'Y', 'Y', 'Y'),
(10, '430050 ', 6, 'Y', 'Y', 'Y', 'Y', 'Y'),
(11, '430050 ', 2, 'Y', 'Y', 'Y', 'Y', 'Y'),
(12, '430050 ', 7, 'Y', 'Y', 'Y', 'Y', 'Y'),
(13, '430024 ', 7, 'Y', 'Y', 'Y', 'Y', 'Y'),
(14, '430050 ', 10, 'Y', 'Y', 'Y', 'Y', 'Y'),
(15, '430050 ', 11, 'Y', 'Y', 'Y', 'Y', 'Y'),
(16, '430050  ', 12, 'Y', 'Y', 'Y', 'Y', 'Y'),
(17, '430050  ', 13, 'Y', 'Y', 'Y', 'Y', 'Y'),
(18, '430050 ', 14, 'Y', 'Y', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tryusage`
--

CREATE TABLE IF NOT EXISTS `tb_tryusage` (
  `id_tray` varchar(20) DEFAULT NULL,
  `date_use` date DEFAULT NULL,
  `periode_use` varchar(35) DEFAULT NULL,
  `shift1` varchar(10) DEFAULT 'SFT001',
  `use_planqty1` decimal(10,2) DEFAULT '0.00',
  `use_actualqty1` decimal(10,2) DEFAULT '0.00',
  `shift2` varchar(10) DEFAULT 'SFT002',
  `use_plantqty2` decimal(10,2) DEFAULT '0.00',
  `use_actualqty2` decimal(10,2) DEFAULT '0.00',
  `shift3` varchar(10) DEFAULT 'SFT003',
  `use_plantqty3` decimal(10,2) DEFAULT '0.00',
  `use_actualqty3` decimal(10,2) DEFAULT '0.00',
  `shift4` varchar(10) DEFAULT NULL,
  `use_plantqty4` decimal(10,2) DEFAULT '0.00',
  `use_actualqty4` decimal(10,2) DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tryusage`
--

INSERT INTO `tb_tryusage` (`id_tray`, `date_use`, `periode_use`, `shift1`, `use_planqty1`, `use_actualqty1`, `shift2`, `use_plantqty2`, `use_actualqty2`, `shift3`, `use_plantqty3`, `use_actualqty3`, `shift4`, `use_plantqty4`, `use_actualqty4`) VALUES
('IC20160400001', '2016-05-01', '05/01/2016 - 05/10/2016', 'SFT001', '100.00', '100.00', 'SFT002', '200.00', '200.00', 'SFT003', '300.00', '300.00', 'SFT004', '0.00', '0.00'),
('IC20160400001', '2016-05-02', '05/01/2016 - 05/10/2016', 'SFT001', '100.00', '100.00', 'SFT002', '200.00', '200.00', 'SFT003', '300.00', '300.00', 'SFT004', '0.00', '0.00'),
('IC20160400001', '2016-05-03', '05/01/2016 - 05/10/2016', 'SFT001', '100.00', '100.00', 'SFT002', '200.00', '200.00', 'SFT003', '300.00', '300.00', 'SFT004', '0.00', '0.00'),
('IC20160400001', '2016-05-04', '05/01/2016 - 05/10/2016', 'SFT001', '100.00', '100.00', 'SFT002', '200.00', '200.00', 'SFT003', '300.00', '300.00', 'SFT004', '0.00', '0.00'),
('IC20160400001', '2016-05-05', '05/01/2016 - 05/10/2016', 'SFT001', '100.00', '100.00', 'SFT002', '200.00', '200.00', 'SFT003', '300.00', '300.00', 'SFT004', '0.00', '0.00'),
('IC20160400001', '2016-05-06', '05/01/2016 - 05/10/2016', 'SFT001', '100.00', '100.00', 'SFT002', '200.00', '200.00', 'SFT003', '300.00', '300.00', 'SFT004', '0.00', '0.00'),
('IC20160400001', '2016-05-07', '05/01/2016 - 05/10/2016', 'SFT001', '100.00', '100.00', 'SFT002', '200.00', '200.00', 'SFT003', '300.00', '300.00', 'SFT004', '0.00', '0.00'),
('IC20160400001', '2016-05-08', '05/01/2016 - 05/10/2016', 'SFT001', '100.00', '100.00', 'SFT002', '200.00', '200.00', 'SFT003', '300.00', '300.00', 'SFT004', '0.00', '0.00'),
('IC20160400001', '2016-05-09', '05/01/2016 - 05/10/2016', 'SFT001', '100.00', '100.00', 'SFT002', '200.00', '200.00', 'SFT003', '300.00', '300.00', 'SFT004', '0.00', '0.00'),
('IC20160400001', '2016-05-10', '05/01/2016 - 05/10/2016', 'SFT001', '100.00', '100.00', 'SFT002', '200.00', '200.00', 'SFT003', '300.00', '300.00', 'SFT004', '0.00', '0.00'),
('NC20160400002', '2016-05-04', '05/01/2016 - 05/10/2016', 'OTH001', '400.00', '0.00', 'SFT002', '0.00', '0.00', 'SFT003', '0.00', '0.00', NULL, '0.00', '0.00'),
('NC20160400002', '2016-05-03', '05/01/2016 - 05/10/2016', 'OTH001', '300.00', '0.00', 'SFT002', '0.00', '0.00', 'SFT003', '0.00', '0.00', NULL, '0.00', '0.00'),
('NC20160400002', '2016-05-02', '05/01/2016 - 05/10/2016', 'OTH001', '200.00', '0.00', 'SFT002', '0.00', '0.00', 'SFT003', '0.00', '0.00', NULL, '0.00', '0.00'),
('NC20160400002', '2016-05-01', '05/01/2016 - 05/10/2016', 'OTH001', '100.00', '150.00', 'SFT002', '0.00', '0.00', 'SFT003', '0.00', '0.00', NULL, '0.00', '0.00'),
('NC20160400002', '2016-05-05', '05/01/2016 - 05/10/2016', 'OTH001', '500.00', '0.00', 'SFT002', '0.00', '0.00', 'SFT003', '0.00', '0.00', NULL, '0.00', '0.00'),
('NC20160400002', '2016-05-06', '05/01/2016 - 05/10/2016', 'OTH001', '500.00', '0.00', 'SFT002', '0.00', '0.00', 'SFT003', '0.00', '0.00', NULL, '0.00', '0.00'),
('NC20160400002', '2016-05-07', '05/01/2016 - 05/10/2016', 'OTH001', '400.00', '0.00', 'SFT002', '0.00', '0.00', 'SFT003', '0.00', '0.00', NULL, '0.00', '0.00'),
('NC20160400002', '2016-05-08', '05/01/2016 - 05/10/2016', 'OTH001', '300.00', '0.00', 'SFT002', '0.00', '0.00', 'SFT003', '0.00', '0.00', NULL, '0.00', '0.00'),
('NC20160400002', '2016-05-09', '05/01/2016 - 05/10/2016', 'OTH001', '200.00', '0.00', 'SFT002', '0.00', '0.00', 'SFT003', '0.00', '0.00', NULL, '0.00', '0.00'),
('NC20160400002', '2016-05-10', '05/01/2016 - 05/10/2016', 'OTH001', '100.00', '0.00', 'SFT002', '0.00', '0.00', 'SFT003', '0.00', '0.00', NULL, '0.00', '0.00'),
('NC20160400003', '2016-05-11', '05/11/2016 - 05/13/2016', 'OTH001', '11.00', '0.00', 'SFT002', '0.00', '0.00', 'SFT003', '0.00', '0.00', NULL, '0.00', '0.00'),
('NC20160400003', '2016-05-12', '05/11/2016 - 05/13/2016', 'OTH001', '12.00', '0.00', 'SFT002', '0.00', '0.00', 'SFT003', '0.00', '0.00', NULL, '0.00', '0.00'),
('NC20160400003', '2016-05-13', '05/11/2016 - 05/13/2016', 'OTH001', '13.00', '0.00', 'SFT002', '0.00', '0.00', 'SFT003', '0.00', '0.00', NULL, '0.00', '0.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `empno` varchar(8) NOT NULL DEFAULT '',
  `name` varchar(100) DEFAULT NULL,
  `dept` varchar(8) DEFAULT NULL,
  `mail_user` varchar(50) DEFAULT NULL,
  `passwd` varchar(100) DEFAULT NULL,
  `company` varchar(6) DEFAULT NULL,
  `plant` varchar(6) DEFAULT NULL,
  `viewer_all` varchar(2) DEFAULT NULL,
  `photo_user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`empno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`empno`, `name`, `dept`, `mail_user`, `passwd`, `company`, `plant`, `viewer_all`, `photo_user`) VALUES
('430050', 'PETER AGUSTINUS', '11300', 'peter@cj.co.id', 'e10adc3949ba59abbe56e057f20f883e', '10', '1020', 'P', 'Penguins.jpg'),
('430024', 'Deny Widiyanto', NULL, 'deny_widiyanto@cj.co.id', '785d82dd88ccebb36642406efc1d6435', '10', '1020', 'P', 'Lighthouse.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_vendor`
--

CREATE TABLE IF NOT EXISTS `tb_vendor` (
  `company_vnd` varchar(8) NOT NULL DEFAULT '',
  `plant_vnd` varchar(8) NOT NULL DEFAULT '',
  `id_vnd` varchar(10) NOT NULL DEFAULT '',
  `nm_vnd` varchar(100) DEFAULT NULL,
  `address` text,
  `telp1_vnd` varchar(15) DEFAULT NULL,
  `telp2_vnd` varchar(15) DEFAULT NULL,
  `mail_vnd` varchar(35) DEFAULT NULL,
  `pay_method` varchar(25) DEFAULT NULL,
  `vat_yn` varchar(2) DEFAULT NULL,
  `vat_no` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id_vnd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_vendor`
--

INSERT INTO `tb_vendor` (`company_vnd`, `plant_vnd`, `id_vnd`, `nm_vnd`, `address`, `telp1_vnd`, `telp2_vnd`, `mail_vnd`, `pay_method`, `vat_yn`, `vat_no`) VALUES
('10', '1020 ', '200001', 'PASAR TRADINIONAL', 'PASURUAN PASAR TRADITIONAL', '-', '-', '-', 'CASH', 'N', NULL),
('10', '1020 ', '200002', 'SWALAYAN', '', '-', '-', '-', 'CASH', 'Y', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tx_ivmaster`
--

CREATE TABLE IF NOT EXISTS `tx_ivmaster` (
  `iv_no` varchar(20) NOT NULL DEFAULT '',
  `iv_date` date DEFAULT NULL,
  `po_no` varchar(20) DEFAULT NULL,
  `gr_no` varchar(20) DEFAULT NULL,
  `iv_ttlamount` decimal(10,2) DEFAULT '0.00',
  `iv_ppn` decimal(10,2) DEFAULT '0.00',
  `iv_disc` decimal(10,2) DEFAULT '0.00',
  `iv_netamt` decimal(10,2) DEFAULT '0.00',
  `pay_amt` decimal(10,2) DEFAULT '0.00',
  `rem_amt` decimal(10,2) DEFAULT '0.00',
  `create_emp` varchar(20) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `mod_emp` varchar(20) DEFAULT NULL,
  `mod_date` date DEFAULT NULL,
  PRIMARY KEY (`iv_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tx_podetail`
--

CREATE TABLE IF NOT EXISTS `tx_podetail` (
  `po_no` varchar(20) DEFAULT NULL,
  `itm_po` varchar(10) DEFAULT NULL,
  `po_qty` decimal(10,2) DEFAULT '0.00',
  `po_rcv` decimal(10,2) DEFAULT '0.00',
  `po_price` decimal(10,2) DEFAULT '0.00',
  `po_subtotal` decimal(10,2) DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tx_podetail`
--

INSERT INTO `tx_podetail` (`po_no`, `itm_po`, `po_qty`, `po_rcv`, `po_price`, `po_subtotal`) VALUES
('PO20160500002', 'CM200064', '500.00', '500.00', '1500.00', '750000.00'),
('PO20160500002', 'CM200069', '50000.00', '50000.00', '150.00', '7500.00'),
('PO20160500002', 'CM200132', '50000.00', '50000.00', '900.00', '45000.00'),
('PO20160500001', 'CM200030', '15000.00', '0.00', '15000.00', '225000.00'),
('PO20160500001', 'CM200001', '15000.00', '0.00', '25000.00', '375000.00'),
('PO20160500001', 'CE200003', '25.00', '0.00', '1500.00', '37500.00'),
('PO20160500003', 'CE200002', '15.00', '0.00', '100000.00', '1500000.00'),
('PO20160500004', 'CM200010', '15000.00', '0.00', '10000.00', '150000.00'),
('PO20160500004', 'CM200005', '15000.00', '0.00', '16666.67', '250000.00'),
('PO20160500004', 'CM200008', '15000.00', '0.00', '20000.00', '300000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tx_pomaster`
--

CREATE TABLE IF NOT EXISTS `tx_pomaster` (
  `po_comp` varchar(10) DEFAULT NULL,
  `po_plant` varchar(10) DEFAULT NULL,
  `po_no` varchar(20) NOT NULL DEFAULT '',
  `po_periode` varchar(35) DEFAULT NULL,
  `po_date` date DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `dlv_date` date DEFAULT NULL,
  `id_vnd` varchar(10) DEFAULT NULL,
  `po_ttlamt` decimal(10,2) DEFAULT '0.00',
  `po_disc` decimal(10,2) DEFAULT '0.00',
  `po_ppn` decimal(10,2) DEFAULT '0.00',
  `po_netamount` decimal(10,2) DEFAULT '0.00',
  `create_emp` varchar(8) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `mod_emp` varchar(8) DEFAULT NULL,
  `mod_date` date DEFAULT NULL,
  `status_po` varchar(2) DEFAULT 'N',
  PRIMARY KEY (`po_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tx_pomaster`
--

INSERT INTO `tx_pomaster` (`po_comp`, `po_plant`, `po_no`, `po_periode`, `po_date`, `pay_date`, `dlv_date`, `id_vnd`, `po_ttlamt`, `po_disc`, `po_ppn`, `po_netamount`, `create_emp`, `create_date`, `mod_emp`, `mod_date`, `status_po`) VALUES
('10', '1020 ', 'PO20160500002', '05/01/2016 - 05/10/2016', '2016-05-03', '2016-05-03', '2016-05-03', '200001 ', '802500.00', '0.00', '0.00', '802500.00', NULL, NULL, '430050', '2016-05-03', 'C'),
('10', '1020 ', 'PO20160500001', '05/01/2016 - 05/10/2016', '2016-05-01', '2016-05-03', '2016-05-03', '200001 ', '637500.00', '0.00', '0.00', '637500.00', NULL, NULL, '430050', '2016-05-03', 'N'),
('10', '1020 ', 'PO20160500003', '05/01/2016 - 05/10/2016', '2016-05-03', '2016-05-03', '2016-05-03', '200002 ', '100000.00', '0.00', '10000.00', '110000.00', NULL, NULL, '430050', '2016-05-03', 'N'),
('10', '1020 ', 'PO20160500004', '05/01/2016 - 05/10/2016', '2016-05-04', '2016-05-04', '2016-05-04', '200001 ', '46666.67', '0.00', '0.00', '46666.67', NULL, NULL, '430050', '2016-05-04', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tx_rcvdetail`
--

CREATE TABLE IF NOT EXISTS `tx_rcvdetail` (
  `gr_no` varchar(20) NOT NULL DEFAULT '',
  `gr_item` varchar(10) DEFAULT NULL,
  `gr_qty` decimal(10,2) DEFAULT '0.00',
  `gr_price` decimal(10,2) DEFAULT '0.00',
  `gr_subtotal` decimal(10,2) DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tx_rcvdetail`
--

INSERT INTO `tx_rcvdetail` (`gr_no`, `gr_item`, `gr_qty`, `gr_price`, `gr_subtotal`) VALUES
('GR20160400001', 'CM200030', '5000.00', '15000.00', '75000.00'),
('GR20160400001', 'CE200003', '5.00', '28000.00', '140000.00'),
('GR20160400001', 'CM200069', '10000.00', '5000.00', '50000.00'),
('GR20160500001', 'CM200064', '500.00', '1500.00', '750000.00'),
('GR20160500001', 'CM200069', '50000.00', '150.00', '7500.00'),
('GR20160500001', 'CM200132', '50000.00', '900.00', '45000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tx_rcvmaster`
--

CREATE TABLE IF NOT EXISTS `tx_rcvmaster` (
  `gr_no` varchar(20) NOT NULL DEFAULT '',
  `po_no` varchar(20) DEFAULT NULL,
  `gr_date` date DEFAULT NULL,
  `gr_ttlamt` decimal(10,2) DEFAULT '0.00',
  `gr_disc` decimal(10,2) DEFAULT '0.00',
  `gr_ppn` decimal(10,2) DEFAULT '0.00',
  `gr_netamt` decimal(10,2) DEFAULT '0.00',
  `gr_status` varchar(2) DEFAULT 'N',
  `create_emp` varchar(10) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `mod_emp` varchar(10) DEFAULT NULL,
  `mod_date` date DEFAULT NULL,
  PRIMARY KEY (`gr_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tx_rcvmaster`
--

INSERT INTO `tx_rcvmaster` (`gr_no`, `po_no`, `gr_date`, `gr_ttlamt`, `gr_disc`, `gr_ppn`, `gr_netamt`, `gr_status`, `create_emp`, `create_date`, `mod_emp`, `mod_date`) VALUES
('GR20160400001', 'PO20160400001', '2016-04-26', '265000.00', '0.00', '0.00', '265000.00', 'N', '430050', '2016-04-26', NULL, NULL),
('GR20160500001', 'PO20160500002', '2016-05-04', '802500.00', '0.00', '0.00', '802500.00', 'N', '430050', '2016-05-04', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tx_suspend`
--

CREATE TABLE IF NOT EXISTS `tx_suspend` (
  `susp_comp` varchar(10) DEFAULT NULL,
  `susp_plant` varchar(10) DEFAULT NULL,
  `id_susp` varchar(20) NOT NULL DEFAULT '',
  `periode_susp` varchar(35) DEFAULT NULL,
  `amt_susp` decimal(10,2) DEFAULT '0.00',
  `susp_date` date DEFAULT NULL,
  `remarks_susp` text,
  `create_emp` varchar(10) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `mod_emp` varchar(10) DEFAULT NULL,
  `mod_date` date DEFAULT NULL,
  PRIMARY KEY (`id_susp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tx_suspend`
--

INSERT INTO `tx_suspend` (`susp_comp`, `susp_plant`, `id_susp`, `periode_susp`, `amt_susp`, `susp_date`, `remarks_susp`, `create_emp`, `create_date`, `mod_emp`, `mod_date`) VALUES
('10', '1020', 'SP20160400001', '05/01/2016 - 05/10/2016', '96500000.00', '2016-05-01', NULL, '430050', '2016-04-25', NULL, NULL),
('10', '1020', 'SP20160400002', '05/11/2016 - 05/20/2016', '99999999.99', '2016-05-11', NULL, '430050', '2016-04-29', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tx_suspendtl`
--

CREATE TABLE IF NOT EXISTS `tx_suspendtl` (
  `id_susp` varchar(20) NOT NULL DEFAULT '',
  `susp_type` varchar(35) DEFAULT NULL,
  `susp_subtotal` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tx_suspendtl`
--

INSERT INTO `tx_suspendtl` (`id_susp`, `susp_type`, `susp_subtotal`) VALUES
('SP20160400001', 'Suspen Planing Periode 01-10 Mei 20', '91500000.00'),
('SP20160400001', 'Suspen G/A Avg FKK', '5000000.00'),
('SP20160400002', 'Pembelian periode ', '95000000.00'),
('SP20160400002', 'Avg G/A By FKK', '5000000.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
