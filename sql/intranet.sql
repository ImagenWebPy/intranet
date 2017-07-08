/*
Navicat MySQL Data Transfer

Source Server         : aws-garden
Source Server Version : 50556
Source Host           : ec2-34-209-83-134.us-west-2.compute.amazonaws.com:3306
Source Database       : intranet

Target Server Type    : MYSQL
Target Server Version : 50556
File Encoding         : 65001

Date: 2017-07-08 08:17:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(145) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'Raul Ramirez', 'raul.ramirez@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', '1');
INSERT INTO `admin` VALUES ('2', 'Daniel Gomez', 'dgomez@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', '1');
INSERT INTO `admin` VALUES ('3', 'Antonio Ojeda', 'antonio.ojeda@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', '1');
INSERT INTO `admin` VALUES ('4', 'Jose Peña', 'jpena@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', '1');
INSERT INTO `admin` VALUES ('5', 'Tamara Monzon', 'tamara.monzon.@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', '1');
INSERT INTO `admin` VALUES ('6', 'Elsa Sanabria', 'elsa.sanabria@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', '1');
INSERT INTO `admin` VALUES ('7', 'Aldo Ojeda', 'aldo.ojeda@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', '1');

-- ----------------------------
-- Table structure for `categoria`
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `tag` varchar(20) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES ('1', 'Institucional', 'institucional', '1');
INSERT INTO `categoria` VALUES ('2', 'Kia', 'kia', '1');
INSERT INTO `categoria` VALUES ('3', 'Chevrolet', 'chevrolet', '1');
INSERT INTO `categoria` VALUES ('4', 'BMW Motorrad', 'motorrad', '1');
INSERT INTO `categoria` VALUES ('5', 'MINI', 'mini', '1');
INSERT INTO `categoria` VALUES ('6', 'Jeep', 'jeep', '1');
INSERT INTO `categoria` VALUES ('7', 'Dodge', 'dodge', '1');
INSERT INTO `categoria` VALUES ('8', 'RAM', 'ram', '1');
INSERT INTO `categoria` VALUES ('9', 'Digital', 'digital', '1');
INSERT INTO `categoria` VALUES ('10', 'Mazda', 'mazda', '1');
INSERT INTO `categoria` VALUES ('11', 'Mopar', 'mopar', '1');
INSERT INTO `categoria` VALUES ('12', 'Nissan', 'nissan', '1');
INSERT INTO `categoria` VALUES ('13', 'Usados', 'usados', '1');

-- ----------------------------
-- Table structure for `post`
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) NOT NULL,
  `contenido` text,
  `tags` varchar(255) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('1', '¡El Fanático de la marca más pequeño de la casa!', '<p>No perdimos la oportunidad para darle el mejor cumpleaños de sus sueños. Por eso nos hicimos presente en ese día tan especial y llenamos su día de sorpresas, obsequiándole un tour por las instalaciones del taller de Kia así como varias sorpresas en el festejo de su cumpleaños.</p>\r\n<p>¡Gracias Agustín por dejarnos ser parte de ese momento tan especial!</p>', 'cumpleaños,agustin,fan,pequeño', '2017-05-30 15:04:57', '1');
INSERT INTO `post` VALUES ('2', 'El nuevo SUV de Mini', '<p>Se presentó oficialmente el Mini Countryman 2017, el nuevo SUV de Mini. El evento contó con la presencia de clientes y selectos invitados, quienes fueron convocados en Sacramento Brewing Co, para ser partícipes del lanzamiento.</p><p>#CreaHistorias! es el mensaje de la campaña del nuevo SUV de Mini, concepto que transportó a los asistentes a disfrutar de dos ambientes integrados, camping, fogata, libertad y todo lo urbano chic que las instalaciones de Sacramento Brewing Co aportó a los invitados.</p>', 'suv,mini,nuevo,countryman', '2017-05-02 09:31:28', '1');
INSERT INTO `post` VALUES ('3', '¿Querés salir de la rutina?', '<p>Podés hacerlo como Carlos Turrini, con el nuevo #MINICountryman #CreaHistorias</p>', 'mini,suv,countryman,carlos turrini', '2017-05-08 15:21:13', '1');
INSERT INTO `post` VALUES ('4', 'DAYTRIP/VAPORCUÉ', null, 'daytrip,vapor cue, excursion,bmw', '2017-05-27 15:36:40', '1');
INSERT INTO `post` VALUES ('5', 'Inter Run 2017', '<p>El Jeep Renegade presente en el Inter Run 2017. Felicitaciones a todos los participantes!!</p>', 'jeep,renegade,inter,run,2017', '2017-05-14 17:26:41', '1');
INSERT INTO `post` VALUES ('6', 'Lanzamiento Jeep Renegade', null, 'jeep,renegade,lanzamiento', '2016-06-08 18:11:10', '1');
INSERT INTO `post` VALUES ('7', 'World Premiere de la Nueva Jeep® Compass 2017!', null, 'jeep,compass,lanzamiento', '2016-11-16 18:20:51', '1');
INSERT INTO `post` VALUES ('8', 'Desembarco oficial de Jack Daniel\'s', '<p>Resumen de la fantástica noche que vivimos ayer en el desembarco oficial de Jack Daniel\'s al país. Una fiesta a la que Jeep, no podia faltar.</p>', 'jeep,jacks daniels,jack\'s daniels,desembarco,oficial', '2017-06-08 15:07:27', '1');
INSERT INTO `post` VALUES ('9', 'NISSAN trae Actitud al país', '<p><strong>Garden Automotores S.A. presenta al totalmente NUEVO NISSAN KICKS.</strong></p>\r\n\r\n<p>En un evento cargado de mucha Actitud!, el pasado&nbsp; mi&eacute;rcoles 5 de julio en el hall central de Shopping del Sol, el <strong>Grupo Garden </strong>present&oacute; oficialmente ante la prensa e invitados especiales, al totalmente <strong>Nuevo NISSAN KICKS</strong>; el nuevo SUV compacto de la prestigiosa marca japonesa de veh&iacute;culos <strong>NISSAN</strong>.&nbsp;</p>\r\n\r\n<p>Bajo el concepto de <strong>Actitud busca Actitud, </strong>el <strong>Nuevo NISSAN KICKS</strong> se dirige a un p&uacute;blico en&eacute;rgico, de mucha personalidad, de pura actitud, que busca encontrarse con su singularidad!</p>\r\n\r\n<p>El <strong>Nuevo NISSAN KICKS</strong> ha sido premiado como el <strong>Mejor SUV Compacto</strong> de Latinoam&eacute;rica, distinci&oacute;n otorgada por AMERICAR (Asociaci&oacute;n Am&eacute;rica Latina de Prensa de Autos). Adem&aacute;s,&nbsp; obtuvo otros reconocimientos&nbsp; tales como,&nbsp; el de <strong>Mejor SUV Compacto</strong> otorgado por L&acute;Auto Preferita y como el de <strong>Mejor SUV Compacto</strong> en los premios Top Car.</p>\r\n\r\n<p>El totalmente <strong>Nuevo NISSAN KICKS</strong>&nbsp; se encuentra disponible para todo aquel que desee realizar un testdrive en el Showroom de NISSAN Paraguay, ubicado sobre la Avda. Mcal. L&oacute;pez 5557y Rogelio Benitez.</p>\r\n\r\n<p><strong>Nuevo NISSAN KICKS</strong></p>\r\n\r\n<p>El <strong>Nuevo NISSAN KICKS</strong> se presenta con una personalidad en&eacute;rgica y juvenil. Es un SUV compacto que cuenta con un motor de tercera generaci&oacute;n de 1.6L y 118 HP, que&nbsp; gracias a su chasis ligero, logra un excelente desempe&ntilde;o en potencia, garantizando un menor consumo de combustible.</p>\r\n\r\n<p>El <strong>Nuevo NISSAN KICKS</strong> cuenta con un equipamiento de vanguardia , donde podemos destacar su Asistente de Ascenso en Pendientes (que evita que el veh&iacute;culo se deslice hacia atr&aacute;s al liberar el freno en una pendiente), como adem&aacute;s el Rear Sonar System (que emite alertas para el conductor cuando detecta objetos al estacionarse y/o conducir en reversa), donde ambos combinan tecnolog&iacute;a y confort, otorgando una mayor seguridad en el andar.</p>\r\n', 'nissan,cuevas,garden,kicks', '2017-07-05 14:51:49', '1');

-- ----------------------------
-- Table structure for `post_archivo`
-- ----------------------------
DROP TABLE IF EXISTS `post_archivo`;
CREATE TABLE `post_archivo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_post` int(11) unsigned NOT NULL,
  `id_tipo_archivo` int(11) unsigned NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `img_principal` int(1) NOT NULL DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_idpost_pa` (`id_post`),
  KEY `fk_idtipoarchivo_pa` (`id_tipo_archivo`),
  CONSTRAINT `fk_idpost_pa` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_idtipoarchivo_pa` FOREIGN KEY (`id_tipo_archivo`) REFERENCES `post_archivo` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post_archivo
-- ----------------------------
INSERT INTO `post_archivo` VALUES ('1', '1', '1', 'cumple_agustin_1.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('2', '1', '1', 'cumple_agustin_2.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('3', '1', '1', 'cumple_agustin_3.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('4', '1', '1', 'cumple_agustin_4.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('5', '1', '1', 'cumple_agustin_5.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('6', '1', '1', 'cumple_agustin_6.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('7', '1', '1', 'cumple_agustin_7.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('8', '2', '2', 'lanzamiento_mini_countryman.mp4', '0', '1');
INSERT INTO `post_archivo` VALUES ('9', '2', '1', 'lanzamiento_mini_countryman.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('10', '3', '2', 'videoCarlosTurrini.mp4', '0', '1');
INSERT INTO `post_archivo` VALUES ('11', '3', '1', 'carlosturrini.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('12', '4', '1', 'bmw_daytripvaporcue_1.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('13', '4', '1', 'bmw_daytripvaporcue_2.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('14', '4', '1', 'bmw_daytripvaporcue_3.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('15', '4', '1', 'bmw_daytripvaporcue_4.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('16', '4', '1', 'bmw_daytripvaporcue_5.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('17', '4', '1', 'bmw_daytripvaporcue_6.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('18', '4', '1', 'bmw_daytripvaporcue_7.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('19', '4', '1', 'bmw_daytripvaporcue_8.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('20', '4', '1', 'bmw_daytripvaporcue_9.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('21', '4', '1', 'bmw_daytripvaporcue_10.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('22', '4', '1', 'bmw_daytripvaporcue_11.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('23', '4', '1', 'bmw_daytripvaporcue_12.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('24', '4', '1', 'bmw_daytripvaporcue_13.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('25', '4', '1', 'bmw_daytripvaporcue_14.jpg', '0', '1');
INSERT INTO `post_archivo` VALUES ('26', '5', '1', 'inter_run_2017.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('27', '5', '2', 'inter_run_2017.mp4', '0', '1');
INSERT INTO `post_archivo` VALUES ('28', '6', '1', 'lanzamiento_renegade_2016.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('29', '6', '2', 'lanzamiento_renegade_2016.mp4', '0', '1');
INSERT INTO `post_archivo` VALUES ('30', '7', '1', 'lanzamiento_compass_2016.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('31', '7', '2', 'lanzamiento_compass_2016.mp4', '0', '1');
INSERT INTO `post_archivo` VALUES ('32', '8', '2', 'lanzamiento_jackdaniels_jeep.mp4', '0', '1');
INSERT INTO `post_archivo` VALUES ('33', '8', '1', 'lanzamiento_jeep_jackdaniels.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('35', '9', '2', 'WhatsApp Video 2017-07-06 at 1.32.52 PM.mp4', '0', '1');
INSERT INTO `post_archivo` VALUES ('38', '9', '1', 'Sin_titulo_kicks.png', '1', '1');

-- ----------------------------
-- Table structure for `post_categoria`
-- ----------------------------
DROP TABLE IF EXISTS `post_categoria`;
CREATE TABLE `post_categoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_post` int(11) unsigned NOT NULL,
  `id_categoria` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idpost_pc` (`id_post`),
  KEY `fk_idcategoria_pc` (`id_categoria`),
  CONSTRAINT `fk_idcategoria_pc` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_idpost_pc` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post_categoria
-- ----------------------------
INSERT INTO `post_categoria` VALUES ('1', '1', '2');
INSERT INTO `post_categoria` VALUES ('2', '2', '5');
INSERT INTO `post_categoria` VALUES ('3', '3', '5');
INSERT INTO `post_categoria` VALUES ('4', '4', '4');
INSERT INTO `post_categoria` VALUES ('5', '5', '6');
INSERT INTO `post_categoria` VALUES ('6', '6', '6');
INSERT INTO `post_categoria` VALUES ('7', '7', '6');
INSERT INTO `post_categoria` VALUES ('8', '8', '6');
INSERT INTO `post_categoria` VALUES ('9', '9', '12');

-- ----------------------------
-- Table structure for `post_tipo`
-- ----------------------------
DROP TABLE IF EXISTS `post_tipo`;
CREATE TABLE `post_tipo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_post` int(11) unsigned NOT NULL,
  `id_tipo_evento` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_post_pt` (`id_post`),
  KEY `fk_id_tipopost_pt` (`id_tipo_evento`),
  CONSTRAINT `fk_id_post_pt` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_id_tipopost_pt` FOREIGN KEY (`id_tipo_evento`) REFERENCES `tipo_evento` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post_tipo
-- ----------------------------
INSERT INTO `post_tipo` VALUES ('1', '1', '2');
INSERT INTO `post_tipo` VALUES ('2', '2', '1');
INSERT INTO `post_tipo` VALUES ('3', '3', '1');
INSERT INTO `post_tipo` VALUES ('4', '4', '2');
INSERT INTO `post_tipo` VALUES ('5', '5', '2');
INSERT INTO `post_tipo` VALUES ('6', '6', '1');
INSERT INTO `post_tipo` VALUES ('7', '7', '1');
INSERT INTO `post_tipo` VALUES ('8', '8', '1');
INSERT INTO `post_tipo` VALUES ('9', '9', '1');

-- ----------------------------
-- Table structure for `tipo_archivo`
-- ----------------------------
DROP TABLE IF EXISTS `tipo_archivo`;
CREATE TABLE `tipo_archivo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_archivo
-- ----------------------------
INSERT INTO `tipo_archivo` VALUES ('1', 'Imagen', null, '1');
INSERT INTO `tipo_archivo` VALUES ('2', 'Video', null, '1');
INSERT INTO `tipo_archivo` VALUES ('3', 'Word', null, '1');
INSERT INTO `tipo_archivo` VALUES ('4', 'Excel', null, '1');
INSERT INTO `tipo_archivo` VALUES ('5', 'Power Point', null, '1');

-- ----------------------------
-- Table structure for `tipo_evento`
-- ----------------------------
DROP TABLE IF EXISTS `tipo_evento`;
CREATE TABLE `tipo_evento` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `tag` varchar(45) DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_evento
-- ----------------------------
INSERT INTO `tipo_evento` VALUES ('1', 'Lanzamientos', 'lanzamiento', '1');
INSERT INTO `tipo_evento` VALUES ('2', 'Eventos', 'evento', '1');
INSERT INTO `tipo_evento` VALUES ('3', 'Noticias', 'noticia', '1');

-- ----------------------------
-- Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'raul.ramirez@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', 'Raul', 'Ramirez', null, null, '1');
