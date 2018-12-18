-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2018 at 09:09 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fchmaintenance`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `productid` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `idphoto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`productid`, `photo`, `idphoto`) VALUES
(53, 'upload/motomop1.jpg', 1),
(53, 'upload/motomop2.jpg', 2),
(53, 'upload/motomop3.jpg', 3),
(53, 'upload/motomop4.jpg', 4),
(53, 'upload/motomop5.jpg', 5),
(53, 'upload/motomop6.jpg', 6),
(81, 'upload/bigberta.jpg', 13),
(52, 'upload/e85903-00_300x300_main.jpg', 15),
(90, 'upload/foreman.jpg', 16),
(65, 'upload/SC1500.jpg', 17),
(102, 'upload/bateria_trojan_j185e-ac.jpg', 18),
(102, 'upload/J185E-AC.jpg', 19),
(102, 'upload/photo5170546072517453800.jpg', 20),
(102, 'upload/TROJAN_J185E-AC-4.jpg', 21),
(103, 'upload/download.jpg', 22),
(67, 'upload/sc750.png', 23),
(62, 'upload/adfinity.png', 24),
(82, 'upload/027.jpg', 25),
(54, 'upload/SC100.png', 26),
(57, 'upload/SC250.jpg', 27),
(64, 'upload/SC3000.png', 28),
(58, 'upload/sc351.png', 29),
(60, 'upload/sc400.png', 30),
(61, 'upload/sc450.png', 31),
(68, 'upload/sc500.png', 32),
(55, 'upload/sc6000.png', 33),
(66, 'upload/sc800.png', 34),
(36, 'upload/e88398-00_300x300_main.jpg', 35),
(89, 'upload/e12314-00_300x300_main.jpg', 36),
(92, 'upload/e87028-00_300x300_main.jpg', 37),
(95, 'upload/1392302.jpg', 38),
(95, 'upload/AS430C2.jpg', 41),
(95, 'upload/AS430C-3.jpg', 42),
(95, 'upload/VF90428.jpg', 43),
(95, 'upload/Viper-AS430-510-2-900px.jpg', 44),
(95, 'upload/AS430C.jpg', 46),
(95, 'upload/AS430C1.jpg', 47),
(112, 'upload/_vyrp15_1063VIPER-AS530R.jpg', 48),
(112, 'upload/AS530_In_Use_3.jpg', 49),
(112, 'upload/AS530R_bumbers_800x.jpg', 50),
(112, 'upload/AS530R_squeegee_storage_1400x.jpg', 51),
(112, 'upload/as530r-back.jpg', 52),
(112, 'upload/AS530R-Micro-Rider-Automatic-Floor-Scrubber-LG7.jpg', 53),
(112, 'upload/as530r-ol-rt.jpg', 54),
(112, 'upload/as530r-steering-wheel.jpg', 55),
(112, 'upload/as530-scrubberdryer_800x.jpg', 56),
(112, 'upload/VIPER-AS530R-Aufsitz-Scheuersaugmaschine_b2.jpg', 57),
(112, 'upload/vr25022-pad-holder.jpg', 58),
(114, 'upload/1.png', 59),
(114, 'upload/2.png', 63),
(114, 'upload/3.png', 64),
(114, 'upload/4.png', 65),
(116, 'upload/105-FS-Eclipse_media.png', 66),
(117, 'upload/104-FS-Diamond-Shine_media.png', 67),
(118, 'upload/103-FS-Equinox_media.png', 68),
(119, 'upload/141-FS-OmniGuard_media-1.png', 69),
(119, 'upload/141-MPE-OmniGuard_media.png', 70),
(120, 'upload/213FSE-ESG-Floor-Maintainer-_media.png', 71),
(120, 'upload/213MPE-ESG-Floor-Maintainer-_media.png', 72),
(121, 'upload/412-FS-Eclipse-Sealer.png', 73),
(122, 'upload/211-FS-Rebound_media-1.png', 74),
(123, 'upload/343-Eclipse-X-Treme.png', 75),
(124, 'upload/301DD_media.png', 76),
(124, 'upload/301-FSE-Neutral-Cleaner-_media.png', 77),
(124, 'upload/301-MPE-Neutral-Cleaner-_media.png', 78),
(125, 'upload/330MPE.png', 79),
(75, 'upload/330MPE.png', 80),
(126, 'upload/338-MP-EnviroStar-_media.png', 81),
(127, 'upload/13805-00_300x300_main.jpg', 82),
(127, 'upload/13855-00_300x300_main.jpg', 83),
(127, 'upload/13827-00_300x300_main.jpg', 84),
(127, 'upload/13804-00_300x300_main.jpg', 85),
(128, 'upload/photo5078292953843214295.jpg.png', 86),
(128, 'upload/photo5078292953843214296.jpg.png', 87),
(128, 'upload/photo5078292953843214297.jpg.png', 88),
(128, 'upload/photo5078292953843214298.jpg.png', 89),
(128, 'upload/photo5078292953843214299.jpg.png', 90),
(128, 'upload/photo5078292953843214301.jpg.png', 91),
(128, 'upload/photo5078292953843214302.jpg.png', 92),
(128, 'upload/photo5078292953843214303.jpg.png', 93),
(128, 'upload/photo5078292953843214305.jpg.png', 94),
(128, 'upload/photo5078292953843214306.jpg.png', 95);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `category_name`) VALUES
(1, 'Floor Scrubber Parts '),
(2, 'Profane Buffers Parts'),
(3, 'Tires And Weels'),
(4, 'Vacuum Motors'),
(5, 'new equitment'),
(6, 'batteries'),
(7, 'Betco equipment'),
(8, 'Advance'),
(9, 'Clarke'),
(10, 'Sub Scrubber'),
(11, 'Betco Green Cleaning'),
(12, 'Pioneer Eclipse Green Cleaning'),
(13, 'Pioneer Eclipse'),
(14, 'Pads'),
(15, 'Viper Equipment '),
(16, 'Aztec Equipment'),
(17, 'Betco Chemicals'),
(18, 'Pionner Chemicals'),
(19, 'FCH Chemicals');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `userid` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userid`, `customer_name`, `address`, `contact`) VALUES
(2, 'Jose Molina Cascante', 'Nicoya Costa Rica', '+50661372755'),
(8, 'Anthony', 'Canada', '800-678-0502');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventoryid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `action` varchar(50) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `inventory_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventoryid`, `userid`, `action`, `productid`, `quantity`, `inventory_date`) VALUES
(1, 2, 'Purchase', 4, 10, '2017-09-18 09:32:01'),
(2, 2, 'Purchase', 20, 10, '2017-09-18 09:32:01'),
(3, 2, 'Purchase', 1, 99, '2017-09-18 09:32:01'),
(4, 2, 'Purchase', 2, 20, '2017-09-18 09:32:01'),
(5, 2, 'Purchase', 2, 10, '2017-09-18 09:34:29'),
(6, 2, 'Purchase', 2, 10, '2017-09-18 11:09:21'),
(7, 2, 'Purchase', 3, 12, '2017-09-18 11:09:22'),
(8, 2, 'Purchase', 4, 8, '2017-09-18 11:09:22'),
(9, 1, 'Add Product', 27, 10, '2017-09-18 13:59:25'),
(10, 1, 'Update quantity', 27, 20, '2017-09-18 14:04:32'),
(11, 1, 'Add Product', 23, 10, '2017-11-19 17:44:44'),
(12, 2, 'Purchase', 23, 1, '2017-11-19 17:45:58'),
(13, 1, 'Add Product', 24, 20, '2017-11-22 19:34:56'),
(14, 1, 'Purchase', 24, 1, '2017-11-22 19:47:29'),
(15, 1, 'Add Product', 25, 0, '2017-12-01 22:12:09'),
(16, 1, 'Update Quantity', 25, 0, '2017-12-01 22:12:58'),
(17, 1, 'Add Product', 26, 0, '2017-12-01 22:13:30'),
(18, 1, 'Add Product', 27, 10, '2017-12-01 22:18:30'),
(19, 1, 'Purchase', 23, 1, '2017-12-04 21:16:56'),
(20, 1, 'Purchase', 27, 2, '2017-12-04 21:17:25'),
(21, 1, 'Add Product', 28, 0, '2017-12-05 17:46:36'),
(22, 1, 'Update Quantity', 28, 10, '2017-12-06 17:39:28'),
(23, 1, 'Add Product', 35, 20, '2018-01-19 11:53:07'),
(24, 1, 'Add Product', 36, 20, '2018-01-19 11:55:09'),
(25, 1, 'Add Product', 37, 10, '2018-01-19 12:01:02'),
(26, 1, 'Add Product', 38, 10, '2018-01-19 12:08:32'),
(27, 1, 'Add Product', 39, 20, '2018-01-19 15:00:27'),
(28, 1, 'Add Product', 40, 10, '2018-01-19 15:11:58'),
(29, 1, 'Add Product', 41, 2, '2018-01-28 11:00:12'),
(30, 1, 'Add Product', 42, 10, '2018-01-28 14:42:31'),
(31, 1, 'Add Product', 43, 10, '2018-01-28 14:48:40'),
(32, 1, 'Add Product', 44, 10, '2018-01-28 14:53:25'),
(33, 1, 'Add Product', 45, 10, '2018-01-28 14:55:16'),
(34, 1, 'Update Quantity', 34, 1, '2018-01-28 15:21:32'),
(35, 1, 'Update Quantity', 28, 1, '2018-01-28 15:22:08'),
(36, 1, 'Add Product', 46, 10, '2018-01-28 15:27:04'),
(37, 1, 'Add Product', 47, 10, '2018-01-28 15:29:46'),
(38, 1, 'Add Product', 48, 10, '2018-01-28 15:30:36'),
(39, 1, 'Add Product', 49, 10, '2018-01-28 15:31:21'),
(40, 1, 'Add Product', 50, 10, '2018-01-28 16:05:41'),
(41, 1, 'Add Product', 0, 2, '2018-02-13 22:48:01'),
(42, 1, 'Add Product', 0, 2, '2018-02-13 22:53:24'),
(43, 1, 'Add Product', 51, 2, '2018-02-13 23:03:26'),
(44, 1, 'Add Product', 0, 2, '2018-02-13 23:04:42'),
(45, 1, 'Add Product', 0, 2, '2018-02-13 23:06:00'),
(46, 1, 'Add Product', 52, 2, '2018-02-13 23:06:21'),
(47, 1, 'Add Product', 53, 2, '2018-02-18 14:52:51'),
(48, 1, 'Add Product', 0, 2, '2018-02-19 00:35:25'),
(49, 1, 'Add Product', 0, 2, '2018-02-19 00:36:37'),
(50, 1, 'Add Product', 0, 2, '2018-02-19 00:37:49'),
(51, 1, 'Add Product', 0, 2, '2018-02-19 00:38:37'),
(52, 1, 'Add Product', 0, 2, '2018-02-19 00:39:42'),
(53, 1, 'Add Product', 54, 2, '2018-02-19 00:40:57'),
(54, 1, 'Add Product', 55, 2, '2018-02-19 00:54:12'),
(55, 1, 'Add Product', 56, 2, '2018-02-19 00:56:45'),
(56, 1, 'Add Product', 57, 2, '2018-02-19 00:57:15'),
(57, 1, 'Add Product', 58, 2, '2018-02-19 01:00:18'),
(58, 1, 'Add Product', 59, 2, '2018-02-19 01:02:28'),
(59, 1, 'Add Product', 60, 2, '2018-02-19 01:04:37'),
(60, 1, 'Add Product', 61, 2, '2018-02-19 01:08:53'),
(61, 1, 'Add Product', 62, 2, '2018-02-19 01:11:17'),
(62, 1, 'Add Product', 63, 2, '2018-02-19 01:15:39'),
(63, 1, 'Add Product', 64, 2, '2018-02-19 18:01:38'),
(64, 1, 'Add Product', 65, 2, '2018-02-19 18:05:17'),
(65, 1, 'Add Product', 66, 2, '2018-02-19 18:07:49'),
(66, 1, 'Add Product', 0, 2, '2018-02-19 18:10:07'),
(67, 1, 'Add Product', 0, 2, '2018-02-19 18:11:30'),
(68, 1, 'Add Product', 67, 2, '2018-02-19 18:12:00'),
(69, 1, 'Add Product', 68, 2, '2018-02-19 18:36:10'),
(70, 1, 'Add Product', 69, 2, '2018-02-22 00:46:31'),
(71, 1, 'Add Product', 70, 2, '2018-02-22 00:48:29'),
(72, 1, 'Add Product', 71, 2, '2018-02-22 01:37:31'),
(73, 1, 'Add Product', 0, 2, '2018-02-22 01:40:32'),
(74, 1, 'Add Product', 0, 2, '2018-02-22 01:41:22'),
(75, 1, 'Add Product', 0, 2, '2018-02-22 01:42:19'),
(76, 1, 'Add Product', 0, 2, '2018-02-22 01:42:49'),
(77, 1, 'Add Product', 72, 2, '2018-02-22 01:43:03'),
(78, 1, 'Add Product', 73, 2, '2018-02-22 02:06:08'),
(79, 1, 'Add Product', 74, 2, '2018-02-22 02:16:35'),
(80, 1, 'Add Product', 75, 2, '2018-02-22 02:28:40'),
(81, 1, 'Add Product', 76, 2, '2018-02-26 00:56:30'),
(82, 1, 'Add Product', 77, 2, '2018-02-26 01:05:17'),
(83, 1, 'Add Product', 78, 1, '2018-02-26 01:08:41'),
(84, 1, 'Add Product', 79, 2, '2018-02-26 01:11:01'),
(85, 1, 'Add Product', 80, 0, '2018-03-25 22:08:13'),
(86, 1, 'Add Product', 81, 2, '2018-08-18 18:09:31'),
(87, 1, 'Add Product', 82, 1, '2018-08-18 18:42:18'),
(88, 1, 'Add Product', 83, 0, '2018-08-18 19:39:09'),
(89, 1, 'Add Product', 84, 0, '2018-08-18 19:39:32'),
(90, 1, 'Add Product', 85, 0, '2018-08-18 19:45:29'),
(91, 1, 'Add Product', 86, 0, '2018-08-18 20:15:04'),
(92, 1, 'Add Product', 87, 0, '2018-08-18 21:16:46'),
(93, 1, 'Add Product', 88, 1, '2018-08-20 20:45:35'),
(94, 1, 'Add Product', 89, 1, '2018-08-20 21:02:28'),
(95, 1, 'Add Product', 90, 2, '2018-08-20 21:17:30'),
(96, 1, 'Add Product', 91, 1, '2018-08-20 21:33:13'),
(97, 1, 'Add Product', 92, 1, '2018-08-20 21:39:17'),
(98, 1, 'Add Product', 93, 1, '2018-08-20 21:51:23'),
(99, 1, 'Add Product', 94, 1, '2018-08-20 22:00:19'),
(100, 1, 'Add Product', 0, 1, '2018-08-20 22:10:18'),
(101, 1, 'Add Product', 95, 1, '2018-08-20 22:42:11'),
(102, 1, 'Add Product', 96, 1, '2018-08-20 23:31:09'),
(103, 1, 'Add Product', 97, 1, '2018-08-20 23:34:18'),
(104, 1, 'Add Product', 98, 55, '2018-09-26 21:20:17'),
(105, 1, 'Add Product', 99, 1, '2018-10-05 15:00:01'),
(106, 1, 'Add Product', 100, 1, '2018-10-05 15:05:07'),
(107, 1, 'Add Product', 101, 1, '2018-10-05 15:08:22'),
(108, 1, 'Add Product', 102, 0, '2018-10-16 17:52:49'),
(109, 1, 'Add Product', 103, 0, '2018-10-16 17:59:33'),
(110, 1, 'Add Product', 104, 0, '2018-10-16 18:04:04'),
(111, 1, 'Add Product', 105, 0, '2018-10-16 18:05:03'),
(112, 1, 'Add Product', 106, 0, '2018-10-16 18:12:21'),
(113, 1, 'Add Product', 107, 0, '2018-10-16 18:14:56'),
(114, 1, 'Add Product', 108, 0, '2018-10-16 18:16:25'),
(115, 1, 'Add Product', 109, 0, '2018-10-16 18:18:55'),
(116, 1, 'Add Product', 110, 0, '2018-10-16 18:20:23'),
(117, 1, 'Add Product', 111, 10, '2018-10-16 19:47:52'),
(118, 1, 'Add Product', 112, 10, '2018-10-16 20:15:28'),
(119, 1, 'Add Product', 113, 10, '2018-10-16 21:17:31'),
(120, 1, 'Add Product', 114, 10, '2018-10-16 21:23:40'),
(121, 1, 'Add Product', 115, 10, '2018-11-03 19:00:46'),
(122, 1, 'Add Product', 116, 10, '2018-11-03 21:20:20'),
(123, 1, 'Add Product', 117, 10, '2018-11-03 21:36:03'),
(124, 1, 'Add Product', 118, 10, '2018-11-03 21:42:44'),
(125, 1, 'Add Product', 119, 20, '2018-11-03 21:48:36'),
(126, 1, 'Add Product', 120, 10, '2018-11-03 21:58:59'),
(127, 1, 'Add Product', 121, 10, '2018-11-03 22:04:09'),
(128, 1, 'Add Product', 122, 20, '2018-11-03 22:06:35'),
(129, 1, 'Add Product', 123, 10, '2018-11-03 22:12:42'),
(130, 1, 'Add Product', 124, 10, '2018-11-03 22:17:27'),
(131, 1, 'Add Product', 125, 10, '2018-11-03 22:24:55'),
(132, 1, 'Add Product', 126, 10, '2018-11-03 22:31:01'),
(133, 1, 'Add Product', 0, 10, '2018-11-03 22:42:22'),
(134, 1, 'Add Product', 127, 10, '2018-11-03 22:45:32'),
(135, 1, 'Add Product', 0, 10, '2018-11-03 23:09:30'),
(136, 1, 'Add Product', 128, 1, '2018-11-03 23:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` double NOT NULL,
  `product_qty` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `supplierid` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `video` varchar(1000) NOT NULL,
  `tech` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `product_name`, `product_price`, `product_qty`, `photo`, `supplierid`, `description`, `video`, `tech`) VALUES
