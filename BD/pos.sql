-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 04:50 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

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
(4, 'Vacuum Motors');

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
(2, 'Jose Molina Cascante', 'Nicoya Costa Rica', '+50661372755');

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
(22, 1, 'Update Quantity', 28, 10, '2017-12-06 17:39:28');

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
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `product_name`, `product_price`, `product_qty`, `photo`, `supplierid`, `description`) VALUES
(23, 1, 'Scrubber Casters', 20, 8, 'upload/SCRUBBER_CASTERS_1511398657.jpg', 4, 'Work on Cars'),
(24, 2, 'Buffer Wheels', 15, 19, 'upload/BUFFER_WHEELS_1511400896.jpg', 4, 'Work on Cars'),
(27, 2, 'Vacuum Motors', 210, 8, 'upload/1 (Copiar)_1512188309.png', 4, '24v Vacuum motor \r\n\r\nfor Betco STEALTH DRS26BT'),
(28, 2, 'Tennant Tire', 210, 10, 'upload/1 (Copiar)_1512603568_1512603723.png', 4, '');

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
(4, 'FCHMAINTENANCE', 'CANADA', '888-888-888-888');

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'user', '0d8d5cd06832b29560745fe4e1b941cf', 2),
(4, 'supplier', 'fa3ddb86f38fb6a8284636249f6551aa', 3);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
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
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
