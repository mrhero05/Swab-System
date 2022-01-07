-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 10:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_swabtesting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinfo`
--

CREATE TABLE `tbl_userinfo` (
  `useri_id` int(11) NOT NULL,
  `useri_fname` varchar(50) DEFAULT NULL,
  `useri_mname` varchar(30) DEFAULT NULL,
  `useri_lname` varchar(30) DEFAULT NULL,
  `useri_birthday` date DEFAULT NULL,
  `useri_age` int(11) DEFAULT NULL,
  `useri_contact` varchar(12) DEFAULT NULL,
  `useri_email` varchar(50) DEFAULT NULL,
  `useri_address` varchar(100) DEFAULT NULL,
  `useri_street` varchar(30) DEFAULT NULL,
  `useri_bgry` varchar(30) DEFAULT NULL,
  `useri_province` varchar(30) DEFAULT NULL,
  `useri_region` varchar(30) DEFAULT NULL,
  `useri_sex` varchar(10) DEFAULT NULL,
  `useri_username` varchar(30) DEFAULT NULL,
  `useri_password` varchar(100) DEFAULT NULL,
  `useri_acctype` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`useri_id`, `useri_fname`, `useri_mname`, `useri_lname`, `useri_birthday`, `useri_age`, `useri_contact`, `useri_email`, `useri_address`, `useri_street`, `useri_bgry`, `useri_province`, `useri_region`, `useri_sex`, `useri_username`, `useri_password`, `useri_acctype`) VALUES
(1, 'Humbledog', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '0192023a7bbd73250516f069df18b500', 'administrator'),
(2, 'Hero', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user', '6ad14ba9986e3615423dfca256d04e3f', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  ADD PRIMARY KEY (`useri_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `useri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
