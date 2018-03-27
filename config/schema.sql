-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2018 at 05:55 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `votes` int(50) NOT NULL DEFAULT '0',
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `link_id`, `content`, `username`, `votes`, `time_created`) VALUES
(1, 1, 'dsfrgvd', '', 0, '2018-03-16 00:39:14'),
(2, 3, 'gjdsgscfdef', '', 0, '2018-03-16 00:39:14'),
(3, 4, 'hbchjdsgcfd', '', 0, '2018-03-16 00:39:14'),
(4, 5, 'skfhdsufjs', '', 0, '2018-03-16 00:39:14'),
(5, 1, 'gyg', '', 0, '2018-03-16 00:39:14'),
(6, 1, 'dvds', '', 0, '2018-03-16 00:39:14'),
(7, 1, 'dvds', '', 1, '2018-03-16 00:39:14'),
(8, 1, 'xgcd', '', 0, '2018-03-27 09:42:32'),
(9, 1, 'xcs', '', 1, '2018-03-27 09:42:29'),
(10, 2, 'zx', '', 0, '2018-03-16 00:39:14'),
(11, 2, 'sxas', '', 0, '2018-03-16 00:39:14'),
(12, 1, 'dff', '', 0, '2018-03-16 00:39:14'),
(13, 1, 'ggyu', '', 0, '2018-03-16 00:39:14'),
(14, 1, 'hritvi', 'hrits', 0, '2018-03-27 08:56:45'),
(15, 1, 'hrits', 'hrits', 0, '2018-03-27 08:58:27'),
(16, 1, 'dfkbejf', 'hrits', 1, '2018-03-27 09:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `comment_votes`
--

CREATE TABLE `comment_votes` (
  `user_id` int(10) NOT NULL,
  `comment_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_votes`
--

INSERT INTO `comment_votes` (`user_id`, `comment_id`) VALUES
(2, 16),
(2, 9),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `title` varchar(140) NOT NULL,
  `username` varchar(50) NOT NULL,
  `votes` int(50) NOT NULL DEFAULT '0',
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `url`, `title`, `username`, `votes`, `time_created`) VALUES
(1, 'https://www.google.com', 'Search Engine', 'hritvi', 6, '2018-03-21 17:10:50'),
(2, 'https://www.facebook.com', 'Facebook', 'hrits', 1, '2018-03-21 17:29:49'),
(3, 'https://workflowy.com/s/FpH8.A8Tcx3chft', 'portfolio', 'ddf', 3, '2018-03-21 17:31:14'),
(4, 'https://workflowy.com/s/FpH8.A8Tcx3chft', 'portfolio', 'ddf', 1, '2018-03-21 17:28:21'),
(5, 'https://workflowy.com/s/FpH8.A8Tcx3chft', 'portfolio', 'ddf', 3, '2018-03-21 17:31:10'),
(6, 'dfdsv', 'cdxccd', 'xzvcdsv', 1, '2018-03-15 23:42:50'),
(7, 'dnvkjv ', 'jnckjdnv', 'hrits', 1, '2018-03-21 17:10:41'),
(8, 'xvdsfvds', 'xvdfv', 'gfds', 1, '2018-03-21 17:10:45'),
(9, 'dgfvrafr', 'dgfvrd', 'hrits', 1, '2018-03-21 17:31:01'),
(10, ' dsvbfm', 'cvdfj', 'd vnbfnd', 0, '2018-03-26 17:14:19'),
(11, 'vnhcvhds', 'bvhbdf', 'xvhcdsh', 1, '2018-03-26 17:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `username`, `email`, `password`) VALUES
(1, 'hghj', 'nvghg', 'hjg', 'hjhj@hh.ftf', 'hghg'),
(2, 'Hritvi', 'Bhandari', 'hrits', 'sbcjdsc@gyd.gcd', 'ngjrf'),
(11, 'gvfrg', 'dfvgr', 'dgf', 'rfg@df.dfd', 'dfdfe'),
(12, 'scdsc', 'scfs', 'hyh', 'tgt@hb.gh', 'dcd'),
(13, 'fdsa', 'gfads', 'gfds', 'dfa@fgs.com', 'fds');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `user_id` int(50) NOT NULL,
  `link_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`user_id`, `link_id`) VALUES
(2, 5),
(2, 6),
(2, 9),
(2, 11),
(2, 1),
(2, 3),
(2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
