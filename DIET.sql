SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `diet` (
  `Name` text NOT NULL,
  `Restriction` text NOT NULL,
  `Pork_Containing` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
