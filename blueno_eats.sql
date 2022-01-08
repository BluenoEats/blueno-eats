-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2022 at 10:00 AM
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
-- Table structure for table `dish_pages`
--

CREATE TABLE `dish_pages` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `images` text NOT NULL,
  `rating` double NOT NULL,
  `total_score` int(11) NOT NULL,
  `num_reviews` int(11) NOT NULL,
  `one_star` int(11) NOT NULL,
  `two_star` int(11) NOT NULL,
  `three_star` int(11) NOT NULL,
  `four_star` int(11) NOT NULL,
  `five_star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dish_pages`
--

INSERT INTO `dish_pages` (`id`, `name`, `content`, `images`, `rating`, `total_score`, `num_reviews`, `one_star`, `two_star`, `three_star`, `four_star`, `five_star`) VALUES
(1, 'Grilled Chicken', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<div class=\"mySlides fade\">\r\n                <img src=\"img/placeholding.png\" class=\"slide-img\">\r\n            </div>\r\n\r\n            <div class=\"mySlides fade\">\r\n                <img src=\"img/place2.jpeg\" class=\"slide-img\">\r\n            </div>\r\n\r\n            <div class=\"mySlides fade\">\r\n                <img src=\"img/place3.jpeg\" class=\"slide-img\">\r\n            </div>', 0.32, 0, 0, 0, 0, 0, 0, 0),
(2, 'Pizza', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<div class=\"mySlides fade\">\r\n                <img src=\"img/placeholding.png\" class=\"slide-img\">\r\n            </div>\r\n\r\n            <div class=\"mySlides fade\">\r\n                <img src=\"img/place2.jpeg\" class=\"slide-img\">\r\n            </div>\r\n\r\n            <div class=\"mySlides fade\">\r\n                <img src=\"img/place3.jpeg\" class=\"slide-img\">\r\n            </div>', 3.21, 0, 0, 0, 0, 0, 0, 0),
(3, 'French Fries', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<div class=\"mySlides fade\">\r\n                <img src=\"img/placeholding.png\" class=\"slide-img\">\r\n            </div>\r\n\r\n            <div class=\"mySlides fade\">\r\n                <img src=\"img/place2.jpeg\" class=\"slide-img\">\r\n            </div>\r\n\r\n            <div class=\"mySlides fade\">\r\n                <img src=\"img/place3.jpeg\" class=\"slide-img\">\r\n            </div>', 2.31, 0, 0, 0, 0, 0, 0, 0),
(4, 'Salad Bar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<div class=\"mySlides fade\">\r\n                <img src=\"img/placeholding.png\" class=\"slide-img\">\r\n            </div>\r\n\r\n            <div class=\"mySlides fade\">\r\n                <img src=\"img/place2.jpeg\" class=\"slide-img\">\r\n            </div>\r\n\r\n            <div class=\"mySlides fade\">\r\n                <img src=\"img/place3.jpeg\" class=\"slide-img\">\r\n            </div>', 4.76, 0, 0, 0, 0, 0, 0, 0),
(5, 'Burger', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<div class=\"mySlides fade\">\r\n                <img src=\"img/placeholding.png\" class=\"slide-img\">\r\n            </div>\r\n\r\n            <div class=\"mySlides fade\">\r\n                <img src=\"img/place2.jpeg\" class=\"slide-img\">\r\n            </div>\r\n\r\n            <div class=\"mySlides fade\">\r\n                <img src=\"img/place3.jpeg\" class=\"slide-img\">\r\n            </div>', 3.56, 0, 0, 0, 0, 0, 0, 0),
(6, 'Hot Dog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<div class=\"mySlides fade\">\r\n                <img src=\"img/placeholding.png\" class=\"slide-img\">\r\n            </div>\r\n\r\n            <div class=\"mySlides fade\">\r\n                <img src=\"img/place2.jpeg\" class=\"slide-img\">\r\n            </div>\r\n\r\n            <div class=\"mySlides fade\">\r\n                <img src=\"img/place3.jpeg\" class=\"slide-img\">\r\n            </div>', 4.32, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hall_pages`
--

CREATE TABLE `hall_pages` (
  `id` int(11) NOT NULL,
  `official_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slideshow` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall_pages`
--

INSERT INTO `hall_pages` (`id`, `official_name`, `name`, `slideshow`) VALUES
(1, 'Sharpe Refectory', '\"The Ratty\"', '<div class=\"mySlides fade\">\r\n  <img src=\"img/placeholding.png\" class=\"slide-img\">\r\n  <div class=\"text\">The changes of the images may be automatic and at regular intervals or they may be manually controlled by a presenter or the viewer.\r\n    </div>\r\n</div>\r\n\r\n<div class=\"mySlides fade\">\r\n  <img src=\"img/place2.jpeg\" class=\"slide-img\">\r\n  <div class=\"text\">Today in this blog I\'ll share the image slideshow effect using javascript. In this program, there are five images, and these images automatically change after a certain period. I used JavaScript to change the image after a certain time interval.\r\n  </div>\r\n</div>\r\n\r\n<div class=\"mySlides fade\">\r\n  <img src=\"img/place3.jpeg\" class=\"slide-img\">\r\n  <div class=\"text\">You can copy the codes from the given boxes or download the code files from the given link but I recommend you to download the source code files instead of copying codes because you won\'t get images if you copy the codes\r\n  </div>\r\n</div>'),
(2, 'Andrews Commons', '\"Andrews Commons\"', '<div class=\"mySlides fade\">\r\n  <img src=\"img/placeholding.png\" class=\"slide-img\">\r\n  <div class=\"text\">The changes of the images may be automatic and at regular intervals or they may be manually controlled by a presenter or the viewer.\r\n    </div>\r\n</div>\r\n\r\n<div class=\"mySlides fade\">\r\n  <img src=\"img/place2.jpeg\" class=\"slide-img\">\r\n  <div class=\"text\">Today in this blog I\'ll share the image slideshow effect using javascript. In this program, there are five images, and these images automatically change after a certain period. I used JavaScript to change the image after a certain time interval.\r\n  </div>\r\n</div>\r\n\r\n<div class=\"mySlides fade\">\r\n  <img src=\"img/place3.jpeg\" class=\"slide-img\">\r\n  <div class=\"text\">You can copy the codes from the given boxes or download the code files from the given link but I recommend you to download the source code files instead of copying codes because you won\'t get images if you copy the codes\r\n  </div>\r\n</div>'),
(3, 'Verney-Woolley', '\"Verney-Woolley\"', '<div class=\"mySlides fade\">\r\n  <img src=\"img/placeholding.png\" class=\"slide-img\">\r\n  <div class=\"text\">The changes of the images may be automatic and at regular intervals or they may be manually controlled by a presenter or the viewer.\r\n    </div>\r\n</div>\r\n\r\n<div class=\"mySlides fade\">\r\n  <img src=\"img/place2.jpeg\" class=\"slide-img\">\r\n  <div class=\"text\">Today in this blog I\'ll share the image slideshow effect using javascript. In this program, there are five images, and these images automatically change after a certain period. I used JavaScript to change the image after a certain time interval.\r\n  </div>\r\n</div>\r\n\r\n<div class=\"mySlides fade\">\r\n  <img src=\"img/place3.jpeg\" class=\"slide-img\">\r\n  <div class=\"text\">You can copy the codes from the given boxes or download the code files from the given link but I recommend you to download the source code files instead of copying codes because you won\'t get images if you copy the codes\r\n  </div>\r\n</div>'),
(4, 'Ivy Room', '\"Ivy Room\"', '<div class=\"mySlides fade\">\r\n  <img src=\"img/placeholding.png\" class=\"slide-img\">\r\n  <div class=\"text\">The changes of the images may be automatic and at regular intervals or they may be manually controlled by a presenter or the viewer.\r\n    </div>\r\n</div>\r\n\r\n<div class=\"mySlides fade\">\r\n  <img src=\"img/place2.jpeg\" class=\"slide-img\">\r\n  <div class=\"text\">Today in this blog I\'ll share the image slideshow effect using javascript. In this program, there are five images, and these images automatically change after a certain period. I used JavaScript to change the image after a certain time interval.\r\n  </div>\r\n</div>\r\n\r\n<div class=\"mySlides fade\">\r\n  <img src=\"img/place3.jpeg\" class=\"slide-img\">\r\n  <div class=\"text\">You can copy the codes from the given boxes or download the code files from the given link but I recommend you to download the source code files instead of copying codes because you won\'t get images if you copy the codes\r\n  </div>\r\n</div>'),
(5, 'Josiah\'s', '\"Josiah\'s\"', '<div class=\"mySlides fade\">\r\n  <img src=\"img/placeholding.png\" class=\"slide-img\">\r\n  <div class=\"text\">The changes of the images may be automatic and at regular intervals or they may be manually controlled by a presenter or the viewer.\r\n    </div>\r\n</div>\r\n\r\n<div class=\"mySlides fade\">\r\n  <img src=\"img/place2.jpeg\" class=\"slide-img\">\r\n  <div class=\"text\">Today in this blog I\'ll share the image slideshow effect using javascript. In this program, there are five images, and these images automatically change after a certain period. I used JavaScript to change the image after a certain time interval.\r\n  </div>\r\n</div>\r\n\r\n<div class=\"mySlides fade\">\r\n  <img src=\"img/place3.jpeg\" class=\"slide-img\">\r\n  <div class=\"text\">You can copy the codes from the given boxes or download the code files from the given link but I recommend you to download the source code files instead of copying codes because you won\'t get images if you copy the codes\r\n  </div>\r\n</div>');

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

--
-- Indexes for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
