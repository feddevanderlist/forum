-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2017 at 08:28 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `content`, `created_at`, `updated_at`, `user_id`, `topic_id`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus nibh a ligula lacinia, eu egestas sapien mollis. Proin consectetur tristique dui. Sed quis sem vitae quam viverra feugiat ut a ligula. Maecenas et mauris libero. Phasellus malesuada molestie lectus, cursus sodales mauris viverra in. Nulla luctus nec mi et luctus. Sed dignissim non orci a feugiat. Mauris iaculis magna lacus, non sagittis arcu finibus a. Suspendisse tempor non diam dapibus ultricies. Etiam sollicitudin quam non cursus condimentum. Curabitur dictum laoreet vehicula. Ut ultricies ac libero vel pretium. Nullam ornare nibh sed leo sollicitudin, sit amet elementum libero viverra. Nunc bibendum felis sit amet urna consequat, a aliquet ante lobortis. Sed posuere pharetra arcu a mollis.', '2017-05-22 08:57:24', NULL, 1, 1),
(2, 'Curabitur hendrerit pellentesque dapibus. Integer ut elit vel risus consequat malesuada. Cras malesuada non tellus quis facilisis. Donec maximus vel augue non cursus. Nam sed imperdiet lorem, sit amet venenatis quam. Sed facilisis orci urna, eget vehicula lorem maximus sed. Vivamus dolor sem, cursus a tortor eget, vulputate finibus nisl. Nullam est nibh, egestas quis massa at, aliquam gravida tellus. Aliquam hendrerit gravida ante eu imperdiet. Sed viverra tincidunt porttitor. Integer non lacus ipsum. Proin at arcu eget magna molestie rhoncus sit amet id nulla. Nam non consectetur orci, eget faucibus ex. Aliquam ullamcorper iaculis elit a laoreet. Aliquam fermentum venenatis fermentum. ', '2017-05-22 08:57:24', NULL, 1, 2),
(3, 'Curabitur hendrerit pellentesque dapibus. Integer ut elit vel risus consequat malesuada. Cras malesuada non tellus quis facilisis. Donec maximus vel augue non cursus. Nam sed imperdiet lorem, sit amet venenatis quam. Sed facilisis orci urna, eget vehicula lorem maximus sed. Vivamus dolor sem, cursus a tortor eget, vulputate finibus nisl. Nullam est nibh, egestas quis massa at, aliquam gravida tellus. Aliquam hendrerit gravida ante eu imperdiet. Sed viverra tincidunt porttitor. Integer non lacus ipsum. Proin at arcu eget magna molestie rhoncus sit amet id nulla. Nam non consectetur orci, eget faucibus ex. Aliquam ullamcorper iaculis elit a laoreet. Aliquam fermentum venenatis fermentum. ', '2017-05-22 08:57:55', NULL, 1, 2),
(4, 'Curabitur hendrerit pellentesque dapibus. Integer ut elit vel risus consequat malesuada. Cras malesuada non tellus quis facilisis. Donec maximus vel augue non cursus. Nam sed imperdiet lorem, sit amet venenatis quam. Sed facilisis orci urna, eget vehicula lorem maximus sed. Vivamus dolor sem, cursus a tortor eget, vulputate finibus nisl. Nullam est nibh, egestas quis massa at, aliquam gravida tellus. Aliquam hendrerit gravida ante eu imperdiet. Sed viverra tincidunt porttitor. Integer non lacus ipsum. Proin at arcu eget magna molestie rhoncus sit amet id nulla. Nam non consectetur orci, eget faucibus ex. Aliquam ullamcorper iaculis elit a laoreet. Aliquam fermentum venenatis fermentum. ', '2017-05-22 08:57:55', NULL, 2, 2),
(5, 'Curabitur hendrerit pellentesque dapibus. Integer ut elit vel risus consequat malesuada. Cras malesuada non tellus quis facilisis. Donec maximus vel augue non cursus. Nam sed imperdiet lorem, sit amet venenatis quam. Sed facilisis orci urna, eget vehicula lorem maximus sed. Vivamus dolor sem, cursus a tortor eget, vulputate finibus nisl. Nullam est nibh, egestas quis massa at, aliquam gravida tellus. Aliquam hendrerit gravida ante eu imperdiet. Sed viverra tincidunt porttitor. Integer non lacus ipsum. Proin at arcu eget magna molestie rhoncus sit amet id nulla. Nam non consectetur orci, eget faucibus ex. Aliquam ullamcorper iaculis elit a laoreet. Aliquam fermentum venenatis fermentum. ', '2017-05-22 08:58:11', NULL, 1, 2),
(6, 'Curabitur hendrerit pellentesque dapibus. Integer ut elit vel risus consequat malesuada. Cras malesuada non tellus quis facilisis. Donec maximus vel augue non cursus. Nam sed imperdiet lorem, sit amet venenatis quam. Sed facilisis orci urna, eget vehicula lorem maximus sed. Vivamus dolor sem, cursus a tortor eget, vulputate finibus nisl. Nullam est nibh, egestas quis massa at, aliquam gravida tellus. Aliquam hendrerit gravida ante eu imperdiet. Sed viverra tincidunt porttitor. Integer non lacus ipsum. Proin at arcu eget magna molestie rhoncus sit amet id nulla. Nam non consectetur orci, eget faucibus ex. Aliquam ullamcorper iaculis elit a laoreet. Aliquam fermentum venenatis fermentum. ', '2017-05-22 08:58:11', NULL, 2, 3),
(7, 'test', '2017-06-26 08:30:31', NULL, 4, 5),
(8, 'test', '2017-06-26 08:31:18', NULL, 4, 5),
(9, 'test', '2017-06-26 08:32:19', NULL, 4, 5),
(10, 'test', '2017-06-26 08:32:31', NULL, 4, 5),
(11, 'test', '2017-06-26 08:32:49', NULL, 4, 5),
(12, 'test', '2017-06-26 08:33:22', NULL, 4, 5),
(13, 'test', '2017-06-26 08:33:59', NULL, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) UNSIGNED NOT NULL,
  `subject` varchar(31) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `subject`, `description`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'PHP', 'hier kun je ideeen plaatsen voor php', '2017-05-22 08:44:25', NULL, 1),
