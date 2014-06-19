-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 19-06-2014 a las 16:15:34
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `fabogesic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Dolores`
--

CREATE TABLE `Dolores` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `MuscularesImageUrl` varchar(200) NOT NULL,
  `MuscularesSubtitle` varchar(400) NOT NULL,
  `MuscularesSub1` text NOT NULL,
  `PosturalesImageUrl` varchar(200) NOT NULL,
  `PostularesSubtitle` varchar(400) NOT NULL,
  `PostularesSub1` text NOT NULL,
  `PostularesSub2` text NOT NULL,
  `PostularesSub3` text NOT NULL,
  `MenstrualesImageUrl` varchar(200) NOT NULL,
  `MenstrualesSubtitle` varchar(400) NOT NULL,
  `MenstrualesSub1` text NOT NULL,
  `MenstrualesSub2` text NOT NULL,
  `MenstrualesSub2ImageUrl` varchar(200) NOT NULL,
  `MenstrualesSub3` text NOT NULL,
  `CabezaImageUrl` varchar(200) NOT NULL,
  `CabezaSubtitle` varchar(400) NOT NULL,
  `CabezaSub1` longtext NOT NULL,
  `CabezaSub2` text NOT NULL,
  `CabezaSub3` text NOT NULL,
  `CabezaSub4` text NOT NULL,
  `ArticularesImageUrl` varchar(200) NOT NULL,
  `ArticularesSubtitle` varchar(400) NOT NULL,
  `ArticularesSub1` text NOT NULL,
  `ArticularesSub2` text NOT NULL,
  `ArticularesSub3` text NOT NULL,
  `ArticularesSub4` text NOT NULL,
  `ArticularesSub5` text NOT NULL,
  `FechaCreacion` datetime NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Dolores`
--

INSERT INTO `Dolores` (`id`, `MuscularesImageUrl`, `MuscularesSubtitle`, `MuscularesSub1`, `PosturalesImageUrl`, `PostularesSubtitle`, `PostularesSub1`, `PostularesSub2`, `PostularesSub3`, `MenstrualesImageUrl`, `MenstrualesSubtitle`, `MenstrualesSub1`, `MenstrualesSub2`, `MenstrualesSub2ImageUrl`, `MenstrualesSub3`, `CabezaImageUrl`, `CabezaSubtitle`, `CabezaSub1`, `CabezaSub2`, `CabezaSub3`, `CabezaSub4`, `ArticularesImageUrl`, `ArticularesSubtitle`, `ArticularesSub1`, `ArticularesSub2`, `ArticularesSub3`, `ArticularesSub4`, `ArticularesSub5`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'header-dolores-musculares.jpg', 'Â¿Te golpeaste practicando algÃºn deporte? Â¿O quedaste dolorido despuÃ©s de hacer fuerza en el trabajo o en la casa?<br />Millones de personas cada aÃ±o se lesionan haciendo deportes o mientras realizan sus tareas diarias.<br /><br /><strong>DescubrÃ­ mÃ¡s sobre los dolores musculares y la forma de tratarlos:</strong>', '              <p><strong>Descanso / Reposo.</strong></p>\r\n              <p>La lesiÃ³n debe permanecer inmÃ³vil y no apliques fuerza adicional en el sitio del esguince. En el caso de un esguince de tobillo por ejemplo, evitÃ¡ caminar.</p>\r\n\r\n              <p><strong>Hielo.</strong></p>\r\n              <p>AplicÃ¡ hielo inmediatamente despuÃ©s del esguince para reducir el dolor eÂ hinchazÃ³nÂ producidos por la lesiÃ³n. Lo podes aplicar durante 10-15 minutos (una aplicaciÃ³n mÃ¡s prolongada puede agravar la lesiÃ³n en lugar de curarla). UtilizÃ¡ hielo 3 Ã³ 4 veces al dÃ­a. En algunas ocasiones, ademÃ¡s, se puede utilizar unÂ vendajeÂ para proporcionar soporte a la zona afectada.</p>\r\n\r\n              <p><strong>ElevaciÃ³n.</strong></p>\r\n              <p>MantenÃ© elevada la zona afectada en relaciÃ³n con el resto del cuerpo para minimizar aÃºn mÃ¡s la hinchazÃ³n y los moretones.</p>\r\n\r\n              <p>Tomar Fabogesic te ayuda a aliviar el dolor y a reducir la inflamaciÃ³n.</p>\r\n\r\n              <p>Se recomienda que consultes al mÃ©dico si sentÃ­s un dolor intenso, un mÃºsculo o articulaciÃ³n muy inflamado, o si el movimiento se encuentra restringido.</p>', 'header-dolores-posturales.jpg', '<strong>Â¿Alguna vez tuviste dolores de espalda por malas posturas?</strong><br />La migraÃ±a, o dolor de cabeza localizado, en ocasiones puede ser causada por una mala postura al dormir o  al permanecer sentado,  ademÃ¡s del estrÃ©s y la falta de descanso. Una postura incorrecta tambiÃ©n puede producir dolor de espalda, Ã©ste es un problema muy comÃºn que sufre el 80% de las personas en algÃºn mo', '                <div class="col-sm-12 text-left">\r\n                  \r\n                  <p>Aparte de las lesiones o tensiones en la espalda producidos por el esfuerzo de los mÃºsculos o ligamentos, algunos problemas de espalda pueden gestarse a raÃ­z de un movimiento brusco. Algunas de las causas mÃ¡s comunes de dolor de espalda son:</p>\r\n\r\n                </div>\r\n\r\n                <div class="col-sm-12">\r\n                  \r\n                  <div class="row">\r\n                    \r\n                    <div class="col-xs-12 col-sm-6">\r\n                      \r\n                      <ul>\r\n                        <li class="tick tick-white">Levantar incorrectamente.</li>\r\n                        <li class="tick tick-white">TorsiÃ³n o estiramiento excesivo.</li>\r\n                        <li class="tick tick-white">Mala postura al caminar o estando sentado.</li>\r\n                      </ul>\r\n\r\n                    </div>\r\n\r\n                    <div class="col-xs-12 col-sm-6">\r\n                      \r\n                      <ul>\r\n                        <li class="tick tick-white">Dormir en mala postura o en un colchÃ³n demasiado blando.</li>\r\n                        <li class="tick tick-white">Estar excedido de peso.</li>\r\n                        <li class="tick tick-white">Inactividad o sedentarismo.</li>\r\n                      </ul>\r\n\r\n                    </div>\r\n\r\n                  </div>\r\n               </div>', '                  <p>Cualquier procedimiento de frÃ­o/calor sobre los mÃºsculos doloridos te ayudarÃ¡ a relajarlos y aliviarlos. Los analgÃ©sicos anti-inflamatorios como Fabogesic son muy eficaces tambiÃ©n.</p>', '                <div class="col-sm-6">\r\n                    \r\n                    <p><strong>LevantÃ¡ los objetos correctamente. </strong>MantenÃ© la espalda recta, flexionÃ¡ las rodillas hasta que estÃ© al mismo nivel que el objeto, y levantÃ¡ de manera lenta y constante el objeto ayudÃ¡ndote con tus piernas. EvitÃ¡ levantar cualquier objeto pesado por encima de los hombros.</p>\r\n\r\n                    <p><strong>RevisÃ¡ tu posiciÃ³n frente al escritorio.</strong>Â Sentate con los dos pies en el suelo y las rodillas tan alto como las caderas, y posicionate  firmemente contra el respaldo de la silla. CambiÃ¡ de posiciÃ³n con frecuencia y tomÃ¡ descansos para evitar la sobrecarga en la espalda.</p>\r\n\r\n                    <p><strong>CuidÃ¡ tu postura.</strong> TratÃ¡ de pararte tanto como sea posible, caminÃ¡ con la postura erguida y llevÃ¡ calzado cÃ³modo.</p>\r\n\r\n                    <p><strong>EvitÃ¡ agacharte durante largos perÃ­odos de tiempo.</strong> En lugar de agacharte encorvando tu espalda, intentÃ¡ ponerte en cuclillas manteniendo la espalda recta. Si tenÃ©s que arrodillarte no olvides levantarte periÃ³dicamente y estirar tus piernas. Nunca gires mientras te levantas. </p>\r\n\r\n                </div>\r\n\r\n                <div class="col-sm-6">\r\n\r\n                  <p><strong>EvitÃ¡ generar una torcedura.</strong> MovÃ© los pies y las piernas suavemente antes de salir de un vehÃ­culo o al levantarte de la cama.</p>\r\n\r\n                  <p><strong>No te apresures al subir y bajar escaleras.</strong> Incluso si te encontrÃ¡s en un apuro, es prudente que des un paso (escalÃ³n) a la vez y mantener tu espalda recta.</p>\r\n\r\n                  <p><strong>TenÃ© cuidado al cargar bolsas y mochilas.</strong> AlternÃ¡ el peso de las bolsas sobre ambos brazos y vas a evitar que se sobrecargue uno de los lados.  Si es posible, utilizÃ¡ mochilas que permitan equilibrar el peso en ambos lados.</p>\r\n\r\n                  <p><strong>TenÃ© hÃ¡bitos saludables.</strong> HacÃ© ejercicios todos los dÃ­as y mantenÃ© un peso saludable.</p>\r\n\r\n                  <p><strong>Â¿CuÃ¡ndo debo consultar al mÃ©dico?</strong> No dejes de consultar a tu mÃ©dico si percibÃ­s dolores anormales en forma prolongada.</p>\r\n                  \r\n                </div>', 'header-dolores-menstruales.jpg', '<strong>Lo que necesitÃ¡s saber:</strong><br />Para muchas mujeres el dolor menstrual no es tan severo como para influir con su vida diaria. Sin embargo, para otras significa tomarse el dÃ­a libre de cualquier actividad hasta que el dolor desaparezca. <strong>Si los dolores menstruales interrumpen tu actividad diaria, tenemos algunos consejos para ayudarte a calmar el malestar:</strong>', '<p>El dolor menstrual es causado por contracciones del Ãºtero o matriz que ayudan a deshacerse de su revestimiento para que uno nuevo puede crecer. Para ayudar a iniciar las contracciones el cuerpo necesita liberar sustancias quÃ­micas llamadas prostaglandinas que son productos quÃ­micos y que causan el dolor.</p>', '<p>El calor es una buena manera de ayudar a calmar y relajar los mÃºsculos del Ãºtero. Tomar un baÃ±o o utilizar una bolsa de agua caliente son soluciones tradicionales que realmente funcionan. Nadar suavemente, caminar o andar en bicicleta tambiÃ©n pueden ayudarte a aliviar el dolor. Fabogesic  es particularmente eficaz, ya que tiene efectos anti-prostaglandinas inhiben la ciclo oxigenasa evitando que se segregue prostaglandina (lo que genera dolor)</p>', 'simbolo-mujer.png', '<p>Se recomienda que consultes al mÃ©dico si los dolores menstruales son mÃ¡s graves de lo normal, sobretodo en mujeres de edades avanzadas. Necesitas estar atenta y analizar si tus perÃ­odos se retrasan, son mÃ¡s pesados o irregulares.</p>', 'header-dolores-cabeza.jpg', 'asdasd', '                <div class="col-sm-12 text-left">\r\n                  <p>Los dolores de cabeza se deben a distintas razones. Algunos de los factores desencadenantes pueden ser:</p>\r\n                </div>', 'asdasd', 'asdasd', '                  <p>No dejes de consultar a tu mÃ©dico si percibÃ­s dolores anormales en forma prolongada.</p>', 'header-dolores-articulares.jpg', 'Las inflamaciones de las articulaciones son  un sÃ­ntoma con una variedad de causas y sus formatos mÃ¡s comunes son la osteoartritis.<br />La osteoartritis es una enfermedad, donde el cartÃ­lago que amortigua los huesos se desgasta, dejando la articulaciÃ³n sin protecciÃ³n.  Esto provoca dolor y  produce deformaciÃ³n articular.', '                  <p>La artritis no tiene edad y la desintegraciÃ³n del cartÃ­lago puede darse por varias razones, incluyendo lesiones, herencia o enfermedad. La osteoartritis  se vuelve mÃ¡s frecuente con la edad, sin embargo, personas de todas las edades pueden ser afectadas por diferentes tipos de artritis.</p>', '                  <p>En algunas personas, la ruptura inicial de cartÃ­lago no provoca ningÃºn dolor mientras que en otros casos el dolor se manifiesta sobre todo cuando te movÃ©s o tenÃ©s un largo perÃ­odo de inmovilidad, como a primera hora de la maÃ±ana o despuÃ©s de ver una pelÃ­cula de larga duraciÃ³n o un viaje prolongado.</p>', '                  <p>- Incapacidad para mover una articulaciÃ³n normalmente.<br />\r\n                    - Dolor recurrente o sensibilidad en cualquier articulaciÃ³n.<br />\r\n                    - HinchazÃ³n en una o mÃ¡s articulaciones.<br />\r\n                    - Enrojecimiento o calor en la articulaciÃ³n.<br />\r\n                    Si experimentÃ¡s alguno de estos sÃ­ntomas, debÃ©s consultar a tu mÃ©dico tan pronto como sea posible.  El diagnÃ³stico y tratamiento temprano pueden ayudar a limitar el daÃ±o y controlar los sÃ­ntomas.</p>', '                  <p>Una combinaciÃ³n de ejercicio, algunos cambios de estilo de vida menores, una dieta adecuada y la medicaciÃ³n ayudan a controlar el dolor y los sÃ­ntomas de la artritis.<br />\r\n                  El ejercicio te ayuda a fortalecer los mÃºsculos que rodean la articulaciÃ³n afectada y colaboran a estabilizar la zona. PequeÃ±os cambios en tu estilo de vida como tomar los objetos con las dos manos sumado a una dieta adecuada, que ayuda a sacar peso innecesario de tus articulaciones, contribuirÃ¡n a tu salud en general y a tu estado de Ã¡nimo. Fabogesic puede ayudarte a aliviar temporalmente los dolores menores asociados con la artritis.</p>', '                  <p>Si sentÃ­s algunos de los sÃ­ntomas antes explicados no dudes en consultar a un mÃ©dico que puede diagnosticarte correctamente y ayudarte con un tratamiento adecuado o eventualmente derivarte con un mÃ©dico reumatÃ³logo o traumatÃ³logo.</p>', '2014-06-18 17:04:25', '2014-06-19 11:13:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EditableContent`
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
-- Volcado de datos para la tabla `EditableContent`
--

