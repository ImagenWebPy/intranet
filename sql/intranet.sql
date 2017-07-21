-- phpMyAdmin SQL Dump
-- version 4.0.10.19
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-07-2017 a las 20:34:00
-- Versión del servidor: 5.5.56
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `intranet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(145) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `nombre`, `email`, `password`, `estado`) VALUES
(1, 'Raul Ramirez', 'raul.ramirez@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', 1),
(2, 'Daniel Gomez', 'dgomez@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', 1),
(3, 'Antonio Ojeda', 'antonio.ojeda@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', 1),
(4, 'Jose Peña', 'jpena@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', 1),
(5, 'Tamara Monzon', 'tamara.monzon.@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', 1),
(6, 'Elsa Sanabria', 'elsa.sanabria@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', 1),
(7, 'Aldo Ojeda', 'aldo.ojeda@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `tag` varchar(20) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `descripcion`, `tag`, `estado`) VALUES
(1, 'Institucional', 'institucional', 1),
(2, 'Kia', 'kia', 1),
(3, 'Chevrolet', 'chevrolet', 1),
(4, 'BMW Motorrad', 'motorrad', 1),
(5, 'MINI', 'mini', 1),
(6, 'Jeep', 'jeep', 1),
(7, 'Dodge', 'dodge', 1),
(8, 'RAM', 'ram', 1),
(9, 'Digital', 'digital', 1),
(10, 'Mazda', 'mazda', 1),
(11, 'Mopar', 'mopar', 1),
(12, 'Nissan', 'nissan', 1),
(13, 'Usados', 'usados', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) NOT NULL,
  `contenido` text,
  `tags` varchar(255) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `titulo`, `contenido`, `tags`, `fecha`, `estado`) VALUES
(1, '¡El Fanático de la marca más pequeño de la casa!', '<p>No perdimos la oportunidad para darle el mejor cumpleaños de sus sueños. Por eso nos hicimos presente en ese día tan especial y llenamos su día de sorpresas, obsequiándole un tour por las instalaciones del taller de Kia así como varias sorpresas en el festejo de su cumpleaños.</p>\r\n<p>¡Gracias Agustín por dejarnos ser parte de ese momento tan especial!</p>', 'cumpleaños,agustin,fan,pequeño', '2017-05-30 15:04:57', 1),
(2, 'El nuevo SUV de Mini', '<p>Se presentó oficialmente el Mini Countryman 2017, el nuevo SUV de Mini. El evento contó con la presencia de clientes y selectos invitados, quienes fueron convocados en Sacramento Brewing Co, para ser partícipes del lanzamiento.</p><p>#CreaHistorias! es el mensaje de la campaña del nuevo SUV de Mini, concepto que transportó a los asistentes a disfrutar de dos ambientes integrados, camping, fogata, libertad y todo lo urbano chic que las instalaciones de Sacramento Brewing Co aportó a los invitados.</p>', 'suv,mini,nuevo,countryman', '2017-05-02 09:31:28', 1),
(3, '¿Querés salir de la rutina?', '<p>Podés hacerlo como Carlos Turrini, con el nuevo #MINICountryman #CreaHistorias</p>', 'mini,suv,countryman,carlos turrini', '2017-05-08 15:21:13', 1),
(4, 'Day Trip - Ciudad de Vapor Cué', '', 'daytrip,vapor cue,BMW Motorrad', '2017-05-27 17:04:52', 1),
(5, 'Inter Run 2017', '<p>El Jeep Renegade presente en el Inter Run 2017. Felicitaciones a todos los participantes!!</p>', 'jeep,renegade,inter,run,2017', '2017-05-14 17:26:41', 1),
(6, 'Lanzamiento Jeep Renegade', NULL, 'jeep,renegade,lanzamiento', '2016-06-08 18:11:10', 1),
(7, 'World Premiere de la Nueva Jeep® Compass 2017!', NULL, 'jeep,compass,lanzamiento', '2016-11-16 18:20:51', 1),
(8, 'Desembarco oficial de Jack Daniel''s', '<p>Resumen de la fantástica noche que vivimos ayer en el desembarco oficial de Jack Daniel''s al país. Una fiesta a la que Jeep, no podia faltar.</p>', 'jeep,jacks daniels,jack''s daniels,desembarco,oficial', '2017-06-08 15:07:27', 1),
(9, 'NISSAN trae Actitud al país', '<p><strong>Garden Automotores S.A. presenta al totalmente NUEVO NISSAN KICKS.</strong></p>\r\n\r\n<p>En un evento cargado de mucha Actitud!, el pasado&nbsp; mi&eacute;rcoles 5 de julio en el hall central de Shopping del Sol, el <strong>Grupo Garden </strong>present&oacute; oficialmente ante la prensa e invitados especiales, al totalmente <strong>Nuevo NISSAN KICKS</strong>; el nuevo SUV compacto de la prestigiosa marca japonesa de veh&iacute;culos <strong>NISSAN</strong>.&nbsp;</p>\r\n\r\n<p>Bajo el concepto de <strong>Actitud busca Actitud, </strong>el <strong>Nuevo NISSAN KICKS</strong> se dirige a un p&uacute;blico en&eacute;rgico, de mucha personalidad, de pura actitud, que busca encontrarse con su singularidad!</p>\r\n\r\n<p>El <strong>Nuevo NISSAN KICKS</strong> ha sido premiado como el <strong>Mejor SUV Compacto</strong> de Latinoam&eacute;rica, distinci&oacute;n otorgada por AMERICAR (Asociaci&oacute;n Am&eacute;rica Latina de Prensa de Autos). Adem&aacute;s,&nbsp; obtuvo otros reconocimientos&nbsp; tales como,&nbsp; el de <strong>Mejor SUV Compacto</strong> otorgado por L&acute;Auto Preferita y como el de <strong>Mejor SUV Compacto</strong> en los premios Top Car.</p>\r\n\r\n<p>El totalmente <strong>Nuevo NISSAN KICKS</strong>&nbsp; se encuentra disponible para todo aquel que desee realizar un testdrive en el Showroom de NISSAN Paraguay, ubicado sobre la Avda. Mcal. L&oacute;pez 5557y Rogelio Benitez.</p>\r\n\r\n<p><strong>Nuevo NISSAN KICKS</strong></p>\r\n\r\n<p>El <strong>Nuevo NISSAN KICKS</strong> se presenta con una personalidad en&eacute;rgica y juvenil. Es un SUV compacto que cuenta con un motor de tercera generaci&oacute;n de 1.6L y 118 HP, que&nbsp; gracias a su chasis ligero, logra un excelente desempe&ntilde;o en potencia, garantizando un menor consumo de combustible.</p>\r\n\r\n<p>El <strong>Nuevo NISSAN KICKS</strong> cuenta con un equipamiento de vanguardia , donde podemos destacar su Asistente de Ascenso en Pendientes (que evita que el veh&iacute;culo se deslice hacia atr&aacute;s al liberar el freno en una pendiente), como adem&aacute;s el Rear Sonar System (que emite alertas para el conductor cuando detecta objetos al estacionarse y/o conducir en reversa), donde ambos combinan tecnolog&iacute;a y confort, otorgando una mayor seguridad en el andar.</p>\r\n', 'nissan,cuevas,garden,kicks', '2017-07-05 14:51:49', 1),
(10, 'Curso de Mecánica Básica - F700GS / F800GS / F800GS ADV', '', 'BMW Motorrad', '2015-10-24 00:00:00', 1),
(11, 'Curso de Manejo On Road - Asunción Karting Club', '', 'BMW Motorrad', '2015-11-14 00:00:00', 1),
(12, 'Curso de Manejo Off Road - Rakiura Resort Day', '', 'BMW Motorrad', '2015-10-31 00:00:00', 1),
(13, 'Curso de Manejo Off Road - Curva Romero', '', 'BMW Motorrad', '2015-11-21 00:00:00', 1),
(14, 'Lanzamiento S1000XR y R1200RS - Hard Rock Café Asunción', '', 'BMW Motorrad', '2015-10-07 16:17:22', 1),
(15, 'Night Trip - San Bernardino', '', 'BMW Motorrad', '2015-10-22 00:00:00', 1),
(16, 'GS Trophy 2016 Qualifier Paraguay', '', 'BMW Motorrad', '2015-09-26 17:06:36', 1),
(17, 'Night Trip - Fin de Año - Sheraton Asunción Hotel', '', 'BMW Motorrad', '2015-11-27 00:00:00', 1),
(18, 'Charla de Seguridad - Educación Vial', '', 'BMW Motorrad', '2016-12-03 00:00:00', 1),
(19, 'Curso de Manejo Off Road - Rakiura Resort Day', '', 'BMW Motorrad', '2016-03-12 00:00:00', 1),
(20, 'Curso de Manejo On Road - Asunción Karting Club', '', 'BMW Motorrad', '2016-04-16 16:58:12', 1),
(21, 'Curso de Manejo Off Road - Curva Romero', '', 'BMW Motorrad', '2016-05-21 00:00:00', 1),
(22, 'Curso de Manejo Off Road - Rakiura Resort Day', '', 'BMW Motorrad', '2016-09-10 00:00:00', 1),
(23, 'Curso de Manejo On Road - Asunción Karting Club', '', 'BMW Motorrad', '2016-10-15 00:00:00', 1),
(24, 'Curso de Manejo Off Road - CDE / Hernandarias', '', 'BMW Motorrad', '2016-12-17 00:00:00', 1),
(25, 'Curso de Mecánica Básica - G650GS / R1200GS / R1200GS ADV', '', 'BMW Motorrad', '2016-05-07 00:00:00', 1),
(26, 'Curso de Mecánica Básica - F700GS / F800GS / F800GS ADV', '', 'BMW Motorrad', '2016-07-16 00:00:00', 1),
(27, 'Curso de Mecánica Básica - S1000R / S1000RR / S1000XR', '', 'BMW Motorrad', '2016-08-13 00:00:00', 1),
(28, 'Curso de Mecánica Avanzada - R1200GS / R1200GS ADV', '', 'BMW Motorrad', '2016-09-24 00:00:00', 1),
(29, 'Charla de Primeros Auxilios', '', 'BMW Motorrad', '2016-08-20 00:00:00', 1),
(30, 'R1200GS ADVENTURE - Evento Entrega Unidades Preventa', '', 'BMW Motorrad', '2016-12-15 00:00:00', 1),
(31, 'Night Trip - Welcome 2016 - The Brooklyn Hotel', '', 'BMW Motorrad', '2016-02-19 00:00:00', 1),
(32, 'Night Trip - Father''s Day - Rock 66 Bar', '', 'BMW Motorrad', '2016-06-16 00:00:00', 1),
(33, 'Night Trip - Motorrad Friends - Bambuddha Bar', '', 'BMW Motorrad', '2016-07-29 00:00:00', 1),
(34, 'Night Trip - Biker''s Night - Deli Latte Meeting House', '', 'BMW Motorrad', '2016-10-28 12:02:40', 1),
(35, 'Night Trip - Fin de Año - Bourbon Conmebol Asunción Convention Hotel', '', 'BMW Motorrad', '2016-11-30 00:00:00', 1),
(36, 'Day Trip - Ciudad de Atyrá', '', 'BMW Motorrad', '2016-03-19 00:00:00', 1),
(37, 'Day Trip - Ciudad de Villarrica', '', 'BMW Motorrad', '2016-04-30 00:00:00', 1),
(38, 'Day Trip - Ciudad de Piribebuy', '', 'BMW Motorrad', '2016-06-25 00:00:00', 1),
(39, 'Day Trip - Ciudad de Villa Hayes', '', 'BMW Motorrad', '2016-08-27 00:00:00', 1),
(40, 'Day Trip - Ciudad de Altos', '', 'BMW Motorrad', '2016-11-19 00:00:00', 1),
(41, 'MINI Cocktail Night', '<p>Bienvenida a nuevos MINI Owners</p>\r\n\r\n<p>El jueves 22 de junio,&nbsp; en el Hotel La Factor&iacute;a se llev&oacute; a cabo el c&oacute;ctel de bienvenida y presentaci&oacute;n de los nuevos integrantes de la familia MINI.</p>\r\n\r\n<p>Esta cl&aacute;sica cita se desarroll&oacute; en un ambiente ameno y distendido, los asistentes disfrutaron de m&uacute;sica jazz en vivo, el men&uacute; fue servido por los chefs Andr&eacute; Mag&oacute;n y Sebasti&aacute;n Saavedra, quienes acompa&ntilde;aron sus especialidades gastron&oacute;micas con una fina selecci&oacute;n de bebidas.</p>\r\n\r\n<p>En dicha ocasi&oacute;n se realiz&oacute; un peque&ntilde;o reconocimiento al Dr. Raul Fanego, embajador de la marca y miembro del exclusivo grupo, con motivo de su cumplea&ntilde;os.</p>\r\n\r\n<p>La ic&oacute;nica marca inglesa est&aacute; presente en el pa&iacute;s desde el a&ntilde;o 2011 de la mano de Garden Automotores, cuyos modelos se encuentran disponibles para todo aquel que desee realizar un testdrive en el Showroom de MINI, ubicado sobre la Avda. Mcal. L&oacute;pez esquina R.I. 2 de Mayo.</p>\r\n', 'mini,owners,noche,factoria,hotel,countryman,hatch', '2017-06-22 00:00:00', 1),
(42, 'Spot NISSAN Kicks', '<p>La <strong>ACTITUD </strong>que busca <strong>ACTITUD</strong></p>\r\n', '', '2017-07-01 00:00:00', 0),
(43, 'Spot NISSAN Kicks', '<p>La <strong>ACTITUD </strong>que busca <strong>ACTITUD</strong></p>\r\n', 'nissan,kicks,actitud,totalmente,nuevo', '2017-07-01 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_archivo`
--

