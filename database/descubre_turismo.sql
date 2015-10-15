SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `mydb` ;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
SHOW WARNINGS;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `departamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `departamento` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `departamento` (
  `iddepartamento` VARCHAR(2) NOT NULL,
  `dep_pdescripcion` VARCHAR(85) NULL DEFAULT NULL,
  `dep_estado` TINYINT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`iddepartamento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `provincia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `provincia` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `provincia` (
  `idprovincia` VARCHAR(2) NOT NULL,
  `pro_descripcion` VARCHAR(85) NULL DEFAULT NULL,
  `iddepartamento` VARCHAR(2) NOT NULL,
  `pro_estado` TINYINT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`idprovincia`, `iddepartamento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `distrito`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `distrito` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `distrito` (
  `iddistrito` VARCHAR(2) NOT NULL,
  `dis_descripcion` VARCHAR(85) NULL DEFAULT NULL,
  `idprovincia` VARCHAR(2) NOT NULL,
  `iddepartamento` VARCHAR(2) NOT NULL,
  `dis_estado` TINYINT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`iddistrito`, `idprovincia`, `iddepartamento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `lugar`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lugar` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `lugar` (
  `idlugar` INT NOT NULL,
  `lug_direccion` VARCHAR(45) NULL,
  `lug_latylong` VARCHAR(45) NULL,
  `lug_foto` VARCHAR(90) NULL,
  `lug_telefono` VARCHAR(45) NULL,
  `lug_distrito` VARCHAR(45) NULL,
  `distrito_iddistrito` VARCHAR(2) NOT NULL,
  `distrito_idprovincia` VARCHAR(2) NOT NULL,
  `distrito_iddepartamento` VARCHAR(2) NOT NULL,
  `lug_fechas` VARCHAR(45) NULL,
  PRIMARY KEY (`idlugar`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `instituciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instituciones` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `instituciones` (
  `idnstituciones` INT(11) NOT NULL AUTO_INCREMENT,
  `inst_nombre` VARCHAR(45) NULL,
  `inst_descripcion` TEXT NULL DEFAULT NULL,
  `inst_estado` TINYINT NULL DEFAULT NULL,
  `lugar_idlugar` INT NOT NULL,
  PRIMARY KEY (`idnstituciones`))
ENGINE = InnoDB
AUTO_INCREMENT = 25
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `evento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `evento` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `evento` (
  `idevento` INT(11) NOT NULL AUTO_INCREMENT,
  `eve_nombre` VARCHAR(60) NULL DEFAULT NULL,
  `eve_fechainicio` DATE NULL DEFAULT NULL,
  `eve_fechafin` DATE NULL DEFAULT NULL,
  `eve_descripcion` TEXT NULL,
  `eve_vacceso` TEXT NULL,
  `eve_caracteristicas` TEXT NULL,
  `eve_estado` TINYINT(1) NULL DEFAULT NULL,
  `idlugar` INT NOT NULL,
  `eve_precio` INT NULL,
  `eve_anio` SMALLINT NULL,
  PRIMARY KEY (`idevento`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `hospedaje`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospedaje` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `hospedaje` (
  `idhospedaje` INT(11) NOT NULL AUTO_INCREMENT,
  `hos_nombre` VARCHAR(40) NULL DEFAULT NULL,
  `hos_descripcion` TEXT NULL,
  `hos_categoria` VARCHAR(25) NULL,
  `hos_estado` TINYINT NULL DEFAULT NULL,
  `idlugar` INT NOT NULL,
  `hos_precio` INT NULL,
  PRIMARY KEY (`idhospedaje`))
ENGINE = InnoDB
AUTO_INCREMENT = 22
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mci_sturistico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mci_sturistico` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `mci_sturistico` (
  `idmci_sturistico` INT(11) NOT NULL AUTO_INCREMENT,
  `mci_nombre` VARCHAR(50) NULL DEFAULT NULL,
  `mci_vacceso` TEXT NULL DEFAULT NULL,
  `mci_sbrindados` TEXT NULL DEFAULT NULL,
  `mci_ingreso` TEXT NULL DEFAULT NULL,
  `mci_descripcion` TEXT NULL DEFAULT NULL,
  `mci_tipo` INT(11) NULL DEFAULT NULL,
  `mci_estado` TINYINT(1) NULL DEFAULT NULL,
  `idlugar` INT NOT NULL,
  `mci_precio` INT NULL,
  PRIMARY KEY (`idmci_sturistico`))
ENGINE = InnoDB
AUTO_INCREMENT = 32
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `menu`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `menu` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `menu` (
  `menId` INT(11) NOT NULL AUTO_INCREMENT,
  `menPadreId` SMALLINT(6) NULL DEFAULT NULL,
  `menNombre` VARCHAR(50) NULL DEFAULT NULL,
  `menOrden` INT(11) NULL DEFAULT NULL,
  `menDescripcion` VARCHAR(500) NULL DEFAULT NULL,
  `menDraggable` CHAR(1) NULL DEFAULT NULL,
  `menHidden` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`menId`))
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `multitabla`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `multitabla` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `multitabla` (
  `idmultitabla` INT(11) NOT NULL AUTO_INCREMENT,
  `mu_tabla` VARCHAR(85) NULL DEFAULT NULL,
  `mu_id` INT(11) NULL DEFAULT NULL,
  `mu_descripcion` VARCHAR(85) NULL DEFAULT NULL,
  `mu_activo` BIT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`idmultitabla`))
ENGINE = InnoDB
AUTO_INCREMENT = 18
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `rol`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rol` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `rol` (
  `rolId` INT(11) NOT NULL AUTO_INCREMENT,
  `rolNombre` VARCHAR(50) NULL DEFAULT NULL,
  `rolActivo` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`rolId`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cliente` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` INT(11) NOT NULL AUTO_INCREMENT,
  `cli_nomyape` VARCHAR(90) NULL DEFAULT NULL,
  `cli_sexo` VARCHAR(15) NULL DEFAULT NULL,
  `cli_nacionalidad` VARCHAR(25) NULL DEFAULT NULL,
  `cli_edad` INT NULL DEFAULT NULL,
  `cli_correo` VARCHAR(90) NULL DEFAULT NULL,
  `cli_estado` BIT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`idcliente`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `perfil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `perfil` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `perfil` (
  `perfId` INT(11) NOT NULL AUTO_INCREMENT,
  `rolId` INT(11) NOT NULL,
  `usuId` INT(11) NOT NULL,
  PRIMARY KEY (`perfId`, `rolId`, `usuId`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `permiso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `permiso` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `permiso` (
  `permId` INT(11) NOT NULL AUTO_INCREMENT,
  `menId` INT(11) NOT NULL,
  `rolId` INT(11) NOT NULL,
  PRIMARY KEY (`permId`, `menId`, `rolId`))
ENGINE = InnoDB
AUTO_INCREMENT = 69
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `personalizada`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personalizada` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `personalizada` (
  `idpersonalizada` INT(11) NOT NULL AUTO_INCREMENT,
  `usuId` INT(11) NOT NULL,
  `tipo_tabla` INT(11) NULL DEFAULT NULL,
  `orden` INT(11) NULL DEFAULT NULL,
  `activo` TINYINT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`idpersonalizada`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `restaurante`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `restaurante` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `restaurante` (
  `idrestaurante` INT(11) NOT NULL AUTO_INCREMENT,
  `res_nombre` VARCHAR(40) NULL DEFAULT NULL,
  `res_descripcion` VARCHAR(45) NULL,
  `res_categoria` VARCHAR(25) NULL,
  `res_tipo` VARCHAR(35) NULL,
  `res_estado` TINYINT(1) NULL DEFAULT NULL,
  `idlugar` INT NOT NULL,
  `res_precio` INT NULL,
  PRIMARY KEY (`idrestaurante`))
ENGINE = InnoDB
AUTO_INCREMENT = 11
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `tipo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tipo` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `tipo` (
  `idtipo` INT NOT NULL,
  `tip_nombre` VARCHAR(30) NULL,
  PRIMARY KEY (`idtipo`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `aturistico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aturistico` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `aturistico` (
  `idaturistico` INT(11) NOT NULL AUTO_INCREMENT,
  `atur_nombre` TEXT NULL DEFAULT NULL,
  `atur_serviciobrindado` TEXT NULL DEFAULT NULL,
  `atur_vacceso` TEXT NULL DEFAULT NULL,
  `atur_transporte` TEXT NULL DEFAULT NULL,
  `atur_ingreso` TEXT NULL DEFAULT NULL,
  `atur_estacionalidad` TEXT NULL DEFAULT NULL,
  `atur_estadoactual` INT(11) NULL DEFAULT NULL,
  `stur_recomendaciones` TEXT NULL DEFAULT NULL,
  `stur_reshistorica` TEXT NULL DEFAULT NULL,
  `atur_interes` TEXT NULL DEFAULT NULL,
  `atur_estado` TINYINT(1) NULL DEFAULT NULL,
  `idlugar` INT NOT NULL,
  `atur_precio` INT NULL,
  `tipo_idtipo` INT NOT NULL,
  PRIMARY KEY (`idaturistico`))
ENGINE = InnoDB
AUTO_INCREMENT = 27
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `valoracion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `valoracion` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `valoracion` (
  `idvaloracion` INT(11) NOT NULL AUTO_INCREMENT,
  `idcliente` INT(11) NOT NULL,
  `val_fechaHora` DATETIME NULL DEFAULT NULL,
  `val_puntaje` INT NULL DEFAULT NULL,
  `idlugar` INT NOT NULL,
  PRIMARY KEY (`idvaloracion`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `administrador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `administrador` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `administrador` (
  `idadministrador` INT NOT NULL,
  `adm_email` VARCHAR(45) NULL,
  `adm_password` VARCHAR(45) NULL,
  `adm_estado` TINYINT NULL,
  `adm_img` VARCHAR(90) NULL,
  PRIMARY KEY (`idadministrador`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `subtipo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `subtipo` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `subtipo` (
  `idsubtipo` INT NOT NULL,
  `sub_nombre` VARCHAR(45) NULL,
  `lugar_idlugar` INT NOT NULL,
  PRIMARY KEY (`idsubtipo`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `galeria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `galeria` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `galeria` (
  `idgaleria` INT NOT NULL,
  `gal_nombre` VARCHAR(45) NULL,
  `gal_estado` ENUM('ADMINISTRADOR','CLIENTE') NULL,
  `cliente_idcliente` INT(11) NOT NULL,
  `administrador_idadministrador` INT NOT NULL,
  PRIMARY KEY (`idgaleria`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `horarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `horarios` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `horarios` (
  `idhorario` INT NOT NULL,
  `idlugar` INT NULL,
  `hor_dia` INT NULL,
  `hor_horas` INT NULL,
  `lugar_idlugar` INT NOT NULL,
  PRIMARY KEY (`idhorario`))
ENGINE = InnoDB;

SHOW WARNINGS;
USE `mydb` ;

-- -----------------------------------------------------
-- procedure sp_autoridades
-- -----------------------------------------------------

USE `mydb`;
DROP procedure IF EXISTS `sp_autoridades`;
SHOW WARNINGS;

DELIMITER $$
USE `mydb`$$
--
-- Procedimientos
--
CREATE DEFINER=`descubrelalibert`@`localhost` PROCEDURE `sp_autoridades`(IN `ve_opcion` VARCHAR(50), IN `ve_inicio` INT(11), IN `ve_final` INT(11), IN `ve_consulta` VARCHAR(50), IN `ve_idautoridades` INT(11), IN `ve_auto_descripcion` TEXT, IN `ve_auto_horarios` TEXT, IN `ve_auto_contacto` TEXT, IN `ve_auto_activo` BIT(1), IN `ve_auto_img` VARCHAR(90))
BEGIN
	SET @START = ve_inicio;
	SET @LIMIT = ve_final; 
	SET @CONSULTA=ve_consulta;
	IF ve_opcion='opc_listar' THEN
		PREPARE stmt FROM "
		SELECT a.idautoridades,
			a.auto_descripcion,
			a.auto_horarios,
			a.auto_contacto,
			a.auto_activo,
            a.auto_img
		FROM autoridades a
		ORDER BY a.idautoridades ASC
		LIMIT ?,?";
		EXECUTE stmt USING @START,@LIMIT;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_listar_numero' THEN
		PREPARE stmt FROM "
		SELECT a.idautoridades,
			a.auto_descripcion,
			a.auto_horarios,
			a.auto_contacto,
			a.auto_activo,
            a.auto_img
		FROM autoridades a
		ORDER BY a.idautoridades ASC";
		EXECUTE stmt;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_filtrar' THEN
		PREPARE stmt FROM "
        SELECT a.idautoridades,
			a.auto_descripcion,
			a.auto_horarios,
			a.auto_contacto,
			a.auto_activo,
            a.auto_img
		FROM autoridades a
		WHERE (a.auto_descripcion LIKE CONCAT('%',?,'%') or
            cast(a.idautoridades as char) LIKE CONCAT('%',?,'%'))
		ORDER BY a.idautoridades ASC
		LIMIT ?,?";
		EXECUTE stmt USING @CONSULTA,@CONSULTA,@START,@LIMIT;
		DEALLOCATE PREPARE stmt;
     END IF;
    IF ve_opcion='opc_filtrar_numero' THEN
		PREPARE stmt FROM "
        SELECT a.idautoridades,
			a.auto_descripcion,
			a.auto_horarios,
			a.auto_contacto,
			a.auto_activo
		FROM autoridades a
		WHERE (a.auto_descripcion LIKE CONCAT('%',?,'%') or
            cast(a.idautoridades as char) LIKE CONCAT('%',?,'%'))
		ORDER BY a.idautoridades ASC";
		EXECUTE stmt USING @CONSULTA,@CONSULTA;
		DEALLOCATE PREPARE stmt;
     END IF;
	IF ve_opcion='opc_grabar' THEN
		INSERT INTO `descubre_turismo`.`autoridades`
			(`auto_descripcion`,
			`auto_horarios`,
			`auto_contacto`,
			`auto_activo`,
            `auto_img`)
			VALUES
			(ve_auto_descripcion,
			ve_auto_horarios,
			ve_auto_contacto,
			ve_auto_activo,
            ve_auto_img);
	END IF;
	IF ve_opcion='opc_actualizar' THEN
		UPDATE `descubre_turismo`.`autoridades`
			SET
			`auto_descripcion` = ve_auto_descripcion,
			`auto_horarios` = ve_auto_horarios,
			`auto_contacto` = ve_auto_contacto,
			`auto_activo` = ve_auto_activo,
            `auto_img` = ve_auto_img
			WHERE `idautoridades` = ve_idautoridades;
	END IF;
    IF ve_opcion='opc_delete' THEN
		UPDATE autoridades
		SET 
            auto_activo=0
		WHERE `idautoridades` = ve_idautoridades;
	END IF;
	IF ve_opcion='opc_listartodo' THEN
		SELECT a.idautoridades,
			a.auto_descripcion,
			a.auto_horarios,
			a.auto_contacto,
			a.auto_activo,
            a.auto_img
		FROM autoridades a
		ORDER BY a.idautoridades ASC;
	END IF;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure sp_evento
-- -----------------------------------------------------

USE `mydb`;
DROP procedure IF EXISTS `sp_evento`;
SHOW WARNINGS;

DELIMITER $$
USE `mydb`$$
CREATE DEFINER=`descubrelalibert`@`localhost` PROCEDURE `sp_evento`(IN `ve_opcion` VARCHAR(50), IN `ve_inicio` INT(11), IN `ve_final` INT(11), IN `ve_consulta` VARCHAR(50), IN `ve_idevento` INT(11), IN `ve_iddistrito` VARCHAR(2), IN `ve_eve_nombre` TEXT, IN `ve_eve_fechai` DATE, IN `ve_eve_fechaf` DATE, IN `ve_eve_activo` TINYINT(1), IN `ve_iddepartamento` VARCHAR(2), IN `ve_idprovincia` VARCHAR(2), IN `ve_eve_img` VARCHAR(90))
BEGIN
	SET @START = ve_inicio;
	SET @LIMIT = ve_final; 
	SET @CONSULTA=ve_consulta;
	IF ve_opcion='opc_listar' THEN
		PREPARE stmt FROM "
		SELECT 
			e.idevento,
            e.iddepartamento,
			e.idprovincia,
            e.iddistrito,
			e.eve_nombre,
			e.eve_fechai,
            e.eve_fechaf,
			e.eve_activo,
            e.eve_img
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM evento e
		inner join departamento de on de.iddepartamento=e.iddepartamento
		inner join provincia p on p.idprovincia=e.idprovincia and p.iddepartamento=e.iddepartamento
        inner join distrito d on d.iddistrito=e.iddistrito and d.idprovincia=e.idprovincia and d.iddepartamento=e.iddepartamento
		ORDER BY e.idevento ASC
		LIMIT ?,?";
		EXECUTE stmt USING @START,@LIMIT;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_listar_numero' THEN
		PREPARE stmt FROM "
		SELECT 
			e.idevento,
            e.iddepartamento,
			e.idprovincia,
            e.iddistrito,
			e.eve_nombre,
			e.eve_fechai,
            e.eve_fechaf,
			e.eve_activo,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM evento e
		inner join departamento de on de.iddepartamento=e.iddepartamento
		inner join provincia p on p.idprovincia=e.idprovincia and p.iddepartamento=e.iddepartamento
        inner join distrito d on d.iddistrito=e.iddistrito and d.idprovincia=e.idprovincia and d.iddepartamento=e.iddepartamento
		ORDER BY e.idevento ASC";
		EXECUTE stmt;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_filtrar' THEN
		PREPARE stmt FROM "
        SELECT 
			e.idevento,
            e.iddepartamento,
            e.idprovincia,
			e.iddistrito,
			e.eve_nombre,
			e.eve_fechai,
            e.eve_fechaf,
			e.eve_activo,
            e.eve_img,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM evento e
		inner join departamento de on de.iddepartamento=e.iddepartamento
		inner join provincia p on p.idprovincia=e.idprovincia and p.iddepartamento=e.iddepartamento
        inner join distrito d on d.iddistrito=e.iddistrito and d.idprovincia=e.idprovincia and d.iddepartamento=e.iddepartamento
		WHERE (e.eve_nombre LIKE CONCAT('%',?,'%') or
            cast(e.idevento as char) LIKE CONCAT('%',?,'%'))
		ORDER BY e.idevento ASC
		LIMIT ?,?";
		EXECUTE stmt USING @CONSULTA,@CONSULTA,@START,@LIMIT;
		DEALLOCATE PREPARE stmt;
     END IF;
     IF ve_opcion='opc_filtrar_numero' THEN
		PREPARE stmt FROM "
        SELECT 
			e.idevento,
            e.iddepartamento,
            e.idprovincia,
			e.iddistrito,
			e.eve_nombre,
			e.eve_fechai,
            e.eve_fechaf,
			e.eve_activo,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM evento e
		inner join departamento de on de.iddepartamento=e.iddepartamento
		inner join provincia p on p.idprovincia=e.idprovincia and p.iddepartamento=e.iddepartamento
        inner join distrito d on d.iddistrito=e.iddistrito and d.idprovincia=e.idprovincia and d.iddepartamento=e.iddepartamento
		WHERE (e.eve_nombre LIKE CONCAT('%',?,'%') or
            cast(e.idevento as char) LIKE CONCAT('%',?,'%'))
		ORDER BY e.idevento ASC";
		EXECUTE stmt USING @CONSULTA,@CONSULTA;
		DEALLOCATE PREPARE stmt;
     END IF;
	IF ve_opcion='opc_grabar' THEN
		INSERT INTO `descubre_turismo`.`evento`
			(`iddistrito`,
			`eve_nombre`,
			`eve_fechai`,
            `eve_fechaf`,
			`eve_activo`,
            `idprovincia`,
            `iddepartamento`,
            `eve_img`)
			VALUES
			(ve_iddistrito,
			ve_eve_nombre,
			ve_eve_fechai,
            ve_eve_fechaf,
			ve_eve_activo,
            ve_idprovincia,
            ve_iddepartamento,
            ve_eve_img);
	END IF;
	IF ve_opcion='opc_actualizar' THEN
		UPDATE `descubre_turismo`.`evento`
		SET
		`iddistrito` = ve_iddistrito,
		`eve_nombre` = ve_eve_nombre,
		`eve_fechai` = ve_eve_fechai,
		`eve_fechaf` = ve_eve_fechaf,
        `eve_activo` = ve_eve_activo,
        `idprovincia` = ve_idprovincia,
        `iddepartamento` = ve_iddepartamento,
        `eve_img` = ve_eve_img
		WHERE `idevento` = ve_idevento;
	END IF;
    IF ve_opcion='opc_delete' THEN
		UPDATE evento
		SET 
            eve_activo=0
		WHERE idevento = ve_idevento;
	END IF;
    IF ve_opcion='opc_departamento' THEN
		select iddepartamento as id,dep_pdescripcion as descripcion 
		from departamento
		order by dep_pdescripcion;
	END IF;
    IF ve_opcion='opc_provincia' THEN
		select idprovincia as id , pro_descripcion as descripcion 
		from provincia
		where iddepartamento=ve_iddepartamento
		order by pro_descripcion;
	END IF;
    IF ve_opcion='opc_distrito' THEN
		select iddistrito as id,dis_descripcion as descripcion 
		from distrito
		where iddepartamento=ve_iddepartamento and  idprovincia=ve_idprovincia
		order by dis_descripcion;
	END IF;
	IF ve_opcion='opc_listartodo' THEN
		SELECT 
			e.idevento,
            e.iddepartamento,
			e.idprovincia,
            e.iddistrito,
			e.eve_nombre,
			e.eve_fechai,
            e.eve_fechaf,
			e.eve_activo,
            e.eve_img,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM evento e
		inner join departamento de on de.iddepartamento=e.iddepartamento
		inner join provincia p on p.idprovincia=e.idprovincia and p.iddepartamento=e.iddepartamento
        inner join distrito d on d.iddistrito=e.iddistrito and d.idprovincia=e.idprovincia and d.iddepartamento=e.iddepartamento
		ORDER BY e.idevento ASC;
	END IF;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure sp_hospedaje
-- -----------------------------------------------------

USE `mydb`;
DROP procedure IF EXISTS `sp_hospedaje`;
SHOW WARNINGS;

DELIMITER $$
USE `mydb`$$
CREATE DEFINER=`descubrelalibert`@`localhost` PROCEDURE `sp_hospedaje`(IN `ve_opcion` VARCHAR(50), IN `ve_inicio` INT(11), IN `ve_final` INT(11), IN `ve_consulta` VARCHAR(50), IN `ve_idhospedaje` INT(11), IN `ve_iddistrito` VARCHAR(2), IN `ve_hos_nombre` TEXT, IN `ve_hos_direccion` TEXT, IN `ve_hos_contacto` TEXT, IN `ve_hos_mapa` TEXT, IN `ve_hos_activo` TINYINT(1), IN `ve_iddepartamento` VARCHAR(2), IN `ve_idprovincia` VARCHAR(2), IN `ve_hos_img` VARCHAR(90))
BEGIN
	SET @START = ve_inicio;
	SET @LIMIT = ve_final; 
	SET @CONSULTA=ve_consulta;
	IF ve_opcion='opc_listar' THEN
		PREPARE stmt FROM "
		SELECT 
			h.idhospedaje,
			h.iddepartamento,
            h.idprovincia,
			h.iddistrito,
			h.hos_nombre,
			h.hos_direccion,
            h.hos_contacto,
			h.hos_mapa,
			h.hos_activo,
            h.hos_img,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM hospedaje h
		inner join departamento de on de.iddepartamento=h.iddepartamento
		inner join provincia p on p.idprovincia=h.idprovincia and p.iddepartamento=h.iddepartamento
        inner join distrito d on d.iddistrito=h.iddistrito and d.idprovincia=h.idprovincia and d.iddepartamento=h.iddepartamento
		ORDER BY h.idhospedaje ASC
		LIMIT ?,?";
		EXECUTE stmt USING @START,@LIMIT;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_listar_numero' THEN
		PREPARE stmt FROM "
		SELECT 
			h.idhospedaje,
			h.iddepartamento,
            h.idprovincia,
			h.iddistrito,
			h.hos_nombre,
			h.hos_direccion,
            h.hos_contacto,
			h.hos_mapa,
			h.hos_activo,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM hospedaje h
		inner join departamento de on de.iddepartamento=h.iddepartamento
		inner join provincia p on p.idprovincia=h.idprovincia and p.iddepartamento=h.iddepartamento
        inner join distrito d on d.iddistrito=h.iddistrito and d.idprovincia=h.idprovincia and d.iddepartamento=h.iddepartamento
		ORDER BY h.idhospedaje ASC";
		EXECUTE stmt;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_filtrar' THEN
		PREPARE stmt FROM "
        SELECT 
			h.idhospedaje,
			h.iddepartamento,
            h.idprovincia,
			h.iddistrito,
			h.hos_nombre,
			h.hos_direccion,
            h.hos_contacto,
			h.hos_mapa,
			h.hos_activo,
            h.hos_img,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM hospedaje h
		inner join departamento de on de.iddepartamento=h.iddepartamento
		inner join provincia p on p.idprovincia=h.idprovincia and p.iddepartamento=h.iddepartamento
		inner join distrito d on d.iddistrito=h.iddistrito and d.idprovincia=h.idprovincia and d.iddepartamento=h.iddepartamento
		WHERE (h.hos_nombre LIKE CONCAT('%',?,'%') or
            cast(h.idhospedaje as char) LIKE CONCAT('%',?,'%'))
		ORDER BY h.idhospedaje ASC
		LIMIT ?,?";
		EXECUTE stmt USING @CONSULTA,@CONSULTA,@START,@LIMIT;
		DEALLOCATE PREPARE stmt;
     END IF;
     IF ve_opcion='opc_filtrar_numero' THEN
		PREPARE stmt FROM "
        SELECT 
			h.idhospedaje,
			h.iddepartamento,
            h.idprovincia,
			h.iddistrito,
			h.hos_nombre,
			h.hos_direccion,
            h.hos_contacto,
			h.hos_mapa,
			h.hos_activo,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM hospedaje h
		inner join departamento de on de.iddepartamento=h.iddepartamento
		inner join provincia p on p.idprovincia=h.idprovincia and p.iddepartamento=h.iddepartamento
		inner join distrito d on d.iddistrito=h.iddistrito and d.idprovincia=h.idprovincia and d.iddepartamento=h.iddepartamento
		WHERE (h.hos_nombre LIKE CONCAT('%',?,'%') or
            cast(h.idhospedaje as char) LIKE CONCAT('%',?,'%'))
		ORDER BY h.idhospedaje ASC";
		EXECUTE stmt USING @CONSULTA,@CONSULTA;
		DEALLOCATE PREPARE stmt;
     END IF;
	IF ve_opcion='opc_grabar' THEN
		INSERT INTO `descubre_turismo`.`hospedaje`
			(`iddistrito`,
			`hos_nombre`,
			`hos_direccion`,
			`hos_contacto`,
			`hos_mapa`,
            `hos_activo`,
			`idprovincia`,
			`iddepartamento`,
            `hos_img`)
			VALUES
			(ve_iddistrito,
			ve_hos_nombre,
			ve_hos_direccion,
			ve_hos_contacto,
			ve_hos_mapa,
            ve_hos_activo,
			ve_idprovincia,
			ve_iddepartamento,
            ve_hos_img);
	END IF;
	IF ve_opcion='opc_actualizar' THEN
		UPDATE `descubre_turismo`.`hospedaje`
		SET
		`iddistrito` = ve_iddistrito,
		`hos_nombre` = ve_hos_nombre,
		`hos_direccion` = ve_hos_direccion,
		`hos_contacto` = ve_hos_contacto,
		`hos_mapa` = ve_hos_mapa,
        `hos_activo` = ve_hos_activo,
		`idprovincia` = ve_idprovincia,
		`iddepartamento` = ve_iddepartamento,
        `hos_img` = ve_hos_img
		WHERE `idhospedaje` = ve_idhospedaje;
	END IF;
    IF ve_opcion='opc_delete' THEN
		UPDATE hospedaje
		SET 
            hos_activo=0
		WHERE idhospedaje=ve_idhospedaje;
	END IF;
    IF ve_opcion='opc_departamento' THEN
		select iddepartamento as id,dep_pdescripcion as descripcion 
		from departamento
		order by dep_pdescripcion;
	END IF;
    IF ve_opcion='opc_provincia' THEN
		select idprovincia as id , pro_descripcion as descripcion 
		from provincia
		where iddepartamento=ve_iddepartamento
		order by pro_descripcion;
	END IF;
    IF ve_opcion='opc_distrito' THEN
		select iddistrito as id,dis_descripcion as descripcion 
		from distrito
		where iddepartamento=ve_iddepartamento and  idprovincia=ve_idprovincia
		order by dis_descripcion;
	END IF;
	IF ve_opcion='opc_listartodo' THEN
		SELECT 
			h.idhospedaje,
			h.iddepartamento,
            h.idprovincia,
			h.iddistrito,
			h.hos_nombre,
			h.hos_direccion,
            h.hos_contacto,
			h.hos_mapa,
			h.hos_activo,
            h.hos_img,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM hospedaje h
		inner join departamento de on de.iddepartamento=h.iddepartamento
		inner join provincia p on p.idprovincia=h.idprovincia and p.iddepartamento=h.iddepartamento
        inner join distrito d on d.iddistrito=h.iddistrito and d.idprovincia=h.idprovincia and d.iddepartamento=h.iddepartamento
		ORDER BY h.idhospedaje ASC;
	END IF;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure sp_mci_lugar
-- -----------------------------------------------------

USE `mydb`;
DROP procedure IF EXISTS `sp_mci_lugar`;
SHOW WARNINGS;

DELIMITER $$
USE `mydb`$$
CREATE DEFINER=`descubrelalibert`@`localhost` PROCEDURE `sp_mci_lugar`(IN `ve_opcion` VARCHAR(50), IN `ve_inicio` INT(11), IN `ve_final` INT(11), IN `ve_consulta` VARCHAR(50), IN `ve_idmci_lugar` INT(11), IN `ve_iddistrito` VARCHAR(2), IN `ve_mci_nombre` TEXT, IN `ve_mci_vacceso` TEXT, IN `ve_mci_sbrindados` TEXT, IN `ve_mci_direccion` TEXT, IN `ve_mci_mapa` TEXT, IN `ve_mci_horario` TEXT, IN `ve_mci_ingreso` TEXT, IN `ve_mci_descripcion` TEXT, IN `ve_mci_tipo` INT(11), IN `ve_mci_activo` TINYINT(1), IN `ve_iddepartamento` VARCHAR(2), IN `ve_idprovincia` VARCHAR(2), IN `ve_mci_img` VARCHAR(90))
BEGIN
	SET @START = ve_inicio;
	SET @LIMIT = ve_final; 
	SET @CONSULTA=ve_consulta;
	IF ve_opcion='opc_listar' THEN
		PREPARE stmt FROM "
		SELECT 
			ml.idmci_lugar,
			ml.iddepartamento,
            ml.idprovincia,
			ml.iddistrito,
			ml.mci_nombre,
			ml.mci_vacceso,
			ml.mci_sbrindados,
			ml.mci_direccion,
			ml.mci_mapa,
			ml.mci_horario,
			ml.mci_ingreso,
			ml.mci_descripcion,
			ml.mci_tipo,
			ml.mci_activo,
            ml.mci_img,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento,
            m.mu_descripcion as tipo
		FROM mci_lugar ml
		inner join departamento de on de.iddepartamento=ml.iddepartamento
		inner join provincia p on p.idprovincia=ml.idprovincia and p.iddepartamento=ml.iddepartamento
        inner join distrito d on d.iddistrito=ml.iddistrito and d.idprovincia=ml.idprovincia and d.iddepartamento=ml.iddepartamento
		inner join multitabla m on m.mu_tabla='TIPO' and m.mu_id=ml.mci_tipo
		ORDER BY ml.idmci_lugar ASC
		LIMIT ?,?";
		EXECUTE stmt USING @START,@LIMIT;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_listar_numero' THEN
		PREPARE stmt FROM "
		SELECT 
			ml.idmci_lugar,
			ml.iddepartamento,
            ml.idprovincia,
			ml.iddistrito,
			ml.mci_nombre,
			ml.mci_vacceso,
			ml.mci_sbrindados,
			ml.mci_direccion,
			ml.mci_mapa,
			ml.mci_horario,
			ml.mci_ingreso,
			ml.mci_descripcion,
			ml.mci_tipo,
			ml.mci_activo,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento,
            m.mu_descripcion as tipo
		FROM mci_lugar ml
		inner join departamento de on de.iddepartamento=ml.iddepartamento
		inner join provincia p on p.idprovincia=ml.idprovincia and p.iddepartamento=ml.iddepartamento
        inner join distrito d on d.iddistrito=ml.iddistrito and d.idprovincia=ml.idprovincia and d.iddepartamento=ml.iddepartamento
		inner join multitabla m on m.mu_tabla='TIPO' and m.mu_id=ml.mci_tipo
		ORDER BY ml.idmci_lugar ASC";
		EXECUTE stmt;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_filtrar' THEN
		PREPARE stmt FROM "
        SELECT 
			ml.idmci_lugar,
			ml.iddepartamento,
            ml.idprovincia,
			ml.iddistrito,
			ml.mci_nombre,
			ml.mci_vacceso,
			ml.mci_sbrindados,
			ml.mci_direccion,
			ml.mci_mapa,
			ml.mci_horario,
			ml.mci_ingreso,
			ml.mci_descripcion,
			ml.mci_tipo,
			ml.mci_activo,
            ml.mci_img,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento,
            m.mu_descripcion as tipo
		FROM mci_lugar ml
		inner join departamento de on de.iddepartamento=ml.iddepartamento
		inner join provincia p on p.idprovincia=ml.idprovincia and p.iddepartamento=ml.iddepartamento
        inner join distrito d on d.iddistrito=ml.iddistrito and d.idprovincia=ml.idprovincia and d.iddepartamento=ml.iddepartamento
		inner join multitabla m on m.mu_tabla='TIPO' and m.mu_id=ml.mci_tipo 
		WHERE (ml.mci_nombre LIKE CONCAT('%',?,'%') or m.mu_descripcion LIKE CONCAT('%',?,'%') or
            cast(ml.idmci_lugar as char) LIKE CONCAT('%',?,'%'))
		ORDER BY ml.idmci_lugar ASC
		LIMIT ?,?";
		EXECUTE stmt USING @CONSULTA,@CONSULTA,@CONSULTA,@START,@LIMIT;
		DEALLOCATE PREPARE stmt;
     END IF;
     IF ve_opcion='opc_filtrar_numero' THEN
		PREPARE stmt FROM "
        SELECT 
			ml.idmci_lugar,
			ml.iddepartamento,
            ml.idprovincia,
			ml.iddistrito,
			ml.mci_nombre,
			ml.mci_vacceso,
			ml.mci_sbrindados,
			ml.mci_direccion,
			ml.mci_mapa,
			ml.mci_horario,
			ml.mci_ingreso,
			ml.mci_descripcion,
			ml.mci_tipo,
			ml.mci_activo,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento,
            m.mu_descripcion as tipo
		FROM mci_lugar ml
		inner join departamento de on de.iddepartamento=ml.iddepartamento
		inner join provincia p on p.idprovincia=ml.idprovincia and p.iddepartamento=ml.iddepartamento
        inner join distrito d on d.iddistrito=ml.iddistrito and d.idprovincia=ml.idprovincia and d.iddepartamento=ml.iddepartamento
		inner join multitabla m on m.mu_tabla='TIPO' and m.mu_id=ml.mci_tipo 
		WHERE (ml.mci_nombre LIKE CONCAT('%',?,'%') or m.mu_descripcion LIKE CONCAT('%',?,'%') or
            cast(ml.idmci_lugar as char) LIKE CONCAT('%',?,'%'))
		ORDER BY ml.idmci_lugar ASC";
		EXECUTE stmt USING @CONSULTA,@CONSULTA,@CONSULTA;
		DEALLOCATE PREPARE stmt;
     END IF;
     IF ve_opcion='opc_tipo' THEN
		select mu_id as id,mu_descripcion as descripcion from multitabla
        where mu_tabla='TIPO' and mu_id!=0 and mu_activo=true;
     END IF;
	IF ve_opcion='opc_grabar' THEN
		INSERT INTO `descubre_turismo`.`mci_lugar`
			(`iddistrito`,
			`mci_nombre`,
			`mci_vacceso`,
			`mci_sbrindados`,
			`mci_direccion`,
			`mci_mapa`,
			`mci_horario`,
			`mci_ingreso`,
			`mci_descripcion`,
			`mci_tipo`,
			`mci_activo`,
            `idprovincia`,
            `iddepartamento`,
            `mci_img`)
			VALUES
			(ve_iddistrito,
			ve_mci_nombre,
			ve_mci_vacceso,
			ve_mci_sbrindados,
			ve_mci_direccion,
			ve_mci_mapa,
			ve_mci_horario,
			ve_mci_ingreso,
			ve_mci_descripcion,
			ve_mci_tipo,
			ve_mci_activo,
            ve_idprovincia,
            ve_iddepartamento,
            ve_mci_img);
	END IF;
	IF ve_opcion='opc_actualizar' THEN
		UPDATE `descubre_turismo`.`mci_lugar`
		SET
			`iddistrito` = ve_iddistrito,
			`mci_nombre` = ve_mci_nombre,
			`mci_vacceso` = ve_mci_vacceso,
			`mci_sbrindados` = ve_mci_sbrindados,
			`mci_direccion` = ve_mci_direccion,
			`mci_mapa` = ve_mci_mapa,
			`mci_horario` = ve_mci_horario,
			`mci_ingreso` = ve_mci_ingreso,
			`mci_descripcion` = ve_mci_descripcion,
			`mci_tipo` = ve_mci_tipo,
			`mci_activo` = ve_mci_activo,
            `idprovincia` = ve_idprovincia,
            `iddepartamento` = ve_iddepartamento,
            `mci_img` = ve_mci_img
		WHERE `idmci_lugar` = ve_idmci_lugar;
	END IF;
    IF ve_opcion='opc_delete' THEN
		UPDATE mci_lugar
		SET 
            mci_activo=0
		WHERE idmci_lugar=ve_idmci_lugar;
	END IF;
    IF ve_opcion='opc_departamento' THEN
		select iddepartamento as id,dep_pdescripcion as descripcion 
		from departamento
		order by dep_pdescripcion;
	END IF;
    IF ve_opcion='opc_provincia' THEN
		select idprovincia as id , pro_descripcion as descripcion 
		from provincia
		where iddepartamento=ve_iddepartamento
		order by pro_descripcion;
	END IF;
    IF ve_opcion='opc_distrito' THEN
		select iddistrito as id,dis_descripcion as descripcion 
		from distrito
		where iddepartamento=ve_iddepartamento and  idprovincia=ve_idprovincia
		order by dis_descripcion;
	END IF;
	IF ve_opcion='opc_listartodo' THEN
		SELECT 
			ml.idmci_lugar,
			ml.iddepartamento,
            ml.idprovincia,
			ml.iddistrito,
			ml.mci_nombre,
			ml.mci_vacceso,
			ml.mci_sbrindados,
			ml.mci_direccion,
			ml.mci_mapa,
			ml.mci_horario,
			ml.mci_ingreso,
			ml.mci_descripcion,
			ml.mci_tipo,
			ml.mci_activo,
            ml.mci_img,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento,
            m.mu_descripcion as tipo
		FROM mci_lugar ml
		inner join departamento de on de.iddepartamento=ml.iddepartamento
		inner join provincia p on p.idprovincia=ml.idprovincia and p.iddepartamento=ml.iddepartamento
        inner join distrito d on d.iddistrito=ml.iddistrito and d.idprovincia=ml.idprovincia and d.iddepartamento=ml.iddepartamento
		inner join multitabla m on m.mu_tabla='TIPO' and m.mu_id=ml.mci_tipo
		ORDER BY ml.idmci_lugar ASC;
	END IF;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure sp_menu
-- -----------------------------------------------------

USE `mydb`;
DROP procedure IF EXISTS `sp_menu`;
SHOW WARNINGS;

DELIMITER $$
USE `mydb`$$
CREATE DEFINER=`descubrelalibert`@`localhost` PROCEDURE `sp_menu`(IN `ve_opcion` VARCHAR(50), IN `ve_menId` SMALLINT(6), IN `ve_menPadreId` SMALLINT(6), IN `ve_menNombre` VARCHAR(50), IN `ve_menOrden` INT(11), IN `ve_menDescripcion` VARCHAR(500), IN `ve_menDraggable` CHAR(1), IN `ve_menHidden` CHAR(1), IN `ve_inicio` INT(11), IN `ve_final` INT(11))
BEGIN
	SET @START = ve_inicio; 
	SET @LIMIT = ve_final; 
	IF ve_opcion='opc_listar' THEN
		SELECT * 
		FROM menu;
	END IF;
	IF ve_opcion='opc_listar_por_orden' THEN
		SELECT * 
		FROM menu
		ORDER BY menPadreId,menNombre ASC;
	END IF;
	IF ve_opcion='opc_contador' THEN
		SELECT count(*) as total
		FROM menu;
	END IF;
	IF ve_opcion='opc_listar_por_Id' THEN
		PREPARE stmt FROM "
		SELECT * 
		FROM menu
		ORDER BY menPadreId,menNombre ASC
		LIMIT ?,?";
		EXECUTE stmt USING @START,@LIMIT;
		DEALLOCATE PREPARE stmt;
	END IF;
	IF ve_opcion='opc_listar_padre' THEN
		SELECT * 
		FROM menu
		WHERE menPadreId=0
		ORDER BY menPadreId,menNombre ASC;
	END IF;
	IF ve_opcion='opc_contador_padre' THEN
		SELECT COUNT(*) as 'total'
		FROM menu
		WHERE menPadreId=0
		ORDER BY menPadreId,menNombre ASC;
	END IF;
	IF ve_opcion='opc_listar_por_nombre' THEN
		SELECT * 
		FROM menu
		ORDER BY menPadreId,menNombre ASC;
	END IF;
	IF ve_opcion='opc_grabar' THEN
		INSERT 
		INTO menu(menPadreId,menNombre,menDescripcion,menDraggable,menHidden)
		VALUES(ve_menPadreId,ve_menNombre,ve_menDescripcion,ve_menDraggable,ve_menHidden);
	END IF;
	IF ve_opcion='opc_obtener' THEN
		SELECT *
		FROM menu 
		WHERE menNombre=ve_menNombre;
	END IF;
	IF ve_opcion='opc_actualizar_padre_orden' THEN
		UPDATE menu
		SET menPadreId=ve_menPadreId,menOrden=ve_menOrden
		WHERE menId=ve_menId;
	END IF;
	IF ve_opcion='opc_actualizar_todo' THEN
		UPDATE menu
		SET menPadreId=ve_menPadreId,menNombre=ve_menNombre,menOrden=ve_menOrden,
			menDescripcion=ve_menDescripcion,menDraggable=ve_menDraggable,menHidden=ve_menHidden
		WHERE menId=ve_menId;
	END IF;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure sp_multitabla
-- -----------------------------------------------------

USE `mydb`;
DROP procedure IF EXISTS `sp_multitabla`;
SHOW WARNINGS;

DELIMITER $$
USE `mydb`$$
CREATE DEFINER=`descubrelalibert`@`localhost` PROCEDURE `sp_multitabla`(
IN `ve_opcion` VARCHAR(50), 
IN `ve_inicio` INT(11), 
IN `ve_final` INT(11), 
IN `ve_consulta` VARCHAR(50),
IN `ve_idmultitabla` INT(11),
IN `ve_mu_tabla` VARCHAR(85),
IN `ve_mu_id` INT(11),
IN `ve_mu_descripcion` VARCHAR(85),
IN `ve_mu_activo` BIT(1)
)
BEGIN
	SET @START = ve_inicio;
	SET @LIMIT = ve_final; 
	SET @CONSULTA=ve_consulta;
    SET @MU_TABLA=ve_mu_tabla;
	IF ve_opcion='opc_listar_tabla' THEN
		PREPARE stmt FROM "
		SELECT 
			idmultitabla,
			mu_tabla,
            mu_id,
            mu_descripcion,
            mu_activo
		FROM multitabla 
        WHERE mu_id=0
		ORDER BY idmultitabla ASC
		LIMIT ?,?";
		EXECUTE stmt USING @START,@LIMIT;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_listar_detalle' THEN
		PREPARE stmt FROM "
		SELECT 
			idmultitabla,
			mu_tabla,
            mu_id,
            mu_descripcion,
            mu_activo
		FROM multitabla 
        WHERE mu_id<>0 and mu_tabla=?
		ORDER BY idmultitabla ASC
		LIMIT ?,?";
		EXECUTE stmt USING @MU_TABLA,@START,@LIMIT;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_listar_tabla_filtro' THEN
		PREPARE stmt FROM "
        SELECT 
			idmultitabla,
			mu_tabla,
            mu_id,
            mu_descripcion,
            mu_activo
		FROM multitabla 
		WHERE 
			mu_id=0 and
			(mu_tabla LIKE CONCAT('%',?,'%') or
            mu_descripcion LIKE CONCAT('%',?,'%'))
		ORDER BY idmultitabla
		LIMIT ?,?";
		EXECUTE stmt USING @CONSULTA,@CONSULTA,@START,@LIMIT;
		DEALLOCATE PREPARE stmt;
     END IF;
     IF ve_opcion='opc_listar_detalle_filtro' THEN
		PREPARE stmt FROM "
        SELECT 
			idmultitabla,
			mu_tabla,
            mu_id,
            mu_descripcion,
            mu_activo
		FROM multitabla 
		WHERE 
			mu_id<>0 and mu_tabla=? and
			(mu_tabla LIKE CONCAT('%',?,'%') or
            mu_descripcion LIKE CONCAT('%',?,'%'))
		ORDER BY idmultitabla
		LIMIT ?,?";
		EXECUTE stmt USING @MU_TABLA,@CONSULTA,@CONSULTA,@START,@LIMIT;
		DEALLOCATE PREPARE stmt;
     END IF; 
	IF ve_opcion='opc_contador' THEN
		SELECT 
			COUNT(*) AS total 
		FROM multitabla;
    END IF;
	IF ve_opcion='opc_contador_filtro' THEN
		SELECT COUNT(*) AS total
		FROM multitabla 
		WHERE 
			mu_tabla LIKE CONCAT('%',ve_consulta,'%');
     END IF;
	IF ve_opcion='opc_grabar_tabla' THEN
		INSERT 
		INTO multitabla(mu_tabla,mu_id,mu_descripcion,mu_activo)
		VALUES(ve_mu_tabla,ve_mu_id,ve_mu_descripcion,ve_mu_activo);
	END IF;
    IF ve_opcion='opc_grabar_detalle' THEN
		SET @id = cast((select count(*)+1 from multitabla where mu_tabla=ve_mu_tabla and mu_id!=0) as UNSIGNED);
		INSERT 
		INTO multitabla(mu_tabla,mu_id,mu_descripcion,mu_activo)
		VALUES(ve_mu_tabla,@id,ve_mu_descripcion,ve_mu_activo);
	END IF;
	IF ve_opcion='opc_actualizar' THEN
		UPDATE multitabla
		SET 
			mu_tabla=ve_mu_tabla,
            mu_id=ve_mu_id,
            mu_descripcion=ve_mu_descripcion,
            mu_activo=ve_mu_activo
		WHERE idmultitabla=ve_idmultitabla;
	END IF;
    IF ve_opcion='opc_delete' THEN
		UPDATE multitabla
		SET 
            mu_activo=0
		WHERE idmultitabla=ve_idmultitabla;
	END IF;
	IF ve_opcion='opc_obtener' THEN
		SELECT 
			idmultitabla,
			mu_tabla,
            mu_id,
            mu_descripcion,
            mu_activo
		FROM multitabla  
		WHERE idmultitabla=ve_idmultitabla;
	END IF;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure sp_perfil
-- -----------------------------------------------------

USE `mydb`;
DROP procedure IF EXISTS `sp_perfil`;
SHOW WARNINGS;

DELIMITER $$
USE `mydb`$$
CREATE DEFINER=`descubrelalibert`@`localhost` PROCEDURE `sp_perfil`(
IN `ve_opcion` VARCHAR(50), IN `ve_perfId` SMALLINT(6), IN `ve_rolId` SMALLINT(6), IN `ve_usuId` CHAR(25))
BEGIN
	IF ve_opcion='opc_listar_por_usuario' THEN
		SELECT * 
		FROM perfil
		WHERE usuId=ve_usuId;
	END IF;
     IF ve_opcion='opc_grabar' THEN
        INSERT 
		INTO perfil(rolId,usuId)
		VALUES(ve_rolId,ve_usuId);
     END IF;
	IF ve_opcion='opc_eliminar' THEN
		DELETE 
		FROM perfil 
		WHERE 
			rolId=ve_rolId AND
			usuId=ve_usuId;
	END IF;
	IF ve_opcion='opc_elimina_actuales' THEN
		DELETE 
		FROM perfil 
		WHERE 
			usuId=ve_usuId;
	END IF;
	IF ve_opcion='opc_obtener'THEN
		SELECT * 
		FROM perfil
		WHERE perfId=ve_perfId;
	END IF;
	IF ve_opcion='opc_buscar'THEN
        SELECT * 
		FROM perfil 
		WHERE 
			usuId=ve_usuId AND 
			rolId=ve_rolId;
    END IF;
IF ve_opcion='opc_buscarcount'THEN
        SELECT count(*) as total 
		FROM perfil 
		WHERE 
			usuId=ve_usuId AND 
			rolId=ve_rolId;
    END IF;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure sp_permiso
-- -----------------------------------------------------

USE `mydb`;
DROP procedure IF EXISTS `sp_permiso`;
SHOW WARNINGS;

DELIMITER $$
USE `mydb`$$
CREATE DEFINER=`descubrelalibert`@`localhost` PROCEDURE `sp_permiso`(
	ve_opcion VARCHAR(50),
	ve_permId INT(11),
	ve_menId SMALLINT(6),
	ve_rolId SMALLINT(6)
)
BEGIN
	IF ve_opcion='opc_listar_por_rol' THEN
		SELECT * 
		FROM permiso
		WHERE rolId=ve_rolId;
	END IF;
	IF ve_opcion='opc_grabar' THEN
		INSERT 
		INTO permiso(menId,rolId)
		VALUES(ve_menId,ve_rolId);
	END IF;
	IF ve_opcion='opc_obtener' THEN
		SELECT * 
		FROM permiso
		where permId=ve_permId;
	END IF;
	IF ve_opcion='opc_eliminar' THEN
		DELETE
		FROM permiso
		WHERE rolId=ve_rolId AND menId=ve_menId;
	END IF;
IF ve_opcion='opc_eliminar_por_rol' THEN
		DELETE
		FROM permiso
		WHERE rolId=ve_rolId;
	END IF;
	IF ve_opcion = 'opc_buscar' THEN
		SELECT *
		FROM permiso
		WHERE rolId=ve_rolId AND menId=ve_menId;
	END IF;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure sp_restaurante
-- -----------------------------------------------------

USE `mydb`;
DROP procedure IF EXISTS `sp_restaurante`;
SHOW WARNINGS;

DELIMITER $$
USE `mydb`$$
CREATE DEFINER=`descubrelalibert`@`localhost` PROCEDURE `sp_restaurante`(IN `ve_opcion` VARCHAR(50), IN `ve_inicio` INT(11), IN `ve_final` INT(11), IN `ve_consulta` VARCHAR(50), IN `ve_idrestaurantes` INT(11), IN `ve_iddistrito` VARCHAR(2), IN `ve_res_nombre` TEXT, IN `ve_res_especialidad` TEXT, IN `ve_res_direccion` TEXT, IN `ve_res_mapa` TEXT, IN `ve_res_activo` TINYINT(1), IN `ve_iddepartamento` VARCHAR(2), IN `ve_idprovincia` VARCHAR(2), IN `ve_res_img` VARCHAR(90))
BEGIN
	SET @START = ve_inicio;
	SET @LIMIT = ve_final; 
	SET @CONSULTA=ve_consulta;
	IF ve_opcion='opc_listar' THEN
		PREPARE stmt FROM "
		SELECT 
			r.idrestaurantes,
			r.iddepartamento,
            r.idprovincia,
			r.iddistrito,
			r.res_nombre,
			r.res_especialidad,
			r.res_direccion,
			r.res_mapa,
			r.res_activo,
            r.res_img,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM restaurantes r
		inner join departamento de on de.iddepartamento=r.iddepartamento
		inner join provincia p on p.idprovincia=r.idprovincia and p.iddepartamento=r.iddepartamento
        inner join distrito d on d.iddistrito=r.iddistrito and d.idprovincia=r.idprovincia and d.iddepartamento=r.iddepartamento
		ORDER BY r.idrestaurantes ASC
		LIMIT ?,?";
		EXECUTE stmt USING @START,@LIMIT;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_listar_numero' THEN
		PREPARE stmt FROM "
		SELECT 
			r.idrestaurantes,
			r.iddepartamento,
            r.idprovincia,
			r.iddistrito,
			r.res_nombre,
			r.res_especialidad,
			r.res_direccion,
			r.res_mapa,
			r.res_activo,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM restaurantes r
		inner join departamento de on de.iddepartamento=r.iddepartamento
		inner join provincia p on p.idprovincia=r.idprovincia and p.iddepartamento=r.iddepartamento
        inner join distrito d on d.iddistrito=r.iddistrito and d.idprovincia=r.idprovincia and d.iddepartamento=r.iddepartamento
		ORDER BY r.idrestaurantes ASC";
		EXECUTE stmt;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_filtrar' THEN
		PREPARE stmt FROM "
        SELECT 
			r.idrestaurantes,
			r.iddepartamento,
			r.idprovincia,
			r.iddistrito,
			r.res_nombre,
			r.res_especialidad,
			r.res_direccion,
			r.res_mapa,
			r.res_activo,
            r.res_img,
			d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM restaurantes r
		inner join departamento de on de.iddepartamento=r.iddepartamento
		inner join provincia p on p.idprovincia=r.idprovincia and p.iddepartamento=r.iddepartamento
		inner join distrito d on d.iddistrito=r.iddistrito and d.idprovincia=r.idprovincia and d.iddepartamento=r.iddepartamento
		WHERE (r.res_nombre LIKE CONCAT('%',?,'%') or
            cast(r.idrestaurantes as char) LIKE CONCAT('%',?,'%'))
		ORDER BY r.idrestaurantes ASC
		LIMIT ?,?";
		EXECUTE stmt USING @CONSULTA,@CONSULTA,@START,@LIMIT;
		DEALLOCATE PREPARE stmt;
     END IF;
     IF ve_opcion='opc_filtrar_numero' THEN
		PREPARE stmt FROM "
        SELECT 
			r.idrestaurantes,
			r.iddepartamento,
			r.idprovincia,
			r.iddistrito,
			r.res_nombre,
			r.res_especialidad,
			r.res_direccion,
			r.res_mapa,
			r.res_activo,
			d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM restaurantes r
		inner join departamento de on de.iddepartamento=r.iddepartamento
		inner join provincia p on p.idprovincia=r.idprovincia and p.iddepartamento=r.iddepartamento
		inner join distrito d on d.iddistrito=r.iddistrito and d.idprovincia=r.idprovincia and d.iddepartamento=r.iddepartamento
		WHERE (r.res_nombre LIKE CONCAT('%',?,'%') or
            cast(r.idrestaurantes as char) LIKE CONCAT('%',?,'%'))
		ORDER BY r.idrestaurantes ASC";
		EXECUTE stmt USING @CONSULTA,@CONSULTA;
		DEALLOCATE PREPARE stmt;
     END IF;
	IF ve_opcion='opc_grabar' THEN
		INSERT INTO `descubre_turismo`.`restaurantes`
			(`iddistrito`,
			`res_nombre`,
			`res_especialidad`,
			`res_direccion`,
			`res_mapa`,
			`res_activo`,
			`idprovincia`,
			`iddepartamento`,
            `res_img`)
			VALUES
			(ve_iddistrito,
			ve_res_nombre,
			ve_res_especialidad,
			ve_res_direccion,
			ve_res_mapa,
			ve_res_activo,
			ve_idprovincia,
			ve_iddepartamento,
            ve_res_img);
	END IF;
	IF ve_opcion='opc_actualizar' THEN
		UPDATE `descubre_turismo`.`restaurantes`
		SET
		`idrestaurantes` = ve_idrestaurantes,
		`iddistrito` = ve_iddistrito,
		`res_nombre` = ve_res_nombre,
		`res_especialidad` = ve_res_especialidad,
		`res_direccion` = ve_res_direccion,
		`res_mapa` = ve_res_mapa,
		`res_activo` = ve_res_activo,
		`idprovincia` = ve_idprovincia,
		`iddepartamento` = ve_iddepartamento,
        `res_img` = ve_res_img
		WHERE `idrestaurantes` = ve_idrestaurantes;
	END IF;
    IF ve_opcion='opc_delete' THEN
		UPDATE restaurantes
		SET 
            res_activo=0
		WHERE idrestaurantes=ve_idrestaurantes;
	END IF;
    IF ve_opcion='opc_departamento' THEN
		select iddepartamento as id,dep_pdescripcion as descripcion 
		from departamento
		order by dep_pdescripcion;
	END IF;
    IF ve_opcion='opc_provincia' THEN
		select idprovincia as id , pro_descripcion as descripcion 
		from provincia
		where iddepartamento=ve_iddepartamento
		order by pro_descripcion;
	END IF;
    IF ve_opcion='opc_distrito' THEN
		select iddistrito as id,dis_descripcion as descripcion 
		from distrito
		where iddepartamento=ve_iddepartamento and  idprovincia=ve_idprovincia
		order by dis_descripcion;
	END IF;
    IF ve_opcion='opc_listartodo' THEN
		SELECT 
			r.idrestaurantes,
			r.iddepartamento,
            r.idprovincia,
			r.iddistrito,
			r.res_nombre,
			r.res_especialidad,
			r.res_direccion,
			r.res_mapa,
			r.res_activo,
            r.res_img,
            d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento
		FROM restaurantes r
		inner join departamento de on de.iddepartamento=r.iddepartamento
		inner join provincia p on p.idprovincia=r.idprovincia and p.iddepartamento=r.iddepartamento
        inner join distrito d on d.iddistrito=r.iddistrito and d.idprovincia=r.idprovincia and d.iddepartamento=r.iddepartamento
		ORDER BY r.idrestaurantes ASC;
	END IF;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure sp_rol
-- -----------------------------------------------------

USE `mydb`;
DROP procedure IF EXISTS `sp_rol`;
SHOW WARNINGS;

DELIMITER $$
USE `mydb`$$
CREATE DEFINER=`descubrelalibert`@`localhost` PROCEDURE `sp_rol`(
ve_opcion VARCHAR(50),
	ve_inicio INT(11), 
	ve_final INT(11), 
	ve_consulta VARCHAR(50),
	ve_rolId SMALLINT(6),
	ve_rolNombre VARCHAR(50),
	ve_rolActivo CHAR(1)
)
BEGIN
	SET @START = ve_inicio; 
	SET @LIMIT = ve_final; 
	SET @CONSULTA=ve_consulta;
	IF ve_opcion='opc_listar'THEN
		SELECT 
			rolId,
			rolNombre,
			rolActivo
		FROM rol
		ORDER BY rolId ASC;
	END IF;
	IF ve_opcion='opc_listar_por_partes' THEN
		PREPARE stmt FROM "
		SELECT 
			rolId,
			rolNombre,
			rolActivo
		FROM rol
		ORDER BY rolId ASC
		LIMIT ?,?";
		EXECUTE stmt USING @START,@LIMIT;
		DEALLOCATE PREPARE stmt;
	END IF;
	IF ve_opcion='opc_contador' THEN
        SELECT COUNT(*) AS total 
		FROM rol;
    END IF;
	IF ve_opcion='opc_listar_filtro' THEN
		PREPARE stmt FROM "
		SELECT 
			rolId,
			rolNombre,
			rolActivo
		FROM rol
		WHERE rolNombre LIKE CONCAT('%',?,'%')
		ORDER BY rolId ASC
		LIMIT ?,?";
		EXECUTE stmt USING @CONSULTA,@START,@LIMIT;
		DEALLOCATE PREPARE stmt;
	END IF;
	IF ve_opcion='opc_contador_filtro' THEN
		SELECT 
			COUNT(*) AS total
		FROM rol
		WHERE rolNombre LIKE CONCAT('%',ve_consulta,'%')
		ORDER BY rolNombre ASC;
	END IF;
    IF ve_opcion='opc_insertar' THEN
		INSERT 
		INTO rol(rolNombre,rolActivo)
        VALUES(ve_rolNombre,ve_RolActivo);
	END IF;
    IF ve_opcion='opc_actualizar' THEN
        UPDATE rol 
		SET rolNombre=ve_rolNombre,rolActivo=ve_rolActivo
        WHERE rolId=ve_rolId;
	END IF;
	IF ve_opcion='opc_obtener' THEN
        SELECT 
			rolId,
			rolNombre,
			rolActivo
		FROM rol
		WHERE rolId=ve_rolId;
    END IF;
	IF ve_opcion='opc_buscar_por_nombre' THEN
		SELECT rolId,
			rolNombre,
			rolActivo
		FROM rol
		WHERE rolNombre=ve_rolNombre;
	END IF;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure sp_sturisticos
-- -----------------------------------------------------

USE `mydb`;
DROP procedure IF EXISTS `sp_sturisticos`;
SHOW WARNINGS;

DELIMITER $$
USE `mydb`$$
CREATE DEFINER=`descubrelalibert`@`localhost` PROCEDURE `sp_sturisticos`(IN `ve_opcion` VARCHAR(50), IN `ve_inicio` INT(11), IN `ve_final` INT(11), IN `ve_consulta` VARCHAR(50), IN `ve_idsturistico` INT(11), IN `ve_iddistrito` VARCHAR(2), IN `ve_stur_tipo` INT(11), IN `ve_stur_nombre` TEXT, IN `ve_stur_serviciobrindado` TEXT, IN `ve_stur_vacceso` TEXT, IN `ve_stur_transporte` TEXT, IN `ve_stur_horario` TEXT, IN `ve_stur_ingreso` TEXT, IN `ve_stur_estacionalidad` TEXT, IN `ve_stur_mapa` TEXT, IN `ve_stur_estado` INT(11), IN `ve_stur_direccion` TEXT, IN `ve_stur_recomendaciones` TEXT, IN `ve_stur_reshistorica` TEXT, IN `ve_stur_interes` TEXT, IN `ve_stur_activo` TINYINT(1), IN `ve_stur_img` VARCHAR(90), IN `ve_iddepartamento` VARCHAR(2), IN `ve_idprovincia` VARCHAR(2))
BEGIN
	SET @START = ve_inicio;
	SET @LIMIT = ve_final; 
	SET @CONSULTA=ve_consulta;
	IF ve_opcion='opc_listar' THEN
		PREPARE stmt FROM "
		SELECT 
			st.idsturistico,
            st.iddepartamento,
            st.idprovincia,
			st.iddistrito,
			st.stur_tipo,
			st.stur_nombre,
			st.stur_serviciobrindado,
			st.stur_vacceso,
			st.stur_transporte,
			st.stur_horario,
			st.stur_ingreso,
			st.stur_estacionalidad,
			st.stur_mapa,
			st.stur_estado,
			st.stur_direccion,
			st.stur_recomendaciones,
			st.stur_reshistorica,
			st.stur_interes,
			st.stur_activo,
            st.stur_img,
			d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento,
			m.mu_descripcion as subtipo,
			m1.mu_descripcion as estado
		FROM sturistico st
		inner join departamento de on de.iddepartamento= st.iddepartamento
		inner join provincia p on p.idprovincia=st.idprovincia and p.iddepartamento= st.iddepartamento
		inner join distrito d on d.iddistrito=st.iddistrito and d.idprovincia=st.idprovincia and d.iddepartamento= st.iddepartamento
		inner join multitabla m on m.mu_tabla='SUBTIPO' and m.mu_id=st.stur_tipo
		inner join multitabla m1 on m1.mu_tabla='ESTADO' and m1.mu_id=st.stur_estado
		ORDER BY st.idsturistico ASC
		LIMIT ?,?";
		EXECUTE stmt USING @START,@LIMIT;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_listar_numero' THEN
		PREPARE stmt FROM "
		SELECT 
			st.idsturistico,
            st.iddepartamento,
            st.idprovincia,
			st.iddistrito,
			st.stur_tipo,
			st.stur_nombre,
			st.stur_serviciobrindado,
			st.stur_vacceso,
			st.stur_transporte,
			st.stur_horario,
			st.stur_ingreso,
			st.stur_estacionalidad,
			st.stur_mapa,
			st.stur_estado,
			st.stur_direccion,
			st.stur_recomendaciones,
			st.stur_reshistorica,
			st.stur_interes,
			st.stur_activo,
			d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento,
			m.mu_descripcion as subtipo,
			m1.mu_descripcion as estado
		FROM sturistico st
		inner join departamento de on de.iddepartamento= st.iddepartamento
		inner join provincia p on p.idprovincia=st.idprovincia and p.iddepartamento= st.iddepartamento
		inner join distrito d on d.iddistrito=st.iddistrito and d.idprovincia=st.idprovincia and d.iddepartamento= st.iddepartamento
		inner join multitabla m on m.mu_tabla='SUBTIPO' and m.mu_id=st.stur_tipo
		inner join multitabla m1 on m1.mu_tabla='ESTADO' and m1.mu_id=st.stur_estado
		ORDER BY st.idsturistico ASC";
		EXECUTE stmt;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_filtrar' THEN
		PREPARE stmt FROM "
        SELECT 
			st.idsturistico,
			st.iddepartamento,
            st.idprovincia,
			st.iddistrito,
			st.stur_tipo,
			st.stur_nombre,
			st.stur_serviciobrindado,
			st.stur_vacceso,
			st.stur_transporte,
			st.stur_horario,
			st.stur_ingreso,
			st.stur_estacionalidad,
			st.stur_mapa,
			st.stur_estado,
			st.stur_direccion,
			st.stur_recomendaciones,
			st.stur_reshistorica,
			st.stur_interes,
			st.stur_activo,
            st.stur_img,
			d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento,
			m.mu_descripcion as subtipo,
			m1.mu_descripcion as estado
		FROM sturistico st
		inner join departamento de on de.iddepartamento= st.iddepartamento
		inner join provincia p on p.idprovincia=st.idprovincia and p.iddepartamento= st.iddepartamento
		inner join distrito d on d.iddistrito=st.iddistrito and d.idprovincia=st.idprovincia and d.iddepartamento= st.iddepartamento
		inner join multitabla m on m.mu_tabla='SUBTIPO' and m.mu_id=st.stur_tipo
		inner join multitabla m1 on m1.mu_tabla='ESTADO' and m1.mu_id=st.stur_estado 
		WHERE(st.stur_nombre LIKE CONCAT('%',?,'%') or
            cast(st.idsturistico as char) LIKE CONCAT('%',?,'%'))
		ORDER BY st.idsturistico
		LIMIT ?,?";
		EXECUTE stmt USING @CONSULTA,@CONSULTA,@START,@LIMIT;
		DEALLOCATE PREPARE stmt;
     END IF;
     IF ve_opcion='opc_filtrar_numero' THEN
		PREPARE stmt FROM "
        SELECT 
			st.idsturistico,
			st.iddepartamento,
            st.idprovincia,
			st.iddistrito,
			st.stur_tipo,
			st.stur_nombre,
			st.stur_serviciobrindado,
			st.stur_vacceso,
			st.stur_transporte,
			st.stur_horario,
			st.stur_ingreso,
			st.stur_estacionalidad,
			st.stur_mapa,
			st.stur_estado,
			st.stur_direccion,
			st.stur_recomendaciones,
			st.stur_reshistorica,
			st.stur_interes,
			st.stur_activo,
			d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento,
			m.mu_descripcion as subtipo,
			m1.mu_descripcion as estado
		FROM sturistico st
		inner join departamento de on de.iddepartamento= st.iddepartamento
		inner join provincia p on p.idprovincia=st.idprovincia and p.iddepartamento= st.iddepartamento
		inner join distrito d on d.iddistrito=st.iddistrito and d.idprovincia=st.idprovincia and d.iddepartamento= st.iddepartamento
		inner join multitabla m on m.mu_tabla='SUBTIPO' and m.mu_id=st.stur_tipo
		inner join multitabla m1 on m1.mu_tabla='ESTADO' and m1.mu_id=st.stur_estado 
		WHERE(st.stur_nombre LIKE CONCAT('%',?,'%') or
            cast(st.idsturistico as char) LIKE CONCAT('%',?,'%'))
		ORDER BY st.idsturistico";
		EXECUTE stmt USING @CONSULTA,@CONSULTA;
		DEALLOCATE PREPARE stmt;
     END IF;
     IF ve_opcion='opc_subtipo' THEN
		select mu_id as id,mu_descripcion as descripcion from multitabla
        where mu_tabla='SUBTIPO' and mu_id!=0 and mu_activo=true;
     END IF;
     IF ve_opcion='opc_estado' THEN
		select mu_id as id,mu_descripcion as descripcion from multitabla
        where mu_tabla='ESTADO' and mu_id!=0 and mu_activo=true;
     END IF;
	IF ve_opcion='opc_grabar' THEN
		INSERT INTO `descubre_turismo`.`sturistico`
				(`iddistrito`,
				`stur_tipo`,
				`stur_nombre`,
				`stur_serviciobrindado`,
				`stur_vacceso`,
				`stur_transporte`,
				`stur_horario`,
				`stur_ingreso`,
				`stur_estacionalidad`,
				`stur_mapa`,
				`stur_estado`,
				`stur_direccion`,
				`stur_recomendaciones`,
				`stur_reshistorica`,
				`stur_interes`,
				`stur_activo`,
                `idprovincia`,
                `iddepartamento`,
                `stur_img`)
				VALUES
				(ve_iddistrito,
				ve_stur_tipo,
				ve_stur_nombre,
				ve_stur_serviciobrindado,
				ve_stur_vacceso,
				ve_stur_transporte,
				ve_stur_horario,
				ve_stur_ingreso,
				ve_stur_estacionalidad,
				ve_stur_mapa,
				ve_stur_estado,
				ve_stur_direccion,
				ve_stur_recomendaciones,
				ve_stur_reshistorica,
				ve_stur_interes,
				ve_stur_activo,
                ve_idprovincia,
                ve_iddepartamento,
                ve_stur_img);
	END IF;
	IF ve_opcion='opc_actualizar' THEN
		UPDATE `descubre_turismo`.`sturistico`
			SET
			`iddistrito` = ve_iddistrito,
			`stur_tipo` = ve_stur_tipo,
			`stur_nombre` = ve_stur_nombre,
			`stur_serviciobrindado` = ve_stur_serviciobrindado,
			`stur_vacceso` = ve_stur_vacceso,
			`stur_transporte` = ve_stur_transporte,
			`stur_horario` = ve_stur_horario,
			`stur_ingreso` = ve_stur_ingreso,
			`stur_estacionalidad` = ve_stur_estacionalidad,
			`stur_mapa` = ve_stur_mapa,
			`stur_estado` = ve_stur_estado,
			`stur_direccion` = ve_stur_direccion,
			`stur_recomendaciones` = ve_stur_recomendaciones,
			`stur_reshistorica` = ve_stur_reshistorica,
			`stur_interes` = ve_stur_interes,
			`stur_activo` = ve_stur_activo,
            `idprovincia` = ve_idprovincia,
            `iddepartamento` = ve_iddepartamento,
            `stur_img` = ve_stur_img
		WHERE `idsturistico` = ve_idsturistico;
	END IF;
    IF ve_opcion='opc_delete' THEN
		UPDATE sturistico
		SET 
            stur_activo=0
		WHERE idsturistico=ve_idsturistico;
	END IF;
    IF ve_opcion='opc_departamento' THEN
		select iddepartamento as id,dep_pdescripcion as descripcion 
		from departamento
		order by dep_pdescripcion;
	END IF;
    IF ve_opcion='opc_provincia' THEN
		select idprovincia as id , pro_descripcion as descripcion 
		from provincia
		where iddepartamento=ve_iddepartamento
		order by pro_descripcion;
	END IF;
    IF ve_opcion='opc_distrito' THEN
		select iddistrito as id,dis_descripcion as descripcion 
		from distrito
		where iddepartamento=ve_iddepartamento and  idprovincia=ve_idprovincia
		order by dis_descripcion;
	END IF;
    IF ve_opcion='opc_listartodo' THEN
		SELECT 
			st.idsturistico,
            st.iddepartamento,
            st.idprovincia,
			st.iddistrito,
			st.stur_tipo,
			st.stur_nombre,
			st.stur_serviciobrindado,
			st.stur_vacceso,
			st.stur_transporte,
			st.stur_horario,
			st.stur_ingreso,
			st.stur_estacionalidad,
			st.stur_mapa,
			st.stur_estado,
			st.stur_direccion,
			st.stur_recomendaciones,
			st.stur_reshistorica,
			st.stur_interes,
			st.stur_activo,
            st.stur_img,
			d.dis_descripcion as distrito,
			p.pro_descripcion as provincia,
			de.dep_pdescripcion as departamento,
			m.mu_descripcion as subtipo,
			m1.mu_descripcion as estado
		FROM sturistico st
		inner join departamento de on de.iddepartamento= st.iddepartamento
		inner join provincia p on p.idprovincia=st.idprovincia and p.iddepartamento= st.iddepartamento
		inner join distrito d on d.iddistrito=st.iddistrito and d.idprovincia=st.idprovincia and d.iddepartamento= st.iddepartamento
		inner join multitabla m on m.mu_tabla='SUBTIPO' and m.mu_id=st.stur_tipo
		inner join multitabla m1 on m1.mu_tabla='ESTADO' and m1.mu_id=st.stur_estado
		ORDER BY st.idsturistico ASC;
	END IF;
END$$

DELIMITER ;
SHOW WARNINGS;

-- -----------------------------------------------------
-- procedure sp_usuario
-- -----------------------------------------------------

USE `mydb`;
DROP procedure IF EXISTS `sp_usuario`;
SHOW WARNINGS;

DELIMITER $$
USE `mydb`$$
CREATE DEFINER=`descubrelalibert`@`localhost` PROCEDURE `sp_usuario`(IN `ve_opcion` VARCHAR(50), 
IN `ve_inicio` INT(11), 
IN `ve_final` INT(11), 
IN `ve_consulta` VARCHAR(50), 
IN `ve_usuId` INT(11),
IN `ve_usuNombre` VARCHAR(45), 
IN `ve_usuApePaterno` VARCHAR(50),
IN `ve_usuApeMaterno` VARCHAR(50),   
IN `ve_usuUsuario` VARCHAR(45), 
IN `ve_usuClave` VARCHAR(60), 
IN `ve_usuEstado` BIT(1))
BEGIN
	SET @START = ve_inicio;
	SET @LIMIT = ve_final; 
	SET @CONSULTA=ve_consulta;
	IF ve_opcion='opc_listar' THEN
		PREPARE stmt FROM "
		SELECT 
			usuId,
			usuNombre,
            usuApePaterno,
            usuApeMaterno,
            usuUsuario,
			usuClave,
			usuEstado
		FROM usuario 
		ORDER BY usuId ASC
		LIMIT ?,?";
		EXECUTE stmt USING @START,@LIMIT;
		DEALLOCATE PREPARE stmt;
	END IF;
    IF ve_opcion='opc_listar_filtro' THEN
		PREPARE stmt FROM "
        SELECT 
			usuId,
            usuNombre,
            usuApePaterno,
            usuApeMaterno,
			usuUsuario,
			usuClave,
			usuEstado
		FROM usuario 
		WHERE 
			usuUsuario LIKE CONCAT('%',?,'%') or 
            usuNombre LIKE CONCAT('%',ve_consulta,'%') or
            usuApePaterno LIKE CONCAT('%',ve_consulta,'%') or
            usuApeMaterno LIKE CONCAT('%',ve_consulta,'%')
		ORDER BY usuUsuario
		LIMIT ?,?";
		EXECUTE stmt USING @CONSULTA,@START,@LIMIT;
		DEALLOCATE PREPARE stmt;
     END IF; 
	IF ve_opcion='opc_contador' THEN
		SELECT 
			COUNT(*) AS total 
		FROM usuario;
    END IF;
	IF ve_opcion='opc_contador_filtro' THEN
		SELECT COUNT(*) AS total
		FROM usuario 
		WHERE 
			usuUsuario LIKE CONCAT('%',ve_consulta,'%') or 
            usuNombre LIKE CONCAT('%',ve_consulta,'%') or
            usuApePaterno LIKE CONCAT('%',ve_consulta,'%') or
            usuApeMaterno LIKE CONCAT('%',ve_consulta,'%');
     END IF;
	IF ve_opcion='opc_grabar' THEN
		INSERT 
		INTO usuario(usuNombre,usuApePaterno,usuApeMaterno,usuUsuario,usuClave,usuEstado)
		VALUES(ve_usuNombre,ve_usuApePaterno,ve_usuApeMaterno,ve_usuUsuario,ve_usuClave,1);
	END IF;
	IF ve_opcion='opc_actualizar' THEN
		UPDATE usuario
		SET 
			usuNombre=ve_usuNombre,
            usuApePaterno=ve_usuApePaterno,
            usuApeMaterno=ve_usuApeMaterno,
			usuUsuario=ve_usuUsuario,
			usuClave=ve_usuClave,
			usuEstado = ve_usuEstado
		WHERE usuId=ve_usuId;
	END IF;
	IF ve_opcion='opc_obtener' THEN
		SELECT 
			usuId,
            usuNombre,
            usuApePaterno,
            usuApeMaterno,
			usuUsuario,
			usuClave,
			usuEstado
		FROM usuario 
		WHERE usuId=ve_usuId;
	END IF;
	if ve_opcion='opc_buscar_por_usuario' THEN
		SELECT 
			usuId,
			usuNombre,
            usuApePaterno,
            usuApeMaterno,
            usuUsuario,
			usuClave,
			usuEstado
		FROM usuario 
		WHERE usuUsuario=ve_usuUsuario;
	END IF;
	IF ve_opcion='opc_buscar_por_usuario_clave' THEN
		SELECT 
			usuId,
			usuNombre,
            usuApePaterno,
            usuApeMaterno
            usuUsuario,
			usuClave,
			usuEstado
		FROM usuario 
		WHERE 
			usuUsuario=ve_usuUsuario AND
			usuClave=ve_usuClave AND
			usuEstado=1;
	END IF;
	IF ve_opcion='opc_listar_menu' THEN
		SELECT DISTINCT 
			men.menId,
			men.menPadreId,
			men.menNombre,
			men.menOrden,
			men.menDescripcion,
			men.menDraggable,
			men.menHidden
		FROM usuario usu
		JOIN perfil perf
			ON usu.usuId=perf.usuId
		JOIN rol rol
			ON rol.rolId=perf.rolId
		JOIN permiso perm
			ON perm.rolId=rol.rolId
		JOIN menu  men
			ON men.menId=perm.menId
		WHERE usu.usuId=ve_usuId AND
				rol.rolActivo=1
		ORDER BY men.menPadreId,men.menNombre ASC;
	END IF;
    IF ve_opcion='opc_listar_menu_por_nombre' THEN
        SELECT * 
		FROM menu 
		ORDER BY menNombre;
    END IF;
	IF ve_opcion='opc_login_respuesta' THEN
		SET @RESTRINGIDO = (SELECT COUNT(*) FROM usuario usu 
			WHERE 
				usu.usuUsuario = ve_usuUsuario AND
				usu.usuEstado=0);
		IF @RESTRINGIDO>0 THEN
			SELECT 'Usuario Restringido' AS 'respuesta';
		ELSE
			SET @CORRECTO = (SELECT COUNT(*) 
			FROM  usuario usu 
			WHERE 
				usu.usuUsuario = ve_usuUsuario AND
				usu.usuClave = ve_usuClave AND
				usu.usuEstado=1);
			IF @CORRECTO>0 THEN
				SELECT '1' AS 'respuesta';
			ELSE
				SELECT 'Usuario o clave incorrectos' AS 'respuesta';
			END IF;
		END IF;
	END IF;
	IF ve_opcion='opc_login_listar' THEN
			SELECT 
				usu.usuUsuario AS usuUsuario,
				usu.usuId AS usuId
			FROM usuario usu
			WHERE 
				usu.usuUsuario = ve_usuUsuario AND
				usu.usuClave = ve_usuClave AND
				usu.usuEstado=1;
	END IF;
END$$

DELIMITER ;
SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
