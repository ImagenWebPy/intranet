/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : intranet

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-05-21 19:32:03
*/

SET FOREIGN_KEY_CHECKS=0;

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
  `estado` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_usuario_usuario` (`usuario`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'raul.ramirez@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', 'Raul', 'Ramirez', '1986-09-25', null, '1');
