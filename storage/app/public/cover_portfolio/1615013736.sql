-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 06:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bocor`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `heading_one` varchar(50) NOT NULL,
  `des_one` varchar(50) NOT NULL,
  `heading_two` varchar(50) NOT NULL,
  `des_two` varchar(50) NOT NULL,
  `heading_three` varchar(50) NOT NULL,
  `des_three` varchar(50) NOT NULL,
  `heading_four` varchar(50) NOT NULL,
  `des_four` varchar(50) NOT NULL,
  `heading_five` varchar(50) NOT NULL,
  `des_five` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `image`, `heading_one`, `des_one`, `heading_two`, `des_two`, `heading_three`, `des_three`, `heading_four`, `des_four`, `heading_five`, `des_five`) VALUES
(12, '1608811385.jpg', '	\r\nhello', 'hello decptions', 'heloo 222', 'hello 2 ka decsption', 'hello kaka ', 'hello kaki', 'hey bro ', 'im fine bro', 'hey dad how r u', 'm fine n good');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'sadfdf', 'dsf@gmail.com', 'gdfgdfgdgdf', 'gdfgdfgdfgdfgdfgdf'),
(2, 'pratik', 'pratik@gmail.com', 'hiiii', 'helloooooo'),
(3, 'pratik', 'pratik@gmail.com', 'hiiii', 'helloooooo'),
(4, 'dasdasdasd', 'asd@gmail.com', 'dbsdvsdhb', 'hsdshdhsbdhjsds'),
(5, 'ssasdfdsfs', 'gfsvc@gmail.com', 'wefv regfdggergf', 'gfbfgeregfergfddfgf'),
(6, 'efsdfdsfsdf', 'sdfsdfsfsdf@gmail.com', 'ddfghgeweregdfefgsfgerwregdhgrerwreghgr', 'erwrehghrewerdhgreegher'),
(7, 'vsdfgdfbdfsfdg', 'dfgdf@gmail.com', 'hdsiugdi', 'gcdiubc j'),
(8, 'pratik', 'pratik@gmail.com', 'hii my name is pratik', 'HI MY NAME IS PRATIK SUTHAR');

-- --------------------------------------------------------

--
-- Table structure for table `contact_detail`
--

CREATE TABLE `contact_detail` (
  `id` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `call` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_detail`
--

INSERT INTO `contact_detail` (`id`, `address`, `email`, `call`) VALUES
(1, 'ahmedabad', 'pratik@gmail.com', '+919898439379 ');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) NOT NULL,
  `h_one` varchar(500) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `h_two` varchar(500) NOT NULL,
  `h_three` varchar(500) NOT NULL,
  `h_four` varchar(500) NOT NULL,
  `h_five` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `h_one`, `image`, `h_two`, `h_three`, `h_four`, `h_five`) VALUES
(5, 'hey this is heding 1', '1608890185.JPG', 'hii my name is pratik suthar', 'As mentioned, original content goes a long way with Google and your visitors. Copying other people’s content will result in a punishment from Google, which can crush your bottom line.', 'Remember when you used to find ezine articles in top Google rankings? You don’t see them anymore, and it’s no accident. They were one of the hardest hit by Google’s algorithm update, which aimed to prevent bad content from ranking highly.', 'Mahalo was a content farm that updated every day with new content, but it wasn’t original content. Google punished them for it, and that resulted in Mahalo needing to pivot their business.'),
(6, NULL, '1608890923.JPG', 'hii my name is mohit patel', 'Mahalo was a content farm that updated every day with new content, but it wasn’t original content. Google punished them for it, and that resulted in Mahalo needing to pivot their business.', '“So it says here that we need to create a lot of content…OK…well how can we do this as easily and cheaply as possible?”', '“Can we make a bot to scrape content and re-combine it into some form of gibberish that at least the search engines will read?”'),
(7, NULL, '1608892635.jpg', 'hey my name is jainam shah', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ' Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.'),
(8, NULL, '1608892693.jpg', 'hii my name is sahil gohil', 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', '“Can we outsource cheap, near slave labor priced, content writers to write filler content?”', '“Can we collect articles from around the web and just get permission to re-post them?”');

-- --------------------------------------------------------

--
-- Table structure for table `footar`
--

CREATE TABLE `footar` (
  `id` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `dec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footar`
--

INSERT INTO `footar` (`id`, `title`, `dec`) VALUES
(2, 'Hello User', 'Welcome to this world  this it industry is very amwzing and flexibal timing to work here');

-- --------------------------------------------------------

--
-- Table structure for table `footar_mail`
--

CREATE TABLE `footar_mail` (
  `id` int(10) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footar_mail`
--

INSERT INTO `footar_mail` (`id`, `email`) VALUES
(1, 'pratik@gmail.com'),
(2, 'pratik@gmail.com'),
(3, 'mohit@gmail.com'),
(4, 'krunal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `title`, `des`) VALUES
(1, 'hello pratik', 'hop you r fine ');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(20) NOT NULL,
  `dec` varchar(500) DEFAULT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `dec`, `image`) VALUES
(1, 'sdsda', '1608800874.jpg'),
(3, NULL, '1608801973.jpg'),
(4, NULL, '1608802276.jpg'),
(5, NULL, '1608802485.jpg'),
(6, NULL, '1608802504.jpg'),
(7, NULL, '1608802529.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `qestion`
--

CREATE TABLE `qestion` (
  `id` int(20) NOT NULL,
  `qestion` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qestion`
--

INSERT INTO `qestion` (`id`, `qestion`, `answer`) VALUES
(1, 'vdv', 'v v'),
(2, 'hii', 'hello'),
(3, 'how r u', 'i m fine');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `heading` varchar(50) DEFAULT NULL,
  `image_one` varchar(100) NOT NULL,
  `title_one` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `heading`, `image_one`, `title_one`) VALUES
(9, 'here the heading page you can write here anything', '1608885407.jpg', 'hii title my name is pratik suthar what is your name'),
(10, NULL, '1608885843.jpg', 'hyy this is second service'),
(11, NULL, '1608885977.JPG', 'hyy this is third services'),
(12, NULL, '1608886013.jpg', 'heeeyyaaa this is fourth service');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(25) NOT NULL,
  `post` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `image`, `name`, `post`) VALUES
(1, '1608805600.jpg', 'pratik suthar', ' php devloper'),
(2, '1608807623.JPG', 'mohit patel', 'hr'),
(3, '1608810410.JPG', 'sahil', 'bd(busness devloper)'),
(4, '1608810495.jpg', 'jainam shah', 'security Department');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_detail`
--
ALTER TABLE `contact_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footar`
--
ALTER TABLE `footar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footar_mail`
--
ALTER TABLE `footar_mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qestion`
--
ALTER TABLE `qestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_detail`
--
ALTER TABLE `contact_detail`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `footar`
--
ALTER TABLE `footar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footar_mail`
--
ALTER TABLE `footar_mail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `qestion`
--
ALTER TABLE `qestion`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
