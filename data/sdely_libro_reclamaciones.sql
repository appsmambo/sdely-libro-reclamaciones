-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-01-2018 a las 03:06:49
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sdely_libro_reclamaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codigo` varchar(20) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `numero_documento` varchar(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `telefono_fijo` varchar(50) NOT NULL,
  `telefono_celular` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre_apoderado` varchar(100) DEFAULT NULL,
  `tipo_documento_apoderado` varchar(20) DEFAULT NULL,
  `numero_documento_apoderado` varchar(20) DEFAULT NULL,
  `tienda` varchar(20) NOT NULL,
  `motivo` varchar(20) NOT NULL,
  `detalle` text NOT NULL,
  `pedido` text NOT NULL,
  `ip` varchar(50) NOT NULL,
  `info_navegador` varchar(250) NOT NULL,
  `fecha_respuesta` date DEFAULT NULL,
  `respuesta` text,
  `estado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `created_at`, `updated_at`, `codigo`, `tipo_documento`, `numero_documento`, `nombres`, `apellido_paterno`, `apellido_materno`, `telefono_fijo`, `telefono_celular`, `email`, `nombre_apoderado`, `tipo_documento_apoderado`, `numero_documento_apoderado`, `tienda`, `motivo`, `detalle`, `pedido`, `ip`, `info_navegador`, `fecha_respuesta`, `respuesta`, `estado`) VALUES
(1, '2018-01-09 02:00:29', '2018-01-09 02:00:29', '668A3047', 'CE', 'as das232323', 'Juan', 'Quintanilla', 'De la Cruz', '1234567', '123456789', 'quintanilla.peru@gmail.com', NULL, NULL, NULL, 'JM1', 'reclamo', 'Hola', 'Que tal.', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36', '2018-01-08', 'OK:::', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
