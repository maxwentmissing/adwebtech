SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `preference` (
  `Name` text NOT NULL,
  `numOfStudents` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
