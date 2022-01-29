-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2022 at 04:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blueno_eats`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `password`, `username`) VALUES
(566, 'something@gmail.com', 'adf541c6a8c9b8399d9010b4070fca8ef5bf8509200a70cc2cdbf0f9d56db0a7', 'Something'),
(10375, 'something2@gmail.com', 'adf541c6a8c9b8399d9010b4070fca8ef5bf8509200a70cc2cdbf0f9d56db0a7', 'Something2'),
(12421, 'austin@brown.edu', '56789', 'Austin'),
(14777, 'ran@gmail.com', '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5', 'ran'),
(16050, 'blue@gmail.com', '837e84e40a6198f04e3e1361d21bb17f077e3eb5a2009b0b6a8c365f8b77e04a', 'Blueno'),
(22800, 'wood@gmail.com', '@Password0', 'Wood3'),
(22863, 'a@brown.edu', '1f489582f7ea4c208b70219a2bb6a322227a7516630530a10ed7f2710cfbe447', 'slkdgn'),
(31310, 'tiger@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'Tiger'),
(33477, 'mikey@google.com', '12345', 'Mikey'),
(40082, 'r@r.edu', 'bdcc157f33bf1725e82d80189eda4410e8aa4405046ff4371f8c3f02a663d95e', 'tzhang'),
(49322, 'wood4@gmail.com', 'adf541c6a8c9b8399d9010b4070fca8ef5bf8509200a70cc2cdbf0f9d56db0a7', 'Wood0'),
(62888, 'wood0@gmail.com', 'adf541c6a8c9b8399d9010b4070fca8ef5bf8509200a70cc2cdbf0f9d56db0a7', 'Wood1'),
(63654, '', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', ''),
(65096, 'mikey@yahoo.com', '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5', 'mikey'),
(65175, 'something1@gmail.com', 'adf541c6a8c9b8399d9010b4070fca8ef5bf8509200a70cc2cdbf0f9d56db0a7', 'Something1');

-- --------------------------------------------------------

--
-- Table structure for table `dish_pages`
--

CREATE TABLE `dish_pages` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dish_pages`
--

INSERT INTO `dish_pages` (`id`, `name`, `content`) VALUES
(1, 'Grilled Chicken', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Pizza', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'French Fries', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'Salad Bar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 'Burger', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'Hot Dog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `dish_slideshow`
--

CREATE TABLE `dish_slideshow` (
  `dish_id` int(11) NOT NULL,
  `img_src` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dish_slideshow`
--

INSERT INTO `dish_slideshow` (`dish_id`, `img_src`) VALUES
(1, 'img/place2.jpeg'),
(1, 'img/place3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `hall_pages`
--

CREATE TABLE `hall_pages` (
  `id` int(11) NOT NULL,
  `official_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall_pages`
--

INSERT INTO `hall_pages` (`id`, `official_name`, `name`) VALUES
(1, 'Sharpe Refectory', '\"The Ratty\"'),
(2, 'Andrews Commons', '\"Andrews Commons\"'),
(3, 'Verney-Woolley', '\"Verney-Woolley\"'),
(4, 'Ivy Room', '\"Ivy Room\"'),
(5, 'Josiah\'s', '\"Josiah\'s\"');

-- --------------------------------------------------------

--
-- Table structure for table `hall_slideshow`
--

CREATE TABLE `hall_slideshow` (
  `hall_id` int(11) NOT NULL,
  `img_src` varchar(200) NOT NULL,
  `assoc_text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall_slideshow`
--

INSERT INTO `hall_slideshow` (`hall_id`, `img_src`, `assoc_text`) VALUES
(1, 'img/placeholding.png', 'The changes of the images may be automatic and at regular intervals or they may be manually controlled by a presenter or the viewer.'),
(1, 'img/place2.jpeg', 'Today in this blog I\'ll share the image slideshow effect using javascript. In this program, there are five images, and these images automatically change after a certain period. I used JavaScript to change the image after a certain time interval.'),
(1, 'img/place3.jpeg', 'You can copy the codes from the given boxes or download the code files from the given link but I recommend you to download the source code files instead of copying codes because you won\'t get images if you copy the codes'),
(2, 'img/place4.jpeg', 'some text(1)'),
(2, 'img/placeholding.png', 'some text(2)');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `content` text NOT NULL,
  `anonymous` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `author_id`, `dish_id`, `rating`, `content`, `anonymous`) VALUES
(1, 33477, 1, 3, 'This is the best food', 0),
(3, 33477, 2, 3, 'Princeton is the best', 0),
(4, 33477, 3, 3, 'Brown sucks', 0),
(44, 12421, 1, 4, 'just fine', 0),
(45, 12421, 2, 4, 'Love the pizza!', 0),
(48, 31310, 1, 4, '', 0),
(49, 31310, 2, 2, 'hello', 0),
(51, 62888, 4, 5, 'gbhjk', 0),
(53, 62888, 6, 5, 'cool', 0),
(54, 62888, 2, 1, 'bad', 1),
(55, 62888, 1, 1, 'sth', 1),
(69, 62888, 5, 5, 'hello', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review_images`
--

CREATE TABLE `review_images` (
  `review_id` int(11) NOT NULL,
  `img_src` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_images`
--

INSERT INTO `review_images` (`review_id`, `img_src`) VALUES
(1, 'upload/149393877_2849454908652421_6832480318451813634_n.jpg'),
(1, 'upload/F.R.I.E.N.D.S..jpg'),
(44, 'upload/Statue_of_Liberty.jpeg'),
(45, 'upload/IMG_9088.JPG'),
(51, 'upload/IMG_2199.JPG'),
(55, 'upload/195125406_3026961794296389_6565519286592869320_n.jpg'),
(55, 'upload/201349050_1473488659671752_1408247074792011944_n.jpg'),
(55, 'upload/download.jpg'),
(55, 'upload/pab1fk107z3tzK399d6J-o.jpg'),
(69, 'upload/731ca770b9bfc6f952e0a5ff.jpeg'),
(69, 'upload/7feb1858165e7d7b9522fb54.jpeg'),
(69, 'upload/f397e0896f35efb0a4a7f941.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `user_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dish_pages`
--
ALTER TABLE `dish_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_pages`
--
ALTER TABLE `hall_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dish_id` (`dish_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `review_images`
--
ALTER TABLE `review_images`
  ADD PRIMARY KEY (`review_id`,`img_src`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `review_id` (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dish_pages`
--
ALTER TABLE `dish_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `hall_pages`
--
ALTER TABLE `hall_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`dish_id`) REFERENCES `dish_pages` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `review_images`
--
ALTER TABLE `review_images`
  ADD CONSTRAINT `review_images_ibfk_1` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`);

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
