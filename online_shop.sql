-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 01:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved_orders`
--

CREATE TABLE `approved_orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approved_orders`
--

INSERT INTO `approved_orders` (`order_id`, `order_name`, `file_name`, `description`, `price`) VALUES
(105, 'washing machine', 'washing machine.jpg', 'this machine is used for washing dirty clothes', 46.00);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `sector` varchar(100) DEFAULT NULL,
  `cell` varchar(100) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `phone_number`, `district`, `sector`, `cell`, `village`, `email`, `gender`, `password`) VALUES
(45678987, 'deo', '0788676789', 'huye', '', '', '', '', 'M', '1234'),
(45678989, 'mwiza', '0788676780', 'kamonyi', '', '', '', '', 'F', 'mwiza'),
(45679002, 'mugabo', '0788676799', 'rurindo', '', '', '', '', 'M', 'mugabo'),
(45679003, 'ange', '0788676667', 'muhango', '', '', '', '', 'F', 'ange'),
(45679031, 'muhoza', '0786760399', 'muhanga', 'muhororo', 'mwehu', 'kagarara', 'muhoza12@gmail.com', 'f', 'muhoza');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` char(255) DEFAULT NULL,
  `client_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_name`, `file_name`, `description`, `price`, `client_number`) VALUES
(6889, 'dress', 'picture15.jpg', 'this dress is best for children', '25', ''),
(6891, 'solar panels', 'picture31.jpg', 'kneeling professional fixing solar panels', '23 US $/piece', '250788676789'),
(6893, 'boots', 'picture25.jpg', '	the best boots for boys wearing in warm climate mostly used by famous', '33', ''),
(6894, 'men\'s bag', 'picture28.jpg', 'men\'s bag the best in the journey travelling and other uses', '23', ''),
(6895, 'plastic', 'plastic.jpg', 'used in the construction of water pipes', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `file_name`, `description`, `price`, `quantity`, `date`, `status`) VALUES
(69, 'plastic', 'construction materials', 'plastic.jpg', 'used in the construction of water pipes', '3 US $/piece', '42/pieces', '2024-01-04', 'active'),
(70, 'men\'s bag', 'bags', 'picture28.jpg', 'men\'s bag the best in the journey travelling and other uses', '23 US $/piece', '32/pieces', '2024-01-06', 'active'),
(72, 'washing machine', 'Home equipments', 'washing machine.jpg', 'this machine is used for washing dirty clothes', '46 US $/piece', '47/pieces', '2024-01-02', 'active'),
(73, 'automated injection moulding machines', 'electronic', 'picture34.jpg', 'Horizontal color image of large group of automated injection moulding machines for plastic parts production.', '4 US $/1meter', '500/meters', '2024-01-05', 'active'),
(75, 'boots', 'shoes', 'picture25.jpg', '	the best boots for boys wearing in warm climate mostly used by famous', '33 US $/piece', '50/pieces', '2023-12-13', 'active'),
(76, 'laptop', 'electronic', 'picture27.jpg', 'this is best in simplifying work', '200 US $/piece', '30/pieces', '2024-01-04', 'active'),
(77, 'cement', 'construction materials', 'cement.jpg', 'this is used for strong houses, coast, road and long holes', '23 US $/piece', '520/pieces', '2024-01-11', 'active'),
(78, 'shopping bag', 'bags', 'picture22.jpg', 'this bag is best for shopping in super markets and any where else', '3 US $/piece', '560pieces', '2023-12-14', 'active'),
(79, 'dress', 'clothes', 'picture15.jpg', 'this dress is best for children', '25 US $/piece', '125pieces', '2024-01-04', 'available'),
(80, 'solar panels', 'electronic', 'picture31.jpg', 'kneeling professional fixing solar panels', '23 US $/piece', '50/pieces', '2024-01-04', 'active'),
(81, 'kettle', 'Home equipments', 'kettle.jpg', 'It is used for making tea, not too much water at home', '20 US $/piece', '300/pieces', '2023-12-06', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `rejected_orders`
--

CREATE TABLE `rejected_orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rejected_orders`
--

INSERT INTO `rejected_orders` (`order_id`, `order_name`, `file_name`, `description`, `price`) VALUES
(27, 'jordan', 'picture3 .jpg', 'nike the original quality the best for both men and women', 23.00),
(28, 'jordan', 'picture3 .jpg', 'nike the original quality the best for both men and women', 23.00),
(29, 'Lighting decor macro', 'picture32.jpg', 'Lighting decor macro these are good at producing high light in the house or outside and other different places', 2.00),
(30, 'washing machine', 'washing machine.jpg', 'this machine is used for washing dirty clothes', 46.00),
(32, 'Different electrical equipment', 'picture33.jpg', 'Different electrical equipment on blue background. Various electric products on the store shelve', 23.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `sector` varchar(255) DEFAULT NULL,
  `cell` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `file_name`, `phone_number`, `district`, `sector`, `cell`, `village`, `email`, `gender`, `password`) VALUES
(122, 'ange', '', '0786760321', 'muhanga', '', '', '', '', 'F', '1122'),
(123, 'hacker', '', '0786760333', 'rurindo', '', '', '', '', 'M', '12345'),
(124, 'mugabo', '', '0786760320', 'rubavu', '', '', '', '', 'M', '0786760snv'),
(130, 'didier', '', '', '', '', '', '', '', 'choose sex', '12323'),
(137, 'karangwa', '', '', '', '', '', '', '', 'choose sex', 'harangwa'),
(139, 'mutesi', '', '', '', '', '', '', '', 'choose sex', 'mutesi'),
(144, 'muzungu', '', '', '', '', '', '', '', 'choose sex', 'muzungu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approved_orders`
--
ALTER TABLE `approved_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `rejected_orders`
--
ALTER TABLE `rejected_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approved_orders`
--
ALTER TABLE `approved_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45679032;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6896;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `rejected_orders`
--
ALTER TABLE `rejected_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
