-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 12:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stayeasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cred`
--

CREATE TABLE `admin_cred` (
  `sr_no` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_cred`
--

INSERT INTO `admin_cred` (`sr_no`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', '123454321');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `sr_no` int(11) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `total_pay` int(11) NOT NULL,
  `room_no` varchar(11) DEFAULT NULL,
  `user_name` varchar(30) NOT NULL,
  `phonenum` varchar(13) DEFAULT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`sr_no`, `booking_id`, `room_name`, `price`, `total_pay`, `room_no`, `user_name`, `phonenum`, `address`) VALUES
(15, 16, 'Simple room', 1500, 4500, NULL, 'Poojan', '9409559683', 'bhavnagar'),
(16, 17, 'Simple room', 1500, 3000, '1', 'Poojan', '9409559683', 'bhavnagar'),
(17, 18, 'Simple room', 1500, 13500, '3', 'Poojan', '9409559683', 'bhavnagar'),
(18, 19, 'Simple room', 1500, 13500, '5', 'Poojan', '9409559683', 'bhavnagar'),
(19, 20, 'Simple room', 1500, 1500, '4', 'Poojan', '9409559683', 'bhavnagar'),
(20, 21, 'Simple room', 1500, 4500, '4', 'Poojan', '9409559683', 'bhavnagar'),
(21, 22, 'Simple room', 1500, 3000, '5', 'Poojan', '9409559683', 'bhavnagar'),
(22, 23, 'Simple room', 1500, 1500, '6', 'Poojan', '9409559683', 'bhavnagar'),
(23, 24, 'Luxury Room', 2000, 18000, '6', 'Poojan', '9409559683', 'bhavnagar'),
(24, 25, 'Royal Suite', 2000, 10000, '7', 'Poojan', '9409559683', 'bhavnagar'),
(25, 26, 'Royal Suite', 2000, 2000, 'royal1', 'Poojan', '9409559683', 'bhavnagar'),
(26, 27, 'Royal Suite', 2000, 4000, NULL, 'Poojan', '9409559683', 'bhavnagar'),
(27, 28, 'Executive Suite', 1500, 1500, '4', 'Poojan', '9409559683', 'bhavnagar'),
(28, 29, 'Deluxe Suite', 1200, 2400, '3', 'Vadhel Pranav', '7878747474', 'bharatnagar'),
(29, 30, 'Royal Suite', 2000, 4000, 'r1', 'Vadhel Pranav', '7878747474', 'bharatnagar'),
(30, 31, 'Royal Suite', 2000, 4000, 'royal1', 'Poojan', '9409559683', 'bhavnagar'),
(31, 32, 'Royal Suite', 2000, 2000, NULL, 'Poojan', '9409559683', 'bhavnagar'),
(32, 33, 'Royal Suite', 2000, 2000, '1', 'Poojan', '9409559683', 'bhavnagar'),
(33, 34, 'Royal Suite', 2000, 2000, '5', 'Poojan', '9409559683', 'bhavnagar'),
(34, 35, 'Royal Suite', 2000, 2000, NULL, 'Poojan', '9409559683', 'bhavnagar'),
(35, 36, 'Standard Suite', 500, 2000, NULL, 'Poojan', '9409559683', 'bhavnagar'),
(36, 37, 'Royal Suite', 2000, 2000, NULL, 'Poojan', '9409559683', 'bhavnagar'),
(37, 38, 'Royal Suite', 2000, 8000, '45a', 'Poojan', '9409559683', 'bhavnagar'),
(38, 39, 'Deluxe Suite', 1200, 3600, 'd1', 'Poojan', '9409559683', 'bhavnagar'),
(39, 40, 'Deluxe Suite', 1200, 3600, 'd1', 'Poojan', '9409559683', 'bhavnagar'),
(40, 41, 'Royal Suite', 2000, 6000, 'k9', 'Poojan', '9409559683', 'bhavnagar'),
(41, 42, 'Royal Suite', 2000, 8000, '9', 'Poojan', '9409559683', 'bhavnagar'),
(42, 43, 'Simple Suite', 300, 900, '4', 'Poojan', '9409559683', 'bhavnagar'),
(43, 44, 'Simple Suite', 300, 1500, 'j2', 'Poojan', '9409559683', 'bhavnagar'),
(44, 45, 'Royal Suite', 2000, 6000, '7', 'Poojan', '9409559683', 'bhavnagar'),
(45, 46, 'Executive Suite', 1500, 4500, '6', 'Poojan', '9409559683', 'bhavnagar'),
(46, 47, 'Deluxe Suite', 1200, 7200, '66', 'Poojan', '9409559683', 'bhavnagar'),
(47, 48, 'Simple Suite', 300, 600, '55', 'Poojan', '9409559683', 'bhavnagar'),
(48, 49, 'Royal Suite', 2000, 6000, '6', 'Poojan', '9409559683', 'bhavnagar'),
(49, 50, 'Executive Suite', 1500, 6000, '8', 'Poojan', '9409559683', 'bhavnagar'),
(50, 51, 'Premium Suite', 800, 2400, '7', 'Poojan', '9409559683', 'bhavnagar'),
(51, 52, 'Royal Suite', 2000, 6000, '4', 'Poojan', '9409559683', 'bhavnagar');

