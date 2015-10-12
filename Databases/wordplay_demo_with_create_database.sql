-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 04:50 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wordplay_demo`
--
CREATE DATABASE IF NOT EXISTS `wordplay_demo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wordplay_demo`;

-- --------------------------------------------------------

--
-- Table structure for table `game1`
--

CREATE TABLE IF NOT EXISTS `game1` (
  `game1ID` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `answer1` varchar(100) NOT NULL,
  `answer2` varchar(100) NOT NULL,
  `answer3` varchar(100) NOT NULL,
  `answer4` varchar(100) NOT NULL,
  `correct` varchar(30) NOT NULL,
  `images` varchar(100) NOT NULL,
  PRIMARY KEY (`game1ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `game1`
--

INSERT INTO `game1` (`game1ID`, `question`, `answer1`, `answer2`, `answer3`, `answer4`, `correct`, `images`) VALUES
(1, 'Where is the mouse in the picture?', 'On top of the box', 'Behind the Box', 'In front of the box', 'Under the Box', 'drag4', 'images/1430406455.jpg'),
(2, 'Where is the Elf in the picture?', 'Behind the ball', 'On top of the ball', 'in front of the ball', 'Above the ball', 'drag1', 'images/1430404414.jpg'),
(3, 'Where is the mole in the picture?', 'Outside of the hole', 'Beside the hole', 'Behind the hole', 'Inside the hole', 'drag4', 'images/1430406725.jpg'),
(4, 'Where is the ball in the picture?', 'Over the box', 'Behind the box', 'Under the box', 'Inside the box', 'drag3', 'images/1430407280.jpg'),
(5, 'Where is the ball in the picture?', 'Under the box', 'Over the box', 'In front of the box', 'Inside the box', 'drag2', 'images/1430407415.jpg'),
(6, 'What would be the best compound word to describe the picture?', 'basketball', 'ballbasket', 'ball and basket', 'basket or ball', 'drag1', 'images/1430407620.jpg'),
(7, 'What would be the best compound word to describe the picture?', 'bowlfish', 'cerealbowl', 'fishbowl', 'fish and a bowl', 'drag3', 'images/1430407758.jpg'),
(8, 'What would be the best compound word to describe the picture?', 'man on fire', 'man under fire', 'fireman', 'manfire', 'drag3', 'images/1430407826.jpg'),
(9, 'What would be the best compound word to describe the picture?', 'house or a tree', 'house on a tree', 'housetree', 'treehouse', 'drag4', 'images/1430407912.jpg'),
(10, 'where would you put a capital letter in the picture above?', 'Goes', 'Dylan', 'To', 'School.', 'drag2', 'images/1430408121.jpg'),
(11, 'what noun best describes this picture?', 'farm', 'football ground  ', 'school', 'house', 'drag2', 'images/1430408841.jpg'),
(12, 'what noun best describes this picture?', 'cow', 'dog', 'sheep', 'cat', 'drag1', 'images/1430408941.jpg'),
(13, 'what noun best describes this picture?', 'fireman', 'postman', 'doctor', 'computer scientist', 'drag2', 'images/1430409069.jpg'),
(14, 'what noun best describes this picture?', 'clock', 'time', 'watch', 'year', 'drag1', 'images/1430409462.jpg'),
(15, 'what is the correct spelling of the picture above?', 'b', 'bee', 'beee', 'be', 'drag2', 'images/1430409760.jpg'),
(16, 'what is the correct spelling of the picture above?', 'ant', 'aunt', 'at', 'red', 'drag1', 'images/1430409834.jpg'),
(17, 'what is the correct spelling of the picture above?', 'see', 'she', 'knee', 'sea', 'drag4', 'images/1430409892.jpg'),
(18, 'what adjective best describes how the person in the picture must be feeling?', 'winter', 'cold', 'hot', 'summer', 'drag2', 'images/1430410212.jpg'),
(19, 'what adjective best describes how the person in the picture must be feeling?', 'happy', 'sad', 'confused', 'angry', 'drag4', 'images/1430410287.jpg'),
(20, 'what is the correct spelling of the picture above?', 'eight', 'ate', 'night', 'zero', 'drag1', 'images/1430410439.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `game2`
--

CREATE TABLE IF NOT EXISTS `game2` (
  `game2ID` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `dropbox1` varchar(30) NOT NULL,
  `dropbox2` varchar(30) NOT NULL,
  `dropbox3` varchar(30) NOT NULL,
  `dropbox4` varchar(30) NOT NULL,
  `drag1` varchar(10) NOT NULL,
  `drag2` varchar(10) NOT NULL,
  `drag3` varchar(10) NOT NULL,
  `drag4` varchar(10) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`game2ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `game2`
--

INSERT INTO `game2` (`game2ID`, `question`, `dropbox1`, `dropbox2`, `dropbox3`, `dropbox4`, `drag1`, `drag2`, `drag3`, `drag4`, `answer`) VALUES
(1, 'Rearrange and spell the word correctly', 'drag2', 'drag3', 'drag4', 'drag1', 'h', 'f', 'i', 's', 'fish'),
(2, 'Rearrange and spell the word correctly', 'drag3', 'drag2', 'drag1', 'drag4', 'n', 'a', 'h', 'd', 'hand'),
(3, 'Rearrange and spell the word correctly', 'drag1', 'drag4', 'drag3', 'drag2', 'r', 'd', 'a', 'e', 'read'),
(4, 'Rearrange and spell the word correctly', 'drag3', 'drag4', 'drag2', 'drag1', 'e', 'k', 'l', 'a', 'lake'),
(5, 'Rearrange and spell the word correctly', 'drag3', 'drag4', 'drag2', 'drag1', 'f', 'l', 'w', 'o', 'wolf'),
(6, 'Rearrange and spell the word correctly', 'drag2', 'drag3', 'drag4', 'drag1', 'p', 's', 'h', 'o', 'shop'),
(7, 'Rearrange and spell the word correctly', 'drag3', 'drag2', 'drag4', 'drag1', 'k', 'i', 's', 'n', 'sink'),
(8, 'Rearrange and spell the word correctly', 'drag3', 'drag4', 'drag1', 'drag2', 'o', 'n', 'l', 'i', 'lion'),
(9, 'Rearrange and spell the word correctly', 'drag4', 'drag2', 'drag3', 'drag1', 'g', 'i', 'n', 'k', 'king'),
(10, 'Rearrange and spell the word correctly', 'drag3', 'drag4', 'drag2', 'drag1', 'w', 'o', 's', 'n', 'snow'),
(11, 'Rearrange and spell the word correctly', 'drag1', 'drag4', 'drag3', 'drag2', 'n', 'e', 'm', 'a', 'name'),
(12, 'Rearrange and spell the word correctly', 'drag4', 'drag2', 'drag3', 'drag1', 'p', 'e', 'l', 'h', 'help');

-- --------------------------------------------------------

--
-- Table structure for table `game3`
--

CREATE TABLE IF NOT EXISTS `game3` (
  `game3ID` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `textbox` varchar(200) NOT NULL,
  `sentencefrag` varchar(100) NOT NULL,
  PRIMARY KEY (`game3ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `game3`
--

INSERT INTO `game3` (`game3ID`, `question`, `textbox`, `sentencefrag`) VALUES
(1, 'Change the sentence into future tense - Emma is my sister. She is doing her homework.', 'will be doing her homework.', 'Emma is my sister. She'),
(2, 'Change the sentence into past tense - Ali is in primary school. He will be going to school on Saturday.', 'went to school on Saturday.', 'Ali is in primary school. He'),
(3, 'Change the sentence into the present tense - They will go to the zoo.', 'go to the zoo.', 'They'),
(4, 'Change the sentence into the future tense - Harry is a boy. He is eating chocolate.', 'will be eating chocolate.', 'Harry is a boy. He'),
(5, 'Change the sentence into the past tense  - Kenny is hungry. Kenny will eat fish and chips for lunch.', 'ate fish and chips for lunch.', 'Kenny is hungry. Kenny'),
(6, 'Change the sentence into the past tense  - Dylan needs milk. Dylan will go to the shop.', 'went to the shop.', 'Dylan needs milk. Dylan'),
(7, 'Change the sentence into the present tense - Colin loves playing computer games. He will be taking a break.', 'is taking a break.', 'Colin loves playing computer games. He'),
(8, 'Add a conjunction to the sentence - She went to class ___   saw her friends there.', 'and saw her friends there.', 'She went to class'),
(9, 'Add a conjunction to the sentence - You can have the green __ red pen not both.', 'or red pen not both.', 'You can have the green'),
(10, 'Change this sentence to the past tense - John is Peter''s brother. Peter is playing video games.', 'was playing video games.', 'John is Peter''s brother. Peter'),
(11, 'Add a conjunction to the sentences - The dog has a ball. The dog has a bone.', 'and a bone.', 'The dog has a ball'),
(12, 'Add a conjunction to the sentences - My dad drives the boat. My brother drives the boat.', 'and brother drive the boat.', 'My dad'),
(13, 'Convert to past tense - John loves pie. John will eat the pie.', 'ate the pie.', ' John loves pie. John');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE IF NOT EXISTS `lessons` (
  `lessonID` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL,
  PRIMARY KEY (`lessonID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lessonID`, `heading`, `images`) VALUES
(1, 'Nouns', 'images/1432310528.gif'),
(2, 'Verbs', 'images/1432317016.jpg'),
(3, 'Compound words', 'images/1432317570.png');

-- --------------------------------------------------------

--
-- Table structure for table `lessonsen`
--

CREATE TABLE IF NOT EXISTS `lessonsen` (
  `lessonsenID` int(11) NOT NULL AUTO_INCREMENT,
  `lessonID` int(11) NOT NULL,
  `sen` varchar(100) NOT NULL,
  PRIMARY KEY (`lessonsenID`),
  KEY `lessonID` (`lessonID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `lessonsen`
--

INSERT INTO `lessonsen` (`lessonsenID`, `lessonID`, `sen`) VALUES
(1, 1, 'Nouns name persons, places, things.'),
(2, 1, 'Persons: Mr. Johnson, mother, woman, Maria  '),
(3, 1, 'Places: city, home, Texas, Canada '),
(4, 1, 'Things: house, ring, shoe, table, desk, month, light '),
(5, 1, 'Test your knowledge with Spot the picture game in Interactive Section!'),
(6, 2, 'A verb is a word that expresses action, makes a statement, or links relationships. '),
(7, 2, 'Action verbs do just that. They show action. '),
(8, 2, 'Examples: Jim hit the ball.'),
(9, 2, ' Susie cooked spaghetti.'),
(10, 2, 'Joey drove the tractor. '),
(11, 3, 'A compound word is 2 words together can give different meaning.'),
(12, 3, 'Examples: Fire and man makes Fireman.'),
(13, 3, 'Fish and bowl makes fishbowl.'),
(14, 3, 'Tree and house makes Treehouse.'),
(15, 3, 'Sun and glasses makes Sunglasses.');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
  `scoreID` int(11) NOT NULL,
  `score` int(20) NOT NULL,
  `oldscore` int(11) NOT NULL,
  `Win` int(20) NOT NULL,
  `showWin` tinyint(1) NOT NULL,
  `Timer` tinyint(1) NOT NULL,
  PRIMARY KEY (`scoreID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`scoreID`, `score`, `oldscore`, `Win`, `showWin`, `Timer`) VALUES
(0, 1, 4, 30, 0, 1),
(1, 0, 6, 11, 0, 1),
(2, 0, 3, 3, 0, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lessonsen`
--
ALTER TABLE `lessonsen`
  ADD CONSTRAINT `lessonsen_ibfk_1` FOREIGN KEY (`lessonID`) REFERENCES `lessons` (`lessonID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
