-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2020 a las 20:58:07
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `solicitud` varchar(500) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_noticia`
--

CREATE TABLE `comentario_noticia` (
  `id` int(11) NOT NULL,
  `contenido` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dt_compra`
--

CREATE TABLE `dt_compra` (
  `nro_factura` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_dtproducto` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descuento` float NOT NULL,
  `monto_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dt_producto`
--

CREATE TABLE `dt_producto` (
  `id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestionar_cliente`
--

CREATE TABLE `gestionar_cliente` (
  `id` int(11) NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestionar_vendedor`
--

CREATE TABLE `gestionar_vendedor` (
  `id` int(11) NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `cuerpo` varchar(500) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `id_comentario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` float NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `id` int(11) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documento` (`documento`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chatCliente` (`id_cliente`),
  ADD KEY `fk_chatVendedor` (`id_vendedor`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documento` (`documento`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `comentario_noticia`
--
ALTER TABLE `comentario_noticia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comentarioCliente` (`id_cliente`);

--
-- Indices de la tabla `dt_compra`
--
ALTER TABLE `dt_compra`
  ADD PRIMARY KEY (`nro_factura`),
  ADD KEY `fk_idDtcompraDtproducto` (`id_dtproducto`),
  ADD KEY `fk_DtcompraCliente` (`id_cliente`);

--
-- Indices de la tabla `dt_producto`
--
ALTER TABLE `dt_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idDtprodProd` (`id_producto`);

--
-- Indices de la tabla `gestionar_cliente`
--
ALTER TABLE `gestionar_cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gestclieCliente` (`id_cliente`),
  ADD KEY `fk_gestclieAdmin` (`id_administrador`);

--
-- Indices de la tabla `gestionar_vendedor`
--
ALTER TABLE `gestionar_vendedor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gestvendAdmin` (`id_administrador`),
  ADD KEY `fk_gestvendVendedor` (`id_vendedor`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_noticiaVendedor` (`id_vendedor`),
  ADD KEY `fk_noticiaComentario` (`id_comentario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idProdCat` (`id_categoria`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documentounico` (`documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentario_noticia`
--
ALTER TABLE `comentario_noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dt_compra`
--
ALTER TABLE `dt_compra`
  MODIFY `nro_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dt_producto`
--
ALTER TABLE `dt_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gestionar_cliente`
--
ALTER TABLE `gestionar_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gestionar_vendedor`
--
ALTER TABLE `gestionar_vendedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `fk_chatCliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `fk_chatVendedor` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedor` (`id`);

--
-- Filtros para la tabla `comentario_noticia`
--
ALTER TABLE `comentario_noticia`
  ADD CONSTRAINT `fk_comentarioCliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `dt_compra`
--
ALTER TABLE `dt_compra`
  ADD CONSTRAINT `fk_DtcompraCliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `fk_idDtcompraDtproducto` FOREIGN KEY (`id_dtproducto`) REFERENCES `dt_producto` (`id`);

--
-- Filtros para la tabla `dt_producto`
--
ALTER TABLE `dt_producto`
  ADD CONSTRAINT `fk_idDtprodProd` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `gestionar_cliente`
--
ALTER TABLE `gestionar_cliente`
  ADD CONSTRAINT `fk_gestclieAdmin` FOREIGN KEY (`id_administrador`) REFERENCES `administrador` (`id`),
  ADD CONSTRAINT `fk_gestclieCliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `gestionar_vendedor`
--
ALTER TABLE `gestionar_vendedor`
  ADD CONSTRAINT `fk_gestvendAdmin` FOREIGN KEY (`id_administrador`) REFERENCES `administrador` (`id`),
  ADD CONSTRAINT `fk_gestvendVendedor` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedor` (`id`);

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `fk_noticiaComentario` FOREIGN KEY (`id_comentario`) REFERENCES `comentario_noticia` (`id`),
  ADD CONSTRAINT `fk_noticiaVendedor` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedor` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_idProdCat` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
