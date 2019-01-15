-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 15, 2019 at 02:15 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `website_url` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `select_one` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `checkbox` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile_no`, `website_url`, `gender`, `select_one`, `img`, `comment`, `checkbox`, `dob`) VALUES
(1, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '123', '1676924402', '', '', '', '', '', '', ''),
(2, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '12344', '1676924402', '', '', '', '', '', '', ''),
(3, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '11111111111111111111111111', '1676924402', '', '', '', '', '', '', ''),
(4, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '111111111111111111111111111', '1676924402', '', '', '', '', '', '', ''),
(8, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '111111111111111', '1676924402', '', '', '', '', '', '', ''),
(10, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '3333333', '1676924402', 'https://www.google.com.bd/', '', '', '', '', '', ''),
(11, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '222222222222222222222222222', '1676924402', 'https://www.google.com.bd/', 'male', '', '', '', '', ''),
(12, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', 'ppppppppppppppppppppppppppppppppppppppppp', '1676924402', 'https://www.google.com.bd/', 'female', '', '', '', '', ''),
(13, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', 'kkkkkkkkkkkkkkkkkkkkk', '1676924402', 'https://www.google.com.bd/', 'male', '', 'outdoorchef.png', '', '', ''),
(14, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '2222222222222222222222222', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'outdoorchef.png', '', '', ''),
(15, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '9999999999999999999', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'thermomix HS.png', '', '', ''),
(16, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '000000000000000000000000000000000000', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'thermomix HS.png', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '', ''),
(17, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '111111111111111', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'thermomix HS.png', 'hihihihihihihihihiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'red,blue,green', ''),
(18, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', 'llllllllllllllllll', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'outdoorchef.png', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'red,blue,green', '1547596800'),
(19, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '222222222222222222222', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'thermomix HS.png', 'jjjjjjjjjjjjjjjjjjjjjjjjjj', 'red,blue,green', '2019-01-02'),
(20, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '111111111111111111111', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'thermomix HS.png', 'HBIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII', 'red,blue,green', '02-01-2019'),
(21, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '111111111111111111111111111111', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'thermomix HS.png', '213123321r5t234r5t243t423t43w4ty35', 'red,blue', '02-01-2019'),
(22, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '444444444444444444444', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 2', 'thermomix HS.png', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'red,blue', '01-01-2019'),
(23, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '44444444444444444444', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', '1', 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'red,blue', '01-01-2019'),
(24, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', 'rtrtreyeryh', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'uploads/outdoorchef.png', 'qatqatqatqat', 'red,blue,green', '22-01-2019'),
(25, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', 'swqfqweeqw', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', '', 'qaqagtfqatqatgqwetfgqwegwqg', 'red,blue', '17-01-2019'),
(26, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '8686668587', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'uploads/Capture.PNG', 'wsytw4huye45uru45eu', 'red,blue', '29-01-2019'),
(27, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '1233333333', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'uploads/Capture.PNG', 'qwrqwgtq3gy', 'red,blue,green,yellow', '02-01-2019'),
(28, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '232313233', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'uploads/Capture.PNG', 'q12rwrr3r33r1r311r3r31r11r', 'red,blue', '29-01-2019'),
(29, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', 'r3efwrqdqd', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'uploads/Capture.PNG', '2er21r12r12r1', 'red', '29-01-2019'),
(30, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', 'r3r3rr3', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 2', 'uploads/Capture.PNG', 'r33rr3r3r3', 'red', '29-01-2019'),
(31, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', 'qerererrr', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 2', 'uploads/Capture.PNG', 'r33rr3r3r3', 'red', '29-01-2019'),
(32, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '1111111111111111', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 1', 'uploads/Capture.PNG', 'tw424t44t4t4t4t44t4t4', 'red', '29-01-2019'),
(33, 'Souvik', 'Ghosh', 'rkjpritam@gmail.com', '1222222222', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 2', 'assets/uploads/Capture.PNG', 'rdrtsrrstttr', 'red', '01-01-2019'),
(34, 'Souvikuuuuu', 'Ghosh', 'rkjpritam@gmail.com', '111111111111111111111', '1676924402', 'https://www.google.com.bd/', 'male', 'Option 2', 'assets/uploads/Capture.PNG', 'Hellow', 'red,blue', '31-01-2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
