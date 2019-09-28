-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2019 at 02:02 PM
-- Server version: 5.7.27
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comda5_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` int(50) NOT NULL,
  `purchase_order_no` varchar(255) NOT NULL,
  `purchase_order_date` date NOT NULL,
  `category` varchar(250) NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `item_type` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `author_firstname` varchar(255) NOT NULL,
  `author_lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id`, `purchase_order_no`, `purchase_order_date`, `category`, `supplier`, `quantity`, `item_type`, `price`, `remarks`, `author_email`, `author_firstname`, `author_lastname`) VALUES
(86, 'RAM-A0001', '2018-10-29', 'Hardware', 'Lazada', 1, 'MEMORY', 3055, 'RAM for Compliance Server.', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(87, 'HEADSET-A0001', '2018-10-30', 'Hardware', 'Lazada', 2, 'HEADSET', 1239, 'Universal Call Center Customer Service Headset Headband Earphone.', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(88, 'LAP-A0001', '2018-12-02', 'Hardware', 'HMR', 1, 'Laptop', 0, 'Bought by CEO.', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(89, 'LAP-A0002', '2019-01-10', 'Hardware', 'HMR', 1, 'Laptop', 0, 'Assigned to Medelyn Lirio.', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(93, 'HDD-A0001-A', '2019-01-16', 'Hardware', 'PC Express', 1, 'Harddisk', 3450, 'Replacement for defective 2TB HDD in Server 8.', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(94, 'HEADSET-A0002', '2019-01-22', 'Hardware', 'Lazada', 4, 'Headset', 2584, 'Call Center Headset for BSD.', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(95, 'DES-A0001', '2019-01-25', 'Hardware', 'TTREND', 1, 'Desktop Computer', 17400, 'Replacement for Nharlen-PC', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(96, 'DES-A0002', '2019-01-31', 'Hardware', 'TTREND', 3, 'Desktop Computer', 22500, 'Replacement for the following PC.\r\nMelvin-PC\r\nArliziel-PC\r\nEmil-PC', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(97, 'DES-A0003', '2019-02-13', 'Hardware', 'TTREND', 1, 'Desktop Computer', 7500, 'For Isparticus Ortigas.', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(98, 'DES-A0004', '2019-03-07', 'Hardware', 'TTREND', 2, 'HP Compaq Elite 8300 Ultra Slim', 15000, 'i5 3rd Gen 4Gb RAM 320Gb HDD.', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(99, 'LAP-A0003', '2019-03-09', 'Hardware', 'FROM CEO', 1, 'LAPTOP', 0, 'Received from CEO. Replacement for Sir Chris laptop.', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(100, 'USBHUB-A0001', '2019-03-15', 'Hardware', 'Lazada', 2, 'USB Hubs', 208, 'USB Hubs 1 for Medelyn Lirio and 1 as spare.', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(101, 'HDMICABLE-A0001', '2019-03-15', 'Hardware', 'Lazada', 2, 'HDMI Cables', 248, 'HDMI Cables 1 for Ian Lacson 1 as spare', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(102, 'HEADSET-A0003', '2019-03-12', 'Hardware', 'Lazada', 8, 'Headset', 5378, 'Call Center Headset for CSD.', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(103, 'TELTESTER-A0001', '2019-04-01', 'Hardware', 'Lazada', 1, 'TELEPHONE TESTER', 612, 'TELEPHONE TESTER FOR ITD.', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(104, 'USBFLASHDRIVE-A0001', '2019-05-02', 'Hardware', 'Octagon', 1, 'USB Flash Drive', 850, '64Gb USB Flash Drive ', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(105, 'POCKETWIFI-A0001', '2019-05-02', 'Hardware', 'GLOBE', 1, 'GLOBE POCKET WIFI', 1295, 'LTE GLOBE POCKET WIFI', 'john.diaz@da5.com.ph', 'Jhon', 'Diaz'),
(106, 'PRINTER-A0001', '2019-06-03', 'Hardware', 'Easy PC', 1, 'Printer', 4695, 'Epson L120 ', 'efraim.lamadrid@da5.com.ph', 'Efraim', 'La Madrid'),
(107, 'HDD-A0002-A', '2019-06-22', 'Hardware', 'TTREND', 1, 'External Hard disk', 4, 'Replacement for defective 1TB External Hard disk of Procurement', 'efraim.lamadrid@da5.com.ph', 'Efraim', 'La Madrid'),
(108, 'DESKTOP-A0001', '2019-06-22', 'Hardware', 'TTREND', 3, 'Desktop', 22, 'Replacement of old desktop HP Compact Elite 8300 SN:SGH349PNW4SN:SGH349PNX4SN:SGH349PNWT', 'efraim.lamadrid@da5.com.ph', 'Efraim', 'La Madrid'),
(109, 'LAP-A0004', '2019-07-18', 'Hardware', 'FROM CEO', 1, 'LAPTOP', 0, 'Acer TravelMate P249 series\r\nModel #: N16Q1', 'efraim.lamadrid@da5.com.ph', 'Efraim', 'La Madrid');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_details`
--

