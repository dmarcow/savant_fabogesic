-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2014 a las 15:54:04
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fabogesic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacionessub4`
--

CREATE TABLE IF NOT EXISTS `presentacionessub4` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `Sub1ImageUrl` varchar(200) NOT NULL,
  `Sub1Text` varchar(200) NOT NULL,
  `Sub1Link` varchar(200) NOT NULL,
  `Sub2ImageUrl` varchar(200) NOT NULL,
  `Sub2Text` varchar(200) NOT NULL,
  `Sub2Link` varchar(200) NOT NULL,
  `Sub3ImageUrl` varchar(200) NOT NULL,
  `Sub3Text` varchar(200) NOT NULL,
  `Sub3Link` varchar(200) NOT NULL,
  `Prospecto` varchar(200) NOT NULL,
  `Prospecto2` varchar(200) NOT NULL,
  `FechaCreacion` datetime NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  `Prospecto1ImageUrl` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Prospecto2ImageUrl` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `presentacionessub4`
--

INSERT INTO `presentacionessub4` (`id`, `Sub1ImageUrl`, `Sub1Text`, `Sub1Link`, `Sub2ImageUrl`, `Sub2Text`, `Sub2Link`, `Sub3ImageUrl`, `Sub3Text`, `Sub3Link`, `Prospecto`, `Prospecto2`, `FechaCreacion`, `FechaModificacion`, `Prospecto1ImageUrl`, `Prospecto2ImageUrl`) VALUES
(1, 'caja-ninos-400x20-libre.png', 'SuspensiÃ³n 2% - 1 frasco x 90ml', 'FABOGESIC 400_COMPRIMIDOS.jpg', 'caja-ninos-400x10-receta.png', 'SuspensiÃ³n 4% - 1 frasco x 90ml', 'Prosp Fabogesic 600.jpg', 'caja-ninos-400x10-receta.png', '-', 'Prosp Fabogesic 600.jpg', 'Fabogesic_400.pdf', 'Fabogesic_600.pdf', '2014-06-16 18:27:00', '2014-09-11 18:23:22', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
