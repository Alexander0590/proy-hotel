/*
 Navicat Premium Data Transfer

 Source Server         : cnn
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : olimpo

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 01/05/2025 21:43:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for alquiler
-- ----------------------------
DROP TABLE IF EXISTS `alquiler`;
CREATE TABLE `alquiler`  (
  `id_alquiler` int NOT NULL AUTO_INCREMENT,
  `dni` char(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `datos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `dias` int NULL DEFAULT NULL,
  `id_habi` int NULL DEFAULT NULL,
  `pago` float NULL DEFAULT NULL,
  `fecha_inicio` date NULL DEFAULT NULL,
  `fecha_fin` date NULL DEFAULT NULL,
  `metodo_pago` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_usuario` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_alquiler`) USING BTREE,
  INDEX `alquiler_habitacion`(`id_habi` ASC) USING BTREE,
  INDEX `usuario_alquiler`(`id_usuario` ASC) USING BTREE,
  CONSTRAINT `alquiler_habitacion` FOREIGN KEY (`id_habi`) REFERENCES `habitaciones` (`id_habi`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `usuario_alquiler` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of alquiler
-- ----------------------------
INSERT INTO `alquiler` VALUES (1, '76531080', 'juan palacios', 3, 3, 120, '2025-04-08', '2025-04-11', 'efectivo', 1);

-- ----------------------------
-- Table structure for categoria_habitacion
-- ----------------------------
DROP TABLE IF EXISTS `categoria_habitacion`;
CREATE TABLE `categoria_habitacion`  (
  `categoria_id` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`categoria_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categoria_habitacion
-- ----------------------------
INSERT INTO `categoria_habitacion` VALUES (1, 'Personal', 'Solo una cama');
INSERT INTO `categoria_habitacion` VALUES (2, 'Doble', 'Dos camas');
INSERT INTO `categoria_habitacion` VALUES (3, 'Familiar', 'Cinco camas');

-- ----------------------------
-- Table structure for habitaciones
-- ----------------------------
DROP TABLE IF EXISTS `habitaciones`;
CREATE TABLE `habitaciones`  (
  `id_habi` int NOT NULL AUTO_INCREMENT,
  `numero_habi` int NULL DEFAULT NULL,
  `precio` float NULL DEFAULT NULL,
  `categoria_id` int NULL DEFAULT NULL,
  `estado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_habi`) USING BTREE,
  INDEX `habitacion y categoria`(`categoria_id` ASC) USING BTREE,
  CONSTRAINT `habitacion y categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria_habitacion` (`categoria_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of habitaciones
-- ----------------------------
INSERT INTO `habitaciones` VALUES (1, 720, 80, 1, 'disponible');
INSERT INTO `habitaciones` VALUES (2, 820, 150, 2, 'ocupado');
INSERT INTO `habitaciones` VALUES (3, 320, 220, 3, 'limpieza');
INSERT INTO `habitaciones` VALUES (4, 721, 80, 1, 'disponible');
INSERT INTO `habitaciones` VALUES (5, 821, 150, 2, 'ocupado');
INSERT INTO `habitaciones` VALUES (6, 120, 80, 1, 'disponible');
INSERT INTO `habitaciones` VALUES (7, 189, 80, 1, 'disponible');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `datos` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rol` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` char(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'admin', 'admin', 'Alexander Y.Simbala', 'administrador', '77774110', '');

SET FOREIGN_KEY_CHECKS = 1;
