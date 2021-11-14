-- Done by Suhaeni Cici  -->

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 06:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prismproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year` int(4) NOT NULL,
  `Season_id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `year`, `Season_id`, `city`) VALUES
(1, '1900 Summer', 1900, 0, 'Paris'),
(2, '1904 Summer', 1904, 0, 'St. Louis'),
(3, '1906 Summer', 1906, 0, 'Athina'),
(4, '1908 Summer', 1908, 0, 'London'),
(5, '1912 Summer', 1912, 0, 'Stockholm'),
(6, '1920 Summer', 1920, 0, 'Antwerpen'),
(7, '1924 Summer', 1924, 0, 'Paris'),
(8, '1924 Winter', 1924, 1, 'Chamonix'),
(9, '1928 Summer', 1928, 0, 'Amsterdam'),
(10, '1928 Winter', 1928, 1, 'Sankt Moritz'),
(11, '1932 Summer', 1932, 0, 'Los Angeles'),
(12, '1932 Winter', 1932, 1, 'Lake Placid'),
(13, '1936 Summer', 1936, 0, 'Berlin'),
(14, '1936 Winter', 1936, 1, 'Garmisch-Partenkirchen'),
(15, '1948 Summer', 1948, 0, 'London'),
(16, '1948 Winter', 1948, 1, 'Sankt Moritz'),
(17, '1952 Summer', 1952, 0, 'Helsinki'),
(18, '1952 Winter', 1952, 1, 'Oslo'),
(19, '1956 Summer', 1956, 0, 'Melbourne'),
(20, '1956 Winter', 1956, 1, 'Cortina d\'Ampezzo'),
(21, '1960 Summer', 1960, 0, 'Roma'),
(22, '1960 Winter', 1960, 1, 'Squaw Valley'),
(23, '1964 Summer', 1964, 0, 'Tokyo'),
(24, '1964 Winter', 1964, 1, 'Innsbruck'),
(25, '1968 Summer', 1968, 0, 'Mexico City'),
(26, '1968 Winter', 1968, 1, 'Grenoble'),
(27, '1972 Summer', 1972, 0, 'Munich'),
(28, '1972 Winter', 1972, 1, 'Sapporo'),
(29, '1976 Summer', 1976, 0, 'Montreal'),
(30, '1976 Winter', 1976, 1, 'Innsbruck'),
(31, '1980 Summer', 1980, 0, 'Moskva'),
(32, '1980 Winter', 1980, 1, 'Lake Placid'),
(33, '1984 Summer', 1984, 0, 'Los Angeles'),
(34, '1984 Winter', 1984, 1, 'Sarajevo'),
(35, '1988 Summer', 1988, 0, 'Seoul'),
(36, '1988 Winter', 1988, 1, 'Calgary'),
(37, '1992 Summer', 1992, 0, 'Barcelona'),
(38, '1992 Winter', 1992, 1, 'Albertville'),
(39, '1994 Winter', 1994, 1, 'Lillehammer'),
(40, '1996 Summer', 1996, 0, 'Atlanta'),
(41, '1998 Winter', 1998, 1, 'Nagano'),
(42, '2000 Summer', 2000, 0, 'Sydney'),
(43, '2002 Winter', 2002, 1, 'Salt Lake City'),
(44, '2004 Summer', 2004, 0, 'Athina'),
(45, '2006 Winter', 2006, 1, 'Torino'),
(46, '2008 Summer', 2008, 0, 'Beijing'),
(47, '2010 Winter', 2010, 1, 'Vancouver'),
(48, '2012 Summer', 2012, 0, 'London'),
(49, '2014 Winter', 2014, 1, 'Sochi'),
(50, '2016 Summer', 2016, 0, 'Rio de Janeiro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;