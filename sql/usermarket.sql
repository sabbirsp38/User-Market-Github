-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 12:28 PM
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
  `p_sub_catagory` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Sabbir', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `en_title` varchar(250) NOT NULL,
  `de_title` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL,
  `en_banner_title` varchar(250) NOT NULL,
  `de_banner_title` varchar(250) NOT NULL,
  `en_banner_dec` varchar(250) NOT NULL,
  `de_banner_dec` varchar(250) NOT NULL,
  `en_botton_text` varchar(250) NOT NULL,
  `de_botton_text` varchar(250) NOT NULL,
  `button_url` varchar(250) NOT NULL,
  `banner_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_id`, `en_title`, `de_title`, `icon`, `en_banner_title`, `de_banner_title`, `en_banner_dec`, `de_banner_dec`, `en_botton_text`, `de_botton_text`, `button_url`, `banner_img`) VALUES
(1, 1, 'name English 1', 'Name Garman 1', 'cat1.png', '', '', '', '', '', '', '', ''),
(3, 3, 'Genarel ', 'Garman Genarel', 'cat1.png', 'English Title database', 'Garman Title database', 'English Description database', 'Garman Description database', 'English button database', 'Garman button database', 'profile/post-ad.php', ''),
(7, 0, 't', 't', 'dbbf1baad3.png', '', '', '', '', '', '', '', '');

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
  `de_country` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `en_city`, `de_city`, `en_zip_code`, `de_zip_code`, `en_country`, `de_country`) VALUES
(1, 'Dhaka', 'Dhaka gar', '111', 'ggg', 'bd', 'gr'),
(2, 'Norshingdi', 'Norshingdi g', '222', 'gm', 'india', 'india gar');

-- --------------------------------------------------------

--
-- Table structure for table `sub_catagory`
--

CREATE TABLE `sub_catagory` (
  `id` int(11) NOT NULL,
  `parent_cat` int(11) NOT NULL,
  `en_name` varchar(250) NOT NULL,
  `de_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_catagory`
--

INSERT INTO `sub_catagory` (`id`, `parent_cat`, `en_name`, `de_name`) VALUES
(1, 3, 'English Sub Cat', 'Garman Sub Cat'),
(2, 3, 'English Sub Cat 2', 'Garman Sub Cat 2'),
(3, 3, 'English Sub Cat 2', 'Garman Sub Cat 3');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- Indexes for table `sub_catagory`
--
ALTER TABLE `sub_catagory`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_catagory`
--
ALTER TABLE `sub_catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
