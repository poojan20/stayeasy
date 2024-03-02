-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 06:17 AM
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
-- Database: stayeasy
--

-- --------------------------------------------------------

--
-- Table structure for table user_queries
--

CREATE TABLE user_queries (
  sr_no int(11) NOT NULL,
  name varchar(30) NOT NULL,
  email varchar(50) NOT NULL,
  subject varchar(200) NOT NULL,
  message varchar(500) NOT NULL,
  date date NOT NULL DEFAULT current_timestamp(),
  seen tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table user_queries
--
ALTER TABLE user_queries
  ADD PRIMARY KEY (sr_no);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table user_queries
--
ALTER TABLE user_queries
  MODIFY sr_no int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