-- --------------------------------------------------------

--
-- Table structure for table `booking_order`
--

CREATE TABLE `booking_order` (
  `booking_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `arrival` int(11) NOT NULL DEFAULT 0,
  `refund` int(11) DEFAULT NULL,
  `booking_status` varchar(100) NOT NULL DEFAULT 'booked',
  `order_id` varchar(150) NOT NULL,
  `trans_id` varchar(200) DEFAULT NULL,
  `trans_amt` int(11) NOT NULL,
  `trans_status` varchar(100) NOT NULL DEFAULT 'pending',
  `trans_resp_msg` varchar(150) DEFAULT NULL,
  `rate_review` int(11) DEFAULT NULL,
  `datentime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_order`
--

INSERT INTO `booking_order` (`booking_id`, `user_id`, `room_id`, `check_in`, `check_out`, `arrival`, `refund`, `booking_status`, `order_id`, `trans_id`, `trans_amt`, `trans_status`, `trans_resp_msg`, `rate_review`, `datentime`) VALUES
(16, 14, 6, '2024-03-27', '2024-03-30', 0, 1, 'cancelled', 'ORD_1412203974', NULL, 4500, 'pending', NULL, NULL, '2024-03-27 15:52:38'),
(17, 14, 6, '2024-03-27', '2024-03-29', 1, NULL, 'booked', 'ORD_1451392985', NULL, 3000, 'pending', NULL, NULL, '2024-03-27 15:54:22'),
(18, 14, 6, '2024-03-27', '2024-04-05', 1, NULL, 'booked', 'ORD_1489601250', NULL, 13500, 'pending', NULL, NULL, '2024-03-27 16:05:32'),
(19, 14, 6, '2024-03-27', '2024-04-05', 1, NULL, 'booked', 'ORD_1410544428', NULL, 13500, 'pending', NULL, NULL, '2024-03-27 17:44:29'),
(20, 14, 6, '2024-04-05', '2024-04-06', 1, NULL, 'booked', 'ORD_1488300966', NULL, 1500, 'pending', NULL, NULL, '2024-03-27 17:59:40'),
(21, 14, 6, '2024-03-27', '2024-03-30', 1, NULL, 'booked', 'ORD_141539860', NULL, 4500, 'pending', NULL, NULL, '2024-03-27 18:02:49'),
(22, 14, 6, '2024-03-27', '2024-03-29', 1, NULL, 'booked', 'ORD_1478704718', NULL, 3000, 'pending', NULL, NULL, '2024-03-27 18:04:05'),
(23, 14, 6, '2024-03-27', '2024-03-28', 1, NULL, 'booked', 'ORD_1499569819', NULL, 1500, 'pending', NULL, NULL, '2024-03-27 18:22:42'),
(24, 14, 9, '2024-03-28', '2024-04-06', 1, NULL, 'booked', 'ORD_1418601132', NULL, 18000, 'pending', NULL, NULL, '2024-03-27 18:48:49'),
(25, 14, 11, '2024-03-29', '2024-04-03', 1, NULL, 'booked', 'ORD_1473272924', NULL, 10000, 'pending', NULL, NULL, '2024-03-29 15:27:14'),
(26, 14, 11, '2024-03-29', '2024-03-30', 1, NULL, 'booked', 'ORD_1485656947', NULL, 2000, 'pending', NULL, NULL, '2024-03-29 16:25:08'),
(27, 14, 11, '2024-03-30', '2024-04-01', 0, 1, 'cancelled', 'ORD_1417944518', NULL, 4000, 'pending', NULL, NULL, '2024-03-30 10:13:38'),
(28, 14, 12, '2024-04-04', '2024-04-05', 1, NULL, 'booked', 'ORD_1486245968', NULL, 1500, 'pending', NULL, 1, '2024-03-30 10:14:40'),
(29, 11, 13, '2024-03-30', '2024-04-01', 1, NULL, 'booked', 'ORD_1118284263', NULL, 2400, 'pending', NULL, NULL, '2024-03-30 10:15:45'),
(30, 11, 11, '2024-03-30', '2024-04-01', 1, NULL, 'booked', 'ORD_1139991426', NULL, 4000, 'pending', NULL, NULL, '2024-03-30 10:16:18'),
(31, 14, 11, '2024-03-30', '2024-04-01', 1, NULL, 'booked', 'ORD_1429768353', NULL, 4000, 'pending', NULL, 1, '2024-03-30 15:29:53'),
(32, 14, 11, '2024-03-30', '2024-03-31', 0, 1, 'cancelled', 'ORD_1488321664', NULL, 2000, 'pending', NULL, NULL, '2024-03-30 16:20:38'),
(33, 14, 11, '2024-03-30', '2024-03-31', 1, NULL, 'booked', 'ORD_1492544243', NULL, 2000, 'pending', NULL, 1, '2024-03-30 17:01:33'),
(34, 14, 11, '2024-03-30', '2024-03-31', 1, NULL, 'booked', 'ORD_1473064334', NULL, 2000, 'pending', NULL, 1, '2024-03-30 17:03:21'),
(35, 14, 11, '2024-03-30', '2024-03-31', 0, 1, 'cancelled', 'ORD_1446869620', NULL, 2000, 'pending', NULL, NULL, '2024-03-30 17:05:00'),
(36, 14, 15, '2024-03-30', '2024-04-03', 0, 1, 'cancelled', 'ORD_1412268594', NULL, 2000, 'pending', NULL, NULL, '2024-03-30 17:25:31'),
(37, 14, 11, '2024-03-30', '2024-03-31', 0, 1, 'cancelled', 'ORD_1487682301', NULL, 2000, 'pending', NULL, NULL, '2024-03-30 17:26:43'),
(38, 14, 11, '2024-03-30', '2024-04-03', 1, NULL, 'booked', 'ORD_1432993329', NULL, 8000, 'pending', NULL, 1, '2024-03-30 17:47:00'),
(39, 14, 13, '2024-03-30', '2024-04-02', 1, NULL, 'booked', 'ORD_1450897836', NULL, 3600, 'pending', NULL, 0, '2024-03-30 17:54:36'),
(40, 14, 13, '2023-03-01', '2023-03-04', 1, NULL, 'booked', 'ORD_1434617769', NULL, 3600, 'pending', NULL, 1, '2023-03-01 17:58:34'),
(41, 14, 11, '2024-03-30', '2024-04-02', 1, NULL, 'booked', 'ORD_1431131433', NULL, 6000, 'pending', NULL, 1, '2024-03-30 18:56:09'),
(42, 14, 11, '2024-03-30', '2024-04-03', 1, NULL, 'booked', 'ORD_1493796344', NULL, 8000, 'pending', NULL, 1, '2024-03-30 18:58:28'),
(43, 14, 16, '2024-03-30', '2024-04-02', 1, NULL, 'booked', 'ORD_1424229705', NULL, 900, 'pending', NULL, 1, '2024-03-30 19:02:19'),
(44, 14, 16, '2024-03-30', '2024-04-04', 1, NULL, 'booked', 'ORD_1463014303', NULL, 1500, 'pending', NULL, 1, '2024-03-30 19:07:27'),
(45, 14, 11, '2024-03-30', '2024-04-02', 1, NULL, 'booked', 'ORD_1494441549', NULL, 6000, 'pending', NULL, 1, '2024-03-30 19:14:19'),
(46, 14, 12, '2024-03-30', '2024-04-02', 1, NULL, 'booked', 'ORD_1430841607', NULL, 4500, 'pending', NULL, 1, '2024-03-30 20:03:50'),
(47, 14, 13, '2024-03-30', '2024-04-05', 1, NULL, 'booked', 'ORD_1436350974', NULL, 7200, 'pending', NULL, 1, '2024-03-30 20:08:53'),
(48, 14, 16, '2024-03-30', '2024-04-01', 1, NULL, 'booked', 'ORD_1479562093', NULL, 600, 'pending', NULL, 1, '2024-03-30 20:38:10'),
(49, 14, 11, '2024-03-31', '2024-04-03', 1, NULL, 'booked', 'ORD_1428407712', NULL, 6000, 'pending', NULL, 0, '2024-03-31 11:40:48'),
(50, 14, 12, '2024-04-02', '2024-04-06', 1, NULL, 'booked', 'ORD_1443743918', NULL, 6000, 'pending', NULL, 1, '2024-03-31 11:41:18'),
(51, 14, 14, '2024-04-03', '2024-04-06', 1, NULL, 'booked', 'ORD_1476345684', NULL, 2400, 'pending', NULL, 1, '2024-03-31 11:41:45'),
(52, 14, 11, '2024-03-31', '2024-04-03', 1, NULL, 'booked', 'ORD_1495078529', NULL, 6000, 'pending', NULL, 0, '2024-03-31 15:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `sr_no` int(10) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`sr_no`, `image`) VALUES
(19, 'IMG_99908.jpeg'),
(21, 'IMG_14677.jpg'),
(22, 'IMG_69187.jpg'),
(23, 'IMG_40262.jpeg'),
(24, 'IMG_26210.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `sr_no` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gmap` varchar(100) NOT NULL,
  `pn1` varchar(15) NOT NULL,
  `pn2` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `iframe` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`sr_no`, `address`, `gmap`, `pn1`, `pn2`, `email`, `fb`, `insta`, `tw`, `iframe`) VALUES
