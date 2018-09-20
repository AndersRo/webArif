-- MySQL Script generated by MySQL Workbench
-- Thu Sep 20 16:52:04 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema web_gps
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema web_gps
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `web_gps` DEFAULT CHARACTER SET latin1 ;
USE `web_gps` ;

-- -----------------------------------------------------
-- Table `web_gps`.`empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`empresa` (
  `IdEmpresa` INT(11) NOT NULL,
  `RUC` CHAR(11) NULL DEFAULT NULL,
  `RazonSocial` VARCHAR(100) NULL DEFAULT NULL,
  `NombreComercial` VARCHAR(100) NULL DEFAULT NULL,
  `RutaLogo` VARCHAR(250) NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  `Representante` VARCHAR(80) NULL DEFAULT NULL,
  PRIMARY KEY (`IdEmpresa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`actor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`actor` (
  `IdActor` INT(11) NOT NULL,
  `TipoPersona` CHAR(6) NULL DEFAULT NULL,
  `Apellido_Paterno` VARCHAR(80) NULL DEFAULT NULL,
  `Apellido_Materno` VARCHAR(80) NULL DEFAULT NULL,
  `PrimerNombre` VARCHAR(80) NULL DEFAULT NULL,
  `SegundoNombre` VARCHAR(80) NULL DEFAULT NULL,
  `RazonSocial` VARCHAR(100) NULL DEFAULT NULL,
  `TipoDocumento` CHAR(6) NULL DEFAULT NULL,
  `CodigoIdentificacion` VARCHAR(15) NULL DEFAULT NULL,
  `RUC` CHAR(11) NULL DEFAULT NULL,
  `IdEmpresa` INT(11) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`IdActor`),
  INDEX `R_22` (`IdEmpresa` ASC),
  CONSTRAINT `R_22`
    FOREIGN KEY (`IdEmpresa`)
    REFERENCES `web_gps`.`empresa` (`IdEmpresa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`cliente` (
  `IdCliente` INT(11) NOT NULL,
  `IdActor` INT(11) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`IdCliente`),
  INDEX `R_14` (`IdActor` ASC),
  CONSTRAINT `R_14`
    FOREIGN KEY (`IdActor`)
    REFERENCES `web_gps`.`actor` (`IdActor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`accesosplataforma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`accesosplataforma` (
  `IdCliente` INT(11) NULL DEFAULT NULL,
  `IdAcceso` INT(11) NOT NULL,
  `FlgAccesoApp` CHAR(1) NULL DEFAULT NULL,
  `FlgAccesoWeb` CHAR(1) NULL DEFAULT NULL,
  `IdEmpresa` INT(11) NULL DEFAULT NULL,
  `MaxConexiones` INT(11) NULL DEFAULT NULL,
  `LoginAcceso` VARCHAR(30) NULL DEFAULT NULL,
  `ContrasnaPlataforma` VARCHAR(30) NULL DEFAULT NULL,
  `ContrasenaComados` VARCHAR(30) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  `EstadoAcceso` CHAR(18) NULL DEFAULT NULL,
  PRIMARY KEY (`IdAcceso`),
  INDEX `R_34` (`IdCliente` ASC),
  INDEX `R_38` (`IdEmpresa` ASC),
  CONSTRAINT `R_34`
    FOREIGN KEY (`IdCliente`)
    REFERENCES `web_gps`.`cliente` (`IdCliente`),
  CONSTRAINT `R_38`
    FOREIGN KEY (`IdEmpresa`)
    REFERENCES `web_gps`.`empresa` (`IdEmpresa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`vehiculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`vehiculo` (
  `IdVehiculo` INT(11) NOT NULL,
  `Placa` VARCHAR(15) NULL DEFAULT NULL,
  `Chasis` VARCHAR(50) NULL DEFAULT NULL,
  `Motor` VARCHAR(50) NULL DEFAULT NULL,
  `Modelo` VARCHAR(100) NULL DEFAULT NULL,
  `Color` VARCHAR(100) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  `RutaReferencia` CHAR(18) NULL DEFAULT NULL,
  `RutaTarjeta` CHAR(18) NULL DEFAULT NULL,
  `IdEmpresa` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdVehiculo`),
  INDEX `R_29` (`IdEmpresa` ASC),
  CONSTRAINT `R_29`
    FOREIGN KEY (`IdEmpresa`)
    REFERENCES `web_gps`.`empresa` (`IdEmpresa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`contrato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`contrato` (
  `IdContrato` INT(11) NOT NULL,
  `CodTipoServicio` CHAR(6) NULL DEFAULT NULL,
  `FechaInicio` DATETIME NULL DEFAULT NULL,
  `FechaFin` DATETIME NULL DEFAULT NULL,
  `IdCliente` INT(11) NULL DEFAULT NULL,
  `CodTipoContrato` CHAR(6) NULL DEFAULT NULL,
  `IdEmpresa` INT(11) NULL DEFAULT NULL,
  `IdVehiculo` INT(11) NULL DEFAULT NULL,
  `EstadoContrato` CHAR(6) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`IdContrato`),
  INDEX `R_26` (`IdCliente` ASC),
  INDEX `R_28` (`IdEmpresa` ASC),
  INDEX `R_31` (`IdVehiculo` ASC),
  CONSTRAINT `R_26`
    FOREIGN KEY (`IdCliente`)
    REFERENCES `web_gps`.`cliente` (`IdCliente`),
  CONSTRAINT `R_28`
    FOREIGN KEY (`IdEmpresa`)
    REFERENCES `web_gps`.`empresa` (`IdEmpresa`),
  CONSTRAINT `R_31`
    FOREIGN KEY (`IdVehiculo`)
    REFERENCES `web_gps`.`vehiculo` (`IdVehiculo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`accesoplataformadetalle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`accesoplataformadetalle` (
  `IdAccesoDetalle` INT(11) NOT NULL,
  `IdAcceso` INT(11) NULL DEFAULT NULL,
  `IdContrato` INT(11) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`IdAccesoDetalle`),
  INDEX `R_36` (`IdAcceso` ASC),
  INDEX `R_39` (`IdContrato` ASC),
  CONSTRAINT `R_36`
    FOREIGN KEY (`IdAcceso`)
    REFERENCES `web_gps`.`accesosplataforma` (`IdAcceso`),
  CONSTRAINT `R_39`
    FOREIGN KEY (`IdContrato`)
    REFERENCES `web_gps`.`contrato` (`IdContrato`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`accesoplataformacomandos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`accesoplataformacomandos` (
  `IdAccesoDetalle` INT(11) NULL DEFAULT NULL,
  `IdAccesoComandos` INT(11) NOT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`IdAccesoComandos`),
  INDEX `R_40` (`IdAccesoDetalle` ASC),
  CONSTRAINT `R_40`
    FOREIGN KEY (`IdAccesoDetalle`)
    REFERENCES `web_gps`.`accesoplataformadetalle` (`IdAccesoDetalle`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`marca` (
  `IdMarca` INT(11) NOT NULL,
  `Descripcion` VARCHAR(100) NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`IdMarca`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`modelo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`modelo` (
  `IdModelo` INT(11) NOT NULL,
  `Descripcion` VARCHAR(100) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  `FotoReferencial` VARCHAR(250) NULL DEFAULT NULL,
  `IdMarca` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdModelo`),
  INDEX `R_2` (`IdMarca` ASC),
  CONSTRAINT `R_2`
    FOREIGN KEY (`IdMarca`)
    REFERENCES `web_gps`.`marca` (`IdMarca`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`comandos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`comandos` (
  `IdComandos` INT(11) NOT NULL,
  `CodTipoComandos` CHAR(6) NULL DEFAULT NULL,
  `Comandos` VARCHAR(50) NULL DEFAULT NULL,
  `IdModelo` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdComandos`),
  INDEX `R_37` (`IdModelo` ASC),
  CONSTRAINT `R_37`
    FOREIGN KEY (`IdModelo`)
    REFERENCES `web_gps`.`modelo` (`IdModelo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`contrato_anexo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`contrato_anexo` (
  `IdContratoAnexo` INT(11) NOT NULL,
  `IdContrato` INT(11) NULL DEFAULT NULL,
  `CodDocumentoAnexo` CHAR(6) NULL DEFAULT NULL,
  `RutaDocumento` VARCHAR(250) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`IdContratoAnexo`),
  INDEX `R_30` (`IdContrato` ASC),
  CONSTRAINT `R_30`
    FOREIGN KEY (`IdContrato`)
    REFERENCES `web_gps`.`contrato` (`IdContrato`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`mecanico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`mecanico` (
  `IdActor` INT(11) NULL DEFAULT NULL,
  `IdMecanico` INT(11) NOT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`IdMecanico`),
  INDEX `R_15` (`IdActor` ASC),
  CONSTRAINT `R_15`
    FOREIGN KEY (`IdActor`)
    REFERENCES `web_gps`.`actor` (`IdActor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`taller`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`taller` (
  `IdTaller` INT(11) NOT NULL,
  `Descripcion` VARCHAR(80) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`IdTaller`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`ordentrabajo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`ordentrabajo` (
  `IdOrden` INT(11) NOT NULL,
  `IdEmpresa` INT(11) NULL DEFAULT NULL,
  `IdMecanico` INT(11) NULL DEFAULT NULL,
  `IdCliente` INT(11) NULL DEFAULT NULL,
  `IdVehiculo` INT(11) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  `EstadoOrden` CHAR(6) NULL DEFAULT NULL,
  `Obsvacion` VARCHAR(250) NULL DEFAULT NULL,
  `FechaRegistro` DATETIME NULL DEFAULT NULL,
  `FechaProgramada` DATETIME NULL DEFAULT NULL,
  `FechaEjecutada` DATETIME NULL DEFAULT NULL,
  `IdTaller` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdOrden`),
  INDEX `R_17` (`IdEmpresa` ASC),
  INDEX `R_19` (`IdMecanico` ASC),
  INDEX `R_21` (`IdCliente` ASC),
  INDEX `R_24` (`IdVehiculo` ASC),
  INDEX `R_41` (`IdTaller` ASC),
  CONSTRAINT `R_17`
    FOREIGN KEY (`IdEmpresa`)
    REFERENCES `web_gps`.`empresa` (`IdEmpresa`),
  CONSTRAINT `R_19`
    FOREIGN KEY (`IdMecanico`)
    REFERENCES `web_gps`.`mecanico` (`IdMecanico`),
  CONSTRAINT `R_21`
    FOREIGN KEY (`IdCliente`)
    REFERENCES `web_gps`.`cliente` (`IdCliente`),
  CONSTRAINT `R_24`
    FOREIGN KEY (`IdVehiculo`)
    REFERENCES `web_gps`.`vehiculo` (`IdVehiculo`),
  CONSTRAINT `R_41`
    FOREIGN KEY (`IdTaller`)
    REFERENCES `web_gps`.`taller` (`IdTaller`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`contrato_ordenes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`contrato_ordenes` (
  `IdContratoOrdenes` INT(11) NOT NULL,
  `IdContrato` INT(11) NULL DEFAULT NULL,
  `IdOrden` INT(11) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`IdContratoOrdenes`),
  INDEX `R_32` (`IdContrato` ASC),
  INDEX `R_33` (`IdOrden` ASC),
  CONSTRAINT `R_32`
    FOREIGN KEY (`IdContrato`)
    REFERENCES `web_gps`.`contrato` (`IdContrato`),
  CONSTRAINT `R_33`
    FOREIGN KEY (`IdOrden`)
    REFERENCES `web_gps`.`ordentrabajo` (`IdOrden`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`dispositivos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`dispositivos` (
  `IdDispositivo` INT(11) NOT NULL,
  `Serie` VARCHAR(100) NULL DEFAULT NULL,
  `IMEI` VARCHAR(100) NULL DEFAULT NULL,
  `IdModelo` INT(11) NULL DEFAULT NULL,
  `NroSim` VARCHAR(15) NULL DEFAULT NULL,
  `NroIDN` VARCHAR(50) NULL DEFAULT NULL,
  `IdEmpresa` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdDispositivo`),
  INDEX `R_7` (`IdModelo` ASC),
  INDEX `R_16` (`IdEmpresa` ASC),
  CONSTRAINT `R_16`
    FOREIGN KEY (`IdEmpresa`)
    REFERENCES `web_gps`.`empresa` (`IdEmpresa`),
  CONSTRAINT `R_7`
    FOREIGN KEY (`IdModelo`)
    REFERENCES `web_gps`.`modelo` (`IdModelo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`opciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`opciones` (
  `IdOpciones` CHAR(18) NOT NULL,
  `IdParent` CHAR(18) NULL DEFAULT NULL,
  `Nombre` CHAR(18) NULL DEFAULT NULL,
  `Ruta` CHAR(18) NULL DEFAULT NULL,
  `Icono` CHAR(18) NULL DEFAULT NULL,
  PRIMARY KEY (`IdOpciones`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`ordentrabajo_detalle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`ordentrabajo_detalle` (
  `IdOrdenDetalle` CHAR(18) NOT NULL,
  `IdOrden` INT(11) NULL DEFAULT NULL,
  `IdDispositivo` INT(11) NULL DEFAULT NULL,
  `CodTipoTrabajo` CHAR(6) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  `FechaInicio` DATETIME NULL DEFAULT NULL,
  `FechaFin` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`IdOrdenDetalle`),
  INDEX `R_8` (`IdOrden` ASC),
  INDEX `R_10` (`IdDispositivo` ASC),
  CONSTRAINT `R_10`
    FOREIGN KEY (`IdDispositivo`)
    REFERENCES `web_gps`.`dispositivos` (`IdDispositivo`),
  CONSTRAINT `R_8`
    FOREIGN KEY (`IdOrden`)
    REFERENCES `web_gps`.`ordentrabajo` (`IdOrden`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`tablas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`tablas` (
  `IdTabla` CHAR(3) NOT NULL,
  `Descripcion` VARCHAR(30) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`IdTabla`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`tablas_detalle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`tablas_detalle` (
  `IdTablaDetalle` CHAR(6) NOT NULL,
  `IdTabla` CHAR(3) NULL DEFAULT NULL,
  `Descripcion` VARCHAR(200) NULL DEFAULT NULL,
  `FchCrea` DATETIME NULL DEFAULT NULL,
  `UsrCrea` VARCHAR(30) NULL DEFAULT NULL,
  `WksCrea` VARCHAR(30) NULL DEFAULT NULL,
  `FchMod` DATETIME NULL DEFAULT NULL,
  `UsrMod` VARCHAR(30) NULL DEFAULT NULL,
  `WksMod` VARCHAR(30) NULL DEFAULT NULL,
  `FlgEli` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`IdTablaDetalle`),
  INDEX `R_23` (`IdTabla` ASC),
  CONSTRAINT `R_23`
    FOREIGN KEY (`IdTabla`)
    REFERENCES `web_gps`.`tablas` (`IdTabla`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`users` (
  `id` INT(11) NOT NULL,
  `login` VARCHAR(30) NULL DEFAULT NULL,
  `password` VARCHAR(255) NULL DEFAULT NULL,
  `createt_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  `IdEmpresa` INT(11) NULL DEFAULT NULL,
  `IdActor` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `R_42` (`IdEmpresa` ASC),
  INDEX `R_43` (`IdActor` ASC),
  CONSTRAINT `R_42`
    FOREIGN KEY (`IdEmpresa`)
    REFERENCES `web_gps`.`empresa` (`IdEmpresa`),
  CONSTRAINT `R_43`
    FOREIGN KEY (`IdActor`)
    REFERENCES `web_gps`.`actor` (`IdActor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`usuarioempresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`usuarioempresa` (
  `IdUsuarioEmpresa` CHAR(18) NOT NULL,
  `id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdUsuarioEmpresa`),
  INDEX `R_44` (`id` ASC),
  CONSTRAINT `R_44`
    FOREIGN KEY (`id`)
    REFERENCES `web_gps`.`users` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `web_gps`.`usuarioopciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `web_gps`.`usuarioopciones` (
  `IdUsuarioOpciones` CHAR(18) NOT NULL,
  `IdOpciones` CHAR(18) NULL DEFAULT NULL,
  `id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdUsuarioOpciones`),
  INDEX `R_45` (`IdOpciones` ASC),
  INDEX `R_46` (`id` ASC),
  CONSTRAINT `R_45`
    FOREIGN KEY (`IdOpciones`)
    REFERENCES `web_gps`.`opciones` (`IdOpciones`),
  CONSTRAINT `R_46`
    FOREIGN KEY (`id`)
    REFERENCES `web_gps`.`users` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
