-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 06:36 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `fname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`fname`, `address`, `phone`, `email`, `type`) VALUES
('Fahad', 'kasur', '98293829', 'fahad@gmail.com', 'f'),
('Ali', 'Lahore', '83948394', 'ali@gmail.com', 's'),
('Fahad', 'kasur', '98439483', 'f@gmail.com', 'q'),
('fahar', 'djfdk', '483948', 'dfjdk@gmail.com', 'f,e,z'),
('kdfjsdska', 'dkfjdk', '9308493084', 'dfjds@gmail.com', 'food,sadaqa,qurbani'),
('kdfjak', 'dkafjkdf', '934930', 'fahad@gmail.com', 'food,sadaqa');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `fname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `child` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fname`, `address`, `phone`, `email`, `child`, `amount`, `date`) VALUES
('fahad', 'kasur', '394839048', 'fahad@gmail.com', '20', '200', '0000-00-00'),
('dfjdsk', 'djfsdkldj', '3849389', 'fd@gmail.com', '12', '$ : 100', '0000-00-00'),
('dkfjaj', 'jdklsjflks', '398439', 'fdjks@gmail.com', '292', '$ : 300', '0000-00-00'),
('dsfjkl', 'dkljfskdlaaj', '832438027', 'fkasdj@gmail.com', '2', '$ : 237', '2019-08-31'),
('dfkj', 'jdkjfak', '38482', 'fahd@gmail.com', '10', '$ : 50', '2017-01-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