(1, 'xyz,Bhavnagar,Gujarat', 'https://maps.app.goo.gl/6F2oWi6x5MMZqsMfA', '919429144230', '919409554545', 'pdvadhel8@gmail.com', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d118573.5772940032!2d72.154906!3d21.763834!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5081abb84e2f:0xf676d64c6e13716c!2sBhavnagar, Gujarat!5e0!3m2!1sen!2sin!4v1708693239367!5m2!1sen!2sin');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `icon`, `name`, `description`) VALUES
(25, 'IMG_71168.svg', 'Wifi', 'Enjoy seamless connectivity with our high-speed WiFi facility, ensuring you stay connected and productive throughout your stay.'),
(26, 'IMG_45347.svg', 'Television', 'Indulge in entertainment at your fingertips with our in-room TV service, offering a wide selection of channels for your enjoyment and relaxation.'),
(27, 'IMG_86793.svg', 'Massage', 'Relax and rejuvenate with our professional massage services, tailored to melt away stress and leave you feeling refreshed and revitalized.'),
(29, 'IMG_40635.svg', 'Room heater', 'Stay cozy and comfortable during chilly nights with our in-room heater, ensuring warmth and relaxation throughout your stay.'),
(30, 'IMG_49268.svg', 'Water heater', 'Experience instant comfort with our water heater, providing hot water on demand for your convenience and relaxation.'),
(31, 'IMG_87041.svg', 'Air conditioner', 'Stay cool and refreshed in any season with our state-of-the-art air conditioning system, ensuring optimal comfort during your stay.'),
(32, 'IMG_71285.svg', 'Gym', 'Our gym facility offers state-of-the-art equipment and personalized fitness programs, providing guests with a dynamic and invigorating workout experience during their stay.'),
(33, 'IMG_98624.svg', 'Private Chef', 'Experience bespoke dining with our private chef service, crafting personalized menus to tantalize your taste buds and enhance your stay with culinary excellence.'),
(36, 'IMG_40377.svg', 'Swimming Pool', 'Escape the heat and plunge into bliss at our serene swimming pool, where guests can enjoy leisurely swims or bask in the sun while savoring moments of relaxation and rejuvenation.');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`) VALUES
(6, 'Bedroom'),
(10, 'Balcony'),
(11, 'Work desk'),
(12, 'Executive desk'),
(13, 'Mini fridge'),
(14, 'Housekeeping'),
(15, 'King-sized Bed'),
(16, 'In-room Dining'),
(17, 'Marble Bathroom'),
(18, 'Espresso Machine'),
(19, 'Separate Living room'),
(20, 'Executive Lounge'),
(21, 'Canopy Bed'),
(22, 'Marble-clad Bathroom');

-- --------------------------------------------------------

--
-- Table structure for table `rating_review`
--

CREATE TABLE `rating_review` (
  `sr_no` int(10) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(150) NOT NULL,
  `seen` int(11) NOT NULL DEFAULT 0,
  `datentime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating_review`
--

INSERT INTO `rating_review` (`sr_no`, `booking_id`, `room_id`, `user_id`, `rating`, `review`, `seen`, `datentime`) VALUES
(12, 47, 13, 14, 5, 'Welcome to StayEasy, your premier destination for effortless hotel booking and management. With StayEasy, we redefine the way you experience hospitali', 1, '2024-03-30 20:09:39'),
(13, 46, 12, 14, 5, 'Welcome to StayEasy, your premier destination for effortless hotel booking and management. With StayEasy, we redefine the way you experience hospitali', 1, '2024-03-30 20:09:43'),
(14, 48, 16, 14, 2, 'Welcome to StayEasy, your premier destination for effortless hotel booking and management. With StayEasy, we redefine the way you experience hospitali', 1, '2024-03-30 20:38:52'),
(15, 51, 14, 14, 5, 'booked', 1, '2024-03-31 12:39:38'),
(16, 50, 12, 14, 5, 'booked', 0, '2024-03-31 12:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `area` int(10) NOT NULL,
  `price` int(5) NOT NULL,
  `quantity` int(3) NOT NULL,
  `adult` int(3) NOT NULL,
  `children` int(3) NOT NULL,
  `description` varchar(300) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `removed` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `area`, `price`, `quantity`, `adult`, `children`, `description`, `status`, `removed`) VALUES
(1, 'he', 545, 54, 54, 54, 54, 'aaaaa', 1, 1),
(2, 'aa', 454, 54, 54, 545, 45, 'sssss', 1, 1),
(3, 'simple room', 45, 1200, 1, 5, 1, 'description chhe', 1, 1),
(4, 'simple', 41, 4000, 12, 12, 1, 'hahahah', 1, 1),
(5, 'simple', 455, 4444, 2, 22, 1, 'asdfg', 1, 1),
(6, 'Standard Suite', 150, 500, 2, 2, 2, 'The Standard Suite presents a comfortable haven for guests, offering a blend of modern convenience and cozy ambiance. Featuring a spacious bedroom, essential amenities, and convenient services, it ensures a pleasant and hassle-free stay.', 1, 1),
(7, 'Premium Suite', 170, 800, 2, 4, 1, 'The Premium Suite elevates the guest experience with its refined ambiance and added luxuries. With a separate living area, deluxe bathroom, and exclusive services, it caters to discerning travelers seeking extra comfort and convenience.', 1, 1),
(8, 'Supreme deluxe room', 500, 900, 12, 9, 10, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem', 1, 1),
(9, 'Deluxe Suite', 200, 1200, 10, 5, 3, 'The Deluxe Suite epitomizes luxury and sophistication, offering an expansive retreat with lavish furnishings and premium amenities. From its spacious living and dining areas to the personalized concierge service, every aspect is meticulously designed to exceed expectations.', 1, 1),
(10, 'Executive Suite', 225, 1500, 5, 7, 4, 'The Executive Suite combines style with functionality, providing ample space for work, relaxation, and entertainment. With dedicated work areas, upscale amenities, and access to exclusive facilities, it caters to the needs of modern business travelers.', 1, 1),
(11, 'Royal Suite', 250, 2000, 10, 10, 5, 'The Royal Suite epitomizes grandeur and opulence, offering an unparalleled level of luxury and bespoke services. From its expansive living spaces to the personalized butler assistance, every detail is crafted to create an unforgettable experience for esteemed guests.', 1, 0),
(12, 'Executive Suite', 225, 1500, 10, 7, 4, 'The Executive Suite combines style with functionality, providing ample space for work, relaxation, and entertainment. With dedicated work areas, upscale amenities, and access to exclusive facilities, it caters to the needs of modern business travelers.', 1, 0),
(13, 'Deluxe Suite', 200, 1200, 10, 5, 3, 'The Deluxe Suite epitomizes luxury and sophistication, offering an expansive retreat with lavish furnishings and premium amenities. From its spacious living and dining areas to the personalized concierge service, every aspect is meticulously designed to exceed expectations.', 1, 0),
(14, 'Premium Suite', 170, 800, 15, 4, 1, 'The Premium Suite elevates the guest experience with its refined ambiance and added luxuries. With a separate living area, deluxe bathroom, and exclusive services, it caters to discerning travelers seeking extra comfort and convenience.', 1, 0),
(15, 'Standard Suite', 150, 500, 15, 2, 2, 'The Standard Suite presents a comfortable haven for guests, offering a blend of modern convenience and cozy ambiance. Featuring a spacious bedroom, essential amenities, and convenient services, it ensures a pleasant and hassle-free stay.', 1, 0),
(16, 'Simple Suite', 130, 300, 10, 2, 1, 'Experience simplicity and comfort in our Simple Suite, designed for a peaceful stay with essential amenities at an affordable price. Ideal for budget-conscious travelers seeking a cozy retreat without sacrificing quality or convenience.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_facilities`
--

CREATE TABLE `room_facilities` (
  `sr_no` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `facilities_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_facilities`
--

INSERT INTO `room_facilities` (`sr_no`, `room_id`, `facilities_id`) VALUES
(122, 13, 25),
(123, 13, 26),
(124, 13, 29),
(125, 13, 30),
(126, 13, 31),
(134, 14, 25),
(135, 14, 26),
(136, 14, 30),
(137, 14, 31),
(138, 16, 25),
(139, 16, 26),
(170, 11, 25),
(171, 11, 26),
(172, 11, 27),
(173, 11, 29),
(174, 11, 30),
(175, 11, 31),
(176, 11, 32),
(177, 11, 33),
(178, 11, 36),
(179, 15, 25),
(180, 15, 26),
(181, 15, 30),
(182, 12, 25),
(183, 12, 26),
(184, 12, 27),
(185, 12, 29),
(186, 12, 30),
(187, 12, 31),
(188, 12, 32);

-- --------------------------------------------------------

--
-- Table structure for table `room_features`
--

CREATE TABLE `room_features` (
  `sr_no` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `features_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_features`
--

INSERT INTO `room_features` (`sr_no`, `room_id`, `features_id`) VALUES
(118, 13, 6),
(119, 13, 12),
(120, 13, 13),
(121, 13, 14),
(122, 13, 15),
(123, 13, 17),
(124, 13, 19),
(133, 14, 6),
(134, 14, 10),
(135, 14, 11),
(136, 14, 14),
(137, 16, 6),
(138, 16, 14),
(178, 11, 6),
(179, 11, 10),
(180, 11, 12),
(181, 11, 13),
(182, 11, 14),
(183, 11, 16),
(184, 11, 17),
(185, 11, 18),
(186, 11, 19),
(187, 11, 20),
(188, 11, 21),
(189, 11, 22),
(190, 15, 6),
(191, 15, 11),
(192, 15, 14),
(193, 12, 6),
(194, 12, 10),
(195, 12, 12),
(196, 12, 13),
(197, 12, 14),
(198, 12, 15),
(199, 12, 16),
(200, 12, 17),
(201, 12, 18),
(202, 12, 19);

-- --------------------------------------------------------

--
-- Table structure for table `room_images`
--

CREATE TABLE `room_images` (
  `sr_no` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `image` varchar(150) NOT NULL,
  `thumb` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `sr_no` int(10) NOT NULL,
  `site_title` varchar(25) NOT NULL,
  `site_about` varchar(250) NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`sr_no`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'StayEasy', 'Welcome to StayEasy, your premier destination for effortless hotel booking and management. With StayEasy, we redefine the way you experience hospitality, offering personalized services and curated accommodations tailored to your preferences.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team_details`
--

CREATE TABLE `team_details` (
  `sr_no` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_details`
--

INSERT INTO `team_details` (`sr_no`, `name`, `picture`) VALUES
(33, 'John', 'IMG_55402.jpg'),
(34, 'Kylie', 'IMG_91700.jpg'),
(36, 'Lorenzo', 'IMG_32559.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_cred`
--

CREATE TABLE `user_cred` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(120) NOT NULL,
  `phonenum` varchar(13) NOT NULL,
  `pincode` int(6) NOT NULL,
  `dob` date NOT NULL,
  `profile` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `verification_code` varchar(200) NOT NULL,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `datentime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_cred`
--

INSERT INTO `user_cred` (`id`, `name`, `email`, `address`, `phonenum`, `pincode`, `dob`, `profile`, `password`, `verification_code`, `is_verified`, `status`, `datentime`) VALUES
(11, 'Vadhel Pranav', 'alpesh@gmail.com', 'bharatnagar', '7878747474', 364002, '2024-03-12', 'IMG_23379.jpeg', '$2y$10$eZ7AwFNj4/y.D4nzCdqwX./SESplLPJASgAkg4HlSSWWquK4s5Cxa', '', 0, 1, '2024-03-11 11:37:00'),
(14, 'Poojan', 'trivedipoojan92@gmail.com', 'bhavnagar', '9409559683', 364002, '2004-08-20', 'IMG_20700.jpeg', '$2y$10$SXHEJ7P4dXu8dSwZ52lewOt2n7vuqlWBiLUkIDkdkOUqsa0RpBkB6', '', 0, 1, '2024-03-24 14:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `datentime` datetime NOT NULL DEFAULT current_timestamp(),
  `seen` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`sr_no`, `name`, `email`, `subject`, `message`, `datentime`, `seen`) VALUES
(26, 'Poojan Trivedi', 'trivedipoojan90@gmail.com', 'Inquiry Regarding Room Availability and Amenities', 'I hope this message finds you well. I&#039;m interested in booking a room at your hotel and would like to inquire about room availability, rates, and amenities offered. Additionally, do you have any special packages or discounts available? Thank you for your assistance.', '2024-03-26 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cred`
--
ALTER TABLE `admin_cred`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `booking_order`
--
ALTER TABLE `booking_order`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`sr_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_review`
--
ALTER TABLE `rating_review`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_facilities`
--
ALTER TABLE `room_facilities`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `facilities_id` (`facilities_id`);

--
-- Indexes for table `room_features`
--
ALTER TABLE `room_features`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `features id` (`features_id`),
  ADD KEY `rm id` (`room_id`);

--
-- Indexes for table `room_images`
--
ALTER TABLE `room_images`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `team_details`
--
ALTER TABLE `team_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `user_cred`
--
ALTER TABLE `user_cred`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`sr_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cred`
--
ALTER TABLE `admin_cred`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `booking_order`
--
ALTER TABLE `booking_order`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rating_review`
--
ALTER TABLE `rating_review`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `room_facilities`
--
ALTER TABLE `room_facilities`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `room_features`
--
ALTER TABLE `room_features`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `room_images`
--
ALTER TABLE `room_images`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_details`
--
ALTER TABLE `team_details`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_cred`
--
ALTER TABLE `user_cred`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `booking_details_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking_order` (`booking_id`);

--
-- Constraints for table `booking_order`
--
ALTER TABLE `booking_order`
  ADD CONSTRAINT `booking_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_cred` (`id`),
  ADD CONSTRAINT `booking_order_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `rating_review`
--
ALTER TABLE `rating_review`
  ADD CONSTRAINT `rating_review_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking_order` (`booking_id`),
  ADD CONSTRAINT `rating_review_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `rating_review_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user_cred` (`id`);

--
-- Constraints for table `room_facilities`
--
ALTER TABLE `room_facilities`
  ADD CONSTRAINT `facilities_id` FOREIGN KEY (`facilities_id`) REFERENCES `facilities` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `room_id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `room_features`
--
ALTER TABLE `room_features`
  ADD CONSTRAINT `features id` FOREIGN KEY (`features_id`) REFERENCES `features` (`id`),
  ADD CONSTRAINT `rm id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `room_images`
--
ALTER TABLE `room_images`
  ADD CONSTRAINT `room_images_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