DROP TABLE IF EXISTS `post_archivo`;
CREATE TABLE IF NOT EXISTS `post_archivo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_post` int(11) unsigned NOT NULL,
  `id_tipo_archivo` int(11) unsigned NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `img_principal` int(1) NOT NULL DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_idpost_pa` (`id_post`),
  KEY `fk_idtipoarchivo_pa` (`id_tipo_archivo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=386 ;

--
-- Volcado de datos para la tabla `post_archivo`
--

INSERT INTO `post_archivo` (`id`, `id_post`, `id_tipo_archivo`, `descripcion`, `img_principal`, `estado`) VALUES
(1, 1, 1, 'cumple_agustin_1.jpg', 1, 1),
(2, 1, 1, 'cumple_agustin_2.jpg', 0, 1),
(3, 1, 1, 'cumple_agustin_3.jpg', 0, 1),
(4, 1, 1, 'cumple_agustin_4.jpg', 0, 1),
(5, 1, 1, 'cumple_agustin_5.jpg', 0, 1),
(6, 1, 1, 'cumple_agustin_6.jpg', 0, 1),
(7, 1, 1, 'cumple_agustin_7.jpg', 0, 1),
(8, 2, 2, 'lanzamiento_mini_countryman.mp4', 0, 1),
(9, 2, 1, 'lanzamiento_mini_countryman.jpg', 1, 1),
(10, 3, 2, 'videoCarlosTurrini.mp4', 0, 1),
(11, 3, 1, 'carlosturrini.jpg', 1, 1),
(12, 4, 1, 'bmw_daytripvaporcue_1.jpg', 0, 1),
(13, 4, 1, 'bmw_daytripvaporcue_2.jpg', 0, 1),
(14, 4, 1, 'bmw_daytripvaporcue_3.jpg', 0, 1),
(15, 4, 1, 'bmw_daytripvaporcue_4.jpg', 0, 1),
(16, 4, 1, 'bmw_daytripvaporcue_5.jpg', 0, 1),
(17, 4, 1, 'bmw_daytripvaporcue_6.jpg', 0, 1),
(18, 4, 1, 'bmw_daytripvaporcue_7.jpg', 0, 1),
(19, 4, 1, 'bmw_daytripvaporcue_8.jpg', 0, 1),
(20, 4, 1, 'bmw_daytripvaporcue_9.jpg', 0, 1),
(21, 4, 1, 'bmw_daytripvaporcue_10.jpg', 0, 1),
(22, 4, 1, 'bmw_daytripvaporcue_11.jpg', 1, 1),
(23, 4, 1, 'bmw_daytripvaporcue_12.jpg', 0, 1),
(24, 4, 1, 'bmw_daytripvaporcue_13.jpg', 0, 1),
(25, 4, 1, 'bmw_daytripvaporcue_14.jpg', 0, 1),
(26, 5, 1, 'inter_run_2017.jpg', 1, 1),
(27, 5, 2, 'inter_run_2017.mp4', 0, 1),
(28, 6, 1, 'lanzamiento_renegade_2016.jpg', 1, 1),
(29, 6, 2, 'lanzamiento_renegade_2016.mp4', 0, 1),
(30, 7, 1, 'lanzamiento_compass_2016.jpg', 1, 1),
(31, 7, 2, 'lanzamiento_compass_2016.mp4', 0, 1),
(32, 8, 2, 'lanzamiento_jackdaniels_jeep.mp4', 0, 1),
(33, 8, 1, 'lanzamiento_jeep_jackdaniels.jpg', 1, 1),
(35, 9, 2, 'WhatsApp Video 2017-07-06 at 1.32.52 PM.mp4', 0, 1),
(38, 9, 1, 'Sin_titulo_kicks.png', 1, 1),
(39, 10, 1, '10_IMG_2031.JPG', 0, 1),
(40, 10, 1, '10_IMG_2033.JPG', 0, 1),
(41, 10, 1, '10_IMG_2034.JPG', 0, 1),
(42, 10, 1, '10_IMG_2036.JPG', 0, 1),
(43, 10, 1, '10_IMG_2038.JPG', 1, 1),
(44, 10, 1, '10_IMG_2040.JPG', 0, 1),
(45, 10, 1, '10_IMG_2043.JPG', 0, 1),
(46, 10, 1, '10_IMG_2044.JPG', 0, 1),
(47, 10, 1, '10_IMG_2046.JPG', 0, 1),
(48, 10, 1, '10_IMG_2047.JPG', 0, 1),
(49, 10, 1, '10_IMG_2049.JPG', 0, 1),
(50, 10, 1, '10_IMG_2050.JPG', 0, 1),
(51, 11, 1, '11_IMG_2899.JPG', 1, 1),
(52, 11, 1, '11_IMG_2903.JPG', 0, 1),
(53, 11, 1, '11_IMG_2906.JPG', 0, 1),
(54, 11, 1, '11_IMG_2908.JPG', 0, 1),
(55, 11, 1, '11_IMG_2910.JPG', 0, 1),
(56, 11, 1, '11_IMG_2911.JPG', 0, 1),
(57, 12, 1, '12_IMG_2528.JPG', 1, 1),
(58, 12, 1, '12_IMG_2532.JPG', 0, 1),
(59, 12, 1, '12_IMG_2543.JPG', 0, 1),
(60, 12, 1, '12_IMG_2548.JPG', 0, 1),
(61, 12, 1, '12_IMG_2549.JPG', 0, 1),
(62, 12, 1, '12_IMG_2474.JPG', 0, 1),
(63, 12, 1, '12_IMG_2481.JPG', 0, 1),
(64, 12, 1, '12_IMG_2488.JPG', 0, 1),
(65, 12, 1, '12_IMG_2490.JPG', 0, 1),
(66, 12, 1, '12_IMG_2507.JPG', 0, 1),
(67, 12, 1, '12_IMG_2508.JPG', 0, 1),
(68, 13, 1, '13_IMG_3138.JPG', 1, 1),
(69, 13, 1, '13_IMG_3140.JPG', 0, 1),
(70, 13, 1, '13_IMG_3117.JPG', 0, 1),
(71, 13, 1, '13_IMG_3119.JPG', 0, 1),
(72, 13, 1, '13_IMG_3124.JPG', 0, 1),
(73, 13, 1, '13_IMG_3130.JPG', 0, 1),
(74, 13, 1, '13_IMG_3135.JPG', 0, 1),
(75, 13, 1, '13_IMG_3136.JPG', 0, 1),
(76, 14, 1, '14_IMG_3039.jpg', 1, 1),
(77, 14, 1, '14_IMG_3046.jpg', 0, 1),
(78, 14, 1, '14_IMG_3059.jpg', 0, 1),
(79, 14, 1, '14_IMG_3072.jpg', 0, 1),
(80, 14, 1, '14_IMG_3081.jpg', 0, 1),
(81, 14, 1, '14_IMG_3090.jpg', 0, 1),
(82, 14, 1, '14_IMG_3092.jpg', 0, 1),
(83, 14, 1, '14_IMG_3095.jpg', 0, 1),
(84, 14, 1, '14_IMG_3100.jpg', 0, 1),
(85, 14, 1, '14_IMG_3107.jpg', 0, 1),
(86, 14, 1, '14_IMG_3109.jpg', 0, 1),
(87, 14, 1, '14_IMG_3115.jpg', 0, 1),
(88, 14, 1, '14_IMG_3120.jpg', 0, 1),
(89, 14, 1, '14_IMG_3152.jpg', 0, 1),
(90, 14, 1, '14_BMWS1000XR.png', 0, 1),
(91, 14, 1, '14_IMG_3000.jpg', 0, 1),
(92, 14, 1, '14_IMG_3007.jpg', 0, 1),
(93, 14, 1, '14_IMG_3017.jpg', 0, 1),
(94, 14, 1, '14_IMG_3018.jpg', 0, 1),
(95, 14, 1, '14_IMG_3021.jpg', 0, 1),
(96, 14, 1, '14_IMG_3033.jpg', 0, 1),
(97, 14, 1, '14_IMG_3035.jpg', 0, 1),
(98, 15, 1, '15_IMG_1479.jpg', 1, 1),
(99, 15, 1, '15_IMG_1481.jpg', 0, 1),
(100, 15, 1, '15_IMG_1485.jpg', 0, 1),
(101, 15, 1, '15_IMG_1487.jpg', 0, 1),
(102, 15, 1, '15_IMG_1518.jpg', 0, 1),
(103, 15, 1, '15_IMG_1346.jpg', 0, 1),
(104, 15, 1, '15_IMG_1349.jpg', 0, 1),
(105, 15, 1, '15_IMG_1393.jpg', 0, 1),
(106, 15, 1, '15_IMG_1394.jpg', 0, 1),
(107, 15, 1, '15_IMG_1397.jpg', 0, 1),
(108, 15, 1, '15_IMG_1399.jpg', 0, 1),
(109, 15, 1, '15_IMG_1400.jpg', 0, 1),
(110, 15, 1, '15_IMG_1404.jpg', 0, 1),
(111, 15, 1, '15_IMG_1406.jpg', 0, 1),
(113, 16, 2, '16_resumen_final-25mb.mp4', 0, 1),
(114, 17, 1, '17_IMG_3464.JPG', 1, 1),
(115, 17, 1, '17_IMG_3466.JPG', 0, 1),
(116, 17, 1, '17_IMG_3468.JPG', 0, 1),
(117, 17, 1, '17_IMG_3469.JPG', 0, 1),
(118, 17, 1, '17_IMG_3470.JPG', 0, 1),
(119, 17, 1, '17_IMG_3471.JPG', 0, 1),
(120, 17, 1, '17_IMG_3477.JPG', 0, 1),
(121, 17, 1, '17_IMG_3478.JPG', 0, 1),
(122, 17, 1, '17_IMG_3479.JPG', 0, 1),
(123, 17, 1, '17_IMG_3480.JPG', 0, 1),
(124, 17, 1, '17_IMG_3481.JPG', 0, 1),
(125, 17, 1, '17_IMG_3483.JPG', 0, 1),
(126, 17, 1, '17_IMG_3487.JPG', 0, 1),
(127, 17, 1, '17_IMG_3488.JPG', 0, 1),
(128, 18, 1, '18_IMG_7374.JPG', 1, 1),
(129, 18, 1, '18_IMG_7375.JPG', 0, 1),
(130, 18, 1, '18_IMG_7376.JPG', 0, 1),
(131, 18, 1, '18_IMG_7377.JPG', 0, 1),
(132, 18, 1, '18_IMG_7378.JPG', 0, 1),
(133, 19, 1, '19_IMG_7132.JPG', 1, 1),
(134, 19, 1, '19_IMG_7136.JPG', 0, 1),
(135, 19, 1, '19_IMG_7139.JPG', 0, 1),
(136, 19, 1, '19_IMG_7141.JPG', 0, 1),
(137, 19, 1, '19_IMG_7145.JPG', 0, 1),
(138, 19, 1, '19_IMG_7148.JPG', 0, 1),
(139, 19, 1, '19_IMG_7149.JPG', 0, 1),
(140, 19, 1, '19_IMG_7175.JPG', 0, 1),
(141, 19, 1, '19_IMG_7177.JPG', 0, 1),
(142, 20, 1, '20_IMG_8448.JPG', 1, 1),
(143, 20, 1, '20_IMG_8451.JPG', 0, 1),
(144, 20, 1, '20_IMG_8452.JPG', 0, 1),
(145, 20, 1, '20_IMG_8453.JPG', 0, 1),
(146, 20, 1, '20_IMG_8454.JPG', 0, 1),
(147, 20, 1, '20_IMG_8460.JPG', 0, 1),
(148, 20, 1, '20_IMG_8464.JPG', 0, 1),
(149, 16, 1, '16_BMW-_RAKIURA_26-09-15_(274).jpg', 1, 1),
(150, 21, 1, '21_IMG_9485.JPG', 1, 1),
(151, 21, 1, '21_IMG_9486.JPG', 0, 1),
(152, 21, 1, '21_IMG_9489.JPG', 0, 1),
(153, 21, 1, '21_IMG_9491.JPG', 0, 1),
(154, 21, 1, '21_IMG_9494.JPG', 0, 1),
(155, 21, 1, '21_IMG_9497.JPG', 0, 1),
(156, 21, 1, '21_IMG_9499.JPG', 0, 1),
(157, 21, 1, '21_IMG_9500.JPG', 0, 1),
(158, 22, 1, '22_IMG_3062.JPG', 1, 1),
(159, 22, 1, '22_IMG_3063.JPG', 0, 1),
(160, 22, 1, '22_IMG_3064.JPG', 0, 1),
(161, 22, 1, '22_IMG_3065.JPG', 0, 1),
(162, 22, 1, '22_IMG_3066.JPG', 0, 1),
(163, 22, 1, '22_IMG_3068.JPG', 0, 1),
(164, 22, 1, '22_IMG_3071.JPG', 0, 1),
(165, 22, 1, '22_IMG_3091.JPG', 0, 1),
(166, 22, 1, '22_IMG_3092.JPG', 0, 1),
(167, 22, 1, '22_IMG_3093.JPG', 0, 1),
(168, 23, 1, '23_IMG_5031.JPG', 1, 1),
(169, 23, 1, '23_IMG_5042.JPG', 0, 1),
(170, 23, 1, '23_IMG_5048.JPG', 0, 1),
(171, 23, 1, '23_IMG_5066.JPG', 0, 1),
(172, 23, 1, '23_IMG_5067.JPG', 0, 1),
(173, 23, 1, '23_IMG_5068.JPG', 0, 1),
(174, 24, 1, '24_IMG_8202.JPG', 1, 1),
(175, 24, 1, '24_IMG_8132.JPG', 0, 1),
(176, 24, 1, '24_IMG_8138.JPG', 0, 1),
(177, 24, 1, '24_IMG_8142.JPG', 0, 1),
(178, 24, 1, '24_IMG_8146.JPG', 0, 1),
(179, 24, 1, '24_IMG_8148.JPG', 0, 1),
(180, 24, 1, '24_IMG_8153.JPG', 0, 1),
(181, 24, 1, '24_IMG_8176.JPG', 0, 1),
(182, 24, 1, '24_IMG_8179.JPG', 0, 1),
(183, 24, 1, '24_IMG_8184.JPG', 0, 1),
(184, 24, 1, '24_IMG_8200.JPG', 0, 1),
(185, 25, 1, '25_IMG_9074.JPG', 1, 1),
(186, 25, 1, '25_IMG_9076.JPG', 0, 1),
(187, 25, 1, '25_IMG_9079.JPG', 0, 1),
(188, 25, 1, '25_IMG_9080.JPG', 0, 1),
(189, 25, 1, '25_IMG_9081.JPG', 0, 1),
(190, 25, 1, '25_IMG_9082.JPG', 0, 1),
(191, 25, 1, '25_IMG_9087.JPG', 0, 1),
(192, 25, 1, '25_IMG_9093.JPG', 0, 1),
(193, 25, 1, '25_IMG_9094.JPG', 0, 1),
(194, 25, 1, '25_IMG_9095.JPG', 0, 1),
(195, 26, 1, '26_IMG_2818.JPG', 1, 1),
(196, 26, 1, '26_IMG_2819.JPG', 0, 1),
(197, 26, 1, '26_IMG_2820.JPG', 0, 1),
(198, 26, 1, '26_IMG_2822.JPG', 0, 1),
(199, 26, 1, '26_IMG_2823.JPG', 0, 1),
(200, 27, 1, '27_IMG_2034.JPG', 1, 1),
(201, 27, 1, '27_IMG_2035.JPG', 0, 1),
(202, 28, 1, '28_IMG_3631.JPG', 1, 1),
(203, 28, 1, '28_IMG_3633.JPG', 0, 1),
(204, 28, 1, '28_IMG_3634.JPG', 0, 1),
(205, 28, 1, '28_IMG_3635.JPG', 0, 1),
(206, 28, 1, '28_IMG_3636.JPG', 0, 1),
(207, 28, 1, '28_IMG_3638.JPG', 0, 1),
(208, 28, 1, '28_IMG_3639.JPG', 0, 1),
(209, 28, 1, '28_IMG_3642.JPG', 0, 1),
(210, 28, 1, '28_IMG_3644.JPG', 0, 1),
(211, 28, 1, '28_IMG_3645.JPG', 0, 1),
(212, 29, 1, '29_IMG_2363.JPG', 1, 1),
(213, 29, 1, '29_IMG_2367.JPG', 0, 1),
(214, 29, 1, '29_IMG_2344.JPG', 0, 1),
(215, 29, 1, '29_IMG_2347.JPG', 0, 1),
(216, 29, 1, '29_IMG_2348.JPG', 0, 1),
(217, 29, 1, '29_IMG_2351.JPG', 0, 1),
(218, 29, 1, '29_IMG_2355.JPG', 0, 1),
(219, 29, 1, '29_IMG_2356.JPG', 0, 1),
(220, 29, 1, '29_IMG_2361.JPG', 0, 1),
(221, 30, 1, '30_IMG_4486.jpg', 1, 1),
(222, 30, 1, '30_IMG_4491.jpg', 0, 1),
(223, 30, 1, '30_IMG_4556.jpg', 0, 1),
(224, 30, 1, '30_IMG_4562.jpg', 0, 1),
(225, 30, 1, '30_IMG_4348.jpg', 0, 1),
(226, 30, 1, '30_IMG_4357.jpg', 0, 1),
(227, 30, 1, '30_IMG_4358.jpg', 0, 1),
(228, 30, 1, '30_IMG_4359.jpg', 0, 1),
(229, 30, 1, '30_IMG_4360.jpg', 0, 1),
(230, 30, 1, '30_IMG_4363.jpg', 0, 1),
(231, 30, 1, '30_IMG_4366.jpg', 0, 1),
(232, 30, 1, '30_IMG_4371.jpg', 0, 1),
(233, 30, 1, '30_IMG_4372.jpg', 0, 1),
(234, 30, 1, '30_IMG_4373.jpg', 0, 1),
(235, 30, 1, '30_IMG_4374.jpg', 0, 1),
(236, 30, 1, '30_IMG_4376.jpg', 0, 1),
(237, 30, 1, '30_IMG_4377.jpg', 0, 1),
(238, 30, 1, '30_IMG_4378.jpg', 0, 1),
(239, 30, 1, '30_IMG_4381.jpg', 0, 1),
(240, 30, 1, '30_IMG_4383.jpg', 0, 1),
(241, 30, 1, '30_IMG_4385.jpg', 0, 1),
(242, 30, 1, '30_IMG_4390.jpg', 0, 1),
(243, 30, 1, '30_IMG_4396.jpg', 0, 1),
(244, 30, 1, '30_IMG_4401.jpg', 0, 1),
(245, 30, 1, '30_IMG_4417.jpg', 0, 1),
(246, 30, 1, '30_IMG_4434.jpg', 0, 1),
(247, 31, 1, '31_IMG_6494.JPG', 1, 1),
(248, 31, 1, '31_IMG_6499.JPG', 0, 1),
(249, 31, 1, '31_IMG_6500.JPG', 0, 1),
(250, 31, 1, '31_IMG_6501.JPG', 0, 1),
(251, 32, 1, '32_13422309_1210088942369544_5736010922636353949_o.jpg', 1, 1),
(252, 32, 1, '32_13422332_1210088329036272_802834253349344600_o.jpg', 0, 1),
(253, 32, 1, '32_13423709_1210089475702824_8627017290446036910_n.jpg', 0, 1),
(254, 32, 1, '32_13423897_1210089735702798_758973686916362689_n.jpg', 0, 1),
(255, 32, 1, '32_13433264_1210088272369611_309962931584768525_o.jpg', 0, 1),
(256, 32, 1, '32_13433284_1210089482369490_5696100365948609441_o.jpg', 0, 1),
(257, 32, 1, '32_13433350_1210089402369498_6497814588683670374_o.jpg', 0, 1),
(258, 32, 1, '32_13434740_1210088772369561_7597959258160077214_n.jpg', 0, 1),
(259, 32, 1, '32_13445315_1210089699036135_3727349697222454452_n.jpg', 0, 1),
(260, 32, 1, '32_13445491_1210089742369464_6664664466473972754_n.jpg', 0, 1),
(261, 32, 1, '32_13450029_1210089985702773_7970448114367824629_n.jpg', 0, 1),
(262, 32, 1, '32_13450813_1210089935702778_2821783245341117170_n.jpg', 0, 1),
(263, 32, 1, '32_13475171_1210089272369511_241792193261452585_o.jpg', 0, 1),
(264, 32, 1, '32_13475210_1210090145702757_2251524291969002205_o.jpg', 0, 1),
(265, 32, 1, '32_13483138_1210087629036342_168863593117470064_o.jpg', 0, 1),
(266, 32, 1, '32_13339600_1210088439036261_687497755566625061_n.jpg', 0, 1),
(267, 32, 1, '32_13406866_1210088635702908_4227035905273837893_n.jpg', 0, 1),
(268, 32, 1, '32_13412156_1210089819036123_2787971663717034810_o.jpg', 0, 1),
(269, 32, 1, '32_13412217_1210087645703007_396435932847106030_o.jpg', 0, 1),
(270, 32, 1, '32_13415401_1210087822369656_3171118383467890263_o.jpg', 0, 1),
(271, 32, 1, '32_13415437_1210090765702695_4398815942496863452_o.jpg', 0, 1),
(272, 32, 1, '32_13415476_1210088492369589_2509580749343421382_o.jpg', 0, 1),
(273, 32, 1, '32_13416755_1210087942369644_6007143874184656025_o.jpg', 0, 1),
(274, 32, 1, '32_13416765_1210090655702706_6011684063097762989_o.jpg', 0, 1),
(275, 32, 1, '32_13417524_1210090099036095_1199899025151996834_n.jpg', 0, 1),
(276, 32, 1, '32_13418422_1210089392369499_1477866739840845988_o.jpg', 0, 1),
(277, 32, 1, '32_13422193_1210088255702946_3741311139231328_o.jpg', 0, 1),
(278, 33, 1, '33_13680438_1242562742455497_.jpg', 1, 1),
(279, 33, 1, '33_13908967_1242563542455417_.jpg', 0, 1),
(280, 33, 1, '33_13908998_1242564985788606_.jpg', 0, 1),
(281, 33, 1, '33_13909029_1242563419122096_.jpg', 0, 1),
(282, 33, 1, '33_13909215_1242563602455411_.jpg', 0, 1),
(283, 33, 1, '33_13920213_1242563059122132_.jpg', 0, 1),
(284, 33, 1, '33_13923243_1242562925788812_.jpg', 0, 1),
(285, 33, 1, '33_13923249_1242563112455460_.jpg', 0, 1),
(286, 33, 1, '33_13923315_1242562472455524_.jpg', 0, 1),
(287, 33, 1, '33_13923531_1242563242455447_.jpg', 0, 1),
(289, 34, 1, '34_IMG_0531.jpg', 0, 1),
(290, 34, 1, '34_IMG_0545.jpg', 0, 1),
(291, 34, 1, '34_IMG_0547.jpg', 0, 1),
(292, 34, 1, '34_IMG_0548.jpg', 0, 1),
(293, 34, 1, '34_IMG_0552.jpg', 0, 1),
(294, 34, 1, '34_IMG_0555.jpg', 0, 1),
(295, 34, 1, '34_IMG_0556.jpg', 0, 1),
(296, 34, 1, '34_IMG_0559.jpg', 0, 1),
(297, 34, 1, '34_IMG_0571.jpg', 0, 1),
(298, 34, 1, '34_IMG_0358.jpg', 0, 1),
(299, 34, 1, '34_IMG_0362.jpg', 0, 1),
(300, 34, 1, '34_IMG_0364.jpg', 0, 1),
(301, 34, 1, '34_IMG_0378.jpg', 0, 1),
(302, 34, 1, '34_IMG_0404.jpg', 0, 1),
(303, 34, 1, '34_IMG_0440.jpg', 0, 1),
(304, 34, 1, '34_IMG_0486.jpg', 1, 1),
(305, 34, 1, '34_IMG_0503.jpg', 0, 1),
(306, 34, 1, '34_IMG_0518.jpg', 0, 1),
(307, 34, 1, '34_IMG_0519.jpg', 0, 1),
(308, 34, 1, '34_IMG_0520.jpg', 0, 1),
(309, 34, 1, '34_IMG_0524.jpg', 0, 1),
(310, 34, 1, '34_IMG_0528.jpg', 0, 1),
(311, 35, 1, '35_IMG_3915-copy.jpg', 1, 1),
(312, 35, 1, '35_01.jpg', 0, 1),
(313, 35, 1, '35_IMG_3638.jpg', 0, 1),
(314, 35, 1, '35_IMG_3644.jpg', 0, 1),
(315, 35, 1, '35_IMG_3745.jpg', 0, 1),
(316, 35, 1, '35_IMG_3760.jpg', 0, 1),
(317, 35, 1, '35_IMG_3775.jpg', 0, 1),
(318, 35, 1, '35_IMG_3781.jpg', 0, 1),
(319, 35, 1, '35_IMG_3790.jpg', 0, 1),
(320, 35, 1, '35_IMG_3794.jpg', 0, 1),
(321, 35, 1, '35_IMG_3795.jpg', 0, 1),
(322, 35, 1, '35_IMG_3797.jpg', 0, 1),
(323, 35, 1, '35_IMG_3813.jpg', 0, 1),
(324, 35, 1, '35_IMG_3835.jpg', 0, 1),
(325, 36, 1, '36_IMG_2067.JPG', 1, 1),
(326, 36, 1, '36_IMG_2098.JPG', 0, 1),
(327, 36, 1, '36_IMG_2144.JPG', 0, 1),
(328, 36, 1, '36_IMG_2145.JPG', 0, 1),
(329, 36, 1, '36_IMG_2149.JPG', 0, 1),
(330, 36, 1, '36_IMG_2170.JPG', 0, 1),
(331, 36, 1, '36_IMG_2185.JPG', 0, 1),
(332, 36, 1, '36_IMG_2192.JPG', 0, 1),
(333, 36, 1, '36_IMG_2020.JPG', 0, 1),
(334, 36, 1, '36_IMG_2023.JPG', 0, 1),
(335, 37, 1, '37_13139307_1181078985270540_1246619568800651607_n.jpg', 1, 1),
(336, 37, 1, '37_13118903_1181077111937394_1155922907267752532_n.jpg', 0, 1),
(337, 37, 1, '37_13082619_1181078855270553_5659626479836756500_n.jpg', 0, 1),
(338, 37, 1, '37_13087506_1181076911937414_6219362545671686446_n.jpg', 0, 1),
(339, 37, 1, '37_13087518_1181077171937388_953884907032077502_n.jpg', 0, 1),
(340, 37, 1, '37_13103414_1181076908604081_6319972834245775779_n.jpg', 0, 1),
(341, 37, 1, '37_13124849_1181077168604055_2642636598314905472_n.jpg', 0, 1),
(342, 37, 1, '37_13102692_1181077035270735_522977659478411852_n.jpg', 0, 1),
(343, 37, 1, '37_13062273_1181077045270734_4650666614292033046_n.jpg', 0, 1),
(344, 37, 1, '37_13103323_1181077665270672_7853679112346802497_n.jpg', 0, 1),
(345, 37, 1, '37_13133164_1181078041937301_7997098605414826345_n.jpg', 0, 1),
(346, 37, 1, '37_13087361_1181078035270635_1614282328335815113_n.jpg', 0, 1),
(347, 37, 1, '37_13100894_1181078351937270_884328518541648611_n.jpg', 0, 1),
(348, 37, 1, '37_13087296_1181078668603905_9086177569023089869_n.jpg', 0, 1),
(349, 37, 1, '37_13083142_1181078651937240_5881930080177974922_n.jpg', 0, 1),
(350, 37, 1, '37_13164200_1181078788603893_2260800178300083127_n.jpg', 0, 1),
(351, 37, 1, '37_13138864_1181078791937226_8825307049559846013_n.jpg', 0, 1),
(352, 38, 1, '38_13490758_1217033821675056_3046107891748340941_o.jpg', 1, 1),
(353, 38, 1, '38_13495667_1217033748341730_1853122909675665216_o.jpg', 0, 1),
(354, 38, 1, '38_13497684_1217033931675045_1113080724865010778_o.jpg', 0, 1),
(355, 38, 1, '38_13502528_1217033818341723_5264393927161170513_o.jpg', 0, 1),
(356, 38, 1, '38_13528495_1217033705008401_8092048091241998339_o.jpg', 0, 1),
(357, 38, 1, '38_13558829_1319395478075390_4387374800913076659_o.jpg', 0, 1),
(358, 39, 1, '39_IMG_4755.JPG', 1, 1),
(359, 39, 1, '39_IMG_4758.JPG', 0, 1),
(360, 39, 1, '39_IMG_4782.JPG', 0, 1),
(361, 39, 1, '39_IMG_4800.JPG', 0, 1),
(362, 39, 1, '39_IMG_4869.JPG', 0, 1),
(363, 39, 1, '39_IMG_4940.JPG', 0, 1),
(364, 39, 1, '39_IMG_4707.JPG', 0, 1),
(365, 39, 1, '39_IMG_4724.JPG', 0, 1),
(366, 40, 1, '40_IMG_6582.JPG', 1, 1),
(367, 40, 1, '40_IMG_6584.JPG', 0, 1),
(368, 40, 1, '40_IMG_6590.JPG', 0, 1),
(369, 40, 1, '40_IMG_6591.JPG', 0, 1),
(370, 40, 1, '40_IMG_6602.JPG', 0, 1),
(371, 40, 1, '40_IMG_6603.JPG', 0, 1),
(372, 40, 1, '40_IMG_6606.JPG', 0, 1),
(373, 40, 1, '40_IMG_6608.JPG', 0, 1),
(374, 40, 1, '40_IMG_6610.JPG', 0, 1),
(375, 40, 1, '40_IMG_6611.JPG', 0, 1),
(377, 41, 2, '41_MINI_Cocktal_Night.mp4', 0, 1),
(378, 42, 1, '42_1.jpg', 1, 1),
(379, 42, 2, '42_Comercial_Nissan_Kicks_Paraguay_V2.mp4', 0, 1),
(380, 43, 1, '43_1.jpg', 1, 1),
(381, 43, 2, '43_Comercial_Nissan_Kicks_Paraguay_V2.mp4', 0, 1),
(385, 41, 1, '41_2.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_categoria`
--

DROP TABLE IF EXISTS `post_categoria`;
CREATE TABLE IF NOT EXISTS `post_categoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_post` int(11) unsigned NOT NULL,
  `id_categoria` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idpost_pc` (`id_post`),
  KEY `fk_idcategoria_pc` (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Volcado de datos para la tabla `post_categoria`
--

INSERT INTO `post_categoria` (`id`, `id_post`, `id_categoria`) VALUES
(1, 1, 2),
(2, 2, 5),
(3, 3, 5),
(4, 4, 4),
(5, 5, 6),
(6, 6, 6),
(7, 7, 6),
(8, 8, 6),
(9, 9, 12),
(10, 10, 4),
(11, 11, 4),
(12, 12, 4),
(13, 13, 4),
(14, 14, 4),
(15, 15, 4),
(16, 16, 4),
(17, 17, 4),
(18, 18, 4),
(19, 19, 4),
(20, 20, 4),
(21, 21, 4),
(22, 22, 4),
(23, 23, 4),
(24, 24, 4),
(25, 25, 4),
(26, 26, 4),
(27, 27, 4),
(28, 28, 4),
(29, 29, 4),
(30, 30, 4),
(31, 31, 4),
(32, 32, 4),
(33, 33, 4),
(34, 34, 4),
(35, 35, 4),
(36, 36, 4),
(37, 37, 4),
(38, 38, 4),
(39, 39, 4),
(40, 40, 4),
(41, 41, 5),
(42, 42, 12),
(43, 43, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_tipo`
--

DROP TABLE IF EXISTS `post_tipo`;
CREATE TABLE IF NOT EXISTS `post_tipo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_post` int(11) unsigned NOT NULL,
  `id_tipo_evento` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_post_pt` (`id_post`),
  KEY `fk_id_tipopost_pt` (`id_tipo_evento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Volcado de datos para la tabla `post_tipo`
--

INSERT INTO `post_tipo` (`id`, `id_post`, `id_tipo_evento`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 1),
(4, 4, 2),
(5, 5, 2),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 2),
(11, 11, 2),
(12, 12, 2),
(13, 13, 2),
(14, 14, 1),
(15, 15, 2),
(16, 16, 2),
(17, 17, 2),
(18, 18, 2),
(19, 19, 2),
(20, 20, 2),
(21, 21, 2),
(22, 22, 2),
(23, 23, 2),
(24, 24, 2),
(25, 25, 2),
(26, 26, 2),
(27, 27, 2),
(28, 28, 2),
(29, 29, 2),
(30, 30, 2),
(31, 31, 2),
(32, 32, 2),
(33, 33, 2),
(34, 34, 2),
(35, 35, 2),
(36, 36, 2),
(37, 37, 2),
(38, 38, 2),
(39, 39, 2),
(40, 40, 2),
(41, 41, 2),
(42, 42, 3),
(43, 43, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_archivo`
--

DROP TABLE IF EXISTS `tipo_archivo`;
CREATE TABLE IF NOT EXISTS `tipo_archivo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tipo_archivo`
--

INSERT INTO `tipo_archivo` (`id`, `descripcion`, `imagen`, `estado`) VALUES
(1, 'Imagen', NULL, 1),
(2, 'Video', NULL, 1),
(3, 'Word', NULL, 1),
(4, 'Excel', NULL, 1),
(5, 'Power Point', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_evento`
--

DROP TABLE IF EXISTS `tipo_evento`;
CREATE TABLE IF NOT EXISTS `tipo_evento` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `tag` varchar(45) DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_evento`
--

INSERT INTO `tipo_evento` (`id`, `descripcion`, `tag`, `estado`) VALUES
(1, 'Lanzamientos', 'lanzamiento', 1),
(2, 'Eventos', 'evento', 1),
(3, 'Noticias', 'noticia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(60) NOT NULL,
  `contrasena` varchar(120) DEFAULT NULL,
  `nombre` varchar(45) NOT NULL DEFAULT '0',
  `apellido` varchar(45) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `imagen` varchar(160) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_usuario_usuario` (`usuario`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contrasena`, `nombre`, `apellido`, `fecha_nacimiento`, `imagen`, `estado`) VALUES
(1, 'raul.ramirez@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', 'Raul', 'Ramirez', NULL, NULL, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `post_archivo`
--
ALTER TABLE `post_archivo`
  ADD CONSTRAINT `fk_idpost_pa` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idtipoarchivo_pa` FOREIGN KEY (`id_tipo_archivo`) REFERENCES `post_archivo` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `post_categoria`
--
ALTER TABLE `post_categoria`
  ADD CONSTRAINT `fk_idcategoria_pc` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idpost_pc` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `post_tipo`
--
ALTER TABLE `post_tipo`
  ADD CONSTRAINT `fk_id_post_pt` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_tipopost_pt` FOREIGN KEY (`id_tipo_evento`) REFERENCES `tipo_evento` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
