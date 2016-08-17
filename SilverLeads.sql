-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2016 at 11:22 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `SilverLeads`
--

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE IF NOT EXISTS `Comments` (
`id` int(100) NOT NULL,
  `leads_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `comments` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Comments`
--

INSERT INTO `Comments` (`id`, `leads_id`, `user_id`, `comments`, `createdAt`) VALUES
(1, 12, 0, 'asdsdsds', '2016-08-04 05:36:05'),
(2, 13, 0, 'asdsdsds', '2016-08-04 05:36:57'),
(3, 14, 0, 'asdsdsds', '2016-08-04 05:37:54'),
(4, 15, 0, 'asdsdsds test', '2016-08-04 05:39:54'),
(5, 16, 0, 'asdsdsd asdsdsad ', '2016-08-04 05:51:22'),
(7, 1, 0, '2', '2016-08-04 10:20:05'),
(8, 2, 0, 'adsdsd', '2016-08-04 11:17:59'),
(9, 16, 0, 'sdsd sdsd sd', '2016-08-05 09:08:53'),
(10, 9, 0, 'save', '2016-08-05 09:49:06'),
(11, 9, 0, '', '2016-08-05 09:51:08'),
(12, 9, 0, '', '2016-08-05 09:51:14'),
(13, 9, 0, 'sdfdfdfd', '2016-08-05 09:51:20'),
(14, 9, 0, 'sdfdf dfd fdf df', '2016-08-05 09:52:47'),
(15, 16, 0, 'sdfdf df fdf', '2016-08-05 09:57:52'),
(17, 10, 0, 'test', '2016-08-08 06:18:18'),
(18, 5, 0, 'test', '2016-08-08 06:46:42'),
(19, 5, 0, 'sdfdf', '2016-08-08 07:00:51'),
(20, 5, 0, 'sdfdf', '2016-08-08 07:00:55'),
(21, 5, 0, 'sdfdf', '2016-08-08 07:00:56'),
(22, 5, 0, 'sdfdf', '2016-08-08 07:00:57'),
(23, 5, 0, 'sdfdf', '2016-08-08 07:00:58'),
(24, 5, 0, 'sdfdf', '2016-08-08 07:00:59'),
(25, 5, 0, 'sdfdf', '2016-08-08 07:01:00'),
(26, 5, 0, 'sdfdf', '2016-08-08 07:01:01'),
(27, 5, 0, 'sdfdf', '2016-08-08 07:01:01'),
(28, 5, 0, 'sdfdf', '2016-08-08 07:01:01'),
(29, 5, 0, 'sdfdf', '2016-08-08 07:02:01'),
(30, 5, 0, 'sdfdf', '2016-08-08 07:02:05'),
(31, 5, 0, 'sdfdfdf', '2016-08-08 07:03:25'),
(32, 5, 0, 'sdfdfdf', '2016-08-08 07:03:28'),
(33, 5, 0, 'sdfdfdf', '2016-08-08 07:03:53'),
(34, 5, 0, 'sdfdfdf', '2016-08-08 07:03:58'),
(35, 5, 0, 'sddf', '2016-08-08 07:06:32'),
(36, 5, 0, 'scsddsdsd', '2016-08-08 07:08:25'),
(37, 5, 0, 'scsddsdsd sdfdfdf', '2016-08-08 07:08:29'),
(38, 5, 0, 'sdfdfdf', '2016-08-08 07:09:01'),
(39, 5, 0, 'sdfdf', '2016-08-08 07:19:00'),
(40, 5, 0, 'sdfdf', '2016-08-08 07:19:02'),
(41, 5, 0, 'sdfdf', '2016-08-08 07:19:44'),
(42, 5, 0, 'sdfdf sdfdfdf', '2016-08-08 07:19:50'),
(43, 5, 0, 'sdfdff', '2016-08-08 07:20:22'),
(44, 5, 0, 'sdfdff sddf', '2016-08-08 07:20:28'),
(45, 5, 0, 'sdfdf', '2016-08-08 07:21:05'),
(46, 5, 0, 'sdfdf', '2016-08-08 07:21:20'),
(47, 5, 0, 'test', '2016-08-08 07:24:32'),
(48, 5, 0, 'test next', '2016-08-08 07:24:39'),
(49, 5, 0, 'tesdfdfdsf sdf ', '2016-08-08 07:24:56'),
(50, 5, 0, 'tesdfdfdsf sdf  sdfdfdfdf', '2016-08-08 07:25:03'),
(51, 5, 0, 'tesdfdfdsf sdf  sdfdfdfdfsdfdf dff', '2016-08-08 07:25:13'),
(52, 5, 0, 'tesdfdfdsf sdf  sdfdfdfdfsdfdf dff', '2016-08-08 07:25:15'),
(53, 5, 0, 'tesdfdfdsf sdf  sdfdfdfdfsdfdf dff', '2016-08-08 07:25:18'),
(54, 5, 0, 'tesdfdfdsf sdf  sdfdfdfdfsdfdf dff', '2016-08-08 07:25:19'),
(55, 5, 0, 'tesdfdfdsf sdf  sdfdfdfdfsdfdf dff', '2016-08-08 07:25:21'),
(56, 5, 0, 'tesdfdfdsf sdf  sdfdfdfdfsdfdf dff', '2016-08-08 07:25:23'),
(57, 5, 0, 'tesdfdfdsf sdf  sdfdfdfdfsdfdf dff sdfdf', '2016-08-08 07:25:29'),
(58, 5, 0, 'sdfdfdf', '2016-08-08 07:28:47'),
(59, 5, 0, 'sdfdfdf sddf sdfsdfdsf sdfs dfsd fdsf ds', '2016-08-08 07:28:53'),
(60, 5, 0, 'sdfdfdf sddf sdfsdfdsf sdfs dfsd fdsf ds sdfdf', '2016-08-08 07:29:00'),
(61, 5, 0, 'sddfd df sdf', '2016-08-08 07:29:33'),
(62, 5, 0, 'dxfdf df', '2016-08-08 07:30:10'),
(63, 5, 0, 'sdfdfd', '2016-08-08 07:32:34'),
(64, 5, 0, 'sdfdfd', '2016-08-08 07:37:43'),
(65, 5, 0, 'sdfdfd sdfdf fds fdsf sdfsd', '2016-08-08 07:37:47'),
(66, 5, 0, 'sdfdfd sdfdf fds fdsf sdfsdsdfdf  sdfdf', '2016-08-08 07:37:51'),
(67, 5, 0, 'sdfdfdfsdfds sdf ds', '2016-08-08 07:38:41'),
(68, 5, 0, 'sdfdf dsf sdf ds', '2016-08-08 07:41:00'),
(69, 5, 0, 'skjdfdjsf ksdfkbdf ksf s f sf fsjd f', '2016-08-08 07:41:14'),
(70, 5, 0, 'dsfdf dfdsf sdf', '2016-08-08 07:42:09'),
(71, 6, 0, 'sdfdf sfdsf df', '2016-08-08 07:42:29'),
(72, 6, 0, 'sdfdfd dsfdfs sdf sd fsdf sdf', '2016-08-08 07:42:40'),
(73, 19, 0, 'assdsa dasd ', '2016-08-08 07:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `Leads`
--

CREATE TABLE IF NOT EXISTS `Leads` (
`id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `lat` float NOT NULL,
  `longt` float NOT NULL,
  `favorite` tinyint(1) NOT NULL DEFAULT '0',
  `archive` tinyint(1) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Leads`
--

INSERT INTO `Leads` (`id`, `name`, `mobile`, `email`, `address`, `status`, `lat`, `longt`, `favorite`, `archive`, `createdAt`, `updatedAt`) VALUES
(1, 'delete folder test2', '234123232', 'bivinvinod2@gmail.com', 'Off.Thondayad Jn., Bypass Road2', 'closed', 1232, 1232, 1, 1, '2016-08-03 13:05:12', '2016-08-05 10:23:07'),
(2, 'delete folder test', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 0, 1, '2016-08-03 13:06:01', '2016-08-04 13:15:13'),
(3, 'test', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 0, 1, '2016-08-04 05:06:37', '2016-08-08 05:09:42'),
(4, 'test 123', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 0, 1, '2016-08-04 05:07:51', '2016-08-04 13:17:06'),
(5, 'delete folder test', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 1, 0, '2016-08-04 05:12:29', '2016-08-08 09:05:50'),
(6, 'delete folder test', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 1, 0, '2016-08-04 05:15:27', '2016-08-08 09:05:57'),
(7, 'delete folder test', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 1, 0, '2016-08-04 05:16:04', '2016-08-08 09:06:16'),
(8, 'delete folder test', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 0, 0, '2016-08-04 05:16:59', '0000-00-00 00:00:00'),
(9, 'delete folder test', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 1, 0, '2016-08-04 05:17:54', '2016-08-05 11:15:56'),
(10, 'delete folder test', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'called', 123, 123, 0, 0, '2016-08-04 05:19:23', '2016-08-08 06:28:59'),
(11, 'delete folder test', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 0, 0, '2016-08-04 05:20:49', '0000-00-00 00:00:00'),
(12, 'delete folder test', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 0, 0, '2016-08-04 05:36:04', '0000-00-00 00:00:00'),
(13, 'delete folder test', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 0, 1, '2016-08-04 05:36:57', '2016-08-04 13:15:21'),
(14, 'delete folder test', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 0, 0, '2016-08-04 05:37:54', '2016-08-05 10:52:50'),
(15, 'delete folder test', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 0, 1, '2016-08-04 05:39:54', '2016-08-04 13:21:13'),
(16, 'sfdf', '23412323', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'called', 123, 123, 0, 1, '2016-08-04 05:51:22', '2016-08-08 05:52:49'),
(18, 'with picks', '123123213', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 11.2479, 75.8343, 1, 1, '2016-08-04 11:42:33', '2016-08-08 05:30:34'),
(19, 'sdasdasdsad asd asd', '123123213', 'bivinvinod@gmail.com', 'Off.Thondayad Jn., Bypass Road', 'open', 123, 123, 0, 0, '2016-08-08 07:59:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Photos`
--

CREATE TABLE IF NOT EXISTS `Photos` (
`id` int(100) NOT NULL,
  `leads_id` int(100) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Photos`
--

INSERT INTO `Photos` (`id`, `leads_id`, `file_name`) VALUES
(1, 0, 'fSbkJ9RUGiOIV7xW_leadphoto_1.png'),
(2, 0, 'fSbkJ9RUGiOIV7xW_leadphoto_11.png'),
(3, 0, '38vxnDiTtdpXNwRU_leadphoto_1.png'),
(4, 0, '38vxnDiTtdpXNwRU_leadphoto_11.png'),
(5, 0, '38vxnDiTtdpXNwRU_leadphoto_12.png'),
(6, 0, 'vUR8gJd42cSmoAbH_leadphoto_1.jpg'),
(7, 14, '0PQVxRn9hGOY73iE_leadphoto_1.png'),
(8, 14, '0PQVxRn9hGOY73iE_leadphoto_11.png'),
(9, 14, 'GUwFfn401AtTK2oh_leadphoto_1.png'),
(10, 14, 'GUwFfn401AtTK2oh_leadphoto_11.png'),
(11, 14, 'GUwFfn401AtTK2oh_leadphoto_12.png'),
(12, 15, 'dLfAqhZCF82c40Vm_leadphoto_1.png'),
(13, 15, 'dLfAqhZCF82c40Vm_leadphoto_11.png'),
(14, 15, 'dLfAqhZCF82c40Vm_leadphoto_12.png'),
(15, 15, 'XfN7HlsOr4ZqwgPQ_leadphoto_1.png'),
(16, 15, 'XfN7HlsOr4ZqwgPQ_leadphoto_11.png'),
(17, 15, 'XfN7HlsOr4ZqwgPQ_leadphoto_12.png'),
(18, 16, 'lg7ZXQsORSyBuvtp_leadphoto_1.png'),
(19, 16, 'lg7ZXQsORSyBuvtp_leadphoto_11.png'),
(20, 16, 'lg7ZXQsORSyBuvtp_leadphoto_12.png'),
(21, 16, '4HpXcd673FihtAUI_leadphoto_1.png'),
(22, 16, '4HpXcd673FihtAUI_leadphoto_11.png'),
(27, 1, 'Oy8F6zgjtUJfaRWH_leadphoto_1.jpg'),
(31, 4, 'DpCHFKl9iZGmASUz_leadphoto_1.png'),
(32, 4, 'DpCHFKl9iZGmASUz_leadphoto_11.png'),
(33, 4, 'DpCHFKl9iZGmASUz_leadphoto_12.png'),
(34, 4, 'EZXJWnxAgyCbtRPG_leadphoto_1.png'),
(35, 4, 'EZXJWnxAgyCbtRPG_leadphoto_11.png'),
(36, 4, 'EZXJWnxAgyCbtRPG_leadphoto_12.png'),
(37, 4, 'CkgMnJ2UzNImKvcj_leadphoto_1.png'),
(38, 4, 'CkgMnJ2UzNImKvcj_leadphoto_11.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Comments`
--
ALTER TABLE `Comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Leads`
--
ALTER TABLE `Leads`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Photos`
--
ALTER TABLE `Photos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Comments`
--
ALTER TABLE `Comments`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `Leads`
--
ALTER TABLE `Leads`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `Photos`
--
ALTER TABLE `Photos`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
