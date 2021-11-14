--Done by Suhaeni Cici

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 07:19 AM
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
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`) VALUES
(1, 'Alpine Skiing'),
(2, 'Archery'),
(3, 'Art Competitions'),
(4, 'Athletics'),
(5, 'Badminton'),
(6, 'Baseball'),
(7, 'Basketball'),
(8, 'Beach Volleyball'),
(9, 'Biathlon'),
(10, 'Bobsleigh'),
(11, 'Boxing'),
(12, 'Canoeing'),
(13, 'Cross Country Skiing'),
(14, 'Curling'),
(15, 'Cycling'),
(16, 'Diving'),
(17, 'Equestrianism'),
(18, 'Fencing'),
(19, 'Figure Skating'),
(20, 'Football'),
(21, 'Freestyle Skiing'),
(22, 'Golf'),
(23, 'Gymnastics'),
(24, 'Handball'),
(25, 'Hockey'),
(26, 'Ice Hockey'),
(27, 'Judo'),
(28, 'Luge'),
(29, 'Modern Pentathlon'),
(30, 'Nordic Combined'),
(31, 'Rhythmic Gymnastics'),
(32, 'Rowing'),
(33, 'Rugby Sevens'),
(34, 'Sailing'),
(35, 'Shooting'),
(36, 'Ski Jumping'),
(37, 'Softball'),
(38, 'Speed Skating'),
(39, 'Swimming'),
(40, 'Synchronized Swimming'),
(41, 'Table Tennis'),
(42, 'Taekwondo'),
(43, 'Tennis'),
(44, 'Trampolining'),
(45, 'Triathlon'),
(46, 'Tug-Of-War'),
(47, 'Volleyball'),
(48, 'Water Polo'),
(49, 'Weightlifting'),
(50, 'Wrestling');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;