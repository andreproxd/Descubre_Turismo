-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2015 at 09:12 AM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `descubre_turismo`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `idadministrador` int(11) NOT NULL,
  `adm_email` varchar(45) DEFAULT NULL,
  `adm_password` varchar(45) DEFAULT NULL,
  `adm_estado` tinyint(4) DEFAULT NULL,
  `adm_img` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`idadministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aturistico`
--

CREATE TABLE IF NOT EXISTS `aturistico` (
  `idaturistico` int(11) NOT NULL AUTO_INCREMENT,
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
  `tipo_idtipo` int(11) NOT NULL,
  PRIMARY KEY (`idaturistico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nomyape` varchar(90) DEFAULT NULL,
  `cli_sexo` varchar(15) DEFAULT NULL,
  `cli_nacionalidad` varchar(25) DEFAULT NULL,
  `cli_edad` int(11) DEFAULT NULL,
  `cli_correo` varchar(90) DEFAULT NULL,
  `cli_estado` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `iddepartamento` varchar(2) NOT NULL,
  `dep_pdescripcion` varchar(85) DEFAULT NULL,
  `dep_estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`iddepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `distrito`
--

CREATE TABLE IF NOT EXISTS `distrito` (
  `iddistrito` varchar(2) NOT NULL,
  `dis_descripcion` varchar(85) DEFAULT NULL,
  `idprovincia` varchar(2) NOT NULL,
  `iddepartamento` varchar(2) NOT NULL,
  `dis_estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`iddistrito`,`idprovincia`,`iddepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `idevento` int(11) NOT NULL AUTO_INCREMENT,
  `eve_nombre` varchar(60) DEFAULT NULL,
  `eve_fechainicio` date DEFAULT NULL,
  `eve_fechafin` date DEFAULT NULL,
  `eve_descripcion` text,
  `eve_vacceso` text,
  `eve_caracteristicas` text,
  `eve_estado` tinyint(1) DEFAULT NULL,
  `idlugar` int(11) NOT NULL,
  `eve_precio` int(11) DEFAULT NULL,
  `eve_anio` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`idevento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `idgaleria` int(11) NOT NULL,
  `gal_nombre` varchar(45) DEFAULT NULL,
  `gal_estado` enum('ADMINISTRADOR','CLIENTE') DEFAULT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  `administrador_idadministrador` int(11) NOT NULL,
  PRIMARY KEY (`idgaleria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `idhorario` int(11) NOT NULL,
  `idlugar` int(11) DEFAULT NULL,
  `hor_dia` int(11) DEFAULT NULL,
  `hor_horas` int(11) DEFAULT NULL,
  `lugar_idlugar` int(11) NOT NULL,
  PRIMARY KEY (`idhorario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hospedaje`
--

CREATE TABLE IF NOT EXISTS `hospedaje` (
  `idhospedaje` int(11) NOT NULL AUTO_INCREMENT,
  `hos_nombre` varchar(40) DEFAULT NULL,
  `hos_descripcion` text,
  `hos_categoria` varchar(25) DEFAULT NULL,
  `hos_estado` tinyint(4) DEFAULT NULL,
  `idlugar` int(11) NOT NULL,
  `hos_precio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idhospedaje`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

-- --------------------------------------------------------

--
-- Table structure for table `instituciones`
--

CREATE TABLE IF NOT EXISTS `instituciones` (
  `idnstituciones` int(11) NOT NULL AUTO_INCREMENT,
  `inst_nombre` varchar(45) DEFAULT NULL,
  `inst_descripcion` text,
  `inst_estado` tinyint(4) DEFAULT NULL,
  `lugar_idlugar` int(11) NOT NULL,
  PRIMARY KEY (`idnstituciones`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Table structure for table `lugar`
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
  PRIMARY KEY (`idlugar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mci_sturistico`
--

CREATE TABLE IF NOT EXISTS `mci_sturistico` (
  `idmci_sturistico` int(11) NOT NULL AUTO_INCREMENT,
  `mci_nombre` varchar(50) DEFAULT NULL,
  `mci_vacceso` text,
  `mci_sbrindados` text,
  `mci_ingreso` text,
  `mci_descripcion` text,
  `mci_tipo` int(11) DEFAULT NULL,
  `mci_estado` tinyint(1) DEFAULT NULL,
  `idlugar` int(11) NOT NULL,
  `mci_precio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmci_sturistico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menId` int(11) NOT NULL AUTO_INCREMENT,
  `menPadreId` smallint(6) DEFAULT NULL,
  `menNombre` varchar(50) DEFAULT NULL,
  `menOrden` int(11) DEFAULT NULL,
  `menDescripcion` varchar(500) DEFAULT NULL,
  `menDraggable` char(1) DEFAULT NULL,
  `menHidden` char(1) DEFAULT NULL,
  PRIMARY KEY (`menId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `multitabla`
--

CREATE TABLE IF NOT EXISTS `multitabla` (
  `idmultitabla` int(11) NOT NULL AUTO_INCREMENT,
  `mu_tabla` varchar(85) DEFAULT NULL,
  `mu_id` int(11) DEFAULT NULL,
  `mu_descripcion` varchar(85) DEFAULT NULL,
  `mu_activo` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idmultitabla`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `perfId` int(11) NOT NULL AUTO_INCREMENT,
  `rolId` int(11) NOT NULL,
  `usuId` int(11) NOT NULL,
  PRIMARY KEY (`perfId`,`rolId`,`usuId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `permiso`
--

CREATE TABLE IF NOT EXISTS `permiso` (
  `permId` int(11) NOT NULL AUTO_INCREMENT,
  `menId` int(11) NOT NULL,
  `rolId` int(11) NOT NULL,
  PRIMARY KEY (`permId`,`menId`,`rolId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

-- --------------------------------------------------------

--
-- Table structure for table `personalizada`
--

CREATE TABLE IF NOT EXISTS `personalizada` (
  `idpersonalizada` int(11) NOT NULL AUTO_INCREMENT,
  `usuId` int(11) NOT NULL,
  `tipo_tabla` int(11) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idpersonalizada`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `idprovincia` varchar(2) NOT NULL,
  `pro_descripcion` varchar(85) DEFAULT NULL,
  `iddepartamento` varchar(2) NOT NULL,
  `pro_estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idprovincia`,`iddepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurante`
--

CREATE TABLE IF NOT EXISTS `restaurante` (
  `idrestaurante` int(11) NOT NULL AUTO_INCREMENT,
  `res_nombre` varchar(40) DEFAULT NULL,
  `res_descripcion` varchar(45) DEFAULT NULL,
  `res_categoria` varchar(25) DEFAULT NULL,
  `res_tipo` varchar(35) DEFAULT NULL,
  `res_estado` tinyint(1) DEFAULT NULL,
  `idlugar` int(11) NOT NULL,
  `res_precio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idrestaurante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `rolId` int(11) NOT NULL AUTO_INCREMENT,
  `rolNombre` varchar(50) DEFAULT NULL,
  `rolActivo` char(1) DEFAULT NULL,
  PRIMARY KEY (`rolId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `subtipo`
--

CREATE TABLE IF NOT EXISTS `subtipo` (
  `idsubtipo` int(11) NOT NULL,
  `sub_nombre` varchar(45) DEFAULT NULL,
  `lugar_idlugar` int(11) NOT NULL,
  PRIMARY KEY (`idsubtipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `idtipo` int(11) NOT NULL,
  `tip_nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `valoracion`
--

CREATE TABLE IF NOT EXISTS `valoracion` (
  `idvaloracion` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `val_fechaHora` datetime DEFAULT NULL,
  `val_puntaje` int(11) DEFAULT NULL,
  `idlugar` int(11) NOT NULL,
  PRIMARY KEY (`idvaloracion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