INSERT INTO `EditableContent` (`id`, `homeA1`, `presentacionesA1`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, '<div>\r\n<h2>Subtitulo Home A1</h2>\r\n<p>\r\n Maecenas viverra velit semper lorem interdum, eget facilisis urna vehicula. Curabitur lacinia tincidunt sapien, a viverra ante ornare sed. Nunc a mauris nisi. Sed ac arcu dapibus, vehicula nibh in, feugiat odio. Maecenas non dignissim lacus, ut pretium nunc. Aliquam massa sem, imperdiet id pulvinar in, fringilla vel enim. Aliquam non orci sed nisl euismod elementum. Cras id lorem fermentum, volutpat leo quis, tempus libero. Proin imperdiet nibh et dui egestas, in vestibulum purus suscipit. Integer sit amet quam vitae lectus feugiat tristique sed nec diam. Integer eget nunc at lorem dignissim congue sit amet id sapien. Vestibulum fringilla aliquam nisi, vel elementum mauris tincidunt facilisis.\r\n</p>\r\n<p>\r\nAenean a nibh eget neque vulputate porta quis ut odio. Duis aliquam mauris nisl, vitae dapibus sapien porttitor vitae. Phasellus id mollis eros, ut fringilla justo. Donec feugiat tempor arcu ut rutrum. Proin felis nibh, tincidunt nec tincidunt ut, sodales at orci. Curabitur accumsan leo sit amet pharetra rutrum. Aliquam eget accumsan leo. Ut pretium magna et condimentum accumsan. Vivamus sed metus lobortis, fringilla urna a, porttitor lorem. Mauris quam lacus, volutpat quis leo sed, consectetur fringilla orci. Sed consequat, velit a bibendum porta, eros urna dictum ligula, sit amet convallis lorem enim id quam. \r\n</p>\r\n</div>', '<div>\r\n<h3>Presentaciones A1</h3>\r\n<p>\r\n Maecenas viverra velit semper lorem interdum, eget facilisis urna vehicula. Curabitur lacinia tincidunt sapien, a viverra ante ornare sed. Nunc a mauris nisi. Sed ac arcu dapibus, vehicula nibh in, feugiat odio. Maecenas non dignissim lacus, ut pretium nunc. Aliquam massa sem, imperdiet id pulvinar in, fringilla vel enim. Aliquam non orci sed nisl euismod elementum. Cras id lorem fermentum, volutpat leo quis, tempus libero. Proin imperdiet nibh et dui egestas, in vestibulum purus suscipit. Integer sit amet quam vitae lectus feugiat tristique sed nec diam. Integer eget nunc at lorem dignissim congue sit amet id sapien. Vestibulum fringilla aliquam nisi, vel elementum mauris tincidunt facilisis.\r\n</p>\r\n<p>\r\nAenean a nibh eget neque vulputate porta quis ut odio. Duis aliquam mauris nisl, vitae dapibus sapien porttitor vitae. Phasellus id mollis eros, ut fringilla justo. Donec feugiat tempor arcu ut rutrum. Proin felis nibh, tincidunt nec tincidunt ut, sodales at orci. Curabitur accumsan leo sit amet pharetra rutrum. Aliquam eget accumsan leo. Ut pretium magna et condimentum accumsan. Vivamus sed metus lobortis, fringilla urna a, porttitor lorem. Mauris quam lacus, volutpat quis leo sed, consectetur fringilla orci. Sed consequat, velit a bibendum porta, eros urna dictum ligula, sit amet convallis lorem enim id quam. \r\n</p>\r\n<p>\r\n Nulla nulla quam, placerat a lorem vitae, suscipit pellentesque ligula. Praesent nec elit non elit semper porta sed sed nisi. Aliquam bibendum, enim in feugiat viverra, sem tortor fringilla mi, ut auctor mi elit vitae ligula. Duis dui mauris, scelerisque sit amet molestie eu, consequat a leo. Etiam nisl tortor, mollis sit amet cursus a, aliquam sed purus. Nunc imperdiet justo a semper semper. Sed congue magna pharetra porttitor ultrices. Pellentesque ac urna nec eros feugiat accumsan. Aenean venenatis, elit vel eleifend luctus, tortor dolor commodo est, eget tempus enim est vitae enim. Ut sed pharetra justo. Proin iaculis dolor sed justo aliquet interdum. Curabitur a est lacus. Donec non nisl rhoncus risus lacinia mattis sit amet eget nisl. Etiam luctus orci quis nunc blandit cursus.\r\n</p>\r\n<p>\r\nIn a sapien vel tortor posuere dignissim. Donec lectus eros, varius et mattis nec, condimentum cursus urna. Aenean tincidunt molestie ante, sed luctus tellus placerat nec. In lobortis, mi vel semper viverra, est justo consectetur mauris, id vulputate tellus massa eu mauris. Fusce rutrum dolor nec neque ultricies, quis dictum ante vulputate. Nulla congue id lectus quis pharetra. Vestibulum consequat turpis et commodo cursus. Quisque placerat elit quis consectetur suscipit. \r\n</p>\r\n</div>', '2014-06-12 22:03:27', '2014-06-12 22:03:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PresentacionesEditable`
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
-- Volcado de datos para la tabla `PresentacionesEditable`
--

INSERT INTO `PresentacionesEditable` (`id`, `Sub1ImageUrl`, `Sub1Text`, `Sub2ImageUrl`, `Sub2Text`, `Sub3ImageUrl`, `Sub3Text`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'caja-capsulas.png', 'Cápsulas Blandas', 'caja-comprimidos.png', 'Comprimidos', 'caja-suspension.png', 'Suspensión Oral', '2014-06-16 15:00:00', '2014-06-16 15:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PresentacionesSub1`
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
-- Volcado de datos para la tabla `PresentacionesSub1`
--

INSERT INTO `PresentacionesSub1` (`id`, `Sub1ImageUrl`, `Sub1Text`, `Sub1Link`, `Sub2ImageUrl`, `Sub2Text`, `Sub2Link`, `Sub3ImageUrl`, `Sub3Text`, `Sub3Link`, `Sub4ImageUrl`, `Sub4Text`, `Sub4Link`, `Sub5ImageUrl`, `Sub5Text`, `Sub5Link`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'caja-capsulas-400x10.png', '400mg x 10 cÃ¡psulas de gelatina blanda', 'fabo_400_CB.png', 'caja-capsulas-400x90.png', '400mg x 20 cÃ¡psulas de gelatina blanda', 'fabo_400_CB.png', 'caja-capsulas-400x90.png', '400mg x 90 cÃ¡psulas de gelatina blanda', 'fabo_400_CB.png', 'caja-capsulas-600x10.png', '600mg x 10 cÃ¡psulas de gelatina blanda', 'fabo_600_CB.png', 'caja-capsulas-600x20.png', '600mg x 20 cÃ¡psulas de gelatina blanda', 'fabo_600_CB.png', '2014-06-16 17:00:00', '2014-06-17 21:14:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PresentacionesSub2`
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
-- Volcado de datos para la tabla `PresentacionesSub2`
--

INSERT INTO `PresentacionesSub2` (`id`, `Sub1ImageUrl`, `Sub1Text`, `Sub1Link`, `Sub2ImageUrl`, `Sub2Text`, `Sub2Link`, `Sub3ImageUrl`, `Sub3Text`, `Sub3Link`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'caja-comprimidos-400x90.png', '400mg x 90 comprimidos', 'fabo_400_compr.png', 'caja-comprimidos-600x90.png', '600mg x 20 comprimidos ', 'fabo_600_compr.png', 'caja-comprimidos-600x90.png', '600mg x 90 comprimidos', 'fabo_600_compr.png', '2014-06-16 18:27:00', '2014-06-17 21:07:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PresentacionesSub3`
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
-- Volcado de datos para la tabla `PresentacionesSub3`
--

INSERT INTO `PresentacionesSub3` (`id`, `Image1Url`, `Image2Url`, `Image3Url`, `Image4Url`, `Image5Url`, `Image6Url`, `Image7Url`, `Image8Url`, `Image9Url`, `Image10Url`, `Text1`, `Text2`, `Text3`, `Text4`, `Text5`, `Text6`, `BtnImageUrl1`, `BtnImageUrl2`, `Text9`, `Text10`, `Text11`, `Text12`, `Text13`, `Prospecto1ImageUrl`, `Prospecto2ImageUrl`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'seccion-pedriatica.jpg', 'header-seccion-pediatrica.jpg', 'seccion-pediatrica-tip.jpg', 'caja-ninos-400x10.png', 'txt-venta-libre.png', 'nena.png', 'caja-ninos-400x20.png', 'txt-venta-libre.png', 'vaquita.png', 'nene.png', '<strong class="text-primary">Fabogesic niÃ±os</strong> es un tratamiento eficaz y rÃ¡pido para reducir el dolor y la fiebre.', '400mg x 90 cÃ¡psulas de gelatina blanda', '400mg x 20 cÃ¡psulas de gelatina blanda', '              <li class="tick">\r\n                <p>comienza a actuar en 15 minutos para bajar la temperatura</p>\r\n              </li>\r\n              <li class="tick">\r\n                <p>alivia la fiebre por 8 horas</p>\r\n              </li>\r\n              <li class="tick">\r\n                <p>alivia doloresÂ  de cualquier tipo, como ser: dolor de oÃ­do, por golpes y fiebre asociada con la denticiÃ³n</p>\r\n              </li>', '              <li class="tick">\r\n                <p>no produce picazÃ³n en la garganta de tu niÃ±o</p>\r\n              </li>\r\n              <li class="tick">\r\n                <p>Es libre de AzÃºcar.</p>\r\n              </li>\r\n              <li class="tick">\r\n                <p>contiene un prÃ¡ctico vaso dosificador que permite administrar la dosis exacta</p>\r\n              </li>\r\n              <li class="tick">\r\n                <p>disponible en sabor Tutti Frutti y Banana-Cereza</p>\r\n              </li>', 'Los niÃ±os en etapa de crecimiento pueden sufrir golpes que producen dolor y un estado de  insatisfacciÃ³n que se transmite a los padres, quienes no desean ver a sus hijos asÃ­. El dolor es la manera que el cuerpo tiene para decirnos que necesita un poco de atenciÃ³n.  Pero, Â¿cÃ³mo reacciona tu hijo ante el dolor? Â¿Para quÃ© sirve? Te ayudaremos a entender mejor las causas y consecuencias del dolor:', 'pregunta1.png', 'pregunta2.png', '                  <p>A lo largo del cuerpo de tu hijo existen millones de fibras nerviosas donde algunas se conectan con receptores del dolor, llamados Nociceptores, que le avisan lo que estÃ¡ pasando en su cuerpo. Cuando tu hijo se enferma o golpea, estos Nociceptores trasmiten seÃ±ales de dolor al cerebro a travÃ©s de la medula espinal mientras que sustancias quÃ­micas sensibilizan los nervios amplificando el dolor y asegurÃ¡ndose que el cerebro los escuche. </p>\r\n                  <p>Recordemos que los niÃ±os requieren permanentemente  amor y  atenciÃ³n por parte de su  familia , especialmente en estos momentos.</p>', '                  <p>El Ibuprofeno es el analgÃ©sico mÃ¡s recomendado por pediatras porque actÃºa rÃ¡pidamente bajando la fiebre y calmando el dolor. El efecto tiene una duraciÃ³n de 8hs por lo que se debe tomar 3 veces por dÃ­a.</p>\r\n                  <p>No obstante, los padres deben hablar con el pediatra para determinar el uso correcto del medicamento. </p>', 'Una pregunta bÃ¡sica que muchos padres pueden tener es, Â¿cuÃ¡l es la diferencia entre el <strong>ibuprofeno</strong>, el medicamento de la Infancia Advil Â®, y el <strong>acetaminofÃ©n</strong>, el medicamento en los niÃ±os Tylenol Â®? <br /><strong>Estas son algunas cosas que los padres pueden querer saber antes de ir a la farmacia:</strong>', '                  <li class="tick tick-blue">\r\n                    <p>El ibuprofeno es el nÂ° 1 recomendado por los pediatras antipirÃ©tico / analgÃ©sico.</p>\r\n                  </li>\r\n                  <li class="tick tick-blue">\r\n                    <p>El ibuprofeno y el acetaminofÃ©n son los Ãºnicos ingredientes activos utilizados en venta libre para aliviar el dolor de los niÃ±os / antifebriles.</p>\r\n                  </li>\r\n                  <li class="tick tick-blue">\r\n                    <p>El ibuprofeno (el ingrediente activo en Fabogesic NiÃ±os) dura mÃ¡s tiempo que el acetaminofeno . El ibuprofeno tiene una duraciÃ³n de hasta 8 horas, mientras que el paracetamol dura 4-6 horas.</p>\r\n                  </li>', '                  <li class="tick tick-blue">\r\n                    <p>El ibuprofeno es seguro cuando se toma segÃºn las indicaciones. Sin embargo, como con cualquier medicamento, los padres deben hablar con el pediatra de su hijo para hablar sobre lo que puede ser mejor para su hijo.</p>\r\n                  </li>', 'fabo_ninos_2.png', 'fabo_ninos_4.png', '2014-06-17 18:00:00', '2014-06-18 16:10:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ProspectoIbuprofeno`
--

CREATE TABLE `ProspectoIbuprofeno` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `Title` varchar(200) NOT NULL,
  `Subtitle` varchar(500) NOT NULL,
  `Text1` varchar(500) NOT NULL,
  `TextIcon1` varchar(200) NOT NULL,
  `ImageIcon1Url` varchar(200) NOT NULL,
  `TextIcon2` varchar(200) NOT NULL,
  `ImageIcon2Url` varchar(200) NOT NULL,
  `TextIcon3` varchar(200) NOT NULL,
  `ImageIcon3Url` varchar(200) NOT NULL,
  `TextIcon4` varchar(200) NOT NULL,
  `ImageIcon4Url` varchar(200) NOT NULL,
  `GraphicImageUrl` varchar(200) NOT NULL,
  `FechaCreacion` datetime NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `ProspectoIbuprofeno`
--

INSERT INTO `ProspectoIbuprofeno` (`id`, `Title`, `Subtitle`, `Text1`, `TextIcon1`, `ImageIcon1Url`, `TextIcon2`, `ImageIcon2Url`, `TextIcon3`, `ImageIcon3Url`, `TextIcon4`, `ImageIcon4Url`, `GraphicImageUrl`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'CARACTERÃSTICAS Y BENEFICIOS', 'Las cÃ¡psulas de gelatina blanda se absorben mÃ¡s rÃ¡pidamente en el organismo, <br />generando alivio en una menor cantidad de tiempo.<br />A mayor concentraciÃ³n plasmÃ¡tica y menor tiempo de absorciÃ³n, mejor es la ventaja terapÃ©utica.', 'Facilitan la degluciÃ³n.<br />Permiten disimular las caracterÃ­sticas organolÃ©pticas del principio activo al ser insÃ­pida.<br />Favorecen la identificaciÃ³n por su color particular.', 'Primer ibuprofeno de 400mg en cÃ¡psulas de gelatina blanda.', 'icon-maxima-potencia.png', 'Sus cÃ¡psulas de gelatina blanda se absorben mÃ¡s rÃ¡pidamente que los comprimidos tradicionales.', 'icon-rapida-accion.png', 'Las cÃ¡psulas de gelatina blanda no tienen sabor desagradable y al ingerirse no raspan ni se pegan en la garganta.', 'icon-facil-tomar.png', 'RÃ¡pido alivio para dolores corporales intensos.', 'icon-indicaciones.png', 'cuadro-capsulas.png', '2014-06-18 12:51:22', '2014-06-18 13:30:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `QueEsIbuprofeno`
--

CREATE TABLE `QueEsIbuprofeno` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `Title` varchar(200) NOT NULL,
  `SubTitle` varchar(400) NOT NULL,
  `Text1` text NOT NULL,
  `Text2` text NOT NULL,
  `Image1Url` varchar(200) NOT NULL,
  `Image2Url` varchar(200) NOT NULL,
  `FechaCreacion` datetime NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `QueEsIbuprofeno`
--

INSERT INTO `QueEsIbuprofeno` (`id`, `Title`, `SubTitle`, `Text1`, `Text2`, `Image1Url`, `Image2Url`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'Â¿QUÃ‰ ES EL IBUPROFENO? ', 'El Ibuprofeno forma parte de una clase de medicamentos llamados antiinflamatorios no esteroides. Los estudios clÃ­nicos demuestran que cuando se siguen las instrucciones correctamente, el ibuprofeno es un analgÃ©sico seguro y eficaz.', 'FABOGESIC IBUPROFENO\r\n\r\nFabogesic es un ibuprofeno que te ayuda a aliviar cualquier tipo de dolor que puede presentarse en tu organismo como los dolores de cabeza, posturales y muchos otros, que detallamos en esta misma pÃ¡gina.', 'Fabogesic proporciona un alivio rÃ¡pido a cualquier sÃ­ntoma de dolor.', 'fabogesic-capsulas.png', 'adn.jpg', '2014-06-18 11:30:00', '2014-06-18 16:57:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Slider`
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
-- Volcado de datos para la tabla `Slider`
--

INSERT INTO `Slider` (`id`, `ImageUrl`, `LinkUrl`, `FechaCreacion`, `FechaModificacion`) VALUES
(10, 'slide_1402695628.jpg', NULL, '2014-06-16 00:00:00', '2014-06-16 00:00:00'),
(11, 'slide_1402696819.jpg', NULL, '2014-06-16 10:00:00', '2014-06-16 10:00:00'),
(12, 'slide_1402932299.jpg', '', '2014-06-16 17:24:59', '2014-06-16 17:24:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `UsosMasFrecuentes`
--

CREATE TABLE `UsosMasFrecuentes` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `Image1Url` varchar(200) NOT NULL,
  `Text1` varchar(200) NOT NULL,
  `Image2Url` varchar(200) NOT NULL,
  `Text2` varchar(200) NOT NULL,
  `Image3Url` varchar(200) NOT NULL,
  `Text3` varchar(200) NOT NULL,
  `Image4Url` varchar(200) NOT NULL,
  `Text4` varchar(200) NOT NULL,
  `Image5Url` varchar(200) NOT NULL,
  `Text5` varchar(200) NOT NULL,
  `FechaCreacion` varchar(200) NOT NULL,
  `FechaModificacion` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `UsosMasFrecuentes`
--

INSERT INTO `UsosMasFrecuentes` (`id`, `Image1Url`, `Text1`, `Image2Url`, `Text2`, `Image3Url`, `Text3`, `Image4Url`, `Text4`, `Image5Url`, `Text5`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'dolores-musculares.png', 'Dolores musculares e inflamaciÃ³n', 'dolores-posturales.png', 'Dolores posturales', 'dolores-menstruales.png', 'Dolores menstruales', 'dolores-cabeza.png', 'Dolores de cabeza', 'dolores-articulares.png', 'Dolores articulares', '2014-06-18 16:06:20', '2014-06-18 16:08:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
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
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id`, `Nombre`, `Apellido`, `Email`, `Password`, `EsAdministrador`, `FechaCreacion`, `FechaModificacion`) VALUES
(1, 'Tomás', 'Moyano', 'tomas@wirallinteractive.com.ar', 'w1r4ll', 1, '2014-06-12 09:00:00', '2014-06-12 09:00:00'),
(2, 'Ignacio', 'Moyano', 'moyanotomasi@gmail.com', 'w1r4ll', 0, '2014-06-12 09:00:00', '2014-06-12 09:00:00'),
(3, 'Admin', 'Admin', 'tomoy_9@hotmail.com', 'w1r4ll', 1, '2014-06-12 13:15:00', '2014-06-12 13:15:00');
