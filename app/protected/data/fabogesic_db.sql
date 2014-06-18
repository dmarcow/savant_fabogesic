-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 18, 2014 at 03:28 PM
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
-- Table structure for table `PresentacionesEditable`
--

CREATE TABLE `PresentacionesEditable` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `Sub1ImageUrl` varchar(200) NOT NULL,
  `Sub1Text` varchar(100) NOT NULL,
  `Sub2ImageUrl` varchar(200) NOT NULL,
  `Sub2Text` varchar(100) NOT NULL,
  `Sub3ImageUrl` varchar(200) NOT NULL,
  `Sub3Text` varchar(100) NOT NULL,
  `FechaCreacion` datetime NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `PresentacionesEditable`
--

INSERT INTO `PresentacionesEditable` (`id`, `Sub1ImageUrl`, `Sub1Text`, `Sub2ImageUrl`, `Sub2Text`, `Sub3ImageUrl`, `Sub3Text`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'caja-capsulas.png', 'Cápsulas Blandas', 'caja-comprimidos.png', 'Comprimidos', 'caja-suspension.png', 'Suspensión Oral', '2014-06-16 15:00:00', '2014-06-16 15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `PresentacionesSub1`
--

CREATE TABLE `PresentacionesSub1` (
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
  `Sub4ImageUrl` varchar(200) NOT NULL,
  `Sub4Text` varchar(200) NOT NULL,
  `Sub4Link` varchar(200) NOT NULL,
  `Sub5ImageUrl` varchar(200) NOT NULL,
  `Sub5Text` varchar(200) NOT NULL,
  `Sub5Link` varchar(200) NOT NULL,
  `FechaCreacion` datetime NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `PresentacionesSub1`
--

INSERT INTO `PresentacionesSub1` (`id`, `Sub1ImageUrl`, `Sub1Text`, `Sub1Link`, `Sub2ImageUrl`, `Sub2Text`, `Sub2Link`, `Sub3ImageUrl`, `Sub3Text`, `Sub3Link`, `Sub4ImageUrl`, `Sub4Text`, `Sub4Link`, `Sub5ImageUrl`, `Sub5Text`, `Sub5Link`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'caja-capsulas-400x10.png', '400mg x 10 cÃ¡psulas de gelatina blanda', 'fabo_400_CB.png', 'caja-capsulas-400x90.png', '400mg x 20 cÃ¡psulas de gelatina blanda', 'fabo_400_CB.png', 'caja-capsulas-400x90.png', '400mg x 90 cÃ¡psulas de gelatina blanda', 'fabo_400_CB.png', 'caja-capsulas-600x10.png', '600mg x 10 cÃ¡psulas de gelatina blanda', 'fabo_600_CB.png', 'caja-capsulas-600x20.png', '600mg x 20 cÃ¡psulas de gelatina blanda', 'fabo_600_CB.png', '2014-06-16 17:00:00', '2014-06-17 21:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `PresentacionesSub2`
--

CREATE TABLE `PresentacionesSub2` (
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
  `FechaCreacion` datetime NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `PresentacionesSub2`
--

INSERT INTO `PresentacionesSub2` (`id`, `Sub1ImageUrl`, `Sub1Text`, `Sub1Link`, `Sub2ImageUrl`, `Sub2Text`, `Sub2Link`, `Sub3ImageUrl`, `Sub3Text`, `Sub3Link`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'caja-comprimidos-400x90.png', '400mg x 90 comprimidos', 'fabo_400_compr.png', 'caja-comprimidos-600x90.png', '600mg x 20 comprimidos ', 'fabo_600_compr.png', 'caja-comprimidos-600x90.png', '600mg x 90 comprimidos', 'fabo_600_compr.png', '2014-06-16 18:27:00', '2014-06-17 21:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `PresentacionesSub3`
--

CREATE TABLE `PresentacionesSub3` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `Image1Url` varchar(200) NOT NULL,
  `Image2Url` varchar(200) NOT NULL,
  `Image3Url` varchar(200) NOT NULL,
  `Image4Url` varchar(200) NOT NULL,
  `Image5Url` varchar(200) NOT NULL,
  `Image6Url` varchar(200) NOT NULL,
  `Image7Url` varchar(200) NOT NULL,
  `Image8Url` varchar(200) NOT NULL,
  `Image9Url` varchar(200) NOT NULL,
  `Image10Url` varchar(200) NOT NULL,
  `Text1` varchar(300) NOT NULL,
  `Text2` varchar(200) NOT NULL,
  `Text3` varchar(200) NOT NULL,
  `Text4` text NOT NULL,
  `Text5` text NOT NULL,
  `Text6` text NOT NULL,
  `BtnImageUrl1` varchar(200) NOT NULL,
  `BtnImageUrl2` varchar(200) NOT NULL,
  `Text9` text NOT NULL,
  `Text10` text NOT NULL,
  `Text11` text NOT NULL,
  `Text12` text NOT NULL,
  `Text13` text NOT NULL,
  `Prospecto1ImageUrl` varchar(200) NOT NULL,
  `Prospecto2ImageUrl` varchar(200) NOT NULL,
  `FechaCreacion` datetime NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `PresentacionesSub3`
--

INSERT INTO `PresentacionesSub3` (`id`, `Image1Url`, `Image2Url`, `Image3Url`, `Image4Url`, `Image5Url`, `Image6Url`, `Image7Url`, `Image8Url`, `Image9Url`, `Image10Url`, `Text1`, `Text2`, `Text3`, `Text4`, `Text5`, `Text6`, `BtnImageUrl1`, `BtnImageUrl2`, `Text9`, `Text10`, `Text11`, `Text12`, `Text13`, `Prospecto1ImageUrl`, `Prospecto2ImageUrl`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'seccion-pedriatica.jpg', 'header-seccion-pediatrica.jpg', 'seccion-pediatrica-tip.jpg', 'caja-ninos-400x10.png', 'txt-venta-libre.png', 'nena.png', 'caja-ninos-400x20.png', 'txt-venta-libre.png', 'vaquita.png', 'nene.png', '<strong class="text-primary">Fabogesic niños</strong> es un tratamiento eficaz y rápido para reducir el dolor y la fiebre.', '400mg x 90 cápsulas de gelatina blanda', '400mg x 20 cápsulas de gelatina blanda', '              <li class="tick">\r\n                <p>comienza a actuar en 15 minutos para bajar la temperatura</p>\r\n              </li>\r\n              <li class="tick">\r\n                <p>alivia la fiebre por 8 horas</p>\r\n              </li>\r\n              <li class="tick">\r\n                <p>alivia dolores  de cualquier tipo, como ser: dolor de oído, por golpes y fiebre asociada con la dentición</p>\r\n              </li>', '              <li class="tick">\r\n                <p>no produce picazón en la garganta de tu niño</p>\r\n              </li>\r\n              <li class="tick">\r\n                <p>Es libre de Azúcar.</p>\r\n              </li>\r\n              <li class="tick">\r\n                <p>contiene un práctico vaso dosificador que permite administrar la dosis exacta</p>\r\n              </li>\r\n              <li class="tick">\r\n                <p>disponible en sabor Tutti Frutti y Banana-Cereza</p>\r\n              </li>', 'Los niños en etapa de crecimiento pueden sufrir golpes que producen dolor y un estado de  insatisfacción que se transmite a los padres, quienes no desean ver a sus hijos así. El dolor es la manera que el cuerpo tiene para decirnos que necesita un poco de atención.  Pero, ¿cómo reacciona tu hijo ante el dolor? ¿Para qué sirve? Te ayudaremos a entender mejor las causas y consecuencias del dolor:', 'pregunta1.png', 'pregunta2.png', '                  <p>A lo largo del cuerpo de tu hijo existen millones de fibras nerviosas donde algunas se conectan con receptores del dolor, llamados Nociceptores, que le avisan lo que está pasando en su cuerpo. Cuando tu hijo se enferma o golpea, estos Nociceptores trasmiten señales de dolor al cerebro a través de la medula espinal mientras que sustancias químicas sensibilizan los nervios amplificando el dolor y asegurándose que el cerebro los escuche. </p>\r\n                  <p>Recordemos que los niños requieren permanentemente  amor y  atención por parte de su  familia , especialmente en estos momentos.</p>', '                  <p>El Ibuprofeno es el analgésico más recomendado por pediatras porque actúa rápidamente bajando la fiebre y calmando el dolor. El efecto tiene una duración de 8hs por lo que se debe tomar 3 veces por día.</p>\r\n                  <p>No obstante, los padres deben hablar con el pediatra para determinar el uso correcto del medicamento. </p>', 'Una pregunta básica que muchos padres pueden tener es, ¿cuál es la diferencia entre el <strong>ibuprofeno</strong>, el medicamento de la Infancia Advil ®, y el <strong>acetaminofén</strong>, el medicamento en los niños Tylenol ®? <br /><strong>Estas son algunas cosas que los padres pueden querer saber antes de ir a la farmacia:</strong>', '                  <li class="tick tick-blue">\r\n                    <p>El ibuprofeno es el n° 1 recomendado por los pediatras antipirético / analgésico.</p>\r\n                  </li>\r\n                  <li class="tick tick-blue">\r\n                    <p>El ibuprofeno y el acetaminofén son los únicos ingredientes activos utilizados en venta libre para aliviar el dolor de los niños / antifebriles.</p>\r\n                  </li>\r\n                  <li class="tick tick-blue">\r\n                    <p>El ibuprofeno (el ingrediente activo en Fabogesic Niños) dura más tiempo que el acetaminofeno . El ibuprofeno tiene una duración de hasta 8 horas, mientras que el paracetamol dura 4-6 horas.</p>\r\n                  </li>', '                  <li class="tick tick-blue">\r\n                    <p>El ibuprofeno es seguro cuando se toma según las indicaciones. Sin embargo, como con cualquier medicamento, los padres deben hablar con el pediatra de su hijo para hablar sobre lo que puede ser mejor para su hijo.</p>\r\n                  </li>', 'fabo_ninos_2.png', 'fabo_ninos_4.png', '2014-06-17 18:00:00', '2014-06-17 18:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `Slider`
--

INSERT INTO `Slider` (`id`, `ImageUrl`, `LinkUrl`, `FechaCreacion`, `FechaModificacion`) VALUES
(10, 'slide_1402695628.jpg', NULL, '2014-06-16 00:00:00', '2014-06-16 00:00:00'),
(11, 'slide_1402696819.jpg', NULL, '2014-06-16 10:00:00', '2014-06-16 10:00:00'),
(12, 'slide_1402932299.jpg', '', '2014-06-16 17:24:59', '2014-06-16 17:24:59');

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
