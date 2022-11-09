-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 08:37 AM
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

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`id`, `P_title`, `P_catagory`, `p_sub_catagory`, `p_decription`, `P_city`, `p_sate`, `p_price`, `p_condition`, `P_item_type`, `p_contact_number`, `P_imag1`, `P_imag2`, `P_imag3`, `P_imag4`, `time`, `city`, `county`, `zip_code`, `uni_id`) VALUES
(14, 'product 1', 43050, 10, 'fsd fsf f sfsfsf s', '', '', '465465', 'old', 'sdfdf', '34234234234', '9c4d3e1c72.jpg', '9c4d3e1c72ead563d01bdf73bafb17d8.', '9c4d3e1c72ead563d01bdf73bafb17.', '9c4d3e1c72ead563d01b.', '2022-11-08 16:16:16', 'Dhaka', 'Bangladesh', '1620', '64b4c5bed2cc943f639c0e11dbfff14a'),
(15, 'product 2', 94368, 11, 'twet wet twwte wtwt t t', '', '', '3252353', 'old', 'twt', '3423424', '592680977c.jpg', '592680977c38c6b59b211c4753660288.', '592680977c38c6b59b211c47536602.', '592680977c38c6b59b21.', '2022-11-08 16:17:21', 'Dhaka', 'Bangladesh', '1620', '64b4c5bed2cc943f639c0e11dbfff14a'),
(16, 'p3', 43050, 10, 'sdfsdf', '', '', '324234', 'sdfdsdf', 'fdsfsdf', '325235253', 'bca6ec3978.jpg', 'bca6ec39784418157398b63702cf1ad9.', 'bca6ec39784418157398b63702cf1a.', 'bca6ec39784418157398.', '2022-11-08 16:26:33', 'Dhaka', 'Bangladesh', '1620', '64b4c5bed2cc943f639c0e11dbfff14a'),
(17, 'p4', 94368, 11, '142124', '', '', '2141', 'sg', '14214', '234234234', '9b1ae92af8.jpg', '9b1ae92af8c3f58bcd843ed33cbd51d0.', '9b1ae92af8c3f58bcd843ed33cbd51.', '9b1ae92af8c3f58bcd84.', '2022-11-08 16:27:09', 'Dhaka', 'Bangladesh', '1620', '64b4c5bed2cc943f639c0e11dbfff14a'),
(18, 'sgsgsdg', 43050, 10, 'sdgsg', '', '', '342342', 'dsfsd', 'gsdgd', '1231231', '9824b8a461.jpg', '9824b8a46150839f7206303882db4e51.', '9824b8a46150839f7206303882db4e.', '9824b8a46150839f7206.', '2022-11-08 16:27:41', 'Dhaka', 'Bangladesh', '1620', '64b4c5bed2cc943f639c0e11dbfff14a'),
(19, 'asdasd', 94368, 11, 'dsasd', '', '', 'asdqee', 'sadad', 'asda', 'asdasd', '168e8b538a.jpg', '168e8b538a9b793ec3daecf65b57e93f.', '168e8b538a9b793ec3daecf65b57e9.', '168e8b538a9b793ec3da.', '2022-11-08 16:28:44', 'Dhaka', 'Bangladesh', '1620', '64b4c5bed2cc943f639c0e11dbfff14a');

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
(8, 43050, 'cat 1', 'cat 1 g', 'c29e69ecaa.jpg', 'fwf', 'efwwef', 'fewfe', 'fewfef', 'fwef', 'fwewe', 'http://localhost/User%20markt/profile/post-ad.php', 'a617ae604d.jpg'),
(9, 94368, 'cat 2', 'cat 2 g', '83a0fd6ccd.jpg', '', '', '', '', '', '', '', '');

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
(10, 43050, 'sub 1', 'sub 1 g'),
(11, 94368, 'sub 2', 'sub 2 g');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_catagory`
--
ALTER TABLE `sub_catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
