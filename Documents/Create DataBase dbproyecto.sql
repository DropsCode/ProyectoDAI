-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2019 a las 03:42:13
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `RUT` int(11) NOT NULL COMMENT 'RUN'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`RUT`) VALUES
(19565459);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `ID_COMMENT` int(11) NOT NULL COMMENT 'ID de comentario',
  `CLIENT_RUT` int(11) NOT NULL COMMENT 'Rut del Cliente para generar el comentario',
  `WORKER_RUT` int(11) NOT NULL COMMENT 'Rut del trabajador para generar el comentario',
  `COMMENTS` varchar(255) NOT NULL COMMENT 'Tabla de comentarios'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comment`
--

INSERT INTO `comment` (`ID_COMMENT`, `CLIENT_RUT`, `WORKER_RUT`, `COMMENTS`) VALUES
(1, 19565459, 13274933, 'Comentario de prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `commune`
--

CREATE TABLE `commune` (
  `COD_COMUNNE` int(11) NOT NULL COMMENT 'Codigo de comuna',
  `COD_NAME_COMM` varchar(225) NOT NULL COMMENT 'Nombre de la comuna'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `commune`
--

INSERT INTO `commune` (`COD_COMUNNE`, `COD_NAME_COMM`) VALUES
(1, 'Santiago'),
(2, 'Providencia'),
(5, 'Maipu'),
(6, 'Estacion Central'),
(7, 'Las Condes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parameter_orders`
--

