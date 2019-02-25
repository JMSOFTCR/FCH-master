-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2019 a las 21:59:47
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pos`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addproduct` (IN `cat` INT, IN `nameProd` VARCHAR(100), IN `price` DOUBLE(12,2), IN `stock` INT, IN `locImg` VARCHAR(255), IN `supplier` INT, IN `descr` VARCHAR(255), IN `video` VARCHAR(255), IN `tech` VARCHAR(255), IN `locPdf` VARCHAR(255))  INSERT into product(categoryid,product_name,product_price,product_qty,photo,supplierid,description,video,tech,locationPdf)VALUES(cat,nameProd,price,stock,locImg,supplier,descr,video,tech,locPdf)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteimg` (IN `idimg` INT)  DELETE FROM carousel WHERE id_photo = idimg$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteProduct` (IN `idProd` INT)  DELETE FROM product WHERE productid = idProd$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GuardarImagen` (IN `Productid` INT, IN `Photo` VARCHAR(100))  BEGIN
   INSERT INTO carousel (productid, photo) VALUES (Productid, Photo);
   END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousel`
--

CREATE TABLE `carousel` (
  `id_photo` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carousel`
--

INSERT INTO `carousel` (`id_photo`, `productid`, `photo`) VALUES
(1, 27, 'upload/e85903-00_300x300_main.png'),
(2, 28, 'upload/1 (Copiar)_1512603568_1512603723.png'),
(3, 34, 'upload/SCRUBBER_CASTERS_1511398657.jpg'),
(4, 36, 'upload/e88398-00_300x300_main_1516384509.jpg'),
(5, 37, 'upload/SCRUBBER_ELECTRONIC_PARTS_1517176157.jpg'),
(6, 38, 'upload/New_Batteries_1516385312.jpg'),
(7, 39, 'upload/BUFFER_WHEELS_1516395627.jpg'),
(8, 40, 'upload/Vacuum_Motors_1517176063.jpg'),
(9, 42, 'upload/CA30_17E_1517172151.jpg'),
(10, 43, 'upload/Clarke_Focus_II_Rider_1517172520.jpg'),
(11, 44, 'upload/Focus_II_Compact_Autoscrubber_1517172804.jpg'),
(12, 45, 'upload/Focus_II_MicroRider_1517172916.jpg'),
(13, 46, 'upload/Focus_II_Mid_Size_Autoscrubber_1517174823.jpg'),
(14, 47, 'upload/MA10_12E_1517174985.jpg'),
(15, 49, 'upload/Vantage_14_1517175081.jpg'),
(16, 50, 'upload/vacuum1_1517177141.png'),
(17, 52, 'upload/e85903-00_300x300_main_1527300794.jpg'),
(18, 54, 'upload/SC100_1519104219.jpg'),
(19, 55, 'upload/SC6000_1519104402.jpg'),
(20, 56, 'upload/SC250_1519023405.jpg'),
(21, 57, 'upload/SC250_1519104257.jpg'),
(22, 58, 'upload/SC351-comercial_1519104291.jpg'),
(23, 59, 'upload/SC351-industrial_1519104302.jpg'),
(24, 60, 'upload/SC400_1519104320.jpg'),
(25, 61, 'upload/SC450_1519104355.jpg'),
(26, 62, 'upload/Adfinity_1519104196.jpg'),
(27, 64, 'upload/SC3000_1519104271.jpg'),
(28, 65, 'upload/SC1500_1519104245.jpg'),
(29, 66, 'upload/SC800_1519104427.jpg'),
(30, 67, 'upload/SC750_1519104441.jpg'),
(31, 68, 'upload/SC500_1519104372.jpg'),
(32, 69, 'upload/Green Earth Daily Floor Cleaner_1519289048.jpg'),
(33, 71, 'upload/Non_Zinc_Floor_Finish_&_Sealer_1519289070.jpg'),
(34, 72, 'upload/Green_earth_Floor_stripper_1519289095.jpg'),
(35, 73, 'upload/128-FS-EnviroStar-Green_1519289977.png'),
(36, 74, 'upload/515FS_web_1519289962.png'),
(37, 75, 'upload/330MPE_web_1519289876.png'),
(38, 76, 'upload/black_1519629109.jpg'),
(39, 77, 'upload/blue_1519629131.jpg'),
(40, 78, 'upload/red_1519628921.jpg'),
(41, 79, 'upload/green_1519629061.jpg'),
(42, 48, 'upload/MA30_13b_1517175035.jpg'),
(43, 48, 'files/48//1.jpg'),
(44, 48, 'files/48//2.jpg'),
(45, 48, 'files/48//3.jpg'),
(46, 53, 'upload/motomop1.jpg'),
(47, 53, 'upload/motomop2.jpg'),
(48, 53, 'upload/motomop3.jpg'),
(49, 53, 'upload/motomop4.jpg'),
(50, 53, 'upload/motomop5.jpg'),
(51, 53, 'upload/motomop6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`categoryid`, `category_name`) VALUES
(1, 'Floor Scrubber Parts '),
(2, 'Profane Buffers Parts'),
(3, 'Tires And Weels'),
(4, 'Vacuum Motors'),
(5, 'new equitment'),
(6, 'batteries'),
(7, 'Betco'),
(8, 'Advance'),
(9, 'Clarke'),
(10, 'Sub Scrubber'),
(11, 'Betco Green Cleaning'),
(12, 'Pioneer Eclipse Green Cleaning'),
(13, 'Pioneer Eclipse'),
(14, 'Pads');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

CREATE TABLE `customer` (
  `userid` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `customer`
--

INSERT INTO `customer` (`userid`, `customer_name`, `address`, `contact`) VALUES
(2, 'Jose Molina Cascante', 'Nicoya Costa Rica', '+50661372755'),
(8, 'Anthony', 'Canada', '800-678-0502');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
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
  `tech` varchar(3000) NOT NULL,
  `locationPdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `product_name`, `product_price`, `product_qty`, `photo`, `supplierid`, `description`, `video`, `tech`, `locationPdf`) VALUES
