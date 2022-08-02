-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 06:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `username`, `password`) VALUES
(1, 'mukeshadmin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_dateofbirth` date NOT NULL,
  `s_fathername` varchar(30) NOT NULL,
  `citizenship` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `s_describe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`s_id`, `s_name`, `s_dateofbirth`, `s_fathername`, `citizenship`, `gender`, `email`, `contact`, `s_describe`) VALUES
(6, 'Mukesh bartaula', '2006-10-01', 'Kedar pd. bartaula', 'Nepali', 'M', 'mukesh.bartaula109@gmail.com', 2147483647, '122212swe2we2e21213'),
(7, 'Mukesh bartaula', '2006-10-01', 'Kedar pd. bartaula', 'Nepali', 'M', 'mukesh.bartaula109@gmail.com', 2147483647, '122212swe2we2e21213'),
(8, 'Muskan Bartaula', '2018-02-26', 'Kedar pd. bartaula', 'Nepali', 'M', 'mukesh.bartaula109@gmail.com', 2147483647, 'fyfjvjb'),
(9, 'raj bartaula', '2018-02-20', 'Kedar pd. bartaula', 'Nepali', 'M', 'mukesh.bartaula109@gmail.com', 976543676, 'vhhv ');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(2, 'test', 'test@gmail.com', 2147483647, 'message testing'),
(3, 'MuskanBartaula', 'mukesh.bartaula109@gmail.com', 2147483647, 'ssscs'),
(4, 'Muskan Bartaula', 'mukesh.bartaula109@gmail.com', 2147483647, 'test'),
(5, 'Muskan Bartaula', 'mukesh.bartaula109@gmail.com', 2147483647, 'efsvsd');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_number` int(15) NOT NULL,
  `c_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`c_id`, `c_name`, `c_email`, `c_number`, `c_message`) VALUES
(2, 'Mukesh Bartaula', 'mukesh.bartaula109@gmail.com', 2147483647, 'Hellow World!');

-- --------------------------------------------------------

--
-- Table structure for table `dailyatt`
--

CREATE TABLE `dailyatt` (
  `id` int(11) NOT NULL,
  `att_status` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `std_id` int(255) NOT NULL,
  `faculty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dailyatt`
--

INSERT INTO `dailyatt` (`id`, `att_status`, `date`, `std_id`, `faculty`) VALUES
(1, 'present', '0000-00-00', 1, 'bca'),
(2, 'present', '0000-00-00', 2, 'bim'),
(3, 'absent', '2022-05-01', 1, 'ca'),
(4, 'absent', '2022-05-01', 2, 'bbs'),
(5, 'present', '0000-00-00', 1, ''),
(6, 'present', '0000-00-00', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `news_content`
--

CREATE TABLE `news_content` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `paragraph` text NOT NULL,
  `photo_url` text NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_content`
--

INSERT INTO `news_content` (`id`, `date`, `title`, `paragraph`, `photo_url`, `category`) VALUES
(7, 'sunday 31 mar, 2022', 'Hetauda School of Management', 'Our mission is to create ideas that deepen and advance our understanding of management and with those ideas develop innovative, principled and insightful leaders who change the world.', 'img-6284c6819c9fb8.33164908.jpg', 'national'),
(8, 'sunday 3 mar, 2022', 'test4', 'kjgkjbkjh', 'img-6284c7339ffd38.90862157.jpg', 'national'),
(9, 'sunday 2 mar, 2022', 'salkk', 'efewfewfv ewfwefewf', 'img-6286f2ac77c160.99765976.jpg', 'international'),
(14, '2022-05-22', 'testing 3', 'checking ', 'img-6289b685617859.92213400.jpg', 'international'),
(15, 'sunday 3 apr, 2022', 'test1', 'jn bbvn vsdvsdvb sdv se', 'img-628c5c45094512.16063789.jpg', ''),
(16, 'sunday 3 apr, 2022', 'test1', 'jn bbvn vsdvsdvb sdv se', 'img-628c5e4063dea3.38238473.jpg', ''),
(17, 'sunday 2 jan, 2022', 'test', 'mskcmkasnc csnsdvnv  cd v', 'img-628c5ecbd9f1d7.16479924.jpg', ''),
(18, 'sunday 12 jan, 2022', 'test', 'fwef fe few ', 'img-628c5f978bc1e3.24290483.jpg', ''),
(19, 'fri, jan14,2022', 'test 6', 'checking ', 'img-628dafa8186a00.27530306.jpg', ''),
(20, 'fri, 14, 2022', 'test 5', 'cheacking', 'img-628db047873488.79533915.jpg', ''),
(21, 'sunday 2 mar, 2022', 'Buffalo shooting suspect planned to continue rampage down street, police say', 'nkknknkn knkn', 'img-629d6128b802f0.62135102.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(11) NOT NULL,
  `s_firstname` varchar(20) NOT NULL,
  `s_lastname` varchar(20) NOT NULL,
  `s_roll` int(20) NOT NULL,
  `s_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `s_firstname`, `s_lastname`, `s_roll`, `s_email`) VALUES
(1, ' Mukesh', ' Bartaula', 2147483647, 'mukesh.bartaula109@gmail.com'),
(2, ' raj', ' thapa', 5, 'raj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`) VALUES
(1, 'mukeshuser@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `dailyatt`
--
ALTER TABLE `dailyatt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_content`
--
ALTER TABLE `news_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dailyatt`
--
ALTER TABLE `dailyatt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_content`
--
ALTER TABLE `news_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
