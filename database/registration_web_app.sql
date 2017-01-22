-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2016 at 08:28 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `studentinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `pin_table`
--

CREATE TABLE `pin_table` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `city`) VALUES
(1, 'Shri mahavir Jain Public School', 'Kurukshetra'),
(4, 'Saini Public School', 'Kurukshetra'),
(5, 'maharana pratap public school', 'Kurukshetra'),
(7, 'Parkash Public School', 'Karnal'),
(8, 'Partap Public School', 'Karnal'),
(9, 'SD Model School', 'Karnal'),
(10, 'OPS Vidya Mandir', 'Karnal'),
(11, 'SDMN School', 'Nilokheri'),
(12, 'Guru Bhramanand School', 'Nilokheri'),
(13, 'Tagore Public School', 'Pehowa'),
(14, 'Manish Papneja School', 'Ismailabad'),
(15, 'A K DAV Public School', 'Ismailabad'),
(16, 'Study Center', 'Jind'),
(17, 'Kesari Devi Public School', 'Kurukshetra'),
(18, 'Senior Model School', 'Kurukshetra'),
(19, 'Pooja Modren Public School', 'Kurukshetra'),
(20, 'Aggarsain Public School', 'Kurukshetra'),
(21, 'Geeta Awasye School', 'Kurukshetra'),
(22, 'Seth Tek Chand School', 'Kurukshetra'),
(23, 'B R International Public School', 'Kurukshetra'),
(24, 'RKSD School', 'Kaithal'),
(25, 'Sunshine School', 'Kaithal'),
(26, 'MDN School', 'Kalayat'),
(27, 'DAV Public School', 'Kurukshetra'),
(28, 'sant nischal', 'ladwa');

-- --------------------------------------------------------

--
-- Table structure for table `submit_data`
--

CREATE TABLE `submit_data` (
  `st_id` bigint(20) unsigned NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_father` varchar(255) NOT NULL,
  `st_register` varchar(255) NOT NULL,
  `st_mobile` varchar(255) NOT NULL,
  `st_address` varchar(255) NOT NULL,
  `st_email` varchar(255) NOT NULL,
  `st_class` varchar(255) NOT NULL,
  `st_stream` varchar(255) NOT NULL,
  `st_school` varchar(255) NOT NULL,
  `st_city` varchar(255) NOT NULL,
  `st_activity` varchar(255) NOT NULL,
  `present` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pin_table`
--
ALTER TABLE `pin_table`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `submit_data`
--
ALTER TABLE `submit_data`
  ADD PRIMARY KEY (`st_id`),
  ADD UNIQUE KEY `st_id` (`st_id`),
  ADD UNIQUE KEY `st_register` (`st_register`),
  ADD UNIQUE KEY `st_register_2` (`st_register`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pin_table`
--
ALTER TABLE `pin_table`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `submit_data`
--
ALTER TABLE `submit_data`
  MODIFY `st_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;