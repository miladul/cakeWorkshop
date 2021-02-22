-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 12:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `organization_type` varchar(100) DEFAULT NULL,
  `focal_person_name` varchar(50) DEFAULT NULL,
  `focal_person_designation` varchar(255) DEFAULT NULL,
  `focal_person_phone` varchar(11) DEFAULT NULL,
  `no_of_brances` int(11) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `user_id`, `name`, `organization_type`, `focal_person_name`, `focal_person_designation`, `focal_person_phone`, `no_of_brances`, `status`, `created_at`, `updated_at`) VALUES
(10, 17, 'A2I ltd', 'Training Service Provider', 'miladul islam', 'Engineer', '01919890267', 50, 1, '2021-02-03 11:55:11', '2021-02-07 04:13:34'),
(11, 18, 'SoftBD', 'Industry Associations', 'Sakib', 'Soft. Engineer', '01919890123', 50, 1, '2021-02-03 13:02:40', NULL),
(12, 19, 'DESCO', 'DESCO E bill', 'Asif Babu', 'DGM', '01919890555', 60, 1, '2021-02-03 16:48:48', NULL),
(13, 20, '5A Technology', 'dzfx,mjfgvbn', 'Razzak', 'Software Engineer', '01868608099', 1285, 1, '2021-02-05 19:01:54', '2021-02-07 03:51:59'),
(14, 21, 'GCLM', 'Government Department', 'miladul islam', 'Engineer', '01919890267', 1285, 1, '2021-02-07 03:50:47', '2021-02-07 03:51:18'),
(15, 22, 'ETI', 'Training Service Provider', 'Ramim', 'Soft. Engineer', '01681110551', 20, 1, '2021-02-08 03:46:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `customer_type` varchar(100) DEFAULT NULL,
  `processing_time` varchar(50) DEFAULT NULL,
  `eservice` varchar(50) DEFAULT 'no',
  `access_url` varchar(255) DEFAULT NULL,
  `technology` varchar(255) DEFAULT NULL,
  `no_of_user` int(11) DEFAULT NULL,
  `major_features` text DEFAULT NULL,
  `access_point` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `focal_person_name` varchar(100) DEFAULT NULL,
  `focal_person_designation` varchar(255) DEFAULT NULL,
  `focal_person_phone` varchar(11) DEFAULT NULL,
  `focal_person_email` varchar(100) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `name`, `type`, `customer_type`, `processing_time`, `eservice`, `access_url`, `technology`, `no_of_user`, `major_features`, `access_point`, `payment`, `focal_person_name`, `focal_person_designation`, `focal_person_phone`, `focal_person_email`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 18, 'Web Development', 'G2G,G2C,G2B', 'Web Programming Updated', '90days updated', 'yes', 'abc.com', 'PHP,JAVA,Python,MySql,JavaScript,ASP/ASP.NET,C#,C/C++,Ruby,SQLite,Django,NodeJS,VeuJS,Angular,CodeIgniter', 12, 'sj,kjfkgj.;gjlgj', 'Select Access Point', 'MFS,Online Banking,Payment Gateway', 'miladul islam updated', 'Soft. Engineer updated', '01919890211', 'miladul@updated.com', 18, '2021-02-04 06:54:59', '2021-02-08 05:32:48'),
(2, 17, 'Video Editing', 'G2G,G2C', 'Video Editing', '30days', 'yes', 'test.bbc', 'PHP,JAVA', 12, 'cxbgvhbjn', 'Portal', 'MFS,Online Banking,Payment Gateway', 'Sakib Hasan', 'DGM', '01919890267', 'imiladul@gmail.com', NULL, '2021-02-04 07:14:15', NULL),
(15, 18, 'Mobile App dev.', 'G2G,G2C,G2B', 'Youth2', '30days', 'yes', 'myservice.com', 'PHP,JAVA,Python,MySql,JavaScript', 10, 'Major Features demo Major Features demo Major Features demo Major Features demo ', 'UDC', 'Free', 'Miladul Islam', 'Soft. Engineer', '01919890267', 'imiladul@gmail.com', NULL, '2021-02-07 15:05:37', NULL),
(17, 18, 'TEST Service update', 'G2G,G2C,G2B', 'Photoshop updated', '90days updated', 'yes', 'dsfgdsfgh.com', 'PHP,CodeIgniter', 12, 'test feature', 'UDC', 'Free', 'Miladul Islam', 'fghgbf', '01919890267', 'imiladul@gmail.com', 18, '2021-02-07 16:13:13', '2021-02-08 05:56:09'),
(18, 22, 'XYZ', 'G2G,G2C', 'Test type', '20Days', 'yes', 'test.bd.com/live', 'PHP,Python,MySql,JavaScript', NULL, 'Major FeaturesMajor FeaturesMajor FeaturesMajor FeaturesMajor FeaturesMajor Features', 'UDC,333', 'Free', 'TEST NAME', 'DGM', '01913333267', 'test.bd@gmail.com', NULL, '2021-02-08 04:22:09', NULL),
(19, 18, 'MMMMM', 'G2G,G2C', 'hsdfkjlgd', '20days', 'no', '', '', NULL, '', '', 'Free,MFS', 'Miladul Islam', 'GHJLK', '01919890267', 'imiladul@gmail.com', 18, '2021-02-08 04:47:04', '2021-02-08 05:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `status` tinyint(2) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(17, 'admin@gmail.com', '$2y$10$EC00pYrJkwDxUwnT39xRdOof1KGfxvxONlw51PcYYNc0MpmT4SQT6', 'admin', 1, '2021-02-03 11:55:11', NULL),
(18, 'user@gmail.com', '$2y$10$rTkJD4gcnehUhFuswEyqmOFcZYBbdPmU5KCRMPNdtr5gGLGQXSxRe', 'user', 1, '2021-02-03 13:02:40', NULL),
(19, 'imiladul555@gmail.com', '$2y$10$tL1X..leP8cvIv3qU01jXu6WqTdntcxUKZGxiBuuPQtKC6d596WJm', 'user', 1, '2021-02-03 16:48:48', NULL),
(20, 'arif.softbdltd@gmail.com', '$2y$10$Dj5ocZGex.N8Fx/VpmBHkeYAfiv2Rd3ie9NvlqwWDOad7tHfAFcj2', 'user', 1, '2021-02-05 19:01:54', NULL),
(21, 'imiladul@gmail.com', '$2y$10$EV5nXvYRFsLX0IqJtXlcqOjbPg/2qe4HL.aFWyYLxYiMj42O9IwSK', 'user', 1, '2021-02-07 03:50:46', NULL),
(22, 'ramim@gmail.com', '$2y$10$5B6WyroGTOWCI5xr3hE9jOXyQL0tSKhY1qzl0Stt63pgLvfY4Ek2i', 'user', 1, '2021-02-08 03:46:02', NULL),
(23, 'imiladul9999@gmail.com', '$2y$10$BmsBxixJ5jERicz3s57fxeVxYbTrpT2Anu4wsMkPYxcAJ2u7yEZHS', 'user', 1, '2021-02-11 04:55:08', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