(27, 2, 'Vacuum Motors', 210, 8, 'upload/1 (Copiar)_1512188309.png', 4, 'Betco back pack vacuums provide a high productivity alternative to upright vacuum cleaning by reducing labor and fatigue. Perform total floor to ceiling cleaning in all types of dry vacuuming applications. Includes an ergonomically designed backrest to enhance operator comfort \r\n<br>\r\n<br>\r\n\r\n\r\nLightweight and versatile design reduces operator fatigue.\r\n\r\nMulti-task tool kit included.\r\n\r\nQuad filtration captures fine dust particles.\r\n\r\n\r\nfor Betco STEALTH DRS26BT', '', ''),
(28, 10, 'Tennant Tire', 210, 1, 'upload/1 (Copiar)_1512603568_1512603723.png', 4, '', '', ''),
(34, 10, 'Scrubber Casters', 20, 1, 'upload/SCRUBBER_CASTERS_1511398657.jpg', 4, 'Work on Cars', '', ''),
(36, 7, 'LIL BERTHAÂ®', 20, 20, 'upload/e88398-00_300x300_main_1516384509.jpg', 5, 'Betco provides the most productive stripping machines available today. Built with a tough steel frame and a reliable 603cc Kawasaki V-Twin engine this propane powered machine provides the performance and durability required to quickly handle large areas and excessive finish build ups.\r\n\r\n\r\nA wide 24\" stripping path maximizes productivity.\r\n\r\nFloating shroud contains stripper solution and prevents splashing.\r\n\r\nPowerful 603cc Kawasaki V-Twin engine for maximum stripping performance\r\n\r\nRugged powder coated steel construction for heavy use in tough environments\r\n\r\nTriple counter-rotating brushes easily remove multiple layers of floor finish in a single pass.', '', ''),
(37, 10, 'Scrubber Electronics Parts', 15, 10, 'upload/SCRUBBER_ELECTRONIC_PARTS_1517176157.jpg', 4, '', '', ''),
(39, 2, 'Buffer Wheels', 20, 20, 'upload/BUFFER_WHEELS_1516395627.jpg', 4, '', '', ''),
(40, 10, 'Vacuum Motors', 210, 10, 'upload/Vacuum_Motors_1517176063.jpg', 4, '', '', ''),
(42, 9, 'CA30 17E ', 3000, 10, 'upload/CA30 20B wht Rt_ashx_1534832675.jpg', 7, '', '', ''),
(43, 9, 'Clarke Focus II Rider', 20000, 10, 'upload/clarke-focus-ii-boost-automatic-ride-on-floor-scrubber_2_1534832280.jpg', 7, '', '', ''),
(44, 9, 'SA 40', 7000, 10, 'upload/SA40 wht Rt_ashx_1534832900.jpg', 7, '', '', ''),
(45, 9, 'FOCUS RA40 ', 15000, 10, 'upload/RA40 wht Rt.ashx_1534832444.jpg', 7, '', '', ''),
(46, 9, 'Focus II Mid Size ', 9000, 10, 'upload/Focus2compact_ashx_1534832517.jpg', 7, '', '', ''),
(47, 9, 'MA10 12E', 2000, 10, 'upload/MA10_1534833307.jpg', 7, '', '', ''),
(48, 9, 'MA30 13bb', 4000, 10, 'upload/MA30_13b_1517175035.jpg', 7, '', '', ''),
(49, 9, 'Vantage 14', 4000, 10, 'upload/MA30TM 13B_1534832763.jpg', 7, '', '', ''),
(50, 4, 'Betco Vacuum', 200, 10, 'upload/vacuum1_1517177141.png', 5, '', '', ''),
(52, 7, 'Backpack Vacuums', 1000, 2, 'upload/e85903-00_300x300_main_1539056847.jpg', 5, 'Betco back pack vacuums provide a high productivity alternative to upright vacuum cleaning by reducing labor and fatigue. Perform total floor to ceiling cleaning in all types of dry vacuuming applications. Includes an ergonomically designed backrest to enhance operator comfort \r\n\r\nLightweight and versatile design reduces operator fatigue.\r\n\r\nMulti-task tool kit included.\r\n\r\nQuad filtration captures fine dust particles.\r\n\r\n', '', 'Airflow: 120 CFM\r\nDust Bag Capacity: 1.25 Gallons\"\r\nFiltration: 	3-Stage\r\nTool Kit: Multi-Task Tool Kit Included\r\nVacuum Motor: 1000 Watt\r\nWater Lift: 100\"\r\nWeight: 11 Pounds\r\n'),
(53, 7, 'Motomop', 1000, 2, 'upload/motomop1_1518987171.jpg', 5, '', '', ''),
(54, 8, 'SC100â„¢', 1000, 2, 'upload/SC100_1519104219.jpg', 6, 'MOVING BEYOND THE MOP.\r\n\r\nFor generations the mop and bucket was the only option for cleaning small spaces, but simply spreading dirt around is neither effective nor sanitary. This is why Advance developed the SC100â„¢ Upright Scrubber. Not only does its compact, lightweight design allow you to clean very tight areas, but its superior productivity gets the job done fast, giving you more time for other tasks.\r\n\r\nThe faster way to cleaner floors.\r\n\r\nThe Advance SC100â€™s convenient, easy-to-use features make it perfect for cleaning small, high-traffic spaces quickly and effectively. The single-pass scrub and dry performance provides quick access to cleaned areas, and the comfortable, two-hand grip combined with its light weight make maneuverability and transport easy for any operator.\r\nA cleaner clean.\r\n\r\nWith a more effective cleaning system that removes dirt and water rather than spreading it around like a traditional mop, you not only decrease chances for slip-and-falls, but you creat', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sBaVc6XXx7U\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'PERFORMANCE & FEATURES\r\n\r\n    Two solution flow settings and a low solution indicator light ensure efficient cleaning\r\n    Ergonomic handle for comfortable one or two-handed operation\r\n    Easy-to-handle recovery tank makes emptying dirty water easier\r\n    Low deck profile gives the operator easy access to hardto- reach areas\r\n    Dosing cap makes adding the right amount of detergent much easier\r\n    Strong aluminum frame is built for reliability and long life'),
(55, 8, 'SC6000â„¢', 1000, 2, 'upload/sc6000_1539738989.png', 6, ' HIGHER PRODUCTIVITY WITH A LOWER COST TO CLEAN\r\n\r\nUnparalleled durability and ease of use.\r\nHigh Productivity in a compact package\r\n\r\nâ€¢ Up to 30% greater runtime/productivity versus nearest competitor\r\nRugged industrial design for maximum life\r\n\r\nâ€¢ Fully protected scrub deck, tubular frame, and extended life cylindrical deck components\r\nSmartKeyâ„¢ with impact detection\r\n\r\nâ€¢ Provides unique levels of user access to produce consistent results with greater operator accountability, and lower total cost of cleaning\r\nSmartFlowâ„¢ and intermittent solution off\r\n\r\nâ€¢ Reduces water and chemical usage by up to 50% while producing safer cleaning results\r\nOffset deck\r\n\r\nâ€¢ For edge cleaning with no added complexity or cost\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/I3lWyR9ozo0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', ''),
(57, 8, 'SC250â„¢', 1000, 2, 'upload/SC250_1539737657.jpg', 6, 'Compact and Maneuverable.\r\n\r\nWith its compact, highly maneuverable design, the SC250 is ideal for scrubbing in tight corners or under tables or chairs. Itâ€™s adjustable and foldable handle makes transport and storage easy.\r\n\r\nFast and Effective Cleaning\r\n\r\nEasily raise the front squeegee to sweep up small debris while scrubbing, thereby minimizing the need to pre-sweep. Designed to pick-up water in forward and reverse directions, the SC250 ensures a clean, dry, more hygienic environment while decreasing chances for slip-and-fall accidents.\r\nBattery Powered\r\n\r\nThe SC250 uses a powerful 36 V Lithium battery that provides up to 40 minutes of run time and operates at only 66 dB A, allowing for daytime cleaning and cleaning of noisesensitive areas. The cordless design ensures a safer cleaning environment and flexible cleaning options.\r\n\r\nSave time. Reduce costs.', 'No videos available at this time.', 'EFFECTIVE & COMPACT & SAFE & SANITARY\r\n\r\n    Sweep, scrub and dry in a single pass\r\n    Ideal design for scrubbing small spaces quickly\r\n    Cord-free and quiet operation\r\n    Creates a cleaner environment than mopping'),
(58, 8, 'SC351â„¢ COMMERCIAL', 1000, 2, 'upload/sc351_1539738146.png', 6, 'Innovative Deck and Compact Design Marks a Breakthrough in Daily Scrubbing for Small Area Cleaning.\r\n\r\nJust another small scrubber? Think again. The Advance SC351â„¢ micro scrubber proves itâ€™s in a class of it its own, delivering faster, better and easier scrubbing. Combine these features with the unique, fully adjustable rotating deck and you are on your way to superior scrubbing performance. Featuring full battery-powered operation with a standard onboard battery charger, the 14 inch disc delivers more scrubbing with minimal downtime and less hassle. Plus, at only 64 dB A, the SC351 is the quietest machine in its class, making daytime cleaning and cleaning of noise-sensitive areas an easy option. With its compact, maneuverable design, the SC351 is ideal for scrubbing in tight corners or under tables or chairs.\r\nPatented Rotating Deck\r\n\r\nNever skip those hard-to-reach areas again. By using the SC351, with its integrated rotating deck, operators are ensured the flexibility to clean u', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7y-WyMPcujU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'PERFORMANCE & FEATURES\r\n\r\n    Easy-to-use control panel has four operating mode options, allowing for diverse scrub settings\r\n    Foldable/adjustable handle makes transport and storage easy\r\n    Recovery and solution tank can be quickly and easily removed for refill, dumping or cleaning procedures\r\n    Standard onboard battery charger saves time and increases productivity\r\n    Integrated squeegee allows forward and backward water pick-up\r\n    Durable brush and heavy-duty polyurethane squeegee blades can be easily changed without the use of tools\r\n'),
(60, 8, 'SC400â„¢', 1000, 2, 'upload/sc400_1539738475.png', 6, 'A RELIABLE, COST-EFFICIENT CLEANING SOLUTION TO BRIDGE THE GAP BETWEEN MOPS AND LARGER SCRUBBERS.\r\n\r\nWith dependable cleaning performance and easy-to-use design, the Advance SC400â„¢ walk-behind automatic scrubber provides a cost-effective alternative to labor-intensive mop and bucket or high-priced, larger automatic scrubbers. Featuring a compact size and 6 gallon solution and recovery tanks, the SC400 enhances cleaning productivity in small spaces, such as gas stations, schools and healthcare facilities.', 'No videos available at this time.', 'PERFORMANCE & FEATURES\r\n\r\n    Simple, intuitive controls minimizes operator training\r\n    Wrap-around ergonomic handle system provides operator comfort\r\n    Large, easy-to-access recovery tank cover allows for complete cleaning of recovery tank and vacuum shut-off float\r\n    Variable solution flow with Smart Solutionâ„¢ enhances productivity and sustainability\r\n    Squeegee features no-tools rotation and replacement of squeegee blades\r\n    6 gallon solution and recovery tanks are rotationally molded out of heavy-duty polyethylene for superior durability\r\n'),
(61, 8, 'SC450', 1000, 2, 'upload/sc450_1539738597.png', 6, 'DEPENDABLE, EASY-TO-USE SCRUBBER SOLUTION SIMPLIFIES CLEANING OPERATION WHILE MAXIMIZING THE BOTTOM LINE\r\n\r\nThe Advance SC450â„¢ automatic scrubber provides simple, cost-effective performance for daily scrubbing needs. With reliable operation, high productivity and low maintenanceâ€”all at a budget-friendly valueâ€”this contractor-grade machine is designed to satisfy a wide range of applications. The 10.5 gallon SC450 features a 20 inch scrub path to accommodate both small and large jobs. From hospitals and schools to manufacturing facilities and warehouses, the SC450 provides the flexibility needed for todayâ€™s hardworking contractor.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/HHSKRX38Wtw\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'PERFORMANCE & FEATURES\r\n\r\n    Wrap-around ergonomic handle system provides operator comfort\r\n    Safety on/off switch is located on the handle for operator convenience\r\n    Easy-to-access, 11.9 gallon recovery tank allows for simple cleanup\r\n    Variable pad driven assistance\r\n    Front fill, 10.5 gallon solution tank\r\n    Non-marking rear wheels for maneuverability\r\n'),
(62, 8, 'ADFINITYâ„¢ X20C', 1000, 2, 'upload/Adfinity_1519104196.jpg', 6, 'TRACTION DRIVE FOR INCREASED PRODUCTIVITY\r\n\r\nAdfinityâ„¢ traction-drive scrubbers feature pushbutton forward and reverse, and our exclusive One-Touchâ„¢ ergonomic control paddle for easy, safe operation.\r\n\r\nAdfinity delivers effortless maintenance and operation. Our unique â€œclick onâ€ brushes enable fast and easy changeovers. The Adfinity scrubber allow easy access to the battery, the recovery tank, and, where applicable, the detergent dispensing system. Scrub path of 24 inches, and a standard onboard charger allows battery recharge at any available electrical outlet.\r\n\r\nAdfinity scrubbers fall well within safe sound level requirements for daytime cleaning in any facility, as set by LEED-EB and GS-42. The Adfinity also features Smart Solutionsâ„¢ flow rate. Engineered to provide effective cleaning and over 1.5 hours of run time between dump and refill, Smart Solutions saves water and costly chemicals, while increasing productivity.\r\n\r\nAdvanceâ€™s patented EcoFlexâ„¢ onboard detergen', 'No videos available at this time.', 'PERFORMANCE & FEATURES\r\n\r\n    Large diameter non-marking tires for better traction\r\n    Simple and intuitive operator controls minimize training\r\n    Rugged construction with durable components assures years of reliable performance\r\n    Easy to maintain with open access to all critical systems\r\n    Wrap-around ergonomic handle system for operator comfort\r\n    Center-pivot designed squeegees pick-up 100% water on turns\r\n'),
(64, 8, 'SC3000â„¢', 1000, 2, 'upload/SC3000_1539738042.png', 6, 'ERGONOMIC DESIGN AND SUPERIOR SCRUB SYSTEM DELIVER MAXIMUM EFFICIENCY AND CLEANING PERFORMANCE.\r\n\r\nThe Advance SC3000 Compact Rider Scrubber takes automatic rider scrubber technology to a new level of scrubbing performance. Easier operation, green-cleaning results and, above all, a new patented scrubbing deck that performs the hard work for you. Featuring a compact design, the SC3000 provides user-friendly, maneuverable operation in multiple cleaning applicationsâ€”including those with limited access. Quiet Modeâ„¢ makes daytime cleaning in educational facilities and cleaning of noise-sensitive healthcare facilities viable. Plus, with enhanced driver compartment features and a large 21 gallon tank, the SC3000 ensures maximum operator comfort and safety for over an hour of continuous scrubbing on a single tank of water.\r\nInnovative deck.\r\n\r\nThe SC3000 SafetyGlideâ„¢ Deck eliminates wasted time and money spent on making adjustments and replacing side skirts. Simply turn the steering whee', 'No videos available at this time.', 'PERFORMANCE & FEATURES\r\n\r\n    Unique steering wheel\r\n    SafetyGlideâ„¢ Deck\r\n    Built-in squeegee hanging system\r\n    High traction non-marking urethane tires\r\n    Easy access operator compartment\r\n'),
(65, 8, 'SC1500â„¢', 2000, 2, 'upload/SC1500_1539737289.jpg', 6, 'A COST-EFFICIENT CLEANING SOLUTION\r\n\r\nEnhance cleaning productivity with our brand new stand-up automatic scrubber, the Advance SC1500â„¢. Designed to deliver superior cleaning performance, the SC1500 stand-up scrubber provides a flexible, extremely maneuverable and compact solution for small to medium-sized areas. Plus, with a high-capacity tank and high scrub speed capabilities, the SC1500 covers more surface faster while maximizing your bottom line.\r\nMAXIMUM PRODUCTIVITY.\r\n\r\nTo satisfy both daily and deep scrubbing applications, the SC1500 is available in a 20 inch disc or 20 inch REVâ„¢ model. The patented REV Technology configuration employs our exclusive Random Orbital Scrubbing technology, which scrubs deeper and more uniformly to leave a perfectly scrubbed surface with no swirl marks while using far less water and chemicals. Spend more time on the floor with the SC1500â€™s large 12 gallon tank and low flow rate, which provides up to 109 minutes of scrub time without refilling. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WnA65NAbTmA\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'PERFORMANCE & FEATURES\r\n\r\n    Simple, intuitive controls minimize operator training\r\n    Safety dead-man switch and GO pedal provides easy-to-control operation\r\n    Quite mode for daytime cleaning and cleaning of noise-sensitive areas\r\n    EcoFlexâ„¢ onboard detergent system provides flexible cleaning performance\r\n    Large recovery tank opening, complete draining and smooth interior for easy cleaning'),
(66, 8, 'SC750â„¢ & SC800â„¢', 1000, 2, 'upload/sc800_1539739146.png', 6, 'Simple operation, flexible performance.\r\n\r\nAdvanceâ€™s rugged, low-maintenance SC750â„¢ and SC800â„¢ scrubbers deliver incredible value on a walk-behind platform. High productivity per tankful allows for 84 minutes of continuous scrubbing, which reduces dump/refill cycles and helps provide fast ROI. The optional EcoFlexâ„¢ System offers the flexibility to clean across the entire cleaning spectrum from green to clean. At the touch of a button one can switch from chemical free cleaning to using an ultra low dilution ratio, and of course detergent can be used at full strength for the toughest of soils. The burst of power feature lets you easily apply more pressure, more solution and more detergent at the touch of a single button. With the flexibility to easily apply the right scrubbing performance for the job, youâ€™ll use less detergent, minimize water use and save on cleaning costs.', 'No videos available at this time.', 'PERFORMANCE & FEATURES\r\n\r\n    Smart Solutions or EcoFlexâ„¢ on all machines\r\n    Green cleaning and high productivity technology\r\n    SC750 with 21 gallon (80 L) solution and recovery tanks\r\n    Self adjusting skirt on disc machines\r\n    SC800 with 25 gallon (95 L) solution and recovery tanks\r\n    Heavy duty scrubbing performance\r\n'),
(67, 8, 'SC750â„¢ REVâ„¢', 1000, 2, 'upload/sc750_1539739219.png', 6, 'REVâ„¢ TECHNOLOGY:\r\nA Revolution in Daily Cleaning.\r\nREV Technology is the Preferred Choice for Routine Daily Cleaning with Superior Results.\r\n\r\nFloors are Cleaner in a Single Pass - Dual random orbital action quickly and efficiently attacks dirt from multiple directions.\r\n\r\nSave Time with Fewer Dump and Refill Cycles - REVâ„¢ machines use far less water than conventional disc scrubbers.\r\n\r\nSave Money! - Less water means less detergent is used.\r\n\r\nNO SIDE SPLASH - The slow macro orbit of REV prevents water from splashing onto adjacent surfaces.\r\n\r\nNO SPLASH SKIRT - Cleans tight to walls, which reduces time spent on detail work.\r\n\r\nNO Swirl Marks - Dual random orbital action delivers an even clean without swirl marks!\r\n\r\nEcoFlexâ„¢ Onboard Detergent Metering System - Saving money, time, and the environment.\r\n\r\nIncreased Safety - All REV scrubbers are certified by the National Floor Safety Institute ( NFSI) to increase floor traction by more than 21%.', 'No videos available at this time.', 'PERFORMANCE & FEATURES\r\n\r\n\r\n    patented REV Technology random orbital scrubbing technology with high speed Â¼ inch micro scrubbing and 14 inch rotational macro scrubbing attacks dirt from multiple directions for superior cleaning effectiveness.\r\n    Low operating noise of 61 decibels allows for easy daytime cleaning. SC750â„¢ REVâ„¢ can be operated without disturbing facility occupants, so you can clean even during daytime hours.\r\n    SC750 with 21 gallon (80 L) solution and recovery tanks\r\n    Self adjusting skirt on disc machines\r\n    Intuitive control panel allows for simple one-touch operation with minimal operator training.\r\n    Dual 14 inch scrub pads provide wide 28 inch scrub path for increased productivity\r\n'),
(68, 8, 'SC500â„¢ INDUSTRIAL', 1000, 2, 'upload/sc500_1539738867.png', 6, 'INTRODUCING THE SC500â„¢\r\nINCREASE CLEANING EFFICIENCY AND PRODUCTIVITY\r\n\r\nFrom smaller areas in distribution centers and sports arenas to small manufacturing floors, the Advance SC500â„¢ walk-behind scrubber ushers in a new wave of productivity in the places where cleaning professionals need it most. With a modern design engineered to provide better control and improved sightlines, this compact 20 inch and 12 gallon disc scrubber cleans both effectively and quietly. Already one of the quietest compact scrubbers, the SC500 has a Quiet Mode for daytime cleaning environments.\r\nEfficiency revitalized.\r\n\r\nWith a revolutionary flow regulation system that adjusts the solution output based on the speed of the machine, SC500 ensures consistent cleaning results using less water and chemical while improving productivity per tank. Combine that with the exclusive EcoFlexâ„¢ systemâ€”which allows for variable detergent (including ultra-low) or water-only cleaningâ€”and the SC500 is in a category of', 'No videos available at this time.', 'PERFORMANCE & FEATURES\r\n\r\n    Two key system with separate controls for the Superuser (yellow key) and Operator (gray key)\r\n    Mechanical foot pedals allow for hassle-free raising and lowering of the squeegee\r\n    Easy click off/on brush/pad holder with control panel button (disc model only)\r\n    No-nonsense pinch-to-control tank drain hose simply works\r\n    Solution tank easily fills via front grate, sink-attachable hose, or side fill port\r\n    Recovery tank tilts back easily, allowing full access to the batteries and the EcoFlexâ„¢ System detergent bottle\r\n'),
(69, 11, 'DAILY FLOOR CLEANER', 1000, 2, 'upload/Green Earth Daily Floor Cleaner_1519289048.jpg', 5, 'Neutral pH Low Foaming Floor Cleaner:\r\n\r\nRecommended for maintaining high gloss on finished floors. When used as directed, it will thoroughly wet, emulsify and suspend soil from highly polished floor surfaces without attacking the gloss of the floor. Super concentrated, this product provides a low end-use cost per gallon. \r\n\r\n*Certified for performance, concentration, minimized/recycled packaging, and reduced toxicity. GreenSeal.org\r\n\r\nNeutral pH\r\n\r\nWets, emulsifies and suspends soils\r\n\r\nAll ingredients are readily biodegradable\r\n\r\nDeodorizes and leaves a pleasant scent\r\n', 'No avaible', 'Color 	Yellow\r\nDetergency 	Excellent\r\nEmulsification 	Excellent\r\nFoaming 	Moderate\r\nFragrance 	Fragrance Free\r\npH 	7.0 - 8.5\r\nRinsability 	Complete\r\nShelf life 	1 Year\r\nWetting 	Very good'),
(71, 11, 'FLOOR FINISH', 1000, 2, 'upload/Non_Zinc_Floor_Finish_&_Sealer_1519289070.jpg', 5, 'Non Zinc Floor Finish & Sealer\r\n\r\nThis product was developed using highly advanced polymer technology to provide a premium environmentally preferred floor finish. This high solids finish offers a clear, deep gloss and requires fewer coats to achieve the desired results.\r\n\r\nFeatures: \r\n\r\nNo heavy metals.\r\n\r\nNo offensive chemical odors.\r\n\r\nExtended wear high gloss formula\r\n\r\n0.0% Free Styrene\r\n', 'No avaible', 'Color (dried) 	Crystal clear\r\nColor (liquid) 	White\r\nCoverage 	2000 - 3000 square feet/gallon\r\nDrying time 	30 - 40 minutes per coat\r\nFragrance 	Mild\r\nFreeze/thaw stability 	3 cycles\r\nGloss (ASTM D 1455) 	1 coat 80 - 85\r\nGloss (ASTM D 1455) 	2 coats 90 - 95\r\nHeel mark resistance 	Very good\r\nLeveling 	Excellent\r\npH 	7.0 - 8.5\r\nPowdering resistance 	Excellent\r\nShelf life 	1 year\r\nSpecific gravity 	1.03'),
(72, 11, 'FLOOR STRIPPER', 1000, 2, 'upload/Green_earth_Floor_stripper_1519289095.jpg', 5, 'Betco Green Earth Floor Stripper is specially designed to effectively remove Green Earth and other conventional floor finishes without the use of butyl and ammonia.\r\n\r\nFeatures:\r\n\r\nCertified for performance, limited VOCs, and reduced toxicity. GreenSeal.org\r\n\r\nRinse free\r\n\r\nLow foaming\r\n\r\nNo added fragrance or dyes\r\n\r\n', 'No avaible ', 'Color 	Water white\r\nFragrance 	Mild\r\npH at dilution 	10.0\r\npH concentrate 	10.5\r\nResidue at evaporation 	None\r\nShelf life 	1 year'),
(73, 12, 'FLOOR COATING', 1000, 2, 'upload/128-FS-EnviroStar-Green_1519289977.png', 9, 'A premium floor coating designed specifically for ease of application and ease of maintenance while consistently providing a beautiful, durable, and safe wet-look shine.', '', ''),
(74, 12, 'FLOOR STRIPPER', 1000, 2, 'upload/515FS_web_1519289962.png', 9, 'Extra strength floor stripper formulated to remove both green and conventional zinc cross-linked floor coatings and sealers. Concentrated for economical use.', '', ''),
(75, 12, 'EnviroStar All Purpose Cleaner', 65, 2, 'upload/330MPE_web_1519289876.png', 9, 'This environmentally friendly cleaner is ideal for floors and other hard surface cleaning applications. This highly concentrated product (1:512) is available in 2 liter sizes with a dosing cup.', '', ''),
(76, 14, 'Pad Black 13', 1000, 2, 'upload/black_1519629109.jpg', 10, '3M High Productivity Floor Stripper Pads\r\n\r\nQuickly and thoroughly removes old floor finish, dirt and buildup. Unique, open web construction allows stripping solution to flow through pad to rinse out dirt and reduce loading for increased pad-to-floor contact and efficient stripping. Application: Stripping; Diameter: 13\".\r\n\r\n3M Corporation 7300 Series High Productivity Floor Stripping Pads, Black, 13\" Diameter, 5 Pads per Carton ', 'No avaible ', '    Global Product Type: Floor Pads-Scrub/Strip\r\n    Application: Stripping\r\n    Diameter: 13\"\r\n    Color(s): Black\r\n    For Use With: Rotary or Automatic Machine Speed of 175-600 RPM\r\n    Material(s): Nylon\r\n    Pre-Consumer Recycled Content Percent: 0%\r\n    Post-Consumer Recycled Content Percent: 0%\r\n    Total Recycled Content Percent: 0%\r\n'),
(77, 14, 'Pad Blue 13', 1000, 2, 'upload/blue_1519629131.jpg', 10, '3M Floor Cleaner Pads\r\n\r\nFor heavy-duty scrubbing prior to re-coating. Can also be used for heavy-duty spray cleaning or foam scrubbing. Removes dirt, spills and scuffs, leaving a clean surface ready for re-coating. Application: Scrubbing; Diameter: 13\".\r\n\r\n3M Corporation 5300 Series Floor Cleaner Pad, Blue, 13\" Diameter, 5 Pads per Carton ', 'No avaible', '   Global Product Type: Floor Pads-Scrub/Strip\r\n    Application: Scrubbing\r\n    Diameter: 13\"\r\n    Color(s): Blue\r\n    For Use With: Rotary or Automatic Machine Speed of 175-600 RPM\r\n    Material(s): Non-Woven Nylon/Polyester Fiber\r\n    Pre-Consumer Recycled Content Percent: 0%\r\n    Post-Consumer Recycled Content Percent: 0%\r\n    Total Recycled Content Percent: 0%\r\n'),
(78, 14, 'Pad red 13\"', 1000, 1, 'upload/red_1519628921.jpg', 10, 'STD FLR BUFF PAD 13 IN RED 5 ', 'No avaible', '\r\n    Global Product Type: Floor Pads-Burnish/Buff\r\n    Application: Scrub/Strip\r\n    Diameter: 13\"\r\n    Height: 1\"\r\n    Color(s): Red\r\n    For Use With: Rotary Floor Machines (175 to 350 rpm)\r\n    Applicable Material: Vinyl Composition Tile (VCT); Solid Vinyl Tile (SVT); Linoleum; Sheet Vinyl; Laminates\r\n    Material(s): Synthetic Fiber\r\n    Pre-Consumer Recycled Content Percent: 0%\r\n    Post-Consumer Recycled Content Percent: 0%\r\n    Total Recycled Content Percent: 0%\r\n'),
(79, 14, 'Pad Green 13\"', 1000, 2, 'upload/green_1519629061.jpg', 10, 'Standard Green Floor Pads\r\n\r\nThese green scrubbing floor pads are ideal for use on wood floors. For heavy-duty scrubbing or light stripping jobs. Each pad measures 20 inches in diameter. Includes 5 pads per Carton.\r\n\r\nPremiere Pads 20\" Green Scrubbing Floor Pads, 5 Pads per Carton\r\n\r\n', 'No avaible \r\n', '\r\n    Global Product Type: Floor Pads-Scrub/Strip\r\n    Application: Scrub/Strip\r\n    Diameter: 20\"\r\n    Height: 1\"\r\n    Color(s): Green\r\n    For Use With: Rotary Floor Machines (175 to 350 rpm)\r\n    Applicable Material: Vinyl Composition Tile (VCT); Solid Vinyl Tile (SVT); Linoleum; Sheet Vinyl; Laminates\r\n    Material(s): Synthetic Fiber\r\n    Pre-Consumer Recycled Content Percent: 0%\r\n    Post-Consumer Recycled Content Percent: 0%\r\n    Total Recycled Content Percent: 0%\r\n'),
(81, 7, 'BIG BERTHA', 7000, 2, 'upload/E12327-00_1534640971.jpg', 5, 'Betco provides the most productive stripping machines available today. Built with a tough steel frame and a reliable 603cc Kawasaki V-Twin engine this propane powered machine provides the performance and durability required to quickly handle large areas and excessive finish build ups', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Z1gFA_WNPu8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'Brush Size	(3) 11\" Brushes\r\nEngine	603cc Kawasaki\r\nHeight	44\"\r\nLength	57\"\r\nProductivity	30,000 sq. ft./hour\r\nScrubbing Path	30\"\r\nScrubbing Pressure	270 Lbs.\r\nStarting System	12 Volt Battery\r\nTank	Steel, UL Approved, OPD Equipped\r\nWeight	410 Lbs.\r\nWidth	33\"'),
(82, 13, 'BARRACUDA 440ST', 7000, 1, 'upload/pe440st_enlarged_1534642938.jpg', 9, 'The 440ST is a powerful, propane powered floor stripping machine. As part of the Ultimate Stripping System â€“ which includes the HyrdroStarâ„¢ applicator and StripVacâ„¢ recovery system â€“ the 440ST uses two counter rotating drivers that effectively remove floor finishes faster than any other machine on the market. The Rok-bakâ„¢ feature allows operators to quickly change pads and brushes while it sleek, ergonomic design make the machine simple and easy to operate.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/3HMK2-5iz0Q\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'Performance 30â€ (76 cm): 26,500 ft2/hr (2400 m2/hr)\r\n38â€ (96 cm): 33,500 ft2/hr (3100 m2/hr)\r\nPad/Brush Size 30â€ (76 cm): 2 x 16â€ (40 cm)\r\n38â€ (96 cm): 2 x 20â€ (51 cm)\r\nPad/Brush Speed 325 rpm\r\nEngine 603 cc\r\nEngine Speed 1800 - 3600 rpm\r\nNoise Level 87 dB (A)\r\nStart 12V battery\r\nWeight 30â€ (76 cm): 280 lb (127 kg)\r\n38â€ (96 cm): 335 lb (161 kg)\r\nWarranty\r\nEngine: Parts & Labor - 2 yrs*\r\nMachine: Parts & Labor - 1 yr*\r\n*Excludes wear and maintenance items\r\n'),
(88, 7, 'OPTIMA QT PB 24', 3000, 1, 'upload/E12311-00_1534823135.jpg', 5, '24-inch Propane High Speed Burnisher\r\n\r\nThe Optima QT Propane Burnisher is now equipped with a 603cc V-Twin Kawasaki engine and a newly engineered fuel system, the Optima QT has more power while minimizing fuel consumption.\r\n \r\nThe patented propane carburetor delivers the most efficient fuel mixture for a cooler running engine and cleaner emissions. Every Optima QT is equipped with a catalytic muffler, low oil shutdown feature, 12V battery start, flexible pad driver, and UL listed OPD propane tank. . ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Q5UvJn60LfE\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '\r\n\r\n    Powerful 603cc Kawasaki Engine 17HP\r\n    OPD Propane Tank on all Optima QT Machines\r\n    Catalytic Muffler\r\n    12-Volt Electric Key Start, Powder Coated Cast Aluminum Deck\r\n    Lowest Emissions - Meets CANADA REGULATIONA BLUE SKY EQUIPMENT\r\n\r\n'),
(89, 7, 'OPTIMA QT PB27', 3500, 1, 'upload/E12314-00_1534824148.jpg', 5, 'The Optima QT Propane Burnisher is now equipped with a 603cc V-Twin Kawasaki engine and a newly engineered fuel system, the Optima QT has more power while minimizing fuel consumption.\r\n \r\nThe patented propane carburetor delivers the most efficient fuel mixture for a cooler running engine and cleaner emissions. Every Optima QT is equipped with a catalytic muffler, low oil shutdown feature, 12V battery start, flexible pad driver, and UL listed OPD propane tank. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Q5UvJn60LfE\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'Powerful 603cc Kawasaki 17HP Engine.\r\nOPD Propane Tank on all Optima QT Machines.\r\nCatalytic Muffler.\r\n12-Volt Electric Key Start.\r\nPowder Coated Cast Aluminum Deck.\r\n'),
(90, 7, ' FOREMAN AS26HD / AS28HD', 8000, 2, 'upload/E29900-00_1534825050.jpg', 5, 'WALK BEHIND AUTOMATIC SCRUBBERS\r\n\r\nDual pad 13\" or 14\"  drivers maximizes scrubbing performance.\r\n\r\nPowder coated steel frame and roto-mold tanks stand up to heavy use in tough environments.\r\n\r\nPowerful 36-volt system.\r\n\r\nSelf propelled, variable speed, forward and reverse.\r\n\r\nSleek body design features simple controls and reduced component exposure.\r\n\r\nWeighted squeegee provides effective water recovery.\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2MITIQNvjO8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'Brush Motor 	1.0 HP\r\nCleaning Path 	         26\"\r\nHead Pressure 	 Adjustable to 175 Lbs.\r\nNoise Level 	         70 dB\r\nPad Size 	                 (2) 13\" or 14\"\r\nPad Speed 	         200 RPM\r\nPower Supply 	         36 Volt DC\r\nProductivity 	         32,000 sq. ft./hour\r\nRecovery Tank 	 30 Gallons\r\nSolution Tank 	         24 Gallons\r\nTraction Motor 	         0.4 HP\r\nVacuum Motor 	         0.9 HP'),
(91, 7, 'ASD20BT', 4000, 1, 'upload/e87028-00_300x300_main_1534825993.jpg', 4, 'Automatic Scrubber w/ Traction Drive\r\n\r\nStealthâ„¢ ASD20BT with Traction Drive features the new innovative design with Stealth Noise Reduction Technology making it 4 times quieter than other standard automatic scrubbers. Other standard features include rugged weighted squeegee assembly which helps reduce slip and fall injuries, user friendly controls, and tanks that are easy to drain and clean. A pad driver, battery pack, and charger are included.\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/61ZL_TNlBSI\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'Brush Motor 	0.55 HP\r\nCleaning Path    	20\"\r\nHead Pressure        66 Lbs.\r\nNoise Level 	       58 dB\r\nPad Size 	               (1) 20\"\r\nPad Speed 	       140 RPM\r\nPower Supply 	       24 Volt DC\r\nProductivity 	       20,000 sq. ft./hour\r\nRecovery Tank       13 Gallons\r\nSolution Tank 	       10.5 Gallons\r\nTraction Motor 	        0.20 HP\r\nVacuum Motor 	        0.75 HP'),
(92, 7, 'STEALTHâ„¢ ASD20BT', 4000, 1, 'upload/index_1534826357.jpg', 5, '\r\nAutomatic Scrubber w/ Traction Drive\r\n\r\nStealthâ„¢ ASD20BT with Traction Drive features the new innovative design with Stealth Noise Reduction Technology making it 4 times quieter than other standard automatic scrubbers. Other standard features include rugged weighted squeegee assembly which helps reduce slip and fall injuries, user friendly controls, and tanks that are easy to drain and clean. A pad driver, battery pack, and charger are included.\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/61ZL_TNlBSI\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'Brush Motor 	0.55 HP\r\nCleaning Path   	20\"\r\nHead Pressure 	66 Lbs.\r\nNoise Level 	        58 dB\r\nPad Size 	                (1) 20\"\r\nPad Speed 	        140 RPM\r\nPower Supply 	        24 Volt DC\r\nProductivity 	        20,000 sq. ft./hour\r\nRecovery Tank 	13 Gallons\r\nSolution Tank 	        10.5 Gallons\r\nTraction Motor   	0.20 HP\r\nVacuum Motor   	0.75 HP'),
(93, 7, 'STEALTHâ„¢ DRS 26 / 32BT', 10000, 1, 'upload/E29926-00_1534827083.jpg', 5, '\r\nStealthâ„¢ DRS 32\" Riding Automatic Scrubber\r\n\r\nStealthâ„¢ DRS Automatic Scrubbers feature the new innovative design with Stealth Noise Reduction Technology making it 4 times quieter than other standard automatic scrubbers. The 32\" clean path provides maximum productivity while the exclusive one-touch Intelligent Drive Control makes operation simple. With up to 4 hours of runtime large area day cleaning is now a reality.\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nB9eYmoJyMA\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'Batteries 	(4) 235 AH Wet Cell or (4) 210 AH AGM\r\nBrush Motor 	(2) 0.6 HP\r\nBrush RPM 	170\r\nClean Path 	32\"\r\nHeight 	52\"\r\nLength 	59\"\r\nMaximum Head Pressure 	 140 Pounds\r\nOperating Sound Level 	         58 dBA\r\nPower Supply 	                         24 Volt\r\nProductivity 	                         Up To 55,000 Sq. Ft./Hr.\r\nRecovery Tank Capacity 	         33 Gallons\r\nScrub Head 	                         (2) 13\" or 16\" Disks\r\nSolution Tank Capacity 	         29 Gallons\r\nStandard Head Pressure 	 70 Pounds\r\nTraction Motor 	                         0.54 HP\r\nVacuum Motor 	                         0.5 HP\r\nWidth 	                                 34\" (Without Squeegee)'),
(94, 7, 'STEALTHâ„¢ DRS21BT MicroRider', 7600, 1, 'upload/E29960-00_1534827619.jpg', 5, '\r\nStealthâ„¢ DRS 21\" Micro Automatic Scrubber\r\n\r\nStealthâ„¢ MicroRiderâ„¢ lowers cleaning costs by 36% and delivers the quietest machine ever. Capable of operating at only 54 dBA day cleaning is now a reality only faster and more cost effective than ever before.\r\nFeatures\r\n\r\n\"ECO MODE\" Feature Reduces Energy Consumption and Allows Machine To Operate At Only 54 dBA\r\nAutomatic Pad Engage and Disengage Feature\r\nBuilt In Filling Hose And Measuring Cup\r\nLarge Capacity Solution and Recovery Tanks\r\nLarge Operator Cabin\r\nLow Profile Operator Compartment Makes It Easy To Enter And Exit The Machine\r\nMaximum Productivity Reduces Cleaning Costs by 36%\r\nSame Footprint As 20\" Walk Behind Scrubbers\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zbcghvr0biU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'Batteries 	(2) 130 AH Wet Cell or (2) 110 AH AGM\r\nBrush Motor 	(1) 0.6 HP\r\nBrush RPM 	140\r\nClean Path 	21\"\r\nHead Pressure 	35 Pounds\r\nHeight 	                          47\"\r\nLength 	                          52\"\r\nOperating Sound Level 	  54 dBA\r\nPower Supply 	                  24 Volt\r\nProductivity 	                  Up To 31,000 Sq. Ft./Hr.\r\nRecovery Tank Capacity 	  20 Gallons\r\nScrub Head 	                  (1) 21\" Disk\r\nSolution Tank Capacity 	  17 Gallons\r\nTraction Motor 	                  0.4 HP\r\nVacuum Motor 	                  0.42 HP\r\nWidth 	                          23\" (Without Squeegee)'),
(95, 15, 'VIPER AS430C/510', 3350, 1, 'upload/AS 430C_1534830131.jpg', 11, '  Easy to use: Both the built in charger, reduced pushing force and ergonomic start/stop switch gives the user a better handling of the product\r\n  Simple and user-friendly: The solution and recovery tank is integrated into one mold to create higher tank capacity\r\n  Great value for money: Available in both cable and battery version to give the customer the flexibility to choose the best way to cover their cleaning needs\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4aBnWsIK6S4?rel=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '   '),
(96, 9, 'FM 40ST', 1000, 1, 'upload/FM40ST__83521.1493385776_1534833069.jpg', 7, '', '', ''),
(97, 9, 'SWING SP20', 1000, 1, 'upload/clarke-dual-speed-20-inch-floor-polisher_1534833258.jpg', 7, '', '', ''),
(102, 6, 'J185E-AC 12V', 0, 0, 'upload/J185E-AC_1539737569.jpg', 4, '', '', ''),
(103, 6, 'J185H-AC 12V', 0, 0, 'upload/81+m7ZNlSfL._SL1500__1539737973.jpg', 4, '', '', ''),
(105, 6, 'J305E-AC 6V', 0, 0, 'upload/Trojan_J305E-AC_Deep-Cycle_RV_Battery_grande_1539738303.jpg', 4, '', '', ''),
(106, 6, 'J305G-AC 6V', 0, 0, 'upload/GC-NE-J305G-AC-2_1539738741.jpg', 4, '', '', ''),
(107, 6, 'J305H-AC 6V', 0, 0, 'upload/TROJAN-J305H-AC_1539738896.jpg', 4, '', '', ''),
(108, 6, 'J305HG-AC 6V', 0, 0, 'upload/battery-trojan-j305hg-ac-trojan-battery-6v-lead-acid-batteries_1539738985.jpg', 4, '', '', ''),
(109, 6, 'J305P-AC 6V', 0, 0, 'upload/Trojan_J305P-AC_Deep-Cycle_RV_Battery_large_1539739135.jpg', 4, '', '', ''),
(110, 6, 'L16H-AC 6V', 0, 0, 'upload/L16H-AC_1539739223.jpg', 4, '', '', ''),
(112, 15, 'AS530R', 1, 10, 'upload/as530r-ol-rt_1539746128.jpg', 11, '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WfNMeNQWF3U?rel=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', ''),
(113, 1, 'Tires and Wells', 1, 10, 'upload/Tires_and_Wheels_1539749851.jpg', 4, '', '', ''),
(114, 3, 'Tennant 5680', 1, 10, 'upload/1_1539750220.png', 4, '', '', ''),
(116, 18, ' Eclipse Hard Floor Coating ', 115, 10, 'upload/105-FS-Eclipse_media_1541305220.png', 9, 'ITEM# 105\r\n\r\nA polyurethane-fortified acrylic co-polymer floor coating specifically designed for concrete, stone and similar hard floor surfaces.', '', 'f\r\n'),
(117, 18, 'Diamond Shine', 155, 10, 'upload/104-FS-Diamond-Shine_media_1541306163.png', 9, 'ITEM# 104\r\n\r\nA metal cross-linked, all-purpose, ultra high speed (â€œUHSâ€) coating, Diamond Shine produces a tough, long lasting base and a diamond-like brilliant wet-look shine in an ultra high speed burnishing program.', '', ''),
(118, 18, ' Equinox', 137, 10, 'upload/103-FS-Equinox_media_1541306564.png', 9, 'ITEM# 103\r\n\r\nA high solids formula for ultra high speed (â€œUHSâ€) applications. Produces a coating so tough that it significantly reduces the frequency of re-coating and burnishing. Provides excellent gloss, scuff resistance and long lasting durability.', '', ''),
(119, 18, ' OmniGuard', 138, 20, 'upload/141-FS-OmniGuard_media-1_1541306906.png', 9, 'ITEM# 141\r\n\r\nHigh performance and high gloss UHS floor finishes are our specialty and with the introduction of OmniGuardâ„¢ to our product offering, we have simply strengthened the best floor care offering in the industry.\r\n\r\nDesigned with the latest polymer and floor finish technology, OmniGuardâ„¢ produces a spectacular off-the-mop shine.  This 25% high solids finish is ideal for high traffic and high maintenance facilities like schools and retail stores, but it also holds its shine incredibly well in low maintenance applications.', '', ''),
(120, 18, 'EnviroStar Floor Maintainer', 110, 10, 'upload/213FSE-ESG-Floor-Maintainer-_media_1541307528.png', 9, 'ITEM# 213\r\n\r\nAn environmentally friendly floor cleaner and maintainer. This product cleans and then restores the shine to floor finishes in one easy step.', '', ''),
(121, 18, 'Matte Hard Floor Sealer ', 165, 10, 'upload/412-FS-Eclipse-Sealer_1541307849.png', 9, 'ITEM# 412\r\n\r\nA low maintenance, water-based acrylic formula sealer designed for concrete, stone and similar hard floor surfaces.', '', ''),
(122, 18, 'Rebound', 135, 20, 'upload/211-FS-Rebound_media-1_1541307995.png', 9, ' Floor Cleaner & Enhancer \r\n\r\nITEM# 211\r\n\r\nReboundâ„¢ Floor Cleaner and Enhancer by Pioneer Eclipse is a multi-purpose product which helps reduce the labor needed to maintain coated VCT, wood, and hard floor surfaces. Designed for use as a mop-on or automatic scrubber product, Reboundâ„¢ cleans and enhances floors in one step.', '', ''),
(123, 18, 'Eclipse X-TREME', 65, 10, 'upload/343-Eclipse-X-Treme_1541308362.png', 9, 'All Purpose Cleaner \r\n\r\nITEM# 343\r\n\r\nA heavy duty degreaser cleaner that rapidly removes the most stubborn greasy soils.', '', ''),
(124, 18, 'Neutral Cleaner ', 67, 10, 'upload/301-FSE-Neutral-Cleaner-_media_1541308634.png', 9, 'ITEM# 301\r\n\r\nOur all purpose daily floor cleaner removes dirt and soil without harming the shine. Eclipse Neutral Cleaner is excellent for deep scrubbing and may be used on all washable surfaces.\r\n', '', ''),
(125, 18, 'EnviroStar All Purpose Cleaner ', 55, 10, 'upload/330MPE_1541309095.png', 9, 'ITEM# 330\r\n\r\nThis environmentally responsible cleaner is ideal for floors and other hard surface cleaning applications. This highly concentrated product (1:512) is available in 2 liter sizes with a dosing cup.', '', ''),
(126, 18, ' All Purpose Neutralizer ', 42, 10, 'upload/338-MP-EnviroStar-_media_1541309457.png', 9, 'ITEM# 338\r\n\r\nThe EnviroStar All Purpose Neutralizer is a low pH (2.2) neutralizing solution that helps resolve floor alkalinity issues.  Ideal for use on VCT and Hard Floor surfaces, EnviroStar All Purpose Neutralizer improves coating adhesion on alkaline surfaces.  This product is excellent for use after stripping processes and during winter months to remove salt build up.\r\n\r\nOur All Purpose Neutralizer is part of our EnviroStar product offering, which is a complete line of earth friendly cleaners that can meet the toughest indoor and outdoor environmental restrictions.', '', ''),
(127, 17, 'PH7', 45, 10, 'upload/13805-00_300x300_main_1541310332.jpg', 5, 'Recommended for mopping or autoscrubbing finished floors. Can also be used as a spray and wipe cleaner on appliances, desks, plastic, stainless steel and painted surfaces. ', '', 'Color 	                                   Yellow\r\nDensity 	                                   1.00\r\nDetergency 	                           Excellent\r\nEmulsification 	                           Excellent\r\nFoaming 	                                   Moderate\r\nFragrance 	                           Lemon\r\npH 	                                           6.50 - 8.50\r\nRinsability 	                           Complete\r\nSolubility in Water 	                   Complete\r\nWarranty 	                                   2 years\r\nWetting 	                                   Very good'),
(128, 8, 'SC900', 12000, 1, 'upload/photo5078292953843214307.jpg_1541313436.png', 6, 'Maintaining an industrial facility can be challenging. That is why Advance developed the SC900â„¢, a simple machine allowing facility operators to focus on core tasks in a productive manner. The SC900 removes common complexity routinely associated with floor cleaning equipment. The abscence of sophisticated electronics and excessive features increases ease of use and uptime while lowering your overall cost to clean.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `sales_total` double NOT NULL,
  `sales_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesid`, `userid`, `sales_total`, `sales_date`) VALUES
(1, 2, 34, '2017-09-16 16:23:38'),
(2, 2, 18, '2017-09-16 16:25:28'),
(3, 2, 6, '2017-09-16 16:27:31'),
(4, 2, 1014244, '2017-09-16 16:44:01'),
(5, 2, 9588, '2017-09-18 09:06:29'),
(6, 2, 88779, '2017-09-18 09:08:42'),
(7, 2, 15579, '2017-09-18 09:09:34'),
(8, 2, 112361, '2017-09-18 09:32:00'),
(9, 2, 7990, '2017-09-18 09:34:29'),
(10, 2, 18370, '2017-09-18 11:09:21'),
(11, 2, 20, '2017-11-19 17:45:58'),
(12, 1, 15, '2017-11-22 19:47:29'),
(13, 1, 20, '2017-12-04 21:16:56'),
(14, 1, 420, '2017-12-04 21:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `sales_detail`
--

CREATE TABLE `sales_detail` (
  `sales_detailid` int(11) NOT NULL,
  `salesid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `sales_qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_detail`
--

INSERT INTO `sales_detail` (`sales_detailid`, `salesid`, `productid`, `sales_qty`) VALUES
(1, 2, 1, 12),
(2, 2, 2, 10),
(3, 3, 3, 11),
(4, 4, 2, 50),
(5, 4, 1, 106),
(6, 4, 5, 1000),
(7, 5, 2, 12),
(8, 6, 5, 101),
(9, 7, 1, 10),
(10, 7, 3, 11),
(11, 8, 4, 10),
(12, 8, 20, 10),
(13, 8, 1, 99),
(14, 8, 2, 20),
(15, 9, 2, 10),
(16, 10, 2, 10),
(17, 10, 3, 12),
(18, 10, 4, 8),
(19, 11, 23, 1),
(20, 12, 24, 1),
(21, 13, 23, 1),
(22, 14, 27, 2);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `userid` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_address` varchar(150) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`userid`, `company_name`, `company_address`, `contact`) VALUES
(4, 'FCHMAINTENANCE', 'CANADA', '888-888-888-888'),
(5, 'Betco', 'Canada', '88558855'),
(6, 'Advance', 'Canada', '888655645'),
(7, 'Clarke', 'Canada', '888655645'),
(9, 'Pioner Eclipse', 'Canada', '800-777-777'),
(10, 'Clean It Supply', 'Canada', ' 1-800-998-3295'),
(11, 'vIPER', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `access`) VALUES
(1, 'admin', '22d7f24ccf2c2dc8ca22f70885fb21a4', 1),
(2, 'pepe', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(4, 'supplier', 'fa3ddb86f38fb6a8284636249f6551aa', 3),
(5, 'Betco', 'supplier', 3),
(6, 'Advance', '99b0e8da24e29e4ccb5d7d76e677c2ac', 3),
(7, 'Clarke', 'supplier', 3),
(8, 'Anthony', '26b38f54d20cbf427ec728661847f600', 2),
(9, 'Pioner', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(10, 'cleanitsupply', 'ec6a6536ca304edf844d1d248a4f08dc', 3),
(11, 'VIPER', '14c879f3f5d8ed93a09f6090d77c2cc3', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`idphoto`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventoryid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesid`);

--
-- Indexes for table `sales_detail`
--
ALTER TABLE `sales_detail`
  ADD PRIMARY KEY (`sales_detailid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `idphoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sales_detail`
--
ALTER TABLE `sales_detail`
  MODIFY `sales_detailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carousel`
--
ALTER TABLE `carousel`
  ADD CONSTRAINT `productid` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
