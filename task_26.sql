-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 12:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task 26`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `description2` varchar(255) NOT NULL,
  `title3` varchar(255) NOT NULL,
  `description3` varchar(255) NOT NULL,
  `title4` varchar(255) NOT NULL,
  `description4` varchar(255) NOT NULL,
  `title5` varchar(255) NOT NULL,
  `description5` varchar(255) NOT NULL,
  `title6` varchar(255) NOT NULL,
  `description6` varchar(255) NOT NULL,
  `title7` varchar(255) NOT NULL,
  `description7` varchar(255) NOT NULL,
  `title8` varchar(255) NOT NULL,
  `description8` varchar(255) NOT NULL,
  `title9` varchar(255) NOT NULL,
  `description9` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `img`, `title1`, `description1`, `title2`, `description2`, `title3`, `description3`, `title4`, `description4`, `title5`, `description5`, `title6`, `description6`, `title7`, `description7`, `title8`, `description8`, `title9`, `description9`) VALUES
(1, 'blog-post-01.jpg', 'title 1', 'description 1', 'title 2', 'description 2', '1-03 Donec porttitor augue', 'Quisque bibendum cursus viverra. Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.', '2-03 Donec porttitor augue', 'Quisque bibendum cursus viverra. Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.', 'title 5', 'description 5', '01 Four Columns', 'Quisque bibendum cursus viverra. Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.', '02 Four Columns', 'Quisque bibendum cursus viverra. Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.', '03 Four Columns', 'Quisque bibendum cursus viverra. Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.', '04 Four Columns', 'Quisque bibendum cursus viverra. Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `suptitle` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `bloogername` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `img`, `title`, `suptitle`, `description`, `bloogername`, `date`) VALUES
(27, 'banner-item-02.jpg', 'title 1', 'sup title 1', 'description 1', 'bloogername 1', '2024-06-02'),
(28, 'banner-item-03.jpg', 'title 2', 'sup title 2', 'description 2', 'bloogername 2', '2024-05-27'),
(29, 'banner-item-05.jpg', 'title 3', 'sup title 3', 'description 3', 'bloogername 3', '2024-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `subject`, `comment`) VALUES
(10, 'salma', 'salma@gmail.com', 'subject 1', 'comment 1 ...'),
(11, 'haneen', 'admin@gmail.com', 'subject 2', 'comment 2 ...');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`, `address`) VALUES
(1, '1234567891', 'salma@gmail.com', 'amman');

-- --------------------------------------------------------

--
-- Table structure for table `headerfooter`
--

CREATE TABLE `headerfooter` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `taptext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `headerfooter`
--

INSERT INTO `headerfooter` (`id`, `logo`, `taptext`) VALUES
(1, 'Blogs', 'blogs');

-- --------------------------------------------------------

--
-- Table structure for table `innerblog`
--

CREATE TABLE `innerblog` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `suptitle` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `bloogername` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `innerblog`
--

INSERT INTO `innerblog` (`id`, `img`, `title`, `suptitle`, `description`, `bloogername`, `date`) VALUES
(1, 'banner-item-05.jpg', 'title 3', 'sup title 3', 'description 3', 'bloogername 3', '2024-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `content`) VALUES
(5, 'salma', 'salma@gmail.com', 'subject 1', 'message 1 ...'),
(6, 'sami', 'sami@gmail.com', 'subject 2', 'message 2 ...');

-- --------------------------------------------------------

--
-- Table structure for table `social media`
--

CREATE TABLE `social media` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social media`
--

INSERT INTO `social media` (`id`, `facebook`, `instagram`, `twitter`) VALUES
(1, 'https://www.facebook.com/ClevermindICT/', 'https://www.instagram.com/clevermindpob/', 'https://twitter.com/search?q=cleverMindICT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headerfooter`
--
ALTER TABLE `headerfooter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `innerblog`
--
ALTER TABLE `innerblog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social media`
--
ALTER TABLE `social media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `headerfooter`
--
ALTER TABLE `headerfooter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `innerblog`
--
ALTER TABLE `innerblog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social media`
--
ALTER TABLE `social media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
