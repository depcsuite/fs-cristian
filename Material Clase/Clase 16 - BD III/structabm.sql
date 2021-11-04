-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.20-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla abmventas.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL DEFAULT '0',
  `apellido` varchar(100) NOT NULL DEFAULT '0',
  `cuit` int(11) NOT NULL DEFAULT 0,
  `telefono` int(11) NOT NULL DEFAULT 0,
  `correo` varchar(200) NOT NULL DEFAULT '0',
  `fecha_nac` date DEFAULT NULL,
  `fk_iddomicilio` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla abmventas.cliente: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla abmventas.domicilio
CREATE TABLE IF NOT EXISTS `domicilio` (
  `iddomicilio` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(100) DEFAULT NULL,
  `altura` int(11) DEFAULT NULL,
  `piso` int(11) DEFAULT NULL,
  `letra` char(1) DEFAULT NULL,
  `fk_idlocalidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddomicilio`),
  KEY `FK__localidad` (`fk_idlocalidad`),
  CONSTRAINT `FK__localidad` FOREIGN KEY (`fk_idlocalidad`) REFERENCES `localidad` (`idlocalidad`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla abmventas.domicilio: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `domicilio` DISABLE KEYS */;
/*!40000 ALTER TABLE `domicilio` ENABLE KEYS */;

-- Volcando estructura para tabla abmventas.localidad
CREATE TABLE IF NOT EXISTS `localidad` (
  `idlocalidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL DEFAULT '0',
  `fk_idprovincia` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idlocalidad`),
  KEY `FK_localidad_provincia` (`fk_idprovincia`),
  CONSTRAINT `FK_localidad_provincia` FOREIGN KEY (`fk_idprovincia`) REFERENCES `provincia` (`idprovincia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla abmventas.localidad: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `localidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `localidad` ENABLE KEYS */;

-- Volcando estructura para tabla abmventas.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `cantidad` int(11) DEFAULT NULL,
  `precio` decimal(20,6) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fk_idtipoproducto` int(11) DEFAULT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `FK_producto_tipoproducto` (`fk_idtipoproducto`),
  CONSTRAINT `FK_producto_tipoproducto` FOREIGN KEY (`fk_idtipoproducto`) REFERENCES `tipoproducto` (`idtipoproducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla abmventas.producto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla abmventas.provincia
CREATE TABLE IF NOT EXISTS `provincia` (
  `idprovincia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` int(11) DEFAULT NULL,
  PRIMARY KEY (`idprovincia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla abmventas.provincia: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `provincia` DISABLE KEYS */;
/*!40000 ALTER TABLE `provincia` ENABLE KEYS */;

-- Volcando estructura para tabla abmventas.tipoproducto
CREATE TABLE IF NOT EXISTS `tipoproducto` (
  `idtipoproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idtipoproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla abmventas.tipoproducto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tipoproducto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipoproducto` ENABLE KEYS */;

-- Volcando estructura para tabla abmventas.venta
CREATE TABLE IF NOT EXISTS `venta` (
  `idventa` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `cantidad` int(11) NOT NULL DEFAULT 0,
  `preciounitario` decimal(20,6) NOT NULL DEFAULT 0.000000,
  `total` decimal(20,6) NOT NULL DEFAULT 0.000000,
  `fk_idcliente` int(11) NOT NULL DEFAULT 0,
  `fk_idproducto` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idventa`),
  KEY `FK__cliente` (`fk_idcliente`),
  KEY `FK__producto` (`fk_idproducto`),
  CONSTRAINT `FK__cliente` FOREIGN KEY (`fk_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK__producto` FOREIGN KEY (`fk_idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla abmventas.venta: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
