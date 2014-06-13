-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 13, 2014 at 03:36 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `fabogesic`
--

-- --------------------------------------------------------

--
-- Table structure for table `EditableContent`
--

CREATE TABLE `EditableContent` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `homeA1` text NOT NULL,
  `presentacionesA1` text NOT NULL,
  `FechaCreacion` datetime NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `EditableContent`
--

INSERT INTO `EditableContent` (`id`, `homeA1`, `presentacionesA1`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, '<div>\r\n<h2>Subtitulo Home A1</h2>\r\n<p>\r\n Maecenas viverra velit semper lorem interdum, eget facilisis urna vehicula. Curabitur lacinia tincidunt sapien, a viverra ante ornare sed. Nunc a mauris nisi. Sed ac arcu dapibus, vehicula nibh in, feugiat odio. Maecenas non dignissim lacus, ut pretium nunc. Aliquam massa sem, imperdiet id pulvinar in, fringilla vel enim. Aliquam non orci sed nisl euismod elementum. Cras id lorem fermentum, volutpat leo quis, tempus libero. Proin imperdiet nibh et dui egestas, in vestibulum purus suscipit. Integer sit amet quam vitae lectus feugiat tristique sed nec diam. Integer eget nunc at lorem dignissim congue sit amet id sapien. Vestibulum fringilla aliquam nisi, vel elementum mauris tincidunt facilisis.\r\n</p>\r\n<p>\r\nAenean a nibh eget neque vulputate porta quis ut odio. Duis aliquam mauris nisl, vitae dapibus sapien porttitor vitae. Phasellus id mollis eros, ut fringilla justo. Donec feugiat tempor arcu ut rutrum. Proin felis nibh, tincidunt nec tincidunt ut, sodales at orci. Curabitur accumsan leo sit amet pharetra rutrum. Aliquam eget accumsan leo. Ut pretium magna et condimentum accumsan. Vivamus sed metus lobortis, fringilla urna a, porttitor lorem. Mauris quam lacus, volutpat quis leo sed, consectetur fringilla orci. Sed consequat, velit a bibendum porta, eros urna dictum ligula, sit amet convallis lorem enim id quam. \r\n</p>\r\n</div>', '<div>\r\n<h3>Presentaciones A1</h3>\r\n<p>\r\n Maecenas viverra velit semper lorem interdum, eget facilisis urna vehicula. Curabitur lacinia tincidunt sapien, a viverra ante ornare sed. Nunc a mauris nisi. Sed ac arcu dapibus, vehicula nibh in, feugiat odio. Maecenas non dignissim lacus, ut pretium nunc. Aliquam massa sem, imperdiet id pulvinar in, fringilla vel enim. Aliquam non orci sed nisl euismod elementum. Cras id lorem fermentum, volutpat leo quis, tempus libero. Proin imperdiet nibh et dui egestas, in vestibulum purus suscipit. Integer sit amet quam vitae lectus feugiat tristique sed nec diam. Integer eget nunc at lorem dignissim congue sit amet id sapien. Vestibulum fringilla aliquam nisi, vel elementum mauris tincidunt facilisis.\r\n</p>\r\n<p>\r\nAenean a nibh eget neque vulputate porta quis ut odio. Duis aliquam mauris nisl, vitae dapibus sapien porttitor vitae. Phasellus id mollis eros, ut fringilla justo. Donec feugiat tempor arcu ut rutrum. Proin felis nibh, tincidunt nec tincidunt ut, sodales at orci. Curabitur accumsan leo sit amet pharetra rutrum. Aliquam eget accumsan leo. Ut pretium magna et condimentum accumsan. Vivamus sed metus lobortis, fringilla urna a, porttitor lorem. Mauris quam lacus, volutpat quis leo sed, consectetur fringilla orci. Sed consequat, velit a bibendum porta, eros urna dictum ligula, sit amet convallis lorem enim id quam. \r\n</p>\r\n<p>\r\n Nulla nulla quam, placerat a lorem vitae, suscipit pellentesque ligula. Praesent nec elit non elit semper porta sed sed nisi. Aliquam bibendum, enim in feugiat viverra, sem tortor fringilla mi, ut auctor mi elit vitae ligula. Duis dui mauris, scelerisque sit amet molestie eu, consequat a leo. Etiam nisl tortor, mollis sit amet cursus a, aliquam sed purus. Nunc imperdiet justo a semper semper. Sed congue magna pharetra porttitor ultrices. Pellentesque ac urna nec eros feugiat accumsan. Aenean venenatis, elit vel eleifend luctus, tortor dolor commodo est, eget tempus enim est vitae enim. Ut sed pharetra justo. Proin iaculis dolor sed justo aliquet interdum. Curabitur a est lacus. Donec non nisl rhoncus risus lacinia mattis sit amet eget nisl. Etiam luctus orci quis nunc blandit cursus.\r\n</p>\r\n<p>\r\nIn a sapien vel tortor posuere dignissim. Donec lectus eros, varius et mattis nec, condimentum cursus urna. Aenean tincidunt molestie ante, sed luctus tellus placerat nec. In lobortis, mi vel semper viverra, est justo consectetur mauris, id vulputate tellus massa eu mauris. Fusce rutrum dolor nec neque ultricies, quis dictum ante vulputate. Nulla congue id lectus quis pharetra. Vestibulum consequat turpis et commodo cursus. Quisque placerat elit quis consectetur suscipit. \r\n</p>\r\n</div>', '2014-06-12 22:03:27', '2014-06-12 22:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `Slider`
--

CREATE TABLE `Slider` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `ImageUrl` varchar(150) NOT NULL,
  `LinkUrl` varchar(150) DEFAULT NULL,
  `FechaCreacion` datetime NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Slider`
--

INSERT INTO `Slider` (`id`, `ImageUrl`, `LinkUrl`, `FechaCreacion`, `FechaModificacion`) VALUES
(6, 'slide_1402591481.jpg', '', '2014-06-12 18:44:41', '2014-06-12 21:22:30'),
(7, 'slide_1402591646.jpg', '', '2014-06-12 18:47:26', '2014-06-12 21:23:34'),
(8, 'slide4.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'slide_1402601733.jpg', '', '2014-06-12 21:35:33', '2014-06-12 21:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE `Usuario` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `EsAdministrador` int(1) NOT NULL DEFAULT '0',
  `FechaCreacion` datetime NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`id`, `Nombre`, `Apellido`, `Email`, `Password`, `EsAdministrador`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'Tomás', 'Moyano', 'tomas@wirallinteractive.com.ar', 'w1r4ll', 1, '2014-06-12 09:00:00', '2014-06-12 09:00:00'),
(2, 'Ignacio', 'Moyano', 'moyanotomasi@gmail.com', 'w1r4ll', 0, '2014-06-12 09:00:00', '2014-06-12 09:00:00'),
(3, 'Admin', 'Admin', 'tomoy_9@hotmail.com', 'w1r4ll', 1, '2014-06-12 13:15:00', '2014-06-12 13:15:00');
