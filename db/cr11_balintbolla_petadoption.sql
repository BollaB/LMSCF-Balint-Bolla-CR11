-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 09:49 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_balintbolla_petadoption`
--
CREATE DATABASE IF NOT EXISTS `cr11_balintbolla_petadoption` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr11_balintbolla_petadoption`;

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `id` int(11) NOT NULL,
  `adoption_date` date DEFAULT NULL,
  `fk_user_id` int(11) DEFAULT NULL,
  `fk_animal_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`id`, `adoption_date`, `fk_user_id`, `fk_animal_id`) VALUES
(1, '2020-07-24', 1, 1),
(2, '2020-07-25', 1, 1),
(3, '2020-07-25', 1, 1),
(4, '2020-07-25', 1, 1),
(5, '2020-07-25', 1, 1),
(6, '2020-07-25', 1, 1),
(7, '2020-07-25', 1, 1),
(8, '2020-07-25', 1, 1),
(9, '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `image` varchar(155) NOT NULL,
  `age` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `type` enum('small','large') DEFAULT NULL,
  `hobbies` varchar(155) DEFAULT NULL,
  `active` int(11) DEFAULT 0,
  `fk_location` int(11) DEFAULT NULL,
  `available` enum('Yes','No') NOT NULL DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `image`, `age`, `description`, `type`, `hobbies`, `active`, `fk_location`, `available`) VALUES
(1, 'Ajax', 'https://images.theconversation.com/files/297893/original/file-20191021-56215-1wq7k71.jpg?ixlib=rb-1.1.0&rect=0%2C227%2C4000%2C2431&q=45&auto=format&w=926&f', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et justo eget enim placerat feugiat nec id arcu. Suspendisse potenti. Etiam nec suscipit tortor, at.', 'small', 'sleeping, playing', 0, NULL, 'Yes'),
(2, 'Bella', 'https://www.humanesociety.org/sites/default/files/styles/1240x698/public/2018/06/cat-217679.jpg?h=c4ed616d&itok=3qHaqQ56', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et justo eget enim placerat feugiat nec id arcu. Suspendisse potenti. Etiam nec suscipit tortor, at.', 'small', 'sleeping, chasing mice', 0, NULL, 'Yes'),
(3, 'Gustav', 'https://www.tierwelt.ch/sites/default/files/styles/header_news/public/images/hamster1.jpg?itok=WqZ7E4Rs', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et justo eget enim placerat feugiat nec id arcu. Suspendisse potenti. Etiam nec suscipit tortor, at.', 'small', 'eating, running', 0, NULL, 'Yes'),
(4, 'Edmund', 'https://woodgreen.org.uk/image/image/image/nZ6Fj38j5iwFDwi4uPgr0A1jaLDIqVQ62hRdzclW.jpeg?w=800&h=422&fit=crop-center', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et justo eget enim placerat feugiat nec id arcu. Suspendisse potenti. Etiam nec suscipit tortor, at.', 'small', 'playing, running around', 0, NULL, 'Yes'),
(5, 'Chili', 'https://www.petmd.com/sites/default/files/Acute-Dog-Diarrhea-47066074.jpg', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et justo eget enim placerat feugiat nec id arcu. Suspendisse potenti. Etiam nec suscipit tortor, at.', 'large', 'running, playing', 0, NULL, 'Yes'),
(6, 'Cisco', 'https://i.insider.com/5daf0929045a3101391e5bec?width=1100&format=jpeg&auto=webp', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et justo eget enim placerat feugiat nec id arcu. Suspendisse potenti. Etiam nec suscipit tortor, at.', 'large', 'sleeping, digging', 0, NULL, 'Yes'),
(7, 'Emma', 'https://www.bostonmagazine.com/wp-content/uploads/sites/2/2019/09/goat-hyde-park-t.jpg', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et justo eget enim placerat feugiat nec id arcu. Suspendisse potenti. Etiam nec suscipit tortor, at.', 'large', 'eating grass, jumping around', 0, NULL, 'Yes'),
(8, 'Cleo', 'https://www.alpakafarm.com/sites/default/files/styles/display_04_400xstandard_16_9_crop/public/weissjung.jpg?h=1cf7100d?h=1cf7100d&amp;itok=BYKVbS4F', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et justo eget enim placerat feugiat nec id arcu. Suspendisse potenti. Etiam nec suscipit tortor, at.', 'large', 'grass-eating, running around, play with friends', 0, NULL, 'Yes'),
(9, 'Darwin', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Florida_Box_Turtle_Digon3_re-edited.jpg/1200px-Florida_Box_Turtle_Digon3_re-edited.jpg', 15, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et justo eget enim placerat feugiat nec id arcu. Suspendisse potenti. Etiam nec suscipit tortor, at.', 'small', 'eating, sleeping, play hide and seek', 0, NULL, 'Yes'),
(10, 'Eddie', 'https://www.aspca.org/sites/default/files/problems-older-dog_main.jpg', 13, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et justo eget enim placerat feugiat nec id arcu. Suspendisse potenti. Etiam nec suscipit tortor, at.', 'large', 'sleeping, watching TV', 0, NULL, 'Yes'),
(11, 'Nutmeg', 'https://static.boredpanda.com/blog/wp-content/uploads/2016/10/31-year-old-cat-nutmeg-2.jpg', 31, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et justo eget enim placerat feugiat nec id arcu. Suspendisse potenti. Etiam nec suscipit tortor, at.', 'small', 'sleeping, answering fan mails, enjoy being the oldest cat on the world', 0, NULL, 'Yes'),
(12, 'Daisy', 'https://thehorse.com/wp-content/uploads/2018/05/Please-credit-Claire-Dyett2c-Spillers.jpeg', 17, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et justo eget enim placerat feugiat nec id arcu. Suspendisse potenti. Etiam nec suscipit tortor, at.', 'large', 'eating grass, walking around, sleeping', 0, NULL, 'Yes'),
(13, 'Testy', 'testimage', 3, 'Lorem ipsum', 'small', 'testing around', 0, NULL, 'Yes'),
(15, 'Testy Update', 'testimageUpdate', 5, '', '', 'testing around', 0, NULL, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `city` varchar(55) NOT NULL,
  `ZIP` int(11) NOT NULL,
  `address` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `city`, `ZIP`, `address`) VALUES
(1, 'Vienna', 1220, 'Süßenbrunner Str. 101.'),
(2, 'Vienna', 1090, 'Althanstraße 29-31.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `status` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `status`) VALUES
(1, 'Test Test', 'test@email.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'user'),
(2, 'Admin', 'admin@admin.com', '25f43b1486ad95a1398e3eeb3d83bc4010015fcc9bedb35b432e00298d5021f7', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`fk_user_id`),
  ADD KEY `fk_animal_id` (`fk_animal_id`);

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_location` (`fk_location`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoption`
--
ALTER TABLE `adoption`
  ADD CONSTRAINT `adoption_ibfk_1` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `adoption_ibfk_2` FOREIGN KEY (`fk_animal_id`) REFERENCES `animals` (`id`);

--
-- Constraints for table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`fk_location`) REFERENCES `location` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