(2, 'css/html', 'ideeen over veranderingen voor css', '2017-05-22 08:44:25', NULL, 1),
(3, 'VIDEO', 'Video Video Video', '2017-06-26 08:14:14', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) UNSIGNED NOT NULL,
  `subject` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `theme_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `subject`, `description`, `created_at`, `updated_at`, `user_id`, `theme_id`) VALUES
(1, 'phpmailer', 'Hoe maak je een php mailer', '2017-05-22 08:47:59', NULL, 1, 1),
(2, 'html designer', 'hoe werk je met bootstrap', '2017-05-22 08:47:59', NULL, 2, 2),
(3, 'php en include', 'hoe maak je gebruik van include', '2017-05-22 08:50:37', NULL, 2, 1),
(4, 'Script tag', 'java script toevoegen aan html', '2017-05-22 08:50:37', NULL, 1, 2),
(5, 'php functions', 'alle php functions die wij kunnen gebruiken', '2017-06-26 08:16:51', NULL, 4, 1),
(6, 'test', 'test', '2017-06-26 08:18:44', NULL, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`, `role`, `first_name`, `last_name`, `date_of_birth`) VALUES
(1, 'admin', '2b12e1a2252d642c09f640b63ed35dcc5690464a', 'feddevanderlist@gmail.com', '2017-05-22 08:42:30', NULL, 1, 'fedde', 'van der list', '1997-02-08'),
(2, 'pietje', 'dddd5d7b474d2c78ebbb833789c4bfd721edf4bf', 'feddevanderlist@gmail.com', '2017-05-22 08:42:37', NULL, 0, 'piet', 'test', '1997-08-07'),
(4, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'f@g.com', '2017-06-08 14:54:07', NULL, 1, 'f', 'l', '1997-02-08'),
(5, 'jstr', '06ffd77dd9497e3eb8a2e2152880f5ee702b1682', 'jstr@a.com', '2017-06-19 09:03:13', NULL, 0, 'johan', 'str', '1996-05-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
