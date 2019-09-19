-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 07:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sodec_nepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `mmt_achievement`
--

CREATE TABLE `mmt_achievement` (
  `id` tinyint(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `achievement_description` tinytext,
  `start_year` varchar(20) NOT NULL,
  `start_month` enum('Jan','Feb','March','April','May','June','July','Aug','Sept','Oct','Nov','Dec') NOT NULL,
  `end_year` varchar(20) DEFAULT NULL,
  `end_month` enum('Jan','Feb','March','April','May','June','July','Aug','Sept','Oct','Nov','Dec') DEFAULT NULL,
  `client` varchar(50) NOT NULL,
  `work_1` varchar(100) DEFAULT NULL,
  `work_2` varchar(100) DEFAULT NULL,
  `work_3` varchar(100) DEFAULT NULL,
  `work_4` varchar(100) DEFAULT NULL,
  `work_5` varchar(100) DEFAULT NULL,
  `status` enum('ongoing','completed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mmt_admin`
--

CREATE TABLE `mmt_admin` (
  `id` int(100) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `role` enum('superadmin','admin') NOT NULL,
  `status` enum('active','in_active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmt_admin`
--

INSERT INTO `mmt_admin` (`id`, `f_name`, `l_name`, `email`, `password`, `address`, `contact`, `role`, `status`) VALUES
(3, 'Rajnikant', 'Koirala', 'amir@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'ktm', '9851248338', 'superadmin', 'active'),
(4, 'Sooraz', 'Koirala', 'sooraz@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'ktm', '9851214578', 'superadmin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `mmt_imageslider`
--

CREATE TABLE `mmt_imageslider` (
  `id` int(11) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `position` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20') NOT NULL,
  `status` enum('active','in_active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmt_imageslider`
--

INSERT INTO `mmt_imageslider` (`id`, `image_title`, `image_path`, `position`, `status`) VALUES
(13, 'hello its me amir', 'e126ae6ca38457f6db1b771b35a58cc9.png', '1', 'active'),
(14, 'Database client version: libmysql - mysqlnd 5.0.12-dev - 20150407 - $Id: 38fea24f2847fa7519001be390c98ae0acafe387 $', '78f0e98e5c8931e2989ebc5c547417c6.png', '2', 'active'),
(15, 'sooraz is a bad daddy', 'ab53985b166a784ad446fa4c76fe329a.png', '5', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `mmt_message`
--

CREATE TABLE `mmt_message` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mmt_notice`
--

CREATE TABLE `mmt_notice` (
  `id` tinyint(4) NOT NULL,
  `tv_title` tinytext NOT NULL,
  `tv_description` longtext NOT NULL,
  `status` enum('active','in_active') NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmt_notice`
--

INSERT INTO `mmt_notice` (`id`, `tv_title`, `tv_description`, `status`, `image_path`, `created_date`) VALUES
(2, 'Sankalpa Television Programme', '<p>SANKALPA&ndash; &ldquo;Susaasan ka laagi&rdquo; (for good governance) will be aired every Thursday on 7:25 pm starting from 4th August 2016 on Nepal Television (NTV)</p>\r\n', 'active', 'ce59e17fdb31fe5b55719aac6c9ce9fd.png', '2019-09-11'),
(3, 'Welcome to SODEC Nepal', '<p style=\"text-align:justify\">Development Communication Society, Nepal (SODEC &ndash; Nepal) is a non-governmental organization registered at District Administration Office in Kathmandu and is affiliated with Social Welfare Council since 2010.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">The organization was founded by a group of mass communication professionals with the goal to exercise the influence of communications media for better access to information, education and knowledge and act as a stimulant for development. The premise for SODEC-Nepal&rsquo;s involvement in development communication is based on the concept of multiplicity; democratization and participation at all levels by stressing the cultural and political identities of the local communities.</p>\r\n', 'active', '30260a407c60bfb2985372f379fb894b.png', '2019-09-18'),
(4, 'ERE status=\'active\'WHERE status=\'active\'WHERE status=\'active\'WHERE status=\'active\'WHERE status=\'active\'', '<p>ERE status=&#39;active&#39;WHERE status=&#39;active&#39;WHERE status=&#39;active&#39;WHERE status=&#39;active&#39;WHERE status=&#39;active&#39; ERE status=&#39;active&#39;WHERE status=&#39;active&#39;WHERE status=&#39;active&#39;WHERE status=&#39;active&#39;WHERE status=&#39;active&#39; ERE status=&#39;active&#39;WHERE status=&#39;active&#39;WHERE status=&#39;active&#39;WHERE status=&#39;active&#39;WHERE status=&#39;active&#39;</p>\r\n', 'active', '2ecaf99587bb3194252fff59dd407cf4.png', '2019-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `mmt_partner`
--

CREATE TABLE `mmt_partner` (
  `id` int(11) NOT NULL,
  `partner_name` varchar(100) NOT NULL,
  `website` varchar(255) NOT NULL,
  `status` enum('active','in_active') NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mmt_program`
--

CREATE TABLE `mmt_program` (
  `id` tinyint(4) NOT NULL,
  `tv_title` tinytext NOT NULL,
  `tv_description` longtext NOT NULL,
  `status` enum('active','in_active') NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmt_program`
--

INSERT INTO `mmt_program` (`id`, `tv_title`, `tv_description`, `status`, `image_path`, `created_date`) VALUES
(11, 'Maroon 5, Ed Sheeran, Taylor Swift, Adele, Sam Smith', '<p>, Shawn Mendes Best English Songs 2019 , Shawn Mendes Best English Songs 2019, Shawn Mendes Best English Songs 2019, Shawn Mendes Best English Songs 2019</p>\r\n', 'active', '6d70f9fd600017710b233021e0b410fa.png', '2019-09-03'),
(12, 'Shawn Mendes Best English Songs 2019', '<p>Shawn Mendes Best English Songs 2019,Shawn Mendes Best English Songs 2019,Shawn Mendes Best English Songs 2019</p>\r\n', 'active', '62ab1c67473ac4433a25cf82ff44528c.png', '2019-09-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mmt_achievement`
--
ALTER TABLE `mmt_achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mmt_admin`
--
ALTER TABLE `mmt_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mmt_imageslider`
--
ALTER TABLE `mmt_imageslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mmt_message`
--
ALTER TABLE `mmt_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mmt_notice`
--
ALTER TABLE `mmt_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mmt_partner`
--
ALTER TABLE `mmt_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mmt_program`
--
ALTER TABLE `mmt_program`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mmt_achievement`
--
ALTER TABLE `mmt_achievement`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mmt_admin`
--
ALTER TABLE `mmt_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mmt_imageslider`
--
ALTER TABLE `mmt_imageslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mmt_message`
--
ALTER TABLE `mmt_message`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mmt_notice`
--
ALTER TABLE `mmt_notice`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mmt_partner`
--
ALTER TABLE `mmt_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mmt_program`
--
ALTER TABLE `mmt_program`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
