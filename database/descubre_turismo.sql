-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2015 a las 13:54:26
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `descubre_turismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `idadministrador` int(11) NOT NULL,
  `adm_email` varchar(45) DEFAULT NULL,
  `adm_password` varchar(45) DEFAULT NULL,
  `adm_estado` tinyint(4) DEFAULT NULL,
  `adm_img` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aturistico`
--

CREATE TABLE IF NOT EXISTS `aturistico` (
  `idaturistico` int(11) NOT NULL,
  `atur_nombre` text,
  `atur_serviciobrindado` text,
  `atur_vacceso` text,
  `atur_transporte` text,
  `atur_ingreso` text,
  `atur_estacionalidad` text,
  `atur_estadoactual` int(11) DEFAULT NULL,
  `stur_recomendaciones` text,
  `stur_reshistorica` text,
  `atur_interes` text,
  `atur_estado` tinyint(1) DEFAULT NULL,
  `idlugar` int(11) NOT NULL,
  `atur_precio` int(11) DEFAULT NULL,
  `tipo_idtipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(11) NOT NULL,
  `cli_nomyape` varchar(90) DEFAULT NULL,
  `cli_sexo` varchar(15) DEFAULT NULL,
  `cli_nacionalidad` varchar(25) DEFAULT NULL,
  `cli_edad` int(11) DEFAULT NULL,
  `cli_correo` varchar(90) DEFAULT NULL,
  `cli_estado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `iddepartamento` varchar(2) NOT NULL,
  `dep_pdescripcion` varchar(85) DEFAULT NULL,
  `dep_estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE IF NOT EXISTS `distrito` (
  `iddistrito` varchar(2) NOT NULL,
  `dis_descripcion` varchar(85) DEFAULT NULL,
  `idprovincia` varchar(2) NOT NULL,
  `iddepartamento` varchar(2) NOT NULL,
  `dis_estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `idevento` int(11) NOT NULL,
  `eve_nombre` varchar(60) DEFAULT NULL,
  `eve_fechainicio` date DEFAULT NULL,
  `eve_fechafin` date DEFAULT NULL,
  `eve_descripcion` text,
  `eve_vacceso` text,
  `eve_caracteristicas` text,
  `eve_estado` tinyint(1) DEFAULT NULL,
  `idlugar` int(11) NOT NULL,
  `eve_precio` int(11) DEFAULT NULL,
  `eve_anio` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `idgaleria` int(11) NOT NULL,
  `gal_nombre` varchar(45) DEFAULT NULL,
  `gal_estado` enum('ADMINISTRADOR','CLIENTE') DEFAULT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  `administrador_idadministrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `idhorario` int(11) NOT NULL,
  `idlugar` int(11) DEFAULT NULL,
  `hor_dia` int(11) DEFAULT NULL,
  `hor_horas` int(11) DEFAULT NULL,
  `lugar_idlugar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospedaje`
--

CREATE TABLE IF NOT EXISTS `hospedaje` (
  `idhospedaje` int(11) NOT NULL,
  `hos_nombre` varchar(40) DEFAULT NULL,
  `hos_descripcion` text,
  `hos_categoria` varchar(25) DEFAULT NULL,
  `hos_estado` tinyint(4) DEFAULT NULL,
  `idlugar` int(11) NOT NULL,
  `hos_precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE IF NOT EXISTS `instituciones` (
  `idnstituciones` int(11) NOT NULL,
  `inst_nombre` varchar(45) DEFAULT NULL,
  `inst_descripcion` text,
  `inst_estado` tinyint(4) DEFAULT NULL,
  `lugar_idlugar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE IF NOT EXISTS `lugar` (
  `idlugar` int(11) NOT NULL,
  `lug_direccion` varchar(45) DEFAULT NULL,
  `lug_latylong` varchar(45) DEFAULT NULL,
  `lug_foto` varchar(90) DEFAULT NULL,
  `lug_telefono` varchar(45) DEFAULT NULL,
  `lug_distrito` varchar(45) DEFAULT NULL,
  `distrito_iddistrito` varchar(2) NOT NULL,
  `distrito_idprovincia` varchar(2) NOT NULL,
  `distrito_iddepartamento` varchar(2) NOT NULL,
  `lug_fechas` varchar(45) DEFAULT NULL,
  `lug_nombre` varchar(100) NOT NULL,
  `lug_tipo` enum('Atractivos','Iglesias','Museos','Casonas','Hospedajes','Restaurantes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mci_sturistico`
--

CREATE TABLE IF NOT EXISTS `mci_sturistico` (
  `idmci_sturistico` int(11) NOT NULL,
  `mci_nombre` varchar(50) DEFAULT NULL,
  `mci_vacceso` text,
  `mci_sbrindados` text,
  `mci_ingreso` text,
  `mci_descripcion` text,
  `mci_tipo` int(11) DEFAULT NULL,
  `mci_estado` tinyint(1) DEFAULT NULL,
  `idlugar` int(11) NOT NULL,
  `mci_precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menId` int(11) NOT NULL,
  `menPadreId` smallint(6) DEFAULT NULL,
  `menNombre` varchar(50) DEFAULT NULL,
  `menOrden` int(11) DEFAULT NULL,
  `menDescripcion` varchar(500) DEFAULT NULL,
  `menDraggable` char(1) DEFAULT NULL,
  `menHidden` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multitabla`
--

CREATE TABLE IF NOT EXISTS `multitabla` (
  `idmultitabla` int(11) NOT NULL,
  `mu_tabla` varchar(85) DEFAULT NULL,
  `mu_id` int(11) DEFAULT NULL,
  `mu_descripcion` varchar(85) DEFAULT NULL,
  `mu_activo` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `perfId` int(11) NOT NULL,
  `rolId` int(11) NOT NULL,
  `usuId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE IF NOT EXISTS `permiso` (
  `permId` int(11) NOT NULL,
  `menId` int(11) NOT NULL,
  `rolId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personalizada`
--

CREATE TABLE IF NOT EXISTS `personalizada` (
  `idpersonalizada` int(11) NOT NULL,
  `usuId` int(11) NOT NULL,
  `tipo_tabla` int(11) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `idprovincia` varchar(2) NOT NULL,
  `pro_descripcion` varchar(85) DEFAULT NULL,
  `iddepartamento` varchar(2) NOT NULL,
  `pro_estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurante`
--

CREATE TABLE IF NOT EXISTS `restaurante` (
  `idrestaurante` int(11) NOT NULL,
  `res_nombre` varchar(40) DEFAULT NULL,
  `res_descripcion` varchar(45) DEFAULT NULL,
  `res_categoria` varchar(25) DEFAULT NULL,
  `res_tipo` varchar(35) DEFAULT NULL,
  `res_estado` tinyint(1) DEFAULT NULL,
  `idlugar` int(11) NOT NULL,
  `res_precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `rolId` int(11) NOT NULL,
  `rolNombre` varchar(50) DEFAULT NULL,
  `rolActivo` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subtipo`
--

CREATE TABLE IF NOT EXISTS `subtipo` (
  `idsubtipo` int(11) NOT NULL,
  `sub_nombre` varchar(45) DEFAULT NULL,
  `lugar_idlugar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `idtipo` int(11) NOT NULL,
  `tip_nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE IF NOT EXISTS `valoracion` (
  `idvaloracion` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `val_fechaHora` datetime DEFAULT NULL,
  `val_puntaje` int(11) DEFAULT NULL,
  `idlugar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idadministrador`);

--
-- Indices de la tabla `aturistico`
--
ALTER TABLE `aturistico`
  ADD PRIMARY KEY (`idaturistico`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`iddistrito`,`idprovincia`,`iddepartamento`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idevento`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`idgaleria`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`idhorario`);

--
-- Indices de la tabla `hospedaje`
--
ALTER TABLE `hospedaje`
  ADD PRIMARY KEY (`idhospedaje`);

--
-- Indices de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD PRIMARY KEY (`idnstituciones`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`idlugar`);

--
-- Indices de la tabla `mci_sturistico`
--
ALTER TABLE `mci_sturistico`
  ADD PRIMARY KEY (`idmci_sturistico`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menId`);

--
-- Indices de la tabla `multitabla`
--
ALTER TABLE `multitabla`
  ADD PRIMARY KEY (`idmultitabla`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`perfId`,`rolId`,`usuId`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`permId`,`menId`,`rolId`);

--
-- Indices de la tabla `personalizada`
--
ALTER TABLE `personalizada`
  ADD PRIMARY KEY (`idpersonalizada`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`idprovincia`,`iddepartamento`);

--
-- Indices de la tabla `restaurante`
--
ALTER TABLE `restaurante`
  ADD PRIMARY KEY (`idrestaurante`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rolId`);

--
-- Indices de la tabla `subtipo`
--
ALTER TABLE `subtipo`
  ADD PRIMARY KEY (`idsubtipo`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`idvaloracion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aturistico`
--
ALTER TABLE `aturistico`
  MODIFY `idaturistico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idevento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `hospedaje`
--
ALTER TABLE `hospedaje`
  MODIFY `idhospedaje` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  MODIFY `idnstituciones` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mci_sturistico`
--
ALTER TABLE `mci_sturistico`
  MODIFY `idmci_sturistico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `menId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `multitabla`
--
ALTER TABLE `multitabla`
  MODIFY `idmultitabla` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `perfId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `permId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personalizada`
--
ALTER TABLE `personalizada`
  MODIFY `idpersonalizada` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `restaurante`
--
ALTER TABLE `restaurante`
  MODIFY `idrestaurante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rolId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `idvaloracion` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
