-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2023 a las 18:30:04
-- Versión del servidor: 8.0.30
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loveyou`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `Id_Foto` int NOT NULL,
  `Foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `Id_Suscripcion` int NOT NULL,
  `Fecha _Inicio` datetime NOT NULL,
  `Fecha _Fin` datetime NOT NULL,
  `Estado_Suscripcion` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo _suscripcion`
--

CREATE TABLE `tipo _suscripcion` (
  `Id_Tp_Sus` int NOT NULL,
  `Nombre _Suscripcion` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Permisos` int NOT NULL,
  `Valor_Suscripcion` decimal(7,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `Id_Tp_U` int NOT NULL,
  `Nombre_tipoUsuario` varchar(15) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int NOT NULL,
  `Nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Apellidos` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Tipo_Identificacion` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Numero_Identificacion` int NOT NULL,
  `Nacionalidad` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Edad` int NOT NULL,
  `Genero` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Telefono` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `Pais` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `Ciudad_Residencia` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `Calle_Principal` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `Calle_Secundaria` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(45) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `Nombre`, `Apellidos`, `Tipo_Identificacion`, `Numero_Identificacion`, `Nacionalidad`, `Edad`, `Genero`, `Telefono`, `Pais`, `Ciudad_Residencia`, `Calle_Principal`, `Calle_Secundaria`, `Email`, `Password`) VALUES
(1, 'maria', 'vega', 'cedula', 232554, 'colombiana', 20, 'femenino', '5685647', 'colombia', 'medellin', 'cra 20 a', '25-10', 'maria@hotmail.com', ''),
(2, 'mariana', 'perez', 'cedula', 1515151, 'colombiana', 30, 'femenino', '55555', 'colombia', 'medellin', 'cra 21 a', '235-10', 'mariana@hotmail.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`Id_Foto`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`Id_Suscripcion`);

--
-- Indices de la tabla `tipo _suscripcion`
--
ALTER TABLE `tipo _suscripcion`
  ADD PRIMARY KEY (`Id_Tp_Sus`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`Id_Tp_U`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `Id_Foto` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  MODIFY `Id_Suscripcion` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo _suscripcion`
--
ALTER TABLE `tipo _suscripcion`
  MODIFY `Id_Tp_Sus` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `Id_Tp_U` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_Usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
