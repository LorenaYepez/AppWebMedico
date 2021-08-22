/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : teleconsulta

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 22/08/2021 13:35:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `IdAdm` int(11) NOT NULL,
  `IdPersona` int(11) NOT NULL,
  `Celula` int(11) NULL DEFAULT NULL,
  `Telefono` int(11) NULL DEFAULT NULL,
  `Estado` int(11) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (0, 49, 11385389, 60817621, 1);

-- ----------------------------
-- Table structure for especialidad
-- ----------------------------
DROP TABLE IF EXISTS `especialidad`;
CREATE TABLE `especialidad`  (
  `IdEspecialidad` int(11) NOT NULL,
  `Nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of especialidad
-- ----------------------------
INSERT INTO `especialidad` VALUES (1, 'Dermatologo');
INSERT INTO `especialidad` VALUES (2, 'Cardiologo');

-- ----------------------------
-- Table structure for horarioatencion
-- ----------------------------
DROP TABLE IF EXISTS `horarioatencion`;
CREATE TABLE `horarioatencion`  (
  `IdHorario` int(11) NOT NULL,
  `Dias` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `HoraInicio` time(6) NULL DEFAULT NULL,
  `HoraFinal` time(6) NULL DEFAULT NULL,
  `IdMedico` int(11) NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for medico
-- ----------------------------
DROP TABLE IF EXISTS `medico`;
CREATE TABLE `medico`  (
  `IdMedico` int(11) NOT NULL AUTO_INCREMENT,
  `IdPersona` int(11) NOT NULL,
  `DireccionLaboral` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Estado` int(11) NOT NULL,
  `NroMatricula` int(11) NULL DEFAULT NULL,
  `TelefonoLaboral` int(11) NULL DEFAULT NULL,
  `TituloProfesional` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`IdMedico`, `IdPersona`) USING BTREE,
  INDEX `IdPersona`(`IdPersona`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of medico
-- ----------------------------
INSERT INTO `medico` VALUES (1, 23, 'Av Primavera', 1, 568, 78945620, NULL);
INSERT INTO `medico` VALUES (5, 33, 'Av Sucre', 2, 7892, 78451263, 'C:\\fakepath\\cripto.pdf');
INSERT INTO `medico` VALUES (6, 34, 'fgbhnjm', 2, 520, 52223355, 'C:\\fakepath\\PreguntaS DE REDES.pdf');
INSERT INTO `medico` VALUES (7, 35, 'fgbhnjm', 1, 520, 52223355, 'C:\\fakepath\\PreguntaS DE REDES.pdf');
INSERT INTO `medico` VALUES (8, 36, 'fgbhnjm', 1, 520, 52223355, 'C:\\fakepath\\PreguntaS DE REDES.pdf');
INSERT INTO `medico` VALUES (9, 37, 'fgbhnjm', 1, 520, 52223355, 'C:\\fakepath\\PreguntaS DE REDES.pdf');
INSERT INTO `medico` VALUES (10, 38, 'fgbhnjm', 2, 520, 52223355, 'C:\\fakepath\\PreguntaS DE REDES.pdf');
INSERT INTO `medico` VALUES (11, 39, 'fgbhnjm', 1, 520, 52223355, 'C:\\fakepath\\PreguntaS DE REDES.pdf');
INSERT INTO `medico` VALUES (12, 42, 'fgbhnjm', 1, 520, 52223355, 'C:\\fakepath\\PreguntaS DE REDES.pdf');
INSERT INTO `medico` VALUES (13, 43, 'fgbhnjm', 3, 520, 52223355, 'C:\\fakepath\\PreguntaS DE REDES.pdf');
INSERT INTO `medico` VALUES (14, 44, 'fgbhnjm', 3, 520, 52223355, 'C:\\fakepath\\PreguntaS DE REDES.pdf');
INSERT INTO `medico` VALUES (15, 45, 'barrio caminero', 3, 98798, 60817621, 'E:\\Laravel\\AppWebMedico\\public\\pdf/pdf_1628139203.pdf');
INSERT INTO `medico` VALUES (16, 46, 'Jsjsjsks', 3, 98798, 60817621, 'E:\\Laravel\\AppWebMedico\\public\\pdf/pdf_1628139430.pdf');
INSERT INTO `medico` VALUES (17, 47, 'Jsjsjsks', 3, 234567, 60817621, 'E:\\Laravel\\AppWebMedico\\public\\pdf/pdf_1628139750.pdf');
INSERT INTO `medico` VALUES (18, 48, 'barrio caminero', 1, 32231231, 60817621, 'E:\\Laravel\\AppWebMedico\\public\\pdf/pdf_1628140105.pdf');

-- ----------------------------
-- Table structure for paciente
-- ----------------------------
DROP TABLE IF EXISTS `paciente`;
CREATE TABLE `paciente`  (
  `IdPaciente` int(11) NOT NULL,
  `IdPersona` int(11) NOT NULL,
  `Estado` int(11) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paciente
-- ----------------------------
INSERT INTO `paciente` VALUES (1, 33, 0);
INSERT INTO `paciente` VALUES (2, 34, 0);

-- ----------------------------
-- Table structure for persona
-- ----------------------------
DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona`  (
  `IdPersona` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `FechaDeNacimiento` date NULL DEFAULT NULL,
  `FotoDePerfil` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Genero` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Correo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Contrasena` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`IdPersona`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 50 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of persona
-- ----------------------------
INSERT INTO `persona` VALUES (23, 'Lorena Ponce', '1998-08-02', 'C:\\fakepath\\30e75049384bd4d455bb7ffbad45119a.jpg', '2', 'Lorena@gmail.com', '123');
INSERT INTO `persona` VALUES (33, 'Maria Perez', '1982-06-02', 'C:\\fakepath\\Captura.PNG', '2', 'maria@gmail.com', '456');
INSERT INTO `persona` VALUES (34, 'MIguel Cervantes', '1980-02-02', 'C:\\fakepath\\Captura2PNG.PNG', '1', 'antonio@gmail.com', '123456');
INSERT INTO `persona` VALUES (45, 'Lorena@gmail.com', '2021-08-24', 'C:\\fakepath\\PagoFacilBolivia-160740.png', '1', 'leo1@gmail.com', '123');
INSERT INTO `persona` VALUES (46, 'miguel angel cornejo', '2021-08-23', 'C:\\fakepath\\descarga (1).jpg', '1', 'leonadro@gmail.com', '12345');
INSERT INTO `persona` VALUES (47, 'efrain', '2021-08-12', 'E:\\Laravel\\AppWebMedico\\public\\fotomedico/imagen_1628139750.jpg', '1', 'leonor@gmail.com', '123');
INSERT INTO `persona` VALUES (48, 'esterr', '2021-09-03', 'E:\\Laravel\\AppWebMedico\\public\\fotomedico/imagen_1628140105.jpg', '1', 'leo123@gmail.com', '123');
INSERT INTO `persona` VALUES (49, 'Administrador', '2021-08-22', NULL, '1', 'admin@gmail.com', '123456');

-- ----------------------------
-- Table structure for reserva
-- ----------------------------
DROP TABLE IF EXISTS `reserva`;
CREATE TABLE `reserva`  (
  `IdReserva` int(11) NOT NULL,
  `FechaReserva` date NULL DEFAULT NULL,
  `FechaConsulta` date NULL DEFAULT NULL,
  `IdPaciente` int(11) NOT NULL,
  `IdMedico` int(11) NOT NULL,
  `Hora` time(0) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reserva
-- ----------------------------
INSERT INTO `reserva` VALUES (1, '2021-08-09', '2021-08-17', 1, 15, '13:00:00');

SET FOREIGN_KEY_CHECKS = 1;
