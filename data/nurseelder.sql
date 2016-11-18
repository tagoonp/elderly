-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 08:43 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nurseelder`
--

-- --------------------------------------------------------

--
-- Table structure for table `f3s2_config`
--

CREATE TABLE `f3s2_config` (
  `cf_id` int(10) UNSIGNED NOT NULL,
  `cf_key` varchar(100) NOT NULL,
  `cf_value` varchar(255) NOT NULL,
  `cf_value_en` varchar(255) NOT NULL,
  `cf_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f3s2_config`
--

INSERT INTO `f3s2_config` (`cf_id`, `cf_key`, `cf_value`, `cf_value_en`, `cf_link`) VALUES
(1, 'title', '::: สถานวิจัยระบบการดูแลผู้สูงอายุไทย :::', '::: Research Center for Caring System of Thai Elderly :::', ''),
(2, 'phone', '074-286472', '074-286472', ''),
(3, 'fax', '074-286421', '074-286421', ''),
(4, 'web', 'http://www.psunurseelder.com/', 'http://www.psunurseelder.com/', 'http://www.psunurseelder.com/'),
(5, 'lang', 'th', 'th', '');

-- --------------------------------------------------------

--
-- Table structure for table `f3s2_menu`
--

CREATE TABLE `f3s2_menu` (
  `mn_id` int(10) UNSIGNED NOT NULL,
  `mn_title_th` varchar(200) NOT NULL,
  `mn_title_en` varchar(200) NOT NULL,
  `mn_link` text NOT NULL,
  `mn_position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f3s2_menu`
--

INSERT INTO `f3s2_menu` (`mn_id`, `mn_title_th`, `mn_title_en`, `mn_link`, `mn_position`) VALUES
(1, 'เกี่ยวกับเรา', 'About us', '', 1),
(2, 'ด้านการวิจัย', 'Research', '', 1),
(3, 'กระดานสนทนา', 'Webboard', '', 1),
(4, 'แบบฟอร์ม', 'Forms', '', 1),
(5, 'ติดต่อเรา', 'Contact', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `f3s2_submenu`
--

CREATE TABLE `f3s2_submenu` (
  `smn_id` int(10) UNSIGNED NOT NULL,
  `smn_title_th` varchar(200) NOT NULL,
  `smn_title_en` varchar(200) NOT NULL,
  `smn_link` text NOT NULL,
  `smn_mainmenu_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f3s2_submenu`
--

INSERT INTO `f3s2_submenu` (`smn_id`, `smn_title_th`, `smn_title_en`, `smn_link`, `smn_mainmenu_item`) VALUES
(1, 'ประวัติความเป็นมา', 'Background', '', 1),
(2, 'คณะกรรมการ', 'Committee', '', 1),
(3, 'นักศึกษาในสังกัดสถานวิจัย', 'Student user RC', '', 1),
(4, 'รายงานผลการดำเนินงาน', 'Performance reports', '', 1),
(5, 'งานวิจัย', 'Research', '', 2),
(6, 'ผลงานตีพิมพ์', 'Publications', '', 2),
(7, 'นวัตกรรม', 'Innovations', '', 2),
(8, 'เครือข่ายงานวิจัย', 'Research network\r\n', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f3s2_config`
--
ALTER TABLE `f3s2_config`
  ADD PRIMARY KEY (`cf_id`);

--
-- Indexes for table `f3s2_menu`
--
ALTER TABLE `f3s2_menu`
  ADD PRIMARY KEY (`mn_id`);

--
-- Indexes for table `f3s2_submenu`
--
ALTER TABLE `f3s2_submenu`
  ADD PRIMARY KEY (`smn_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f3s2_config`
--
ALTER TABLE `f3s2_config`
  MODIFY `cf_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `f3s2_menu`
--
ALTER TABLE `f3s2_menu`
  MODIFY `mn_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `f3s2_submenu`
--
ALTER TABLE `f3s2_submenu`
  MODIFY `smn_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
