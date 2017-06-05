/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : intranet

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-06-05 18:26:50
*/

SET FOREIGN_KEY_CHECKS=0;

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
INSERT INTO `categoria` VALUES ('9', 'Chrysler', 'chrysler', '1');
INSERT INTO `categoria` VALUES ('10', 'Mazda', 'mazda', '1');
INSERT INTO `categoria` VALUES ('11', 'Mopar', 'mopar', '1');
INSERT INTO `categoria` VALUES ('12', 'Nissan', 'nissan', '1');
INSERT INTO `categoria` VALUES ('13', 'División Usados', 'usados', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('1', '¡El Fanático de la marca más pequeño de la casa!', '<p>No perdimos la oportunidad para darle el mejor cumpleaños de sus sueños. Por eso nos hicimos presente en ese día tan especial y llenamos su día de sorpresas, obsequiándole un tour por las instalaciones del taller de Kia así como varias sorpresas en el festejo de su cumpleaños.</p>\r\n<p>¡Gracias Agustín por dejarnos ser parte de ese momento tan especial!</p>', 'cumpleaños,agustin,fan,pequeño', '2017-05-30 15:04:57', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

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

-- ----------------------------
-- Table structure for `post_categoria`
-- ----------------------------
DROP TABLE IF EXISTS `post_categoria`;
CREATE TABLE `post_categoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_post` int(11) unsigned NOT NULL,
  `id_categoriea` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idpost_pc` (`id_post`),
  KEY `fk_idcategoria_pc` (`id_categoriea`),
  CONSTRAINT `fk_idcategoria_pc` FOREIGN KEY (`id_categoriea`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_idpost_pc` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post_categoria
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post_tipo
-- ----------------------------
INSERT INTO `post_tipo` VALUES ('1', '1', '2');

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
  `fecha_nacimiento` date NOT NULL,
  `imagen` varchar(160) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_usuario_usuario` (`usuario`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'raul.ramirez@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', 'Raul', 'Ramirez', '1986-09-25', null, '1');
