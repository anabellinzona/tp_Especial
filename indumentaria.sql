-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2023 a las 00:34:48
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `indumentaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indumentaria`
--

CREATE TABLE `indumentaria` (
  `id` int(11) NOT NULL,
  `producto` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `indumentaria`
--

INSERT INTO `indumentaria` (`id`, `producto`, `categoria`, `precio`, `stock`, `proveedor`) VALUES
(1, 'Top Katy', 'Top', 6000, 13, 1),
(2, 'Vestido ani', 'Vestido', 13000, 7, 1),
(3, 'camisa oversize', 'camisa', 20000, 9, 2),
(4, 'Mini black', 'Pollera', 12000, 20, 4),
(5, 'Remera white', 'Remera', 7000, 17, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `contacto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `apellido`, `contacto`) VALUES
(1, 'julian', 'mezas', 'julimezas@gmail.com'),
(2, 'Horacio', 'Velez', 'horiveles@gmail.com'),
(3, 'Roman', 'Castaño', 'romancastaño@gmail.com'),
(4, 'Maia', 'Jimenez', 'maiajimenez@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `indumentaria`
--
ALTER TABLE `indumentaria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_indumentaria_proveedores` (`proveedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `indumentaria`
--
ALTER TABLE `indumentaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `indumentaria`
--
ALTER TABLE `indumentaria`
  ADD CONSTRAINT `fk_indumentaria_proveedores` FOREIGN KEY (`proveedor`) REFERENCES `proveedores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
