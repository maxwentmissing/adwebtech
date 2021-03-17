-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 16, 2018 at 02:33 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movingon`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `detail`) VALUES
(1, 'MI I', 'Basic Algebra'),
(2, 'MI2', 'Matrices, Functions, Transformations'),
(3, 'MI3', 'Logrithmic Functions, Trigonometry '),
(4, 'MI4', 'Sequence and Series, Vectors, Polars'),
(5, 'CSI', 'Introduction Computer Science, Hardware, Software, Python'),
(6, 'Web Tech', 'JavaScript, PHP and MySQL'),
(7, 'Advanced MySQL', 'Advanced Query'),
(8, 'PHP OOP', 'Object Oriented Programming'),
(9, 'jQuery', 'JavaScript Library'),
(10, 'JSON', 'JavaScript Object Notation'),
(11, 'Files', 'Reading and Writing to a file'),
(12, 'JavaScript', 'Client side scripting language'),
(13, 'JSON vs. XML', 'Recieve Data from a server'),
(14, 'HTML Objects', 'Using JavaScript to manipulate HTML objects'),
(15, 'BOOTSTRAP', 'framework for developing responsive, mobile-first web sites.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;