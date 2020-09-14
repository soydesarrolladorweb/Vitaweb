-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2020 a las 01:18:19
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vitaweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areapersonal`
--

CREATE TABLE `areapersonal` (
  `id` int(11) NOT NULL,
  `descriparea` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_area` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- Error leyendo datos de la tabla vitaweb.areapersonal: #1064 - Algo está equivocado en su sintax cerca 'FROM `vitaweb`.`areapersonal`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcargo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_cargo` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centrocosto`
--

CREATE TABLE `centrocosto` (
  `id` int(11) NOT NULL,
  `codigo` bigint(20) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ceco` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracioncorreo`
--

CREATE TABLE `configuracioncorreo` (
  `correoSaliente` varchar(75) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `host` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SMTPDebug` int(11) DEFAULT NULL,
  `SMTPAuth` tinyint(1) DEFAULT NULL,
  `Puerto` int(11) DEFAULT NULL,
  `clave` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SMTPSeguridad` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_documento`
--

CREATE TABLE `control_documento` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `firma_larga` text COLLATE utf8_spanish_ci NOT NULL,
  `firma_corta` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato`
--

CREATE TABLE `formato` (
  `area_formato` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `version` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `vigencia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_formato` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `descriphorario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_horario` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- Error leyendo datos de la tabla vitaweb.horario: #1064 - Algo está equivocado en su sintax cerca 'FROM `vitaweb`.`horario`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo`
--

CREATE TABLE `motivo` (
  `id` int(11) NOT NULL,
  `descripmotivo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_motivo` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `formacion` text COLLATE utf8_spanish_ci NOT NULL,
  `otro_formacion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_estado` timestamp NOT NULL DEFAULT current_timestamp(),
  `exp_lab` tinyint(4) NOT NULL DEFAULT 0,
  `tiempo_exp` text COLLATE utf8_spanish_ci NOT NULL,
  `ciudad_labor` text COLLATE utf8_spanish_ci NOT NULL,
  `salario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `otro_salario` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipocontrato` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `motivo` text COLLATE utf8_spanish_ci NOT NULL,
  `cargo_solicitado` text COLLATE utf8_spanish_ci NOT NULL,
  `area_personal` text COLLATE utf8_spanish_ci NOT NULL,
  `codigo_ceco` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `horario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_ingreso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_recepcion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_contratacion` date NOT NULL,
  `nombre_candidato` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario_sap` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `requiere_experiencia` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `pc_ti` tinyint(4) DEFAULT NULL,
  `observaciones_pc` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_ti` tinyint(4) DEFAULT NULL,
  `observaciones_tel` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_ti` tinyint(4) DEFAULT NULL,
  `observaciones_correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `permisos` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tics`
--

CREATE TABLE `tics` (
  `idtics` int(11) NOT NULL,
  `pc` tinyint(4) NOT NULL DEFAULT 0,
  `pc_observaciones` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` tinyint(4) NOT NULL DEFAULT 0,
  `telefono_observaciones` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` tinyint(4) NOT NULL DEFAULT 0,
  `correo_observaciones` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `observaciones` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposdeingreso`
--

CREATE TABLE `tiposdeingreso` (
  `id` int(11) NOT NULL,
  `descriptipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_tipo` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `iduser` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `area` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp(),
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `firma` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` bigint(50) DEFAULT NULL,
  `ultimologin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`iduser`, `nombre`, `usuario`, `password`, `perfil`, `area`, `estado`, `fecha`, `foto`, `firma`, `telefono`, `ultimologin`) VALUES
(1, 'Fabian Barrera', '20782', '12345', 'Administrador', 'TI', 1, '2020-09-10 17:48:00', '', '', 3007614919, '2020-09-10 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areapersonal`
--
ALTER TABLE `areapersonal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `centrocosto`
--
ALTER TABLE `centrocosto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `control_documento`
--
ALTER TABLE `control_documento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `motivo`
--
ALTER TABLE `motivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tics`
--
ALTER TABLE `tics`
  ADD PRIMARY KEY (`idtics`);

--
-- Indices de la tabla `tiposdeingreso`
--
ALTER TABLE `tiposdeingreso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areapersonal`
--
ALTER TABLE `areapersonal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `centrocosto`
--
ALTER TABLE `centrocosto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `control_documento`
--
ALTER TABLE `control_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `motivo`
--
ALTER TABLE `motivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tics`
--
ALTER TABLE `tics`
  MODIFY `idtics` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tiposdeingreso`
--
ALTER TABLE `tiposdeingreso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
