-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 07:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `id` int(11) NOT NULL,
  `P_title` varchar(250) NOT NULL,
  `P_catagory` int(11) NOT NULL,
  `p_decription` text NOT NULL,
  `P_city` varchar(250) NOT NULL,
  `p_sate` varchar(250) NOT NULL,
  `p_price` varchar(250) NOT NULL,
  `p_condition` varchar(250) NOT NULL,
  `P_item_type` varchar(250) NOT NULL,
  `p_contact_number` varchar(250) NOT NULL,
  `P_imag1` varchar(250) NOT NULL,
  `P_imag2` varchar(250) NOT NULL,
  `P_imag3` varchar(250) NOT NULL,
  `P_imag4` varchar(250) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `city` varchar(250) NOT NULL,
  `county` varchar(250) NOT NULL,
  `zip_code` varchar(250) NOT NULL,
  `uni_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`id`, `P_title`, `P_catagory`, `p_decription`, `P_city`, `p_sate`, `p_price`, `p_condition`, `P_item_type`, `p_contact_number`, `P_imag1`, `P_imag2`, `P_imag3`, `P_imag4`, `time`, `city`, `county`, `zip_code`, `uni_id`) VALUES
(8, 'Ad Title', 0, 'Ad Description ', '', '', '452452452', 'Condition', 'Item Type', '9849849', '2ca8c07ce5.png', '2ca8c07ce56d7ed21f359c22d71ca52e.jpg', '2ca8c07ce56d7ed21f359c22d71ca5.png', '2ca8c07ce56d7ed21f35.png', '2022-11-04 04:49:18', 'Dhaka', 'Bangladesh', '1620', '64b4c5bed2cc943f639c0e11dbfff14a');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `en_title` varchar(250) NOT NULL,
  `de_title` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `en_title`, `de_title`, `icon`) VALUES
(1, 'name English 1', 'Name Garman 1', 'cat1.png'),
(2, 'name English 2', 'Name Garman 2', 'cat2.png');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `en_city` varchar(250) NOT NULL,
  `de_city` varchar(250) NOT NULL,
  `en_zip_code` varchar(250) NOT NULL,
  `de_zip_code` varchar(250) NOT NULL,
  `en_country` varchar(250) NOT NULL,
  `de_country` varchar(250) NOT NULL,
  `product` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `en_city`, `de_city`, `en_zip_code`, `de_zip_code`, `en_country`, `de_country`, `product`) VALUES
(1, 'Dhaka', 'Dhaka gar', '111', 'ggg', 'bd', 'gr', ''),
(2, 'Norshingdi', 'Norshingdi g', '222', 'gm', 'india', 'india gar', ''),
(3, '', '', '', '', '', '', 'aa'),
(4, '', '', '', '', '', '', 'bb');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `uni_id` varchar(250) NOT NULL,
  `email` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `city` varchar(250) NOT NULL,
  `county` varchar(250) NOT NULL,
  `zip_code` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `uni_id`, `email`, `time`, `city`, `county`, `zip_code`) VALUES
(6, 'sabbir', 'a', '64b4c5bed2cc943f639c0e11dbfff14a', 'a@a.a', '2022-11-03 05:52:57', 'Dhaka', 'Bangladesh', '1620');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
