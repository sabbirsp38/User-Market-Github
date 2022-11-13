-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 06:09 PM
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
(20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 77798, 12, '<h4>Brand :&nbsp;Company name</h4>\r\n<p><strong>Display&nbsp;</strong>: 1.5 inch HD LCD Touch Screen</p>\r\n<p><strong>Summary</strong>&nbsp;: It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p>', '', '', '423423', 'Used', 'Mobile', '+8801982185584', '041f2d7a3b.jpg', '041f2d7a3bde421ce3a50a809de3396a.jpg', '041f2d7a3bde421ce3a50a809de339.jpg', '041f2d7a3bde421ce3a5.jpg', '2022-11-13 16:39:33', 'Dhaka', 'Bangladesh', '1620', 'cadc84c7921c956a6409fd348c01cc33');

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
(8, 43050, 'Uncategorized', 'Geen categorie', 'categories.png', 'Sell or Advertise anything online', 'Verkoop of adverteer iets online', 'Sell or Advertise anything online', 'Verkoop of adverteer iets online', 'Post Free Ad', 'Gratis advertentie plaatsen', 'profile/post-ad.php', 'b266cf036a.jpg'),
(11, 77798, ' Mobiles', 'mobiele telefoons', 'bfabd4eb43.png', 'Mobile Category banner', 'Mobiele categoriebanner', 'Mobile Category banner', 'Mobiele categoriebanner', 'Post Free Ad', 'Gratis advertentie plaatsen', 'profile/post-ad.php', '030c0e85fa.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `en_location` varchar(110) NOT NULL,
  `de_location` varchar(110) NOT NULL,
  `en_number` varchar(110) NOT NULL,
  `de_number` varchar(110) NOT NULL,
  `en_email` varchar(110) NOT NULL,
  `de_email` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `en_location`, `de_location`, `en_number`, `de_number`, `en_email`, `de_email`) VALUES
(3, 'Dhaka, Bangladesh', 'Dhaka, Bangladesh ', '01982185584', '01982185584', 'Sabbir@gmail.com', 'Sabbir@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `en_titile` varchar(250) NOT NULL,
  `de_titile` varchar(250) NOT NULL,
  `en_dec` varchar(250) NOT NULL,
  `de_dec` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `en_titile`, `de_titile`, `en_dec`, `de_dec`) VALUES
(1, 'english titile', 'Garman titile', 'englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg dec englisg de', 'Garman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman decGarman dec');

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

-- --------------------------------------------------------

--
-- Table structure for table `sellar_tipes`
--

CREATE TABLE `sellar_tipes` (
  `id` int(11) NOT NULL,
  `en_titile` varchar(250) NOT NULL,
  `de_titile` varchar(250) NOT NULL,
  `en_dec` text NOT NULL,
  `de_dec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellar_tipes`
--

INSERT INTO `sellar_tipes` (`id`, `en_titile`, `de_titile`, `en_dec`, `de_dec`) VALUES
(2, 'Safety Tips for Buyers', 'Veiligheidstips voor kopers', '<p>Contrary to popular belief.<br />Contrary to popular belief.<br />Contrary to popular belief.<br />Contrary to popular belief.<br />Contrary to popular belief.<br />Contrary to popular belief.<br />Contrary to popular belief.<br />Contrary to popular belief.<br />Contrary to popular belief.</p>', '<p>In tegenstelling tot wat vaak wordt gedacht.<br />In tegenstelling tot wat vaak wordt gedacht.<br />In tegenstelling tot wat vaak wordt gedacht.<br />In tegenstelling tot wat vaak wordt gedacht.<br />In tegenstelling tot wat vaak wordt gedacht.<br />In tegenstelling tot wat vaak wordt gedacht.<br />In tegenstelling tot wat vaak wordt gedacht.<br />In tegenstelling tot wat vaak wordt gedacht.<br />In tegenstelling tot wat vaak wordt gedacht.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `en_meta_titile` varchar(250) NOT NULL,
  `de_meta_titile` varchar(250) NOT NULL,
  `en_meta_dec` varchar(250) NOT NULL,
  `de_meta_dec` varchar(250) NOT NULL,
  `en_meta_keword` varchar(250) NOT NULL,
  `de_meta_keword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `en_meta_titile`, `de_meta_titile`, `en_meta_dec`, `de_meta_dec`, `en_meta_keword`, `de_meta_keword`) VALUES
(1, 'en_meta_titile', 'de_meta_titile', 'en_meta_dec', 'de_meta_dec', 'en_meta_keword', 'de_meta_keword');

-- --------------------------------------------------------

--
-- Table structure for table `snipet_code`
--

CREATE TABLE `snipet_code` (
  `id` int(11) NOT NULL,
  `snipet_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `social_midea`
--

CREATE TABLE `social_midea` (
  `id` int(11) NOT NULL,
  `link1` varchar(250) NOT NULL,
  `link2` varchar(250) NOT NULL,
  `link3` varchar(250) NOT NULL,
  `link4` varchar(250) NOT NULL,
  `link5` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(12, 77798, 'Mobile Phones', 'Mobieltjes'),
(13, 77798, 'Tablets', 'Tabletten');

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
(8, 'sabbir', 'adsad2132Ssd', 'cadc84c7921c956a6409fd348c01cc33', 'sabbir@gmail.com', '2022-11-13 16:10:46', 'Dhaka', 'Bangladesh', '1620');

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
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellar_tipes`
--
ALTER TABLE `sellar_tipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snipet_code`
--
ALTER TABLE `snipet_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_midea`
--
ALTER TABLE `social_midea`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sellar_tipes`
--
ALTER TABLE `sellar_tipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `snipet_code`
--
ALTER TABLE `snipet_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_midea`
--
ALTER TABLE `social_midea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_catagory`
--
ALTER TABLE `sub_catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
