-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 04:51 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Table structure for table `game1`
--

CREATE TABLE IF NOT EXISTS `game1` (
  `game1ID` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `correct` varchar(30) NOT NULL,
  `images` varchar(100) NOT NULL,
  PRIMARY KEY (`game1ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `game1`
--

INSERT INTO `game1` (`game1ID`, `question`, `correct`, `images`) VALUES
(1, 'Where is the mouse in the picture?', 'drag4', 'images/1430406455.jpg'),
(2, 'Where is the Elf in the picture?', 'drag1', 'images/1430404414.jpg'),
(3, 'Where is the mole in the picture?', 'drag4', 'images/1430406725.jpg'),
(4, 'Where is the ball in the picture?', 'drag3', 'images/1430407280.jpg'),
(5, 'Where is the ball in the picture?', 'drag2', 'images/1430407415.jpg'),
(6, 'What would be the best compound word to describe the picture?', 'drag1', 'images/1430407620.jpg'),
(7, 'What would be the best compound word to describe the picture?', 'drag3', 'images/1430407758.jpg'),
(8, 'What would be the best compound word to describe the picture?', 'drag3', 'images/1430407826.jpg'),
(9, 'What would be the best compound word to describe the picture?', 'drag4', 'images/1430407912.jpg'),
(10, 'where would you put a capital letter in the picture above?', 'drag2', 'images/1430408121.jpg'),
(11, 'what noun best describes this picture?', 'drag2', 'images/1430408841.jpg'),
(12, 'what noun best describes this picture?', 'drag1', 'images/1430408941.jpg'),
(13, 'what noun best describes this picture?', 'drag2', 'images/1430409069.jpg'),
(14, 'what noun best describes this picture?', 'drag1', 'images/1430409462.jpg'),
(15, 'what is the correct spelling of the picture above?', 'drag2', 'images/1430409760.jpg'),
(16, 'what is the correct spelling of the picture above?', 'drag1', 'images/1430409834.jpg'),
(17, 'what is the correct spelling of the picture above?', 'drag4', 'images/1430409892.jpg'),
(18, 'what adjective best describes how the person in the picture must be feeling?', 'drag2', 'images/1430410212.jpg'),
(19, 'what adjective best describes how the person in the picture must be feeling?', 'drag4', 'images/1430410287.jpg'),
(20, 'what is the correct spelling of the picture above?', 'drag1', 'images/1430410439.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `game1answer`
--

CREATE TABLE IF NOT EXISTS `game1answer` (
  `answerID` int(11) NOT NULL AUTO_INCREMENT,
  `game1ID` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`answerID`),
  KEY `game1ID` (`game1ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `game1answer`
--

INSERT INTO `game1answer` (`answerID`, `game1ID`, `answer`) VALUES
(1, 1, 'On top of the box'),
(2, 1, 'Behind the Box'),
(3, 1, 'In front of the box'),
(4, 1, 'Under the Box'),
(5, 2, 'Behind the ball'),
(6, 2, 'On top of the ball'),
(7, 2, 'in front of the ball'),
(8, 2, 'Above the ball'),
(9, 3, 'Outside of the hole'),
(10, 3, 'Beside the hole'),
(11, 3, 'Behind the hole'),
(12, 3, 'Inside the hole'),
(13, 4, 'Over the box'),
(14, 4, 'Behind the box'),
(15, 4, 'Under the box'),
(16, 4, 'Inside the box'),
(17, 5, 'Under the box'),
(18, 5, 'Over the box'),
(19, 5, 'In front of the box'),
(20, 5, 'Inside the box'),
(21, 6, 'basketball'),
(22, 6, 'ballbasket'),
(23, 6, 'ball and basket'),
(24, 6, 'basket or ball'),
(25, 7, 'bowlfish'),
(26, 7, 'cerealbowl'),
(27, 7, 'fishbowl'),
(28, 7, 'fish and a bowl'),
(29, 8, 'man on fire'),
(30, 8, 'man under fire'),
(31, 8, 'fireman'),
(32, 8, 'manfire'),
(33, 9, 'house or a tree'),
(34, 9, 'house on a tree'),
(35, 9, 'housetree'),
(36, 9, 'treehouse'),
(37, 10, 'Goes'),
(38, 10, 'Dylan'),
(39, 10, 'To'),
(40, 10, 'School.'),
(41, 11, 'farm'),
(42, 11, 'football ground'),
(43, 11, 'school'),
(44, 11, 'house'),
(45, 12, 'cow'),
(46, 12, 'dog'),
(47, 12, 'sheep'),
(48, 12, 'cat'),
(49, 13, 'fireman'),
(50, 13, 'postman'),
(51, 13, 'doctor'),
(52, 13, 'computer scientist'),
(53, 14, 'clock'),
(54, 14, 'time'),
(55, 14, 'watch'),
(56, 14, 'year'),
(57, 15, 'b'),
(58, 15, 'bee'),
(59, 15, 'beee'),
(60, 15, 'be'),
(61, 16, 'ant'),
(62, 16, 'aunt'),
(63, 16, 'at'),
(64, 16, 'red'),
(65, 17, 'see'),
(66, 17, 'she'),
(67, 17, 'knee'),
(68, 17, 'sea'),
(69, 18, 'winter'),
(70, 18, 'cold'),
(71, 18, 'hot'),
(72, 18, 'summer'),
(73, 19, 'happy'),
(74, 19, 'sad'),
(75, 19, 'confused'),
(76, 19, 'angry'),
(77, 20, 'eight'),
(78, 20, 'ate'),
(79, 20, 'night'),
(80, 20, 'zero');

-- --------------------------------------------------------

--
-- Table structure for table `game2`
--

CREATE TABLE IF NOT EXISTS `game2` (
  `game2ID` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`game2ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `game2`
--

INSERT INTO `game2` (`game2ID`, `question`, `answer`) VALUES
(1, 'Rearrange and spell the word correctly', 'fish'),
(2, 'Rearrange and spell the word correctly', 'hand'),
(3, 'Rearrange and spell the word correctly', 'read'),
(4, 'Rearrange and spell the word correctly', 'lake'),
(5, 'Rearrange and spell the word correctly', 'wolf'),
(6, 'Rearrange and spell the word correctly', 'shop'),
(7, 'Rearrange and spell the word correctly', 'sink'),
(8, 'Rearrange and spell the word correctly', 'lion'),
(9, 'Rearrange and spell the word correctly', 'king'),
(10, 'Rearrange and spell the word correctly', 'snow'),
(11, 'Rearrange and spell the word correctly', 'name'),
(12, 'Rearrange and spell the word correctly', 'help');

-- --------------------------------------------------------

--
-- Table structure for table `game2drag`
--

CREATE TABLE IF NOT EXISTS `game2drag` (
  `dragID` int(11) NOT NULL AUTO_INCREMENT,
  `game2ID` int(11) NOT NULL,
  `drag` varchar(30) NOT NULL,
  PRIMARY KEY (`dragID`),
  KEY `game2ID` (`game2ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `game2drag`
--

INSERT INTO `game2drag` (`dragID`, `game2ID`, `drag`) VALUES
(1, 1, 'h'),
(2, 1, 'i'),
(3, 1, 'f'),
(4, 1, 'h'),
(5, 2, 'n'),
(6, 2, 'a'),
(11, 2, 'h'),
(12, 2, 'd'),
(13, 3, 'r'),
(14, 3, 'd'),
(15, 3, 'e'),
(16, 3, 'a'),
(17, 4, 'e'),
(18, 4, 'k'),
(19, 4, 'l'),
(20, 4, 'e'),
(21, 5, 'f'),
(22, 5, 'l'),
(23, 5, 'w'),
(24, 5, 'o'),
(25, 6, 'p'),
(26, 6, 's'),
(27, 6, 'h'),
(28, 6, 'o'),
(29, 7, 'k'),
(30, 7, 'i'),
(31, 7, 's'),
(32, 7, 'n'),
(33, 8, 'o'),
(34, 8, 'n'),
(35, 8, 'l'),
(36, 8, 'i'),
(37, 9, 'g'),
(38, 9, 'i'),
(39, 9, 'n'),
(40, 9, 'k'),
(41, 10, 'w'),
(42, 10, 'o'),
(43, 10, 's'),
(44, 10, 'n'),
(45, 11, 'n'),
(46, 11, 'e'),
(47, 11, 'm'),
(48, 11, 'a'),
(49, 12, 'p'),
(50, 12, 'e'),
(51, 12, 'l'),
(52, 12, 'h');

-- --------------------------------------------------------

--
-- Table structure for table `game2dropbox`
--

CREATE TABLE IF NOT EXISTS `game2dropbox` (
  `dropboxID` int(11) NOT NULL AUTO_INCREMENT,
  `game2ID` int(11) NOT NULL,
  `dropbox` varchar(30) NOT NULL,
  PRIMARY KEY (`dropboxID`),
  KEY `game2ID` (`game2ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `game2dropbox`
--

INSERT INTO `game2dropbox` (`dropboxID`, `game2ID`, `dropbox`) VALUES
(1, 1, 'drag2'),
(2, 1, 'drag3'),
(3, 1, 'drag4'),
(4, 1, 'drag1'),
(5, 2, 'drag3'),
(6, 2, 'drag2'),
(7, 2, 'drag1'),
(8, 2, 'drag4'),
(9, 3, 'drag1'),
(10, 3, 'drag4'),
(11, 3, 'drag3'),
(12, 3, 'drag2'),
(13, 4, 'drag3'),
(14, 4, 'drag4'),
(15, 4, 'drag2'),
(16, 4, 'drag1'),
(17, 5, 'drag3'),
(18, 5, 'drag4'),
(19, 5, 'drag2'),
(20, 5, 'drag1'),
(21, 6, 'drag2'),
(22, 6, 'drag3'),
(23, 6, 'drag4'),
(24, 6, 'drag1'),
(25, 7, 'drag3'),
(26, 7, 'drag2'),
(27, 7, 'drag4'),
(28, 7, 'drag1'),
(29, 8, 'drag3'),
(30, 8, 'drag4'),
(31, 8, 'drag1'),
(32, 8, 'drag2'),
(33, 9, 'drag4'),
(34, 9, 'drag2'),
(35, 9, 'drag3'),
(36, 9, 'drag1'),
(37, 10, 'drag3'),
(38, 10, 'drag4'),
(39, 10, 'drag2'),
(40, 10, 'drag1'),
(41, 11, 'drag1'),
(42, 11, 'drag4'),
(43, 11, 'drag3'),
(44, 11, 'drag2'),
(45, 12, 'drag4'),
(46, 12, 'drag2'),
(47, 12, 'drag3'),
(48, 12, 'drag1');

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
-- Constraints for table `game1answer`
--
ALTER TABLE `game1answer`
  ADD CONSTRAINT `game1answer_ibfk_1` FOREIGN KEY (`game1ID`) REFERENCES `game1` (`game1ID`) ON UPDATE CASCADE;

--
-- Constraints for table `game2drag`
--
ALTER TABLE `game2drag`
  ADD CONSTRAINT `game2drag_ibfk_1` FOREIGN KEY (`game2ID`) REFERENCES `game2` (`game2ID`) ON UPDATE CASCADE;

--
-- Constraints for table `game2dropbox`
--
ALTER TABLE `game2dropbox`
  ADD CONSTRAINT `game2dropbox_ibfk_1` FOREIGN KEY (`game2ID`) REFERENCES `game2` (`game2ID`) ON UPDATE CASCADE;

--
-- Constraints for table `lessonsen`
--
ALTER TABLE `lessonsen`
  ADD CONSTRAINT `lessonsen_ibfk_1` FOREIGN KEY (`lessonID`) REFERENCES `lessons` (`lessonID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
