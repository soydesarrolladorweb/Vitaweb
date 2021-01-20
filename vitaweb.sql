-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2021 a las 15:52:29
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `centrocosto`
--

CREATE TABLE `centrocosto` (
  `id` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ceco` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `centrocosto`
--

INSERT INTO `centrocosto` (`id`, `codigo`, `nombre`, `fecha_ceco`) VALUES
(1, '10101001', 'PENICILINICO PL1', '2020-10-24 00:38:11'),
(2, '10101002', 'PENICILINICO ELU PL1', '2020-10-24 00:38:11'),
(3, '10101003', 'MANO DE OBRA DIRECTA PL1', '2020-10-24 00:38:11'),
(4, '10101004', 'MANO DE OBRA INDIRECTA PL1', '2020-10-24 00:38:11'),
(5, '10101005', 'ADMINISTRACION PL1', '2020-10-24 00:38:11'),
(6, '10102001', 'MICRODOSIFICADOS', '2020-10-24 00:38:11'),
(7, '10102002', 'MANO DE OBRA DIRECTA PL2', '2020-10-24 00:38:11'),
(8, '10102003', 'MANO DE OBRA INDIRECTA PL2', '2020-10-24 00:38:11'),
(9, '10102004', 'ADMINISTRACION PL2', '2020-10-24 00:38:11'),
(10, '10103001', 'KETAN AMPOLLA 1', '2020-10-24 00:38:11'),
(11, '10103002', 'KETAN AMPOLLA 2 Y 3', '2020-10-24 00:38:11'),
(12, '10103003', 'KETAN VIALES', '2020-10-24 00:38:11'),
(13, '10103004', 'ALTECH', '2020-10-24 00:38:11'),
(14, '10103005', 'ACONDICIONAMIENTO MANUAL', '2020-10-24 00:38:11'),
(15, '10103006', 'CODIFICADO Y TERMOENCOGIDO', '2020-10-24 00:38:11'),
(16, '10103007', 'MANO DE OBRA DIRECTA PL4', '2020-10-24 00:38:11'),
(17, '10103008', 'MANO DE OBRA INDIRECTA PL4', '2020-10-24 00:38:11'),
(18, '10103009', 'ADMINISTRACION PL4', '2020-10-24 00:38:11'),
(19, '10104001', 'CEFALOSPORINOS', '2020-10-24 00:38:11'),
(20, '10104002', 'MANO DE OBRA DIRECTA PL6', '2020-10-24 00:38:11'),
(21, '10104003', 'MANO DE OBRA INDIRECTA PL6', '2020-10-24 00:38:11'),
(22, '10104004', 'ADMINISTRACION PL6', '2020-10-24 00:38:11'),
(23, '10105001', 'AMPOLLETAS ROTA', '2020-10-24 00:38:11'),
(24, '10105002', 'CONTROL OPTICO', '2020-10-24 00:38:11'),
(25, '10105003', 'LIOFILIZADORES MAX', '2020-10-24 00:38:11'),
(26, '10105004', 'LIOF ZIRBUS', '2020-10-24 00:38:11'),
(27, '10105005', 'LIQUIDO VIAL', '2020-10-24 00:38:11'),
(28, '10105006', 'OFTALMICOS', '2020-10-24 00:38:11'),
(29, '10105007', 'MANO DE OBRA DIRECTA PL8', '2020-10-24 00:38:11'),
(30, '10105008', 'MANO DE OBRA INDIRECTA PL8', '2020-10-24 00:38:11'),
(31, '10105009', 'ADMINISTRACION PL8', '2020-10-24 00:38:11'),
(32, '10105010', 'JERINGAS PRELLENADAS', '2020-10-24 00:38:11'),
(33, '10105011', 'RUEDAS FABRICACION MOD', '2020-10-24 00:38:11'),
(34, '10201001', 'MUESTRAS DE CALIDAD PLANTA 8', '2020-10-24 00:38:11'),
(35, '10201002', 'ANALISIS FISICOQUIMICO', '2020-10-24 00:38:11'),
(36, '10201003', 'ANALISIS MICROBIOLOGICO', '2020-10-24 00:38:11'),
(37, '10201004', 'INSPECCION DE MATERIALES', '2020-10-24 00:38:11'),
(38, '10201005', 'ESTABILIDADES Y VALIDACIONES', '2020-10-24 00:38:11'),
(39, '10201006', 'DISPONIBLE', '2020-10-24 00:38:11'),
(40, '10201007', 'ADMINISTRACION CALIDAD', '2020-10-24 00:38:11'),
(41, '10301001', 'MANTENIMIENTO PL1', '2020-10-24 00:38:11'),
(42, '10301002', 'MANTENIMIENTO PL2', '2020-10-24 00:38:11'),
(43, '10301003', 'MANTENIMIENTO PL4', '2020-10-24 00:38:11'),
(44, '10301004', 'MANTENIMIENTO PL6', '2020-10-24 00:38:11'),
(45, '10301005', 'MANTENIMIENTO PL8', '2020-10-24 00:38:11'),
(46, '10301006', 'MANTENIMIENTO CEDI', '2020-10-24 00:38:11'),
(47, '10301007', 'MANTENIMIENTO CALIDAD', '2020-10-24 00:38:11'),
(48, '10301008', 'GESTION AMBIENTAL', '2020-10-24 00:38:11'),
(49, '10301009', 'COLECTOR MTTO PL4', '2020-10-24 00:38:11'),
(50, '10301010', 'COLECTOR MTTO PL8', '2020-10-24 00:38:11'),
(51, '10401001', 'GESTION CALIDAD', '2020-10-24 00:38:11'),
(52, '10401002', 'MEJORAMIENTO CONTINUO', '2020-10-24 00:38:11'),
(53, '10401003', 'INSPECCIONAMIENTO CALIDAD', '2020-10-24 00:38:11'),
(54, '10401004', 'METROLOGIA', '2020-10-24 00:38:11'),
(55, '10401005', 'ESTABILIDADES', '2020-10-24 00:38:11'),
(56, '10401006', 'VALIDACIONES', '2020-10-24 00:38:11'),
(57, '10401007', 'ADMINISTRACION ASEGURAMIENTO CALIDAD', '2020-10-24 00:38:11'),
(58, '10401008', 'DIRECCION TECNICA', '2020-10-24 00:38:11'),
(59, '10501001', 'DIRECCION DE OPERACIONES', '2020-10-24 00:38:11'),
(60, '10501002', 'ING DE PROCESOS', '2020-10-24 00:38:11'),
(61, '10501003', 'INGENIERIA', '2020-10-24 00:38:11'),
(62, '10501004', 'GASTOS ADMON GENERAL INDUST', '2020-10-24 00:38:11'),
(63, '10501006', 'SISOMA', '2020-10-24 00:38:11'),
(64, '10501007', 'COVID PRD', '2020-10-24 00:38:11'),
(65, '10601001', 'CADENA DE ABASTENCIMIENTO', '2020-10-24 00:38:11'),
(66, '10601002', 'COMERCIO EXTERIOR', '2020-10-24 00:38:11'),
(67, '10601003', 'GESTION DE DEMANDA', '2020-10-24 00:38:11'),
(68, '10601004', 'PICKING', '2020-10-24 00:38:11'),
(69, '10601005', 'EXPORTACIONES', '2020-10-24 00:38:11'),
(70, '10602001', 'LOGISTICA 1', '2020-10-24 00:38:11'),
(71, '10602002', 'LOGISTICA 2', '2020-10-24 00:38:11'),
(72, '10602003', 'LOGISTICA 4', '2020-10-24 00:38:11'),
(73, '10602004', 'LOGISTICA 6', '2020-10-24 00:38:11'),
(74, '10602005', 'LOGISTICA 8', '2020-10-24 00:38:11'),
(75, '10701001', ' ASUNTOS REGULATORIOS', '2020-10-24 00:38:11'),
(76, '20101001', 'MAQUILA PL1', '2020-10-24 00:38:11'),
(77, '20102001', 'MAQUILA PL2', '2020-10-24 00:38:11'),
(78, '20103001', 'MAQUILA PL3', '2020-10-24 00:38:11'),
(79, '20103002', 'MAQUILA MOD PL3', '2020-10-24 00:38:11'),
(80, '20103003', 'MAQUILA MOI PL3', '2020-10-24 00:38:11'),
(81, '20104001', 'MAQUILA ACONDICIONAMIENTO', '2020-10-24 00:38:11'),
(82, '20105001', 'MAQUILA PL6', '2020-10-24 00:38:11'),
(83, '20106001', 'MAQUILA PL8', '2020-10-24 00:38:11'),
(84, '20201001', 'MAQUILA ADMON', '2020-10-24 00:38:11'),
(85, '20201002', 'MAQUILA COMERCIAL', '2020-10-24 00:38:11'),
(86, '20201003', 'DESMONTE PLANTA 3', '2020-10-24 00:38:11'),
(87, '20301001', 'MAQUILA MANTENIMIENTO', '2020-10-24 00:38:11'),
(88, '20401001', 'MAQUILA CALIDAD', '2020-10-24 00:38:11'),
(89, '20501001', 'MAQUILA ASEG CALIDAD', '2020-10-24 00:38:11'),
(90, '20601001', 'MAQUILA LOGISTICA', '2020-10-24 00:38:11'),
(91, '30101001', 'DIRECCION MEDICA', '2020-10-24 00:38:11'),
(92, '30101002', 'FARMACO VIGILANCIA', '2020-10-24 00:38:11'),
(93, '30201001', 'GERENCIA MERCADEO', '2020-10-24 00:38:11'),
(94, '30201002', 'ECONOMISTA DE SALUD', '2020-10-24 00:38:11'),
(95, '30201003', 'INVERSION MERCADEO COLOMBIA', '2020-10-24 00:38:11'),
(96, '30202001', 'INTELIGENCIA DE MERCADOS', '2020-10-24 00:38:11'),
(97, '30301001', 'CAPACITACION', '2020-10-24 00:38:11'),
(98, '30401001', 'DIRECCION COMERCIAL', '2020-10-24 00:38:11'),
(99, '30401002', 'REGIONAL CENTRO', '2020-10-24 00:38:11'),
(100, '30401003', 'REGIONAL COSTA', '2020-10-24 00:38:11'),
(101, '30401004', 'REGIONAL ANTIOQUIA', '2020-10-24 00:38:11'),
(102, '30401005', 'REGIONAL SUR OCCIDENTE', '2020-10-24 00:38:11'),
(103, '30401006', 'REGIONAL SANTANDERES', '2020-10-24 00:38:11'),
(104, '30401007', 'REGIONAL EJE CAFETERO', '2020-10-24 00:38:11'),
(105, '30402001', 'GERENCIA ACCESO', '2020-10-24 00:38:11'),
(106, '30402002', 'REGIONAL CENTRO', '2020-10-24 00:38:11'),
(107, '30402003', 'REGIONAL SUR-OCCIDENTE', '2020-10-24 00:38:11'),
(108, '30402004', 'REGIONAL ANTIOQUIA', '2020-10-24 00:38:11'),
(109, '30501001', 'SERVICIO AL CLIENTE', '2020-10-24 00:38:11'),
(110, '30601001', 'ADMON DIRECCION INSTITUCIONAL COLOMBIA', '2020-10-24 00:38:11'),
(111, '30602001', 'ADMON VENTAS COLOMBIA', '2020-10-24 00:38:11'),
(112, '30602002', 'OPCIONAL-DISPONIBLE', '2020-10-24 00:38:11'),
(113, '30701001', 'LOGISTICA', '2020-10-24 00:38:11'),
(114, '40101001', 'REP. VENTAS - MEDICOS', '2020-10-24 00:38:11'),
(115, '40101002', 'DIRECCION COMERCIAL', '2020-10-24 00:38:11'),
(116, '40201001', 'MERCADEO TRADE', '2020-10-24 00:38:11'),
(117, '40201002', 'DIRECCION MEDICA TRADE', '2020-10-24 00:38:11'),
(118, '40201003', 'FARMACO VIGILANCIA TRADE', '2020-10-24 00:38:11'),
(119, '40201004', 'INTELIGENCIA DE MERCADOS TRADE', '2020-10-24 00:38:11'),
(120, '40201005', 'CAPACITACION TRADE', '2020-10-24 00:38:11'),
(121, '40201006', 'INVERSION MERCADEO TRADE', '2020-10-24 00:38:11'),
(122, '40301003', 'LOGISTICA TRADE', '2020-10-24 00:38:11'),
(123, '50101001', 'ADMON COMERCIAL INTERNACIONAL', '2020-10-24 00:38:11'),
(124, '50101002', 'DIRECCION MEDICA INTERNACIONAL', '2020-10-24 00:38:11'),
(125, '50101003', 'FARMACO VIGILANCIA INTERNACIONAL', '2020-10-24 00:38:11'),
(126, '50101004', 'INTELIGENCIA DE MERCADOS INTERNACIONAL', '2020-10-24 00:38:11'),
(127, '50101005', 'CAPACITACION INTERNACIONAL', '2020-10-24 00:38:11'),
(128, '50101006', 'INVERSION MERCADEO INTERNACIONAL', '2020-10-24 00:38:11'),
(129, '50201001', 'REGULATORIO INTERNACIONAL', '2020-10-24 00:38:11'),
(130, '50301001', 'VENTAS NUEVOS MERCADOS', '2020-10-24 00:38:11'),
(131, '50301002', 'HONDURAS', '2020-10-24 00:38:11'),
(132, '50301003', 'BOLIVIA', '2020-10-24 00:38:11'),
(133, '50301004', 'YEMEN', '2020-10-24 00:38:11'),
(134, '50301005', 'REP DOMINICANA', '2020-10-24 00:38:11'),
(135, '50301006', 'NICARAGUA', '2020-10-24 00:38:11'),
(136, '50301007', 'VENEZUELA', '2020-10-24 00:38:11'),
(137, '50301008', 'FILIPINAS', '2020-10-24 00:38:11'),
(138, '50301009', 'PARAGUAY', '2020-10-24 00:38:11'),
(139, '50301010', 'EL SALVADOR', '2020-10-24 00:38:11'),
(140, '50301011', 'AZERBAIYAN', '2020-10-24 00:38:11'),
(141, '50301012', 'BELICE', '2020-10-24 00:38:11'),
(142, '50301013', 'CUBA', '2020-10-24 00:38:11'),
(143, '50401001', 'ADMON COSTA RICA', '2020-10-24 00:38:11'),
(144, '50401002', 'ADMON VENTAS COSTA RICA', '2020-10-24 00:38:11'),
(145, '50401003', 'COMERCIAL COSTA RICA', '2020-10-24 00:38:11'),
(146, '50401004', 'REGULATORIO COSTA RICA', '2020-10-24 00:38:11'),
(147, '50402001', 'ADMON VENTAS PANAMA', '2020-10-24 00:38:11'),
(148, '50402002', 'COMERCIAL PANAMA', '2020-10-24 00:38:11'),
(149, '50402003', 'REGULATORIO PANAMA', '2020-10-24 00:38:11'),
(150, '50500001', 'LOGISTICA PANAMA', '2020-10-24 00:38:11'),
(151, '50501001', 'LOGISTICA COSTA RICA', '2020-10-24 00:38:11'),
(152, '50502001', 'LOGISTICA GUATEMALA', '2020-10-24 00:38:11'),
(153, '50503001', 'LOGISTICA VENEZUELA', '2020-10-24 00:38:11'),
(154, '50504001', 'LOGISTICA ECUADOR', '2020-10-24 00:38:11'),
(155, '50505001', 'LOGISTICA PERU', '2020-10-24 00:38:11'),
(156, '50506001', 'LOGISTICA CHILE', '2020-10-24 00:38:11'),
(157, '50507001', 'LOGISTICA BOLIVIA', '2020-10-24 00:38:11'),
(158, '50508001', 'LOGISTICA MEXICO', '2020-10-24 00:38:11'),
(159, '50509001', 'LOGISTICA NUEVOS MERCADOS', '2020-10-24 00:38:11'),
(160, '80101001', 'PRESIDENCIA', '2020-10-24 00:38:11'),
(161, '80101002', 'ASESORIA INTERNACIONAL', '2020-10-24 00:38:11'),
(162, '80102001', 'CONTROL DE GESTION', '2020-10-24 00:38:11'),
(163, '80103001', 'CONTRALORIA', '2020-10-24 00:38:11'),
(164, '80104001', 'BUSINESS DEVELOPMENT', '2020-10-24 00:38:11'),
(165, '80104002', 'INNOVA', '2020-10-24 00:38:11'),
(166, '80201001', 'VICEPRESIDENCIA', '2020-10-24 00:38:11'),
(167, '80201002', 'RELACIONES PUBLICAS', '2020-10-24 00:38:11'),
(168, '80301001', 'ASUNTOS REGULATORIOS', '2020-10-24 00:38:11'),
(169, '80401001', 'I + D + I', '2020-10-24 00:38:11'),
(170, '80500002', 'CONTABILIDAD', '2020-10-24 00:38:11'),
(171, '80500003', 'IMPUESTOS', '2020-10-24 00:38:11'),
(172, '80500004', 'NOMINA', '2020-10-24 00:38:11'),
(173, '80501001', 'GERENCIA DESARROLLO HUMANO', '2020-10-24 00:38:11'),
(174, '80501002', 'GESTION HUMANA', '2020-10-24 00:38:11'),
(175, '80501003', 'SEGURIDAD Y SALUD EN EL TRABAJO', '2020-10-24 00:38:11'),
(176, '80501004', 'SERVICIOS GENERALES ADMON', '2020-10-24 00:38:11'),
(177, '80502002', 'TI INFRAESTRUCTURA', '2020-10-24 00:38:11'),
(178, '80502003', 'TI PROCESOS SAP', '2020-10-24 00:38:11'),
(179, '80503001', 'JURIDICO', '2020-10-24 00:38:11'),
(180, '80504002', 'TESORERIA', '2020-10-24 00:38:11'),
(181, '80504003', 'CARTERA', '2020-10-24 00:38:11'),
(182, '80504004', 'GASTOS FINANCIEROS', '2020-10-24 00:38:11'),
(183, '80506001', 'PLANEACION FINANCIERA', '2020-10-24 00:38:11'),
(184, '80507001', 'COMPRAS', '2020-10-24 00:38:11'),
(185, '80508001', 'DIRECCION FINANCIERA', '2020-10-24 00:38:11'),
(186, '80509001', 'GASTOS ADMON GENERAL', '2020-10-24 00:38:11'),
(187, '80509002', 'FUSION', '2020-10-24 00:38:11'),
(188, '80509003', 'CUENTAS DE VARIACION', '2020-10-24 00:38:11'),
(189, '80509004', 'PROYECTO 1', '2020-10-24 00:38:11'),
(190, '80509005', 'HEMODERIVADOS', '2020-10-24 00:38:11');

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
-- Estructura de tabla para la tabla `firmas`
--

CREATE TABLE `firmas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `firmas`
--

INSERT INTO `firmas` (`id`, `id_usuario`, `imagen`, `fecha`) VALUES
(1, 20782, 'vistas/img/firmas/20782/601.png', '2020-10-30 17:22:09'),
(2, 20780, 'vistas/img/firmas/20780/424.png', '2021-01-15 17:15:35');

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
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `horario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_horario` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `horario`, `fecha_horario`) VALUES
(1, 'Rotativo Trabajara por turnos tendrá recargos y horas extra', '2020-10-16 14:27:02'),
(2, 'Administrativo Sin recargos ni horas extra', '2020-10-16 14:29:35'),
(4, 'Administrativo Operativo Siendo administrativo tendrá recargos y horas extra', '2020-10-16 14:47:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` datetime DEFAULT current_timestamp(),
  `formacion` text COLLATE utf8_spanish_ci NOT NULL,
  `otra_formacion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_estado` timestamp NOT NULL DEFAULT current_timestamp(),
  `exp_lab` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `tiempo_exp` text COLLATE utf8_spanish_ci NOT NULL,
  `ciudad_labor` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo_salario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `monto_salario` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_contrato` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `otra_duracion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `motivo` text COLLATE utf8_spanish_ci NOT NULL,
  `cargo_solicitado` text COLLATE utf8_spanish_ci NOT NULL,
  `area_personal` text COLLATE utf8_spanish_ci NOT NULL,
  `codigo_ceco` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `horario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_ingreso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_recepcion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_contratacion` date NOT NULL,
  `nombre_candidato` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario_sap` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `experiencia_en` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `ti_pc` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `pc_observaciones` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ti_telefono` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `tel_observaciones` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ti_correo` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo_observaciones` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ti_observaciones` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `permisos` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre_ceco` text COLLATE utf8_spanish_ci NOT NULL,
  `firma_solicitante` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre_director` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `firma_director` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre_df` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `firma_df` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id`, `ciudad`, `fecha`, `formacion`, `otra_formacion`, `genero`, `fecha_estado`, `exp_lab`, `tiempo_exp`, `ciudad_labor`, `tipo_salario`, `monto_salario`, `tipo_contrato`, `otra_duracion`, `observaciones`, `id_usuario`, `motivo`, `cargo_solicitado`, `area_personal`, `codigo_ceco`, `horario`, `tipo_ingreso`, `estatus`, `fecha_recepcion`, `fecha_contratacion`, `nombre_candidato`, `usuario_sap`, `experiencia_en`, `ti_pc`, `pc_observaciones`, `ti_telefono`, `tel_observaciones`, `ti_correo`, `correo_observaciones`, `ti_observaciones`, `permisos`, `codigo`, `nombre_ceco`, `firma_solicitante`, `nombre_director`, `firma_director`, `nombre_df`, `firma_df`) VALUES
(1, 'Bogotá', '2020-12-21 12:28:30', 'Tecnologo', '', 'Indiferente', '2020-12-21 17:28:30', 'Si', '18 Meses', 'Bogotá', 'Otro', '2000000', 'Indefinido', '', 'Pruebas de edición', 20782, 'Punto Nuevo', 'Ingeniero de software', 'Administración', '10102004', 'Administrativo Sin recargos ni horas extra', 'Nuevo', '', '2020-12-21 17:28:30', '0000-00-00', '', '', 'Ingenieria de requerimientos, analisis para el modelaje de datos y desarrollo en varios lenguajes de programación orientado a objetos.', 'Si', 'Pruebas de edición', 'No', 'Pruebas de edición', 'Si', 'Pruebas de edición', 'Pruebas de edición', '', 1, 'ADMINISTRACION PL2', '', '', '', '', ''),
(2, 'Barranquilla', '2020-12-22 08:37:53', 'Bachiller', '', 'Indiferente', '2020-12-22 13:37:53', 'Si', '24 Meses', 'Barranquilla', 'Otro', '2000000', 'Indefinido', '', 'Observaciones departe del jefe del área', 20782, 'Punto Nuevo', 'Vendedor', 'Comercial', '10102004', 'Administrativo Operativo Siendo administrativo tendrá recargos y horas extra', 'Reingreso', '', '2020-12-22 13:37:53', '0000-00-00', '', '', '', 'No', 'Observaciones pc', 'No', 'Observaciones Teléfono', 'No', 'Observaciones Correo', 'Observaciones TI', '', 2, 'ADMINISTRACION PL2', '', '', '', '', ''),
(3, 'Sopo', '2020-12-22 08:39:51', 'Profesional', '', 'Indiferente', '2020-12-22 13:39:51', 'Si', '36 Meses', 'Sopo', 'Otro', '4000000', 'Indefinido', '', '', 20782, 'Ampliación de infraestructura', 'Ingeniero Químico', 'Mano de obra directa', '10101003', 'Rotativo Trabajara por turnos tendrá recargos y horas extra', 'Nuevo', '', '2020-12-22 13:39:51', '0000-00-00', '', '', '', 'No', '', 'No', '', 'No', '', '', '', 3, 'MANO DE OBRA DIRECTA PL1', '', '', '', '', ''),
(4, 'Cartagena', '2020-12-29 13:24:38', 'Posgrado', 'Doctorado en pruebas', 'Indiferente', '2020-12-29 18:24:38', 'Si', '48 Meses', 'Cartagena', 'Otro', '5000000', 'Indefinido', '', 'Observaciones departe del jefe del área', 20782, 'Solicitud de prueba', 'Prueba', 'Mano de obra indirecta', '10103009', 'Administrativo Sin recargos ni horas extra', 'Temporal', '', '2020-12-29 18:24:38', '0000-00-00', '', '', 'Solicitud de prueba', 'No', 'Observaciones pc', 'No', 'Observaciones Teléfono', 'No', 'Observaciones Correo', 'Observaciones TI', '', 4, 'ADMINISTRACION PL4', '', '', '', '', ''),
(5, 'Bogotá', '2021-01-07 19:57:22', 'Posgrado', 'Maestria', 'Indiferente', '2021-01-08 00:57:22', 'Si', '36 Meses', 'Bogotá', 'Otro', '2000000', 'Indefinido', '', 'Pruebas de edición', 20782, 'Reemplazo por vacaciones', 'Pruebas de edición', 'Administración', '10101005', 'Rotativo Trabajara por turnos tendrá recargos y horas extra', 'Nuevo', '', '2021-01-08 00:57:22', '0000-00-00', '', '', 'Si', 'Si', 'Pruebas de edición', 'No', 'Pruebas de edición', 'Si', 'Pruebas de edición', 'Pruebas de edición', '', 5, 'ADMINISTRACION PL1', '', '', '', '', ''),
(6, 'Cali', '2021-01-15 13:20:25', 'Tecnologo', 'Ninguna', 'Indiferente', '2021-01-15 18:20:25', 'Si', '36 Meses', 'Cali', 'Otro', '3500000', 'Indefinido', 'Ninguno', 'Observaciones FB', 20782, 'Prueba6 Motivo Solicitud', 'Prueba6', 'Mano de obra directa', '10301007', 'Administrativo Operativo Siendo administrativo tendrá recargos y horas extra', 'Temporal', '', '2021-01-15 18:20:25', '0000-00-00', '', '', 'Observaciones FB', 'Si', 'Observaciones FB PC', 'No', 'Observaciones FB PHONE', 'Si', 'Observaciones FB EMAIL', 'Observaciones FB TI', '', 6, 'MANTENIMIENTO CALIDAD', '', '', '', '', ''),
(9, 'Cartagena', '2021-01-18 14:09:11', 'Profesional', 'Ninguna', 'Indiferente', '2021-01-18 19:09:11', 'Si', '38 Meses', 'Cartagena', 'Otro', '5000000', 'Fijo a tres meses', 'Ninguno', 'Prueba Dato7', 20782, 'Prueba Dato 7', 'Prueba Dato', 'Mano de obra directa', '10102002', 'Administrativo Sin recargos ni horas extra', 'Nuevo', '', '2021-01-18 19:09:11', '0000-00-00', '', '', 'Prueba Dato7', 'Si', 'Prueba Dato7', 'Si', 'Prueba Dato7', 'Si', 'Prueba Dato7', 'Prueba Dato7', '', 7, 'MANO DE OBRA DIRECTA PL2', '', '', '', '', '');

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
  `ingreso` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_tipo` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tiposdeingreso`
--

INSERT INTO `tiposdeingreso` (`id`, `ingreso`, `fecha_tipo`) VALUES
(1, 'Nuevo', '2020-10-06 20:55:51'),
(2, 'Temporal a directo', '2020-10-06 22:15:36'),
(3, 'Reingreso', '2020-10-05 21:49:31'),
(4, 'Reemplazo', '2020-10-05 21:49:41'),
(10, 'Temporal', '2020-10-06 23:20:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `iduser` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `area` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp(),
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` bigint(50) DEFAULT NULL,
  `solicitudes` int(11) DEFAULT NULL,
  `ultima_solicitud` int(11) DEFAULT NULL,
  `ultimologin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`iduser`, `nombre`, `correo`, `usuario`, `password`, `perfil`, `area`, `estado`, `fecha`, `foto`, `telefono`, `solicitudes`, `ultima_solicitud`, `ultimologin`) VALUES
(1, 'Fabian Barrera', 'pasante.ti@vitalis.com.co', '20782', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'Administrador', 'Administrativa y Financiera', 1, '2020-10-08 18:47:31', 'vistas/img/usuarios/20782/654.jpg', 3012764644, 0, NULL, '2021-01-20 09:50:46'),
(2, 'Maria pruebas', 'maria@vitalis.com.co', '20780', '$2a$07$asxx54ahjppf45sd87a5auJnyEWu2I/LGrsdLfMawEZGMwUWnuJ6a', 'Gerente', 'Comercial', 1, '2020-10-08 18:49:16', 'vistas/img/usuarios/20780/428.png', 3102212121, NULL, NULL, NULL),
(3, 'Javier pruebas', 'javierPruebas@vitalis.com.co', '20900', '$2a$07$asxx54ahjppf45sd87a5auNGiMUhuUlqQq8VydYmBpTcUEAvNN2Fe', 'Dirección Financiera', 'Operaciones', 1, '2020-10-08 18:50:19', 'vistas/img/usuarios/20900/696.png', 3102222222, NULL, NULL, NULL),
(4, 'Magreth Angulo', 'magreth.angulo@vitalis.com.co', '20500', '$2a$07$asxx54ahjppf45sd87a5au3aeaogtcEUOK/RtUOxpPOONPHkGI/cq', 'Jefe de Area', 'Alta Dirección', 1, '2020-10-08 18:51:38', 'vistas/img/usuarios/20500/515.png', 3102232323, NULL, NULL, NULL),
(5, 'Duvan Pruebas', 'duvan.ti@vitalis.com.co', '20600', '$2a$07$asxx54ahjppf45sd87a5auTORkrD.KY3EqoE65wNdlCJFoiGJ8FyK', 'Desarrollo Humano', 'Desarrollo de Negocios', 1, '2020-10-08 18:53:23', 'vistas/img/usuarios/20600/137.jpg', 3102242424, NULL, NULL, NULL),
(6, 'Prueba asignación firma', 'firma@vitalis.com.co', '20601', '$2a$07$asxx54ahjppf45sd87a5auND1/VMhsMBheheFBw1m3SXgZtH9DpC2', 'Jefe de Area', 'Operaciones', 1, '2020-10-14 18:23:54', 'vistas/img/usuarios/20601/931.png', 3214556698, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `firmas`
--
ALTER TABLE `firmas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
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
  ADD KEY `usuario` (`usuario`(1024));

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centrocosto`
--
ALTER TABLE `centrocosto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT de la tabla `control_documento`
--
ALTER TABLE `control_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `firmas`
--
ALTER TABLE `firmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tics`
--
ALTER TABLE `tics`
  MODIFY `idtics` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tiposdeingreso`
--
ALTER TABLE `tiposdeingreso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
