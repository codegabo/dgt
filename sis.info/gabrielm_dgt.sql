-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-08-2018 a las 12:53:15
-- Versión del servidor: 10.1.31-MariaDB-cll-lve
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gabrielm_dgt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos_pdf`
--

CREATE TABLE `archivos_pdf` (
  `id_documento` int(10) NOT NULL,
  `titulo` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `tamanio` int(10) UNSIGNED DEFAULT NULL,
  `tipo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nombre_archivo` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivos_pdf`
--

INSERT INTO `archivos_pdf` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(15, 'SERVICIO DGT', '                  En este archivo encontraras los servicios que prestamos en sublimaciÃ³n', 6474571, 'application/pdf', 'SERVICIOS DGT.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_imagen` int(10) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `ruta` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_imagen`, `titulo`, `ruta`) VALUES
(24, 'Animales', 'img_categoria/Animales.png'),
(25, 'Animal Print', 'img_categoria/Animal Print.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_disenos`
--

CREATE TABLE `data_disenos` (
  `id_data` int(11) NOT NULL,
  `cliente` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `diseno` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `modelo` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tela` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_prod` varchar(200) NOT NULL,
  `comentarios` varchar(800) NOT NULL,
  `design_for` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `asesor` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `width` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `height` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disenos`
--

CREATE TABLE `disenos` (
  `id_diseno` int(11) NOT NULL,
  `id_categoria` int(100) NOT NULL,
  `id_diseno_padre` int(100) DEFAULT NULL,
  `nombre_dis` varchar(100) NOT NULL,
  `disenador` varchar(100) NOT NULL,
  `caracteristicas` varchar(100) NOT NULL,
  `etiquetas` varchar(100) NOT NULL,
  `tipo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `ruta2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `disenos`
--

INSERT INTO `disenos` (`id_diseno`, `id_categoria`, `id_diseno_padre`, `nombre_dis`, `disenador`, `caracteristicas`, `etiquetas`, `tipo`, `ruta`, `ruta2`) VALUES
(46, 14, 0, 'AM-0001-R-large', 'Rocio CastaÃ±eda', 'Dibujo inspirado en aves ', 'aves, alas, volar', 'design', 'img_disenos/AM-0001-R-large-thumb.jpg', 'img_disenos/AM-0001-R-large-large.jpg'),
(47, 14, 0, 'AM-0001-R', 'Rocio castaÃ±eda', 'Dibujo inspirado en aves', 'aves, alas, volar', 'design', 'img_disenos/AM-0001-R-thumb.jpg', 'img_disenos/AM-0001-R-large.jpg'),
(48, 14, 0, 'AM-0006-R', 'Rocio castaÃ±eda', 'Dibujo inspirado en animales y safari', 'animales,', 'design', 'img_disenos/AM-0006-R-thumb.jpg', 'img_disenos/AM-0006-R-large.jpg'),
(49, 15, 0, 'BA-0001-R', 'Rocio castaÃ±eda', 'BÃ¡sico de lineas', 'lineas, -, rayas', 'design', 'img_disenos/BA-0001-R-thumb.jpg', 'img_disenos/BA-0001-R-large.jpg'),
(50, 17, 0, 'AM-0001-R', 'Rocio castaÃ±eda', 'Dibujo inspirado en aves ', 'aves,', 'design', 'img_disenos/AM-0001-R-thumb.jpg', 'img_disenos/AM-0001-R-large.jpg'),
(51, 17, 50, '', '', '', '', 'design,', 'img_disenos/-thumb.jpg', 'img_disenos/-large.jpg'),
(52, 17, 0, '00001', 'xxx', 'xxx', 'gfgrg', 'design,', 'img_disenos/00001-thumb.jpg', 'img_disenos/00001-large.jpg'),
(53, 17, 52, '', '', '', '', 'design,', 'img_disenos/-thumb.jpg', 'img_disenos/-large.jpg'),
(54, 14, 0, '0001', 'PEPITA', 'BLABLABLA', 'HOJAS, JIRAFAS', 'design', 'img_disenos/0001-thumb.jpg', 'img_disenos/0001-large.jpg'),
(55, 15, 0, 'AM-0001-R', 'ROCIO CASTAÃ‘EDA', 'DIBUJO INSPIRADO EN AVES', 'AVES, ALAS', 'design', 'img_disenos/AM-0001-R-thumb.jpg', 'img_disenos/AM-0001-R-large.jpg'),
(56, 15, 55, 'AM-0001-R-2', 'ROCIO CASTAÃ‘EDA', 'DIBUJO INSPIRADO EN AVES', 'ALAS, AVES', 'design', 'img_disenos/AM-0001-R-2-thumb.jpg', 'img_disenos/AM-0001-R-2-large.jpg'),
(58, 18, 0, 'design', 'design', 'design', 'design,', 'design', 'img_disenos/design.jpg', ''),
(62, 19, 0, 'prueba2', 'rocio', 'diseÃ±o de hojas', 'hojas naturaleza', 'design', 'img_disenos/prueba2.jpg', ''),
(63, 20, 0, 'AP-0001-R', 'Rocio CastaÃ±eda', 'DiseÃ±o inspirado en textura de plumas', 'plumas, aves, textura, animalprit', 'design', 'img_disenos/AP-0001-R.jpg', ''),
(87, 24, 0, 'AM-0001-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la tendencia de garzas en estampados', 'Aves, plumas, garzas, volar', 'design', 'img_disenos/AM-0001-R.jpg', ''),
(88, 24, 87, 'AM-0001B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la tendencia de garzas en estampados', 'Aves, plumas, garzas, volar', 'design', 'img_disenos/AM-0001B-R.jpg', ''),
(89, 24, 87, 'AM-0001C-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la tendencia de garzas en estampados', 'Aves, plumas, garzas, volar', 'design', 'img_disenos/AM-0001C-R.jpg', ''),
(90, 24, 0, 'AM-0002-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la tendencia de garzas en estampados', 'Aves, plumas, garzas, volar', 'design', 'img_disenos/AM-0002-R.jpg', ''),
(91, 24, 90, 'AM-0002B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la tendencia de garzas en estampados', 'Aves, plumas, garzas, volar', 'design', 'img_disenos/AM-0002B-R.jpg', ''),
(92, 24, 90, 'AM-0002C-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la tendencia de garzas en estampados', 'Aves, plumas, garzas, volar', 'design', 'img_disenos/AM-0002C-R.jpg', ''),
(93, 24, 0, 'AM-0003-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la tendencia de garzas en estampados', 'Aves, plumas, garzas, volar', 'design', 'img_disenos/AM-0003-R.jpg', ''),
(94, 24, 93, 'AM-0003B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la tendencia de garzas en estampados', 'Aves, plumas, garzas, volar', 'design', 'img_disenos/AM-0003B-R.jpg', ''),
(95, 24, 93, 'AM-003C-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la tendencia de garzas en estampados', 'Aves, plumas, garzas, volar', 'design', 'img_disenos/AM-003C-R.jpg', ''),
(96, 24, 0, 'AM-0004-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la tendencia de garzas en estampados', 'Aves, plumas, garzas, volar', 'design', 'img_disenos/AM-0004-R.jpg', ''),
(97, 24, 96, 'AM-0004B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la tendencia de garzas en estampados', 'Aves, plumas, garzas, volar', 'design', 'img_disenos/AM-0004B-R.jpg', ''),
(98, 24, 96, 'AM-0004C-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la tendencia de garzas en estampados', 'Aves, plumas, garzas, volar', 'design', 'img_disenos/AM-0004C-R.jpg', ''),
(99, 24, 0, 'AM-0005-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la vida de las jirafas en la jungla', 'Jirafas, jungla, animales', 'design', 'img_disenos/AM-0005-R.jpg', ''),
(100, 24, 99, 'AM-0005B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la vida de las jirafas en la jungla', 'Jirafas, jungla, animales', 'design', 'img_disenos/AM-0005B-R.jpg', ''),
(101, 24, 99, 'AM-0005C-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la vida de las jirafas en la jungla', 'Jirafas, jungla, animales', 'design', 'img_disenos/AM-0005C-R.jpg', ''),
(102, 24, 0, 'AM-0006-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en peces bailarina combinado con un geomÃ©trico', 'Peces, mar, agua', 'design', 'img_disenos/AM-0006-R.jpg', ''),
(103, 24, 102, 'AM-0006B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en peces bailarina combinado con un geomÃ©trico', 'Peces, mar, agua', 'design', 'img_disenos/AM-0006B-R.jpg', ''),
(104, 24, 102, 'AM-0006C-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en peces bailarina combinado con un geomÃ©trico', 'Peces, mar, agua', 'design', 'img_disenos/AM-0006C-R.png', ''),
(105, 24, 0, 'AM-0007-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la textura del cielo con nubes y el vuelo de las abejas', 'Abejas, animales, cielo, nubes', 'design', 'img_disenos/AM-0007-R.jpg', ''),
(106, 24, 105, 'AM-0007B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la textura del cielo con nubes y el vuelo de las abejas', 'Abejas, animales, cielo, nubes', 'design', 'img_disenos/AM-0007B-R.jpg', ''),
(107, 24, 105, 'AM-0007C-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la textura del cielo con nubes y el vuelo de las abejas', 'Abejas, animales, cielo, nubes', 'design', 'img_disenos/AM-0007C-R.jpg', ''),
(108, 24, 0, 'AM-0008-R', 'Rocio castaÃ±eda', 'DiseÃ±o basado en la vida marina de los corales y el habitat de los peces', 'Peces, mar, agua, corales', 'design', 'img_disenos/AM-0008-R.jpg', ''),
(109, 24, 108, 'AM-0008B-R', 'Rocio castaÃ±eda', 'DiseÃ±o basado en la vida marina de los corales y el habitat de los peces', 'Peces, mar, agua, corales', 'design', 'img_disenos/AM-0008B-R.jpg', ''),
(110, 24, 108, 'AM-0008C-R', 'Rocio castaÃ±eda', 'DiseÃ±o basado en la vida marina de los corales y el habitat de los peces', 'Peces, mar, agua, corales', 'design', 'img_disenos/AM-0008C-R.jpg', ''),
(111, 24, 0, 'AM-0009-R', 'Rocio castaÃ±eda', 'DiseÃ±o de flamencos en la selva ', 'Flamencos, tropical, selva, jungla', 'design', 'img_disenos/AM-0009-R.jpg', ''),
(112, 24, 111, 'AM-0009B-R', 'Rocio castaÃ±eda', 'DiseÃ±o de flamencos en la selva ', 'Flamencos, tropical, selva, jungla', 'design', 'img_disenos/AM-0009B-R.jpg', ''),
(113, 24, 111, 'AM-0009C-R', 'Rocio castaÃ±eda', 'DiseÃ±o de flamencos en la selva ', 'Flamencos, tropical, selva, jungla', 'design', 'img_disenos/AM-0009C-R.jpg', ''),
(114, 24, 0, 'AM-0010-R', 'Rocio castaÃ±eda', 'DiseÃ±o de peces en fondo de textura', 'Peces, mar, agua', 'design', 'img_disenos/AM-0010-R.jpg', ''),
(115, 24, 114, 'AM-0010B-R', 'Rocio castaÃ±eda', 'DiseÃ±o de peces en fondo de textura', 'Peces, mar, agua', 'design', 'img_disenos/AM-0010B-R.jpg', ''),
(116, 24, 114, 'AM-0010C-R', 'Rocio castaÃ±eda', 'DiseÃ±o de peces en fondo de textura', 'Peces, mar, agua', 'design', 'img_disenos/AM-0010C-R.jpg', ''),
(117, 24, 0, 'AM-0011-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la jungla y los animales de safari', 'Animales, leÃ³n, elefante, cebra, tigre, hojas, selva, jungla', 'design', 'img_disenos/AM-0011-R.jpg', ''),
(118, 24, 117, 'AM-0011B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en la jungla y los animales de safari', 'Animales, leÃ³n, elefante, cebra, tigre, hojas, selva, jungla', 'design', 'img_disenos/AM-0011B-R.jpg', ''),
(120, 25, 0, 'AP-0001-R', 'Rocio CastaÃ±eda', 'DiseÃ±o inspirado en animal print de plumas silvestres', 'Plumas, animales, animal print, silvestre', 'design', 'img_disenos/AP-0001-R.jpg', ''),
(121, 25, 120, 'AP-0001B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de plumas silvestres', 'Plumas, animales, animal print, silvestre', 'design', 'img_disenos/AP-0001B-R.jpg', ''),
(122, 25, 0, 'AP-0002-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de plumas silvestres', 'Plumas, animales, animal print, silvestre', 'design', 'img_disenos/AP-0002-R.jpg', ''),
(124, 25, 122, 'AP-0002B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de plumas silvestres', 'Plumas, animales, animal print, silvestre', 'design', 'img_disenos/AP-0002B-R.jpg', ''),
(125, 25, 0, 'AP-0003-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de texturas de serpiente ', 'Textura, animales, animal print, serpiente', 'design', 'img_disenos/AP-0003-R.jpg', ''),
(126, 25, 125, 'AP-0003B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de texturas de serpiente ', 'Textura, animales, animal print, serpiente', 'design', 'img_disenos/AP-0003B-R.jpg', ''),
(127, 25, 0, 'AP-0004-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de plumas silvestres', 'Plumas, animales, animal print, silvestre', 'design', 'img_disenos/AP-0004-R.jpg', ''),
(128, 25, 127, 'AP-0004B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de plumas silvestres', 'Plumas, animales, animal print, silvestre', 'design', 'img_disenos/AP-0004B-R.jpg', ''),
(129, 25, 0, 'AP-0005-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de leopardo con textura acuarela', 'Textura, animales, animal print, serpiente, acuarela', 'design', 'img_disenos/AP-0005-R.jpg', ''),
(130, 25, 129, 'AP-0005B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de leopardo con textura acuarela', 'Textura, animales, animal print, serpiente, acuarela', 'design', 'img_disenos/AP-0005B-R.jpg', ''),
(131, 25, 129, 'AP-0005C-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de leopardo con textura acuarela', 'Textura, animales, animal print, serpiente, acuarela', 'design', 'img_disenos/AP-0005C-R.jpg', ''),
(132, 25, 0, 'AP-0006-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de leopardo con flores', 'Textura, animales, animal print, serpiente, acuarela, leopardo, flores', 'design', 'img_disenos/AP-0006-R.jpg', ''),
(133, 25, 132, 'AP-0006B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de leopardo con flores', 'Textura, animales, animal print, serpiente, acuarela, leopardo, flores', 'design', 'img_disenos/AP-0006B-R.jpg', ''),
(134, 25, 132, 'AP-0006C-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de leopardo con flores', 'Textura, animales, animal print, serpiente, acuarela, leopardo, flores', 'design', 'img_disenos/AP-0006C-R.jpg', ''),
(136, 25, 0, 'AP-0007-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de leopardo con colores', 'Textura, animales, animal print, serpiente, acuarela, leopardo, flores', 'design', 'img_disenos/AP-0007-R.jpg', ''),
(137, 25, 136, 'AP-0007B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de leopardo con colores', 'Textura, animales, animal print, serpiente, acuarela, leopardo, flores', 'design', 'img_disenos/AP-0007B-R.jpg', ''),
(138, 25, 136, 'AP-0007C-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de leopardo con colores', 'Textura, animales, animal print, serpiente, acuarela, leopardo, flores', 'design', 'img_disenos/AP-0007C-R.jpg', ''),
(139, 25, 0, 'AP-0008-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de leopardo con siluetas de animales', 'Textura, animales, animal print, serpiente, acuarela', 'design', 'img_disenos/AP-0008-R.jpg', ''),
(140, 25, 139, 'AP-0008B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de leopardo con siluetas de animales', 'Textura, animales, animal print, serpiente, acuarela', 'design', 'img_disenos/AP-0008B-R.jpg', ''),
(141, 25, 139, 'AP-0008C-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en animal print de leopardo con siluetas de animales', 'Textura, animales, animal print, serpiente, acuarela', 'design', 'img_disenos/AP-0008C-R.jpg', ''),
(142, 25, 0, 'AP-0009-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en camuflados clasicos', 'Textura, animales, animal print, camuflado', 'design', 'img_disenos/AP-0009-R.jpg', ''),
(143, 25, 142, 'AP-0009B-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en camuflados clasicos', 'Textura, animales, animal print, camuflado', 'design', 'img_disenos/AP-0009B-R.jpg', ''),
(144, 25, 142, 'AP-0009C-R', 'Rocio castaÃ±eda', 'DiseÃ±o inspirado en camuflados clasicos', 'Textura, animales, animal print, camuflado', 'design', 'img_disenos/AP-0009C-R.jpg', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `codigo` int(11) NOT NULL,
  `nombre_use` varchar(100) NOT NULL,
  `apellido_use` varchar(100) NOT NULL,
  `genero_use` varchar(100) NOT NULL,
  `fechanaci` date NOT NULL,
  `cargo_use` varchar(15) NOT NULL,
  `usuario_use` varchar(100) NOT NULL,
  `contra_use` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora_use` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`codigo`, `nombre_use`, `apellido_use`, `genero_use`, `fechanaci`, `cargo_use`, `usuario_use`, `contra_use`, `fecha`, `hora_use`) VALUES
(9, 'Juan Gabriel', 'MogollÃ³n MartÃ­nez', 'Masculino', '2018-01-01', 'Administrador', 'gaboo', '12345', '2018-05-30', '07:58:12'),
(10, 'Rocio CastaÃ±eda', 'Digital Global Textiles', 'Femenino', '2018-06-07', 'Administrador', 'rociodgt', 'pruebadiseÃ±odgt', '2018-06-07', '05:35:00'),
(11, 'gaboasesor', 'asesor de prueba', 'Masculino', '2018-01-31', 'Asesor', 'ggabooo', '123', '2018-07-14', '08:14:03'),
(12, 'Asesores', '', 'Masculino', '1990-07-28', 'Asesor', 'asesores', 'pruebasasesordgt', '2018-07-27', '10:39:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos_pdf`
--
ALTER TABLE `archivos_pdf`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `data_disenos`
--
ALTER TABLE `data_disenos`
  ADD PRIMARY KEY (`id_data`);

--
-- Indices de la tabla `disenos`
--
ALTER TABLE `disenos`
  ADD PRIMARY KEY (`id_diseno`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos_pdf`
--
ALTER TABLE `archivos_pdf`
  MODIFY `id_documento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_imagen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `data_disenos`
--
ALTER TABLE `data_disenos`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `disenos`
--
ALTER TABLE `disenos`
  MODIFY `id_diseno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
