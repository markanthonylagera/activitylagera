-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 01:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carigaratf_dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_tbl`
--

CREATE TABLE `personal_tbl` (
  `quarantine_pass_no` char(5) NOT NULL,
  `img_file` varchar(200) DEFAULT NULL,
  `person_name` varchar(200) DEFAULT NULL,
  `age` char(2) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `temp` varchar(8) DEFAULT NULL,
  `date_issued` varchar(200) DEFAULT NULL,
  `date_expired` varchar(200) DEFAULT NULL,
  `purpose` varchar(200) DEFAULT NULL,
  `going` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_tbl`
--

INSERT INTO `personal_tbl` (`quarantine_pass_no`, `img_file`, `person_name`, `age`, `address`, `contact`, `temp`, `date_issued`, `date_expired`, `purpose`, `going`) VALUES
('00000', '2019-11-16-10-45-39-009.jpg', 'safd', '11', 'lldlfl', 'hjskldlfls', '28.99', '2020 04 05', '2020-10-09', 'qdsdasdsa', 'saddasaddasdad'),
('00001', '2019-11-16-10-45-02-244.jpg', 'chloe balindo', '22', 'utap', '092222222', '34.54', '2020 07 08', '2020 07 09', 'food', 'canlampay'),
('00002', '2019-11-16-10-44-45-626.jpg', 'Marlet Rance', '34', 'Barugo', '098765432', '34.87', '2020-08-04', '2020-09-04', 'Attending Gatherings', 'Church'),
('00004', '2019-10-23-13-07-24.jpg', 'Shaina Balindo', '49', 'Tunga , Leyte', '09484165186', '55.60', '2020 06 ,18', '2020 06 ,18', 'medicine', 'punong'),
('00007', '2019-11-16-10-45-02-244.jpg', 'aksldld', '34', 'smmdmd', 'kejwkewlr', '26.70', '89932030', '23738882', 'Visiting Relatives', 'Brgy.Naugisan'),
('13579', '2019-10-23-13-05-37.jpg', 'may', '54', 'utap', 'fb,com', '01.01', '2020 02 02', '2020 03 03', 'School Matters', 'EVSU-CC'),
('22222', '2019-10-23-13-06-35.jpg', 'aaaaaaa', '20', 'ccccc', 'ssssss', '76.09', '232323', '232323', 'lllll', 'ppppp'),
('88888', '2019-11-16-10-45-39-009.jpg', 'nnnnn', '33', 'fdfdg', '3332222', '33.54', '2020 06 ,18', '2020 06 ,18', 'hhhhhh', 'lllllllllll');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_tbl`
--
ALTER TABLE `personal_tbl`
  ADD PRIMARY KEY (`quarantine_pass_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