(27, 2, 'Vacuum Motors', 210, 8, 'upload/e85903-00_300x300_main.png', 4, 'Betco back pack vacuums provide a high productivity alternative to upright vacuum cleaning by reducing labor and fatigue. Perform total floor to ceiling cleaning in all types of dry vacuuming applications. Includes an ergonomically designed backrest to enhance operator comfort \r\n<br>\r\n<br>\r\n\r\n\r\nLightweight and versatile design reduces operator fatigue.\r\n\r\nMulti-task tool kit included.\r\n\r\nQuad filtration captures fine dust particles.\r\n\r\n\r\nfor Betco STEALTH DRS26BT', '', '', NULL),
(28, 10, 'Tennant Tire', 210, -2, 'upload/1 (Copiar)_1512603568_1512603723.png', 4, '', '', '', NULL),
(34, 10, 'Scrubber Casters', 20, 20, 'upload/SCRUBBER_CASTERS_1511398657.jpg', 4, 'Work on Cars', '', '', NULL),
(36, 7, 'LIL BERTHAÂ®', 20, 20, 'upload/e88398-00_300x300_main_1516384509.jpg', 5, 'Betco provides the most productive stripping machines available today. Built with a tough steel frame and a reliable 603cc Kawasaki V-Twin engine this propane powered machine provides the performance and durability required to quickly handle large areas and excessive finish build ups.\r\n\r\n<br>\r\n<br>\r\nA wide 24 stripping path maximizes productivity.\r\n<br>\r\n<br>\r\nFloating shroud contains stripper solution and prevents splashing.\r\n<br>\r\n<br>\r\nPowerful 603cc Kawasaki V-Twin engine for maximum stripping performance\r\n<br>\r\n<br>\r\nRugged powder coated steel construction for heavy use in tough environments\r\n<br>\r\n<br>\r\nTriple counter-rotating brushes easily remove multiple layers of floor finish in a single pass.', '', '', NULL),
(37, 10, 'Scrubber Electronics Parts', 15, 10, 'upload/SCRUBBER_ELECTRONIC_PARTS_1517176157.jpg', 4, '', '', '', NULL),
(38, 6, 'Batterie', 15, 10, 'upload/New_Batteries_1516385312.jpg', 5, '', '', '', NULL),
(39, 2, 'Buffer Wheels', 20, 20, 'upload/BUFFER_WHEELS_1516395627.jpg', 4, '', '', '', NULL),
(40, 10, 'Vacuum Motors', 210, 10, 'upload/Vacuum_Motors_1517176063.jpg', 4, '', '', '', NULL),
(42, 9, 'CA30 17E ', 3000, 10, 'upload/CA30_17E_1517172151.jpg', 7, '', '', '', NULL),
(43, 9, 'Clarke Focus II Rider', 20000, 10, 'upload/Clarke_Focus_II_Rider_1517172520.jpg', 7, '', '', '', NULL),
(44, 9, 'Focus II Compact', 7000, 10, 'upload/Focus_II_Compact_Autoscrubber_1517172804.jpg', 7, '', '', '', NULL),
(45, 9, 'Focus II MicroRider', 15000, 10, 'upload/Focus_II_MicroRider_1517172916.jpg', 7, '', '', '', NULL),
(46, 9, 'Focus II Mid Size ', 9000, 10, 'upload/Focus_II_Mid_Size_Autoscrubber_1517174823.jpg', 7, '', '', '', NULL),
(47, 9, 'MA10 12E', 2000, 10, 'upload/MA10_12E_1517174985.jpg', 7, '', '', '', NULL),
(48, 1, 'MA30 13b', 4000, 10, 'upload/MA30_13b_1517175035.jpg', 4, '', '', '', NULL),
(49, 9, 'Vantage 14', 4000, 10, 'upload/Vantage_14_1517175081.jpg', 7, '', '', '', NULL),
(50, 4, 'Betco Vacuum', 200, 10, 'upload/vacuum1_1517177141.png', 5, '', '', '', NULL),
(52, 7, 'Backpack Vacuums', 1000, 2, 'upload/e85903-00_300x300_main_1527300794.jpg', 5, 'Betco back pack vacuums provide a high productivity alternative to upright vacuum cleaning by reducing labor and fatigue. Perform total floor to ceiling cleaning in all types of dry vacuuming applications. Includes an ergonomically designed backrest to enhance operator comfort \r\n\r\nLightweight and versatile design reduces operator fatigue.\r\n\r\nMulti-task tool kit included.\r\n\r\nQuad filtration captures fine dust particles.\r\n\r\n', '', 'Airflow: 120 CFM\r\nDust Bag Capacity: 1.25 Gallons\"\r\nFiltration: 	3-Stage\r\nTool Kit: Multi-Task Tool Kit Included\r\nVacuum Motor: 1000 Watt\r\nWater Lift: 100\"\r\nWeight: 11 Pounds\r\n', NULL),
(53, 7, 'Motomop', 1000, 2, 'upload/motomop1_1533456011.jpg', 5, '', '', '', NULL),
(54, 8, 'SC100â„¢', 1000, 2, 'upload/SC100_1519104219.jpg', 6, 'MOVING BEYOND THE MOP.\r\n\r\nFor generations the mop and bucket was the only option for cleaning small spaces, but simply spreading dirt around is neither effective nor sanitary. This is why Advance developed the SC100â„¢ Upright Scrubber. Not only does its compact, lightweight design allow you to clean very tight areas, but its superior productivity gets the job done fast, giving you more time for other tasks.\r\n\r\nThe faster way to cleaner floors.\r\n\r\nThe Advance SC100â€™s convenient, easy-to-use features make it perfect for cleaning small, high-traffic spaces quickly and effectively. The single-pass scrub and dry performance provides quick access to cleaned areas, and the comfortable, two-hand grip combined with its light weight make maneuverability and transport easy for any operator.\r\nA cleaner clean.\r\n\r\nWith a more effective cleaning system that removes dirt and water rather than spreading it around like a traditional mop, you not only decrease chances for slip-and-falls, but you creat', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sBaVc6XXx7U\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'PERFORMANCE & FEATURES\r\n\r\n    Two solution flow settings and a low solution indicator light ensure efficient cleaning\r\n    Ergonomic handle for comfortable one or two-handed operation\r\n    Easy-to-handle recovery tank makes emptying dirty water easier\r\n    Low deck profile gives the operator easy access to hardto- reach areas\r\n    Dosing cap makes adding the right amount of detergent much easier\r\n    Strong aluminum frame is built for reliability and long life', NULL),
(55, 8, 'SC6000â„¢', 1000, 2, 'upload/SC6000_1519104402.jpg', 6, ' HIGHER PRODUCTIVITY WITH A LOWER COST TO CLEAN\r\n\r\nUnparalleled durability and ease of use.\r\nHigh Productivity in a compact package\r\n\r\nâ€¢ Up to 30% greater runtime/productivity versus nearest competitor\r\nRugged industrial design for maximum life\r\n\r\nâ€¢ Fully protected scrub deck, tubular frame, and extended life cylindrical deck components\r\nSmartKeyâ„¢ with impact detection\r\n\r\nâ€¢ Provides unique levels of user access to produce consistent results with greater operator accountability, and lower total cost of cleaning\r\nSmartFlowâ„¢ and intermittent solution off\r\n\r\nâ€¢ Reduces water and chemical usage by up to 50% while producing safer cleaning results\r\nOffset deck\r\n\r\nâ€¢ For edge cleaning with no added complexity or cost\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/I3lWyR9ozo0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '', NULL),
(56, 1, 'SC250', 1000, 2, 'upload/SC250_1519023405.jpg', 4, 'Compact and Maneuverable.\r\n\r\nWith its compact, highly maneuverable design, the SC250 is ideal for scrubbing in tight corners or under tables or chairs. Itâ€™s adjustable and foldable handle makes transport and storage easy.\r\n\r\nFast and Effective Cleaning\r\n\r\nEasily raise the front squeegee to sweep up small debris while scrubbing, thereby minimizing the need to pre-sweep. Designed to pick-up water in forward and reverse directions, the SC250 ensures a clean, dry, more hygienic environment while decreasing chances for slip-and-fall accidents.\r\nBattery Powered\r\n\r\nThe SC250 uses a powerful 36 V Lithium battery that provides up to 40 minutes of run time and operates at only 66 dB A, allowing for daytime cleaning and cleaning of noisesensitive areas. The cordless design ensures a safer cleaning environment and flexible cleaning options.\r\n\r\nSave time. Reduce costs.', 'No video available at this time', 'EFFECTIVE & COMPACT & SAFE & SANITARY\r\n\r\n    Sweep, scrub and dry in a single pass\r\n    Ideal design for scrubbing small spaces quickly\r\n    Cord-free and quiet operation\r\n    Creates a cleaner environment than mopping', NULL),
(57, 8, 'SC250â„¢', 1000, 2, 'upload/SC250_1519104257.jpg', 6, 'Compact and Maneuverable.\r\n\r\nWith its compact, highly maneuverable design, the SC250 is ideal for scrubbing in tight corners or under tables or chairs. Itâ€™s adjustable and foldable handle makes transport and storage easy.\r\n\r\nFast and Effective Cleaning\r\n\r\nEasily raise the front squeegee to sweep up small debris while scrubbing, thereby minimizing the need to pre-sweep. Designed to pick-up water in forward and reverse directions, the SC250 ensures a clean, dry, more hygienic environment while decreasing chances for slip-and-fall accidents.\r\nBattery Powered\r\n\r\nThe SC250 uses a powerful 36 V Lithium battery that provides up to 40 minutes of run time and operates at only 66 dB A, allowing for daytime cleaning and cleaning of noisesensitive areas. The cordless design ensures a safer cleaning environment and flexible cleaning options.\r\n\r\nSave time. Reduce costs.', 'No videos available at this time.', 'EFFECTIVE & COMPACT & SAFE & SANITARY\r\n\r\n    Sweep, scrub and dry in a single pass\r\n    Ideal design for scrubbing small spaces quickly\r\n    Cord-free and quiet operation\r\n    Creates a cleaner environment than mopping', NULL),
(58, 8, 'SC351â„¢ COMMERCIAL', 1000, 2, 'upload/SC351-comercial_1519104291.jpg', 6, 'Innovative Deck and Compact Design Marks a Breakthrough in Daily Scrubbing for Small Area Cleaning.\r\n\r\nJust another small scrubber? Think again. The Advance SC351â„¢ micro scrubber proves itâ€™s in a class of it its own, delivering faster, better and easier scrubbing. Combine these features with the unique, fully adjustable rotating deck and you are on your way to superior scrubbing performance. Featuring full battery-powered operation with a standard onboard battery charger, the 14 inch disc delivers more scrubbing with minimal downtime and less hassle. Plus, at only 64 dB A, the SC351 is the quietest machine in its class, making daytime cleaning and cleaning of noise-sensitive areas an easy option. With its compact, maneuverable design, the SC351 is ideal for scrubbing in tight corners or under tables or chairs.\r\nPatented Rotating Deck\r\n\r\nNever skip those hard-to-reach areas again. By using the SC351, with its integrated rotating deck, operators are ensured the flexibility to clean u', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7y-WyMPcujU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'PERFORMANCE & FEATURES\r\n\r\n    Easy-to-use control panel has four operating mode options, allowing for diverse scrub settings\r\n    Foldable/adjustable handle makes transport and storage easy\r\n    Recovery and solution tank can be quickly and easily removed for refill, dumping or cleaning procedures\r\n    Standard onboard battery charger saves time and increases productivity\r\n    Integrated squeegee allows forward and backward water pick-up\r\n    Durable brush and heavy-duty polyurethane squeegee blades can be easily changed without the use of tools\r\n', NULL),
(59, 8, 'SC351â„¢ INDUSTRIAL', 1000, 2, 'upload/SC351-industrial_1519104302.jpg', 6, 'Innovative Deck and Compact Design Marks a Breakthrough in Daily Scrubbing for Small Area Cleaning.\r\n\r\nJust another small scrubber? Think again. The Advance SC351â„¢ micro scrubber proves itâ€™s in a class of it its own, delivering faster, better and easier scrubbing. Combine these features with the unique, fully adjustable rotating deck and you are on your way to superior scrubbing performance. Featuring full battery-powered operation with a standard onboard battery charger, the 14 inch disc delivers more scrubbing with minimal downtime and less hassle. Plus, at only 64 dB A, the SC351 is the quietest machine in its class, making daytime cleaning and cleaning of noise-sensitive areas an easy option. With its compact, maneuverable design, the SC351 is ideal for scrubbing in tight corners or under tables or chairs.\r\nPatented Rotating Deck\r\n\r\nNever skip those hard-to-reach areas again. By using the SC351, with its integrated rotating deck, operators are ensured the flexibility to clean u', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7y-WyMPcujU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'PERFORMANCE & FEATURES\r\n\r\n    Easy-to-use control panel has four operating mode options, allowing for diverse scrub settings\r\n    Foldable/adjustable handle makes transport and storage easy\r\n    Recovery and solution tank can be quickly and easily removed for refill, dumping or cleaning procedures\r\n    Standard onboard battery charger saves time and increases productivity\r\n    Integrated squeegee allows forward and backward water pick-up\r\n    Durable brush and heavy-duty polyurethane squeegee blades can be easily changed without the use of tools\r\n', NULL),
(60, 8, 'SC400â„¢', 1000, 2, 'upload/SC400_1519104320.jpg', 6, 'A RELIABLE, COST-EFFICIENT CLEANING SOLUTION TO BRIDGE THE GAP BETWEEN MOPS AND LARGER SCRUBBERS.\r\n\r\nWith dependable cleaning performance and easy-to-use design, the Advance SC400â„¢ walk-behind automatic scrubber provides a cost-effective alternative to labor-intensive mop and bucket or high-priced, larger automatic scrubbers. Featuring a compact size and 6 gallon solution and recovery tanks, the SC400 enhances cleaning productivity in small spaces, such as gas stations, schools and healthcare facilities.', 'No videos available at this time.', 'PERFORMANCE & FEATURES\r\n\r\n    Simple, intuitive controls minimizes operator training\r\n    Wrap-around ergonomic handle system provides operator comfort\r\n    Large, easy-to-access recovery tank cover allows for complete cleaning of recovery tank and vacuum shut-off float\r\n    Variable solution flow with Smart Solutionâ„¢ enhances productivity and sustainability\r\n    Squeegee features no-tools rotation and replacement of squeegee blades\r\n    6 gallon solution and recovery tanks are rotationally molded out of heavy-duty polyethylene for superior durability\r\n', NULL),
(61, 8, 'SC450', 1000, 2, 'upload/SC450_1519104355.jpg', 6, 'DEPENDABLE, EASY-TO-USE SCRUBBER SOLUTION SIMPLIFIES CLEANING OPERATION WHILE MAXIMIZING THE BOTTOM LINE\r\n\r\nThe Advance SC450â„¢ automatic scrubber provides simple, cost-effective performance for daily scrubbing needs. With reliable operation, high productivity and low maintenanceâ€”all at a budget-friendly valueâ€”this contractor-grade machine is designed to satisfy a wide range of applications. The 10.5 gallon SC450 features a 20 inch scrub path to accommodate both small and large jobs. From hospitals and schools to manufacturing facilities and warehouses, the SC450 provides the flexibility needed for todayâ€™s hardworking contractor.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/HHSKRX38Wtw\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'PERFORMANCE & FEATURES\r\n\r\n    Wrap-around ergonomic handle system provides operator comfort\r\n    Safety on/off switch is located on the handle for operator convenience\r\n    Easy-to-access, 11.9 gallon recovery tank allows for simple cleanup\r\n    Variable pad driven assistance\r\n    Front fill, 10.5 gallon solution tank\r\n    Non-marking rear wheels for maneuverability\r\n', NULL),
(62, 8, 'ADFINITYâ„¢ X20C', 1000, 2, 'upload/Adfinity_1519104196.jpg', 6, 'TRACTION DRIVE FOR INCREASED PRODUCTIVITY\r\n\r\nAdfinityâ„¢ traction-drive scrubbers feature pushbutton forward and reverse, and our exclusive One-Touchâ„¢ ergonomic control paddle for easy, safe operation.\r\n\r\nAdfinity delivers effortless maintenance and operation. Our unique â€œclick onâ€ brushes enable fast and easy changeovers. The Adfinity scrubber allow easy access to the battery, the recovery tank, and, where applicable, the detergent dispensing system. Scrub path of 24 inches, and a standard onboard charger allows battery recharge at any available electrical outlet.\r\n\r\nAdfinity scrubbers fall well within safe sound level requirements for daytime cleaning in any facility, as set by LEED-EB and GS-42. The Adfinity also features Smart Solutionsâ„¢ flow rate. Engineered to provide effective cleaning and over 1.5 hours of run time between dump and refill, Smart Solutions saves water and costly chemicals, while increasing productivity.\r\n\r\nAdvanceâ€™s patented EcoFlexâ„¢ onboard detergen', 'No videos available at this time.', 'PERFORMANCE & FEATURES\r\n\r\n    Large diameter non-marking tires for better traction\r\n    Simple and intuitive operator controls minimize training\r\n    Rugged construction with durable components assures years of reliable performance\r\n    Easy to maintain with open access to all critical systems\r\n    Wrap-around ergonomic handle system for operator comfort\r\n    Center-pivot designed squeegees pick-up 100% water on turns\r\n', NULL),
(64, 8, 'SC3000â„¢', 1000, 2, 'upload/SC3000_1519104271.jpg', 6, 'ERGONOMIC DESIGN AND SUPERIOR SCRUB SYSTEM DELIVER MAXIMUM EFFICIENCY AND CLEANING PERFORMANCE.\r\n\r\nThe Advance SC3000 Compact Rider Scrubber takes automatic rider scrubber technology to a new level of scrubbing performance. Easier operation, green-cleaning results and, above all, a new patented scrubbing deck that performs the hard work for you. Featuring a compact design, the SC3000 provides user-friendly, maneuverable operation in multiple cleaning applicationsâ€”including those with limited access. Quiet Modeâ„¢ makes daytime cleaning in educational facilities and cleaning of noise-sensitive healthcare facilities viable. Plus, with enhanced driver compartment features and a large 21 gallon tank, the SC3000 ensures maximum operator comfort and safety for over an hour of continuous scrubbing on a single tank of water.\r\nInnovative deck.\r\n\r\nThe SC3000 SafetyGlideâ„¢ Deck eliminates wasted time and money spent on making adjustments and replacing side skirts. Simply turn the steering whee', 'No videos available at this time.', 'PERFORMANCE & FEATURES\r\n\r\n    Unique steering wheel\r\n    SafetyGlideâ„¢ Deck\r\n    Built-in squeegee hanging system\r\n    High traction non-marking urethane tires\r\n    Easy access operator compartment\r\n', NULL),
(65, 8, 'SC1500â„¢', 2000, 2, 'upload/SC1500_1519104245.jpg', 6, 'A COST-EFFICIENT CLEANING SOLUTION\r\n\r\nEnhance cleaning productivity with our brand new stand-up automatic scrubber, the Advance SC1500â„¢. Designed to deliver superior cleaning performance, the SC1500 stand-up scrubber provides a flexible, extremely maneuverable and compact solution for small to medium-sized areas. Plus, with a high-capacity tank and high scrub speed capabilities, the SC1500 covers more surface faster while maximizing your bottom line.\r\nMAXIMUM PRODUCTIVITY.\r\n\r\nTo satisfy both daily and deep scrubbing applications, the SC1500 is available in a 20 inch disc or 20 inch REVâ„¢ model. The patented REV Technology configuration employs our exclusive Random Orbital Scrubbing technology, which scrubs deeper and more uniformly to leave a perfectly scrubbed surface with no swirl marks while using far less water and chemicals. Spend more time on the floor with the SC1500â€™s large 12 gallon tank and low flow rate, which provides up to 109 minutes of scrub time without refilling. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WnA65NAbTmA\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'PERFORMANCE & FEATURES\r\n\r\n    Simple, intuitive controls minimize operator training\r\n    Safety dead-man switch and GO pedal provides easy-to-control operation\r\n    Quite mode for daytime cleaning and cleaning of noise-sensitive areas\r\n    EcoFlexâ„¢ onboard detergent system provides flexible cleaning performance\r\n    Large recovery tank opening, complete draining and smooth interior for easy cleaning', NULL),
(66, 8, 'SC750â„¢ & SC800â„¢', 1000, 2, 'upload/SC800_1519104427.jpg', 6, 'Simple operation, flexible performance.\r\n\r\nAdvanceâ€™s rugged, low-maintenance SC750â„¢ and SC800â„¢ scrubbers deliver incredible value on a walk-behind platform. High productivity per tankful allows for 84 minutes of continuous scrubbing, which reduces dump/refill cycles and helps provide fast ROI. The optional EcoFlexâ„¢ System offers the flexibility to clean across the entire cleaning spectrum from green to clean. At the touch of a button one can switch from chemical free cleaning to using an ultra low dilution ratio, and of course detergent can be used at full strength for the toughest of soils. The burst of power feature lets you easily apply more pressure, more solution and more detergent at the touch of a single button. With the flexibility to easily apply the right scrubbing performance for the job, youâ€™ll use less detergent, minimize water use and save on cleaning costs.', 'No videos available at this time.', 'PERFORMANCE & FEATURES\r\n\r\n    Smart Solutions or EcoFlexâ„¢ on all machines\r\n    Green cleaning and high productivity technology\r\n    SC750 with 21 gallon (80 L) solution and recovery tanks\r\n    Self adjusting skirt on disc machines\r\n    SC800 with 25 gallon (95 L) solution and recovery tanks\r\n    Heavy duty scrubbing performance\r\n', NULL),
(67, 8, 'SC750â„¢ REVâ„¢', 1000, 2, 'upload/SC750_1519104441.jpg', 6, 'REVâ„¢ TECHNOLOGY:\r\nA Revolution in Daily Cleaning.\r\nREV Technology is the Preferred Choice for Routine Daily Cleaning with Superior Results.\r\n\r\nFloors are Cleaner in a Single Pass - Dual random orbital action quickly and efficiently attacks dirt from multiple directions.\r\n\r\nSave Time with Fewer Dump and Refill Cycles - REVâ„¢ machines use far less water than conventional disc scrubbers.\r\n\r\nSave Money! - Less water means less detergent is used.\r\n\r\nNO SIDE SPLASH - The slow macro orbit of REV prevents water from splashing onto adjacent surfaces.\r\n\r\nNO SPLASH SKIRT - Cleans tight to walls, which reduces time spent on detail work.\r\n\r\nNO Swirl Marks - Dual random orbital action delivers an even clean without swirl marks!\r\n\r\nEcoFlexâ„¢ Onboard Detergent Metering System - Saving money, time, and the environment.\r\n\r\nIncreased Safety - All REV scrubbers are certified by the National Floor Safety Institute ( NFSI) to increase floor traction by more than 21%.', 'No videos available at this time.', 'PERFORMANCE & FEATURES\r\n\r\n\r\n    patented REV Technology random orbital scrubbing technology with high speed Â¼ inch micro scrubbing and 14 inch rotational macro scrubbing attacks dirt from multiple directions for superior cleaning effectiveness.\r\n    Low operating noise of 61 decibels allows for easy daytime cleaning. SC750â„¢ REVâ„¢ can be operated without disturbing facility occupants, so you can clean even during daytime hours.\r\n    SC750 with 21 gallon (80 L) solution and recovery tanks\r\n    Self adjusting skirt on disc machines\r\n    Intuitive control panel allows for simple one-touch operation with minimal operator training.\r\n    Dual 14 inch scrub pads provide wide 28 inch scrub path for increased productivity\r\n', NULL),
(68, 8, 'SC500â„¢ INDUSTRIAL', 1000, 2, 'upload/SC500_1519104372.jpg', 6, 'INTRODUCING THE SC500â„¢\r\nINCREASE CLEANING EFFICIENCY AND PRODUCTIVITY\r\n\r\nFrom smaller areas in distribution centers and sports arenas to small manufacturing floors, the Advance SC500â„¢ walk-behind scrubber ushers in a new wave of productivity in the places where cleaning professionals need it most. With a modern design engineered to provide better control and improved sightlines, this compact 20 inch and 12 gallon disc scrubber cleans both effectively and quietly. Already one of the quietest compact scrubbers, the SC500 has a Quiet Mode for daytime cleaning environments.\r\nEfficiency revitalized.\r\n\r\nWith a revolutionary flow regulation system that adjusts the solution output based on the speed of the machine, SC500 ensures consistent cleaning results using less water and chemical while improving productivity per tank. Combine that with the exclusive EcoFlexâ„¢ systemâ€”which allows for variable detergent (including ultra-low) or water-only cleaningâ€”and the SC500 is in a category of', 'No videos available at this time.', 'PERFORMANCE & FEATURES\r\n\r\n    Two key system with separate controls for the Superuser (yellow key) and Operator (gray key)\r\n    Mechanical foot pedals allow for hassle-free raising and lowering of the squeegee\r\n    Easy click off/on brush/pad holder with control panel button (disc model only)\r\n    No-nonsense pinch-to-control tank drain hose simply works\r\n    Solution tank easily fills via front grate, sink-attachable hose, or side fill port\r\n    Recovery tank tilts back easily, allowing full access to the batteries and the EcoFlexâ„¢ System detergent bottle\r\n', NULL),
(69, 11, 'DAILY FLOOR CLEANER', 1000, 2, 'upload/Green Earth Daily Floor Cleaner_1519289048.jpg', 5, 'Neutral pH Low Foaming Floor Cleaner:\r\n\r\nRecommended for maintaining high gloss on finished floors. When used as directed, it will thoroughly wet, emulsify and suspend soil from highly polished floor surfaces without attacking the gloss of the floor. Super concentrated, this product provides a low end-use cost per gallon. \r\n\r\n*Certified for performance, concentration, minimized/recycled packaging, and reduced toxicity. GreenSeal.org\r\n\r\nNeutral pH\r\n\r\nWets, emulsifies and suspends soils\r\n\r\nAll ingredients are readily biodegradable\r\n\r\nDeodorizes and leaves a pleasant scent\r\n', 'No avaible', 'Color 	Yellow\r\nDetergency 	Excellent\r\nEmulsification 	Excellent\r\nFoaming 	Moderate\r\nFragrance 	Fragrance Free\r\npH 	7.0 - 8.5\r\nRinsability 	Complete\r\nShelf life 	1 Year\r\nWetting 	Very good', NULL),
(71, 11, 'FLOOR FINISH', 1000, 2, 'upload/Non_Zinc_Floor_Finish_&_Sealer_1519289070.jpg', 5, 'Non Zinc Floor Finish & Sealer\r\n\r\nThis product was developed using highly advanced polymer technology to provide a premium environmentally preferred floor finish. This high solids finish offers a clear, deep gloss and requires fewer coats to achieve the desired results.\r\n\r\nFeatures: \r\n\r\nNo heavy metals.\r\n\r\nNo offensive chemical odors.\r\n\r\nExtended wear high gloss formula\r\n\r\n0.0% Free Styrene\r\n', 'No avaible', 'Color (dried) 	Crystal clear\r\nColor (liquid) 	White\r\nCoverage 	2000 - 3000 square feet/gallon\r\nDrying time 	30 - 40 minutes per coat\r\nFragrance 	Mild\r\nFreeze/thaw stability 	3 cycles\r\nGloss (ASTM D 1455) 	1 coat 80 - 85\r\nGloss (ASTM D 1455) 	2 coats 90 - 95\r\nHeel mark resistance 	Very good\r\nLeveling 	Excellent\r\npH 	7.0 - 8.5\r\nPowdering resistance 	Excellent\r\nShelf life 	1 year\r\nSpecific gravity 	1.03', NULL),
(72, 11, 'FLOOR STRIPPER', 1000, 2, 'upload/Green_earth_Floor_stripper_1519289095.jpg', 5, 'Betco Green Earth Floor Stripper is specially designed to effectively remove Green Earth and other conventional floor finishes without the use of butyl and ammonia.\r\n\r\nFeatures:\r\n\r\nCertified for performance, limited VOCs, and reduced toxicity. GreenSeal.org\r\n\r\nRinse free\r\n\r\nLow foaming\r\n\r\nNo added fragrance or dyes\r\n\r\n', 'No avaible ', 'Color 	Water white\r\nFragrance 	Mild\r\npH at dilution 	10.0\r\npH concentrate 	10.5\r\nResidue at evaporation 	None\r\nShelf life 	1 year', NULL),
(73, 12, 'FLOOR COATING', 1000, 2, 'upload/128-FS-EnviroStar-Green_1519289977.png', 9, 'A premium floor coating designed specifically for ease of application and ease of maintenance while consistently providing a beautiful, durable, and safe wet-look shine.', '', '', NULL),
(74, 12, 'FLOOR STRIPPER', 1000, 2, 'upload/515FS_web_1519289962.png', 9, 'Extra strength floor stripper formulated to remove both green and conventional zinc cross-linked floor coatings and sealers. Concentrated for economical use.', '', '', NULL),
(75, 12, 'Purpose Cleaner', 1000, 2, 'upload/330MPE_web_1519289876.png', 9, 'This environmentally friendly cleaner is ideal for floors and other hard surface cleaning applications. This highly concentrated product (1:512) is available in 2 liter sizes with a dosing cup.', '', '', NULL),
(76, 14, 'Pad Black 13', 1000, 2, 'upload/black_1519629109.jpg', 10, '3M High Productivity Floor Stripper Pads\r\n\r\nQuickly and thoroughly removes old floor finish, dirt and buildup. Unique, open web construction allows stripping solution to flow through pad to rinse out dirt and reduce loading for increased pad-to-floor contact and efficient stripping. Application: Stripping; Diameter: 13\".\r\n\r\n3M Corporation 7300 Series High Productivity Floor Stripping Pads, Black, 13\" Diameter, 5 Pads per Carton ', 'No avaible ', '    Global Product Type: Floor Pads-Scrub/Strip\r\n    Application: Stripping\r\n    Diameter: 13\"\r\n    Color(s): Black\r\n    For Use With: Rotary or Automatic Machine Speed of 175-600 RPM\r\n    Material(s): Nylon\r\n    Pre-Consumer Recycled Content Percent: 0%\r\n    Post-Consumer Recycled Content Percent: 0%\r\n    Total Recycled Content Percent: 0%\r\n', NULL),
(77, 14, 'Pad Blue 13', 1000, 2, 'upload/blue_1519629131.jpg', 10, '3M Floor Cleaner Pads\r\n\r\nFor heavy-duty scrubbing prior to re-coating. Can also be used for heavy-duty spray cleaning or foam scrubbing. Removes dirt, spills and scuffs, leaving a clean surface ready for re-coating. Application: Scrubbing; Diameter: 13\".\r\n\r\n3M Corporation 5300 Series Floor Cleaner Pad, Blue, 13\" Diameter, 5 Pads per Carton ', 'No avaible', '   Global Product Type: Floor Pads-Scrub/Strip\r\n    Application: Scrubbing\r\n    Diameter: 13\"\r\n    Color(s): Blue\r\n    For Use With: Rotary or Automatic Machine Speed of 175-600 RPM\r\n    Material(s): Non-Woven Nylon/Polyester Fiber\r\n    Pre-Consumer Recycled Content Percent: 0%\r\n    Post-Consumer Recycled Content Percent: 0%\r\n    Total Recycled Content Percent: 0%\r\n', NULL),
(78, 14, 'Pad red 13\"', 1000, 1, 'upload/red_1519628921.jpg', 10, 'STD FLR BUFF PAD 13 IN RED 5 ', 'No avaible', '\r\n    Global Product Type: Floor Pads-Burnish/Buff\r\n    Application: Scrub/Strip\r\n    Diameter: 13\"\r\n    Height: 1\"\r\n    Color(s): Red\r\n    For Use With: Rotary Floor Machines (175 to 350 rpm)\r\n    Applicable Material: Vinyl Composition Tile (VCT); Solid Vinyl Tile (SVT); Linoleum; Sheet Vinyl; Laminates\r\n    Material(s): Synthetic Fiber\r\n    Pre-Consumer Recycled Content Percent: 0%\r\n    Post-Consumer Recycled Content Percent: 0%\r\n    Total Recycled Content Percent: 0%\r\n', NULL),
(79, 14, 'Pad Green 13\"', 1000, 2, 'upload/green_1519629061.jpg', 10, 'Standard Green Floor Pads\r\n\r\nThese green scrubbing floor pads are ideal for use on wood floors. For heavy-duty scrubbing or light stripping jobs. Each pad measures 20 inches in diameter. Includes 5 pads per Carton.\r\n\r\nPremiere Pads 20\" Green Scrubbing Floor Pads, 5 Pads per Carton\r\n\r\n', 'No avaible \r\n', '\r\n    Global Product Type: Floor Pads-Scrub/Strip\r\n    Application: Scrub/Strip\r\n    Diameter: 20\"\r\n    Height: 1\"\r\n    Color(s): Green\r\n    For Use With: Rotary Floor Machines (175 to 350 rpm)\r\n    Applicable Material: Vinyl Composition Tile (VCT); Solid Vinyl Tile (SVT); Linoleum; Sheet Vinyl; Laminates\r\n    Material(s): Synthetic Fiber\r\n    Pre-Consumer Recycled Content Percent: 0%\r\n    Post-Consumer Recycled Content Percent: 0%\r\n    Total Recycled Content Percent: 0%\r\n', NULL),
(81, 8, 'z1', 1000, 21, 'upload/Arboles_1551123399.jpg', 4, '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supplier`
--

CREATE TABLE `supplier` (
  `userid` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_address` varchar(150) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `supplier`
--

INSERT INTO `supplier` (`userid`, `company_name`, `company_address`, `contact`) VALUES
(4, 'FCHMAINTENANCE', 'CANADA', '888-888-888-888'),
(5, 'Betco', 'Canada', '88558855'),
(6, 'Advance', 'Canada', '888655645'),
(7, 'Clarke', 'Canada', '888655645'),
(9, 'Pioner Eclipse', 'Canada', '800-777-777'),
(10, 'Clean It Supply', 'Canada', ' 1-800-998-3295');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `access`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'pepe', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(4, 'supplier', 'fa3ddb86f38fb6a8284636249f6551aa', 3),
(5, 'Betco', 'supplier', 3),
(6, 'Advance', '99b0e8da24e29e4ccb5d7d76e677c2ac', 3),
(7, 'Clarke', 'supplier', 3),
(8, 'Anthony', '069ac3d51a9c4841f5240ce794d85871', 2),
(9, 'Pioner', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(10, 'cleanitsupply', 'ec6a6536ca304edf844d1d248a4f08dc', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_photo`),
  ADD KEY `productid` (`productid`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indices de la tabla `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userid`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indices de la tabla `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`userid`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carousel`
--
ALTER TABLE `carousel`
  ADD CONSTRAINT `productid` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
