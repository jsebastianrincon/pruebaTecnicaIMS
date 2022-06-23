-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2022 a las 08:40:03
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebaims`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombreProducto` varchar(100) NOT NULL,
  `referenciaProducto` varchar(100) NOT NULL,
  `categoriaProducto` varchar(60) NOT NULL,
  `precioProducto` int(11) NOT NULL,
  `pesoProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fechaCreacion` date NOT NULL,
  `fechaActualizacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombreProducto`, `referenciaProducto`, `categoriaProducto`, `precioProducto`, `pesoProducto`, `cantidad`, `fechaCreacion`, `fechaActualizacion`) VALUES
(1, 'Cafe Libra Sello Rojo', 'CF-0001', 'Alimentos', 2500, 15, 2, '2022-06-23', '2022-06-23'),
(2, 'Capuchino 10 Oz', 'CP-0001', 'Alimentos', 1500, 10, 15, '2022-06-23', '0000-00-00'),
(3, 'Azucar Morena', 'AZ-0001', 'Alimentos', 2500, 15, 15, '2022-06-23', '0000-00-00'),
(4, 'Cubeta Huevos', 'CH-001', 'Alimentos', 12000, 15, 15, '2022-06-23', '0000-00-00'),
(5, 'Vasos Icopor', 'VI-001', 'Otros', 3500, 5, 15, '2022-06-23', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fechaCompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `idProducto`, `cantidad`, `fechaCompra`) VALUES
(1, 1, 10, '2022-06-23'),
(2, 1, 3, '2022-06-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
