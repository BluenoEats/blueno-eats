-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2022 at 07:56 PM
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
(7934, 'r@b.com', '492668a16fb06de09821aecfc6eac887811543e68428ecb749ca6ac74dd9a9ca', 'ranzh'),
(16526, 'admin2022@gmail.com', '6b305ae2b9fc79d6c1bfb9c795f313ef9481c27d5f08b12a5a0de39fb184ea81', 'Admin2022'),
(46355, 'admin@brown.edu', 'fba961885a5bc90d4966a41f0a6a2014caad976003df91e90bb5c8786e8b6efd', 'funky_star'),
(57136, 'hi@brown.edu', '47045493c9de6bf241402d3787e91f26c39a1108fcf8c519fb806efdb9deadc7', 'peach');

-- --------------------------------------------------------

--
-- Table structure for table `dish_pages`
--

CREATE TABLE `dish_pages` (
  `id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dish_pages`
--

INSERT INTO `dish_pages` (`id`, `hall_id`, `name`, `content`) VALUES
(1, 1, 'Omelet', ''),
(2, 1, 'Pancake', ''),
(3, 1, 'Pizza', ''),
(4, 1, 'Ravioli', ''),
(5, 1, 'Tempeh', ''),
(6, 1, 'Vegetables', ''),
(7, 1, 'Yogurt', ''),
(8, 2, 'Iced Coffee', ''),
(9, 2, 'Pho', ''),
(10, 2, 'Poke Bowl', ''),
(11, 2, 'Taco', ''),
(12, 2, 'Yogurt Bowl', ''),
(13, 3, 'Taqueria Bar', ''),
(14, 3, 'Burger', ''),
(15, 3, 'Cookie', ''),
(16, 3, 'Cupcake', ''),
(17, 3, 'Grilled Chicken', ''),
(18, 4, 'French Toast', ''),
(19, 4, 'Salad', ''),
(20, 4, 'Smootie', ''),
(21, 4, 'Sushi roll', ''),
(22, 5, 'Cheese Stick', ''),
(23, 5, 'Fries', ''),
(24, 5, 'Onion Ring', ''),
(25, 5, 'Salad', ''),
(26, 5, 'Sandwich', ''),
(27, 6, 'Apple Turnover', ''),
(28, 6, 'Cheese Cake', ''),
(29, 6, 'Juice', ''),
(30, 6, 'Muffin', ''),
(31, 6, 'Yogurt Bowl', '');

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
(1, 'img/ratty/ratty_omelet_01.jpeg'),
(1, 'img/ratty/ratty_omelet_02.jpeg'),
(2, 'img/ratty/ratty_pancake.jpeg'),
(3, 'img/ratty/ratty_pizza.jpeg'),
(4, 'img/ratty/ratty_ravioli.jpeg'),
(5, 'img/ratty/ratty_tempeh.jpeg'),
(6, 'img/ratty/ratty_veggies_01.jpeg'),
(6, 'img/ratty/ratty_veggies_02.jpeg'),
(7, 'img/ratty/ratty_yogury.jpeg'),
(8, 'img/andrews/andrews_coffee_01.jpeg'),
(9, 'img/andrews/andrews_pho_01.jpeg'),
(9, 'img/andrews/andrews_pho_02.jpeg'),
(10, 'img/andrews/andrews_poke_01.jpeg'),
(10, 'img/andrews/andrews_poke_02.jpeg'),
(11, 'img/andrews/andrews_taco_01.jpeg'),
(12, 'img/andrews/andrews_yogurt_01.jpeg'),
(13, 'img/vdub/vdub_bowl_01.jpeg'),
(13, 'img/vdub/vdub_bowl_02.jpeg'),
(14, 'img/vdub/vdub_burger_01.jpeg'),
(15, 'img/vdub/vdub_cookie_01.jpeg'),
(16, 'img/vdub/vdub_cupcake_01.jpeg'),
(17, 'img/vdub/vdub_grilledchicken_01.jpeg'),
(18, 'img/ivy/ivy_frenchtoast_01.JPG'),
(19, 'img/ivy/ivy_salad_01.JPG'),
(20, 'img/ivy/ivy_smoothie_01.jpeg'),
(20, 'img/ivy/ivy_smoothie_02.jpeg'),
(21, 'img/ivy/ivy_sushi_01.jpeg'),
(21, 'img/ivy/ivy_sushi_02.jpeg'),
(21, 'img/ivy/ivy_sushi_03.jpeg'),
(22, 'img/jos/jos_cheesestick_01.JPG'),
(23, 'img/jos/jos_fries_01.JPG'),
(24, 'img/jos/jos_onionring_01.JPG'),
(25, 'img/jos/jos_salad_01.JPG'),
(26, 'img/jos/jos_sandwich_01.JPG'),
(26, 'img/jos/jos_sandwich_02.JPG'),
(27, 'img/blue_room/blue_apple_turnover.jpeg'),
(28, 'img/blue_room/blue_cheesecake_01.jpeg'),
(29, 'img/blue_room/blue_juice.jpeg'),
(30, 'img/blue_room/blue_muffin_01.jpeg'),
(31, 'img/blue_room/blue_yogurt_01.jpeg'),
(31, 'img/blue_room/blue_yogurt_02.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `hall_pages`
--

CREATE TABLE `hall_pages` (
  `id` int(11) NOT NULL,
  `official_name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall_pages`
--

INSERT INTO `hall_pages` (`id`, `official_name`, `description`) VALUES
(1, 'Sharpe Refectory', 'The Sharpe Refectory, aka “the Ratty”, is the biggest dining hall and one of the social centers on campus. It serves all-day buffet-style dining which rotates from day to day and “builds your own” omelet station during breakfast time. Check out a wide variety of fusion foods along with pizza and salad at Ratty!'),
(2, 'Andrews Commons', 'Andrews Commons offers pizzas, custom salads, sandwiches, pasta, and Asian-style wok stations. Stop by for brunch (burrito and granola bowls) on the weekends and the popular Pho bar on Friday nights!'),
(3, 'Verney-Woolley', 'Verney-Wooley (“V-Dub”) serves buffet-style dining during weekdays. Stop by the Vdub for Mexican-style cuisine. Grill and salad stations are also available for you!'),
(4, 'Ivy Room', 'Despite being located right below the Ratty, the Ivy room has its unique charm! Personalize your delicious smoothie here with a variety of fruits and drinks. Grab a to-go box of sushi, sandwich, or salad in your rush!'),
(5, 'Josiah\'s', 'Find your midnight snacks from Jo’s, and get a “Spicy With” after a Friday night party with your friends. Good luck in finding onion rings, mozzarella sticks, or crumble-coated french fries as your sides!'),
(6, 'Blue Room', 'The Blue Room Café features a wide range of pastries, coffee, as well as sandwiches, and salad. Enjoy the iced latte and freshly baked muffin with the view of our beloved Main Green while sitting outside of the Blue Room! ');

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
(1, 'img/ratty/ratty_01.jpeg', ''),
(1, 'img/ratty/ratty_02.jpeg', ''),
(1, 'img/ratty/ratty_03.jpeg', ''),
(1, 'img/ratty/ratty_04.jpeg', ''),
(1, 'img/ratty/ratty_05.jpeg', ''),
(1, 'img/ratty/ratty_06.jpeg', ''),
(2, 'img/andrews/andrews_01.jpeg', ''),
(2, 'img/andrews/andrews_02.jpeg', ''),
(2, 'img/andrews/andrews_03.jpeg', ''),
(3, 'img/vdub/vdub_01.jpeg', ''),
(3, 'img/vdub/vdub_02.jpeg', ''),
(4, 'img/ivy/ivy_01.jpeg', ''),
(4, 'img/ivy/ivy_02.jpeg', ''),
(4, 'img/ivy/ivy_03.jpeg', ''),
(4, 'img/ivy/ivy_04.jpeg', ''),
(5, 'img/jos/jos_01.JPG', ''),
(5, 'img/jos/jos_02.JPG', ''),
(5, 'img/jos/jos_03.JPG', ''),
(6, 'img/blue_room/blue_01.jpeg', '');

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
(1001, 16526, 1, 0, '', 0),
(1002, 16526, 2, 0, '', 0),
(1003, 16526, 3, 0, '', 0),
(1004, 16526, 4, 0, '', 0),
(1005, 16526, 5, 0, '', 0),
(1006, 16526, 6, 0, '', 0),
(1007, 16526, 7, 0, '', 0),
(1008, 16526, 8, 0, '', 0),
(1009, 16526, 9, 0, '', 0),
(1010, 16526, 10, 0, '', 0),
(1011, 16526, 11, 0, '', 0),
(1012, 16526, 12, 0, '', 0),
(1013, 16526, 13, 0, '', 0),
(1014, 16526, 14, 0, '', 0),
(1015, 16526, 15, 0, '', 0),
(1016, 16526, 16, 0, '', 0),
(1017, 16526, 17, 0, '', 0),
(1018, 16526, 18, 0, '', 0),
(1019, 16526, 19, 0, '', 0),
(1020, 16526, 20, 0, '', 0),
(1021, 16526, 21, 0, '', 0),
(1022, 16526, 22, 0, '', 0),
(1023, 16526, 23, 0, '', 0),
(1024, 16526, 24, 0, '', 0),
(1025, 16526, 25, 0, '', 0),
(1026, 16526, 26, 0, '', 0),
(1027, 16526, 27, 0, '', 0),
(1028, 16526, 28, 0, '', 0),
(1029, 16526, 29, 0, '', 0),
(1030, 16526, 30, 0, '', 0),
(1031, 16526, 31, 0, '', 0),
(1034, 7934, 10, 4, '', 1),
(1035, 7934, 9, 5, '', 0),
(1036, 7934, 11, 2, '', 0),
(1037, 7934, 12, 5, '', 0),
(1038, 7934, 22, 5, '', 0),
(1039, 7934, 18, 2, '', 0),
(1040, 7934, 15, 3, '', 0),
(1041, 7934, 28, 3, '', 0),
(1042, 7934, 1, 5, '', 0),
(1043, 7934, 20, 5, '', 0),
(1045, 57136, 1, 5, '', 0),
(1046, 57136, 10, 5, '', 0),
(1047, 57136, 13, 5, '', 0),
(1048, 57136, 25, 5, '', 0),
(1049, 57136, 21, 5, '', 0),
(1050, 57136, 19, 5, '', 0),
(1051, 57136, 20, 5, 'The best thing at the Ivy Room', 0),
(1052, 57136, 9, 5, 'I waited 30 min for the Pho and its worth the time', 0),
(1053, 57136, 12, 5, 'Andrews brunch is the best', 0),
(1054, 57136, 2, 3, '', 0),
(1055, 57136, 3, 5, 'Hawaii pizza is the best', 0),
(1056, 57136, 8, 1, 'Its sour', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review_images`
--

CREATE TABLE `review_images` (
  `review_id` int(11) NOT NULL,
  `img_src` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `dish_slideshow`
--
ALTER TABLE `dish_slideshow`
  ADD UNIQUE KEY `dish_id` (`dish_id`,`img_src`);

--
-- Indexes for table `hall_pages`
--
ALTER TABLE `hall_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_slideshow`
--
ALTER TABLE `hall_slideshow`
  ADD UNIQUE KEY `hall_id` (`hall_id`,`img_src`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_ibfk_1` (`dish_id`),
  ADD KEY `reviews_ibfk_2` (`author_id`);

--
-- Indexes for table `review_images`
--
ALTER TABLE `review_images`
  ADD PRIMARY KEY (`review_id`,`img_src`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`user_id`,`review_id`),
  ADD KEY `review_id` (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dish_pages`
--
ALTER TABLE `dish_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `hall_pages`
--
ALTER TABLE `hall_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1057;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`dish_id`) REFERENCES `dish_pages` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `review_images`
--
ALTER TABLE `review_images`
  ADD CONSTRAINT `review_images_ibfk_1` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
