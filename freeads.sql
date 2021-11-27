-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2021 at 02:10 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freeads`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `category_id`, `description`, `picture`, `price`, `location`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Samsung Galaxy S21 Ultra 5G', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638013215-0.jpg', 2500, 'Cotonou', 1, '2021-11-27 10:40:15', '2021-11-27 10:40:15'),
(2, 'Xiaomi Mi 11 Ultra', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638013458-0.jpg', 1700, 'Pekin', 1, '2021-11-27 10:44:18', '2021-11-27 10:44:18'),
(3, 'Apple iPhone 12 Pro Max', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638013588-0.jpg', 2800, 'Texas', 1, '2021-11-27 10:46:28', '2021-11-27 10:46:28'),
(4, 'Google Pixel 5', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638013759-0.jpg', 2100, 'Austin', 1, '2021-11-27 10:49:19', '2021-11-27 10:49:19'),
(5, 'Apple MacBook Pro 14 pouces M1 Pro', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638013879-0.jpg', 4500, 'Canada', 1, '2021-11-27 10:51:19', '2021-11-27 10:51:19'),
(6, 'Dell XPS 15', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638014014-0.jpg', 3700, 'Taiwan', 1, '2021-11-27 10:53:34', '2021-11-27 10:53:34'),
(7, 'Asus Zephyrus G15', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638014235-0.jpg', 4200, 'Germany', 1, '2021-11-27 10:57:15', '2021-11-27 10:57:15'),
(8, 'Lenovo Legion 5 Pro', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638014442-0.jpg', 2600, 'Hong Kong', 1, '2021-11-27 11:00:42', '2021-11-27 11:00:42'),
(9, 'Volvo Electric Truck', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638014842-0.jpg', 7500, 'Italy', 2, '2021-11-27 11:07:22', '2021-11-27 11:07:22'),
(10, 'Shell Truck Atlas', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638014974-0.jpg', 7900, 'Australia', 2, '2021-11-27 11:09:34', '2021-11-27 11:09:34'),
(11, 'Autonomous Truck', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638015149-0.jpg', 8100, 'New Zealand', 2, '2021-11-27 11:12:29', '2021-11-27 11:12:29'),
(12, 'Transportify Delivery Truck', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638015455-0.jpg', 8700, 'Phillipines', 2, '2021-11-27 11:17:35', '2021-11-27 11:17:35'),
(13, 'Chevrolet Corvette Stingray', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638015831-0.jpg', 8600, 'Japan', 2, '2021-11-27 11:23:51', '2021-11-27 11:23:51'),
(14, 'Cadillac CT4', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638015913-0.jpg', 9400, 'Nevada', 2, '2021-11-27 11:25:13', '2021-11-27 11:25:13'),
(15, 'Ford Mustang Shelby GT500', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638015972-0.jpg', 7450, 'Argentina', 2, '2021-11-27 11:26:12', '2021-11-27 11:26:12'),
(16, 'McLaren GT', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638016062-0.jpg', 6200, 'United Kingdom', 2, '2021-11-27 11:27:42', '2021-11-27 11:27:42'),
(17, 'Downtown Condo', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638016714-0.jpg', 8400, 'Benin', 3, '2021-11-27 11:38:34', '2021-11-27 11:38:34'),
(18, 'One way Condo', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638016844-0.jpg', 9100, 'Togo', 3, '2021-11-27 11:40:44', '2021-11-27 11:40:44'),
(19, 'Rustic Condo', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638017256-0.jpg', 8300, 'Ghana', 3, '2021-11-27 11:47:36', '2021-11-27 11:47:36'),
(20, 'Urban Condo', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638017334-0.jpg', 9700, 'Egypt', 3, '2021-11-27 11:48:54', '2021-11-27 11:48:54'),
(21, 'Futuristic Duplex', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638017848-0.jpg', 9800, 'Congo', 3, '2021-11-27 11:57:28', '2021-11-27 11:57:28'),
(22, 'Modern Duplex', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638017928-0.jpg', 9400, 'Morocco', 3, '2021-11-27 11:58:48', '2021-11-27 11:58:48'),
(23, 'Cozy Duplex', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638018011-0.jpg', 9200, 'France', 3, '2021-11-27 12:00:11', '2021-11-27 12:00:11'),
(24, 'Roomy Duplex', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec interdum velit, at porttitor tellus. Nunc laoreet tellus in metus egestas, sed tincidunt mi varius. Sed eget metus lorem. Etiam quis posuere mauris, nec ornare quam. Nulla ac urna sed ligula porttitor volutpat. Sed tempor finibus viverra. Proin id elementum ante, vitae tempus dolor. In eu pulvinar ligula. Praesent eleifend, libero vel maximus consequat, sem erat fermentum magna, ac iaculis velit lacus aliquet tortor. Suspendisse sit amet erat fermentum, convallis neque sed, consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus sem vitae condimentum scelerisque. Vivamus imperdiet orci lorem, sed imperdiet nisl malesuada et. Phasellus lobortis molestie pellentesque.\r\n\r\nMorbi quis quam vel nulla congue rutrum. Cras mattis velit eget felis ullamcorper porta. Etiam facilisis sed velit eu consequat. Proin quis posuere posuere.', '/images/ads/ad-1638018114-0.jpg', 8390, 'Spain', 3, '2021-11-27 12:01:54', '2021-11-27 12:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Technology', NULL, '2021-11-27 10:38:48', '2021-11-27 10:38:48'),
(2, 'Smartphone', '1', '2021-11-27 10:38:59', '2021-11-27 10:38:59'),
(3, 'Laptop', '1', '2021-11-27 10:39:08', '2021-11-27 10:39:08'),
(4, 'Automotive', NULL, '2021-11-27 10:39:16', '2021-11-27 10:39:16'),
(5, 'Truck', '4', '2021-11-27 10:39:23', '2021-11-27 10:39:23'),
(6, 'Car', '4', '2021-11-27 10:39:31', '2021-11-27 10:39:31'),
(7, 'Real Estate', NULL, '2021-11-27 10:39:38', '2021-11-27 10:39:38'),
(8, 'Condo', '7', '2021-11-27 10:39:47', '2021-11-27 10:39:47'),
(9, 'Duplex', '7', '2021-11-27 10:39:56', '2021-11-27 10:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_21_090102_create_ads_table', 1),
(6, '2021_11_25_113930_create_cats_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nickname`, `email`, `login`, `role`, `phone`, `email_verified_at`, `password`, `picture`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jefferson', 'jeff@gmail.com', 'jeff', 'admin', '+22997854126', '2021-11-27 10:33:35', '$2y$10$bgsYf5RkbEiMhh3KV3MNfOcMSk74Yj79H/S8EH..uTWA6pne6qu7W', '/images/users/user-1638012800.jpg', NULL, '2021-11-27 10:33:20', '2021-11-27 10:33:35'),
(2, 'Nicaise', 'nicaise@gmail.com', 'nicaise', 'user', '+22994958741', '2021-11-27 11:03:58', '$2y$10$XsyqPVVdrmh8Erxyg6h2Eukq0nR5QaIXzbHEOemP55dZTTMSyQSK.', '/images/users/user-1638014621.jpg', NULL, '2021-11-27 11:03:41', '2021-11-27 11:03:58'),
(3, 'Gael', 'gael@gmail.com', 'gael', 'user', '+22997852146', '2021-11-27 11:36:52', '$2y$10$Bi/lvV2tZwcmnjZsOp9fA.PS9H3VfSSKrHADQe8Y.qn1ara0uyoYu', '/images/users/user-1638016596.jpg', NULL, '2021-11-27 11:36:36', '2021-11-27 11:36:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_login_unique` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
