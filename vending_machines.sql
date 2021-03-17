-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 09:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vending_machines`
--

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

CREATE TABLE `diet` (
  `Name` text NOT NULL,
  `Restriction` text NOT NULL,
  `Pork_Containing` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`Name`, `Restriction`, `Pork_Containing`) VALUES
('Basil\'s Duplex Sandwich Cremes', 'Vegan', 'Pork-Free'),
('Basil\'s Lemon Sandwich Cremes', 'Vegan', 'Pork-Free'),
('Cheetos Crunchy Flamin\' Hot', 'Vegetarian', 'Pork-Free'),
('Cheetos Crunchy Original', 'Vegetarian', 'Pork-Free'),
('Cheez It White Cheddar', 'Vegetarian', 'Pork-Free'),
('Chuckles', 'Vegetarian', 'Pork-Containing'),
('Basil\'s Duplex Sandwich Cremes', 'Vegan', 'Pork-Free'),
('Basil\'s Lemon Sandwich Cremes', 'Vegan', 'Pork-Free'),
('Cheetos Crunchy Flamin\' Hot', 'Vegetarian', 'Pork-Free'),
('Cheetos Crunchy Original', 'Vegetarian', 'Pork-Free'),
('Cheez It White Cheddar', 'Vegetarian', 'Pork-Free'),
('Chuckles', 'Vegetarian', 'Pork-Containing'),
('Doritos Cool Ranch', 'Vegetarian', 'Pork-Free'),
('Doritos Nacho Cheese', 'Vegetarian', 'Pork-Free'),
('Dove Dark Chocolate', 'Vegetarian', 'Pork-Free'),
('Dove Milk Chocolate', 'Vegetarian', 'Pork-Free'),
('Famous Amos Bite Size Chocolate Chip', 'Vegetarian', 'Pork-Free'),
('Freshley\'s Buddy Bars', 'Vegetarian', 'Pork-Containing'),
('Fritos Chili Cheese', 'Vegetarian', 'Pork-Free'),
('Fritos Original', 'Vegan', 'Pork-Free'),
('Grandma\'s Sandwich Cremes', 'Vegetarian', 'Pork-Free'),
('Haribo Gold Bears', 'Vegetarian', 'Pork-Containing'),
('Herr\'s Deep Dish Pizza Cheese Curls', 'Vegetarian', 'Pork-Free'),
('Herr\'s Jalapeno Popper Cheese Curls', 'Vegetarian', 'Pork-Free'),
('Herr\'s Popped Chips Red Hot', 'Vegetarian', 'Pork-Free'),
('Herr\'s Popped Chips Sea Salt', 'Vegan', 'Pork-Free'),
('Hershey\'s Almond', 'Vegan', 'Pork-Free'),
('Jays (Ridges) Open Pit BBQ', 'Vegetarian', 'Pork-Free'),
('Jays Hot Stuff Chips', 'Vegan', 'Pork-Free'),
('Kar\'s Original Trail Mix', 'Vegetarian', 'Pork-Free'),
('Kit Kat Big Kat', 'Vegetarian', 'Pork-Free'),
('Knott\'s Premium Cookies Strawberry', 'Vegetarian', 'Pork-Free'),
('Lay\'s Potato Chips Barbecue', 'Vegan', 'Pork-Free'),
('Lay\'s Potato Chips Original', 'Vegan', 'Pork-Free'),
('m&m\'s Original', 'Vegetarian', 'Pork-Free'),
('m&m\'s Peanut', 'Vegetarian', 'Pork-Free'),
('m&m\'s Peanut Butter', 'Vegetarian', 'Pork-Free'),
('Milky way', 'Vegetarian', 'Pork-Free'),
('Musketeers', 'Vegetarian', 'Pork-Free'),
('Nature Valley Crunchy Oats \'n Honey', 'Vegan', 'Pork-Free'),
('Pop Tarts Cherry', 'Vegetarian', 'Pork-Free'),
('Pop Tarts Strawberry', 'Vegetarian', 'Pork-Free'),
('Rice Krispies Treats Original', 'Vegetarian', 'Pork-Containing'),
('Ruffles Cheddar & Sour Cream', 'Vegetarian', 'Pork-Free'),
('Ruffles Queso', 'Vegetarian', 'Pork-Free'),
('Ruger Chocolate Wafers', 'Vegetarian', 'Pork-Containing'),
('Salsitas', 'Vegan', 'Pork-Free'),
('Salsitos', 'Vegan', 'Pork-Free'),
('Skittles Original', 'Vegan', 'Pork-Free'),
('Skittles Tropical', 'Vegan', 'Pork-Free'),
('Skittles Wild Berry', 'Vegan', 'Pork-Free'),
('Snickers Original', 'Vegetarian', 'Pork-Free'),
('Snyder\'s Olde Tyme Pretzels', 'Vegan', 'Pork-Free'),
('Starburst Original', 'Vegetarian', 'Pork-Containing'),
('Sun Maid Cookies Oatmeal Raisin Apple', 'Vegetarian', 'Pork-Free'),
('Swedish Fish', 'Vegan', 'Pork-Free'),
('Takis Limon', 'Vegan', 'Pork-Free'),
('TGI Friday\'s Potato Skins', 'Vegetarian', 'Pork-Containing'),
('Top Ramen Chicken', 'Non-Veg', 'Pork-Containing'),
('Twix', 'Vegetarian', 'Pork-Free'),
('Twizzlers', 'Vegan', 'Pork-Free'),
('Uncle Ray\'s Chipotle & Jack Cheese', 'Vegetarian', 'Pork-Free'),
('Zoo Animal Crackers', 'Vegetarian', 'Pork-Free');

-- --------------------------------------------------------

--
-- Table structure for table `preference`
--

CREATE TABLE `preference` (
  `Name` text NOT NULL,
  `numOfStudents` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preference`