CREATE TABLE `parameter_orders` (
  `COD_STATE` int(1) NOT NULL COMMENT 'Codigo de orden',
  `STATUS_NAME` varchar(225) NOT NULL COMMENT 'Estado de la orden'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `parameter_orders`
--

INSERT INTO `parameter_orders` (`COD_STATE`, `STATUS_NAME`) VALUES
(1, 'En Proceso'),
(2, 'Completado'),
(3, 'Cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `professions`
--

CREATE TABLE `professions` (
  `COD_PROFESSION` int(2) NOT NULL COMMENT 'Codigo de la profesión',
  `NAME_PROFESSION` varchar(225) NOT NULL COMMENT 'Nombre de la profesión'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `professions`
--

INSERT INTO `professions` (`COD_PROFESSION`, `NAME_PROFESSION`) VALUES
(1, 'Fontanero'),
(2, 'Gasfiter'),
(3, 'Jardinero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_user`
--

CREATE TABLE `type_user` (
  `COD_TYPE_USER` int(1) NOT NULL COMMENT 'Codigo tipo de usuario',
  `NAME_TYPE_USER` varchar(20) NOT NULL COMMENT 'Nombre tipo de usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `type_user`
--

INSERT INTO `type_user` (`COD_TYPE_USER`, `NAME_TYPE_USER`) VALUES
(1, 'Cliente'),
(2, 'Trabajador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `RUT` int(8) NOT NULL COMMENT 'RUN',
  `DV` text COMMENT 'Digito Verificador',
  `NAME` text NOT NULL COMMENT 'Nombre',
  `LAST_NAME` text NOT NULL COMMENT 'Apellido',
  `DIRECTION` text NOT NULL COMMENT 'Direccion',
  `COMMUNE` int(11) NOT NULL COMMENT 'Comuna',
  `EMAIL` text NOT NULL COMMENT 'Correo Electronico',
  `PASSWORD` varchar(255) NOT NULL COMMENT 'Contraseña del usuario',
  `TYPE_USER` int(1) NOT NULL COMMENT 'Tipo de usuario',
  `RATING` int(1) DEFAULT NULL COMMENT 'Calificacion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`RUT`, `DV`, `NAME`, `LAST_NAME`, `DIRECTION`, `COMMUNE`, `EMAIL`, `PASSWORD`, `TYPE_USER`, `RATING`) VALUES
(13274933, '7', 'Rene', 'Parada', 'Antonio Varas', 2, 'kldjfjgblsidh@outlook.com', '123', 2, 7),
(19565459, 'k', 'Gustavo', 'Bitterly', 'Conde del Maule', 1, 'gustavo@gmail.com', '123', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `worker`
--

CREATE TABLE `worker` (
  `RUT` int(8) NOT NULL COMMENT 'RUN',
  `COD_PROFESSION` int(2) NOT NULL COMMENT 'Codigo de profesión'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `worker`
--

INSERT INTO `worker` (`RUT`, `COD_PROFESSION`) VALUES
(13274933, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `work_orders`
--

CREATE TABLE `work_orders` (
  `COD_ORDER` int(5) NOT NULL COMMENT 'Codigo de orden',
  `STATE_ORDER` int(1) NOT NULL COMMENT 'Estado de la orden',
  `DATE_ORDER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de orden',
  `CLIENT_RUT` int(8) NOT NULL COMMENT 'RUN del clliente',
  `WORKER_RUT` int(8) NOT NULL COMMENT 'RUN del trabajador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `work_orders`
--

INSERT INTO `work_orders` (`COD_ORDER`, `STATE_ORDER`, `DATE_ORDER`, `CLIENT_RUT`, `WORKER_RUT`) VALUES
(1, 1, '2019-05-17 01:31:41', 19565459, 13274933);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`RUT`);

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID_COMMENT`),
  ADD KEY `CLIENT_RUT` (`CLIENT_RUT`,`WORKER_RUT`),
  ADD KEY `WORKER_RUT` (`WORKER_RUT`);

--
-- Indices de la tabla `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`COD_COMUNNE`);

--
-- Indices de la tabla `parameter_orders`
--
ALTER TABLE `parameter_orders`
  ADD PRIMARY KEY (`COD_STATE`);

--
-- Indices de la tabla `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`COD_PROFESSION`);

--
-- Indices de la tabla `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`COD_TYPE_USER`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`RUT`),
  ADD KEY `COMMUNE` (`COMMUNE`),
  ADD KEY `RATING` (`RATING`),
  ADD KEY `TYPE_USER` (`TYPE_USER`);

--
-- Indices de la tabla `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`RUT`),
  ADD KEY `COD_PROFESSION` (`COD_PROFESSION`);

--
-- Indices de la tabla `work_orders`
--
ALTER TABLE `work_orders`
  ADD PRIMARY KEY (`COD_ORDER`),
  ADD KEY `STATE_ORDER` (`STATE_ORDER`),
  ADD KEY `CLIENT_RUT` (`CLIENT_RUT`),
  ADD KEY `WORKER_RUT` (`WORKER_RUT`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `ID_COMMENT` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID de comentario', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `commune`
--
ALTER TABLE `commune`
  MODIFY `COD_COMUNNE` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo de comuna', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `parameter_orders`
--
ALTER TABLE `parameter_orders`
  MODIFY `COD_STATE` int(1) NOT NULL AUTO_INCREMENT COMMENT 'Codigo de orden', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `professions`
--
ALTER TABLE `professions`
  MODIFY `COD_PROFESSION` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Codigo de la profesión', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `type_user`
--
ALTER TABLE `type_user`
  MODIFY `COD_TYPE_USER` int(1) NOT NULL AUTO_INCREMENT COMMENT 'Codigo tipo de usuario', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `work_orders`
--
ALTER TABLE `work_orders`
  MODIFY `COD_ORDER` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Codigo de orden', AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`RUT`) REFERENCES `user` (`RUT`);

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`WORKER_RUT`) REFERENCES `worker` (`RUT`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`CLIENT_RUT`) REFERENCES `client` (`RUT`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`COMMUNE`) REFERENCES `commune` (`COD_COMUNNE`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`TYPE_USER`) REFERENCES `type_user` (`COD_TYPE_USER`);

--
-- Filtros para la tabla `worker`
--
ALTER TABLE `worker`
  ADD CONSTRAINT `worker_ibfk_1` FOREIGN KEY (`COD_PROFESSION`) REFERENCES `professions` (`COD_PROFESSION`),
  ADD CONSTRAINT `worker_ibfk_2` FOREIGN KEY (`RUT`) REFERENCES `user` (`RUT`);

--
-- Filtros para la tabla `work_orders`
--
ALTER TABLE `work_orders`
  ADD CONSTRAINT `work_orders_ibfk_1` FOREIGN KEY (`CLIENT_RUT`) REFERENCES `client` (`RUT`),
  ADD CONSTRAINT `work_orders_ibfk_2` FOREIGN KEY (`WORKER_RUT`) REFERENCES `worker` (`RUT`),
  ADD CONSTRAINT `work_orders_ibfk_3` FOREIGN KEY (`STATE_ORDER`) REFERENCES `parameter_orders` (`COD_STATE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
