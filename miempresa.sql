-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2018 a las 19:56:14
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miempresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salones`
--

CREATE TABLE `salones` (
  `Id` int(11) NOT NULL,
  `Razon_social` varchar(20) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `URL_Logo` varchar(200) DEFAULT NULL,
  `URL_Foto1` varchar(200) DEFAULT NULL,
  `URL_Foto2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salones`
--

INSERT INTO `salones` (`Id`, `Razon_social`, `Telefono`, `Direccion`, `Descripcion`, `URL_Logo`, `URL_Foto1`, `URL_Foto2`) VALUES
(1, 'Sinsarabin', '4530702', 'San Martin 684', 'Salón con cancha de futbol, telas, inflables. Con una capacidad para 55 adultos y 30 niños', 'img/logo1.jpg', 'img/foto11.jpg', 'img/foto12.jpg'),
(3, 'A la pipetua', '4546740', 'Mitre 1600', 'salon para 20 personas', 'img/logo2.jpg', 'img/foto21.jpg', 'img/foto22.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `DNI` varchar(10) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`DNI`, `Nombre`, `Apellido`, `Direccion`, `Telefono`, `Email`, `Pass`) VALUES
('236589', 'jose', 'Gimenez', 'mitre 366', '123854', 'jose@gmail.com', '123456'),
('35343298', 'Agostina', 'Benedetti', 'Saavedra 115', '2915711696', 'agos.bene@gmail.com', '123456'),
('456456', 'ddd', 'dddd', 'sdfsdf', '6325441', '', ''),
('555555', 'pepe', 'mujica', 'ggg 123', '58745', 'pepe.mujica@gmail.com', '666666');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `salones`
--
ALTER TABLE `salones`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `salones`
--
ALTER TABLE `salones`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