CREATE TABLE `purchase_order_details` (
  `id` int(15) NOT NULL,
  `purchase_order_no` varchar(255) NOT NULL,
  `purchase_order_date` date NOT NULL,
  `category` varchar(250) NOT NULL,
  `serial_number` varchar(250) NOT NULL,
  `name_sh` varchar(250) NOT NULL,
  `manufacturer` varchar(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `assigned_to` varchar(250) NOT NULL,
  `item_type` varchar(250) NOT NULL,
  `specifications` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `author_firstname` varchar(60) NOT NULL,
  `author_lastname` varchar(60) NOT NULL,
  `author_email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `purchase_order_details`
--

INSERT INTO `purchase_order_details` (`id`, `purchase_order_no`, `purchase_order_date`, `category`, `serial_number`, `name_sh`, `manufacturer`, `quantity`, `assigned_to`, `item_type`, `specifications`, `price`, `supplier`, `status`, `color`, `remarks`, `author_firstname`, `author_lastname`, `author_email`) VALUES
(1, '0003', '2018-05-04', 'Hardware', '00327-35038-41362-AAOEM', 'ASUS X405U', 'ASUS', 1, 'John Charles Villavicencio', 'Laptop', 'i5-7200U\r\n4gb RAM\r\n1TB HDD\r\nWIN10', 20000, 'LAZADA', 'Working', 'Gray', 'Request 1 new laptop for new employee.', 'John Charles', 'Villavicencio', 'super@admin'),
(17, 'asd2', '2018-05-04', 'Other', '0233-123-3453-234s-234d', 'Samsung Galaxy Note S3 Neo ', 'Samsung', 1, 'John Charles Villavicencio', 'Phone', '2GB RAM\nAndroid 10.2\n', 12500, 'LAZADA', 'Spare', 'Green', 'ad123', 'John Charles', 'Villavicencio', 'super@admin'),
(18, 'asd2', '2018-05-04', 'Other', '0233-123-3453-234s-221a', 'Samsung Galaxy Note S3 Neo ', 'Samsung', 1, 'John Charles Villavicencio', 'Phone', '2GB RAM\nAndroid 10.2\n', 12500, 'LAZADA', 'Defective', 'Pink', 'ad123', 'John Charles', 'Villavicencio', 'super@admin'),
(19, '0001', '2018-05-04', 'Hardware', '12', 'asd', 'asd', 1, 'asd', 'Computer', 'asd', 25000, 'LAZADA', 'Working', 'asd', 'i7 4Gb RAM 500Gb HDD', 'John Charles', 'Villavicencio', 'super@admin'),
(20, '0001', '2018-05-04', 'Hardware', '123', 'asd', 'asd', 1, 'asd', 'Computer', 'asd', 25000, 'LAZADA', 'Working', 'asd', 'i7 4Gb RAM 500Gb HDD', 'John Charles', 'Villavicencio', 'super@admin'),
(21, '002', '2018-05-22', 'Hardware', '000231', 'asus 123', 'asus', 1, 'john diaz', 'laptop', 'x405u', 1000, 'HMR', 'Working', 'white', 'asd', 'John Charles', 'Villavicencio', 'super@admin'),
(22, '002', '2018-05-22', 'Hardware', '000234', 'hp 123', 'hp', 1, 'jovert galang', 'laptop', 'x405u', 1000, 'HMR', 'Working', 'gray', 'asd', 'John Charles', 'Villavicencio', 'super@admin'),
(23, '002', '2018-05-22', 'Hardware', '12313', 'asd', 'qwe', 1, 'asd', 'laptop', 'asdad', 1000, 'HMR', 'Working', 'asd', 'asd', 'John Charles', 'Villavicencio', 'super@admin'),
(24, '002', '2018-05-22', 'Hardware', '12313', 'asd', 'asd', 1, 'asd', 'laptop', 'asd', 1000, 'HMR', 'Working', 'asd', 'asd', 'John Charles', 'Villavicencio', 'super@admin'),
(25, '1213', '2018-05-04', 'Hardware', '1234567890-0001', 'ASUS', 'ASUS', 1, 'Jovert Galang', 'Laptop', 'i7\r\n4GB RAM\r\n1TB HDD', 10000, 'LAZADA', 'Working', 'Silver', 'Laptop for new employees.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(26, '1213', '2018-05-04', 'Hardware', '1234567890-0002', 'Lenovo', 'Lenovo', 1, 'Jeanette Munsod', 'Laptop', 'i7\r\n4GB RAM\r\n1TB HDD', 10000, 'LAZADA', 'Working', 'Blue', 'Laptop for new employees.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(30, '1116', '2018-08-29', 'Hardware', '1001', 'Acer Aspire 001', 'Acer', 1, 'Jeanette Munsod', 'Laptop', 'Proc.\r\nRAM.\r\nHDD', 10000, 'Hexagon', 'Working', 'Gray', 'Laptop for new employee.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(31, '1116', '2018-08-29', 'Hardware', '1002', 'Acer Aspire 002', 'Acer', 1, 'Jovert Galang', 'Laptop', 'Proc.\r\nRAM.\r\nHDD', 10000, 'Hexagon', 'Working', 'Black', 'Laptop for new employee.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(32, 'RAM-A0001', '2018-10-29', 'Hardware', 'HX316C10F/8', 'KINGSTON', 'KINGSTON', 1, 'COMPLIANCE', 'MEMORY', 'Kingston Hyper X FURY 8GB 1600MHz DDR3 CL10 DIMM (Blue)', 3055, 'Lazada', 'Working', 'Blue', 'RAM for Compliance Server.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(33, 'HEADSET-A0001', '2018-10-30', 'Hardware', 'NA', 'NA', 'NA', 1, 'CSD', 'HEADSET', 'Universal Call Center Customer Service Headset Headband Earphone.', 620, 'Lazada', 'Working', 'BLACK', 'Universal Call Center Customer Service Headset Headband Earphone.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(34, 'HEADSET-A0001', '2018-10-30', 'Hardware', 'NA', 'NA', 'NA', 1, 'CSD', 'HEADSET', 'Universal Call Center Customer Service Headset Headband Earphone.', 620, 'Lazada', 'Working', 'BLACK', 'Universal Call Center Customer Service Headset Headband Earphone.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(35, 'LAP-A0001', '2018-12-02', 'Hardware', 'LAP-A0001', 'Acer  E15 E5-575-52IF', 'Acer', 1, 'Jenny Tan', 'Laptop', 'Acer  E15 E5-575-52IF\r\ni5 6th Gen\r\n4Gb RAM\r\n1tb HDD\r\n', 0, 'HMR', 'Working', 'Black', 'Bought by CEO.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(36, 'LAP-A0002', '2019-01-10', 'Hardware', 'LAP-A0002', 'ASUS X556U', 'ASUS', 1, 'Medelyn Lirio', 'Laptop', '• ASUS X556UQ-DM743T DARK BLUE \r\n• INTEL CORE I7 7500U\r\n• 4GB DDR4\r\n• 1TB SATA\r\n• NVIDIA 940MX 2G\r\n• 15\" FHD\r\n• WINDOWS 10 Pro\r\n• DVDRW/BT/CREADER/WEBCAM/WIFI/GLAN\r\n', 0, 'HMR', 'Working', 'Silver', 'Assigned to Medelyn Lirio.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(37, 'HDD-A0001', '2019-01-16', 'Hardware', 'Z4ZBZFWJ', 'ST2000DM006', 'Seagate ', 1, 'ITD', 'Harddisk', '2TB Seagate Barracuda.', 3, 'PC Express', 'Working', 'Silver', 'Replacement for 2TB in Server 8.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(38, 'HDD-A0001-A', '2019-01-16', 'Hardware', 'Z4ZBZFWJ', 'ST2000DM006', 'Seagate', 1, 'ITD', 'Harddisk', '2TB Seagate Barracuda.', 3450, 'PC Express', 'Working', 'Silver', 'Replacement for defective 2TB HDD in Server 8.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(39, 'HEADSET-A0002', '2019-01-22', 'Hardware', '1078824XJ0006', 'Universal', 'Universal', 1, 'BSD', 'Headset', 'Universal Call Center Headset', 646, 'Lazada', 'Working', 'Black', 'Call Center Headset for BSD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(40, 'HEADSET-A0002', '2019-01-22', 'Hardware', '1078824XJ0006', 'Universal', 'Universal', 1, 'BSD', 'Headset', 'Universal Call Center Headset', 646, 'Lazada', 'Working', 'Black', 'Call Center Headset for BSD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(41, 'HEADSET-A0002', '2019-01-22', 'Hardware', '1078824XJ0006', 'Universal', 'Universal', 1, 'BSD', 'Headset', 'Universal Call Center Headset', 646, 'Lazada', 'Working', 'Black', 'Call Center Headset for BSD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(42, 'HEADSET-A0002', '2019-01-22', 'Hardware', '1078824XJ0006', 'Universal', 'Universal', 1, 'BSD', 'Headset', 'Universal Call Center Headset', 646, 'Lazada', 'Working', 'Black', 'Call Center Headset for BSD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(43, 'DES-A0001', '2019-01-25', 'Hardware', 'GENERIC', 'GENERIC', 'GENERIC', 1, 'Nharlen Alarzar', 'Desktop Computer', 'i3 8th Gen\r\n4Gb RAM\r\n500Gb HDD\r\n', 17400, 'TTREND', 'Working', 'Black', 'Replacement for Nharlen-PC', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(44, 'DES-A0002', '2019-01-31', 'Hardware', 'SGH349PNWS', 'HP Compaq Elite 8300 Ultra Slim', 'HP', 1, 'Melvin Clemente', 'Desktop Computer', 'i5 3rd Gen\r\n4Gb RAM\r\n320Gb HDD', 7500, 'TTREND', 'Working', 'Black', 'Replacement for the following PC.\r\nMelvin-PC\r\nArliziel-PC\r\nEmil-PC', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(45, 'DES-A0002', '2019-01-31', 'Hardware', 'NA', 'HP Compaq Elite 8300 Ultra Slim', 'HP', 1, 'Emil Viloria', 'Desktop Computer', 'i5 3rd Gen\r\n4Gb RAM\r\n320Gb HDD', 7500, 'TTREND', 'Working', 'Black', 'Replacement for the following PC.\r\nMelvin-PC\r\nArliziel-PC\r\nEmil-PC', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(46, 'DES-A0002', '2019-01-31', 'Hardware', 'NA', 'HP Compaq Elite 8300 Ultra Slim', 'HP', 1, 'Arliziel Aniel', 'Desktop Computer', 'i5 3rd Gen\r\n4Gb RAM\r\n320Gb HDD', 7500, 'TTREND', 'Working', 'Black', 'Replacement for the following PC.\r\nMelvin-PC\r\nArliziel-PC\r\nEmil-PC', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(47, 'DES-A0003', '2019-02-13', 'Hardware', 'NA', 'HP Compaq Elite 8300 Ultra Slim', 'HP', 1, 'Isparticus Ortigas', 'Desktop Computer', 'i5 3rd Gen 4Gb RAM 320Gb HDD', 7500, 'TTREND', 'Working', 'Black', 'For Isparticus Ortigas.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(48, 'DES-A0004', '2019-03-07', 'Hardware', 'NA', 'HP Compaq Elite 8300 Ultra Slim', 'HP', 1, 'RCBC-ISPARTICUS', 'HP Compaq Elite 8300 Ultra Slim', 'i5 3rd Gen 4Gb RAM 320Gb HDD', 7500, 'TTREND', 'Working', 'BLACK', 'i5 3rd Gen 4Gb RAM 320Gb HDD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(49, 'DES-A0004', '2019-03-07', 'Hardware', 'NA', 'HP Compaq Elite 8300 Ultra Slim', 'HP', 1, 'SHAW-ISPARTICUS', 'HP Compaq Elite 8300 Ultra Slim', 'i5 3rd Gen 4Gb RAM 320Gb HDD', 7500, 'TTREND', 'Working', 'BLACK', 'i5 3rd Gen 4Gb RAM 320Gb HDD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(50, 'LAP-A0003', '2019-03-09', 'Hardware', 'NA', 'HP Notebook 14-am104TX', 'HP', 1, 'Chris Sarabia', 'LAPTOP', '• I5 7th Gen\r\n• 4Gb\r\n• 1TB\r\n', 0, 'FROM CEO', 'Working', 'Silver', 'Received from CEO. Replacement for Sir Chris laptop.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(51, 'USBHUB-A0001', '2019-03-15', 'Hardware', 'NA', 'NA', 'NA', 1, 'ITD', 'USB Hubs', 'USB Hub 4 Port', 104, 'Lazada', 'Working', 'Black', 'USB Hubs 1 for Medelyn Lirio and 1 as spare.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(52, 'USBHUB-A0001', '2019-03-15', 'Hardware', 'NA', 'NA', 'NA', 1, 'Medelyn Lirio', 'USB Hubs', 'USB Hub 4 Port', 104, 'Lazada', 'Working', 'Black', 'USB Hubs 1 for Medelyn Lirio and 1 as spare.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(53, 'HDMICABLE-A0001', '2019-03-15', 'Hardware', 'NA', 'NA', 'NA', 1, 'Ian Lacson', 'HDMI Cables', 'HDMI Cables for Ian Lacson laptop.', 124, 'Lazada', 'Working', 'Black', 'HDMI Cables 1 for Ian Lacson 1 as spare', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(54, 'HDMICABLE-A0001', '2019-03-15', 'Hardware', 'NA', 'NA', 'NA', 1, 'ITD', 'HDMI Cables', 'HDMI Cables', 124, 'Lazada', 'Working', 'Black', 'HDMI Cables 1 for Ian Lacson 1 as spare', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(55, 'HEADSET-A0003', '2019-03-12', 'Hardware', 'NA', 'Universal', 'Universal', 1, 'CSD', 'Headset', 'Universal Call Center Headset', 672, 'Lazada', 'Working', 'Black', 'Call Center Headset for CSD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(56, 'HEADSET-A0003', '2019-03-12', 'Hardware', 'NA', 'Universal', 'Universal', 1, 'CSD', 'Headset', 'Universal Call Center Headset', 672, 'Lazada', 'Working', 'Black', 'Call Center Headset for CSD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(57, 'HEADSET-A0003', '2019-03-12', 'Hardware', 'NA', 'Universal', 'Universal', 1, 'CSD', 'Headset', 'Universal Call Center Headset', 672, 'Lazada', 'Working', 'Black', 'Call Center Headset for CSD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(58, 'HEADSET-A0003', '2019-03-12', 'Hardware', 'NA', 'Universal', 'Universal', 1, 'CSD', 'Headset', 'Universal Call Center Headset', 672, 'Lazada', 'Working', 'Black', 'Call Center Headset for CSD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(59, 'HEADSET-A0003', '2019-03-12', 'Hardware', 'NA', 'Universal', 'Universal', 1, 'CSD', 'Headset', 'Universal Call Center Headset', 672, 'Lazada', 'Working', 'Black', 'Call Center Headset for CSD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(60, 'HEADSET-A0003', '2019-03-12', 'Hardware', 'NA', 'Universal', 'Universal', 1, 'CSD', 'Headset', 'Universal Call Center Headset', 672, 'Lazada', 'Working', 'Black', 'Call Center Headset for CSD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(61, 'HEADSET-A0003', '2019-03-12', 'Hardware', 'NA', 'Universal', 'Universal', 1, 'CSD', 'Headset', 'Universal Call Center Headset', 672, 'Lazada', 'Working', 'Black', 'Call Center Headset for CSD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(62, 'HEADSET-A0003', '2019-03-12', 'Hardware', 'NA', 'Universal', 'Universal', 1, 'CSD', 'Headset', 'Universal Call Center Headset', 672, 'Lazada', 'Working', 'Black', 'Call Center Headset for CSD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(63, 'TELTESTER-A0001', '2019-04-01', 'Hardware', 'NA', 'Telephone Tester', 'JIANGXISHENG SHENAN Electronic Industry CO., LTD', 1, 'ITD', 'TELEPHONE TESTER', '1 Unit of Telephone Tester', 612, 'Lazada', 'Working', 'Gray', 'TELEPHONE TESTER FOR ITD.', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(64, 'USBFLASHDRIVE-A0001', '2019-05-02', 'Hardware', 'TS64GJF810', 'JETFLASH 810', 'TRANSCEND', 1, 'CHRIS SUMODOBILA', 'USB Flash Drive', '64Gb', 850, 'GLOBE', 'Working', 'Gray/Green', '64Gb USB Flash Drive ', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(65, 'POCKETWIFI-A0001', '2019-05-02', 'Hardware', 'XSR7S18A26011154', 'HUAWEI MOBILE WIFI', 'HUAWEI', 1, 'CHRIS SUMODOBILA', 'GLOBE POCKET WIFI', 'HUAWEI MOBILE WIFI', 1295, 'GLOBE', 'Working', 'BLACK', 'LTE GLOBE POCKET WIFI', 'Jhon', 'Diaz', 'john.diaz@da5.com.ph'),
(66, 'PRINTER-A0001', '2019-06-03', 'Hardware', 'TP3K778959', 'Epson L120', 'Epson', 1, 'CSD', 'Printer', 'Epson L120 Printer Inkjet with CIS\r\n', 4695, 'Easy PC', 'Working', 'Black', 'Epson L120 ', 'Efraim', 'La Madrid', 'efraim.lamadrid@da5.com.ph');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(10) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `region` varchar(150) NOT NULL,
  `province` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_name`, `contact_no`, `region`, `province`, `city`, `address`, `status`) VALUES
(33, 'Lazada', '9159618344', 'NCR', 'NCR', 'Pasig City', '496 Mrr St. Manggahan', 'active'),
(40, 'OLX', '9159618344', 'NCR', 'NCR', 'Pasig City', '496 Mrr St. Manggahan', 'active'),
(43, 'Gilmore', '9159618344', 'NCR', 'NCR', 'Pasig City', '496 Mrr St. Manggahan', 'active'),
(44, 'Octagon', '9159618344', 'NCR', 'NCR', 'Pasig City', '496 Mrr St. Manggahan', 'active'),
(45, 'HMR', 'NA', 'NA', 'NA', 'NA', 'NA', 'active'),
(46, 'PC Express', 'NA', 'NA', 'NA', 'NA', 'NA', 'active'),
(47, 'TTREND', 'NA', 'NA', 'NA', 'Cubao Quezon City', 'NA', 'active'),
(48, 'FROM CEO', 'NA', 'NA', 'NA', 'NA', 'NA', 'active'),
(49, 'GLOBE', 'NA', 'NA', 'NA', 'NA', 'NA', 'active'),
(50, 'Easy PC', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateregistered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `middlename`, `type`, `department`, `username`, `password`, `email`, `dateregistered`) VALUES
(00084, 'Jhon', 'Diaz', 'Abuyen', 'SuperAdmin', 'ITD-DEPARTMENT', 'john.diaz', '82bec2d7cb3838442095b4bdba3ab6b2', 'john.diaz@da5.com.ph', '2018-08-24'),
(00093, 'Efraim', 'La Madrid', 'Ansale', 'SuperAdmin', 'ITD-DEPARTMENT', 'efraim.lamadrid', 'b2d1435beba2f51136dc7a99f7e63a89', 'efraim.lamadrid@da5.com.ph', '2019-07-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
