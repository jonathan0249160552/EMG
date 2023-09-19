-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 08:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

CREATE TABLE `dispatch` (
  `id` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `emergency_type` varchar(255) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `deleted` int(1) DEFAULT NULL,
  `dispatch_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `post_code` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `deleted` int(1) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `post_code`, `user_id`, `deleted`, `created_on`, `image_path`) VALUES
(31, '383a008ee0378c16cca2342c1e5e99', '', NULL, '2023-08-31 10:13:50', 'image_64f067deaa2fc.jpg'),
(32, 'b589af4236bd91f4862e768904acad', '', NULL, '2023-09-03 19:14:06', 'image_64f4dafeb61d9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reported`
--

CREATE TABLE `reported` (
  `id` int(11) NOT NULL,
  `emg_type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `gps` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `deleted` int(1) DEFAULT NULL,
  `reported_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reported`
--

INSERT INTO `reported` (`id`, `emg_type`, `description`, `gps`, `post_code`, `location`, `deleted`, `reported_on`) VALUES
(1, 'fire', '1', '0', '0', '1', NULL, '2023-09-03 11:47:00'),
(2, 'fire', '44', '0', '7', '44', NULL, '2023-09-03 11:48:30'),
(3, 'fire', '', '0', '196', '00', NULL, '2023-09-03 11:54:59'),
(4, 'fire', '', '', '196eb55b5bc', '00', NULL, '2023-09-03 11:57:12'),
(5, 'fire', '', '', '196eb55b5bc', '00', NULL, '2023-09-03 12:00:01'),
(6, 'fire', '', '', '196eb55b5bcb3ab186cf29d60180df', '00', NULL, '2023-09-03 12:01:13'),
(7, 'fire', '11', '5.6037168, -0.1869644', '685e238f18a625be589877f669d05b', '11', NULL, '2023-09-03 16:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `admin` int(1) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `deleted` int(1) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `admin`, `name`, `username`, `contact`, `phone`, `residence`, `password`, `deleted`, `gender`, `created_on`) VALUES
(1, 1, '00', '00', '00', '00', '00', '0', NULL, '', '2023-09-03 18:40:10'),
(2, 1, '3', '3', '3', '3', '3', '$2y$10$.3LamJqncVPS1s.Rf5z/vuV45AvA8Kbs.MsWBF57SuvErpq6ZiqDC', NULL, '', '2023-09-03 18:30:08'),
(3, 0, '6', 'Ad6min@gmail.com', '6', '6', '6', '$2y$10$h213NCguquVe.hMJxet2n.bfxwYl2rexgTCWMAaYWQRih4jZTdnbm', NULL, '', '2023-09-03 18:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `deleted` int(1) DEFAULT NULL,
  `reported_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `post_code`, `user_id`, `file_name`, `deleted`, `reported_on`) VALUES
(1, '', '', 'video_64f4622d321fc.webm', NULL, '2023-09-03 10:38:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reported`
--
ALTER TABLE `reported`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `reported`
--
ALTER TABLE `reported`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
