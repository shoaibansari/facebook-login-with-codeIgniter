-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2017 at 04:15 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indigofn_ciblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fb_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `log_mode` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fb_id`, `first_name`, `last_name`, `email`, `gender`, `picture`, `log_mode`, `create_at`) VALUES
(34, '1652394448114618', 'Asim', 'Ansari', 'ansari.asim92@gmail.com', 'male', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/13631471_1165405636813504_2600760026819702261_n.jpg?oh=76cae529830d31353467b8d15b49b11c&oe=5ACE603A', 'facebook', '2017-11-28 17:36:23'),
(33, '1936123646401257', 'Shoaib', 'Ansari', 'shoaibansari824@gmail.com', 'male', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/12088342_1192136037466692_3850970123021080739_n.jpg?oh=bf38e4ea4ef3f858113ba03a363a59ab&oe=5AD241B0', 'facebook', '2017-11-28 17:26:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
