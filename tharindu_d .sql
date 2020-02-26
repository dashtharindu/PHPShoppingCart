

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tharindu_d`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `b_day` varchar(10) NOT NULL,
  `sex` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`username`, `pass`, `f_name`, `l_name`, `b_day`, `sex`) VALUES
('inuka@bla.com', '128ecf542a35ac5270a87dc740918404', 'inuka', 'chamal', '00/00/0000', 'Male'),
('kasun@bla.com', '128ecf542a35ac5270a87dc740918404', 'Kasun', 'Chamara', '04/08/1992', 'Male'),
('keshawa@bla.com', '128ecf542a35ac5270a87dc740918404', 'keshawa ', 'wijethunga', '00/00/0000', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `rest`
--

CREATE TABLE IF NOT EXISTS `rest` (
`id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `code` varchar(10) NOT NULL,
  `sp` varchar(10) NOT NULL,
  `sp_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rest`
--

INSERT INTO `rest` (`id`, `name`, `image`, `price`, `code`, `sp`, `sp_price`) VALUES
(1, 'Burger', 'burger.jpg', '300.00', 's_brg1', '', '0.00'),
(2, 'Cheese Pizza', 'cheese-pizza.jpg', '879.00', 'c_piz1', 'Daily', '657.00'),
(3, 'Cheese Burger', 'cheese-burger.jpg', '456.00', 'c_brg2', 'Monthly', '444.00'),
(4, 'Chillie Rack', 'chillie-rack.jpg', '121.00', 'c_rck1', 'Daily', '110.00'),
(5, 'Enchiladas Dish', 'enchiladas-dish.jpg', '1355.00', 'e_dsh1', 'Weekly', '956.00'),
(6, 'Fish Stew', 'fish_stew.jpg', '246.00', 'f_stw1', 'Daily', '234.00'),
(7, 'French Fries', 'french_fries.jpg', '150.00', 'f_fri1', 'Monthly', '135.00'),
(8, 'Fries Rack', 'fries-rack.jpg', '347.00', 'f_rck2', 'Weekly', '245.00'),
(9, 'Full Rack', 'full-rack.jpg', '448.00', 'f_rck3', 'Weekly', '400.00'),
(10, 'Hamburge', 'hamburge.jpg', '378.00', 'h_brg3', 'Daily', '366.00'),
(11, 'Hot Burge', 'hot-burge.jpg', '367.00', 'h_brg4', 'Monthly', '325.00'),
(12, 'Hot Dog', 'hotdog.jpg', '245.00', 'h_dog1', 'Weekly', '210.00'),
(13, 'Hot Dog (Musterd)', 'hotdog-musterd.jpg', '346.00', 'm_dog2', 'Weekly', '310.00'),
(14, 'Mushroom Pizza', 'mushroom-pizza.jpg', '567.00', 'm_piz2', 'Monthly', '522.00'),
(15, 'Submarine', 'sandwich.jpg', '358.00', 's_swc1', '', '0.00'),
(16, 'Savory Dish', 'savory-dish.jpg', '456.00', 's_dsh2', 'Weekly', '422.00'),
(17, 'Spicy Noodles', 'Spicy-Noodles.jpg', '247.00', 's_ndl1', 'Monthly', '210.00'),
(18, 'Tomato Pizza', 'tomato-pizza.jpg', '663.00', 't_piz3', 'Monthly', '610.00'),
(19, 'Veg Pizza', 'veg-pizza.jpg', '589.00', 'v_piz4', '', '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `rest`
--
ALTER TABLE `rest`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rest`
--
ALTER TABLE `rest`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