--

INSERT INTO `preference` (`Name`, `numOfStudents`) VALUES
('Cheetos Crunchy Original', 61),
('Cheetos Crunchy Flamin\' Hot', 64),
('Doritos Nacho Cheese', 63),
('Doritos Cool Ranch', 53),
('Lay\'s Potato Chips Original', 56),
('Fritos Original', 24),
('Ruffles Cheddar & Sour Cream', 62),
('Cheez It White Cheddar', 64),
('Salsitas', 15);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Location` text NOT NULL,
  `Name` text NOT NULL,
  `Price` float NOT NULL,
  `Type` text NOT NULL,
  `Flavor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Location`, `Name`, `Price`, `Type`, `Flavor`) VALUES
('1502', 'Salsitas', 1, 'Chips', 'Spicy'),
('1502', 'Uncle Ray\'s Chipotle & Jack Cheese', 1, 'Chips', 'Cheesy'),
('1502', 'Jays (Ridges) Open Pit BBQ', 1, 'Chips', 'BBQ'),
('1502', 'TGI Friday\'s Potato Skins', 0.75, 'Chips', 'Cheesy'),
('1502', 'Snyder\'s Olde Tyme Pretzels', 0.75, 'Pretzels', 'Salt'),
('1502', 'Ruffles Cheddar & Sour Cream', 0.75, 'Chips', 'Cheesy'),
('1502', 'Doritos Nacho Cheese', 0.75, 'Chips', 'Cheesy'),
('1502', 'Cheetos Crunchy Original', 0.75, 'Chips', 'Cheesy'),
('1502', 'Cheez It White Cheddar', 0.75, 'Cheez Itz', 'Cheesy'),
('1502', 'Fritos Original', 0.75, 'Chips', 'Salt'),
('1502', 'Herr\'s Popped Chips Red Hot', 0.75, 'Chips', 'Spicy'),
('1502', 'Zoo Animal Crackers', 1, 'Cookies', 'Plain'),
('1502', 'Famous Amos Bite Size Chocolate Chip', 1, 'Cookies', 'Chocolate'),
('1502', 'Haribo Gold Bears', 1, 'Candy', 'Fruit'),
('1502', 'Kar\'s Original Trail Mix', 1, 'Other', 'Other'),
('1502', 'Milky way', 1.25, 'Candy', 'Chocolate'),
('1502', 'Nature Valley Crunchy Oats \'n Honey', 1.25, 'Other', 'Other'),
('1502', 'Skittles Original', 1.25, 'Candy', 'Chocolate'),
('1502', 'm&m\'s Peanut', 1.25, 'Candy', 'Chocolate'),
('1502', 'Snickers Original', 1.25, 'Candy', 'Chocolate'),
('1502', 'Kit Kat Big Kat', 1.25, 'Candy', 'Chocolate'),
('1502', 'Hershey\'s Almond', 1.25, 'Candy', 'Chocolate'),
('1502', 'Dove Dark Chocolate', 1.25, 'Candy', 'Chocolate'),
('1502', 'm&m\'s Peanut Butter', 1.25, 'Candy', 'Chocolate'),
('1502', 'm&m\'s Original', 1.25, 'Candy', 'Chocolate'),
('1502', 'Basil\'s Lemon Sandwich Cremes', 1.25, 'Cookies', 'Lemon'),
('1502', 'Rice Krispies Treats Original', 1.25, 'Sweet', 'Marshmellow'),
('1502', 'Basil\'s Duplex Sandwich Cremes', 1.25, 'Cookies', 'Vanilla'),
('1502', 'Pop Tarts Strawberry', 1.25, 'Sweet', 'Strawberry'),
('1502', 'Ruger Chocolate Wafers', 1.25, 'Sweet', 'Chocolate'),
('1503', 'Ruffles Queso', 1, 'Chips', 'Cheesy'),
('1503', 'Salsitas', 1, 'Chips', 'Spicy'),
('1503', 'Jays (Ridges) Open Pit BBQ', 1, 'Chips', 'BBQ'),
('1503', 'TGI Friday\'s Potato Skins', 0.75, 'Chips', 'Cheesy'),
('1503', 'Ruffles Cheddar & Sour Cream', 0.75, 'Chips', 'Cheesy'),
('1503', 'Cheetos Crunchy Original', 0.75, 'Chips', 'Cheesy'),
('1503', 'Cheez It White Cheddar', 0.75, 'Cheez Itz', 'Cheesy'),
('1503', 'Doritos Nacho Cheese', 0.75, 'Chips', 'Cheesy'),
('1503', 'Lay\'s Potato Chips Original', 0.75, 'Chips', 'Salt'),
('1503', 'Cheetos Crunchy Flamin\' Hot', 0.75, 'Chips', 'Spicy'),
('1503', 'Herr\'s Popped Chips Sea Salt', 0.75, 'Chips', 'Salt'),
('1503', 'Takis Limon', 0.75, 'Chips', 'Spicy'),
('1503', 'Top Ramen Chicken', 1, 'Ramen', 'Chicken'),
('1503', 'Sun Maid Cookies Oatmeal Raisin Apple', 1, 'Cookies', 'Oatmeal Raisin Apple'),
('1503', 'Kar\'s Original Trail Mix', 1, 'Other', 'Other'),
('1503', 'Knott\'s Premium Cookies Strawberry', 1, 'Cookies', 'Strawberry'),
('1503', 'Famous Amos Bite Size Chocolate Chip', 1, 'Cookies', 'Chocolate'),
('1503', 'Kit Kat Big Kat', 1.25, 'Candy', 'Chocolate'),
('1503', 'Skittles Tropical', 1.25, 'Candy', 'Chocolate'),
('1503', 'Twix', 1.25, 'Candy', 'Chocolate'),
('1503', 'Dove Dark Chocolate', 1.25, 'Candy', 'Chocolate'),
('1503', 'm&m\'s Original', 1.25, 'Candy', 'Chocolate'),
('1503', 'm&m\'s Peanut', 1.25, 'Candy', 'Chocolate'),
('1503', 'Snickers Original', 1.25, 'Candy', 'Chocolate'),
('1503', 'Milky way', 1.25, 'Candy', 'Chocolate'),
('1503', 'Musketeers', 1.25, 'Candy', 'Chocolate'),
('1503', 'Hershey\'s Almond', 1.25, 'Candy', 'Chocolate'),
('1503', 'Rice Krispies Treats Original', 1.25, 'Sweet', 'Marshmellow'),
('1503', 'Basil\'s Lemon Sandwich Cremes', 1.25, 'Cookies', 'Lemon'),
('1503', 'Pop Tarts Cherry', 1.25, 'Sweet', 'Cherry'),
('1503', 'Freshley\'s Buddy Bars', 1.25, 'Sweet', 'Chocolate'),
('1504', 'Herr\'s Popped Chips Red Hot', 1, 'Chips', 'Spicy'),
('1504', 'Fritos Chili Cheese', 1, 'Chips', 'Cheesy'),
('1504', 'Salsitos', 1, 'Chips', 'Spicy'),
('1504', 'Cheez It White Cheddar', 0.75, 'Cheez Itz', 'Cheesy'),
('1504', 'Snyder\'s Olde Tyme Pretzels', 0.75, 'Pretzels', 'Salt'),
('1504', 'Snyder\'s Olde Tyme Pretzels', 0.75, 'Pretzels', 'Salt'),
('1504', 'Herr\'s Deep Dish Pizza Cheese Curls', 0.75, 'Chips', 'Cheesy'),
('1504', 'Lay\'s Potato Chips Barbecue', 0.75, 'Chips', 'BBQ'),
('1504', 'Doritos Nacho Cheese', 0.75, 'Chips', 'Cheesy'),
('1504', 'Cheetos Crunchy Flamin\' Hot', 0.75, 'Chips', 'Spicy'),
('1504', 'Takis Limon', 0.75, 'Chips', 'Spicy'),
('1504', 'Cheetos Crunchy Original', 0.75, 'Chips', 'Cheesy'),
('1504', 'Lay\'s Potato Chips Original', 0.75, 'Chips', 'Salt'),
('1504', 'Fritos Original', 0.75, 'Chips', 'Salt'),
('1504', 'Famous Amos Bite Size Chocolate Chip', 1, 'Cookies', 'Chocolate'),
('1504', 'Knott\'s Premium Cookies Strawberry', 1, 'Cookies', 'Strawberry'),
('1504', 'Sun Maid Cookies Oatmeal Raisin Apple', 1, 'Cookies', 'Oatmeal Raisin Apple'),
('1504', 'Grandma\'s Sandwich Cremes', 1, 'Cookies', 'Vanilla'),
('1504', 'Top Ramen Chicken', 1, 'Ramen', 'Chicken'),
('1504', 'Milky way', 1.25, 'Candy', 'Chocolate'),
('1504', 'm&m\'s Original', 1.25, 'Candy', 'Chocolate'),
('1504', 'Starburst Original', 1.25, 'Candy', 'Fruit'),
('1504', 'Skittles Tropical', 1.25, 'Candy', 'Chocolate'),
('1504', 'Musketeers', 1.25, 'Candy', 'Chocolate'),
('1504', 'Twix', 1.25, 'Candy', 'Chocolate'),
('1504', 'Kit Kat Big Kat', 1.25, 'Candy', 'Chocolate'),
('1504', 'Dove Milk Chocolate', 1.25, 'Candy', 'Chocolate'),
('1504', 'Snickers Original', 1.25, 'Candy', 'Chocolate'),
('1504', 'm&m\'s Peanut', 1.25, 'Candy', 'Chocolate'),
('1504', 'Rice Krispies Treats Original', 1.25, 'Sweet', 'Marshmellow'),
('1504', 'Basil\'s Lemon Sandwich Cremes', 1.25, 'Cookies', 'Lemon'),
('1504', 'Basil\'s Duplex Sandwich Cremes', 1.25, 'Cookies', 'Vanilla'),
('1505', 'Doritos Cool Ranch', 1, 'Chips', 'Cool Ranch'),
('1505', 'Ruffles Queso', 1, 'Chips', 'Cheesy'),
('1505', 'Salsitos', 1, 'Chips', 'Spicy'),
('1505', 'Herr\'s Popped Chips Sea Salt', 0.75, 'Chips', 'Salt'),
('1505', 'Fritos Original', 0.75, 'Chips', 'Salt'),
('1505', 'Snyder\'s Olde Tyme Pretzels', 0.75, 'Pretzels', 'Salt'),
('1505', 'Cheetos Crunchy Original', 0.75, 'Chips', 'Cheesy'),
('1505', 'Ruffles Cheddar & Sour Cream', 0.75, 'Chips', 'Cheesy'),
('1505', 'Doritos Nacho Cheese', 0.75, 'Chips', 'Cheesy'),
('1505', 'Lay\'s Potato Chips Original', 0.75, 'Chips', 'Salt'),
('1505', 'Takis Limon', 0.75, 'Chips', 'Spicy'),
('1505', 'Top Ramen Chicken', 1, 'Ramen', 'Chicken'),
('1505', 'Famous Amos Bite Size Chocolate Chip', 1, 'Cookies', 'Chocolate'),
('1505', 'Sun Maid Cookies Oatmeal Raisin Apple', 1, 'Cookies', 'Oatmeal Raisin Apple'),
('1505', 'Grandma\'s Sandwich Cremes', 1, 'Cookies', 'Vanilla'),
('1505', 'Knott\'s Premium Cookies Strawberry', 1, 'Cookies', 'Strawberry'),
('1505', 'Skittles Tropical', 1.25, 'Candy', 'Chocolate'),
('1505', 'm&m\'s Peanut', 1.25, 'Candy', 'Chocolate'),
('1505', 'Kit Kat Big Kat', 1.25, 'Candy', 'Chocolate'),
('1505', 'Swedish Fish', 1.25, 'Candy', 'Fruit'),
('1505', 'Snickers Original', 1.25, 'Candy', 'Chocolate'),
('1505', 'Twizzlers', 1.25, 'Candy', 'Fruit'),
('1505', 'Twix', 1.25, 'Candy', 'Chocolate'),
('1505', 'Nature Valley Crunchy Oats \'n Honey', 1.25, 'Other', 'Other'),
('1505', 'm&m\'s Original', 1.25, 'Candy', 'Chocolate'),
('1505', 'Milky way', 1.25, 'Candy', 'Chocolate'),
('1505', 'Pop Tarts Cherry', 1.25, 'Sweet', 'Cherry'),
('1505', 'Rice Krispies Treats Original', 1.25, 'Sweet', 'Marshmellow'),
('1505', 'Basil\'s Lemon Sandwich Cremes', 1.25, 'Cookies', 'Lemon'),
('1505', 'Ruger Chocolate Wafers', 1.25, 'Sweet', 'Chocolate'),
('1506', 'Jays Hot Stuff Chips', 1, 'Chips', 'Spicy'),
('1506', 'Uncle Ray\'s Chipotle & Jack Cheese', 1, 'Chips', 'Cheesy'),
('1506', 'Kar\'s Original Trail Mix', 1, 'Other', 'Other'),
('1506', 'TGI Friday\'s Potato Skins', 1, 'Chips', 'Cheesy'),
('1506', 'Fritos Original', 0.75, 'Chips', 'Salt'),
('1506', 'Ruffles Cheddar & Sour Cream', 0.75, 'Chips', 'Cheesy'),
('1506', 'Doritos Nacho Cheese', 0.75, 'Chips', 'Cheesy'),
('1506', 'TGI Friday\'s Potato Skins', 0.75, 'Chips', 'Cheesy'),
('1506', 'Herr\'s Deep Dish Pizza Cheese Curls', 0.75, 'Chips', 'Cheesy'),
('1506', 'Herr\'s Jalapeno Poppers Cheese Curls', 0.75, 'Chips', 'Cheesy'),
('1506', 'Cheetos Crunchy Original', 0.75, 'Chips', 'Cheesy'),
('1506', 'Knott\'s Premium Cookies Strawberry', 1, 'Cookies', 'Strawberry'),
('1506', 'Zoo Animal Crackers', 1, 'Cookies', 'Plain'),
('1506', 'Sun Maid Cookies Oatmeal Raisin Apple', 1, 'Cookies', 'Oatmeal Raisin Apple'),
('1506', 'Top Ramen Chicken', 1, 'Ramen', 'Chicken'),
('1506', 'Hershey\'s Almond', 1.25, 'Candy', 'Chocolate'),
('1506', 'Nature Valley Crunchy Oats \'n Honey', 1.25, 'Other', 'Other'),
('1506', 'Kit Kat Big Kat', 1.25, 'Candy', 'Chocolate'),
('1506', 'Skittles Wild Berry', 1.25, 'Candy', 'Chocolate'),
('1506', 'Milky way', 1.25, 'Candy', 'Chocolate'),
('1506', 'Chuckles', 1.25, 'Candy', 'Fruit'),
('1506', 'Snickers Original', 1.25, 'Candy', 'Chocolate'),
('1506', 'm&m\'s Peanut', 1.25, 'Candy', 'Chocolate'),
('1506', 'm&m\'s Peanut', 1.25, 'Candy', 'Chocolate'),
('1506', 'Freshley\'s Buddy Bars', 1.25, 'Sweet', 'Chocolate'),
('1506', 'Ruger Chocolate Wafers', 1.25, 'Sweet', 'Chocolate'),
('1506', 'Pop Tarts Cherry', 1.25, 'Sweet', 'Cherry'),
('1506', 'Basil\'s Duplex Sandwich Cremes', 1.25, 'Cookies', 'Vanilla');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
