-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 09:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ojt2022_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

CREATE TABLE `drink` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `drink`
--

INSERT INTO `drink` (`id`, `img`, `product`, `price`) VALUES
(1, 'pepsi-logo-vector-36327290.jpg', 'Pepsi', '1000Ks'),
(3, 'unnamed.png', 'Heineken', '3000Ks'),
(4, 'logo_coke.jpg', 'Cola', '1000Ks'),
(5, '079565220063.jpg', 'Soju', '3500Ks'),
(6, 'Soda-blue-curacao.jpg', 'BlueCuracao', '2500Ks'),
(7, 'index.jpg', 'StrawBerrySoda', '2500Ks'),
(8, 'image_4.png', 'BlueberrySoda', '2500Ks'),
(9, 'Iced-Lemon-Tea-3.jpg', 'IcedLemonTea', '2000Ks'),
(10, 'hotchoco.jpg', 'HotChoco', '3000Ks'),
(11, 'spirited-away-pixel-art-blxt5g98bvjjof21.jpg', 'flkfdfs', '333333'),
(12, 'Cozy hut.png', 'sss', '4545'),
(13, 'Cozy hut.png', '3333', '3333');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `f_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`f_id`, `name`, `email`, `message`) VALUES
(1, 'mak', 'mak@gmail.com', 'ggdfdfffdfdff');

-- --------------------------------------------------------

--
-- Table structure for table `jfood`
--

CREATE TABLE `jfood` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jfood`
--

INSERT INTO `jfood` (`id`, `img`, `product`, `price`) VALUES
(1, 'p1.jpg', 'Takoyaki', '3500Ks'),
(2, 'taiyaki.jpg', 'TaiYaki', '2000Ks'),
(3, 'onigiri.jpg', 'Onigiri', '1500Ks'),
(4, 'p2.jpg', 'Ramen', '5000Ks'),
(5, 'yakisoba.jpg', 'YakiSoba', '4500Ks'),
(6, 'Tonkatsu.jpg', 'Tonkatsu', '6000Ks'),
(7, 'unadon.jpg', 'Unadon', '7000Ks'),
(8, 'Japanese-Curry.jpg', 'CurryRice', '3500Ks'),
(9, 'omurice.jpg', 'OmuRice', '3000Ks'),
(10, 'omurice.jpg', 'OmuRice', '3000Ks'),
(11, 'Cozy hut.png', 'gfdggf', '343434'),
(12, 'Cozy hut.png', 'gfdggf', '343434');

-- --------------------------------------------------------

--
-- Table structure for table `kfood`
--

CREATE TABLE `kfood` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kfood`
--

INSERT INTO `kfood` (`id`, `img`, `product`, `price`) VALUES
(18, 'p2.jpg', 'FishCake', '1200Ks'),
(20, 'p4.jpg', 'Kimbap', '1200Ks'),
(21, 'p3.jpg', 'BiBimBap', '4000Ks'),
(22, 'p5.jpg', 'Jajangmyeon', '4000Ks'),
(23, 'tteokbokki.jpg', 'TokPoki', '1500Ks'),
(24, 'kimchirice.jpg', 'FriedRice', '3000Ks'),
(25, 'bulgogi.jpg', 'Bulgogi', '5000Ks'),
(26, 'mandu.jpg', 'Dumpling', '3500Ks'),
(27, 'kimchi.jpg', 'Kimchi', '1000Ks'),
(32, 'spirited-away-pixel-art-blxt5g98bvjjof21.jpg', 'test1', '209338');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `order_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product`, `price`, `name`, `phone`, `address`, `order_no`) VALUES
(14, 'FishCake', '1200Ks', 'ff', '494949', 'fadfaf', 'ord230'),
(15, '', '', 'kk', '56565', 'gfgs', 'ord300'),
(16, 'FishCake', '1200Ks', 'ffgsfg', '4344q434', 'afadf', 'ord176'),
(17, 'Jajangmyeon', '4000Ks', 'John', '09444444444', '36/100', 'ord118'),
(18, 'FishCake', '1200Ks', 'lollllllllllllllllllll', '0948747477464', 'blahblah', '134'),
(19, 'FishCake', '1200Ks', 'lollllllllllllllllllll', '0948747477464', 'blahblah', 'ord113'),
(20, 'FishCake', '1200Ks', 'lollllllllllllllllllll', '0948747477464', 'blahblah', 'ord 335');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `reg_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `name`, `email`, `password`, `phone`, `city`) VALUES
(6, 'ak', 'ak123@gmail.com', '1234', '654543', 'sfdsfsdfsf'),
(7, 'ff', 'lol@gmail.com', '12345', '434343', 'dfafda'),
(8, 'John', 'john@gmail.com', '1234', '09797979799', '36/100'),
(9, 'mak', 'lolmak@gmail.com', '1234', '0999888', 'fkadjalkj');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `password`) VALUES
('admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `jfood`
--
ALTER TABLE `jfood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kfood`
--
ALTER TABLE `kfood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drink`
--
ALTER TABLE `drink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jfood`
--
ALTER TABLE `jfood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kfood`
--
ALTER TABLE `kfood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
